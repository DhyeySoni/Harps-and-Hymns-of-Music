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
        $name = mysqli_real_escape_string($con, $_POST['name']);
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $mobile = mysqli_real_escape_string($con, $_POST['mobile']);
        $dob = mysqli_real_escape_string($con, $_POST['dob']);
        $pass = mysqli_real_escape_string($con, $_POST['pass']);
        $cpass = mysqli_real_escape_string($con, $_POST['cpass']);

        $passw = password_hash($pass, PASSWORD_BCRYPT);
        $cpassw = password_hash($cpass, PASSWORD_BCRYPT);

        $emailquery = "select * from userdata where email= '$email' ";
        $query = mysqli_query($con, $emailquery);
        header("Location:login.php");

        $emailcount = mysqli_num_rows($query);
        if ($emailcount > 0) {
            ?>
            <script>
                alert("email already exist!!");
            </script>
            <?php
        } else {
            if ($pass == $cpass) {
                $insertquery = " insert into userdata (name, email, mobile, dob, pass, cpass) values ('$name' , '$email' , '$mobile' , '$dob', '$passw', '$cpassw') ";
                mysqli_query($con, $insertquery);
            }
        }
    }


    ?>
    <section class="my-5" style="color: black;">
        <div class="w-20 m-auto text-center container-fluid">
            <form action="" method="post" class="bg-warning">
                <div class="py-5">
                    <h2 class="text-center">Sign up</h2>
                </div>
                <div class="form-group input-group mb-3 mx-auto" style="width:50%;">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                    </div>
                    <input type="text" placeholder="Name" name="name" autocomplete="off" class="form-control" required>

                </div>
                <div class="form-group input-group mb-3 mx-auto" style="width:50%;">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa-solid fa-envelope"></i></span>
                    </div>
                    <input type="text" placeholder="Email I'd" name="email" autocomplete="off" class="form-control"
                        pattern="^[a-z0-9.]+@[a-z]+\.[a-z]{2,3}$"
                        title="must be in this format e.g. alex2001@gmail.com " required>
                </div>
                <div class="form-group input-group mb-3 mx-auto" style="width:50%;">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa-solid fa-phone"></i></span>
                    </div>
                    <input type="text" placeholder="Contact Number" name="mobile" autocomplete="off"
                        class="form-control" pattern="^[0-9]{10,10}$" title="contact number must be 10 digits" required>
                </div>
                <div class="form-group input-group mb-3 mx-auto" style="width:50%;">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa-solid fa-calendar-days"></i></span>
                    </div>
                    <input type="date" name="dob" autocomplete="off" class="form-control" required>
                </div>
                <div class="form-group input-group mb-3 mx-auto" style="width:50%;">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa-solid fa-lock"></i></span>
                    </div>
                    <input type="password" placeholder="Enter password" name="pass" autocomplete="off"
                        class="form-control" pattern="^[A-Za-z!@#$%^&*1-9]{8,}$"
                        title="password must be 8 character long and include at least(one symbol, one special character, one number) "
                        required>
                </div>
                <div class="form-group input-group mb-3 mx-auto" style="width:50%;">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa-solid fa-lock"></i></span>
                    </div>
                    <input type="password" placeholder="Confirm password" name="cpass" autocomplete="off"
                        class="form-control" pattern="^[A-Za-z!@#$%^&*1-9]{8,}$"
                        title="password must be 8 character long and include at least(one symbol, one special character, one number) "
                        required>
                </div>
                <button type="submit" name="submit" class="btn"
                    style="background-color: white; color:black; ">Signup</button>
                <br><br>
                Already have an Account? <a href="login.php" class="btn"
                    style="background-color: black; color:white; ">Login</a>

            </form>
        </div>
    </section>
    <?php include 'footer.php'; ?>
</body>

</html>