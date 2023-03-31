<?php
    session_start();
    ob_start();


    include('../model/connect.php');
    include('../model/user.php');

    if((isset($_POST['login'])) && ($_POST['login'])){
        $username = $_POST['Username'];
        $pass = $_POST['Password'];

        $Role = checkuser($username, $pass);

        $_SESSION['Role'] = $Role;

        if($Role == 0) header('Location: admin.php');
        else {
           $txt_error = "Username or Pass not match";
        }
        // header('Location: login1.php');
        
    }
?>


<!DOCTYPE html>
<html>
<title>Login Form</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
.login-form {
    width: 340px;
    margin: 50px auto;
    font-size: 15px;
}
.login-form form {
    margin-bottom: 15px;
    background: #f7f7f7;
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    padding: 30px;
}
.login-form h2 {
    margin: 0 0 15px;
}
.form-control, .btn {
    min-height: 38px;
    border-radius: 2px;
}
.btn {        
    font-size: 15px;
    font-weight: bold;
}
</style>
</head>
<body>
<div class="login-form">
    <form name="frmUser" method="post" action="<?php echo $_SERVER['PHP_SELF']?>" align="center">
        <h2 class="text-center">Log in</h2>       
        <div class="message text-danger">
            <?php
                if(isset($txt_error) && ($txt_error != "")){
                    echo $txt_error;
                }
            ?>
        </div>
        <br/>
        <div class="form-group">
            <input type="text" class="form-control" name="username" placeholder="Username" required="required" autocomplete="off">
        </div>
        <div class="form-group">
            <input type="password" autocomplete="off" class="form-control" placeholder="Password" name="pass" required="required">
        </div>
        <div class="form-group">
            <button type="submit" name="login" class="btn btn-primary btn-block" value="Submit">Log in</button>
        </div>      
    </form>
</div>
</body>

</html>