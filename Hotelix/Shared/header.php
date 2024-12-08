<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Navbar with Hover Dropdown</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            plugins: [require('daisyui')],
            daisyui: {
                themes: ["light", "dark"], // Choose your theme
            },
        }
    </script>
</head>

<body>
    <!-- Navbar Section -->
    <section class="bg-gray-900 text-white">
        <div class="navbar container mx-auto px-4 py-4">
            <!-- Navbar Start -->
            <div class="navbar-start">
                <!-- Hamburger Menu for Mobile -->
                <div class="dropdown relative">
                    <label tabindex="0" class="btn btn-ghost lg:hidden">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h8m-8 6h16" />
                        </svg>
                    </label>
                    <!-- Dropdown for Small Screens -->
                    <ul tabindex="0"
                        class="menu dropdown-content mt-3 p-2 shadow bg-green-400 rounded-box w-52 z-10 uppercase">
                        <li><a href="#">Home</a></li>
                        <li class="group">
                            <a class="hover:text-yellow-500 flex justify-between items-center">
                                About
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="h-4 w-4 ml-2 group-hover:rotate-180 transition-transform" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M5.293 9.293a1 1 0 011.414 0L10 12.586l3.293-3.293a1 1 0 011.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </a>
                            <ul
                                class="hidden group-hover:block group-focus:block menu p-2 shadow text-black bg-base-100 rounded-box w-40 mt-1">
                                <li><a href="#">About Hotel</a></li>
                                <li><a href="#">Our Team</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Gallery</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
                <!-- Logo -->
                <a href="#" class="btn btn-ghost normal-case text-xl">Grandeur</a>
            </div>

            <!-- Navbar Center (For Large Screens) -->
            <div class="navbar-center hidden lg:flex">
                <ul class="menu menu-horizontal px-1 font-semibold uppercase">
                    <li><a href="#">Home</a></li>
                    <li class="dropdown dropdown-hover">
                        <a class="hover:text-yellow-500">About</a>
                        <ul tabindex="0"
                            class="dropdown-content menu p-2 shadow text-black bg-base-100 rounded-box w-40 z-10">
                            <li><a href="#">About Hotel</a></li>
                            <li><a href="#">Our Team</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Gallery</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>

            <!-- Navbar End -->
            <div class="navbar-end">
                <a href="#"
                    class="btn bg-yellow-500 text-black px-6 py-2 rounded-md hover:bg-yellow-600 transition">Book
                    Now</a>
            </div>
        </div>
    </section>
</body>

</html>