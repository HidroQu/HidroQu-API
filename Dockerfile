FROM php:8.3-fpm-alpine

# Install system dependencies
RUN apk add --no-cache \
    icu-dev \
    git \
    curl \
    libxml2-dev \
    libzip-dev \
    libintl \
    libpng-dev \
    oniguruma-dev \
    zip \
    unzip \
    caddy \
    nodejs \
    npm

# Install PHP extensions
RUN docker-php-ext-install mbstring zip pdo pdo_mysql intl

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Setup workdir
RUN mkdir -p /var/www/html
WORKDIR /var/www/html
COPY . .

# Install application dependencies
RUN composer install --prefer-dist --no-dev
RUN npm install
RUN npm run build

# Clean up unused dependencies
RUN apk del nodejs npm
RUN rm -fr node_modules

# Laravel optimizations
RUN php artisan key:generate
RUN php artisan optimize
RUN php artisan storage:link
RUN php artisan filament:optimize
RUN php artisan icons:cache

# Set permissions for the web server
RUN chown -R www-data:www-data /var/www/html

# Attach user root to grant permissions
USER root

# Setup PHP-FPM config settings (max_children / max_requests)
RUN echo 'pm.max_children = 128' >> /usr/local/etc/php-fpm.d/zz-docker.conf && \
    echo 'pm.start_servers = 25' >> /usr/local/etc/php-fpm.d/zz-docker.conf && \
    echo 'pm.min_spare_servers = 25' >> /usr/local/etc/php-fpm.d/zz-docker.conf && \
    echo 'pm.max_spare_servers = 50' >> /usr/local/etc/php-fpm.d/zz-docker.conf && \
    echo 'pm.max_requests = 500' >> /usr/local/etc/php-fpm.d/zz-docker.conf

# Add Caddyfile
COPY Caddyfile /etc/caddy/Caddyfile

# Expose port for PHP-FPM and Caddy
EXPOSE 9000 3000

# Run the PHP-FPM and Caddy
CMD ["sh", "-c", "php-fpm -y /usr/local/etc/php-fpm.conf -R & caddy run --config /etc/caddy/Caddyfile"]
