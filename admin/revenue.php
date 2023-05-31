<?php
include "session_manager.php";
include "component/header.php";
?>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.3.6/css/buttons.dataTables.min.css">
<script src="https://cdn.datatables.net/buttons/2.3.6/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.print.min.js"></script>

<style>
    button.fred {
        background-color: white,
    }
</style>
</head>

<body>
    <div class="flex h-screen bg-gray-50 dark:bg-gray-900" :class="{ 'overflow-hidden': isSideMenuOpen }">
        <?php include "component/navbar.php"; ?>
        <main class="h-full overflow-y-auto">
            <div class="container px-6 mx-auto grid">
                <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
                    Revenue List

                    <a href="revenue-insert.php"><button class="p-2 bg-blue-500 text-white text-sm font-bold rounded-lg w-10">Add
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
                                        #
                                    </th>
                                    <th>
                                        Date
                                    </th>
                                    <th>
                                        Sob
                                    </th>
                                    <th>
                                        Description
                                    </th>
                                    <th>
                                        Person
                                    </th>
                                    <th>
                                        Selling Rate
                                    </th>
                                    <th>
                                        Cost
                                    </th>
                                    <th>
                                        Revenue
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                require_once "class.php";

                                $num = 0;
                                $record = $crud->all('revenue');
                                foreach ($record as $row) {
                                    $id = $row['id'];
                                    $date = $row['date'];
                                    $sob = $row['sob'];
                                    $description = $row['description'];
                                    $person = $row['person'];
                                    $selling_rate = $row['selling_rate'];
                                    $cost = $row['cost'];
                                    $revenue = $row['revenue'];
                                ?>
                                    <tr>

                                        <td>
                                            <div class="flex">
                                                <a href="revenue-update.php?id=<?= $id ?>"><button class="py-1 px-2 bg-blue-500 text-white rounded-md font-bold"><i class="fa-solid fa-pen-to-square"></i></button>
                                                </a>
                                                <a href="revenue-procedure.php?id_delete=<?= $id ?>"><button class="py-1 px-2 bg-purple-600 text-white rounded-md font-bold ml-3"><i class="fa-solid fa-trash"></i></button>
                                                </a>
                                            </div>
                                        </td>
                                        <td style="text-align:center">
                                            <?= $num = $num +1 ?>
                                        </td>
                                        <td>
                                            <?= $date ?>
                                        </td>
                                        <td>
                                            <?= $sob ?>
                                        </td>
                                        <td>
                                            <?= $description ?>
                                        </td>
                                        <td>
                                            <?= $person ?>
                                        </td>
                                        <td>
                                            <?= number_format($selling_rate) ?>
                                        </td>
                                        <td>
                                            <?= number_format($cost) ?>
                                        </td>
                                        <td>
                                            <?= number_format($revenue) ?>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th colspan="8" style="text-align:right">Total:</th>
                                    <th></th>
                                </tr>
                            </tfoot>
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
        $('#datatable').DataTable({
            dom: 'Bfrtip',
            buttons: [{
                    extend: 'excelHtml5',
                    exportOptions: {
                        columns: [1, 2, 3, 4, 5, 6, 7, 8]
                    },
                    className: "fred",
                    footer: true
                },
                {
                    extend: 'pdfHtml5',
                    exportOptions: {
                        columns: [1, 2, 3, 4, 5, 6, 7, 8]
                    },
                    className: "fred",
                    footer: true
                }
            ],
            footerCallback: function(row, data, start, end, display) {
                var api = this.api();

                // Remove the formatting to get integer data for summation
                var intVal = function(i) {
                    return typeof i === 'string' ? i.replace(/[\$,]/g, '') * 1 : typeof i === 'number' ? i : 0;
                };

                // Total over all pages
                total = api
                    .column(8)
                    .data()
                    .reduce(function(a, b) {
                        return intVal(a) + intVal(b);
                    }, 0);

                // Total over this page
                // pageTotal = api
                //     .column(3, {
                //         page: 'current'
                //     })
                //     .data()
                //     .reduce(function(a, b) {
                //         return intVal(a) + intVal(b);
                //     }, 0);

                // Update footer
                let formattedNumber = new Intl.NumberFormat('en-US').format(total);
                $(api.column(8).footer()).html('' + formattedNumber + '');
            },
        });
    });
</script>