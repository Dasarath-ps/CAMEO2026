<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CAMEO'2.0 | DECODE. DEFY. DISRUPT.</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600&family=Orbitron:wght@400;700;800;900&display=swap" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="./css/style.css">
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body>

    <!-- Background Layers -->
    <div class="cyber-bg" aria-hidden="true"></div>

    <!-- Matrix Rain Animation Canvas -->
    <canvas id="matrixCanvas" aria-hidden="true"></canvas>

    <div class="character-layer" aria-hidden="true"></div>
    <div class="overlay-vignette" aria-hidden="true"></div>
    <main>
        <!-- Include Header -->
        <?php include "includes/header.php"; ?>

        <section class="main-content">
            <!-- Hero Section -->
            <section id="home" class="hero w-screen h-screen pt-32">
                <h1 class="hero-title  tech-font " data-text="CAMEO'2.0">C<img src="images/heroSection/logo-a.png" class="logo-a" alt="A" aria-label="A">MEO<span class="text-valorant-red">'2.O</span></h1>

                <p class="hero-subtitle tech-font">
                    DECODE. <span>DEFY.</span> DISRUPT.<br>
                    <span class="text-valorant-red font-bold text-2xl"> 2026</span>

                    <!-- Countdown Timer -->
                <div class="countdown-wrapper" id="countdown-wrapper">
                    <div class="countdown" id="countdown">
                        <div class="countdown-unit">
                            <span class="countdown-value" id="cd-days">00</span>
                            <span class="countdown-unit-label">DAYS</span>
                        </div>
                        <span class="countdown-sep">:</span>
                        <div class="countdown-unit">
                            <span class="countdown-value" id="cd-hours">00</span>
                            <span class="countdown-unit-label">HRS</span>
                        </div>
                        <span class="countdown-sep">:</span>
                        <div class="countdown-unit">
                            <span class="countdown-value" id="cd-mins">00</span>
                            <span class="countdown-unit-label">MIN</span>
                        </div>
                        <span class="countdown-sep">:</span>
                        <div class="countdown-unit">
                            <span class="countdown-value" id="cd-secs">00</span>
                            <span class="countdown-unit-label">SEC</span>
                        </div>
                    </div>
                </div>

            </section>

        </section>
        <?php include "includes/events.php"; ?>

        <?php include "includes/location.php"; ?>
        <?php include "includes/contact.php"; ?>
        <?php include "includes/footer.php"; ?>
    </main>

    <script src="./scripts/interation.js"></script>
</body>

</html>