<?php include('navbar.php') ?>
<head>
    <link rel="stylesheet" type="text/css" href="ceramiczny.css"/>

</head>


<section>
<div class="conatiner">
<div class="row">

    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
 
            <img class="img-fluid" src="img\ceramiczny.jpg">


    </div>
    
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <div class="row">
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Podaj Tekst na swoj kubek</label>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder">
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Another label</label>
                <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder">
            </div>
            <p>Tekst na kubku:</p>
            <div class="form-check">
       
                <input class="form-check-input" checked type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">Jedna Strona
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" >
                <label class="form-check-label" for="flexRadioDefault2">Z dwóch stron    </label>
            </div>
            <div class="row">
            <p>Kubek dla osoby:</p>      
            <div class="form-check">
                <input checked class="form-check-input" type="radio" name="flexRadioDefault1" id="flexRadioDefault3" >
                <label class="form-check-label" for="flexRadioDefault3">Prawo reczna                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault1" id="flexRadioDefault4" >
                <label class="form-check-label" for="flexRadioDefault4">Lewo reczna                </label>
            </div>
            </div>

            <div class="col-6">      
                <button class="btn btn-primary" type="submit">Do koszyka</button> 
            </div>
        <div class="col-6">
            <button class="btn btn-primary" type="submit">Kupuje i place</button>
        </div>

        </div>


</div>

</div>

  
</section>


<?php include 'footer.php' ?>

</body>
</html> 