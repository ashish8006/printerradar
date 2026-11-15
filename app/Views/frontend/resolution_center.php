<section class="">
    <div class="max-w-5xl mx-auto pt-8 bg-white shadow-2xl rounded-lg">
        <div class="text-center">
            <h1
                class="text-3xl uppercase font-bold tracking-tight bg-gradient-to-r from-indigo-600 to-purple-600 bg-clip-text text-transparent">
                Resolution Center
            </h1>
            <p class="mt-2 text-black-900 font-semibold">
                To get immediate resolution, contact our certified experts.
            </p>
        </div>

      <div class="p-5 sm:p-7 !pt-0">
                <div class="mt-6 rounded-2xl bg-gradient-to-br from-rose-50 to-white ring-1 ring-rose-200 p-5 sm:p-6">
                    <div class="flex flex-col items-center text-center gap-3">
                        <div class="inline-flex items-center gap-2 rounded-full px-4 py-2">
                            <!-- <i class="fa-solid fa-phone-volume text-rose-600" aria-hidden="true"></i> -->
                            <span class="font-semibold flex items-center text-rose-700 text-base sm:text-lg">WE ARE JUST
                                <img src="<?php echo base_url('asset/images/call-icon.png'); ?>" alt="Phone Icon"
                                    class="mx-2"> CALL AWAY</span>
                        </div>

                        <div class="flex justify-center w-full">
                            <!-- US -->
                            <a href="tel:+18884955479"
                                class="group flex items-center justify-center gap-3 rounded-2xl bg-white ring-1 ring-slate-200 px-4 py-4 sm:px-5 sm:py-5 shadow-sm hover:shadow-md transition max-w-sm w-full"
                                aria-label="Call US number +1 888-495-5479">
                                <div class="flex items-center gap-3">
                                    <img src="<?php echo base_url('asset/images/usflag.jpg');  ?>" alt="US flag"
                                        class="h-10 w-14 rounded-lg ring-1 ring-slate-200 object-cover" />
                                    <div class="text-center">
                                        <div class="text-sm text-slate-600">United States</div>
                                        <div
                                            class="text-lg sm:text-xl font-bold text-slate-900 group-hover:text-indigo-700 transition">
                                            +1 888-495-5479
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="h-10 w-10 rounded-xl bg-indigo-50 ring-1 ring-indigo-100 flex items-center justify-center">
                        <i class="fa-solid fa-arrow-right text-indigo-600" aria-hidden="true"></i>
                      </div> -->
                            </a>
                        </div>

                        <div class="mt-2 text-sm sm:text-base text-slate-700">
                            <i class="fa-solid fa-message text-slate-500 mr-2" aria-hidden="true"></i>
                            Prefer chat? Use the chat widget in the bottom-right and share your printer issue along with model number.
                        </div>
                    </div>
                </div>

                <!-- Self-help option -->
              
                      <div class="flex items-center justify-center mt-8">
                          <a href="<?php echo base_url('resolution-and-troubleshooting'); ?>"
                            class="inline-flex items-center justify-center gap-3 rounded-2xl px-8 py-4 text-lg font-bold text-white bg-gradient-to-r from-indigo-600 to-purple-600 shadow-xl hover:shadow-2xl hover:-translate-y-1 active:translate-y-0 transition-all duration-300 whitespace-nowrap group">
                            CONTINUE TO SELF-TROUBLESHOOTING
                            <i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
                        </a>
                      </div>
            </div>
    </div>
</section>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


<script>
$(document).ready(function() {
    $.ajax({
        url: "<?php echo base_url('send-troubleshooting-email'); ?>",
        method: "POST",
        data: {},
        success: function(response) {
            console.log('Email sent successfully.');
        },
        error: function(xhr, status, error) {
            console.error('Error in sending email: ', error);
        }
    });
});
</script>