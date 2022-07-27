<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pantry Example</title>
</head>
<body>
    <h1>Example - Add drinks to your database</h1>
    <form action="webpage-example.php">
        <label for="fname">Name of the drink:</label><br>
        <input type="text" id="name" name="name"><br>
        <label for="fname">Is it alcoholic?</label><br>
        <input type="text" id="alcohol" name="alcohol"><br><br>
        <input type="submit" value="Submit">
    </form>

    <br><br>
    
    <?php
    require_once "pantry.php";

    if(isset($_GET["name"])){
        $drink = $_GET['name'];
        $alcohol = $_GET['alcohol'];
        update_basket("drinks",[$drink => $alcohol]);
        echo "$drink was added to the database ($alcohol)";
        
        $database_drinks = get_basket("drinks");
        $drinks_list = "<br><br>Here's the list of drinks in the database:<br>";
        foreach ($database_drinks as $key => $value){
            $drinks_list .= "• $key → $value<br>";
        }
        echo $drinks_list;
    }

    ?>
</body>
</html>