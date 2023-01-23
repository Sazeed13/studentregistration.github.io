<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body >
<?php
                    include 'connection.php';
                    $r=$_POST['roll'];
                    $e=$_POST['semail'];
                    $p=$_POST['password'];
                    $sql="SELECT * FROM `studentsdata` WHERE ROLLNO='$r'AND PASS_WORD='$p' AND SXC_EMAIL='$e';";
                    $query=mysqli_query($conn,$sql);
                    $result = mysqli_fetch_array($query);
                    ?>
<center>
  
<h2>STUDENT INFORMATION</h2>



<table>
  <tr>
    <th>TITLE</th>
    <th>INFO</th>
    
  </tr>
  <tr>
    <td>PHOTO</td>
    <td><img src="<?php  echo $result['PHOTO']?>" width="100" height="100"alt="" srcset=""></td>
   </tr>
   <tr>
    <td>NAME</td>
    <td><?php echo $result['NAME'];?></td>
   </tr>
   <tr>
    <td>GENDER</td>
    <td><?php  echo $result['GENDER']?></td>
   </tr>
   <tr>
    <td>DATE OF BIRTH </td>
    <td><?php  echo $result['DOB']?></td>
   </tr>
   <tr>
    <td>PERMANENT ADDRESS</td>
    <td><?php  echo $result['P_ADDRESS']?></td>
   </tr>
   <tr>
    <td>TEMPORARY ADDRESS</td>
    <td><?php  echo $result['T_ADDRESS']?></td>
   </tr>
   <tr>
    <td> STUDENT CONTACT</td>
    <td><?php  echo $result['CONTACT']?></td>
   </tr>
   <tr>
    <td>FATHER'S NAME</td>
    <td><?php  echo $result['FATHERNAME']?></td>
   </tr>
   <tr>
    <td>FATHER'S CONTACT</td>
    <td><?php  echo $result['F_CONTACT']?></td>
   </tr><tr>
    <td>MOTHER'S NAME </td>
    <td><?php  echo $result['MOTHERNAME']?></td>
   </tr><tr>
    <td>MOTHER'S CONTACT</td>
    <td><?php  echo $result['M_CONTACT']?></td>
   </tr>
   <tr>
    <td>CONTACT PERSON NAME </td>
    <td><?php  echo $result['LOCALGAURDAIN']?></td>
   </tr><tr>
    <td>COBTACTPERSON'S CONTACT</td>
    <td><?php  echo $result['LG_CONTACT']?></td>
   </tr><tr>
    <td>RELATON WITH CONTACT PERSON</td>
    <td><?php  echo $result['LG_RELEATION']?></td>
   </tr>
   <tr>
    <td>PERSONAL EMAIL</td>
    <td><?php  echo $result['EMAIL']?></td>
   </tr><tr>
    <td>SXC-EMAIL</td>
    <td><?php  echo $result['SXC_EMAIL']?></td>
   </tr>   
   <tr>
    <td><h3>wanna update your information</h3></td>
    <td><a href="update.php" class="btn btn-success">click here</a></td>
   </tr>   
   <tr>
    <td><h3>wanna delete your information</h3></td>
    <td><a href="delete.php" class="btn btn-danger">click here</a></td>
   </tr>                 
</table>
</center>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
</body>
</html>

