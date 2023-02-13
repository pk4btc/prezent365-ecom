<?php include('navbar.php');
session_start();

//checking if in url is get metod in this typicly 
if(filter_input(INPUT_GET, 'action')=='delete'){


    for($i=0; $i<count($_SESSION['shoping-cart']); $i++){
     
        if($_SESSION['shoping-cart'][$i]['title'] == filter_input(INPUT_GET,'title')){
      
            unset($_SESSION['shoping-cart'][$i]);
        }
        $_SESSION['shoping-cart'] = array_values($_SESSION['shoping-cart']);
    }




    // foreach($_SESSION['shoping-cart'] as $key => $product){
    //     echo $_SESSION['shoping-cart'];
        
    //     if ( $product['title'] == filter_input(INPUT_GET,'title')){
    //         echo 'sucess';
    //        echo $product['title'];
    //        unset($_SESSION['shoping-cart'][$key]);
          
    //     }
    //     $_SESSION['shoping-cart'] = array_values($_SESSION['shoping-cart']);

    // }
    //reset session aray keys so they match with product ids numeric array

}


// pre($_SESSION['shoping-cart']);
// function pre($array){
//     echo '<pre>';
//     print_r($array);
//     echo'</pre>';
// }



?>
<section>
    <div class="container">
        
        
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Produkt</th>
                    <th scope="col">Price</th>
                    <th scope="col">Ilosc</th>
                    <th scope="col">Edytuj</th>
                    <th scope="col">Suma</th>
                </tr>
         </thead>

   
        <?php if($_SESSION['shoping-cart']){
            $suma=0;
        for($i = 0; $i<count($_SESSION['shoping-cart']);$i++){
         ?>
            
    <tbody>
        <tr>
            <th scope="row"><?php print_r($i);?></th>
            <td><?php    print_r($_SESSION['shoping-cart'][$i]['title']);?></td>
            <td>$<?php    print_r($_SESSION['shoping-cart'][$i]['price']);?></td>
            <td><?php    print_r($_SESSION['shoping-cart'][$i]['quantity']);?></td>
            <td><?php      echo '<a href="basket.php?action=delete&title=', $_SESSION['shoping-cart'][$i]['title'],'"><button class="btn btn-danger" type="button">usun</button></a></td>';?>
            <td>$<?php    echo number_format($_SESSION['shoping-cart'][$i]['price']* $_SESSION['shoping-cart'][$i]['quantity'],2);?>
            <?php $suma= $suma + floatval($_SESSION['shoping-cart'][$i]['price']* $_SESSION['shoping-cart'][$i]['quantity']); ?>

        </tr>
       
    </tbody>
     
    <?php } 

  
    }
    else{
        echo 'koszyk pusty';

    }?>     

</table>
<?php if($_SESSION['shoping-cart']){?>
<p>Suma: $ <?php print_r($suma);?></p>
<button type="button" class="btn btn-success  btn-block">Przejdz do platnosci</button>
<?php }?>



</div>
</section>


<?php include 'footer.php' ?>



</body>
</html> 