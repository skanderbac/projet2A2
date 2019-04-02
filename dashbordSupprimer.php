<?PHP
include "../core/avisC.php";
$avisC=new AvisC();
if (isset($_GET['id'])){
	$avisC->supprimerAvis($_GET['id']);
	header('Location: dashbordAvis.php');
}

?>