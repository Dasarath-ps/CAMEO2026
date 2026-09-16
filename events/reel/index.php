<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FRAMEOFF // REELS COMPETITION</title>
  <meta name="description" content="FRAMEOFF — Reel Making Competition.">
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
      <a class="brand" href="#home">FRAMEOFF</a>
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
          <p class="hero-sub">// VISUALS OVERRIDE INITIATED. START RECORDING.</p>
          <h1 class="glitch-effect" data-text="FRAMEOFF">FRAMEOFF</h1>
          <h2 class="text-cyan">SEPTEMBER 25 | VENUE: 108</h2>

          <p class="hero-sub" style="margin-top: 2rem;">
            Showcase your creativity and editing skills. Capture the essence of the theme in 60 to 90 seconds and claim the spotlight.
            <br><br>
            <span class="text-red">1ST PRIZE: ₹3000</span> &nbsp;|&nbsp;
            <span class="text-cyan">2ND PRIZE: ₹2000</span> &nbsp;|&nbsp;
            <span class="text-yellow">TOP 6: CERTIFICATES</span>
          </p>

          <div class="hero-actions">
            <a class="btn btn-solid" href="#register">INITIALIZE_REG()</a>
            <a class="btn btn-ghost" href="#about">READ_BRIEF()</a>
          </div>
        </div>

        <div class="stack-panel">
          <div class="stack-panel-head">
            // RECORD.TRACE
          </div>
          <div class="stack-visual">
            <div class="stack-frame champion">CHAMPION<span>()</span> &larr; AWARDED</div>
            <div class="stack-frame">EVALUATE<span>()</span></div>
            <div class="stack-frame">EDIT<span>()</span></div>
            <div class="stack-frame">SHOOT<span>()</span></div>
            <div class="stack-frame">CONCEPT<span>()</span></div>
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
            <span style="margin-left: 10px; color: var(--border-cyan); font-family: var(--font-body);">MANIFEST.MP4</span>
          </div>
          <div class="terminal-body">
            <p><span class="prompt">root@cam:~#</span> play manifest.mp4</p>
            <p>FRAMEOFF is a fast-paced reel making competition on <span class="highlight">September 25</span> at <span class="highlight">Venue 108</span>.</p>
            <p>Participants will create a captivating video (<span class="highlight">60 to 90 seconds</span>) based on a topic announced on the spot.</p>
            <p>Creativity, transitions, and audio sync are paramount. Only the most aesthetic frame survives.</p>
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
            <span class="frame-tag">10:00 AM</span>
            <h3 class="text-light">PHASE 1: THEME & SHOOT</h3>
            <p>The topic is announced. Explore the campus, find the best angles, and capture raw footage.</p>
          </article>

          <article class="frame-card" data-depth="2">
            <span class="frame-tag" style="color: var(--cyber-yellow)">9:16 MP4</span>
            <h3 class="text-cyan">PHASE 2: EDITING</h3>
            <p>Slice, color-grade, and sync your footage. All content must be 100% original.</p>
          </article>

          <article class="frame-card" data-depth="3">
            <span class="frame-tag" style="color: var(--valo-red)">60-90 SEC</span>
            <h3 class="text-red">PHASE 3: SUBMISSION</h3>
            <p>Submit directly to the coordinators before 2:00 PM. No late submissions accepted.</p>
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
              <li style="margin-bottom: 8px;">Maximum of 3 members per team.</li>
              <li style="margin-bottom: 8px;">All content must be 100% original. Reels must be created by the participant. No copying or plagiarism is allowed.</li>
              <li style="margin-bottom: 8px;">The topic will be announced at the beginning of the competition.</li>
              <li style="margin-bottom: 8px;">Your reel must be between <span class="highlight">60 to 90 seconds</span> long.</li>
              <li style="margin-bottom: 8px;">Videos must be in 9:16 format saved as MP4.</li>
              <li style="margin-bottom: 8px;">Submit your video directly to the coordinators before <span class="highlight">2:00 PM</span>. Late submissions will not be accepted under any circumstances.</li>
              <li style="margin-bottom: 8px;">College ID card is mandatory.</li>
              <li style="margin-bottom: 8px;">The decision of the judging panel will be final.</li>
              <li style="margin-bottom: 8px;">Registration Fee: ₹150 per team. Once registered, no refunds will be provided.</li>
              <li style="margin-bottom: 8px;">If you have any doubts, contact the event coordinators.</li>
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
            <span class="log-time">09:00 AM</span>
            <div class="log-body">
              <h3>REPORTING TIME</h3>
              <p>Participants must report to Venue 108.</p>
            </div>
          </div>
          <div class="log-line active">
            <span class="log-time">09:30 AM</span>
            <div class="log-body">
              <h3 class="text-red">REGISTRATION CLOSES</h3>
              <p>No more entries will be accepted after this time.</p>
            </div>
          </div>
          <div class="log-line">
            <span class="log-time">10:00 AM</span>
            <div class="log-body">
              <h3 class="text-cyan">THEME ANNOUNCEMENT & SHOOTING</h3>
              <p>The topic is revealed and the clock starts. You have until 2:00 PM to shoot and edit.</p>
            </div>
          </div>
          <div class="log-line">
            <span class="log-time">02:00 PM</span>
            <div class="log-body">
              <h3 class="text-yellow">SUBMISSION DEADLINE</h3>
              <p>Submit your final cut directly to the coordinators. Late submissions are not accepted.</p>
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
          <p>₹150 per team. Payment required to confirm registration.</p>
        </div>

        <div class="notice-box">
          <h3 class="text-yellow">// PAYMENT PROTOCOL</h3>
          <p>You must complete the payment via UPI to secure your spot. Keep a screenshot of your successful transaction, as it must be uploaded to our official Google Form.</p>
          <select name="college_confirm" id="collegeConfirm" required>
            <option value="">Confirm You are not in Nirmala College Muvatupuzha</option>
            <option value="Other">Other College</option>
            <option value="Nirmala College">Nirmala College Muvatupuzha</option>
          </select>
          <div id="nirmalaWarning" style="color: var(--valo-red); margin-top: 10px; display: none;">// ERROR: Registration is restricted for Nirmala College students.</div>

          <label class="cyber-checkbox-label">
            <input type="checkbox" id="paymentAcknowledge">
            <span class="checkmark"></span>
            I acknowledge the payment requirements.
          </label>
        </div>

        <div id="paymentPortal" class="payment-portal hidden">
          <div class="qr-container">
            <h4 class="text-cyan">SCAN TO PAY ₹150</h4>
            <img src="payment_qr/qr1.jpeg" alt="Payment QR Code" class="qr-code">
            <p style="margin-top: 10px; font-family: var(--font-body); color: var(--valo-light);">UPI: technova@ybl</p>
          </div>

          <div class="form-container">
            <h4 class="text-red">FINAL STEP: TRANSMIT DATA</h4>
            <p>Upload your payment screenshot and participant details to the central mainframe.</p>
            <a class="btn btn-solid" href="https://docs.google.com/forms/d/e/1FAIpQLScuBRlkvWXcMF2QAzJU4AdUfQCqsgw3Z0w_1OzbQcdVWKrgcQ/viewform" target="_blank" style="margin-top: 1rem;">
              ACCESS_GOOGLE_FORM()
            </a>
          </div>
        </div>
      </div>
    </section>
  </main>

  <footer>
    <p>© 2026 FRAMEOFF // SYSTEM.HALT.</p>
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