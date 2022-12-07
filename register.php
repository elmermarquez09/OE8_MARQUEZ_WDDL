<?php 
require_once('connect.php');


if($con){
            
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $cnum = $_POST['cnum'];
            $bday = $_POST['bday'];
            $image = $_POST['image'];
            $add = $_POST['add'];
            $gender = $_POST['gender'];
            $userna = $_POST['userna'];
            $inputem = $_POST['inputem'];
            $inputpass = $_POST['inputpass'];
            $confirmpass = $_POST['confirmpass']; 

         

     $query = "insert into users_tbl(firstname, lastname, contactnumber, birthdate, image, address, gender, username, emailaddress, password, confirmpassword, reg_date) values
     ('$fname','$lname','$cnum','$bday','$image','$add','$gender','$userna','$inputem','$inputpass','$confirmpass',NOW())";

     $result = mysqli_query($con, $query);
        if($result){
        echo 'Registration successfully...';
        }
        else{
            $err[] = 'Registration failed...'.mysqli_error($con);
        }
    mysqli_close($con);
}
        else{
            exit('Could not connect to db.'.mysqli_connect_error());
}

?>
