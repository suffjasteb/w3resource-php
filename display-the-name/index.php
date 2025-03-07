<!DOCTYPE html>
<html lang="en">
<head>
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>

<!-- php -S localhost:8000 -->
<!-- Development Server (http://localhost:8000) -->

    <!-- HTML form with POST method -->
    <form method="POST">
        <h2>Please Input Your Name:</h2>
        <input type="text" name="name">
        <!-- Submit Btn -->
        <input type="submit" value="Submit Name">
    </form>
<?php 

// Check if the form is submitted and 'name' is set in $_POST
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['name'])) {

    // kalo name ada di set di POST kita masukin ke variable name
    $name = $_POST['name'];

    echo "<h3> hallo $name </h3>";
}

?>

</body>
</html>