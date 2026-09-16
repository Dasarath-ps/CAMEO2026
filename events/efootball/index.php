<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>EFOOTBALL // PRO TOURNAMENT</title>
  <meta name="description" content="EFOOTBALL — The ultimate virtual football competition.">
  <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
</head>

<body>

  <!-- Backgrounds -->
  <canvas id="cyberCanvas"></canvas>
  <div class="grid-bg"></div>
  <div class="scanlines"></div>

  <!-- Navbar -->
  <header class="navbar">
    <div class="wrap">
      <a class="brand" href="#home">EFOOTBALL</a>
      <nav class="navtabs">
        <a href="#about">Overview</a>
        <a href="#rounds">Format</a>
        <a href="#rules">Rules</a>
        <a href="#timeline">Timeline</a>
        <a href="#register" class="text-red">Register</a>
      </nav>
    </div>
  </header>

  <div class="top-logo-strip" aria-label="Nexyra associated logos">
    <div class="logo-marquee">
      <div class="logo-track">
        <div class="logo-set">
          <div class="logo-badge-card college-card">
            <span class="badge-label">HOST INSTITUTION</span>
            <div class="logo-img-wrapper">
              <img src="../hackathon/logos/logo_3.png" alt="Nirmala College logo" class="college-logo">
            </div>
          </div>
          <span class="logo-sep">✦</span>
          <div class="logo-badge-card ican-card">
            <span class="badge-label">ORGANIZED BY</span>
            <div class="logo-img-wrapper">
              <img src="../hackathon/logos/logo_1.png" alt="iCAN Association logo" class="ican-logo">
            </div>
          </div>
          <span class="logo-sep">✦</span>
          <div class="logo-badge-card emblem-card">
            <span class="badge-label">CAMEO 26</span>
            <div class="logo-img-wrapper">
              <img src="../hackathon/logos/logo_2.png" alt="Nexyra emblem" class="emblem-logo">
            </div>
          </div>
          <span class="logo-sep">✦</span>
        </div>
        <div class="logo-set" aria-hidden="true">
          <div class="logo-badge-card college-card">
            <span class="badge-label">HOST INSTITUTION</span>
            <div class="logo-img-wrapper">
              <img src="../hackathon/logos/logo_3.png" alt="" class="college-logo">
            </div>
          </div>
          <span class="logo-sep">✦</span>
          <div class="logo-badge-card ican-card">
            <span class="badge-label">ORGANIZED BY</span>
            <div class="logo-img-wrapper">
              <img src="../hackathon/logos/logo_1.png" alt="" class="ican-logo">
            </div>
          </div>
          <span class="logo-sep">✦</span>
          <div class="logo-badge-card emblem-card">
            <span class="badge-label">CAMEO 26</span>
            <div class="logo-img-wrapper">
              <img src="../hackathon/logos/logo_2.png" alt="" class="emblem-logo">
            </div>
          </div>
          <span class="logo-sep">✦</span>
        </div>
      </div>
    </div>
  </div>

  <main>
    <!-- Hero -->
    <section class="hero" id="home">
      <div class="wrap">
        <div>
          <p class="hero-sub">// MATCH OVERRIDE INITIATED. BRING YOUR A-GAME.</p>
          <h1 class="glitch-effect" data-text="EFOOTBALL">EFOOTBALL</h1>
          <h2 class="text-cyan">SEPTEMBER 25 | LIBRARY & SEMINAR HALL</h2>

          <p class="hero-sub" style="margin-top: 2rem;">
            Showcase your virtual football skills. Dominate the pitch, score incredible goals, and claim the spotlight.
            <br><br>
            <span class="text-red">1ST PRIZE: CERTIFICATE</span> &nbsp;|&nbsp;
            <span class="text-cyan">2ND PRIZE: CERTIFICATE</span>
          </p>

          <div class="hero-actions">
            <a class="btn btn-solid" href="#register">INITIALIZE_REG()</a>
            <a class="btn btn-ghost" href="#about">READ_BRIEF()</a>
          </div>
        </div>

        <div class="stack-panel">
          <div class="stack-panel-head">
            // MATCH.TRACE
          </div>
          <div class="stack-visual">
            <div class="stack-frame champion">CHAMPION<span>()</span> &larr; AWARDED</div>
            <div class="stack-frame">FINAL<span>()</span></div>
            <div class="stack-frame">SEMI_FINAL<span>()</span></div>
            <div class="stack-frame">QUARTER_FINAL<span>()</span></div>
            <div class="stack-frame">KNOCKOUTS<span>()</span></div>
          </div>
        </div>
      </div>
    </section>

    <!-- About -->
    <section id="about">
      <div class="wrap">
        <div class="section-head">
          <h2 class="glitch-effect text-red" data-text="01 // THE BRIEF">01 // THE BRIEF</h2>
        </div>

        <div class="terminal">
          <div class="terminal-head">
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
            <span style="margin-left: 10px; color: var(--border-cyan); font-family: var(--font-body);">MANIFEST.TXT</span>
          </div>
          <div class="terminal-body">
            <p><span class="prompt">root@cam:~#</span> cat manifest.txt</p>
            <p>EFOOTBALL is an intense virtual gaming competition on <span class="highlight">September 25</span> at the <span class="highlight">Library & Seminar Hall</span>.</p>
            <p>Players will compete in a knockout bracket to prove who is the ultimate tactician on the virtual pitch.</p>
            <p>Bring your own device, ensure internet connectivity, and follow the match settings provided by the coordinators.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Rounds -->
    <section id="rounds">
      <div class="wrap">
        <div class="section-head">
          <h2 class="glitch-effect" data-text="02 // THE PHASES">02 // THE PHASES</h2>
        </div>

        <div class="frames">
          <article class="frame-card" data-depth="1">
            <span class="frame-tag">10:45 AM</span>
            <h3 class="text-light">PHASE 1: REPORTING</h3>
            <p>All players must be present at the venue by 10:45 AM to check-in and verify ID cards.</p>
          </article>

          <article class="frame-card" data-depth="2">
            <span class="frame-tag" style="color: var(--cyber-yellow)">11:00 AM</span>
            <h3 class="text-cyan">PHASE 2: KNOCKOUTS</h3>
            <p>The tournament begins. Follow the match settings strictly and eliminate your opponents.</p>
          </article>

          <article class="frame-card" data-depth="3">
            <span class="frame-tag" style="color: var(--valo-red)">02:00 PM</span>
            <h3 class="text-red">PHASE 3: FINALS</h3>
            <p>The best tacticians clash in the final matches. The ultimate champion will be crowned.</p>
          </article>
        </div>
      </div>
    </section>

    <!-- Rules -->
    <section id="rules">
      <div class="wrap">
        <div class="section-head">
          <h2 class="glitch-effect text-yellow" data-text="03 // RULES & REGS">03 // RULES & REGS</h2>
        </div>

        <div class="terminal">
          <div class="terminal-head">
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
            <span style="margin-left: 10px; color: var(--border-cyan); font-family: var(--font-body);">RULES.TXT</span>
          </div>
          <div class="terminal-body">
            <p class="highlight" style="margin-bottom: 10px;">// GENERAL RULES</p>
            <ul style="list-style-type: square; margin-left: 20px; margin-bottom: 20px;">
              <li style="margin-bottom: 8px;">The event will begin at 11:00 AM. All players must be present at the venue by 10:45 AM.</li>
              <li style="margin-bottom: 8px;">Participants must follow the rules and instructions issued by the event coordinators.</li>
              <li style="margin-bottom: 8px;">A valid college ID card is mandatory for participation.</li>
              <li style="margin-bottom: 8px;">All decisions taken by the event coordinators/referees will be final.</li>
              <li style="margin-bottom: 8px;">Players are responsible for ensuring that their own internet connectivity and required devices are available.</li>
              <li style="margin-bottom: 8px;">The organizers will not be responsible for technical issues arising from a participant's personal device or internet connection.</li>
            </ul>

            <p class="highlight" style="margin-bottom: 10px;">// EFOOTBALL SPECIFIC</p>
            <ul style="list-style-type: square; margin-left: 20px;">
              <li style="margin-bottom: 8px;">Registration fee: eFootball – ₹60 per participant.</li>
              <li style="margin-bottom: 8px;">Participation is open to both Nirmalites and non-Nirmalites.</li>
              <li style="margin-bottom: 8px;">A maximum of 2 participants per department is allowed for Nirmalites.</li>
              <li style="margin-bottom: 8px;">Online registration is not allowed for Nirmalites. Spot registration is mandatory.</li>
              <li style="margin-bottom: 8px;">Players must be present and ready at the venue at the time allotted by the event coordinators.</li>
              <li style="margin-bottom: 8px;">Use of cheats, hacks, exploits, or any unauthorized assistance is <span class="highlight">strictly prohibited</span>.</li>
              <li style="margin-bottom: 8px;">Players must follow the match settings and instructions provided by the event coordinators.</li>
              <li style="margin-bottom: 8px;">Any form of misconduct or violation of the rules may result in disqualification.</li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <!-- Timeline -->
    <section id="timeline">
      <div class="wrap">
        <div class="section-head">
          <h2 class="glitch-effect text-cyan" data-text="04 // SCHEDULE">04 // SCHEDULE</h2>
        </div>

        <div class="log">
          <div class="log-line active">
            <span class="log-time">10:45 AM</span>
            <div class="log-body">
              <h3>REPORTING TIME</h3>
              <p>Check-in at the Library & Seminar Hall. ID Verification.</p>
            </div>
          </div>
          <div class="log-line">
            <span class="log-time">11:00 AM</span>
            <div class="log-body">
              <h3 class="text-cyan">MATCHES COMMENCE</h3>
              <p>The knockout brackets begin. Follow your assigned match timings.</p>
            </div>
          </div>
          <div class="log-line">
            <span class="log-time">02:00 PM</span>
            <div class="log-body">
              <h3 class="text-yellow">FINALS & AWARDS</h3>
              <p>The final matches conclude and certificates are awarded to 1st and 2nd place.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Register / Payment -->
    <section id="register">
      <div class="wrap">
        <div class="section-head">
          <h2 class="glitch-effect text-red" data-text="05 // SECURE ACCESS">05 // SECURE ACCESS</h2>
          <p>₹60 per participant. Payment required to confirm registration.</p>
        </div>

        <div class="notice-box">
          <h3 class="text-yellow">// PAYMENT PROTOCOL</h3>
          <p>You must complete the payment via UPI to secure your spot. Keep a screenshot of your successful transaction, as it must be uploaded to our official Google Form.</p>
          <select name="college_confirm" id="collegeConfirm" required>
            <option value="">Confirm You are not in Nirmala College Muvatupuzha</option>
            <option value="Other">Other College (Online Reg Allowed)</option>
            <option value="Nirmala College">Nirmala College (Spot Reg ONLY)</option>
          </select>
          <div id="nirmalaWarning" style="color: var(--valo-red); margin-top: 10px; display: none;">// ERROR: Online registration is not allowed for Nirmalites. Spot registration is mandatory.</div>

          <label class="cyber-checkbox-label">
            <input type="checkbox" id="paymentAcknowledge">
            <span class="checkmark"></span>
            I acknowledge the payment requirements.
          </label>
        </div>

        <div id="paymentPortal" class="payment-portal hidden">
          <div class="qr-container">
            <h4 class="text-cyan">SCAN TO PAY ₹60</h4>
            <img src="payment_qr/qr1.jpeg" alt="Payment QR Code" class="qr-code">
            <p style="margin-top: 10px; font-family: var(--font-body); color: var(--valo-light);">UPI: technova@ybl</p>
          </div>

          <div class="form-container">
            <h4 class="text-red">FINAL STEP: TRANSMIT DATA</h4>
            <p>Upload your payment screenshot and participant details to the central mainframe.</p>
            <a class="btn btn-solid" href="https://docs.google.com/forms/d/e/1FAIpQLSf_BihVRefCiAnaZzL9i6XCjN0aURrQrqeYQO7DrDeOqNbd-g/viewform?usp=publish-editor" target="_blank" style="margin-top: 1rem;">
              ACCESS_GOOGLE_FORM()
            </a>
          </div>
        </div>
      </div>
    </section>
  </main>

  <footer>
    <p>© 2026 EFOOTBALL // SYSTEM.HALT.</p>
  </footer>

  <script src="script.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const collegeConfirm = document.getElementById('collegeConfirm');
      const paymentAcknowledge = document.getElementById('paymentAcknowledge');
      const nirmalaWarning = document.getElementById('nirmalaWarning');
      const paymentPortal = document.getElementById('paymentPortal');

      if (collegeConfirm && paymentAcknowledge && nirmalaWarning) {
        collegeConfirm.addEventListener('change', function() {
          if (this.value === 'Nirmala College') {
            paymentAcknowledge.disabled = true;
            paymentAcknowledge.checked = false;
            nirmalaWarning.style.display = 'block';
            if (paymentPortal) paymentPortal.classList.add('hidden');
          } else {
            paymentAcknowledge.disabled = false;
            nirmalaWarning.style.display = 'none';
          }
        });
      }
    });
  </script>
</body>

</html>