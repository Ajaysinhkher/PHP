
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <nav class="bg-blue-400 p-4">
        <div class="max-w-7xl mx-auto flex justify-between items-center">
            <!-- Empty div for spacing (left side) -->
            <div class="w-1/3"></div>

            <!-- Centered Navigation Links -->
            <ul class="flex space-x-6 w-1/3 justify-center">
                <li><a href="/phpLaracast" class="text-white text-lg font-semibold hover:underline">Home</a></li>
                <li><a href="/phpLaracast/about" class="text-white text-lg font-semibold hover:underline">About</a></li>
                <li><a href="/phpLaracast/contact" class="text-white text-lg font-semibold hover:underline">Contact</a></li>
                <li><a href="/phpLaracast/notes" class="text-white text-lg font-semibold hover:underline">Notes</a></li>
            </ul>

            <!-- Register or Profile Icon (Right Side) -->
            <div class="w-1/3 flex justify-end">
                <?php if (isset($_SESSION['user'])) : ?>
                    <!-- Show Profile Icon When Logged In -->
                    <button type="button" class="flex max-w-xs items-center rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
                        <span class="sr-only">Open user menu</span>
                       
                        <img class="h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="User Avatar">
                    </button>
                <?php else : ?>
                    <!-- Show Register Link When Not Logged In -->
                    <a href="/phpLaracast/register" class="text-white text-lg font-semibold hover:underline">Register</a>
                <?php endif; ?>
            </div>
        </div>
    </nav>
</body>
</html>

