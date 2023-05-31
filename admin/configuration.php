<?php
require_once "class.php";

$record = $crud->where("id_config", "=", 1)->all('configuration');
foreach ($record as $row) {
    $whatsapp = $row['whatsapp'];
    $email = $row['email'];
    $instagram = $row['instagram'];
    $facebook = $row['facebook'];
}
?>

<?php
include "session_manager.php";
include "component/header.php";
?>


</head>

<body>
    <div class="flex h-screen bg-gray-50 dark:bg-gray-900" :class="{ 'overflow-hidden': isSideMenuOpen }">
        <?php include "component/navbar.php"; ?>
        <main class="h-full overflow-y-auto">
            <div class="container px-6 mx-auto grid">
                <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
                    Update Configuration
                </h2>
                <div class="w-full overflow-hidden rounded-lg shadow-xs bg-white p-4 dark:bg-gray-800">
                    <div class="w-full overflow-x-auto">
                        <form class="" action="procedure-configuration.php" method="POST">
                            <div class="mb-4">
                                <label class="block dark:text-gray-400 text-gray-700 text-sm font-bold mb-2" for="whatsapp">
                                    Whatsapp
                                </label>
                                <input class="shadow dark:text-white dark:border-gray-600 dark:bg-gray-700 appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="whatsapp" type="text" name="whatsapp" placeholder="Whatsapp" value="<?= $whatsapp ?>">
                                <input type="text" name="mode" value="update" hidden>
                            </div>
                            <div class="mb-4">
                                <label class="block dark:text-gray-400 text-gray-700 text-sm font-bold mb-2" for="email">
                                    Email
                                </label>
                                <input class="shadow dark:text-white dark:border-gray-600 dark:bg-gray-700 appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" name="email" type="text" placeholder="Email" value="<?= $email ?>">
                            </div>
                            <div class="mb-4">
                                <label class="block dark:text-gray-400 text-gray-700 text-sm font-bold mb-2" for="facebook">
                                    FaceBook
                                </label>
                                <input class="shadow dark:text-white dark:border-gray-600 dark:bg-gray-700 appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="facebook" name="facebook" type="text" placeholder="FaceBook" value="<?= $facebook ?>">
                            </div>
                            <div class="mb-4">
                                <label class="block dark:text-gray-400 text-gray-700 text-sm font-bold mb-2" for="instagram">
                                    Instagram
                                </label>
                                <input class="shadow dark:text-white dark:border-gray-600 dark:bg-gray-700 appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="instagram" name="instagram" type="text" placeholder="Instagram" value="<?= $instagram ?>">
                            </div>
                            <div class="flex items-center justify-left">
                                <a href="index.php">
                                    <button id="cancelButton" class="bg-white dark:text-gray-400 dark:border-gray-600 dark:bg-gray-700 shadow-sm font-bold py-2 px-4 mr-2 rounded focus:outline-none focus:shadow-outline" type="button">
                                        Cancel
                                    </button>
                                </a>
                                <button id="testButton" class="bg-blue-500 text-white font-bold py-2 px-4 mx-2 rounded focus:outline-none focus:shadow-outline" type="submit">
                                    Update
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </main>
    </div>
    </div>
</body>

</html>

<script>
    $(document).ready(function() {
        $('#datatable').DataTable();
    });
</script>

<script>
    CKEDITOR.replace('blogcontent', {
        height: 300,
    });
    CKEDITOR.replace('blogcontent1', {
        height: 300,
    });
</script>