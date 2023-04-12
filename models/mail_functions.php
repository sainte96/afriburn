<?php
	// every table insert fuction is here just use dbi::table_name('1st_field','2nd_field')
		
class mail {
		
	////////////////////////////////////////insert functions ///////////////////////
	 	public static function send_mail($name,$to_email){ 
 		
 			$message_body='<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
        <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta content="telephone=no" name="format-detection" />
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
        <title>Edurate Email</title>
        

        <style type="text/css" media="screen">
                /* Linked Styles */
                body { padding:0 !important; margin:0 !important; display:block !important; width:100% !important; background:#f3f3f3; -webkit-text-size-adjust:none }
                a { color:#5f5e5e; text-decoration:none }
                p { padding:0 !important; margin:0 !important } 
                .text-footer a { color:#ffffff; text-decoration:none }

                /* Mobile styles */
                @media only screen and (max-device-width: 480px), only screen and (max-width: 480px) { 
                        table[class="w320"] { width: 320px !important; }
                        table[class="w300"] { width: 300px !important; }
                        div[class="mobile-br-5"] { height: 5px !important; }
                        div[class="mobile-br-10"] { height: 10px !important; }
                        div[class="mobile-br-15"] { height: 15px !important; }

                        td[class="m-td"], div[class="hide-for-mobile"], span[class="hide-for-mobile"] { display: none !important; width: 0 !important; height: 0 !important; font-size: 0 !important; line-height: 0 !important; min-height: 0 !important; }
                        span[class="mobile-block"] { display: block !important; }

                        div[class="wgmail"] img { min-width: 320px !important; width: 320px !important; }
                        td[class="column-320"] { float: left !important; width: 320px !important; display: block !important; }
                        td[class="w300"] { width: 300px !important; }
                        td[class="w10"] { width: 10px !important; }
                        td[class="w15"] { width: 15px !important; }
                        td[class="wauto"] { width: auto !important; }
                        div[class="h2"] { font-size: 20px !important; line-height: 24px !important; }
                        div[class="h3"] { font-size: 16px !important; line-height: 20px !important; }
                        div[class="text"] { font-size: 11px !important; line-height: 15px !important; }
                        div[class="w270"] img { width: 270px !important; height: auto !important; }

                } 
        </style>
</head>
<body class="body" style="padding:0 !important; margin:0 !important; display:block !important; width:100% !important; background:#f3f3f3; -webkit-text-size-adjust:none">

        <!-- Header -->
        <table width="100%" cellpadding="0" cellspacing="0" border="0" bgcolor="#50bb6e">
                <tr>
                        <td class="img" style="font-size:0pt; line-height:0pt; text-align:left" width="10"></td>
                        <td align="center">
                                <div style="font-size:0pt; line-height:0pt; height:43px"><img src="images/empty.gif" width="1" height="43" style="height:43px" alt="" /></div>

                                <div class="h2" style="color:#ffffff; font-family:Arial; font-size:34px; mso-line-height-rule:exactly; line-height:38px; text-align:center; font-weight:bold">
                                        Welcome to Edurate
                                </div>
                                <div style="font-size:0pt; line-height:0pt; height:27px"><img src="images/empty.gif" width="1" height="27" style="height:27px" alt="" /></div>

                        </td>
                        <td class="img" style="font-size:0pt; line-height:0pt; text-align:left" width="10"></td>
                </tr>
        </table>
        <!-- End Header -->

        <!-- Main Top -->
        <table width="100%" cellpadding="0" cellspacing="0" border="0">
                <tr>
                        <td class="w10" style="font-size:0pt; line-height:0pt; text-align:left" valign="top">
                                <table width="100%" cellpadding="0" cellspacing="0" border="0" bgcolor="#50bb6e">
                                        <tr>
                                                <td class="img" style="font-size:0pt; line-height:0pt; text-align:left">
                                                        <div style="font-size:0pt; line-height:0pt; height:50px"><img src="images/empty.gif" width="1" height="50" style="height:50px" alt="" /></div>
<div style="font-size:0pt; line-height:0pt; height:50px"><img src="images/empty.gif" width="1" height="50" style="height:50px" alt="" /></div>
<div style="font-size:0pt; line-height:0pt; height:17px"><img src="images/empty.gif" width="1" height="17" style="height:17px" alt="" /></div>

                                                </td>
                                        </tr>
                                </table>
                        </td>
                        <td align="center" class="w300" width="650" bgcolor="#50bb6e" valign="top">
                                <table width="650" border="0" cellspacing="0" cellpadding="0" class="w300" bgcolor="#ffffff">
                                        <tr>
                                                <td align="center">
                                                        <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                                                <tr>
                                                                        <td class="img" style="font-size:0pt; line-height:0pt; text-align:left" width="10" valign="top">
                                                                                <div style="font-size:0pt; line-height:0pt; height:38px; background:#50bb6e; "><img src="images/empty.gif" width="1" height="38" style="height:38px" alt="" /></div>

                                                                                <div class="img" style="font-size:0pt; line-height:0pt; text-align:left">
                                                                                        <img src="images/corner_tl.jpg" width="10" height="10" alt="" border="0" />
                                                                                </div>
                                                                        </td>
                                                                        <td class="wauto" width="282" valign="top">
                                                                                <div style="font-size:0pt; line-height:0pt; height:38px; background:#50bb6e; "><img src="images/empty.gif" width="1" height="38" style="height:38px" alt="" /></div>

                                                                        </td>
                                                                        <td class="img-center" style="font-size:0pt; line-height:0pt; text-align:center" width="76" valign="top">
                                                                                <img src="http://edurate.com.ng/img/icon.png" width="76" height="73" alt="" border="0" />
                                                                                <div style="font-size:0pt; line-height:0pt; height:44px"><img src="images/empty.gif" width="1" height="44" style="height:44px" alt="" /></div>

                                                                        </td>
                                                                        <td class="wauto" width="272" valign="top">
                                                                                <div style="font-size:0pt; line-height:0pt; height:38px; background:#50bb6e; "><img src="images/empty.gif" width="1" height="38" style="height:38px" alt="" /></div>

                                                                        </td>
                                                                        <td class="img-right" style="font-size:0pt; line-height:0pt; text-align:right" width="10" valign="top">
                                                                                <div style="font-size:0pt; line-height:0pt; height:38px; background:#50bb6e; "><img src="images/empty.gif" width="1" height="38" style="height:38px" alt="" /></div>

                                                                                <div class="img" style="font-size:0pt; line-height:0pt; text-align:left">
                                                                                        <img src="images/corner_tr.jpg" width="10" height="10" alt="" border="0" />
                                                                                </div>
                                                                        </td>
                                                                </tr>
                                                        </table>
                                                </td>
                                        </tr>
                                </table>
                        </td>
                        <td class="w10" style="font-size:0pt; line-height:0pt; text-align:left" valign="top">
                                <table width="100%" cellpadding="0" cellspacing="0" border="0" bgcolor="#50bb6e">
                                        <tr>
                                                <td class="img" style="font-size:0pt; line-height:0pt; text-align:left">
                                                        <div style="font-size:0pt; line-height:0pt; height:50px"><img src="images/empty.gif" width="1" height="50" style="height:50px" alt="" /></div>
<div style="font-size:0pt; line-height:0pt; height:50px"><img src="images/empty.gif" width="1" height="50" style="height:50px" alt="" /></div>
<div style="font-size:0pt; line-height:0pt; height:17px"><img src="images/empty.gif" width="1" height="17" style="height:17px" alt="" /></div>

                                                </td>
                                        </tr>
                                </table>
                        </td>
                </tr>
        </table>
        <!-- End Main Top -->

        <!-- Main -->
        <table width="100%" cellpadding="0" cellspacing="0" border="0">
                <tr>
                        <td class="w10" style="font-size:0pt; line-height:0pt; text-align:left"></td>
                        <td align="center">
                                <table width="650" border="0" cellspacing="0" cellpadding="0" class="w300" bgcolor="#ffffff">
                                        <tr>
                                                <td class="w15" style="font-size:0pt; line-height:0pt; text-align:left" width="50"></td>
                                                <td align="center">

                                                        <!-- Post -->
                                                        <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                                                <tr>
                                                                        <td align="center">
                                                                                <div class="h3" style="color:#222222; font-family:Arial; font-size:30px; mso-line-height-rule:exactly; line-height:34px; text-align:center; font-weight:bold">
                                                                                        Your Account Has Been Created! 
                                                                                </div>
                                                                                <div style="font-size:0pt; line-height:0pt; height:15px"><img src="images/empty.gif" width="1" height="15" style="height:15px" alt="" /></div>

                                                                                <div class="hide-for-mobile">
                                                                                        <div style="font-size:0pt; line-height:0pt; height:15px"><img src="images/empty.gif" width="1" height="15" style="height:15px" alt="" /></div>

                                                                                </div>
                                                                                <div class="text" style="color:#5f5e5e; font-family:Arial; font-size:14px; mso-line-height-rule:exactly; line-height:24px; text-align:left">
                                                                                        Dear '.$name.',
                                                                                        Welcome to Edurate where your contributions help people make better choice of schools.
                                                                                </div>
                                                                                <div style="font-size:0pt; line-height:0pt; height:15px"><img src="images/empty.gif" width="1" height="15" style="height:15px" alt="" /></div>

                                                                                <div class="hide-for-mobile">
                                                                                        <div style="font-size:0pt; line-height:0pt; height:15px"><img src="images/empty.gif" width="1" height="15" style="height:15px" alt="" /></div>

                                                                                </div>
                                                                                
                                                                                <!-- Button -->
                                                                                <div>
                                                                                        <!--[if mso]>
                                                                                        <v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="{{ url_for("account.account_user_confirm", confirm_token=confirm_token, _external=True) }}" style="height:40px;v-text-anchor:middle; width:80px;" arcsize="8%" strokecolor="#50bb6e" fillcolor="#ffffff">
                                                                                        <w:anchorlock/>
                                                                                        <center style="color:#50bb6e; font-family:arial, sans-serif; font-size:14px; font-weight:bold; text-transform: uppercase;">More</center>
                                                                                        </v:roundrect>
                                                                                        <![endif]-->
                                                                                        <a href="edurate.com.ng" style="background-color:#ffffff; border: 2px solid #50bb6e; border-radius:3px; color:#50bb6e; display:inline-block; font-family:arial, sans-serif; font-size:14px; font-weight:bold; line-height:40px; text-align:center; text-decoration:none; width:80px; text-transform: uppercase; -webkit-text-size-adjust:none; mso-hide:all;">Login</a>
                                                                                </div>
                                                                                <!-- End Button -->

                                                                                <div style="font-size:0pt; line-height:0pt; height:25px"><img src="images/empty.gif" width="1" height="25" style="height:25px" alt="" /></div>

                                                                                <div class="hide-for-mobile">
                                                                                        <div style="font-size:0pt; line-height:0pt; height:25px"><img src="images/empty.gif" width="1" height="25" style="height:25px" alt="" /></div>

                                                                                </div>

                                                                                <!-- Separator -->
                                                                                <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                                                                        <tr>
                                                                                                <td class="img" style="font-size:0pt; line-height:0pt; text-align:left">
                                                                                                        <div style="font-size:0pt; line-height:0pt; height:1px; background:#d4d5d5; "><img src="images/empty.gif" width="1" height="1" style="height:1px" alt="" /></div>

                                                                                                </td>
                                                                                                <td class="img-center" style="font-size:0pt; line-height:0pt; text-align:center" width="86">
                                                                                                        <img src="images/stars.jpg" width="86" height="9" alt="" border="0" />
                                                                                                </td>
                                                                                                <td class="img" style="font-size:0pt; line-height:0pt; text-align:left">
                                                                                                        <div style="font-size:0pt; line-height:0pt; height:1px; background:#d4d5d5; "><img src="images/empty.gif" width="1" height="1" style="height:1px" alt="" /></div>

                                                                                                </td>
                                                                                        </tr>
                                                                                </table>
                                                                                <!-- End Separator -->

                                                                                <div style="font-size:0pt; line-height:0pt; height:20px"><img src="images/empty.gif" width="1" height="20" style="height:20px" alt="" /></div>

                                                                                <div class="hide-for-mobile">
                                                                                        <div style="font-size:0pt; line-height:0pt; height:20px"><img src="images/empty.gif" width="1" height="20" style="height:20px" alt="" /></div>

                                                                                </div>
                                                                        </td>
                                                                </tr>
                                                        </table>
                                                        <!-- End Post -->

                                                </td>
                                                <td class="w15" style="font-size:0pt; line-height:0pt; text-align:left" width="50"></td>
                                        </tr>
                                </table>
                        </td>
                        <td class="w10" style="font-size:0pt; line-height:0pt; text-align:left"></td>
                </tr>
        </table>
        <!-- End Main -->

        <!-- Main Bottom -->
        <table width="100%" cellpadding="0" cellspacing="0" border="0">
                <tr>
                        <td class="w10" style="font-size:0pt; line-height:0pt; text-align:left" valign="bottom">
                                <table width="100%" cellpadding="0" cellspacing="0" border="0" bgcolor="#232323">
                                        <tr>
                                                <td class="img" style="font-size:0pt; line-height:0pt; text-align:left">
                                                        <div style="font-size:0pt; line-height:0pt; height:50px"><img src="images/empty.gif" width="1" height="50" style="height:50px" alt="" /></div>
<div style="font-size:0pt; line-height:0pt; height:50px"><img src="images/empty.gif" width="1" height="50" style="height:50px" alt="" /></div>
<div style="font-size:0pt; line-height:0pt; height:5px"><img src="images/empty.gif" width="1" height="5" style="height:5px" alt="" /></div>

                                                </td>
                                        </tr>
                                </table>
                        </td>
                        <td align="center" class="w300" width="650" bgcolor="#232323" valign="top">
                                <table width="650" border="0" cellspacing="0" cellpadding="0" class="w300" bgcolor="#ffffff">
                                        <tr>
                                                <td class="img" style="font-size:0pt; line-height:0pt; text-align:left" width="10" valign="bottom">
                                                        <div class="img" style="font-size:0pt; line-height:0pt; text-align:left">
                                                                <img src="images/corner_bl.jpg" width="10" height="10" alt="" border="0" />
                                                        </div>
                                                        <div style="font-size:0pt; line-height:0pt; height:36px; background:#232323; "><img src="images/empty.gif" width="1" height="36" style="height:36px" alt="" /></div>

                                                </td>
                                                <td class="wauto" width="282" valign="bottom">
                                                        <div style="font-size:0pt; line-height:0pt; height:36px; background:#232323; "><img src="images/empty.gif" width="1" height="36" style="height:36px" alt="" /></div>

                                                </td>
                                                <td class="img-center" style="font-size:0pt; line-height:0pt; text-align:center" width="76" align="center">
                                                        <div style="font-size:0pt; line-height:0pt; height:29px"><img src="http://edurate.com.ng/img/icon.png" width="" height="29" style="height:29px" alt="" /></div>

                                                        <div class="img-center" style="font-size:0pt; line-height:0pt; text-align:center">
                                                                <img src="images/logo_bottom.jpg" width="76" height="73" alt="" border="0" />
                                                        </div>
                                                </td>
                                                <td class="wauto" width="272" valign="bottom">
                                                        <div style="font-size:0pt; line-height:0pt; height:36px; background:#232323; "><img src="images/empty.gif" width="1" height="36" style="height:36px" alt="" /></div>

                                                </td>
                                                <td class="img" style="font-size:0pt; line-height:0pt; text-align:left" width="10" valign="bottom">
                                                        <div class="img" style="font-size:0pt; line-height:0pt; text-align:left">
                                                                <img src="images/corner_br.jpg" width="10" height="10" alt="" border="0" />
                                                        </div>
                                                        <div style="font-size:0pt; line-height:0pt; height:36px; background:#232323; "><img src="images/empty.gif" width="1" height="36" style="height:36px" alt="" /></div>

                                                </td>
                                        </tr>
                                </table>
                        </td>
                        <td class="w10" style="font-size:0pt; line-height:0pt; text-align:left" valign="bottom">
                                <table width="100%" cellpadding="0" cellspacing="0" border="0" bgcolor="#232323">
                                        <tr>
                                                <td class="img" style="font-size:0pt; line-height:0pt; text-align:left">
                                                        <div style="font-size:0pt; line-height:0pt; height:50px"><img src="images/empty.gif" width="1" height="50" style="height:50px" alt="" /></div>
<div style="font-size:0pt; line-height:0pt; height:50px"><img src="images/empty.gif" width="1" height="50" style="height:50px" alt="" /></div>
<div style="font-size:0pt; line-height:0pt; height:5px"><img src="images/empty.gif" width="1" height="5" style="height:5px" alt="" /></div>

                                                </td>
                                        </tr>
                                </table>
                        </td>
                </tr>
        </table>
        <!-- End Main Bottom -->

        <!-- Footer -->
        <table width="100%" cellpadding="0" cellspacing="0" border="0" bgcolor="#232323">
                <tr>
                        <td class="w10" style="font-size:0pt; line-height:0pt; text-align:left"></td>
                        <td align="center" valign="top">
                                <table width="650" border="0" cellspacing="0" cellpadding="0" class="w300">
                                        <tr>
                                                <td align="center">
                                                        <div style="font-size:0pt; line-height:0pt; height:25px"><img src="images/empty.gif" width="1" height="25" style="height:25px" alt="" /></div>

                                                        <div class="text-footer" style="color:#d7d7d7; font-family:Arial; font-size:12px; mso-line-height-rule:exactly; line-height:16px; text-align:center">
                                                                <!-- 500 Yale Ave N, 1st Floor  | Seattle, WA 98109 | United States -->
                                                                <div style="font-size:0pt; line-height:0pt; height:3px"><img src="http://edurate.com.ng/img/icon.png" width="1" height="3" style="height:3px" alt="" /></div>

                                                                <span style="color: #50bb6e;"></span> <a href="tel:+234 903-3886-643" target="_blank" class="link-white" style="color:#ffffff; text-decoration:none"><span class="link-white" style="color:#ffffff; text-decoration:none">+234 903-3886-643</span></a>,
                                                                <span style="color: #50bb6e;"></span> <a href="tel:+1 (877) 960-1333" target="_blank" class="link-white" style="color:#ffffff; text-decoration:none"><span class="link-white" style="color:#ffffff; text-decoration:none">+234 706-6248-626</span></a>,
                                                                <span style="color: #50bb6e;"></span> <a href="tel:+234 905-473-1014" target="_blank" class="link-white" style="color:#ffffff; text-decoration:none"><span class="link-white" style="color:#ffffff; text-decoration:none">+234 905-473-1014</span></a>
                                                        </div>
                                                        <div style="font-size:0pt; line-height:0pt; height:13px"><img src="images/empty.gif" width="1" height="13" style="height:13px" alt="" /></div>
                                                        <div style="color: white">
                                                                <i class="fab fa-facebook-f"></i>   
                                                                <i class="fab fa-twitter"></i>   
                                                                <i class="fab fa-linkedin"></i>   
                                                        </div>
                                                        <div style="font-size:0pt; line-height:0pt; height:23px"><img src="images/empty.gif" width="1" height="23" style="height:23px" alt="" /></div>

                                                </td>
                                        </tr>
                                </table>
                                <div class="wgmail" style="font-size:0pt; line-height:0pt; text-align:left"><img src="images/empty.gif" width="700" height="1" style="min-width:700px" alt="" border="0" /></div>
                        </td>
                        <td class="w10" style="font-size:0pt; line-height:0pt; text-align:left"></td>
                </tr>
        </table>
        <!-- End Footer -->

</body>
</html>';
 			
 			$Server = MAIL_SEND_SERVER;
		   	$from = MAIL_FROM;
			$subject = 'Notification from Edurate';
		    $headers = "From: $Server <".$from.">\n";
		    $headers .= "Reply-To: $Server <".$from.">\n";
		    $headers .= "Return-Path: $Server <".$from.">\n";
		    $headers .= "MIME-Version: 1.0\n";
			$headers .= "Content-type: text/html; charset=iso-8859-1\n";
			$mail_from = SITE_NAME;
			mail($to_email, $subject, $message_body, $headers, $mail_from);
		} 

		public static function send_investment_activated_mail($name,$to_email,$investment_ref,$amount,$duration,$start_date,$end_date){
		$subject = 'Investment Active and Running';
		$message='We are pleased to inform you that your investment with Darolls Nig Ltd. has been approved and is currently active. <br><br>
                  Here are the details of your investment:  <br> <br>
                  Investment Reference: '.$investment_ref.'  <br> 
                  Investment Amount: ₦'.$amount.' <br> 
                  Duration of Investment: '.$duration.' Months  <br>
                  Start Date: '.$start_date.'<br>
                  End Date: '.$end_date.'<br> <br>
                  You should receive a post dated cheque and certificate of investment in three(3) weeks.<br> <br>
                  Thank you for the trust. We promise to meet up with your expectations.<br> <br>';		
		$html_message = mail::html_inner_default($message);
 		mail::send_mail($name,$to_email,$subject,$html_message);
		}

		public static function send_investment_approved_mail($name,$to_email,$investment_ref,$amount,$duration){
		$subject = 'Investment Approved';
		$message='We are pleased to inform you that your investment with Darolls Nig Ltd. has been approved but is currently inactive. To activate this investment, please deposit the intended investment amount into the given Darolls bank account, if you have made the payment already, notify us immediately.<br><br>
                  Here are the details of your investment:  <br> <br>
                  Investment Reference: '.$investment_ref.'  <br> 
                  Investment Amount: ₦'.$amount.' <br> 
                  Duration of Investment: '.$duration.' Months  <br><br>';		
		$html_message = mail::html_inner_default($message);
 		mail::send_mail($name,$to_email,$subject,$html_message);
		}

		public static function send_investment_submitted_mail($name,$to_email,$investment_ref,$amount,$amount_words,$duration,$request_date){
		
		$subject = 'Pending Investment Request';
		$message='We are pleased to inform you that we have received your request to invest with Darolls Nig Ltd. <br><br>
                  However, your request is pending manual approval.  <br> <br>
                  Here are the details of your investment request:  <br> <br>
                  Request Date: '.$request_date.'  <br> 
                  Investment Reference: '.$investment_ref.'  <br> 
                  Investment Amount: ₦'.$amount.' ('.$amount_words.') <br> 
                  Duration of Investment: '.$duration.' Months  <br> <br>
                  Expect a mail from us within the next 24 hours.<br> <br>
                  Thank you.<br> <br>
                  <small>If you did not initiate this investment request, please report this issue to us right away, your account may have been compromised.</small>';		
		$html_message = mail::html_inner_default($message);
 		mail::send_mail($name,$to_email,$subject,$html_message);
		}

		public static function send_new_pw_mail($name,$to_email,$password){
 		$html_message='
 			  <tr>
                <td bgcolor="#ffffff" align="left" style="padding: 20px 30px 20px 30px; color: #666666; font-family: "Poppins", sans-serif; font-size: 16px; font-weight: 400; line-height: 25px;">
                  <p style="margin: 0; font-size: 15px;">Your password has been reset successfully.</p>  <br> <br>
                  <p style="margin: 0; font-size: 15px;">
                  			Your new password is: <b>'.$password.'</b> <br><br>
                  			You can chage your password once you login. <br> <br>
                  			<small>If you did not initiate this password reset please report this issue to us right away, your account may have been compromised.</small>
                  </p>
                </td>
              </tr>
              <!-- BULLETPROOF BUTTON -->
              <tr>
                <td bgcolor="#ffffff" align="center">
                  <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td bgcolor="#ffffff" align="center" style="padding: 20px 30px 30px 30px;">
                        <table border="0" cellspacing="0" cellpadding="0">
                          <tr>
                              <td align="center" style="border-radius: 3px;" bgcolor="#7460ee"><a href="'.SITE_URL.'/account/login" target="_blank" style="font-size: 18px; font-family: Helvetica, Arial, sans-serif; color: #ffffff; text-decoration: none; color: #ffffff; text-decoration: none; padding: 12px 50px; border-radius: 2px; border: 1px solid #7460ee; display: inline-block;">ACCOUNT LOGIN</a></td>
                          </tr>
                        </table>
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>
 		';
 		mail::send_mail($name,$to_email,'Your New Password',$html_message);
		}

		public static function send_verify_pwreset_mail($name,$to_email,$token){
 		$link=SITE_URL.'/account/resetpassword?t='.$token;
 		$html_message='
 					  <tr>
		                <td bgcolor="#ffffff" align="left" style="padding: 20px 30px 20px 30px; color: #666666; font-family: "Poppins", sans-serif; font-size: 16px; font-weight: 400; line-height: 25px;">
		                  <p style="margin: 0; font-size: 15px;">A password reset request was placed on our system by you. Click/press the button below to reset your password now.</p>
		                </td>
		              </tr>
		              <!-- BULLETPROOF BUTTON -->
		              <tr>
		                <td bgcolor="#ffffff" align="left">
		                  <table width="100%" border="0" cellspacing="0" cellpadding="0">
		                    <tr>
		                      <td bgcolor="#ffffff" align="center" style="padding: 20px 30px 30px 30px;">
		                        <table border="0" cellspacing="0" cellpadding="0">
		                          <tr>
		                              <td align="center" style="border-radius: 3px;" bgcolor="#26c6da"><a href="'.$link.'" target="_blank" style="font-size: 18px; font-family: Helvetica, Arial, sans-serif; color: #ffffff; text-decoration: none; color: #ffffff; text-decoration: none; padding: 12px 50px; border-radius: 2px; border: 1px solid #26c6da; display: inline-block;">Reset My Password</a></td>
		                          </tr>
		                        </table>
		                      </td>
		                    </tr>
		                  </table>
		                </td>
		              </tr>
		              <!-- COPY -->
		              <tr>
		                <td bgcolor="#ffffff" align="left" style="padding: 0px 30px 0px 30px; color: #666666; font-family: &apos;Lato&apos;, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 25px;">
		                  <p style="margin: 0;">If that does not work, copy and paste the following link in your browser:</p>
		                </td>
		              </tr>
		              <!-- COPY -->
		                <tr>
		                  <td bgcolor="#ffffff" align="left" style="padding: 20px 30px 20px 30px; color: #666666; font-family: &apos;Lato&apos;, Helvetica, Arial, sans-serif; font-size: 12px; font-weight: 400; line-height: 25px;">
		                    <p style="margin: 0;"><a href="'.$link.'" target="_blank" style="color: #26c6da;">'.$link.'</a> <br> <br>
		                    If you did not initiate this password reset, please report this issue to us right away, your account may have been compromised. Thank you. 
							</p>
		                  </td>
		                </tr>
 		';
 		mail::send_mail($name,$to_email,'Verify Password Reset',$html_message);
		}

		public static function send_welcome_mail($to_email,$signup_password){
 		$html_message='
 			  <tr>
                <td bgcolor="#ffffff" align="left" style="padding: 20px 30px 20px 30px; color: #666666; font-family: "Poppins", sans-serif; font-size: 16px; font-weight: 400; line-height: 25px;">
                  <p style="margin: 0; font-size: 15px;">You are welcome to Darolls Investment! We hope you enjoy your time with us. Check your account, update your profile and make your first investment investment.</p>  <br> <br>
                  <p style="margin: 0; font-size: 15px;">Here are your login details: <br>
                  			Login Page: '.SITE_URL.'/account/login <br>
                  			Login Email: '.$to_email.' <br>
                  			Login Password: '.$signup_password.' <br>
                  </p>
                </td>
              </tr>
              <!-- BULLETPROOF BUTTON -->
              <tr>
                <td bgcolor="#ffffff" align="center">
                  <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td bgcolor="#ffffff" align="center" style="padding: 20px 30px 30px 30px;">
                        <table border="0" cellspacing="0" cellpadding="0">
                          <tr>
                              <td align="center" style="border-radius: 3px;" bgcolor="#7460ee"><a href="'.SITE_URL.'/account/" target="_blank" style="font-size: 18px; font-family: Helvetica, Arial, sans-serif; color: #ffffff; text-decoration: none; color: #ffffff; text-decoration: none; padding: 12px 50px; border-radius: 2px; border: 1px solid #7460ee; display: inline-block;">My Account</a></td>
                          </tr>
                        </table>
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>
 		';
 		mail::send_mail('',$to_email,'Welcome to Darolls Investment',$html_message);
		}


		public static function send_verify_signup_mail($to_email,$token){
		$link=SITE_URL.'/account/verify_signup?t='.$token;
 		$html_message='
 					  <tr>
		                <td bgcolor="#ffffff" align="left" style="padding: 20px 30px 20px 30px; color: #666666; font-family: "Poppins", sans-serif; font-size: 16px; font-weight: 400; line-height: 25px;">
		                  <p style="margin: 0; font-size: 15px;">We are excited to have you as a Darolls partner. First, you need to confirm your account. Just click/press the button below.</p>
		                </td>
		              </tr>
		              <!-- BULLETPROOF BUTTON -->
		              <tr>
		                <td bgcolor="#ffffff" align="left">
		                  <table width="100%" border="0" cellspacing="0" cellpadding="0">
		                    <tr>
		                      <td bgcolor="#ffffff" align="center" style="padding: 20px 30px 30px 30px;">
		                        <table border="0" cellspacing="0" cellpadding="0">
		                          <tr>
		                              <td align="center" style="border-radius: 3px;" bgcolor="#26c6da"><a href="'.$link.'" target="_blank" style="font-size: 18px; font-family: Helvetica, Arial, sans-serif; color: #ffffff; text-decoration: none; color: #ffffff; text-decoration: none; padding: 12px 50px; border-radius: 2px; border: 1px solid #26c6da; display: inline-block;">Confirm Account</a></td>
		                          </tr>
		                        </table>
		                      </td>
		                    </tr>
		                  </table>
		                </td>
		              </tr>
		              <!-- COPY -->
		              <tr>
		                <td bgcolor="#ffffff" align="left" style="padding: 0px 30px 0px 30px; color: #666666; font-family: &apos;Lato&apos;, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 25px;">
		                  <p style="margin: 0;">If that does not work, copy and paste the following link in your browser:</p>
		                </td>
		              </tr>
		              <!-- COPY -->
		                <tr>
		                  <td bgcolor="#ffffff" align="left" style="padding: 20px 30px 20px 30px; color: #666666; font-family: &apos;Lato&apos;, Helvetica, Arial, sans-serif; font-size: 12px; font-weight: 400; line-height: 25px;">
		                    <p style="margin: 0;"><a href="'.$link.'" target="_blank" style="color: #26c6da;">'.$link.'</a> <br><br>
								Please note that the above link will expire in 1 hour.
							</p>
		                  </td>
		                </tr>
 		';
 		mail::send_mail('',$to_email,'Verify Your Email Address',$html_message);
		}

		public static function html_inner_default($message){
 		$html_inner='
 			  <tr>
                <td bgcolor="#ffffff" align="left" style="padding: 20px 30px 20px 30px; color: #666666; font-family: "Poppins", sans-serif; font-size: 16px; font-weight: 400; line-height: 25px;">
                  <p style="margin: 0; font-size: 15px;">
                  			'.$message.'
                  </p>
                </td>
              </tr>
              <!-- BULLETPROOF BUTTON -->
              <tr>
                <td bgcolor="#ffffff" align="center">
                  <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td bgcolor="#ffffff" align="center" style="padding: 20px 30px 30px 30px;">
                        <table border="0" cellspacing="0" cellpadding="0">
                          <tr>
                              <td align="center" style="border-radius: 3px;" bgcolor="#7460ee"><a href="'.SITE_URL.'/account/" target="_blank" style="font-size: 18px; font-family: Helvetica, Arial, sans-serif; color: #ffffff; text-decoration: none; color: #ffffff; text-decoration: none; padding: 12px 50px; border-radius: 2px; border: 1px solid #7460ee; display: inline-block;">MY ACCOUNT</a></td>
                          </tr>
                        </table>
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>
 		';
 		return $html_inner;
		}	 	

	 
		public static function html_container($name,$html_message){ 
		 if(empty($name)) { $name = 'Investor'; } else { $name = $name;}
		 $message='<!DOCTYPE html>
		<html>
		<head>
		<title></title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<style type="text/css">
		    /* FONTS */
		    @import url("https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i");

		    /* CLIENT-SPECIFIC STYLES */
		    body, table, td, a { -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; }
		    table, td { mso-table-lspace: 0pt; mso-table-rspace: 0pt; }
		    img { -ms-interpolation-mode: bicubic; }

		    /* RESET STYLES */
		    img { border: 0; height: auto; line-height: 100%; outline: none; text-decoration: none; }
		    table { border-collapse: collapse !important; }
		    body { height: 100% !important; margin: 0 !important; padding: 0 !important; width: 100% !important; }

		    /* iOS BLUE LINKS */
		    a[x-apple-data-detectors] {
		        color: inherit !important;
		        text-decoration: none !important;
		        font-size: inherit !important;
		        font-family: inherit !important;
		        font-weight: inherit !important;
		        line-height: inherit !important;
		    }

		    /* MOBILE STYLES */
		    @media screen and (max-width:600px){
		        h1 {
		            font-size: 32px !important;
		            line-height: 32px !important;
		        }
		    }

		    /* ANDROID CENTER FIX */
		    div[style*="margin: 16px 0;"] { margin: 0 !important; }
		</style>
		</head>
		<body style="margin: 0 !important; padding: 0 !important; background-size: cover;">

		<table border="0" cellpadding="0" cellspacing="0" width="100%">
		    <!-- LOGO -->
		    <tr>
		        <td align="center">
		            <!--[if (gte mso 9)|(IE)]>
		            <table align="center" border="0" cellspacing="0" cellpadding="0" width="600">
		            <tr>
		            <td align="center" valign="top" width="600">
		            <![endif]-->
		            <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
		                <tr>
		                    <td align="left" valign="top" style="padding: 20px 20px 20px 20px;">
		                        <a href="#" target="_blank" style="text-decoration: none;">
									<span style="display: block; font-family: "Poppins", sans-serif; color: #1e88e5; font-size: 36px;" border="0">
									<img src="'.SITE_URL.'/img/logo.png" width="58px" height="30px" alt="">
									</span>
		                        </a>
		                    </td>
		                    <td align="right" valign="middle" style="padding: 20px 20px 20px 20px;">
		                        <p style="margin: 0;font-family: "Poppins", sans-serif;">
									<a href="#" target="_blank" style="color: #3b5998; font-weight: 700; text-decoration: none;">Facebook</a> -
									<a href="#" target="_blank" style="color: #1da1f2; font-weight: 700; text-decoration: none;">Twitter</a> -
									<a href="#" target="_blank" style="color: #dd4b39; font-weight: 700; text-decoration: none;">Google+</a>
								</p>
		                    </td>
		                </tr>
		            </table>
		            <!--[if (gte mso 9)|(IE)]>
		            </td>
		            </tr>
		            </table>
		            <![endif]-->
		        </td>
		    </tr>
		    <!-- HERO -->
		    <tr>
		        <td align="center" style="padding: 0px 10px 0px 10px;">
		            <!--[if (gte mso 9)|(IE)]>
		            <table align="center" border="0" cellspacing="0" cellpadding="0" width="600">
		            <tr>
		            <td align="center" valign="top" width="600">
		            <![endif]-->
		            <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
		                <tr>
		                    <td bgcolor="#ffffff" align="center" valign="top" style="padding: 40px 20px 20px 20px; border-radius: 4px 4px 0px 0px; color: #111111; font-family: "Poppins", sans-serif; font-size: 48px; font-weight: 400; letter-spacing: 2px; line-height: 48px;">
		                      <h1 style="font-size: 25px; font-weight: 400; margin: 0;">Dear '.$name.'</h1>
		                      <br>
		                    </td>
		                </tr>
		            </table>
		            <!--[if (gte mso 9)|(IE)]>
		            </td>
		            </tr>
		            </table>
		            <![endif]-->
		        </td>
		    </tr>
		    <!-- COPY BLOCK -->
		    <tr>
		        <td align="center" style="padding: 0px 10px 0px 10px;">
		            <!--[if (gte mso 9)|(IE)]>
		            <table align="center" border="0" cellspacing="0" cellpadding="0" width="600">
		            <tr>
		            <td align="center" valign="top" width="600">
		            <![endif]-->
		            <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
		              <!-- COPY -->

		              '.$html_message.'
		            
		            </table>

		            <!-- SUPPORT AND CLOSING GREETING -->
		            <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
		              <tr>
		                <td bgcolor="#ffffff" align="left" style="padding: 0px 30px 20px 30px; color: #666666; font-family: &apos;Lato&apos;, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 25px;">
		                  <p style="margin: 0;">If you have any questions, just reply to this email—we are always happy to help out.</p>
		                </td>
		              </tr>
		              <tr>
		                <td bgcolor="#ffffff" align="left" style="padding: 0px 30px 40px 30px; border-radius: 0px 0px 0px 0px; color: #666666; font-family: "Poppins", sans-serif; font-size: 14px; font-weight: 400; line-height: 25px;">
		                  <p style="margin: 0;">Regards,<br>Darolls Investment Team</p>
		                </td>
		              </tr>
		            </table>
		            <!--[if (gte mso 9)|(IE)]>
		            </td>
		            </tr>
		            </table>
		            <![endif]-->
		        </td>
		    </tr>
		   
		    <!-- FOOTER -->
		    <tr>
		        <td align="center" style="padding: 10px 10px 50px 10px;">
		            <!--[if (gte mso 9)|(IE)]>
		            <table align="center" border="0" cellspacing="0" cellpadding="0" width="600">
		            <tr>
		            <td align="center" valign="top" width="600">
		            <![endif]-->
		            <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
		              <!-- NAVIGATION -->
		              <tr>
		                <td bgcolor="#ffffff" align="left" style="padding: 30px 30px 30px 30px; color: #aaaaaa; font-family: "Poppins", sans-serif; font-size: 12px; font-weight: 400; line-height: 18px;">
		                  <p style="margin: 0;">
		                    <a href="'.SITE_URL.'/account/" target="_blank" style="color: #999999; font-weight: 700;">Your Dashboard</a> -
		                    <a href="'.SITE_URL.'/contact" target="_blank" style="color: #999999; font-weight: 700;">Contact Us</a> 
		                  </p>
		                </td>
		              </tr> 
		              <br>
		              <!-- PERMISSION REMINDER -->
		              <tr>
		                <td bgcolor="#ffffff" align="left" style="padding: 0px 30px 30px 30px; color: #aaaaaa; font-family: "Poppins", sans-serif; font-size: 12px; font-weight: 400; line-height: 18px;">
		                  <p style="margin: 0;">You are receiving this email because you signed up on '.SITE_URL.'.</p>
		                </td>
		              </tr>
		              <br>
		              <!-- ADDRESS -->
		              <tr>
		                <td bgcolor="#ffffff" align="left" style="padding: 0px 30px 30px 30px; color: #aaaaaa; font-family: "Poppins", sans-serif; font-size: 12px; font-weight: 400; line-height: 18px;">
		                  <p style="margin: 0;">Darolls Investment - Suite 23-24 Fundex House, Behind Glory Tabernacle, Ojurin-Ashi Road, Bodija, Ibadan, Nigeria. </p>
		                </td>
		              </tr>
		              <br>
				      <!-- COPYRIGHT -->
		              <tr>
		                <td align="center" style="padding: 30px 30px 30px 30px; color: #ffffff; font-family: "Poppins", sans-serif; font-size: 12px; font-weight: 400; line-height: 18px;">
		                  <p style="margin: 0;">Copyright © '.date('Y').' Darolls Nigeria Limited. All rights reserved.</p>
		                </td>
		              </tr>
		            </table>
		            <!--[if (gte mso 9)|(IE)]>
		            </td>
		            </tr>
		            </table>
		            <![endif]-->
		        </td>
		    </tr>
		</table>

		</body>
		</html>';

		 return $message;
		}



	//////// End of Insert //////////////


/////////////closing bracket for class /////////////
}

?>
