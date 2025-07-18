<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Employee</title>
    <style>
        .error{
            color:red
        }
    </style>
</head>
<body>
    <h3>Add Employee</h3>

    {{-- @if($errors->any())
        <div style="color: red;">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        
    @endif --}}

    <form action="{{ route('storeEmployee') }}" method="POST">
        @csrf
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" value="{{ old('name') }}">
        <span class="error">@error('name'){{ $message }}@enderror</span>
        <br><br>

        <label for="email">Email:</label>
        <input type="text" name="email" id="email" value="{{ old('email') }}">
        <span class="error">@error('email'){{ $message }}@enderror</span>
        <br><br>
        <button type="submit">Add Employee</button>
</body>
</html>