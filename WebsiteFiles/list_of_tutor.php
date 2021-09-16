
<!DOCTYPE html>
<html>
<head>
	<title>List of Tutuor </title>

<style> 
        table { 
            margin: 0 auto; 
            font-size: large; 
            border: 1px solid black; 
        } 
  
        h1 { 
            text-align: center; 
            color: #006600; 
            font-size: xx-large; 
            font-family: 'Gill Sans', 'Gill Sans MT',  
            ' Calibri', 'Trebuchet MS', 'sans-serif'; 
        } 

        body {
  
  background-repeat: no-repeat;
background-size: cover;
  height: 100%;
}
  
        td { 
            background-color: #e6b3ca; 
            border: 1px solid black; 
        } 
  
        th{

            border: 1px solid black; 
            padding: 10px; 
            text-align: center;
        	background-color: #cc6694; 
            border: 1px solid black;
        }
        td { 
            font-weight: bold; 
            border: 1px solid black; 
            padding: 10px; 
            text-align: center; 
        } 
  
        td { 
            font-weight: lighter; 
        } 


        button {
  background-color: #33001a; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  align-self: center;
  border-radius: 20px;
}

.wrapper {
    text-align: center;
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
 //create connection
 $mysqli=mysqli_connect('localhost','root1','password','mydb');
	
//check connection
 if(mysqli_connect_errno($mysqli))
 {
	echo 'Failed to connect to database: '.mysqli_connect_error();
}

$sql = "SELECT f_name,email,experience,dance_type,achievement,qualification FROM instructor ORDER by experience DESC"; 
$result = $mysqli->query($sql); 
$mysqli->close();
?>

<section> 
        <h1>List of Instructor</h1> 
        <!-- TABLE CONSTRUCTION--> 
        <table> 
            <tr> 
                <th>First Name </th> 
                <th>Email Address</th> 
                <th>Experience</th> 
                <th>Achievement </th> 
                <th>Qualification</th> 
                <th>Specialization</th> 
            </tr> 

            <?php   // LOOP TILL END OF DATA  
                while($rows=$result->fetch_assoc()) 
                { 
             ?> 
            <tr> 
                <!--FETCHING DATA FROM EACH  
                    ROW OF EVERY COLUMN--> 
                <td><?php echo $rows['f_name'];?></td> 
                <td><?php echo $rows['email'];?></td> 
                <td><?php echo $rows['experience'];?></td> 
                <td><?php echo $rows['achievement'];?></td> 
                <td><?php echo $rows['qualification'];?></td>
                <td><?php echo $rows['dance_type'];?></td> 
            </tr> 
            <?php 
                } 
             ?> 
        </table> 
    </section> 

</br>
</br>
</br>
</br>

<div class="wrapper">
    <button type="button" onclick="goBack()">Go Back</button>
</div>





</body>
</html>

