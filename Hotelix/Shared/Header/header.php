<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>
    <style>
        /* Optional for smooth hover transition */
        .transition-all {
            transition: all 0.3s ease;
            cursor: pointer;
        }
    </style>
</head>

<body>

    <nav class="bg-[--primary-color] p-4 shadow-lg">
        <div class="max-w-7xl mx-auto flex justify-between items-center">
            <!-- ====== Logo or Brand Name ======== -->
            <a href="#" class="cursor-pointer">
                <img src="<?php echo './hotelix/assets/hotel_logo/hotelix.png'; ?>" alt="Hotelix_logo"
                    class="w-[150px]">
            </a>

            <!-- ======= Navbar links for larger screens ========= -->
            <div class="hidden md:flex space-x-8">
                <ul class="flex space-x-8">
                    <li
                        class="p-2 text-[--serondary-color] hover:bg-emerald-400 border-r-2 border-transparent hover:border-[--border-color] rounded-sm transition-all">
                        <a href="#">Home</a>
                    </li>

                    <!-- ====== Dropdown Menu ======= -->
                    <li class="relative group">
                        <a
                            class="p-2 text-[--serondary-color] hover:bg-emerald-400 border-r-2 border-transparent hover:border-[--border-color] rounded-sm transition-all flex items-center">
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
                        class="p-2 text-[--serondary-color] hover:bg-emerald-400 border-r-2 border-transparent hover:border-[--border-color] rounded-sm transition-all">
                        <a href="#">Gallery</a>
                    </li>
                    <li
                        class="p-2 text-[--serondary-color] hover:bg-emerald-400 border-r-2 border-transparent hover:border-[--border-color] rounded-sm transition-all">
                        <a href="#">Contact</a>
                    </li>


                    <label class="swap swap-rotate">
                        <!-- this hidden checkbox controls the state -->
                        <input type="checkbox" class="icon" value="" onclick="handleToggleBtn()" />

                        <!-- sun icon -->
                        <svg class="swap-off h-5 w-5 fill-current" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24">
                            <path
                                d="M5.64,17l-.71.71a1,1,0,0,0,0,1.41,1,1,0,0,0,1.41,0l.71-.71A1,1,0,0,0,5.64,17ZM5,12a1,1,0,0,0-1-1H3a1,1,0,0,0,0,2H4A1,1,0,0,0,5,12Zm7-7a1,1,0,0,0,1-1V3a1,1,0,0,0-2,0V4A1,1,0,0,0,12,5ZM5.64,7.05a1,1,0,0,0,.7.29,1,1,0,0,0,.71-.29,1,1,0,0,0,0-1.41l-.71-.71A1,1,0,0,0,4.93,6.34Zm12,.29a1,1,0,0,0,.7-.29l.71-.71a1,1,0,1,0-1.41-1.41L17,5.64a1,1,0,0,0,0,1.41A1,1,0,0,0,17.66,7.34ZM21,11H20a1,1,0,0,0,0,2h1a1,1,0,0,0,0-2Zm-9,8a1,1,0,0,0-1,1v1a1,1,0,0,0,2,0V20A1,1,0,0,0,12,19ZM18.36,17A1,1,0,0,0,17,18.36l.71.71a1,1,0,0,0,1.41,0,1,1,0,0,0,0-1.41ZM12,6.5A5.5,5.5,0,1,0,17.5,12,5.51,5.51,0,0,0,12,6.5Zm0,9A3.5,3.5,0,1,1,15.5,12,3.5,3.5,0,0,1,12,15.5Z" />
                        </svg>

                        <!-- moon icon -->
                        <svg class="swap-on h-5 w-5 fill-current" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24">
                            <path
                                d="M21.64,13a1,1,0,0,0-1.05-.14,8.05,8.05,0,0,1-3.37.73A8.15,8.15,0,0,1,9.08,5.49a8.59,8.59,0,0,1,.25-2A1,1,0,0,0,8,2.36,10.14,10.14,0,1,0,22,14.05,1,1,0,0,0,21.64,13Zm-9.5,6.69A8.14,8.14,0,0,1,7.08,5.22v.27A10.15,10.15,0,0,0,17.22,15.63a9.79,9.79,0,0,0,2.1-.22A8.11,8.11,0,0,1,12.14,19.73Z" />
                        </svg>
                    </label>
                </ul>
                <div
                    class="bg-[--primary-color] border-2 border-blue-400 px-3 flex items-center hover:border-green-600 rounded-sm transition-all">
                    <a href="#">Book Now</a>
                </div>
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
        <div id="mobileMenu" class="md:hidden hidden bg-[--primary-color]">
            <ul>
                <li
                    class="p-2 text-[--serondary-color] hover:bg-emerald-400 rounded-sm transition-all border-r-2 border-transparent hover:border-[--border-color]">
                    <a href="#">Home</a>
                </li>

                <!-- ====== Dropdown Menu ======= -->
                <li class="relative">
                    <button
                        class="p-2 text-[--serondary-color] w-full flex justify-between items-center border-r-2 border-transparent hover:border-[--border-color]">
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

                <li
                    class="p-2 text-[--serondary-color] hover:bg-emerald-400 rounded-sm transition-all border-r-2 border-transparent hover:border-[--border-color]">
                    <a href="#">Gallery</a>
                </li>
                <li
                    class="p-2 text-[--serondary-color] hover:bg-emerald-400 rounded-sm transition-all border-r-2 border-transparent hover:border-[--border-color]">
                    <a href="#">Contact</a>
                </li>

                <label class="swap swap-rotate mb-3">
                    <!-- this hidden checkbox controls the state -->
                    <input type="checkbox" class="icon" value="" onclick="handleToggleBtn()" />

                    <!-- sun icon -->
                    <svg class="swap-off h-5 w-5 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path
                            d="M5.64,17l-.71.71a1,1,0,0,0,0,1.41,1,1,0,0,0,1.41,0l.71-.71A1,1,0,0,0,5.64,17ZM5,12a1,1,0,0,0-1-1H3a1,1,0,0,0,0,2H4A1,1,0,0,0,5,12Zm7-7a1,1,0,0,0,1-1V3a1,1,0,0,0-2,0V4A1,1,0,0,0,12,5ZM5.64,7.05a1,1,0,0,0,.7.29,1,1,0,0,0,.71-.29,1,1,0,0,0,0-1.41l-.71-.71A1,1,0,0,0,4.93,6.34Zm12,.29a1,1,0,0,0,.7-.29l.71-.71a1,1,0,1,0-1.41-1.41L17,5.64a1,1,0,0,0,0,1.41A1,1,0,0,0,17.66,7.34ZM21,11H20a1,1,0,0,0,0,2h1a1,1,0,0,0,0-2Zm-9,8a1,1,0,0,0-1,1v1a1,1,0,0,0,2,0V20A1,1,0,0,0,12,19ZM18.36,17A1,1,0,0,0,17,18.36l.71.71a1,1,0,0,0,1.41,0,1,1,0,0,0,0-1.41ZM12,6.5A5.5,5.5,0,1,0,17.5,12,5.51,5.51,0,0,0,12,6.5Zm0,9A3.5,3.5,0,1,1,15.5,12,3.5,3.5,0,0,1,12,15.5Z" />
                    </svg>

                    <!-- moon icon -->
                    <svg class="swap-on h-5 w-5 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path
                            d="M21.64,13a1,1,0,0,0-1.05-.14,8.05,8.05,0,0,1-3.37.73A8.15,8.15,0,0,1,9.08,5.49a8.59,8.59,0,0,1,.25-2A1,1,0,0,0,8,2.36,10.14,10.14,0,1,0,22,14.05,1,1,0,0,0,21.64,13Zm-9.5,6.69A8.14,8.14,0,0,1,7.08,5.22v.27A10.15,10.15,0,0,0,17.22,15.63a9.79,9.79,0,0,0,2.1-.22A8.11,8.11,0,0,1,12.14,19.73Z" />
                    </svg>
                </label>
            </ul>

            <div
                class="bg-[--primary-color] border-2 border-blue-400 px-3 flex items-center justify-center hover:border-green-600 rounded-sm transition-all">
                <a href="#">Book Now</a>
            </div>

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


        // handle theme toggle 
        const handleToggleBtn = () => {
            const darkModeEnabeld = document.body.classList.toggle('dark');

            // set theme in local storage 
            localStorage.setItem('theme', darkModeEnabeld ? 'dark' : 'light');
        }


        window.addEventListener('DOMContentLoaded', () => {
            // Check if the theme is saved in localStorage
            const savedTheme = localStorage.getItem('theme');

            // Apply the saved theme if it exists
            if (savedTheme === 'dark') {
                document.body.classList.add('dark');
            } else {
                document.body.classList.remove('dark');
            }
        });
    </script>

</body>

</html>