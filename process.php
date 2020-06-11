<?php
    //Variables
    $id = $_POST['id'];
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $bday = $_POST['bday'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    if (!empty($_POST['hobby1'])) {
        $hobby1 = $_POST['hobby1'];
    } else {
        $hobby1 = "";
    }
    if (!empty($_POST['hobby2'])) {
        $hobby2 = $_POST['hobby2'];
    } else {
        $hobby2 = "";
    }
    if (!empty($_POST['hobby3'])) {
        $hobby3 = $_POST['hobby3'];
    } else {
        $hobby3 = "";
    }
    $hobby = $_POST['address'];
    $info = $_POST['info'];

    //Database Connection
    $conn = new mysqli('localhost','root','','test');
    if($conn->connect_error)
    {
        die('Connection Failed : '.$conn->connect_error);
    }
    else
    {
        //Update
        
        $sql = "UPDATE employee SET name='$name',gender='$gender',bday='$bday',email='$email',address='$address',hobby1='$hobby1',hobby2='$hobby2',hobby3='$hobby3',info='$info' WHERE id='$id'";
        if(!mysqli_query($conn,$sql))
        {
            echo 'Error';
        }
        else
        {
            echo"UpdatedInformation Successfully. You Are Redirecting to Homepage";
            header( "refresh:2;url=list.php" );
        }
    }
