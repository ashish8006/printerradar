<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700;900&family=DM+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">

<style>
  .review-ui { font-family: 'DM Sans', sans-serif; }
  .review-heading { font-family: 'Playfair Display', serif; }

  /* Modal backdrop */
  #reviewModal {
    display: none;
    position: fixed;
    inset: 0;
    z-index: 9999;
    background: rgba(8, 20, 40, 0.75);
    backdrop-filter: blur(6px);
    align-items: center;
    justify-content: center;
    padding: 16px;
  }
  #reviewModal.active { display: flex; }

  @keyframes modalIn {
    from { opacity: 0; transform: scale(0.94) translateY(16px); }
    to   { opacity: 1; transform: scale(1) translateY(0); }
  }
  .modal-box { animation: modalIn 0.3s cubic-bezier(.22,.68,0,1.2) forwards; }

  /* Star selector */
  .star-group { direction: rtl; }
  .star-group input { display: none; }
  .star-group label {
    font-size: 28px;
    color: #d1d5db;
    cursor: pointer;
    transition: color 0.15s ease, transform 0.15s ease;
  }
  .star-group input:checked ~ label,
  .star-group label:hover,
  .star-group label:hover ~ label {
    color: #fbbf24;
  }
  .star-group label:hover { transform: scale(1.2); }

  /* Input focus */
  .rev-input:focus { outline: none; box-shadow: 0 0 0 3px rgba(59,130,246,0.25); border-color: #3b82f6; }
  .rev-input { transition: border-color 0.2s, box-shadow 0.2s; }
</style>


<!-- ══════════════════════
     MODAL
══════════════════════ -->
<div id="reviewModal" role="dialog" aria-modal="true" aria-labelledby="reviewModalTitle">
  <div class="modal-box review-ui bg-white rounded-3xl shadow-2xl w-full max-w-md overflow-hidden">

    <!-- Header -->
    <div class="relative px-8 py-7" style="background: linear-gradient(135deg, #1e40af, #2563eb);">
      <!-- Dot pattern -->
      <div class="absolute inset-0 opacity-10" style="background-image: radial-gradient(circle, #fff 1px, transparent 1px); background-size: 18px 18px;"></div>
      <!-- Glow -->
      <div class="absolute -top-10 -right-10 w-40 h-40 bg-blue-300 opacity-20 rounded-full blur-2xl pointer-events-none"></div>

      <div class="relative z-10 flex items-start justify-between">
        <div>
          <span class="inline-block bg-white/15 border border-white/25 text-white text-xs font-semibold tracking-widest uppercase px-3 py-1 rounded-full mb-3">Your Voice Matters</span>
          <h2 class="review-heading text-2xl font-black text-white" id="reviewModalTitle">Submit Your Review</h2>
          <p class="text-blue-200 text-sm mt-1">Share your experience with our team.</p>
        </div>
        <button
          id="closeReviewModal"
          class="w-9 h-9 bg-white/15 hover:bg-white/30 rounded-full flex items-center justify-center transition flex-shrink-0 mt-1"
          aria-label="Close"
        >
          <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
          </svg>
        </button>
      </div>
    </div>

    <!-- Body -->
    <div class="px-8 py-7">
      <form action="<?= base_url('submit-review') ?>" method="post" id="review_form" class="space-y-5">

        <!-- Name -->
        <div>
          <label for="rev_name" class="block text-gray-700 text-sm font-semibold mb-1.5">
            Your Name <span class="text-red-400">*</span>
          </label>
          <div class="relative">
            <span class="absolute left-3.5 top-1/2 -translate-y-1/2 text-gray-400">
              <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
              </svg>
            </span>
            <input
              type="text"
              name="user_name"
              id="rev_name"
              required
              placeholder="e.g. John Doe"
              class="rev-input w-full bg-gray-50 border border-gray-200 rounded-xl pl-10 pr-4 py-3 text-gray-800 placeholder-gray-300 text-sm"
            >
          </div>
        </div>
        <!-- Review -->
        <div>
          <label for="rev_review" class="block text-gray-700 text-sm font-semibold mb-1.5">
            Your Review <span class="text-red-400">*</span>
          </label>
          <textarea
            name="review"
            id="rev_review"
            rows="4"
            required
            placeholder="Tell us about your experience..."
            class="rev-input w-full bg-gray-50 border border-gray-200 rounded-xl px-4 py-3 text-gray-800 placeholder-gray-300 text-sm resize-none"
          ></textarea>
          <p class="text-gray-400 text-xs mt-1">Be honest — your feedback helps others.</p>
        </div>

        <!-- Actions -->
        <div class="flex gap-3 pt-1">
          <button
            type="button"
            id="cancelReviewModal"
            class="flex-1 bg-gray-100 hover:bg-gray-200 text-gray-600 font-semibold py-3 rounded-xl transition text-sm"
          >
            Cancel
          </button>
          <button
            type="submit"
            class="flex-1 bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 rounded-xl transition-all duration-200 hover:shadow-lg hover:shadow-blue-200 hover:-translate-y-0.5 text-sm flex items-center justify-center gap-2"
          >
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/>
            </svg>
            Submit Review
          </button>
        </div>

      </form>
    </div>


  </div>
</div>


<script>
  document.addEventListener('DOMContentLoaded', function () {
    const modal     = document.getElementById('reviewModal');
    const closeBtn  = document.getElementById('closeReviewModal');
    const cancelBtn = document.getElementById('cancelReviewModal');

    function openModal() {
      modal.classList.add('active');
      document.body.style.overflow = 'hidden';
    }

    function closeModal() {
      modal.classList.remove('active');
      document.body.style.overflow = '';
    }

    // Support multiple trigger buttons anywhere on the page
    document.querySelectorAll('#openReviewModal').forEach(btn => {
      btn.addEventListener('click', openModal);
    });

    closeBtn.addEventListener('click', closeModal);
    cancelBtn.addEventListener('click', closeModal);

    // Close on backdrop click
    modal.addEventListener('click', e => {
      if (e.target === modal) closeModal();
    });

    // Close on Escape key
    document.addEventListener('keydown', e => {
      if (e.key === 'Escape' && modal.classList.contains('active')) closeModal();
    });
  });
</script>