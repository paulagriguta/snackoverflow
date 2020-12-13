<!-- This example requires Tailwind CSS v2.0+ -->
<x-app-layout>
    <!-- This example requires Tailwind CSS v2.0+ -->
    <div>
        <nav class="bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex items-center justify-between h-16">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <a class="navbar-brand" href="/" style="width:150px; margin-top:0px;"><img src="{{ URL::to('/') }}/img/snackoverflow.png" class="navbar-brand" style="height:60px;"></a>
                        </div>
                        <div class="hidden md:block">
                            <div class="ml-10 flex items-baseline space-x-4">
                                <!-- Current: "bg-white text-white", Default: "text-white hover:bg-gray-700 hover:text-white" -->
                                <a href="/" class="bg-gray-800 text-white px-3 py-2 rounded-md text-sm font-medium">Acasă</a>

                                <a href="/posts" class="text-gray-800 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Postări</a>

                                <a href="#" class="text-gray-800 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Projects</a>


                            </div>
                        </div>
                    </div>
                    <div class="hidden md:block">
                        <div class="ml-4 flex items-center md:ml-6">

                            <!-- Profile dropdown -->
                            <div class="ml-3 relative">
                                <form class="form-inline mx-auto my-2 my-lg-0" style="align-content:center;" method="get" action="/search">
                                    <input class="form-control mr-sm-2" type="search" placeholder="Caută" aria-label="Search" name="q">
                                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Caută</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="hidden md:block">
                        <div class="ml-4 flex items-center md:ml-6">
                            <!-- Profile dropdown -->
                            <div class="ml-3 relative">
                                <div class="nav-item dropdown {{Request :: path() === 'login' ? 'active' : ''}}">
                                    <a class="nav-link dropdown-toggle" href="{{ url('/dashboard') }}" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <!-- <button class="btn btn-outline-secondary" type="submit">Dashboard</button> -->
                                        <img class="h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                        <a class="dropdown-item" href="/user/profile">Profilul meu</a>
                                        <a class="dropdown-item" href="/logout">Deconectare</a>
                                        <a class="dropdown-item" href="/new-post">Postare nouă</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </nav>
    </div>



</x-app-layout>