<?PHP
class User
{
	private $username;
	private $password;
	private $email;
	private $nom;
	private $prenom;
	private $sexe;
	private $date_creation;
	private $id_nature;
	function __construct($username,$password,$email,$nom,$prenom,$sexe,$date_creation,$id_nature)
	{
		$this->username=$username;
		$this->password=$password;
		$this->email=$email;
		$this->nom=$nom;
		$this->prenom=$prenom;
		$this->sexe=$sexe;
		$this->date_creation=$date_creation;
		$this->id_nature=$id_nature;
	}
	
	function getUsername()
	{
		return $this->username;
	}
	function getPassword()
	{
		return $this->password;
	}
	function getEmail()
	{
		return $this->email;
	}
	function getNom()
	{
		return $this->nom;
	}
	function getPrenom()
	{
		return $this->prenom;
	}
	function getSexe()
	{
		return $this->sexe;
	}
	function getDate_creation()
	{
		return $this->date_creation;
	}
	function getId_nature()
	{
		return $this->id_nature;
	}
	/*function setId($id)
	{
		$this->id=$id;
	}
	function setText($text)
	{
		$this->text=$text;
	}
	function setEtoile($etoile)
	{
		$this->etoile=$etoile;
	}
	function setDate_creation($date_creation)
	{
		$this->date_creation=$date_creation;
	}*/
}

?>