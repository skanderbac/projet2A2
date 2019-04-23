<?php
include_once "../config.php";
class livC{
function afficherLivreur ($livreur){
		echo "id_livreur: ".$livreur->getid_livreur()."<br>";
		echo "nom: ".$livreur->get_nom()."<br>";
		echo "prenom: ".$livreur->get_prenom()."<br>";
		echo "dispo: ".$livreur->get_dispo()."<br>";
		echo "region: ".$livreur->get_region()."<br>";
	}
	
	function ajouterlivr($livreur){
		$sql="insert into livreur (id_livreur,nom,prenom,dispo,region) values (:id_livreur,:nom,:prenom,:dispo,:region)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $id_livreur=$livreur->getid_livreur();
        $nom=$livreur->get_nom();
        
        $prenom=$livreur->get_prenom();
      
        $dispo=$livreur->get_dispo();
        $region=$livreur->get_region();
		$req->bindValue(':id_livreur',$id_livreur);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':dispo',$dispo);
				$req->bindValue(':region',$region);
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
    function afficher()
      {
      	$sql="select * from livreur ";
		
      	$db=config::getConnexion();
        
        try{

      	$liste=$db->query($sql);
      	return $liste;
      }catch(Exception $e){
      	die('erreur');
      }}
	 // function affecter($id,$cin)
      //{			
      	
		

		//$sql="UPDATE livruer SET id_livraison='".$id."' WHERE cin='".$cin."' ";
		
      	//$db=config::getConnexion();
        //  $db->query($sql);
//}

	  
	  //function ajoutliv($liv){
		//$req="INSERT INTO livruer(cin,nom,region,dispo) VALUES ('".$liv->get_cin()."','".$liv->get_nom()."','".$liv->get_region()."','".$liv->get_dispo()."')";
		
		//$db=config::getConnexion();
		//$db->query($req);
	//}
       function modifierlivreur($livreur,$id){
		$sql="UPDATE livreur SET id_livreur=:id_livreur, nom=:nom,prenom=:prenom,dispo=:dispo,region=:region WHERE id_livreur=:id";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
	  	
        $id_livreur=$livreur->getid_livreur();
        $nom=$livreur->get_nom();  
        $prenom=$livreur->get_prenom();
        $dispo=$livreur->get_dispo();
        $region=$livreur->get_region();
		$req->bindValue(':id_livreur',$id_livreur);
		$req->bindValue(':id',$id);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':dispo',$dispo);
		$req->bindValue(':region',$region);
       
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  //print_r($datas);
        }
		
	}

function recupererlivreur($id){
		$sql="SELECT * from livreur where id_livreur='$id'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
function supprimer($id){

  $sql="DELETE FROM livreur WHERE id_livreur='".$id."' ";
  $db= config::getConnexion();
  $db->query($sql);
   }




}
?>