<?php

header("Cache-Control: no-cache, must-revalidate");
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Printerradar</title>

  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Sora:wght@400;500;600;700;800&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet" />

  <!-- Tailwind CSS CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
  
  <!-- Custom Tailwind Config -->
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            'primary': '#1e40af',
            'primary-dark': '#1e3a8a',
            'primary-light': '#3b82f6',
            'secondary': '#0ea5e9',
            'accent': '#f59e0b',
            'dark': '#0f172a',
            'light': '#f8fafc',
          },
          fontFamily: {
            'sora': ['Sora', 'sans-serif'],
            'poppins': ['Poppins', 'sans-serif'],
          },
          boxShadow: {
            'nav': '0 10px 30px rgba(0, 0, 0, 0.1)',
            'premium': '0 20px 60px rgba(0, 0, 0, 0.12)',
          }
        }
      }
    }
  </script>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- Global CSS -->
  <link rel="stylesheet" href="<?= base_url('asset/global.css'); ?>">


  <?php
  // Get the current URI path
  $current_path = \Config\Services::request()->getPath();

  // Check if the current path matches one of the specified routes
  if (in_array($current_path, ['resolution-center', 'resolution-and-troubleshooting', 'thank-you'])) {
    // Include the Tawk.to script only for the specified routes
    ?>
  
    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/6a96b202fad3d33449339d4d/1k1eaenhc';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
    </script>
    <!--End of Tawk.to Script-->



    <?php
  }
  ?>
  
  
  
  
  <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-WJ6K89Q7');</script>
<!-- End Google Tag Manager -->
  







</head>

<body>


  <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WJ6K89Q7"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<header class="sticky top-0 z-50 bg-white/[0.96] backdrop-blur-xl border-b border-slate-200 shadow-header">
  <div class="w-full mx-auto px-4 sm:px-6 lg:px-8 flex items-center justify-between h-[90px] gap-3">

    <!-- ── LOGO ── -->
    <a href="<?php echo base_url('/') ?>" class="flex-shrink-0">
      <img
        src="<?php echo base_url('/asset/images/Printerradar-logo.png') ?>"
        alt="Printerradar Logo"
        class="h-10 sm:h-16 w-auto object-contain"
      >
    </a>

    <!-- ── CONTACT CHIPS — desktop only ── -->
    <div class="hidden xl:flex items-center gap-1 flex-1 justify-center">

      <!-- US Phone -->
      <a href="tel:+18884955479"
         class="group inline-flex items-center gap-2 text-[13px] font-medium text-blue-700 px-3 py-2 rounded-full border border-transparent bg-blue-50 hover:border-blue-200 transition-all duration-200 whitespace-nowrap no-underline">
        <span class="w-7 h-7 rounded-lg bg-blue-50 group-hover:bg-blue-100 flex items-center justify-center flex-shrink-0 overflow-hidden transition-colors duration-200">
          <img src="<?php echo base_url('asset/images/usflag.jpg'); ?>" alt="USA" class="w-5 h-[13px] object-cover rounded-[2px]">
        </span>
        <span>+1 888-495-5479</span>
      </a>

      <div class="w-px h-6 bg-slate-200 mx-1 flex-shrink-0"></div>

      <!-- Email -->
      <a href="mailto:support@printerradar.com"
         class="group inline-flex items-center gap-2 text-[13px] font-medium text-blue-700 px-3 py-2 rounded-full border border-transparent bg-blue-50 hover:border-blue-200 transition-all duration-200 whitespace-nowrap no-underline">
        <span class="w-7 h-7 rounded-lg bg-amber-50 group-hover:bg-amber-100 flex items-center justify-center flex-shrink-0 transition-colors duration-200">
          <i class="fas fa-envelope text-amber-500 text-[11px]"></i>
        </span>
        <span>support@printerradar.com</span>
      </a>

    </div>

    <!-- ── RIGHT SIDE: Buying Guides + 24/7 badge ── -->
    <div class="hidden lg:flex items-center gap-3 flex-shrink-0">

      <!-- Buying Guides link -->
      <a href="<?php echo base_url('buying-guides'); ?>"
         class="inline-flex items-center gap-2 text-sm font-semibold text-gray-700 hover:text-blue-700 px-4 py-2 rounded-xl border border-transparent hover:bg-blue-50 hover:border-blue-200 transition-all duration-200 no-underline">
        <i class="fas fa-book text-blue-600 text-xs"></i>
        Buying Guides
      </a>

      <div class="w-px h-6 bg-slate-200 flex-shrink-0"></div>

      <!-- 24/7 Expert Consultation badge -->
      <div class="inline-flex items-center gap-2 bg-gradient-to-r from-blue-700 to-blue-500 text-white text-[12px] font-bold px-4 py-2 rounded-full shadow-badge whitespace-nowrap tracking-wide select-none">
        <!-- Pulsing green dot -->
        <span class="relative flex h-2 w-2 flex-shrink-0">
          <span class="animate-ping-dot absolute inline-flex h-full w-full rounded-full bg-green-300 opacity-70"></span>
          <span class="relative inline-flex h-2 w-2 rounded-full bg-green-300"></span>
        </span>
        24/7 Expert Consultation
      </div>

    </div>

    <!-- ── MOBILE: show badge + hamburger ── -->
    <div class="flex lg:hidden items-center gap-2">
      <!-- Compact badge on tablet/mobile -->
      <div class="hidden sm:inline-flex items-center gap-1.5 bg-gradient-to-r from-blue-700 to-blue-500 text-white text-[11px] font-bold px-3 py-1.5 rounded-full shadow-badge whitespace-nowrap">
        <span class="relative flex h-1.5 w-1.5 flex-shrink-0">
          <span class="animate-ping-dot absolute inline-flex h-full w-full rounded-full bg-green-300 opacity-70"></span>
          <span class="relative inline-flex h-1.5 w-1.5 rounded-full bg-green-300"></span>
        </span>
        24/7
      </div>

      <!-- Hamburger -->
      <button
        id="mobileMenuBtn"
        class="flex items-center justify-center w-10 h-10 rounded-xl bg-slate-100 border border-slate-200 text-gray-600 hover:bg-blue-50 hover:border-blue-200 hover:text-blue-700 transition-all duration-200"
        aria-label="Open menu"
      >
        <i class="fas fa-bars text-sm"></i>
      </button>
    </div>

  </div>
