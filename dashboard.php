<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
    <script defer src="dashboard.js"></script>
</head>
<body class="bg-gray-50 font-sans">

    <div class="flex h-screen">
        <!-- Sidebar -->
        <div class="w-72 bg-gradient-to-b from-gray-900 to-blue-800 text-white flex flex-col">
            <div class="p-6 text-2xl font-bold tracking-wide border-b border-blue-600">
                Expense Tracker
            </div>
            <nav class="flex-1 p-6 space-y-4">
                <ul class="space-y-4">
                    <li class="p-4 bg-gray-800 hover:bg-gray-700 rounded-xl text-lg font-medium transition-all transform hover:scale-105 cursor-pointer" id="expenses-nav">
                        Expenses
                    </li>
                    <li class="p-4 bg-gray-800 hover:bg-gray-700 rounded-xl text-lg font-medium transition-all transform hover:scale-105 cursor-pointer" id="budget-nav">
                        Budget
                    </li>
                    <li class="p-4 bg-gray-800 hover:bg-gray-700 rounded-xl text-lg font-medium transition-all transform hover:scale-105 cursor-pointer" id="categories-nav">
                        Categories
                    </li>
                </ul>
            </nav>
            <div class="mt-auto p-6 border-t border-blue-600 space-y-4">
                <ul class="space-y-4">
                    <li class="p-4 bg-gray-700 hover:bg-gray-600 rounded-xl text-lg font-medium transition-all transform hover:scale-105 cursor-pointer" id="profile-nav">
                        Profile
                    </li>
                    <li class="p-4 bg-red-700 hover:bg-red-500 rounded-xl text-lg font-medium transition-all transform hover:scale-105 cursor-pointer" id="logout-nav">
                        Logout
                    </li>
                </ul>
            </div>
        </div>

        <!-- Main Content Area -->
        <div class="flex-1 p-10 bg-gray-100 overflow-y-auto" id="main-content">
            <div class="bg-white shadow-lg rounded-xl p-8">
                <h1 class="text-3xl font-bold text-gray-900">Welcome to Expenses</h1>
                <p class="mt-4 text-gray-700 text-lg">Select an option from the sidebar to get started.</p>
            </div>
        </div>
    </div>

</body>
</html>
