<?php
include "session_manager.php";
include "component/header.php";
?>
<script src="https://cdn.jsdelivr.net/npm/chart.js@3.5.0"></script>

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
                <h2 id="judul" class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
                    Revenue
                </h2>
                <div class="w-full overflow-hidden rounded-lg shadow-xs bg-white p-4 !dark:text-white dark:bg-gray-800">
                    <canvas id="revenueChart"></canvas>
                </div>
                <script>
                    let filteredData; // Declare filteredData variable
                    let monthlyRevenue; // Declare monthlyRevenue variable

                    async function fetchData() {
                        try {
                            const response = await fetch('endpoint/get_revenue.php');
                            if (!response.ok) {
                                throw new Error('Error fetching data from the server.');
                            }
                            const data = await response.json();

                            // Filter the data to extract 'date' and 'revenue'
                            filteredData = data.map(({
                                date,
                                revenue
                            }) => ({
                                date,
                                revenue: parseInt(revenue) 
                            }));
                            console.log(filteredData);

                            // Calculate revenue per month
                            monthlyRevenue = {};
                            filteredData.forEach(({
                                date,
                                revenue
                            }) => {
                                const monthYear = new Date(date).toLocaleString('default', {
                                    month: 'long',
                                    year: 'numeric'
                                });
                                if (!monthlyRevenue[monthYear]) {
                                    monthlyRevenue[monthYear] = revenue;
                                } else {
                                    monthlyRevenue[monthYear] += revenue;
                                }
                            });

                            // Calculate total revenue
                            totalRevenue = filteredData.reduce((sum, {
                                revenue
                            }) => sum + revenue, 0);

                            // Display the total revenue in the HTML element
                            totalRevenue = new Intl.NumberFormat('en-US').format(totalRevenue);
                            document.getElementById('judul').innerHTML = `Revenue Total: ${totalRevenue}`;

                            // Call the function to render the chart with the aggregated revenue per month
                            renderChart();

                        } catch (error) {
                            // Handle any errors that occurred during the fetch request
                            console.error(error);
                        }
                    }

                    // Function to render the chart with the aggregated revenue per month
                    function renderChart() {
                        // Prepare data for Chart.js
                        const months = Object.keys(monthlyRevenue);
                        const revenueValues = Object.values(monthlyRevenue);

                        // Create the chart
                        const ctx = document.getElementById('revenueChart').getContext('2d');
                        const chart = new Chart(ctx, {
                            type: 'bar',
                            data: {
                                labels: months,
                                datasets: [{
                                    label: 'Revenue per Month',
                                    data: revenueValues,
                                    backgroundColor: 'rgba(75, 192, 192, 0.8)'
                                }]
                            },
                            options: {
                                responsive: true,
                                scales: {
                                    y: {
                                        beginAtZero: true
                                    }
                                }
                            }
                        });
                    }

                    fetchData();
                </script>
            </div>
        </main>
    </div>
    </div>
</body>

</html>

<script>
    $(document).ready(function() {

    });
</script>