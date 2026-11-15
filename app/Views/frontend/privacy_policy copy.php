<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700;900&family=DM+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">

<style>
  .pp-root { font-family: 'DM Sans', sans-serif; }
  .pp-heading { font-family: 'Playfair Display', serif; }

  @keyframes fadeUp {
    from { opacity: 0; transform: translateY(24px); }
    to   { opacity: 1; transform: translateY(0); }
  }
  .fade-up   { animation: fadeUp 0.6s ease forwards; }
  .delay-1   { animation-delay: 0.1s; opacity: 0; }
  .delay-2   { animation-delay: 0.2s; opacity: 0; }
  .delay-3   { animation-delay: 0.3s; opacity: 0; }

  .pp-card {
    border-left: 3px solid #3b82f6;
    transition: box-shadow 0.25s ease, transform 0.25s ease;
  }
  .pp-card:hover {
    box-shadow: 0 12px 32px rgba(59,130,246,0.10);
    transform: translateY(-2px);
  }

  .toc-link {
    transition: color 0.2s, padding-left 0.2s;
  }
  .toc-link:hover {
    color: #2563eb;
    padding-left: 6px;
  }

  .badge-dot::before {
    content: '';
    display: inline-block;
    width: 8px; height: 8px;
    border-radius: 50%;
    background: #3b82f6;
    margin-right: 10px;
    flex-shrink: 0;
  }
</style>

