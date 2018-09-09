<?php 	
ob_start();
session_start();
$conn = mysqli_connect("mhtalk.org.mysql", "mhtalk_org", "oJfW6oqLs6arDoNNgc4z3yAg", "mhtalk_org");
			if($conn){
				$email = $_POST['email'];
				$password = hash('sha256', $_POST['password']);
			
				if(!empty($email) && !empty($password)){
				      
				      $select = "SELECT * FROM users WHERE email = '{$email}' AND password = '{$password}'";
                      $result = $conn->query($select); 
                        if(mysqli_num_rows($result)) {
                         if ($result->num_rows > 0) {
                            // output data of each row
                            $id = $row['id'];
                            $current_ip = $_SERVER['REMOTE_ADDR'];
                            $sql = "UPDATE users SET current_ip = '{$current_ip}' WHERE id = '{$id}'";
                            $conn->query($sql); 
                            while($row = $result->fetch_assoc()) {
                                $id = $row['id'];
                                $firstname = $row['firstname'];
                                $_SESSION["userid"] = $id;
                                $_SESSION["firstname"] = $firstname;
                               
                                if($_SESSION["firstname"] && $_SESSION['userid']){
                                  echo ("True");
                                }
                            }
                        } else {
                           
                        }
   
                            
                        
                            
                        } else {
				    
				        echo("Please check your email & password");
					
				}
			}
		}

		
?>