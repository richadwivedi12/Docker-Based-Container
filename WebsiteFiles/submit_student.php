
<!DOCTYPE html>
<html>
<head>
	<title>Submitted</title>

<style> 
        
        body {
  
  background-repeat: no-repeat;
background-size: cover;
  height: 100%;
}
.wrapper {
    text-align: center;
}
  
        button {
  background-color: #4CAF50; 
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  align-self: center;
}

    </style>


<script>
function goBack() {
  window.history.back();
}
</script>

</head>
<body background="https://i.pinimg.com/originals/da/42/64/da4264a33bbcfcd56d3cb80e26430518.png">

<?php
if ( isset( $_POST['submit'] ) ) {

echo "<h2>form data retrieved by using the $_REQUEST variable<h2/>";
}

$firstname = $_REQUEST['jj1'];
$lastname = $_REQUEST['jj2'];
$mob = $_REQUEST['jj3'];
$addrr = $_REQUEST['jj4'];
$emai = $_REQUEST['jj5'];
$gender = $_REQUEST['jj6'];
$expected_fee = $_REQUEST['jj7'];
$d_type = $_REQUEST['jj8'];
$medic = $_REQUEST['jj9'];

$dob = $_REQUEST['jj10'];

echo ' ' . $firstname .' ' . $lastname;

?>

<?php
 //create connection
 $mysqli=mysqli_connect('localhost','root1','password','mydb');
    
//check connection
 if(mysqli_connect_errno($mysqli))
 {
    echo 'Failed to connect to database: '.mysqli_connect_error();
}

$sql = "INSERT INTO student 
   (f_name,l_name,mob_no,address,email,gender,expected_fees,
   dance_type,medical_cond,date_of_birth)
   VALUES('$firstname', '$lastname', $mob,'$addrr','$emai','$gender',
   $expected_fee,'$d_type',$medic','$dob')";
$result = $mysqli->query($sql); 
$mysqli->close();
?>



<h1 >Data Sunmitted Succesfully </h1>
</br>
</br>
</br>
</br>

<div class="wrapper">
    <button type="button" onclick="goBack()">Go Back</button>
</div>





</body>
</html>

