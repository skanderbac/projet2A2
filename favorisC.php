<?PHP
include "../config.php";
class FavorisC {
function afficherFavori ($produit){
	     
	    echo "id: ".$produit->getId1()."<br>";
		echo "Libelle: ".$produit->getLibelle1()."<br>";
		echo "prix: ".$produit->getPrix1()."<br>";
		echo "Quantite: ".$produit->getQte1()."<br>";
		echo "Status: ".$produit->getSatus()."<br>";
		
	}
	/*
	function calculerSalaire($employe){
		echo $employe->getNbHeures() * $employe->getTarifHoraire();
	}
	*/
	/*
	function ajouterFavoris($produit){
		$sql="insert into produit (libelle,categorie,marque,qte,couleur,prix,URLim,dateAj) values (:libelle, :categorie,:marque,:qte,:couleur,:prix ,:imageU,CURDATE())";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $libelle=$produit->getLibelle();
        $categorie=$produit->getCategorie();
        $marque=$produit->getMarque();
        $qte=$produit->getQte();
        $couleur=$produit->getCouleur();
        $prix=$produit->getPrix();
        $imageU=$produit->getImageU();
		$req->bindValue(':libelle',$libelle);
		$req->bindValue(':categorie',$categorie);
		$req->bindValue(':marque',$marque);
		$req->bindValue(':qte',$qte);
		$req->bindValue(':couleur',$couleur);
		$req->bindValue(':prix',$prix);
		$req->bindValue(':imageU',$imageU);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	*/
	function afficherFavoris($se){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT FIDp ,IDp,URLim,prix,libelle,fiche FROM favories f inner join produit p on p.IDp=f.FIDp where id_user= :se";
		$db = config::getConnexion();
         $liste=$db->prepare($sql);
		//$liste-> bindValue(':se',$se,PDO::PARAM_INT);
		try{
           
		 $liste->execute( array('se' =>$se ));
		 //return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}


	function afficherFavoris1(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT FIDp ,IDp,URLim,prix,libelle,fiche,marque FROM favories f inner join produit p on p.IDp=f.FIDp ";
		$db = config::getConnexion();
		
		try{

		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}

	function supprimerFavoris($fidp,$user){
		$sql="DELETE FROM favories where FIDp= :fidp AND id_user= :user";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':fidp',$fidp);
		$req->bindValue(':user',$user);
		try{
            $req->execute();
          // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function Recuperer_Favoris(){
		$sql="SElECT FIDp ,IDp,libelle,fiche,URLim,prix,categorie,marque From favories f inner join produit p on f.FIDp =p.IDp GROUP BY f.FIDp ORDER BY COUNT(f.FIDp) DESC limit 4 ";
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
	function modifierProduit($produit,$idp){
		$sql="UPDATE produit SET IDp=:idp, libelle=:libelle, categorie=:categorie,marque=:marque,qte=:qte,couleur=:couleur ,
		prix=:prix ,URLim=:URLim WHERE IDp=:idp";

		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		 $libelle=$produit->getLibelle();
        $categorie=$produit->getCategorie();
        $marque=$produit->getMarque();
        $qte=$produit->getQte();
        $couleur=$produit->getCouleur();
        $prix=$produit->getPrix();
        $imageU=$produit->getImageU();

		$datas = array(':IDp'=>$idp,':libelle'=>$libelle, ':categorie'=>$categorie,':marque'=>$marque,':qte'=>$qte,':couleur'=>$couleur,':prix'=>$prix,':imageU'=>$imageU);
		//$req->bindValue(':libelle1',$libelle1);
		$req->bindValue(':idp',$idp);
		$req->bindValue(':libelle',$libelle);
		$req->bindValue(':categorie',$categorie);
		$req->bindValue(':marque',$marque);
		$req->bindValue(':qte',$qte);
		$req->bindValue(':couleur',$couleur);
		$req->bindValue(':prix',$prix);
		$req->bindValue(':URLim',$imageU);
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}

	function recupererProduit($idp){
		$sql="SELECT * from produit where IDp=$idp";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
*/
	/*
	function rechercherListeEmployes($tarif){
		$sql="SELECT * from employee where tarifHoraire=$tarif";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	*/
}

?>