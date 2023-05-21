@extends('layouts.layout-home', ["active" => $active])

@section('body')
    <div class="flex flex-col gap-10">
        <div class="flex flex-col text-2xl gap-2" id="about-us">
            <h2 class="font-bold text-center">Apa itu IniClothing.Indo?</h2>
            <p>Website ini dibuat dengan tujuan untuk memperkenalkan kepada Anda berbagai macam brand lokal Indonesia yang
                patut untuk diacungi jempol. Kami berharap bahwa melalui website ini, Anda dapat lebih mengenal dan
                memberikan apresiasi terhadap produk-produk dari Indonesia.</p>
            <p>Di website ini, Anda akan menemukan informasi tentang berbagai macam brand lokal Indonesia yang terkenal dan
                memiliki kualitas yang sangat baik. Mulai dari produk makanan dan minuman, pakaian, aksesori, hingga
                barang-barang kerajinan tangan yang indah dan unik, semuanya dapat Anda temukan di sini. Kami juga akan
                memberikan informasi mengenai sejarah dan filosofi di balik produk-produk dari brand lokal Indonesia,
                sehingga Anda dapat lebih menghargai setiap produk yang dihasilkan.</p>
        </div>
        <div class="flex flex-col text-2xl gap-2 ">
            <p class="font-bold text-center">Available Reviews</p>
            <div class="flex flex-wrap justify-center gap-3 mt-4">
                <div class="image cursor-pointer hover:opacity-80 border border-gray-300" onclick="redirect('{{ route('katalog') }}')">
                    <img src="{{ asset('maternal/logo.png') }}" alt="" class="h-full object-cover">
                </div>
                <div class="image cursor-pointer hover:opacity-80 border border-gray-300" onclick="redirect('{{ route('katalog') }}')">
                    <img src="{{ asset('erigo/logo.png') }}" alt=""
                        class="h-full object-cover">
                </div>
                <div class="image cursor-pointer hover:opacity-80 border border-gray-300" onclick="redirect('{{ route('katalog') }}')">
                    <img src="{{ asset('abigail/logo.png') }}" alt=""
                        class="h-full object-cover">
                </div>
                <div class="image cursor-pointer hover:opacity-80 border border-gray-300" onclick="redirect('{{ route('katalog') }}')">
                    <img src="{{ asset('rucas/logo.png') }}" alt=""
                        class="h-full object-cover">
                </div>
                <div class="image cursor-pointer hover:opacity-80 border border-gray-300" onclick="redirect('{{ route('katalog') }}')">
                    <img src="{{ asset('starcross/logo.png') }}" alt=""
                        class="h-full object-cover">
                </div>
            </div>
        </div>
        <div id="contact" class="flex flex-col items-center gap-2">
            <p class="text-3xl font-bold">Contact</p>
            <div class="grid grid-cols-2 grid-rows-3 text-2xl w-[30%]">
                <p>Address</p>
                <p>Politeknik Negeri Samarinda</p>
                <p>Phone</p>
                <p>081234567890</p>
                <p>Email</p>
                <p>IniClothing.Indo</p>
            </div>
        </div>
    </div>
    <script>
        const redirect = (route) => {
            window.location.href = route;
        }
    </script>
@endsection
