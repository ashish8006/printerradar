<style>
    .cardbackgroundcolor {
        background-color: #ebebeb !important;
    }
</style>

<div class="quizcontainer pt-0 pb-5">
    <div class="quiz-main">
        <div class="container show-section">
            <section class="steps">            
                <div class="container">
                    <div class="d-flex justify-content-center">
                        <div class="twelve  pt-3">
                            <h1 class="position-relative px-5 pb-3">TROUBLESHOOTING STEPS</h1>
                            <div class="px-4">
                                <!-- <p class="pb-2 pt-3 text-center">Please provide the below-mentioned details for us to send you all the necessary troubleshooting step-by-step instructions to help you resolve the issue :</p> -->
                            </div>
                        </div>
                    </div>
                </div>


                <div class="pt-3">

                    <div class="row">
                        <div class="col-lg-12">
                            <?php
                            if ($formData['problem_facing'] == 'Error code or Error message') { ?>
                                <div>
                                    <div class="col-lg-12">
                                        <div class="dez-accordion space shadow cardbackgroundcolor p-3" id="accordion1">
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
                                                    <div class="acod-content"> Make sure the printer is turned on and
                                                        properly connected
                                                        to both the power outlet and your computer.</div>
                                                </div>
                                            </div>


                                            <div class="panel">
                                                <div class="acod-head">
                                                    <h6 class="acod-title">
                                                        <a data-bs-toggle="collapse" href="#collapseTwo1" class="collapsed"
                                                            data-parent="#accordion1">
                                                            2. Restart the Printer
                                                        </a>
                                                    </h6>
                                                </div>
                                                <div id="collapseTwo1" class="acod-body collapse" data-parent="#accordion1">
                                                    <div class="acod-content">
                                                        <p>Press and hold down the power button on your printer till all the
                                                            lights turn
                                                            off & the printer is shut down.</p>
                                                        <p>
                                                            Wait for 10-15 seconds and press the power button again to
                                                            restart the
                                                            Printer.
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
                                                        <p>a) Shut down the printer & disconnect the printer from the power
                                                            source by
                                                            removing the power cable.</p>
                                                        <p>b) Wait for 30 seconds. Reconnect it to the power source and turn
                                                            on the
                                                            printer.</p>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="panel">
                                                <div class="acod-head">
                                                    <h6 class="acod-title">
                                                        <a data-bs-toggle="collapse" href="#collapseFor1" class="collapsed"
                                                            data-parent="#accordion1">
                                                            4. Connect Wirelessly </a>
                                                    </h6>
                                                </div>
                                                <div id="collapseFor1" class="acod-body collapse" data-parent="#accordion1">
                                                    <div class="acod-content">
                                                        <p>a) Press and hold down the wireless connection button on your
                                                            printer till
                                                            the wifi lights start flashing.</p>
                                                        <p>b) You will see the network settings on your printer screen.</p>
                                                        <p>c) Choose the name of your network and enter the network
                                                            password.</p>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="panel">
                                                <div class="acod-head">
                                                    <h6 class="acod-title">
                                                        <a data-bs-toggle="collapse" href="#collapseFive1" class="collapsed"
                                                            data-parent="#accordion1">
                                                            5. Reinstall the Cartridge </a>
                                                    </h6>
                                                </div>
                                                <div id="collapseFive1" class="acod-body collapse"
                                                    data-parent="#accordion1">
                                                    <div class="acod-content">
                                                        <p>a) Turn off your printer.</p>

                                                        <p>b) Remove the cartridges from the printer.</p>
                                                        <p>c) Shake them well and reinstall them and turn on the printer
                                                            again.</p>
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
                                                        <p>Remove the printer tray and check for any piece of paper stuck
                                                            inside.</p>
                                                        <p>Make sure you are entering the correct size of paper in the tray
                                                            and it’s
                                                            inserted in the right manner.</p>
                                                        <p>If your print job isn't coming out, check the print queue on your
                                                            computer to
                                                            ensure the job is not stuck or paused.</p>
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
                                                        <p>Ensure that there is enough paper in the tray and that the ink or
                                                            toner
                                                            cartridges are not empty or dried out.</p>
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
                                                        <p>Make sure your printer is set as the default printer in your
                                                            computer's
                                                            settings.</p>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            <?php } else if ($formData['problem_facing'] == "Offline or Can't connect" || $formData['problem_facing'] == 'Printer Offline' || $formData['problem_facing'] == "Can't Connect") { ?>

                                    <div>
                                        <div class="col-lg-12">
                                            <div class="dez-accordion space shadow cardbackgroundcolor p-3" id="accordion1">
                                                <h3 class="my-4 printerofflineheading">
                                                <?php echo ucfirst($formData['problem_facing']); ?>
                                                    (Windows)
                                                </h3>
                                                <div class="panel">
                                                    <div class="acod-head">
                                                        <h6 class="acod-title">
                                                            <a data-bs-toggle="collapse" href="#collapseOne1"
                                                                data-parent="#accordion1" aria-expanded="true" class="">
                                                                1. Check to make sure the printer is turned on and connected to
                                                                the same
                                                                Wi-Fi network as your device.
                                                            </a>
                                                        </h6>
                                                    </div>
                                                    <div id="collapseOne1" class="acod-body collapse show"
                                                        data-parent="#accordion1" style="">
                                                        <div class="acod-content"> To find out if your printer is connected to
                                                            Wi-Fi, see if
                                                            your printer's built-in menu has options for checking its Wi-Fi
                                                            connection, or
                                                            check the printer's manual for instructions about how to add it to a
                                                            Wi-Fi
                                                            network.</div>
                                                    </div>
                                                </div>


                                                <div class="panel">
                                                    <div class="acod-head">
                                                        <h6 class="acod-title">
                                                            <a data-bs-toggle="collapse" href="#collapseTwo1" class="collapsed"
                                                                data-parent="#accordion1">
                                                                2. Do a Hard Reset on the Printer
                                                            </a>
                                                        </h6>
                                                    </div>
                                                    <div id="collapseTwo1" class="acod-body collapse" data-parent="#accordion1">
                                                        <div class="acod-content">Sometimes power-cycling your printer can
                                                            resolve the
                                                            issue. Turn off your printer and unplug it, wait 30 seconds, plug
                                                            your printer
                                                            back in, and then turn the printer back on.</div>
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
                                                            <p>a) Select Start > Settings > Devices > Printers & scanners.</p>
                                                            <p>b) Select your printer as the default printer in the list of
                                                                Printers and
                                                                scanners.</p>
                                                            <p>If you see a message that says, "Windows will stop managing your
                                                                default
                                                                printer for you," select OK.</p>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="panel">
                                                    <div class="acod-head">
                                                        <h6 class="acod-title">
                                                            <a data-bs-toggle="collapse" href="#collapseFor1" class="collapsed"
                                                                data-parent="#accordion1">
                                                                4. Clear the Print queue </a>
                                                        </h6>
                                                    </div>
                                                    <div id="collapseFor1" class="acod-body collapse" data-parent="#accordion1">
                                                        <div class="acod-content">
                                                            <p>a) Select Start > Settings > Devices > Printers & scanners.</p>
                                                            <p>b) Select your printer and then select Open queue.</p>
                                                            <p>c) Under Document Name, select any documents listed, then select
                                                                Document,
                                                                and select Cancel.</p>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="panel">
                                                    <div class="acod-head">
                                                        <h6 class="acod-title">
                                                            <a data-bs-toggle="collapse" href="#collapseFive1" class="collapsed"
                                                                data-parent="#accordion1">
                                                                5. Remove and reinstall Printer on your computer </a>
                                                        </h6>
                                                    </div>
                                                    <div id="collapseFive1" class="acod-body collapse"
                                                        data-parent="#accordion1">
                                                        <div class="acod-content">
                                                            <p>a) Remove your printer:</p>
                                                            <p>Select Start > Settings > Devices > Printers & scanners.</p>
                                                            <p>Select your printer, select Remove device, and then select Yes.
                                                            </p>
                                                            <p>b) Reinstall your printer:</p>
                                                            <p>Select Start > Settings > Devices > Printers & scanners.</p>
                                                            <p>Make sure your printer is turned on and connected. Select Add a
                                                                printer or
                                                                scanner and follow the instructions to reinstall your printer.
                                                            </p>
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
                                                            Restarting your PC can sometimes help to refresh the services and
                                                            components
                                                            necessary for your device to communicate with your printer.</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-12 my-3">
                                            <div class="dez-accordion space shadow cardbackgroundcolor p-3" id="accordion1">
                                                <h3 class="my-4 printerofflinemac">
                                                <?php echo ucfirst($formData['problem_facing']); ?> (Mac)
                                                </h3>
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
                                                        <div class="acod-content"> If your printer is connected to your Mac,
                                                            make sure the
                                                            printer cable is firmly connected, and the printer is plugged into a
                                                            power point
                                                            and turned on.</div>
                                                    </div>
                                                </div>


                                                <div class="panel">
                                                    <div class="acod-head">
                                                        <h6 class="acod-title">
                                                            <a data-bs-toggle="collapse" href="#collapseTwo1" class="collapsed"
                                                                data-parent="#accordion1">
                                                                2. If the printer is on the...
                                                            </a>
                                                        </h6>
                                                    </div>
                                                    <div id="collapseTwo1" class="acod-body collapse" data-parent="#accordion1">
                                                        <div class="acod-content"> 2. If the printer is on the network, make
                                                            sure your Mac
                                                            and the printer are still on the same network, the printer is turned
                                                            on, and the
                                                            network isn’t experiencing problems. If the network has multiple
                                                            printers, check
                                                            which printer you chose — it may be different from the one you think
                                                            you chose.
                                                        </div>
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
                                                            <p>a) On your Mac, if the printer is on the network, choose Apple
                                                                menu > System
                                                                Settings, then click Printers & Scanners in the sidebar. (You
                                                                may have to
                                                                scroll down.)</p>
                                                            <p>b) Add the printer to your list of available printers: Click the
                                                                Add Printer,
                                                                Scanner or Fax button on the right. A dialogue appears listing
                                                                printers on
                                                                your local network. It may take a minute or two for your printer
                                                                to appear.
                                                            </p>
                                                            <p>c) If your printer still doesn’t appear in the list, try adding
                                                                the printer
                                                                by its IP address.</p>
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>
                                        </div>
                                    </div>
                            <?php } else if ($formData['problem_facing'] == "Printer Won't Print" || $formData['problem_facing'] == 'Printer Print blank paper') { ?>

                                        <div>

                                            <div class="col-lg-12">
                                                <div class="dez-accordion space shadow cardbackgroundcolor p-3" id="accordion">
                                                    <h3 class="my-4 wontprintheadingwindow">
                                                <?php echo ucfirst($formData['problem_facing']); ?>
                                                        (Windows)
                                                    </h3>
                                                    <div class="panel">
                                                        <div class="acod-head">
                                                            <h6 class="acod-title">
                                                                <a data-bs-toggle="collapse" href="#collapseOneblank1"
                                                                    data-parent="#accordionblank1" aria-expanded="true" class="">
                                                                    1. Ensure your ink cartridges
                                                                </a>
                                                            </h6>
                                                        </div>
                                                        <div id="collapseOneblank1" class="acod-body collapse show"
                                                            data-parent="#accordionblank1" style="">
                                                            <div class="acod-content">Ensure your ink cartridges are installed
                                                                properly. Refer
                                                                to your printer manual to remove and inspect them for any damage or
                                                                incorrect
                                                                installation. Check the ink level in the cartridges.</div>
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
                                                            <div class="acod-content">Sometimes power cycling your printer can
                                                                resolve the
                                                                issue. Turn off your printer and unplug it, wait 30 seconds, plug
                                                                your printer
                                                                back in, and then turn the printer back on.</div>
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
                                                                Make sure that the printer's USB cable is properly connected from
                                                                the printer to
                                                                your PC.</div>
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
                                                                <p>b) Right-click on your printer and select Printer properties.</p>
                                                                <p>c) Under the Maintenance tab, click on Maintenance and
                                                                    Preferences.</p>
                                                                <p>d) Perform a regular cleaning or deep cleaning.</p>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="panel">
                                                        <div class="acod-head">
                                                            <h6 class="acod-title">
                                                                <a data-bs-toggle="collapse" href="#collapseFive1" class="collapsed"
                                                                    data-parent="#accordion1">
                                                                    5. Install the latest drivers for...</a>
                                                            </h6>
                                                        </div>
                                                        <div id="collapseFive1" class="acod-body collapse"
                                                            data-parent="#accordion1">
                                                            <div class="acod-content"> Install the latest drivers for your printer
                                                                model from
                                                                the official website.</div>
                                                        </div>
                                                    </div>


                                                </div>
                                            </div>

                                            <div class="col-lg-12 my-3">
                                                <div class="dez-accordion space shadow cardbackgroundcolor p-3" id="accordion1">
                                                    <h3 class="my-4 wontprintheadingmac">
                                                <?php echo ucfirst($formData['problem_facing']); ?> (Mac)
                                                    </h3>
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
                                                            <div class="acod-content"> Ensure your ink cartridges are installed
                                                                properly. Refer
                                                                to your printer manual to remove and inspect them for any damage or
                                                                incorrect
                                                                installation. Check the ink level in the cartridges.</div>
                                                        </div>
                                                    </div>


                                                    <div class="panel">
                                                        <div class="acod-head">
                                                            <h6 class="acod-title">
                                                                <a data-bs-toggle="collapse" href="#collapseTwo1" class="collapsed"
                                                                    data-parent="#accordion1">
                                                                    2. Unplug and restart your printer
                                                                </a>
                                                            </h6>
                                                        </div>
                                                        <div id="collapseTwo1" class="acod-body collapse" data-parent="#accordion1">
                                                            <div class="acod-content"> Sometimes power cycling your printer can
                                                                resolve the
                                                                issue. Turn off your printer and unplug it, wait 30 seconds, plug
                                                                your printer
                                                                back in, and then turn the printer back on.</div>
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
                                                                Make sure that the printer's USB cable is properly connected from
                                                                the printer to
                                                                your PC.</div>
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
                                                                <p>a)Go to System Preferences > Printers & Scanners under the Apple
                                                                    menu.</p>
                                                                <p>b)Under printer options, in the Utility tab, click on the Open
                                                                    Printer
                                                                    Utility button.</p>
                                                                <p>c)Under the Control menu, select Maintenance.</p>
                                                                <p>d)Click on Print Head Cleaning and follow the on-screen options
                                                                    to run a
                                                                    cleaning.</p>
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
                                                                Install the latest drivers for your printer model from the official
                                                                website.
                                                            </div>
                                                        </div>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>

                            <?php } else if ($formData['problem_facing'] == "Set-up a new printer") { ?>

                                            <div>
                                                <div class="col-lg-12 setupprinterboxstepbox">
                                                    <div class="dez-accordion space shadow cardbackgroundcolor p-3" id="accordion">
                                                        <h3 class="my-4"><?php echo ucfirst($formData['problem_facing']); ?> (Windows)</h3>
                                                        <div class="panel">
                                                            <div class="acod-head">
                                                                <h6 class="acod-title">
                                                                    <a data-bs-toggle="collapse" href="#collapseOneblank1"
                                                                        data-parent="#accordionblank1" aria-expanded="true" class="">
                                                                        1. If your printer connects by a wire
                                                                    </a>
                                                                </h6>
                                                            </div>
                                                            <div id="collapseOneblank1" class="acod-body collapse show"
                                                                data-parent="#accordionblank1" style="">
                                                                <div class="acod-content">If your printer connects by a wire, plug it
                                                                    into your
                                                                    device. It'll connect automatically, your PC will download the right
                                                                    drivers,
                                                                    and you can use it right away.</div>
                                                            </div>
                                                        </div>


                                                        <div class="panel">
                                                            <div class="acod-head">
                                                                <h6 class="acod-title">
                                                                    <a data-bs-toggle="collapse" href="#collapseTwonblank2"
                                                                        class="collapsed" data-parent="#accordionblank1">
                                                                        2. To connect a wireless printer, download the latest driver and
                                                                        software
                                                                        package for your printer model from the official website and
                                                                        follow these
                                                                        steps:
                                                                    </a>
                                                                </h6>
                                                            </div>
                                                            <div id="collapseTwonblank2" class="acod-body collapse"
                                                                data-parent="#accordionblank1">
                                                                <div class="acod-content">
                                                                    <p>a) Select the Start button, then select Settings > Devices >
                                                                        Printers &
                                                                        scanners > Add a printer or scanner.</p>
                                                                    <p>b) Wait for it to find nearby printers, then choose the one you
                                                                        want to use,
                                                                        and select Add device. If you want to remove the printer later,
                                                                        just
                                                                        highlight it and select Remove.</p>
                                                                </div>
                                                            </div>
                                                        </div>


                                                    </div>
                                                </div>

                                                <div class="col-lg-12 my-3 setupprinterboxstepbox">
                                                    <div class="dez-accordion space shadow cardbackgroundcolor p-3" id="accordionset1">
                                                        <h3 class="my-4"><?php ucfirst($formData['problem_facing']); ?> (Mac)</h3>
                                                        <div class="panel">
                                                            <div class="acod-head">
                                                                <h6 class="acod-title">
                                                                    <a data-bs-toggle="collapse" href="#collapseOneset1"
                                                                        data-parent="#accordionset1" aria-expanded="true" class="">
                                                                        1.Prepare your printer:
                                                                    </a>
                                                                </h6>
                                                            </div>
                                                            <div id="collapseOneset1" class="acod-body collapse show"
                                                                data-parent="#accordion1" style="">
                                                                <div class="acod-content">
                                                                    <p>Use the instructions that came with your printer to unpack the
                                                                        printer,
                                                                        install ink or toner, and add paper. Turn on the printer and
                                                                        make sure it’s
                                                                        not displaying any errors.</p>
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <div class="panel">
                                                            <div class="acod-head">
                                                                <h6 class="acod-title">
                                                                    <a data-bs-toggle="collapse" href="#collapseTwoset2"
                                                                        class="collapsed" data-parent="#accordionset2">
                                                                        2. Connect your printer: Follow the instructions that came with
                                                                        the printer
                                                                        to connect it to the network.
                                                                    </a>
                                                                </h6>
                                                            </div>
                                                            <div id="collapseTwoset2" class="acod-body collapse"
                                                                data-parent="#accordionset2">
                                                                <div class="acod-content">
                                                                    <p>
                                                                        If you have a Wi-Fi printer, you might need to connect the
                                                                        printer to your
                                                                        Mac with a USB cable to set up Wi-Fi printing. After connecting
                                                                        the printer
                                                                        to your Mac, install the Mac software that came with the printer
                                                                        and use the
                                                                        printer’s setup assistant to connect the printer to your Wi-Fi
                                                                        network.
                                                                        After setting up, you can disconnect the cable from your printer
                                                                        and Mac and
                                                                        the printer should remain connected to the Wi-Fi network.</p>
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <div class="panel">
                                                            <div class="acod-head">
                                                                <h6 class="acod-title">
                                                                    <a data-bs-toggle="collapse" href="#collapseThreeset3"
                                                                        class="collapsed" data-parent="#accordionset3">
                                                                        3. Add the printer to your list of available printers:
                                                                    </a>
                                                                </h6>
                                                            </div>
                                                            <div id="collapseThreeset3" class="acod-body collapse"
                                                                data-parent="#accordionset3">
                                                                <div class="acod-content">
                                                                    <p>
                                                                        Choose Apple menu > System Settings, then click Printers &
                                                                        Scanners in the
                                                                        sidebar. (You may need to scroll down.)</p>
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <div class="panel">
                                                            <div class="acod-head">
                                                                <h6 class="acod-title">
                                                                    <a data-bs-toggle="collapse" href="#collapseThreemacset4"
                                                                        class="collapsed" data-parent="#accordionmacset4">
                                                                        4. When your printer appears in the list, select your printer,
                                                                        then click
                                                                        Add.
                                                                    </a>
                                                                </h6>
                                                            </div>
                                                            <div id="collapseThreemacset4" class="acod-body collapse"
                                                                data-parent="#accordionmacset4">
                                                                <div class="acod-content">
                                                                    <p> It may take a minute or two for your printer to appear. If you
                                                                        see a message
                                                                        prompting you to download new software, make sure to download
                                                                        and install
                                                                        it.</p>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="panel">
                                                            <div class="acod-head">
                                                                <h6 class="acod-title">
                                                                    <a data-bs-toggle="collapse" href="#collapseThreemacset45"
                                                                        class="collapsed" data-parent="#accordionmacset5">
                                                                        5. If you don’t see your printer listed on the left, click the
                                                                        Add Printer,
                                                                        Scanner or Fax button on the right.
                                                                    </a>
                                                                </h6>
                                                            </div>
                                                            <div id="collapseThreemacset45" class="acod-body collapse"
                                                                data-parent="#accordionmacset5">
                                                                <div class="acod-content">
                                                                    A dialogue appears listing printers on your local network.
                                                                </div>
                                                            </div>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>
                            <?php } else if ($formData['problem_facing'] == "Paper Jam") { ?>

                                                <div class="col-lg-12">
                                                    <div class="dez-accordion space shadow cardbackgroundcolor p-3" id="accordion">
                                                        <h3 class="my-4">Paper Jam</h3>
                                                        <div class="panel">
                                                            <div class="acod-head">
                                                                <h6 class="acod-title">
                                                                    <a data-bs-toggle="collapse" href="#collapseOneblank1"
                                                                        data-parent="#accordionblank1" aria-expanded="true" class="">
                                                                        1. Turn off and unplug the printer
                                                                    </a>
                                                                </h6>
                                                            </div>
                                                            <div id="collapseOneblank1" class="acod-body collapse show"
                                                                data-parent="#accordionblank1" style="">
                                                                <div class="acod-content">
                                                                    <p>First, make sure that your printer is turned off. This is important
                                                                        as you must
                                                                        not prod and poke the printer when it is turned on. Ensure that all
                                                                        printing
                                                                        jobs have been cancelled and the printer is turned off at the plug.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <div class="panel">
                                                            <div class="acod-head">
                                                                <h6 class="acod-title">
                                                                    <a data-bs-toggle="collapse" href="#collapseTwonblank2"
                                                                        class="collapsed" data-parent="#accordionblank1">
                                                                        2. Remove all printer paper from the tray and try reloading
                                                                    </a>
                                                                </h6>
                                                            </div>
                                                            <div id="collapseTwonblank2" class="acod-body collapse"
                                                                data-parent="#accordionblank1">
                                                                <div class="acod-content">
                                                                    <p>One of the most common causes of paper jams is that the paper has
                                                                        simply not been
                                                                        loaded correctly into the printer paper feed. With this in mind,
                                                                        remove any
                                                                        paper from the tray in order to check for any jams. If you do see
                                                                        some paper
                                                                        jammed, pull each sheet out of the printer slowly until the printer
                                                                        is clear
                                                                        again</p>
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
                                                                    Open the rear access door to ensure that the rollers are clear and that
                                                                    there aren’t
                                                                    any smaller scraps of paper left behind.</div>
                                                            </div>
                                                        </div>


                                                        <div class="panel">
                                                            <div class="acod-head">
                                                                <h6 class="acod-title">
                                                                    <a data-bs-toggle="collapse" href="#collapseForblank4" class="collapsed"
                                                                        data-parent="#accordionblank4">
                                                                        4. Plug in and restart the printer.</a>
                                                                </h6>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>

                            <?php } else if ($formData['problem_facing'] == "Scanner isssue") { ?>

                                                    <div class="col-lg-12">
                                                        <div class="shadow cardbackgroundcolor p-3">
                                                            <h3 class="my-2 text-primary">Scanner isssue</h3>
                                                            <hr>
                                                            <div>
                                                                <ul class="scannerissuelisting p-0">
                                                                    <li>
                                                                        <p> 1.Ensure that the scanner software is properly installed and all the
                                                                            settings
                                                                            are properly configured.</p>
                                                                    </li>

                                                                    <li>
                                                                        <p> 2.Make sure that the power light on the scanner is turned on.</p>
                                                                    </li>

                                                                    <li>
                                                                        <p> 3.If any software related problems are noticed in scanner then
                                                                            uninstall and
                                                                            reinstall the scanner software.</p>
                                                                    </li>

                                                                    <li>
                                                                        <p> 4.Try to perform the basic tests that are provided by the
                                                                            manufacturer. </p>
                                                                    </li>

                                                                    <li>
                                                                        <p> 5.Make sure that the cables to the scanner are properly connected.
                                                                        </p>
                                                                    </li>

                                                                    <li>
                                                                        <p> 6.Restarting your computer, unplugging cables and verifying any
                                                                            hardware
                                                                            conflicts in the device manager can diagnose and troubleshoot the
                                                                            possible
                                                                            errors. </p>
                                                                    </li>
                                                                </ul>
                                                            </div>

                                                        </div>
                                                    </div>

                            <?php } else if ($formData['problem_facing'] == "Wi-Fi or wireless setup") { ?>
                                                        <div class="wifiorwireless">
                                                            <div class="col-lg-12 paperjamstepbox">
                                                                <div class="shadow cardbackgroundcolor p-3 setupforwindow">
                                                                    <h3 class="mt-2 my-3 text-primary">Wi-Fi / Wireless setup (Windows)</h3>
                                                                    <ul class="scannerissuelisting p-0">
                                                                        <li>
                                                                            <p>In the first step, connect the printer to WiFi.</p>
                                                                        </li>
                                                                        <li>
                                                                            <p>Then, download the printer driver from the official page.</p>
                                                                        </li>
                                                                        <li>
                                                                            <p>Next, double-tap the downloaded file.</p>
                                                                        </li>
                                                                        <li>
                                                                            <p>Now, you have to complete the installation steps.</p>
                                                                        </li>
                                                                        <li>
                                                                            <p>In the next step, tap the Window key + R.</p>
                                                                        </li>
                                                                        <li>
                                                                            <p>Next, the Run dialogue box will open.</p>
                                                                        </li>
                                                                        <li>
                                                                            <p>Now, enter “control/name Microsoft.DevicesAndPrinters.”</p>
                                                                        </li>
                                                                        <li>
                                                                            <p>After that, click the OK button.</p>
                                                                        </li>
                                                                        <li>
                                                                            <p>Then, the Devices and Printers folder will open.</p>
                                                                        </li>
                                                                        <li>
                                                                            <p>Next, your screen will display the Add Printer option.</p>
                                                                        </li>
                                                                        <li>
                                                                            <p>Click the Add Printer button and follow the prompts.</p>
                                                                        </li>

                                                                    </ul>
                                                                </div>

                                                                <div class="shadow cardbackgroundcolor p-3 my-3 setformac">
                                                                    <h3 class="mt-2 my-3 text-primary">Wi-Fi / Wireless setup (Mac)</h3>
                                                                    <ul class="scannerissuelisting p-0">
                                                                        <li>
                                                                            <p>Firstly, you will need to turn on the Mac device and printer.</p>
                                                                        </li>
                                                                        <li>
                                                                            <p>Next, connect the printer to the wireless network.</p>
                                                                        </li>
                                                                        <li>
                                                                            <p>Now, go to the official page and download the printer driver.</p>
                                                                        </li>
                                                                        <li>
                                                                            <p>Then, complete the driver installation process.</p>
                                                                        </li>
                                                                        <li>
                                                                            <p>After that, go to the Apple Menu.</p>
                                                                        </li>
                                                                        <li>
                                                                            <p>In the menu, you have to click the System and Preferences option.</p>
                                                                        </li>
                                                                        <li>
                                                                            <p>On the next screen, select the Printers and Scanners option.</p>
                                                                        </li>
                                                                        <li>
                                                                            <p>Thereafter, you need to click the “+” sign and add the printer.</p>
                                                                        </li>
                                                                        <li>
                                                                            <p>From the pop-up window, choose your printer.</p>
                                                                        </li>
                                                                        <li>
                                                                            <p>Then, tap on the Add button.</p>
                                                                        </li>
                                                                        <li>
                                                                            <p>After adding your printer, its icon will appear on the screen.</p>
                                                                        </li>
                                                                        <li>
                                                                            <p>Finally! You are all set on a Mac device.</p>
                                                                        </li>

                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>

                            <?php } ?>

                        </div>
                    </div>


                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-9 my-2">
             
                                <div class="rounded-1 p-2 text-center" style="background-color: #10243e;">
                                    <span class="text-light" style="font-size: 26px;">If your issue is still not
                                        resolved,
                                        then you probably need advance troubleshooting from our certified
                                        experts.</span>
                                    <h3 class="fw-bold" style="color:#dd2627;">CALL AN EXPERT ON PRIORITY FOR ASSISTANCE
                                        <br>
                                        
                                         <span>
                  <img src="<?php echo base_url('asset/images/usflag.jpg');  ?>" alt="" style="width: 40px;">
                   +1 888-495-5479</span> 
                   
                    <span class="ms-4">
                  <img src="<?php echo base_url('asset/images/ukflag.jpg');  ?>" alt="" style="width: 40px;">
                  +1 888-495-5479</span> 
                   
                   
                   </h3>


                                    <div class="next-prev py-2" style="height: auto;">
                                        <a href="<?php echo base_url('thank-you'); ?>" id="" class="next">
                                            FINISH <img src="asset/images/icons8-right-arrow.gif" alt=""
                                                class="mx-2 w-25 rounded-pill hitnextbtn" />
                                        </a>
                                    </div>

                                </div>
                          
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>