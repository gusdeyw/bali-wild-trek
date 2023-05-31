<?php
include 'dbconnect.php';
$id = $_GET['id'];
$query = "SELECT * FROM activity WHERE id=$id ORDER BY id LIMIT 1;";
$result = mysqli_query($koneksi, $query);
while ($row = mysqli_fetch_array($result)) {
  $id = $row['id'];
  $title = $row['title'];
  $slug = $row['slug'];
  $description = $row['description'];
  $currency = $row['currency'];
  $price = $row['price'];
  $uom = $row['uom'];
  $benefit = $row['benefit'];
  $is_active = $row['is_active'];
}
?>

<?php
include "session_manager.php";
include "component/header.php";
?>

<script src="//cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>
</head>

<body>
  <div class="flex h-screen bg-gray-50 dark:bg-gray-900" :class="{ 'overflow-hidden': isSideMenuOpen }">
    <?php include "component/navbar.php"; ?>
    <main class="h-full overflow-y-auto">
      <div class="container px-6 mx-auto grid">
        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
          Update Activity
        </h2>
        <div class="w-full overflow-hidden rounded-lg shadow-xs bg-white p-4 dark:bg-gray-800">
          <div class="w-full overflow-x-auto">
            <form class="" action="procedure-activity.php" method="POST">
              <div class="mb-4">
                <label class="block dark:text-gray-400 text-gray-700 text-sm font-bold mb-2" for="hostname">
                  Title
                </label>
                <input class="shadow dark:text-white dark:border-gray-600 dark:bg-gray-700 appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="inputSlug" type="text" name="title" required placeholder="Title" value="<?= $title ?>">
                <input hidden class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="title" type="text" name="id" placeholder="Title" value="<?= $id ?>">
                <input type="text" name="mode" value="update" hidden>
              </div>
              <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2 dark:text-gray-400" for="hostname">
                  Slug
                </label>
                <input id="slugField" class="shadow dark:text-white appearance-none border dark:border-gray-600 dark:bg-gray-700 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" required name="slug" value="<?= $slug ?>" placeholder="Slug">
                <button onclick="convertInputToSlug()" style="margin-top: 6px;" type="button" class="bg-blue-500 text-white font-bold py-2 px-4 mx-2 rounded focus:outline-none focus:shadow-outline">
                  Generate
                </button>
              </div>
              <div class="mb-4 flex">
                <input class=" appearance-none border rounded mr-2 text-gray-700 leading-tight" name="is_active" id="is_active" type="checkbox" <?php if ($is_active == 1)
                                                                                                                                                  echo "checked"; ?> placeholder="">
                <label class="block dark:text-gray-400 text-gray-700 text-sm font-bold" for="hostname">
                  Active ?
                </label>
              </div>
              <div class="mb-4">
                <label class="block dark:text-gray-400 text-gray-700 text-sm font-bold mb-2" for="username">
                  Description
                </label>
                <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="blogcontent" name="description" type="text" placeholder="Username"><?= $description ?> </textarea>
              </div>
              <div class="mb-4">
                <label class="block dark:text-gray-400 text-gray-700 text-sm font-bold mb-2" for="currency">
                  Currency
                </label>
                <input class="shadow dark:text-white dark:border-gray-600 dark:bg-gray-700 appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="currency" name="currency" type="text" placeholder="currency" value="<?= $currency ?>">
              </div>
              <div class="mb-4">
                <label class="block dark:text-gray-400 text-gray-700 text-sm font-bold mb-2" for="Price">
                  Price
                </label>
                <input class="shadow dark:text-white dark:border-gray-600 dark:bg-gray-700 appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="price" name="price" type="number" placeholder="Price" value="<?= $price ?>">
              </div>
              <div class="mb-4">
                <label class="block dark:text-gray-400 text-gray-700 text-sm font-bold mb-2" for="uom">
                  UOM
                </label>
                <input class="shadow dark:text-white dark:border-gray-600 dark:bg-gray-700 appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="uom" name="uom" type="text" placeholder="UOM" value="<?= $uom ?>">
              </div>
              <div class="mb-4">
                <label class="block dark:text-gray-400 text-gray-700 text-sm font-bold mb-2" for="username">
                  Benefit
                </label>
                <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="blogcontent1" name="benefit" type="text" placeholder="Username"><?= $benefit ?> </textarea>
              </div>
              <div class="mb-4">
                <label class="block dark:text-gray-400 text-gray-700 text-sm font-bold mb-2" for="username">
                  Images
                </label>
                <a class="bg-blue-500 text-white p-1 rounded-md" target="_blank" href="drag_drop.php?id=<?= $id ?>">Update
                  Image</a>
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
  function convertToSlug(text) {
    return text.toLowerCase().replace(/\s+/g, '-').replace(/[^\w\-]+/g, '');
  }

  function convertInputToSlug() {
    var inputText = document.getElementById('inputSlug').value;
    var slug = convertToSlug(inputText);
    document.getElementById('slugField').value = slug;
  }
</script>

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