<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>PeerSync Login</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 flex justify-center items-center h-screen">

    <div class="bg-white w-[350px] p-8 rounded-2xl shadow-xl">

        <h1 class="text-3xl font-bold text-center text-indigo-600 mb-6">
            PeerSync
        </h1>

        <form action="../scripts/login_process.php" method="POST">

            <div class="mb-4">

                <input
                    type="email"
                    name="email"
                    placeholder="Enter your email"
                    required
                    class="w-full border border-gray-300 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-indigo-500"
                >

            </div>

            <div class="mb-6">

                <input
                    type="password"
                    name="password"
                    placeholder="Enter your password"
                    required
                    class="w-full border border-gray-300 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-indigo-500"
                >

            </div>

            <button
                type="submit"
                class="w-full bg-indigo-600 hover:bg-indigo-700 text-white py-3 rounded-lg transition duration-300"
            >
                Login
            </button>

        </form>

        <p class="text-center text-gray-500 text-sm mt-5">
            ENAA Peer Learning Platform
        </p>

    </div>

</body>

</html>