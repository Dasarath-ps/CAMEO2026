<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>STACK_ATTACK // DEFY THE LIMITS</title>
  <meta name="description" content="STACK ATTACK — Cyberpunk coding competition.">
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
      <a class="brand" href="#home">STACK_ATTACK</a>
      <nav class="navtabs">
        <a href="#about">Overview</a>
        <a href="#rounds">Rounds</a>
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
          <p class="hero-sub">// SYSTEM OVERRIDE INITIATED. PREPARE FOR BATTLE.</p>
          <h1 class="glitch-effect" data-text="STACK ATTACK">STACK ATTACK</h1>
          <h2 class="text-cyan">SEPTEMBER 25</h2>

          <p class="hero-sub" style="margin-top: 2rem;">
            Three rounds. One call stack. Push a solution, get evaluated, and only the sharpest frame survives to the top.
          </p>

          <div class="hero-actions">
            <a class="btn btn-solid" href="#register">INITIALIZE_REG()</a>
            <a class="btn btn-ghost" href="#about">READ_BRIEF()</a>
          </div>
        </div>

        <div class="stack-panel">
          <div class="stack-panel-head">
            // CALL_STACK.TRACE
          </div>
          <div class="stack-visual">
            <div class="stack-frame champion">CHAMPION<span>()</span> &larr; RETURNED</div>
            <div class="stack-frame">ROUND_3<span>()</span></div>
            <div class="stack-frame">ROUND_2<span>()</span></div>
            <div class="stack-frame">ROUND_1<span>()</span></div>
            <div class="stack-frame">MAIN<span>()</span></div>
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
            <span style="margin-left: 10px; color: var(--border-cyan); font-family: var(--font-body);">MANIFEST.SH</span>
          </div>
          <div class="terminal-body">
            <p><span class="prompt">root@sys:~#</span> cat manifest.sh</p>
            <p>Stack Attack is a speed and algorithmic coding competition running on <span class="highlight">September 25</span>.</p>
            <p>Coders compete across <span class="highlight">3 elimination rounds</span> testing syntax speed, logical debugging, and algorithmic optimization.</p>
            <p>All submissions are graded by automated sandboxed test runners — speed and correctness both count. Defy the limits.</p>
            <br>
            <p class="highlight" style="margin-bottom: 5px;">// COORDINATORS</p>
            <p>Staff Coordinator: Ms. Pooja Ashual</p>
            <p>Student Coordinator: Devanandan C S (+91 7736232925)</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Rounds -->
    <section id="rounds">
      <div class="wrap">
        <div class="section-head">
          <h2 class="glitch-effect" data-text="02 // THE FRAMES">02 // THE FRAMES</h2>
        </div>

        <div class="frames">
          <article class="frame-card" data-depth="1">
            <span class="frame-tag">30 MIN</span>
            <h3 class="text-light">ROUND 1: MCQ QUIZ</h3>
            <p>Test your knowledge on syntax, core concepts, and algorithmic foundations in this rapid-fire round.</p>
          </article>

          <article class="frame-card" data-depth="2">
            <span class="frame-tag" style="color: var(--cyber-yellow)">30 MIN</span>
            <h3 class="text-cyan">ROUND 2: DEBUGGING</h3>
            <p>Find and fix syntax errors and logical bugs in broken code snippets under a tight clock.</p>
          </article>

          <article class="frame-card" data-depth="3">
            <span class="frame-tag" style="color: var(--valo-red)">45 MIN</span>
            <h3 class="text-red">ROUND 3: CODING CHALLENGE</h3>
            <p>Top qualifiers face off to solve complex algorithmic and optimization problems live on stage.</p>
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
              <li style="margin-bottom: 8px;">Students from Nirmala College Muvattupuzha (Autonomous) are not eligible to participate in the event.</li>
              <li style="margin-bottom: 8px;">A valid College ID Card is mandatory for all participants and must be presented when required.</li>
              <li style="margin-bottom: 8px;">Minimum Participation: A minimum of 5 teams is required for the event to be conducted. If not met, the event will be cancelled and the fee fully refunded.</li>
              <li style="margin-bottom: 8px;">Each team must consist of exactly 2 members.</li>
              <li style="margin-bottom: 8px;">The registration fee is ₹400 per team. Spot registration will close at 9:30 AM.</li>
              <li style="margin-bottom: 8px;">Participants may use <span class="text-cyan">C, C++, or Java</span> only.</li>
              <li style="margin-bottom: 8px;">If the event is conducted, the registration fee is non-refundable.</li>
              <li style="margin-bottom: 8px;">Discussion or communication between participants/teams is strictly prohibited during the event.</li>
              <li style="margin-bottom: 8px;">The use of mobile phones, the internet, or any form of external assistance is strictly prohibited.</li>
              <li style="margin-bottom: 8px;">The decision of the judges will be final and binding. No appeals or disputes regarding the results will be entertained.</li>
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
              <p>Registration, Seating, and Instructions (5 min)</p>
            </div>
          </div>
          <div class="log-line active">
            <span class="log-time">10:00 AM</span>
            <div class="log-body">
              <h3 class="text-red">ROUND 1: MCQ QUIZ</h3>
              <p>First elimination stage opens. (30 min)</p>
            </div>
          </div>
          <div class="log-line">
            <span class="log-time">10:35 AM</span>
            <div class="log-body">
              <h3>SUBMISSION & TRANSITION</h3>
              <p>Buffer time for collection and transition. (5 min)</p>
            </div>
          </div>
          <div class="log-line">
            <span class="log-time">10:40 AM</span>
            <div class="log-body">
              <h3 class="text-cyan">ROUND 2: DEBUGGING</h3>
              <p>Find and fix the bugs. (30 min)</p>
            </div>
          </div>
          <div class="log-line">
            <span class="log-time">11:10 AM</span>
            <div class="log-body">
              <h3>EVALUATION & SELECTION</h3>
              <p>Evaluation of Round 2 & selection of finalists. (10 min)</p>
            </div>
          </div>
          <div class="log-line">
            <span class="log-time">11:20 AM</span>
            <div class="log-body">
              <h3>ROUND 3 SETUP</h3>
              <p>Instructions and environment setup for finalists. (5 min)</p>
            </div>
          </div>
          <div class="log-line">
            <span class="log-time">11:25 AM</span>
            <div class="log-body">
              <h3 class="text-yellow">ROUND 3: CODING CHALLENGE</h3>
              <p>The final clash. (45 min)</p>
            </div>
          </div>
          <div class="log-line">
            <span class="log-time">12:10 PM</span>
            <div class="log-body">
              <h3>FINAL EVALUATION</h3>
              <p>Final evaluation & result compilation. (10 min)</p>
            </div>
          </div>
          <div class="log-line">
            <span class="log-time">12:20 PM</span>
            <div class="log-body">
              <h3 class="text-cyan">RESULTS & AWARDS</h3>
              <p>Announcement of winners. (10 min)</p>
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
          <p>You must complete the payment via UPI to secure your spot in the grid. Keep a screenshot of your successful transaction, as it must be uploaded to our official Google Form.</p>
          <label class="cyber-checkbox-label" style="margin-bottom: 15px;">
            <input type="checkbox" name="college_confirm" id="collegeConfirm" value="Other" required>
            <span class="checkmark"></span>
            I confirm I am not a student of Nirmala College Muvattupuzha
          </label>

          <label class="cyber-checkbox-label">
            <input type="checkbox" id="paymentAcknowledge">
            <span class="checkmark"></span>
            I acknowledge the payment requirements.
          </label>
        </div>

        <div id="paymentPortal" class="payment-portal hidden">
          <div class="qr-container">
            <h4 class="text-cyan">SCAN TO PAY ₹200</h4>
            <!-- Placeholder for actual QR code image -->
            <img src="payment_qr/qr1.jpeg" alt="Payment QR Code Placeholder" class="qr-code">
            <p style="margin-top: 10px; font-family: var(--font-body); color: var(--valo-light);">UPI: technova@ybl</p>
          </div>

          <div class="form-container">
            <h4 class="text-red">FINAL STEP: TRANSMIT DATA</h4>
            <p>Upload your payment screenshot and participant details to the central mainframe.</p>
            <a class="btn btn-solid" href="https://docs.google.com/forms/d/e/1FAIpQLScrEHc4zLHOtKy5PS69lNU791_LUq0HnONgsHrhmOOt2BP5Cg/viewform" target="_blank" style="margin-top: 1rem;">
              ACCESS_GOOGLE_FORM()
            </a>
          </div>
        </div>
      </div>
    </section>
  </main>

  <footer>
    <p>© 2026 STACK_ATTACK // SYSTEM.HALT.</p>
  </footer>

  <script src="script.js"></script>

</body>

</html>