<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Organization News Hub | Passenger First</title>
    <!-- Load Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Custom styles for modern aesthetic */
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap');
        
        :root {
            --primary-navy: #1e3c72;
            --accent-gold: #FFC300;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
        }

        /* Header */
        header {
            background: linear-gradient(135deg, #0a2463 0%, #1e3c72 50%, #2a5298 100%);
            color: white;
            padding: 1.5rem 0;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            box-shadow: 0 4px 20px rgba(0,0,0,0.2);
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 2rem;
        }

        .logo {
            font-size: 2rem;
            font-weight: bold;
            color: white;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .logo span {
            color: #ffd700;
        }

        .nav-links {
            display: flex;
            list-style: none;
            gap: 2.5rem;
        }

        .nav-links a {
            color: white;
            text-decoration: none;
            transition: all 0.3s;
            font-weight: 500;
        }

        .nav-links a:hover {
            color: #ffd700;
            transform: translateY(-2px);
        }
        
        /* Subtle hover effect for cards */
        .news-card {
            transition: transform 0.3s, box-shadow 0.3s;
        }
        .news-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>

    <!-- Header -->
    <header>
        <nav>
            <div class="logo">
                Passenger <span>First</span>
            </div>
            <ul class="nav-links">
                <li><a href="{{route('welcome')}}">Home</a></li>
                <li><a href="#timetable">Time Table</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="{{route('news')}}">News</a></li>
                <li><a href="{{route('login')}}">Login</a></li>
                <li><a href="{{route('register')}}">Register</a></li>

            </ul>
        </nav>
    </header>
    <!-- Main Content Area -->
    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">

        <!-- Section Title -->
        <div class="text-center mb-10">
            
        </div>
    </t></d>
        <!-- FEATURED ARTICLE: Main Newspaper Clipping/Letter -->
        <section id="featured" class="mb-16">
            <div class="bg-white rounded-xl overflow-hidden shadow-2xl news-card border-t-4 border-[color:var(--accent-gold)]">
                <div class="md:flex">
                    <!-- Image/Clipping Preview Area -->
                    <div class="md:w-1/2 p-6 bg-gray-50 flex flex-col justify-center items-center">
                        <div class="w-full h-80 bg-gray-200 rounded-lg border-2 border-dashed border-gray-400 flex items-center justify-center text-gray-500 text-center p-3">
                            <!-- Placeholder for the actual Newspaper Clipping Image -->
                            <img src="/assets/images/news1.jpeg" alt="Newspaper clipping image preview" class="max-h-full max-w-full rounded-md object-contain">
                        </div>
                        <p class="mt-4 text-sm text-gray-600 font-medium">Source: Daily Gazette, Page A4. Published: Oct 20, 2025</p>
                    </div>

                    <!-- Article Text Content -->
                    <div class="md:w-1/2 p-8 lg:p-12">
                        <span class="inline-block bg-[color:var(--primary-navy)] text-[color:var(--accent-gold)] text-xs font-semibold px-3 py-1 rounded-full uppercase mb-3 tracking-wider">Featured Release</span>
                        
                        <h3 class="text-3xl font-bold text-gray-800 mb-4 leading-tight">
                            "හැම ආණ්ඩුවකටම මිස් වුණු රෑ බස් එක මිනිස් ජීවිත හිස් කරන හැටි" 🚍

                        </h3>
                        
                        <p class="text-gray-600 mb-6 text-base leading-relaxed">
ශ්‍රී ලංකාවේ පොදු ප්‍රවාහන සේවාව තුළ රාත්‍රී කාලයේ දී බස් රථ ධාවනය හිඟවීම පිළිබඳව Passenger First නිර්මාතෘ යස්වාන් දිසානායක මහතාගේ සහ සම නිර්මාතෘ උත්පල දිල්හාන් මහතාගේ අදහස් සමගින් 2024 සැප්තැම්බර් 14, ඉරිදා මව්බිම පුවත්පතේ පළවූ ලිපිය 📰                        </p>

                        <!-- Paragraph from the Newspaper -->
                        <div class="border-l-4 border-[color:var(--accent-gold)] pl-4 italic text-gray-700 bg-yellow-50 p-4 rounded-md">
                            <p class="text-sm">
ලිපිය කියවන්න: https://bit.ly/4mNMLA4                            </p>
                        </div>

                        <div class="mt-6 flex items-center text-sm text-gray-500">
                            <!-- Placeholder for Icon: Clock/Time -->
                            <svg class="w-4 h-4 mr-2 text-[color:var(--accent-gold)]" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            <span class="font-medium">5 min read — Oct 20, 2025</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- NEWS ARCHIVE: Grid of Smaller Articles -->
        <section id="archive">
            <h3 class="text-2xl font-bold text-[color:var(--primary-navy)] mb-6 border-b-2 border-gray-200 pb-2">Recent Archive</h3>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

                <!-- Archive Item 1 -->
                <article class="bg-white rounded-xl p-6 shadow-md news-card">
                    <span class="text-xs text-gray-500 mb-2 block">Sept 15, 2025</span>
                    <h4 class="text-xl font-semibold text-gray-800 mb-3 hover:text-[color:var(--primary-navy)] transition duration-150 cursor-pointer">
                        Public Consultation: New Route Expansion
                    </h4>
                    <p class="text-gray-600 text-sm mb-4">
                        A letter published in 'The Economic Review' detailing plans for a new coastal route connecting Chilow and Thelwatta. Feedback period is now open.
                    </p>
                    <a href="#" class="text-sm font-medium text-[color:var(--primary-navy)] hover:text-[color:var(--accent-gold)] transition duration-150 flex items-center">
                        Read More 
                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                    </a>
                </article>

                <!-- Archive Item 2 -->
                <article class="bg-white rounded-xl p-6 shadow-md news-card">
                    <span class="text-xs text-gray-500 mb-2 block">Aug 01, 2025</span>
                    <h4 class="text-xl font-semibold text-gray-800 mb-3 hover:text-[color:var(--primary-navy)] transition duration-150 cursor-pointer">
                        Bus Number NC 9825 Service Reliability Report
                    </h4>
                    <p class="text-gray-600 text-sm mb-4">
                        Quarterly performance review highlights 99% on-time service rate for the Colombo-Jaffna route. A letter of commendation was sent to the operating team.
                    </p>
                    <a href="#" class="text-sm font-medium text-[color:var(--primary-navy)] hover:text-[color:var(--accent-gold)] transition duration-150 flex items-center">
                        Read More
                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                    </a>
                </article>

                <!-- Archive Item 3 -->
                <article class="bg-white rounded-xl p-6 shadow-md news-card">
                    <span class="text-xs text-gray-500 mb-2 block">July 10, 2025</span>
                    <h4 class="text-xl font-semibold text-gray-800 mb-3 hover:text-[color:var(--primary-navy)] transition duration-150 cursor-pointer">
                        New Fare Structure Announcement
                    </h4>
                    <p class="text-gray-600 text-sm mb-4">
                        Details from a published advisory on minor adjustments to the fare structure, effective next month. Includes concession details for students and seniors.
                    </p>
                    <a href="#" class="text-sm font-medium text-[color:var(--primary-navy)] hover:text-[color:var(--accent-gold)] transition duration-150 flex items-center">
                        Read More
                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                    </a>
                </article>

            </div>
        </section>
        
        <!-- Footer Placeholder -->
        <footer class="mt-20 border-t pt-8 text-center text-gray-500 text-sm">
            &copy; 2025 Passenger First Organization. All rights reserved.
        </footer>

    </main>
</body>
</html>