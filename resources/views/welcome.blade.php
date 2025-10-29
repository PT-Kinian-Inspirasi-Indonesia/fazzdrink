@extends('welcome.layouts.app')

@section('content')
{{-- HERO VIDEO --}}
<section class="relative bg-red-50">
    <video
        autoplay
        muted
        loop
        playsinline
        class="w-full object-cover h-[300px] sm:h-[400px] md:h-[500px]"
    >
        <source src="{{ asset('images/Hero.mp4') }}" type="video/mp4" />
        Browser Anda tidak mendukung video.
    </video>
    <div class="absolute inset-0 bg-gradient-to-b from-black/50 via-red-900/40 to-black/60 flex items-center justify-center text-center px-4">
        <h2 class="text-white text-2xl sm:text-4xl md:text-5xl font-extrabold leading-relaxed tracking-wide drop-shadow-lg">
            Selamat Datang di FazzDrink :
            <br />
            <span class="text-sm sm:text-lg md:text-xl font-medium text-red-200 drop-shadow-md italic">
                – lo lemot kalo lagi haus –
            </span>
        </h2>
    </div>
</section>

{{-- MENU PER KATEGORI --}}
<section class="container mx-auto px-4 sm:px-6 py-12 sm:py-16 bg-red-50">
    <h2 class="text-2xl sm:text-3xl font-extrabold text-center mb-8 sm:mb-12 tracking-wide text-red-800">
        OUR MENU
    </h2>

    @foreach($categories as $category)
    <div class="mb-10 sm:mb-16">
        {{-- Judul kategori --}}
        <div class="flex items-center mb-6 sm:mb-8">
            <div class="flex-grow border-t border-red-300"></div>
            <h3 class="mx-2 sm:mx-4 text-lg sm:text-2xl font-semibold text-red-800 tracking-wide text-center">
                {{ strtoupper($category->name) }}
            </h3>
            <div class="flex-grow border-t border-red-300"></div>
        </div>

        {{-- Grid produk --}}
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 xl:grid-cols-6 gap-4 sm:gap-6">
            @forelse($category->products as $product)
            <div class="bg-white shadow-xl rounded-2xl overflow-hidden transform transition duration-500 hover:scale-105 hover:shadow-2xl border border-red-100">
                <img
                    src="{{ asset('storage/' . $product->image) }}"
                    alt="{{ $product->name }}"
                    class="w-full h-32 sm:h-40 md:h-48 object-cover"
                />
                <div class="p-3 sm:p-5 bg-gradient-to-b from-white to-red-50">
                    <h3 class="text-xs sm:text-sm md:text-lg font-bold text-red-900 truncate">
                        {{ strtoupper($product->name) }}
                    </h3>
                    <p class="text-red-700 font-semibold mt-1 sm:mt-2 text-xs sm:text-sm md:text-base">
                        Rp {{ number_format($product->price, 0, ',', '.') }}
                    </p>
                </div>
            </div>
            @empty
            <p class="col-span-full text-center text-red-500 italic">
                Belum ada produk di kategori ini.
            </p>
            @endforelse
        </div>
    </div>
    @endforeach
</section>

