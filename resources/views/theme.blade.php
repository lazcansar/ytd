<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trafik Kazası ve Cezası Danışmanlık - Yetiş Trafik Danışmanlık</title>
    <meta name="description" content="Yetiş trafik kaza danışmanlık hizmetleri ile mağdur olmayın. Trafik kaza danışma, trafik kazası danışmanlık, kaza danışma, kaza danışmanlık şirketleri hizmetlerimiz vardır.">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="" />
    @vite('resources/css/app.css')

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300..700&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <meta property="og:locale" content="tr_TR" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="" />
    <meta property="og:description" content="" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="" />
    <meta property="og:image" content="" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

</head>
<body class="bg-gray-50">
<header>
    <nav class="bg-white shadow-md">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16 items-center">

                <!-- Sol Taraf: Firma Logosu -->
                <div class="flex-shrink-0">
                    <a href="#">
                        <!-- <img class="h-8 w-8" src="/your-logo.png" alt="Firma Logosu"> -->
                        Yetiş Trafik Danışmanlık
                    </a>
                </div>

                <!-- Orta Kısım: Menü Linkleri (Büyük Ekranlar İçin) -->
                <div class="hidden md:flex space-x-8">
                    <a href="{{ route('home') }}" class="text-gray-700 hover:text-gray-900 px-3 py-2 rounded-md font-medium">Anasayfa</a>
                    <a href="{{ route('about') }}" class="text-gray-700 hover:text-gray-900 px-3 py-2 rounded-md font-medium">Hakkımda</a>
                    <a href="{{ route('services') }}" class="text-gray-700 hover:text-gray-900 px-3 py-2 rounded-md font-medium">Hizmetlerim</a>
                    <a href="{{ route('contact') }}" class="text-gray-700 hover:text-gray-900 px-3 py-2 rounded-md font-medium">İletişim</a>
                </div>

                <!-- Sağ Taraf: İletişime Geç Butonu -->
                <div class="hidden md:flex items-center">
                    <a href="{{ route('contact') }}" class="text-white bg-orange-500 hover:bg-orange-600 px-4 py-2 rounded-md text-sm font-medium">İletişime Geç <i class="bi bi-arrow-right"></i></a>
                </div>

                <!-- Mobil Menü İkonu -->
                <div class="-mr-2 flex md:hidden">
                    <button id="mobile-menu-button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-900 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-blue-500">
                        <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobil Menü -->
        <div id="mobile-menu" class="md:hidden hidden">
            <div class="px-2 pt-2 pb-3 space-y-1">
                <a href="{{ route('home') }}" class="text-gray-700 hover:bg-gray-50 block px-3 py-2 rounded-md text-base font-medium">Anasayfa</a>
                <a href="{{ route('about') }}" class="text-gray-700 hover:bg-gray-50 block px-3 py-2 rounded-md text-base font-medium">Hakkımda</a>
                <a href="#" class="text-gray-700 hover:bg-gray-50 block px-3 py-2 rounded-md text-base font-medium">Hizmetler</a>
                <a href="{{ route('contact') }}" class="text-gray-700 hover:bg-gray-50 block px-3 py-2 rounded-md text-base font-medium">İletişim</a>
            </div>
        </div>
    </nav>

</header>
<script>
    const menuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');

    menuButton.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });
</script>


@yield('main')


