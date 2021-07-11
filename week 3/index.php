<?php 
// connect to the database
$conn = mysqli_connect('localhost', 'Miracle', '@Side1', 'todo_list');
//if connection fails echo an error
if(!$conn) {
    echo mysqli_connect_error;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
if (isset($_POST["add"])) {
    $item = mysqli_real_escape_string($conn, $_POST["add_item_field"]);
    $sql = "INSERT INTO todo_list_items(item) VALUE ('$item')";
    mysqli_query($conn, $sql);
}

if (isset($_POST['delete'])) {
    $delete_id = mysqli_real_escape_string($conn, $_POST['id_to_delete']);
    $sql = "DELETE FROM todo_list_items WHERE id=$delete_id";
    mysqli_query($conn, $sql);
}
 ?>

<?php
    $sql = 'SELECT * FROM todo_list_items ORDER BY `time`';
    $result = mysqli_query($conn, $sql);
    $item_list = mysqli_fetch_all($result, MYSQLI_ASSOC);
    mysqli_free_result($result);
    ?>
    <h1>ToDo List</h1>
<div id="wrapper">
<div>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" id="add-form">
<input type="text" name="add_item_field" id="add-field"> <input type="submit" value="+" name="add" title="add item">
</form>
</div>
   
   <?php foreach($item_list as $item) { ?>
    <div class="item"> <?php echo htmlspecialchars($item['item']);?> 
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" class="inner"> 
    <input type="hidden" name="id_to_delete" value="<?php echo $item['id']?>">
    <input type="submit" value="-" name="delete" title="remove item">
    </form></div>
   <?php } ?>
   </div>
    
</body>
</html>