<div class="pp-root bg-gray-50 min-h-screen">

  <!-- ── HERO BANNER ── -->
  <div class="bg-gradient-to-br from-blue-700 via-blue-600 to-blue-500 py-20 px-4 relative overflow-hidden">
    <!-- decorative blobs -->
    <div class="absolute -top-16 -right-16 w-64 h-64 bg-white opacity-5 rounded-full"></div>
    <div class="absolute -bottom-10 -left-10 w-48 h-48 bg-white opacity-5 rounded-full"></div>

    <div class="max-w-4xl mx-auto text-center relative z-10 fade-up">
      <h1 class="pp-heading text-5xl lg:text-6xl font-black text-white mb-4 leading-tight">Privacy Policy</h1>
      <p class="text-blue-100 text-lg max-w-xl mx-auto">How Printerradar collects, uses, and protects your personal information.</p>
    </div>
  </div>

  <!-- ── MAIN CONTENT ── -->
  <div class="max-w-6xl mx-auto px-4 py-16">
    <div class="grid lg:grid-cols-4 gap-10">

      <!-- ── SIDEBAR TABLE OF CONTENTS ── -->
      <aside class="lg:col-span-1 fade-up delay-1">
        <div class="sticky top-8 bg-white rounded-2xl shadow-sm border border-gray-100 p-6">
          <p class="text-xs font-semibold text-gray-400 tracking-widest uppercase mb-4">Contents</p>
          <nav class="space-y-2 text-sm text-gray-500">
            <a href="#scope"      class="toc-link flex items-center gap-2 py-1"><span class="w-1.5 h-1.5 rounded-full bg-blue-400 flex-shrink-0"></span>Scope & Consent</a>
            <a href="#categories" class="toc-link flex items-center gap-2 py-1"><span class="w-1.5 h-1.5 rounded-full bg-blue-400 flex-shrink-0"></span>Information Collected</a>
            <a href="#purpose"    class="toc-link flex items-center gap-2 py-1"><span class="w-1.5 h-1.5 rounded-full bg-blue-400 flex-shrink-0"></span>Purpose of Use</a>
            <a href="#cookies"    class="toc-link flex items-center gap-2 py-1"><span class="w-1.5 h-1.5 rounded-full bg-blue-400 flex-shrink-0"></span>Cookies & Tracking</a>
            <a href="#advertising" class="toc-link flex items-center gap-2 py-1"><span class="w-1.5 h-1.5 rounded-full bg-blue-400 flex-shrink-0"></span>Third-Party Advertising</a>
            <a href="#rights"     class="toc-link flex items-center gap-2 py-1"><span class="w-1.5 h-1.5 rounded-full bg-blue-400 flex-shrink-0"></span>Your Rights</a>
            <a href="#children"   class="toc-link flex items-center gap-2 py-1"><span class="w-1.5 h-1.5 rounded-full bg-blue-400 flex-shrink-0"></span>Children's Privacy</a>
            <a href="#security"   class="toc-link flex items-center gap-2 py-1"><span class="w-1.5 h-1.5 rounded-full bg-blue-400 flex-shrink-0"></span>Security</a>
            <a href="#updates"    class="toc-link flex items-center gap-2 py-1"><span class="w-1.5 h-1.5 rounded-full bg-blue-400 flex-shrink-0"></span>Policy Updates</a>
            <a href="#contact"    class="toc-link flex items-center gap-2 py-1"><span class="w-1.5 h-1.5 rounded-full bg-blue-400 flex-shrink-0"></span>Contact Us</a>
          </nav>

          <!-- Trust badge -->
          <div class="mt-8 bg-blue-50 rounded-xl p-4 text-center">
            <div class="w-10 h-10 bg-blue-600 rounded-full flex items-center justify-center mx-auto mb-3">
              <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
              </svg>
            </div>
            <p class="text-blue-700 text-xs font-semibold">We never sell your personal data</p>
          </div>
        </div>
      </aside>

      <!-- ── POLICY BODY ── -->
      <main class="lg:col-span-3 space-y-8 fade-up delay-2">

        <!-- Intro -->
        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-8">
          <p class="text-gray-600 leading-relaxed text-base">
            <strong class="text-gray-800">Printerradar</strong>, accessible at <a href="https://www.printerradar.com" class="text-blue-600 underline underline-offset-2">www.printerradar.com</a>, is committed to safeguarding the privacy of its visitors and users. This policy outlines how we collect, use, and protect data on our website.
          </p>
        </div>

        <!-- Section: Scope -->
        <div id="scope" class="pp-card bg-white rounded-2xl shadow-sm border border-gray-100 p-8">
          <div class="flex items-center gap-3 mb-4">
            <div class="w-9 h-9 bg-blue-50 rounded-lg flex items-center justify-center">
              <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/>
              </svg>
            </div>
            <h2 class="pp-heading text-xl font-bold text-gray-900">Scope &amp; Consent</h2>
          </div>
          <p class="text-gray-600 leading-relaxed">This policy applies exclusively to information collected through online activities on the Printerradar website. By accessing or continuing to use the site, users provide their consent to the terms herein.</p>
        </div>

        <!-- Section: Categories -->
        <div id="categories" class="pp-card bg-white rounded-2xl shadow-sm border border-gray-100 p-8">
          <div class="flex items-center gap-3 mb-4">
            <div class="w-9 h-9 bg-blue-50 rounded-lg flex items-center justify-center">
              <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16"/>
              </svg>
            </div>
            <h2 class="pp-heading text-xl font-bold text-gray-900">Categories of Information Collected</h2>
          </div>

          <div class="space-y-5 mt-2">
            <div class="bg-gray-50 rounded-xl p-5">
              <p class="text-sm font-semibold text-blue-700 uppercase tracking-wider mb-3">Voluntarily Provided</p>
              <div class="flex flex-wrap gap-2">
                <?php foreach(['Name','Email Address','Telephone Number','Company Name','Postal Address','Message Content','Attachments','Service Inquiry Details'] as $item): ?>
                  <span class="bg-white border border-gray-200 text-gray-600 text-xs font-medium px-3 py-1.5 rounded-full"><?= $item ?></span>
                <?php endforeach; ?>
              </div>
            </div>
            <div class="bg-gray-50 rounded-xl p-5">
              <p class="text-sm font-semibold text-blue-700 uppercase tracking-wider mb-3">Automatically Collected</p>
              <div class="flex flex-wrap gap-2">
                <?php foreach(['IP Address','Browser Type &amp; Version','ISP','Date &amp; Time of Access','Referring Pages','Exit Pages','Pages Visited','Click Counts'] as $item): ?>
                  <span class="bg-white border border-gray-200 text-gray-600 text-xs font-medium px-3 py-1.5 rounded-full"><?= $item ?></span>
                <?php endforeach; ?>
              </div>
              <p class="text-gray-500 text-sm mt-3">Collected via standard server logs and analytics tools. Not linked to personally identifiable information — used for site administration, trend analysis, and aggregate demographic insights.</p>
            </div>
          </div>
        </div>

        <!-- Section: Purpose -->
        <div id="purpose" class="pp-card bg-white rounded-2xl shadow-sm border border-gray-100 p-8">
          <div class="flex items-center gap-3 mb-4">
            <div class="w-9 h-9 bg-blue-50 rounded-lg flex items-center justify-center">
              <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
              </svg>
            </div>
            <h2 class="pp-heading text-xl font-bold text-gray-900">Purpose of Data Use</h2>
          </div>
          <ul class="space-y-3 mt-2">
            <?php $purposes = [
              'Operate, maintain, and enhance the website and help services',
              'Personalize user experience and provide relevant technical guidance',
              'Analyze usage patterns to improve functionality and develop new features',
              'Respond to inquiries, deliver service notifications, and send account-related communications',
              'Identify, prevent, and mitigate fraud, security incidents, or technical issues',
              'Comply with applicable legal and regulatory obligations',
            ]; foreach($purposes as $p): ?>
            <li class="flex items-start gap-3 text-gray-600 text-sm">
              <span class="mt-1.5 w-2 h-2 bg-blue-500 rounded-full flex-shrink-0"></span>
              <?= $p ?>
            </li>
            <?php endforeach; ?>
          </ul>
          <div class="mt-5 bg-blue-50 border border-blue-100 rounded-xl px-5 py-4 flex items-center gap-3">
            <svg class="w-5 h-5 text-blue-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
            </svg>
            <p class="text-blue-700 text-sm font-medium">Printerradar does <strong>not</strong> sell personal information to third parties.</p>
          </div>
        </div>

        <!-- Section: Cookies -->
        <div id="cookies" class="pp-card bg-white rounded-2xl shadow-sm border border-gray-100 p-8">
          <div class="flex items-center gap-3 mb-4">
            <div class="w-9 h-9 bg-blue-50 rounded-lg flex items-center justify-center">
              <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
              </svg>
            </div>
            <h2 class="pp-heading text-xl font-bold text-gray-900">Cookies &amp; Tracking Technologies</h2>
          </div>
          <p class="text-gray-600 leading-relaxed text-sm">The website and authorized third-party partners (including advertising networks) may employ <strong class="text-gray-800">cookies, web beacons, JavaScript</strong>, and similar technologies to enhance user experience, personalize content, and measure advertising effectiveness.</p>
          <p class="text-gray-600 leading-relaxed text-sm mt-3">Users retain control over cookies through their browser settings; however, disabling cookies may restrict certain site functionalities. Third-party practices are governed by their respective privacy policies.</p>
        </div>

        <!-- Section: Advertising -->
        <div id="advertising" class="pp-card bg-white rounded-2xl shadow-sm border border-gray-100 p-8">
          <div class="flex items-center gap-3 mb-4">
            <div class="w-9 h-9 bg-blue-50 rounded-lg flex items-center justify-center">
              <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z"/>
              </svg>
            </div>
            <h2 class="pp-heading text-xl font-bold text-gray-900">Third-Party Advertising</h2>
          </div>
          <p class="text-gray-600 leading-relaxed text-sm">Printerradar collaborates with external ad servers and networks whose privacy policies independently regulate their use of cookies and data for ad targeting and performance measurement. Printerradar neither controls nor has access to such third-party cookies.</p>
        </div>

        <!-- Section: Rights -->
        <div id="rights" class="pp-card bg-white rounded-2xl shadow-sm border border-gray-100 p-8">
          <div class="flex items-center gap-3 mb-6">
            <div class="w-9 h-9 bg-blue-50 rounded-lg flex items-center justify-center">
              <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/>
              </svg>
            </div>
            <h2 class="pp-heading text-xl font-bold text-gray-900">Privacy &amp; Data Subject Rights</h2>
          </div>
          <div class="grid sm:grid-cols-2 gap-5">
            <!-- CCPA -->
            <div class="bg-gray-50 rounded-xl p-5">
              <span class="inline-block bg-blue-600 text-white text-xs font-bold px-3 py-1 rounded-full mb-3">CCPA / CPRA</span>
              <p class="text-xs font-semibold text-gray-500 uppercase tracking-wider mb-3">California Residents</p>
              <ul class="space-y-2">
                <?php foreach(['Request disclosure of data categories collected','Request deletion of personal data','Opt-out of sale of personal data (no sale occurs)','Responses within statutory timeframes, no discrimination'] as $r): ?>
                  <li class="flex items-start gap-2 text-gray-600 text-sm"><span class="mt-1.5 w-1.5 h-1.5 bg-blue-500 rounded-full flex-shrink-0"></span><?= $r ?></li>
                <?php endforeach; ?>
              </ul>
            </div>
            <!-- GDPR -->
            <div class="bg-gray-50 rounded-xl p-5">
              <span class="inline-block bg-indigo-600 text-white text-xs font-bold px-3 py-1 rounded-full mb-3">GDPR</span>
              <p class="text-xs font-semibold text-gray-500 uppercase tracking-wider mb-3">EU / UK Residents</p>
              <ul class="space-y-2">
                <?php foreach(['Right to access & rectification','Right to erasure (right to be forgotten)','Right to restriction of processing','Right to data portability','Response within one month'] as $r): ?>
                  <li class="flex items-start gap-2 text-gray-600 text-sm"><span class="mt-1.5 w-1.5 h-1.5 bg-indigo-500 rounded-full flex-shrink-0"></span><?= $r ?></li>
                <?php endforeach; ?>
              </ul>
            </div>
          </div>
        </div>

        <!-- Section: Children -->
        <div id="children" class="pp-card bg-white rounded-2xl shadow-sm border border-gray-100 p-8">
          <div class="flex items-center gap-3 mb-4">
            <div class="w-9 h-9 bg-blue-50 rounded-lg flex items-center justify-center">
              <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/>
              </svg>
            </div>
            <h2 class="pp-heading text-xl font-bold text-gray-900">Protection of Children's Privacy</h2>
          </div>
          <p class="text-gray-600 leading-relaxed text-sm">The website does not knowingly collect personal information from individuals under the age of <strong class="text-gray-800">13</strong>. Should such information be identified, prompt efforts will be made to delete it. Parents and guardians are encouraged to monitor children's online activities.</p>
        </div>

        <!-- Section: Security -->
        <div id="security" class="pp-card bg-white rounded-2xl shadow-sm border border-gray-100 p-8">
          <div class="flex items-center gap-3 mb-4">
            <div class="w-9 h-9 bg-blue-50 rounded-lg flex items-center justify-center">
              <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
              </svg>
            </div>
            <h2 class="pp-heading text-xl font-bold text-gray-900">Security</h2>
          </div>
          <p class="text-gray-600 leading-relaxed text-sm">Appropriate technical and organizational measures are implemented to protect personal information against unauthorized access, loss, or misuse. Nonetheless, no method of electronic transmission or storage over the internet can be guaranteed entirely secure.</p>
        </div>

        <!-- Section: Updates -->
        <div id="updates" class="pp-card bg-white rounded-2xl shadow-sm border border-gray-100 p-8">
          <div class="flex items-center gap-3 mb-4">
            <div class="w-9 h-9 bg-blue-50 rounded-lg flex items-center justify-center">
              <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/>
              </svg>
            </div>
            <h2 class="pp-heading text-xl font-bold text-gray-900">Policy Updates</h2>
          </div>
          <p class="text-gray-600 leading-relaxed text-sm">This Privacy Policy may be amended periodically. Revised versions will be posted on the website with an updated effective date. Continued use of the site following such changes constitutes acceptance of the updated terms.</p>
        </div>

        <!-- Section: Contact -->
        <div id="contact" class="bg-gradient-to-br from-blue-600 to-blue-700 rounded-2xl p-8 text-white fade-up delay-3">
          <div class="flex items-center gap-3 mb-6">
            <div class="w-9 h-9 bg-white/20 rounded-lg flex items-center justify-center">
              <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
              </svg>
            </div>
            <h2 class="pp-heading text-xl font-bold">Contact Information</h2>
          </div>
          <p class="text-blue-100 text-sm mb-6">For inquiries, rights requests, or concerns, please reach out through any of the channels below:</p>
          <div class="grid sm:grid-cols-3 gap-4">
            <a href="mailto:support@printerradar.com" class="bg-white/10 hover:bg-white/20 transition rounded-xl p-4 flex flex-col gap-2 group">
              <svg class="w-5 h-5 text-blue-200 group-hover:text-white transition" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
              </svg>
              <p class="text-xs text-blue-200 uppercase tracking-wider">Email</p>
              <p class="text-white text-sm font-medium break-all">support@printerradar.com</p>
            </a>
            <a href="tel:+18884955479" class="bg-white/10 hover:bg-white/20 transition rounded-xl p-4 flex flex-col gap-2 group">
              <svg class="w-5 h-5 text-blue-200 group-hover:text-white transition" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
              </svg>
              <p class="text-xs text-blue-200 uppercase tracking-wider">US</p>
              <p class="text-white text-sm font-medium">+1 888-495-5479</p>
            </a>
            <a href="tel:+18884955479" class="bg-white/10 hover:bg-white/20 transition rounded-xl p-4 flex flex-col gap-2 group">
              <svg class="w-5 h-5 text-blue-200 group-hover:text-white transition" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
              </svg>
              <p class="text-xs text-blue-200 uppercase tracking-wider">UK</p>
              <p class="text-white text-sm font-medium">+1 888-495-5479</p>
            </a>
          </div>
        </div>

      </main>
    </div>
  </div>

</div>