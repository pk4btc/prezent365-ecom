<?php include('navbar.php') ?>
<head>
    <link rel="stylesheet" href="/produkt.css" />

</head>

<?php 
$sql = "SELECT * FROM products";
$result= $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    ?>
  

<div class="container">
    <div class="row mt-5">
    <div class="col-lg-5">
        <img class="img-fluid" src="./img/<?php echo $row['img'];?>" alt="<?php echo $row['title'];?>">
    </div>
    <div class="col-lg-5">
  
        <h1>
            <?php echo $row['title'];?></h4>
        </h1>
                    <dl class="row">
            <dt class="col-sm-3">Szczegoly:</dt>
            <dd class="col-sm-9"><?php echo $row['brandname'];?></dd>
            
            <dt class="col-sm-3">Opis: </dt>
            <dd class="col-sm-9"> 
              Daj sie poznac jako otwarta dusza, dzieki bransoletce nowe znajomosci zapewnione!
            </dd>
            <dt class="col-sm-3">PLN </dt>
            <dd class="col-sm-9"> 
                <?php echo $row['price'];?>

            <dd class="col-sm-4">
            <button type="button" class="btn btn-bd-primary  btn-success"><img class="icons" src="img\bag-fill.svg"/> Kupuje</button>

             
            </dd>
            <dd class="col-sm-4">
            <button type="button" class=" btn btn-success ">  <img class=" icons img-fluid"  src="img\cart-plus-fill.svg"/> do koszyka</button>

          
            </dd>
            <dd class="col-sm-4">
            <button type="button" class="btn btn-success">  <img class="icons" src="img\star-fill.svg"/> do ulubionych</button>

            
            </dd>
            </dl>

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
