<?php include('navbar.php') ?>



<section>
  <div class="container  text-center  mt-5">
    <div class="row ">
      <div class="col-lg-6 col-md-6 col-sm-6 d-flex justify-content-center mt6"  >
          <div class="card"  onclick="ceramicznyCardClick()" style="width: 18rem;">
            <img src="img/ceramiczny.jpg" class="card-img-top" alt="...">
             <div class="card-body">
                <h5 class="card-title">Kubek ceramiczny</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
             </div>
           </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-6 d-flex justify-content-center" >
      <div class="card"  onclick="metalCardClick()" style="width: 18rem;">
          <img src="img/metal_kubek.jpg" class="card-img-top" alt="...">
           <div class="card-body">
              <h5 class="card-title">Kubek metalowy</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
           </div>
         </div>
      </div>
      
      <div class="col-lg-6 col-md-6 col-sm-6">
        
      </div>
    </div>
  </div>
  
</section>


<script>


function  metalCardClick(){
document.location.href="metalowe.php"
}
function  ceramicznyCardClick(){
document.location.href="ceramiczny.php"
}

</script>
<body>


  
<?php include 'footer.php' ?>

</body>
</html> 