<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body class="bg-yellow-200">

    <div class="flex items-center justify-center h-screen bg-yellow-200">
        <form action="{{ route('loginForm') }}" method="POST" class="bg-white p-8 rounded shadow-md w-96  border-8   border-gray-300">
            @csrf
            <input type="text" name="email" placeholder="Emailingizni kiriting"><br><br>
            <input type="password" name="password" placeholder="Parolingizni kiriting"><br><br>
            <input class="btns border-4 bg-green-500" type="submit" value="Login">
            <a href="{{ route('register') }}" class="bg-green-500 border-4 btns">Register</a>
        </form>
    </div>
    


</body>
</html>