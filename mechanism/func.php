<?php


function emptyInputRegister($email,$pass,$passconfirm){
     $result;
    // build in function checking
    if(empty($email) || empty($pass)|| empty($passconfirm)){
        $result = true;

    }else{
        $result=false;
    }
    return $result;
}
function passwordSame($pass,$passconfirm){
    $result;
    // build in function checking
    if($pass !== $passconfirm){
        $result = true;

    }else{
        $result=false;
    }
    return $result;
}

function invalidEmail($email){
    $result;
    // // looking for some patern like bottom  if not match then error
    // //but ! means oposite negacja
    // if(!preg_match("/^[a-zA-Z0-9]*$/"), $email){
    //     $result = true;

        //buil in funnction checking in good email typed
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $result=true;
    }else{
        $result=false;
    }
    return $result;
}


function sameEmail($conn,$email){
    //question mark placeholder --->?

    $sql="SELECT * FROM users WHERE usersEmail = ? ;";
    //preparing statment
    $stmt = mysqli_stmt_init($conn);
    //  run sql statment in this prepared stmt
    if(!mysqli_stmt_prepare($stmt,$sql)){
        header('location: ../register.php?error=EmailExists');
        exit();
    }
    //submiting string string,
    mysqli_stmt_bind_param($stmt,"s",$email);

    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if($row= mysqli_fetch_assoc($result)){
        return $row;
       

    }else{
        $result=false;
        return $result;
    }
//grabbing checking assign what comes from actual our binded statmentSTMT
    mysqli_stmt_close($stmt);

    
}


function createUser($conn,$email,$pass){
   
        //question mark placeholder --->?
    
        $sql="INSERT INTO users (usersEmail,usersPwd) VALUES (?,?);";
        //preparing statment
        $stmt = mysqli_stmt_init($conn);
        //  run sql statment in this prepared stmt
        if(!mysqli_stmt_prepare($stmt,$sql)){
            header('location: ../register.php?error=StmtFailed');
    
        }

        // hashing password
        $hashPass= password_hash($pass,PASSWORD_DEFAULT);
        //submiting string string,
        mysqli_stmt_bind_param($stmt,"ss",$email,$hashPass);
        mysqli_stmt_execute( $stmt);
        mysqli_stmt_close($stmt);
        header('location: ../register.php?error=none');
        exit();

    }



    
function emptyInputLogin($email,$pass){
    $result;
   // build in function checking
   if(empty($email) || empty($pass)){
       $result = true;

   }else{
       $result=false;
   }
   return $result;
}

function loginUser($conn,$email,$pass){
$mailExists = sameEmail($conn,$email);

if($mailExists===false){
    header("location: ../login.php?error=zlyMail");
    exit();
}

$passHash = $mailExists["usersPwd"];
$checkPwd = password_verify($pass, $passHash);
if($checkPwd===false){
    header("location: ../login.php?error=passWrong");
    exit();
}
else if($checkPwd ===true){
    session_start();
    $_SESSION["userEmail"] = $mailExists["usersEmail"];
    header("location: ../index.php");

    exit();

}else{
    header("location: ../index.php?error=wrong");
    exit();
}

}
?>