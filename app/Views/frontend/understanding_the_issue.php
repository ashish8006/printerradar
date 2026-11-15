<style>
  @keyframes fadeInUp {
    from { opacity: 0; transform: translateY(20px); }
    to   { opacity: 1; transform: translateY(0); }
  }
  @keyframes iconPop {
    0%   { transform: scale(1); }
    40%  { transform: scale(1.35) rotate(-8deg); }
    70%  { transform: scale(0.9) rotate(4deg); }
    100% { transform: scale(1) rotate(0deg); }
  }
  @keyframes cardSelect {
    0%   { transform: translateY(0) scale(1); }
    45%  { transform: translateY(-6px) scale(1.04); }
    100% { transform: translateY(-3px) scale(1.02); }
  }
  @keyframes checkPop {
    0%   { transform: scale(0) rotate(-20deg); opacity: 0; }
    60%  { transform: scale(1.3) rotate(5deg);  opacity: 1; }
    100% { transform: scale(1) rotate(0deg);    opacity: 1; }
  }

  .animate-fade-in-up { animation: fadeInUp 0.55s ease forwards; }

  /* ── Problem cards ── */
  .prob-radio:checked ~ .prob-card {
    background: linear-gradient(135deg, #1e3a8a 0%, #1d4ed8 100%) !important;
    border-color: #1e3a8a !important;
    box-shadow: 0 12px 32px rgba(30,58,138,0.35), 0 0 0 3px rgba(30,58,138,0.15) !important;
    animation: cardSelect 0.32s cubic-bezier(.22,.68,0,1.2) forwards;
  }
  .prob-radio:checked ~ .prob-card .prob-icon {
    color: #ffffff !important;
    animation: iconPop 0.4s ease forwards;
  }
  .prob-radio:checked ~ .prob-card .prob-text {
    color: #ffffff !important;
  }
  .prob-radio:checked ~ .prob-card .prob-check {
    animation: checkPop 0.35s cubic-bezier(.22,.68,0,1.5) forwards !important;
    opacity: 1 !important;
  }

  /* ── Device cards ── */
  .dev-radio:checked ~ .dev-card {
    background: linear-gradient(135deg, #1e3a8a 0%, #1d4ed8 100%) !important;
    border-color: #1e3a8a !important;
    box-shadow: 0 12px 32px rgba(30,58,138,0.35), 0 0 0 3px rgba(30,58,138,0.15) !important;
    animation: cardSelect 0.32s cubic-bezier(.22,.68,0,1.2) forwards;
  }
  .dev-radio:checked ~ .dev-card .dev-icon {
    color: #ffffff !important;
    animation: iconPop 0.4s ease forwards;
  }
  .dev-radio:checked ~ .dev-card .dev-text {
    color: #ffffff !important;
  }
  .dev-radio:checked ~ .dev-card .dev-check {
    animation: checkPop 0.35s cubic-bezier(.22,.68,0,1.5) forwards !important;
    opacity: 1 !important;
  }
</style>

<div class="max-w-7xl mx-auto">

  <div class="animate-fade-in-up backdrop-blur-sm bg-white rounded-2xl shadow-2xl ring-1 ring-slate-200 p-8" style="animation-delay:0.2s">

    <!-- Header -->
    <div class="text-center mb-6">
      <h1 class="text-3xl font-bold tracking-tight bg-gradient-to-r from-indigo-600 to-purple-600 bg-clip-text text-transparent">
        ANALYSING THE PROBLEM
      </h1>
      <p class="mt-2 text-gray-900 font-semibold">Kindly answer the questions below to help us deliver the most suitable assistance, and then click Continue.</p>
    </div>

    <form action="<?php echo base_url('user-detail'); ?>" method="POST" id="detail-form">
      <input type="hidden" name="printer_brand" value="<?php echo $printer_brand ? $printer_brand : ''; ?>">

      <!-- Section 1: Printer Model -->
      <div class="animate-fade-in-up bg-gradient-to-br from-slate-50/50 to-transparent rounded-2xl px-8 border border-indigo-100/20 transition-shadow duration-300 mb-4" style="animation-delay:0.3s">
        <div class="flex items-start gap-6">
          <div class="flex items-center gap-3 mt-2">
            <h3 class="text-md font-bold text-gray-900">Printer Model Number</h3>
          </div>
          <div class="relative">
            <i class="fa-solid fa-keyboard absolute left-4 top-2.5 text-indigo-400 text-lg pointer-events-none"></i>
            <input
              type="text"
              id="printer_model_no"
              name="printer_model_no"
              placeholder="Type here..."
              class="w-[400px] pl-12 pr-4 py-2 rounded-xl border-2 border-gray-300 hover:border-indigo-400 focus:border-indigo-500 focus:ring-4 focus:ring-indigo-100 text-gray-900 placeholder-gray-400 font-medium bg-white shadow-sm transition-all duration-300 outline-none"
            >
          </div>
        </div>
      </div>

      <!-- Section 2: Problem Facing -->
      <div class="animate-fade-in-up bg-gradient-to-br from-slate-50/50 to-transparent rounded-2xl px-8 py-6 border border-orange-100/20 transition-shadow duration-300 mb-4" style="animation-delay:0.5s">
        <div class="mb-4">
          <h3 class="text-lg font-bold text-gray-900">
            Choose the type of printer issue from the options below.
            <span class="text-red-500 ml-1">*</span>
          </h3>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">

          <?php
          $problems = [
            ['value'=>'Set-up a new printer',       'id'=>'setupprinter',   'icon'=>'fa-solid fa-screwdriver-wrench', 'label'=>'Set-up a new printer',        'd'=>'0.10s'],
            ['value'=>'Wi-Fi or wireless setup',     'id'=>'wifiwireless',   'icon'=>'fa-solid fa-wifi',               'label'=>'Wi-Fi or Wireless setup',      'd'=>'0.15s'],
            ['value'=>"Offline or Can't connect",    'id'=>'cant_connect',   'icon'=>'fa-solid fa-plug-circle-xmark',  'label'=>"Offline or Can't connect",     'd'=>'0.20s'],
            ['value'=>"Printer Won't Print",         'id'=>'wont_print',     'icon'=>'fa-solid fa-print',              'label'=>"Won't print",                  'd'=>'0.25s'],
            ['value'=>'Printer Print blank paper',   'id'=>'blank_paper',    'icon'=>'fa-regular fa-file-lines',       'label'=>'Printing blank papers',        'd'=>'0.30s'],
            ['value'=>'Paper Jam',                   'id'=>'paper_jam',      'icon'=>'fa-solid fa-file-circle-xmark',  'label'=>'Paper jam',                    'd'=>'0.35s'],
            ['value'=>'Error code or Error message', 'id'=>'error_msg',      'icon'=>'fa-solid fa-circle-exclamation', 'label'=>'Error code or Error message',  'd'=>'0.40s'],
            ['value'=>'Scanner issue',               'id'=>'scanner_issue',  'icon'=>'fa fa-qrcode',                   'label'=>'Scanner issue',                'd'=>'0.45s'],
          ];
          foreach ($problems as $p):
          ?>
          <label class="group cursor-pointer animate-fade-in-up relative" style="animation-delay:<?= $p['d'] ?>">
            <input type="radio" name="problem_facing" value="<?= htmlspecialchars($p['value']) ?>"
                   id="<?= $p['id'] ?>" class="sr-only prob-radio problem-radio" required>
            <div class="prob-card relative flex items-start gap-3 p-4 bg-white border-2 border-gray-300 rounded-xl
                        group-hover:border-indigo-400 group-hover:-translate-y-1 group-hover:shadow-md
                        transition-all duration-300 cursor-pointer select-none">
              <!-- Check badge -->
              <span class="prob-check absolute top-2 right-2 w-5 h-5 bg-white/25 rounded-full flex items-center justify-center opacity-0 pointer-events-none">
                <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                </svg>
              </span>
              <i class="prob-icon <?= $p['icon'] ?> text-sm text-gray-400 group-hover:text-indigo-600 group-hover:scale-125 transition-all duration-300 mt-0.5 flex-shrink-0"></i>
              <span class="prob-text font-semibold text-gray-900 text-sm group-hover:text-indigo-600 transition-colors duration-300 leading-snug"><?= htmlspecialchars($p['label']) ?></span>
            </div>
          </label>
          <?php endforeach; ?>

        </div>

        <!-- Error -->
        <div id="problem-error" class="hidden mt-6 bg-red-50 border-2 border-red-300 rounded-xl px-6 py-4 text-red-700 font-bold flex items-start gap-3">
          <i class="fa-solid fa-circle-exclamation text-xl flex-shrink-0 mt-1"></i>
          <span>Please select a problem you're facing to continue</span>
        </div>
      </div>

      <!-- Section 3: Device Connected -->
      <div class="animate-fade-in-up bg-gradient-to-br from-slate-50/50 to-transparent rounded-2xl px-8 border border-blue-100/20 transition-shadow duration-300 mb-6" style="animation-delay:0.6s">
        <div class="mb-4">
          <h3 class="text-lg font-bold text-gray-900">Choose the type of device that will connect to the printer from the options below.</h3>
        </div>

        <div class="grid grid-cols-2 sm:grid-cols-5 gap-3">

          <?php
          $devices = [
            ['value'=>'Windows computer',    'id'=>'window',     'icon'=>'fa-brands fa-windows', 'label'=>'Windows',      'd'=>'0.10s'],
            ['value'=>'Mac computer',        'id'=>'mac',        'icon'=>'fa-brands fa-apple',   'label'=>'Mac',          'd'=>'0.15s'],
            ['value'=>'Chromebook',          'id'=>'chromebook', 'icon'=>'fa-brands fa-chrome',  'label'=>'Chromebook',   'd'=>'0.20s'],
            ['value'=>'Android Phone/Tablet','id'=>'android',    'icon'=>'fa-brands fa-android', 'label'=>'Android',      'd'=>'0.25s'],
            ['value'=>'iPhone/iPad',         'id'=>'iphone',     'icon'=>'fa-brands fa-apple',   'label'=>'iPhone/iPad',  'd'=>'0.30s'],
          ];
          foreach ($devices as $d):
          ?>
          <label class="group cursor-pointer animate-fade-in-up relative" style="animation-delay:<?= $d['d'] ?>">
            <input type="radio" name="device_connected" value="<?= htmlspecialchars($d['value']) ?>"
                   id="<?= $d['id'] ?>" class="sr-only dev-radio">
            <div class="dev-card relative flex items-center gap-3 p-4 bg-white border-2 border-gray-300 rounded-xl
                        group-hover:border-indigo-400 group-hover:-translate-y-1 group-hover:shadow-md
                        transition-all duration-300 cursor-pointer select-none">
              <!-- Check badge -->
              <span class="dev-check absolute top-1.5 right-1.5 w-4 h-4 bg-white/25 rounded-full flex items-center justify-center opacity-0 pointer-events-none">
                <svg class="w-2.5 h-2.5 text-white" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                </svg>
              </span>
              <i class="dev-icon <?= $d['icon'] ?> text-lg text-gray-400 group-hover:text-indigo-600 group-hover:scale-125 transition-all duration-300 flex-shrink-0"></i>
              <span class="dev-text text-xs font-bold text-gray-900 group-hover:text-indigo-600 transition-colors duration-300"><?= htmlspecialchars($d['label']) ?></span>
            </div>
          </label>
          <?php endforeach; ?>

        </div>
      </div>

      <!-- Submit -->
      <div class="flex items-center justify-center">
        <button
          type="submit"
          class="inline-flex items-center justify-center gap-3 rounded-2xl px-8 py-4 text-lg font-bold text-white bg-gradient-to-r from-indigo-600 to-purple-600 shadow-xl hover:shadow-2xl hover:-translate-y-1 active:translate-y-0 transition-all duration-300 whitespace-nowrap group"
        >
          <span class="group-hover:tracking-wider transition-all duration-300">Continue</span>
          <i class="fa-solid fa-arrow-right group-hover:translate-x-1 transition-transform duration-300"></i>
        </button>
      </div>

    </form>
  </div>
</div>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    const problemError  = document.getElementById('problem-error');
    const problemRadios = document.querySelectorAll('.problem-radio');
    const form          = document.getElementById('detail-form');

    // Hide error when user makes a selection
    problemRadios.forEach(radio => {
      radio.addEventListener('change', function () {
        if (this.checked) problemError.classList.add('hidden');
      });
    });

    // Custom validation on submit — prevents native browser bubble
    // and shows our styled error banner instead
    form.addEventListener('submit', function (e) {
      const selected = document.querySelector('input[name="problem_facing"]:checked');
      if (!selected) {
        e.preventDefault();
        problemError.classList.remove('hidden');
        problemError.scrollIntoView({ behavior: 'smooth', block: 'center' });
      }
    });

    // Suppress native browser "please fill in this field" tooltip
    // by intercepting the invalid event on every problem radio
    problemRadios.forEach(radio => {
      radio.addEventListener('invalid', function (e) {
        e.preventDefault(); // stop native tooltip
        problemError.classList.remove('hidden');
        problemError.scrollIntoView({ behavior: 'smooth', block: 'center' });
      });
    });
  });
</script>