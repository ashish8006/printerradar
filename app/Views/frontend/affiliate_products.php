<style>

  @keyframes fadeUp {
    from { opacity: 0; transform: translateY(24px); }
    to   { opacity: 1; transform: translateY(0); }
  }
  .fade-up { animation: fadeUp 0.6s ease forwards; }
  .d1 { animation-delay: 0.05s; opacity: 0; }
  .d2 { animation-delay: 0.12s; opacity: 0; }
  .d3 { animation-delay: 0.19s; opacity: 0; }
  .d4 { animation-delay: 0.26s; opacity: 0; }
  .d5 { animation-delay: 0.33s; opacity: 0; }
  .d6 { animation-delay: 0.40s; opacity: 0; }
  .d7 { animation-delay: 0.47s; opacity: 0; }
  .d8 { animation-delay: 0.54s; opacity: 0; }

  /* Product card */
  .prod-card {
    background: #fff;
    border-radius: 20px;
    border: 1.5px solid #f1f5f9;
    overflow: hidden;
    transition: transform 0.3s ease, box-shadow 0.3s ease, border-color 0.3s ease;
    display: flex;
    flex-direction: column;
  }
  .prod-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 24px 48px rgba(0,0,0,0.10);
    border-color: #bfdbfe;
  }

  /* Image zoom */
  .prod-img-wrap { overflow: hidden; background: #f8fafc; }
  .prod-img-wrap img {
    transition: transform 0.5s ease;
    width: 100%;
    height: 200px;
    object-fit: contain;
    padding: 20px;
  }
  .prod-card:hover .prod-img-wrap img { transform: scale(1.06); }

  /* Brand badge colours */
  .badge-hp      { background: #dbeafe; color: #1d4ed8; }
  .badge-canon   { background: #fee2e2; color: #b91c1c; }
  .badge-brother { background: #fef3c7; color: #b45309; }
  .badge-epson   { background: #d1fae5; color: #065f46; }

  /* Amazon CTA */
  .amz-btn {
    background: linear-gradient(135deg, #f59e0b, #f97316);
    color: #fff;
    font-weight: 700;
    font-size: 13px;
    letter-spacing: 0.03em;
    border-radius: 10px;
    padding: 10px 0;
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    transition: all 0.25s ease;
    text-decoration: none;
    box-shadow: 0 4px 14px rgba(249,115,22,0.3);
  }
  .amz-btn:hover {
    background: linear-gradient(135deg, #f97316, #ea580c);
    box-shadow: 0 8px 24px rgba(249,115,22,0.45);
    transform: translateY(-1px);
    color: #fff;
    text-decoration: none;
  }

  /* Filter tabs */
  .filter-tab {
    padding: 8px 20px;
    border-radius: 999px;
    font-size: 13px;
    font-weight: 600;
    cursor: pointer;
    border: 1.5px solid #e2e8f0;
    background: #fff;
    color: #64748b;
    transition: all 0.2s ease;
  }
  .filter-tab:hover, .filter-tab.active {
    background: #1d4ed8;
    border-color: #1d4ed8;
    color: #fff;
    box-shadow: 0 4px 12px rgba(29,78,216,0.25);
  }

  /* Disclaimer */
  .disclaimer {
    background: #fffbeb;
    border: 1px solid #fde68a;
    border-radius: 12px;
    padding: 12px 18px;
  }
</style>

<div class="aff-root bg-gray-50 min-h-screen pb-20">

  <!-- ── HERO BANNER ── -->
  <div class="relative overflow-hidden py-20 px-4 text-center" style="background: linear-gradient(135deg, #1e3a8a 0%, #1d4ed8 50%, #2563eb 100%);">
    <div class="absolute inset-0 opacity-10" style="background-image: radial-gradient(circle, #fff 1px, transparent 1px); background-size: 28px 28px;"></div>
    <div class="absolute -top-20 -left-20 w-72 h-72 bg-blue-300 opacity-10 rounded-full blur-3xl"></div>
    <div class="absolute -bottom-16 -right-16 w-60 h-60 bg-indigo-300 opacity-10 rounded-full blur-2xl"></div>

    <div class="relative z-10 fade-up d1">
      <span class="inline-block bg-white/15 border border-white/25 text-white text-xs font-semibold tracking-widest uppercase px-4 py-1.5 rounded-full mb-5">Recommended Products</span>
      <h1 class="aff-heading text-5xl lg:text-6xl font-black text-white mb-4 leading-tight">
        Affiliate <span class="text-blue-200">Products</span>
      </h1>
      <p class="text-blue-100 text-lg max-w-xl mx-auto">Top-rated printers handpicked by our experts — trusted by thousands of users worldwide.</p>
    </div>
  </div>

  <div class="max-w-7xl mx-auto px-4 mt-12">

    <!-- ── DISCLAIMER ── -->
    <div class="disclaimer flex items-start gap-3 mb-8 fade-up d1">
      <svg class="w-5 h-5 text-amber-500 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
      </svg>
      <p class="text-amber-800 text-sm">
        <strong>Affiliate Disclosure:</strong> As an Amazon Associate, we earn from qualifying purchases. This helps us keep our support services free for everyone — thank you for your support!
      </p>
    </div>

    <!-- ── FILTER TABS ── -->
    <div class="flex flex-wrap gap-3 mb-10 fade-up d2">
      <button class="filter-tab active" data-filter="all">All Brands</button>
      <button class="filter-tab" data-filter="HP">HP</button>
      <button class="filter-tab" data-filter="Canon">Canon</button>
      <button class="filter-tab" data-filter="Brother">Brother</button>
      <button class="filter-tab" data-filter="Epson">Epson</button>
    </div>

    <!-- ── PRODUCT GRID ── -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6" id="product-grid">

      <?php
      $products = [
        [
          'brand' => 'HP',
          'title' => 'HP Smart-Tank 6001 Wireless Cartridge-Free All-in-One Printer, comes with up to 2 years of ink included',
          'img'   => 'https://m.media-amazon.com/images/I/61QfbI2WNML._AC_SX679_.jpg',
          'url'   => 'https://amzn.to/46LgsgK',
          'delay' => 'd1',
        ],
        [
          'brand' => 'HP',
          'title' => 'HP DeskJet 2755e Wireless Color Inkjet Printer, Print, Scan, Copy, 6 Months of Instant Ink included',
          'img'   => 'https://m.media-amazon.com/images/I/61bKpCb+8BL._AC_SX679_.jpg',
          'url'   => 'https://amzn.to/40QZcTA',
          'delay' => 'd2',
        ],
        [
          'brand' => 'Canon',
          'title' => 'Canon PIXMA TR4720 All-in-One Wireless Printer, Auto Document Feeder, Mobile Printing, Built-in Fax',
          'img'   => 'https://m.media-amazon.com/images/I/71vYeYqdvUL._AC_SX679_.jpg',
          'url'   => 'https://amzn.to/4oGAGPl',
          'delay' => 'd3',
        ],
        [
          'brand' => 'Canon',
          'title' => 'Canon PIXMA G6020 All-in-One Supertank Wireless Printer, Copier & Scanner, Works with Alexa',
          'img'   => 'https://m.media-amazon.com/images/I/61-haZ2J5hL._AC_SX466_.jpg',
          'url'   => 'https://amzn.to/4lddbu0',
          'delay' => 'd4',
        ],
        [
          'brand' => 'Brother',
          'title' => 'Brother HL-L2460DW Wireless Compact Monochrome Laser Printer with Duplex, Mobile Printing',
          'img'   => 'https://m.media-amazon.com/images/I/71VUOHS-8yL._AC_SX679_.jpg',
          'url'   => 'https://amzn.to/46JWXoP',
          'delay' => 'd5',
        ],
        [
          'brand' => 'Brother',
          'title' => 'Brother DCP-L2640DW Wireless Compact Monochrome Multi-Function Laser Printer with Copy and Scan',
          'img'   => 'https://m.media-amazon.com/images/I/71y84TN3gkL._AC_SX679_.jpg',
          'url'   => 'https://amzn.to/40TJmHK',
          'delay' => 'd6',
        ],
        [
          'brand' => 'Epson',
          'title' => 'Epson EcoTank ET-2800 Wireless Color All-in-One Supertank Printer with Scan and Copy - White',
          'img'   => 'https://m.media-amazon.com/images/I/71T9Qb3GPaL._AC_SX679_.jpg',
          'url'   => 'https://amzn.to/47frOtp',
          'delay' => 'd7',
        ],
        [
          'brand' => 'Epson',
          'title' => 'Epson EcoTank ET-4800 Wireless All-in-One Supertank Printer with Scanner, Copier, Fax, ADF, Ethernet',
          'img'   => 'https://m.media-amazon.com/images/I/71SZu6a7+RL._AC_SX679_.jpg',
          'url'   => 'https://amzn.to/3J4AHfp',
          'delay' => 'd8',
        ],
      ];

      foreach ($products as $p):
        $badgeClass = 'badge-' . strtolower($p['brand']);
        $shortTitle = strlen($p['title']) > 80 ? substr($p['title'], 0, 80) . '…' : $p['title'];
      ?>
      <div class="prod-card fade-up <?= $p['delay'] ?>" data-brand="<?= $p['brand'] ?>">

        <!-- Image -->
        <div class="prod-img-wrap">
          <img src="<?= $p['img'] ?>" alt="<?= htmlspecialchars($p['title']) ?>">
        </div>

        <!-- Body -->
        <div class="p-5 flex flex-col flex-1 gap-3">

          <!-- Brand badge -->
          <span class="inline-block self-start text-xs font-bold uppercase tracking-wider px-3 py-1 rounded-full <?= $badgeClass ?>">
            <?= $p['brand'] ?>
          </span>

          <!-- Title -->
          <h3 class="text-gray-800 text-sm font-semibold leading-snug flex-1">
            <?= htmlspecialchars($shortTitle) ?>
          </h3>

          <!-- Rating stars (decorative) -->
          <div class="flex items-center gap-1.5">
            <div class="flex text-amber-400 text-sm">★★★★★</div>
            <span class="text-gray-400 text-xs">Amazon Choice</span>
          </div>

          <!-- CTA -->
          <a href="<?= $p['url'] ?>" target="_blank" rel="noopener sponsored" class="amz-btn mt-1">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"/>
            </svg>
            View on Amazon
          </a>
        </div>

      </div>
      <?php endforeach; ?>

    </div>

    <!-- ── EMPTY STATE (shown by JS when filter has no results) ── -->
    <div id="no-results" class="hidden text-center py-20">
      <div class="w-16 h-16 bg-blue-50 rounded-2xl flex items-center justify-center mx-auto mb-4">
        <svg class="w-8 h-8 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
        </svg>
      </div>
      <h3 class="aff-heading text-xl font-bold text-gray-700 mb-2">No products found</h3>
      <p class="text-gray-400 text-sm">Try selecting a different brand filter.</p>
    </div>

    <!-- ── BOTTOM CTA ── -->
    <div class="mt-16 rounded-2xl overflow-hidden relative" style="background: linear-gradient(135deg, #1e40af, #2563eb);">
      <div class="absolute inset-0 opacity-10" style="background-image: radial-gradient(circle, #fff 1px, transparent 1px); background-size: 20px 20px;"></div>
      <div class="relative z-10 px-8 py-10 flex flex-col sm:flex-row items-center justify-between gap-6">
        <div>
          <h3 class="aff-heading text-2xl font-black text-white mb-1">Need help with your printer?</h3>
          <p class="text-blue-200 text-sm">Our certified experts are available 24/7 to assist you.</p>
        </div>
        <a href="<?= base_url('contact-us') ?>"
           class="flex-shrink-0 bg-white text-blue-700 font-bold text-sm px-8 py-3.5 rounded-xl hover:bg-blue-50 transition-all duration-200 hover:-translate-y-0.5 hover:shadow-lg whitespace-nowrap">
          Get Support →
        </a>
      </div>
    </div>

  </div>
</div>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    const tabs     = document.querySelectorAll('.filter-tab');
    const cards    = document.querySelectorAll('#product-grid .prod-card');
    const noResult = document.getElementById('no-results');

    tabs.forEach(tab => {
      tab.addEventListener('click', function () {
        // Update active tab
        tabs.forEach(t => t.classList.remove('active'));
        this.classList.add('active');

        const filter = this.dataset.filter;
        let visible = 0;

        cards.forEach(card => {
          const brand = card.dataset.brand;
          const show  = filter === 'all' || brand === filter;
          card.style.display = show ? '' : 'none';
          if (show) visible++;
        });

        noResult.classList.toggle('hidden', visible > 0);
      });
    });
  });
</script>