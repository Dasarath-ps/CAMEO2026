<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GLITCH // PHOTOGRAPHY EVENT</title>
  <meta name="description" content="GLITCH — Capture the aesthetic.">
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
      <a class="brand" href="#home">GLITCH</a>
      <nav class="navtabs">
        <a href="#about">Overview</a>
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
          <p class="hero-sub">// LENS CALIBRATED. CAPTURE THE GLITCH.</p>
          <h1 class="glitch-effect" data-text="GLITCH">GLITCH</h1>
          <h2 class="text-cyan">SEPTEMBER 25 | ROOM NO: 106 (MCA 1ST YR B1)</h2>

          <p class="hero-sub" style="margin-top: 2rem;">
            A smartphone photography showdown. Align your vision, stick to the theme, and snap the ultimate shot.
            <br><br>
            <span class="text-red">1ST PRIZE: ₹2000</span> &nbsp;|&nbsp;
            <span class="text-cyan">2ND PRIZE: ₹1000</span>
            <br>
            <span class="text-yellow" style="font-size: 0.9em; margin-top: 5px; display: inline-block;">CERTIFICATES FOR 1ST AND 2ND PLACE</span>
          </p>

          <div class="hero-actions">
            <a class="btn btn-solid" href="#register">INITIALIZE_REG()</a>
            <a class="btn btn-ghost" href="#about">READ_BRIEF()</a>
          </div>
        </div>

        <div class="stack-panel">
          <div class="stack-panel-head">
            // EVENT.TRACE
          </div>
          <div class="stack-visual">
            <div class="stack-frame champion">WINNER<span>()</span> &larr; AWARDED</div>
            <div class="stack-frame">EVALUATE<span>()</span></div>
            <div class="stack-frame">SUBMIT<span>()</span></div>
            <div class="stack-frame">CAPTURE<span>()</span></div>
            <div class="stack-frame">THEME_REVEAL<span>()</span></div>
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
            <span style="margin-left: 10px; color: var(--border-cyan); font-family: var(--font-body);">MANIFEST.JPEG</span>
          </div>
          <div class="terminal-body">
            <p><span class="prompt">root@cam:~#</span> open manifest.jpeg</p>
            <p>GLITCH is a <span class="highlight">smartphone-only</span> individual photography competition.</p>
            <p>Participants will be given a specific theme on the spot and must capture original, unedited photos that best represent it.</p>
            <p>No AI, no edits, no filters. Pure raw perspective.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Rules -->
    <section id="rules">
      <div class="wrap">
        <div class="section-head">
          <h2 class="glitch-effect text-yellow" data-text="02 // RULES & REGS">02 // RULES & REGS</h2>
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
              <li style="margin-bottom: 8px;">Each participant can submit a <span class="highlight">maximum of one entry</span>.</li>
              <li style="margin-bottom: 8px;">Photos must be taken on a <span class="highlight">smartphone</span>.</li>
              <li style="margin-bottom: 8px;">Photos must follow the given theme.</li>
              <li style="margin-bottom: 8px;">Photos must be original and clicked by the participant. Copied images will lead to disqualification.</li>
              <li style="margin-bottom: 8px;">AI generated images, editing (using any type of editing software), watermarks, and logos are <span class="highlight">strictly prohibited</span>.</li>
              <li style="margin-bottom: 8px;">Photos must be submitted in <span class="text-cyan">JPEG / PNG / HEIF</span> formats.</li>
              <li style="margin-bottom: 8px;">The file name should contain the participant's name and college name.</li>
              <li style="margin-bottom: 8px;">Entries must be submitted within the time limit (which will be specified later). Late submissions will not be accepted.</li>
              <li style="margin-bottom: 8px;">The decision made by the judges will be final.</li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <!-- Timeline -->
    <section id="timeline">
      <div class="wrap">
        <div class="section-head">
          <h2 class="glitch-effect text-cyan" data-text="03 // SCHEDULE">03 // SCHEDULE</h2>
        </div>

        <div class="log">
          <div class="log-line active">
            <span class="log-time">09:30 AM</span>
            <div class="log-body">
              <h3>REPORTING TIME</h3>
              <p>Check-in at Room No: 106 (MCA 1st yr B1).</p>
            </div>
          </div>
          <div class="log-line active">
            <span class="log-time">10:30 AM</span>
            <div class="log-body">
              <h3 class="text-red">REGISTRATION CLOSES / EVENT BEGINS</h3>
              <p>The theme is revealed and participants begin shooting.</p>
            </div>
          </div>
          <div class="log-line">
            <span class="log-time">01:00 PM</span>
            <div class="log-body">
              <h3 class="text-yellow">EVENT CONCLUDES</h3>
              <p>Time limit expires. Submissions close and evaluation begins.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Register / Payment -->
    <section id="register">
      <div class="wrap">
        <div class="section-head">
          <h2 class="glitch-effect text-red" data-text="04 // SECURE ACCESS">04 // SECURE ACCESS</h2>
          <p>₹150 per participant. Payment required to confirm registration.</p>
        </div>

        <div class="notice-box">
          <h3 class="text-yellow">// PAYMENT PROTOCOL</h3>
          <p>You must complete the payment via UPI to secure your spot. Keep a screenshot of your successful transaction, as it must be uploaded to our official Google Form.</p>
          
          <label class="cyber-checkbox-label" style="margin-bottom: 15px;">
            <input type="checkbox" name="engg_college_confirm" id="enggCollegeConfirm" value="Other" required>
            <span class="checkmark"></span>
            I confirm I am not a student of an Engineering College
          </label>

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
            <a class="btn btn-solid" href="https://docs.google.com/forms/d/e/1FAIpQLSfAhpOBk10nTkpB2xH-w1J0vAuYV1VreXjnMgHLiRpGOratVg/viewform?usp=publish-editor" target="_blank" style="margin-top: 1rem;">
              ACCESS_GOOGLE_FORM()
            </a>
          </div>
        </div>
      </div>
    </section>
  </main>

  <footer>
    <p>© 2026 GLITCH // SYSTEM.HALT.</p>
  </footer>

  <script src="script.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const paymentAcknowledge = document.getElementById('paymentAcknowledge');
      const paymentPortal = document.getElementById('paymentPortal');

      if (paymentAcknowledge && paymentPortal) {
        paymentAcknowledge.addEventListener('change', function() {
          if (this.checked) {
            paymentPortal.classList.remove('hidden');
          } else {
            paymentPortal.classList.add('hidden');
          }
        });
      }
    });
  </script>
</body>

</html>