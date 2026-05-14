<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Informatsiya yaratish</title>
</head>
<body class="bg-yellow-200">
    

<div class="container mx-auto px-4 py-8">
    <form action="{{ route('update', $informations->id) }}" method="POST">
        @csrf
        <div class="flex flex-col gap-4 w-[50%] bg-blue-900 p-4 rounded-lg shadow-sm">
            <input type="text" name='name' placeholder="Ismingizni kiriting" value="{{ $informations->name }}"><br><br>
            <input type="text"name='language' placeholder="Tilni kiriting" value="{{ $informations->language }}"><br><br>
            <input type="text" name='phonenumber' placeholder="Telefon raqamingizni kiriting" value="{{ $informations->phonenumber }}"><br><br>
            <input type="text" name='email' placeholder="Emailingizni kiriting" value="{{ $informations->email }}"><br><br>
            <div class="flex gap-2 bg-green-200 p-2 rounded-lg w-[30%]">
                <input type="submit" value=Submit>
            </div>
        </div>
    </form>
</div>


</body>
</html>