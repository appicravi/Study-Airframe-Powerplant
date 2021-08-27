


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
					<html xmlns="http://www.w3.org/1999/xhtml">
					  <head>
						<title>HTML email template</title>
						<meta name="viewport" content="width = 375, initial-scale = -1">
					  </head>

					  <body style="background-color: #ffffff; font-size: 16px;">
						<center>
						  <table align="center" border="0" cellpadding="0" cellspacing="0" style="height:100%; width:600px;">
							  <!-- BEGIN EMAIL -->
							  <tr>
								<td align="center" bgcolor="#ffffff" style="padding:30px">
								   <p style="text-align:left">Hello ,<br><br> You requested that the password for your Scrubbing Genius account be reset.
								  </p>
								  <p>
								  Copyable link : http://127.0.0.1/scrubbing/user/new-password/<?php echo e($token); ?>

									<!--<a target="_blank" href="'.$url.'" style="text-decoration:none; background-color: black; border: black 1px solid; color: #fff; padding:10px 10px; display:block;" href="d">
									  <strong>Reset Password</strong></a>-->
								  </p>
                                  <p>
                                    <a href="http://127.0.0.1/scrubbing/user/new-password/<?php echo e($token); ?>">Click Here</a>.
                                  </p>
								 <p style="text-align:left">This link is good until today at midnight and can only be used once.
									<br><br>If you didn’t request this, you can ignore this email or let us know :)
									Your password won’t change until you create a new password.</p>
								  <p style="text-align:left">
								  Best,<br>The TrustaBit Team
								  </p>
								</td>
							  </tr>
							</tbody>
						  </table>
						</center>
					  </body>
					</html><?php /**PATH C:\xampp\htdocs\scrubbing\resources\views/users/verify.blade.php ENDPATH**/ ?>