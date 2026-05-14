<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Malumotlar</title>
    <script src=https://cdn.tailwindcss.com></script>
</head>
<body class="bg-yellow-200">

    <div class="flex justify m-5 bg-blue-600 p-3 rounded-lg w-[5%]">
        <button><a href="{{ route('create') }}">Create</a></button>
    </div>
    

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
                @foreach($informations as $information)
                <tr>
                    <td>{{ $information->id }}</td>
                    <td>{{ $information->name }}</td>
                    <td>{{ $information->language }}</td>
                    <td>{{ $information->phonenumber }}</td>
                    <td>{{ $information->email }}</td>
                    <td>
    
                        <div class="flex flex-row gap-2">
    
                            <div class="btns bg-green-200 p-2 rounded-lg w-[20%]">
                                <button><a href="{{ route('show', $information->id) }}">Show</a></button>
                            </div>
                            <div class="btns bg-blue-200 p-2 rounded-lg w-[20%]">
                                <button><a href="{{ route('edit', $information->id) }}">Edit</a></button>
                            </div>
                            <div class="flex gap-2 btns bg-red-200 p-2 rounded-lg w-[20%]">
                                <form action="{{ route('destroy', $information->id) }}" method="POST">
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
                @endforeach
            </tbody>
        </table>
    </div>



</body>
</html>