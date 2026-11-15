<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700;900&family=DM+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">

<style>
  .plans-root { font-family: 'DM Sans', sans-serif; }
  .plans-heading { font-family: 'Playfair Display', serif; }

  @keyframes fadeUp {
    from { opacity: 0; transform: translateY(28px); }
    to   { opacity: 1; transform: translateY(0); }
  }
  .fade-up  { animation: fadeUp 0.6s ease forwards; }
  .delay-1  { animation-delay: 0.1s; opacity: 0; }
  .delay-2  { animation-delay: 0.25s; opacity: 0; }
  .delay-3  { animation-delay: 0.4s; opacity: 0; }
  .delay-4  { animation-delay: 0.55s; opacity: 0; }

  .plan-card {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    position: relative;
  }
  .plan-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 30px 60px rgba(0,0,0,0.12);
  }
  .plan-card.featured {
    transform: scale(1.03);
    z-index: 10;
  }
  .plan-card.featured:hover {
    transform: scale(1.03) translateY(-8px);
  }

  /* Modal backdrop */
  .modal-overlay {
    display: none;
    position: fixed;
    inset: 0;
    background: rgba(0,0,0,0.5);
    backdrop-filter: blur(4px);
    z-index: 999;
    align-items: center;
    justify-content: center;
  }
  .modal-overlay.active {
    display: flex;
  }

  .modal-box {
    animation: fadeUp 0.3s ease forwards;
  }
</style>

