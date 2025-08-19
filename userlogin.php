<?php
$login = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include "conect2.php";
    $email = $_POST["email"];
    $password = $_POST["password"];
    $query = "SELECT * FROM `regster` where Email ='$email' ";
    $result = mysqli_query($conn, $query);
    $status = mysqli_num_rows($result);
    if ($status == 1) {
        while ($row = mysqli_fetch_assoc($result)) {
            if ($password==$row['UserPassword']) {
                $login = true;
                session_start();
                $_SESSION['loggedIn'] = true;
                header("location: Home.php?user=$email");
            } else {
                echo "Invalid Credentials";
            }
        }
    } else {
        echo "User Not Found";
        echo '<div class="logo my-xxl-3">
                <img src="./images/error.png" alt="">
            </div>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/global.css">
    <title>Document</title>
</head>

<body>
    <section>
        <div class="container">
            
        </div>
    </section>
    <section>
        <div class="container">
            <div class="justify-content-center formbackground mx-auto pt-3 pb-5">
                <div class="selectuser my-4">
                    <div id="btn" class="left"></div>
                    <button type=button class="toggle-btn" id="selectstudent" onclick="leftClick()">
                        Customer</span>
                    </button>
                    <button type="button" id="selectadmin" class="toggle-btn" onclick="rightClick()">
                        admin</span>
                    </button>
                </div>
                <form class="mx-auto mt-2 form"  method="post">
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control rounded-1" id="exampleInputEmail1"
                            aria-describedby="emailHelp" name="email" placeholder="Email" required>
                        <label for="floatingInput">Email</label>
                        <div id="emailHelp" class="form-text text-start">
                        </div>
                    </div>
                    <div class="form-floating mb-2">
                        <input type="password" class="form-control rounded-1" name="password" id="exampleInputPassword1"
                            placeholder="Password">
                        <label for="floatingPassword">Password</label>
                    </div>
                    <div class="mb-2 text-end"><a href="emailverification.php">Forgot Password?</a></div>
                    <button type="submit" class="w-100 mb-2 rounded-1">Login</button>
                    <div class="text-start">Don't have account? <a href="register.php">create a new acount</a></div>
                </form>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
        integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous">
    </script>
    <script>
    let btn = document.getElementById("btn");

    function leftClick() {
        window.location.replace('userlogin.php');
    }

    function rightClick() {
        window.location.replace('adminlogin.php');
    }
    </script>
</body>

</html>