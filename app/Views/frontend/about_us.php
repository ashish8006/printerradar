<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700;900&family=DM+Sans:wght@300;400;500&display=swap" rel="stylesheet">

<style>
  .about-section { font-family: 'DM Sans', sans-serif; }
  .about-heading { font-family: 'Playfair Display', serif; }

  .ink-line::after {
    content: '';
    display: block;
    width: 60px;
    height: 3px;
    background: linear-gradient(90deg, #1e40af, #3b82f6);
    margin: 16px 0 0 0;
    border-radius: 2px;
  }

  .card-hover {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
  }
  .card-hover:hover {
    transform: translateY(-4px);
    box-shadow: 0 20px 40px rgba(0,0,0,0.12);
  }

  .img-frame {
    position: relative;
  }
  .img-frame::before {
    content: '';
    position: absolute;
    inset: -12px -12px 12px 12px;
    border: 2px solid #3b82f6;
    border-radius: 16px;
    z-index: 0;
    opacity: 0.4;
  }
  .img-frame img {
    position: relative;
    z-index: 1;
  }

  .stat-pill {
    backdrop-filter: blur(10px);
    background: rgba(255,255,255,0.92);
    border: 1px solid rgba(59,130,246,0.15);
  }

  @keyframes fadeUp {
    from { opacity: 0; transform: translateY(30px); }
    to   { opacity: 1; transform: translateY(0); }
  }
  .fade-up { animation: fadeUp 0.7s ease forwards; }
  .delay-1 { animation-delay: 0.15s; opacity: 0; }
  .delay-2 { animation-delay: 0.3s;  opacity: 0; }
  .delay-3 { animation-delay: 0.45s; opacity: 0; }
</style>

<!-- ════════════════════════════════════════════
     ABOUT US SECTION
════════════════════════════════════════════ -->
<section class="about-section bg-white py-10 px-4 overflow-hidden">
  <div class="max-w-6xl mx-auto">

    <!-- Top label -->
    <div class="flex items-center gap-3 mb-4 fade-up">
      <span class="w-8 h-px bg-blue-500"></span>
      <span class="text-blue-600 text-sm font-medium tracking-widest uppercase">Who We Are</span>
    </div>

    <div class="grid lg:grid-cols-2 gap-16 items-center">

      <!-- Left: Text -->
      <div class="fade-up delay-1">
        <h1 class="about-heading text-5xl lg:text-6xl font-black text-gray-900 leading-tight mb-6 ink-line">
          About<br><span class="text-blue-600">Printerradar</span>
        </h1>
        <p class="text-gray-500 text-lg leading-relaxed mb-4">
         <strong class="text-gray-700 font-medium"> Welcome to Printerradar,</strong> your independent printer help team! We’re not tied to any printer brands or manufacturers in any way; we're just here to help.
         Whether you're dealing with a stubborn error or a complete no-print situation, we’ve got you covered.
        </p>
        <p class="text-gray-500 text-lg leading-relaxed mb-4">
         Pick your printer brand, tell us what’s going wrong, and get straightforward, step-by-step fixes delivered on this site or straight to your inbox.
        </p>
         <p class="text-gray-500 text-lg leading-relaxed mb-4">
        Need help right now? Chat with one of our friendly, certified experts or give us a call — we’re ready to sort it out fast.
        </p>

        <!-- Stats row -->
        <div class="flex flex-wrap gap-4">
          <div class="stat-pill rounded-2xl px-6 py-4 card-hover shadow-sm">
            <p class="about-heading text-3xl font-black text-blue-600">24/7</p>
            <p class="text-gray-500 text-sm mt-1">Expert Consultation</p>
          </div>
  
          <div class="stat-pill rounded-2xl px-6 py-4 card-hover shadow-sm">
            <p class="about-heading text-3xl font-black text-blue-600">98%</p>
            <p class="text-gray-500 text-sm mt-1">Resolution Rate</p>
          </div>
        </div>
      </div>

      <!-- Right: Image -->
      <div class="fade-up delay-2 flex justify-center">
        <div class="img-frame w-full max-w-lg">
          <img
            src="asset/images/repairman-repairing1.jpg"
            alt="Technician repairing a printer"
            class="w-full rounded-2xl object-cover shadow-2xl"
            style="aspect-ratio:4/3;"
          >

          <!-- Floating badge -->
          <div class="absolute bottom-6 left-6 z-10 stat-pill rounded-xl px-5 py-3 shadow-lg flex items-center gap-3">
            <div class="w-10 h-10 rounded-full bg-blue-600 flex items-center justify-center flex-shrink-0">
              <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
              </svg>
            </div>
            <div>
              <p class="text-gray-800 font-semibold text-sm">Certified Technicians</p>
              <p class="text-gray-400 text-xs">Trusted since 2015</p>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>