</header>

<!-- ══════════════════════════════════
     MOBILE DRAWER
══════════════════════════════════ -->
<div id="mobileDrawer" class="fixed inset-0 z-[99999] hidden">

  <!-- Backdrop -->
  <div id="drawerOverlay" class="absolute inset-0 bg-slate-900/50 backdrop-blur-sm"></div>

  <!-- Sliding panel -->
  <div class="animate-drawer-slide absolute top-0 right-0 bottom-0 w-[300px] bg-white shadow-2xl flex flex-col gap-5 p-6 overflow-y-auto">

    <!-- Top row: logo + close -->
    <div class="flex items-center justify-between">
      <a href="<?php echo base_url('/') ?>">
        <img src="<?php echo base_url('/asset/images/Printerradar-logo.png') ?>" alt="Printerradar" class="h-9 w-auto">
      </a>
      <button id="drawerClose"
        class="flex items-center justify-center w-9 h-9 rounded-xl bg-slate-100 border border-slate-200 text-slate-500 hover:bg-red-50 hover:border-red-200 hover:text-red-500 transition-all duration-200">
        <i class="fas fa-times text-sm"></i>
      </button>
    </div>

    <!-- 24/7 badge -->
    <div class="flex items-center justify-center gap-2 bg-gradient-to-r from-blue-700 to-blue-500 text-white text-xs font-bold px-4 py-2.5 rounded-full shadow-badge tracking-wide">
      <span class="relative flex h-2 w-2">
        <span class="animate-ping-dot absolute inline-flex h-full w-full rounded-full bg-green-300 opacity-70"></span>
        <span class="relative inline-flex h-2 w-2 rounded-full bg-green-300"></span>
      </span>
      24/7 Expert Consultation
    </div>

    <!-- Contact section -->
    <div class="flex flex-col gap-2">
      <p class="text-[11px] font-bold text-slate-400 uppercase tracking-widest px-1">Contact Us</p>

      <a href="tel:+18884955479"
         class="flex items-center gap-3 px-4 py-3 bg-slate-50 border border-slate-200 rounded-2xl hover:bg-blue-50 hover:border-blue-200 transition-all duration-200 no-underline">
        <span class="w-9 h-9 rounded-xl bg-blue-50 flex items-center justify-center flex-shrink-0 overflow-hidden">
          <img src="<?php echo base_url('asset/images/usflag.jpg'); ?>" alt="USA" class="w-[22px] h-[15px] object-cover rounded-[3px]">
        </span>
        <div>
          <p class="text-[11px] text-slate-400 font-medium leading-none mb-1">United States</p>
          <p class="text-[13px] font-semibold text-slate-800 leading-none">+1 888-495-5479</p>
        </div>
      </a>

      <a href="mailto:support@printerradar.com"
         class="flex items-center gap-3 px-4 py-3 bg-slate-50 border border-slate-200 rounded-2xl hover:bg-blue-50 hover:border-blue-200 transition-all duration-200 no-underline">
        <span class="w-9 h-9 rounded-xl bg-amber-50 flex items-center justify-center flex-shrink-0 text-amber-500 text-sm">
          <i class="fas fa-envelope"></i>
        </span>
        <div>
          <p class="text-[11px] text-slate-400 font-medium leading-none mb-1">Email Support</p>
          <p class="text-[12px] font-semibold text-slate-800 leading-none">support@printerradar.com</p>
        </div>
      </a>
    </div>

    <!-- Navigation section -->
    <div class="flex flex-col gap-2">
      <p class="text-[11px] font-bold text-slate-400 uppercase tracking-widest px-1">Navigation</p>

      <a href="<?php echo base_url('buying-guides'); ?>"
         class="flex items-center gap-3 px-4 py-3.5 bg-blue-50 border border-blue-200 rounded-2xl text-blue-700 font-semibold text-sm hover:bg-blue-100 transition-all duration-200 no-underline">
        <span class="w-9 h-9 rounded-xl bg-white border border-blue-100 flex items-center justify-center flex-shrink-0 text-blue-600 text-sm shadow-sm">
          <i class="fas fa-book"></i>
        </span>
        Buying Guides
      </a>
    </div>

  </div>
