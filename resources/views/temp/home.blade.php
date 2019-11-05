<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Users</h1>
    @if(session('message'))
        <p class="alert alert-success">{{session('message')}}</p>
    @endif
    <table>
        <thead>
            <th>
                Name:
            </th>
            <th>
                Email:
            </th>
            <th>
                Edit
            </th>
            <th>
                Delete
            </th>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td><a href="{{route('user.edit',$user->id)}}">Edit</a></td>
                <td><a href="{{route('user.delete',$user->id)}}">DELETE</a></td>
            </tr>
            @endforeach

        </tbody>
    </table>
    <h1>ADMIN: </h1>
    <table>
        <thead>
            <th>
                Name:
            </th>
            <th>
                Email:
            </th>

        </thead>
        <tbody>
            @foreach($admin as $item)
            <tr>
                <td>{{$item->name}}</td>
                <td>{{$item->email}}</td>

            </tr>
            @endforeach

        </tbody>
    </table>
</body>
</html>
