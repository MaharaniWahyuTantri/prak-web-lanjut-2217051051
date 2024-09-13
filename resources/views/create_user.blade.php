<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Ini Halaman Create User</h1>
    <form action="{{ route(name: 'user.store') }}" method="post">
        @csrf
        <label for="nama">Name : </label><br>
        <input type="text" id="nama" name="nama" value="Tantri"><br>
        <label for="nama">NPM : </label><br>
        <input type="text" id="npm" name="npm" value="2217051051"><br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
