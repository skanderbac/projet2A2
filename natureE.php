<?PHP
class Nature
{
	private $id;
	private $type;
	function __construct($id,$type)
	{
		$this->id=$id;
		$this->type=$type
	}
	

	function getID()
	{
		return $this->id;
	}
	function getType()
	{
		return $this->type;
	}

	/*function setText($text)
	{
		$this->text=$text;
	}
	function setEtoile($etoile)
	{
		$this->etoile=$etoile;
	}*/

}

?>