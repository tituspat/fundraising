<nav id="navbar"
    class="fixed top-0 w-full h-[90px] bg-white flex items-center justify-between px-10 py-8 z-10 transition-shadow duration-300 ease-in-out border border-green-300">
    <!-- Logo -->
    <div class="flex items-center gap-4 ml-10">
        <img src="https://democalon46.calon.id/template/calon-pancasila/assets/img/logo.png" alt="Logo" class="h-12">
        <h1 class="text-black text-2xl font-bold">Demo Calon</h1>
    </div>
    <!-- Navigation Buttons -->
    <div class="flex space-x-4">
        <button class="nav-button text-gray-500" onclick="activateButton(event)">Beranda</button>
        <button class="nav-button text-gray-500" onclick="activateButton(event)">Profile</button>
        <div class="relative">
            <button id="gallery-button" class="nav-button text-gray-500 flex items-center" onclick="toggleDropdown(event)">Galeri <i class="fas fa-chevron-down ml-1"></i></button>
            <div id="gallery-dropdown" class="absolute left-0 w-28 h-[80px] bg-white border border-gray-200 shadow-lg rounded-lg hidden flex flex-col justify-center gap-1">
                <a href="#foto" id="foto-link" class="h-[30px] dropdown-link block px-2 py-2 text-gray-700 hover:bg-gray-100 hover:text-gray-700 hover:no-underline">Foto</a>
                <a href="#video" id="video-link" class="h-[30px] dropdown-link block px-2 py-2 text-gray-700 hover:bg-gray-100 hover:text-gray-700 hover:no-underline">Video</a>
            </div>
        </div>
        <button class="nav-button text-gray-500" onclick="activateButton(event)">Testimoni</button>
        <button class="nav-button text-gray-500" onclick="activateButton(event)">Blog</button>
        <button class="nav-button text-gray-500" onclick="activateButton(event)">Berita</button>
        <button class="nav-button text-gray-500" onclick="activateButton(event)">Program</button>
        <button class="nav-button text-gray-500" onclick="activateButton(event)">Dukungan</button>
        <button class="nav-button text-gray-500" onclick="activateButton(event)">FAQ</button>
    </div>
    <!-- Authentication Buttons -->
    <div class="flex space-x-4 mr-10">
        <button class="auth-button h-[50px] bg-customYellow border border-green-500 text-white px-4 py-1 transition duration-300 ease-in-out">
        Login Relawan<i class="fas fa-user ml-2"></i>
    </button>
    </div>
</nav>
<script>
    function activateButton(event) {
        // Remove active class from all buttons
        const buttons = document.querySelectorAll('.nav-button');
        buttons.forEach(button => {
            button.classList.remove('text-customYellow', 'font-bold');
            button.classList.add('text-gray-500');
        });

        // Add active class to the clicked button
        const clickedButton = event.target.closest('.nav-button');
        if (clickedButton) {
            clickedButton.classList.remove('text-gray-500');
            clickedButton.classList.add('text-customYellow', 'font-bold');
        }
    }

    function toggleDropdown(event) {
        event.stopPropagation(); // Prevent click event from bubbling up
        const dropdown = document.getElementById('gallery-dropdown');
        const isHidden = dropdown.classList.contains('hidden');

        // Hide all dropdowns
        document.querySelectorAll('#gallery-dropdown').forEach(d => d.classList.add('hidden'));

        // Toggle the dropdown visibility
        dropdown.classList.toggle('hidden', !isHidden);

    }

    // Close dropdown if clicked outside
    window.onclick = function(event) {
        if (!event.target.matches('#gallery-button') && !event.target.closest('#gallery-dropdown')) {
            const dropdown = document.getElementById('gallery-dropdown');
            if (!dropdown.classList.contains('hidden')) {
                dropdown.classList.add('hidden');
            }
        }

        // Deactivate "Galeri" button if another nav-button is clicked
        if (event.target.matches('.nav-button') && !event.target.matches('#gallery-button')) {
            activateButton(event);
        }
    }

    // Handle dropdown link clicks
    document.querySelectorAll('.dropdown-link').forEach(link => {
        link.addEventListener('click', function(event) {
            // Ensure dropdown is hidden when a link is clicked
            document.getElementById('gallery-dropdown').classList.add('hidden');
            // Mark "Galeri" button as active
            activateButton({ target: document.getElementById('gallery-button') });
        });
    });
</script>
