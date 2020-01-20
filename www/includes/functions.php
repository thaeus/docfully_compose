<?php
// All basic functions will be stored
/* mysqli.error() does not work as expected 
function confirm_query($result_set) {
	if (!$result_set) {
		die("Database query failed: " . mysqli_error(1));
	}
}
*/
//function logged_in() {
//		return isset($_SESSION['user_id']);
//	}

function confirm_query($result_set) {
	if (!$result_set) {
		die("Database query failed: " . mysqli_error());
	}
}

// This takes care of backslash escape character, single and double quote issues found in MySQL
function check_required_fields($required_array) {
	$field_errors = array();
	foreach($required_array as $fieldname) {
			if (!isset($_POST[$fieldname]) || (empty($_POST[$fieldname]) && $_POST[$fieldname] != 0)) {
				$field_errors[] = $fieldname;
			}
	}	
	return $field_errors;
}

function check_max_field_lengths($field_length_array) {
	$field_errors = array();
	foreach($field_length_array as $fieldname => $maxlength ) {
			if (strlen(trim(mysql_prep($_POST[$fieldname]))) > $maxlength) {
				$field_errors[] = $fieldname;
			}
	}
	return $field_errors;
}	

function display_errors($error_array) {
	echo "<p class=\"errors\">";
	echo "Please review the following fields: <br>";
	foreach($error_array as $error) {
		echo " - " . $error . "<br>";
	}
	echo "</p>" ;
}

function mysql_prep($value) {
	$magic_quotes_active = get_magic_quotes_gpc();
	$new_enough_php = function_exists("mysql_real_escape_string"); // i.e. v4.3.0
	if($new_enough_php) { // PHP v4.3.0 or higher
		// undo any magic quote effects so mysql_real_escape_string can do the work
		if($magic_quotes_active) {
			$value = stripslashes($value);
		}
		$value = mysql_real_escape_string($value);
	} else { // before PHP v4.3.0
		// if magic quotes aren't already on then add slashes manually
		if (!$magic_quotes_active) { $value = addslashes($value);
		}
		// if magic quotes are active, then the slashes already exist
	}
	return $value;
}

function redirect_to( $location = NULL) {
	if ($location != NULL) {
		header("Location: {$location}");
		exit;
	}
}
function get_all_subjects($public = true) {
	global $dbhandle;
	 $query = "SELECT * 
	 		FROM subjects ";
	 if ($public) {
	 	$query .= "WHERE visible = 1 ";
	 }

	 $query .= "ORDER BY position ASC";
	 $subject_set = mysqli_query($dbhandle, $query) or die("Database query failed");
	 return $subject_set;
}

function get_pages_for_subject($subject_id, $public = true) {
	global $dbhandle;
	$query = "SElECT *
			FROM pages ";
	$query .= "WHERE subject_id = {$subject_id} ";
	if ($public) {
		$query .= "AND visible = 1 ";
	}
	$query .= "ORDER BY position ASC";
	$page_set = mysqli_query( $dbhandle, $query) or die("Database query failed");
	/*
	$page_set = mysqli_query( $dbhandle, "SELECT * FROM pages WHERE subject_id = {$subject_id} ORDER BY position ASC") or die("Database query failed");
	*/
	return $page_set; 
}

function get_subject_by_id($subject_id) {
	global $dbhandle;
	$query = "SELECT * ";
	$query .= "FROM subjects ";
	$query .= "WHERE id=" . $subject_id . " ";	
	$query .= "LIMIT 1";  // limit results to one
	$result_set = mysqli_query( $dbhandle, "SELECT * FROM subjects WHERE id = {$subject_id} LIMIT 1") or die("Database query failed"); 
	//$result_set = mysqli_query( $dbhandle, $query)
	//or die("Could not find results");
	//confirm_query($result_set);
	// if no rows are retuned, fetch array will return false
	if ($subject = mysqli_fetch_array($result_set)) {
		return $subject;
	} else {
		return NULL;
	}
}