{{-- SECTION: PILIHAN PAKET --}}
<section class="bg-gradient-to-b from-red-50 to-red-100 py-12">
    <div class="container mx-auto px-6 text-center">
        <h2 class="text-2xl font-bold mb-10 text-red-800">PILIHAN PAKET KOPI</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            {{-- Paket 50-100 Cups --}}
            <div class="bg-white rounded-2xl shadow-xl p-6 border border-red-200 transform transition hover:scale-105 hover:shadow-2xl">
                <h3 class="text-xl font-bold mb-4 text-red-800">50 - 100 CUPS</h3>
                <p class="text-lg font-semibold text-red-600 mb-4">
                    Start from Rp 500.000
                </p>
                <ul class="text-left text-sm space-y-2 mb-6 text-red-700">
                    <li><strong>Maximum Distance (Free Delivery):</strong> 10 km</li>
                    <li><strong>Maximum Standby Duration:</strong> 1 Hour</li>
                    <li><strong>FazzDrink Cart Included:</strong> Yes</li>
                    <li><strong>Number of Barista FazzDrink:</strong> 1</li>
                    <li><strong>Booking Time:</strong> D-2</li>
                </ul>
                <a href="{{ route('login') }}" class="inline-block bg-gradient-to-r from-red-600 to-red-700 hover:from-red-700 hover:to-red-800 text-white font-bold py-3 px-6 rounded-full transition shadow-lg hover:shadow-xl">
                    BOOK NOW
                </a>
            </div>

            {{-- Paket 101-200 Cups --}}
            <div class="bg-white rounded-2xl shadow-xl p-6 border border-red-200 transform transition hover:scale-105 hover:shadow-2xl">
                <h3 class="text-xl font-bold mb-4 text-red-800">101 - 200 CUPS</h3>
                <p class="text-lg font-semibold text-red-600 mb-4">
                    Start from Rp 1.000.000
                </p>
                <ul class="text-left text-sm space-y-2 mb-6 text-red-700">
                    <li><strong>Maximum Distance (Free Delivery):</strong> 10 km</li>
                    <li><strong>Maximum Standby Duration:</strong> 1.5 Hour</li>
                    <li><strong>FazzDrink Cart Included:</strong> Yes</li>
                    <li><strong>Number of Barista FazzDrink:</strong> 2</li>
                    <li><strong>Booking Time:</strong> D-2</li>
                </ul>
                <a href="{{ route('login') }}" class="inline-block bg-gradient-to-r from-red-600 to-red-700 hover:from-red-700 hover:to-red-800 text-white font-bold py-3 px-6 rounded-full transition shadow-lg hover:shadow-xl">
                    BOOK NOW
                </a>
            </div>

            {{-- Paket 201-300 Cups --}}
            <div class="bg-white rounded-2xl shadow-xl p-6 border border-red-200 transform transition hover:scale-105 hover:shadow-2xl">
                <h3 class="text-xl font-bold mb-4 text-red-800">201 - 300 CUPS</h3>
                <p class="text-lg font-semibold text-red-600 mb-4">
                    Start from Rp 2.000.000
                </p>
                <ul class="text-left text-sm space-y-2 mb-6 text-red-700">
                    <li><strong>Maximum Distance (Free Delivery):</strong> 10 km</li>
                    <li><strong>Maximum Standby Duration:</strong> 2 Hour</li>
                    <li><strong>FazzDrink Cart Included:</strong> Yes</li>
                    <li><strong>Number of Barista FazzDrink:</strong> 3</li>
                    <li><strong>Booking Time:</strong> D-2</li>
                </ul>
                <a href="{{ route('login') }}" class="inline-block bg-gradient-to-r from-red-600 to-red-700 hover:from-red-700 hover:to-red-800 text-white font-bold py-3 px-6 rounded-full transition shadow-lg hover:shadow-xl">
                    BOOK NOW
                </a>
            </div>
        </div>
    </div>
</section>

{{-- SECTION: TESTIMONI --}}
<section class="bg-gradient-to-b from-red-100 to-red-50 py-16">
    <div class="container mx-auto px-6 text-center">
        <h2 class="text-3xl md:text-4xl font-extrabold mb-12 uppercase text-red-800">
            What Our Customers Are Saying About FazzDrink
        </h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            {{-- Testimoni 1 --}}
            <div class="bg-white p-6 rounded-2xl shadow-xl border border-red-200">
                <div class="text-4xl text-red-600 mb-4">“</div>
                <p class="text-red-900 text-base mb-4">
                    Now every time I have a company event, I always order FazzDrink Party! It’s so convenient, especially now I can order it via the FazzDrink app.
                </p>
                <p class="font-bold text-red-600 uppercase">– Bayu</p>
            </div>
            {{-- Gambar Tengah --}}
            <div>
                <img src="{{ asset('images/Team.jpeg') }}" alt="FazzDrink Team" class="rounded-2xl w-full object-cover h-full max-h-[360px] shadow-xl border border-red-200" />
            </div>
            {{-- Testimoni 2 --}}
            <div class="bg-white p-6 rounded-2xl shadow-xl border border-red-200">
                <div class="text-4xl text-red-600 mb-4">“</div>
                <p class="text-red-900 text-base mb-4">
                    I had FazzDrink Party for my wedding, and my guests gave lots of compliments! They said it’s so unique and the drink is good.
                </p>
                <p class="font-bold text-red-600 uppercase">– Syafira</p>
            </div>
            {{-- Gambar Tambahan --}}
            <div>
                <img src="{{ asset('images/Booth.jpeg') }}" alt="FazzDrink Booth" class="rounded-2xl w-full object-cover h-full max-h-[360px] shadow-xl border border-red-200" />
            </div>
            {{-- Testimoni 3 --}}
            <div class="bg-white p-6 rounded-2xl shadow-xl border border-red-200">
                <div class="text-4xl text-red-600 mb-4">“</div>
                <p class="text-red-900 text-base mb-4">
                    Everyone was surprised when FazzDrink arrived at our office. Super fun and the coffee tastes amazing!
                </p>
                <p class="font-bold text-red-600 uppercase">– Raka</p>
            </div>
        </div>
    </div>
</section>

