<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    {{-- <script src="https://kit.fontawesome.com/91c50b7901.js" crossorigin="anonymous"></script> --}}
    <style>
        th, td {
            padding: 0px;
        }
    </style>
</head>
<body class="">
    <div class='flex flex-row w-100'>
        {{-- aside --}}
        <div class='x-sidebar fixed flex flex-row h-screen items-stretch overflow-y-auto'> 
            {{-- side Bar outer --}}
        <aside class="flex flex-col self-auto justify-between bg-blue-500 px-3 text-gray-100">
            <div class='pt-20'>
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
                            <img src="" alt="">
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
        {{-- Side Navigation inner --}}
        <aside>
            <ul class='pt-24 pl-5'>
                <li class="py-1 pr-5 text-gray-300 flex flex-row items-center"> <x-monoicon-window class="h-5 w-5 inline-block" /> <span class="pl-2">Dashboard</span></li>
                <li class="py-1 pr-5 text-blue-500 border-r-4 border-blue-500 flex flex-row items-center"> <x-uni-users-alt-o class="h-5 w-5 inline-block"/> <span class="pl-2">Users</span> </li>
                <li class="py-1 pr-5 text-gray-300 flex flex-row items-center"> <x-feathericon-clipboard class="h-5 w-5 inline-block"/> <span class="pl-2">Department</span></li>
                <li class="py-1 pr-5 text-gray-300 flex flex-row items-center">  <x-uni-users-alt-o class="h-5 w-5 inline-block"/> <span class="pl-2">Employee</span></li>
                <li class="py-1 pr-5 text-gray-300 flex flex-row items-center"> <x-simpleline-energy class="h-5 w-5 inline-block" /> <span class="pl-2">Activities</span></li>
                <li class="py-1 pr-5 text-gray-300 flex flex-row items-center"> <x-feathericon-check-circle class="h-5 w-5 inline-block" /><span class="pl-2"> Holidays</span></li>
                <li class="py-1 pr-5 text-gray-300 flex flex-row items-center"> <x-phosphor-fire-simple-bold class="h-5 w-5 inline-block"  /> <span class="pl-2">Events</span></li>
                <li class="py-1 pr-5 text-gray-300 flex flex-row items-center"> <x-heroicon-o-credit-card class="h-5 w-5 inline-block" /><span class="pl-2">Payroll</span></li>
                <li class="py-1 pr-5 text-gray-300 flex flex-row items-center"> <x-uni-user-o class="h-5 w-5 inline-block" /> <span class="pl-2">Accounts</span></li>
                <li class="py-1 pr-5 text-gray-300 flex flex-row items-center"> <x-heroicon-o-exclamation-circle class="h-5 w-5 inline-block" /> <span class="pl-2">Reports</span></li>
            <ul>
        </aside>


        </div>
        {{-- Body --}}
        <div class="x-body grow px-5 ml-48 bg-[#FAFBFD]">
            {{-- Navigation --}}
            <nav class="border-gray-300 flex flex-row border-b-[0.5px] justify-between py-4 items-center">
                <div class="left-side flex flex-row items-center">
                    <div class="text-xl font-medium mr-7">Users</div>
                    <div class="rounded-md border-[0.2px] border-gray-300 px-2 py-1 text-sm mr-3 bg-white"> 
                        <button><span class="mr-2">Year </span>  <i class="fa-solid fa-sort text-gray-300"></i></button>
                        {{-- <ul class="options"></ul> --}}
                    </div>
                    <div class="rounded-md border-[0.2px] bg-white flex flex-row justify-between border-gray-300 px-2 py-1">
                        <input class="appearance-none text-black placeholder-black" type="text" name="search" id="search" placeholder="Search....">
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
            

            

            {{-- Add user button --}}
            <div class='w-full flex justify-end my-4'>
                <button class='bg-green-800 py-2 px-4 text-white rounded-lg text-sm open-button'> 
                    Add User
                </button>
            </div>

            {{-- User list --}}
            <section class="border-2 border-blue-400 bg-white">
                <div class="flex mt-4 flex-row justify-between px-5">
                    <div class ='font-bold text-lg'> List Users </div>
                    <div>
                        <div class="rounded-md border-[0.2px] bg-white flex flex-row justify-between  border-gray-300 px-2 py-1">
                            <input class="text-black placeholder-black" type="text" name="search" id="search" placeholder="Search....">
                            <span><i class="fa-solid fa-magnifying-glass text-gray-300"></i></span>
                        </div>
                    </div>
                </div>
                <div class="mt-4">
                    <table class="w-full table-auto">
                        <thead class="bg-gray-200 text-left text-gray-500">
                            <tr>
                                <th> <div class="my-3 pl-5">Name</div>  </th>
                                <th> <div class="my-3">Created Date</div>  </th>
                                <th> <div class="my-3">Role </div> </th>
                                <th> <div class="my-3">Action</div> </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="">
                                <td>
                                    <div class="ml-5 py-5 flex flex-row justify-between items-center border-gray-300 border-b-[1px] pr-24 h-[90px]">
                                        <div class="flex flex-row items-center">
                                            <img src="" alt="user-image">
                                            <div class="pl-2">
                                                <div class="font-bold text-base">David Wanger</div>
                                                <div class="text-sm text-gray-300">David_wanger@example.com</div>
                                            </div>
                                        </div>
                                        <div>
                                            <span class="text-white text-center text-lg bg-red-500 rounded-lg py-2 block  w-[135px]">
                                                Super Admin
                                            </span>
                                        </div>
                                    </div>
                                </td>
                                <td> <div class=" border-gray-300 border-b-[1px] flex flex-row items-center h-[90px] text-lg"> 24 Oct, 2015</div> </td>
                                <td><div class=" border-gray-300 border-b-[1px] flex flex-row items-center h-[90px] text-lg"> CEO and Founder</div></td>
                                <td>
                                    <div class=" mr-5 border-gray-300 border-b-[1px] flex flex-row items-center justify-start text-center  text-gray-300 h-[90px]">
                                        <button class="mx-3 open-button"> <x-bx-edit-alt class="h-6 w-6 inline-block" /></button>
                                        <button><x-css-trash class="h-6 w-6 inline-block"  /></button>
                                    </div>
                                </td>
                            </tr>

                            {{-- another  --}}
                            <tr class="">
                                <td>
                                    <div class="ml-5 py-5 flex flex-row justify-between items-center border-gray-300 border-b-[1px] pr-24 h-[90px]">
                                        <div class="flex flex-row items-center">
                                            <img src="" alt="user-image">
                                            <div class="pl-2">
                                                <div class="font-bold text-base">Ina Hogan</div>
                                                <div class="text-sm text-gray-300">windler.warrn@example.com</div>
                                            </div>
                                        </div>
                                        <div>
                                            <span class="text-white text-center text-lg bg-blue-500 rounded-lg py-2 block  w-[135px]">
                                                Admin
                                            </span>
                                        </div>
                                    </div>
                                </td>
                                <td> <div class=" border-gray-300 border-b-[1px] flex flex-row items-center h-[90px] text-lg"> 24 Oct, 2015</div> </td>
                                <td><div class=" border-gray-300 border-b-[1px] flex flex-row items-center h-[90px] text-lg"> Team Lead</div></td>
                                <td>
                                    <div class=" mr-5 border-gray-300 border-b-[1px] flex items-center justify-start flex-row  text-center  text-gray-300 h-[90px]">
                                        <button class="mx-3 open-button"> <x-bx-edit-alt class="h-6 w-6 inline-block" /></button>
                                        <button><x-css-trash class="h-6 w-6 inline-block"  /></button>
                                    </div>
                                </td>
                            </tr>
                            
                            
                        </tbody> 
                    </table>
                </div>
            </section>

            <Section id="modal-form" class="hidden absolute w-full h-full top-0 left-0 bg-slate-300/80 flex justify-center items-center">
                <form class="bg-white rounded w-3/4">
                    <header class="p-5 flex flex-row justify-between border-gray-300 border-b-[0.5px]">
                        <div class="text-lg font-semibold">Add User</div>
                        <div><button class="close-button"><i class="fa-solid fa-xmark text-xl"></i></button></div>
                    </header>
                    <div class="px-5 py-3">
                        <div class="py-3">
                            <div class="rounded-md border-[0.2px] bg-white flex flex-row justify-between  border-gray-300 px-3 py-1">
                                <input class="inline-flex w-full text-black placeholder-black" type="text" name="empolyeeID" id="search" placeholder="Employee ID *">
                            </div>
                        </div>
                        <div class="grid justify-items-stretch grid-cols-2 gap-4 py-3">
                            <div class="rounded-md border-[0.2px] bg-white flex flex-row justify-between  border-gray-300 px-3 py-1">
                                <input class="inline-flex w-full text-black placeholder-black" type="text" name="firstname" id="search" placeholder="First Name *">
                            </div>
                            <div class="rounded-md border-[0.2px] bg-white flex flex-row justify-between  border-gray-300 px-3 py-1">
                                <input class="inline-flex w-full text-black placeholder-black" type="text" name="lastname" id="search" placeholder="Last Name *">
                            </div>
                        </div>
                        <div class="grid justify-items-stretch grid-cols-3 gap-4 py-3">
                            <div class="rounded-md border-[0.2px] bg-white flex flex-row justify-between  border-gray-300 px-3 py-1">
                                <input class="inline-flex w-full text-black placeholder-black" type="text" name="emailid" id="search" placeholder="Email ID*">
                            </div>
                            <div class="rounded-md border-[0.2px] bg-white flex flex-row justify-between  border-gray-300 px-3 py-1">
                                <input class="inline-flex w-full text-black placeholder-black" type="text" name="lastname" id="search" placeholder="Last Name *">
                            </div>

                            <div class="rounded-md border-[0.2px] border-gray-300 px-3 py-1 text-sm bg-white "> 
                                <button class="inline-flex w-full justify-between  items-center "><span class="mr-2">Select Role Type</span>  <i class="fa-solid fa-sort text-black"></i></button>
                                {{-- <ul class="options"></ul> --}}
                            </div>
                            
                        </div>
                        <div class="grid justify-items-stretch grid-cols-3 gap-4 py-3">
                            <div class="rounded-md border-[0.2px] bg-white flex flex-row justify-between  border-gray-300 px-3 py-1">
                                <input class="text-black w-full placeholder-black" type="text" name="username" id="search" placeholder="Username*">
                            </div>
                            <div class="rounded-md border-[0.2px] bg-white flex flex-row justify-between  border-gray-300 px-3 py-1">
                                <input class="inline-flex w-full text-black placeholder-black" type="text" name="password" id="search" placeholder="Password*">
                            </div>
                            <div class="rounded-md border-[0.2px] bg-white flex flex-row justify-between  border-gray-300 px-3 py-1">
                                <input class="inline-flex w-full text-black placeholder-black" type="text" name="c_password" id="search" placeholder="Confirm Password*">
                            </div>
                        </div>
                    </div>
                    <div class="mt-4">
                        <table class="w-full table-auto">
                            <thead class="bg-gray-200 text-left text-gray-500">
                                <tr>
                                    <th> <div class="my-3 pl-5">Module Permission</div> </th>
                                    <th> <div class="my-3">Read </div>  </th>
                                    <th> <div class="my-3">Write </div> </th>
                                    <th> <div class="my-3">Delete</div> </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="">
                                    <td>
                                        <div class="ml-5 py-5 flex flex-row items-center border-gray-300 border-b-[1px] pr-24 h-[60px]">
                                            <span class="font-bold text-base ">Super Admin</span>
                                        </div>
                                    </td>
                                    <td> 
                                        <div class=" border-gray-300 flex flex-row items-center border-b-[1px]  h-[60px] "> 
                                            <input class=" form-checkbox h-4 w-4 text-black border-black rounded-md focus:ring-0" type="checkbox" value="" id="flexCheckDefault" checked>
                                        </div> 
                                    </td>
                                    <td> 
                                        <div class=" border-gray-300 flex flex-row items-center border-b-[1px]  h-[60px] "> 
                                            <input class=" form-checkbox h-4 w-4 text-black border-black rounded-md focus:ring-0" type="checkbox" value="" id="flexCheckDefault" checked>
                                        </div> 
                                    </td>
                                    <td> 
                                        <div class=" mr-5 border-gray-300 flex flex-row items-center border-b-[1px]  h-[60px] "> 
                                            <input class=" form-checkbox h-4 w-4 text-black border-black rounded-md focus:ring-0" type="checkbox" value="" id="flexCheckDefault" checked>
                                        </div> 
                                    </td>
                                </tr>

                                <tr class="">
                                    <td>
                                        <div class="ml-5 py-5 flex flex-row items-center border-gray-300 border-b-[1px] pr-24 h-[60px]">
                                            <span class="font-bold text-base ">Admin</span>
                                        </div>
                                    </td>
                                    <td> 
                                        <div class=" border-gray-300 flex flex-row items-center border-b-[1px]  h-[60px] "> 
                                            <input class=" form-checkbox h-4 w-4 text-black border-black rounded-md focus:ring-0" type="checkbox" value="" id="flexCheckDefault" checked>
                                        </div> 
                                    </td>
                                    <td> 
                                        <div class=" border-gray-300 flex flex-row items-center border-b-[1px]  h-[60px] "> 
                                            <input class=" form-checkbox h-4 w-4 text-black border-black rounded-md focus:ring-0" type="checkbox" value="" id="flexCheckDefault">
                                        </div> 
                                    </td>
                                    <td> 
                                        <div class=" mr-5 border-gray-300 flex flex-row items-center border-b-[1px]  h-[60px] "> 
                                            <input class=" form-checkbox h-4 w-4 text-black border-black rounded-md focus:ring-0" type="checkbox" value="" id="flexCheckDefault">
                                        </div> 
                                    </td>
                                </tr>

                                <tr class="">
                                    <td>
                                        <div class="ml-5 py-5 flex flex-row items-center border-gray-300 border-b-[1px] pr-24 h-[60px]">
                                            <span class="font-bold text-base ">Employee</span>
                                        </div>
                                    </td>
                                    <td> 
                                        <div class=" border-gray-300 flex flex-row items-center border-b-[1px]  h-[60px] "> 
                                            <input class=" form-checkbox h-4 w-4 text-black border-black rounded-md focus:ring-0" type="checkbox" value="" id="flexCheckDefault" checked>
                                        </div> 
                                    </td>
                                    <td> 
                                        <div class=" border-gray-300 flex flex-row items-center border-b-[1px]  h-[60px] "> 
                                            <input class=" form-checkbox h-4 w-4 text-black border-black rounded-md focus:ring-0" type="checkbox" value="" id="flexCheckDefault">
                                        </div> 
                                    </td>
                                    <td> 
                                        <div class=" mr-5 border-gray-300 flex flex-row items-center border-b-[1px]  h-[60px] "> 
                                            <input class=" form-checkbox h-4 w-4 text-black border-black rounded-md focus:ring-0" type="checkbox" value="" id="flexCheckDefault">
                                        </div> 
                                    </td>
                                </tr>

                                <tr class="">
                                    <td>
                                        <div class="ml-5 py-5 flex flex-row items-center border-gray-300 border-b-[1px] pr-24 h-[60px]">
                                            <span class="font-bold text-base ">HR Admin</span>
                                        </div>
                                    </td>
                                    <td> 
                                        <div class=" border-gray-300 flex flex-row items-center border-b-[1px]  h-[60px] "> 
                                            <input class=" form-checkbox h-4 w-4 text-black border-black rounded-md focus:ring-0" type="checkbox" value="" id="flexCheckDefault" checked>
                                        </div> 
                                    </td>
                                    <td> 
                                        <div class=" border-gray-300 flex flex-row items-center border-b-[1px]  h-[60px] "> 
                                            <input class=" form-checkbox h-4 w-4 text-black border-black rounded-md focus:ring-0" type="checkbox" value="" id="flexCheckDefault" checked>
                                        </div> 
                                    </td>
                                    <td> 
                                        <div class=" mr-5 border-gray-300 flex flex-row items-center border-b-[1px]  h-[60px] "> 
                                            <input class=" form-checkbox h-4 w-4 text-black border-black rounded-md focus:ring-0" type="checkbox" value="" id="flexCheckDefault" checked>
                                        </div> 
                                    </td>
                                </tr>

                               
    
                                
                                
                            </tbody> 
                        </table>
                    </div>
                    <div class="flex flex-row justify-end p-5  border-gray-300 border-t-[1px] ">
                        <div> <button class=" bg-blue-500 py-1 px-4 text-white rounded-lg text-sm"> Add User</button></div>
                        <div> <button class=" close-button py-1 px-4 text-gray-300 rounded-lg text-sm"> Cancel</button></div>
                    </div>

                </form>
            </Section>
        </div>

       



    </div>
    <script src="{{ asset('js/app.js') }}"></script>
    
</body>
</html>