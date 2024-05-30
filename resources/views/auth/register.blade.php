<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="./dist/styles.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <style>
        .login {
            background: url('./dist/images/login-new.jpeg')
        }

    </style>
    <title>Register</title>
</head>
<body class="h-screen font-sans login bg-cover">
    <div class="container mx-auto h-full flex flex-1 justify-center items-center">
        <div class="w-full max-w-lg">
            <div class="leading-loose">
                <form method="POST" action="{{ route('register') }}" class="max-w-xl m-4 p-10 bg-white rounded shadow-xl">
                    @csrf

                    <p class="text-gray-800 font-medium">{{ __('Register') }}</p>
                    <div class="">
                        <label class="block text-sm text-gray-00" for="name">{{ __('Name') }}</label>

                        <div class="col-md-6">
                            <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="mt-2">
                        <label class="block text-sm text-gray-600" for="email">{{ __('Email Address') }}</label>
                        <div class="col-md-6">
                            <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="">
                        <label class="block text-sm text-gray-00" for="password">{{ __('Password') }}</label>
                        <div class="col-md-6">
                            <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="">
                        <label class="block text-sm text-gray-00" for="password-confirm">{{ __('Confirm Password') }}</label>
                        <div class="col-md-6">
                            <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>
                    </div>

                    <div class="mt-4">
                        <button type="submit" class="btn btn-primary px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded">
                            {{ __('Register') }}
                        </button>
                    </div>
                    <a class="inline-block right-0 align-baseline font-bold text-sm text-500 hover:text-blue-800" href="{{ route('login') }}">{{ __(' Already have an account ?') }}</a>
                </form>
            </div>
        </div>
    </div>

</body>
</html>
