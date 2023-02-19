<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php
  include "connect.php"; 
 
 $id=rand();
$rollno = $_POST["rollno"];
$first = $_POST["firstname"];
$last = $_POST["lastname"];
$bran = $_POST["branch"];

$year = $_POST["year"];
$email = $_POST["email"];

  
$query = " INSERT INTO  sahithi_table('Id','First Name','Last Name','Branch','Year',Email') vALUES ($id,'$rollno','$first','$last','$bran','$year','$email')";
$connection= mysqli_connect( 'localhost','root','','sahithi');
$query_run = mysqli_query($connection,$query);
  if($query_run)
  {
    echo "data inserted";
  }
 else {
    echo "data not inserted";
  }

$sql="SELECT*FROM sahithi_table";
$query_sql = mysqli_query($connection,$sql);
$count=mysqli_num_rows($query_sql);
echo $count;


echo "Data Feteched successfully\n";?>

<table class ="table">
<tr>
<th>Id</th>
<th>RollNO</th>
<th>First Name</th>
<th>Last Name</th>
<th>Branch</th>
<th>Year</th>
<th>Email</th>
</tr>
<?php
if($count>=0){
    while($row=mysqli_fetch_assoc($query_run))
   { ?>
    
      <tr>
          <td><?php echo $row["Id"]  ;?> </td>
          <td><?php echo $row["RollNo"]  ;?></td>
          <td><?php echo $row["First Name"]  ;?></td>
          <td><?php echo $row["Last Name"]  ;?></td>
          <td><?php echo $row["Branch"]  ;?></td>
          <td><?php echo $row["Year"]  ;?></td>
          <td><?php echo $row["Email"]  ;?></td>
          <?php
    }?>
     </tr>
    </table><?php
}

else 
echo "fetching data failed";
?>
 </body>
</html>
  