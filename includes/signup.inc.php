<?php

if (isset($_POST['submit']))
{
	include_once 'dbh.inc.php';

	$first = mysqli_real_escape_string($conn, $_POST['first']);
	$last = mysqli_real_escape_string($conn, $_POST['last']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$uid = mysqli_real_escape_string($conn, $_POST['uid']);
	$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

	//error handlers
	//check for empty fields

	if (empty($first) || empty($last) || empty($email) || empty($uid) || empty($pwd))
	{
		header("Location: ../home.php?signup=empty");
		exit();
	}

	else
	{
		//check if input characters are valid

		if(!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last))
		{
			header("Location: ../home.php?signup=invalid");
		    exit();	
		}

		else
		{
			//check if email is valid 
			if(!filter_var($email, FILTER_VALIDATE_EMAIL))
			{
				header("Location: ../home.php?signup=email");
		        exit();
			}

			else
			{
				$sql = "SELECT * FROM users WHERE user_uid='$uid'";
				$result = mysqli_query($conn, $sql);
				$resultCheck = mysqli_num_rows($result);

				if($resultCheck > 0)
				{
					header("Location: ../home.php?signup=usertaken");
		            exit();
				}

				else
				{
					// hashing  the password

					$hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

					// insert the user into the database

					$sql = "INSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd) VALUES ('$first' , '$last', '$email', '$uid' , '$hashedPwd');";

					mysqli_query($conn, $sql);
					header("Location: ../home.php?signup=success");
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