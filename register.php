<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $checkpost = false;
    include "conect2.php";
    $firstname = $lastname = $email = $password = $confirmpassword = "";
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirmpassword = $_POST["confirmpassword"];
    $ExistSql = "SELECT * FROM `regster` WHERE Email = '$email'";
    $emailresult = mysqli_query($conn, $ExistSql);
    $numrowExists = mysqli_num_rows($emailresult);
    if ($numrowExists > 0) {
        echo "Email already Exists";
    } else {
        if (($password == $confirmpassword)) {
            
            $sql = "INSERT INTO `regster` (`FirstName`, `LastName`, `Email`, `UserPassword`) VALUES ('$firstname', '$lastname', '$email', '$confirmpassword')";
            $result = mysqli_query($conn, $sql);
            if ($result || $result !== " ") {
                header("location: userlogin.php");
            } else {
                echo 'Please fill all credentials!';
            }
        } else {
            echo 'Password do not match!';
        }
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
    <!-- Modal for success-->
    <div class="modal fade show" id="successModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="position-absolute top-0 start-50 translate-middle">
                    <img src="Images/checkmark.png" class="checkmark" alt="checkmark">
                </div>
                <div class="modal-body">
                    <h1 class="text-center">Success</h1><br />
                    <h5>REGISTERED SUCCESSFULLY</h5>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal for success-->
    <!-- <div class="modal fade show" id="errorModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="position-absolute top-0 start-50 translate-middle">
                    <img src="Images/checkmark.png" class="checkmark" alt="checkmark">
                </div>
                <div class="modal-body error">
                    <h1 class="text-center">Error Occured</h1><br />
                    <h5>PASSWORD DO NOT MATCH</h5>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Bootstrap Modal -->
    <!-- <div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="registerModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="registerModalLabel"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="registerModalBody"></div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Logo -->
    <section>
        <div class="container">
            <div class="logo text-center mt-xxl-5">
                <img src="./images/logo.png" alt="">
            </div>
        </div>
    </section>
    <!-- Content -->
    <section>
        <div class="container">
            <div class="formbackground mx-auto mt-xxl-5 pt-5 pb-4">
                <form class="row g-3 needs-validation form mx-auto" method="post" novalidate>
                    <div class=" px-0">
                        <input type="text" class="form-control" id="validationCustom01" placeholder="First Name"
                            name="firstname" required>
                        <div class="invalid-feedback text-start"> Please enter First Name. </div>
                        <div class="valid-feedback text-start"> Looks good! </div>
                    </div>
                    <div class=" px-0">
                        <input type="text" class="form-control" id="validationCustom02" placeholder="Last Name"
                            name="lastname" required>
                        <div class="invalid-feedback text-start"> Please enter Last Name. </div>
                        <div class="valid-feedback text-start"> Looks good! </div>
                    </div>
                    <div class=" px-0">
                        <input type="Email" class="form-control" id="validationCustom03" name="email"
                            placeholder="Email" required>
                        <div class="invalid-feedback text-start"> Please provide a valid Email. </div>
                    </div>
                    <div class="px-0">
                        <input type="password" class="form-control rounded-1" id="password" name="password"
                            placeholder="Password" required>
                        <div class="invalid-feedback text-start"> Please enter password. </div>
                    </div>
                    <div class="mb-2 px-0">
                        <input type="password" class="form-control rounded-1" id="confirmpassword"
                            name="confirmpassword" placeholder="Confirm Password" required>
                    </div>
                    <button class="w-100" type="submit">Register</button>
                    <div class="text-start">Already have an account? <a href="userlogin.php">Login</a></div>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!-- <script src="Js/index.js"></script> -->
    <script>
    (() => {
        "use strict";

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        const forms = document.querySelectorAll(".needs-validation");

        // Loop over them and prevent submission
        Array.from(forms).forEach((form) => {
            form.addEventListener(
                "submit",
                (event) => {
                    if (!form.checkValidity()) {
                        event.preventDefault();
                        event.stopPropagation();
                    }

                    form.classList.add("was-validated");
                },
                false
            );
        });
    })();
    </script>
</body>

</html>