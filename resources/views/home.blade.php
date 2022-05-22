<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    {{-- Navigation --}}
    <nav class="border-gray-300 flex flex-row border-b-[0.5px] justify-between p-4">
        <div class="left-side flex flex-row items-center">
            <div class="text-xl font-medium mr-7">Users</div>
            <div class="rounded-md border-[0.2px] border-gray-300 px-2 py-1 text-sm mr-3"> 
                <button><span class="mr-2">Year </span>  <i class="fa-solid fa-sort text-gray-300"></i></button>
                {{-- <ul class="options"></ul> --}}
            </div>
            <div class="rounded-md border-[0.2px] border-gray-300 px-2 py-1">
                <input class="text-black" type="text" name="search" id="search" placeholder="Search....">
                <span><i class="fa-solid fa-magnifying-glass text-gray-300"></i></span>

            </div>
        </div>
        <div class="right-side flex flex-row">
            <div class="px-2">
                <button > <span>Language</span>  <i class="fa-solid relative top-[-2px] inline-block fa-sort-down text-gray-300"></i></button>
            </div>
            <div class="px-2">
                <button> <span>Reports</span>  <i class="fa-solid fa-sort-down relative top-[-2px] inline-block text-gray-300"></i></button>
            </div>
            <div class="px-2">
                <button> <span>Projects</span> <i class="fa-solid fa-sort-down relative top-[-2px] inline-block text-gray-300"></i></button>
            </div>
            <div class="px-2">
                <span class="px-2"><i class="fa-solid fa-envelope"></i></span>
                <span class="px-2"><i class="fa-solid fa-bell"></i></span>
                <span class="px-2"><i class="fa-solid fa-user"></i></span> 
            </div>
        </div>
    </nav>
</body>
</html>