<?php 
        session_start();
    // Create connection
        $id = $_SESSION['userid'];
        
        
        $conn = mysqli_connect("mhtalk.org.mysql", "mhtalk_org", "oJfW6oqLs6arDoNNgc4z3yAg", "mhtalk_org");

        $sql = "SELECT * FROM users WHERE id = '{$id}'";
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                if($row['username'] === "blank"){
                    echo('blank');
                } else {
                    echo($row);
                }
            }
        } else {
            echo "0 results";
        }
        $conn->close();
        
?>