<?php
    function m_view(){
        include 'connection.php';
        $query ="SELECT *FROM tblstudent";
        $getData =mysqli_query($connection, $query);
        $rows =[];
        if( $getData && mysqli_num_rows($getData) > 0){
            foreach ($getData as $record){
                $rows[] = $record;
            }
        }
        return $rows;
    }


    function m_add($data){
        include 'connection.php';
        $fname =$_POST['fname'];
        $lname =$_POST['lname'];
        $gender=$_POST['gender'];
        $phone =$_POST['phone'];
        $email =$_POST['email'];
        $province=$_POST['province'];
        
        $insert ="INSERT INTO  tblstudent(firstname,lastname,gender,phone,email,provice) VALUES ('$fname','$lname','$gender','$phone','$email','$province')";
        $addinsert =mysqli_query($connection, $insert);

        return  $addinsert;
        
    }
?>