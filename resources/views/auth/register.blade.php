<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <script src="https://cdn.tailwindcss.com"></script> 
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">

    <!-- Registration Form Container -->
    <div class="bg-white p-8 rounded-lg shadow-md w-96">

        <h2 class="text-3xl font-bold text-center mb-6 text-gray-700">Create an Account</h2>

        <!-- Form Start -->
        <form method="POST" action="{{ route('register') }}">

            @csrf

            <!-- Name Field -->
            <div class="mb-4">
                <label for="name" class="block text-gray-600 font-semibold">Name</label>
                <input type="text" id="name" name="name" class="w-full p-3 mt-1 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500" required>
            </div>

            <!-- Email Field -->
            <div class="mb-4">
                <label for="email" class="block text-gray-600 font-semibold">Email</label>
                <input type="email" id="email" name="email" class="w-full p-3 mt-1 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500" required>
            </div>

            <!-- Password Field -->
            <div class="mb-4">
                <label for="password" class="block text-gray-600 font-semibold">Password</label>
                <input type="password" id="password" name="password" class="w-full p-3 mt-1 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500" required>
            </div>

            <!-- Confirm Password Field -->
            <div class="mb-4">
                <label for="password_confirmation" class="block text-gray-600 font-semibold">Confirm Password</label>
                <input type="password" id="password_confirmation" name="password_confirmation" class="w-full p-3 mt-1 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500" required>
            </div>

            <!-- Submit Button -->
            <div class="mt-6">
                <button type="submit" class="w-full py-3 bg-blue-500 text-white rounded-lg hover:bg-blue-600 transition">Register</button>
            </div>
            
        </form>
        
        <!-- Login Link -->
        <p class="mt-4 text-center text-gray-600">Already have an account? <a href="{{ route('login') }}" class="text-blue-500">Login</a></p>

    </div>

</body>
</html>
