@extends('layouts.app')


@section('content')

    <main class="h-svh">


        <div class="grid grid-cols-1 md:grid-cols-2">
            <div class="py-8 px-8 box-border md:py-1 bg-green-800 text-white">
                <h1 class="pt-8 pb-3 text-4xl font-extrabold">Here is About Page</h1>
                <div class="">
                    <h1 class="text-4xl font-bold py-2">Stay Organized, Stay Productive</h1> 
                    <p class="text-justify">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nihil officiis rem vel explicabo quos quae architecto, provident nostrum eligendi. Explicabo nihil inventore omnis nostrum voluptatum aliquam perferendis unde, tempore deserunt?
                    </p>
                </div>
                <div class="p-5">
                    <button type="button" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Get Started</button>
                </div>
            </div>
            <div class="">
                <img class="h-auto max-w-full rounded-lg" src="{{asset('imgs/banner.webp')}}" alt="">
            </div>

        </div>
    
    </main>
@endsection

