@extends('theme')
@section('title'){{ 'İletişim' }}@endsection
@section('description'){{ 'Yetiş Trafik Danışmanlık\'tan trafik kazası danışmanlık ve trafik cezası danışmanlık hizmeti almak için 0541 556 20 50 numaralı WhatsApp hattını kullanabilirsiniz.' }}@endsection
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
                            <span class="text-gray-500">İletişim</span>
                        </li>
                    </ol>
                </nav>
            </div>
        </section>

        <section class="py-12 px-4 sm:px-6 lg:px-8" data-aos="fade-right">
            <div class="container mx-auto">
                <div class="flex flex-wrap justify-between">


                    <div class="w-full md:w-1/2 sm:pe-2">

                        <div class="border p-6 border-gray-200 rounded">
                            @if ($errors->any())
                                <div class="bg-amber-900 text-gray-200 p-4">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            @if(session('success'))
                                <div class="bg-amber-400 text-gray-900 p-4 shadow rounded mb-5 ">
                                    {{ session('success') }}
                                </div>
                            @endif
                            <div class="text-xl text-gray-900">İletişim Formu</div>
                            <form action="{{ route('contact.form') }}" method="POST">
                                @csrf
                                <div class="flex flex-wrap justify-between">
                                    <div class="w-full sm:w-1/2 sm:pe-2">
                                        <input class="w-full my-3 px-4 py-2 border-gray-300 border rounded ring-0 focus:ring-0 focus:outline-none" type="text" name="name" placeholder="Adınız">
                                    </div>
                                    <div class="w-full sm:w-1/2 sm:ps-2">
                                        <input class="w-full my-3 px-4 py-2 border-gray-300 border rounded ring-0 focus:ring-0 focus:outline-none" type="text" name="surname" placeholder="Soyadınız">
                                    </div>
                                    <div class="w-full sm:w-1/2 sm:pe-2">
                                        <input class="w-full my-3 px-4 py-2 border-gray-300 border rounded ring-0 focus:ring-0 focus:outline-none" type="email" name="email" placeholder="E-Posta Adresiniz">
                                    </div>
                                    <div class="w-full sm:w-1/2 sm:ps-2">
                                        <input class="block w-full my-3 px-4 py-2 border-gray-300 border rounded ring-0 focus:ring-0 focus:outline-none" type="tel" name="phone" placeholder="Telefon Numaranız">
                                    </div>
                                    <div class="w-full">
                                        <select name="subject" class="appearance-none w-full my-3 px-4 py-2 border-gray-300 border rounded ring-0 focus:ring-0 focus:outline-none bg-white">
                                            <option selected disabled>Konu Seç</option>
                                            <option value="1">Trafik Kazası Danışmanlık</option>
                                            <option value="2">Trafik Cezası Danışmanlık</option>
                                        </select>
                                    </div>
                                    <div class="w-full">
                                        <textarea class="block w-full my-3 px-4 py-2 border-gray-300 border rounded ring-0 focus:ring-0 focus:outline-none" name="message" rows="10" placeholder="Mesajınız"></textarea>
                                    </div>
                                    <div class="w-full text-end">
                                        <button type="submit" class="bg-amber-500 hover:bg-amber-600 text-white px-4 py-2 rounded transition"><i class="bi bi-send"></i> Gönder</button>
                                    </div>
                                </div>

                            </form>
                        </div>

                    </div>


                    <div class="w-full md:w-1/2 sm:ps-2">
                        <div class="border p-6 border-gray-200 rounded">
                            <div class="text-xl text-gray-900 mb-5">
                                İletişim Bilgileri
                            </div>
                            <p class="bg-white rounded border border-300 px-4 py-6 mb-5"><a href="mailto:yetisbalci@yahoo.com"><i class="bi bi-envelope text-yellow-700 me-3"></i> yetisbalci@yahoo.com</a></p>
                            <p class="bg-white rounded border border-300 px-4 py-6 mb-5"><a href="https://api.whatsapp.com/send?phone=905415562050"><i class="bi bi-whatsapp text-yellow-700 me-3"></i> +90 541 556 20 50</a></p>
                            <p class="bg-white rounded border border-300 px-4 py-6 mb-5"><a href="https://www.facebook.com/yetistrafik/"><i class="bi bi-facebook text-blue-800 me-3"></i>Yetiş Trafik Danışmanlık</a></p>
                            <p class="bg-white rounded border border-300 px-4 py-6"><a href="https://www.instagram.com/yetis_trafik_danismanlik/"><i class="bi bi-instagram text-blue-700 me-3"></i>Yetiş Trafik Danışmanlık</a></p>
                        </div>
                    </div>


                </div>
            </div>
        </section>

    </main>
@endsection

