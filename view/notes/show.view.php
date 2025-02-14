<?php require "view/partials/nav.php"?>

<main>

<div>


    <p class="text-black">Note:</p>
    <p class='text-red-600 mt-5'>
        <?= htmlspecialchars($note['body']) ?>
    </p>
</div>

<p>

<a class="text-blue-500 hover:underline mt-5" href="/phpLaracast/notes">Go back!..</a>

</p>

</main>


