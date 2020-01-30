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
        <table>
            <tr>
                <td>Roll No.</td>
                <td><input type="text" class="form-control"name="roll"></td>
            </tr>
            <tr>
                <td></td>
                <td><button class="btn btn-success" name="getvalue">edit</button></td>
            </tr>
        </table>
</form>
</body>
</html>
<?php

if(isset($_GET["getvalue"]))
{
  $roll=$_GET["roll"];
    $ServerName="localhost";
    $DbUserName="root";
    $DbPassword="";
    $DBName="mydb";
    $connection=new mysqli($ServerName,$DbUserName,$DbPassword,$DBName);
    $sql="SELECT  `name`, `rollno`, `college` FROM `student` WHERE `rollno`=$roll";
    $result=$connection->query($sql);
    if($result->num_rows>0)
    {
while($row=$result->fetch_assoc())
{
  $name1=$row["name"];
  $roll1=$row["rollno"];
  $college1=$row["college"];
  echo "<table class='table'><tr><td>Name</td><td><input type='text'class='form-control' value=$name1></td></tr>
  <tr><td>roll</td><td><input class='form-control' type='text' value=$roll1></td></tr>
  <tr><td>COLLEGE</td><td><input type='text'class='form-control' value=$college1></td></tr>
  </table>";
}
}
else
{
  echo"invalid admno";
}
}
?>