<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.cdnfonts.com/css/liberation-sans" rel="stylesheet">

        <!-- Scripts -->
        <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
        <script src="https://unpkg.com/@phosphor-icons/web@2.0.3/src/index.js"></script>

        <!-- Styles -->
        @livewireStyles

        <style>
            @import url('https://fonts.cdnfonts.com/css/liberation-sans');
            
            .nav-link {
                position: relative;
                transition: all 0.3s ease;
            }
            
            .nav-link::after {
                content: '';
                position: absolute;
                width: 0;
                height: 1px;
                bottom: -4px;
                left: 0;
                background-color: #ffffff;
                transition: width 0.3s ease;
            }
            
            .nav-link:hover::after {
                width: 100%;
            }
        </style>
    </head>
    <body class="text-white antialiased bg-black overflow-x-hidden font-['Liberation_Sans']">
        {{-- NAVBAR --}}
        <nav class="px-8 py-4">
            <div class="max-w-full mx-auto flex items-center justify-between">
                <div class="flex items-center justify-start space-x-3 flex-1">
                    <span class="text-md font-semibold text-white">Nonchalant.</span>
                </div>
                
                <div class="flex items-center justify-center space-x-12 flex-1">
                    <a href="{{ route('welcome') }}" class="nav-link text-white hover:text-stone-500 text-sm font-thin">Home</a>
                    <a href="{{ route('about') }}" class="nav-link text-white hover:text-stone-500 text-sm">Artists</a>
                    <a href="{{ route('gallery') }}" class="nav-link text-white hover:text-stone-500 text-sm">Non-Negotiables</a>
                    <a href="{{ route('certifications') }}" class="nav-link text-white hover:text-stone-500 text-sm">Events</a>
                    <a href="{{ route('contact') }}" class="nav-link text-white hover:text-stone-500 text-sm">Contact</a>
                </div>
                
                <div class="flex items-center justify-end space-x-4 flex-1">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="bg-white text-black px-8 py-3 text-sm font-medium hover:bg-gray-100 transition-all duration-300">Dashboard</a>
                    @else
                        <a href="{{ route('register') }}" class="text-white hover:text-stone-500 transition-colors text-sm nav-link font-medium">Register</a>
                        <a href="{{ route('login') }}" class="bg-white text-neutral-900 px-8 py-3 text-sm font-medium hover:bg-zinc-950 hover:text-white transition-all duration-300">Login
                            <span>                    
                                <i class="ph ph-arrow-up-right"></i>
                            </span></a>
                    @endauth
                </div>
            </div>
        </nav>

        {{ $slot }}

        {{-- FOOTER --}}
        <footer class="bg-black text-white border-t border-white">
            <div class="max-w-full mx-auto">
                <div class="grid grid-cols-3 gap-12 mb-12 px-8 py-16">
                    <div class="flex flex-col space-y-4">
                        <div class="flex items-center space-x-3">
                            <span class="font-semibold text-md text-white">Nonchalant.</span>
                        </div>
                        <p class="text-stone-500 text-sm leading-relaxed">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </p>
                    </div>
                    
                    <div class="flex flex-col space-y-6">
                        <h3 class="font-semibold text-md mb-4">Quick Links</h3>
                        <div class="flex flex-col space-y-2 text-sm">
                            <a href="{{ route('welcome') }}" class="nav-link text-white hover:text-stone-500 text-sm font-thin">Home</a>
                            <a href="{{ route('about') }}" class="nav-link text-white hover:text-stone-500 text-sm font-thin">Artists</a>
                            <a href="{{ route('gallery') }}" class="nav-link text-white hover:text-stone-500 text-sm font-thin">Non-Negotiables</a>
                            <a href="{{ route('certifications') }}" class="nav-link text-white hover:text-stone-500 text-sm font-thin">Events</a>
                            <a href="{{ route('contact') }}" class="nav-link text-white hover:text-stone-500 text-sm font-thin">Contact</a>
                        </div>
                    </div>
                    
                    <div class="flex flex-col space-y-4">
                        <h3 class="font-semibold text-md">Follow Us</h3>
                        <div class="flex space-x-4">
                            <a href="#" class="text-stone-500 hover:text-white transition-colors">
                                <i class="ph ph-instagram-logo text-xl"></i>
                            </a>
                            <a href="#" class="text-stone-500 hover:text-white transition-colors">
                                <i class="ph ph-spotify-logo text-xl"></i>
                            </a>
                            <a href="#" class="text-stone-500 hover:text-white transition-colors">
                                <i class="ph ph-youtube-logo text-xl"></i>
                            </a>
                            <a href="#" class="text-stone-500 hover:text-white transition-colors">
                                <i class="ph ph-twitter-logo text-xl"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
                <div class="text-black bg-white py-2 px-8">
                    <div class="flex justify-end items-center text-white font-bold">
                        <span class="text-stone-500 px-4 font-medium text-sm">All rights reserved.</span>
                        <p class="font-semibold text-md text-black">© 2025 Nonchalant. </p>
                    </div>
                </div>
            </div>
        </footer>

        @livewireScripts
    </body>
</html>
