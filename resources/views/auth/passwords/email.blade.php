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
<div class="container mx-auto p-6">
    <h2 class="text-2xl font-bold text-center mb-4">Reset Your Password</h2>

    @if (session('status'))
        <div class="text-green-500 text-center">
            {{ session('status') }}
        </div>
    @endif

    <form method="POST" action="{{ route('password.email') }}" class="max-w-md mx-auto bg-white p-6 rounded-lg shadow-md">
        @csrf
        <label class="block mb-2 font-bold">Email Address:</label>
        <input type="email" name="email" class="w-full p-2 border rounded-lg" required placeholder="Enter your email">

        @error('email')
            <div class="text-red-500">{{ $message }}</div>
        @enderror

        <button type="submit" class="w-full bg-blue-500 text-white p-2 rounded-lg mt-4 hover:bg-blue-600">
            Send Password Reset Link
        </button>
    </form>
</div>
@endsection

</body>
</html>