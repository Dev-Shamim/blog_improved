<header class="bg-white shadow-sm sticky top-0 z-50">
    <div class="container mx-auto px-4 py-4 md:py-0  flex justify-between items-center">
        <div class="flex items-center space-x-2">
            <a href="{{ route('home') }}" class="flex items-center space-x-2">
                <i class="fas fa-blog text-2xl text-blue-600"></i>
                <h1 class="text-2xl font-bold text-gray-800">I<span class="text-blue-600">Blog</span></h1>
            </a>
        </div>

        <nav class="hidden md:flex space-x-8 items-center">
            <a href="{{ route('home') }}" class="text-blue-600 font-medium">Home</a>
            <!-- Categories Dropdown -->
            <div class="relative desktop-dropdown">
                <button class="text-gray-600 hover:text-blue-600 py-4 transition flex items-center">
                    Categories
                    <i class="fas fa-chevron-down ml-1 text-sm"></i>
                </button>

                <div class="absolute left-0 w-64 bg-white rounded-md shadow-lg hidden z-50 desktop-dropdown-menu">
                    <div class="py-2">
                        @foreach ($categories as $category)
                            <div class="relative desktop-dropdown-sub">
                                @if ($category->children->count() > 0)
                                    <a href="#"
                                        class="block px-4 py-2 text-gray-700 hover:bg-gray-100 transition flex justify-between items-center w-full text-left">
                                        {{ucfirst($category->name)  }}
                                        <i class="fas fa-chevron-right text-xs"></i>
                                    </a>
                                    <div
                                        class="absolute left-full top-0 mt-0 w-64 bg-white rounded-md shadow-lg hidden desktop-dropdown-submenu">
                                        @foreach ($category->children as $child)
                                            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 transition">
                                                {{ucfirst($child->name)  }}
                                            </a>
                                        @endforeach
                                    </div>
                                @else
                                    <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 transition">
                                        {{ucfirst($category->name)  }}
                                    </a>
                                @endif
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <a href="{{ route('post.index') }}" class="text-gray-600 hover:text-blue-600 transition">Posts</a>
            <a href="{{ route('about') }}" class="text-gray-600 hover:text-blue-600 transition">About</a>
            <a href="{{ route('contact') }}" class="text-gray-600 hover:text-blue-600 transition">Contact</a>
        </nav>

        <div class="flex items-center space-x-4">
            <button class="md:hidden text-gray-600" id="mobile-menu-button">
                <i class="fas fa-bars text-xl"></i>
            </button>
            <button class="p-1 text-gray-400 hover:text-gray-500 focus:outline-none">
                <i class="fas fa-bell text-xl"></i>
            </button>
            <button class="p-1 text-gray-400 hover:text-gray-500 focus:outline-none">
                <i class="fas fa-envelope text-xl"></i>
            </button>
            <div class="relative">
                <button id="user-menu-button" class="flex items-center space-x-2 focus:outline-none">
                    <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="User" class="w-8 h-8 rounded-full">
                    <span class="hidden md:inline text-gray-700">John Doe</span>
                    <i class="fas fa-chevron-down text-gray-500 text-xs"></i>
                </button>
                <div id="user-menu"
                    class="hidden absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-1 z-50 border border-gray-200">
                    <a href="{{ route('profile.show') }}"
                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Your
                        Profile</a>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Settings</a>
                    <a href="{{ route('admin.dashboard') }}"
                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Admin Panel</a>
                    <div class="border-t border-gray-200"></div>
                    <a href="{{ route('login') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Sign
                        out</a>
                </div>
            </div>

        </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden md:hidden bg-white shadow-md">
        <div class="container mx-auto px-4 py-4">
            <a href="#" class="block py-2 text-blue-600 font-medium">Home</a>
            <a href="#" class="block py-2 text-gray-600 hover:text-blue-600 transition">Articles</a>
            <div class="relative">
                <button
                    class="block py-2 text-gray-600 hover:text-blue-600 transition flex items-center w-full text-left mobile-dropdown-toggle">
                    Categories
                    <i class="fas fa-chevron-down ml-1 text-sm"></i>
                </button>
                <div id="mobile-categories" class="hidden pl-4 mobile-dropdown-menu">
                    <div class="py-1">
                        <div class="relative">
                            <button
                                class="block py-2 text-gray-600 hover:text-blue-600 transition flex items-center w-full text-left mobile-dropdown-sub-toggle">
                                Web Development
                                <i class="fas fa-chevron-down ml-1 text-sm"></i>
                            </button>
                            <div id="mobile-webdev-submenu" class="hidden pl-4 mobile-dropdown-submenu">
                                <a href="#" class="block py-2 text-gray-600 hover:text-blue-600 transition">Frontend</a>
                                <a href="#" class="block py-2 text-gray-600 hover:text-blue-600 transition">Backend</a>
                                <a href="#" class="block py-2 text-gray-600 hover:text-blue-600 transition">Full
                                    Stack</a>
                            </div>
                        </div>
                        <div class="relative">
                            <button
                                class="block py-2 text-gray-600 hover:text-blue-600 transition flex items-center w-full text-left mobile-dropdown-sub-toggle">
                                Artificial Intelligence
                                <i class="fas fa-chevron-down ml-1 text-sm"></i>
                            </button>
                            <div id="mobile-ai-submenu" class="hidden pl-4 mobile-dropdown-submenu">
                                <a href="#" class="block py-2 text-gray-600 hover:text-blue-600 transition">Machine
                                    Learning</a>
                                <a href="#" class="block py-2 text-gray-600 hover:text-blue-600 transition">Deep
                                    Learning</a>
                                <a href="#" class="block py-2 text-gray-600 hover:text-blue-600 transition">NLP</a>
                            </div>
                        </div>
                        <a href="#" class="block py-2 text-gray-600 hover:text-blue-600 transition">Cloud
                            Computing</a>
                        <a href="#" class="block py-2 text-gray-600 hover:text-blue-600 transition">Cybersecurity</a>
                        <a href="#" class="block py-2 text-gray-600 hover:text-blue-600 transition">Mobile
                            Development</a>
                        <a href="#" class="block py-2 text-gray-600 hover:text-blue-600 transition">DevOps</a>
                    </div>
                </div>
            </div>
            <a href="#" class="block py-2 text-gray-600 hover:text-blue-600 transition">About</a>
            <a href="#" class="block py-2 text-gray-600 hover:text-blue-600 transition">Contact</a>
        </div>
    </div>
</header>