<?php required_once("includes/db.php");?>
<?php required_once("includes/Sessions.php");?>
<?php required_once("includes/function.php");?>

<?php
if(isset($_GET["id"])){
	$IdFromURL=$_GET["id"];
	$ConnectingDB;
$Query="DELETE FROM category WHERE id='$IdFromURL'";
$Execute=mysqli_query($Connection,$Query);
if($Execute){
			$_SESSION["SuccessMessage"]="Category Deleted Successfully";
	Redirect_to("Categories.php");	
		}else{
			$_SESSION["ErrorMessage"]="Something went wrong";
	Redirect_to("Categories.php");
	
		}
}
?>