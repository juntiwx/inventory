<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/js/app.js')
    @inertiaHead
</head>
<body class="font-nunito text-base text-black dark:text-white dark:bg-slate-900">
@inertia


<script src="https://cdn.jsdelivr.net/npm/tiny-slider@2.9.3/dist/tiny-slider.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.3/tiny-slider.css">
<!-- JAVASCRIPTS -->
@vite([
    'resources/libs/feather-icons/feather.min.js',
    'resources/js/plugins.init.js',
    'resources/js/app-script.js'
])
<!-- JAVASCRIPTS -->
</body>
</html>
