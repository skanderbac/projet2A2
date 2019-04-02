<?PHP
include "../config.php";
class ReclamationC {
function afficherReclamation ($reclamation){
		echo "probleme: ".$reclamation->getProbleme()."<br>";
		echo "Autre: ".$reclamation->getAutre()."<br>";
		echo "date_creation: ".$reclamation->getDate_creation()."<br>";
		echo "etat: ".$reclamation->getEtat()."<br>";
		echo "email: ".$reclamation->getEmail()."<br>";
		echo "reponse: ".$reclamation->getReponse()."<br>";
	}
	function ajouterReclamation($reclamation){
		$sql="insert into reclamation (probleme,autre,date_creation,etat,email,image,avis,utilisateur,reponse) values (:probleme,:autre,:date_creation,:etat,:email,:image,:avis,:utilisateur,:reponse)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $probleme=$reclamation->getProbleme();
        $autre=$reclamation->getAutre();
        $date_creation=$reclamation->getDate_creation();
        $etat=$reclamation->getEtat();
        $email=$reclamation->getEmail();
        $image=$reclamation->getImage();
        $avis=$reclamation->getAvis();
        $utilisateur=$reclamation->getUtilisateur();
        $reponse=$reclamation->getReponse();
		$req->bindValue(':probleme',$probleme);
		$req->bindValue(':autre',$autre);
		$req->bindValue(':date_creation',$date_creation);
		$req->bindValue(':etat',$etat);
		$req->bindValue(':email',$email);
		$req->bindValue(':image',$image);
		$req->bindValue(':avis',$avis);
		$req->bindValue(':utilisateur',$utilisateur);
		$req->bindValue(':reponse',$reponse);
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherReclamations(){
		$sql="SElECT * From reclamation";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function afficherReclamationsuser($user){
		$sql="SElECT * From reclamation WHERE utilisateur='$user'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerReclamation($email){
		$sql="DELETE FROM reclamation where email= :email";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':email',$email);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierReclamation($reclamation,$emaill){
		$sql="UPDATE reclamation SET probleme=:probleme, autre=:autre,date_creation=:date_creation,etat=:etat,email=:email,image=:image,avis=:avis,utilisateur=:utilisateur,reponse=:reponse WHERE email=:emaill";
		
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
        $avis=$reclamation->getAvis();
        $utilisateur=$reclamation->getUtilisateur();
        $reponse=$reclamation->getReponse();
		$req->bindValue(':probleme',$probleme);
		$req->bindValue(':autre',$autre);
		$req->bindValue(':emaill',$emaill);
		$req->bindValue(':etat',$etat);
		$req->bindValue(':email',$email);
		$req->bindValue(':date_creation',$date_creation);
		$req->bindValue(':image',$image);
		$req->bindValue(':avis',$avis);
		$req->bindValue(':utilisateur',$utilisateur);
		$req->bindValue(':reponse',$reponse);
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  //print_r($datas);
        }
		
	}
	function recupererReclamation($emaill){
		$sql="SELECT * FROM reclamation WHERE email='$emaill'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function calculerReclamation($probleme){
		$sql="SELECT * FROM reclamation where probleme='$probleme'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		$nombre=$liste->rowCount();
		return $nombre;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
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