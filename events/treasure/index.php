<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TREASURE HUNT // THE ULTIMATE QUEST</title>
  <meta name="description" content="TREASURE HUNT — Crack the clues and find the prize.">
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
      <a class="brand" href="#home">TREASURE HUNT</a>
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
          <p class="hero-sub">// CLUE SEQUENCE INITIATED. COMMENCE SEARCH.</p>
          <h1 class="glitch-effect" data-text="TREASURE HUNT">TREASURE HUNT</h1>
          <h2 class="text-cyan">SEPTEMBER 24 | VENUE: 206, 207, 208</h2>

          <p class="hero-sub" style="margin-top: 2rem;">
            Follow the trail, solve the puzzles, and claim the ultimate prize. Your intellect and speed will be tested.
            <br><br>
            <span class="text-red">1ST PRIZE: ₹10000 + 4 CERTIFICATES</span>
          </p>

          <div class="hero-actions">
            <a class="btn btn-solid" href="#register">INITIALIZE_REG()</a>
            <a class="btn btn-ghost" href="#about">READ_BRIEF()</a>
          </div>
        </div>

        <div class="stack-panel">
          <div class="stack-panel-head">
            // SEARCH.TRACE
          </div>
          <div class="stack-visual">
            <div class="stack-frame champion">TREASURE<span>()</span> &larr; FOUND</div>
            <div class="stack-frame">CLUE_3<span>()</span></div>
            <div class="stack-frame">CLUE_2<span>()</span></div>
            <div class="stack-frame">CLUE_1<span>()</span></div>
            <div class="stack-frame">START<span>()</span></div>
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
            <p>TREASURE HUNT is an exhilarating puzzle-solving event happening on <span class="highlight">September 24</span> starting at Venues 206, 207, and 208.</p>
            <p>Teams of 4 will race against time, cracking QR codes and physical clues in a strict sequence.</p>
            <p>Only the sharpest minds will reach the final destination and claim the ₹10000 bounty.</p>
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
            <span class="frame-tag">09:30 AM</span>
            <h3 class="text-light">PHASE 1: REPORTING</h3>
            <p>Report to the venue before 9:30 AM. Late arrivals may be immediately disqualified.</p>
          </article>

          <article class="frame-card" data-depth="2">
            <span class="frame-tag" style="color: var(--cyber-yellow)">10:30 AM</span>
            <h3 class="text-cyan">PHASE 2: THE HUNT</h3>
            <p>The hunt begins. Solve clues strictly in order without any outside assistance or mobile phones.</p>
          </article>

          <article class="frame-card" data-depth="3">
            <span class="frame-tag" style="color: var(--valo-red)">04:00 PM</span>
            <h3 class="text-red">PHASE 3: CONCLUSION</h3>
            <p>The first team to correctly solve all clues and find the treasure wins the grand prize.</p>
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
            <ul style="list-style-type: square; margin-left: 20px;">
              <li style="margin-bottom: 8px;">Each team must consist of exactly 4 members from the same college.</li>
              <li style="margin-bottom: 8px;">Students from Nirmala College (Autonomous) are <span class="highlight">not allowed</span> to participate in the event.</li>
              <li style="margin-bottom: 8px;">Each participant may be a member of only one team.</li>
              <li style="margin-bottom: 8px;">All participants must carry their valid college ID card and present it when required.</li>
              <li style="margin-bottom: 8px;">Clues must be solved in the given order. Skipping clues is strictly prohibited.</li>
              <li style="margin-bottom: 8px;">The event will start promptly at 10:30 AM, regardless of other schedules or delays.</li>
              <li style="margin-bottom: 8px;">Participants must report and complete registration before <span class="highlight">9:30 AM on 24 September 2026</span>. Late arrivals may be disqualified.</li>
              <li style="margin-bottom: 8px;">Teams are not permitted to communicate or collaborate with other teams during the competition.</li>
              <li style="margin-bottom: 8px;">The use of mobile phones, the Internet, or any form of outside assistance is strictly prohibited.</li>
              <li style="margin-bottom: 8px;">Participants must not damage, move, hide, alter, or tamper with any clue, QR code, marker, property, or event material.</li>
              <li style="margin-bottom: 8px;">Participants must not enter restricted, dangerous, or unauthorized areas. They must remain within the designated event premises.</li>
              <li style="margin-bottom: 8px;">Participants must not run in unsafe areas, climb structures, enter restricted locations, or engage in any activity that may endanger themselves or others.</li>
              <li style="margin-bottom: 8px;">Participants may be responsible for any intentional damage to event materials or college property.</li>
              <li style="margin-bottom: 8px;">The registration fee is ₹400 per team. Registration fees are non-refundable once the registration is completed.</li>
              <li style="margin-bottom: 8px;">Any violation of the above rules may result in immediate disqualification.</li>
              <li style="margin-bottom: 8px;">The decision of the judging panel shall be final and binding.</li>
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
            <span class="log-time">09:30 AM</span>
            <div class="log-body">
              <h3>REPORTING TIME CLOSES</h3>
              <p>Registration and verification ends. Late arrivals are disqualified.</p>
            </div>
          </div>
          <div class="log-line">
            <span class="log-time">10:30 AM</span>
            <div class="log-body">
              <h3 class="text-cyan">THE HUNT BEGINS</h3>
              <p>Clues are distributed and the race starts.</p>
            </div>
          </div>
          <div class="log-line">
            <span class="log-time">04:00 PM</span>
            <div class="log-body">
              <h3 class="text-yellow">HUNT CONCLUDES</h3>
              <p>All teams must return. Evaluation and winners announced.</p>
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
          <p>₹400 per team. Payment required to confirm registration.</p>
        </div>

        <div class="notice-box">
          <h3 class="text-yellow">// PAYMENT PROTOCOL</h3>
          <p>You must complete the payment via UPI to secure your spot. Keep a screenshot of your successful transaction, as it must be uploaded to our official Google Form.</p>
          <select name="college_confirm" id="collegeConfirm" required>
            <option value="">Confirm You are not in Nirmala College Muvatupuzha</option>
            <option value="Other">Other College (Eligible)</option>
            <option value="Nirmala College">Nirmala College (Not Eligible)</option>
          </select>
          <div id="nirmalaWarning" style="color: var(--valo-red); margin-top: 10px; display: none;">// ERROR: Students of Nirmala College Muvattupuzha are not eligible to participate in this event.</div>

          <label class="cyber-checkbox-label">
            <input type="checkbox" id="paymentAcknowledge">
            <span class="checkmark"></span>
            I acknowledge the payment requirements.
          </label>
        </div>

        <div id="paymentPortal" class="payment-portal hidden">
          <div class="qr-container">
            <h4 class="text-cyan">SCAN TO PAY ₹400</h4>
            <img src="payment_qr/qr1.jpeg" alt="Payment QR Code" class="qr-code">
            <p style="margin-top: 10px; font-family: var(--font-body); color: var(--valo-light);">UPI: technova@ybl</p>
          </div>

          <div class="form-container">
            <h4 class="text-red">FINAL STEP: TRANSMIT DATA</h4>
            <p>Upload your payment screenshot and participant details to the central mainframe.</p>
            <a class="btn btn-solid" href="https://docs.google.com/forms/d/e/1FAIpQLScEF0J2l9d88G-kHC-d3htDHIQ5AqHx8Z8bkVvffyAP9ms50Q/viewform?usp=dialog" target="_blank" style="margin-top: 1rem;">
              ACCESS_GOOGLE_FORM()
            </a>
          </div>
        </div>
      </div>
    </section>
  </main>

  <footer>
    <p>© 2026 TREASURE HUNT // SYSTEM.HALT.</p>
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