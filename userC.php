<?PHP
include "../config.php";
class UserC {
function afficherUser ($user){
		echo "username: ".$avis->getUsername()."<br>";
		echo "password: ".$avis->getPassword()."<br>";
		echo "email: ".$avis->getEmail()."<br>";
		echo "nom: ".$avis->getNom()."<br>";
		echo "prenom: ".$avis->getPrenom()."<br>";
		echo "sexe: ".$avis->getSexe()."<br>";
		echo "date_creation: ".$avis->getDate_creation()."<br>";
		echo "id_nature: ".$avis->getId_nature()."<br>";
	}
	function ajouterUser($user){
		$sql="insert into user (username,password,email,nom,prenom,sexe,date_creation,id_nature) values (:username,:password,:email,:nom,:prenom,:sexe,:date_creation,:id_nature)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
        $username=$user->getUsername();
        $password=$user->getPassword();
        $email=$user->getEmail();
       	$nom=$user->getNom();
       	$prenom=$user->getPrenom();
       	$sexe=$user->getSexe();
       	$id_nature=$user->getId_nature();
       	$date_creation=$user->getDate_creation();
		$req->bindValue(':username',$username);
		$req->bindValue(':password',$password);
		$req->bindValue(':email',$email);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':sexe',$sexe);
		$req->bindValue(':date_creation',$date_creation);
		$req->bindValue(':id_nature',$id_nature);
        $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	function recupererUser($username){
		$sql="SELECT * from user where username='$username'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function afficherUsers(){
		$sql="SElECT * From user";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}

	function afficherUtilisateur($utilisateur){
		$sql="SElECT * From user WHERE username='$utilisateur'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}

	/*
	function supprimerAvis($id){
		$sql="DELETE FROM avis where id= :id";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id',$id);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function recupererAvis($id){
		$sql="SELECT * from avis where id='$id'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}*/

	/*function modifierReclamation($reclamation,$emaill){
		$sql="UPDATE reclamation SET probleme=:probleme, autre=:autre,date_creation=:date_creationn,etat=:etat,email=:email,image=:image WHERE email=:emaill";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$probleme=$reclamation->getProbleme();
        $autre=$reclamation->getAutre();
        $date_creation=$reclamation->getDate_creation();
        $etat=$reclamation->getEtat();
        $email=$reclamation->getEmail();
        $image=$reclamation->getImage();
		$req->bindValue(':probleme',$probleme);
		$req->bindValue(':autre',$autre);
		$req->bindValue(':emaill',$emaill);
		$req->bindValue(':etat',$etat);
		$req->bindValue(':email',$email);
		$req->bindValue(':date_creation',$date_creation);
		$req->bindValue(':image',$image);
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererReclamation($email){
		$sql="SELECT * from reclamation where email=$email";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}*/
	
	/*function rechercherListeEmployes($tarif){
		$sql="SELECT * from employe where tarifhoraire=$tarif";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}*/
}

?>