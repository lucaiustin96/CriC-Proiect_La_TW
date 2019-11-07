<?php 
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;

	use SMSGatewayMe\Client\ApiClient;
	use SMSGatewayMe\Client\Configuration;
	use SMSGatewayMe\Client\Api\MessageApi;
	use SMSGatewayMe\Client\Model\SendMessageRequest;

	//Load Composer's autoloader
	require 'vendor/autoload.php';
	require_once('libs/vendor/autoload.php');
	class TrimiteModel
	{
		function __construct()
		{
			require 'models/DatabaseConnection.php';
			$this->databaseConnection = new DatabaseConnection();
		}
		public function trimite() {

			$mesaj =  $_POST['mesaj'];
			$rows = $this->databaseConnection->getEmails();
			foreach ($rows as $row) {
				 $this->trimiteMail($mesaj, $row[1]);
			}

			$numbers = $this->databaseConnection->getPhoneNumbers();
			$numere = "";
			foreach ($numbers as $number) {
				$this->trimiteSMS($mesaj, $number[1]);
			}

			header('location: ../trimite');
		}

		public function trimiteMail($mesaj, $email)
		{

			$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
			try {
  			  //Server settings
			    //$mail->SMTPDebug = 2;                                 // Enable verbose debug output
			    $mail->isSMTP();                                      // Set mailer to use SMTP
			    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
			    $mail->SMTPAuth = true;                               // Enable SMTP authentication
			    $mail->Username = 'mihaelaschipor97@gmail.com';                 // SMTP username
			    $mail->Password = 'missedinshadows';                           // SMTP password
			    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
			    $mail->Port = 587;                                    // TCP port to connect to

			    //Recipients
			    $mail->setFrom('mihaelaschipor97@gmail.com', 'Miha Schipor');
			    $mail->addAddress($email, 'Alerta!');     // Add a recipient
			                  // Name is optional

			    //Content
			    $mail->isHTML(true);                                  // Set email format to HTML
			    $mail->Subject = 'Alerta!';
			    $mail->Body    = $mesaj;
			    $mail->send();
			    echo 'Message has been sent';
			} catch (Exception $e) {
			    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
			}
		}

		public function trimiteSMS($mesaj, $number)
		{
			$username = "mihaelaschipor97@gmail.com";
			$hash = "deafae7421e6b08fdebe1ee5135a4c720b1e1cb5076b751ed17f2d5ee4738d6e";

			// Config variables. Consult http://api.txtlocal.com/docs for more info.
			$test = "0";

			// Data for text message. This is the text message data.
			$sender = "API Test"; // This is who the message appears to be from.
			$numbers = '40'.$number;// A single number or a comma-seperated list of numbers
			$message = $mesaj;
			// 612 chars or less
			// A single number or a comma-seperated list of numbers
			$message = urlencode($message);
			$data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
			$ch = curl_init('http://api.txtlocal.com/send/?');
			curl_setopt($ch, CURLOPT_POST, true);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			//$result = curl_exec($ch); // This is the result from the API
			curl_close($ch);
			//echo($result);
		}

		public function getTip()
		{
			return  $this->databaseConnection->getTip();
		}
	}
?>