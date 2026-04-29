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
        :root {
            /* Spacing Scale */
            --space-xs: 0.5rem;
            --space-sm: 1rem;
            --space-md: 1.5rem;
            --space-lg: 2rem;
            --space-xl: 3rem;
            --space-2xl: 4rem;
            --space-3xl: 6rem;
            --space-4xl: 8rem;
            
            /* Fluid Typography Scale */
            --text-xs: clamp(0.75rem, 0.7rem + 0.25vw, 0.875rem);
            --text-sm: clamp(0.875rem, 0.8rem + 0.375vw, 1rem);
            --text-base: clamp(1rem, 0.925rem + 0.375vw, 1.125rem);
            --text-lg: clamp(1.125rem, 1rem + 0.625vw, 1.25rem);
            --text-xl: clamp(1.25rem, 1.1rem + 0.75vw, 1.5rem);
            --text-2xl: clamp(1.5rem, 1.25rem + 1.25vw, 2rem);
            --text-3xl: clamp(1.875rem, 1.5rem + 1.875vw, 2.5rem);
            --text-4xl: clamp(2.25rem, 1.75rem + 2.5vw, 3rem);
            --text-5xl: clamp(3rem, 2.25rem + 3.75vw, 4rem);
            
            /* Shadow System */
            --shadow-sm: 0 1px 2px 0 rgb(0 0 0 / 0.05);
            --shadow-md: 0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1);
            --shadow-lg: 0 10px 15px -3px rgb(0 0 0 / 0.1), 0 4px 6px -4px rgb(0 0 0 / 0.1);
            --shadow-xl: 0 20px 25px -5px rgb(0 0 0 / 0.1), 0 8px 10px -6px rgb(0 0 0 / 0.1);
            --shadow-2xl: 0 25px 50px -12px rgb(0 0 0 / 0.25);
            --shadow-3xl: 0 32px 64px -12px rgb(0 0 0 / 0.25), 0 0 0 1px rgb(0 0 0 / 0.05);
            
            /* Border Radius */
            --radius-sm: 0.375rem;
            --radius-md: 0.5rem;
            --radius-lg: 0.75rem;
            --radius-xl: 1rem;
            --radius-2xl: 1.5rem;
            --radius-3xl: 2rem;
            --radius-4xl: 3rem;
        }
        
        body { 
            font-family: 'DM Sans', sans-serif;
            font-size: var(--text-base);
            line-height: 1.6;
        }
        .font-display { 
            font-family: 'Playfair Display', serif;
            line-height: 1.2;
        }
        .hero-bg { 
            background: linear-gradient(135deg, #0a2e1f 0%, #0d4a33 40%, #16a34a 100%);
            position: relative;
        }
        .hero-bg::before {
            content: '';
            position: absolute;
            inset: 0;
            background: radial-gradient(circle at 20% 80%, rgba(202, 138, 4, 0.1) 0%, transparent 50%),
                        radial-gradient(circle at 80% 20%, rgba(34, 197, 94, 0.1) 0%, transparent 50%);
            pointer-events: none;
        }
        .grain::after { 
            content:''; 
            position:fixed; 
            inset:0; 
            background-image:url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noise'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noise)' opacity='0.04'/%3E%3C/svg%3E"); 
            pointer-events:none; 
            z-index:9999; 
        }
        .stat-card { 
            background: rgba(255,255,255,0.08); 
            backdrop-filter: blur(12px); 
            border: 1px solid rgba(255,255,255,0.15);
            border-radius: var(--radius-2xl);
            box-shadow: var(--shadow-lg);
            transition: all 0.3s ease;
        }
        .stat-card:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow-xl);
        }
        .product-card { 
            border-radius: var(--radius-3xl);
            overflow: hidden;
            box-shadow: var(--shadow-md);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .product-card:hover { 
            box-shadow: var(--shadow-2xl);
            transform: translateY(-4px) scale(1.02);
        }
        .product-card:hover .product-overlay { opacity: 1; }
        .product-overlay { 
            transition: opacity 0.4s ease; 
            backdrop-filter: blur(8px);
        }
        @keyframes floatUp { 
            0% { opacity:0; transform:translateY(30px); } 
            100% { opacity:1; transform:translateY(0); } 
        }
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
        }
        @keyframes floatDelayed {
            0% { opacity:0; transform:translateY(30px); }
            100% { opacity:1; transform:translateY(0); }
        }
        @keyframes slideInRight {
            0% { opacity:0; transform:translateX(50px); }
            100% { opacity:1; transform:translateX(0); }
        }
        @keyframes slideInLeft {
            0% { opacity:0; transform:translateX(-50px); }
            100% { opacity:1; transform:translateX(0); }
        }
        @keyframes pulseGlow {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.6; }
        }
        .animate-float { animation: floatUp 0.8s ease forwards; }
        .animate-float-continuous { animation: float 3s ease-in-out infinite; }
        .animate-slide-in-right { animation: slideInRight 0.8s ease forwards; }
        .animate-slide-in-left { animation: slideInLeft 0.8s ease forwards; }
        .animate-pulse-glow { animation: pulseGlow 2s ease-in-out infinite; }
        .nav-link { 
            position:relative; 
            transition: all 0.3s ease;
        }
        .nav-link::after { 
            content:''; 
            position:absolute; 
            bottom:-2px; 
            left:0; 
            width:0; 
            height:2px; 
            background:#22c55e; 
            transition:width 0.3s cubic-bezier(0.4, 0, 0.2, 1); 
        }
        .nav-link:hover::after { width:100%; }
        .scroll-reveal { 
            opacity:0; 
            transform:translateY(30px); 
            transition: opacity 0.8s cubic-bezier(0.4, 0, 0.2, 1), 
                        transform 0.8s cubic-bezier(0.4, 0, 0.2, 1); 
        }
        .scroll-reveal.visible { 
            opacity:1; 
            transform:translateY(0); 
        }
        .marquee-track { 
            display:flex; 
            gap:3rem; 
            animation: marquee 30s linear infinite; 
        }
        @keyframes marquee { 
            from { transform:translateX(0); } 
            to { transform:translateX(-50%); } 
        }
        
        /* Button Styles */
        .btn-primary {
            background: linear-gradient(135deg, #125057 0%, #16a34a 100%);
            border-radius: var(--radius-full);
            box-shadow: var(--shadow-lg);
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
        }
        .btn-primary::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
            transition: left 0.5s;
        }
        .btn-primary:hover::before {
            left: 100%;
        }
        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow-xl);
        }
        
        /* Card Styles */
        .elevated-card {
            background: rgba(255,255,255,0.95);
            backdrop-filter: blur(16px);
            border: 1px solid rgba(255,255,255,0.2);
            border-radius: var(--radius-3xl);
            box-shadow: var(--shadow-xl);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .elevated-card:hover {
            transform: translateY(-8px);
            box-shadow: var(--shadow-3xl);
        }
        
        /* Responsive Typography */
        .text-hero { font-size: var(--text-5xl); }
        .text-display-lg { font-size: var(--text-4xl); }
        .text-display { font-size: var(--text-3xl); }
        .text-body-lg { font-size: var(--text-xl); }
        .text-body-md { font-size: var(--text-lg); }
        .text-body-sm { font-size: var(--text-base); }
        
        /* Smooth Scrolling */
        html { scroll-behavior: smooth; }
        
        /* Focus Styles */
        .focus-visible {
            outline: 2px solid #22c55e;
            outline-offset: 2px;
            border-radius: var(--radius-md);
        }
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
