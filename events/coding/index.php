<?php
// STACK ATTACK — Coding Competition (September 25)
$eventName = "STACK ATTACK";
$eventDate = "SEPTEMBER 25";
$prizePool = "₹11,500";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $eventName; ?> — Coding Competition | <?php echo $eventDate; ?></title>
  <meta name="description" content="STACK ATTACK — Cyberpunk Coding Competition on September 25. Test your algorithms and speed coding skills.">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <!-- Canvas Particle Overlay & Scanlines -->
  <canvas id="cyberCanvas"></canvas>
  <div class="scanlines"></div>

  <!-- NAVBAR -->
  <header class="navbar">
    <a class="brand" href="#home">
      <span>STACK</span> ATTACK
      <!-- <span class="brand-badge">SEPT 25</span> -->
    </a>
    <nav>
      <a href="#about" class="active">Overview</a>
      <a href="#rounds">Rounds</a>
      <a href="#timeline">Timeline</a>
      <a href="#prizes">Prizes</a>
      <a href="#rules">Rules</a>
      <a href="#judging">Evaluation</a>
    </nav>
    <a class="cyber-btn" href="#register">
      REGISTER NOW <span>↗</span>
    </a>
  </header>

  <main>
    <!-- HERO SECTION WITH RED NEON & BACKGROUND IMAGE -->
    <section class="hero" id="home">
      <div class="grid-overlay"></div>
      <div class="hero-glow-overlay"></div>

      <div class="hero-content">
        <div class="eyebrow">
          <span class="eyebrow-dot"></span>
          PEAK LEVEL CODING COMPETITION
        </div>

        <h1 class="glow-red-text">STACK<br><span>ATTACK</span></h1>

        <p class="hero-copy">
          THINK BEYOND THE LIMITS.<br>
          <span class="glow-cyan-text">CODE BEYOND EXPECTATIONS.</span>
        </p>

        <p class="hero-sub">
          A premier competitive coding battleground designed to test algorithmic speed, data structure mastery, and real-time problem-solving precision.
        </p>

        <div class="hero-actions">
          <a class="cyber-btn" href="#register">REGISTER FOR SEPT 25 ↗</a>
          <a class="cyber-btn cyber-btn-outline" href="#about">VIEW BRIEFING</a>
        </div>

        <!-- COUNTDOWN HUD PANEL TO SEPT 25 -->
        <!-- <div class="countdown-box">
          <div class="countdown-title">
            <span>[ COMPETITION LAUNCH COUNTDOWN ]</span>
            <span>SEPTEMBER 25</span>
          </div>
          <div class="timer-units">
            <div class="timer-unit">
              <b id="timerDays">00</b>
              <span>DAYS</span>
            </div>
            <span class="timer-colon">:</span>
            <div class="timer-unit">
              <b id="timerHours">00</b>
              <span>HOURS</span>
            </div>
            <span class="timer-colon">:</span>
            <div class="timer-unit">
              <b id="timerMins">00</b>
              <span>MINS</span>
            </div>
            <span class="timer-colon">:</span>
            <div class="timer-unit">
              <b id="timerSecs">00</b>
              <span>SECS</span>
            </div>
          </div> -->
        </div>

        <div class="event-meta">
          <div>
            <small>EVENT DATE</small>
            <b style="color: var(--neon-red);"><?php echo $eventDate; ?></b>
          </div>
          <div>
            <small>EVENT TYPE</small>
            <b>CODING COMPETITION</b>
          </div>
          <div>
            <small>FORMAT</small>
            <b>3 TIMED ROUNDS</b>
          </div>
          <div>
            <small>PRIZE POOL</small>
            <b style="color: var(--cyber-cyan);"><?php echo $prizePool; ?></b>
          </div>
        </div>
      </div>
    </section>

    <!-- SECTION 01: OVERVIEW TERMINAL -->
    <section class="section" id="about">
      <div class="section-label">01 / COMPETITION BRIEFING</div>
      <div class="section-heading">
        <h2>THINK FAST.<br><span>CODE FASTER.</span></h2>
        <p>Prepare your compilers for the ultimate algorithmic showdown on September 25.</p>
      </div>

      <div class="terminal-window">
        <div class="terminal-header">
          <div class="terminal-dots">
            <span class="dot red"></span>
            <span class="dot yellow"></span>
            <span class="dot green"></span>
          </div>
          <div class="terminal-title">STACK_ATTACK // SYSTEM_MANIFEST.SH</div>
        </div>
        <div class="terminal-body">
          <p><span class="cmd-prompt">root@stack-attack:~#</span> ./start_competition_brief.sh</p>
          <p style="color: var(--cyber-cyan);">[INFO] Stack Attack is an intense speed and algorithmic coding competition taking place on September 25.</p>
          <p>Coders will compete across 3 grueling elimination rounds designed to evaluate syntax speed, logical debugging, and high-level algorithmic optimization.</p>
          <p style="color: var(--neon-red);">[SYSTEM PROTOCOL] All submissions will be evaluated automatically via sandboxed testcase runners. Speed and efficiency matter.</p>
        </div>
      </div>
    </section>

    <!-- SECTION 02: COMPETITION ROUNDS -->
    <section class="section dark-section" id="rounds">
      <div class="section-label">02 / COMPETITION STAGES</div>
      <div class="section-heading">
        <h2>THE BATTLE<br><span>STAGES.</span></h2>
        <p>Three elimination rounds leading to the Grand Champion title.</p>
      </div>

      <div class="cards-grid">
        <article class="round-card">
          <div class="round-no">01</div>
          <div class="round-icon">⚡</div>
          <h3>Round 1: Speed Coding &amp; Bug Blitz</h3>
          <p>Fix syntax errors, identify logical bugs, and solve high-speed logic prompts under tight time constraints.</p>
          <span class="round-tag">TIMED SPEED ROUND // 45 MINS</span>
        </article>

        <article class="round-card">
          <div class="round-no">02</div>
          <div class="round-icon">🧩</div>
          <h3>Round 2: Data Structures &amp; Algorithms</h3>
          <p>Solve medium-to-hard algorithmic problems focusing on arrays, trees, graphs, dynamic programming, and greedy logic.</p>
          <span class="round-tag">ALGORITHMIC MASTERY // 90 MINS</span>
        </article>

        <article class="round-card">
          <div class="round-no">03</div>
          <div class="round-icon">👑</div>
          <h3>Round 3: The Final Boss Code Clash</h3>
          <p>Top qualifiers compete live on the main grid stage to solve complex, optimization-heavy boss problems.</p>
          <span class="round-tag">GRAND FINALS // 60 MINS</span>
        </article>
      </div>
    </section>

    <!-- SECTION 03: TIMELINE FOR SEPT 25 -->
    <section class="section" id="timeline">
      <div class="section-label">03 / SCHEDULE FOR SEPTEMBER 25</div>
      <div class="section-heading">
        <h2>SEPTEMBER 25.<br><span>TIMELINE.</span></h2>
        <p>Chronological schedule for the competition day.</p>
      </div>

      <div class="timeline">
        <div class="time-item active">
          <div class="time-stamp">09:00 AM</div>
          <div>
            <h3>System Check-in &amp; Orientation</h3>
            <p>Participant verification, environment setup, and platform orientation.</p>
          </div>
        </div>

        <div class="time-item active">
          <div class="time-stamp">10:00 AM</div>
          <div>
            <h3>Round 1 — Speed Coding &amp; Bug Blitz</h3>
            <p>First elimination stage opens. Speed and syntax accuracy tested.</p>
          </div>
        </div>

        <div class="time-item">
          <div class="time-stamp">11:30 AM</div>
          <div>
            <h3>Round 1 Results &amp; Break</h3>
            <p>Automated testcase scores compiled; qualifying coders revealed.</p>
          </div>
        </div>

        <div class="time-item">
          <div class="time-stamp">12:00 PM</div>
          <div>
            <h3>Round 2 — Algorithmic Challenge</h3>
            <p>Advanced data structures and algorithm optimization round.</p>
          </div>
        </div>

        <div class="time-item final">
          <div class="time-stamp">02:30 PM</div>
          <div>
            <h3>Round 3 — Grand Final Code Clash</h3>
            <p>Top finalists battle for the Grand Champion trophy.</p>
          </div>
        </div>

        <div class="time-item final">
          <div class="time-stamp">04:00 PM</div>
          <div>
            <h3>Prize Distribution &amp; Closing Ceremony</h3>
            <p>Winner announcement, prize distribution, and certificates.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- SECTION 04: PRIZES -->
    <section class="section dark-section" id="prizes">
      <div class="section-label">04 / PRIZES &amp; RECOGNITION</div>
      <div class="section-heading">
        <h2><?php echo $prizePool; ?><br><span>PRIZE POOL.</span></h2>
        <p>Compete for cash rewards, trophies, and national recognition.</p>
      </div>

      <div class="prize-grid">
        <article class="prize-card featured">
          <span class="prize-badge">// 1ST PLACE CHAMPION</span>
          <div class="prize-amount">₹8,000</div>
          <h3>Grand Coding Champion</h3>
          <p>1st Place Winner receives cash prize, Champion Trophy, and Hard-copy Certificate of Achievement.</p>
        </article>

        <article class="prize-card">
          <span class="prize-badge">// 2ND PLACE RUNNER UP</span>
          <div class="prize-amount">₹3,000</div>
          <h3>Code Vanguard</h3>
          <p>2nd Place Winner receives cash prize and achievement certificate.</p>
        </article>

        <article class="prize-card">
          <span class="prize-badge">// 3RD PLACE HACKER</span>
          <div class="prize-amount">₹500</div>
          <h3>Algorithmic Master</h3>
          <p>3rd Place Winner receives cash prize and achievement certificate.</p>
        </article>
      </div>
    </section>

    <!-- SECTION 05: RULES -->
    <section class="section" id="rules">
      <div class="section-label">05 / SYSTEM PROTOCOLS &amp; RULES</div>
      <div class="section-heading">
        <h2>COMPETITION<br><span>RULES.</span></h2>
      </div>

      <div class="terminal-window">
        <div class="terminal-body" style="padding: 20px;">
          <p><span class="cmd-prompt">01.</span> Allowed Languages: C++, Python, Java, C, JavaScript.</p>
          <p><span class="cmd-prompt">02.</span> Participation can be individual or in teams of up to 2 participants.</p>
          <p><span class="cmd-prompt">03.</span> All code submissions will be scanned by automated anti-plagiarism tools.</p>
          <p><span class="cmd-prompt">04.</span> Any form of unfair means or unauthorized assistance will result in instant disqualification.</p>
          <p><span class="cmd-prompt">05.</span> Decisions made by the official judging panel are final.</p>
        </div>
      </div>
    </section>

    <!-- SECTION 06: EVALUATION MATRIX -->
    <section class="section dark-section" id="judging">
      <div class="section-label">06 / EVALUATION MATRIX</div>
      <div class="section-heading">
        <h2>AUTOMATED<br><span>RUBRIC.</span></h2>
        <p>Scoring breakdown for competitive submissions.</p>
      </div>

      <table class="rubric-table">
        <thead>
          <tr>
            <th>CRITERION</th>
            <th>WEIGHT</th>
            <th>EVALUATION STANDARD</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Testcase Accuracy</td>
            <td class="rubric-weight">40%</td>
            <td>Passing secret and public automated test cases cleanly without runtime errors.</td>
          </tr>
          <tr>
            <td>Time &amp; Space Complexity</td>
            <td class="rubric-weight">30%</td>
            <td>Optimal asymptotic performance (O(N), O(N log N)) under memory and time limits.</td>
          </tr>
          <tr>
            <td>Submission Speed</td>
            <td class="rubric-weight">20%</td>
            <td>Speed of correct solution submission (time penalty applied for incorrect attempts).</td>
          </tr>
          <tr>
            <td>Code Quality &amp; Cleanliness</td>
            <td class="rubric-weight">10%</td>
            <td>Readable code structure, proper variable naming, and efficiency.</td>
          </tr>
        </tbody>
      </table>
    </section>

    <!-- SECTION 07: REGISTRATION PORTAL -->
    <section class="register-section" id="register">
      <div class="form-container">
        <div class="section-label" style="text-align: center;">// CANDIDATE REGISTRATION</div>
        <h2 style="text-align: center; margin-bottom: 10px;">REGISTER FOR <span>SEPTEMBER 25.</span></h2>
        <p style="text-align: center; color: var(--text-muted); margin-bottom: 30px;">
          Lock in your spot for Stack Attack. Registration Fee: ₹200 / Participant.
        </p>

        <form id="registrationForm">
          <div class="form-grid">
            <div class="form-group">
              <label>PARTICIPANT / TEAM LEADER NAME *</label>
              <input type="text" name="participant_name" placeholder="Full Name" required>
            </div>
            <div class="form-group">
              <label>EMAIL ADDRESS *</label>
              <input type="email" name="email" placeholder="coder@domain.com" required>
            </div>
            <div class="form-group">
              <label>PHONE NUMBER *</label>
              <input type="tel" name="phone" placeholder="+91 XXXXX XXXXX" required>
            </div>
            <div class="form-group">
              <label>COLLEGE / INSTITUTION *</label>
              <input type="text" name="college" placeholder="Institute Name" required>
            </div>
            <div class="form-group">
              <label>PREFERRED LANGUAGE CATEGORY *</label>
              <select name="category" required>
                <option value="">Select Preferred Language</option>
                <option value="C++">C++</option>
                <option value="Python">Python</option>
                <option value="Java">Java</option>
                <option value="C">C</option>
                <option value="JavaScript">JavaScript</option>
              </select>
            </div>
            <div class="form-group">
              <label>EXPERIENCE LEVEL</label>
              <select name="experience">
                <option value="Beginner">Beginner (1st Year / Novice)</option>
                <option value="Intermediate">Intermediate (DSA Learner)</option>
                <option value="Advanced">Advanced (Competitive Coder)</option>
              </select>
            </div>
          </div>

          <div style="margin-top: 25px;">
            <button class="cyber-btn" type="submit" style="width: 100%; justify-content: center;">
              SUBMIT REGISTRATION DATA <span>↗</span>
            </button>
          </div>

          <div id="formMessage" class="form-message"></div>
        </form>
      </div>
    </section>
  </main>

  <!-- FOOTER -->
  <footer>
    <div>
      <a class="brand" href="#home" style="font-size: 1.1rem;"><span>STACK</span> ATTACK</a>
      <p>© 2026 STACK ATTACK CODING COMPETITION — SEPTEMBER 25. ALL RIGHTS RESERVED.</p>
    </div>
    <div>
      <a href="#home">RETURN TO TOP ↑</a>
    </div>
  </footer>

  <script src="script.js"></script>
</body>
</html>
