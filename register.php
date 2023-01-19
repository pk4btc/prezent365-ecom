<?php include('navbar.php') ?>

<section>
    <div class="conatiner" >
        <div class="row d-flex justify-content-center">
            <div class="col-lg-6 col-md-7 col-sm-8 col-xs-10">

                <form action="mechanism/registerMechanism.php" method="post">
                    
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" name="email"   class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1"  class="form-label">Haslo</label>
                        <input type="password" name="pass"  class="form-control" id="exampleInputPassword1">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword2"  class="form-label">Powtorz Haslo</label>
                        <input type="password"  name="passconfirm" class="form-control" id="exampleInputPassword2">
                    </div>

                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Zapamietaj mnie</label>
                    </div>

                    <button type="submit" name="submit" class="btn btn-primary">Zarejestruj mnie</button>
                </form>
                
                <?php 
                if(isset($_GET["error"])) {
                    if($_GET["error"] == "emptyinput"){
                    echo '<div class="alert alert-danger" role="alert">
                    Pola Puste
                  </div>'; }

                    else if($_GET["error"] == "EmailExists"){
                        echo '<div class="alert alert-danger" role="alert">
                    Mail istnieje
                  </div>'; }

                    else if($_GET["error"] == "passWrong"){
                        echo '<div class="alert alert-danger" role="alert">
                        Bledne hasla
                      </div>';}        
                    else if ($_GET["error"] == "invalidEmail"){
                        echo '<div class="alert alert-danger" role="alert">
                    niewlasciwy mail
                  </div>';}
                    else if($_GET["error"] == "none"){
                        echo '<div class="alert  alert-success" role="alert">
                        Brawo zarejestowales sie
                      </div>';}  
                    }
            ?>
            </div> 

            <p>

         
            </p>
            </div>
                
    </div>
        



</section>


<?php include 'footer.php' ?>

</body>
</html> 