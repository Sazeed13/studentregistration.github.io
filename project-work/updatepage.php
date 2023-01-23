
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
  
</head>
<body><?php
   
   
                    include 'connection.php';
                    $r=$_POST['roll'];
                    $e=$_POST['semail'];
                    $p=$_POST['password'];
              
                    $sql="SELECT * FROM `studentsdata` WHERE ROLLNO='$r'AND PASS_WORD='$p' AND SXC_EMAIL='$e';";
                    $query=mysqli_query($conn,$sql);
                    $result = mysqli_fetch_array($query);
                  
    ?>
        <?php echo $result['NAME'];?>
<section class="my-5">
<div class="my-5">
        <h2 class="text-center">UPDATE FORM</h2></div>
        <div class="w-50 m-auto">
            <form action="updates.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                    <label>Roll No./ Gov. ID</label>
                    <input type="text" value="<?php echo $result['ROLLNO'];?>" readonly name="roll" autocomplete="off" class="form-control">
                </div>
            <div class="form-group">
                    <label>Full Name</label>
                    <input type="text" value="<?php echo $result['NAME'];?>" name="name" autocomplete="off" class="form-control"     >
                </div>
                <div class="form-group">
                    <label>Gender</label>
                    <select name="gender"  class="form-control"     a>
                        <option value="" ><?php  echo $result['GENDER']?></option>
                        <option value="male"> Male</option>
                        <option value="Female">Female</option>
                        <option value="Others">Others</option>
                    </select>
</div>
                    <div >
                  <label>   Date of birth </label>
                        <input type="date" class="form-control" value="<?php  echo $result['DOB']?>"name="dob" >
                    </div>
                      
                <div class="form-group">
                 
                    <label>Address</label>
                    <input type="text" name="paddress" value="<?php  echo $result['P_ADDRESS']?>" autocomplete="off" class="form-control" >
                   <br> <input type="text" onclick="check();"  value="<?php  echo $result['T_ADDRESS']?>"name="taddress" autocomplete="off" class="form-control" >
                <script>
                    function check()
                    {
                        alert("if your temporary and permanent address is the same then just rewrite the permanent address to the temporary address")
                    }
                </script>
                </div>
                <div class="form-group">
                    <label>contact</label>
                    <input type="number"VALUE="<?php  echo $result['CONTACT']?>"  name="contact" autocomplete="off" class="form-control" >
                </div>
                <div class="form-group">
                    <label>Father's name</label>
                    <input type="text"  value="<?php  echo $result['FATHERNAME']?>" name="fname" autocomplete="off" class="form-control">
                </div>
                <div class="form-group">
                    <label>Contact no. of father</label>
                    <input type="tel"  value="<?php  echo $result['F_CONTACT']?>" name="fphone"  class="form-control"pattern="[0-9]{10}" >             
                   </div>
                   <div class="form-group">
                    <label>Mother's name</label>
                    <input type="text" value="<?php  echo $result['MOTHERNAME']?>"  name="mname" autocomplete="off" class="form-control">
                </div>
                <div class="form-group">
                    <label>Contact no. of mother</label>
                    <input type="tel" value="<?php  echo $result['M_CONTACT']?>"  name="mphone"  class="form-control"pattern="[0-9]{10}" >
                </div>
                <div class="form-group">
                    <label>Local Guardain</label>
                    <input type="text" value="<?php  echo $result['LOCALGAURDAIN']?>" onclick="check1();"  name="lgname" autocomplete="off" class="form-control">
                
                    <div class="form-group">
                    <label>Relation with the local gaurdain</label>
                    <input type="text"  value="<?php  echo $result['LG_RELEATION']?>"name="relation" autocomplete="off" class="form-control">
                
                <script>
                        function check1(){
                            alert("if your are living along with Parents currently then just rewrite the details of either of your parents or else you have to write details mentioned there");
                        }
                    </script>
                </div>
                <div class="form-group">
                    <label>Contact no. of local gaurdain</label>
                    <input type="tel"   value="<?php  echo $result['LG_CONTACT']?>"name="lphone"  class="form-control"pattern="[0-9]{10}" >
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email"value="<?php  echo $result['EMAIL']?>" name="email" autocomplete="off" class="form-control">
                </div>
                <div class="form-group">
                    <label>SXC-Email</label>
                    <input type="email" value="<?php  echo $result['SXC_EMAIL']?>"name="semail" autocomplete="off" class="form-control">
                </div>
                
                <div class="form-group">
                    <label>password</label>
                    <input type="password"value="<?php  echo $result['PASS_WORD']?>" minlength="8"  name="password" autocomplete="off" class="form-control">
                </div>
                <div class="form-group">
                    <label >upload your image</label>
                    <div><img src="<?php  echo $result['PHOTO']?>" width="100" height="100"alt="" srcset=""></div>
                    <input type="file" name="photo" class="form-control">
                </div>
                <div>
                    <button type="submit" onclick="" class="btn btn-success">submit</button>
<script>
    function userandpass(){
        alert("your sxc email and password will be asked for logging in the website ")
    }
</script>
                    <button type="reset" class="btn btn-primary">reset</button>
</div>
            </form>
        </div>
       
        </div>
       
        </section>
  
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
</body>
</html>
