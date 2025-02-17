<?php require base_path("view/partials/nav.php"); ?>

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <form method="POST">
            <label for="body">Description:</label>
            <div>
                <textarea id="body" name="body" class="border-2 border-solid border-black"><?= isset($_POST['body'])?$_POST['body']:'' ?></textarea></div>

                <?php if(isset($errors['body'])) :?>

                    <p class="text-red-500"><?= $errors['body']?></p>
                <?php endif; ?>
        
                <button type="submit" class="text-black border-solid border-black">Create</button>
           
        </form>
    </div>
</main>
