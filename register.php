<?php
$servername = "localhost";
$username = "root";
$password = "badal";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

//Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else{
echo "Connected successfully";}
//check done
$conn->query("use users");
$naam=$_POST['name'];
$paas=$_POST['pass'];

echo $naam;
$checkcode="select * from userrecords where name='".$naam."';";
$checkvalue=conn->query($checkcode);
if($checkvalue->num_rows>0){
  echo "sorry this user name is already ocupied <br>Please choose another";
  echo "<br><a href='form.php'><button>Back to form</button></a>";
}
$sql="insert into userrecords values('".$naam."'".","."'".$paas."');";
if($conn->query($sql))
{
  echo "<br> account created".$naam;
}
else{echo " <br> daya.. kuch toh garbar hai";}

?>
