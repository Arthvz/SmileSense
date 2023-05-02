<!DOCTYPE html>
<html data-theme="cupcake" lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Log-in | Smile Sense - O seu sistema</title>
  <!-- LINK FAVICON -->
  <link rel="icon" type="image/x-icon" href="/images/favicon/favicon.ico">

  <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
  <script type="module" src="./js/markers.js"></script>

  <!-- LINK STYLES -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@1,800&display=swap" rel="stylesheet">
  @vite('resources/css/app.css')
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet"> 
</head>
<body>
    <div class="flex w-auto sm:my-12 md:my-64 md:mx-52 lg:my-80 lg:mx-56">
        <a href="{{route('logPac')}}"><img src="/images/pacientes.png" alt="Card - Paciente" class="opacity-50 hover:opacity-100"/></a>
        <div class="divider lg:divider-horizontal">OU</div> 
        <a href="{{route('logCli')}}"><img src="/images/clinicas.png" alt="Card - Clínica/Empresa" class="opacity-50 hover:opacity-100"/></a>
    </div>
    <a href="{{route('home')}}" class="text-xl shadow-xl shadow-neutral-600 underline decoration-2  hover:underline-offset-4 hover:decoration-4 font-extrabold leading-6 text-blueSS-300/80">Home</a>
</body>
</html>