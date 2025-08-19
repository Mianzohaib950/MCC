<?php
session_start();
if (!isset($_SESSION['loggedIn']) || $_SESSION['loggedIn'] != true) {
    header("location: adminlogin.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap Cdn-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- Material Icons -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="CSS/adminpanel.css">
    <title>Document</title>
</head>

<body>
    <div class="container-fluid p-0">
        
        <div class="sidebar">
            <ul class="ps-0">
                <li>
                    <a href="admindashboard.php" class="active">
                        <span class="material-symbols-outlined">
                            dashboard
                        </span>
                        <h4>Dashboard</h4>
                    </a>
                </li>
                <li>
                    <a href="camping_product.php">
                        <span class="material-symbols-outlined">
                            group
                        </span>
                        <h4>Camping</h4>
                    </a>
                </li>
                <li>
                    <a href="Furniture_product.php">
                        <span class="material-symbols-outlined">
                            monitoring
                        </span>
                        <h4>Furniture</h4>
                    </a>
                </li>
                
                <li>
                    <a href="logout.php">
                        <span class="material-symbols-outlined">
                            logout
                        </span>
                        <h4>Logout</h4>
                    </a>
                </li>
            </ul>
        </div>
        
        <div class="main">
            <section class="main-content mt-lg-2">
                <div class="justify-content-center text-center my-5 mt-lg-4 mb-lg-5 gap-4 cards">
                    <div class="card">
                        <div>
                            <h3>Total Camping</h3>
                            <?php 

          include 'conect2.php';
$sql="SELECT * FROM camp";
$result=mysqli_query($conn,$sql);

if ($rowcount=mysqli_num_rows($result))
  {
  // Return the number of rows in result set
  
  echo '<h5>'.$rowcount.'</h5>';
  // Free result set
  mysqli_free_result($result);
  }
  else
  {
    echo '<h5>0</h5>';
  }

mysqli_close($conn);

        ?>
                            
                        </div>
                    </div>
                    <div class="card">
                        <div>
                            <h3>Total Furniture</h3>


                          <?php 

         include 'conect2.php';
$sql="SELECT * FROM furniture";
$result=mysqli_query($conn,$sql);

if ($rowcount=mysqli_num_rows($result))
  {
  // Return the number of rows in result set
  
  echo '<h5>'.$rowcount.'</h5>';
  // Free result set
  mysqli_free_result($result);
  }
  else
  {
    echo '<h5>0</h5>';
  }

mysqli_close($conn);

        ?>

                            
                        </div>
                    </div>
                </div>
                
            </section>
        </div>
    </div>
    <!-- Javascript -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
        integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
    const ctx = document.getElementById('myChart');

    new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
            datasets: [{
                label: '# of Votes',
                data: [12, 19, 3, 5, 2, 3],
                borderWidth: 1
            }]
        },
        options: {
            // scales: {
            //     y: {
            //         beginAtZero: true
            //     }
            // },
            responsive: true,
            layout: {
                padding: 20
            }
        }
    });
    </script>
</body>

</html>