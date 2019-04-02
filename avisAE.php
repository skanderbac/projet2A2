<?PHP
class AvisA
{
	private $text;
	private $etoile;
	private $date_creation;
	function __construct($text,$etoile,$date_creation)
	{
		$this->text=$text;
		$this->etoile=$etoile;
		$this->date_creation=$date_creation;
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