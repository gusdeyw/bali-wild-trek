<?php
session_start();
include "admin/dbconnect.php";
$id = $_GET["id"];
$query = "SELECT * FROM activity WHERE id = " . $id;

$result = mysqli_query($koneksi, $query);
$title = '';
$description = '';
$currency = '';
$price = '';
$uom = '';
$benefit = '';

while ($row = mysqli_fetch_array($result)) {
    $title = $row['title'];
    $description = $row['description'];
    $currency = $row['currency'];
    $price = $row['price'];
    $uom = $row['uom'];
    $benefit = $row['benefit'];
    $images = $row['images'];
    $images = explode(',', $images);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    .swiper {
        width: 100%;
        height: 100%;
    }

    .swiper-slide {
        text-align: center;
        font-size: 18px;
        background: #fff;

        /* Center slide text vertically */
        display: -webkit-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-justify-content: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        -webkit-align-items: center;
        align-items: center;
    }

    .swiper-slide img {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .swiper {
        width: 100%;
        height: 300px;
        margin-left: auto;
        margin-right: auto;
    }

    .swiper-slide {
        background-size: cover;
        background-position: center;
    }

    .mySwiper2 {
        height: 100%;
        width: 100%;
    }

    .mySwiper {
        height: 100%;
        box-sizing: border-box;
        padding: 10px 0;
    }

    .mySwiper .swiper-slide {
        width: 25%;
        height: 100%;
        opacity: 0.4;
    }

    .mySwiper .swiper-slide-thumb-active {
        opacity: 1;
    }

    .swiper-slide img {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    </style>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <title>Bali Wild Track</title>
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
    <!-- Header  -->
    <div class="h-56 w-full bg-no-repeat bg-cover bg-top bg-black text-white pt-16"
        style="background-image: url(public/header2.webp);">
        <div class="w-3/5 mx-auto text-center">
            <h1 class="font-bold text-4xl">Our Activity</h1>
            <h2 class="font-medium text-lg">Travel agency that specialized in Bali Island trip </h2>
        </div>
    </div>
    <!-- content -->
    <div class="w-10/12 mx-auto">
        <!-- Activity Tittle  -->
        <div class="mt-12">
            <h3 class="font-bold text-[#63B8C6] text-3xl"><?= $title?></h3>
            <h4 class="font-normal text-blue-500 text-2xl">Playing On A Tour</h4>
        </div>
        <div class="grid grid-cols-5 mt-7">
            <div class="col-span-5 md:col-span-3">
                <div class="mb-4 h-[13rem] md:h-[35rem]">
                    <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff"
                        class="mt-5 swiper mySwiper2 swiper-initialized swiper-horizontal">
                        <div class=" swiper-wrapper" id="swiper-wrapper-822f4d287c357ecc" aria-live="polite"
                            style="transform: translate3d(0px, 0px, 0px);">
                            <?php foreach ($images as $link) { ?>
                            <div class="swiper-slide swiper-slide-active" role="group" aria-label="1 / 14"
                                style="width: 1053px; margin-right: 10px;"><img src="<?php echo $link;?>">
                            </div>
                            <?php }?>
                        </div>
                        <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide"
                            aria-controls="swiper-wrapper-822f4d287c357ecc" aria-disabled="false"></div>
                        <div class="swiper-button-prev swiper-button-disabled" tabindex="-1" role="button"
                            aria-label="Previous slide" aria-controls="swiper-wrapper-822f4d287c357ecc"
                            aria-disabled="true"></div>
                        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                    </div>
                </div>
                <div class="h-32 lg:h-40">
                    <div thumbsslider=""
                        class="swiper mySwiper swiper-initialized swiper-horizontal swiper-free-mode swiper-watch-progress swiper-thumbs">
                        <div class="swiper-wrapper gap-7" id="swiper-wrapper-2c3bc282e24c118b" aria-live="polite"
                            style="transform: translate3d(0px, 0px, 0px);">
                            <?php foreach ($images as $link) { ?>
                            <div class="swiper-slide swiper-slide-visible swiper-slide-active swiper-slide-thumb-active"
                                role="group" style="width: 255.75px; margin-right: 10px;"><img
                                    src="<?php echo $link;?>">
                            </div>
                            <?php }?>
                        </div>
                        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                    </div>
                </div>
                <div class="w-full mt-2">
                    <?= $description ?>
                </div>
            </div>
            <div class="col-span-5 md:col-span-2 mt-6 md:mt-0 md:ml-6">
                <p class="text-3xl font-bold"><?=$currency?> <?=$price?>/<?=$uom?></p>
                <p class="text-xl">Benefit :</p>
                <?=$benefit?> <br>
                <a href="https://wa.me/6287862976304?text=Hello%2C%20I%20have%20interest%20on%20you%20services"><button
                        class="px-8 py-2 mt-7 shadow-md rounded-lg bg-[#63B8C6] text-white font-medium">Book
                        Now</button></a>
            </div>
        </div>
        <div class="w-96 mx-auto text-center mt-10">
            <p class="text-[#63B8C6] font-bold text-2xl">Other Activity</p>
        </div>
        <div class="grid grid-cols-3 gap-3 mt-3">
            <?php
            $query = "SELECT * FROM activity WHERE is_active = 1 AND id != $id ORDER BY RAND() LIMIT 3";

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
            <div class="col-span-3 md:col-span-1">
                <div class="bg-white filter rounded-2xl drop-shadow-lg col-span-1">
                    <a href="activity.php?id=<?= $id ?>" class="">
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
                            href="https://www.bootstrapskins.com/themes" id="grab-maps-authorization">premium bootstrap
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

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
var swiper = new Swiper(".mySwiper", {
    loop: true,
    spaceBetween: 10,
    slidesPerView: 4,
    freeMode: true,
    watchSlidesProgress: true,
});
var swiper2 = new Swiper(".mySwiper2", {
    loop: true,
    spaceBetween: 10,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    thumbs: {
        swiper: swiper,
    },
});
</script>