<?php require_once("dbConnection.php"); ?>
<?php require_once("functions.php");
 
	// START FORM PROCESSING
	if (isset($_POST['submit'])) { // Form has been submitted
		$errors = array();

	// Perform form validation on the form data
		$required_fields = array('username', 'password','email');
		$errors = array_merge($errors, check_required_fields($required_fields, $_POST));

		$fields_with_lengths = array('username' => 30, 'password' => 30);
		$errors = array_merge($errors, check_max_field_lengths($fields_with_lengths, $_POST));
 
		// clean up the form data before putting it in the database
		$username = trim(mysql_prep($_POST['username']));  // trim removes whitespaces
		$password = trim(mysql_prep($_POST['password']));
		$hashed_password = sha1($password);
		$email = trim(mysql_prep($_POST['email']));
		
		if (empty($errors)) {
			$query = "INSERT INTO users (
						username, hashed_password, email
						) VALUES (
						'{$username}', '{$hashed_password}' ,'{$email}'
					)";

			$result = mysqli_query($dbhandle, $query);
			if ($result) {
				$message = "The user was successfully created.";
			} else {
				$message = "The user could not be created.";
				$message .= "<br />" . mysqli_error();
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
    <title>Create User</title>
    <script type="text/javascript" src=
		"/openemr/public/assets/jquery-min-1-9-1/index.js">
	</script>
    <script type="text/javascript" src=
		"/openemr/public/assets/jquery.gritter-1-7-4/js/jquery.gritter.min.js">
	</script>
    <link rel="stylesheet" type="text/css" href=
		"/openemr/public/assets/jquery.gritter-1-7-4/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="css/base.css" />
    <script type="text/javascript"></script>
  </head>
  
  <body background="Backgrounds_Interweaving_gray_and_blue_stripes_095348_.jpg">
    <p>&gt;</p>
    <center>
      <div id="wrapper" class="centerwrapper">
        <h2 class="title" style="color:#3BB9FF;">New User Registration</h2>
		<?php if (!empty($message)) {echo "<p class=\"message\">" . $message . "</p>"; }?>
		<?php if (!empty($errors)) {display_errors($errors); } ?>
        <form action="new_user.php" method="post" onsubmit=
        "return process()">
          <table>
            <tr>
              <td class="algnRight"  style="color:white;">
                User Name
              </td>
              <td>
                <input name="uname" id="uname" type="text"
                autocomplete="off" />
              </td>
            </tr>
			
            <tr>
              <td class="algnRight"  style="color:#3BB9FF;">
                Password
              </td>
              <td>
                <input name="pass" id="pass" type="password"
                autocomplete="off" />
              </td>
            </tr>

			<tr>
              <td class="algnRight" style="color:#3BB9FF;">
                Email
              </td>
              <td>
                <input name="uname" id="uname" type="text"
                autocomplete="off" />
              </td>
            </tr>
			
            <tr>
              <td colspan="2">
                <br />
                <center><p align=" center">
                    <input type="submit" value="Log In" /></p>
                </center>
                   <center><p align=" center">
                  <input type="submit" value="Submit"
                         Onclick="window.location.href='create_user.php'"/>
                       </p> 
                </center>

                   <center><p align=" center">
                  <input type="submit" value="Homepage "
                         Onclick="window.location.href='index.html'"/>
                       </p></center>
              </td>
            </tr>
          </table>
        </form> 
        <div class="copyright" style="color:#3BB9FF;">
          Powered by OpenEMR
        </div>
      </div>
    </center><script type="text/javascript">
	//<![CDATA[
      $(document).ready(function() {
        return false;
	  });
      //]]>
    </script>
  </body>
</html>
<?php require("includes/dbClose.php"); ?>