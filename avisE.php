<?PHP
class Avis
{
	private $id;
	private $text;
	private $etoile;
	private $date_creation;
	function __construct($id,$text,$etoile,$date_creation)
	{
		$this->id=$id;
		$this->text=$text;
		$this->etoile=$etoile;
		$this->date_creation=$date_creation;
	}
	
	function getId()
	{
		return $this->id;
	}
	function getText()
	{
		return $this->text;
	}
	function getEtoile()
	{
		return $this->etoile;
	}
	function getDate_creation()
	{
		return $this->date_creation;
	}
	function setId($id)
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
	}
}

?>