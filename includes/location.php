<!-- LOCATION SECTION -->
<section id="location" 
class="min-h-screen flex flex-col items-center justify-center text-center px-6 relative overflow-hidden z-50">

    <!-- Header -->
    <div class="text-center mb-12 relative z-20">
        <div class="flex items-center justify-center gap-4 mb-2">
            <span class="text-valorant-red tracking-widest text-sm">//</span>
            <span class="tracking-[0.3em] text-sm text-tech-gray">MAP</span>
            <span class="text-valorant-red tracking-widest text-sm">//</span>
        </div>
        <h1 class="tech-font text-5xl md:text-7xl font-black uppercase tracking-tighter mb-4 text-shadow-glow text-white">
            EVENT <span class="text-valorant-red">LOCATION</span>
        </h1>
        <p class="tracking-[0.2em] text-tech-gray text-xs md:text-sm uppercase">
            FIND YOUR WAY. DEFY THE GRID.
        </p>
    </div>

    <!-- ICON WRAPPER -->
    <div id="locationIcon"
        class="text-valorant-red transition-all duration-1000 ease-[cubic-bezier(.22,1,.36,1)]
               opacity-0 translate-y-[-80px] scale-75 blur-md relative z-20">

        <div class="relative">
            <svg xmlns="http://www.w3.org/2000/svg"
                fill="currentColor"
                viewBox="0 0 24 24"
                class="w-32 h-32 mx-auto drop-shadow-[0_0_25px_rgba(255,70,85,0.8)]">
                <path fill-rule="evenodd"
                    d="M12 2a7 7 0 00-7 7c0 5.25 7 13 7 13s7-7.75 7-13a7 7 0 00-7-7zm0 9.5a2.5 2.5 0 110-5 2.5 2.5 0 010 5z"
                    clip-rule="evenodd" />
            </svg>
        </div>
    </div>

    <!-- MAP -->
    <div id="mapContainer"
        class="w-full max-w-4xl mt-10 opacity-0 translate-y-10 scale-95 
               transition-all duration-1000 ease-[cubic-bezier(.22,1,.36,1)] relative z-20">

        <?php
        function showClickablePlace($place) {
            $url = "https://www.google.com/maps/search/" . urlencode($place);

            echo "
            <a href='$url' target='_blank' class='w-full block group'>
                <div class='relative w-full rounded-2xl overflow-hidden backdrop-blur-md border border-white/10 group-hover:border-valorant-red/80 transition-all duration-500 group-hover:shadow-[0_0_30px_rgba(255,70,85,0.4)]'
                     style='padding-top:56.25%; transform: perspective(1000px);'>
                    <iframe 
                        class='absolute top-0 left-0 w-full h-full opacity-80 group-hover:opacity-100 transition-opacity duration-500 mix-blend-luminosity hover:mix-blend-normal'
                        style='border:0; pointer-events:none;'
                        loading='lazy'
                        src='https://www.google.com/maps?q=" . urlencode($place) . "&output=embed'>
                    </iframe>
                    <div class='absolute inset-0 bg-valorant-red/10 mix-blend-overlay pointer-events-none group-hover:opacity-0 transition-opacity duration-500'></div>
                </div>
            </a>
            ";
        }

        showClickablePlace("Nirmala College Muvattupuzha");
        ?>
    </div>

</section>
<script>
document.addEventListener("DOMContentLoaded", () => {

    const section = document.getElementById("location");
    const icon = document.getElementById("locationIcon");
    const map = document.getElementById("mapContainer");

    let hasAnimated = false;

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting && !hasAnimated) {

                hasAnimated = true;

                // 1️⃣ Icon drop-in (instant feel)
                icon.classList.remove("opacity-0", "translate-y-[-80px]", "scale-75", "blur-md");
                icon.classList.add("opacity-100", "translate-y-0", "scale-100", "blur-0");

                // 2️⃣ Flip + shrink faster
                setTimeout(() => {
                    icon.style.transform = "rotateY(180deg) scale(0.55)";
                }, 500);

                // 3️⃣ Map reveal quickly after
                setTimeout(() => {
                    icon.classList.add("opacity-0");

                    map.classList.remove("opacity-0", "translate-y-10", "scale-95");
                    map.classList.add("opacity-100", "translate-y-0", "scale-100");

                }, 900);

                observer.unobserve(section);
            }
        });
    }, { threshold: 0.4 });

    observer.observe(section);

});
</script>

