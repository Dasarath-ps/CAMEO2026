// Matrix Script

(function () {
  const canvas = document.getElementById("matrixCanvas");
  const ctx = canvas.getContext("2d");

  // Japanese/Kanji character pool matching the reference image
  const CHARS =
    "未来集夢境界破壊創造力命運炎雷電水風地天星月日影光闇心魂鬼神龍鳳凰" +
    "戦士剣盾勝利敗北栄光悲哀怒喜愛憎恐恨嫉妬希望絶望孤独自由平和混沌" +
    "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789@#$%&*<>[]{}ｦｧｨｩｪｫｬｭｮｯｰ" +
    "アイウエオカキクケコサシスセソタチツテトナニヌネノハヒフヘホマミムメモ";

  const FONT_SIZE = 16;
  let columns, drops;

  function resize() {
    canvas.width = window.innerWidth;
    canvas.height = window.innerHeight;
    columns = Math.floor(canvas.width / FONT_SIZE);
    // Reset drops if not initialised or window resized
    drops = Array.from({ length: columns }, () =>
      Math.floor(Math.random() * -(canvas.height / FONT_SIZE)),
    );
  }

  // Colour helpers
  function randomRedShade() {
    // Vary between deep crimson, bright red and dark maroon for depth
    const variants = [
      "#ff1a1a", // bright red – leading glyph
      "#cc0000", // pure red
      "#990000", // deep red
      "#660000", // dark maroon / trail
      "#ff4655", // Valorant accent red
      "#ff6666", // lighter highlight
    ];
    return variants[Math.floor(Math.random() * variants.length)];
  }

  // Per-column state (speed & color stream)
  let columnState;

  function initColumnState() {
    columnState = Array.from({ length: columns }, () => ({
      speed: 0.3 + Math.random() * 0.9, // different fall speeds
      color: randomRedShade(),
      bright: Math.random() > 0.6, // some columns glow brighter
    }));
  }

  function draw() {
    // Semi-transparent fade — low value keeps bg visible through the canvas
    ctx.fillStyle = "rgba(0, 0, 0, 0.08)";
    ctx.fillRect(0, 0, canvas.width, canvas.height);

    ctx.font = FONT_SIZE + "px monospace";

    for (let i = 0; i < columns; i++) {
      const state = columnState[i];
      const y = Math.floor(drops[i]) * FONT_SIZE;

      if (y > 0 && y < canvas.height) {
        // Leading character – brighter / white-red
        if (state.bright) {
          ctx.shadowBlur = 12;
          ctx.shadowColor = "#ff4655";
          ctx.fillStyle = "#ffaaaa"; // near-white red tip
        } else {
          ctx.shadowBlur = 8;
          ctx.shadowColor = "#cc0000";
          ctx.fillStyle = "#ff3333";
        }

        const char = CHARS[Math.floor(Math.random() * CHARS.length)];
        ctx.fillText(char, i * FONT_SIZE, y);

        // Trail characters – dimmer
        ctx.shadowBlur = 4;
        ctx.shadowColor = "transparent";
        for (let t = 1; t <= 8; t++) {
          const ty = y - t * FONT_SIZE;
          if (ty < 0) break;
          const alpha = 1 - t / 9;
          ctx.fillStyle =
            state.color
              .replace(")", `, ${alpha.toFixed(2)})`)
              .replace("rgb", "rgba") || `rgba(180, 0, 0, ${alpha.toFixed(2)})`;
          // simple hex → rgba fallback
          ctx.globalAlpha = alpha * 0.8;
          const tc = CHARS[Math.floor(Math.random() * CHARS.length)];
          ctx.fillText(tc, i * FONT_SIZE, ty);
        }
        ctx.globalAlpha = 1;
      }

      // Advance the drop by this column's speed
      drops[i] += state.speed;

      // Reset column when it goes past the bottom (random chance for varied lengths)
      if (drops[i] * FONT_SIZE > canvas.height && Math.random() > 0.975) {
        drops[i] = Math.random() * -20;
        state.speed = 0.3 + Math.random() * 0.9;
        state.color = randomRedShade();
        state.bright = Math.random() > 0.6;
      }
    }
  }

  // Boot
  resize();
  initColumnState();

  // Throttle to ~30 fps for a cinematic feel matching the reference image
  let last = 0;
  function loop(ts) {
    if (ts - last > 33) {
      draw();
      last = ts;
    }
    requestAnimationFrame(loop);
  }
  requestAnimationFrame(loop);

  window.addEventListener("resize", () => {
    resize();
    initColumnState();
  });
})();

