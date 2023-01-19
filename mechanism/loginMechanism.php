  <?php 
  
if(isset($_POST["submit"])) {

//superglobal checking
$email = $_POST["email"];
$pass = $_POST["pass"];

require_once 'dbconn.php';
require_once 'func.php';
  
  
  if(emptyInputLogin($email, $pass) != false){
        header("location: ../login.php?error=emptyinput ");
        exit();
    }  
    else if(invalidEmail($email) != false){
        header("location: ../login.php?error=invalidMail ");
        
        exit();
    } 
    
    loginUser($conn,$email,$pass);
    } else{
        header("location: ../login.php");
        exit();
    }
    ?>

