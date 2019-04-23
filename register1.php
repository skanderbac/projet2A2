<?PHP
include "../entities/userE.php";
include "../core/userC.php";
//session_start();

if (isset($_POST['password']) and isset($_POST['email']) and isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['sexe']) and isset($_POST['username']) and  isset($_POST['password_r']))
{

	$datetime = date_create()->format('Y-m-d H:i:s');
	$user1=new user($_POST['username'],$_POST['password'],$_POST['email'],$_POST['nom'],$_POST['prenom'],$_POST['sexe'],$datetime);


$user1C=new UserC();
$user1C->ajouterUser($user1);

header('Location: login.php');
	


}
else
{
	echo "vérifier les champs";
}
//*/






?>