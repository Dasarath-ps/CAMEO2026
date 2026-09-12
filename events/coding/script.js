document.addEventListener("DOMContentLoaded", () => {
  // Particle Canvas Setup
  const canvas = document.getElementById("cyberCanvas");
  if (canvas) {
    const ctx = canvas.getContext("2d");
    let width = (canvas.width = window.innerWidth);
    let height = (canvas.height = window.innerHeight);

    window.addEventListener("resize", () => {
      width = canvas.width = window.innerWidth;
      height = canvas.height = window.innerHeight;
    });

    const particles = [];
    const particleCount = Math.min(Math.floor(width / 14), 75);

    for (let i = 0; i < particleCount; i++) {
      particles.push({
        x: Math.random() * width,
        y: Math.random() * height,
        radius: Math.random() * 2.2 + 0.5,
        color: Math.random() > 0.25 ? "#ff0033" : "#00f0ff",
        alpha: Math.random() * 0.75 + 0.2,
        speedX: (Math.random() - 0.5) * 0.6,
        speedY: (Math.random() - 0.5) * 0.6 - 0.2,
      });
    }

    function animateParticles() {
      ctx.clearRect(0, 0, width, height);

      particles.forEach((p) => {
        p.x += p.speedX;
        p.y += p.speedY;

        if (p.x < 0) p.x = width;
        if (p.x > width) p.x = 0;
        if (p.y < 0) p.y = height;
        if (p.y > height) p.y = 0;

        ctx.beginPath();
        ctx.arc(p.x, p.y, p.radius, 0, Math.PI * 2);
        ctx.fillStyle = p.color;
        ctx.globalAlpha = p.alpha;
        ctx.shadowBlur = 8;
        ctx.shadowColor = p.color;
        ctx.fill();
      });

      requestAnimationFrame(animateParticles);
    }

    animateParticles();
  }

  // Countdown Timer to September 25
  const daysEl = document.getElementById("timerDays");
  const hoursEl = document.getElementById("timerHours");
  const minsEl = document.getElementById("timerMins");
  const secsEl = document.getElementById("timerSecs");

  if (daysEl && hoursEl && minsEl && secsEl) {
    const now = new Date();
    const currentYear = now.getFullYear();
    let targetDate = new Date(currentYear, 8, 25, 9, 0, 0).getTime();

    // If September 25 has passed this year, count to next year's Sept 25
    if (now.getTime() >= targetDate) {
      targetDate = new Date(currentYear + 1, 8, 25, 9, 0, 0).getTime();
    }

    function updateTimer() {
      const now = new Date().getTime();
      const distance = Math.max(0, targetDate - now);

      const days = Math.floor(distance / (1000 * 60 * 60 * 24));
      const hours = Math.floor(
        (distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
      );
      const mins = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
      const secs = Math.floor((distance % (1000 * 60)) / 1000);

      daysEl.textContent = days.toString().padStart(2, "0");
      hoursEl.textContent = hours.toString().padStart(2, "0");
      minsEl.textContent = mins.toString().padStart(2, "0");
      secsEl.textContent = secs.toString().padStart(2, "0");
    }

    updateTimer();
    setInterval(updateTimer, 1000);
  }

  // Smooth Scroll and Navigation Active Highlight
  const navLinks = document.querySelectorAll("nav a");
  document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
    anchor.addEventListener("click", function (e) {
      const target = document.querySelector(this.getAttribute("href"));
      if (target) {
        e.preventDefault();
        target.scrollIntoView({ behavior: "smooth" });
      }
    });
  });

  window.addEventListener("scroll", () => {
    let current = "";
    const sections = document.querySelectorAll("section");

    sections.forEach((section) => {
      const sectionTop = section.offsetTop - 120;
      if (window.scrollY >= sectionTop) {
        current = section.getAttribute("id");
      }
    });

    navLinks.forEach((a) => {
      a.classList.remove("active");
      if (a.getAttribute("href") === "#" + current) {
        a.classList.add("active");
      }
    });
  });

  // Registration Form AJAX Handler
  const form = document.getElementById("registrationForm");
  const formMsg = document.getElementById("formMessage");

  if (form) {
    form.addEventListener("submit", async (e) => {
      e.preventDefault();
      formMsg.className = "form-message";
      formMsg.style.display = "block";
      formMsg.textContent = "[SYSTEM] TRANSMITTING CANDIDATE REGISTRATION...";

      const formData = new FormData(form);
      const payload = Object.fromEntries(formData);

      try {
        const response = await fetch("api/register.php", {
          method: "POST",
          headers: { "Content-Type": "application/json" },
          body: JSON.stringify(payload),
        });

        const result = await response.json();

        if (response.ok && result.status === "success") {
          formMsg.className = "form-message success";
          formMsg.textContent =
            "[SYSTEM SUCCESS] " +
            (result.message || "Registration accepted into competition grid!");
          form.reset();
        } else {
          formMsg.className = "form-message error";
          formMsg.textContent =
            "[SYSTEM ERROR] " +
            (result.message || "Data rejected by competition matrix.");
        }
      } catch (err) {
        formMsg.className = "form-message error";
        formMsg.textContent =
          "[SYSTEM ERROR] Network anomaly or PHP server offline.";
      }
    });
  }
});
