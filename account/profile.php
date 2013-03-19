<?php
/*TODO
check if password is empty, if not compare passwords and update. Else do nothing -done
Add basic checks performed in the register page here -done
Construct a string and update in a single mysqli call. Do not use one for each 
Do not display id card/passport details  
*/
include_once("../includes/common.lib.php");
include_once("../includes/config.php");

//check if user is valid
if(!isLoggedIn()) { header("location: ../login.php"); exit;}

$query_user_details = mysqli_query($link,"SELECT * FROM `users` WHERE userid={$_SESSION['user_id']}");
$user = mysqli_fetch_assoc($query_user_details);
mysqli_free_result($query_user_details);

$query_parent_details = mysqli_query($link,"SELECT * FROM `users` WHERE userid={$user['referredby']}");
$parent = mysqli_fetch_assoc($query_parent_details);
mysqli_free_result($query_parent_details);


if ($_POST['submit'] == 'submit') {

    //All fields to directly insert into the database, handle password and donate seperately
    $availableField = array(
        "phonenumber" => "homephone",
        "address1" => "baddress1",
        "address2" => "baddress2",
        "city" => "bcity",
        "postcode" => "bpostalcode",
        "country" => "bcountry",
        "state" => "bcounty",
        "d_address1" => "daddress1",
        "d_address2" => "daddress2",
        "d_city" => "dcity",
        "d_postcode" => "dpostalcode",
        "d_country" => "dcountry",
        "d_state" => "dcounty",
    );

    //Same delivery address as business address
     if($_POST['delivery'] == 1){
                $_POST["d_address1"] = $_POST["address1"];
                $_POST["d_address2"] = $_POST["address2"];
                $_POST["d_city"] = $_POST["city"];
                $_POST["d_postalcode"] = $_POST["postalcode"];
                $_POST["d_country"] = $_POST["country"];
                $_POST["d_state"] = $_POST["state"];
    }

    $query1 = "";
    foreach ($availableField as $key => $value) {
        if ((isset($_POST[$key]) && ($_POST[$key] != ""))) {
            $_POST[$key] = mysqli_real_escape_string($link, $_POST[$key]);
            $query1 .= "`{$value}`='{$_POST[$key]}' ,";
        }
    }

    //Check and set donation
    if($_POST['delivery'] == 3) {
        $query1 .= "`donatetocharity`='yes' ,";
    }else {
        $query1 .= "`donatetocharity`='no' ,";
    }

    //Update password only if it is not null and the re-enter password matches
    if (isset($_POST['password']) && $_POST['password']!='') {
        if (!((isset($_POST['re_password']) && ($_POST['re_password'] != "")) && ($_POST['password'] === $_POST['re_password']))) {
            echo "Passwords should match";
            exit();
        }

        //encrypt password
        $_POST['password'] = encrypt(mysqli_real_escape_string($link, $_POST['password']));
        $query1 .= "`password`='{$_POST['password']}' ,";
    }

    //Delivery available only within spain
    if ($_POST['delivery'] != 3 && $_POST['d_country'] != 'España') {
        echo "Only donation available outside spain";
        exit();
    }


        $query1 = substr($query1, 0, strrpos($query1, ','));
        $query = "UPDATE `users` SET $query1 WHERE `userid`={$_SESSION['user_id']}";
     //   echo $query;
        mysqli_query($link, $query);


}

include('../templates/en/account/header.php');
include('../templates/en/account/profile.php');


?>