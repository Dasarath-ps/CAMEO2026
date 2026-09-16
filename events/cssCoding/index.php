<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>STYLEPUNK // CSS BATTLE</title>
  <meta name="description" content="STYLEPUNK — The ultimate CSS and styling competition.">
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
      <a class="brand" href="#home">STYLEPUNK</a>
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
          <p class="hero-sub">// STYLESHEET OVERRIDE INITIATED. BRING THE AESTHETICS.</p>
          <h1 class="glitch-effect" data-text="STYLEPUNK">STYLEPUNK</h1>
          <h2 class="text-cyan">SEPTEMBER 25 | VENUE: MINI LAB (202)</h2>

          <p class="hero-sub" style="margin-top: 2rem;">
            Showcase your raw front-end skills. Build pixel-perfect interfaces without external libraries and claim the spotlight.
            <br><br>
            <span class="text-red">CERTIFICATES: TOP 4</span>
          </p>

          <div class="hero-actions">
            <a class="btn btn-solid" href="#register">INITIALIZE_REG()</a>
            <a class="btn btn-ghost" href="#about">READ_BRIEF()</a>
          </div>
        </div>

        <div class="stack-panel">
          <div class="stack-panel-head">
            // EXECUTE.TRACE
          </div>
          <div class="stack-visual">
            <div class="stack-frame champion">CHAMPION<span>()</span> &larr; AWARDED</div>
            <div class="stack-frame">EVALUATE<span>()</span></div>
            <div class="stack-frame">BUILD<span>()</span></div>
            <div class="stack-frame">PRELIM<span>()</span></div>
            <div class="stack-frame">DESIGN<span>()</span></div>
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
            <span style="margin-left: 10px; color: var(--border-cyan); font-family: var(--font-body);">MANIFEST.CSS</span>
          </div>
          <div class="terminal-body">
            <p><span class="prompt">root@cam:~#</span> cat manifest.css</p>
            <p>STYLEPUNK is an intensive frontend design challenge on <span class="highlight">September 25</span> at <span class="highlight">Mini lab, ROOM NO: 202</span>.</p>
            <p>Participants will recreate beautiful layouts purely with HTML and CSS.</p>
            <p>Creativity, precision, and raw styling ability are paramount. The use of frameworks is strictly disabled.</p>
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
            <span class="frame-tag">OPTIONAL</span>
            <h3 class="text-light">PRELIMINARY ROUND</h3>
            <p>Based on participant numbers, a screening round testing core HTML/CSS concepts may be conducted.</p>
          </article>

          <article class="frame-card" data-depth="2">
            <span class="frame-tag" style="color: var(--cyber-yellow)">MAIN EVENT</span>
            <h3 class="text-cyan">THE CODING CLASH</h3>
            <p>Systems are provided. You have until 12:00 PM to bring the provided design to life.</p>
          </article>

          <article class="frame-card" data-depth="3">
            <span class="frame-tag" style="color: var(--valo-red)">EVALUATION</span>
            <h3 class="text-red">JUDGING</h3>
            <p>Entries are judged on accuracy, code quality, and responsiveness. Judges' decisions are final.</p>
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
              <li style="margin-bottom: 8px;">Individual and two-member team participation is allowed.</li>
              <li style="margin-bottom: 8px;">Systems will be provided by the organizers. Participants are not allowed to use personal laptops. Mobile phones are also not permitted.</li>
              <li style="margin-bottom: 8px;">All participants must carry their valid college ID card for verification purposes.</li>
              <li style="margin-bottom: 8px;">Once registered, no refunds will be provided under any circumstances. Participants are advised to confirm their availability before registering.</li>
              <li style="margin-bottom: 8px;">The event will begin strictly as per the scheduled time. No extra time will be granted. The organizers will not be responsible for any overlap with other events.</li>
              <li style="margin-bottom: 8px;">Participants must maintain proper discipline throughout the event. Any form of misconduct, cheating, or disruptive behavior will result in immediate disqualification.</li>
              <li style="margin-bottom: 8px;">The use of AI tools, external packages, or templates is <span class="highlight">strictly prohibited</span>.</li>
              <li style="margin-bottom: 8px;">The decisions made by the judging panel are final and binding. No appeals or requests for re-evaluation will be entertained.</li>
              <li style="margin-bottom: 8px;">A preliminary round based on HTML and CSS may be conducted depending on the number of participants.</li>
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
              <h3>REGISTRATION & SETUP</h3>
              <p>Check-in at the venue and find your workstation.</p>
            </div>
          </div>
          <div class="log-line">
            <span class="log-time">10:00 AM</span>
            <div class="log-body">
              <h3 class="text-cyan">STYLEPUNK COMMENCES</h3>
              <p>The challenge begins. Start coding your layouts.</p>
            </div>
          </div>
          <div class="log-line">
            <span class="log-time">12:00 PM</span>
            <div class="log-body">
              <h3 class="text-yellow">SUBMISSION & END</h3>
              <p>Time is up. Stop coding and await evaluation.</p>
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
          <p>₹200 per team. Payment required to confirm registration.</p>
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
            <h4 class="text-cyan">SCAN TO PAY ₹200</h4>
            <img src="payment_qr/qr1.jpeg" alt="Payment QR Code" class="qr-code">
            <p style="margin-top: 10px; font-family: var(--font-body); color: var(--valo-light);">UPI: technova@ybl</p>
          </div>

          <div class="form-container">
            <h4 class="text-red">FINAL STEP: TRANSMIT DATA</h4>
            <p>Upload your payment screenshot and participant details to the central mainframe.</p>
            <a class="btn btn-solid" href="https://forms.gle/st2qA4qDxetKeurGA" target="_blank" style="margin-top: 1rem;">
              ACCESS_GOOGLE_FORM()
            </a>
          </div>
        </div>
      </div>
    </section>
  </main>

  <footer>
    <p>© 2026 STYLEPUNK // SYSTEM.HALT.</p>
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