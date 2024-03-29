<?php
session_start();
include "admin/dbconnect.php";
$id = $_GET["slug"];
$query = "SELECT * FROM activity WHERE slug = '" . $id. "'";

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

$query1 = "SELECT * FROM configuration WHERE id_config = 1";
$result1 = mysqli_query($koneksi, $query1);
$whatsapp = "";
$email = "";
$instagram = "";
$facebook = "";

while ($row1 = mysqli_fetch_array($result1)) {
    $whatsapp = $row1['whatsapp'];
    $email = $row1['email'];
    $instagram = $row1['instagram'];
    $facebook = $row1['facebook'];
}
include "header/header.php";
?>

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
<style type="text/tailwindcss">
    @layer utilities {
        ul {
    display: block;
    list-style-type: disc;
    margin-block-start: 1em;
    margin-block-end: 1em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
    padding-inline-start: 40px;
}

li {
    display: list-item;
    text-align: -webkit-match-parent;
}
    }
  </style>
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
<link rel="canonical" href="https://www.baliwildtrek.com/activity-list">
<title><?= $title ?></title>
</head>

<body>
    <?php include "header/navbar.php" ?>
    <!-- Header  -->
    <div class="h-56 w-full bg-no-repeat bg-cover bg-top bg-black text-white pt-16" style="background-image: url(public/header2.webp);">
        <div class="w-3/5 mx-auto text-center">
            <h1 class="font-bold text-4xl">Our Activity</h1>
            <h2 class="font-medium text-lg">Travel agency that specialized in Bali Island trip </h2>
        </div>
    </div>
    <!-- content -->
    <div class="w-10/12 mx-auto">
        <!-- Activity Tittle  -->
        <div class="mt-12">
            <h3 class="font-bold text-[#63B8C6] text-3xl"><?= $title ?></h3>
            <h4 class="font-normal text-blue-500 text-2xl">Playing On A Tour</h4>
        </div>
        <div class="grid grid-cols-5 mt-7">
            <div class="col-span-5 md:col-span-3">
                <div class="mb-4 h-[13rem] md:h-[35rem]">
                    <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="mt-5 swiper mySwiper2 swiper-initialized swiper-horizontal">
                        <div class=" swiper-wrapper" id="swiper-wrapper-822f4d287c357ecc" aria-live="polite" style="transform: translate3d(0px, 0px, 0px);">
                            <?php foreach ($images as $link) { ?>
                                <div class="swiper-slide swiper-slide-active" role="group" aria-label="1 / 14" style="width: 1053px; margin-right: 10px;"><img src="<?php echo $link; ?>">
                                </div>
                            <?php } ?>
                        </div>
                        <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-822f4d287c357ecc" aria-disabled="false"></div>
                        <div class="swiper-button-prev swiper-button-disabled" tabindex="-1" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-822f4d287c357ecc" aria-disabled="true"></div>
                        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                    </div>
                </div>
                <div class="h-32 lg:h-40">
                    <div thumbsslider="" class="swiper mySwiper swiper-initialized swiper-horizontal swiper-free-mode swiper-watch-progress swiper-thumbs">
                        <div class="swiper-wrapper gap-7" id="swiper-wrapper-2c3bc282e24c118b" aria-live="polite" style="transform: translate3d(0px, 0px, 0px);">
                            <?php foreach ($images as $link) { ?>
                                <div class="swiper-slide swiper-slide-visible swiper-slide-active swiper-slide-thumb-active" role="group" style="width: 255.75px; margin-right: 10px;"><img src="<?php echo $link; ?>">
                                </div>
                            <?php } ?>
                        </div>
                        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                    </div>
                </div>
                <div class="w-full mt-2">
                    <?= $description ?>
                </div>
            </div>
            <div class="col-span-5 md:col-span-2 mt-6 md:mt-0 md:ml-6">
                <p class="text-3xl font-bold"><?= $currency ?> <?= $price ?>/<?= $uom ?></p>
                <p class="text-xl">Benefit :</p>
                <?= $benefit ?> <br>
                <a href="https://wa.me/6287862976304?text=Hello%2C%20I%20have%20interest%20on%20you%20services"><button class="px-8 py-2 mt-7 shadow-md rounded-lg bg-[#63B8C6] text-white font-medium">Book
                        Now</button></a>
            </div>
        </div>
        <div class="w-96 mx-auto text-center mt-10">
            <p class="text-[#63B8C6] font-bold text-2xl">Other Activity</p>
        </div>
        <div class="grid grid-cols-3 gap-3 mt-3 mb-24 md:mb-10">
            <?php
            $query = "SELECT * FROM activity WHERE is_active = 1 AND slug != '$id' ORDER BY RAND() LIMIT 3";

            $result = mysqli_query($koneksi, $query);
            $title = '';
            $slug = '';
            $description = '';
            $currency = '';
            $price = '';
            $uom = '';
            $benefit = '';

            while ($row = mysqli_fetch_array($result)) {
                $title = $row['title'];
                $id = $row['id'];
                $slug = $row['slug'];
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
                        <a href="/activity/<?= $slug ?>" class="">
                            <img class="object-cover h-56 w-full rounded-t-2xl" loading="lazy" src="<?= $image_link2 ?>">
                            <p class="text-center font-bold text-[#63B8C6] text-xl">
                                <?= mb_strimwidth($title, 0, 30, "..."); ?></p>
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
    <?php
    include "header/footer.php";
    ?>

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