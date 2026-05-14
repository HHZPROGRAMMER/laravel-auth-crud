<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show</title>
</head>
<body>
    

    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Malumotlar</title>
</head>
<body class="bg-yellow-200">
    

<div class="container mx-auto px-4 py-8">
    <table class="min-w-full divide-y divide-gray-200 shadow-sm rounded-lg overflow-hidden">
        <thead>
            <tr>
                <th>#</th>
                <th>name</th>
                <th>language</th>
                <th>phonenumber</th>
                <th>email</th>
                <th>Edit, show, Delete buttuns</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td>{{ $informations->id }}</td>
                <td>{{ $informations->name }}</td>
                <td>{{ $informations->language }}</td>
                <td>{{ $informations->phonenumber }}</td>
                <td>{{ $informations->email }}</td>
                <td>
                    <div class="flex flex-row gap-2">
                        <div class="btns bg-green-200 p-2 rounded-lg w-[30%]">
                            <button><a href="{{ route('edit', $informations->id) }}">Edit</a></button>
                        </div>
                        <div class="btns bg-blue-200 p-2 rounded-lg w-[30%]">
                            <button><a href="{{ route('index') }}">Back</a></button>
                        </div>
                        <div class="flex gap-2 btns bg-red-200 p-2 rounded-lg w-[30%]">
                            <form action="{{ route('destroy', $informations->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Haqiqatdan ham ochirmoqchimisiz!!!')">
                                    Delete
                                </button>
                            </form>
                        </div>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</div>



</body>
</html>


</body>
</html>