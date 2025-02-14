<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Task App</title>
    <script src="https://cdn.tailwindcss.com"></script> 
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">

    <div class="bg-white p-8 rounded-lg shadow-md text-center w-96">
    
        <img src="https://media.istockphoto.com/id/1589794103/photo/school-supplies-icon-school-analog-clock-3d-render.jpg?s=2048x2048&w=is&k=20&c=0WBUOC5TxF-Ncdk49FXQmBNAXhNAiQnpXuZGr8PrFZ4=" alt="Profile Image" class="mx-auto rounded-full shadow-lg mb-6">

        <!-- Main Title: Large and Bold -->
        <h1 class="text-4xl font-extrabold text-gray-800 mb-4">Welcome to Task App</h1>

        <!-- Subheading: Medium and Bold -->
        <h2 class="text-2xl font-semibold text-gray-600 mb-6">Smart Task Management</h2>

        <!-- Button -->
        <a href="{{route('login')}}" class="mt-4 inline-flex items-center bg-blue-500 text-white px-5 py-2 rounded-lg hover:bg-blue-600 transition">
            Continue
            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
        </a>
    </div>

</body>
</html>
