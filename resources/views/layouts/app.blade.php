<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="icon" href="{{ asset('Asset 1.png') }}" type="image/png" />
    <title>@yield('title', config('app.name', 'Habtom Abadi Import Export'))</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700;900&family=DM+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- Custom Styles -->
    <style>
        body { font-family: 'DM Sans', sans-serif; }
        .font-display { font-family: 'Playfair Display', serif; }
        .hero-bg { background: linear-gradient(135deg, #0f3d2b 0%, #125057 40%, #16a34a 100%); }
        .grain::after { content:''; position:fixed; inset:0; background-image:url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noise'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noise)' opacity='0.04'/%3E%3C/svg%3E"); pointer-events:none; z-index:9999; }
        .stat-card { background: rgba(255,255,255,0.08); backdrop-filter: blur(12px); border: 1px solid rgba(255,255,255,0.15); }
        .product-card:hover .product-overlay { opacity: 1; }
        .product-overlay { transition: opacity 0.4s ease; }
        @keyframes floatUp { from { opacity:0; transform:translateY(30px); } to { opacity:1; transform:translateY(0); } }
        .animate-float { animation: floatUp 0.8s ease forwards; }
        .nav-link { position:relative; }
        .nav-link::after { content:''; position:absolute; bottom:-2px; left:0; width:0; height:2px; background:#22c55e; transition:width 0.3s; }
        .nav-link:hover::after { width:100%; }
        .scroll-reveal { opacity:0; transform:translateY(20px); transition: opacity 0.7s ease, transform 0.7s ease; }
        .scroll-reveal.visible { opacity:1; transform:translateY(0); }
        .marquee-track { display:flex; gap:3rem; animation: marquee 30s linear infinite; }
        @keyframes marquee { from { transform:translateX(0); } to { transform:translateX(-50%); } }
    </style>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: { DEFAULT: '#125057', light: '#16a34a', dark: '#0f3d2b', deeper: '#0a2a1f' },
                        secondary: '#125057',
                        gold: { DEFAULT: '#ca8a04', light: '#fbbf24' },
                        earth: '#3d2b1f',
                    },
                    fontFamily: {
                        display: ['Playfair Display', 'serif'],
                        body: ['DM Sans', 'sans-serif'],
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-white text-gray-900 grain">

    <!-- Header Component -->
    <x-header :navigation="$navigation" />

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer Component -->
    <x-footer />

    @stack('scripts')

    <!-- Common JavaScript -->
    <script>
        // Scroll reveal animation
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, observerOptions);

        document.addEventListener('DOMContentLoaded', () => {
            document.querySelectorAll('.scroll-reveal').forEach(el => {
                observer.observe(el);
            });
        });
    </script>
</body>
</html>
