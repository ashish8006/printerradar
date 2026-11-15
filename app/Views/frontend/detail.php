<style>
  @keyframes fadeInUp {
    from { opacity: 0; transform: translateY(20px); }
    to   { opacity: 1; transform: translateY(0); }
  }
  .animate-fade-in-up { animation: fadeInUp 0.55s ease forwards; }

  /* ── Toggle track ── */
  #receivecall:checked + .toggle-track {
    background: #16a34a !important;
    border-color: #16a34a !important;
  }
  /* ── Knob slide ── */
  #receivecall:checked + .toggle-track .toggle-knob {
    transform: translateX(28px) !important;
  }
  /* ── ON / OFF label ── */
  #receivecall:checked ~ .toggle-off-label { display: none !important; }
  #receivecall:not(:checked) ~ .toggle-on-label { display: none !important; }
</style>

<div class="max-w-5xl mx-auto mt-5">
  <div class="animate-fade-in-up bg-white rounded-3xl shadow-xl ring-1 ring-slate-200 overflow-hidden">

    <form action="<?php echo base_url('resolution_center_redirect_fun'); ?>" method="post" id="resolution-form">

      <!-- Hidden fields -->
      <input type="hidden" name="printer_brand"      value="<?php echo isset($form_data['printer_brand'])      ? htmlspecialchars($form_data['printer_brand'])      : ''; ?>">
      <input type="hidden" name="printer_model_no"   value="<?php echo isset($form_data['printer_model_no'])   ? htmlspecialchars($form_data['printer_model_no'])   : ''; ?>">
      <input type="hidden" name="problem_facing"     value="<?php echo isset($form_data['problem_facing'])     ? htmlspecialchars($form_data['problem_facing'])     : ''; ?>">
      <input type="hidden" name="device_connected"   value="<?php echo isset($form_data['device_connected'])   ? htmlspecialchars($form_data['device_connected'])   : ''; ?>">

      <!-- ── HEADER ── -->
      <div class="px-8 pt-8 pb-6 border-b border-slate-100 text-center">
        <h1 class="text-3xl font-bold tracking-tight bg-gradient-to-r from-indigo-600 to-purple-600 bg-clip-text text-transparent mb-2">
          INFORMATION
        </h1>
        <p class="text-gray-600 font-medium text-sm max-w-3xl mx-auto leading-relaxed">
          Kindly enter the required details below and then click Continue — we'll email you step-by-step troubleshooting guidance to resolve your issue.
        </p>
      </div>

      <!-- ── FORM FIELDS ── -->
      <div class="px-8 py-7 space-y-4">

        <!-- Name + Country row -->
        <div class="grid grid-cols-1 md:grid-cols-12 gap-4">

          <!-- Name -->
          <div class="md:col-span-5">
            <label for="name" class="block text-xs font-bold text-gray-500 uppercase tracking-wider mb-1.5">
              Full Name <span class="text-red-500">*</span>
            </label>
            <div class="relative">
              <span class="pointer-events-none absolute inset-y-0 left-4 flex items-center text-slate-400">
                <i class="fa-solid fa-user text-sm"></i>
              </span>
              <input type="text" name="name" id="name" placeholder="Enter your full name"
                class="w-full rounded-xl bg-white pl-11 pr-4 py-3 text-sm text-slate-900 placeholder:text-slate-400 border-2 border-slate-200 hover:border-indigo-300 focus:border-indigo-500 focus:ring-4 focus:ring-indigo-100 transition-all duration-200 outline-none font-medium"/>
            </div>
            <div class="mt-2 hidden rounded-xl border border-red-200 bg-red-50 px-3 py-2 text-sm font-semibold text-red-700 flex items-center gap-2" id="name-error">
              <i class="fa-solid fa-circle-exclamation flex-shrink-0"></i>
              Name field is required.
            </div>
          </div>

          <!-- Country -->
          <div class="md:col-span-3">
            <label for="country_code" class="block text-xs font-bold text-gray-500 uppercase tracking-wider mb-1.5">
              Country <span class="text-red-500">*</span>
            </label>
            <div class="relative">
              <span class="pointer-events-none absolute inset-y-0 left-4 flex items-center text-slate-400">
                <i class="fa-solid fa-flag text-sm"></i>
              </span>
              <select name="country_code" id="country_code"
                class="w-full appearance-none rounded-xl bg-white pl-11 pr-10 py-3 text-sm text-slate-900 border-2 border-slate-200 hover:border-indigo-300 focus:border-indigo-500 focus:ring-4 focus:ring-indigo-100 transition-all duration-200 outline-none font-medium" required>
                <option value="">Select Country</option>
                <option value="UK">🇬🇧 United Kingdom</option>
                <option value="US">🇺🇸 United States</option>
              </select>
              <span class="pointer-events-none absolute inset-y-0 right-4 flex items-center text-slate-400">
                <i class="fa-solid fa-chevron-down text-xs"></i>
              </span>
            </div>
          </div>

            <div class="md:col-span-4">
          <label for="phone" class="block text-xs font-bold text-gray-500 uppercase tracking-wider mb-1.5">
            Phone Number <span class="text-red-500">*</span>
          </label>
          <div class="relative">
            <span class="pointer-events-none absolute inset-y-0 left-4 flex items-center text-slate-400">
              <i class="fa-solid fa-phone text-sm"></i>
            </span>
            <input type="text" name="phone" id="phone" placeholder="Enter your phone number"
              class="w-full rounded-xl bg-white pl-11 pr-4 py-3 text-sm text-slate-900 placeholder:text-slate-400 border-2 border-slate-200 hover:border-indigo-300 focus:border-indigo-500 focus:ring-4 focus:ring-indigo-100 transition-all duration-200 outline-none font-medium"/>
          </div>
          <div class="mt-2 hidden rounded-xl border border-red-200 bg-red-50 px-3 py-2 text-sm font-semibold text-red-700 flex items-center gap-2" id="phone-error">
            <i class="fa-solid fa-circle-exclamation flex-shrink-0"></i>
            Please enter a valid phone number.
          </div>
        </div>

        </div>

        <!-- Phone -->
      

        <!-- Email -->
        <div>
          <label for="email" class="block text-xs font-bold text-gray-500 uppercase tracking-wider mb-1.5">
            Email Address <span class="text-red-500">*</span>
          </label>
          <div class="relative">
            <span class="pointer-events-none absolute inset-y-0 left-4 flex items-center text-slate-400">
              <i class="fa-solid fa-envelope text-sm"></i>
            </span>
            <input type="text" name="email" id="email" placeholder="Enter your email address"
              class="w-full rounded-xl bg-white pl-11 pr-4 py-3 text-sm text-slate-900 placeholder:text-slate-400 border-2 border-slate-200 hover:border-indigo-300 focus:border-indigo-500 focus:ring-4 focus:ring-indigo-100 transition-all duration-200 outline-none font-medium"/>
          </div>
          <div class="mt-2 hidden rounded-xl border border-red-200 bg-red-50 px-3 py-2 text-sm font-semibold text-red-700 flex items-center gap-2" id="email-error">
            <i class="fa-solid fa-circle-exclamation flex-shrink-0"></i>
            Please enter a valid email address.
          </div>
        </div>

        <!-- ── TOGGLE ROW ── -->
        <label for="receivecall"
          class="flex items-center justify-between gap-4 rounded-2xl bg-slate-50 border-2 border-slate-200 hover:border-indigo-300 p-4 sm:p-5 transition-all duration-200 cursor-pointer group">

          <!-- Left: icon + text -->
          <div class="flex items-center gap-4">
            <div class="h-10 w-10 rounded-xl bg-indigo-50 border border-indigo-100 flex items-center justify-center flex-shrink-0 group-hover:bg-indigo-100 transition-colors duration-200">
              <i class="fa-solid fa-phone text-indigo-600 text-sm"></i>
            </div>
            <div>
              <p class="text-sm font-semibold text-slate-800 leading-tight">Enable this toggle to receive a call from a certified expert for assistance.</p>
            </div>
          </div>

          <!-- Right: toggle switch -->
          <div class="flex items-center gap-3 flex-shrink-0">

            <span class="toggle-off-label text-xs font-bold text-slate-400 uppercase tracking-wider"></span>
            <span class="toggle-on-label text-xs font-bold text-green-600 uppercase tracking-wider hidden"></span>

            <!-- Hidden checkbox -->
            <input type="checkbox" value="Yes" name="receive_call" id="receivecall" class="sr-only">

            <!-- Track -->
            <div class="toggle-track relative inline-flex h-8 w-[56px] rounded-full bg-slate-300 border-2 border-slate-300 transition-all duration-300 ease-in-out">
              <!-- Knob -->
              <span class="toggle-knob absolute top-[2px] left-[2px] h-[22px] w-[22px] rounded-full bg-white shadow-md transition-transform duration-300 ease-in-out translate-x-0"></span>
            </div>

          </div>
        </label>

      </div>

      <!-- ── SUBMIT ── -->
      <div class="px-8 pb-8 flex flex-col sm:flex-row items-center justify-center gap-4 pt-2 border-t border-slate-100">
        <button type="submit"
          class="inline-flex items-center justify-center gap-3 rounded-2xl px-8 py-4 text-base font-bold text-white bg-gradient-to-r from-indigo-600 to-purple-600 shadow-xl hover:shadow-2xl hover:-translate-y-1 active:translate-y-0 transition-all duration-300 whitespace-nowrap group">
          <span class="group-hover:tracking-wider transition-all duration-300">CONTINUE TO RESOLUTION</span>
          <span class="w-7 h-7 bg-white/20 rounded-lg flex items-center justify-center group-hover:translate-x-1 transition-transform duration-300">
            <i class="fa-solid fa-arrow-right text-xs"></i>
          </span>
        </button>
      </div>

    </form>
  </div>
