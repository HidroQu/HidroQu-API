<!doctype html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HidroQu - Reset Password</title>

    <link href="https://fonts.bunny.net" rel="preconnect">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700,800&display=swap" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="w-full antialiased bg-base-100 text-base-content">
    <main class="min-h-screen mx-4 mt-8 max-w-2xl lg:mx-auto">
        <img class="w-24 mx-auto py-4" src="{{ asset('logo-circle.svg') }}" alt="HidroQu Logo">

        @session('message')
            <p class="font-medium text-lg">{{ session('message') }}</p>
        @endsession

        <div class="card bg-white mt-4">
            <div class="card-body">
                <form action="{{ request()->getUri() }}" method="post">
                    @csrf
                    <input name="token" type="hidden" value="{{ $request->get('token') }}">

                    <div>
                        <label class="label label-text" for="email">{{ __('Email') }}</label>

                        <input class="input input-bordered w-full" id="email" name="email" type="email" value="{{ $request->get('email') }}" readonly/>

                        <x-input-error class="mt-2" :messages="$errors->get('email')" />
                    </div>

                    <div class="mt-4">
                        <label class="label label-text" for="password">{{ __('Password') }}</label>

                        <input class="input input-bordered w-full" id="password" name="password" type="password"
                               required autocomplete="new-password" />

                        <x-input-error class="mt-2" :messages="$errors->get('password')" />
                    </div>

                    <div class="mt-4">
                        <label class="label label-text"
                               for="password_confirmation">{{ __('Confirm Password') }}</label>

                        <input class="input input-bordered w-full" id="password_confirmation"
                               name="password_confirmation" type="password" required autocomplete="new-password" />

                        <x-input-error class="mt-2" :messages="$errors->get('password_confirmation')" />
                    </div>

                    <div class="mt-4 flex items-center justify-end">
                        <button class="btn btn-primary btn-block" type="submit">
                            {{ __('Reset Password') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </main>

    <footer class="footer footer-center bg-base-100 text-base-content p-4">
        <aside>
            <p>Copyright &copy; 2024 - All right reserved by HidroQu</p>
        </aside>
    </footer>
</body>
</html>