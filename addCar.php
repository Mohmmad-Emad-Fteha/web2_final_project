<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="addCar2.php" method="post" enctype="multipart/form-data">

        <label for="car_photo">Car Photo</label><br>
        <input type="file" name="car_photo" id="car_photo"><br><br>

        <label for="car_name">Car Name</label><br>
        <input type="text" name="car_name" id="car_name"><br><br>

        <label for="model_year">Model Year</label><br>
        <input type="number" name="model_year" id="model_year"><br><br>

        <label for="color">Car Color</label><br>
        <select name="car_color" id="color"><br>
            <option value="red">red</option>
            <option value="black">black</option>
            <option value="green">green</option>
            <option value="yellow">yellow</option>
            <option value="white">white</option>
            <option value="blue">blue</option>
        </select><br><br>

        <label for="price">Car Price For 1 Day ($)</label><br>
        <input type="text" name="price"><br><br>

        <input type="submit" value="Add Car">
        </form>
</body>
</html>

