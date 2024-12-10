<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer</title>
</head>

<body>
    <footer class="bg-gray-900 py-5">
        <section class="max-w-7xl mx-auto grid grid-cols-3 gap-5">
            <!-- ======== footer left content ====== -->
            <div class="">
                <div class="footer_logo cursor-pointer">
                    <img src="<?php echo './Hotelix/assets/hotelLogo/hotelix.png'; ?>" alt="Hotelix_logo"
                        class="w-[150px]">
                </div>
                <p class="py-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Perferendis odit officiis
                    molestias temporibus
                    ipsam.
                </p>
                <div class="readbtn">
                    <a href="#">Read More</a>
                </div>
            </div>

            <!-- ========== footer middel content ======= -->
            <div class="">
                <h3>Connect With Us</h3>
                <p class="py-3">SOCIAL MEDIA CHANNELS</p>
                <div>
                    <a href="">fb</a>
                    <a href="">yout</a>
                    <a href="">insta</a>
                    <a href="">linke</a>
                    <a href="">twit</a>
                </div>
            </div>

            <!-- ======= footer right content ======= -->
            <div class="">
                <h3>Subscribe To Receive News Updates & Offers</h3>
                <p class="py-3">SIGN UP FOR SPECIAL OFFERS</p>
                <form action="">
                    <input type="email" id="email" name="email" placeholder="insert your email"
                        class="w-full outline-none bg-white ps-4 py-3">
                    <input type="submit" value="Subscribe Us"
                        class="border-2 border-x-white w-full p-4 my-4 hover:bg-green-900 text-white uppercase">
                </form>
            </div>

        </section>
    </footer>
    <!-- == privacy == -->
    <div class="grid grid-cols-2  py-3 px-10 bg-gray-800 text-white">
        <div class="flex gap-8">
            <a href=""
                class="hover:bg-emerald-400 border-r-2 border-gray-800 hover:border-white rounded-sm transition-all p-2">home</a>
            <a href=""
                class="hover:bg-emerald-400 border-r-2 border-gray-800 hover:border-white rounded-sm transition-all p-2">About</a>
            <a href=""
                class="hover:bg-emerald-400 border-r-2 border-gray-800 hover:border-white rounded-sm transition-all p-2">Gallery</a>
            <a href=""
                class="hover:bg-emerald-400 border-r-2 border-gray-800 hover:border-white rounded-sm transition-all p-2">Contact</a>
        </div>
        <div class="flex items-center justify-end">
            <span>Copyright © 2024 Hotelix. All Rights Reserved.</span>
        </div>
    </div>
</body>

</html>