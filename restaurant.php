<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Restaurant Details</title>
</head>
<body>
<!--bootstrap css-->
<link rel="stylesheet" href="css">
<h1>Restaurant Details</h1>

<form method="post" action="save-restaurant.php">
    <fieldset>
        <label for="name" class="col-md-1">Name: </label>
        <input name="name" id="name" />
    </fieldset>
    <fieldset>
        <label for="address" class="col-md-1">Address: </label>
        <textarea name="address" id="address"></textarea>
    </fieldset>
    <fieldset>
        <label for="phone" class="col-md-1">Phone: </label>
        <input name="phone" id="phone" />
    </fieldset>
    <fieldset>
        <label for="restaurantType" class="col-md-1">Type:</label>
        <select name="restaurantType" id="restaurantType">

            <?php
//             connect data
            $db = new PDO('mysql:host=local host';dbname='barrieEats','root','')
//             set a query
//             fetch all the restaurant
//             loop through and creat a new option tag for each typr
//             disconnet
                ?>
        </select>
    </fieldset>
    <button class="col-md-offset-1 btn btn-primary">Save</button>
</form>
</body>
</html>