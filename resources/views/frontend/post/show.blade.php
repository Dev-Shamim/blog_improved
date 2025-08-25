@extends('layouts.frontend.app')

@section('title', 'Blog Names')
@section('content')
    <!-- Main Content -->
    <div class="container mx-auto px-4 py-8 flex flex-col lg:flex-row gap-8">
        <!-- Article Content -->
        <main class="lg:w-2/3">
            <article class="bg-white rounded-lg shadow-md overflow-hidden">
                <!-- Featured Image -->
                @if (Str::startsWith($post->image, 'https://'))
                    <img src="{{ $post->image }}" alt="{{ $post->title }}" class="w-full h-64 md:h-96 object-cover">
                @else
                    <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}"
                        class="w-full h-64 md:h-96 object-cover">
                @endif


                <!-- Article Header -->
                <div class="p-6 md:p-8">
                    <div class="flex items-center text-sm text-gray-500 mb-4">
                        <span
                            class="bg-blue-100 text-blue-800 px-2 py-1 rounded-md text-xs">{{ $post->category->name }}</span>
                        <span class="mx-2">•</span>
                        <span>{{$post->created_at->diffForHumans()}}</span>
                        <span class="mx-2">•</span>
                        <span>5 min read</span>
                        <span class="mx-2">•</span>
                        <span><i class="fas fa-eye mr-1"></i> 1,248 views</span>
                    </div>

                    <h1 class="text-3xl md:text-4xl font-bold mb-6 text-gray-800">{{$post->title}}</h1>

                    <div class="flex items-center mb-8">
                        <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Author"
                            class="w-10 h-10 rounded-full mr-3">
                        <div>
                            <p class="font-medium text-gray-800">{{$post->user->name}}</p>
                            <p class="text-sm text-gray-500">Senior Web Developer</p>
                        </div>
                    </div>
                </div>

                <!-- Article Content -->
                <div class="px-6 md:px-8 pb-8 prose max-w-none">

                    <p class="text-gray-700 mb-5 text-lg leading-relaxed">{{$post->content}}</p>

 
                </div>

                <!-- Article Footer -->
                <div class="px-6 md:px-8 py-6 border-t border-gray-200">
                    <div class="flex flex-wrap gap-2 mb-6">
                        <a href="#"
                            class="bg-gray-100 text-gray-800 px-3 py-1 rounded-full text-sm hover:bg-gray-200 transition">#webdev</a>
                        <a href="#"
                            class="bg-gray-100 text-gray-800 px-3 py-1 rounded-full text-sm hover:bg-gray-200 transition">#frontend</a>
                        <a href="#"
                            class="bg-gray-100 text-gray-800 px-3 py-1 rounded-full text-sm hover:bg-gray-200 transition">#javascript</a>
                        <a href="#"
                            class="bg-gray-100 text-gray-800 px-3 py-1 rounded-full text-sm hover:bg-gray-200 transition">#trends</a>
                    </div>

                    <div class="flex justify-between items-center">
                        <div class="flex space-x-4">
                            <button class="text-gray-500 hover:text-blue-600 transition">
                                <i class="far fa-thumbs-up text-xl"></i>
                                <span class="ml-1">248</span>
                            </button>
                            <button class="text-gray-500 hover:text-blue-600 transition">
                                <i class="far fa-comment text-xl"></i>
                                <span class="ml-1">36</span>
                            </button>
                        </div>

                        <div class="flex space-x-3">
                            <button class="text-gray-500 hover:text-blue-600 transition">
                                <i class="fab fa-twitter text-xl"></i>
                            </button>
                            <button class="text-gray-500 hover:text-blue-600 transition">
                                <i class="fab fa-linkedin text-xl"></i>
                            </button>
                            <button class="text-gray-500 hover:text-blue-600 transition">
                                <i class="fab fa-facebook text-xl"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </article>

            <!-- Author Bio -->
            <div class="bg-white rounded-lg shadow-md p-6 mt-8">
                <div class="flex items-start">
                    <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Author"
                        class="w-16 h-16 rounded-full mr-4">
                    <div>
                        <h3 class="text-xl font-bold text-gray-800">About John Doe</h3>
                        <p class="text-gray-600 mb-3">John is a senior web developer with over 10 years of experience
                            building scalable web applications. He specializes in JavaScript frameworks and performance
                            optimization.</p>
                        <div class="flex space-x-4">
                            <a href="#" class="text-blue-600 hover:text-blue-800 transition">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#" class="text-blue-600 hover:text-blue-800 transition">
                                <i class="fab fa-github"></i>
                            </a>
                            <a href="#" class="text-blue-600 hover:text-blue-800 transition">
                                <i class="fab fa-linkedin"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Comments Section -->
            <div class="bg-white rounded-lg shadow-md p-6 mt-8">
                <h3 class="text-xl font-bold text-gray-800 mb-6">Comments (3)</h3>

                <!-- Comment 1 -->
                <div class="mb-6 pb-6 border-b border-gray-200">
                    <div class="flex items-start mb-3">
                        <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="User"
                            class="w-10 h-10 rounded-full mr-3">
                        <div>
                            <p class="font-medium text-gray-800">Sarah Johnson</p>
                            <p class="text-sm text-gray-500">June 2, 2023</p>
                        </div>
                    </div>
                    <p class="text-gray-700 ml-13">Great article! I've been experimenting with WebAssembly and it's truly
                        impressive how it performs compared to traditional JavaScript.</p>
                    <button class="text-sm text-gray-500 hover:text-blue-600 mt-2 ml-13 transition">Reply</button>
                </div>

                <!-- Comment 2 -->
                <div class="mb-6 pb-6 border-b border-gray-200">
                    <div class="flex items-start mb-3">
                        <img src="https://randomuser.me/api/portraits/men/22.jpg" alt="User"
                            class="w-10 h-10 rounded-full mr-3">
                        <div>
                            <p class="font-medium text-gray-800">Michael Chen</p>
                            <p class="text-sm text-gray-500">June 5, 2023</p>
                        </div>
                    </div>
                    <p class="text-gray-700 ml-13">What are your thoughts on the learning curve for developers transitioning
                        to serverless architectures? I've found it challenging to debug in production environments.</p>
                    <button class="text-sm text-gray-500 hover:text-blue-600 mt-2 ml-13 transition">Reply</button>
                </div>

                <!-- Comment 3 -->
                <div class="mb-6">
                    <div class="flex items-start mb-3">
                        <img src="https://randomuser.me/api/portraits/women/63.jpg" alt="User"
                            class="w-10 h-10 rounded-full mr-3">
                        <div>
                            <p class="font-medium text-gray-800">Emma Rodriguez</p>
                            <p class="text-sm text-gray-500">June 8, 2023</p>
                        </div>
                    </div>
                    <p class="text-gray-700 ml-13">Thanks for the comprehensive overview! Would love to see a follow-up
                        article diving deeper into AI-powered development tools.</p>
                    <button class="text-sm text-gray-500 hover:text-blue-600 mt-2 ml-13 transition">Reply</button>
                </div>

                <!-- Comment Form -->
                <div class="mt-8">
                    <h4 class="text-lg font-semibold mb-4 text-gray-800">Leave a Comment</h4>
                    <form class="space-y-4">
                        <div class="grid md:grid-cols-2 gap-4">
                            <input type="text" placeholder="Your Name"
                                class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <input type="email" placeholder="Your Email"
                                class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>
                        <textarea placeholder="Your Comment" rows="4"
                            class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                        <button type="submit"
                            class="bg-blue-600 text-white px-6 py-2 rounded-md hover:bg-blue-700 transition">
                            Post Comment
                        </button>
                    </form>
                </div>
            </div>

            <!-- Related Articles -->
            <div class="mt-12">
                <h3 class="text-2xl font-bold mb-6 text-gray-800">Related Articles</h3>
                <div class="grid md:grid-cols-2 gap-6">
                    <!-- Related 1 -->
                    @if ($relatedPost->count() > 0)
                        @foreach ($relatedPost as $post)

                            <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition">
                                @if (Str::startsWith($post->image, 'https://'))
                                    <img src="{{ $post->image }}" alt="{{ $post->title }}" class="w-full h-40 object-cover">
                                @else
                                    <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}"
                                        class="w-full h-40 object-cover">

                                @endif
                                <div class="p-4">
                                    <div class="flex items-center text-sm text-gray-500 mb-2">
                                        <span
                                            class="bg-blue-100 text-blue-800 px-2 py-1 rounded-md text-xs">{{ $post->category->name }}</span>
                                        <span class="mx-2">•</span>
                                        <span>{{ $post->created_at->diffForHumans() }}</span>
                                    </div>
                                    <h4 class="text-lg font-bold mb-2 text-gray-800">{{ $post->title }}</h4>
                                    <a href="{{ route('post.show', $post->slug) }}"
                                        class="text-blue-600 font-medium hover:text-blue-800 transition">Read More</a>
                                </div>
                            </div>
                        @endforeach
                    @endif

                  
    </div>
@endsection