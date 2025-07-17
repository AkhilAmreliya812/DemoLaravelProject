<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Demo</title>
</head>
<body>
    <h1>Laravel demo project</h1>
    <a href="/userHome">Home</a>

    <h3>Input Form Demo</h3>
    <a href="user-form">User Form</a>

    <h3>Named route demo</h3>
    <a href="{{ route('showName', 'Akhil') }}">Go to Profile</a>

    <h3>About</h3>
    <a href="/about/Akhil">About</a>

    <h4>Add Student</h4>
    <a href="{{ route('addStudent')}}">Add Stdent</a>

    <h4>Update Student</h4>
    <a href="{{ route('editStudent')}}">Edit Stdent</a>

    <h4>Delete Student</h4>
    <a href="{{ route('deleteStudent')}}">Delete Stdent</a>
</body>
</html>