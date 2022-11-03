<?php
session_start();
$passwordError = "";
if(isset($_REQUEST["submit"])){
$name=$_REQUEST["fname"];
if(empty($name)){
    echo "<br>Your first name should not be empty";
}
else if(strlen($name)<4)
{
    $_SESSION["name"]=$name;
    echo "<br>First name should be more than 4 characters";
}
else{
    echo"<br>Your first name is ".$name;
}
$name2=$_REQUEST["lname"];
if(strlen($name2)<4)
if(empty($name2)){
    echo"<br>Your last name should not be empty";
}
else if(strlen($name2)<4)
{
    echo "<br>Last name should be more than 4 characters";
}
else{
    echo"<br>Your Last name is ".$name2;
}

if(isset($_REQUEST["des"]))
{
    $des=$_REQUEST["des"];
    echo "<br>Your designation is ".$des;
}
else{
    echo "<br>You must select designation";
}

if(isset($_REQUEST["Java"]) || isset($_REQUEST["PHP"]) || isset($_REQUEST["C++"]))
{
    if(isset($_REQUEST["Java"]) && isset($_REQUEST["PHP"]) && isset($_REQUEST["C++"]) ){
        echo "<br> You have selected ".$_REQUEST["Java"]." and ".$_REQUEST["PHP"]." and ".$_REQUEST["C++"];
        $prefdata = $_REQUEST["Java"]." and ".$_REQUEST["PHP"]." and ".$_REQUEST["C++"];
        
    }
    else if(isset($_REQUEST["Java"]) && isset($_REQUEST["PHP"])){
        echo "<br> You have selected ".$_REQUEST["Java"]." and ".$_REQUEST["PHP"];
        $prefdata = $_REQUEST["Java"]." and ".$_REQUEST["PHP"];
    }
    else if(isset($_REQUEST["PHP"]) && isset($_REQUEST["C++"])){
        echo "<br> You have selected ".$_REQUEST["PHP"]." and ".$_REQUEST["C++"];
        $prefdata = $_REQUEST["PHP"]." and ".$_REQUEST["C++"];
    }
    else if(isset($_REQUEST["Java"]) && isset($_REQUEST["C++"])){
        echo "<br> You have selected ".$_REQUEST["Java"]." and ".$_REQUEST["C++"];
        $prefdata = $_REQUEST["Java"]." and ".$_REQUEST["C++"];
    }
    else if(isset($_REQUEST["Java"])){
        echo "<br> You have selected ".$_REQUEST["Java"];
        $prefdata = $_REQUEST["Java"];
    }
    else if(isset($_REQUEST["PHP"])){
        echo "<br> You have selected ".$_REQUEST["PHP"];
        $prefdata = $_REQUEST["PHP"];
    }
    else{
        echo "<br> You have selected ".$_REQUEST["C++"];
        $prefdata = $_REQUEST["C++"];
    }
}
else{
    echo "<br>You must select preferance";
}

if(empty($_REQUEST["mail"])){
    echo "<br>Email should not be empty";
}
else{
    echo "<br>Your email is :".$_REQUEST["mail"];
}


if(is_numeric($_REQUEST["password"])>5){
    echo "<br>Your password is valid";
}
else{
    $passwordError= "<br>Your password must contain 1 numerical value";
}

echo "<br>".$_FILES["myfile"]["name"];
if(move_uploaded_file($_FILES["myfile"]["tmp_name"],"../upload/".$_FILES["myfile"]["name"])){
    echo "File uploaded";
}
else{
    echo "File not uploaded";
}

$mydata = array(
    'firstname'=>$name,
    'lastname'=>$name2,
    'password'=>$_REQUEST["password"],
    'age'=>$_REQUEST["age"],
    'email'=>$_REQUEST["mail"],
    'designation'=>$_REQUEST["des"],
    'prefered language'=>$prefdata,
    'file'=>$_FILES["myfile"]["name"]
    
);
$jsondata = json_encode($mydata, JSON_PRETTY_PRINT);
if(file_put_contents("../data/users.json",$jsondata)){
    echo "<br>Data Saved";
}

}
?>