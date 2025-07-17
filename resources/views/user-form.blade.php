<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
    <h1>Add new User</h1>

    <form action="addUser" method="post">
        @csrf
        <div>
            <input type="text"  name="username" id="username" placeholder="Enter Username">
        </div>
        <div>
            <input type="text" name="email" id="email" placeholder="Enter email">
        </div>
        <div>
            <input type="radio" id="male" name="gender" value="Male">
            <label for="male">Male</label>
            <input type="radio" id="female" name="gender" value="Female">
            <label for="female">Female</label>
        </div>
        <div>
            <input type="checkbox" id="bike" name="vehicle[]" value="Bike">
            <label for="bike"> I have a bike</label>
            <input type="checkbox" id="car" name="vehicle[]" value="Car">
            <label for="car"> I have a car</label>
            <input type="checkbox" id="boat" name="vehicle[]" value="Boat">
            <label for="boat"> I have a boat</label>
        </div>
        <div>
            <select name="city" id="city">
                <option value="Ahmedabad">Ahmedabad</option>
                <option value="Delhi">Delhi</option>
                <option value="Mumbai">Mumbai</option>
            </select>
        </div>
        <div>
            <button type="submit">Submit</button>
        </div>
    </form>
    <a href="/">Back</a>
</body>
</html>