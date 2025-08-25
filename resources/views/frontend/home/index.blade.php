@extends('layouts.frontend.app')

@section('title', 'Home')

@section('content')
    <!-- Hero Section -->
    <section class="bg-gradient-to-r from-blue-500 to-purple-600 text-white py-16">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-4xl md:text-5xl font-bold mb-4">Welcome to IBlog</h2>
            <p class="text-xl md:text-2xl mb-8 max-w-3xl mx-auto">Discover the latest in technology, programming, and
                digital innovation</p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <input type="text" placeholder="Search articles..."
                    class="px-4 py-3 rounded-md text-gray-800 w-full sm:w-96">
                <button class="bg-white text-blue-600 px-6 py-3 rounded-md font-medium hover:bg-gray-100 transition">
                    <i class="fas fa-search mr-2"></i> Search
                </button>
            </div>
        </div>
    </section>

    <!-- Featured Posts -->
    <section class="py-12">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold mb-8 text-gray-800 border-b pb-2">Featured Posts</h2>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Featured Post 1 -->
                @foreach ($featuredPosts as $post)
                    <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition">
                        @if (Str::startsWith($post->image, ['https://']))
                            <img src="{{ $post->image }}" alt="Web Development" class="w-full h-48 object-cover">
                        @else
                            <img src="{{ asset('storage/' . $post->image) }}" alt="Web Development"
                                class="w-full h-48 object-cover">
                        @endif
                        <div class="p-6">
                            <div class="flex items-center text-sm text-gray-500 mb-2">
                                <span
                                    class="bg-blue-100 text-blue-800 px-2 py-1 rounded-md text-xs">{{ $post->category->name }}</span>
                                <span class="mx-2">•</span>
                                <span>{{ $post->created_at->diffForHumans() }}</span>
                                <span class="mx-2">•</span>
                                <span>5 min read</span>
                            </div>
                            <h3 class="text-xl font-bold mb-2 text-gray-800">{{ $post->title }}</h3>
                            <p class="text-gray-600 mb-4">{{ Str::limit($post->content, 150) }}.</p>
                            <a href="{{ route('post.show', $post->slug) }}"
                                class="text-blue-600 font-medium hover:text-blue-800 transition">Read More</a>
                        </div>
                    </div>
                @endforeach
                 
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <div class="container mx-auto px-4 py-8 flex flex-col lg:flex-row gap-8">
        <!-- Recent Articles -->
        <main class="lg:w-2/3">
            <h2 class="text-3xl font-bold mb-8 text-gray-800 border-b pb-2">Recent Articles</h2>
            <div class="space-y-8">
                <!-- Recent Post 1 -->
                @foreach ($recentPosts as $post)

                    <article
                        class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition flex flex-col md:flex-row">
                        @if (Str::startsWith($post->image, ['https://']))
                            <img src="{{ $post->image }}" alt="React 18" class="w-1/3 md:w-1/3 h-48 md:h-auto object-cover">

                        @else
                            <img src="{{ asset('storage/' . $post->image) }}" alt="React 18"
                                class="w-1/3 md:w-1/3 h-48 md:h-auto object-cover">
                        @endif
                       
                        <div class="p-6 md:w-2/3">
                            <div class="flex items-center text-sm text-gray-500 mb-2">
                                <span
                                    class="bg-blue-100 text-blue-800 px-2 py-1 rounded-md text-xs">{{ $post->category->name }}</span>
                                <span class="mx-2">•</span>
                                <span>{{$post->created_at->diffForHumans()}}</span>
                                <span class="mx-2">•</span>
                                <span>7 min read</span>
                            </div>
                            <h3 class="text-xl font-bold mb-2 text-gray-800">{{ $post->title }}</h3>
                            <p class="text-gray-600 mb-4">{{Str::limit($post->content, 200, '...')}}</p>
                            <a href="{{ route('post.show', $post->slug) }}"
                                class="text-blue-600 font-medium hover:text-blue-800 transition">Read More</a>
                        </div>
                    </article>
                @endforeach

               
            </div>

            <div class="mt-8 flex justify-center">
                <a href="{{ route('post.index') }}"
                    class="bg-blue-600 text-white px-6 py-3 rounded-md hover:bg-blue-700 transition">
                    Browse All Articles
                </a>
            </div>
        </main>

        <!-- Sidebar -->
        <x-frontend.sidebar />
         
    </div>
@endsection