<!doctype html>
<html lang="en-US">

<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <title>Printerradar</title>
    <meta name="description" content="Reset Password Email Template.">
    <style type="text/css">
        a {
            text-decoration: none;
            font-size: 19px;
            font-family: rubik, sans-serif;
            cursor: auto;
        }

        .acod-content {
            font-family: Rubik, sans-serif;
            font-size: 18px;
        }

        .errorcodeboxstepbox,
        .userinfo,
        .printerwontprint_blankstepbox,
        .paperjamstepbox,
        .scannerissuestepbox,
        .setupprinterboxstepbox {
            text-align: start;
        }
    </style>
</head>

<?php
$problem_facing = !empty($formData['problem_facing']) ? $formData['problem_facing'] : 'Paper Jam';
$printer_company_name = !empty($formData['printer_brand']) ? $formData['printer_brand'] : 'HP';
$printer_model_no = !empty($formData['printer_model_no']) ? $formData['printer_model_no'] : 'HJKAS';
$name = !empty($formData['name']) ? $formData['name'] : '-';
// $printer_company_name = $formData['printer_brand'];
// $printer_model_no = $formData['printer_model_no'];
// $name = $formData['name'];

?>

<body marginheight="0" topmargin="0" marginwidth="0" style="margin: 0px; background-color: #f2f3f8;" leftmargin="0">
    <!--100% body table-->
    <table cellspacing="0" border="0" cellpadding="0" width="100%" bgcolor="#f2f3f8"
        style="@import url(https://fonts.googleapis.com/css?family=Rubik:300,400,500,700|Open+Sans:300,400,600,700); font-family: 'Open Sans', sans-serif;">
        <tr>
            <td>
                <table style="background-color: #f2f3f8; max-width:670px;  margin:0 auto;" width="100%" border="0"
                    align="center" cellpadding="0" cellspacing="0">
                    <tr>
                        <td style="height:10px;">&nbsp;</td>
                    </tr>
                    <tr>
                        <td style="text-align:center;">
                            <a href="https://printerradar.com/" style="
                                    text-decoration: none;
                                    display: flex;
                                    justify-content: center;
                                ">
                                <img src="https://printerradar.com/asset/images/printerradariconlogo.png" alt="" style="
                                    width: 72px;
                                    position: relative;
                                    left: 30px;
                                " srcset="">
                                <div style="
                                    left: 44px;
                                    position: relative;
                                    font-size: 31px;
                                    text-decoration: none;
                                    top: 25px;
                                ">
                                    <span class="" style="color: #004db1;font-weight:800;">PRINTERS</span><span
                                        style="color:yellow;font-weight:800;">CLAN</span>
                                </div>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td style="height:20px;">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>
                            <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0"
                                style="max-width:670px;background:#fff; border-radius:3px; text-align:center;-webkit-box-shadow:0 6px 18px 0 rgba(0,0,0,.06);-moz-box-shadow:0 6px 18px 0 rgba(0,0,0,.06);box-shadow:0 6px 18px 0 rgba(0,0,0,.06);">
                                <tr>
                                    <td style="height:40px;">&nbsp;</td>
                                </tr>


                                <!-- <tr>
                                    <td style="padding:0 35px;">
                                        <h1
                                            style="color:#1e1e2d; font-weight:500; margin:0;font-size:32px;font-family:'Rubik',sans-serif;">
                                            Printer Solution Steps</h1>
                                    </td>
                                </tr> -->
                                <tr>
                                    <td style="height:20px;">&nbsp;</td>
                                </tr>

                                <tr class="userinfo">
                                    <td style="padding:10px 35px;"><strong>Dear </strong><?php echo $name; ?>
                                        <p>We hope this email finds you well.</p>
                                        <p>Thank you for reaching out about troubleshooting your printer model
                                            <strong><?php echo $printer_model_no; ?></strong>
                                        </p>
                                    </td>
                                </tr>
                                <!-- <tr class="userinfo">
                                    <td style="padding:10px 35px;"><strong>Printer Brand </strong>
                                        <?php echo $printer_company_name; ?></td>
                                </tr> -->
                                <!-- <tr class="userinfo"> -->
                                <!-- <td style="padding:10px 35px;"> -->
                                <!-- <strong>Printer Model </strong> -->
                                <!-- <p>Thank you for reaching out about troubleshooting your printer model <?php echo $printer_model_no; ?></p></td> -->
                                <!-- </tr> -->

                                <tr>
                                    <td style="padding:0 35px;">
                                        <?php if ($problem_facing == "Error code or Error message") { ?>
                                            <div class="col-lg-8 errorcodeboxstepbox" style="text-align: start;">
                                                <div class="dez-accordion space card p-3" id="accordion1">
                                                    <h3 class="my-4">Error code or Error message</h3>
                                                    <div class="panel">
                                                        <div class="acod-head">
                                                            <h6 class="acod-title">
                                                                <a data-bs-toggle="collapse" href="#collapseOne1"
                                                                    data-parent="#accordion1" aria-expanded="true" class="">
                                                                    1. Check Power and Connections
                                                                </a>
                                                            </h6>
                                                        </div>
                                                        <div id="collapseOne1" class="acod-body collapse show"
                                                            data-parent="#accordion1" style="">
                                                            <div class="acod-content"> Make sure the printer is turned on
                                                                and properly connected to both the power outlet and your
                                                                computer.</div>
                                                        </div>
                                                    </div>


                                                    <div class="panel">
                                                        <div class="acod-head">
                                                            <h6 class="acod-title">
                                                                <a data-bs-toggle="collapse" href="#collapseTwo1"
                                                                    class="collapsed" data-parent="#accordion1">
                                                                    2. Restart the Printer
                                                                </a>
                                                            </h6>
                                                        </div>
                                                        <div id="collapseTwo1" class="acod-body collapse"
                                                            data-parent="#accordion1">
                                                            <div class="acod-content">
                                                                <p>Press and hold down the power button on your printer till
                                                                    all the lights turn off & the printer is shut down.</p>
                                                                <p>
                                                                    Wait for 10-15 seconds and press the power button again
                                                                    to restart the Printer.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="panel">
                                                        <div class="acod-head">
                                                            <h6 class="acod-title">
                                                                <a data-bs-toggle="collapse" href="#collapseThree1"
                                                                    class="collapsed" data-parent="#accordion1">
                                                                    3. Hard Reset the Printer
                                                                </a>
                                                            </h6>
                                                        </div>
                                                        <div id="collapseThree1" class="acod-body collapse"
                                                            data-parent="#accordion1">
                                                            <div class="acod-content">
                                                                <p>a) Shut down the printer & disconnect the printer from
                                                                    the power source by removing the power cable.</p>
                                                                <p>b) Wait for 30 seconds. Reconnect it to the power source
                                                                    and turn on the printer.</p>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="panel">
                                                        <div class="acod-head">
                                                            <h6 class="acod-title">
                                                                <a data-bs-toggle="collapse" href="#collapseFor1"
                                                                    class="collapsed" data-parent="#accordion1">
                                                                    4. Connect Wirelessly </a>
                                                            </h6>
                                                        </div>
                                                        <div id="collapseFor1" class="acod-body collapse"
                                                            data-parent="#accordion1">
                                                            <div class="acod-content">
                                                                <p>a) Press and hold down the wireless connection button on
                                                                    your printer till the wifi lights start flashing.</p>
                                                                <p>b) You will see the network settings on your printer
                                                                    screen.</p>
                                                                <p>c) Choose the name of your network and enter the network
                                                                    password.</p>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="panel">
                                                        <div class="acod-head">
                                                            <h6 class="acod-title">
                                                                <a data-bs-toggle="collapse" href="#collapseFive1"
                                                                    class="collapsed" data-parent="#accordion1">
                                                                    5. Reinstall the Cartridge </a>
                                                            </h6>
                                                        </div>
                                                        <div id="collapseFive1" class="acod-body collapse"
                                                            data-parent="#accordion1">
                                                            <div class="acod-content">
                                                                <p>a) Turn off your printer.</p>

                                                                <p>b) Remove the cartridges from the printer.</p>
                                                                <p>c) Shake them well and reinstall them and turn on the
                                                                    printer again.</p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="panel">
                                                        <div class="acod-head">
                                                            <h6 class="acod-title">
                                                                <a data-bs-toggle="collapse" href="#collapseThree1"
                                                                    class="collapsed" data-parent="#accordion1">
                                                                    6. Paper Jam
                                                                </a>
                                                            </h6>
                                                        </div>
                                                        <div id="collapseThree1" class="acod-body collapse"
                                                            data-parent="#accordion1">
                                                            <div class="acod-content">
                                                                <p>Remove the printer tray and check for any piece of paper
                                                                    stuck inside.</p>
                                                                <p>Make sure you are entering the correct size of paper in
                                                                    the tray and it’s inserted in the right manner.</p>
                                                                <p>If your print job isn't coming out, check the print queue
                                                                    on your computer to ensure the job is not stuck or
                                                                    paused.</p>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="panel">
                                                        <div class="acod-head">
                                                            <h6 class="acod-title">
                                                                <a data-bs-toggle="collapse" href="#collapseThreep31"
                                                                    class="collapsed" data-parent="#accordion1">
                                                                    7. Paper and Ink/Toner
                                                                </a>
                                                            </h6>
                                                        </div>
                                                        <div id="collapseThreep31" class="acod-body collapse"
                                                            data-parent="#accordion1">
                                                            <div class="acod-content">
                                                                <p>Ensure that there is enough paper in the tray and that
                                                                    the ink or toner cartridges are not empty or dried out.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="panel">
                                                        <div class="acod-head">
                                                            <h6 class="acod-title">
                                                                <a data-bs-toggle="collapse" href="#collapseThreed21"
                                                                    class="collapsed" data-parent="#accordion1">
                                                                    8. Default Printer
                                                                </a>
                                                            </h6>
                                                        </div>
                                                        <div id="collapseThreed21" class="acod-body collapse"
                                                            data-parent="#accordion1">
                                                            <div class="acod-content">
                                                                <p>Make sure your printer is set as the default printer in
                                                                    your computer's settings.</p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        <?php } elseif ($problem_facing == "Printer Offline" || $problem_facing == "Can't Connect") { ?>
                                            <div class="col-lg-12 cantconnectofflinestepbox" style="text-align: start;">
                                                <div class="dez-accordion space card p-3" id="accordion1">
                                                    <?php if ($problem_facing == 'Printer Offline') { ?>
                                                        <h3 class="my-4 printerofflineheading">PRINTER OFFLINE (Windows)</h3>
                                                    <?php } else { ?>
                                                        <h3 class="my-4 printerofflineheading">Printer Can't Connect (Windows)
                                                        </h3>
                                                    <?php } ?>
                                                    <div class="panel">
                                                        <div class="acod-head">
                                                            <h6 class="acod-title">
                                                                <a data-bs-toggle="collapse" href="#collapseOne1"
                                                                    data-parent="#accordion1" aria-expanded="true" class="">
                                                                    1. Check to make sure the printer is turned on and
                                                                    connected to the same Wi-Fi network as your device.
                                                                </a>
                                                            </h6>
                                                        </div>
                                                        <div id="collapseOne1" class="acod-body collapse show"
                                                            data-parent="#accordion1" style="">
                                                            <div class="acod-content"> To find out if your printer is
                                                                connected to Wi-Fi, see if your printer's built-in menu has
                                                                options for checking its Wi-Fi connection, or check the
                                                                printer's manual for instructions about how to add it to a
                                                                Wi-Fi network.</div>
                                                        </div>
                                                    </div>


                                                    <div class="panel">
                                                        <div class="acod-head">
                                                            <h6 class="acod-title">
                                                                <a data-bs-toggle="collapse" href="#collapseTwo1"
                                                                    class="collapsed" data-parent="#accordion1">
                                                                    2. Do a Hard Reset on the Printer
                                                                </a>
                                                            </h6>
                                                        </div>
                                                        <div id="collapseTwo1" class="acod-body collapse"
                                                            data-parent="#accordion1">
                                                            <div class="acod-content">Sometimes power-cycling your printer
                                                                can resolve the issue. Turn off your printer and unplug it,
                                                                wait 30 seconds, plug your printer back in, and then turn
                                                                the printer back on.</div>
                                                        </div>
                                                    </div>


                                                    <div class="panel">
                                                        <div class="acod-head">
                                                            <h6 class="acod-title">
                                                                <a data-bs-toggle="collapse" href="#collapseThree1"
                                                                    class="collapsed" data-parent="#accordion1">
                                                                    3. Default Printer
                                                                </a>
                                                            </h6>
                                                        </div>
                                                        <div id="collapseThree1" class="acod-body collapse"
                                                            data-parent="#accordion1">
                                                            <div class="acod-content">
                                                                <p>a) Select Start > Settings > Devices > Printers &
                                                                    scanners.</p>
                                                                <p>b) Select your printer as the default printer in the list
                                                                    of Printers and scanners.</p>
                                                                <p>If you see a message that says, "Windows will stop
                                                                    managing your default printer for you," select OK.</p>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="panel">
                                                        <div class="acod-head">
                                                            <h6 class="acod-title">
                                                                <a data-bs-toggle="collapse" href="#collapseFor1"
                                                                    class="collapsed" data-parent="#accordion1">
                                                                    4. Clear the Print queue </a>
                                                            </h6>
                                                        </div>
                                                        <div id="collapseFor1" class="acod-body collapse"
                                                            data-parent="#accordion1">
                                                            <div class="acod-content">
                                                                <p>a) Select Start > Settings > Devices > Printers &
                                                                    scanners.</p>
                                                                <p>b) Select your printer and then select Open queue.</p>
                                                                <p>c) Under Document Name, select any documents listed, then
                                                                    select Document, and select Cancel.</p>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="panel">
                                                        <div class="acod-head">
                                                            <h6 class="acod-title">
                                                                <a data-bs-toggle="collapse" href="#collapseFive1"
                                                                    class="collapsed" data-parent="#accordion1">
                                                                    5. Remove and reinstall Printer on your computer </a>
                                                            </h6>
                                                        </div>
                                                        <div id="collapseFive1" class="acod-body collapse"
                                                            data-parent="#accordion1">
                                                            <div class="acod-content">
                                                                <p>a) Remove your printer:</p>
                                                                <p>Select Start > Settings > Devices > Printers & scanners.
                                                                </p>
                                                                <p>Select your printer, select Remove device, and then
                                                                    select Yes.</p>
                                                                <p>b) Reinstall your printer:</p>
                                                                <p>Select Start > Settings > Devices > Printers & scanners.
                                                                </p>
                                                                <p>Make sure your printer is turned on and connected. Select
                                                                    Add a printer or scanner and follow the instructions to
                                                                    reinstall your printer.</p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="panel">
                                                        <div class="acod-head">
                                                            <h6 class="acod-title">
                                                                <a data-bs-toggle="collapse" href="#collapseThreecant1"
                                                                    class="collapsed" data-parent="#accordion1">
                                                                    6. Restart your PC
                                                                </a>
                                                            </h6>
                                                        </div>
                                                        <div id="collapseThreecant1" class="acod-body collapse"
                                                            data-parent="#accordion1">
                                                            <div class="acod-content">
                                                                Restarting your PC can sometimes help to refresh the
                                                                services and components necessary for your device to
                                                                communicate with your printer.</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-12 my-3 cantconnectofflinestepbox"
                                                style="text-align: start;">
                                                <div class="dez-accordion space card p-3" id="accordion1">
                                                    <?php if ($problem_facing == "Printer Offline") { ?>
                                                        <h3 class="my-4 printerofflinemac">Printer Offline(Mac)</h3>
                                                    <?php } else { ?>
                                                        <h3 class="my-4 printerofflinemac">Printer Can't Connect (Mac)</h3>
                                                    <?php } ?>
                                                    <div class="panel">
                                                        <div class="acod-head">
                                                            <h6 class="acod-title">
                                                                <a data-bs-toggle="collapse" href="#collapseOne1"
                                                                    data-parent="#accordion1" aria-expanded="true" class="">
                                                                    1. If your printer is connected...
                                                                </a>
                                                            </h6>
                                                        </div>
                                                        <div id="collapseOne1" class="acod-body collapse show"
                                                            data-parent="#accordion1" style="">
                                                            <div class="acod-content"> If your printer is connected to your
                                                                Mac, make sure the printer cable is firmly connected, and
                                                                the printer is plugged into a power point and turned on.
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="panel">
                                                        <div class="acod-head">
                                                            <h6 class="acod-title">
                                                                <a data-bs-toggle="collapse" href="#collapseTwo1"
                                                                    class="collapsed" data-parent="#accordion1">
                                                                    2. If the printer is on the...
                                                                </a>
                                                            </h6>
                                                        </div>
                                                        <div id="collapseTwo1" class="acod-body collapse"
                                                            data-parent="#accordion1">
                                                            <div class="acod-content"> 2. If the printer is on the network,
                                                                make sure your Mac and the printer are still on the same
                                                                network, the printer is turned on, and the network isn’t
                                                                experiencing problems. If the network has multiple printers,
                                                                check which printer you chose — it may be different from the
                                                                one you think you chose.</div>
                                                        </div>
                                                    </div>


                                                    <div class="panel">
                                                        <div class="acod-head">
                                                            <h6 class="acod-title">
                                                                <a data-bs-toggle="collapse" href="#collapseThree1"
                                                                    class="collapsed" data-parent="#accordion1">
                                                                    3. Add your Printer again-
                                                                </a>
                                                            </h6>
                                                        </div>
                                                        <div id="collapseThree1" class="acod-body collapse"
                                                            data-parent="#accordion1">
                                                            <div class="acod-content">
                                                                <p>
                                                                <p>a) On your Mac, if the printer is on the network, choose
                                                                    Apple menu > System Settings, then click Printers &
                                                                    Scanners in the sidebar. (You may have to scroll down.)
                                                                </p>
                                                                <p>b) Add the printer to your list of available printers:
                                                                    Click the Add Printer, Scanner or Fax button on the
                                                                    right. A dialogue appears listing printers on your local
                                                                    network. It may take a minute or two for your printer to
                                                                    appear.</p>
                                                                <p>c) If your printer still doesn’t appear in the list, try
                                                                    adding the printer by its IP address.</p>
                                                            </div>
                                                        </div>
                                                    </div>


                                                </div>
                                            </div>
                                        <?php } elseif ($problem_facing == "Printer Won't Print" || $problem_facing == "Printer Print blank paper") { ?>

                                            <div class="col-lg-8 printerwontprint_blankstepbox" style="text-align: start;">
                                                <div class="dez-accordion space card p-3" id="accordion">
                                                    <?php if ($problem_facing == "Printer Won't Print") { ?>
                                                        <h3 class="my-4 wontprintheadingwindow">Printer Won't Print (Windows)
                                                        </h3>
                                                    <?php } else { ?>
                                                        <h3 class="my-4 wontprintheadingwindow">Printer Print Blank Paper
                                                            (Windows)</h3>
                                                    <?php } ?>
                                                    <div class="panel">
                                                        <div class="acod-head">
                                                            <h6 class="acod-title">
                                                                <a data-bs-toggle="collapse" href="#collapseOneblank1"
                                                                    data-parent="#accordionblank1" aria-expanded="true"
                                                                    class="">
                                                                    1. Ensure your ink cartridges
                                                                </a>
                                                            </h6>
                                                        </div>
                                                        <div id="collapseOneblank1" class="acod-body collapse show"
                                                            data-parent="#accordionblank1" style="">
                                                            <div class="acod-content">Ensure your ink cartridges are
                                                                installed properly. Refer to your printer manual to remove
                                                                and inspect them for any damage or incorrect installation.
                                                                Check the ink level in the cartridges.</div>
                                                        </div>
                                                    </div>


                                                    <div class="panel">
                                                        <div class="acod-head">
                                                            <h6 class="acod-title">
                                                                <a data-bs-toggle="collapse" href="#collapseTwonblank2"
                                                                    class="collapsed" data-parent="#accordionblank1">
                                                                    2. Unplug and restart your printer
                                                                </a>
                                                            </h6>
                                                        </div>
                                                        <div id="collapseTwonblank2" class="acod-body collapse"
                                                            data-parent="#accordionblank1">
                                                            <div class="acod-content">Sometimes power cycling your printer
                                                                can resolve the issue. Turn off your printer and unplug it,
                                                                wait 30 seconds, plug your printer back in, and then turn
                                                                the printer back on.</div>
                                                        </div>
                                                    </div>


                                                    <div class="panel">
                                                        <div class="acod-head">
                                                            <h6 class="acod-title">
                                                                <a data-bs-toggle="collapse" href="#collapseThreeblank3"
                                                                    class="collapsed" data-parent="#accordionblank3">
                                                                    3. Check Cables for Wired connections
                                                                </a>
                                                            </h6>
                                                        </div>
                                                        <div id="collapseThreeblank3" class="acod-body collapse"
                                                            data-parent="#accordionblank3">
                                                            <div class="acod-content">
                                                                Make sure that the printer's USB cable is properly connected
                                                                from the printer to your PC.</div>
                                                        </div>
                                                    </div>


                                                    <div class="panel">
                                                        <div class="acod-head">
                                                            <h6 class="acod-title">
                                                                <a data-bs-toggle="collapse" href="#collapseForblank4"
                                                                    class="collapsed" data-parent="#accordionblank4">
                                                                    4. Unclog the Print Head </a>
                                                            </h6>
                                                        </div>
                                                        <div id="collapseForblank4" class="acod-body collapse"
                                                            data-parent="#accordionblank4">
                                                            <div class="acod-content">
                                                                <p>a) Go to Devices and Printers in Control Panel.</p>
                                                                <p>b) Right-click on your printer and select Printer
                                                                    properties.</p>
                                                                <p>c) Under the Maintenance tab, click on Maintenance and
                                                                    Preferences.</p>
                                                                <p>d) Perform a regular cleaning or deep cleaning.</p>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="panel">
                                                        <div class="acod-head">
                                                            <h6 class="acod-title">
                                                                <a data-bs-toggle="collapse" href="#collapseFive1"
                                                                    class="collapsed" data-parent="#accordion1">
                                                                    5. Install the latest drivers for...</a>
                                                            </h6>
                                                        </div>
                                                        <div id="collapseFive1" class="acod-body collapse"
                                                            data-parent="#accordion1">
                                                            <div class="acod-content"> Install the latest drivers for your
                                                                printer model from the official website.</div>
                                                        </div>
                                                    </div>


                                                </div>
                                            </div>

                                            <div class="col-lg-12 my-3 printerwontprint_blankstepbox"
                                                style="text-align: start;">
                                                <div class="dez-accordion space card p-3" id="accordion1">
                                                    <?php if ($problem_facing == "Printer Won't Print") { ?>
                                                        <h3 class="my-4 wontprintheadingwindow">Printer Won't Print (Mac)</h3>
                                                    <?php } else { ?>
                                                        <h3 class="my-4 wontprintheadingwindow">Printer Print Blank Paper (Mac)
                                                        </h3>
                                                    <?php } ?>

                                                    <div class="panel">
                                                        <div class="acod-head">
                                                            <h6 class="acod-title">
                                                                <a data-bs-toggle="collapse" href="#collapseOne1"
                                                                    data-parent="#accordion1" aria-expanded="true" class="">
                                                                    1. Ensure your ink cartridges are...
                                                                </a>
                                                            </h6>
                                                        </div>
                                                        <div id="collapseOne1" class="acod-body collapse show"
                                                            data-parent="#accordion1" style="">
                                                            <div class="acod-content"> Ensure your ink cartridges are
                                                                installed properly. Refer to your printer manual to remove
                                                                and inspect them for any damage or incorrect installation.
                                                                Check the ink level in the cartridges.</div>
                                                        </div>
                                                    </div>


                                                    <div class="panel">
                                                        <div class="acod-head">
                                                            <h6 class="acod-title">
                                                                <a data-bs-toggle="collapse" href="#collapseTwo1"
                                                                    class="collapsed" data-parent="#accordion1">
                                                                    2. Unplug and restart your printer
                                                                </a>
                                                            </h6>
                                                        </div>
                                                        <div id="collapseTwo1" class="acod-body collapse"
                                                            data-parent="#accordion1">
                                                            <div class="acod-content"> Sometimes power cycling your printer
                                                                can resolve the issue. Turn off your printer and unplug it,
                                                                wait 30 seconds, plug your printer back in, and then turn
                                                                the printer back on.</div>
                                                        </div>
                                                    </div>


                                                    <div class="panel">
                                                        <div class="acod-head">
                                                            <h6 class="acod-title">
                                                                <a data-bs-toggle="collapse" href="#collapseThree1"
                                                                    class="collapsed" data-parent="#accordion1">
                                                                    3. Check Cables for Wired connections
                                                                </a>
                                                            </h6>
                                                        </div>
                                                        <div id="collapseThree1" class="acod-body collapse"
                                                            data-parent="#accordion1">
                                                            <div class="acod-content">
                                                                Make sure that the printer's USB cable is properly connected
                                                                from the printer to your PC.</div>
                                                        </div>
                                                    </div>


                                                    <div class="panel">
                                                        <div class="acod-head">
                                                            <h6 class="acod-title">
                                                                <a data-bs-toggle="collapse" href="#collapseThreemac41"
                                                                    class="collapsed" data-parent="#accordionmac1">
                                                                    4. Unclog the Print Head
                                                                </a>
                                                            </h6>
                                                        </div>
                                                        <div id="collapseThreemac41" class="acod-body collapse"
                                                            data-parent="#accordionmac1">
                                                            <div class="acod-content">
                                                                <p>a)Go to System Preferences > Printers & Scanners under
                                                                    the Apple menu.</p>
                                                                <p>b)Under printer options, in the Utility tab, click on the
                                                                    Open Printer Utility button.</p>
                                                                <p>c)Under the Control menu, select Maintenance.</p>
                                                                <p>d)Click on Print Head Cleaning and follow the on-screen
                                                                    options to run a cleaning.</p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="panel">
                                                        <div class="acod-head">
                                                            <h6 class="acod-title">
                                                                <a data-bs-toggle="collapse" href="#collapseThreemac41"
                                                                    class="collapsed" data-parent="#accordionmacwontnotpr1">
                                                                    5. Install the latest drivers
                                                                </a>
                                                            </h6>
                                                        </div>
                                                        <div id="collapseThreemac41" class="acod-body collapse"
                                                            data-parent="#accordionmacwontnotpr1">
                                                            <div class="acod-content">
                                                                Install the latest drivers for your printer model from the
                                                                official website.
                                                            </div>
                                                        </div>
                                                    </div>


                                                </div>
                                            </div>
                                        <?php } elseif ($problem_facing == "set-up a new Printer") { ?>
                                            <div class="col-lg-8 setupprinterboxstepbox" style="text-align: start;">
                                                <p class="dez-accordion space card p-3" id="accordion">
                                                    <h3 class="my-4">Setup a New Printer (Windows)</h3>

                                                    <strong data-bs-toggle="collapse" href="#collapseOneblank1"
                                                        data-parent="#accordionblank1" aria-expanded="true" class="">
                                                        1. If your printer connects by a wire
                                                    </strong>

                                                    <p>If your printer connects by a wire,
                                                        plug it into your device. It'll connect automatically, your
                                                        PC will download the right drivers, and you can use it right
                                                        away.</p>



                                                    <strong>
                                                        2. To connect a wireless printer, download the latest
                                                        driver and software package for your printer model from
                                                        the official website and follow these steps:
                                                    </strong>

                                             
                                                        <p>a) Select the Start button, then select Settings >
                                                            Devices > Printers & scanners > Add a printer or
                                                            scanner.</p>
                                                        <p>b) Wait for it to find nearby printers, then choose the
                                                            one you want to use, and select Add device. If you want
                                                            to remove the printer later, just highlight it and
                                                            select Remove.</p>
                                                  




                                                    <h3 class="my-4">Setup a New Printer (Mac)</h3>

                                                    <strong>
                                                        1.Prepare your printer:
                                                    </strong>

                                                    <p>Use the instructions that came with your printer to
                                                        unpack the printer, install ink or toner, and add paper.
                                                        Turn on the printer and make sure it’s not displaying
                                                        any errors.</p>

                                                    <strong>
                                                        2. Connect your printer: Follow the instructions that
                                                        came with the printer to connect it to the network.
                                                    </strong>

                                                    <p>
                                                        If you have a Wi-Fi printer, you might need to connect
                                                        the printer to your Mac with a USB cable to set up Wi-Fi
                                                        printing. After connecting the printer to your Mac,
                                                        install the Mac software that came with the printer and
                                                        use the printer’s setup assistant to connect the printer
                                                        to your Wi-Fi network. After setting up, you can
                                                        disconnect the cable from your printer and Mac and the
                                                        printer should remain connected to the Wi-Fi network.
                                                    </p>

                                                    <strong>
                                                        3. Add the printer to your list of available printers:
                                                    </strong>

                                                    <p>
                                                        Choose Apple menu > System Settings, then click Printers
                                                        & Scanners in the sidebar. (You may need to scroll
                                                        down.)</p>

                                                    <strong>
                                                        4. When your printer appears in the list, select your
                                                        printer, then click Add.
                                                    </strong>

                                          
                                                        <p> It may take a minute or two for your printer to appear.
                                                            If you see a message prompting you to download new
                                                            software, make sure to download and install it.</p>
                                                   

                                                    <strong>
                                                        5. If you do not see your printer listed on the left,
                                                        click the Add Printer, Scanner or Fax button on the
                                                        right.
                                                     </strong>

                                                    <p>
                                                        A dialogue appears listing printers on your local network.</p>
                                                </div>
                                            </div>
                                            <?php } elseif ($problem_facing == "Paper Jam") {  ?>
                                                <div class="col-lg-8 paperjamstepbox" style="text-align: start;">
                                                    <div class="dez-accordion space card p-3" id="accordion">
                                                        <h3 class="my-4">Paper Jam</h3>
                                                        <div class="panel">
                                                            <div class="acod-head">
                                                                <h6 class="acod-title">
                                                                    <a data-bs-toggle="collapse" href="#collapseOneblank1"
                                                                        data-parent="#accordionblank1" aria-expanded="true"
                                                                        class="">
                                                                        1. Turn off and unplug the printer
                                                                    </a>
                                                                </h6>
                                                            </div>
                                                            <div id="collapseOneblank1" class="acod-body collapse show"
                                                                data-parent="#accordionblank1" style="">
                                                                <div class="acod-content">
                                                                    <p>First, make sure that your printer is turned off.
                                                                        This is
                                                                        important as you must not prod and poke the printer
                                                                        when
                                                                        it is turned on. Ensure that all printing jobs have
                                                                        been
                                                                        cancelled and the printer is turned off at the plug.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <div class="panel">
                                                            <div class="acod-head">
                                                                <h6 class="acod-title">
                                                                    <a data-bs-toggle="collapse" href="#collapseTwonblank2"
                                                                        class="collapsed" data-parent="#accordionblank1">
                                                                        2. Remove all printer paper from the tray and try
                                                                        reloading
                                                                    </a>
                                                                </h6>
                                                            </div>
                                                            <div id="collapseTwonblank2" class="acod-body collapse"
                                                                data-parent="#accordionblank1">
                                                                <div class="acod-content">
                                                                    <p>One of the most common causes of paper jams is that
                                                                        the
                                                                        paper has simply not been loaded correctly into the
                                                                        printer paper feed. With this in mind, remove any
                                                                        paper
                                                                        from the tray in order to check for any jams. If you
                                                                        do
                                                                        see some paper jammed, pull each sheet out of the
                                                                        printer slowly until the printer is clear again</p>
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <div class="panel">
                                                            <div class="acod-head">
                                                                <h6 class="acod-title">
                                                                    <a data-bs-toggle="collapse" href="#collapseThreeblank3"
                                                                        class="collapsed" data-parent="#accordionblank3">
                                                                        3. Open the rear access door...
                                                                    </a>
                                                                </h6>
                                                            </div>
                                                            <div id="collapseThreeblank3" class="acod-body collapse"
                                                                data-parent="#accordionblank3">
                                                                <div class="acod-content">
                                                                    Open the rear access door to ensure that the rollers are
                                                                    clear and that there aren’t any smaller scraps of paper
                                                                    left
                                                                    behind.</div>
                                                            </div>
                                                        </div>


                                                        <div class="panel">
                                                            <div class="acod-head">
                                                                <h6 class="acod-title">
                                                                    <a data-bs-toggle="collapse" href="#collapseForblank4"
                                                                        class="collapsed" data-parent="#accordionblank4">
                                                                        4. Plug in and restart the printer. </a>
                                                                </h6>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            <?php } elseif ($problem_facing == "Scanner isssue") { ?>
                                                <div class="col-lg-8 scannerissuestepbox" style="text-align: start;">
                                                    <div class="dez-accordion space card p-3" id="accordion">
                                                        <h3 class="my-4">Scanner isssue</h3>

                                                        <p>
                                                            1.Ensure that the scanner software is properly installed
                                                            and all the settings are properly configured.
                                                        </p>



                                                        <p>
                                                            2.Make sure that the power light on the scanner is
                                                            turned on.
                                                        </p>



                                                        <p>
                                                            3.If any software related problems are noticed in
                                                            scanner then uninstall and reinstall the scanner
                                                            software.
                                                        </p>

                                                        <p>
                                                            4.Try to perform the basic tests that are provided by
                                                            the manufacturer. </p>

                                                        <p>

                                                            5.Make sure that the cables to the scanner are properly
                                                            connected.</p>

                                                        <p>
                                                            6.Restarting your computer, unplugging cables and
                                                            verifying any hardware conflicts in the device manager
                                                            can diagnose and troubleshoot the possible errors.</p>


                                                    </div>
                                                </div>
                                            <?php } ?>
                                    </td>



                                <tr>
                                    <td style="padding:0 35px;    text-align: start;">
                                        <p>If your issue is still not resolved or you're unable to follow these
                                            instructions, contact our experienced troubleshooting and certified experts,
                                            who will diagnose the specific problems you're facing and provide tailored
                                            solutions.</p>

                                        <p>If you need assistance, please contact us 24/7 at your convenience:</p>
                                        <p>You can reach us by:</p>
                                        <p>Calling: <strong>+ 1-512-885-1530</strong></p>
                                        <p>Email: <strong>support@printerradar.com</strong></p>

                                        <div>
                                            <h4>Why Choose Us:</h4>
                                            <p>Genuine Support: We are a legitimate printer online support provider.
                                                Transparent Approach: We avoid misleading tactics and hidden fees.
                                                Customer-Centric Focus: Our goal is to provide effective solutions
                                                without unnecessary add-ons.</p>

                                            <p><strong>Free Consultation:</strong>We offer a complimentary initial
                                                consultation to assess your issue and provide guidance.</p>
                                        </div>

                                        <div>
                                            We're committed to providing you with the best possible support. Don't
                                            hesitate to reach out if you need any further assistance.
                                        </div>
                                        <p>Hope to hear from you soon.</p>

                                        <p>Warm Regards,</p>
                                        <strong>(Printerradar Team)</strong>
                                        <h4>HAPPY PRINTING!</h4>
                                    </td>
                                </tr>

                    </tr>


                    <tr>
                        <td style="height:40px;">&nbsp;</td>
                    </tr>

                </table>
            </td>



        <tr>
            <td style="height:20px;">&nbsp;</td>
        </tr>
        <tr>
            <td style="text-align:center;">
                <p style="font-size:14px; color:rgba(69, 80, 86, 0.7411764705882353); line-height:18px; margin:0 0 0;">
                    &copy; <strong>https://printerradar.com</strong></p>
            </td>
        </tr>
        <tr>
            <td style="height:80px;">&nbsp;</td>
        </tr>
    </table>
    </td>
    </tr>
    </table>
</body>

</html>