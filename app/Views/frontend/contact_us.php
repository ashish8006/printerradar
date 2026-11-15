<section class="about-section bg-gray-50 py-10 px-4">
  <div class="max-w-6xl mx-auto">

    <div class="grid lg:grid-cols-2 gap-16 items-start">

      <!-- Left: Info -->
      <div class="fade-up delay-1">
        <div class="flex items-center gap-3 mb-4">
          <span class="w-8 h-px bg-blue-500"></span>
          <span class="text-blue-600 text-sm font-medium tracking-widest uppercase">Get In Touch</span>
        </div>
        <h2 class="about-heading text-4xl lg:text-5xl font-black text-gray-900 leading-tight mb-6">
          We're Here<br><span class="text-blue-600">To Help You</span>
        </h2>
        <p class="text-gray-500 text-lg leading-relaxed mb-10">
         Our team of experienced specialists is available 24/7 to assist you with any printer-related questions or issues.
        </p>

        <!-- Contact cards -->
        <div class="space-y-4">
          <div class="flex items-center gap-5 bg-white rounded-2xl p-5 shadow-sm card-hover border border-gray-100">
            <div class="w-12 h-12 rounded-xl bg-blue-50 flex items-center justify-center flex-shrink-0">
              <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
              </svg>
            </div>
            <div>
              <p class="text-gray-400 text-xs uppercase tracking-wider mb-1">Call Us</p>
              <!-- <p class="text-gray-800 font-semibold">+1 (800) 000-0000</p> -->
               <p class="font-body text-muted text-sm leading-relaxed">
                <span class="flex items-center gap-2 mb-1">
                  <img src="assets/images/usflag.jpg" onerror="this.src='https://flagcdn.com/w20/us.png'" alt="US" class="w-5 rounded-sm"/>
                  <a href="tel:+18884955479" class="text-ink hover:text-blue-600 transition-colors font-medium">+1 888-495-5479</a>
                </span>
              </p>
            </div>
          </div>

          <div class="flex items-center gap-5 bg-white rounded-2xl p-5 shadow-sm card-hover border border-gray-100">
            <div class="w-12 h-12 rounded-xl bg-blue-50 flex items-center justify-center flex-shrink-0">
              <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
              </svg>
            </div>
            <div>
              <p class="text-gray-400 text-xs uppercase tracking-wider mb-1">Email Us</p>
             <p class="font-body text-sm leading-relaxed">
                <a href="mailto:support@printerradar.com" class="block text-ink hover:text-blue-600 transition-colors font-medium mb-0.5">support@printerradar.com</a>
                </p>
            </div>
          </div>

          <!-- <div class="flex items-center gap-5 bg-white rounded-2xl p-5 shadow-sm card-hover border border-gray-100">
            <div class="w-12 h-12 rounded-xl bg-blue-50 flex items-center justify-center flex-shrink-0">
              <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
              </svg>
            </div>
            <div>
              <p class="text-gray-400 text-xs uppercase tracking-wider mb-1">Live Chat</p>
              <p class="text-gray-800 font-semibold">Available 24/7</p>
            </div>
          </div> -->
        </div>
      </div>

      <!-- Right: Form -->
      <div class="fade-up delay-2">
        <div class="bg-white rounded-3xl shadow-xl p-8 border border-gray-100">
          <h3 class="about-heading text-2xl font-bold text-gray-900">Send Us a Message</h3>
          <p class="text-gray-500 text-md leading-relaxed pb-6 pt-2">Feel free to submit your query below or reach out using the contact details provided.</p>
  <form id="contact-form" class="space-y-4">

            <!-- Name + Email -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
              <div class="flex flex-col gap-1.5">
                <label class="font-body text-xs font-medium text-ink/60 tracking-wide uppercase">Full Name</label>
                <input type="text" name="contact_name" required placeholder="John Doe"
                  class="font-body w-full border border-ink/15 rounded-xl px-4 py-3 text-sm text-ink bg-paper placeholder:text-muted/60 transition-all duration-200"/>
              </div>
              <div class="flex flex-col gap-1.5">
                <label class="font-body text-xs font-medium text-ink/60 tracking-wide uppercase">Email Address</label>
                <input type="email" name="contact_email" required placeholder="you@email.com"
                  class="font-body w-full border border-ink/15 rounded-xl px-4 py-3 text-sm text-ink bg-paper placeholder:text-muted/60 transition-all duration-200"/>
              </div>
            </div>

            <!-- Country + Phone -->
            <div class="grid grid-cols-5 gap-3">
              <div class="col-span-2 flex flex-col gap-1.5">
                <label class="font-body text-xs font-medium text-ink/60 tracking-wide uppercase">Country</label>
                <select name="country_code" class="font-body w-full border border-ink/15 rounded-xl px-4 py-3 text-sm text-ink bg-paper transition-all duration-200">
                  <option value="">Select</option>
                  <option value="UK">🇬🇧 UK</option>
                  <option value="US">🇺🇸 US</option>
                </select>
              </div>
              <div class="col-span-3 flex flex-col gap-1.5">
                <label class="font-body text-xs font-medium text-ink/60 tracking-wide uppercase">Phone Number</label>
                <input type="tel" name="contact_phone" required placeholder="+1 (555) 000-0000"
                  class="font-body w-full border border-ink/15 rounded-xl px-4 py-3 text-sm text-ink bg-paper placeholder:text-muted/60 transition-all duration-200"/>
              </div>
            </div>

            <!-- Printer Brand -->
            <div class="flex flex-col gap-1.5">
              <label class="font-body text-xs font-medium text-ink/60 tracking-wide uppercase">Printer Brand</label>
              <select name="contact_printer_brand" required class="font-body w-full border border-ink/15 rounded-xl px-4 py-3 text-sm text-ink bg-paper transition-all duration-200">
                <option value="">Select Printer Brand</option>
                <option value="HP">HP</option>
                <option value="CANON">Canon</option>
                <option value="EPSON">Epson</option>
                <option value="BROTHER">Brother</option>
              </select>
            </div>

            <!-- Issue Type -->
            <div class="flex flex-col gap-1.5">
              <label class="font-body text-xs font-medium text-ink/60 tracking-wide uppercase">Printer Issue</label>
              <select name="contact_printer_issue" required class="font-body w-full border border-ink/15 rounded-xl px-4 py-3 text-sm text-ink bg-paper transition-all duration-200">
                <option value="">Select Printer Issue</option>
                <option value="Set-up a New Printer">Set-up a new printer</option>
                <option value="Wi-Fi or Wireless setup">Wi-Fi or Wireless setup</option>
                <option value="Offline or Can't connect">Offline or Can't connect</option>
                <option value="Won't print">Won't print</option>
                <option value="Printing blank papers">Printing blank papers</option>
                <option value="Paper jam">Paper jam</option>
                <option value="Error code or Error message">Error code or Error message</option>
                <option value="Scanner issue">Scanner issue</option>
              </select>
            </div>

            <!-- Divider -->
            <div class="pt-2">
              <button type="submit" id="contactusbtn"
                class="submit-btn w-full bg-blue-800 text-white font-display font-700 text-base rounded-xl py-4 px-6 tracking-wide transition-all duration-300 hover:bg-accent/90 hover:shadow-lg hover:shadow-accent/25 active:scale-[0.98] flex items-center justify-center gap-2">
                <span>Send Message</span>
                <i class="fas fa-arrow-right text-sm transition-transform group-hover:translate-x-1"></i>
              </button>
            </div>

            <p class="text-center font-body text-xs text-muted">You can expect a response within 15 minutes during business hours.
</p>

          </form>
        </div>
      </div>

    </div>
  </div>
</section>


 <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    $(document).ready(function () {
      $("#contact-form").submit(function (e) {
        e.preventDefault();
        var formData = $(this).serialize();
        var btn = $('#contactusbtn');
        btn.prop('disabled', true).html('<i class="fas fa-spinner fa-spin mr-2"></i>Sending...');

        $.ajax({
          type: "POST",
          url: '<?php echo base_url("send_contact_us_mail"); ?>',
          data: formData,
          success: function (response) {
            window.location = 'contact-us';
          },
          error: function (xhr, status, error) {
            console.error("Error: " + error);
            btn.prop('disabled', false).html('<span>Send Message</span><i class="fas fa-arrow-right text-sm ml-2"></i>');
          }
        });
      });
    });
  </script>