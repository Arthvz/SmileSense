<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- LINK FAVICON -->
  <link rel="icon" type="image/x-icon" href="/images/favicon.ico">
   <!--@vite('resources/css/app.css') -->
  <!-- LINK STYLES -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@1,800&display=swap" rel="stylesheet">
  <link rel="shortcut icon" href="/SmileSense/logo.jfif" type="image/x-icon">
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet"> 
  
    <title>Tela Consulta</title>
</head>
<body>

</html><!-- component -->
<!-- Header -->
<header>
   <body class="bg-blue-200">
   function conexaoPDO(){	
		#Iniciando conexão com banco de dados
		$pdo = new PDO ('mysql:dbname=TCc','root', 'password=Ju04102005');
		$pdo->setattribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
		return $pdo;
	}
   <!-- component -->
<div class="flex flex-col">
    <div class="overflow-x-auto sm:mx-0.5 lg:mx-0.5">
    <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
    <div class="overflow-hidden">
    <table class="min-w-full">
    <thead class="bg-white border-b Mt-40">
    <tr>
    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
    Procedimentos Realizados 
    </th>
    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
    Procedimentos Atuais
    </th>
    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
    Agendamentos
    </th>
    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
    <button>function buscarTodasEditoras(){	
		$pdo = conexaoPDO();
		$stmt = $pdo->prepare("select * from Consulta;");
		$stmt->execute();
		$pdo = null;
		return $stmt;</button>
    }
    </th>
    
    
    </tr>
    </thead>
    <tbody>
    <tr class="bg-gray-100 border-b">
    <td class="px-6 py-4 whitespace-nowrap text-sm font-med