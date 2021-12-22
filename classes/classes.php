
<?php
class Movie
{
	public $title;
	public $year;
	public $cast;
	public $category;
	public $directedBy;
	public $available = false;

	function __construct($title, $year, $cast, $category, $directedBy) {
		$this->title = $title;
		$this->year = $year;
		$this->cast = $cast;
		$this->category = $category;
		$this->directedBy = $directedBy;
	}

	public function isAvailable() {
		$n = rand(0, 1);
		if ($n) {
			$this->available = true;
		}
	}
}


?>