{{-- SOCIAL MEDIA --}}
<section class="bg-gradient-to-r from-red-600 to-red-700 text-white py-12">
    <div class="container mx-auto px-4 sm:px-6 text-center">
        <h2 class="text-lg sm:text-2xl font-bold mb-6">TEMUKAN KAMI DI SOSIAL MEDIA</h2>
        <div class="flex justify-center gap-8">
            {{-- Instagram --}}
            <a href="https://www.instagram.com/fazzdrink.id?igsh=Z2ljdHQ4Y2R6NmRk&utm_source=qr" target="_blank" class="flex flex-col items-center hover:scale-110 transition-transform">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 mb-2" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M7.75 2h8.5A5.75 5.75 0 0 1 22 7.75v8.5A5.75 5.75 0 0 1 16.25 22h-8.5A5.75 5.75 0 0 1 2 16.25v-8.5A5.75 5.75 0 0 1 7.75 2Zm0 1.5A4.25 4.25 0 0 0 3.5 7.75v8.5A4.25 4.25 0 0 0 7.75 20.5h8.5a4.25 4.25 0 0 0 4.25-4.25v-8.5A4.25 4.25 0 0 0 16.25 3.5h-8.5ZM12 7a5 5 0 1 1 0 10 5 5 0 0 1 0-10Zm0 1.5a3.5 3.5 0 1 0 0 7 3.5 3.5 0 0 0 0-7ZM17.5 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2Z"/>
                </svg>
                <span class="font-semibold">Instagram</span>
            </a>

            {{-- TikTok --}}
            <a href="https://www.tiktok.com/@fazzdrink.id?_t=ZS-8zjvAHkQLeU&_r=1" target="_blank" class="flex flex-col items-center hover:scale-110 transition-transform">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 mb-2" viewBox="0 0 48 48">
                    <path fill="currentColor" d="M30 2h6a10 10 0 0 0 10 10v6c-4.5 0-8.5-1.5-11.7-4v18.1c0 7.3-5.9 13.2-13.3 13.2S8 39.4 8 32.1s5.9-13.2 13.3-13.2c1.1 0 2.1.1 3 .4v6.5c-.9-.4-2-.6-3-.6-3.7 0-6.8 3-6.8 6.9s3.1 6.9 6.8 6.9c3.8 0 6.9-3 6.9-6.9V2Z"/>
                </svg>
                <span class="font-semibold">TikTok</span>
            </a>
        </div>
    </div>
</section>

{{-- HOW IT WORKS --}}
<section id="how-it-works" class="bg-gradient-to-b from-red-50 to-white py-20">
    <div class="container mx-auto px-6 text-center">
        <h2 class="text-3xl md:text-4xl font-extrabold text-red-800 mb-12 tracking-wide">
            How It Works
        </h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
            {{-- Step 1 --}}
            <div class="bg-white shadow-xl rounded-2xl p-8 transform transition hover:scale-105 hover:shadow-2xl border border-red-200">
                <div class="flex justify-center mb-6">
                    <div class="bg-gradient-to-r from-red-100 to-red-200 text-red-700 w-16 h-16 flex items-center justify-center rounded-full text-2xl font-bold shadow-lg">1</div>
                </div>
                <h3 class="text-xl font-semibold text-red-800 mb-2">Choose Your Drink</h3>
                <p class="text-red-700">
                    Browse our menu and pick your favorite coffee, non-coffee, or juice.
                </p>
            </div>

            {{-- Step 2 --}}
            <div class="bg-white shadow-xl rounded-2xl p-8 transform transition hover:scale-105 hover:shadow-2xl border border-red-200">
                <div class="flex justify-center mb-6">
                    <div class="bg-gradient-to-r from-red-100 to-red-200 text-red-700 w-16 h-16 flex items-center justify-center rounded-full text-2xl font-bold shadow-lg">2</div>
                </div>
                <h3 class="text-xl font-semibold text-red-800 mb-2">Set Your Location</h3>
                <p class="text-red-700">
                    Pinpoint your exact location so our Barista FazzDrink can deliver right to your door.
                </p>
            </div>

            {{-- Step 3 --}}
            <div class="bg-white shadow-xl rounded-2xl p-8 transform transition hover:scale-105 hover:shadow-2xl border border-red-200">
                <div class="flex justify-center mb-6">
                    <div class="bg-gradient-to-r from-red-100 to-red-200 text-red-700 w-16 h-16 flex items-center justify-center rounded-full text-2xl font-bold shadow-lg">3</div>
                </div>
                <h3 class="text-xl font-semibold text-red-800 mb-2">Enjoy Seamless Payment</h3>
                <p class="text-red-700">
                    Pay easily with GoPay, OVO, or cashless method. Sit back and relax!
                </p>
            </div>
        </div>
    </div>
</section>
@endsection