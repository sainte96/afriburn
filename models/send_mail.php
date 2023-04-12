<?php
// ****************************** MAIL SENDING FUNCTIONS FILE *************************

// Note: This is the main mail functions file for cross app mail sending. every mail function is declared here statically in the class 'sm', just use for example sm::send_mail('1st_field','2nd_field') 
// ======================================================================================= 
		
class sm {
	
                public static function face_of_register($email,$fname){
                            
                            $html_message='<HTML style="background-color: white"><BODY style="width:600px;margin:3px auto;font-size:12px;border:1px solid #ddd">
                                <div style="font-family:arial; ; min-height: 40vh;
                background-color: #fff;line-height: 20px;  letter-spacing: 0.5;">
                                  
                                <div style="min-height:50px; padding:10px 25px;background-color:black;">
                              <center> <img src="https://afriburn.ng/img/logo_white.png" style="height:100px;" alt="img"> </center> 
                            
                             
                             
                                </div>



                <div style="padding:15px;font-size:18px;text-align: justify;color:#000; background:#fff">
                <br>
                                <span style="">Hi, '.$fname.'.</span>

                <p >You have successfully registered for the Face of AfriBURN contest.</p><br>
                <p >Kindly look out for subsequent messages confirming you as a qualified contestant.</p><br>
                <p>Goodluck!</p>
                
                <br>
                AfriBURN Team
               
                  </div>
                    <div style="background-color:#fff;min-height:50px; border-top:1px solid #ccc; padding:10px 25px;">
                              <br><center>  
                            For inquiries, send us an email at <a href="mailto:auditions@afriburn.ng" target="_blank">auditions@afriburn.ng</a>
                                <br><br>
                                
                                <a href="https://twitter.com/afriburn_ng" target="_blank">
                                <img src="https://afriburn.ng/img/mas_tweet.png" style="height:20px;margin-right:10px"> </a>
                                 <a href="https://instagram.com/afriburn.ng" target="_blank">
                                <img src="https://afriburn.ng/img/mas_insta.png" style="height:20px;">
                                </a>

                       

                </center>
                </div>
                               

                                </BODY></HTML> ';
                            $message_body=$html_message;            
                            $Server = MAIL_SEND_SERVER;
                            $from = MAIL_FROM;
                            // $subject = $subject ."(".date("F j, Y, D, h:i a") .")";
                            $headers = "From:".SITE_NAME." <".$from.">\n";
                            $headers .= "Reply-To: $Server <".$from.">\n";
                            $headers .= "Return-Path: $Server <".$from.">\n";
                            $headers .= "MIME-Version: 1.0\n";
                            $headers .= "Content-type: text/html; charset=iso-8859-1\n";
                            $mail_from = SITE_NAME;
                            mail($email, 'Face-of AfriBurn', $message_body, $headers, $mail_from);

                    }

