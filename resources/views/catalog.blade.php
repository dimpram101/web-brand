@extends('layouts.layout-home')

@section('body')
    <style>
        .slider {
            transition: transform 0.3s ease-in-out;
        }

        .card {
            flex: 0 0 25%;
            padding: 10px;
            box-sizing: border-box;
        }

        .prev-button,
        .next-button {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            padding: 10px;
            border: none;
            cursor: pointer;
        }

        .prev-button {
            left: 10px;
        }

        .next-button {
            right: 10px;
        }
    </style>

    <div class="flex flex-col gap-16 ">
        <div class="flex flex-col gap-1">
            <div class="flex flex-row items-center gap-3">
                <img src="{{ asset('maternal/logo.png') }}" class="w-20 h-20 object-cover">
                <h2 class="text-2xl font-bold flex flex-row">Maternal</h2>
            </div>
            <div class="carousel w-full overflow-hidden relative">
                <div class="slider h-[500px] flex">
                    <div class="card bg-gray-200">
                        <img src="{{ asset('maternal/1.png') }}" class="h-full w-full object-cover rounded-xl"
                            alt="Image 1">
                    </div>
                    <div class="card bg-gray-200">
                        <img src="{{ asset('maternal/2.png') }}" class="h-full w-full object-cover rounded-xl"
                            alt="Image 2">
                    </div>
                    <div class="card bg-gray-200">
                        <img src="{{ asset('maternal/3.png') }}" class="h-full w-full object-cover rounded-xl"
                            alt="Image 3">
                    </div>
                    <div class="card bg-gray-200">
                        <img src="{{ asset('maternal/4.png') }}" class="h-full w-full object-cover rounded-xl"
                            alt="Image 4">
                    </div>
                    <div class="card bg-gray-200">
                        <img src="{{ asset('maternal/5.png') }}" class="h-full w-full object-cover rounded-xl"
                            alt="Image 5">
                    </div>
                    <div class="card bg-gray-200">
                        <img src="{{ asset('maternal/6.png') }}" class="h-full w-full object-cover rounded-xl"
                            alt="Image 6">
                    </div>
                </div>
                <button class="prev-button bg-orange-500 font-bold rounded"> {{ '<' }} </button>
                <button class="next-button bg-orange-500 font-bold rounded"> {{ '>' }} </button>
            </div>
        </div>
        <div class="flex flex-col gap-1">
            <div class="flex flex-row items-center gap-3">
                <img src="{{ asset('abigail/logo.png') }}" class="w-20 h-20 object-cover">
                <h2 class="text-2xl font-bold flex flex-row">Abigail</h2>
            </div>
            <div class="carousel w-full overflow-hidden relative">
                <div class="slider h-[500px] flex">
                    <div class="card bg-gray-200">
                        <img src="{{ asset('abigail/1.png') }}" class="h-full w-full object-cover rounded-xl"
                            alt="Image 1">
                    </div>
                    <div class="card bg-gray-200">
                        <img src="{{ asset('abigail/2.png') }}" class="h-full w-full object-cover rounded-xl"
                            alt="Image 2">
                    </div>
                    <div class="card bg-gray-200">
                        <img src="{{ asset('abigail/3.png') }}" class="h-full w-full object-cover rounded-xl"
                            alt="Image 3">
                    </div>
                    <div class="card bg-gray-200">
                        <img src="{{ asset('abigail/4.png') }}" class="h-full w-full object-cover rounded-xl"
                            alt="Image 4">
                    </div>
                    <div class="card bg-gray-200">
                        <img src="{{ asset('abigail/5.png') }}" class="h-full w-full object-cover rounded-xl"
                            alt="Image 5">
                    </div>
                    <div class="card bg-gray-200">
                        <img src="{{ asset('abigail/6.png') }}" class="h-full w-full object-cover rounded-xl"
                            alt="Image 6">
                    </div>
                </div>
                <button class="prev-button bg-orange-500 font-bold rounded"> {{ '<' }} </button>
                <button class="next-button bg-orange-500 font-bold rounded"> {{ '>' }} </button>
            </div>
        </div>
        <div class="flex flex-col gap-1">
            <div class="flex flex-row items-center gap-3">
                <img src="{{ asset('erigo/logo.png') }}" class="w-20 h-20 object-cover"> 
                <h2 class="text-2xl font-bold flex flex-row">Erigo</h2>
            </div>
            <div class="carousel w-full overflow-hidden relative">
                <div class="slider h-[500px] flex">
                    <div class="card bg-gray-200">
                        <img src="{{ asset('erigo/1.png') }}" class="h-full w-full object-cover rounded-xl" alt="Image 1">
                    </div>
                    <div class="card bg-gray-200">
                        <img src="{{ asset('erigo/2.png') }}" class="h-full w-full object-cover rounded-xl" alt="Image 2">
                    </div>
                    <div class="card bg-gray-200">
                        <img src="{{ asset('erigo/3.png') }}" class="h-full w-full object-cover rounded-xl" alt="Image 3">
                    </div>
                    <div class="card bg-gray-200">
                        <img src="{{ asset('erigo/4.png') }}" class="h-full w-full object-cover rounded-xl" alt="Image 4">
                    </div>
                    <div class="card bg-gray-200">
                        <img src="{{ asset('erigo/5.png') }}" class="h-full w-full object-cover rounded-xl" alt="Image 5">
                    </div>
                    <div class="card bg-gray-200">
                        <img src="{{ asset('erigo/6.png') }}" class="h-full w-full object-cover rounded-xl" alt="Image 6">
                    </div>
                </div>
                <button class="prev-button bg-orange-500 font-bold rounded"> {{ '<' }} </button>
                <button class="next-button bg-orange-500 font-bold rounded"> {{ '>' }} </button>
            </div>
        </div>
        <div class="flex flex-col gap-1">
            <div class="flex flex-row items-center gap-3">
                <img src="{{ asset('rucas/logo.png') }}" class="w-20 h-20 object-cover"> 
                <h2 class="text-2xl font-bold flex flex-row">Rucas</h2>
            </div>
            <div class="carousel w-full overflow-hidden relative">
                <div class="slider h-[500px] flex">
                    <div class="card bg-gray-200">
                        <img src="{{ asset('rucas/1.png') }}" class="h-full w-full object-cover rounded-xl"
                            alt="Image 1">
                    </div>
                    <div class="card bg-gray-200">
                        <img src="{{ asset('rucas/2.png') }}" class="h-full w-full object-cover rounded-xl"
                            alt="Image 2">
                    </div>
                    <div class="card bg-gray-200">
                        <img src="{{ asset('rucas/3.png') }}" class="h-full w-full object-cover rounded-xl"
                            alt="Image 3">
                    </div>
                    <div class="card bg-gray-200">
                        <img src="{{ asset('rucas/4.png') }}" class="h-full w-full object-cover rounded-xl"
                            alt="Image 4">
                    </div>
                    <div class="card bg-gray-200">
                        <img src="{{ asset('rucas/5.png') }}" class="h-full w-full object-cover rounded-xl"
                            alt="Image 5">
                    </div>
                    <div class="card bg-gray-200">
                        <img src="{{ asset('abigail/6.png') }}" class="h-full w-full object-cover rounded-xl"
                            alt="Image 6">
                    </div>
                </div>
                <button class="prev-button bg-orange-500 font-bold rounded"> {{ '<' }} </button>
                <button class="next-button bg-orange-500 font-bold rounded"> {{ '>' }} </button>
            </div>
        </div>
        <div class="flex flex-col gap-1">
            <div class="flex flex-row items-center gap-3">
                <img src="{{ asset('starcross/logo.png') }}" class="w-20 h-20 object-cover"> 
                <h2 class="text-2xl font-bold flex flex-row">Starcross</h2>
            </div>
            <div class="carousel w-full overflow-hidden relative">
                <div class="slider h-[500px] flex">
                    <div class="card bg-gray-200">
                        <img src="{{ asset('starcross/1.png') }}" class="h-full w-full object-cover rounded-xl"
                            alt="Image 1">
                    </div>
                    <div class="card bg-gray-200">
                        <img src="{{ asset('starcross/2.png') }}" class="h-full w-full object-cover rounded-xl"
                            alt="Image 2">
                    </div>
                    <div class="card bg-gray-200">
                        <img src="{{ asset('starcross/3.png') }}" class="h-full w-full object-cover rounded-xl"
                            alt="Image 3">
                    </div>
                    <div class="card bg-gray-200">
                        <img src="{{ asset('starcross/4.png') }}" class="h-full w-full object-cover rounded-xl"
                            alt="Image 4">
                    </div>
                    <div class="card bg-gray-200">
                        <img src="{{ asset('starcross/5.png') }}" class="h-full w-full object-cover rounded-xl"
                            alt="Image 5">
                    </div>
                    <div class="card bg-gray-200">
                        <img src="{{ asset('starcross/6.png') }}" class="h-full w-full object-cover rounded-xl"
                            alt="Image 6">
                    </div>
                </div>
                <button class="prev-button bg-orange-500 font-bold rounded"> {{ '<' }} </button>
                <button class="next-button bg-orange-500 font-bold rounded"> {{ '>' }} </button>
            </div>
        </div>
    </div>


    <script>
        const carousels = document.querySelectorAll('.carousel');

        carousels.forEach((carousel) => {
            const slider = carousel.querySelector('.slider');
            const prevButton = carousel.querySelector('.prev-button');
            const nextButton = carousel.querySelector('.next-button');
            let translateValue = 0;
            let slideWidth = slider.offsetWidth / 2;

            prevButton.addEventListener('click', () => {
                if (translateValue <= 0) {
                    return; // Prevent moving past the first set of images
                }
                translateValue -= slideWidth;
                slider.style.transform = `translateX(-${translateValue}px)`;
            });

            nextButton.addEventListener('click', () => {
                const maxTranslateValue = slider.scrollWidth - slideWidth * 2;
                if (translateValue >= maxTranslateValue) {
                    return; // Prevent moving past the last set of images
                }
                translateValue += slideWidth;
                slider.style.transform = `translateX(-${translateValue}px)`;
            });

            // Recalculate slide width on window resize
            window.addEventListener('resize', () => {
                slideWidth = slider.offsetWidth / 2;
                slider.style.transform = `translateX(0)`;
                translateValue = 0;
            });
        });
        // const carousels = document.querySelectorAll('.carousel');

        // carousels.forEach((carousel) => {
        //     const slider = carousel.querySelector('.slider');
        //     const prevButton = carousel.querySelector('.prev-button');
        //     const nextButton = carousel.querySelector('.next-button');
        //     let translateValue = 0;
        //     let slideWidth = slider.offsetWidth;

        //     prevButton.addEventListener('click', () => {
        //         if (translateValue === 0) {
        //             return; // Prevent moving past the first set of images
        //         }
        //         translateValue -= slideWidth;
        //         slider.style.transform = `translateX(-${translateValue}px)`;
        //     });

        //     nextButton.addEventListener('click', () => {
        //         const maxTranslateValue = slider.scrollWidth - slideWidth;
        //         if (translateValue >= maxTranslateValue) {
        //             return; // Prevent moving past the last set of images
        //         }
        //         translateValue += slideWidth;
        //         slider.style.transform = `translateX(-${translateValue}px)`;
        //     });

        //     // Recalculate slide width on window resize
        //     window.addEventListener('resize', () => {
        //         slideWidth = slider.offsetWidth;
        //         slider.style.transform = `translateX(0)`;
        //         translateValue = 0;
        //     });
        // });
    </script>
@endsection
