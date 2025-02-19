<?php require base_path("view/partials/nav.php"); ?>

<main class="flex justify-center items-center min-h-screen bg-gray-100">
    <div class="w-full max-w-2xl p-6 bg-white shadow-lg rounded-lg">
        <h2 class="text-2xl font-semibold text-gray-800 mb-4">Create a New Note</h2>
        <form method="POST" class="space-y-4">
            <div>
                <label for="body" class="block text-gray-700 font-medium">Description:</label>
                <textarea id="body" name="body" class="w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-blue-400" rows="4"> <?= isset($_POST['body']) ? htmlspecialchars($_POST['body']) : '' ?> </textarea>
                <?php if(isset($errors['body'])) :?>
                    <p class="text-red-500 mt-1"> <?= $errors['body']?> </p>
                <?php endif; ?>
            </div>
            <button type="submit" class="px-4 py-2 bg-blue-600 text-white font-semibold rounded-md shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-75">
                Create
            </button>
        </form>
    </div>
</main>