</div>



<script>
  const mobileMenuBtn = document.getElementById('mobileMenuBtn');
  const mobileDrawer  = document.getElementById('mobileDrawer');
  const drawerClose   = document.getElementById('drawerClose');
  const drawerOverlay = document.getElementById('drawerOverlay');

  function openDrawer()  {
    mobileDrawer.classList.remove('hidden');
    document.body.style.overflow = 'hidden';
  }
  function closeDrawer() {
    mobileDrawer.classList.add('hidden');
    document.body.style.overflow = '';
  }

  mobileMenuBtn.addEventListener('click', openDrawer);
  drawerClose.addEventListener('click', closeDrawer);
  drawerOverlay.addEventListener('click', closeDrawer);
  document.addEventListener('keydown', e => { if (e.key === 'Escape') closeDrawer(); });
</script>


  <!-- Main Content Container -->
  <main class="bg-light min-h-screen">
      <?php include('review_modal.php'); ?>
    <?php if (session()->getFlashdata('message')): ?>
      <div class="max-w-7xl mx-auto mt-6 px-4 sm:px-6 lg:px-8">
        <div class="alert-success flex items-start gap-4">
          <i class="fas fa-check-circle text-2xl flex-shrink-0"></i>
          <div>
            <h3 class="font-bold mb-1">Success!</h3>
            <p class="text-sm">
              <?= session()->getFlashdata('message') ?>
            </p>
          </div>
        </div>
      </div>
    <?php endif; ?>

    <?php if (session()->getFlashdata('errors')): ?>
      <div class="max-w-7xl mx-auto mt-6 px-4 sm:px-6 lg:px-8">
        <div class="alert-danger flex items-start gap-4">
          <i class="fas fa-exclamation-circle text-2xl flex-shrink-0"></i>
          <div>
            <h3 class="font-bold mb-1">Error!</h3>
            <p class="text-sm">
              <?= implode('<br>', session()->getFlashdata('errors')) ?>
            </p>
          </div>
        </div>
      </div>
    <?php endif; ?>