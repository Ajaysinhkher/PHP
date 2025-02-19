<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Note Details</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-900">
    <?php require base_path("view/partials/nav.php") ?>

    <main class="max-w-xl mx-auto mt-10 p-6 bg-white shadow-lg rounded-lg">
        <div class="mb-6">
            <p class="text-lg font-semibold text-gray-800">Note:</p>
            <p class='text-blue-600 mt-2 p-3 bg-gray-50 border border-blue-300 rounded-lg'>
                <?= htmlspecialchars($note['body']) ?>
            </p>
        </div>
        <div class="flex gap-4 mt-6">
    <form method="POST" action="">
        <input type="hidden" name="_method" value="DELETE">
        <input type="hidden" name="id" value="<?= $note['id'] ?>">

        <!-- Delete Button -->
        <button type="submit" class="px-4 py-2 bg-red-500 text-white font-semibold rounded-md shadow-md hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-400 focus:ring-opacity-75">
            Delete
        </button>
    </form>


   
    <a href="/phpLaracast/note/edit?id=<?= $note['id'] ?>" class="px-4 py-2 bg-red-500 text-white font-semibold rounded-md shadow-md hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-400 focus:ring-opacity-75">
    Edit
    </a>

        
       
 

</div>


        <p class="mt-6 text-center">
            <a class="text-blue-500 hover:underline" href="/phpLaracast/notes">Go back!..</a>
        </p>
    </main>
</body>
</html>
