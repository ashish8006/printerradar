<!doctype html>
<html lang="en-US">

<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <title>Printsmenow</title>
    <meta name="description" content="Printsmenow">

</head>
<?php
$printerbrand = !empty($formData['printer_brand']) ? $formData['printer_brand'] : 'N/A';
$printer_model_no = !empty($formData['printer_model_no']) ? $formData['printer_model_no'] : 'N/A';



$problem_facing = !empty($formData['problem_facing']) ? $formData['problem_facing'] : 'N/A';
$device_connected = !empty($formData['device_connected']) ? $formData['device_connected'] : 'N/A';
$name = !empty($formData['name']) ? $formData['name'] : 'N/A';
$country_code = !empty($formData['country_code']) ? $formData['country_code'] : 'N/A';
$phone = !empty($formData['phone']) ? $formData['phone'] : 'N/A';
$email = !empty($formData['email']) ? $formData['email'] : 'N/A';
$message = !empty($formData['message']) ? $formData['message'] : 'N/A';
$receive_email = !empty($formData['receive_email']) ? $formData['receive_email'] : "No";
$receive_call = !empty($formData['receive_call']) ? $formData['receive_call'] : "No";
// echo "<pre>";print_r($formData);die;
?>


<body style="margin: 0px; background-color: #f2f3f8;">
    <table cellspacing="0" border="0" cellpadding="0" width="100%" bgcolor="#f2f3f8"
        style="font-family: 'Open Sans', sans-serif;">
        <tr>
            <td>
                <table style="background-color: #f2f3f8; max-width: 670px; margin: 0 auto;" width="100%" border="0"
                    align="center" cellpadding="0" cellspacing="0">
                    <tr>
                        <td style="height: 80px;">&nbsp;</td>
                    </tr>
                    <tr>
                        <td style="text-align: center;">
                            <a href="https://printerradar.com" title="logo" target="_blank"
                                style="color:#413c69;font-size:30px;font-weight: 800;">
                                <img src="https://printerradar.com/public/asset/images/Printerradar-logo.png" width="300" alt="">
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td style="height: 20px;">&nbsp;</td>
                    </tr>

                    <tr>
                        <td>
                            <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0"
                                style="max-width: 670px; background: #fff; border-radius: 3px; -webkit-box-shadow: 0 6px 18px 0 rgba(0, 0, 0, .06); -moz-box-shadow: 0 6px 18px 0 rgba(0, 0, 0, .06); box-shadow: 0 6px 18px 0 rgba(0, 0, 0, .06); padding: 0 40px;">
                                <tr>
                                    <td style="height: 40px;">&nbsp;</td>
                                </tr>
                                <tr>
                                    <td style="padding: 0 15px; text-align: center;">
                                        <h1
                                            style="color: #1e1e2d; font-weight: 400; margin: 0; font-size: 32px; font-family: 'Rubik', sans-serif;">
                                            Client Information</h1>
                                        <span
                                            style="display: inline-block; vertical-align: middle; margin: 29px 0 26px; border-bottom: 1px solid #cecece; width: 100px;"></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <table cellpadding="0" cellspacing="0"
                                            style="width: 100%; border: 1px solid #ededed">
                                            <tbody>

                                      
                                                    <tr>
                                                        <td
                                                            style="padding: 10px; border-bottom: 1px solid #ededed; border-right: 1px solid #ededed; width: 35%; font-weight: 500; color: rgba(0, 0, 0, .64)">
                                                            Printer Brand:
                                                        </td>
                                                        <td
                                                            style="padding: 10px; border-bottom: 1px solid #ededed; color: #455056;">
                                                            <?php echo $printerbrand; ?>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td
                                                            style="padding: 10px; border-bottom: 1px solid #ededed; border-right: 1px solid #ededed; width: 35%; font-weight: 500; color: rgba(0, 0, 0, .64)">
                                                            Printer Model Number :
                                                        </td>
                                                        <td
                                                            style="padding: 10px; border-bottom: 1px solid #ededed; color: #455056;">
                                                            <?php echo $printer_model_no; ?>
                                                        </td>
                                                    </tr>




                                                    <tr>
                                                        <td
                                                            style="padding: 10px; border-bottom: 1px solid #ededed; border-right: 1px solid #ededed; width: 35%; font-weight: 500; color: rgba(0, 0, 0, .64)">
                                                            Facing Problem :
                                                        </td>
                                                        <td
                                                            style="padding: 10px; border-bottom: 1px solid #ededed; color: #455056;">
                                                            <?php echo $problem_facing; ?>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td
                                                            style="padding: 10px; border-bottom: 1px solid #ededed; border-right: 1px solid #ededed; width: 35%; font-weight: 500; color: rgba(0, 0, 0, .64)">
                                                            Connected Device :
                                                        </td>
                                                        <td
                                                            style="padding: 10px; border-bottom: 1px solid #ededed; color: #455056;">
                                                            <?php echo $device_connected; ?>
                                                        </td>
                                                    </tr>
                                                

                                                <tr>
                                                    <td
                                                        style="padding: 10px; border-bottom: 1px solid #ededed; border-right: 1px solid #ededed; width: 35%; font-weight: 500; color: rgba(0, 0, 0, .64)">
                                                        Name :
                                                    </td>
                                                    <td
                                                        style="padding: 10px; border-bottom: 1px solid #ededed; color: #455056;">
                                                        <?php echo $name; ?>
                                                    </td>
                                                </tr>


                                                <tr>
                                                    <td
                                                        style="padding: 10px; border-bottom: 1px solid #ededed; border-right: 1px solid #ededed; width: 35%; font-weight: 500; color: rgba(0, 0, 0, .64)">
                                                        Email :
                                                    </td>
                                                    <td
                                                        style="padding: 10px; border-bottom: 1px solid #ededed; color: #455056;">
                                                        <?php echo $email; ?>

                                                    </td>
                                                </tr>


  <tr>
                                                    <td
                                                        style="padding: 10px; border-bottom: 1px solid #ededed; border-right: 1px solid #ededed; width: 35%; font-weight: 500; color: rgba(0, 0, 0, .64)">
                                                        Country Code :
                                                    </td>
                                                    <td
                                                        style="padding: 10px; border-bottom: 1px solid #ededed; color: #455056;">
                                            <?php echo $country_code; ?>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td
                                                        style="padding: 10px; border-bottom: 1px solid #ededed; border-right: 1px solid #ededed; width: 35%; font-weight: 500; color: rgba(0, 0, 0, .64)">
                                                        Phone Number: 
                                                    </td>
                                                    <td
                                                        style="padding: 10px; border-bottom: 1px solid #ededed; color: #455056;">
                                                        <?php echo $phone; ?>
                                                    </td>
                                                </tr>



                                                <tr>
                                                    <td
                                                        style="padding: 10px; border-bottom: 1px solid #ededed; border-right: 1px solid #ededed; width: 35%; font-weight: 500; color: rgba(0, 0, 0, .64)">
                                                        IP Address :
                                                    </td>
                                                    <td
                                                        style="padding: 10px; border-bottom: 1px solid #ededed; color: #455056;">
                                                        <?php echo $ipAddress; ?>
                                                    </td>
                                                </tr>
                                              


                                                <tr>
                                                    <td
                                                        style="padding: 10px; border-bottom: 1px solid #ededed; border-right: 1px solid #ededed; width: 35%; font-weight: 500; color: rgba(0, 0, 0, .64)">
                                                        Receive a call  :
                                                    </td>
                                                    <td
                                                        style="padding: 10px; border-bottom: 1px solid #ededed; color: #455056;">
                                                        <?php echo $receive_call; ?>
                                                    </td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="height: 40px;">&nbsp;</td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td style="height: 20px;">&nbsp;</td>
                    </tr>
                    <tr>
                        <td style="text-align: center;">
                            <p style="font-size: 14px; color: #455056bd; line-height: 18px; margin: 0 0 0;">&copy;
                                <strong><?php echo base_url(); ?></strong></p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>

</html>