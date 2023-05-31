<?php
include 'dbconnect.php';
$id = $_GET['id'];
$query = "SELECT * FROM revenue WHERE id=$id ORDER BY id LIMIT 1;";
$result = mysqli_query($koneksi, $query);
while ($row = mysqli_fetch_array($result)) {
    $id = $row['id'];
    $date = $row['date'];
    $sob = $row['sob'];
    $description = $row['description'];
    $person = $row['person'];
    $selling_rate = $row['selling_rate'];
    $cost = $row['cost'];
    $revenue = $row['revenue'];
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
                    Update Revenue
                </h2>
                <div class="w-full overflow-hidden rounded-lg shadow-xs bg-white p-4 dark:bg-gray-800">
                    <div class="w-full overflow-x-auto">
                        <form class="" action="revenue-procedure.php" method="POST">
                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-bold mb-2 dark:text-gray-400">
                                    Date
                                </label>
                                <input class="shadow dark:text-white appearance-none border dark:border-gray-600 dark:bg-gray-700 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required type="date" name="date" value="<?=$date?>">
                                <input type="text" name="mode" value="update" hidden>
                                <input type="text" name="id" value="<?=$id?>" hidden>
                            </div>
                            <div class="mb-4">
                                <label class="block dark:text-gray-400 text-gray-700 text-sm font-bold mb-2">
                                    Sob
                                </label>
                                <input class="shadow dark:text-white dark:border-gray-600 dark:bg-gray-700 appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="sob" type="text" value="<?= $sob?>" placeholder="Sob">
                            </div>
                            <div class="mb-4">
                                <label class="block dark:text-gray-400 text-gray-700 text-sm font-bold mb-2">
                                    Description
                                </label>
                                <input class="shadow dark:text-white dark:border-gray-600 dark:bg-gray-700 appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="description" type="text" value="<?=$description?>" placeholder="Description">
                            </div>
                            <div class="mb-4">
                                <label class="block dark:text-gray-400 text-gray-700 text-sm font-bold mb-2">
                                    Person
                                </label>
                                <input class="shadow dark:text-white dark:border-gray-600 dark:bg-gray-700 appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="person" type="number" value="<?=$person?>">
                            </div>
                            <div class="mb-4">
                                <label class="block dark:text-gray-400 text-gray-700 text-sm font-bold mb-2">
                                    Selling Rate
                                </label>
                                <input id="rate" class="shadow dark:text-white dark:border-gray-600 dark:bg-gray-700 appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="selling_rate" type="number" value="<?=$selling_rate?>">
                            </div>
                            <div class="mb-4">
                                <label class="block dark:text-gray-400 text-gray-700 text-sm font-bold mb-2">
                                    Cost
                                </label>
                                <input id="cost" class="shadow dark:text-white dark:border-gray-600 dark:bg-gray-700 appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="cost" type="number" value="<?=$cost?>">
                            </div>
                            <div class="mb-4">
                                <label class="block dark:text-gray-400 text-gray-700 text-sm font-bold mb-2">
                                    Revenue
                                </label>
                                <input id="revenue" class="shadow dark:text-white dark:border-gray-600 dark:bg-gray-700 appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="revenue" type="number" value="<?=$revenue?>">
                            </div>
                            <div class="flex items-center justify-left">
                                <a href="revenue.php">
                                    <button id="cancelButton" class="bg-white dark:border-gray-600 dark:bg-gray-700 dark:text-gray-400 shadow-sm font-bold py-2 px-4 mr-2 rounded focus:outline-none focus:shadow-outline" type="button">
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
        function revenue() {
            $("#revenue").val($("#rate").val() - $("#cost").val());
        }
        $("#rate").on("input", function() {
            revenue();
        });
        $("#cost").on("input", function() {
            revenue();
        });
    });
</script>