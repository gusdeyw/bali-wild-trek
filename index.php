<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Patua+One&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Bali Wild Trek</title>
</head>

<body>
    <!-- Navbar -->
    <div class="w-10/12 mx-auto">
        <div class="antialiased bg-gray-100 dark-mode:bg-gray-900">
            <div class="w-full text-gray-700 bg-white dark-mode:text-gray-200 dark-mode:bg-gray-800">
                <div x-data="{ open: false }"
                    class="flex flex-col max-w-screen-xl mx-auto md:items-center md:justify-between md:flex-row">
                    <div class="flex flex-row items-center justify-between p-4">
                        <a href="/"
                            class="text-lg font-semibold tracking-widest text-gray-900 uppercase rounded-lg dark-mode:text-white focus:outline-none focus:shadow-outline">Bali
                            Wild Trek</a>
                        <button class="rounded-lg md:hidden focus:outline-none focus:shadow-outline"
                            @click="open = !open">
                            <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                                <path x-show="!open" fill-rule="evenodd"
                                    d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z"
                                    clip-rule="evenodd"></path>
                                <path x-show="open" fill-rule="evenodd"
                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </div>
                    <nav :class="{'flex': open, 'hidden': !open}"
                        class="flex-col flex-grow hidden pb-4 md:pb-0 md:flex md:justify-end md:flex-row">
                        <a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                            href="/">Home</a>
                        <a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                            href="activity-list.php">Activity</a>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="w-full bg-cover bg-no-repeat text-white bg-center h-96 md:h-screen"
        style="background-image: url(admin/assets/img/2.jpg);">
        <div class="w-10/12 mx-auto pt-36">
            <h1 class="md:text-7xl text-5xl font-inter text-center font-bold">Bali Wild Trek</h1>
            <h3 class="text-center md:text-2xl pt-5 font-roboto">Unlimited Adventure in Bali Island</h3>
            <svg xmlns="http://www.w3.org/2000/svg" class="w-[30px] h-[30px] md:w-[40px] md:h-[40px] mx-auto mt-14"
                fill="white" class="bi bi-arrow-down-circle" viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                    d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v5.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V4.5z" />
            </svg>
        </div>
    </div>

    <div class="w-full mx-auto px-12 mt-14 xl:px-28">
        <div class="lg:flex lg:justify-around">
            <div class="ml-8 lg:w-full lg:mt-3 lg:ml-28 xl:mx-12">

            </div>
            <div class="text-sm mt-2 font-[arial] xl:px-28 xl:-ml-20 lg:text-base">

            </div>
        </div>

    </div>
    <div class="w-10/12 mx-auto">
        <div class="grid grid-cols-5 gap-7">
            <div class="md:col-span-2 col-span-5">
                <h1 class="font-bold md:text-right text-[#1FACCB] text-lg lg:text-2xl font-[patua]">
                    Tour the</h1>
                <h1 class="font-bold md:text-right text-[#1FACCB] text-lg lg:text-2xl font-[courgette]">
                    Playing On A Tour</h1>
                <h1 class="font-[pacifico] md:text-right font-bold text-[#1FACCB] lg:text-2xl text-lg">
                    Work While Relaxing</h1>
            </div>
            <div class="md:col-span-3 col-span-5 text-sm font-[arial] lg:text-base">
                <p>We are a travel agent who specializes in offering best price, quality and services for your Bali
                    travel. We provide all inclusive packages and activities around the world with experienced guide.
                    Our professional team will guide you through the best activities to keep your vacation fun, safe and
                    memorable. We are here to help you plan the perfect Balinese vacation. Enjoy the beauty with amazing
                    photos and videos by our professional photographers, enjoy sunrise yoga on a tropical island come
                    alive at sunrise</p>
            </div>
        </div>
    </div>
    <div class="w-10/12 mx-auto">
        <div class="grid grid-cols-3 gap-4 mt-10">
            <?php
            include "admin/dbconnect.php";
            $query = "SELECT * FROM activity WHERE is_active = 1 ORDER BY RAND()";

            $result = mysqli_query($koneksi, $query);
            $title = '';
            $description = '';
            $currency = '';
            $price = '';
            $uom = '';
            $benefit = '';
            
            while ($row = mysqli_fetch_array($result)) {
                $title = $row['title'];
                $id = $row['id'];
                $description = $row['description'];
                $currency = $row['currency'];
                $price = $row['price'];
                $uom = $row['uom'];
                $benefit = $row['benefit'];
                $images = $row['images'];
                $images = explode(',', $images);
                foreach ($images as $link1) {
                    $image_link2 = $link1;
                    break;
                }
            ?>
            <div class="md:col-span-1 col-span-3">
                <div class="bg-white filter rounded-2xl drop-shadow-lg col-span-1">
                    <a href="activity.php?id=<?=$id?>" class="">
                        <img class="object-cover h-56 w-full rounded-t-2xl" loading="lazy" src="<?=$image_link2?>">
                        <p class="text-center font-bold text-[#63B8C6] text-xl">
                            <?=mb_strimwidth($title, 0, 30, "...");?></p>
                        <div class="flex justify-center p-4">
                            <button class="px-6 py-2 rounded-lg bg-[#63B8C6] text-white font-bold">See detail</button>
                        </div>
                    </a>
                </div>
            </div>
            <?php
            }
            ?>
        </div>
    </div>

    <div class="w-full bg-cover bg-no-repeat text-white bg-center h-96 md:h-screen pt-14 mt-16"
        style="background-image: url(admin/assets/img/3.3.jpg);">
        <div class="w-10/12 mx-auto">
            <div class="md:w-5/12">
                <h1 class="font-bold text-white text-lg font-[pacifico] md:text-2xl">Very Beautiful Scenery
                </h1>
                <div class="">
                    <div class=" bg-[#1FACCB] p-3 sm:p-4 text-xs font-[Aleo] font-bold text-white md:text-sm">
                        <p class="mb-1">We are a travel agency that specialized in Bali Island trip. Our mission is to
                            offer
                            you
                            the best experience of travelling Bali. We do have experienced tour guide, competitive price
                            and
                            flexibility to suit your needs, giving you a memorable trip that never grows old.</p>
                        <br>
                        <p>Bali Island Travel is an experienced travel agent with many years of experience in helping
                            travelers
                            to enjoy the best of bali island. Our team can arrange tours, flights and hotels that suit
                            your
                            needs and budget - whether you're looking for a relaxing retreat or want to see some of
                            Indonesia's
                            top attractions. Explore this fascinating island on our tailored tour, which includes all
                            details
                            such as transportation and accommodations.</p>

                    </div>
                    <div class="flex justify-end gap-3 mt-2">
                        <button class="px-6 py-1 bg-[#1FACCB]">
                            <a href="#" class="text-white font-bold font-roboto">Next</a>
                        </button>
                        <button class="px-3 py-1 bg-[#1FACCB]">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="white"
                                class="bi bi-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="w-10/12 mx-auto mt-14 mb-24 md:mb-10">
        <div class="grid grid-cols-2 gap-10 justify-center">
            <div class="md:pt-12 col-span-2 md:col-span-1">
                <p>
                    We are an expert travel agent and guide in bali island. We have been offering service for more than
                    10
                    years, as well as offering competitive price and benefits to our clients. We can help you experience
                    the
                    true beauty of Bali Island, with lots of activity around the island with experienced guides, who are
                    familiar with local culture, history and tradition
                </p>
                <div class="flex gap-4 text-6xl mt-3">
                    <a href="https://wa.me/6287862976304?text=Hello%2C%20I%20have%20interest%20on%20you%20services"><i
                            class="fa-brands fa-square-whatsapp text-[#1FACCB]"></i></a>
                    <a href="https://www.facebook.com/baliwildtrek?mibextid=LQQJ4d"><i
                            class="fa-brands fa-square-facebook text-[#1FACCB]"></i></a>
                    <a href="https://instagram.com/baliwildtrek?igshid=YmMyMTA2M2Y="><i
                            class="fa-brands fa-square-instagram text-[#1FACCB]"></i></a>
                </div>
            </div>
            <div class="col-span-2 md:col-span-1">
                <img src="public/image10.jpg" class="w-8/12" alt="Bali">
            </div>
        </div>
    </div>


    <!-- <div class="w-full h-screen px-12 -mt-[7em] md:mt-0 md:flex justify-around">
        <div
            class="font-[arial] text-sm md:text-base md:w-60 md:h-60 md:mt-5 md:-mr-28 lg:w-[36rem] lg:h-60 lg:-mr-16 lg:mt-24 xl:-mr-20">
            <p>We are an expert travel agent and guide in bali island. We have been offering service for more than
                10
                years, as well as offering competitive price and benefits to our clients. We can help you experience
                the
                true beauty of Bali Island, with lots of activity around the island with experienced guides, who are
                familiar with local culture, history and tradition</p>
        </div>
        <div class="md:w-64 md:h-64 lg:w-72 lg:h-72 xl:-ml-28">
            <img src="admin/assets/img/9.jpg" alt="Bali">
        </div>
    </div> -->

    <!-- footer  -->
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" class="-mb-40">
        <path fill="#63B8C6" fill-opacity="1"
            d="M0,64L48,80C96,96,192,128,288,122.7C384,117,480,75,576,58.7C672,43,768,53,864,74.7C960,96,1056,128,1152,133.3C1248,139,1344,117,1392,106.7L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
        </path>
    </svg>
    <div class="w-full bg-[#63B8C6]">
        <div class="w-10/12 mx-auto mt-12 py-7">
            <div class="grid grid-cols-6 gap-5">
                <div class="col-span-6 md:col-span-2">
                    <div style="overflow:hidden;max-width:100%;width:500px;height:300px;">
                        <div id="embed-map-display" style="height:100%; width:100%;max-width:100%;"><iframe
                                style="height:100%;width:100%;border:0;" frameborder="0"
                                src="https://www.google.com/maps/embed/v1/place?q=Ubud,+Gianyar+Regency,+Bali,+Indonesia&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8"></iframe>
                        </div><a class="google-map-code-enabler" rel="nofollow"
                            href="https://www.bootstrapskins.com/themes" id="grab-maps-authorization">premium
                            bootstrap
                            themes</a>
                        <style>
                        #embed-map-display img.text-marker {
                            max-width: none !important;
                            background: none !important;
                        }

                        img {
                            max-width: none
                        }
                        </style>
                    </div>
                </div>
                <div class="col-span-6 md:col-span-4">
                    <div class="grid grid-cols-2">
                        <div>
                            <p class="font-bold text-gray-700">
                                ADDRESS
                            </p>
                            <p class="text-gray-700">
                                JL. Ciung Wanara No.10, Sangeh,
                                Kecamatan. Abiansemal.
                                Kabupaten Badung, Bali 80352.
                            </p>
                        </div>
                        <div>
                            <p class="font-bold text-gray-700">
                                CONTACTS
                            </p>
                            <p class="text-gray-700">
                                Email : dayu@baliwildtrek.com.
                                krisna@balitrek.com.
                                Phone : +62 87862976304.
                            </p>
                        </div>
                    </div>
                    <div>
                        <div class="mb-4 mt-10">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="Price">
                                Follow our Newsletter
                            </label>
                            <input
                                class="shadow  appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                id="price" name="price" type="text" placeholder="email@site.com">
                            <button class="bg-white rounded-xl px-6 py-2 font-bold text-gray-700 mt-4">
                                Subscribe
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="w-full bg-[#63B8C6] border-t-4">
        <div class="text-white text-xl font-bold text-center w-10/12 mx-auto p-5">
            Copyright (C) 2023 Bali Wild Track | Privacy Policy
        </div>
    </div>

</body>

</html>