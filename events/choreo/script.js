document.addEventListener("DOMContentLoaded", () => {
  /* --- Canvas Particle Background --- */
  const canvas = document.getElementById("cyberCanvas");
  const ctx = canvas.getContext("2d");

  let width, height;
  function resize() {
    width = canvas.width = window.innerWidth;
    height = canvas.height = window.innerHeight;
  }
  window.addEventListener("resize", resize);
  resize();

  const particles = [];
  const particleCount = 40;

  class Particle {
    constructor() {
      this.x = Math.random() * width;
      this.y = Math.random() * height;
      this.vx = (Math.random() - 0.5) * 2;
      this.vy = (Math.random() - 0.5) * 2;
      this.size = Math.random() * 3 + 1;
      this.color = Math.random() > 0.5 ? "#ff00cc" : "#00ffff";
    }

    update() {
      this.x += this.vx;
      this.y += this.vy;

      if (this.x < 0 || this.x > width) this.vx *= -1;
      if (this.y < 0 || this.y > height) this.vy *= -1;
    }

    draw() {
      ctx.beginPath();
      ctx.arc(this.x, this.y, this.size, 0, Math.PI * 2);
      ctx.fillStyle = this.color;
      ctx.shadowBlur = 10;
      ctx.shadowColor = this.color;
      ctx.fill();
    }
  }

  for (let i = 0; i < particleCount; i++) {
    particles.push(new Particle());
  }

  function animate() {
    ctx.clearRect(0, 0, width, height);

    for (let i = 0; i < particles.length; i++) {
      particles[i].update();
      particles[i].draw();

      for (let j = i + 1; j < particles.length; j++) {
        const dx = particles[i].x - particles[j].x;
        const dy = particles[i].y - particles[j].y;
        const dist = Math.sqrt(dx * dx + dy * dy);

        if (dist < 150) {
          ctx.beginPath();
          ctx.strokeStyle = `rgba(236, 232, 225, ${1 - dist / 150})`;
          ctx.lineWidth = 0.5;
          ctx.shadowBlur = 0;
          ctx.moveTo(particles[i].x, particles[i].y);
          ctx.lineTo(particles[j].x, particles[j].y);
          ctx.stroke();
        }
      }
    }
    requestAnimationFrame(animate);
  }
  // Only animate the background canvas on non-mobile devices to save battery
  if (window.innerWidth > 768) {
    animate();
  } else {
    // Optionally clear canvas if resized to mobile
    ctx.clearRect(0, 0, width, height);
  }

  /* --- Navigation Active State --- */
  const navLinks = document.querySelectorAll(".navtabs a");
  const sections = document.querySelectorAll("section");

  window.addEventListener("scroll", () => {
    let current = "";
    sections.forEach((section) => {
      const sectionTop = section.offsetTop;
      if (scrollY >= sectionTop - 100) {
        current = section.getAttribute("id");
      }
    });

    navLinks.forEach((link) => {
      link.classList.remove("active");
      if (link.getAttribute("href").includes(current)) {
        link.classList.add("active");
      }
    });
  });

  /* --- Payment Portal Toggle --- */
  const paymentCheckbox = document.getElementById("paymentAcknowledge");
  const paymentPortal = document.getElementById("paymentPortal");

  if (paymentCheckbox && paymentPortal) {
    paymentCheckbox.addEventListener("change", (e) => {
      if (e.target.checked) {
        paymentPortal.classList.remove("hidden");
        // Smooth scroll to the portal
        setTimeout(() => {
          paymentPortal.scrollIntoView({
            behavior: "smooth",
            block: "nearest",
          });
        }, 100);
      } else {
        paymentPortal.classList.add("hidden");
      }
    });
  }
});
