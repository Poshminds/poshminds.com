<?php
namespace Poshminds\Web;

error_reporting(-1);
ini_set('display_errors', 'On');

use Poshminds\Data\User;
use Poshminds\Common\Helper;

require_once ('Common/common.php');
require_once ('Data/User.php');

session_start();

if (!isset($_SESSION["pmEmail"]))
{
	header('Location: login.php');
	exit;
}

?>
<!DOCTYPE html>
<html>
<head>
<title>Poshminds - Registration</title>
 <?php include 'Includes/jscssincludes.php';?>

</head>
<body>
 <?php include 'Includes/Header.php';?>
 <?php
$emailaddress = $password = $errorMessage = ""; 
?>
	<div class="container">

		<ol class="breadcrumb">
			<li><a href="#">Home</a></li>
			<li class="active">Welcome</li>
		</ol>


		<div class="row">
			<div class="col-md-8">
				
					<div class="row">
						<h1>Dear <?php echo $_SESSION["pmFirstName"]?>!! Welcome to Poshminds.com</h1>
					</div>
				

				s
			</div>
		</div>

	</div>
	
	<?php include 'Includes/footer.php';?>
</body>
</html>