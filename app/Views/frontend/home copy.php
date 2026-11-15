<link href="https://fonts.googleapis.com/css2?family=Syne:wght@700;800;900&family=DM+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">

<style>
  * { box-sizing: border-box; margin: 0; padding: 0; }

  .hero-root {
    font-family: 'DM Sans', sans-serif;
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;
    overflow: hidden;
    padding: 24px 16px;
    background: #f8fbff;
  }

  .hero-display { font-family: 'Syne', sans-serif; }

  /* ── Animated background mesh ── */
  .hero-root::before {
    content: '';
    position: absolute;
    inset: 0;
    background:
      radial-gradient(ellipse 70% 60% at 20% 20%, rgba(219,234,254,0.7) 0%, transparent 60%),
      radial-gradient(ellipse 50% 50% at 80% 80%, rgba(191,219,254,0.5) 0%, transparent 55%),
      radial-gradient(ellipse 60% 40% at 60% 10%, rgba(224,242,254,0.6) 0%, transparent 50%),
      #f8fbff;
    pointer-events: none;
  }

  /* Grid dots */
  .hero-root::after {
    content: '';
    position: absolute;
    inset: 0;
    background-image: radial-gradient(circle, rgba(0,82,204,0.07) 1px, transparent 1px);
    background-size: 32px 32px;
    pointer-events: none;
  }

  /* ── Main card ── */
  .main-card {
    position: relative;
    z-index: 10;
    width: 100%;
    max-width: 860px;
    background: rgba(255,255,255,0.85);
    backdrop-filter: blur(20px);
    border: 1.5px solid rgba(255,255,255,0.9);
    border-radius: 28px;
    box-shadow:
      0 4px 6px rgba(0,0,0,0.02),
      0 20px 60px rgba(0,82,204,0.10),
      0 1px 0 rgba(255,255,255,1) inset;
    padding: 40px 44px;
  }

  @media (max-width: 640px) {
    .main-card { padding: 28px 20px; }
  }

  /* ── Animations ── */
  @keyframes fadeUp {
    from { opacity: 0; transform: translateY(20px); }
    to   { opacity: 1; transform: translateY(0); }
  }
  @keyframes scaleIn {
    from { opacity: 0; transform: scale(0.92); }
    to   { opacity: 1; transform: scale(1); }
  }
  @keyframes shimmer {
    0%   { background-position: -200% center; }
    100% { background-position: 200% center; }
  }

  .fade-up  { animation: fadeUp 0.6s ease forwards; }
  .scale-in { animation: scaleIn 0.5s ease forwards; }
  .d1 { animation-delay: 0.05s; opacity: 0; }
  .d2 { animation-delay: 0.15s; opacity: 0; }
  .d3 { animation-delay: 0.25s; opacity: 0; }
  .d4 { animation-delay: 0.35s; opacity: 0; }

  /* ── Header ── */
  .section-pill {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    background: #eff6ff;
    border: 1.5px solid #bfdbfe;
    color: #1d4ed8;
    font-size: 11px;
    font-weight: 700;
    letter-spacing: 0.12em;
    text-transform: uppercase;
    padding: 6px 14px;
    border-radius: 999px;
  }

  .gradient-text {
    background: linear-gradient(135deg, #0052cc 0%, #2684ff 50%, #60a5fa 100%);
    background-size: 200% auto;
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    animation: shimmer 4s linear infinite;
  }

  /* ── Brand cards ── */
  .brands-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 14px;
    margin: 24px 0;
  }
  @media (max-width: 480px) {
    .brands-grid { grid-template-columns: repeat(2, 1fr); }
  }

  .brand-label-wrap { cursor: pointer; }

  .brand-card {
    position: relative;
    background: #ffffff;
    border: 2px solid #e8f0fe;
    border-radius: 18px;
    padding: 22px 12px 16px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    gap: 10px;
    min-height: 110px;
    transition: all 0.28s cubic-bezier(.22,.68,0,1.2);
    box-shadow: 0 2px 8px rgba(0,0,0,0.04);
    overflow: hidden;
  }
  .brand-card::before {
    content: '';
    position: absolute;
    inset: 0;
    background: linear-gradient(135deg, #eff6ff, #dbeafe);
    opacity: 0;
    transition: opacity 0.3s ease;
    border-radius: 16px;
  }
  .brand-card:hover { border-color: #93c5fd; transform: translateY(-4px) scale(1.02); box-shadow: 0 12px 32px rgba(0,82,204,0.14); }
  .brand-card:hover::before { opacity: 0.6; }
  .brand-card.selected { border-color: #0052cc; box-shadow: 0 0 0 3px rgba(0,82,204,0.18), 0 12px 32px rgba(0,82,204,0.18); }
  .brand-card.selected::before { opacity: 1; }

  .check-ring {
    position: absolute; top: -1px; right: -1px;
    width: 28px; height: 28px;
    background: #0052cc;
    border-radius: 0 16px 0 14px;
    display: flex; align-items: center; justify-content: center;
    opacity: 0; transform: scale(0.5) translate(4px,-4px);
    transition: all 0.25s cubic-bezier(.22,.68,0,1.5);
  }
  .brand-card.selected .check-ring { opacity: 1; transform: scale(1) translate(0,0); }

  .brand-img-wrap {
    position: relative; z-index: 1;
    display: flex; align-items: center; justify-content: center;
    height: 44px;
  }
  .brand-img-wrap img {
    max-height: 42px; max-width: 110px;
    object-fit: contain;
    transition: transform 0.3s ease;
    filter: drop-shadow(0 2px 4px rgba(0,0,0,0.08));
  }
  .brand-card:hover .brand-img-wrap img { transform: scale(1.08); }

  .brand-name {
    position: relative; z-index: 1;
    font-size: 11px; font-weight: 700;
    letter-spacing: 0.1em; text-transform: uppercase;
    color: #94a3b8;
    transition: color 0.3s;
  }
  .brand-card.selected .brand-name,
  .brand-card:hover .brand-name { color: #0052cc; }

  /* ── CTA Button ── */
  .cta-btn {
    width: 100%;
    padding: 16px;
    background: linear-gradient(135deg, #0052cc 0%, #2684ff 100%);
    border: none; border-radius: 14px;
    color: white;
    font-family: 'Syne', sans-serif;
    font-size: 16px; font-weight: 800;
    letter-spacing: 0.03em;
    cursor: pointer;
    display: flex; align-items: center; justify-content: center; gap: 10px;
    position: relative; overflow: hidden;
    transition: all 0.3s ease;
    box-shadow: 0 8px 24px rgba(0,82,204,0.35);
  }
  .cta-btn::after {
    content: '';
    position: absolute; inset: 0;
    background: linear-gradient(90deg, transparent, rgba(255,255,255,0.15), transparent);
    transform: translateX(-100%);
    transition: transform 0.5s ease;
  }
  .cta-btn:hover { transform: translateY(-2px); box-shadow: 0 14px 36px rgba(0,82,204,0.45); }
  .cta-btn:hover::after { transform: translateX(100%); }
  .cta-btn:active { transform: translateY(0); }

  .btn-arrow {
    width: 28px; height: 28px;
    background: rgba(255,255,255,0.2);
    border-radius: 8px;
    display: flex; align-items: center; justify-content: center;
    transition: transform 0.3s ease;
  }
  .cta-btn:hover .btn-arrow { transform: translateX(4px); }

  /* ── Feature row ── */
  .features-row {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 10px;
    margin-top: 20px;
  }
  @media (max-width: 480px) {
    .features-row { grid-template-columns: 1fr; }
  }

  .feat-item {
    display: flex; align-items: center; gap: 10px;
    background: #f8faff;
    border: 1px solid #e8f0fe;
    border-radius: 12px;
    padding: 12px 14px;
    transition: all 0.2s ease;
  }
  .feat-item:hover { background: #eff6ff; border-color: #bfdbfe; }

  .feat-icon {
    width: 34px; height: 34px;
    border-radius: 10px;
    display: flex; align-items: center; justify-content: center;
    flex-shrink: 0;
  }

  /* ── Trust strip ── */
  .trust-strip {
    display: flex; align-items: center; justify-content: center;
    flex-wrap: wrap; gap: 20px;
    margin-top: 18px;
    padding-top: 18px;
    border-top: 1px solid #e8f0fe;
  }
  .trust-item {
    display: flex; align-items: center; gap: 7px;
    font-size: 12px; font-weight: 600; color: #64748b;
  }
  .trust-dot { width: 6px; height: 6px; border-radius: 50%; }

  /* Floating decorative elements */
  .deco-circle {
    position: absolute;
    border-radius: 50%;
    pointer-events: none;
    z-index: 1;
  }
</style>

<div class="hero-root">

  <!-- Floating decorations (behind card) -->
  <div class="deco-circle" style="width:180px;height:180px;background:rgba(59,130,246,0.08);top:8%;left:4%;border:1px solid rgba(59,130,246,0.12);"></div>
  <div class="deco-circle" style="width:120px;height:120px;background:rgba(99,102,241,0.07);bottom:10%;right:6%;border:1px solid rgba(99,102,241,0.1);"></div>
  <div class="deco-circle" style="width:60px;height:60px;background:rgba(59,130,246,0.1);top:15%;right:12%;"></div>
  <div class="deco-circle" style="width:40px;height:40px;background:rgba(99,102,241,0.08);bottom:20%;left:8%;"></div>

  <!-- ── MAIN CARD ── -->
  <div class="main-card scale-in d1">

    <!-- Header -->
    <div class="text-center mb-1 fade-up d2">
      <!-- <div class="flex justify-center mb-4">
        <span class="section-pill">
          <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z"/>
          </svg>
          Printer Support
        </span>
      </div> -->

      <h1 class="hero-display fade-up d2" style="font-size:clamp(26px,4vw,42px);font-weight:900;color:#0f172a;line-height:1.15;margin-bottom:10px;">
        Select Your <span class="gradient-text">Printer Brand</span>
      </h1>
      <p style="font-size:14px;color:#64748b;max-width:520px;margin:0 auto;line-height:1.6;">
        Choose your manufacturer below for instant step-by-step guidance on offline errors, wireless setup, paper jams, error codes &amp; more.
      </p>
    </div>

    <!-- Form -->
    <form action="<?php echo base_url('/under_stand_the_issue') ?>" method="post" class="fade-up d3">

      <!-- Brand Grid -->
      <div class="brands-grid">
        <?php
        $brands = [
          ['value'=>'HP',      'label'=>'HP',      'img'=>'hplogo.png'],
          ['value'=>'Brother', 'label'=>'Brother', 'img'=>'brotherprinterlogo.png'],
          ['value'=>'Epson',   'label'=>'Epson',   'img'=>'epsonlogo1.png'],
          ['value'=>'Canon',   'label'=>'Canon',   'img'=>'canonlogo.png'],
        ];
        foreach ($brands as $i => $brand):
        ?>
        <label class="brand-label-wrap">
          <input type="radio" name="printer_brand" value="<?= $brand['value'] ?>"
                 <?= $i===0 ? 'checked' : '' ?> class="brand-radio" style="display:none;">
          <div class="brand-card <?= $i===0 ? 'selected' : '' ?>" data-brand="<?= $brand['value'] ?>">
            <div class="check-ring">
              <svg width="13" height="13" viewBox="0 0 13 13" fill="none">
                <path d="M2.5 6.5l3 3 5-5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </div>
            <div class="brand-img-wrap">
              <img src="<?php echo base_url('asset/images/'.$brand['img']) ?>" alt="<?= $brand['value'] ?> Logo">
            </div>
            <span class="brand-name"><?= $brand['label'] ?></span>
          </div>
        </label>
        <?php endforeach; ?>
      </div>

      <!-- Submit -->
      <button type="submit" class="cta-btn">
        <span>Get Started Now</span>
        <span class="btn-arrow">
          <svg width="14" height="14" fill="none" stroke="white" stroke-width="2.5" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
          </svg>
        </span>
      </button>

    </form>

    <!-- Feature row -->
    <div class="features-row fade-up d4">

      <div class="feat-item">
        <div class="feat-icon" style="background:#ecfdf5;">
          <svg class="w-4 h-4" style="color:#059669;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
          </svg>
        </div>
        <div>
          <p style="font-size:12px;font-weight:700;color:#0f172a;">Easy to Follow</p>
          <p style="font-size:11px;color:#94a3b8;margin-top:1px;">Step-by-step guidance</p>
        </div>
      </div>

      <div class="feat-item">
        <div class="feat-icon" style="background:#eff6ff;">
          <svg class="w-4 h-4" style="color:#0052cc;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"/>
          </svg>
        </div>
        <div>
          <p style="font-size:12px;font-weight:700;color:#0f172a;">24/7 Expert Support</p>
          <p style="font-size:11px;color:#94a3b8;margin-top:1px;">Always here to help</p>
        </div>
      </div>

      <div class="feat-item">
        <div class="feat-icon" style="background:#fffbeb;">
          <svg class="w-4 h-4" style="color:#d97706;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
          </svg>
        </div>
        <div>
          <p style="font-size:12px;font-weight:700;color:#0f172a;">Quick Solutions</p>
          <p style="font-size:11px;color:#94a3b8;margin-top:1px;">Back to work fast</p>
        </div>
      </div>

    </div>

    <!-- Trust strip -->
    <div class="trust-strip fade-up d4">
      <div class="trust-item">
        <span class="trust-dot" style="background:#10b981;"></span>
        All Brands Supported
      </div>
      <div class="trust-item">
        <span class="trust-dot" style="background:#0052cc;"></span>
        50K+ Happy Users
      </div>
      <div class="trust-item">
        <span class="trust-dot" style="background:#f59e0b;"></span>
        Secure &amp; Safe
      </div>
      <div class="trust-item">
        <span class="trust-dot" style="background:#8b5cf6;"></span>
        Free to Use
      </div>
    </div>

  </div>
</div>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    const radios = document.querySelectorAll('.brand-radio');
    const cards  = document.querySelectorAll('.brand-card');

    function selectBrand(idx) {
      cards.forEach(c => c.classList.remove('selected'));
      cards[idx].classList.add('selected');
      radios[idx].checked = true;
    }

    radios.forEach((radio, idx) => {
      radio.addEventListener('change', () => selectBrand(idx));
    });
    cards.forEach((card, idx) => {
      card.addEventListener('click', () => selectBrand(idx));
    });
  });
</script>