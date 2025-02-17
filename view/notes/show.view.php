

<?php require base_path("view/partials/nav.php")?>

<main>

<div>


    <p class="text-black">Note:</p>
    <p class='text-red-600 mt-5'>
        <?= htmlspecialchars($note['body']) ?>
    </p>
</div>

<p>

<a class="text-blue-500 hover:underline mt-5" href="/phpLaracast/notes">Go back!..</a>

<form method="POST" class="mt-6">
    <input type="hidden" name="id" value="<?= $note['id']?>">
    <button class="px-4 py-2 bg-red-500 text-white font-semibold rounded-lg shadow-md hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-400 focus:ring-opacity-75">
    Delete
</button>

</form>

</p>

</main>