<footer>
    <section class="text-white px-4 sm:px-6 lg:px-8">
        <div class="container mx-auto py-12">
            <div class="flex flex-column md:flex-row flex-wrap">
                <!-- Footer Quick Links -->
                <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/3 mb-3">
                    <div class="text-xl font-regular mb-3">
                        Hızlı Menü
                    </div>
                    <div>
                        <ul class="text-gray-200">
                            <li class="mb-3"><i class="bi bi-arrow-right-short"></i> <a href="{{ route('about') }}" class="hover:text-white">Hakkımda</a></li>
                            <li class="mb-3"><i class="bi bi-arrow-right-short"></i> <a href="{{ route('services')}}" class="hover:text-white">Hizmetlerim</a></li>
                            <li class="mb-3"><i class="bi bi-arrow-right-short"></i> <a href="{{ route('crash') }}" class="hover:text-white">Trafik Kazası Danışmanlık</a></li>
                            <li><i class="bi bi-arrow-right-short"></i> <a href="{{ route('report') }}" class="hover:text-white">Trafik Cezası Danışmanlık</a></li>
                        </ul>
                    </div>
                </div>
                <!-- Footer Quick Links -->
                <!-- Footer Links -->
                <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/3 mb-3">
                    <div class="text-xl font-regular mb-3">
                        Faydalı Bağlantılar
                    </div>
                    <div>
                        <ul class="text-gray-200">
                            <li class="mb-3"><i class="bi bi-arrow-right-short"></i> <a href="https://sigortam360.com/" target="_blank" class="hover:text-white">Araç ve Sigorta Sorgulama</a></li>
                            <li class="mb-3"><i class="bi bi-arrow-right-short"></i> <a href="https://turkiye.gov.tr/" target="_blank" class="hover:text-white">E-Devlet Kapısı</a></li>
                            <li class="mb-3"><i class="bi bi-arrow-right-short"></i> <a href="https://sbm.org.tr/" target="_blank" class="hover:text-white">Sigorta Bilgi ve Gözetim Merkezi</a></li>
                            <li><i class="bi bi-arrow-right-short"></i> <a href="https://www.facebook.com/yetistrafik/" target="_blank" class="hover:text-white">Facebook Trafik Kaza Danışmanlık Grubu</a></li>
                        </ul>
                    </div>
                </div>
                <!-- Footer Links -->
                <!-- Footer Contact -->
                <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/3">
                    <div class="text-xl font-regular mb-3">
                        İletişim
                    </div>
                    <div>
                        <ul class="text-gray-200">
                            <li class="mb-3"><i class="bi bi-envelope-at-fill"></i> <a href="#" class="hover:text-white">yetisbalci@yahoo.com</a></li>
                            <li class="mb-3"><i class="bi bi-phone-fill"></i> <a href="#" class="hover:text-white">+90 541 556 20 50</a></li>
                            <li><a href="https://www.instagram.com/yetis_trafik_danismanlik/" target="_blank" class="me-3 hover:text-white"><i class="bi bi-instagram"></i> Instagram</a> <a href="https://www.facebook.com/yetistrafik/" target="_blank" class="hover:text-white"><i class="bi bi-facebook"></i> Facebook</a> </li>
                        </ul>
                    </div>
                </div>
                <!-- Footer Contact -->
            </div>

            <div class="border-b border-b-gray-400 my-10">

            </div>



            <div class="flex flex-wrap justify-between text-gray-200">
                <div class="block mb-2">
                    Copyright &copy 2021 - {{ date('Y') }} <a href="#" class="hover:text-white"><span class="font-regular">Yetiş Trafik Danışmanlık</span></a>
                </div>
                <div class="block mb-2 font-regular">
                        <a href="#" class="hover:text-white me-3">Gizlilik Sözleşmesi</a> <a href="#" class="hover:text-white">Kullanım Şartları</a>
                </div>
            </div>

            <div class="block">
                <a href="https://afyazilim.com" target="_blank" class="hover:text-white text-sm">
                    Tasarım ve Kodlaması <span class="font-medium"><i class="bi bi-code-slash text-gray-50"></i> A&F Yazılım ve E-Ticaret Hizmetleri</span> tarafından yapılmıştır.
                </a>
            </div>
        </div>

    </section>

    <div class="fixed left-0 bottom-0">
        <div class="p-2 bg-amber-600 text-white rounded-tr font-regular bg-opacity-85 transition hover:bg-opacity-100">
            <a class="block" href="https://api.whatsapp.com/send?phone=905415562050"><i class="bi bi-whatsapp"></i> WhatsApp İletişim</a>
        </div>
    </div>
    <div class="fixed right-0 bottom-0">
        <div class="p-2 bg-amber-600 text-white rounded-tl font-regular bg-opacity-85 transition hover:bg-opacity-100">
            <a class="block" href="https://api.whatsapp.com/send?phone=905415562050"><i class="bi bi-phone-vibrate"></i> Hemen Ara</a>
        </div>
    </div>

</footer>
<script>
    function toggleAccordion(id) {
        const element = document.getElementById(id);
        const button = element.previousElementSibling.querySelector('span');

        if (element.style.maxHeight) {
            element.style.maxHeight = null;
            button.textContent = '+';
        } else {
            element.style.maxHeight = element.scrollHeight + "px";
            button.textContent = '-';
        }


        if (element.classList.contains('open')) {
            element.classList.remove('open');
            button.textContent = '+';
        } else {
            element.classList.add('open');
            button.textContent = '-';
        }
    }
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script>
    AOS.init({
        duration: 1000, // Animasyon süresi (ms)
        once: true      // Sayfa aşağı kaydırıldığında sadece bir kez çalışmasını sağlamak için
    });
</script>
<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper(".mySwiper", {
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
</script>
</body>
</html>
