<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500&display=swap"
        rel="stylesheet">
    <title>Pemberitahuan</title>
    <link rel="shortcut icon" href="{{ asset('images/logo/favicon.ico') }}">
</head>
<body style="font-family: 'Plus Jakarta Sans','sans-serif';">
    <section class="h-screen flex justify-center items-center">
        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
            <div class="mx-auto max-w-screen-sm text-center">                 
                <h1 class="mb-4 text-7xl tracking-tight font-extrabold lg:text-9xl text-primary-blue">Tutup</h1>
                <p class="mb-4 text-3xl tracking-tight font-bold text-gray-900 md:text-4xl dark:text-white">Pendaftaran Ditutup.</p>
                <p class="mb-4 text-lg font-light text-gray-500 dark:text-gray-400">Mohon Maaf, pendaftaran ditutup dikarenakan kuota sudah habis (1000++).</p>
            </div>   
        </div>
    </section>
    @vite('resources/js/app.js')
</body>
</html>