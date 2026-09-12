<header class="fixed top-0 left-0 w-full !px-5 md:!px-10 !py-4 md:!py-5 flex justify-between items-center z-[999] bg-black backdrop-blur-sm border-b border-[#ff4655]/20">
    <div class="logo tech-font">
        C<img src="images/heroSection/logo-a.png" class="logo-a" alt="A" aria-label="A">MEO<span class="text-valorant-red">'2.0</span>
    </div>

    <!-- Mobile Menu Button -->
    <button id="mobile-menu-btn" class="md:hidden text-[#ece8e1] focus:outline-none relative cursor-pointer">
        <svg id="menu-icon" class="w-8 h-8 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
        </svg>
        <svg id="close-icon" class="w-8 h-8 hidden transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
        </svg>
    </button>

    <!-- Desktop Nav -->
    <nav class="hidden md:block">
        <ul class="flex gap-[30px] list-none m-0 p-0">
            <li><a href="#home">Home</a></li>
            <li><a href="#events">Events</a></li>
            <li><a href="#location">Map</a></li>
            <li><a href="#contact">Contacts</a></li>
        </ul>
    </nav>
</header>

<!-- Mobile Nav Overlay -->
<div id="mobile-menu" class="fixed inset-0 bg-black/95 backdrop-blur-md flex flex-col items-center justify-center transform translate-x-full transition-transform duration-300 z-[990] md:hidden">
    <nav>
        <ul class="flex flex-col items-center gap-8 text-2xl list-none m-0 p-0 tech-font uppercase tracking-[0.2em]">
            <li><a href="#home" class="hover:text-valorant-red transition-colors">Home</a></li>
            <li><a href="#events" class="hover:text-valorant-red transition-colors">Events</a></li>
            <li><a href="#location" class="hover:text-valorant-red transition-colors">Map</a></li>
            <li><a href="#contact" class="hover:text-valorant-red transition-colors">Contacts</a></li>
        </ul>
    </nav>
</div>

<script>

</script>