<div class="plans-root bg-gray-50 pb-20">

  <!-- ── HERO ── -->
  <div class="bg-gradient-to-br from-blue-700 via-blue-600 to-blue-500 py-20 px-4 text-center relative overflow-hidden fade-up">
    <div class="absolute -top-20 -right-20 w-72 h-72 bg-white opacity-5 rounded-full"></div>
    <div class="absolute -bottom-12 -left-12 w-52 h-52 bg-white opacity-5 rounded-full"></div>
    <div class="relative z-10">
      <!-- <span class="inline-block bg-white/15 border border-white/25 text-white text-xs font-semibold tracking-widest uppercase px-4 py-1.5 rounded-full mb-5">Support Plans</span> -->
      <h1 class="plans-heading text-5xl lg:text-6xl font-black text-white mb-4 leading-tight">Choose Your <span class="text-blue-200">Plan</span></h1>
      <p class="text-blue-100 text-lg max-w-xl mx-auto">Pick the plan that fits your needs.</p>
    </div>
  </div>

  <?php if (!empty($status)): ?>
    <?php if ($status == 'success'): ?>
      <div class="max-w-4xl mx-auto mt-6 px-4">
        <div class="bg-green-50 border border-green-200 text-green-800 rounded-xl px-5 py-4 flex items-center gap-3 text-sm font-medium">
          <svg class="w-5 h-5 text-green-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
          Message sent successfully! Our team will reach out to you shortly.
        </div>
      </div>
    <?php elseif ($status == 'error'): ?>
      <div class="max-w-4xl mx-auto mt-6 px-4">
        <div class="bg-red-50 border border-red-200 text-red-800 rounded-xl px-5 py-4 flex items-center gap-3 text-sm font-medium">
          <svg class="w-5 h-5 text-red-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
          Something went wrong. Please try again or contact us directly.
        </div>
      </div>
    <?php endif; ?>
  <?php endif; ?>

  <!-- ── PLANS GRID ── -->
  <div class="max-w-6xl mx-auto px-4 mt-16">
    <div class="grid lg:grid-cols-3 gap-6 items-start">

      <!-- ── BASIC ── -->
      <div class="plan-card bg-white rounded-3xl shadow-lg border border-gray-100 overflow-hidden fade-up delay-2">
        <!-- Card top accent -->
        <div class="h-1.5 bg-gradient-to-r from-sky-400 to-blue-500"></div>
        <div class="p-8">
          <!-- Badge + Title -->
          <div class="flex items-start justify-between mb-6">
            <div>
              <!-- <span class="inline-block bg-sky-50 text-sky-600 text-xs font-bold tracking-widest uppercase px-3 py-1 rounded-full border border-sky-100 mb-3">Basic</span> -->
              <h2 class="plans-heading text-2xl font-bold text-gray-900">Starter</h2>
              <p class="text-gray-400 text-sm mt-1">Printer Care</p>
            </div>
            <div class="w-12 h-12 bg-sky-50 rounded-xl flex items-center justify-center flex-shrink-0">
              <svg class="w-6 h-6 text-sky-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z"/>
              </svg>
            </div>
          </div>

          <!-- Meta pills -->
          <div class="flex flex-wrap gap-2 mb-6">
            <!-- <span class="bg-gray-50 border border-gray-200 text-gray-600 text-xs font-medium px-3 py-1.5 rounded-full">One-time Fix</span> -->
            <span class="bg-gray-50 border border-gray-200 text-gray-600 text-xs font-medium px-3 py-1.5 rounded-full">1-Year Coverage</span>
            <!-- <span class="bg-gray-50 border border-gray-200 text-gray-600 text-xs font-medium px-3 py-1.5 rounded-full">1 Device</span> -->
          </div>

          <!-- Issues -->
          <div class="mb-6">
            <p class="text-xs font-semibold text-gray-400 uppercase tracking-wider mb-3">Software Related Printer Issues</p>
            <!-- <ul class="space-y-2.5">
              <?php foreach(['Printer offline / Can\'t connect','New printer setup','Printer won\'t print','Wireless setup'] as $issue): ?>
              <li class="flex items-center gap-3 text-gray-600 text-sm">
                <span class="w-5 h-5 bg-green-50 rounded-full flex items-center justify-center flex-shrink-0">
                  <svg class="w-3 h-3 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg>
                </span>
                <?= $issue ?>
              </li>
              <?php endforeach; ?>
            </ul> -->
          </div>

          <!-- Benefits -->
          <div class="bg-gray-50 rounded-xl p-4 mb-6">
            <p class="text-xs font-semibold text-gray-400 uppercase tracking-wider mb-2">Support Channels</p>
            <div class="flex flex-wrap gap-2">
              <span class="bg-white border border-gray-200 text-gray-600 text-xs px-3 py-1 rounded-full">💬 Chat</span>
              <span class="bg-white border border-gray-200 text-gray-600 text-xs px-3 py-1 rounded-full">📧 Email</span>
              <!-- <span class="bg-white border border-gray-200 text-gray-600 text-xs px-3 py-1 rounded-full">🕐 24/7</span> -->
            </div>
          </div>

          <button
            class="choose-plan-btn w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3.5 rounded-xl transition-all duration-300 hover:shadow-lg hover:shadow-blue-200 hover:-translate-y-0.5 text-sm tracking-wide"
            data-plan="BASIC SUPPORT PLAN">
            Get Started →
          </button>
        </div>
      </div>

      <!-- ── ENHANCED (FEATURED) ── -->
      <div class="plan-card featured bg-blue-600 rounded-3xl shadow-2xl overflow-hidden fade-up delay-3" style="box-shadow: 0 25px 50px rgba(37,99,235,0.35);">
        <!-- Popular ribbon -->
        <div class="bg-yellow-400 text-yellow-900 text-xs font-black tracking-widest uppercase text-center py-2">
          ⭐ Most Popular
        </div>
        <div class="p-8">
          <div class="flex items-start justify-between mb-6">
            <div>
              <!-- <span class="inline-block bg-white/20 text-white text-xs font-bold tracking-widest uppercase px-3 py-1 rounded-full border border-white/30 mb-3">Enhanced</span> -->
              <h2 class="plans-heading text-2xl font-bold text-white">Enhanced </h2>
              <p class="text-blue-200 text-sm mt-1">Printer & Computer Care</p>
            </div>
            <div class="w-12 h-12 bg-white/20 rounded-xl flex items-center justify-center flex-shrink-0">
              <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
              </svg>
            </div>
          </div>

          <div class="flex flex-wrap gap-2 mb-6">
            <!-- <span class="bg-white/15 border border-white/20 text-white text-xs font-medium px-3 py-1.5 rounded-full">One-time Fix</span> -->
            <span class="bg-white/15 border border-white/20 text-white text-xs font-medium px-3 py-1.5 rounded-full">3-Year Coverage</span>
            <!-- <span class="bg-white/15 border border-white/20 text-white text-xs font-medium px-3 py-1.5 rounded-full">2 Devices</span> -->
          </div>

          <div class="mb-6">
            <p class="text-xs font-semibold text-blue-200 uppercase tracking-wider mb-3">Software Related Printer & Computer Issues</p>
            <!-- <ul class="space-y-2.5">
              <?php foreach(['Printer offline / Can\'t connect','New printer setup','Printer won\'t print','Wireless setup','Scanner issues','Printer or Scanner errors'] as $issue): ?>
              <li class="flex items-center gap-3 text-blue-50 text-sm">
                <span class="w-5 h-5 bg-white/20 rounded-full flex items-center justify-center flex-shrink-0">
                  <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg>
                </span>
                <?= $issue ?>
              </li>
              <?php endforeach; ?>
            </ul> -->
          </div>

          <div class="bg-white/10 rounded-xl p-4 mb-6">
            <p class="text-xs font-semibold text-blue-200 uppercase tracking-wider mb-2">Support Channels</p>
            <div class="flex flex-wrap gap-2">
              <span class="bg-white/15 border border-white/20 text-white text-xs px-3 py-1 rounded-full">📞 Phone</span>
              <span class="bg-white/15 border border-white/20 text-white text-xs px-3 py-1 rounded-full">💬 Chat</span>
              <span class="bg-white/15 border border-white/20 text-white text-xs px-3 py-1 rounded-full">📧 Email</span>
              <!-- <span class="bg-white/15 border border-white/20 text-white text-xs px-3 py-1 rounded-full">🕐 24/7</span> -->
            </div>
          </div>

          <button
            class="choose-plan-btn w-full bg-white text-blue-700 hover:bg-blue-50 font-bold py-3.5 rounded-xl transition-all duration-300 hover:shadow-lg hover:-translate-y-0.5 text-sm tracking-wide"
            data-plan="ENHANCED SUPPORT PLAN">
            Get Started →
          </button>
        </div>
      </div>

      <!-- ── COMPREHENSIVE ── -->
      <div class="plan-card bg-white rounded-3xl shadow-lg border border-gray-100 overflow-hidden fade-up delay-4">
        <div class="h-1.5 bg-gradient-to-r from-violet-500 to-purple-600"></div>
        <div class="p-8">
          <div class="flex items-start justify-between mb-6">
            <div>
              <!-- <span class="inline-block bg-violet-50 text-violet-600 text-xs font-bold tracking-widest uppercase px-3 py-1 rounded-full border border-violet-100 mb-3">Comprehensive</span> -->
              <h2 class="plans-heading text-2xl font-bold text-gray-900">Advance</h2>
              <p class="text-gray-400 text-sm mt-1">Ultimate Care</p>
            </div>
            <div class="w-12 h-12 bg-violet-50 rounded-xl flex items-center justify-center flex-shrink-0">
              <svg class="w-6 h-6 text-violet-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/>
              </svg>
            </div>
          </div>

          <div class="flex flex-wrap gap-2 mb-6">
            <!-- <span class="bg-gray-50 border border-gray-200 text-gray-600 text-xs font-medium px-3 py-1.5 rounded-full">One-time Fix</span> -->
            <span class="bg-gray-50 border border-gray-200 text-gray-600 text-xs font-medium px-3 py-1.5 rounded-full">5-Year Coverage</span>
            <span class="bg-violet-50 border border-violet-200 text-violet-700 text-xs font-medium px-3 py-1.5 rounded-full">Unlimited Devices</span>
          </div>

          <div class="mb-6">
            <p class="text-xs font-semibold text-gray-400 uppercase tracking-wider mb-3">Software Related Printer, Computer, Phone/Tablets Issues</p>
            <!-- <ul class="space-y-2.5">
              <?php foreach(['Printer offline / Can\'t connect','New printer setup','Printer won\'t print','Wireless setup','Printer or Scanner errors','Blank papers printing','Paper jam','Error codes & messages','Scanner issues'] as $issue): ?>
              <li class="flex items-center gap-3 text-gray-600 text-sm">
                <span class="w-5 h-5 bg-violet-50 rounded-full flex items-center justify-center flex-shrink-0">
                  <svg class="w-3 h-3 text-violet-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg>
                </span>
                <?= $issue ?>
              </li>
              <?php endforeach; ?>
            </ul> -->
          </div>

          <div class="bg-violet-50 rounded-xl p-4 mb-6">
            <p class="text-xs font-semibold text-violet-400 uppercase tracking-wider mb-2">Support Channels + Priority</p>
            <div class="flex flex-wrap gap-2">
              <span class="bg-white border border-violet-100 text-gray-600 text-xs px-3 py-1 rounded-full">📞 Phone</span>
              <span class="bg-white border border-violet-100 text-gray-600 text-xs px-3 py-1 rounded-full">💬 Chat</span>
              <span class="bg-white border border-violet-100 text-gray-600 text-xs px-3 py-1 rounded-full">📧 Email</span>
              <span class="bg-violet-600 text-white text-xs px-3 py-1 rounded-full font-semibold">⚡ Priority</span>
            </div>
          </div>

          <button
            class="choose-plan-btn w-full bg-violet-600 hover:bg-violet-700 text-white font-semibold py-3.5 rounded-xl transition-all duration-300 hover:shadow-lg hover:shadow-violet-200 hover:-translate-y-0.5 text-sm tracking-wide"
            data-plan="COMPREHENSIVE SUPPORT PLAN">
            Get Started →
          </button>
        </div>
      </div>

    </div>

    <!-- Trust bar -->
    <div class="mt-12 bg-white rounded-2xl border border-gray-100 shadow-sm p-6 flex flex-wrap items-center justify-center gap-8 fade-up delay-4">
      <?php $trust = [
        ['🔒', 'Secure & Private', 'Your data is always protected'],
        ['🛠️', 'Certified Technicians', 'Trained & experienced experts'],
        ['⚡', 'Fast Resolution', 'Most issues fixed same day'],
        // ['🌍', 'US & UK Support', 'Local numbers available'],
      ]; foreach($trust as $t): ?>
      <div class="flex items-center gap-3">
        <span class="text-2xl"><?= $t[0] ?></span>
        <div>
          <p class="text-gray-800 font-semibold text-sm"><?= $t[1] ?></p>
          <p class="text-gray-400 text-xs"><?= $t[2] ?></p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>

