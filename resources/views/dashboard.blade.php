<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
@extends('layouts.app')

@section('content')
    <div class="text-center mt-10">
        <h1 class="text-3xl font-bold">Welcome to Your Dashboard</h1>
    </div>

    @if(session('success'))
        <div id="success-popup" class="fixed top-5 right-5 bg-green-500 text-white px-4 py-2 rounded-lg shadow-md">
            {{ session('success') }}
        </div>

        <script>
            setTimeout(() => {
                document.getElementById('success-popup').style.display = 'none';
            }, 5000);
        </script>
    @endif
@endsection

</body>
</html>