</div>

<script>
  document.addEventListener('DOMContentLoaded', function () {

    /* ── Toggle logic ── */
    const toggle     = document.getElementById('receivecall');
    const track      = document.querySelector('.toggle-track');
    const knob       = document.querySelector('.toggle-knob');
    const onLabel    = document.querySelector('.toggle-on-label');
    const offLabel   = document.querySelector('.toggle-off-label');
    const toggleRow  = toggle.closest('label');

    function updateToggle() {
      if (toggle.checked) {
        track.style.background    = '#16a34a';
        track.style.borderColor   = '#16a34a';
        knob.style.transform      = 'translateX(28px)';
        onLabel.classList.remove('hidden');
        offLabel.classList.add('hidden');
        toggleRow.classList.add('border-green-300', 'bg-green-50');
        toggleRow.classList.remove('border-slate-200', 'bg-slate-50');
      } else {
        track.style.background    = '#cbd5e1';
        track.style.borderColor   = '#cbd5e1';
        knob.style.transform      = 'translateX(0)';
        onLabel.classList.add('hidden');
        offLabel.classList.remove('hidden');
        toggleRow.classList.remove('border-green-300', 'bg-green-50');
        toggleRow.classList.add('border-slate-200', 'bg-slate-50');
      }
    }

    toggle.addEventListener('change', updateToggle);
    updateToggle(); // set initial state

    /* ── Form validation ── */
    document.getElementById('resolution-form').addEventListener('submit', function (e) {
      let hasError = false;

      const nameInput  = document.getElementById('name');
      const phoneInput = document.getElementById('phone');
      const emailInput = document.getElementById('email');

      document.getElementById('name-error').classList.add('hidden');
      document.getElementById('phone-error').classList.add('hidden');
      document.getElementById('email-error').classList.add('hidden');

      if (nameInput.value.trim() === '') {
        document.getElementById('name-error').classList.remove('hidden');
        hasError = true;
      }
      if (phoneInput.value.trim() === '') {
        document.getElementById('phone-error').classList.remove('hidden');
        hasError = true;
      }
      if (emailInput.value.trim() === '') {
        document.getElementById('email-error').classList.remove('hidden');
        hasError = true;
      }

      if (hasError) e.preventDefault();
    });

  });
</script>