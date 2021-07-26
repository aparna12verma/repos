<?php
 $state = $_POST['state'];
 $countrya = $_POST['countrya'];
 $district = $_POST['district'];
 $gender = $_POST['gender'];
 $Age = $_POST['Age'];
 $HigherEducation = $_POST['HigherEducation'];
 $Fullname = $_POST['Fullname'];
 $FullEducation = $_POST['FullEducation'];
 $Profession = $_POST['Profession'];
 $Email = $_POST['Email'];
 $Phone = $_POST['Phone'];
 $Message = $_POST['Message'];
 $Message1 = $_POST['Message1'];
 $Message2 = $_POST['Message2'];
 $Time = $_POST['Time'];

$conn = mysqli_connect('localhost:3308','root','');
mysqli_select_db($conn,'registeration');
$query = "insert into registration(state, countrya, district, gender, Age, HigherEducation, Fullname, FullEducation, Profession, Email, Phone, Message, Message1, Message2, Time)
                values ('$state','$countrya','$district','$gender','$Age','$HigherEducation','$Fullname','$FullEducation','$Profession','$Email','$Phone','$Message','$Message1','$Message2','$Time')";

$res = mysqli_query($conn , $query);
if($res == 1){
  echo "<h1 style='color:green; align-item:center;'>Registration Successfully</h1>
  <meta http-equiv='refresh' content='2; url=index.php' />
  ";
}else{
  echo "Registration not Successfully".mysqli_error($conn);
}

// $conn = new mysqli('localhost','root','','test');
// if($conn->connect_error){
//   die('Connection Failed : '.$conn->connect_error);
// }else{
//   $stmt = $conn->prepare("insert into registration(state, countrya, district, gender, Age, HigherEducation, Fullname, FullEducation, Profession, Email, Phone, Message, Message1, Message2, Time")
// values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?);
// $stmt->bind_param("ssssisssssissss",$state, $countrya, $district, $gender, $Age, $HigherEducation, $Fullname, $FullEducation, $Profession, $Email, $Phone, $Message, $Message1, $Message2, $Time);
// $stmt->execute();
// echo "registration Successfully...";
// $stmt->close();
// $conn->close();
// }
?>
