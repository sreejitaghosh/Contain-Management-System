<?php required_once("includes/db.php");?>
<?php required_once("includes/Sessions.php");?>
<?php required_once("includes/function.php");?>

<?php
if(isset($_GET["id"])){
	$IdFromURL=$_GET["id"];
	$ConnectingDB;
$Query="DELETE FROM registration WHERE id='$IdFromURL'";
$Execute=mysqli_query($Connection,$Query);
if($Execute){
			$_SESSION["SuccessMessage"]="Admin Deleted Successfully";
	Redirect_to("Admins.php");	
		}else{
			$_SESSION["ErrorMessage"]="Something went wrong";
	Redirect_to("Admins.php");
	
		}
}
?>