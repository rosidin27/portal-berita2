<?php
	include "../../config/koneksi.php";
	if(isset($_SESSION['username']) && isset($_SESSION['level'])){
		if($_SESSION['username'] == "admin" && $_SESSION['level'] == "admin"){
			if(isset($_POST['field']) && isset($_POST['data']) && isset($_POST['tb'])){
				$table = filter($_POST['tb']);
				$sql = "SELECT *FROM ".$table." ORDER BY id DESC";
				$cek = JumlahData($sql);
				$get = PdoSelect($sql);

				$field = filter($_POST['field']);
				$val = filter($_POST['data']);
				
				//Update
				if($cek > 0){
					$edit = "UPDATE ".$table." SET ".$field."='".$val."' WHERE id = '".$get['id']."'";
					if(PdoQuery($edit)){
						echo "ok";
					}else{
						echo "<script>alert(update);</script>";
						exit();
					}
				}
				//Input
				else{
					$fields = array($field);
					$data = array(array($val));
					if(PdoInput($table,$fields,$data)){
						echo "ok";
					}else{
						echo "<script>alert(input);</script>";
						exit();
					}
				}
			}else{
				echo "<script>alert(1);</script>";
				exit();
			}
		}else{
			echo "<script>alert(2);</script>";
			exit();
		}
	}else{
		echo "<script>alert(3);</script>";
		exit();
	}
?>