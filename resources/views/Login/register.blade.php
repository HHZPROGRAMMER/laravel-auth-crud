<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Ro'yxatdan o'tish</title>
</head>
<body class="bg-yellow-200">

    <div class="flex items-center justify-center h-screen">
        <form action="{{ route('registerForm') }}" method="POST" class="bg-white p-8 rounded-lg shadow-md w-96 border-4 border-gray-300">
            @csrf
            
            <h2 class="text-2xl font-bold text-center text-gray-700 mb-6">Ro'yxatdan o'tish</h2>

            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-600 mb-1">Ismingiz</label>
                <input type="text" name="name" value="{{ old('name') }}" placeholder="Ismingizni kiriting" 
                       class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-400 @error('name') border-red-500 @enderror">
                @error('name')
                    <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-600 mb-1">Email manzilingiz</label>
                <input type="text" name="email" value="{{ old('email') }}" placeholder="Emailingizni kiriting" 
                       class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-400 @error('email') border-red-500 @enderror">
                @error('email')
                    <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-600 mb-1">Parol</label>
                <input type="password" name="password" placeholder="Parolingizni kiriting" 
                       class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-400 @error('password') border-red-500 @enderror">
                @error('password')
                    <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-6">
                <label class="block text-sm font-medium text-gray-600 mb-1">Parolni tasdiqlash</label>
                <input type="password" name="password_confirmation" placeholder="Parolni qayta kiriting" 
                       class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-400">
            </div>

            <div class="flex items-center justify-between gap-4">
                <button type="submit" class="w-1/2 bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded transition duration-200">
                    Yuborish
                </button>
                <a href="{{ route('login') }}" class="w-1/2 text-center bg-gray-500 hover:bg-gray-600 text-white font-bold py-2 px-4 rounded transition duration-200">
                    Login
                </a>
            </div>
        </form>
    </div>

</body>
</html>