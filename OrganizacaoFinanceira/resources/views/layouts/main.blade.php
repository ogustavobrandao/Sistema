<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <!-- Latest compiled and minified CSS -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body{
            background-color: #212529;
            color: #000;
            
            
            
        }
        
        h1{
            text-align:center;
        }
    </style>
    <title>@yield('title')</title>
</head>
<body>

@yield('content')
    <footer class="text-center text-lg-start">
        
    <p>Organização Pessoal &copy; 2023</p>


    </footer>
</body>
</html>