                    public static function auditions($email,$name,$category,$username,$content){
                            
                            $html_message='<HTML style="background-color: white"><BODY style="width:600px;margin:3px auto;font-size:10px;border:1px solid #ddd">
                                <div style="font-family:arial; ; min-height: 40vh;
                background-color: #fff;line-height: 20px;  letter-spacing: 0.5;">
                                  
                                <div style="min-height:50px; padding:10px 25px;background-color:black;">
                              <center> <img src="https://afriburn.ng/img/logo_white.png" style="height:100px;" alt="img"> </center> 
                            
                             
                             
                                </div>



                <div style="padding:15px;font-size:18px;text-align: justify;color:#000; background:#fff">
                <br>
                                <span style="">Hi, '.$name.'.</span>
                <p >Your registration number is '.$username.'.</p>
                <p >You have successfully registered for the AfriBURN Auditions under the '.$category.' Category.</p>

                <p>- INSTRUCTIONS - STAGE 02 - '.$category.'.</p>

                <p>- BEGIN SUBMISSIONS: February 27, 2022 (Sunday)</p>

                '.$content.'

                <p><u>P.S:</u> You qualify for the next phase only if you follow the IG handle @afriburn.ng and @afriburnstudios. <br><br> Video entries will feature on the YouTube Channel where you can share links to earn your votes. <br> The more your votes the more likely you are to qualify.<br> Votes are determined by comments and likes. These only count if voters subscribe to the channel<br>
                
                <p >Kindly look out for subsequent messages confirming you as a qualified contestant.</p>
                <p>Goodluck!</p>
                
                <br>
                AfriBURN Team
               
                  </div>
                    <div style="background-color:#fff;min-height:50px; border-top:1px solid #ccc; padding:10px 25px;">
                              <br><center>  
                            For inquiries, send us an email at <a href="mailto:auditions@afriburn.ng" target="_blank">auditions@afriburn.ng</a>
                                <br><br>
                                
                                <a href="https://twitter.com/afriburn_ng" target="_blank">
                                <img src="https://afriburn.ng/img/mas_tweet.png" style="height:20px;margin-right:10px"> </a>
                                 <a href="https://instagram.com/afriburn.ng" target="_blank">
                                <img src="https://afriburn.ng/img/mas_insta.png" style="height:20px;">
                                </a>

                       

                </center>
                </div>
                               

                                </BODY></HTML> ';
                            $message_body=$html_message;            
                            $Server = MAIL_SEND_SERVER;
                            $from = MAIL_FROM;
                            // $subject = $subject ."(".date("F j, Y, D, h:i a") .")";
                            $headers = "From:".SITE_NAME." <".$from.">\n";
                            $headers .= "Reply-To: $Server <".$from.">\n";
                            $headers .= "Return-Path: $Server <".$from.">\n";
                            $headers .= "MIME-Version: 1.0\n";
                            $headers .= "Content-type: text/html; charset=iso-8859-1\n";
                            $mail_from = SITE_NAME;
                            mail($email, 'AfriBurn Auditions', $message_body, $headers, $mail_from);

                    }

                    public static function auditions2($email,$name,$category,$username){
                            
                            $html_message='<HTML style="background-color: white"><BODY style="width:600px;margin:3px auto;font-size:12px;border:1px solid #ddd">
                                <div style="font-family:arial; ; min-height: 40vh;
                background-color: #fff;line-height: 20px;  letter-spacing: 0.5;">
                                  
                                <div style="min-height:50px; padding:10px 25px;background-color:black;">
                              <center> <img src="https://afriburn.ng/img/logo_white.png" style="height:100px;" alt="img"> </center> 
                            
                             
                             
                                </div>



                <div style="padding:15px;font-size:18px;text-align: justify;color:#000; background:#fff">
                <br>
                                <span style="">Hi, '.$name.'.</span>
                <p >Your registration number is '.$username.'.</p><br>
                <p >You have successfully registered for the AfriBURN Auditions under the '.$category.'.</p><br>
                <p >Upload a short monologue video of yourself on IG with your registration number and #afriburnstarcontest #nexttuesdday as caption and reply this mail with your IG video link.</p><br>
                <p >Kindly look out for subsequent messages confirming you as a qualified contestant.</p><br>
                <p>Goodluck!</p>
                
                <br>
                AfriBURN Team
               
                  </div>
                    <div style="background-color:#fff;min-height:50px; border-top:1px solid #ccc; padding:10px 25px;">
                              <br><center>  
                            For inquiries, send us an email at <a href="mailto:auditions@afriburn.ng" target="_blank">auditions@afriburn.ng</a>
                                <br><br>
                                
                                <a href="https://twitter.com/afriburn_ng" target="_blank">
                                <img src="https://afriburn.ng/img/mas_tweet.png" style="height:20px;margin-right:10px"> </a>
                                 <a href="https://instagram.com/afriburn.ng" target="_blank">
                                <img src="https://afriburn.ng/img/mas_insta.png" style="height:20px;">
                                </a>

                       

                </center>
                </div>
                               

                                </BODY></HTML> ';
                            $message_body=$html_message;            
                            $Server = MAIL_SEND_SERVER;
                            $from = MAIL_FROM;
                            // $subject = $subject ."(".date("F j, Y, D, h:i a") .")";
                            $headers = "From:".SITE_NAME." <".$from.">\n";
                            $headers .= "Reply-To: $Server <".$from.">\n";
                            $headers .= "Return-Path: $Server <".$from.">\n";
                            $headers .= "MIME-Version: 1.0\n";
                            $headers .= "Content-type: text/html; charset=iso-8859-1\n";
                            $mail_from = SITE_NAME;
                            mail($email, 'AfriBurn Auditions', $message_body, $headers, $mail_from);

                    }



