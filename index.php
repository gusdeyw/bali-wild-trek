<?php
include "admin/dbconnect.php";
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
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement": [
    {
      "@type": "ListItem",
      "position": 1,
      "name": "Private Village Trekking",
      "item": "https://www.baliwildtrek.com/activity/private-village-trekking"
    },
    {
      "@type": "ListItem",
      "position": 2,
      "name": "Authentic Cooking Class",
      "item": "https://www.baliwildtrek.com/activity/authentic-cooking-class-in-balinese-paon-bali"
    },
    {
      "@type": "ListItem",
      "position": 3,
      "name": "Balinese Spiritual Trip",
      "item": "https://www.baliwildtrek.com/activity/balinese-spiritual-trip"
    }
  ]
}
</script>
<link rel="canonical" href="https://www.baliwildtrek.com/">
<meta name="description" content="Discover the wonders of Bali through our exclusive private tours. From majestic volcanoes to pristine beaches, our expert guides will take you off the beaten path, ensuring an authentic and captivating experience. Start planning your dream getaway now!">
<title>Bali Wild Trek | Home</title>
</head>

<body>
    <?php include "header/navbar.php" ?>
    <div class="w-full bg-cover bg-no-repeat text-white bg-center h-96 md:h-screen" style="background-image: url(admin/assets/img/2.webp);">
        <div class="w-10/12 mx-auto p-5 sm:p-10 md:pt-36">
            <h1 class="md:text-7xl text-5xl font-inter text-center font-bold">Bali Wild Trek</h1>
            <h2 class="text-center md:text-2xl pt-5 font-roboto">Unlimited Adventure in Bali Island</h3>
            <svg xmlns="https://www.w3.org/2000/svg" class="w-[30px] h-[30px] md:w-[40px] md:h-[40px] mx-auto mt-4 sm:mt-14" fill="white" class="bi bi-arrow-down-circle" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v5.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V4.5z" />
            </svg>
            <div class="bg-white rounded-2xl md:w-96 p-4 mx-auto mt-12 grid grid-cols-6 md:grid-cols-6">
                <div class="col-span-1">
                    <a aria-label="Whatsapp us now!" href="https://wa.me/<?= $whatsapp ?>?text=Hello%2C%20I%20have%20interest%20on%20you%20services"><i class="fa-brands fa-square-whatsapp text-4xl text-[#1FACCB]"></i></a>
                </div>
                <div class="col-span-1">
                    <a aria-label="Visit our Facebook now!" href="<?= $facebook ?>"><i class="fa-brands fa-square-facebook text-4xl text-[#1FACCB]"></i></a>
                </div>
                <div class="col-span-1">
                    <a aria-label="Checkout our Instagram!" href="<?= $instagram ?>"><i class="fa-brands fa-square-instagram text-4xl text-[#1FACCB]"></i></a>
                </div>
                <div class="col-span-3">
                    <a href="https://wa.me/<?= $whatsapp ?>?text=Hello%2C%20I%20have%20interest%20on%20you%20services">
                        <button class="text-white bg-[#1FACCB] font-bold rounded-2xl  w-full h-full">Book Now</button>
                    </a>
                </div>
            </div>
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
                        <a aria-label="Our great activities" href="activity/<?= $slug ?>" class="">
                        <?php $end = explode("/", $image_link2); ?>
                            <img class="object-cover h-56 w-full rounded-t-2xl" loading="lazy" src="<?= $image_link2 ?>" alt="<?= $end ?>">
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

    <div class="w-full bg-cover bg-no-repeat text-white bg-center h-96 md:h-screen pt-14 mt-16" style="background-image: url(admin/assets/img/3.3.jpg);">
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
                            <a aria-label="Find out more!" href="/activity-list" class="text-white font-bold font-roboto">Next</a>
                        </button>
                        <button class="px-3 py-1 bg-[#1FACCB]">
                            <svg xmlns="https://www.w3.org/2000/svg" width="20" height="20" fill="white" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
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
                    <a aria-label="Whatsapp us now!" href="https://wa.me/<?= $whatsapp ?>?text=Hello%2C%20I%20have%20interest%20on%20you%20services"><i class="fa-brands fa-square-whatsapp text-[#1FACCB]"></i></a>
                    <a aria-label="Visit our Facebook now!" href="<?= $facebook ?>"><i class="fa-brands fa-square-facebook text-[#1FACCB]"></i></a>
                    <a aria-label="Checkout our Instagram!" href="<?= $instagram ?>"><i class="fa-brands fa-square-instagram text-[#1FACCB]"></i></a>
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

    <?php
    include "header/footer.php";
    ?>

</body>

</html>