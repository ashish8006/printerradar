<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700;900&family=DM+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">

<style>
  .blog-root { font-family: 'DM Sans', sans-serif; }
  .blog-heading { font-family: 'Playfair Display', serif; }

  @keyframes fadeUp {
    from { opacity: 0; transform: translateY(24px); }
    to   { opacity: 1; transform: translateY(0); }
  }
  .fade-up  { animation: fadeUp 0.65s ease forwards; }
  .delay-1  { animation-delay: 0.1s; opacity: 0; }
  .delay-2  { animation-delay: 0.2s; opacity: 0; }
  .delay-3  { animation-delay: 0.3s; opacity: 0; }
  .delay-4  { animation-delay: 0.4s; opacity: 0; }

  .blog-card { transition: transform 0.3s ease, box-shadow 0.3s ease; }
  .blog-card:hover { transform: translateY(-6px); box-shadow: 0 24px 48px rgba(0,0,0,0.10); }

  .blog-card .card-img { transition: transform 0.5s ease; }
  .blog-card:hover .card-img { transform: scale(1.05); }

  .read-more-arrow { transition: transform 0.25s ease; display: inline-block; }
  .blog-card:hover .read-more-arrow { transform: translateX(4px); }

  .sidebar-card { border-left: 3px solid #3b82f6; }

  .search-input:focus { outline: none; box-shadow: 0 0 0 3px rgba(59,130,246,0.2); }

  .recent-item { transition: background 0.2s ease; }
  .recent-item:hover { background: #eff6ff; }

  /* Breadcrumb separator */
  .bc-sep { color: rgba(255,255,255,0.5); }
</style>

<div class="blog-root">

  <!-- ── HERO / BREADCRUMB ── -->
  <div class="bg-gradient-to-br from-blue-800 via-blue-700 to-blue-500 relative overflow-hidden py-24 px-4">
    <!-- Decorative circles -->
    <div class="absolute -top-24 -right-24 w-80 h-80 bg-white opacity-5 rounded-full pointer-events-none"></div>
    <div class="absolute -bottom-16 -left-16 w-60 h-60 bg-white opacity-5 rounded-full pointer-events-none"></div>
    <!-- Grid pattern overlay -->
    <div class="absolute inset-0 opacity-5" style="background-image: radial-gradient(circle, #fff 1px, transparent 1px); background-size: 32px 32px;"></div>

    <div class="relative z-10 text-center fade-up">
      <span class="inline-block bg-white/15 border border-white/25 text-white text-xs font-semibold tracking-widest uppercase px-4 py-1.5 rounded-full mb-5">Knowledge Hub</span>
      <h1 class="blog-heading text-5xl lg:text-6xl font-black text-white mb-5 leading-tight">Buying Guides</h1>
      <!-- Breadcrumb -->
      <nav class="flex items-center justify-center gap-2 text-sm">
        <a href="<?= base_url('/') ?>" class="text-blue-200 hover:text-white transition font-medium">Home</a>
        <span class="bc-sep">›</span>
        <a href="<?= base_url('buying-guides') ?>" class="text-white font-semibold">Buying Guides</a>
      </nav>
    </div>
  </div>

  <!-- ── MAIN CONTENT ── -->
  <div class="bg-gray-50 py-16 px-4">
    <div class="max-w-6xl mx-auto">
      <div class="grid lg:grid-cols-3 gap-10">

        <!-- ══════════════════════════════════
             BLOG CARDS — left 2/3
        ══════════════════════════════════ -->
        <div class="lg:col-span-2">

          <?php if (!empty($blogs)): ?>
            <div class="grid sm:grid-cols-2 gap-7">

              <?php foreach ($blogs as $index => $b):
                $img = (isset($b['image']) && !empty($b['image']))
                  ? base_url('uploads/' . $b['image'])
                  : base_url('assets/img/blog-placeholder.jpg');
                $delay = ($index % 4) * 0.1;
              ?>
              <article
                class="blog-card bg-white rounded-2xl overflow-hidden shadow-sm border border-gray-100 fade-up"
                style="animation-delay: <?= $delay ?>s; opacity: 0;"
              >
                <!-- Image -->
                <a href="<?= base_url('buying-guide/' . esc($b['slug'])) ?>" class="block overflow-hidden h-52 bg-gray-100">
                  <img
                    class="card-img w-full h-full object-cover"
                    src="<?= $img ?>"
                    alt="<?= esc($b['title']) ?>"
                  >
                </a>

                <!-- Body -->
                <div class="p-6">
                  <!-- Meta -->
                  <div class="flex items-center gap-4 mb-4">
                    <span class="flex items-center gap-1.5 text-gray-400 text-xs">
                      <svg class="w-3.5 h-3.5 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                      </svg>
                      <?= esc($b['author'] ?? 'Admin') ?>
                    </span>
                    <span class="flex items-center gap-1.5 text-gray-400 text-xs">
                      <svg class="w-3.5 h-3.5 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                      </svg>
                      <?= isset($b['created_at']) ? date('d M, Y', strtotime($b['created_at'])) : '' ?>
                    </span>
                  </div>

                  <!-- Title -->
                  <h2 class="blog-heading text-lg font-bold text-gray-900 mb-3 leading-snug line-clamp-2">
                    <a href="<?= base_url('buying-guide/' . esc($b['slug'])) ?>" class="hover:text-blue-600 transition">
                      <?= esc($b['title']) ?>
                    </a>
                  </h2>

                  <!-- Excerpt -->
                  <p class="text-gray-500 text-sm leading-relaxed mb-5 line-clamp-3">
                    <?= substr(strip_tags($b['description']), 0, 110) ?>…
                  </p>

                  <!-- Read more -->
                  <a
                    href="<?= base_url('buying-guide/' . esc($b['slug'])) ?>"
                    class="inline-flex items-center gap-2 text-blue-600 hover:text-blue-700 text-sm font-semibold transition"
                  >
                    Read More
                    <span class="read-more-arrow">
                      <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                      </svg>
                    </span>
                  </a>
                </div>
              </article>
              <?php endforeach; ?>

            </div><!-- /grid -->

          <?php else: ?>
            <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-16 text-center fade-up">
              <div class="w-16 h-16 bg-blue-50 rounded-2xl flex items-center justify-center mx-auto mb-4">
                <svg class="w-8 h-8 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                </svg>
              </div>
              <h3 class="blog-heading text-xl font-bold text-gray-700 mb-2">No Guides Found</h3>
              <p class="text-gray-400 text-sm">Try adjusting your search or check back soon for new guides.</p>
            </div>
          <?php endif; ?>

          <!-- Pagination placeholder -->
          <div class="mt-10" id="pagination-placeholder"></div>

        </div>
        <!-- /blog col -->


        <!-- ══════════════════════════════════
             SIDEBAR — right 1/3
        ══════════════════════════════════ -->
        <aside class="space-y-7 fade-up delay-2">

          <!-- Search -->
          <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-6">
            <h3 class="blog-heading text-lg font-bold text-gray-900 mb-4">Search Guides</h3>
            <form action="<?= base_url('buying-guides') ?>" method="get" class="flex gap-2">
              <input
                name="q"
                value="<?= esc(\Config\Services::request()->getGet('q')) ?>"
                type="text"
                placeholder="Keywords..."
                class="search-input flex-1 bg-gray-50 border border-gray-200 rounded-xl px-4 py-3 text-sm text-gray-800 placeholder-gray-300 transition"
              >
              <button
                type="submit"
                class="w-12 h-12 bg-blue-600 hover:bg-blue-700 text-white rounded-xl flex items-center justify-center transition flex-shrink-0"
              >
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                </svg>
              </button>
            </form>
          </div>

          <!-- Recent Posts -->
          <?php if (!empty($recent)): ?>
          <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-6">
            <div class="flex items-center gap-3 mb-5">
              <span class="w-1 h-6 bg-blue-500 rounded-full"></span>
              <h3 class="blog-heading text-lg font-bold text-gray-900">Recent Posts</h3>
            </div>
            <div class="space-y-3">
              <?php foreach ($recent as $r):
                $rimg = (isset($r['image']) && !empty($r['image']))
                  ? base_url('uploads/' . $r['image'])
                  : base_url('assets/img/blog-placeholder.jpg');
              ?>
              <a
                href="<?= base_url('buying-guide/' . esc($r['slug'])) ?>"
                class="recent-item flex items-center gap-4 rounded-xl p-2 -mx-2 group"
              >
                <div class="w-16 h-16 rounded-xl overflow-hidden bg-gray-100 flex-shrink-0">
                  <img
                    src="<?= $rimg ?>"
                    alt="<?= esc($r['title']) ?>"
                    class="w-full h-full object-cover group-hover:scale-105 transition duration-300"
                  >
                </div>
                <div class="flex-1 min-w-0">
                  <p class="text-gray-800 text-sm font-semibold leading-snug line-clamp-2 group-hover:text-blue-600 transition">
                    <?= esc($r['title']) ?>
                  </p>
                  <?php if (!empty($r['created_at'])): ?>
                  <p class="text-gray-400 text-xs mt-1"><?= date('d M, Y', strtotime($r['created_at'])) ?></p>
                  <?php endif; ?>
                </div>
                <svg class="w-4 h-4 text-gray-300 group-hover:text-blue-400 transition flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                </svg>
              </a>
              <?php endforeach; ?>
            </div>
          </div>
          <?php endif; ?>

          <!-- Promo / Image banner -->
          <div class="rounded-2xl overflow-hidden shadow-sm relative">
            <img
              src="<?= base_url('asset/images/repairman-repairing1.jpg') ?>"
              alt="Promotion"
              class="w-full object-cover"
              style="aspect-ratio:4/3;"
            >
            <!-- Overlay CTA -->
            <div class="absolute inset-0 bg-gradient-to-t from-blue-900/80 to-transparent flex flex-col justify-end p-6">
              <p class="text-blue-200 text-xs font-semibold uppercase tracking-widest mb-1">Need Help?</p>
              <h4 class="blog-heading text-white text-xl font-bold mb-3">Talk to an Expert</h4>
              <a
                href="<?= base_url('contact-us') ?>"
                class="inline-block bg-white text-blue-700 text-sm font-bold px-5 py-2.5 rounded-xl hover:bg-blue-50 transition"
              >
                Contact Us →
              </a>
            </div>
          </div>

          <!-- Quick tip card -->
          <div class="bg-blue-600 rounded-2xl p-6 text-white">
            <div class="w-10 h-10 bg-white/20 rounded-xl flex items-center justify-center mb-4">
              <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
              </svg>
            </div>
            <h4 class="blog-heading text-lg font-bold mb-2">Not sure what to buy?</h4>
            <p class="text-blue-100 text-sm leading-relaxed mb-4">Our certified experts can guide you to the perfect printer for your needs.</p>
            <a
              href="<?= base_url('contact-us') ?>"
              class="inline-block bg-white text-blue-700 text-sm font-bold px-5 py-2.5 rounded-xl hover:bg-blue-50 transition"
            >
              Get Free Advice →
            </a>
          </div>

        </aside>
        <!-- /sidebar -->

      </div>
    </div>
  </div>

</div>