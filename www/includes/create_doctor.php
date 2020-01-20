<?php require_once("dbConnection.php"); ?>
<?php require_once("functions.php");

	// START FORM PROCESSING
	if (isset($_POST['submit'])) { // Form has been submitted
		$errors = array();

		// Perform form validation on the form data
		$required_fields = array('username', 'password', 'email');
		$errors = array_merge($errors, check_required_fields($required_fields, $_POST));

		$fields_with_lengths = array('username' => 50, 'password' => 50);
		$errors = array_merge($errors, check_max_field_lengths($fields_with_lengths, $_POST));
 
		// clean up the form data before putting it in the database
		$username = trim(mysql_prep($_POST['username']));  // trim removes whitespaces
		$password = trim(mysql_prep($_POST['password']));
		$hashed_password = sha1($password);
		$email = trim(mysql_prep($_POST['email']));
        $user_type = 'Medical';
		
		if (empty($errors)) {
			$call = mysqli_prepare($dbhandle, 'CALL add_user(?, ?, ?, ?, @ur)');
			mysqli_stmt_bind_param($call, 'ssss', $username, $email, $hashed_password, $user_type);
			mysqli_stmt_execute($call);

			$select = mysqli_query($dbhandle, 'SELECT @ur');
			$result = mysqli_fetch_assoc($select);
			$user_id = $result['@ur'];

            if ($call) {
            	if(isset($user_id)) {
            		if($user_id == 0) {
            			$message = "This user already exists.";
            		}
            		else {
				        $message = "The user was successfully created.";
            		}
			    } else {
				    $message = "The user could not be created.";
				    $message .= "<br/>" . mysqli_error($dbhandle);
			    }
		    } else {
			    if (count($errors) == 1) {
				    $message = "There was 1 error in the form.";
			    } else {
				    $message = "There were " . count($errors) . " errors in the form.";
			    }
		    }
		}
		// END FORM PROCESSING
	} else { //Form has not been submitted
		$username = "";
		$password = "";
		$email = "";
	}
?>

<!-- <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml"> -->
<!DOCTYPE html>
<html>
  <head>
    <title>Create Medical User</title>
    <link rel="stylesheet" type="text/css" href="css/base.css" />
  </head>
  
  <body background="Backgrounds_Interweaving_gray_and_blue_stripes_095348_.jpg">
    <p>&gt;</p>
    <center>
      <div id="wrapper" class="centerwrapper"> 	
        <h2 class="title" style="color:#3BB9FF;">New User Registration</h2>
		<?php if (!empty($message)) {echo "<p class=\"message\">" . $message . "</p>"; }?>
		<?php if (!empty($errors)) {display_errors($errors); } ?>
		
        <form action="create_doctor.php" method="post">
          <table>
            <tr>
              <td class="algnRight"  style="color:white;">Username</td>
              <td><input type="text" name="username" maxlength="50" value="<?php echo htmlentities($username); ?>" /></td>
            </tr>
			
            <tr>
              <td class="algnRight"  style="color:#3BB9FF;">Password</td>
              <td><input type="password" name="password" maxlength="50" value="<?php echo htmlentities($password); ?>" /></td>
            </tr>

			<tr>
              <td class="algnRight" style="color:#3BB9FF;">Email</td>
              <td><input type="text" name="email" value="<?php echo htmlentities($email); ?>" /></td>
            </tr>
			
            <tr>
              <td colspan="2">
                <br/>
                   <center><p align=" center">
                  <input type="submit" name="submit" value="Submit"
                         Onclick="window.location.href='medical_login.php'"/>
                       </p> 
                </center>
                <center><p align=" center">
                  <input type="button" value="Homepage "
                         Onclick="window.location.href='../index.html'"/>
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
<?php require("dbClose.php"); ?>