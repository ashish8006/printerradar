<div class="quizcontainer bg-slate-50 px-4 sm:px-6 lg:px-8 py-8">
  <div class="quiz-main">
    <div class="container show-section">
      <section class="steps">
        <div class="max-w-5xl mx-auto">
          <!-- Header -->
          <div class="bg-white rounded-2xl shadow-lg ring-1 ring-slate-200 p-6 sm:p-8">
            <div class="flex flex-col items-center text-center">

              <h1 class="mt-4 text-2xl sm:text-4xl font-semibold flex gap-4 justify-center items-center tracking-tight text-slate-900">
              <span class="h-16 w-16 sm:h-20 sm:w-20 rounded-2xl bg-emerald-50 ring-1 ring-emerald-100 flex items-center justify-center shadow-sm">
                <i class="fa-solid fa-circle-check text-emerald-600 text-3xl sm:text-4xl" aria-hidden="true"></i>
              </span>
              THANK YOU FOR VISITING!
              </h1>

              <h3 class="mt-2 text-lg sm:text-2xl font-semibold text-slate-700">
                <?php echo isset($formData['name']) ? htmlspecialchars(ucwords($formData['name'])) : ''; ?>
              </h3>
<?php if(!empty($formData['receive_call']) && $formData['receive_call'] == 'Yes'): ?>
              <p class="mt-3 text-base sm:text-lg text-slate-600 max-w-2xl">
               Our team will reach out to you shortly to provide expert assistance with your printer issue. We look forward to helping you get back to printing smoothly!
              </p>
              <?php endif; ?>
              
            </div>
          </div>

          <!-- What sets us apart + message -->
          <div class="mt-6 bg-white rounded-2xl shadow-lg ring-1 ring-slate-200 overflow-hidden">
            <div class="p-6 sm:p-8">
              <div class="grid grid-cols-1 lg:grid-cols-12 gap-6">
                <!-- Left: What Sets Us Apart -->
                <div class="lg:col-span-5">
                  <div class="rounded-2xl bg-gradient-to-br from-slate-900 to-slate-800 p-6 sm:p-7 shadow-sm">
                    <div class="flex items-start gap-4">
                      <div class="h-12 w-12 rounded-2xl bg-white/10 ring-1 ring-white/15 flex items-center justify-center shrink-0">
                        <i class="fa-solid fa-star text-white text-xl" aria-hidden="true"></i>
                      </div>
                      <div class="min-w-0">
                        <h3 class="text-xl sm:text-2xl font-semibold text-white">
                          What Sets Us Apart
                        </h3>
                        <p class="mt-1 text-sm sm:text-base text-slate-200">
                          Simple, secure, and expert-led help.
                        </p>
                      </div>
                    </div>

                    <div class="mt-5 space-y-3">
                      <div class="flex items-start gap-3 text-white/95">
                        <i class="fa-solid fa-check text-emerald-300 mt-1" aria-hidden="true"></i>
                        <span class="text-sm sm:text-base">Free consultation & troubleshooting</span>
                      </div>

                      <div class="flex items-start gap-3 text-white/95">
                        <i class="fa-solid fa-certificate text-emerald-300 mt-1" aria-hidden="true"></i>
                        <span class="text-sm sm:text-base">Trusted, experienced, and certified experts</span>
                      </div>

                      <div class="flex items-start gap-3 text-white/95">
                        <i class="fa-solid fa-lock text-emerald-300 mt-1" aria-hidden="true"></i>
                        <span class="text-sm sm:text-base">Security and privacy assurance</span>
                      </div>

                      <div class="flex items-start gap-3 text-white/95">
                        <i class="fa-solid fa-comments text-emerald-300 mt-1" aria-hidden="true"></i>
                        <span class="text-sm sm:text-base">Quick resolution available 24×7 on chat and phone</span>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Right: Thank you message -->
                <div class="lg:col-span-7">
                  <div class="rounded-2xl bg-slate-50 ring-1 ring-slate-200 p-6 sm:p-7 h-full">
                    <div class="flex items-start gap-4">
                      <div class="h-12 w-12 rounded-2xl bg-white ring-1 ring-slate-200 flex items-center justify-center shrink-0">
                        <i class="fa-solid fa-heart text-rose-500 text-xl" aria-hidden="true"></i>
                      </div>
                      <div>
                        <h3 class="text-xl sm:text-2xl font-semibold text-slate-900">
                          We appreciate your help
                        </h3>
                        <p class="mt-2 text-base sm:text-lg leading-relaxed text-slate-700">
                          We appreciate your time and interest with us.
                          Your help means the world to us! If you still have any questions or need assistance,
                          please don’t hesitate to reach out. Happy printing!
                        </p>

                        <div class="mt-5 flex flex-col sm:flex-row sm:items-center gap-3">
                          <a
                            href="<?php echo base_url('/') ?>"
                            class="inline-flex items-center justify-center gap-3 rounded-2xl bg-emerald-600 px-6 py-4 text-base sm:text-lg font-semibold text-white shadow-lg
                                   hover:bg-emerald-700 focus:outline-none focus:ring-4 focus:ring-emerald-200 active:scale-[0.99] transition"
                          >
                            Home
                            <i class="fa-solid fa-house" aria-hidden="true"></i>
                          </a>

                          <!-- <div class="text-sm sm:text-base text-slate-600 flex items-center gap-2">
                            <i class="fa-solid fa-circle-info text-slate-500" aria-hidden="true"></i>
                            You can also use the chat widget anytime.
                          </div> -->
                        </div>
                      </div>
                    </div>

                    <!-- <div class="mt-6 grid grid-cols-1 sm:grid-cols-2 gap-3">
                      <div class="rounded-2xl bg-white ring-1 ring-slate-200 p-4">
                        <div class="flex items-center gap-3">
                          <div class="h-10 w-10 rounded-xl bg-indigo-50 ring-1 ring-indigo-100 flex items-center justify-center">
                            <i class="fa-solid fa-envelope text-indigo-600" aria-hidden="true"></i>
                          </div>
                          <div>
                            <div class="font-semibold text-slate-900">Email updates</div>
                            <div class="text-sm text-slate-600">Step-by-step guidance sent to you</div>
                          </div>
                        </div>
                      </div>

                      <div class="rounded-2xl bg-white ring-1 ring-slate-200 p-4">
                        <div class="flex items-center gap-3">
                          <div class="h-10 w-10 rounded-xl bg-indigo-50 ring-1 ring-indigo-100 flex items-center justify-center">
                            <i class="fa-solid fa-phone text-indigo-600" aria-hidden="true"></i>
                          </div>
                          <div>
                            <div class="font-semibold text-slate-900">Call help</div>
                            <div class="text-sm text-slate-600">Certified experts available</div>
                          </div>
                        </div>
                      </div>
                    </div> -->

                  </div>
                </div>
              </div>
            </div>

            <!-- Footer strip -->
            <div class="bg-white border-t border-slate-200 px-6 sm:px-8 py-4">
              <div class="flex flex-col sm:flex-row items-center justify-end gap-2 text-sm sm:text-base text-slate-600">
               
                <div class="flex items-center text-end gap-2">
                  <i class="fa-solid fa-print text-slate-500" aria-hidden="true"></i>
                  Thank you, and happy printing!
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>
</div>