<?php 
	$conn = mysqli_connect("mhtalk.org.mysql", "mhtalk_org", "oJfW6oqLs6arDoNNgc4z3yAg", "mhtalk_org");
			if($conn){
				$email = $_POST['email'];
				$password = hash('sha256', $_POST['password']);
				$firstname = $_POST['firstname'];
				$lastname = $_POST['lastname'];
				$dob = $_POST['dob'];
				$signup_ip = $_SERVER['REMOTE_ADDR'];
				$creation_date = date("d/m/Y");
				$admin_level = 1;
				$current_ip = $_SERVER['REMOTE_ADDR'];
				
				if(!empty($email) && !empty($password) && !empty($firstname) && !empty($lastname)){
				      
				      $select = mysqli_query($conn, "SELECT email FROM users WHERE email = '".$email."'") or exit(mysqli_error());
                       
                        if(mysqli_num_rows($select)) {
                            exit('This email is already being used');
                        } else {
				    
					$sql = "INSERT INTO users(email, password, firstname, lastname, dob, signup_ip, creation_date, current_ip) VALUES('{$email}', '{$password}', '{$firstname}', '{$lastname}', '{$dob}','{$signup_ip}', '{$creation_date}', '{$current_ip}')";
					if (mysqli_query($conn, $sql)) {
                            echo("Thank you, please check your email ");
					} else {
					        echo("Please try again");
					} 						
				}
			}
		}

			
?>