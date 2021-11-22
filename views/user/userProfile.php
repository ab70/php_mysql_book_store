<?php include("../header/header.php");
        include("../../functions/db.php");
        include("../../functions/functions.php");
        
?>
<?php if (!isset($_SESSION['username']))
	header("location: ../user/userLogin.php");
 ?>
	

<html>
	<body>
		<div class="container mt2">
			 <b>User Profile Dashboard</b>
			
		</div>
		
	</body>
</html>