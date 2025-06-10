<?php
session_start();


?>

<!DOCTYPE html>
<html>

<head>

    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>

<body style="background-color:#FFE5B4">
    <?php include 'menu.php' ?>

    <?php
    include 'userinfo.php';
    if (isset($_POST['submit'])) {
        $email = $_POST['email'];
        $pass = $_POST['pass'];

        $email_search = "select * from userdata where email='$email' ";
        $query = mysqli_query($con, $email_search);

        $email_count = mysqli_num_rows($query);
        if ($email_count) {

            $email_pass = mysqli_fetch_assoc($query);
            $db_pass = $email_pass['pass'];
            $_SESSION['email'] = $email_pass['email'];
            $pass_dec = password_verify($pass, $db_pass);

            if ($pass_dec) {
                if (isset($_POST['rememberme'])) {
                    setcookie('emacookie', $email, time() + 86400);
                    setcookie('pascookie', $pass, time() + 86400);
                    ?>
                    <script>
                        location.replace("index.php");
                    </script>
                    <?php
                } else {
                    ?>
                    <script>
                        location.replace("index.php");
                    </script>
                    <?php
                }

                echo "login successful";

            } else {
                echo "password Incorrect";
            }
        } else {
            echo "invalid mail";
        }
    }


    ?>

    <section class="my-5" style="color: black;">
        <div class="w-20 m-auto text-center container-fluid">
            <form action="<?php htmlentities($_SERVER['PHP_SELF']); ?>" method="post" class="bg-warning">
                <div class="py-5">
                    <h2 class="text-center" style="color: black;">Login</h2>
                </div>
                <div class="form-group input-group mb-3 mx-auto" style="width:50%;">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-user"></i></span>
                    </div>
                    <input type="text" placeholder="Email I'd" name="email" class="form-control" required
                        value="<?php if (isset($_COOKIE['emacookie'])) {
                            echo $_COOKIE['emacookie'];
                        } ?>">
                </div>

                <div class="form-group input-group mb-1 mx-auto" style="width:50%;">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-lock"></i></span>
                    </div>
                    <input type="password" placeholder="Enter password" name="pass" class="form-control" required
                        value="<?php if (isset($_COOKIE['pascookie'])) {
                            echo $_COOKIE['pascookie'];
                        } ?>">
                    <div class="form-group input-group">
                        <label>
                            <input type="checkbox" name="rememberme" style="margin:1px ;">Remember Me
                        </label>

                    </div>

                </div>
                <button type="submit" name="submit" class="btn"
                    style="background-color: black; color:white; ">Login</button><br><br>
                Don't have an Account? <a href="signup.php" class="btn"
                    style="background-color: white; color:black; ">Signup</a>
            </form>
        </div>
    </section>
    <?php include 'footer.php'; ?>
</body>

</html>