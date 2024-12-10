<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Navbar with Dropdown</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Optional for smooth hover transition */
        .transition-all {
            transition: all 0.3s ease;
        }
    </style>
</head>

<body>

    <nav class="bg-gray-900 p-4 shadow-lg">
        <div class="max-w-7xl mx-auto flex justify-between items-center">
            <!-- ====== Logo or Brand Name ======== -->
            <div class="text-white text-xl font-semibold">Hotelix</div>

            <!-- ======= Navbar links for larger screens ========= -->
            <div class="hidden md:flex space-x-8">
                <ul class="flex space-x-8">
                    <li
                        class="p-2 text-white hover:bg-emerald-400 border-r-2 border-gray-900 hover:border-white rounded-sm transition-all">
                        <a href="#">Home</a>
                    </li>

                    <!-- ====== Dropdown Menu ======= -->
                    <li class="relative group">
                        <a
                            class="p-2 text-white hover:bg-emerald-400 border-r-2 border-gray-900 hover:border-white rounded-sm transition-all flex items-center">
                            About
                            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </a>
                        <!-- ======== Dropdown menu items ========== -->
                        <ul
                            class="dropdown-content absolute hidden bg-gray-900 text-white p-2 rounded shadow-lg top-full left-0 mt-0 w-48 group-hover:block">
                            <li><a href="#"
                                    class="block px-4 py-2 hover:bg-emerald-400 border-r-2 border-gray-900 hover:border-white rounded-sm transition-all">About
                                    Hotel</a></li>
                            <li><a href="#"
                                    class="block px-4 py-2 hover:bg-emerald-400 border-r-2 border-gray-900 hover:border-white rounded-sm transition-all">Our
                                    Team</a></li>
                        </ul>
                    </li>

                    <li
                        class="p-2 text-white hover:bg-emerald-400 border-r-2 border-gray-900 hover:border-white rounded-sm transition-all">
                        <a href="#">Gallery</a>
                    </li>
                    <li
                        class="p-2 text-white hover:bg-emerald-400 border-r-2 border-gray-900 hover:border-white rounded-sm transition-all">
                        <a href="#">Contact</a>
                    </li>
                </ul>
            </div>

            <!-- ====== Hamburger Menu for small devices ======== -->
            <div class="md:hidden flex items-center">
                <button id="hamburger" class="text-white focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>

        <!-- ======= Mobile menu (hidden by default) ======== -->
        <div id="mobileMenu" class="md:hidden hidden bg-gray-900">
            <ul>
                <li class="p-2 text-white hover:bg-emerald-400 rounded-sm transition-all">
                    <a href="#">Home</a>
                </li>

                <!-- ====== Dropdown Menu ======= -->
                <li class="relative">
                    <button class="p-2 text-white w-full flex justify-between items-center">
                        About
                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>
                    <!-- ======== Dropdown menu items for mobile ========== -->
                    <ul class="dropdown-content hidden bg-gray-900 text-white p-2 rounded shadow-lg w-full">
                        <li><a href="#"
                                class="block px-4 py-2 hover:bg-emerald-400 border-r-2 border-gray-900 hover:border-white rounded-sm transition-all">About
                                Hotel</a></li>
                        <li><a href="#"
                                class="block px-4 py-2 hover:bg-emerald-400 border-r-2 border-gray-900 hover:border-white rounded-sm transition-all">Our
                                Team</a></li>
                    </ul>
                </li>

                <li class="p-2 text-white hover:bg-emerald-400 rounded-sm transition-all">
                    <a href="#">Gallery</a>
                </li>
                <li class="p-2 text-white hover:bg-emerald-400 rounded-sm transition-all">
                    <a href="#">Contact</a>
                </li>
            </ul>
        </div>
    </nav>

    <script>
        // Handle mobile menu toggle
        const hamburger = document.getElementById('hamburger');
        const mobileMenu = document.getElementById('mobileMenu');

        hamburger.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });

        // Handle desktop dropdown hover
        const dropdownButtons = document.querySelectorAll('.group');
        dropdownButtons.forEach(dropdown => {
            dropdown.addEventListener('mouseover', () => {
                const dropdownContent = dropdown.querySelector('.dropdown-content');
                dropdownContent.classList.remove('hidden');
            });

            dropdown.addEventListener('mouseleave', () => {
                const dropdownContent = dropdown.querySelector('.dropdown-content');
                dropdownContent.classList.add('hidden');
            });
        });

        // Handle mobile dropdown click
        const mobileDropdownButtons = document.querySelectorAll('#mobileMenu .relative > button');
        mobileDropdownButtons.forEach(button => {
            button.addEventListener('click', () => {
                const dropdownContent = button.nextElementSibling;
                dropdownContent.classList.toggle('hidden');
            });
        });
    </script>

</body>

</html>