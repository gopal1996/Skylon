<?php
    //we need to get our variables first
    require_once "Mail.php";
    
 $email =   'info@skylonindia.com'; //the address to which the email will be sent
    $name     =   $_POST['cpname'];  
    $email_to    =   $_POST['cpemail'];
    $feedback  =   $_POST['subject'];
    $phone  =   $_POST['cpphone'];
	$intrest = $_POST['Intrested'];
    
    /*the $header variable is for the additional headers in the mail function,
     we are asigning 2 values, first one is FROM and the second one is REPLY-TO.
     That way when we want to reply the email gmail(or yahoo or hotmail...) will know 
     who are we replying to. */
    $headers  = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
     $content = "text/html; charset=utf-8";
            $mime = "1.0";
   $message = '<html>
            <body>'.
                '<BR><HR><BR>
                <div class="m_8140612944304183337WordSection1"><p class="MsoNormal" align="center" style="text-align:center"><span style="font-size:14.0pt;font-family:&quot;Copperplate Gothic Bold&quot;,sans-serif;color:#dbb36c"><u></u>&nbsp;<u></u></span></p><p class="MsoNormal" align="center" style="text-align:center"><span style="font-size:14.0pt;font-family:&quot;Copperplate Gothic Bold&quot;,sans-serif;color:#dbb36c"><u></u>&nbsp;<u></u></span></p><p class="MsoNormal" align="center" style="text-align:center"><span style="font-size:14.0pt;font-family:&quot;Copperplate Gothic Bold&quot;,sans-serif;color:#dbb36c"><u></u>&nbsp;<u></u></span></p><p class="MsoNormal" align="center" style="text-align:center;line-height:150%"><span style="font-size:14.0pt;line-height:150%;font-family:&quot;Copperplate Gothic Bold&quot;,sans-serif;color:#dbb36c">SKYLON INDIA - INTERIOR DECORATORS</span><u></u><u></u></p><p class="MsoNormal" align="center" style="text-align:center"><b><span style="font-size:11.0pt;font-family:&quot;Franklin Gothic Book&quot;,sans-serif">AP 1725, 102nd Street,14th Sector, K.K. Nagar, Chennai – 600078</span></b><b><span style="font-size:10.0pt"><u></u><u></u></span></b></p><p class="MsoNormal" align="center" style="text-align:center"><b><span style="font-size:11.0pt;font-family:&quot;Franklin Gothic Book&quot;,sans-serif">PH: +919840492966 <span style="color:red">|</span> +917200107659</span></b><b><span style="font-size:10.0pt"><u></u><u></u></span></b></p><p class="MsoNormal" align="center" style="text-align:center"><b><span style="font-size:11.0pt;font-family:&quot;Franklin Gothic Book&quot;,sans-serif"><a href="mailto:info@skylonindia.com" target="_blank">info@skylonindia.com</a> <span style="color:red">|</span> <a href="http://www.skylonindia.com" target="_blank" data-saferedirecturl="https://www.google.com/url?q=http://www.skylonindia.com&amp;source=gmail&amp;ust=1537124680218000&amp;usg=AFQjCNEeJzgzQEgCiIByfyJFkxQiDDemGA">www.skylonindia.com</a></span></b><b><span style="font-size:10.0pt"><u></u><u></u></span></b></p><p class="MsoNormal" align="center" style="text-align:center"><b><span style="font-size:14.0pt;font-family:&quot;Franklin Gothic Book&quot;,sans-serif"></span></b><u></u><u></u></p><p class="MsoNormal"><span style="font-size:11.0pt;font-family:&quot;Calibri&quot;,sans-serif"><u></u>&nbsp;<u></u></span></p></div>
              <div style="text-align: center;"><img  src="http://www.skylonindia.com/logo.png" alt="image.png" width="150"  style="margin-right: 0px;"><br></div>
            </body>
            </html>';
			$data = implode(", ", $intrest);
			if (!empty($intrest))
			{
	$body="Thank You $name for contacting SKYLON INDIA - INTERIOR DECORATOR. For showing intrest in " . $data . ". We will reach back to you through $email_to or $phone shortly\r\n";
			}
			else
			{
				$body="Thank You $name for contacting SKYLON INDIA - INTERIOR DECORATOR. For showing intrest. We will reach back to you through $email_to or $phone shortly\r\n";
			}
	#$body="Results: " . print_r( $intrest, true );
	
	#$body1="For showing intrest in " . $data . "We will reach back to you through $email_to or $phone shortly\n";
		if (!empty($feedback))
			{
		$body.='<br>'."your message:".$feedback;
			}

$body.=$message;
	 $email_to=$email_to.",info@skylonindia.com";
  $smtp = Mail::factory('smtp', array(
       'host' => 'mail.skylonindia.com',
       'port' => '587',
       'auth' => true,
       'username' => 'info@skylonindia.com',
       'password' => "raj@1228RAJ"
   ));
$headers = array(
   'From' => 'info@skylonindia.com',
   'To' => "$email_to",
   'Subject' => "Thanks For Contacting US",
                            'MIME-Version' => $mime,
                            'Content-type' => $content
);
$mail = $smtp->send($email_to, $headers, $body);

if (PEAR::isError($mail)) {
   echo('<p>' . $mail->getMessage() . '</p>');
} else {
   echo('<p>Message successfully sent!</p>');
}
?>
