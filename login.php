<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style1.css" />
    <title>Sign in & Sign up Form</title>
</head>

<body>
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">
                <!-- Login Start -->
                <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" class="sign-in-form" method="POST">
                    <h2 class="title">Sign in</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="email" name="email" placeholder="email" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="password" placeholder="Password" />
                    </div>
                    <input type="submit" name="login" value="Login" class="btn solid" />
                    <p class="social-text">Or Sign in with social platforms</p>
                    <div class="social-media">
                        <a href="#" class="social-icon">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-google"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </form>
                <!-- Login End -->

                <!-- register Start -->
                <form class="sign-up-form" method="POST">
                    <h2 class="title">Sign up</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" name="name" placeholder="Name" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" name="username" placeholder="Username" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="email" name="email" placeholder="Email" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-phone"></i>
                        <input type="text" name="mobile" placeholder="mobile" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="password" placeholder="Password" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <!-- <input type="password" placeholder="Password" /> -->
                        <select name="role" id="">
                            <option value="select">Select</option>
                            <option value="reception">Receptionist</option>
                            <option value="Manager">Manager</option>
                        </select>
                    </div>
                    <!-- <input type="submit" class="btn" value="Sign i up" /> -->
                    <button type="submit" name="submit" class="btn" value="Sign up">Sign Up For Free</button>
                    <!-- <input type="submit" class="btn" value="Sign up" /> -->
                    <p class="social-text">Or Sign up with social platforms</p>
                    <div class="social-media">
                        <a href="#" class="social-icon">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-google"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </form>
                <!-- Register End -->
            </div>
        </div>

        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>New here ?</h3>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis,
                        ex ratione. Aliquid!
                    </p>
                    <button class="btn transparent" id="sign-up-btn">
                        Sign up
                    </button>
                </div>
                <img src="img/log.svg" class="image" alt="" />
            </div>
            <div class="panel right-panel">
                <div class="content">
                    <h3>One of us ?</h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum
                        laboriosam ad deleniti.
                    </p>
                    <button class="btn transparent" id="sign-in-btn">
                        Sign in
                    </button>
                </div>
                <img src="img/register.svg" class="image" alt="" />
            </div>
        </div>
    </div>

    <script src="js/app.js"></script>
</body>



<?php
include_once './sql_con.php';


if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $role = $_POST['role'];
    $password = md5($_POST['password']);

    if (!preg_match("/^[a-zA-Z-']*$/", $name)) {
        // $nameErr = "Only letters and white space allowed";
        echo "<script>alert('name Space not allowed in Name')</script>";
        exit();
    }
    if (!preg_match("/^[a-zA-Z-']*$/", $username)) {
        // $nameErr = "Only letters and white space allowed";
        echo "<script>alert('namespace not allowed Username')</script>";
        exit();
    }
    if (!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $email)) {
        // $nameErr = "Only letters and white space allowed";
        echo "<script>alert('Enter Valid Email')</script>";
        exit();
    }
    if (!preg_match("/^[0-9]{10}+$/", $mobile)) {
        // $nameErr = "Only letters and white space allowed";
        echo "<script>alert('Enter Only Number')</script>";
        exit();
    }


    $stmt = $link->prepare("INSERT INTO __master_users (`name`,`username`,`email`,`mobile`,`role`,`password`) VALUE(?,?,?,?,?,?)");
    $stmt->bind_param("sssiss", $name, $username, $email, strtolower($mobile), $role, $password);
    $stmt->execute();
    if ($stmt->error) exit($stmt->error);
    $stmtS = $link->prepare("SELECT * FROM __master_users WHERE id=(last_insert_id())");
    $stmtS->execute();
    if ($stmtS->error) exit($stmtS->error);
    $result = $stmtS->get_result()->fetch_all(MYSQLI_ASSOC);
    echo "<script>alert('Registration Done')</script>";
    exit();
}


if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $stmt     = $link->prepare("SELECT * FROM `__master_users` where email = ? AND `password` = ?");
    $stmt->bind_param("ss", $email, $password);
    $stmt->execute();
    $user     = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    // print_r($user[0]['username']);
    $_SESSION['email'] = $user[0]['email'];
    print_r($_SESSION['email']);
    print_r(json_encode($user));
    if (!$user) {
        echo "<script>alert('User Not Found')</script>";
        exit();
    }
?>
    <script>
        location.replace("index.php");
    </script>
<?php
    // header('location:index.php');
    print_r("User found");
    exit();
}
?>

</html>