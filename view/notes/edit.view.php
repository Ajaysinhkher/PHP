

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Note</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-900">
    <?php require base_path("view/partials/nav.php") ?>

    <main class="max-w-xl mx-auto mt-10 p-6 bg-white shadow-lg rounded-lg">
        <h2 class="text-xl font-semibold text-gray-800 mb-4">Edit Note</h2>

        <!-- Form for editing the note -->
        <form method="POST" action="/phpLaracast/note/update">
            <input type="hidden" name="_method" value="PATCH">
            <input type="hidden" name="id" value="<?= $note['id'] ?>">

            <!-- Body input for editing -->
            <textarea name="body" rows="4" cols="50" class="p-3 w-full border border-gray-300 rounded-md mt-4"><?= htmlspecialchars($note['body']) ?></textarea>

            <!-- Display errors -->
            <?php if (!empty($errors)): ?>
                <ul class="mt-4 text-red-500">
                    <?php foreach ($errors as $error): ?>
                        <li><?= htmlspecialchars($error) ?></li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>

            <button type="submit" class="px-4 py-2 bg-blue-500 text-white font-semibold rounded-md shadow-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-75 mt-4">
                Save Changes
            </button>
        </form>

        <p class="mt-6 text-center">
            <a class="text-blue-500 hover:underline" href="/phpLaracast/notes">Go back to Notes</a>
        </p>
    </main>
</body>
</html>
