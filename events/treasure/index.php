<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TREASURE_HUNT // DEFY THE LIMITS</title>
  <meta name="description" content="TREASURE HUNT — Find the hidden clues.">
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
      <a class="brand" href="#home">TREASURE_HUNT</a>
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
          <p class="hero-sub">Your Treasure Is Waiting.</p>
          <h1 class="glitch-effect" data-text="TREASURE HUNT">TREASURE HUNT</h1>
          <h2 class="text-cyan">SEPTEMBER 25</h2>

          <p class="hero-sub" style="margin-top: 2rem;">
            Follow the clues. Solve the puzzles. Find the treasure.
          </p>

          <div class="hero-actions">
            <a class="btn btn-solid" href="#register">Register Now</a>
            <a class="btn btn-ghost" href="#about">The Brief</a>
          </div>
        </div>

        <div class="stack-panel">
          <div class="stack-panel-head">
            // TREASURE.LOG
          </div>
          <div class="stack-visual">
            <div class="stack-frame champion">TREASURE_FOUND<span>()</span> &larr; RETURNED</div>
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
            <span style="margin-left: 10px; color: var(--border-cyan); font-family: var(--font-body);">MANIFEST.SH</span>
          </div>
          <div class="terminal-body">
            <p><span class="prompt">root@sys:~#</span> cat manifest.sh</p>
            <p>Treasure Hunt is an exhilarating physical and mental challenge happening on <span class="highlight">September 24</span>.</p>
            <p>Teams of 4 navigate through clues, solve puzzles, and race against time to uncover the ultimate prize.</p>
            <p>Only the sharpest minds and the fastest feet will claim the treasure. Are you ready?</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Rules -->
    <section id="rules">
      <div class="wrap">
        <div class="section-head">
          <h2 class="glitch-effect" data-text="02 // THE RULES">02 // THE RULES</h2>
        </div>
        <div class="terminal">
          <div class="terminal-head">
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
            <span style="margin-left: 10px; color: var(--border-cyan); font-family: var(--font-body);">RULES.TXT</span>
          </div>
          <div class="terminal-body rules-list">
            <ol>
              <li>Student from nirmala college can not participate.</li>
              <li>Each team must consist of 4 members from the same college.</li>
              <li>Each participant may be a member of only one team.</li>
              <li>All participants must carry their valid college ID card and present it when required.</li>
              <li>Clues must be solved in the given order. Skipping clues is strictly prohibited.</li>
              <li>The event will start promptly at the scheduled time, regardless of other schedules or delays.</li>
              <li>Participants must report and complete registration before 9:30 AM on 24 September 2026. Late arrivals may be disqualified.</li>
              <li>The competition will begin at 10:30 AM.</li>
              <li>Teams are not permitted to communicate or collaborate with other teams during the competition.</li>
              <li>The use of mobile phones, the Internet, or any form of outside assistance is strictly prohibited.</li>
              <li>The decision of the judging panel shall be final and binding.</li>
              <li>Registration fees are non refundable once the registration is completed.</li>
              <li>Participation in the Treasure Hunt is open exclusively to students from external colleges.</li>
              <li>Participants must not damage, move, hide, alter, or tamper with any clue, QR code, marker, property, or event material.</li>
              <li>Participants must not enter restricted, dangerous, or unauthorized areas. They must remain within the designated event premises.</li>
              <li>Participants must not run in unsafe areas, climb structures, enter restricted locations, or engage in any activity that may endanger themselves or others.</li>
              <li>Participants may be responsible for any intentional damage to event materials or college property.</li>
              <li>The registration fee is 400 per team.</li>
              <li>Any violation of the above rules may result in immediate disqualification.</li>
            </ol>
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
              <h3>REGISTRATION DEADLINE</h3>
              <p>Participants must report and complete registration.</p>
            </div>
          </div>
          <div class="log-line active">
            <span class="log-time">10:00 AM</span>
            <div class="log-body">
              <h3 class="text-red">BRIEFING & SETUP</h3>
              <p>Instructions and rules explanation.</p>
            </div>
          </div>
          <div class="log-line">
            <span class="log-time">10:30 AM</span>
            <div class="log-body">
              <h3 class="text-cyan">THE HUNT BEGINS</h3>
              <p>First clue is distributed. Let the race begin.</p>
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
          <p>₹400 per team. Payment required to confirm registration.</p>
        </div>

        <div class="notice-box">
          <h3 class="text-yellow">// PAYMENT PROTOCOL</h3>
          <p>You must complete the payment via UPI to secure your spot in the grid. Keep a screenshot of your successful transaction, as it must be uploaded to our official Google Form.</p>
          <select name="college_confirm" id="collegeConfirm" required>
            <option value="Nirmala College">Confirm You are not in Nirmala College Muvatupuzha</option>
            <option value="Other">Other College</option>
            <option value="Nirmala College">Nirmala College Muvatupuzha</option>
          </select>
          <div id="nirmalaWarning" style="color: var(--valo-red); margin-top: 10px; display: none;">// ERROR: Registration is restricted for Nirmala College students.</div>
          
          <select name="course_confirm" id="courseConfirm" required style="margin-top: 10px;">
            <option value="B.Tech">Select Your Course</option>
            <option value="B.Tech">B.Tech</option>
            <option value="M.Tech">M.Tech</option>
            <option value="Other">Other Degree (BSc, BCA, etc.)</option>
          </select>
          <div id="courseWarning" style="color: var(--valo-red); margin-top: 10px; display: none;">// ERROR: Registration is restricted for B.Tech and M.Tech students.</div>

          <label class="cyber-checkbox-label">
            <input type="checkbox" id="paymentAcknowledge">
            <span class="checkmark"></span>
            I acknowledge the payment requirements.
          </label>
        </div>

        <div id="paymentPortal" class="payment-portal hidden">
          <div class="qr-container">
            <h4 class="text-cyan">SCAN TO PAY ₹400</h4>
            <!-- Placeholder for actual QR code image -->
            <div class="qr-wrapper">
              <img src="payment_qr/treasure1Qr.jpeg" alt="Payment QR Code Placeholder" class="qr-code">
              <img src="payment_qr/treasure2Qr.jpeg" alt="Payment QR Code Placeholder" class="qr-code">
            </div>
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
    <p>© 2026 TREASURE_HUNT // SYSTEM.HALT.</p>
  </footer>

  <script src="script.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const collegeConfirm = document.getElementById('collegeConfirm');
      const courseConfirm = document.getElementById('courseConfirm');
      const paymentAcknowledge = document.getElementById('paymentAcknowledge');
      const nirmalaWarning = document.getElementById('nirmalaWarning');
      const courseWarning = document.getElementById('courseWarning');
      const paymentPortal = document.getElementById('paymentPortal');

      function validateRegistration() {
        let isValid = true;
        
        if (collegeConfirm && collegeConfirm.value === 'Nirmala College') {
          isValid = false;
          nirmalaWarning.style.display = 'block';
        } else if (nirmalaWarning) {
          nirmalaWarning.style.display = 'none';
        }
        
        if (courseConfirm && (courseConfirm.value === 'B.Tech' || courseConfirm.value === 'M.Tech')) {
          isValid = false;
          courseWarning.style.display = 'block';
        } else if (courseWarning) {
          courseWarning.style.display = 'none';
        }
        
        if (!isValid) {
          if (paymentAcknowledge) {
            paymentAcknowledge.disabled = true;
            paymentAcknowledge.checked = false;
          }
          if (paymentPortal) paymentPortal.classList.add('hidden');
        } else {
          if (paymentAcknowledge) paymentAcknowledge.disabled = false;
        }
      }

      if (collegeConfirm) collegeConfirm.addEventListener('change', validateRegistration);
      if (courseConfirm) courseConfirm.addEventListener('change', validateRegistration);
    });
  </script>
</body>

</html>