<!DOCTYPE html>
<html lang="id">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Bakso Kuwung Satu')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@300..700&family=M+PLUS+Rounded+1c&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@300..700&family=M+PLUS+Rounded+1c&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Potta+One&display=swap"
        rel="stylesheet">
    <style>
        @media (max-width: 600px) {
            .reel-item {
                transition: transform 0.35s ease, opacity 0.35s ease;
                transform: translateY(-12px) scale(0.94);
                opacity: 0.6;
            }

            .reel-item.active {
                transform: translateY(20px) scale(1);
                opacity: 1;
                box-shadow: 0 0 10px 5px rgba(255, 255, 255, 0.248);
            }

            /* default semua card */
            /* .reel-item {nis
                opacity: 0.6;
                transform: scale(0.94) translateY(-10px);
                transition: all 0.45s ease;
            } */

            /* card AKTIF (tengah) */
            /* .reel-item.active {
                opacity: 1;
                transform: scale(1) translateY(20px);
                z-index: 10;
            } */

            /* glow + border */
            .reel-item.active .card {
                border: 1px solid rgba(255, 255, 255, 0.9);
                box-shadow:
                    0 0 20px rgba(255, 255, 255, 0.35),
                    0 0 60px rgba(255, 255, 255, 0.15);
            }
        }

        @keyframes pulse-soft {
            0% {
                box-shadow: 0 0 0 0 rgba(239, 68, 68, 0.5);
            }

            70% {
                box-shadow: 0 0 0 14px rgba(239, 68, 68, 0);
            }

            100% {
                box-shadow: 0 0 0 0 rgba(239, 68, 68, 0);
            }
        }

        #swipe-thumb {
            touch-action: none;
        }


        @keyframes pulse-success {
            0% {
                box-shadow: 0 0 0 0 rgba(34, 197, 94, 0.6);
            }

            70% {
                box-shadow: 0 0 0 16px rgba(34, 197, 94, 0);
            }

            100% {
                box-shadow: 0 0 0 0 rgba(34, 197, 94, 0);
            }
        }

        @keyframes track-pulse {
            0% {
                box-shadow: 0 0 0 0 rgba(255, 255, 255, 0.35);
            }

            70% {
                box-shadow: 0 0 0 18px rgba(255, 255, 255, 0);
            }

            100% {
                box-shadow: 0 0 0 0 rgba(255, 255, 255, 0);
            }
        }

        .track-pulse {
            animation: track-pulse 1.4s ease-out infinite;
        }


        .pulse-drag {
            animation: pulse-soft 1.2s infinite;
        }

        .pulse-success {
            animation: pulse-success 0.8s ease-out;
        }
    </style>
    @vite('resources/css/app.css')
</head>

<body class="min-h-screen flex flex-col bg-dark-primary">

    @include('partials.nav')

    <main
        class="flex-1 flex items-center justify-center {{ request()->routeIs('index') ? '' : 'mt-16 px-4 md:px-10 lg:px-10 p-4' }}">
        @yield('content')
    </main>

    {{--  @if (!request()->routeIs('index'))
        @include('partials.footer')
    @endif --}}
    @include('partials.footer')
    @stack('scripts')
    <script src="https://cdn.jsdelivr.net/npm/flowbite@4.0.1/dist/flowbite.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const track = document.getElementById('swipe-track')
            const thumb = document.getElementById('swipe-thumb')
            const textMask = document.getElementById('swipe-text-mask')
            const DRAG_PADDING = 2


            let dragging = false
            let startX = 0
            let currentX = 0
            let maxX = 0
            let triggered = false

            const updateMax = () => {
                const trackRect = track.getBoundingClientRect()
                const thumbRect = thumb.getBoundingClientRect()

                const style = getComputedStyle(track)
                const paddingLeft = parseFloat(style.paddingLeft)
                const paddingRight = parseFloat(style.paddingRight)

                maxX =
                    trackRect.width -
                    thumbRect.width -
                    paddingLeft -
                    paddingRight -
                    DRAG_PADDING
            }


            updateMax()
            window.addEventListener('resize', updateMax)

            thumb.addEventListener('pointerdown', (e) => {
                dragging = true
                triggered = false
                startX = e.clientX - currentX
                thumb.setPointerCapture(e.pointerId)

                thumb.style.transition = 'none'
                thumb.classList.add('pulse-drag')
                track.classList.add('track-pulse')
            })

            thumb.addEventListener('pointermove', (e) => {
                if (!dragging) return

                const delta = e.clientX - startX
                currentX = Math.max(
                    DRAG_PADDING,
                    Math.min(delta, maxX)
                )
                thumb.style.transform = `translateX(${currentX}px)`

                textMask.style.width = `${currentX + thumb.offsetWidth+18}px`
            })

            const endDrag = () => {
                if (!dragging) return
                dragging = false

                thumb.classList.remove('pulse-drag')
                track.classList.remove('track-pulse')

                thumb.style.transition = 'transform 0.25s ease-out'

                if (currentX >= maxX * 0.9) {
                    thumb.classList.add('pulse-success')
                    thumb.style.backgroundColor = '#22c55e'
                    textMask.style.width = '100%'

                    setTimeout(() => {
                        window.location.href = '/menu'
                    }, 450)
                } else {
                    currentX = 0
                    thumb.style.transform = 'translateX(0)'
                    textMask.style.width = '0px'
                }
            }

            thumb.addEventListener('pointerup', endDrag)
            thumb.addEventListener('pointercancel', endDrag)
        })
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const container = document.querySelector(".reel");
            const items = document.querySelectorAll(".reel-item");

            if (!container || !items.length) return;

            const observer = new IntersectionObserver(
                (entries) => {
                    entries.forEach(entry => {
                        entry.target.classList.toggle(
                            "active",
                            entry.intersectionRatio > 0.6
                        );
                    });
                }, {
                    root: container,
                    threshold: [0.6]
                }
            );

            items.forEach(item => observer.observe(item));
        });
    </script>


</body>


</html>
