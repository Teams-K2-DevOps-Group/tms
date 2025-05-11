@extends('layouts.app')
@section('title','Home Page')

@section('content')

    <main class="h-svh text-center">

        <div class="py-8 px-8 box-border md:py-1 text-white">
            <h1 class="pt-8 pb-3 text-4xl font-extrabold">Task Manager</h1>
            <div class="">
                <h1 class="text-4xl font-bold py-2" style="color: yellow;">Stay Organized, Stay Productive</h1> 
                <p>Efficiently manage your tasks and boost your productivity.
                    Corporis earum dolorem iste omnis, id sit Repellendus, obcaecati quam.
                </p>
            </div>
            <div class="py-8">
                <a href="{{route('registration')}}" type="button" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">Get Started</a>
            </div>
        </div>    
    </main>
@endsection

