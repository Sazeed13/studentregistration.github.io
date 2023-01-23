
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
<body>
<section class="my-5">
<div class="my-5">
<center style="color:red;">
       <h2>DELECTION SYSTEM</h2></div>
</center> 
        <div class="w-50 m-auto">
            <form action="deletepage.php" method="post" enctype="multipart/form-data">
        
                  <div class="form-group">
                    <label>Roll No./ Gov. ID</label>
                    <input type="text" required placeholder="enter your roll number here"  name="roll" autocomplete="off" class="form-control">
                    </div>
                <div class="form-group">
                    <label>SXC-Email</label>
                    <input type="email"  placeholder="enter your email address here and should be in the '021NEB432@sxc.edu.np'"    name="semail" autocomplete="off" class="form-control">
                </div>
                
                <div class="form-group">
                    <label>password</label>
                    <input type="password"  placeholder="enter your password"  minlength="8"  name="password" autocomplete="off" class="form-control">
                </div>

                <div>
                    <button type="submit" onclick="deletepage.php" class="btn btn-success">submit</button>

</div>

</form>
           </section>
  
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
</body>
</html>
