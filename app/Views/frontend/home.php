<div class="hero-section">
    <div class="hero-content-with-bg">
      <!-- Main Form Card -->
      <div class="">

        <!-- Form Header -->
        <div style="margin-bottom: 50px;">
          <h2 class="form-title text-5xl font-bold text-[#0eb213] mb-4">
          SELECT YOUR <span class="font-bold ms-2 tracking-tight text-[#0eb213]"> PRINTER BRAND</span>
          </h2>
          <p class="form-subtitle">
        Choose your printer manufacturer from the list below to access detailed, step-by-step guidance for diagnosing and resolving common printer issues, including appearing offline, wireless setup, printing blank pages, displayed error codes, and scanner or multifunction failures.

        </p>
        </div>

        <!-- Brand Selection Form -->
        <form action="<?php echo base_url('/under_stand_the_issue') ?>" method="post" onclick="this.submit();">

          <!-- Brand Grid -->
          <div class="grid-4-cols">

             <!-- Canon Option -->
            <label style="cursor: pointer;">
              <input type="radio" name="printer_brand" value="Canon" style="display: none;">
              <div class="brand-card">
                <div class="brand-card-check">
                  <i class="fas fa-check"></i>
                </div>
                <div class="brand-card-img">
                  <img src="<?php echo base_url('asset/images/canonlogo.png') ?>" alt="Canon Printer Logo">
                </div>
              </div>
            </label>

            <!-- HP Option -->
            <label style="cursor: pointer;">
              <input type="radio" name="printer_brand" value="HP"  style="display: none;">
              <div class="brand-card shadow-lg">
                <div class="brand-card-check">
                  <i class="fas fa-check"></i>
                </div>
                <div class="brand-card-img">
                  <img src="<?php echo base_url('asset/images/hplogo.png') ?>" alt="HP Printer Logo">
                </div>
              </div>
            </label>

            <!-- Brother Option -->
            <label style="cursor: pointer;">
              <input type="radio" name="printer_brand" value="Brother" style="display: none;">
              <div class="brand-card">
                <div class="brand-card-check">
                  <i class="fas fa-check"></i>
                </div>
                <div class="brand-card-img">
                  <img src="<?php echo base_url('asset/images/brotherprinterlogo.png') ?>" alt="Brother Printer Logo">
                </div>
              </div>
            </label>

            <!-- Epson Option -->
            <label style="cursor: pointer;">
              <input type="radio" name="printer_brand" value="Epson" style="display: none;">
              <div class="brand-card">
                <div class="brand-card-check">
                  <i class="fas fa-check"></i>
                </div>
                <div class="brand-card-img">
                  <img src="<?php echo base_url('asset/images/epsonlogo1.png') ?>" alt="Epson Printer Logo">
                </div>
              </div>
            </label>
          </div>

          <!-- <div class="flex-center">
            <button type="submit" class="btn-primary">
              <i class="fas fa-arrow-right btn-icon"></i>
              <span>Get Started Now</span>
            </button>
          </div> -->
        </form>

      </div>

         <div class="grid-3-cols" style="margin: 50px; 0px">
            <div class="feature-box feature-1">
              <div class="feature-box-icon">
                <i class="fas fa-check-circle"></i>
              </div>
              <div class="feature-box-text">
                <h4>Easy to Follow</h4>
                <p>Simple step-by-step instructions anyone can understand</p>
              </div>
            </div>

            <div class="feature-box feature-2">
              <div class="feature-box-icon">
                <i class="fas fa-headset"></i>
              </div>
              <div class="feature-box-text">
                <h4>Expert Help</h4>
                <p>Professional help available 24/7 when you need it</p>
              </div>
            </div>

            <div class="feature-box feature-3">
              <div class="feature-box-icon">
                <i class="fas fa-bolt"></i>
              </div>
              <div class="feature-box-text">
                <h4>Quick Solutions</h4>
                <p>Get help from home or office</p>
              </div>
            </div>
          </div>
    </div>

    <!-- Trust Section (Outside Background) -->
    <div style="text-align: center; margin-top: 60px; padding: 30px; background: white; border-radius: 16px; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);">
      <p style="font-size: 18px; color: #475569; margin-bottom: 24px; font-weight: 600;">
        <i class="fas fa-shield-alt" style="color: #0052cc; margin-right: 10px;"></i>
        Trusted by Thousands of Users Worldwide
      </p>

      <div style="display: flex; justify-content: center; gap: 30px; flex-wrap: wrap;">
        <div style="display: flex; align-items: center; gap: 10px;">
          <i class="fas fa-check-circle" style="color: #10b981; font-size: 22px;"></i>
          <span style="font-size: 16px; color: #475569; font-weight: 600;">No Store Visits Required</span>
        </div>
        <div style="display: flex; align-items: center; gap: 10px;">
          <i class="fas fa-users" style="color: #0052cc; font-size: 22px;"></i>
          <span style="font-size: 16px; color: #475569; font-weight: 600;">50K+ Happy Users</span>
        </div>
        <div style="display: flex; align-items: center; gap: 10px;">
          <i class="fas fa-lock" style="color: #f59e0b; font-size: 22px;"></i>
          <span style="font-size: 16px; color: #475569; font-weight: 600;">Secure & Safe</span>
        </div>
      </div>
    </div>

    <!-- Disclaimer (Outside Background) -->
    <div class="pt-10 disclaimer-section">
       <p class="text-sm text-center text-gray-800 leading-relaxed !hover:text-gray-300 transition-colors duration-300">
              <strong>Disclaimer : </strong>Printerradar operates as an independent third-party help site. We are not affiliated
              with, endorsed by, or connected to any printer brands shown here. We provide troubleshooting guides and
              expert tips to help fix printer issues. We are not liable for any damage that may occur while following
              our instructions.

          </p>
    </div>
  </div>
  
  