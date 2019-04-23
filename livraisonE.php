<?php 
 class livraison {

  private $id_livraison;
	private $id_user;
  private $id_livreur ;
  private $id_produit ;
	private $prix_produit;
  private $region;
	private $email_client;
  private $date_livraison;


   
      public function __construct($id_livraison ,$id_user , $id_livreur , $id_produit , $prix_produit , $region , $email_client,$date_livraison)
  { 
$this->id_livraison=$id_livraison ;
$this->id_user=$id_user;
$this->id_livreur=$id_livreur;
$this->id_produit=$id_produit;
$this->prix_produit=$prix_produit;
$this->region=$region ;
$this->email_client=$email_client;
$this->date_livraison=$date_livraison ;
  }
	public function getid_livraison()
	{
		return $this->id_livraison;
	}
	public function setid_livraison($id_livraison)
	{
		$this->id_livraison=$id_livraison;
	}
  public function getid_user()
  {
    return $this->id_user;
  }
  public function setid_user($id_user)
  {
    $this->id_user=$id_user;
  }
  public function getid_livreur()
  {
    return $this->id_livreur;
  }
  public function setid_livreur($id_livreur)
  {
    $this->id_livreur=$id_livreur;
  }
  public function getid_produit()
  {
    return $this->id_produit;
  }
  public function setid_produit($id_produit)
  {
    $this->id_produit=$id_produit;
  }

  public function getprix_produit()
  {
    return $this->prix_produit;
  }
  public function setprix_produit($prix_produit)
  {
    $this->prix_produit=$prix_produit;
  }
  public function getregion()
  {
    return $this->region;
  }
  public function setregion($region)
  {
    $this->region=$region;
  }
  public function getemail_client()
  {
    return $this->email_client;
  }
  public function setemail_client($email_client)
  {
    $this->email_client=$email_client;
  }
  public function getdate_livraison()
  {
    return $this->date_livraison;
  }
  public function setdate_livraison($date_livarison)
  {
    $this->date_livraison=$date_livraison;
  }
 
	
}

?>