              <?php 
                  include 'connection.php';
                  $r=$_POST['roll'];
                 $p=$_POST['password'];
                  $sql="DELETE  FROM `studentsdata` WHERE ROLLNO='$r' AND PASS_WORD='$p';";
                  $query=mysqli_query($conn,$sql);
                  if($query)
                  {
                      echo "record deleted successfully";
                      
                  ?>
                  <script>
                  alert("data deleted successfully");
                  </script>
                     
                      <?php
                      
                       header('location:login.php');
                  }
                  else
                  {
                      echo "sorry , deleted process failed";
                  }
                  ?>
               ?>