                     public static function audition_notification($admin_email,$name,$username){
                            
                            $html_message='<HTML style="background-color: white"><BODY style="width:600px;margin:3px auto;font-size:12px;border:1px solid #ddd">
                                <div style="font-family:arial; ; min-height: 40vh;
                background-color: #fff;line-height: 20px;  letter-spacing: 0.5;">
                                  
                                <div style="min-height:50px; padding:10px 25px;background-color:black;">
                              <center> <img src="https://afriburn.ng/img/logo_white.png" style="height:100px;" alt="img"> </center> 
                            
                             
                             
                                </div>



                <div style="padding:15px;font-size:18px;text-align: justify;color:#000; background:#fff">
                <br>
                                <span style="">Admin, </span>
                <br><br>
                <p >'.$name.' just registed for AfriBURN Auditions with registration number '.$username.'.<br><br>
                
                Check AfriBURN Auditions Admin Dashboard for the details.
               
                  </div>
                    <div style="background-color:#fff;min-height:50px; border-top:1px solid #ccc; padding:10px 25px;">
                              <br><center>  
                            For inquiries, send us an email at <a href="mailto:auditions@afriburn.ng" target="_blank">auditions@afriburn.ng</a>
                                <br><br>
                                
                                <a href="https://twitter.com/afriburn_ng" target="_blank">
                                <img src="https://afriburn.ng/img/mas_tweet.png" style="height:20px;margin-right:10px"> </a>
                                 <a href="https://instagram.com/afriburn.ng" target="_blank">
                                <img src="https://afriburn.ng/img/mas_insta.png" style="height:20px;">
                                </a>

                       

                </center>
                </div>
                               

                                </BODY></HTML> ';
                            $message_body=$html_message;            
                            $Server = MAIL_SEND_SERVER;
                            $from = MAIL_FROM;
                            // $subject = $subject ."(".date("F j, Y, D, h:i a") .")";
                            $headers = "From:".SITE_NAME." <".$from.">\n";
                            $headers .= "Reply-To: $Server <".$from.">\n";
                            $headers .= "Return-Path: $Server <".$from.">\n";
                            $headers .= "MIME-Version: 1.0\n";
                            $headers .= "Content-type: text/html; charset=iso-8859-1\n";
                            $mail_from = SITE_NAME;
                            mail($admin_email, 'AfriBURN Auditions Registration Notification', $message_body, $headers, $mail_from);

                    }



