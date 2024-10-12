@extends('theme')
@section('main')
    <main>
        <section class="bg-gray-100">
            <img src="{{ asset('storage/images/contact-bg.jpg') }}" class="w-full">
            <div class="container mx-auto py-3 px-4">
                <a href="{{ route('home') }}" class="font-regular">Anasayfa</a>
                <i class="bi bi-chevron-right"></i>
                <span href="#">İletişim</span>
            </div>
        </section>

        <section class="py-12 px-4 sm:px-6 lg:px-8" data-aos="fade-right">
            <div class="container mx-auto">
                <div class="flex flex-wrap justify-between">


                    <div class="w-full md:w-1/2 sm:pe-2">

                        <div class="border p-6 border-gray-200 rounded">
                            <div class="text-xl text-gray-900">İletişim Formu</div>
                            <form action="" method="POST">
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
                                        <input class="block w-full my-3 px-4 py-2 border-gray-300 border rounded ring-0 focus:ring-0 focus:outline-none" type="tel" name="tel" placeholder="Telefon Numaranız">
                                    </div>
                                    <div class="w-full">
                                        <select name="subject" class="appearance-none w-full my-3 px-4 py-2 border-gray-300 border rounded ring-0 focus:ring-0 focus:outline-none bg-white">
                                            <option selected disabled>Konu Seç</option>
                                            <option value="">Trafik Kazası Danışmanlık</option>
                                            <option value="">Trafik Cezası Danışmanlık</option>
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
                            <p class="bg-white rounded border border-300 px-4 py-6 mb-5"><a href=""><i class="bi bi-whatsapp text-yellow-700 me-3"></i> +90 541 556 20 50</a></p>
                            <p class="bg-white rounded border border-300 px-4 py-6 mb-5"><a href=""><i class="bi bi-facebook text-blue-800 me-3"></i>Yetiş Trafik Danışmanlık</a></p>
                            <p class="bg-white rounded border border-300 px-4 py-6"><a href=""><i class="bi bi-instagram text-blue-700 me-3"></i>Yetiş Trafik Danışmanlık</a></p>
                        </div>
                    </div>


                </div>
            </div>
        </section>

    </main>
@endsection

