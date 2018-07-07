<?
	if($_SERVER['REQUEST_METHOD']=='POST'){
		if(isset($_POST['name']&&$_POST['email']&&$_POST['mobile'])){
			$recipient = $_POST['email'];
			$subject = 'Sending an email to You';
			$body = 'Hiiii how are you';
			$header = 'From: anuragyadav13481@gmail.com';

			if(mail($recipient, $subject, $body, $header)){
				echo 'Form successfullly submitted';
			}
			else{
				echo 'Form has not been submitted successfully';
				echo "Your form can't be submit right now sorry for any inconvinience";
			}
		}
		else{
			echo 'Pleae fill the from again you did not fill your form.';
		}
	}
?>