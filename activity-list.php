<?php include "header/header.php"; ?>
<link rel="canonical" href="https://www.baliwildtrek.com/activity-list">
<title>Activity List | Bali Wild Trek</title>
</head>

<body>
<?php include "header/navbar.php" ?>
    <!-- Header  -->
    <div class="h-56 w-full bg-no-repeat bg-cover bg-top bg-black text-white pt-16"
        style="background-image: url(public/header2.webp);">
        <div class="w-3/5 mx-auto text-center">
            <h1 class="font-bold text-4xl">Our Activity</h1>
            <h2 class="font-medium text-lg">Travel agency that specialized in Bali Island trip </h2>
        </div>
    </div>
    <!-- content -->
    <div class="w-11/12 mx-auto my-12">
        <div class="grid grid-cols-3 gap-3 mt-3">
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
            <div class="md:col-span-1 col-span-3">
                <div class="bg-white filter rounded-2xl drop-shadow-lg col-span-1">
                    <a href="activity/<?= $slug ?>" class="">
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