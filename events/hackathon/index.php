<?php
require_once __DIR__ . '/config/db.php';
$pdo = getDbConnection();
$count = $pdo->query("SELECT COUNT(*) FROM registrations")->fetchColumn();
$isFull = $count >= MAX_REGISTRATIONS;
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>NEXYRA — 24 Hour Hackathon</title>
  <meta name="description" content="Nexyra — 24-hour technical hackathon focused on innovation, collaboration and practical problem-solving.">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;700;800;900&family=Plus+Jakarta+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,400;1,600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="static/style.css">
</head>

<body>
  <div class="noise"></div>
  <header class="navbar">
    <a class="brand" href="#home">NEX<span>Y</span>RA</a>
    <nav>
      <a href="#about">Overview</a>
      <a href="#themes">Topics</a>
      <a href="#timeline">Timeline</a>
      <a href="#prizes">Prizes</a>
      <a href="#rules">Rules</a>
      <a href="#criteria">Judging</a>
    </nav>
    <a class="nav-btn" href="#register">Register</a>
  </header>

  <div class="top-logo-strip" aria-label="Nexyra associated logos">
    <div class="logo-marquee">
      <div class="logo-track">
        <div class="logo-set">
          <div class="logo-badge-card college-card">
            <span class="badge-label">HOST INSTITUTION</span>
            <div class="logo-img-wrapper">
              <img src="logos/logo_3.png" alt="Nirmala College logo" class="college-logo">
            </div>
          </div>
          <span class="logo-sep">✦</span>
          <div class="logo-badge-card ican-card">
            <span class="badge-label">ORGANIZED BY</span>
            <div class="logo-img-wrapper">
              <img src="logos/logo_1.png" alt="iCAN Association logo" class="ican-logo">
            </div>
          </div>
          <span class="logo-sep">✦</span>
          <div class="logo-badge-card emblem-card">
            <span class="badge-label">CAMEO 26</span>
            <div class="logo-img-wrapper">
              <img src="logos/logo_2.png" alt="Nexyra emblem" class="emblem-logo">
            </div>
          </div>
          <span class="logo-sep">✦</span>
        </div>
        <div class="logo-set" aria-hidden="true">
          <div class="logo-badge-card college-card">
            <span class="badge-label">HOST INSTITUTION</span>
            <div class="logo-img-wrapper">
              <img src="logos/logo_3.png" alt="" class="college-logo">
            </div>
          </div>
          <span class="logo-sep">✦</span>
          <div class="logo-badge-card ican-card">
            <span class="badge-label">ORGANIZED BY</span>
            <div class="logo-img-wrapper">
              <img src="logos/logo_1.png" alt="" class="ican-logo">
            </div>
          </div>
          <span class="logo-sep">✦</span>
          <div class="logo-badge-card emblem-card">
            <span class="badge-label">CAMEO 26</span>
            <div class="logo-img-wrapper">
              <img src="logos/logo_2.png" alt="" class="emblem-logo">
            </div>
          </div>
          <span class="logo-sep">✦</span>
        </div>
      </div>
    </div>
  </div>

  <main>
    <section class="hero" id="home">
      <div class="hero-grid"></div>
      <div class="hero-content">
        <p class="eyebrow">24-HOUR TECHNICAL HACKATHON</p>
        <h1>NEX<span>Y</span>RA</h1>
        <p class="hero-copy">24 Hours. One Challenge.<br><strong>Infinite Possibilities.</strong></p>
        <p class="hero-sub">Build bold ideas. Solve real problems. Ship something that matters.</p>
        <div class="hero-actions">
          <a class="primary-btn" href="#register">REGISTER NOW <span>↗</span></a>
          <a class="ghost-btn" href="#about">EXPLORE NEXYRA</a>
        </div>
        <div class="event-meta">
          <div><small>DATE</small><b>SEPT 24–25</b></div>
          <div><small>DURATION</small><b>24 HOURS</b></div>
          <div><small>TEAM SIZE</small><b>2–4 MEMBERS</b></div>
        </div>
      </div>
      <div class="hero-orb">
        <div class="orb-ring r1"></div>
        <div class="orb-ring r2"></div>
        <div class="orb-core">NX</div>
      </div>
    </section>

    <section class="section" id="about">
      <div class="section-label">01 / OVERVIEW</div>
      <div class="two-col">
        <div>
          <h2>Think fast.<br><span>Build faster.</span></h2>
        </div>
        <div>
          <p class="lead">Nexyra is a competitive, time-bound technical hackathon designed to promote innovation, collaboration, creativity and practical problem-solving.</p>
          <p>Participants will transform technical knowledge and ideas into functional, real-world solutions within a strict 24-hour window. Teams will progress through structured stages and be evaluated on efficiency, accuracy, originality, problem-solving ability and adherence to the event guidelines.</p>
        </div>
      </div>
    </section>

    <section class="section dark-section" id="themes">
      <div class="section-label">02 / CHALLENGE TOPICS</div>
      <div class="section-heading">
        <h2>Pick your<br><span>challenge.</span></h2>
        <p>Three problem spaces. Build a practical, scalable solution around one of them.</p>
      </div>
      <div class="cards">
        <article class="theme-card">
          <div class="card-no">01</div>
          <div class="topic-tag retail">RETAIL &amp; E-COMMERCE</div>
          <div class="icon">◫</div>
          <h3>Hyper-Personalized Returns Reduction Engine</h3>
          <p><strong>The Problem:</strong> Product returns cost online retailers heavily in reverse logistics and lost margin. Build a tool that predicts high-return-risk purchases at checkout using size/fit data, review sentiment and past behaviour, then offers real-time nudges to reduce return rates before they happen.</p>
          <p><strong>Suggested Deliverables:</strong> Return-risk prediction model, checkout-widget plugin (Shopify/WooCommerce style), and a merchant analytics dashboard showing projected savings.</p>
          <p><strong>Target Audience / Buyers:</strong> D2C fashion and footwear brands, marketplaces, e-commerce platform providers.</p>
        </article>
        <article class="theme-card">
          <div class="card-no">02</div>
          <div class="topic-tag climate">CLIMATE &amp; ENERGY</div>
          <div class="icon">⌁</div>
          <h3>AI Energy-Waste Auditor for Commercial Buildings</h3>
          <p><strong>The Problem:</strong> Offices, malls, and factories can waste energy due to inefficient HVAC/lighting schedules and equipment drift. Build a tool that ingests smart-meter/IoT sensor data to detect waste patterns, forecast savings opportunities, and auto-generate an actionable retrofit/behavioural report.</p>
          <p><strong>Suggested Deliverables:</strong> Anomaly-detection/forecasting model, facility-manager dashboard, and automated savings report with ROI-ranked recommendations.</p>
          <p><strong>Target Audience / Buyers:</strong> Facility management companies, commercial real estate owners, ESG/sustainability teams.</p>
        </article>
        <article class="theme-card">
          <div class="card-no">03</div>
          <div class="topic-tag education">EDUCATION &amp; WORKFORCE</div>
          <div class="icon">◎</div>
          <h3>AI Skill-Gap-to-Job Matching &amp; Micro-Credentialing Platform</h3>
          <p><strong>The Problem:</strong> Employers struggle to find job-ready candidates while learners don't know which skills actually convert to hiring. Build a platform that matches real job postings to detect in-demand skill gaps, generates bite-sized learning paths, and issues verifiable micro-credentials tied directly to employer requirements.</p>
          <p><strong>Suggested Deliverables:</strong> Job-market skill-gap analysis engine, learner-facing micro-course/path generator, and employer-facing candidate-matching dashboard with credential verification.</p>
          <p><strong>Target Audience / Buyers:</strong> Staffing agencies, corporate L&amp;D teams, edtech platforms, universities.</p>
        </article>
      </div>
      <div class="topic-policy">
        <div class="policy-kicker">IMPORTANT NOTE</div>
        <h3>Topic Participation Policy</h3>
        <p>A minimum of <strong>5 registered teams</strong> is required for each hackathon topic. If fewer than 5 teams register for a selected topic, the participating teams will be given the option to choose from the other two available topics.</p>
      </div>
    </section>

    <section class="section" id="timeline">
      <div class="section-label">03 / TIMELINE</div>
      <div class="section-heading">
        <h2>24 hours.<br><span>One journey.</span></h2>
      </div>
      <div class="timeline">
        <div class="time-item"><time>02:00 PM</time>
          <div>
            <h3>Inauguration &amp; Check-in</h3>
            <p>Inauguration, registration verification, ID verification, participant check-in and venue entry.</p>
          </div>
        </div>
        <div class="time-item active"><time>02:30 PM</time>
          <div>
            <h3>Development Begins</h3>
            <p>Teams begin developing their projects. The 24-hour clock starts.</p>
          </div>
        </div>
        <div class="time-item"><time>03:30 PM</time>
          <div>
            <h3>Final Team Verification</h3>
            <p>Last opportunity for verification. Late teams will not be permitted to join.</p>
          </div>
        </div>
        <div class="time-item"><time>06:00 PM</time>
          <div>
            <h3>Snack Break</h3>
          </div>
        </div>
        <div class="time-item"><time>09:00 PM</time>
          <div>
            <h3>Dinner</h3>
          </div>
        </div>
        <div class="time-item"><time>11:00 PM</time>
          <div>
            <h3>Tea Break</h3>
          </div>
        </div>
        <div class="time-item"><time>OVERNIGHT</time>
          <div>
            <h3>Keep Building</h3>
            <p>Teams continue development, testing and refinement through the night.</p>
          </div>
        </div>
        <div class="time-item"><time>07:00 AM</time>
          <div>
            <h3>Tea Break</h3>
          </div>
        </div>
        <div class="time-item active"><time>08:00 AM</time>
          <div>
            <h3>Round 1 — Evaluation</h3>
            <p>Judges evaluate the projects. The best 9 teams qualify for the presentation round — 3 from each theme.</p>
          </div>
        </div>
        <div class="time-item"><time>09:00 AM</time>
          <div>
            <h3>Breakfast</h3>
          </div>
        </div>
        <div class="time-item active"><time>10:00 AM</time>
          <div>
            <h3>Round 1 Results</h3>
            <p>Qualifying teams are announced.</p>
          </div>
        </div>
        <div class="time-item"><time>10:00 AM – 12:00 PM</time>
          <div>
            <h3>Presentation Preparation</h3>
            <p>Selected teams finalize their PPT and prepare their presentation.</p>
          </div>
        </div>
        <div class="time-item active"><time>12:00 PM – 01:30 PM</time>
          <div>
            <h3>Final Presentation Round</h3>
            <p>Selected teams present their projects before the judging panel.</p>
          </div>
        </div>
        <div class="time-item final"><time>02:00 PM</time>
          <div>
            <h3>Winners &amp; Valedictory</h3>
            <p>Winner announcement, prize distribution and closing ceremony.</p>
          </div>
        </div>
      </div>
    </section>


    <section class="section prizes-section" id="prizes">
      <div class="section-label">04 / PRIZES &amp; RECOGNITION</div>
      <div class="prize-head">
        <div>
          <h2>₹30,000<br><span>PRIZE POOL.</span></h2>
          <p>Three themes. Three winners. One unforgettable hackathon.</p>
        </div>
      </div>
      <div class="prize-grid">
        <article class="prize-card featured">
          <span class="prize-tag">EACH THEME</span>
          <div class="prize-amount">₹10,000</div>
          <h3>1st Place — Each Topic</h3>
          <p>The winner of each of the three hackathon topics will receive a ₹10,000 cash prize.</p>
        </article>
        <article class="prize-card">
          <span class="prize-tag">RECOGNITION</span>
          <div class="prize-symbol">02</div>
          <h3>2nd Place — Each Topic</h3>
          <p>The second-place team in each of the three topics will receive a Certificate of Achievement.</p>
        </article>
        <article class="prize-card">
          <span class="prize-tag">RECOGNITION</span>
          <div class="prize-symbol">03</div>
          <h3>3rd Place — Each Topic</h3>
          <p>The third-place team in each of the three topics will receive a Certificate of Achievement.</p>
        </article>
      </div>
    </section>

    <section class="section dark-section" id="rules">
      <div class="section-label">05 / RULES &amp; GUIDELINES</div>
      <div class="rules-grid">
        <div>
          <h2>Play fair.<br><span>Build original.</span></h2>
        </div>
        <div class="rule-list">
          <div><b>01</b>
            <p>Each team must have 2 to 4 participants.</p>
          </div>
          <div><b>02</b>
            <p>The event is open to UG, PG, diploma students and B.Tech Students. Members may be from different branches, years or institutions.</p>
          </div>
          <div><b>03</b>
            <p>No team member changes are permitted after registration.</p>
          </div>
          <div><b>04</b>
            <p>Participants must be currently enrolled and carry a valid college ID card.</p>
          </div>
          <div><b>05</b>
            <p>Core development work must be completed within the official 24-hour event period.</p>
          </div>
          <div><b>06</b>
            <p>Plagiarism, unauthorized code copying or undisclosed reuse of existing solutions is strictly prohibited.</p>
          </div>
          <div><b>07</b>
            <p>AI tools, frameworks, libraries and APIs are allowed, but their use must be clearly disclosed in the documentation.</p>
          </div>
          <div><b>08</b>
            <p>Professional, respectful and responsible conduct is expected throughout the event.</p>
          </div>
          <div><b>09</b>
            <p>Any violation of the rules or code of conduct may result in immediate disqualification.</p>
          </div>
          <div><b>10</b>
            <p>Each team should bring its own extension board/power strip. The college will provide a maximum of 1–2 power outlets per team.</p>
          </div>
          <div><b>11</b>
            <p><strong>Topic Participation:</strong> Each topic must have a minimum of 5 registered teams to be conducted. If fewer than 5 teams register for a topic, the participating teams will be given the option to select one of the other two available topics.</p>
          </div>

        </div>
      </div>
    </section>

    <section class="section" id="criteria">
      <div class="section-label">06 / JUDGING CRITERIA</div>
      <div class="section-heading">
        <h2>How projects<br><span>will be judged.</span></h2>
        <p>A balanced rubric out of 100 points, weighted to reward technical execution and real-world revenue potential.</p>
      </div>
      <div class="rubric-wrap">
        <div class="rubric-table">
          <div class="rubric-row rubric-header">
            <div class="rubric-col-name">Criterion</div>
            <div class="rubric-col-weight">Weight</div>
            <div class="rubric-col-desc">What Judges Should Look For</div>
          </div>
          <div class="rubric-row">
            <div class="rubric-col-name">Problem Significance &amp; Market Need</div>
            <div class="rubric-col-weight"><span class="weight-badge">15%</span></div>
            <div class="rubric-col-desc">Is the problem real, painful, and large enough to matter? Is the target customer clearly identified?</div>
          </div>
          <div class="rubric-row">
            <div class="rubric-col-name">Revenue Model &amp; Business Viability</div>
            <div class="rubric-col-weight"><span class="weight-badge">20%</span></div>
            <div class="rubric-col-desc">Is there a clear, credible path to monetization (pricing model, paying customer, unit economics)? Could this plausibly generate revenue within 6–12 months?</div>
          </div>
          <div class="rubric-row">
            <div class="rubric-col-name">Technical Execution</div>
            <div class="rubric-col-weight"><span class="weight-badge">20%</span></div>
            <div class="rubric-col-desc">Does the working prototype actually function? Is the technical approach (AI/ML, architecture, data handling) sound and appropriately ambitious for the timeframe?</div>
          </div>
          <div class="rubric-row">
            <div class="rubric-col-name">Innovation &amp; Differentiation</div>
            <div class="rubric-col-weight"><span class="weight-badge">15%</span></div>
            <div class="rubric-col-desc">How original is the approach versus existing solutions/competitors? Is there a defensible edge (data, model, workflow, distribution)?</div>
          </div>
          <div class="rubric-row">
            <div class="rubric-col-name">User Experience &amp; Design</div>
            <div class="rubric-col-weight"><span class="weight-badge">10%</span></div>
            <div class="rubric-col-desc">Is the product usable, intuitive, and polished enough that a real customer could pick it up with minimal friction?</div>
          </div>
          <div class="rubric-row">
            <div class="rubric-col-name">Scalability &amp; Impact Potential</div>
            <div class="rubric-col-weight"><span class="weight-badge">10%</span></div>
            <div class="rubric-col-desc">Can the solution scale beyond the demo (more users, more geographies, more use cases) without a fundamental redesign?</div>
          </div>
          <div class="rubric-row">
            <div class="rubric-col-name">Pitch &amp; Presentation</div>
            <div class="rubric-col-weight"><span class="weight-badge">10%</span></div>
            <div class="rubric-col-desc">Is the team able to clearly communicate the problem, demo, business model, and ask in the allotted time? Does the pitch address realistic objections?</div>
          </div>
        </div>
        <div class="rubric-total">TOTAL: <strong>100 POINTS</strong></div>
      </div>
      <div class="judging-notes">
        <h3>Judging Notes</h3>
        <ul>
          <li>Require every team to state, in one slide, their pricing model and estimated first-customer timeline — this keeps the revenue-potential criterion concrete rather than aspirational.</li>
          <li>Disqualify or heavily penalize entries with no working demo; a business plan alone should not be sufficient to win a hackathon.</li>
          <li>For ties, prioritize the team with the stronger Revenue Model &amp; Business Viability score.</li>
          <li>Optional bonus (up to 5 extra points): award teams who secure a verbal letter of interest or pilot commitment from a real potential customer during the event.</li>
        </ul>
      </div>
    </section>

    <section class="section refund-section" id="refund">
      <div class="section-label">07 / REFUND POLICY</div>
      <div class="refund-box">
        <div class="refund-icon">!</div>
        <div>
          <h2>Registration fee is <span>non-refundable.</span></h2>
          <p>No refunds will be issued once the registration process has been completed.</p>
        </div>
      </div>
    </section>

    <section class="register-section" id="register">
      <div class="register-inner">
        <p class="eyebrow">READY?</p>
        <h2>BUILD SOMETHING<br><span>UNFORGETTABLE.</span></h2>
        <p>Gather your team. Pick your theme. Make the 24 hours count.</p>
        <div class="registration-steps">
          <span class="step active" data-step="1">01 DETAILS</span>
          <span class="step" data-step="2">02 PAYMENT</span>
        </div>

        <?php if ($isFull): ?>
          <div class="registration-full-message" style="text-align: center; padding: 40px; background: rgba(255,255,255,0.05); border-radius: 12px; margin-top: 20px; border: 1px solid rgba(255,255,255,0.1);">
            <h3 style="color: #ff6b6b; font-size: 1.5rem; margin-bottom: 10px;">Registration is Full</h3>
            <p style="color: #a1a1aa; line-height: 1.5;">Registrations are currently full. The maximum limit of participants has been reached.
              Contact the Student Coordinators to check if any additional slots are available.</p>
          </div>
        <?php else: ?>
          <form id="registrationForm">
            <div class="form-grid">
              <input name="team_name" placeholder="Team Name *" required>
              <input name="leader_name" placeholder="Team Leader *" required>
              <input name="email" type="email" placeholder="Email *" required>
              <input name="phone" placeholder="Phone *" required>
              <input name="college" placeholder="College / Institution *" required>
              <select name="theme" required>
                <option value="">Select Topic *</option>
                <option>Retail & E-Commerce</option>
                <option>Climate & Energy</option>
                <option>Education & Workforce</option>
              </select>
              <label class="consent" style="margin-top: 10px; margin-bottom: 5px;"><input type="checkbox" name="college_confirm" id="collegeConfirm" value="Other" required> I confirm I am not a student of Nirmala College Muvattupuzha</label>
              <select name="team_size" id="teamSize" required>
                <option value="2" selected>2 Participants — ₹400</option>
                <option value="3">3 Participants — ₹600</option>
                <option value="4">4 Participants — ₹800</option>
              </select>
              <input name="member2" id="member2" placeholder="Member 2 *" required>
              <input name="member3" id="member3" placeholder="Member 3 *" class="member-extra" disabled>
              <input name="member4" id="member4" placeholder="Member 4 *" class="member-extra" disabled>
            </div>

            <div class="fee-preview">
              <div>
                <small>REGISTRATION FEE</small>
                <strong>₹<span id="feeAmount">400</span></strong>
              </div>
              <div>
                <small>PER PARTICIPANT</small>
                <strong>₹200</strong>
              </div>
            </div>

            <label class="consent"><input type="checkbox" required> I confirm that the information provided is accurate and I agree to the hackathon rules.</label>
            <button class="primary-btn" type="submit" id="continuePaymentBtn">CONTINUE TO PAYMENT <span>→</span></button>
            <p id="formMessage" class="form-message"></p>
          </form>

          <div id="paymentStep" class="payment-step" hidden>
            <div class="payment-header">
              <p class="payment-kicker">02 / PAYMENT</p>
              <h3>Complete your<br><span>registration.</span></h3>
              <p>Scan the QR code below to pay the registration fee. After payment, upload the payment screenshot on this page.</p>
            </div>

            <div class="payment-card">
              <div class="payment-row">
                <span>Participants</span>
                <strong id="paymentTeamSize">2</strong>
              </div>
              <div class="payment-row">
                <span>Fee per participant</span>
                <strong>₹200</strong>
              </div>
              <div class="payment-total">
                <span>Total registration fee</span>
                <strong>₹<span id="paymentAmount">400</span></strong>
              </div>
            </div>

            <div class="qr-payment-box">
              <div class="qr-heading">
                <small>SCAN &amp; PAY</small>
                <h4>Pay ₹<span id="qrAmount">400</span></h4>
                <p id="qrInstruction">Scan the QR code to complete your payment.</p>
              </div>

              <div class="qr-frame">
                <img id="paymentQr" src="payment_qr/qr_400.png" alt="Payment QR code for ₹400" loading="lazy">
                <div id="qrMissing" class="qr-missing" hidden>
                </div>
              </div>

              <p class="qr-note">Please pay the exact amount shown above.</p>
            </div>

            <div class="upload-payment-box">
              <div>
                <small>AFTER PAYMENT</small>
                <h4>Upload payment screenshot</h4>
                <p>Upload a clear screenshot showing your successful payment. JPG, PNG or WEBP • Max 5 MB.</p>
              </div>

              <input type="file" id="paymentScreenshot" accept="image/jpeg,image/png,image/webp" hidden>
              <label class="upload-label" for="paymentScreenshot">
                <span>CHOOSE SCREENSHOT</span>
                <strong id="fileName">No file selected</strong>
              </label>

              <button class="primary-btn upload-btn" type="button" id="uploadPaymentBtn">UPLOAD PAYMENT SCREENSHOT <span>↗</span></button>
              <p id="paymentMessage" class="form-message"></p>
            </div>

            <button class="back-btn" type="button" id="backToDetailsBtn">← BACK TO DETAILS</button>
          </div>

          <div id="whatsappStep" class="whatsapp-step" hidden>
            <div class="whatsapp-success">
              <div class="success-mark">✓</div>
              <p class="payment-kicker">03 / REGISTRATION COMPLETE</p>
              <h3>You're almost<br><span>there.</span></h3>
              <p>Your payment screenshot has been submitted successfully. Join the official Nexyra WhatsApp group using the QR code or the button below.</p>
            </div>

            <div class="whatsapp-card">
              <div class="whatsapp-title">
                <small>OFFICIAL WHATSAPP GROUP</small>
                <h4>Nexyra Hackathon participation</h4>
              </div>

              <div class="whatsapp-qr-frame">
                <img src="whatsapp_group/group_qr.png" alt="Nexyra Hackathon participation WhatsApp group QR code" loading="lazy">
              </div>

              <p class="whatsapp-private-note">Scan this QR code with WhatsApp to join the group.</p>

              <a class="whatsapp-join-btn" href="https://chat.whatsapp.com/JCElzK4gv4G86je7X5f4Cz" target="_blank" rel="noopener noreferrer">
                JOIN WHATSAPP GROUP ↗
              </a>

              <div class="whatsapp-link-box">
                <small>GROUP LINK</small>
                <span>https://chat.whatsapp.com/JCElzK4gv4G86je7X5f4Cz</span>
              </div>
            </div>

            <p class="whatsapp-note"><strong>Important:</strong> Your payment screenshot will be verified by the organizers. Please keep your payment proof safely until verification is complete.</p>
          </div>
        <?php endif; ?>
      </div>
    </section>
  </main>


  <section class="student-coordinator" aria-label="Student Coordinators">
    <div class="coordinator-inner">
      <p class="coordinator-label">STUDENT COORDINATOR</p>
      <div class="coordinator-list">
        <div class="coordinator-person">
          <strong>Benjamin Jomy</strong>
          <a href="tel:7510779669">7510779669</a>
        </div>
        <div class="coordinator-person">
          <strong>Dermis Josephine M Darly</strong>
          <a href="tel:7909173323">7909173323</a>
        </div>
      </div>
    </div>
  </section>

  <footer>
    <div class="brand">NEX<span>Y</span>RA</div>
    <p>24-HOUR TECHNICAL HACKATHON</p>
    <a href="#home">BACK TO TOP ↑</a>
  </footer>
  <script src="static/script.js?v=manualqr2" defer></script>

</body>

</html>