<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="img/logo.svg" type="">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/input.css') }}" rel="stylesheet">
    <title>@yield('title')</title>
</head>

<body>
    <div class="wrapper">
        @yield('content')
    </div>
    <script src="node_modules/@material-tailwind/html/scripts/collapse.js"></script>

    <!-- from cdn -->
    <script src="https://unpkg.com/@material-tailwind/html@latest/scripts/collapse.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#closeBtn').on('click', function() {
                $('#alert').fadeOut(400, function() {
                    $(this).remove(); // Удаляем блок после завершения анимации
                });
            });
        });
    </script>
    <script>
        const confirmPasswordInput = document.getElementById('password_confirmation');
        const confirmEyeIcon = document.getElementById('confirmEyeIcon');
        const toggleConfirmPasswordButton = document.getElementById('toggleConfirmPassword');

        toggleConfirmPasswordButton.addEventListener('click', function() {
            if (confirmPasswordInput.type === 'password') {
                confirmPasswordInput.type = 'text';
                confirmEyeIcon.src = 'img/icon/eye-off.svg';
            } else {
                confirmPasswordInput.type = 'password';
                confirmEyeIcon.src = 'img/icon/eye.svg';
            }
        });
    </script>
    <script src="{{ asset('js/drop.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/hammer.js/2.0.8/hammer.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/micro-slider@1.0.9/dist/micro-slider.min.js"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    <script>
        const passwordInput = document.getElementById('password');
        const passwordEyeIcon = document.getElementById('passwordEyeIcon');
        const togglePasswordButton = document.getElementById('togglePassword');

        togglePasswordButton.addEventListener('click', function() {
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                passwordEyeIcon.src = '/img/icon/eye-off.svg';
            } else {
                passwordInput.type = 'password';
                passwordEyeIcon.src = '/img/icon/eye.svg';
            }
        });
    </script>

</body>

</html>
