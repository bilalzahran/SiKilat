<?php 
	include_once('connection/Connection.php');

	class LoginController extends Connection{
		private $conn;
		public function __construct(){
			$this->conn = $this->connect();
		}

		public function login($username, $password){			

			$sql = "SELECT id,nama_pengirim FROM pengirim WHERE username='$username' and password='$password'";
			$result = mysqli_query($this->conn, $sql);
			$row = mysqli_fetch_array($result);			
			$count = mysqli_num_rows($result);

			if($count == 1){				
				$_SESSION['id'] = $row['id'];
				$_SESSION['nama_pengirim'] = $row['nama_pengirim'];
				echo $row['nama_pengirim'];
				header("location:StatusPengiriman.php");
			}else{
				echo "Your Login Name or Password is invalid";				
			}
		}
	}	
 ?>