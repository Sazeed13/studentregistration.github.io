<?php
include 'connection.php';
    $name=$_POST['name'];
    $gender=$_POST['gender'];
    $dob=$_POST['dob'];
    $paddress=$_POST['paddress'];
    $taddress=$_POST['taddress'];
    $contact=$_POST['contact'];
    $fname=$_POST['fname'];
    $fcontact=$_POST['fphone'];
    $mname=$_POST['mname'];
    $mcontact=$_POST['mphone'];
    $lgname=$_POST['lgname'];
    $lgrelatiom=$_POST['relation'];
    $lgcontact=$_POST['lphone'];
    $roll=$_POST['roll'];
    $email=$_POST['email'];
    $semail=$_POST['semail'];
    $pass1=$_POST['password'];
    $file=$_FILES['photo'];
  //  print_r($file);
    $filename=$file['name'];
    $filepath=$file['tmp_name'];
    $fileerror=$file['error'];
    $destination_file='students-images/'.$filename;
    echo "$destination_file";
    move_uploaded_file( $filepath,$destination_file);
    $query="UPDATE `studentsdata` SET `NAME`='$name',`GENDER`='$gender',`DOB`='$dob',`P_ADDRESS`='$paddress',`T_ADDRESS`='$taddress',`CONTACT`='$contact',`FATHERNAME`='$fname',`F_CONTACT`='$fcontact',`MOTHERNAME`='$mname',`M_CONTACT`='$mcontact',`LOCALGAURDAIN`='$lgname',`LG_RELEATION`='$lgrelatiom',`LG_CONTACT`='$lgcontact',`EMAIL`='$email',`SXC_EMAIL`='$semail',`PASS_WORD`='$pass1',`PHOTO`='$destination_file' WHERE ROLLNO='$roll';";
    $data= mysqli_query($conn,$query);
    if($data)
    {       
       header('location:login.php');
    }
    else
    {
       echo "sorry , deleted process failed";
    }
    
?>





