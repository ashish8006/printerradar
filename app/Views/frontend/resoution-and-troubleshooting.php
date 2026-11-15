<?php
// resoution-and-troubleshooting.php  (redesigned UI)
// NOTE: This uses Tailwind utility classes + native <details> accordions (no Bootstrap collapse IDs needed).
// Make sure Tailwind + Font Awesome are loaded globally in your layout.

$problem = isset($formData['problem_facing']) ? $formData['problem_facing'] : '';
$problemTitle = htmlspecialchars($problem);

// Common call numbers
$usNumberText = "+1 888-495-5479";
$ukNumberText = "+1 888-495-5479";
$usTel = "+18884955479";
$ukTel = "+18884955479";

// Helper: render a step accordion item
function render_step($num, $title, $bodyHtml, $open = false) {
  $openAttr = $open ? " open" : "";
  ?>
  <details class="group rounded-2xl bg-white ring-1 ring-slate-200 shadow-sm hover:shadow-md transition overflow-hidden"<?php echo $openAttr; ?>>
    <summary class="cursor-pointer select-none list-none px-4 sm:px-5 py-4 flex items-start gap-3">
      <span class="mt-0.5 inline-flex h-9 w-9 shrink-0 items-center justify-center rounded-xl bg-indigo-50 ring-1 ring-indigo-100 text-indigo-700 font-bold">
        <?php echo (int)$num; ?>
      </span>

      <div class="min-w-0 flex-1">
        <div class="text-base sm:text-lg font-semibold text-slate-900 flex items-center gap-2">
          <i class="fa-solid fa-circle-check text-slate-400 group-open:text-indigo-600 transition-colors" aria-hidden="true"></i>
          <span><?php echo $title; ?></span>
        </div>
        <div class="mt-1 text-sm sm:text-base text-slate-600">
          Tap to <?php echo $open ? "hide" : "view"; ?> details
        </div>
      </div>

      <span class="mt-2 inline-flex h-8 w-8 items-center justify-center rounded-lg bg-slate-50 ring-1 ring-slate-200 text-slate-500 group-open:rotate-180 transition-transform">
        <i class="fa-solid fa-chevron-down" aria-hidden="true"></i>
      </span>
    </summary>

    <div class="px-4 sm:px-5 pb-5 pt-0 text-sm sm:text-base text-slate-700 leading-relaxed">
      <?php echo $bodyHtml; ?>
    </div>
  </details>
  <?php
}
?>

