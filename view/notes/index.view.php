<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>data-page</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <?php require base_path("view/partials/nav.php")?>
    <h1 class="text-black"><?php echo $heading?></h1>
    <!-- <p class="text-black">welcome to the notes page:</p> -->


<ul>
    <?php foreach ($notes as $note): ?>
    <li class="text-black">
        <a href="note?id=<?= $note['id'] ?>" class="text-blue-500 hover:underline">
            <?= htmlspecialchars($note['body']) ?>
        </a>
    </li>
    <?php endforeach; ?>

</ul>

<p class="mt-6">
        <a href = "/phpLaracast/create" class="text-blue-500 hover:underline">Create Note</a>
</p>




</ul>
</body>
</html>