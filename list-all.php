<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./css/first.css">
    <script src="https://kit.fontawesome.com/d4cbcb96c8.js" crossorigin="anonymous"></script>
    <script src="./js/first03.js" defer></script>
</head>
<body>
<?php
    include "includes/tools.php";
    include "includes/persons.php"; 
?>
<table class="table table-dark table-striped">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Age</th>
        <th>Country Of Origin</th>
      </tr>
    </thead>
    <tbody>
    <!--   <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr> -->
      <?php writeFilteredPersons("all", $persons); //writeAllPersons(); ?>
    </tbody>
  </table>
  <div>
  <?php /*prettyPrint($_POST); */?>

<?php /*echo print_r($_POST); */?>

Welcome <?php echo $_POST["fName"]; ?>!<br>


Your first name is: <?php echo $_POST["fName"]; ?><br>
Your last name is: <?php echo $_POST["lName"]; ?><br>
Your age is: <?php echo $_POST["age"]; ?><br>
Your country of origin: <?php echo $_POST["country"]; ?><br>
  </div>
</body>
</html>