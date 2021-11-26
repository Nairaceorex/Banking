<?php 
$conn = new mysqli("localhost", "root", "root", "banking");
if($conn->connect_error){
    die("Ошибка: " . $conn->connect_error);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <br>
    <br>
    
    <?php
    include('templates/nav.php');
    /*include ("dbconntent.php");
    
    $result2 = $mysqli->query ('SELECT * FROM `resource`');
echo $mysqli->error;
    while ($result = mysqli_fetch_array($result2))
    {
      echo "
  
    <tr>
      <th scope='row'> <input type='text' name='Title' class='form-control' id='Title' value='{$result['Title']}'' required></th>
      <td><input type='text' name='Class' class='form-control' id='Class' value='{$result['Class']}'' required></td>
      <td><input type='text' name='Quantity' class='form-control' id='Quantity' value='{$result['Quantity']}'' required></td>
      <td><input type='text' name='Price' class='form-control' id='Price' value='{$result['Price']}'' required></td>
    </tr>
    
  ";
    }
    if (isset($_POST["title"]) && isset($_POST["Class"]) && isset($_POST["Quantity"]) && isset($_POST["Price"]))
    {
      $title = $result2->real_escape_string($_POST["Title"]);
      $class = $result2->real_escape_string($_POST["Class"]);
      $quantity = $result2->real_escape_string($_POST["Quantity"]);
      $price = $result2->real_escape_string($_POST["Price"]);

      $sql = "UPDATE resource SET Title = '$title', Class = '$class', Quantity = '$quantity', Price = '$price' WHERE Id = '$userid'";
    if($result = $conn->query($sql)){
        header("Location: index.php");
    } else{
        echo "Ошибка: " . $conn->error;
    }
    }
*/
    if($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET["Id"]))
{
    $userid = $conn->real_escape_string($_GET["Id"]);
    $sql = "SELECT * FROM resource WHERE Id = '$userid'";
    if($result = $conn->query($sql)){
        if($result->num_rows > 0){
            foreach($result as $row){
                $title = $row["Title"];
                $class = $row["Class"];
                $quantity = $row["Quantity"];
                $price = $row["Price"];
            }
            echo "<h3>Обновление ресурса</h3>
                <form method='post'>
                    <input type='hidden' name='Id' value='$userid' />
                    <p>Название:
                    <input type='text' name='title' value='$title' /></p>
                    <p>Тип:
                    <input type='text' name='class' value='$class' /></p>
                    <p>Кол-во:
                    <input type='text' name='quantity' value='$quantity' /></p>
                    <p>Тип:
                    <input type='text' name='price' value='$price' /></p>
                    <input type='submit' value='Сохранить'>
            </form>";
        }
        else{
            echo "<div>Пользователь не найден</div>";
        }
        $result->free();
    } else{
        echo "Ошибка: " . $conn->error;
    }
}
elseif (isset($_POST["Id"]) && isset($_POST["title"]) && isset($_POST["class"]) && isset($_POST["quantity"])&& isset($_POST["price"])) {
      
    $userid = $conn->real_escape_string($_POST["Id"]);
    $title = $conn->real_escape_string($_POST["title"]);
    $class = $conn->real_escape_string($_POST["class"]);
    $quantity = $conn->real_escape_string($_POST["quantity"]);
    $price = $conn->real_escape_string($_POST["price"]);

    
    $sql = "UPDATE resource SET Title = '$title', Class = '$class' , Quantity = '$quantity', Price = '$price' WHERE Id = '$userid'";
    if($result = $conn->query($sql)){
        echo "<a href='report.php'>Ресурс</a> успешно обновлён!";
    } else{
        echo "Ошибка: " . $conn->error;
    }
}
else{
    echo "Некорректные данные";
}
$conn->close();
    ?>
</body>
</html>