            public static function face_of_register_notification($email,$fname,$lname){
                            
                            $html_message='<HTML style="background-color: white"><BODY style="width:600px;margin:3px auto;font-size:12px;border:1px solid #ddd">
                                <div style="font-family:arial; ; min-height: 40vh;
                background-color: #fff;line-height: 20px;  letter-spacing: 0.5;">
                                  
                                <div style="min-height:50px; padding:10px 25px;background-color:black;">
                              <center> <img src="https://afriburn.ng/img/logo_white.png" style="height:100px;" alt="img"> </center> 
                            
                             
                             
                                </div>



                <div style="padding:15px;font-size:18px;text-align: justify;color:#000; background:#fff">
                <br>
                                <span style="">Admin, </span>

                <p >'.$fname.' '. $lname.' just registed for Face of AfriBURN .<br>
                
                Check Face of AfriBURN Admin Dashboard for the details.
               
                  </div>
                    <div style="background-color:#fff;min-height:50px; border-top:1px solid #ccc; padding:10px 25px;">
                              <br><center>  
                            For inquiries, send us an email at <a href="mailto:auditions@afriburn.ng" target="_blank">auditions@afriburn.ng</a>
                                <br><br>
                                
                                <a href="https://twitter.com/afriburn_ng" target="_blank">
                                <img src="https://afriburn.ng/img/mas_tweet.png" style="height:20px;margin-right:10px"> </a>
                                 <a href="https://instagram.com/afriburn.ng" target="_blank">
                                <img src="https://afriburn.ng/img/mas_insta.png" style="height:20px;">
                                </a>

                       

                </center>
                </div>
                               

                                </BODY></HTML> ';
                            $message_body=$html_message;            
                            $Server = MAIL_SEND_SERVER;
                            $from = MAIL_FROM;
                            // $subject = $subject ."(".date("F j, Y, D, h:i a") .")";
                            $headers = "From:".SITE_NAME." <".$from.">\n";
                            $headers .= "Reply-To: $Server <".$from.">\n";
                            $headers .= "Return-Path: $Server <".$from.">\n";
                            $headers .= "MIME-Version: 1.0\n";
                            $headers .= "Content-type: text/html; charset=iso-8859-1\n";
                            $mail_from = SITE_NAME;
                            mail($email, 'FOA Registration Notification', $message_body, $headers, $mail_from);

                    }

                     public static function selected_mail($email,$name,$category){
                            
                            $html_message='<HTML style="background-color: white"><BODY style="width:600px;margin:3px auto;font-size:12px;border:1px solid #ddd">
                                <div style="font-family:arial; ; min-height: 40vh;
                background-color: #fff;line-height: 20px;  letter-spacing: 0.5;">
                                  
                                <div style="min-height:50px; padding:10px 25px;background-color:black;">
                              <center> <img src="https://afriburn.ng/img/logo_white.png" style="height:100px;" alt="img"> </center> 
                            
                             
                             
                                </div>



                <div style="padding:15px;font-size:18px;text-align: justify;color:#000; background:#fff">
                <br>
                                <span style="">Dear, '.$name.'. </span>

                <p>  Congratulations! you have been selected as a contestant in the AfriBURN Auditions under the '.$category.'. Make sure you watch the AfriBURN space closely for tauditionss ahead.</p>
                <br/>


               
                  </div>
                    <div style="background-color:#fff;min-height:50px; border-top:1px solid #ccc; padding:10px 25px;">
                              <br><center>  
                            For inquiries, send us an email at <a href="mailto:auditions@afriburn.ng" target="_blank">auditions@afriburn.ng</a>
                                <br><br>
                                
                                <a href="https://twitter.com/afriburn_ng" target="_blank">
                                <img src="https://afriburn.ng/img/mas_tweet.png" style="height:20px;margin-right:10px"> </a>
                                 <a href="https://instagram.com/afriburn.ng" target="_blank">
                                <img src="https://afriburn.ng/img/mas_insta.png" style="height:20px;">
                                </a>

                       

                </center>
                </div>
                               

                                </BODY></HTML> ';
                            $message_body=$html_message;            
                            $Server = MAIL_SEND_SERVER;
                            $from = MAIL_FROM;
                            // $subject = $subject ."(".date("F j, Y, D, h:i a") .")";
                            $headers = "From:".SITE_NAME." <".$from.">\n";
                            $headers .= "Reply-To: $Server <".$from.">\n";
                            $headers .= "Return-Path: $Server <".$from.">\n";
                            $headers .= "MIME-Version: 1.0\n";
                            $headers .= "Content-type: text/html; charset=iso-8859-1\n";
                            $mail_from = SITE_NAME;
                            mail($email, 'AfriBurn Auditions', $message_body, $headers, $mail_from);

                    }

                
}

?>