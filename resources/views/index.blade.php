@extends('layouts.layout-home')

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
            <div class="grid grid-cols-3 gap-3 h-[800px]">
                <div class="cursor-pointer hover:opacity-80 border border-gray-300">
                    <img src="{{ asset('CHINO-PANTS-SIRIUS-BLACK-1.webp') }}" alt="" class="h-full object-cover">
                </div>
                <div class="cursor-pointer hover:opacity-80 border border-gray-300">
                    <img src="{{ asset('id-11134201-23020-v19cztul8wnv3f_590x.webp') }}" alt=""
                        class="h-full object-cover">
                </div>
                <div class="cursor-pointer hover:opacity-80 border border-gray-300">
                    <img src="{{ asset('WTM0039256WATERFALLBLACKIDR125.000.webp') }}" alt=""
                        class="h-full object-cover">
                </div>
            </div>
        </div>
        <div class="flex flex-col items-center gap-2">
            <p class="text-3xl font-bold">Contact</p>
            <div class="grid grid-cols-2 grid-rows-3 text-2xl w-1/3">
                <p>Address</p>
                <p>Politeknik Negeri Samarinda</p>
                <p>Phone</p>
                <p>081234567890</p>
                <p>Email</p>
                <p>IniClothing.Indo</p>
            </div>
        </div>
    </div>
@endsection
