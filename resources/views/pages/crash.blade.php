@extends('theme')
@section('title'){{ 'Trafik Kazası Danışma' }}@endsection
@section('description'){{ 'Yetiş Trafik Danışma, trafik kaza danışmanlık, trafik kaza danışma, trafik kazası danışmanlık, kaza danışma, trafik kaza tutanağı inceleme, trafik kaza tutanağı raporlama' }}@endsection
@section('main')
    <main>
        <section class="bg-gray-100">
            <img src="{{ asset('storage/images/trafik-kazasi-danismanlik.jpg') }}" class="w-full">
            <div class="container mx-auto py-3 px-4">
                <nav aria-label="breadcrumb">
                    <ol class="list-none p-0 inline-flex">
                        <!-- Breadcrumb (Yol Haritası) için SEO uyumlu yapı -->
                        <li class="flex items-center">
                            <a href="{{ route('home') }}" class="font-regular text-gray-900 hover:underline">Anasayfa</a>
                            <i class="bi bi-chevron-right mx-2"></i>
                        </li>
                        <li aria-current="page">
                            <span class="text-gray-500">Trafik Kazası Danışmanlık</span>
                        </li>
                    </ol>
                </nav>
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




                <h2 class="text-2xl text-blue-900 font-medium mb-5">
                    Kaza Tespit Tutanağı Gönderin
                </h2>
                    <form id="uploadForm">
                        @csrf

                        <div class="flex flex-wrap justify-between">
                            <div class="w-full mb-4">
                                <span class="font-regular block">Tutanak Yükle</span>
                                <span class="block text-sm mb-2 text-gray-500">* Yalnızca Jpg, Png ve Gif dosya formatları yüklenebilir. Dosya boyutu 5MB sınırını geçemez.</span>
                                <label for="multipleImage" class="font-regular block bg-white border-gray-300 border rounded ring-0 focus:ring-0 focus:outline-none px-4 py-2"><i class="bi bi-search"></i> Dosyaları Seçin</label>
                                <input type="file" name="images[]" class="hidden" id="multipleImage" multiple onchange="checkFiles(this)" accept="image/jpeg, image/png, image/gif, image/jpg">
                                <span id="listFile"></span>
                            </div>
                            <script>
                                function checkFiles(input) {
                                    if (input.files.length > 5) {
                                        alert("En fazla 5 dosya seçebilirsiniz.");
                                        input.value = ""; // Dosya seçim kutusunu sıfırlar
                                    }
                                }
                            </script>

                            <div class="w-full sm:w-1/2 mb-4 sm:pe-2">
                                <label for="name" class="font-regular block">İsim</label>
                                <input type="text" id="name" name="name" class="w-full px-4 py-2 border-gray-300 border rounded ring-0 focus:ring-0 focus:outline-none" placeholder="Ad" required>
                            </div>

                            <div class="w-full sm:w-1/2 mb-4 sm:ps-2">
                                <label for="surname" class="font-regular block">Soyad</label>
                                <input type="text" id="surname" name="surname" class="w-full px-4 py-2 border-gray-300 border rounded ring-0 focus:ring-0 focus:outline-none" placeholder="Soyad" required>
                            </div>

                            <div class="w-full sm:w-1/2 mb-4 sm:pe-2">
                                <label for="phone" class="font-regular block">Telefon Numarası</label>
                                <input type="tel" id="phone" name="phone" class="w-full px-4 py-2 border-gray-300 border rounded ring-0 focus:ring-0 focus:outline-none" placeholder="0506 770 18 61" required>
                            </div>

                            <div class="w-full sm:w-1/2 mb-4 sm:ps-2">
                                <label for="email" class="font-regular block">E-Posta</label>
                                <input type="email" id="email" name="email" class="w-full px-4 py-2 border-gray-300 border rounded ring-0 focus:ring-0 focus:outline-none" placeholder="E-Posta" required>
                            </div>

                            <div class="w-full mb-4">
                                <label for="history" class="font-regular block">Kaza Tarihi ve Saati</label>
                                <input type="text" id="history" name="date" class="w-full px-4 py-2 border-gray-300 border rounded ring-0 focus:ring-0 focus:outline-none" placeholder="01.01.2024 - 15:30" required>
                            </div>

                            <div class="w-full mb-4">
                                <label for="take" class="font-regular block">İletişim Tercihi</label>
                                <div class="relative grid">
                                    <select name="contactType" id="take" class="cursor-context-menu appearance-none px-4 py-2 border-gray-300 border rounded ring-0 focus:ring-0 focus:outline-none bg-white row-start-1 col-start-1 ">
                                        <option value="phone">Telefon ile iletişime geçilsin</option>
                                        <option value="email">E-Posta ile iletişime geçilsin</option>
                                    </select>
                                    <i class="pointer-events-none bi bi-arrow-down-short row-start-1 col-start-1 absolute right-3 top-1/2 transform -translate-y-1/2"></i>
                                </div>
                            </div>

                            <div class="w-full">
                                <label for="message" class="font-regular block">Mesajınız</label>
                                <textarea name="message" id="message" rows="5" class="w-full px-4 py-2 border-gray-300 border rounded ring-0 focus:ring-0 focus:outline-none" placeholder="Trafik kazası hakkında eklemek istedikleriniz..."></textarea>
                            </div>

                            <div class="w-full mb-4">
                                <label for="information" class="font-regular flex items-center">
                                    <input type="radio" name="recontactType" id="information" class="me-2" value="information">
                                    Sadece Bilgilendirme İstiyorum
                                </label>

                                <label for="report" class="font-regular flex items-center">
                                    <input type="radio" name="recontactType" id="report" class="me-2" value="information-and-report">
                                    Bilgilendirme ve Rapor İstiyorum
                                </label>
                            </div>

                            <div class="w-full mb-4">
                                <label for="approve" class="font-regular flex items-center">
                                    <input type="checkbox" name="confirmTerm" id="approve" class="me-2" value="1" required>
                                    <a href="{{ route('terms') }}" class="text-blue-600 me-1 hover:underline">Kullanım Şartlarını</a> okudum, onaylıyorum.
                                </label>
                            </div>

                            <div class="w-full">
                                <button type="submit" class="px-4 py-2 border border-gray-200 rounded bg-amber-600 hover:bg-amber-700 transition text-gray-100 w-full"><i class="bi bi-cloud-upload"></i> GÖNDER</button>
                            </div>

                        </div>

                        <!-- Progress Bar -->
                        <div id="progressBarContainer" class="w-full bg-gray-200 rounded-lg mt-4 h-4 mb-4" style="display: none;">
                            <div id="progressBar" class="bg-blue-500 h-4 rounded-lg" style="width: 0%;"></div>
                        </div>

                        <!-- Status Message -->
                        <div id="statusText" class="text-gray-500"></div>


                    </form>
            </div>

            <script>
                document.getElementById('uploadForm').addEventListener('submit', function(e) {
                    e.preventDefault();

                    // Progress Bar Display Block
                    document.getElementById('progressBarContainer').style.display = 'block';
                    document.getElementById('progressBar').style.width = '0%';
                    document.getElementById('statusText').textContent = 'Yükleme başlıyor...';

                    let formData = new FormData(this);

                    // Ajax File Upload
                    let xhr = new XMLHttpRequest();
                    xhr.open('POST', '{{ route('upload.crash') }}', true);
                    xhr.setRequestHeader('X-CSRF-TOKEN', '{{ csrf_token() }}');

                    // Update Progress Bar Ratio
                    xhr.upload.onprogress = function (e) {
                        if(e.lengthComputable) {
                            let percentComplete = (e.loaded / e.total) * 100;
                            document.getElementById('progressBar').style.width = percentComplete + '%';
                            document.getElementById('statusText').textContent = Math.round(percentComplete) + '% yüklendi';
                        }
                    };

                    // Complete Upload
                    xhr.onload = function () {
                        if(xhr.status === 200) {
                            document.getElementById('statusText').textContent = 'Yükleme tamamlandı!';
                        }else {
                            document.getElementById('statusText').textContent = 'Yükleme başarısız!';
                        }
                    };

                    // Error Only
                    xhr.onerror = function() {
                        document.getElementById('statusText').textContent = 'Bir hata oluştu!';
                    };

                    xhr.send(formData);

                });
            </script>



            <script>
                const fileInput = document.getElementById('multipleImage');
                const fileList = document.getElementById('listFile');

                fileInput.addEventListener('change', function() {
                    // Seçilen dosyalar
                    const files = this.files;
                    fileList.innerHTML = ''; // Önceki listeyi temizle

                    // Seçilen her dosyayı listeye ekle
                    for (let i = 0; i < files.length; i++) {
                        const li = document.createElement('li');
                        li.textContent = files[i].name;
                        fileList.appendChild(li);
                    }

                    // Eğer hiçbir dosya seçilmediyse
                    if (files.length === 0) {
                        const li = document.createElement('li');
                        li.textContent = "No files chosen";
                        fileList.appendChild(li);
                    }
                });
            </script>


            <hr class="my-10">

            <div class="container mx-auto">
                <p class="mb-3 text-gray-900">Yetiş Trafik Danışmanlık web sitesi olarak <strong>trafik kazası mağduru</strong> olan kişilerin yardımına koşuyoruz. Trafik kazası danışmanlık alanında <strong>20 yıllık deneyim (tecrübe)</strong> sahibiyiz. Meslek hayatımız boyunca pek çok farklı <strong>trafik kazasında</strong> bulunduk. Yüzlerce kişiye farklı platformlar üzerinden <strong>trafik kazası danışmanlık hizmeti</strong> sunduk. <strong>Trafik kazası danışmanlık</strong> hizmetimiz sayesinde (doğru yönlendirmeler ve hazırlanan raporlar) trafik kazasında haklı taraf olduklarını ispatladılar.</p>
                <p class="mb-3 text-gray-900">Trafik kazası danışma, Trafik kaza danışma alanlarında öncelikli hizmet sunuyoruz. Yetiş Trafik Danışmanlık web sayfası üzerinden <strong>trafik kaza tutanağınızı</strong> bizlere göndererek kolayca ve hızlı bir şekilde danışmanlık hizmeti alabilirsiniz. <strong>Trafik kazası danışmanlık şirketleri</strong> sizlerin haklarınızı savunur ve haklarınızı korumaya yönelik reaksiyonlar almanızı sağlar.</p>
                <p class="text-gray-900">Yetiş Trafik Danışmanlık, kaza mağdurlarına bilgilendirme ve raporlama ile sadece bilgilendirme şeklinde iki farklı hizmet vermektedir. Bu hizmetler sayesinde <strong>trafik kazası</strong> sonrasında izlemeniz gereken yol hakkında bilgi sahibi olabilirsiniz. Ayrıca tarafımızca hazırlanacak rapor ile mağduriyetinizi giderebilirsiniz.</p>
            </div>


        </section>

    </main>
@endsection

