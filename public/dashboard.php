<?php

require_once __DIR__ . '/../src/Repositories/HelpRequestRepository.php';

$repo = new HelpRequestRepository();

$tickets = $repo->findAll();

?>

<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>PeerSync Dashboard</title>

    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body class="bg-gray-100 min-h-screen">

<nav class="bg-indigo-600 shadow-lg">

    <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">

        <h1 class="text-2xl font-bold text-white">PeerSync</h1>

        <a href="../scripts/logout.php"
           class="bg-white text-indigo-600 px-4 py-2 rounded-lg font-medium hover:bg-gray-100">
            Logout
        </a>

    </div>

</nav>

<main class="max-w-7xl mx-auto p-8">

    <h2 class="text-4xl font-bold text-gray-800 mb-8">
        Help Requests Dashboard
    </h2>


    <!-- Form -->
    <div class="bg-white p-8 rounded-2xl shadow-lg mb-10">

        <h3 class="text-2xl font-semibold text-indigo-600 mb-6">
            Create Help Request
        </h3>

        <form action="../scripts/request_process.php" method="POST" class="space-y-5">

            <input type="text" name="title" placeholder="Title"
                   class="w-full border p-3 rounded-lg" required>

            <textarea name="description" placeholder="Description"
                      class="w-full border p-3 rounded-lg h-32" required></textarea>

            <input type="text" name="technology" placeholder="Technology"
                   class="w-full border p-3 rounded-lg" required>

            <button class="bg-indigo-600 text-white px-6 py-3 rounded-lg">
                Publish
            </button>

        </form>

    </div>


    <!-- Tickets -->
    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">

        <?php foreach ($tickets as $ticket): ?>

            <div class="bg-white p-6 rounded-2xl shadow-lg">

                <div class="flex justify-between mb-4">

                    <span class="px-3 py-1 rounded-full text-sm font-medium
                        <?php
                            echo match($ticket['status']) {
                                'pending' => 'bg-yellow-100 text-yellow-700',
                                'assigned' => 'bg-blue-100 text-blue-700',
                                'resolved' => 'bg-green-100 text-green-700',
                                default => 'bg-gray-100 text-gray-700'
                            };
                        ?>">
                        <?= $ticket['status'] ?>
                    </span>

                    <span class="text-gray-400 text-sm">
                        #<?= $ticket['id'] ?>
                    </span>

                </div>

                <h4 class="text-xl font-bold text-gray-800 mb-2">
                    <?= $ticket['title'] ?>
                </h4>

                <p class="text-gray-500 mb-4">
                    <?= $ticket['description'] ?>
                </p>

                <span class="bg-indigo-100 text-indigo-700 px-3 py-1 rounded-lg text-sm">
                  <?= $ticket['technologie'] ?>
                </span>

            </div>

        <?php endforeach; ?>

    </div>

</main>

</body>
</html>