</div>

<!-- ══════════════════════════════
     CUSTOM MODAL (No Bootstrap)
══════════════════════════════ -->
<div id="planModal" class="modal-overlay" role="dialog" aria-modal="true">
  <div class="modal-box bg-white rounded-3xl shadow-2xl w-full max-w-lg mx-4 overflow-hidden">

    <!-- Modal header -->
    <div class="bg-gradient-to-r from-blue-600 to-blue-500 px-8 py-6 flex items-center justify-between">
      <div>
        <p class="text-blue-200 text-xs font-semibold uppercase tracking-widest mb-1">Selected Plan</p>
        <h3 class="plans-heading text-xl font-bold text-white" id="modalPlanTitle">Plan Name</h3>
      </div>
      <button id="closeModal" class="w-9 h-9 bg-white/20 hover:bg-white/30 rounded-full flex items-center justify-center transition">
        <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
        </svg>
      </button>
    </div>

    <!-- Modal body -->
    <div class="px-8 py-7">
      <p class="text-gray-400 text-sm mb-6">Fill in your details below and our team will reach out shortly to get you started.</p>
      <form action="<?php echo base_url('send-support-plan-email'); ?>" method="post" class="space-y-4">
        <input type="hidden" name="selectedPlan" id="selectedPlan">

        <div class="grid grid-cols-2 gap-4">
          <div>
            <label class="block text-gray-600 text-sm font-medium mb-1.5" for="modal_name">Full Name</label>
            <input type="text" name="name" id="modal_name" required placeholder="John Doe"
              class="w-full bg-gray-50 border border-gray-200 rounded-xl px-4 py-3 text-gray-800 placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition text-sm">
          </div>
          <div>
            <label class="block text-gray-600 text-sm font-medium mb-1.5" for="modal_phone">Phone</label>
            <input type="tel" name="phone" id="modal_phone" required placeholder="+1 555-000-0000"
              class="w-full bg-gray-50 border border-gray-200 rounded-xl px-4 py-3 text-gray-800 placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition text-sm">
          </div>
        </div>

        <div>
          <label class="block text-gray-600 text-sm font-medium mb-1.5" for="modal_email">Email Address</label>
          <input type="email" name="email" id="modal_email" required placeholder="john@example.com"
            class="w-full bg-gray-50 border border-gray-200 rounded-xl px-4 py-3 text-gray-800 placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition text-sm">
        </div>

        <div class="pt-2 flex gap-3">
          <button type="button" id="cancelModal"
            class="flex-1 bg-gray-100 px-4 hover:bg-gray-200 text-gray-600 font-medium py-3.5 rounded-xl transition text-sm">
            Cancel
          </button>
          <button type="submit"
            class="flex-2 w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3.5 rounded-xl transition-all duration-300 hover:shadow-lg hover:shadow-blue-200 hover:-translate-y-0.5 text-sm">
            Submit Request →
          </button>
        </div>
      </form>
    </div>
  </div>
</div>

<script>
  const modal        = document.getElementById('planModal');
  const modalTitle   = document.getElementById('modalPlanTitle');
  const selectedPlan = document.getElementById('selectedPlan');
  const closeModal   = document.getElementById('closeModal');
  const cancelModal  = document.getElementById('cancelModal');

  document.querySelectorAll('.choose-plan-btn').forEach(btn => {
    btn.addEventListener('click', () => {
      const plan = btn.getAttribute('data-plan');
      selectedPlan.value = plan;
      modalTitle.textContent = plan.replace(/ SUPPORT PLAN/, '') + ' Support Plan';
      modal.classList.add('active');
      document.body.style.overflow = 'hidden';
    });
  });

  function closeModalFn() {
    modal.classList.remove('active');
    document.body.style.overflow = '';
  }

  closeModal.addEventListener('click', closeModalFn);
  cancelModal.addEventListener('click', closeModalFn);
  modal.addEventListener('click', e => { if (e.target === modal) closeModalFn(); });
</script>