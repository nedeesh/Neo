<!DOCTYPE html>
<html lang="en">
<head>
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
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="GET">
<table class="table">
    <tr>
        <td>
            name
        </td>
        <td>
            <input type="text" class="form-control" name="getName">
        </td>
    </tr>
    <tr>
        <td>
            roll number
        </td>
        <td>
            <input type="text" class="form-control" name="getRoll">
        </td>
    </tr>
    <tr>
        <td>
            college
        </td>
        <td>
            <input type="text" class="form-control" name="getCollege">
        </td>
    </tr>
    <tr>
        <td>
            Admission no.
        </td>
        <td>
            <input type="text" class="form-control" name="getAdmno">
        </td>
    </tr>
    <tr>
        <td></td>
        <td>
            <button class="btn btn-danger" type="Submit" name="getSubmit">submit</button>
        </td>
    </tr>
</table>   
</form> 

</body>
</html>
<?php
if(isset($_GET["getSubmit"]))
{
    $name=$_GET["getName"];
    $roll=$_GET["getRoll"];
    $college=$_GET["getCollege"];
    $admno=$_GET["getAdmno"];
    $ServerName="localhost";
    $DbUserName="root";
    $DbPassword="";
    $DBName="mydb";
    $connection=new mysqli($ServerName,$DbUserName,$DbPassword,$DBName);
    $sql="INSERT INTO `student`( `name`, `rollno`, `admissiono`, `college`) VALUES ('$name',$roll,$admno,'$college')";
    $result=$connection->query($sql);
    if($result===TRUE)
    {
        echo"successfull";
    }
    else
    {
        echo $connection->error;
    }
}
?>