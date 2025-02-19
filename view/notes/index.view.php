<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-900">
    <?php require base_path("view/partials/nav.php") ?>
    
    <div class="max-w-2xl mx-auto mt-10 p-6 bg-white shadow-lg rounded-lg">
        <h1 class="text-2xl font-bold text-gray-800 mb-4"> <?= htmlspecialchars($heading) ?> </h1>

        <ul class="space-y-3">
            <?php foreach ($notes as $note): ?>
            <li class="p-3 bg-gray-50 border border-gray-300 rounded-lg hover:bg-gray-200 transition">
                <a href="note?id=<?= $note['id'] ?>" class="text-blue-600 font-semibold hover:underline">
                    <?= htmlspecialchars($note['body']) ?>
                </a>
            </li>
            <?php endforeach; ?>
        </ul>

        <p class="mt-6 text-center">
            <a href="/phpLaracast/create" class="inline-block px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition">
                Create Note
            </a>
        </p>
    </div>
</body>
</html>
