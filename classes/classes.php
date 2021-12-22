
<?php
class Movie
{
	public $title;
	public $year;
	public $cast;
	public $category;
	public $directedBy;
	public $available = null;

	function __construct($title, $year, $cast, $category, $directedBy) {
		$this->title = $title;
		$this->year = $year;
		$this->cast = $cast;
		$this->category = $category;
		$this->directedBy = $directedBy;
		$this->available = $this->boolAvailable();
	}

	public function boolAvailable() {
		$n = rand(0, 1);
		if ($n) {
			return true;
		}
	}

	public function stringAvailable() {
		if ($this->available == true) {
			return 'Yes';
		}
			return 'No';
	}
}


?>