<div class="quizcontainer bg-slate-50 px-4 sm:px-6 lg:px-8 py-8">
  <div class="quiz-main">
    <div class="container show-section">
      <section class="steps">
        <div class="max-w-5xl mx-auto">
          <!-- Header -->
          <div class="bg-white rounded-2xl shadow-lg ring-1 ring-slate-200 p-5 sm:p-6">
            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
              <div class="flex items-start gap-4">
                <div class="shrink-0 h-12 w-12 sm:h-14 sm:w-14 rounded-2xl bg-indigo-50 ring-1 ring-indigo-100 flex items-center justify-center">
                  <i class="fa-solid fa-wrench text-indigo-600 text-xl sm:text-2xl" aria-hidden="true"></i>
                </div>
                <div>
                  <h1 class="text-2xl sm:text-3xl uppercase font-semibold tracking-tight text-slate-900">
                   SELF-TROUBLESHOOTING STEPS
                  </h1>
                  <p class="mt-1 text-base sm:text-lg text-slate-600">
                    Follow these step-by-step instructions based on the issue you selected <strong><?php echo $problemTitle ? $problemTitle : "Troubleshooting"; ?></strong>
                  </p>
                </div>
              </div>

              <div class="hidden sm:flex items-center gap-2">
                <span class="inline-flex items-center justify-center gap-2 rounded-full bg-slate-50 ring-1 ring-slate-200 px-3 py-1.5 text-sm text-slate-700">
                  <i class="fa-solid fa-shield-halved text-slate-500" aria-hidden="true"></i>
                  Clear guidance
                </span>
                <!-- <span class="inline-flex items-center justify-center gap-2 rounded-full bg-slate-50 ring-1 ring-slate-200 px-3 py-1.5 text-sm text-slate-700">
                  <i class="fa-solid fa-clock text-slate-500" aria-hidden="true"></i>
                  Takes a few minutes
                </span> -->
              </div>
            </div>
          </div>

          <!-- Steps -->
          <div class="mt-5 space-y-5">
            <?php
            // 1) Error code or Error message
            if ($problem == 'Error code or Error message') {
              ?>
              <div class="bg-white rounded-2xl shadow-lg ring-1 ring-slate-200 p-5 sm:p-6">
                <div class="flex items-start gap-3">
                  <div class="h-10 w-10 rounded-xl bg-rose-50 ring-1 ring-rose-100 flex items-center justify-center shrink-0">
                    <i class="fa-solid fa-circle-exclamation text-rose-600" aria-hidden="true"></i>
                  </div>
                  <div>
                    <h2 class="text-xl sm:text-2xl font-semibold text-slate-900">
                      Error code or Error message
                    </h2>
                    <p class="mt-1 text-sm sm:text-base text-slate-600">
                      Try these steps in order. Expand each step to see details.
                    </p>
                  </div>
                </div>

                <div class="mt-5 space-y-3">
                  <?php
                  render_step(1, "Check Power and Connections",
                    "Make sure the printer is turned on and properly connected to both the power outlet and your computer.",
                    true
                  );

                  render_step(2, "Restart the Printer",
                    "<p>Press and hold down the power button on your printer till all the lights turn off & the printer is shut down.</p>
                     <p class='mt-2'>Wait for 10-15 seconds and press the power button again to restart the Printer.</p>"
                  );

                  render_step(3, "Hard Reset the Printer",
                    "<p>a) Shut down the printer & disconnect the printer from the power source by removing the power cable.</p>
                     <p class='mt-2'>b) Wait for 30 seconds. Reconnect it to the power source and turn on the printer.</p>"
                  );

                  render_step(4, "Connect Wirelessly",
                    "<p>a) Press and hold down the wireless connection button on your printer till the wifi lights start flashing.</p>
                     <p class='mt-2'>b) You will see the network settings on your printer screen.</p>
                     <p class='mt-2'>c) Choose the name of your network and enter the network password.</p>"
                  );

                  render_step(5, "Reinstall the Cartridge",
                    "<p>a) Turn off your printer.</p>
                     <p class='mt-2'>b) Remove the cartridges from the printer.</p>
                     <p class='mt-2'>c) Shake them well and reinstall them and turn on the printer again.</p>"
                  );

                  render_step(6, "Paper Jam",
                    "<p>Remove the printer tray and check for any piece of paper stuck inside.</p>
                     <p class='mt-2'>Make sure you are entering the correct size of paper in the tray and it’s inserted in the right manner.</p>
                     <p class='mt-2'>If your print job isn't coming out, check the print queue on your computer to ensure the job is not stuck or paused.</p>"
                  );

                  render_step(7, "Paper and Ink/Toner",
                    "<p>Ensure that there is enough paper in the tray and that the ink or toner cartridges are not empty or dried out.</p>"
                  );

                  render_step(8, "Default Printer",
                    "<p>Make sure your printer is set as the default printer in your computer's settings.</p>"
                  );
                  ?>
                </div>
              </div>
              <?php
            }

            // 2) Offline / Can't connect
            else if ($problem == "Offline or Can't connect" || $problem == 'Printer Offline' || $problem == "Can't Connect") {
              ?>
              <div class="bg-white rounded-2xl shadow-lg ring-1 ring-slate-200 p-5 sm:p-6">
                <div class="flex items-start gap-3">
                  <div class="h-10 w-10 rounded-xl bg-amber-50 ring-1 ring-amber-100 flex items-center justify-center shrink-0">
                    <i class="fa-solid fa-plug-circle-xmark text-amber-700" aria-hidden="true"></i>
                  </div>
                  <div>
                    <h2 class="text-xl sm:text-2xl font-semibold text-slate-900">
                      <?php echo ucfirst($problemTitle); ?> (Windows)
                    </h2>
                    <p class="mt-1 text-sm sm:text-base text-slate-600">
                      Follow these steps on a Windows computer.
                    </p>
                  </div>
                </div>

                <div class="mt-5 space-y-3">
                  <?php
                  render_step(1, "Check Wi-Fi & Power",
                    "Check to make sure the printer is turned on and connected to the same Wi-Fi network as your device. To find out if your printer is connected to Wi-Fi, see if your printer's built-in menu has options for checking its Wi-Fi connection, or check the printer's manual for instructions about how to add it to a Wi-Fi network.",
                    true
                  );

                  render_step(2, "Do a Hard Reset on the Printer",
                    "Sometimes power-cycling your printer can resolve the issue. Turn off your printer and unplug it, wait 30 seconds, plug your printer back in, and then turn the printer back on."
                  );

                  render_step(3, "Set Default Printer",
                    "<p>a) Select Start &gt; Settings &gt; Devices &gt; Printers &amp; scanners.</p>
                     <p class='mt-2'>b) Select your printer as the default printer in the list of Printers and scanners.</p>
                     <p class='mt-2'>If you see a message that says, \"Windows will stop managing your default printer for you,\" select OK.</p>"
                  );

                  render_step(4, "Clear the Print Queue",
                    "<p>a) Select Start &gt; Settings &gt; Devices &gt; Printers &amp; scanners.</p>
                     <p class='mt-2'>b) Select your printer and then select Open queue.</p>
                     <p class='mt-2'>c) Under Document Name, select any documents listed, then select Document, and select Cancel.</p>"
                  );

                  render_step(5, "Remove & Reinstall Printer",
                    "<p>a) Remove your printer:</p>
                     <p class='mt-2'>Select Start &gt; Settings &gt; Devices &gt; Printers &amp; scanners.</p>
                     <p class='mt-2'>Select your printer, select Remove device, and then select Yes.</p>
                     <p class='mt-3'>b) Reinstall your printer:</p>
                     <p class='mt-2'>Select Start &gt; Settings &gt; Devices &gt; Printers &amp; scanners.</p>
                     <p class='mt-2'>Make sure your printer is turned on and connected. Select Add a printer or scanner and follow the instructions to reinstall your printer.</p>"
                  );

                  render_step(6, "Restart your PC",
                    "Restarting your PC can sometimes help to refresh the services and components necessary for your device to communicate with your printer."
                  );
                  ?>
                </div>
              </div>

              <div class="bg-white rounded-2xl shadow-lg ring-1 ring-slate-200 p-5 sm:p-6">
                <div class="flex items-start gap-3">
                  <div class="h-10 w-10 rounded-xl bg-sky-50 ring-1 ring-sky-100 flex items-center justify-center shrink-0">
                    <i class="fa-brands fa-apple text-sky-700" aria-hidden="true"></i>
                  </div>
                  <div>
                    <h2 class="text-xl sm:text-2xl font-semibold text-slate-900">
                      <?php echo ucfirst($problemTitle); ?> (Mac)
                    </h2>
                    <p class="mt-1 text-sm sm:text-base text-slate-600">
                      Follow these steps on a Mac computer.
                    </p>
                  </div>
                </div>

                <div class="mt-5 space-y-3">
                  <?php
                  render_step(1, "If your printer is connected…",
                    "If your printer is connected to your Mac, make sure the printer cable is firmly connected, and the printer is plugged into a power point and turned on.",
                    true
                  );

                  render_step(2, "If the printer is on the network…",
                    "If the printer is on the network, make sure your Mac and the printer are still on the same network, the printer is turned on, and the network isn’t experiencing problems. If the network has multiple printers, check which printer you chose — it may be different from the one you think you chose."
                  );

                  render_step(3, "Add your Printer again",
                    "<p>a) On your Mac, if the printer is on the network, choose Apple menu &gt; System Settings, then click Printers &amp; Scanners in the sidebar. (You may have to scroll down.)</p>
                     <p class='mt-2'>b) Add the printer to your list of available printers: Click the Add Printer, Scanner or Fax button on the right. A dialogue appears listing printers on your local network. It may take a minute or two for your printer to appear.</p>
                     <p class='mt-2'>c) If your printer still doesn’t appear in the list, try adding the printer by its IP address.</p>"
                  );
                  ?>
                </div>
              </div>
              <?php
            }

            // 3) Printer Won't Print OR Printer Print blank paper
            else if ($problem == "Printer Won't Print" || $problem == 'Printer Print blank paper') {
              ?>
              <div class="bg-white rounded-2xl shadow-lg ring-1 ring-slate-200 p-5 sm:p-6">
                <div class="flex items-start gap-3">
                  <div class="h-10 w-10 rounded-xl bg-indigo-50 ring-1 ring-indigo-100 flex items-center justify-center shrink-0">
                    <i class="fa-solid fa-print text-indigo-600" aria-hidden="true"></i>
                  </div>
                  <div>
                    <h2 class="text-xl sm:text-2xl font-semibold text-slate-900">
                      <?php echo ucfirst($problemTitle); ?> (Windows)
                    </h2>
                    <p class="mt-1 text-sm sm:text-base text-slate-600">
                      Follow these steps on Windows.
                    </p>
                  </div>
                </div>

                <div class="mt-5 space-y-3">
                  <?php
                  render_step(1, "Ensure your ink cartridges",
                    "Ensure your ink cartridges are installed properly. Refer to your printer manual to remove and inspect them for any damage or incorrect installation. Check the ink level in the cartridges.",
                    true
                  );

                  render_step(2, "Unplug and restart your printer",
                    "Sometimes power cycling your printer can resolve the issue. Turn off your printer and unplug it, wait 30 seconds, plug your printer back in, and then turn the printer back on."
                  );

                  render_step(3, "Check Cables for Wired connections",
                    "Make sure that the printer's USB cable is properly connected from the printer to your PC."
                  );

                  render_step(4, "Unclog the Print Head",
                    "<p>a) Go to Devices and Printers in Control Panel.</p>
                     <p class='mt-2'>b) Right-click on your printer and select Printer properties.</p>
                     <p class='mt-2'>c) Under the Maintenance tab, click on Maintenance and Preferences.</p>
                     <p class='mt-2'>d) Perform a regular cleaning or deep cleaning.</p>"
                  );

                  // This step existed in your file but was truncated in console output;
                  // Keep it here exactly if you have more text. If you want me to match it 1:1,
                  // paste the missing portion and I will insert it.
                  render_step(5, "Check Print Queue / Spooler",
                    "<p>Check the print queue to ensure jobs aren’t stuck or paused. Restart the Print Spooler service if needed.</p>"
                  );
                  ?>
                </div>
              </div>
              <?php
            }

            // 4) Set-up a new printer
            else if ($problem == "Set-up a new printer") {
              ?>
              <div class="bg-white rounded-2xl shadow-lg ring-1 ring-slate-200 p-5 sm:p-6">
                <div class="flex items-start gap-3">
                  <div class="h-10 w-10 rounded-xl bg-emerald-50 ring-1 ring-emerald-100 flex items-center justify-center shrink-0">
                    <i class="fa-solid fa-screwdriver-wrench text-emerald-700" aria-hidden="true"></i>
                  </div>
                  <div>
                    <h2 class="text-xl sm:text-2xl font-semibold text-slate-900">
                      Set-up a new printer
                    </h2>
                    <p class="mt-1 text-sm sm:text-base text-slate-600">
                      Follow these setup steps for Windows and Mac.
                    </p>
                  </div>
                </div>

                <div class="mt-5 grid grid-cols-1 lg:grid-cols-2 gap-5">
                  <div class="rounded-2xl bg-slate-50 ring-1 ring-slate-200 p-5">
                    <h3 class="text-lg font-semibold text-slate-900 flex items-center gap-2">
                      <i class="fa-brands fa-windows text-slate-600" aria-hidden="true"></i>
                      Set-up (Windows)
                    </h3>
                    <ul class="mt-3 space-y-2 text-sm sm:text-base text-slate-700">
                      <li class="flex gap-2"><i class="fa-solid fa-check text-indigo-600 mt-1" aria-hidden="true"></i><span>Connect the printer to Wi-Fi or USB and power it on.</span></li>
                      <li class="flex gap-2"><i class="fa-solid fa-check text-indigo-600 mt-1" aria-hidden="true"></i><span>Download the correct driver from the official website.</span></li>
                      <li class="flex gap-2"><i class="fa-solid fa-check text-indigo-600 mt-1" aria-hidden="true"></i><span>Run the installer and follow the prompts.</span></li>
                      <li class="flex gap-2"><i class="fa-solid fa-check text-indigo-600 mt-1" aria-hidden="true"></i><span>Go to Devices &amp; Printers and add/select your printer.</span></li>
                    </ul>
                  </div>

                  <div class="rounded-2xl bg-slate-50 ring-1 ring-slate-200 p-5">
                    <h3 class="text-lg font-semibold text-slate-900 flex items-center gap-2">
                      <i class="fa-brands fa-apple text-slate-600" aria-hidden="true"></i>
                      Set-up (Mac)
                    </h3>
                    <ul class="mt-3 space-y-2 text-sm sm:text-base text-slate-700">
                      <li class="flex gap-2"><i class="fa-solid fa-check text-indigo-600 mt-1" aria-hidden="true"></i><span>Turn on the printer and connect it to Wi-Fi.</span></li>
                      <li class="flex gap-2"><i class="fa-solid fa-check text-indigo-600 mt-1" aria-hidden="true"></i><span>Download and install the printer driver from the official website.</span></li>
                      <li class="flex gap-2"><i class="fa-solid fa-check text-indigo-600 mt-1" aria-hidden="true"></i><span>Open Apple Menu → System Settings → Printers &amp; Scanners.</span></li>
                      <li class="flex gap-2"><i class="fa-solid fa-check text-indigo-600 mt-1" aria-hidden="true"></i><span>Click “+” and add the printer.</span></li>
                    </ul>
                  </div>
                </div>
              </div>
              <?php
            }

            // 5) Paper Jam
            else if ($problem == "Paper Jam") {
              ?>
              <div class="bg-white rounded-2xl shadow-lg ring-1 ring-slate-200 p-5 sm:p-6">
                <div class="flex items-start gap-3">
                  <div class="h-10 w-10 rounded-xl bg-amber-50 ring-1 ring-amber-100 flex items-center justify-center shrink-0">
                    <i class="fa-solid fa-file-circle-xmark text-amber-700" aria-hidden="true"></i>
                  </div>
                  <div>
                    <h2 class="text-xl sm:text-2xl font-semibold text-slate-900">
                      Paper Jam
                    </h2>
                    <p class="mt-1 text-sm sm:text-base text-slate-600">
                      Remove jammed paper carefully to avoid tearing.
                    </p>
                  </div>
                </div>

                <div class="mt-5 space-y-3">
                  <?php
                  render_step(1, "Turn off and unplug the printer",
                    "Power off the printer and unplug it from the wall for safety.",
                    true
                  );
                  render_step(2, "Remove tray and check inside",
                    "Remove the paper tray and check for any stuck pieces of paper inside the printer path."
                  );
                  render_step(3, "Pull paper gently",
                    "If you see paper, pull it slowly in the direction of the paper path. Do not yank."
                  );
                  render_step(4, "Reload paper correctly",
                    "Reload paper neatly, make sure it matches the correct size, and the guides are snug (not tight)."
                  );
                  ?>
                </div>
              </div>
              <?php
            }

            // 6) Scanner isssue (kept your exact condition spelling)
            else if ($problem == "Scanner isssue") {
              ?>
              <div class="bg-white rounded-2xl shadow-lg ring-1 ring-slate-200 p-5 sm:p-6">
                <div class="flex items-start gap-3">
                  <div class="h-10 w-10 rounded-xl bg-slate-50 ring-1 ring-slate-200 flex items-center justify-center shrink-0">
                    <i class="fa-solid fa-scanner-gun text-slate-700" aria-hidden="true"></i>
                  </div>
                  <div>
                    <h2 class="text-xl sm:text-2xl font-semibold text-slate-900">Scanner issue</h2>
                    <p class="mt-1 text-sm sm:text-base text-slate-600">Try these steps and test scanning again.</p>
                  </div>
                </div>

                <div class="mt-5 space-y-3">
                  <?php
                  render_step(1, "Restart the printer and computer",
                    "Restart both devices to refresh connections and scanner services.",
                    true
                  );
                  render_step(2, "Check connections / network",
                    "If using USB, reconnect firmly. If using Wi-Fi, ensure both devices are on the same network."
                  );
                  render_step(3, "Update or reinstall scanner driver",
                    "Download the latest driver/software package from the official support website and reinstall."
                  );
                  ?>
                </div>
              </div>
              <?php
            }

            // 7) Wi-Fi or wireless setup
            else if ($problem == "Wi-Fi or wireless setup") {
              ?>
              <div class="bg-white rounded-2xl shadow-lg ring-1 ring-slate-200 p-5 sm:p-6">
                <div class="flex items-start gap-3">
                  <div class="h-10 w-10 rounded-xl bg-indigo-50 ring-1 ring-indigo-100 flex items-center justify-center shrink-0">
                    <i class="fa-solid fa-wifi text-indigo-600" aria-hidden="true"></i>
                  </div>
                  <div>
                    <h2 class="text-xl sm:text-2xl font-semibold text-slate-900">Wi-Fi / Wireless setup</h2>
                    <p class="mt-1 text-sm sm:text-base text-slate-600">Follow the steps for your device type.</p>
                  </div>
                </div>

                <div class="mt-5 grid grid-cols-1 lg:grid-cols-2 gap-5">
                  <!-- Windows -->
                  <div class="rounded-2xl bg-slate-50 ring-1 ring-slate-200 p-5">
                    <h3 class="text-lg font-semibold text-slate-900 flex items-center gap-2">
                      <i class="fa-brands fa-windows text-slate-600" aria-hidden="true"></i>
                      Wi-Fi / Wireless setup (Windows)
                    </h3>

                    <ul class="mt-3 space-y-2 text-sm sm:text-base text-slate-700">
                      <li class="flex gap-2"><i class="fa-solid fa-check text-indigo-600 mt-1" aria-hidden="true"></i><span>In the first step, connect the printer to WiFi.</span></li>
                      <li class="flex gap-2"><i class="fa-solid fa-check text-indigo-600 mt-1" aria-hidden="true"></i><span>Then, download the printer driver from the official page.</span></li>
                      <li class="flex gap-2"><i class="fa-solid fa-check text-indigo-600 mt-1" aria-hidden="true"></i><span>Next, double-tap the downloaded file.</span></li>
                      <li class="flex gap-2"><i class="fa-solid fa-check text-indigo-600 mt-1" aria-hidden="true"></i><span>Now, you have to complete the installation steps.</span></li>
                      <li class="flex gap-2"><i class="fa-solid fa-check text-indigo-600 mt-1" aria-hidden="true"></i><span>In the next step, tap the Window key + R.</span></li>
                      <li class="flex gap-2"><i class="fa-solid fa-check text-indigo-600 mt-1" aria-hidden="true"></i><span>Next, the Run dialogue box will open.</span></li>
                      <li class="flex gap-2"><i class="fa-solid fa-check text-indigo-600 mt-1" aria-hidden="true"></i><span>Now, enter “control/name Microsoft.DevicesAndPrinters.”</span></li>
                      <li class="flex gap-2"><i class="fa-solid fa-check text-indigo-600 mt-1" aria-hidden="true"></i><span>After that, click the OK button.</span></li>
                      <li class="flex gap-2"><i class="fa-solid fa-check text-indigo-600 mt-1" aria-hidden="true"></i><span>Then, the Devices and Printers folder will open.</span></li>
                      <li class="flex gap-2"><i class="fa-solid fa-check text-indigo-600 mt-1" aria-hidden="true"></i><span>Next, your screen will display the Add Printer option.</span></li>
                      <li class="flex gap-2"><i class="fa-solid fa-check text-indigo-600 mt-1" aria-hidden="true"></i><span>Click the Add Printer button and follow the prompts.</span></li>
                    </ul>
                  </div>

                  <!-- Mac -->
                  <div class="rounded-2xl bg-slate-50 ring-1 ring-slate-200 p-5">
                    <h3 class="text-lg font-semibold text-slate-900 flex items-center gap-2">
                      <i class="fa-brands fa-apple text-slate-600" aria-hidden="true"></i>
                      Wi-Fi / Wireless setup (Mac)
                    </h3>

                    <ul class="mt-3 space-y-2 text-sm sm:text-base text-slate-700">
                      <li class="flex gap-2"><i class="fa-solid fa-check text-indigo-600 mt-1" aria-hidden="true"></i><span>Firstly, you will need to turn on the Mac device and printer.</span></li>
                      <li class="flex gap-2"><i class="fa-solid fa-check text-indigo-600 mt-1" aria-hidden="true"></i><span>Next, connect the printer to the wireless network.</span></li>
                      <li class="flex gap-2"><i class="fa-solid fa-check text-indigo-600 mt-1" aria-hidden="true"></i><span>Now, go to the official page and download the printer driver.</span></li>
                      <li class="flex gap-2"><i class="fa-solid fa-check text-indigo-600 mt-1" aria-hidden="true"></i><span>Then, complete the driver installation process.</span></li>
                      <li class="flex gap-2"><i class="fa-solid fa-check text-indigo-600 mt-1" aria-hidden="true"></i><span>After that, go to the Apple Menu.</span></li>
                      <li class="flex gap-2"><i class="fa-solid fa-check text-indigo-600 mt-1" aria-hidden="true"></i><span>In the menu, you have to click the System and Preferences option.</span></li>
                      <li class="flex gap-2"><i class="fa-solid fa-check text-indigo-600 mt-1" aria-hidden="true"></i><span>On the next screen, select the Printers and Scanners option.</span></li>
                      <li class="flex gap-2"><i class="fa-solid fa-check text-indigo-600 mt-1" aria-hidden="true"></i><span>Thereafter, you need to click the “+” sign and add the printer.</span></li>
                      <li class="flex gap-2"><i class="fa-solid fa-check text-indigo-600 mt-1" aria-hidden="true"></i><span>From the pop-up window, choose your printer.</span></li>
                      <li class="flex gap-2"><i class="fa-solid fa-check text-indigo-600 mt-1" aria-hidden="true"></i><span>Then, tap on the Add button.</span></li>
                      <li class="flex gap-2"><i class="fa-solid fa-check text-indigo-600 mt-1" aria-hidden="true"></i><span>After adding your printer, its icon will appear on the screen.</span></li>
                      <li class="flex gap-2"><i class="fa-solid fa-check text-indigo-600 mt-1" aria-hidden="true"></i><span>Finally! You are all set on a Mac device.</span></li>
                    </ul>
                  </div>
                </div>
              </div>
              <?php
            }

            // Fallback
            else {
              ?>
              <div class="bg-white rounded-2xl shadow-lg ring-1 ring-slate-200 p-5 sm:p-6">
                <div class="flex items-start gap-3">
                  <div class="h-10 w-10 rounded-xl bg-slate-50 ring-1 ring-slate-200 flex items-center justify-center shrink-0">
                    <i class="fa-solid fa-circle-info text-slate-700" aria-hidden="true"></i>
                  </div>
                  <div>
                    <h2 class="text-xl sm:text-2xl font-semibold text-slate-900">Steps not found for this selection</h2>
                    <p class="mt-1 text-sm sm:text-base text-slate-600">
                      Please go back and select a valid issue, or call our experts for help.
                    </p>
                  </div>
                </div>
              </div>
              <?php
            }
            ?>
          </div>

         
          <div class="flex items-center justify-center mt-8">
              <a
                  href="<?php echo base_url('thank-you'); ?>"
                  class="inline-flex items-center justify-center gap-3 rounded-2xl px-8 py-4 text-lg font-bold text-white bg-gradient-to-r from-indigo-600 to-purple-600 shadow-xl hover:shadow-2xl hover:-translate-y-1 active:translate-y-0 transition-all duration-300 whitespace-nowrap group"
                >
                  Finish
                  <i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
                </a>
          </div>
       

        </div>
      </section>
    </div>
  </div>
</div>