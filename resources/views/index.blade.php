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
            @foreach($informations as $information)
            <tr>
                <td>{{ $information->id }}</td>
                <td>{{ $information->name }}</td>
                <td>{{ $information->language }}</td>
                <td>{{ $information->phonenumber }}</td>
                <td>{{ $information->email }}</td>
                <td>
                    <button>Edit</button>
                    <button>Show</button>
                    <button>Delete</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>



</body>
</html>