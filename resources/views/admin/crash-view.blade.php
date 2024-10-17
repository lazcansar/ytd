@extends('theme')
@section('main')

    <main>
        <section class="bg-gray-100">
            <img src="{{ asset('storage/images/admin.jpg') }}" class="w-full">
            <div class="container mx-auto py-3 px-4">
                <nav aria-label="breadcrumb">
                    <ol class="list-none p-0 inline-flex">
                        <!-- Breadcrumb (Yol Haritası) için SEO uyumlu yapı -->
                        <li class="flex items-center">
                            <a href="{{ route('home') }}" class="font-regular text-gray-900 hover:underline">Anasayfa</a>
                            <i class="bi bi-chevron-right mx-2"></i>
                        </li>
                        <li aria-current="page">
                            <a href="{{ route('admin.home') }}" class="font-regular text-gray-900 hover:underline">Yönetim Paneli</a>
                            <i class="bi bi-chevron-right mx-2"></i>
                        </li>
                        <li aria-current="page">
                            <span class="text-gray-500">{{ $crashDetail->name .' '. $crashDetail->surname}}</span>
                        </li>
                    </ol>
                </nav>
            </div>
        </section>

        <div class="container mx-auto my-5 px-4">

            <div class="border border-gray-200 rounded shadow-lg">
                <div class="rounded-t text-left font-regular text-xl bg-gray-600 text-white px-4 py-2">
                    {{ $crashDetail->name .' '. $crashDetail->surname}}
                </div>
                <div class="bg-gray-100">
                    <ul>
                        <li class="mb-2 bg-white py-3 px-4"><span class="font-regular">Telefon Numarası:</span> {{ $crashDetail->phone }}</li>
                        <li class="mb-2 bg-white py-3 px-4"><span class="font-regular">E-Posta Adresi:</span> {{ $crashDetail->email }}</li>
                        <li class="mb-2 bg-white py-3 px-4"><span class="font-regular">Kaza Tarihi ve Saati: </span> {{ $crashDetail->date }}</li>
                        <li class="mb-2 bg-white py-3 px-4"><span class="font-regular">İletişim Tercihi:</span> {{ str_replace(['phone', 'email'], ['Telefon ile dönüş yapılsın', 'E-Posta ile dönüş yapılsın'], $crashDetail->contactType ) }}</li>
                        <li class="mb-2 bg-white py-3 px-4"><span class="font-regular">Rapor / Bilgilendirme:</span> {{ str_replace(['information-and-report', 'information'], ['Bilgilendirme ve Rapor', 'Bilgilendirme'], $crashDetail->recontactType) }}</li>
                        <li class="mb-2 bg-white py-3 px-4"><span class="font-regular">I.P. Adresi:</span> {{ $crashDetail->ip }}</li>
                        <li class="bg-white py-3 px-4"><span class="font-regular">Mesaj:</span>
                            <p>{{ $crashDetail->message }}</p>
                        </li>
                    </ul>
                    <div class="bg-white my-2"></div>
                    <div class="py-3 px-4 bg-white">
                        <h2 class="font-medium text-xl mb-5 text-gray-900">Tutanak Görüntüleri</h2>
                        <div class="flex flex-wrap">
                            @if($images)
                                @foreach($images as $image)
                                    <div class="w-full md:w-1/5">
                                        <a href="{{ asset('storage/'.$image) }}"><img src="{{ asset('storage/'.$image) }}" class="object-conver w-64 h-64"></a>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>


                </div>
            </div>

        </div>


    </main>

@endsection
