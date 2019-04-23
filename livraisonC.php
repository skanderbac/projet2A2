<?php
include_once "../config.php";



class livraisonC{
function afficherLivr ($livraison){
		echo "id_livraison: ".$livraison->getid_livraison()."<br>";
		echo "id_user: ".$livraison->getid_user()."<br>";
		echo "id_livreur: ".$livraison->getid_livreur()."<br>";
		echo "id_produit: ".$livraison->getid_produit()."<br>";
		echo "prix_produit: ".$livraison->getprix_produit()."<br>";
		echo "region: ".$livraison->getregion()."<br>";
		echo "email_client: ".$livraison->getemail_client()."<br>";
		echo "date_livraison: ".$livraison->getdate_livraison()."<br>";
	}
	function ajouterlivr($livraison){
		$sql="INSERT into livraison(id_livraison,id_user,id_livreur,id_produit,prix_produit,region,email_client,date_livraison) values (:id_livraison, :id_user,:id_livreur,:id_produit,:prix_produit,:region,:email_client,:date_livraison)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
        $id_livraison=$livraison->getid_livraison();
        $id_user=$livraison->getid_user();
        $id_livreur=$livraison->getid_livreur();
        $id_produit=$livraison->getid_produit();
        $prix_produit=$livraison->getprix_produit();
        $region=$livraison->getregion();
        $email_client=$livraison->getemail_client();
        $date_livraison=$livraison->getdate_livraison();
		$req->bindValue(':id_livraison',$id_livraison);
		$req->bindValue(':id_user',$id_user);
		$req->bindValue(':id_livreur',$id_livreur);
		$req->bindValue(':id_produit',$id_produit);
		$req->bindValue(':prix_produit',$prix_produit);
		$req->bindValue(':region',$region);
		$req->bindValue(':email_client',$email_client);
		$req->bindValue(':date_livraison',$date_livraison);
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	

function afficher()
      {
      	$sql="select * from livraison ";
		
      	$db=config::getConnexion();
        
        try{

      	$liste=$db->query($sql);
      	return $liste;
      }catch(Exception $e){
      	die('erreur');
      }
	  }





 function supprimer($id){

  $sql="DELETE FROM livraison WHERE id_livraison='".$id."' ";
  $db= config::getConnexion();
  $db->query($sql);
   }

  function modifierlivraison($livraison,$id){
		$sql="UPDATE livraison SET id_livraison=:id_livraison, id_user=:id_user,id_livreur=:id_livreur,id_produit=:id_produit,prix_produit=:prix_produit,region=:region,email_client=:email_client,date_livraison=:date_livraison WHERE id_livraison=:id";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
	    $id_livraison=$livraison->getid_livraison();
        $id_user=$livraison->getid_user();
        $id_livreur=$livraison->getid_livreur();
        $id_produit=$livraison->getid_produit();
        $prix_produit=$livraison->getprix_produit();
        $region=$livraison->getregion();
        $email_client=$livraison->getemail_client();
        $date_livraison=$livraison->getdate_livraison();
        $req->bindValue(':id',$id);
		$req->bindValue(':id_livraison',$id_livraison);
		$req->bindValue(':id_user',$id_user);
		$req->bindValue(':id_livreur',$id_livreur);
		$req->bindValue(':id_produit',$id_produit);
		$req->bindValue(':prix_produit',$prix_produit);
		$req->bindValue(':region',$region);
		$req->bindValue(':email_client',$email_client);
		$req->bindValue(':date_livraison',$date_livraison);
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  //print_r($datas);
        }
		
	}
	function recupererlivraison($id){
		$sql="SELECT * FROM livraison WHERE id_livraison ='$id'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	  
       

}
function modifier_liv2($id)
	{
		
  
			$etat='oui';
			$sql="UPDATE livraison SET etat='$etat' WHERE id_livraison='".$id."' ";
			
	$db=config::getConnexion();
	  $db->query($sql);
	  
       

}


	function afficher_une_livraison($id)

{
	$c = Config::getConnexion();
	

		try {
			$li=$c->query("SELECT * FROM livraison WHERE id_livraison='".$id."'");
			
			return $li;
			
		} catch (Exception $e) {
			die('Erreur : '.$e->getMessage());
			
		}	

}
function recupererlivraison($id){
		$sql="SELECT * from livraison where id_livraison=$id";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
function afficherLivr1(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From livraison ORDER BY daten";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}

	



	


?>