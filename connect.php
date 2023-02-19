

 <?php
 
if(isset($_POST['insert'])){
    $id=rand();
$rollno = $_POST["rollno"];
$first = $_POST["firstname"];
$last = $_POST["lastname"];
$bran = $_POST["branch"];

$year = $_POST["year"];
$email = $_POST["email"];
 
echo $rollno;
echo $first;
echo $last;
echo $bran;

echo $year;
echo $email;

$connection= mysqli_connect( 'localhost','root','','sahithi');
$query = " INSERT INTO  sahithi vALUES ($id,'$rollno','$first','$last','$bran','$year','$email')";
$query_run = mysqli_query($connection,$query);
if($query_run)
{
    echo "data inserted";
}
else {
    echo "data not inserted";
}
}
 

?>
 