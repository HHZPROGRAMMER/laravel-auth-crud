<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Informatsiya yaratish</title>
</head>
<body>
    

    <form action="{{ route('store') }}" method="POST">
        @csrf
        <input type="text" name='name' placeholder="Ismingizni kiriting"><br><br>
        <input type="text"name='language' placeholder="Tilni kiriting"><br><br>
        <input type="text" name='phonenumber' placeholder="Telefon raqamingizni kiriting"><br><br>
        <input type="text" name='email' placeholder="Emailingizni kiriting"><br><br>
        <input type="submit" value=Submit>
    </form>


</body>
</html>