<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">

    <!-- Login Form Container -->
    <div class="bg-white p-8 rounded-lg shadow-md w-96">

        <h2 class="text-3xl font-bold text-center mb-6 text-gray-700">Login to Your Account</h2>

        <!-- Login Form -->
        <form method="POST" action="{{ route('login') }}">
            @csrf

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

            <!-- Remember Me Checkbox -->
            <div class="mb-4 flex items-center">
                <input type="checkbox" id="remember" name="remember" class="mr-2">
                <label for="remember" class="text-gray-600">Remember Me</label>
            </div>

            <!-- Submit Button -->
            <div class="mt-6">
                <button type="submit" class="w-full py-3 bg-blue-500 text-white rounded-lg hover:bg-blue-600 transition">Login</button>
            </div>
            
        </form>

        <!-- Forgot Password Link -->
        <p class="mt-4 text-center text-gray-600"><a href="{{ route('password.request') }}" class="text-blue-500">Forgot your password?</a></p>

        <!-- Registration Link -->
        <p class="mt-4 text-center text-gray-600">Don't have an account? <a href="{{ route('register') }}" class="text-blue-500">Sign up</a></p>

    </div>

</body>
</html>
