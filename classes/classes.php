
<?php
class Movie
{
	public $title;
	public $year;
	public $cast;
	public $category;
	public $directedBy;

	function __construct($title, $year = 2000, $cast, $category, $directedBy) {
		$this->title = $title;
		$this->year = $year;
		$this->cast = $cast;
		$this->category = $category;
		$this->directedBy = $directedBy;
	}
}


?>
