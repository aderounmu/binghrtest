<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    {{-- <script src="https://kit.fontawesome.com/91c50b7901.js" crossorigin="anonymous"></script> --}}
</head>
<body>
    {{-- Navigation --}}
    <nav class="border-gray-300 flex flex-row border-b-[0.5px] justify-between p-4 items-center">
        <div class="left-side flex flex-row items-center">
            <div class="text-xl font-medium mr-7">Users</div>
            <div class="rounded-md border-[0.2px] border-gray-300 px-2 py-1 text-sm mr-3"> 
                <button><span class="mr-2">Year </span>  <i class="fa-solid fa-sort text-gray-300"></i></button>
                {{-- <ul class="options"></ul> --}}
            </div>
            <div class="rounded-md border-[0.2px] flex flex-row justify-between border-gray-300 px-2 py-1">
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
    {{-- Side Navigation inner --}}
    <aside>
        <ul class="">
            <li class="px-2 text-gray-300 flex flex-row items-center"> <x-monoicon-window class="h-5 w-5 inline-block" /> <span class="pl-2">Dashboard</span></li>
            <li class="px-2 text-blue-500 border-r-2 border-blue-500 flex flex-row items-center"> <x-uni-users-alt-o class="h-5 w-5 inline-block"/> <span class="pl-2">Users</span> </li>
            <li class="px-2 text-gray-300 flex flex-row items-center"> <x-feathericon-clipboard class="h-5 w-5 inline-block"/> <span class="pl-2">Department</span></li>
            <li class="px-2 text-gray-300 flex flex-row items-center">  <x-uni-users-alt-o class="h-5 w-5 inline-block"/> <span class="pl-2">Employee</span></li>
            <li class="px-2 text-gray-300 flex flex-row items-center"> <x-simpleline-energy class="h-5 w-5 inline-block" /> <span class="pl-2">Activities</span></li>
            <li class="px-2 text-gray-300 flex flex-row items-center"> <x-feathericon-check-circle class="h-5 w-5 inline-block" /><span class="pl-2"> Holidays</span></li>
            <li class="px-2 text-gray-300 flex flex-row items-center"> <x-phosphor-fire-simple-bold class="h-5 w-5 inline-block"  /> <span class="pl-2">Events</span></li>
            <li class="px-2 text-gray-300 flex flex-row items-center"> <x-heroicon-o-credit-card class="h-5 w-5 inline-block" /><span class="pl-2">Payroll</span></li>
            <li class="px-2 text-gray-300 flex flex-row items-center"> <x-uni-user-o class="h-5 w-5 inline-block" /> <span class="pl-2">Accounts</span></li>
            <li class="px-2 text-gray-300 flex flex-row items-center"> <x-heroicon-o-exclamation-circle class="h-5 w-5 inline-block" /> <span class="pl-2">Reports</span></li>
        <ul>
    </aside>

    {{-- side Bar outer --}}
    <aside class="flex flex-col bg-blue-500 px-3 text-gray-100">
        <div>
            <ul>
                <li class="py-4">
                    <button>
                        <span><i class="fa-solid fa-magnifying-glass "></i></span>
                    </button>
                </li>
                <li class="py-4">
                    <button>
                        <x-feathericon-calendar class="h-5 w-5 inline-block" />
                    </button>
                </li>
                <li class="py-4">
                    <button>
                        <x-uni-user-o class="h-5 w-5 inline-block" />
                    </button>
                </li>
                <li class="py-4">
                    <button>
                        <x-monoicon-document-empty class="h-5 w-5 inline-block"  />
                    </button>
                </li>
                <li class="py-4">
                    <button>
                        <x-heroicon-o-chat class="h-5 w-5 inline-block" />
                    </button>
                </li>
            </ul>
        </div>
        <div>
            <ul>
                <li class="py-4">
                    <button>
                        <span><i class="fa-solid fa-gear "></i></span>
                    </button>
                </li>
                <li class="py-4">
                    <button>
                        <img src="" alt="user image">
                    </button>
                </li>
                <li class="py-4">
                    <button>
                        <x-css-menu-right class="h-5 w-5 inline-block scale-x-[-1]" />
                    </button>
                </li>
            </ul>
        </div>
    </aside>

    {{-- Add user button --}}
    <div class='w-full flex justify-end mt-2 px-4'>
        <button class='bg-green-800 py-2 px-4 text-white rounded-lg text-sm'> 
            Add User
        </button>
    </div>

    {{-- User list --}}
    <section>
        <div class="flex mt-4 flex-row justify-between">
            <div class =''> List Users </div>
            <div>
                <div class="rounded-md border-[0.2px] flex flex-row justify-between  border-gray-300 px-2 py-1">
                    <input class="text-black" type="text" name="search" id="search" placeholder="Search....">
                    <span><i class="fa-solid fa-magnifying-glass text-gray-300"></i></span>
                </div>
            </div>
        </div>
        <div class="mt-4">
            <table class="w-full">
                <thead class="bg-gray-100 text-left text-gray-400">
                    <tr>
                        <th> <div class="px-3 my-3">Name</div>  </th>
                        <th> <div class="my-3">Created Date</div>  </th>
                        <th> <div class="my-3">Role </div> </th>
                        <th> <div class="my-3">Action</div> </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-gray-300 border-b-[0.8px]">
                        <td>
                            <div class=" px-3 py-5 flex flex-row justify-between w-5/6 items-center">
                                <div class="flex flex-row items-center">
                                    <img src="" alt="user-image">
                                    <div class="pl-2">
                                        <div class="font-bold text-base">David Wanger</div>
                                        <div class="text-sm text-gray-300">David_wanger@example.com</div>
                                    </div>
                                </div>
                                <div>
                                    <span class="text-white text-lg bg-red-500 rounded-lg py-2 px-3">
                                        Super Admin
                                    </span>
                                </div>
                            </div>
                        </td>
                        <td> <div class="py-5"> 24 Oct, 2015</div> </td>
                        <td><div class="py-5"> CEO and Founder</div></td>
                        <td>
                            <div class="flex py-5 flex-row justify-center text-gray-300">
                                <button class="mx-3"> <x-bx-edit-alt class="h-6 w-6 inline-block" /></button>
                                <button><x-css-trash class="h-6 w-6 inline-block"  /></button>
                            </div>
                        </td>
                    </tr>
                </tbody> 
            </table>
        </div>
    </section>
</body>
</html>