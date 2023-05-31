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
                    Activity List

                    <a href="insert.php"><button
                            class="p-2 bg-blue-500 text-white text-sm font-bold rounded-lg w-10">Add
                            New</button></a>
                </h2>

                <!-- Cards -->
                <!-- New Table -->
                <div class="w-full overflow-hidden rounded-lg shadow-xs bg-white p-4 dark:text-white dark:bg-gray-800">
                    <div class="w-full overflow-x-auto">
                        <table id="datatable" class=" w-full">
                            <thead>
                                <tr>
                                    <th>
                                        Action
                                    </th>
                                    <th>
                                        Title
                                    </th>
                                    <th>
                                        currency
                                    </th>
                                    <th>
                                        price
                                    </th>
                                    <th>
                                        uom
                                    </th>
                                    <th>
                                        Status
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                require_once "class.php";

                $record = $crud->all('activity');
                foreach ($record as $row) {
                  $id = $row['id'];
                  $title = $row['title'];
                  $currency = $row['currency'];
                  $price = $row['price'];
                  $uom = $row['uom'];
                  $is_active = $row['is_active'];
                ?>
                                <tr>

                                    <td>
                                        <div class="flex">
                                            <a href="update.php?id=<?= $id ?>"><button
                                                    class="py-1 px-2 bg-blue-500 text-white rounded-md font-bold"><i
                                                        class="fa-solid fa-pen-to-square"></i></button>
                                            </a>
                                            <a href="procedure-activity.php?id_delete=<?= $id ?>"><button
                                                    class="py-1 px-2 bg-purple-600 text-white rounded-md font-bold ml-3"><i
                                                        class="fa-solid fa-trash"></i></button>
                                            </a>
                                        </div>
                                    </td>
                                    <td>
                                        <?= $title ?>
                                    </td>
                                    <td>
                                        <?= $currency ?>
                                    </td>
                                    <td>
                                        <?= $price ?>
                                    </td>
                                    <td>
                                        <?= $uom ?>
                                    </td>
                                    <td>
                                        <?php
                      if ($is_active == 1) {
                        echo "Active";
                      } else {
                        echo "Not Active";
                      }
                      ?>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
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