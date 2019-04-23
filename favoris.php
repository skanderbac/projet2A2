<?PHP
class Favoris{
	private $fidp;
	private $flibelle;
	
	private $fprix;
	private $fqte;
	private $fimageU;
	private $status;
	private $id_user;
	function __construct($flibelle,$fprix,$fqte,$fimageU,$status){
		$this->flibelle=$flibelle;
		$this->fprix=$fprix;
		$this->fqte=$fqte;
		$this->fimageU=$fimageU;
		$this->status=$status;
		//$this->id_user=$id;
	}
	

	
	function getStatus(){
		return $this->status;
	}
	function getId1(){
		return $this->fidp;
	}

	function getLibelle1(){
		return $this->flibelle;
	}

	function getPrix1(){
		return $this->fprix;
	}

	function getQte1(){
		return $this->fqte;
	}
    
    function getImageU1(){
    	return $this->fimageU;
    } 


    // Seeetttttts
      function setLibelle1($libelle){
      	return $this->flibelle=$libelle;
      }
	
	function setCategorie1($categorie){
				$this->fcategorie=$categorie;
     }
	function setPrix1($prix){
		$this->fprix=$prix;
	}
	
	function setQte1($qte){
		$this->fqte=$qte;
	}

	
	function setImageU1 ($image)
	{
		$this->fimageU=$imageU;
	}

	
}

?>