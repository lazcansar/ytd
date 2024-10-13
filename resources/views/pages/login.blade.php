@extends('theme')
@section('main')

<main>
    <section class="bg-gray-100">
        <img src="{{ asset('storage/images/contact-bg.jpg') }}" class="w-full">
        <div class="container mx-auto py-3 px-4">
            <nav aria-label="breadcrumb">
                <ol class="list-none p-0 inline-flex">
                    <!-- Breadcrumb (Yol Haritası) için SEO uyumlu yapı -->
                    <li class="flex items-center">
                        <a href="{{ route('home') }}" class="font-regular text-gray-900 hover:underline">Anasayfa</a>
                        <i class="bi bi-chevron-right mx-2"></i>
                    </li>
                    <li aria-current="page">
                        <span class="text-gray-500">Giriş Yap</span>
                    </li>
                </ol>
            </nav>
        </div>
    </section>

    <section class="py-12 px-4 sm:px-6 lg:px-8" data-aos="fade-right">
        <div class="container mx-auto">



        </div>
    </section>


</main>

@endsection
