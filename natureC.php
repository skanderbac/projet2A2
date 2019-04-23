<?PHP
include_once "../config.php";
class NatureC {

	function afficherNature ($nature){
		echo "id: ".$nature->getId()."<br>";
		echo "type: ".$nature->getType()."<br>";
	}

	function afficherNatures(){
		$sql="SElECT * From nature";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	

	function recupererNature($id){
		$sql="SELECT type from nature where id='$id'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}








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