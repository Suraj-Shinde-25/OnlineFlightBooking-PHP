<?php
    session_start();
    require '../helpers/init_conn_db.php';  
    
    // $stmt = mysqli_stmt_init($conn);
    // $flag = false;
    // for($i=0;$i<10;$i++) {
    //     $sql = 'INSERT INTO Passenger_profile (user_id,mobile,dob,f_name,
    //     m_name,l_name,flight_id) VALUES (?,?,?,?,?,?,?)';            
    //     if(!mysqli_stmt_prepare($stmt,$sql)) {
    //         header('Location: ../pass_form.php?error=sqlerror');
    //         exit();            
    //     } else {
    //         mysqli_stmt_bind_param($stmt,'iissssi',$_SESSION['userId'],
    //             $_POST['mobile'][$i],$_POST['date'][$i],$_POST['firstname'][$i],
    //             $_POST['midname'][$i],$_POST['lastname'][$i],$flight_id);                           
    //         mysqli_stmt_execute($stmt);  
    //         $flag = true;        
    //     }
    // }


    $fName = $_POST['firstname'][$i];
    $mName = $_POST['midname'][$i];
    $lName = $_POST['lastname'][$i];
    $mobNo = $_POST['mobile'][$i];
    $date = $_POST['date'][$i];

    $hostname = 'localhost'; 
    $username = 'root'; 
    $userpass = ''; 
    $dbname = 'airlinedb'; 

    $conn = mysqli_connect($hostname,$username,$userpass,$dbname);
    $sql = "insert into passenger_profile(passenger_id,user_id,flight_id,mobile,dob,f_name,m_name,l_name) 
            VALUES ('9','1','1','$mobile','$date','$fName','$mName','$lName')";
    mysqli_query($conn,$sql);
    echo "Registration Successfully completed";

?>