// Count Down Fuction

(function () {
  const target = new Date("2026-09-25T00:00:00+05:30").getTime();

  function pad(n) {
    return String(n).padStart(2, "0");
  }

  function tick() {
    const now = Date.now();
    const diff = target - now;

    if (diff <= 0) {
      document.getElementById("countdown-wrapper").innerHTML =
        '<p class="countdown-label tech-font" style="font-size:1.6rem;color:var(--valorant-red)">🔴 EVENT HAS BEGUN</p>';
      return;
    }

    const days = Math.floor(diff / 86400000);
    const hours = Math.floor((diff % 86400000) / 3600000);
    const mins = Math.floor((diff % 3600000) / 60000);
    const secs = Math.floor((diff % 60000) / 1000);

    document.getElementById("cd-days").textContent = pad(days);
    document.getElementById("cd-hours").textContent = pad(hours);
    document.getElementById("cd-mins").textContent = pad(mins);
    document.getElementById("cd-secs").textContent = pad(secs);
  }

  tick();
  setInterval(tick, 1000);
})();

// Menu Toggle Script
document.addEventListener("DOMContentLoaded", () => {
  const btn = document.getElementById("mobile-menu-btn");
  const menu = document.getElementById("mobile-menu");
  const menuIcon = document.getElementById("menu-icon");
  const closeIcon = document.getElementById("close-icon");

  if (btn) {
    btn.addEventListener("click", () => {
      menu.classList.toggle("translate-x-full");
      menuIcon.classList.toggle("hidden");
      closeIcon.classList.toggle("hidden");
    });
  }

  if (menu) {
    const mobileLinks = menu.querySelectorAll("a");
    mobileLinks.forEach((link) => {
      link.addEventListener("click", () => {
        menu.classList.add("translate-x-full");
        menuIcon.classList.remove("hidden");
        closeIcon.classList.add("hidden");
      });
    });
  }
});

// Carousel Drag to Scroll
document.addEventListener("DOMContentLoaded", () => {
  const carousel = document.getElementById("events-carousel");
  if (!carousel) return;

  let isDown = false;
  let startX;
  let scrollLeft;

  carousel.addEventListener("mousedown", (e) => {
    isDown = true;
    carousel.classList.add("active");
    startX = e.pageX - carousel.offsetLeft;
    scrollLeft = carousel.scrollLeft;
  });

  carousel.addEventListener("mouseleave", () => {
    isDown = false;
    carousel.classList.remove("active");
  });

  carousel.addEventListener("mouseup", () => {
    isDown = false;
    carousel.classList.remove("active");
  });

  carousel.addEventListener("mousemove", (e) => {
    if (!isDown) return;
    e.preventDefault();
    const x = e.pageX - carousel.offsetLeft;
    const walk = (x - startX) * 2; // Scroll-fast
    carousel.scrollLeft = scrollLeft - walk;
  });
});

// Smooth Scrolling for Anchor Links
document.querySelectorAll('a[href^="#"]').forEach((a) =>
  a.addEventListener("click", (e) => {
    const targetId = a.getAttribute("href");
    if (targetId === "#") return;
    const el = document.querySelector(targetId);
    if (el) {
      e.preventDefault();
      el.scrollIntoView({ behavior: "smooth" });
    }
  }),
);
