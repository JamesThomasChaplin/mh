<?php 
        session_start();
        $userid = $_SESSION['userid'];
        echo $userid;
        $usernameval = $_POST['usernameval'];
        
        
        $conn = mysqli_connect("mhtalk.org.mysql", "mhtalk_org", "oJfW6oqLs6arDoNNgc4z3yAg", "mhtalk_org");

        $sql = "SELECT * FROM users WHERE username = '{$usernameval}'";
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
            // output data of each row
           echo "exists";
        } else {
            echo "Create";
                 $sql = "UPDATE users SET username = '{$usernameval}' WHERE id = '{$userid}'";
                 $result = $conn->query($sql);
        }
        $conn->close();
        
?>