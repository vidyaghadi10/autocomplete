<?php
	
	// include database connection file

	include_once "dbConfig.php";

	// autocomplete textbox jquery ajax in PHP
	
	if (isset($_POST['name'])) {

  		$output = "";
  		$name = $_POST['name'];
  		$query = "SELECT * FROM users WHERE name LIKE '%$name%'";
  		$result = $con->query($query);

  		$output = '<ul class="list-unstyled">';		

  		if ($result->num_rows > 0) {
  			while ($row = $result->fetch_array()) {
  				$output .= '<li>'.ucwords($row['name']).'</li>';
  			}
  		}else{
  			  $output .= '<li> City not Found</li>';
  		}
  		
	  	$output .= '</ul>';
	  	echo $output;
	}
ABCD


?>