<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700;900&family=DM+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">

<style>
  .reviews-root { font-family: 'DM Sans', sans-serif; background-color: #0c1e35; }
  .reviews-heading { font-family: 'Playfair Display', serif; }

  @keyframes fadeUp {
    from { opacity: 0; transform: translateY(24px); }
    to   { opacity: 1; transform: translateY(0); }
  }
  .fade-up { animation: fadeUp 0.65s ease forwards; }
  .delay-1 { animation-delay: 0.08s; opacity: 0; }
  .delay-2 { animation-delay: 0.16s; opacity: 0; }
  .delay-3 { animation-delay: 0.24s; opacity: 0; }
  .delay-4 { animation-delay: 0.32s; opacity: 0; }
  .delay-5 { animation-delay: 0.40s; opacity: 0; }
  .delay-6 { animation-delay: 0.48s; opacity: 0; }

  .review-card {
    background: rgba(255,255,255,0.04);
    border: 1px solid rgba(255,255,255,0.08);
    backdrop-filter: blur(8px);
    transition: transform 0.3s ease, box-shadow 0.3s ease, border-color 0.3s ease, background 0.3s ease;
  }
  .review-card:hover {
    transform: translateY(-4px);
    background: rgba(255,255,255,0.07);
    border-color: rgba(59,130,246,0.4);
    box-shadow: 0 20px 40px rgba(0,0,0,0.3);
  }

  /* Star rating */
  .stars { color: #fbbf24; letter-spacing: 2px; }

  /* Quote mark decoration */
  .quote-mark {
    font-family: 'Playfair Display', serif;
    font-size: 5rem;
    line-height: 1;
    color: rgba(59,130,246,0.25);
    position: absolute;
    top: -8px;
    left: 16px;
  }

  /* Pagination overrides */
  .pager-wrap a, .pager-wrap span {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    min-width: 38px;
    height: 38px;
    border-radius: 10px;
    font-size: 14px;
    font-weight: 500;
    padding: 0 10px;
    margin: 0 3px;
    transition: all 0.2s ease;
    border: 1px solid rgba(255,255,255,0.12);
    color: rgba(255,255,255,0.6);
    text-decoration: none;
  }
  .pager-wrap a:hover {
    background: #3b82f6;
    border-color: #3b82f6;
    color: #fff;
  }
  .pager-wrap .active, .pager-wrap span.active {
    background: #3b82f6;
    border-color: #3b82f6;
    color: #fff;
  }

  /* Grid dots background */
  .dot-bg {
    background-image: radial-gradient(circle, rgba(255,255,255,0.06) 1px, transparent 1px);
    background-size: 28px 28px;
  }
</style>

<div class="reviews-root dot-bg min-h-screen py-0">

  <!-- ── HERO BANNER ── -->
  <div class="relative overflow-hidden py-20 px-4 text-center" style="background: linear-gradient(135deg, #0f2847 0%, #0c1e35 60%, #101c2e 100%);">
    <!-- Glowing orbs -->
    <div class="absolute top-0 left-1/4 w-72 h-72 bg-blue-600 opacity-10 rounded-full blur-3xl pointer-events-none"></div>
    <div class="absolute bottom-0 right-1/4 w-56 h-56 bg-blue-400 opacity-10 rounded-full blur-2xl pointer-events-none"></div>

    <div class="relative z-10 fade-up">
      <span class="inline-block border border-blue-500/40 bg-blue-500/10 text-blue-300 text-xs font-semibold tracking-widest uppercase px-4 py-1.5 rounded-full mb-6">Testimonials</span>
      <h1 class="reviews-heading text-5xl lg:text-6xl font-black text-white mb-4 leading-tight">
        Client <span class="text-blue-400">Reviews</span>
      </h1>
      <p class="text-slate-400 text-lg max-w-2xl mx-auto">Real experiences from real customers. Here's what people say.</p>

      <!-- Stats row -->
      <div class="flex flex-wrap items-center justify-center gap-8 mt-10">
        <?php $stats = [['⭐ 4.9/5', 'Average Rating'], ['10K+', 'Happy Customers'], ['98%', 'Resolution Rate']];
        foreach ($stats as $s): ?>
        <div class="text-center">
          <p class="reviews-heading text-3xl font-black text-white"><?= $s[0] ?></p>
          <p class="text-slate-400 text-sm mt-1"><?= $s[1] ?></p>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>

  <!-- ── REVIEWS GRID ── -->
  <div class="max-w-6xl mx-auto px-4 py-16">

    <?php if (!empty($reviews)): ?>

      <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
        <?php foreach ($reviews as $index => $review):
          $delay = ($index % 6) + 1;
          // Generate initials avatar
          $name   = esc($review['name']);
          $initials = strtoupper(implode('', array_map(fn($w) => $w[0], array_slice(explode(' ', trim($name)), 0, 2))));
          $colors = ['#3b82f6','#8b5cf6','#06b6d4','#10b981','#f59e0b','#ef4444'];
          $avatarColor = $colors[$index % count($colors)];
        ?>
        <div class="review-card rounded-2xl p-6 relative fade-up delay-<?= $delay ?>">
          <!-- Big quote mark -->
          <span class="quote-mark" aria-hidden="true">"</span>

          <!-- Star rating (static 5 stars) -->
          <div class="stars text-sm mb-4 relative z-10">★★★★★</div>

          <!-- Review text -->
          <p class="text-slate-300 text-sm leading-relaxed mb-6 relative z-10">
            <?= esc($review['review']) ?>
          </p>

          <!-- Divider -->
          <div class="border-t border-white/8 pt-4 flex items-center gap-4">
            <!-- Avatar -->
            <div class="w-11 h-11 rounded-full flex items-center justify-center text-white text-sm font-bold flex-shrink-0"
                 style="background: <?= $avatarColor ?>;">
              <?= $initials ?>
            </div>
            <!-- Name + Date -->
            <div>
              <p class="text-white font-semibold text-sm"><?= $name ?></p>
              <time class="text-slate-500 text-xs" datetime="<?= esc($review['created_at']) ?>">
                <?= date('d M, Y', strtotime($review['created_at'])) ?>
              </time>
            </div>
            <!-- Verified badge -->
            <div class="ml-auto flex items-center gap-1.5 bg-green-500/10 border border-green-500/20 rounded-full px-3 py-1">
              <svg class="w-3 h-3 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
              </svg>
              <span class="text-green-400 text-xs font-medium">Verified</span>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
      </div>

    <?php else: ?>

      <!-- Empty state -->
      <div class="text-center py-20 fade-up">
        <div class="w-20 h-20 bg-white/5 rounded-2xl flex items-center justify-center mx-auto mb-5 border border-white/10">
          <svg class="w-10 h-10 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
          </svg>
        </div>
        <h3 class="reviews-heading text-2xl font-bold text-white mb-2">No Reviews Yet</h3>
        <p class="text-slate-500">Be the first to share your experience with us.</p>
      </div>

    <?php endif; ?>

    <!-- ── PAGINATION ── -->
    <?php if (!empty($reviews)): ?>
    <div class="pager-wrap flex items-center justify-center gap-1 mt-12 flex-wrap">
      <?= $pager->links('reviews', 'default_full') ?>
    </div>
    <?php endif; ?>

    <!-- ── CTA BANNER ── -->
    <div class="mt-16 rounded-2xl overflow-hidden relative" style="background: linear-gradient(135deg, #1e40af, #1d4ed8 50%, #2563eb);">
      <div class="absolute inset-0 opacity-10" style="background-image: radial-gradient(circle, #fff 1px, transparent 1px); background-size: 20px 20px;"></div>
      <div class="relative z-10 px-8 py-10 flex flex-col sm:flex-row items-center justify-between gap-6">
        <div>
          <h3 class="reviews-heading text-2xl font-bold text-white mb-1">Had a great experience?</h3>
          <p class="text-blue-200 text-sm">We'd love to hear from you. Share your feedback with our community.</p>
        </div>

        <span
          id="openReviewModal"
          class="flex-shrink-0 bg-white cursor-pointer text-blue-700 font-bold text-sm px-7 py-3.5 rounded-xl hover:bg-blue-50 transition-all duration-200 hover:-translate-y-0.5 hover:shadow-lg whitespace-nowrap"
        >
          Leave a Review →
        </span>
      </div>
    </div>

  </div>
</div>