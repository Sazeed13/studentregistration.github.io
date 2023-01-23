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
    
    print_r($file);

    $filename=$file['name'];
    $filepath=$file['tmp_name'];
    $fileerror=$file['error'];
        $destination_file='students-images/'.$filename;
       echo "$destination_file";
     move_uploaded_file( $filepath,$destination_file);
     $sql="INSERT INTO `studentsdata`(`ROLLNO`, `NAME`, `GENDER`, `DOB`, `P_ADDRESS`, `T_ADDRESS`, `CONTACT`, `FATHERNAME`, `F_CONTACT`, `MOTHERNAME`, `M_CONTACT`, `LOCALGAURDAIN`, `LG_RELEATION`, `LG_CONTACT`, `EMAIL`, `SXC_EMAIL`, `PASS_WORD`, `PHOTO`) VALUES ('$roll','$name','$gender','$dob','$paddress','$taddress','$contact','$fname','$fcontact','$mname','$mcontact','$lgname','$lgrelatiom','$lgcontact','$email','$semail','$pass1','$destination_file')";
    $query=mysqli_query($conn,$sql);
    if($query)
    {
      ?>
      <script>alert("record registration process is conducted successfully");</script>
      <?php
    ?>
    <script>
    alert("now you will br directed to the login page and you have to login using your roll no, sxc email and password");
    </script>
      <META HTTP-EQUIV="refresh"  CONTENT="0; URL=http://localhost/project-work/login.php">
      <?php
      
      
    }
    else
    {
      echo "sorry , registration process failed";
    }
    ?>
?>

