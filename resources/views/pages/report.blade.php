@extends('theme')
@section('main')
    <main>
        <section class="bg-gray-100">
            <img src="{{ asset('storage/images/sample.jpg') }}" class="w-full">
            <div class="container mx-auto py-3 px-4">
                <a href="{{ route('home') }}" class="font-regular">Anasayfa</a>
                <i class="bi bi-chevron-right"></i>
                <span href="#">Trafik Ceza Tutanağı Danışma</span>
            </div>
        </section>

        <section class="py-12 px-4 sm:px-6 lg:px-8" >
            <div class="container mx-auto" data-aos="fade-right">
                <h1 class="text-3xl text-blue-900 font-medium mb-5">
                    Trafik Cezası Danışmanlık Hizmeti
                </h1>
                <span class="block uppercase font-medium mb-5">
                    Ceza Bilgilerini Girerken
                </span>
                <ol class="list-decimal ms-4 text-gray-900">
                    <li class="mb-3">Lütfen tüm alanları eksiksiz ve doğru şekilde doldurunuz. Vereceğiniz artı her bilgi, sağlıklı sonuca ulaşmak için artı yarar sağlayacaktır.</li>
                    <li class="mb-3">Ceza tutanağının okunaklı bir fotoğrafını çektiğinizden emin olduktan sonra buraya yükleyiniz.</li>
                    <li class="mb-3">“Bilgi Notunuz” bölümüne ceza hakkındaki görüşünüzü ve cezanın sizce neden yazıldığını, yazılan ceza ile kusurunuzun uyuşup uyuşmadığını mümkün olduğunca ayrıntılı şekilde yazınız.</li>
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
                    Trafik Ceza Tutanağı Gönderin
                </h2>
                <form action="{{ route('upload.report') }}" method="post" enctype="multipart/form-data">
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
                            <input type="text" id="name" name="name" class="w-full px-4 py-2 border-gray-300 border rounded ring-0 focus:ring-0 focus:outline-none" placeholder="Ad">
                        </div>

                        <div class="w-full sm:w-1/2 mb-4 sm:ps-2">
                            <label for="surname" class="font-regular block">Soyad</label>
                            <input type="text" id="surname" name="surname" class="w-full px-4 py-2 border-gray-300 border rounded ring-0 focus:ring-0 focus:outline-none" placeholder="Soyad">
                        </div>

                        <div class="w-full sm:w-1/2 mb-4 sm:pe-2">
                            <label for="phone" class="font-regular block">Telefon Numarası</label>
                            <input type="tel" id="phone" name="phone" class="w-full px-4 py-2 border-gray-300 border rounded ring-0 focus:ring-0 focus:outline-none" placeholder="0506 770 18 61">
                        </div>

                        <div class="w-full sm:w-1/2 mb-4 sm:ps-2">
                            <label for="email" class="font-regular block">E-Posta</label>
                            <input type="email" id="email" name="email" class="w-full px-4 py-2 border-gray-300 border rounded ring-0 focus:ring-0 focus:outline-none" placeholder="E-Posta">
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
                            <label for="approve" class="font-regular flex items-center">
                                <input type="checkbox" name="confirmTerm" id="approve" class="me-2" value="1">
                                <a href="#" class="text-blue-600 me-1 hover:underline">Kullanım Şartlarını</a> okudum, onaylıyorum.
                            </label>
                        </div>

                        <div class="w-full">
                            <button type="submit" class="px-4 py-2 border border-gray-200 rounded bg-amber-600 hover:bg-amber-700 transition text-gray-100 w-full"><i class="bi bi-cloud-upload"></i> GÖNDER</button>
                        </div>

                    </div>

                    <!-- Progress Bar -->
                    <div id="progressBarContainer" class="w-full bg-gray-200 rounded-lg h-4 mb-4" style="display: none;">
                        <div id="progressBar" class="bg-blue-500 h-4 rounded-lg" style="width: 0%;"></div>
                    </div>

                    <!-- Status Message -->
                    <div id="statusText" class="text-gray-500"></div>


                </form>
            </div>

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
                <p class="mb-3 text-gray-900">Yetiş Trafik Danışmanlık olarak <strong>trafik cezası itiraz</strong> alanında hizmet veriyoruz. <strong>Trafik cezası danışmanlık hizmetimiz</strong> ile mağduriyetinizi gideriyoruz. Trafik kazası ve <strong>trafik cezası</strong> alanında 20 yıllık deneyim (tecrübe) sahibiyiz. Meslek hayatımız boyunca pek çok <strong>trafik cezasına itirazda</strong> bulunduk. Sayısızca trafik ceza itirazımız kabul edildi. Yetiş Trafik Danışmanlık olarak trafik cezalarına karşı hazırladığımız raporlar ile birlikte trafik cezasına itirazın nasıl yapılacağı hususunda da gerekli bilgilendirmeleri ve yönlendirmeleri yapıyoruz.</p>

                <p class="mb-3 text-gray-900">Yetiş Trafik Danışmanlık web sayfası üzerinden <strong>trafik ceza tutanağınızı</strong> bizlere göndererek kolayca ve hızlı bir şekilde danışmanlık hizmeti alabilirsiniz. Trafik ceza tutanaklarınıza karşı hazırladığımız raporlar sayesinde hızlı reaksiyonlar alarak trafik cezalarınızı iptal ettirebilirsiniz.</p>
                <p class="text-gray-900">Yetiş Trafik Danışmanlık, haksız bir şekilde <strong>trafik cezası</strong> yediğini düşünen mağdurlara bilgilendirme ve raporlama ile sadece bilgilendirme şeklinde iki farklı hizmet vermektedir. Bu hizmetler sayesinde <strong>trafik cezası</strong> sonrasında izlemeniz gereken yol hakkında bilgi sahibi olabilirsiniz.</p>
            </div>


        </section>

    </main>
@endsection

