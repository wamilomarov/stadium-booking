@extends('frontend.template.app')

@section('body')
    <div class="w-full flex flex-wrap">

        <!-- Login Section -->
        <div class="w-1/2 flex flex-col justify-center">

            <div class="flex justify-center md:justify-start pt-12 md:pl-12 md:-mb-24">
                <img src="{{asset('img/logo.png')}}" alt="Logo" class="p-4">
{{--                <a href="#" class="bg-black text-white font-bold text-xl p-4">Logo</a>--}}
            </div>

            <div class="flex flex-col justify-center my-auto pt-8 md:py-0 px-6 md:px-5 lg:px-8">
                <p class="text-center text-3xl">Xoş gəldiniz</p>
                <form class="flex flex-col pt-3 md:pt-8 lg:px-8 mx-4">
                    <div class="flex flex-col pt-4">
                        <label for="phone" class="text-lg">Telefon</label>
                        <input type="tel" id="phone" placeholder="077 332 63 28" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline">
                    </div>

                    <div class="flex flex-col pt-4">
                        <label for="password" class="text-lg">Şifrə</label>
                        <input type="password" id="password" placeholder="Password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline">
                    </div>

                    <button type="submit" class="bg-blue-800 text-white font-bold text-lg hover:bg-blue-500-700 p-2 mt-8">Daxil ol</button>
                </form>
                <div class="text-center pt-12 pb-12">
                    <p>Hesabınız yoxdur? <a href="{{route('register.view')}}" class="underline font-semibold">Qeydiyat.</a></p>
                </div>
            </div>

        </div>

        <!-- Image Section -->
        <div class="w-1/2 shadow-2xl">
            <img class="object-cover w-full h-screen hidden md:block" src="https://source.unsplash.com/IXUM4cJynP0">
        </div>
    </div>
@endsection