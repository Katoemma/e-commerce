<?php include 'includes/header.php'?>
<!-- Product Listing Section -->
<section class="p-8">
    <div class="container mx-auto">
      <div class="flex justify-between items-center mb-8">
        <h1 class="text-2xl font-bold">Product Listing - Admin Dashboard</h1>
        <button class="bg-green-500 hover:bg-green-600 text-white py-2 px-4 rounded">Add Product</button>
      </div>
        <div class="flex flex-col">
            <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                    <div class="overflow-x-auto">
                        <table class="min-w-full text-center text-sm font-light">
                            <thead class="border-b text-white font-medium bg-red-600 dark:border-neutral-500">
                                <tr>
                                    <th scope="col" class="px-6 py-4">Product</th>
                                    <th scope="col" class="px-6 py-4">Brand</th>
                                    <th scope="col" class="px-6 py-4">Price</th>
                                    <th scope="col" class="px-6 py-4">Category</th>
                                    <th scope="col" class="px-6 py-4">Product Number</th>
                                    <th scope="col" class="px-6 py-4">Image</th>
                                    <th scope="col" class="px-6 py-4">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php for($i=0 ; $i < 5; $i++):?>
                                    <tr class="border-b dark:border-neutral-500">
                                        <td class="whitespace-nowrap px-6 py-4 font-medium">
                                            Acer Aspire E 15 <?php echo $i ?>
                                        </td>
                                        <td class="whitespace-nowrap px-6 py-4">$400</td>
                                        <td class="whitespace-nowrap px-6 py-4"><a href="#">Acer</a></td>
                                        <td class="whitespace-nowrap px-6 py-4"><a href="#">Laptops</a></td>
                                        <td class="whitespace-nowrap px-6 py-4">A1234567VX</td>
                                        <td class="whitespace-nowrap px-6 py-4"><img class="w-12 h-12" src="https://notebooks.com/wp-content/uploads/2015/09/acer-e15.jpeg" alt=""></td>
                                        <td class="whitespace-nowrap px-6 py-4">
                                            <button class="bg-green-600 px-2 py-1 text-white rounded-lg">View</button>
                                            <button class="bg-red-600 px-2 py-1 text-white rounded-lg">Delete</button>
                                        </td>
                                    </tr>
                                <?php endfor;?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </section>

<?php include 'includes/footer.php'?>
