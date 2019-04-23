<?php

class livreur{
	private $id_livreur;
	private $nom;
	private $prenom;
	private $dispo;
    private $region;
	public function __construct($id_livreur,$nom,$prenom,$dispo,$region)
        {
        	$this->id_livreur=$id_livreur;
        	$this->nom=$nom;
        	$this->prenom=$prenom;
			$this->dispo=$dispo;
            $this->region=$region;
        	
        }

    public function getid_livreur(){return $this->id_livreur;}
    public function get_nom(){return $this->nom;}
      public function get_prenom(){return $this->prenom;}
public function get_dispo(){return $this->dispo;}
public function get_region(){return $this->region;}

 public function setid_livreur($id_livreur){$this->id_livreur=$id_livreur;}
 public function set_nom($nom){$this->nom=$nom;}
       public function set_prenom($prenom){$this->prenom=$prenom;}
    public function set_dispo($dispo){$this->dispo=$dispo;}
    public function set_region($region){$this->region=$region;}
 
    
        
}

?>