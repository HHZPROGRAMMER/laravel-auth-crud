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
    <title>Malumotlar</title>
</head>
<body>
    

    <table border="1" cellspacing="0" cellpadding="10">
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
                    <button><a href="{{ route('edit', $informations->id) }}">Edit</a></button>
                    <button><a href="{{ route('index') }}">Back</a></button>
                    <form action="{{ route('destroy', $informations->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Haqiqatdan ham ochirmoqchimisiz!!!')">
                            Delete
                        </button>
                </td>
            </tr>
        </tbody>
    </table>



</body>
</html>


</body>
</html>