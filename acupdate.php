<?php session_start();
if ($_SESSION['testcomplete'] == 'yes') {
    header("Location:cheater.php");
}
?>

<?php 

function validpassword1($pass){
    if (preg_match("#.*^(?=.{8,20})(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9]).*$#",$pass)){
        $sp_flag = preg_match('@[^\w]@', $pass);
        if($sp_flag){
            return true;
        }
        echo "Your password is weak.";
        return false;
    } else {
        echo "Your password is weak.";
        return false;
    }
}
function endsWith( $haystack, $needle ) {
    $length = strlen( $needle );
    if( !$length ) {
        return true;
    }
    return substr( $haystack, -$length ) === $needle;
}




if(isset($_POST["ufname"]) && isset($_POST["ulname"]) && isset($_POST["upass"])){
    // name checking
    if(preg_match("/[^A-Za-z']/", $_POST["ufname"]) || preg_match("/[^A-Za-z']/", $_POST["ulname"])){
       print("inavlid name first name and last name must contain only alphabets");
       exit();
    }
    // pass matching
    if($_POST["upass"] != $_POST["uconfpass"]){
        print("passwords do not match");
        exit();
    }
    // password validity
    if(!validpassword1($_POST["upass"])){
        print("Kindly check if your password follows the given criteria -</br>
        1. Password length should be between 8 to 2 characters</br>
        2. Password should contain at least 1 Capital letter , 1 small letter , 1 numeric character</br>
        3. Password should contain at least 1 special symbol</br>");
        exit();
    }


    // inserting into users table
    
    $dbhost = 'localhost';
    $dbuser = 'root';
    $dbpass ='';
    $dbname ='dblab8';

    $mysqli = new mysqli($dbhost, $dbuser, $dbpass , $dbname);
    
    if($mysqli->connect_errno){
        printf("connection failed", $mysqli->connect_error);
        exit();
    }
    $id = $_SESSION['id'];
    $fname = $_POST['ufname'];
    $lname = $_POST['ulname'];
    $email = $_SESSION['email'];
    $pwd = $_POST["upass"];

    $sql1 = "update users set FirstName = '$fname' , LastName = '$lname' , email = '$email' , pass = '$pwd'
    where id = '$id' ;";
    $mysqli->query($sql1);
    print("User information updated successfully!!");
    header("Location: updatelogout.php");
    exit;
}else{
    print("fill in all the valid details");
    exit();
}

?>