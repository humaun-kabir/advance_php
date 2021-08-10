<?php
    //create variable for connection
    $dsn = "mysql:host=localhost; dbname=test_db";
    $db_user = "root";
    $db_password = "";

    // create connection with exeption handling
    try{
        $conn = new PDO($dsn, $db_user, $db_password);

        //set error mode
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "connected";
    }catch(PDOException $e){
        echo "connection failed". $e->getMessage();
    }

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title> retrieve data</title>
  </head>
  <body>
      <div class="container">
          <?php
                $sql = "SELECT * FROM student";
                $result = $conn->query($sql);
                if($result->rowCount() > 0){
                    echo '<table class="table">';
                    echo "<thead>";
                    echo "<tr>";
                        echo "<th>ID<th>";
                        echo "<th>Name<th>";
                        echo "<th>Roll<th>";
                        echo "<th>Address<th>";
                    echo "</tr>";
                    echo "</thead>";

                    echo "<tbody>";
                    while($row = $result->fetch(PDO::FETCH_ASSOC)){
                        echo "<tr>";
                        echo "<td>" . $row["id"] . "<td>";
                        echo "<td>" . $row["name"] . "<td>";
                        echo "<td>" . $row["roll"] . "<td>";
                        echo "<td>" . $row["address"] . "<td>";
                        echo "</tr>";
                    }
                    echo "</tbody>";
                    echo "</table>";
                }else{
                    echo "0 results";
                }
          ?>
      </div>
      <?php $conn = null; ?>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>