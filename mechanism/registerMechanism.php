<?php
/* checking if to get this page registermechanism somone get here in proper way by clicinkg submit   */
/*build in function */
if(isset($_POST["submit"])){
    /*super global*/
    $email = $_POST["email"];
    $pass = $_POST["pass"];
    $passconfirm = $_POST["passconfirm"];

    require_once 'dbconn.php';
    require_once 'func.php';

    /*1= if it is somethinf diferent from FALSE */
    if(emptyInputRegister( $email, $pass,$passconfirm) != false){
        header("location: ../register.php?error=emptyinput ");
        exit();


    } 
    if(passwordSame($pass,$passconfirm) != false){
        header("location: ../register.php?error=passWrong ");
        exit();
    }
    // coonect to datadabe to check if similar exisits
    
    if(invalidEmail($email) !== false){
        header("location: ../register.php?error=invalidEmail");
        exit();
    }
    if(sameEmail($conn, $email,$pass) !== false){
        header("location: ../register.php?error=EmailExists");
        exit();
    }

    createUser($conn,$email,$pass);

}else{
/*built in header function for exmaple sending somewhere */

    header("location: ../register.php ");
    // stop if anything happen
    exit();
    
}
?>