<?php
        include 'lib/DataSource.php';
       if(isset($_POST['submit']))
       {
       
        $Name =  $_REQUEST['fullname'];
        $Mobile_no = $_REQUEST['mobile'];
        $Email =  $_REQUEST['email'];
        $College_name = $_REQUEST['clgname'];
        $Branch = $_REQUEST['branchname'];
        $Date = $_REQUEST['date'];
        
        $sql = "insert into tbl_enquiry (id,name,mobile_no,email,college_name,branch,reg_date) VALUES('$Name', 
            '$Mobile_no','$Email','$College_name','$Branch','$Date')";
        
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully." 
                . " Please browse your localhost php my admin" 
                . " to view the updated data</h3>"; 

            echo nl2br("\n$first_name\n $last_name\n "
                . "$gender\n $address\n $email");
        } else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn);
        }
    }
        // Close connection
        mysqli_close($conn);
        ?>