<?PHP
include_once "../config.php";
class AvisAC {

	function ajouterAvisA($avisA){
		$sql="insert into avisarchive (text,etoile,date_creation) values (:text,:etoile,:date_creation)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
        $text=$avisA->getText();
        $etoile=$avisA->getEtoile();
       	$date_creation=$avisA->getDate_creation();
		$req->bindValue(':text',$text);
		$req->bindValue(':etoile',$etoile);
		$req->bindValue(':date_creation',$date_creation);
        $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	

	/*function recupererAvisA($etoile){
		$sql="SELECT * from avisarchive where etoile='$etoile'";
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