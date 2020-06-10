
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

  <title>MissionED Admin</title>
</head>

<body>

<!------------------------------------------------------------SESION------------------------------------------->

<?php
    session_start();

    if(isset($_SESSION['User'])){
        echo ' <font size="5">Well Come  ' . $_SESSION['User'].'<br/>  </font>';
        echo '<a href="logout.php?logout"><button type="submit" class="btn btn-danger">Logout</button></a>';
    }else{
        header("location:index.php");
    }

?>
<!------------------------------------------------------------SESION------------------------------------------->

</body>

</html>
