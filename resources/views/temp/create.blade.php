<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>User Create:</h1>
    <form action="{{$isEdit ? route('user.update',$user->id) : route('user.store')}}" method="post">
        @csrf
        <input type="text" name="name" placeholder="Name" value="{{$isEdit ? $user->name : old('name')}}" >
        {{$errors->first('name')}}
        <input type="text" name="email" placeholder="Email" value="{{$isEdit ? $user->email : old('email')}}" >
        {{$errors->first('email')}}
        <input type="submit" value="Submit">
    </form>
</body>
</html>
