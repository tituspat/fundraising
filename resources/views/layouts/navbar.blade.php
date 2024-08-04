<nav id="navbar"
    class="fixed top-0 w-full h-[50px] bg-white flex items-center justify-between px-10 py-8 z-10 transition-shadow duration-300 ease-in-out">
    <!-- Logo -->
    <div class="text-black font-bold text-lg">
        Logo
    </div>
    <!-- Navigation Buttons -->
    <div class="flex space-x-2">
        <button class="nav-button">Beranda</button>
        <button class="nav-button">Profile</button>
        <button class="nav-button">Galeri</button>
        <button class="nav-button">Testimoni</button>
        <button class="nav-button">Blog</button>
        <button class="nav-button">Berita</button>
        <button class="nav-button">Dukungan</button>
        <button class="nav-button">FAQ</button>
    </div>
    <!-- Authentication Buttons -->
    <div class="flex space-x-4">
        <button
            class="auth-button border border-green-500 text-black px-4 py-1 transition duration-300 ease-in-out rounded-lg">Login</button>
    </div>
</nav>

<script>
    // JavaScript for scroll effect
    window.addEventListener('scroll', function() {
        const navbar = document.getElementById('navbar');
        if (window.scrollY > 0) {
            navbar.classList.add('shadow-lg');
        } else {
            navbar.classList.remove('shadow-lg');
        }
    });

    // JavaScript for button hover and click effects
    document.querySelectorAll('.nav-button').forEach(function(button) {
        button.addEventListener('mouseover', function() {
            this.classList.add('text-green-500', 'bg-gray-100');
        });

        button.addEventListener('mouseout', function() {
            if (!this.classList.contains('clicked')) {
                this.classList.remove('text-green-500', 'bg-gray-100');
            }
        });

        button.addEventListener('click', function() {
            document.querySelectorAll('.nav-button').forEach(function(btn) {
                btn.classList.remove('clicked', 'text-green-500', 'bg-gray-100');
            });
            this.classList.add('clicked', 'text-green-500', 'bg-gray-100');
        });
    });

    document.querySelectorAll('.auth-button').forEach(function(button) {
        button.addEventListener('mouseover', function() {
            this.classList.add('bg-green-500', 'text-white');
            this.classList.remove('text-black');
        });

        button.addEventListener('mouseout', function() {
            if (!this.classList.contains('clicked')) {
                this.classList.remove('bg-green-500', 'text-white');
                this.classList.add('text-black');
            }
        });

        button.addEventListener('click', function() {
            document.querySelectorAll('.auth-button').forEach(function(btn) {
                btn.classList.remove('clicked', 'bg-green-500', 'text-white');
                btn.classList.add('text-black');
            });
            this.classList.add('clicked', 'bg-green-500', 'text-white');
        });
    });
</script>

<style>
    .nav-button {
        @apply px-4 py-2 bg-transparent focus:outline-none;
    }

    .auth-button {
        @apply px-4 py-2 bg-transparent focus:outline-none;
    }

    .clicked {
        @apply text-green-500 border-b-2 border-green-500;
    }

    #navbar {
        /* Apply the initial style without border and shadow */
        border-bottom-width: 0;
        box-shadow: none;
    }
</style>