function get_page_by_id($page_id) {
	global $dbhandle;
	$query = "SELECT * ";
	$query .= "FROM pages ";
	$query .= "WHERE id=" . $page_id . " ";	
	$query .= "LIMIT 1";  // limit results to one
	$result_set = mysqli_query( $dbhandle, "SELECT * FROM pages WHERE id = {$page_id} LIMIT 1") or die("Database query failed"); 
	//$result_set = mysqli_query( $dbhandle, $query)
	//or die("Could not find results");
	//confirm_query($result_set);
	// if no rows are retuned, fetch array will return false
	if ($page = mysqli_fetch_array($result_set)) {
		return $page;
	} else {
		return NULL;
	}
}

function get_default_page($subject_id) {
	// Get all visible pages
	 $page_set = get_pages_for_subject($subject_id, true);
	 if ($first_page = mysqli_fetch_array($page_set)) {
	 	return $first_page;
	 } else {
	 	return NULL;
	 }
}

function find_selected_page() {
	global $sel_subject;
	global $sel_page;
	if (isset($_GET['subj'])) {
		$sel_subject = get_subject_by_id($_GET['subj']);
		$sel_page = get_default_page($sel_subject['id']);
	} elseif  (isset($_GET['page'])) {
		$sel_subject = NULL;
		$sel_page = get_page_by_id($_GET['page']);
	} else {
		$sel_subject = NULL;
		$sel_page = NULL;
	}
}

function navigation($sel_subject, $sel_page, $public = false) {
	$output = "<ul class= \"subjects\" >";
	$subject_set = get_all_subjects();
 
    /*
	// 3. Perform database query (read)
		$subject_set = mysqli_query( $dbhandle, "SELECT * FROM subjects ORDER BY position ASC") or die("Database query failed"); 
	*/
	// 4. Use returned data
	while ($subject = mysqli_fetch_array($subject_set)){
		$output .= "<li";
		if ($subject["id"] == $sel_subject['id']) {
			$output .= " class = \"selected\"";
			}
	     	$output .= "><a href=\"edit_subject.php?subj=" . urlencode($subject["id"]) ."\">
	     	{$subject["menu_name"]}</a></li>";
	     	/*
	   		$page_set = mysqli_query( $dbhandle, "SELECT * FROM pages WHERE subject_id = {$subject["id"]} ORDER BY position ASC") or die("Database query failed");
	   		*/ 
	   		$page_set = get_pages_for_subject($subject["id"]);
			$output .= "<ul class=\"pages\">";

			while ($page = mysqli_fetch_array($page_set)){
	    		$output .= "<li";
	    		if ($page["id"] == $sel_page['id']) {
	    			$output .= " class=\"selected\"";
		     		}
		     		$output .= "><a href=\"content.php?page=" . urlencode($page['id']) ."\">
		     				{$page["menu_name"]}</a></li>";
	   			}
				$output .= "</ul>";
		} 
		$output .= "</ul>";
		return $output;
}

function public_navigation($sel_subject, $sel_page, $public = true) {
	$output = "<ul class= \"subjects\" >";
	$subject_set = get_all_subjects($public);
 
    /*
	// 3. Perform database query (read)
		$subject_set = mysqli_query( $dbhandle, "SELECT * FROM subjects ORDER BY position ASC") or die("Database query failed"); 
	*/
	// 4. Use returned data
	while ($subject = mysqli_fetch_array($subject_set)){
		$output .= "<li";
		if ($subject["id"] == $sel_subject['id']) {
			$output .= " class = \"selected\"";
			}
	     	$output .= "><a href=\"index.php?subj=" . urlencode($subject["id"]) ."\">
	     	{$subject["menu_name"]}</a></li>";
	     	/*
	   		$page_set = mysqli_query( $dbhandle, "SELECT * FROM pages WHERE subject_id = {$subject["id"]} ORDER BY position ASC") or die("Database query failed");
	   		*/ 
	   		if ($subject["id"] == $sel_subject['id']) {
	   			$page_set = get_pages_for_subject($subject["id"]);
				$output .= "<ul class=\"pages\">";

				while ($page = mysqli_fetch_array($page_set)){
	    			$output .= "<li";
	    			if ($page["id"] == $sel_page['id']) {
	    				$output .= " class=\"selected\"";
		     			}
		     			$output .= "><a href=\"content.php?page=" . urlencode($page['id']) ."\">
		     				{$page["menu_name"]}</a></li>";
	   				}
					$output .= "</ul>";
				} 
			}
		$output .= "</ul>";
		return $output;
}

?>