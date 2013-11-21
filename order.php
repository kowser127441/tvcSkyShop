<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Order Your Products</title>
</head>

<body style="margin:0 auto; width:500px; height:auto;">
 			<div id="order_page">                   
                 <div class="order_page_bg" style="background:#ffffff; border:1px #000 solid; width:500px; height:auto; padding-bottom:0px; float:left;">
                 	<div class="purchase">
                    	<h3 class="order_pur" style="font-family:Verdana, Arial, Helvetica, sans-serif; font-size:18px; margin:5px 0 0 5px; border-bottom:2px #000 solid; width:495px; padding-bottom:0px;">Your Purchase</h3>
                        
                        <form class="order_form" action="" method="post">
                        	<table width="495" border="0" style="font-family:Verdana, Arial, Helvetica, sans-serif; font-size:14px; margin-top:5px;">
                              <tr style="font-family:Verdana, Arial, Helvetica, sans-serif; font-size:14px; font-weight:bold; text-align:center;">
                                <td style="width:100px; text-align:left;">Item Name</td>
                                <td style="width:80px">Quantity</td>
                                <td style="width:80px">Unit Price</td>
                                <td style="width:100px">Total Payable Price</td>
                              </tr>
                              <tr>
                                <td style=" text-align:left; padding-top:0px;">Real Madrid</td>
                                <td style=" text-align:center; padding-top:0px;"><input  maxlength="4" name="order[quantity]" required="required" size="5" type="text" value="1" style="text-align:center" /></td>
                                <td style=" text-align:center; padding-top:0px;">&times; 100</td>
                                <td style=" text-align:center; padding-top:0px;">100</td>
                              </tr>
                            </table>

                        </form><!--end form-->
                        
                        <h3 class="order_pur" style="font-family:Verdana, Arial, Helvetica, sans-serif; font-size:18px; margin:5px 0 0 5px; border-bottom:2px #000 solid; width:495px; padding-bottom:0px;">Your Personal Information</h3>
                        
                        <table cellpadding="5" cellspacing="0" width="495" style="margin:10px 5px 0 5px; font-family:Verdana, Arial, Helvetica, sans-serif; font-size:14px;">
                                                        
                            <tr>
                            	<td style="padding-bottom:0px;">Full Name*</td>
                              	<td style="padding-bottom:0px;">Email*</td>
                            </tr>
                            
                            <tr>
                              	<td style="padding-bottom:0px;"><input id="user_firstname" name="user[firstname]" size="33" type="text" value="" /></td>
                              	<td style="padding-bottom:0px;"><input name="user[email]" size="33" type="text" value="" /></td>
                            </tr>
                            
                            <tr>
                              	<td style="padding-bottom:0px;">Gender*</td>
                              	<td style="padding-bottom:0px;">Phone*</td>
                            </tr>
                            
                            <tr>
                              	<td>
                                	<table>
                                  		<tr>
                                    		<td style="padding-bottom:0px;"><input checked="checked" name="user[gender]" type="radio" value="" /></td>
                
                                    		<td valign="top" style="padding-bottom:0px;">Male</td>
                                    		<td style="padding-bottom:0px;"><input name="user[gender]" type="radio" value="" /></td>
                                    		<td valign="top" style="padding-bottom:0px;">Female</td>
                                  		</tr>
                                	</table>
                              	</td>
                              
                              	<td valign="top"><input class="phone" id="user_phone" name="user[phone]" size="35" style="width:223px;margin-bottom:0px" type="text" /></td>
                            </tr>
                            
                            <!--<tr>
                              	<td style="padding-bottom:0px;">Address*</td>
                            </tr>
                            
                            <tr>
                              	<td><textarea cols="40" id="user_address" name="user[address]" rows="1" style="width:290px;"></textarea></td>
                            </tr>-->
                          </table>
                          
                                                   
                          <h3 class="order_pur" style="font-family:Verdana, Arial, Helvetica, sans-serif; font-size:18px; margin:5px 0 0 5px; border-bottom:2px #000 solid; width:495px; padding-bottom:0px;">Your Delivery Information</h3>
                          
                          <table style="margin:5px 10px 0 5px; font-family:Verdana, Arial, Helvetica, sans-serif; font-size:14px;">
                          	<tr>
                            	
                              	<td style="width: 600px; padding-bottom:0px; font-family:Verdana, Arial, Helvetica, sans-serif; font-size:16px; font-weight:bold; color:#FF0000;">Cash on Delivery</td>
                            </tr>
                            
                            <tr>
                              	<td colspan="4" style="padding-bottom:0px;">
                                	<input checked="checked" name="shipping[choice]" type="radio" value="inside_dhaka" />&nbsp;Inside Dhaka &nbsp;
                                &nbsp;<input name="shipping[choice]" type="radio" value="outside_dhaka" />&nbsp;Outside Dhaka
                                &nbsp;<input name="shipping[choice]" type="radio" value="outside_bd" />&nbsp;Outside Bangladesh
                              	</td>
                            </tr>
                            
                            <tr>
                                <td colspan="2">
                                  Shipping Address:<br /><textarea cols="40" name="shipping[address]" rows="2" style="width:290px; margin-top:5px;"></textarea>
                                </td>
                            </tr>
                
                          </table>
                          
                          <table class="form" cellpadding="5" cellspacing="0" style="margin:0px 10px 0 10px; font-family:Verdana, Arial, Helvetica, sans-serif; font-size:14px;">
                            <tr>
                              <td colspan="6" style="padding-bottom:0px;">
                                <input name="agree" type="checkbox" value="1" />
                                    I agree to the <a href="#" style="text-decoration: underline; color:#999999;">Terms of Use</a>
                              </td>
                            </tr>
                            
                            <tr>
                              <td colspan="6">
                    
                               <input name="commit" type="submit" value="Buy" style="padding:5px 10px 5px 10px;" />
                                Or
                                    <a href="#" style="text-decoration: underline; color:#999999;">Cancel</a>
                    
                              </td>
                            </tr>
                          </table>
                    </div><!--end purchase-->
                 	
                    
                 </div><!--end order_page_bg-->   
               
            </div><!--end order_page-->

</body>
</html>
           
