<?php include('navbar.php') ?>
<head >      <link rel="stylesheet" type="text/css" href="bransoletki.css"></head>


<?php 
$sql = "SELECT * FROM products";
$result= $conn->query($sql);?>



<section>  

        <div class="container">
            <div  class=" row d-flex  justify-content-center  ">

            <?php if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_array ()) {
                ?>
                
                <div class="col-lg-3 col-md-4 col-sm-6 branDivCol">
                    <div class="card text-bg-dark ">
                        <img src="./img/<?php echo $row[4]?>" class="card-img" alt="...">
                        <div class=" card-img-overlay justify-content-center d-flex align-items-center">
                            <h5 class="card-title "><?php echo $row[1]?></h5>
                        </div>
                </div>
                </div>
                    <?php }
    } else {
        echo "0 results"; 
    }
    ?>
    </div>
  
  </div>
  

</section>

<?php include 'footer.php' ?>

</body>
</html> 