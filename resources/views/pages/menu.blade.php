@extends('layouts.app')

@section('title', 'Menu')

@section('content')
    <div class="w-full">
        <form
            class="flex items-center space-x-2 my-6 w-full max-w-full md:max-w-md lg:max-w-lg 
           justify-start  relative">
            <div class="relative w-full">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-5 h-5 text-white/60" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m21 21-3.5-3.5M17 10a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z" />
                    </svg>
                </div>
                <input type="text" id="simple-search"
                    class="block w-full rounded-xl bg-dark-secondary border border-white/20 text-white placeholder-white/60 px-10 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-red-500 focus:border-red-500 transition"
                    placeholder="Search menu..." required />
            </div>

            <button type="submit"
                class="inline-flex items-center justify-center shrink-0 w-10 h-10 rounded-xl 
               bg-white/10 backdrop-blur-sm text-white shadow-md hover:bg-red-500 
               focus:ring-2 focus:ring-brand/50 transition">
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-width="2" d="m21 21-3.5-3.5M17 10a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z" />
                </svg>
                <span class="sr-only">Search</span>
            </button>
        </form>

        <div class="relative my-8 overflow-x-auto">
            
            <img src="{{ asset('picture/Ellipse 2.png') }}" alt="Ellipse background"
            class="absolute -z-10 top-10 left-1/2 transform -translate-x-1/2
            w-[350px] sm:w-[600px] md:hidden pointer-events-none">
            <h2 class="text-2xl font-bold text-white mb-4">Paket Hemat</h2>
            
            <div id="paket-reel"
                class="flex gap-6 overflow-x-auto snap-x snap-mandatory scroll-smooth overscroll-x-contain px-6 py-10 md:overflow-visible md:snap-none md:px-0 md:py-0">
                @foreach ($packages as $package)
                    <div class="reel-item shrink-0 aspect-3/4 sm:w-56 md:w-80 min-h-80 md:min-h-[400px]">
                        <x-menu.package-card :package="$package" />
                    </div>
                @endforeach
            </div>
        </div>


        <div class="w-full grid grid-cols-12 gap-8">
            <div class="col-span-12 2xl:col-span-10 mb-8 order-2 2xl:order-1">
                <h2 class="text-2xl font-bold text-white mb-4">Makanan</h2>
                <div class="2xl:h-[80vh] 2xl:overflow-auto 2xl:pr-4">
                    <div class="grid gap-6 grid-cols-[repeat(auto-fill,minmax(260px,1fr))]">
                        @foreach ($foodMenus as $foodMenu)
                            <x-menu.food-card :food-menu="$foodMenu" />
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="col-span-12 2xl:col-span-2 mb-8 order-1 2xl:order-2">
                <h2 class="text-2xl font-bold text-white mb-4">Minuman</h2>
                <div class="2xl:h-[80vh] 2xl:overflow-auto">
                    <div
                        class="flex 2xl:flex-col gap-4 pb-4 2xl:pb-0 2xl:pr-2 overflow-x-auto 2xl:overflow-x-visible scrollbar-hide">
                        @foreach ($drinkMenus as $drinkMenu)
                            <x-menu.drink-card :drink-menu="$drinkMenu" />
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="ratingModal" class="fixed inset-0 z-50 hidden items-center justify-center bg-black/70 backdrop-blur-sm">
        <div
            class="bg-linear-to-br from-gray-900 to-gray-800 rounded-2xl shadow-2xl w-full max-w-md mx-4 overflow-hidden border border-white/10">
            <div class="bg-linear-to-r from-amber-500 to-orange-500 p-6 relative overflow-hidden">
                <div class="absolute inset-0 bg-white/10 backdrop-blur-sm"></div>
                <div class="relative z-10">
                    <h3 class="text-2xl font-bold text-white mb-1">Beri Rating</h3>
                    <p id="modalItemName" class="text-white/90 text-sm"></p>
                </div>
                <button onclick="closeRatingModal()"
                    class="absolute top-4 right-4 text-white/80 hover:text-white transition-colors z-10">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <div class="p-6">
                <div class="flex justify-center gap-3 mb-6">
                    @for ($i = 1; $i <= 5; $i++)
                        <button onclick="setRating({{ $i }})"
                            class="rating-star transform transition-all duration-300 hover:scale-125 focus:outline-none group">
                            <svg class="w-12 h-12 text-gray-600 group-hover:text-amber-400 transition-colors duration-200"
                                fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                        </button>
                    @endfor
                </div>

                <div class="text-center mb-6">
                    <p class="text-gray-400 text-sm mb-1">Rating Anda</p>
                    <p id="ratingValue" class="text-4xl font-bold text-amber-400">0</p>
                    <p id="ratingText" class="text-gray-400 text-sm mt-1"></p>
                </div>

                <textarea id="ratingComment" placeholder="Tulis komentar Anda (opsional)..."
                    class="w-full bg-gray-800/50 border border-gray-700 rounded-lg px-4 py-3 text-white placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-amber-500 focus:border-transparent resize-none"
                    rows="3"></textarea>

                <button onclick="submitRating()"
                    class="w-full mt-4 bg-linear-to-r from-amber-500 to-orange-500 hover:from-amber-600 hover:to-orange-600 text-white font-bold py-3 rounded-lg transition-all duration-300 transform hover:scale-105 shadow-lg">
                    Kirim Rating
                </button>
            </div>
        </div>
    </div>


    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const container = document.getElementById("paket-reel");
            const items = container.querySelectorAll(".reel-item");

            function updateActiveItem() {
                const containerWidth = container.offsetWidth;
                const containerScrollLeft = container.scrollLeft;

                let closest = null;
                let closestDistance = Infinity;

                items.forEach(item => {
                    const itemLeft = item.offsetLeft;
                    const itemCenter = itemLeft + item.offsetWidth / 2;

                    const distance = Math.abs((containerScrollLeft + containerWidth / 2) - itemCenter);

                    if (distance < closestDistance) {
                        closestDistance = distance;
                        closest = item;
                    }

                    item.classList.remove("active");
                });

                if (closest) {
                    closest.classList.add("active");

                    const scrollTo = closest.offsetLeft - (containerWidth / 2) + (closest.offsetWidth / 2);
                    container.scrollTo({
                        left: scrollTo,
                        behavior: "smooth"
                    });
                }
            }

            container.addEventListener("scroll", () => requestAnimationFrame(updateActiveItem));
            updateActiveItem();
        });
    </script>

    <script>
        let scrollTimeout;

        container.addEventListener("scroll", () => {
            clearTimeout(scrollTimeout);

            scrollTimeout = setTimeout(() => {
                const center = container.scrollLeft + container.offsetWidth / 2;

                let closest = null;
                let minDistance = Infinity;

                items.forEach(item => {
                    const box = item.getBoundingClientRect();
                    const itemCenter =
                        box.left + box.width / 2 + container.scrollLeft;

                    const distance = Math.abs(center - itemCenter);

                    if (distance < minDistance) {
                        minDistance = distance;
                        closest = item;
                    }
                });

                if (closest) {
                    closest.scrollIntoView({
                        behavior: "smooth",
                        inline: "center"
                    });
                }
            }, 120);
        });
    </script>


    <script>
        let currentRating = 0;
        let currentItemId = null;

        const ratingTexts = {
            1: "Sangat Buruk 😞",
            2: "Buruk 😕",
            3: "Cukup 😐",
            4: "Bagus 😊",
            5: "Sangat Bagus! 🤩"
        };

        function openRatingModal(itemId, itemName) {
            currentItemId = itemId;
            document.getElementById('modalItemName').textContent = itemName;
            document.getElementById('ratingModal').classList.remove('hidden');
            document.getElementById('ratingModal').classList.add('flex');
            resetRating();
        }

        function closeRatingModal() {
            document.getElementById('ratingModal').classList.add('hidden');
            document.getElementById('ratingModal').classList.remove('flex');
            resetRating();
        }

        function setRating(rating) {
            currentRating = rating;
            document.getElementById('ratingValue').textContent = rating;
            document.getElementById('ratingText').textContent = ratingTexts[rating];

            const stars = document.querySelectorAll('.rating-star svg');
            stars.forEach((star, index) => {
                if (index < rating) {
                    star.classList.remove('text-gray-600');
                    star.classList.add('text-amber-400');
                } else {
                    star.classList.remove('text-amber-400');
                    star.classList.add('text-gray-600');
                }
            });
        }

        function resetRating() {
            currentRating = 0;
            document.getElementById('ratingValue').textContent = '0';
            document.getElementById('ratingText').textContent = '';
            document.getElementById('ratingComment').value = '';

            const stars = document.querySelectorAll('.rating-star svg');
            stars.forEach(star => {
                star.classList.remove('text-amber-400');
                star.classList.add('text-gray-600');
            });
        }

        function submitRating() {
            if (currentRating === 0) {
                alert('Silakan pilih rating terlebih dahulu!');
                return;
            }

            const comment = document.getElementById('ratingComment').value;

            fetch('/api/ratings', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                    },
                    body: JSON.stringify({
                        item_id: currentItemId,
                        rating: currentRating,
                        comment: comment
                    })
                })
                .then(response => response.json())
                .then(data => {
                    alert('Terima kasih atas rating Anda! ⭐');
                    closeRatingModal();
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('Terjadi kesalahan. Silakan coba lagi.');
                });
        }

        document.getElementById('ratingModal').addEventListener('click', function(e) {
            if (e.target === this) {
                closeRatingModal();
            }
        });
    </script>
@endsection
