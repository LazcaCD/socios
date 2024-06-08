<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form method="post" action="{{ route('usuario.login') }}">
    @csrf
    <input type="text" placeholder="nombre ususario" name="usuario"><br><br>
    <input type="text" placeholder="password" name="password"><br><br>
    <input type="submit" value="enviar"  >

</form>

</body>
</html>