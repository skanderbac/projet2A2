<?PHP
include "../core/reclamationC.php";
$reclamationC=new ReclamationC();
if (isset($_GET['emaill'])){
	$reclamationC->supprimerReclamation($_GET['emaill']);
	header('Location: dashbordReclamation.php');
}

?>