<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BYTE THE BEATS // SPOT CHOREO</title>
  <meta name="description" content="BYTE THE BEATS — The ultimate spot choreography competition.">
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
      <a class="brand" href="#home">BYTE THE BEATS</a>
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
          <p class="hero-sub">// AUDIO OVERRIDE INITIATED. HIT THE STAGE.</p>
          <h1 class="glitch-effect" data-text="BYTE THE BEATS">BYTE THE BEATS</h1>
          <h2 class="text-cyan">SEPTEMBER 25 | MCA AUDITORIUM (305)</h2>

          <p class="hero-sub" style="margin-top: 2rem;">
            Showcase your expression, creativity, and stage presence. Adapt to the beat and claim the spotlight.
            <br><br>
            <span class="text-red">1ST PRIZE: ₹3000 + CERTIFICATE</span> &nbsp;|&nbsp;
            <span class="text-cyan">2ND PRIZE: ₹2000 + CERTIFICATE</span> &nbsp;|&nbsp;
            <span class="text-yellow">3RD PRIZE: CERTIFICATE</span>
          </p>

          <div class="hero-actions">
            <a class="btn btn-solid" href="#register">INITIALIZE_REG()</a>
            <a class="btn btn-ghost" href="#about">READ_BRIEF()</a>
          </div>
        </div>

        <div class="stack-panel">
          <div class="stack-panel-head">
            // DANCE.TRACE
          </div>
          <div class="stack-visual">
            <div class="stack-frame champion">CHAMPION<span>()</span> &larr; AWARDED</div>
            <div class="stack-frame">EVALUATE<span>()</span></div>
            <div class="stack-frame">PERFORM<span>()</span></div>
            <div class="stack-frame">ROUND_2<span>()</span></div>
            <div class="stack-frame">ROUND_1<span>()</span></div>
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
            <span style="margin-left: 10px; color: var(--border-cyan); font-family: var(--font-body);">MANIFEST.MP3</span>
          </div>
          <div class="terminal-body">
            <p><span class="prompt">root@cam:~#</span> play manifest.mp3</p>
            <p>BYTE THE BEATS is an intense spot choreography competition on <span class="highlight">September 25</span> at the <span class="highlight">MCA Auditorium (305)</span>.</p>
            <p>Participants will undergo 3 rigorous rounds where the music is strictly provided by the organizers.</p>
            <p>Expression, creativity, and unscripted stage presence are paramount. Only the best dancers will survive.</p>
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
            <span class="frame-tag">09:00 AM</span>
            <h3 class="text-light">PHASE 1: REPORTING</h3>
            <p>Check-in at the MCA Auditorium 15 minutes before the event begins. ID verification.</p>
          </article>

          <article class="frame-card" data-depth="2">
            <span class="frame-tag" style="color: var(--cyber-yellow)">10:00 AM</span>
            <h3 class="text-cyan">PHASE 2: THE ROUNDS</h3>
            <p>3 rounds of spot choreography begin. Adapt to the organizers' music instantly.</p>
          </article>

          <article class="frame-card" data-depth="3">
            <span class="frame-tag" style="color: var(--valo-red)">02:00 PM</span>
            <h3 class="text-red">PHASE 3: EVALUATION</h3>
            <p>Judges will evaluate based on expression, creativity, and stage presence. Champions awarded.</p>
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
              <li style="margin-bottom: 8px;">Students of Nirmala College Muvattupuzha (Autonomous) are <span class="highlight">not eligible</span> to participate in the event.</li>
              <li style="margin-bottom: 8px;">Participants must carry their college ID card.</li>
              <li style="margin-bottom: 8px;">The event is open to individual participants only.</li>
              <li style="margin-bottom: 8px;">The event will commence strictly at 10:00 AM.</li>
              <li style="margin-bottom: 8px;">Reporting time: 9:00 AM. Registration closes at: 9:30 AM.</li>
              <li style="margin-bottom: 8px;">All participants must be present in the MCA Auditorium 15 minutes before the event begins.</li>
              <li style="margin-bottom: 8px;">The event consists of 3 rounds.</li>
              <li style="margin-bottom: 8px;">The registration fee is ₹100/- per participant.</li>
              <li style="margin-bottom: 8px;">Songs for all 3 rounds will be provided by the organizers.</li>
              <li style="margin-bottom: 8px;">Participants are not permitted to carry or use personal properties or other accessories during the performance.</li>
              <li style="margin-bottom: 8px;">Participants will be judged based on expression, creativity, and stage presence.</li>
              <li style="margin-bottom: 8px;">Costumes should be neat, decent, and comfortable.</li>
              <li style="margin-bottom: 8px;">The decision of the judges will be final and binding.</li>
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
              <p>Participants must report to the MCA Auditorium (305).</p>
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
              <h3 class="text-cyan">EVENT COMMENCES</h3>
              <p>The 3 rounds of spot choreography begin.</p>
            </div>
          </div>
          <div class="log-line">
            <span class="log-time">02:00 PM</span>
            <div class="log-body">
              <h3 class="text-yellow">EVALUATION & AWARDS</h3>
              <p>The event concludes and the best dancers are awarded.</p>
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
          <p>₹100 per participant. Payment required to confirm registration.</p>
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
            <h4 class="text-cyan">SCAN TO PAY ₹100</h4>
            <img src="payment_qr/qr1.jpeg" alt="Payment QR Code" class="qr-code">
            <p style="margin-top: 10px; font-family: var(--font-body); color: var(--valo-light);">UPI: technova@ybl</p>
          </div>

          <div class="form-container">
            <h4 class="text-red">FINAL STEP: TRANSMIT DATA</h4>
            <p>Upload your payment screenshot and participant details to the central mainframe.</p>
            <a class="btn btn-solid" href="https://docs.google.com/forms/d/e/1FAIpQLSfRzvss59oheqXbBVgDmER3ZMqWlj4Ru8jmpBkUzrgQ5GFhtg/viewform?usp=publish-editor" target="_blank" style="margin-top: 1rem;">
              ACCESS_GOOGLE_FORM()
            </a>
          </div>
        </div>
      </div>
    </section>
  </main>

  <footer>
    <p>© 2026 BYTE THE BEATS // SYSTEM.HALT.</p>
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