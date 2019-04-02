<?PHP
session_start();  
//$_SESSION['username']
include "../entities/avisE.php";
include "../core/avisC.php";
//


if ( isset($_POST['msg']))
{
	if(is_numeric($_POST['msg'])==true)
	{
		 echo '<script> alert("les champs doit etre chaines des caractères"); </script>';
	}
	else
	{
		$datetime = date_create()->format('Y-m-d H:i:s');
		$avis1=new avis($_SESSION['username'],$_POST['msg'],$_POST['rating'],$datetime);
		$avis1C=new AvisC();
		$avis1C->ajouterAvis($avis1);



		





		header('Location: reclamationAffichage.php');
	}
	
}
else
{
	echo "vérifier les champs";
	echo $email;
	echo $_POST['msg'];
}
//*/

?>