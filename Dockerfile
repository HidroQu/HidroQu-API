FROM php:8.3-fpm

# Install system dependencies
RUN apt-get update && apt-get install -y \
    build-essential \
    git \
    curl \
    libxml2-dev \
    libzip-dev \
    libonig-dev \
    zip \
    unzip \
    gnupg \
    apt-transport-https \
    ca-certificates

# Install Caddy
RUN curl -1sLf 'https://dl.cloudsmith.io/public/caddy/stable/gpg.key' | gpg --dearmor -o /usr/share/keyrings/caddy-stable-archive-keyring.gpg \
    && curl -1sLf 'https://dl.cloudsmith.io/public/caddy/stable/debian.deb.txt' | tee /etc/apt/sources.list.d/caddy-stable.list
RUN apt-get update
RUN apt-get install -y caddy

# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Install PHP extensions
RUN docker-php-ext-install mbstring zip pdo pdo_mysql intl

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Setup workdir
RUN mkdir -p /var/www/html
WORKDIR /var/www/html
COPY . .

# Intsall application
RUN composer install --prefer-dist --no-dev
RUN php artisan optimize

# Set permissions for the web server
RUN chown -R www-data:www-data /var/www/html

# Attach user root to grant permissions
USER root

# SETUP PHP-FPM CONFIG SETTINGS (max_children / max_requests)
RUN echo 'pm.max_children = 128' >> /usr/local/etc/php-fpm.d/zz-docker.conf && \
    echo 'pm.start_servers = 25' >> /usr/local/etc/php-fpm.d/zz-docker.conf && \
    echo 'pm.min_spare_servers = 25' >> /usr/local/etc/php-fpm.d/zz-docker.conf && \
    echo 'pm.max_spare_servers = 50' >> /usr/local/etc/php-fpm.d/zz-docker.conf && \
    echo 'pm.max_requests = 500' >> /usr/local/etc/php-fpm.d/zz-docker.conf

# Add Caddyfile
COPY Caddyfile /etc/caddy/Caddyfile

# Expose port for PHP-FPM and Caddy
EXPOSE 9000 3000

CMD ["sh", "-c", "php-fpm -y /usr/local/etc/php-fpm.conf -R & caddy run --config /etc/caddy/Caddyfile"]

