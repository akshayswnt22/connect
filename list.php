<?php 
use Phppot\Member;
if (! empty($_POST["signup-btn"])) {
    require_once './Model/Member.php';
    $member = new Member();
    $registrationResponse = $member->listMember();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets\css\list.css">
    
</head>
<body>
        <table>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Mobile No</th>
                    <th>Email</th>
                    <th>College_Name</th>
                    <th>Branch</th>
                    <th>Date</th>
                </tr>

            <?php
            if(!$registrationResponse)
            {
                die("Invalid query".$conn->error);
            }
            while($row = $registrationResponse->fetch_assoc())
            {
             echo "<tr>
                    <td>". $row["id"] . "</td>
                    <td>". $row["name"] . "</td>
                    <td>". $row["mobile_no"] . "</td>
                    <td>". $row["email"] . "</td>
                    <td>". $row["college_name"] . "</td>
                    <td>". $row["branch"] . "</td>
                    <td>". $row["reg_date"] . "</td>
                    
                </tr>";
            }
            ?>    
        </table>
</body>
</html>