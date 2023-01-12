
<?php
	
	@ob_start();
	require_once('body/meta.php');

?>



<?php


	session_start();
	date_default_timezone_set("Asia/Jakarta");

	include 'body/header.php';
	
	
	if(isset($_GET['page'])){
		$page = $_GET['page'];
 
		switch ($page) {
			case 'Home':
				include "body/body.php";
				break;
			case 'Hotel':
				include "./Halaman/Hotel/index.php";
				break;
			case 'Delivery':
				include "./Halaman/Delivery/index.php";
				break;
			case 'Mart':
				include "./Halaman/Mart/index.php";
				break;
			case 'TopUp':
				include "./Halaman/TopUp/index.php";
				break;
			case 'Tenun':
				include "./Halaman/Tenun/index.php";
				break;	
			default:
				echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
				break;
		}
	}else{
		header("location: ./index.php?page=Home");
	}
 
	
	include 'body/footer.php';
 
?>

