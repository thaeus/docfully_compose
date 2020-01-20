<?php session_start(); ?>
<?php require_once("dbConnection.php");?><?php 

	//if (logged_in()) {
	//	redirect_to("staff.php");
	//}	
	include_once("functions.php"); // should be <?php include_once("includes/form_functions.php");
	// START FORM PROCESSING
	if (isset($_POST['submit'])) { // Form has been submitted
		$errors = array();

	// Perform form validation on the form data
		$required_fields = array('username', 'password');
		$errors = array_merge($errors, check_required_fields($required_fields, $_POST));

		$fields_with_lengths = array('username' => 50, 'password' => 50);
		$errors = array_merge($errors, check_max_field_lengths($fields_with_lengths, $_POST));
 
		// clean up the form data before putting it in the database
		$username = trim(mysql_prep($_POST['username']));  // trim removes whitespaces
		$password = trim(mysql_prep($_POST['password']));
		$hashed_password = sha1($password);
		$user_type = 'Patient';

		if (empty($errors)) {
			// Check database to see if username and the hashed password exist there.
			$call = mysqli_prepare($dbhandle, 'CALL get_user(?, ?, ?)');
			mysqli_stmt_bind_param($call, 'sss', $username, $hashed_password, $user_type);
            mysqli_stmt_execute($call);
            $result_set = mysqli_stmt_get_result($call);
            
//			$query = "SELECT id, username ";
//			$query .= "FROM users ";
//			$query .= "WHERE username = '{$username}' ";
//			$query .= "AND hashed_password = '{$hashed_password}' ";
//			$query .= "LIMIT 1";
//			$result_set = mysqli_query($dbhandle, $query);

			confirm_query($result_set);
			if (mysqli_num_rows($result_set) == 1) {
				// username/password authenticated and only 1 match
				$found_user = mysqli_fetch_array($result_set);
				$_SESSION['user_id'] = $found_user['id'] ;
				$_SESSION['username'] = $found_user['user_name'];

				redirect_to("../patient.php");
			}else {
				// username/password combo was not found in the database
				$message = "Username/password combination incorrect.<br>
				 	Please make sure your caps lock key is off and try again.";
			}
		} else {
			if (count($errors) == 1) {
				$message = "There was 1 error in the form.";
			} else {
				$message = "There were " . count($errors) . " errors in the form.";
			}
		}
		// END FORM PROCESSING
	} else { //Form has not been submitted
		if (isset($_GET['logout']) && $_GET['logout'] == 1) {
			$message = "You are now logged out. ";
		}
		$username = "";
		$password = "";
	}
?>

<!-- <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"> -->
<!DOCTYPE html>
<html>
  <head>
    <title>Patient Login</title>
    <link rel="stylesheet" type="text/css" href="css/base.css" />
  </head>
  
  <body background="Backgrounds_Interweaving_gray_and_blue_stripes_095348_.jpg">
    <p>&gt;</p>
    <center>
      <div id="wrapper" class="centerwrapper">
        <h2 class="title" style="color:#3BB9FF;">Patient Portal Login</h2>
		<?php if (!empty($message)) {echo "<p class=\"message\">" . $message . "</p>"; }?>
		<?php if (!empty($errors)) {display_errors($errors); } ?>
        
		<form action="patient_login.php" method="post">
          <table>
            <tr>
              <td class="algnRight"  style="color:white;">Username</td>
              <td>
                <input type="text" name="username" maxlength="30" value="<?php echo htmlentities($username); ?>" />
              </td>
            </tr>
			
            <tr>
              <td class="algnRight"  style="color:#3BB9FF;">Password</td>
              <td>
                <input type="password" name="password" maxlength="30" value="<?php echo htmlentities($password); ?>" />
              </td>
            </tr>

            <tr>
              <td colspan="2">
                <br>
				<center>
					<p align=" center">
                    <input type="submit" name="submit" value="Login">
					</p>
				</center>
                   
				<center>
					<p align=" center"><input type="button" value="Register "
                         Onclick="window.location.href='create_user.php'">
                    </p>
                </center>

                <center>
					<p align=" center"><input type="button" value="Homepage "
                         Onclick="window.location.href='../index.html'">
					</p>
				</center>
              </td>
            </tr>
          </table>
        </form> 
        <div class="copyright" style="color:#3BB9FF;">
          Powered by OpenEMR
        </div>
      </div>
    </center>
  </body>
</html>