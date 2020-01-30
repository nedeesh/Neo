<!DOCTYPE html>
<html lang="en">
<head> 
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-primary navbar-dark">
        <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Student Entry</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="search.php">Search</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="edit.php">Edit</a>
            </li>
        
          </ul>
        </nav>
        <form method="GET">
    <table class="table">
<tr>
    <td>Student Admission Number</td>
    <td><input type="text" search="form-control" name="adm1"></td>
</tr>
<tr>
    <td></td>
    <td><button type="text" class="btn btn-success" name="getvalue">search</button></td>
</tr>
    </table>
</form>
</body>
</html>
<?php

if(isset($_GET["getvalue"]))
{
  $adm=$_GET["adm1"];
    $ServerName="localhost";
    $DbUserName="root";
    $DbPassword="";
    $DBName="mydb";
    $connection=new mysqli($ServerName,$DbUserName,$DbPassword,$DBName);
    $sql="SELECT  `name`, `rollno`, `college` FROM `student` WHERE `admissiono`=$adm";
    $result=$connection->query($sql);
    if($result->num_rows>0)
    {
while($row=$result->fetch_assoc())
{
  $name1=$row["name"];
  $roll1=$row["rollno"];
  $college1=$row["college"];
  echo "<table class='table'><tr><td>Name</td><td>$name1</td></tr>
  <tr><td>roll</td><td>$roll1</td></tr>
  <tr><td>COLLEGE</td><td>$college1</td></tr>
  </table>";
}
    }
    else
    {
      echo"invalid admno";
    }
}
?>
