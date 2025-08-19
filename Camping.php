

<!DOCTYPE html>
<html lang="en">
<head>
    <title>MCC</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</head>
<body class="bg-light">
    <div class="container">
        <header class="d-flex justify-content-center py-3">
          <ul class="nav nav-pills">
            <li class="nav-item"><a href="Home.php" class="nav-link " >Home</a></li>
            <li class="nav-item"><a href="Camping.php" class="nav-link active">Camping Equipment</a></li>
            <li class="nav-item"><a href="Furniture.php" class="nav-link">Furniture</a></li>
            <li class="nav-item"><a href="Reviews.php" class="nav-link">Reviews</a></li>
            <li class="nav-item"><a href="offers.php" class="nav-link">Offer</a></li>
            <li class="nav-item"><a href="logout.php" class="nav-link">logout</a></li>
      
          </ul>
        </header>
    </div>


      <section style="background-color: #eee;">
        <h1  class="pt-3 campingh1">Camping Equipments</h1>
  
        <div class="container py-5">
          <div class="row p-2" >
            <?php
include "conect2.php";





     $sql = "SELECT * FROM camp  ";
     $result= $conn->query($sql);
     $i=0;

    if ($result->num_rows>0)
    {
      while ($row = $result->fetch_assoc()) {


?>
            <div class="col-md-12 col-lg-4 mb-4 mb-lg-0">
              <div class="card card-width">
                <img src="<?php echo $row['img']; ?>"
                  class="card-img-top" alt="camping" />
                <div class="card-body">
                  <div class="d-flex justify-content-between mb-3">
                    <h5 class="mb-0"><?php echo $row["pro_name"]; ?></h5>
                    <h5 class="text-dark mb-0"><?php echo $row["price"]; ?></h5>
                  </div>
                  <div class="d-flex justify-content-between mb-2">
                    <p class="text-muted mb-0">Available: <span class="fw-bold"><?php echo $row["total"]; ?></span></p>
                  </div>
                  <a href="card.php?p=<?php echo $row["pro_name"]?>" class="btn btn-primary">Add to card</a>
                </div>
              </div>
            </div>
            <?php
          }
        }
        ?>
              
          </div>
          
          
          </div>
      </section>

      <div class="container-fluid">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
          <p class="col-md-4 mb-0 text-body-secondary">© 2023 MCC</p>
          <a href="Home.html" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
            Mian Camping Company (MCC)
        </a>
          <ul class="nav col-md-4 justify-content-end">
            <li class="nav-item"><a href="Home.php" class="nav-link px-2 text-body-secondary">Home</a></li>
            <li class="nav-item"><a href="Camping.php" class="nav-link px-2 text-body-secondary">Camping</a></li>
            <li class="nav-item"><a href="Furniture.php" class="nav-link px-2 text-body-secondary">Furniture</a></li>
            <li class="nav-item"><a href="Reviews.php" class="nav-link px-2 text-body-secondary">Reviews</a></li>
            <li class="nav-item"><a href="offers.php" class="nav-link px-2 text-body-secondary">Offer</a></li>
       
          </ul>
        </footer>
      </div>

</body>
</html>