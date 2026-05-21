<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Dashboard</title>

    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body class="bg-gray-100 min-h-screen p-10">

    <div class="max-w-2xl mx-auto bg-white p-8 rounded-2xl shadow-lg">

        <h1 class="text-3xl font-bold text-indigo-600 mb-6">
            Create Help Request
        </h1>

        <form action="../scripts/request_process.php"
              method="POST">

            <div class="mb-4">

                <input
                    type="text"
                    name="title"
                    placeholder="Ticket title"
                    required
                    class="w-full border p-3 rounded-lg"
                >

            </div>

            <div class="mb-4">

                <textarea
                    name="description"
                    placeholder="Describe your problem"
                    required
                    class="w-full border p-3 rounded-lg h-32"
                ></textarea>

            </div>

            <div class="mb-6">

                <input
                    type="text"
                    name="technology"
                    placeholder="Technology"
                    required
                    class="w-full border p-3 rounded-lg"
                >

            </div>

            <button
                type="submit"
                class="bg-indigo-600 hover:bg-indigo-700 text-white px-6 py-3 rounded-lg"
            >
                Publish Request
            </button>

        </form>

    </div>

</body>

</html>