<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Welcome NCA quiz</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

</head>
<body>
<br/>
<br/>

<h1 class="text-center">Nalanda Collage Astronomy</h1>
<h2 class="text-center">Astro - Quiz</h2>

<?php echo form_open('verifylogin'); ?>




<br/>
<br/>
<br/>
<br/>

<div class="container">
    <div class="row">

        <div class="center-block" id="logindiv">
            <article class="col-lg-4 col-lg-offset-4 ">
            <form class="addition" id="login" role="form">
                <h3 class="text-center">Please login to the system</h3>

                <label>User ID</label>
                <br/>
                <input type="text" class="form-control" name="username" id="username" placeholder="Username" required autofocus>
                <br/>
                <br/>
                <label>Password</label>
                <br/>
                <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>

                <br/>
                <br/>
                <button class="btn btn-primary" type="submit">Login</button>
            </form>
                <div align="center"><br/>
                    <br/>
                    <?php echo validation_errors(); ?></div>
            </article>
        </div>
        </div>
    </div>
</body>

</html>