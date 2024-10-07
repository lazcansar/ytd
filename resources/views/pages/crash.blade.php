@extends('theme')
@section('main')
    <main>
        <section class="bg-gray-100">
            <img src="{{ asset('storage/images/trafik-kazasi-danismanlik-hizmeti.jpg') }}" class="w-full">
            <div class="container mx-auto py-3 px-4">
                <a href="{{ route('home') }}" class="font-regular">Anasayfa</a>
                <i class="bi bi-chevron-right"></i>
                <span href="#">Trafik Kazası Danışmanlık</span>
            </div>
        </section>

        <section class="py-12 px-4 sm:px-6 lg:px-8" >
            <div class="container mx-auto" data-aos="fade-right">
                <h1 class="text-3xl text-blue-900 font-medium mb-5">
                    Trafik Kazası Danışmanlık Hizmeti
                </h1>
                <span class="block uppercase font-medium mb-5">
                    Kaza Bilgilerini Girerken
                </span>
                <ol class="list-decimal ms-4 text-gray-900">
                    <li class="mb-3">Lütfen tüm alanları eksiksiz ve doğru şekilde doldurunuz. Vereceğiniz artı her bilgi, sağlıklı sonuca ulaşmak için artı yarar sağlayacaktır.</li>
                    <li class="mb-3">Kaza tutanağının okunaklı bir fotoğrafını çektiğinizden emin olduktan sonra buraya yükleyiniz.</li>
                    <li class="mb-3">“Bilgi Notunuz” bölümüne kaza hakkındaki görüşünüzü ve kazanın sizce neden ve nasıl olduğunu mümkün olduğunca ayrıntılı şekilde yazınız.</li>
                    <li>Gelen başvurular, sistem tarafından otomatik olarak sıralanmaktadır. Ayrım ve öncelik sıralaması yapmadan, bu sıraya göre mutlaka yanıt vereceğim size.</li>
                </ol>
            </div>
<hr class="my-10">

            <div class="container mx-auto" data-aos="fade-left">
                <h2 class="text-2xl text-blue-900 font-medium mb-5">
                    Kaza Tespit Tutanağı Gönderin
                </h2>
                    <form action="" method="post">
                        <div class="flex flex-wrap justify-between">
                            <div class="w-full mb-4">
                                <label for="serino" class="font-regular block">Tutanak Sıra No</label>
                                <input id="serino" class="w-full px-4 py-2 border-gray-300 border rounded ring-0 focus:ring-0 focus:outline-none" type="text" name="serino" value="#6546" disabled>
                            </div>

                            <!-- Upload 1 -->
                            <div class="w-full sm:w-1/2 mb-4">
                                <label class="w-full items-center px-4 py-2 bg-gray-500 text-white rounded tracking-wide border border-gray-500 cursor-pointer hover:bg-gray-600 transition">
                                    <span class="text-base leading-normal">Kaza Tutanağı Seç - 1</span>
                                    <input id="file_input_1" type="file" class="hidden">
                                </label>
                                <span id="file-chosen_1" class="ms-5 text-gray-500">No file chosen</span>
                            </div>
                            <!-- Upload 1 -->

                            <!-- Upload 2 -->
                            <div class="w-full sm:w-1/2 mb-4">
                                <label class="w-full items-center px-4 py-2 bg-gray-500 text-white rounded tracking-wide border border-gray-500 cursor-pointer hover:bg-gray-600 transition">
                                    <span class="text-base leading-normal">Kaza Tutanağı Seç - 2</span>
                                    <input id="file_input_2" type="file" class="hidden">
                                </label>
                                <span id="file-chosen_2" class="ms-5 text-gray-500">No file chosen</span>
                            </div>
                            <!-- Upload 2 -->





                        </div>
                    </form>
            </div>
            <script>
                // Bütün input[type="file"] elemanlarını seç
                const fileInputs = document.querySelectorAll('input[type="file"]');

                // Her file input için döngü oluştur
                fileInputs.forEach(input => {
                    input.addEventListener('change', function () {
                        const fileChosen = input.nextElementSibling; // Input'a yakın span elemanını al
                        if (this.files.length > 0) {
                            fileChosen.textContent = this.files[0].name;
                        } else {
                            fileChosen.textContent = "No file chosen";
                        }
                    });
                });
            </script>




        </section>

    </main>
@endsection

