<?php
	class Book{
		//propaties
		private $title;
		private $author;

		//setting

		public function setValues($title, $author)
		{
			$this->title = $title;
			$this->author = $author;
		}

		//method
		
		public function display()
		{
			$count = count($this->title);

			echo "<table border=1>";
				echo "<thead>";
					echo "<td>";
						echo "Book Title";
					echo "</td>";
					echo "<td>";
						echo "Book Author";
					echo "</td>";
				echo "</thead>";
				echo "<tbody>";
				for($x=0; $x < $count; $x++){
				echo "<tr>";
					echo "<td>";
						echo $this->title[$x];
					echo "</td>";
					echo "<td>";
						echo $this->author[$x];
					echo "</td>";
				echo "</tr>";
				}
			echo "</tbody>";
			echo "</table>";
		}
	}
		
	
?>

