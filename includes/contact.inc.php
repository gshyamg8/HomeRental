<?php


if(isset($_POST['submit']))
{
	include_once 'contactdbh.inc.php';

	$name = mysqli_real_escape_string($conn, $_POST['name']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$mobile = mysqli_real_escape_string($conn, $_POST['mobile']);
	$msg = mysqli_real_escape_string($conn, $_POST['msg']);

	//error handlers
	//check for empty fields

	if(empty($name) || empty($email) || empty($mobile) || empty($msg))
	{
		header("Location: ../home.php?form=empty");
		exit();
	}

	else
	{
		// check if input characters are valid

		if(!preg_match("/^[a-zA-Z]*$/", $name) || !preg_match("/^[a-zA-Z]*$/", $msg) || !preg_match("/^[0-9]*$/", $mobile))
		{
			header("Location: ../home.php?form=invalid");
		    exit();	
		}

		else
		{
			//check if email is valid

			if(!filter_var($email, FILTER_VALIDATE_EMAIL))
			{
				header("Location: ../home.php?form=email");
		        exit();
			}

			else
			{
					$sql = "SELECT * FROM feedback WHERE user_name='$name'";
					$result = mysqli_query($conn , $sql);
					$resultCheck = mysqli_num_rows($result);

					if($resultCheck > 0)
					{
						header("Location: ../home.php?form=response already submitted");
						exit();
					}

					else

					{
						//insert the response in database

						$sql = "INSERT INTO feedback (user_name , user_email , user_mobile , user_msg) VALUES ('$name' , '$email' , '$mobile' , '$msg');";

						mysqli_query($conn , $sql);
						header("Location: ../home.php?form=response submitted");
						exit();
					}
			}
		}

	}
}

else
{
	header("Location: ../home.php");
	exit();
}