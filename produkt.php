
<?php include("./navbar.php");
$product_title = $_GET['message']; // get info from url



$sql1 = "SELECT * FROM products WHERE title='".$product_title."'";
$result1= $conn->query($sql1);

$product_id = array();  // declare the array
print_r($product_id);

// check if input addtocart has been set
if(filter_input(INPUT_POST,'add-to-cart'))
{
    if(isset($_SESSION['shoping-cart'])){

    $count = count($_SESSION['shoping-cart']);
    $product_id = array_column($_SESSION['shoping-cart'],'title');
    print_r($product_id);

    if(!in_array(filter_input(INPUT_GET,'title'),$product_id)){
        $_SESSION['shoping-cart'][$count]=array(

            'title'=>filter_input(INPUT_GET,'title'),
            'price'=>filter_input(INPUT_POST,'price'),
            'quantity'=>filter_input(INPUT_POST,'quantity')
           
        );
    }else{
        
        for($i=0; $i<count($product_id); $i++){
            if($product_id[$i] == filter_input(INPUT_GET,'title')){
                $_SESSION['shoping-cart'][$i]['quantity'] += filter_input(INPUT_POST,'quantity');
               $_SESSION['shoping-cart'][$i];
            
                ?>

                <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                <?php if ($result1->num_rows > 0) {
                    while($row1 = $result1->fetch_assoc()) { echo $row1["img"];}}?>
                <script>
                                        Swal.fire({
                    title: 'Sweet!',
                    text: 'Modal with a custom image.',
                    imageUrl: '
                    <?php if ($result1->num_rows > 0) {
                    while($row1 = $result1->fetch_assoc()) { echo $row1["img"];}}?>
                    ',
                    imageWidth: 400,
                    imageHeight: 200,
                    imageAlt: 'Custom image',
                    })
                </script>
                
            <?php


// header("location: ./produkt.php?message=". $_SESSION['shoping-cart'][$i]['title']);



            }
          

        }


    }


}else{ //shoping cart doesnt exists, create first product with array key 0 nad
        // create array using submitted form data, started from 0;
        $_SESSION['shoping-cart'][0]=array(

            'title'=>filter_input(INPUT_GET,'title'),
            'price'=>filter_input(INPUT_POST,'price'),
            'quantity'=>filter_input(INPUT_POST,'quantity'),

        );
            

    }

}

function pre_r($array){
    echo '<pre>';
    print_r($array);
    echo '</pre>';
}

$sql = "SELECT * FROM products WHERE title='".$product_title."'";
$result= $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    ?>
  

<div class="container">
    <div class="row mt-5">
    <div class="col-lg-5">
        <img class="img-fluid" src="./img/<?php echo $row["img"];?>" alt="<?php echo $row["title"];?>">
    </div>
    <div class="col-lg-5">


  
    <form method="post" action="produkt.php?action=add&title=<?php echo $row["title"];?>">
        <dl class="row">
                <h1><?php echo $row["title"];?></h1>
                    <input type="hidden" name="title" value="<?php echo $row["title"];?>"/>
                    
        
            <dt class="col-sm-3">Szczegoly:</dt>
            <dd class="col-sm-9"><?php echo $row["brandname"];?></dd>
            
            <dt class="col-sm-3">Opis: </dt>
            <dd class="col-sm-9"> 
              Daj sie poznac jako otwarta dusza, dzieki bransoletce nowe znajomosci zapewnione!
            </dd>
            <dt class="col-sm-3">PLN </dt>
            <dd class="col-sm-9"> 
                <?php echo $row["price"];?>
                <input type="hidden" name="price" value="<?php echo $row["price"];?>"/>
           <dd class="col-sm-9"> 
                <input type="text" name="quantity" value="1"/>
            <dd class="col-sm-4">
            <button type="button" class="btn btn-bd-primary  btn-success"><img class="icons" src="img\bag-fill.svg"/> Kupuje</button>

             
            </dd>
            <dd class="col-sm-4">
            <input  type="submit" name="add-to-cart" class=" btn btn-success "/> <img class=" icons img-fluid"  src="img\cart-plus-fill.svg"/> 
          
            </dd>
            <dd class="col-sm-4">
              <button type="button" class="btn btn-success">  <img class="icons" src="img\star-fill.svg"/> do ulubionych</button>
            </dd>
        </dl>
    </form>
</div>            


 


    </div>


</div>
<?php }}?>

</section>



<?php include "footer.php" ?>

</body>