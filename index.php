<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Images</title>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="./style.css" />
</head>
<body>
    <div class="container">
      <?php
      include_once("connect.php");
      $query = "SELECT * FROM Images";
      $result = mysqli_query($conn, $query);
      if($result->num_rows>0){
        while($row = mysqli_fetch_array($result)){
          $name = $row["image_name"];
          $fileName = $row["file_name"];
          $imageUrl = "./uploads/".$fileName;
          echo "<div class='profile mt-4'>";
          echo "<img src='$imageUrl' alt=''>";
          echo "<h3>$name</h3>";
          echo "</div>";
        }
      }
      ?>
    </div>
</body>
</html>