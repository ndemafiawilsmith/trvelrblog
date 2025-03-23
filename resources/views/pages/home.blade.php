<!-- resources/views/pages/home.blade.php -->
@extends('layouts.app')

@section('title', 'Home Page')

@section('content')
<div class="container mx-auto mt-12">
    <x-typography.h1 class="text-3xl font-bold text-center -z-50">Welcome to Dora Blog</x-typography.h1>
    <x-typography.p class="text-center text-gray-500 mt-2">Your Gateway to African Travel Adventures</x-typography.p>
    <div class="flex justify-center py-3">

        <x-button class="bg-[#1E1E1E] text-[#00FF45] px-7 py-4 rounded-lg hover:bg-[#00FF45] hover:text-[#1E1E1E]  border-1 border-[#1E1E1E]">
            <a href="/get-started" class='text-sm'>Get Started</a>
        </x-button>
    </div>
</div>
@endsection
