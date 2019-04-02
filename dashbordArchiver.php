<?PHP

include "../entities/avisE.php";
include "../core/avisC.php";

include "../entities/avisAE.php";
include "../core/avisAC.php";
//
$avis1C=new AvisC();
$avisA1C=new AvisAC();

if (isset($_GET['id']))
{
	$idt=$_GET['id'];
	echo $idt;
		$result=$avis1C->recupererAvis($_GET['id']);
		foreach($result as $row)
		{
			$text=$row['text'];
			$etoile=$row['etoile'];
			$date_creation=$row['date_creation'];
		}
		echo $idt;
		$avis1A=new avisA($text,$etoile,$date_creation);
			$avisA1C->ajouterAvisA($avis1A);
			$avis1C->supprimerAvis($idt);
			header('Location: dashbordAvis.php');
}
else
{
	echo "probleme .....";
}


?>