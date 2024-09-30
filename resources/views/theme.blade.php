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
                    <a href="#" class="text-gray-700 hover:text-gray-900 px-3 py-2 rounded-md font-medium">Anasayfa</a>
                    <a href="#" class="text-gray-700 hover:text-gray-900 px-3 py-2 rounded-md font-medium">Hakkımızda</a>
                    <a href="#" class="text-gray-700 hover:text-gray-900 px-3 py-2 rounded-md font-medium">Hizmetler</a>
                    <a href="#" class="text-gray-700 hover:text-gray-900 px-3 py-2 rounded-md font-medium">İletişim</a>
                </div>

                <!-- Sağ Taraf: İletişime Geç Butonu -->
                <div class="hidden md:flex items-center">
                    <a href="#contact" class="text-white bg-orange-500 hover:bg-orange-600 px-4 py-2 rounded-md text-sm font-medium">İletişime Geç <i class="bi bi-arrow-right"></i></a>
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
                <a href="#" class="text-gray-700 hover:bg-gray-50 block px-3 py-2 rounded-md text-base font-medium">Anasayfa</a>
                <a href="#" class="text-gray-700 hover:bg-gray-50 block px-3 py-2 rounded-md text-base font-medium">Hakkımızda</a>
                <a href="#" class="text-gray-700 hover:bg-gray-50 block px-3 py-2 rounded-md text-base font-medium">Hizmetler</a>
                <a href="#" class="text-gray-700 hover:bg-gray-50 block px-3 py-2 rounded-md text-base font-medium">İletişim</a>
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


<main>




    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="{{ asset('storage/images/slider-bg.jpg') }}" class="w-full">
                <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 z-10 text-center">
                    <div id="animatedText"></div>
                </div>
            </div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const text = "Hoşgeldiniz, değerlendirilmesini İstediğiniz kaza veya ceza tutanağınızı aşağıdaki WhatsApp hattına gönderebilirsiniz. +90 (541) 556 20 50";
            let index = 0;
            const speed = 75; // Harf yazma hızı (milisaniye cinsinden)

            function typeWriter() {
                if (index < text.length) {
                    document.getElementById("animatedText").innerHTML += text.charAt(index);
                    index++;
                    setTimeout(typeWriter, speed);
                }
            }
            typeWriter();
        });
    </script>


    <!-- Information -->
    <section class="py-12 px-4 sm:px-6 lg:px-8" data-aos="fade-right">
        <div class="container mx-auto text-justify">
            <h1 class="text-cyan-950 font-bold text-3xl mb-5">Trafik Kaza Danışmanlık Hizmetleri</h1>
            <p class="text-gray-900 mb-3">Yetiş Trafik Danışmanlık web sitesi olarak <strong>trafik kazası mağduru</strong> olan kişilerin yardımına koşuyoruz. Trafik kazası danışmanlık alanında <strong>20 yıllık deneyim (tecrübe)</strong> sahibiyiz. Meslek hayatımız boyunca pek çok farklı <strong>trafik kazasında</strong> bulunduk. Yüzlerce kişiye farklı platformlar üzerinden <strong>trafik kazası danışmanlık hizmeti</strong> sunduk. Trafik kazası danışmanlık hizmetimiz sayesinde (doğru yönlendirmeler ve hazırlanan raporlar) <strong>trafik kazasında</strong> haklı taraf olduklarını ispatladılar.</p>

            <p class="text-gray-900 mb-3">Trafik kazası danışma, Trafik kaza danışma alanlarında öncelikli hizmet sunuyoruz. Yetiş Trafik Danışmanlık web sayfası üzerinden <strong>trafik kaza tutanağınızı</strong> bizlere göndererek kolayca ve hızlı bir şekilde danışmanlık hizmeti alabilirsiniz. <strong>Trafik kazası danışmanlık şirketleri</strong> sizlerin haklarınızı savunur ve haklarınızı korumaya yönelik reaksiyonlar almanızı sağlar.</p>
            <p class="text-gray-900">Yetiş Trafik Danışmanlık, kaza mağdurlarına bilgilendirme ve raporlama ile sadece bilgilendirme şeklinde iki farklı hizmet vermektedir. Bu hizmetler sayesinde <strong>trafik kazası</strong> sonrasında izlemeniz gereken yol hakkında bilgi sahibi olabilirsiniz. Ayrıca tarafımızca hazırlanacak rapor ile mağduriyetinizi giderebilirsiniz.</p>
            <h1 class="text-cyan-950 font-bold text-3xl my-5">Neden Trafik Kaza Uzmanı</h1>
            <p class="text-gray-900 mb-3">Öncelikle hoş geldiniz. Eğer buraya gelmişseniz, bir trafik kazası geçirmiş olmalısınız. <strong>Umarım siz ve sevdiklerinizde önemli bir şey yoktur.</strong></p>
            <p class="text-gray-900 mb-3">Toplam 27 yıllık meslek yaşamımın, yaklaşık 20 yılını Jandarma Trafik Tim Komutanı olarak yürüttüm. Başta 5 yıl görev yaptığım İstanbul olmak üzere, çeşitli illerimizdeki trafik görevlerimde yüzlerce, belki binlerce trafik kazasına müdahale ettim. Bu kazalara karışan vatandaşlarımızın, neredeyse tamamının kazaya etken kusurlar konusunda yeterli bilgiye sahip olmadıklarını gözlemledim. Yani biz trafik görevlileri ne derse, kusur da öyle oluyor. Fakat beşer şaşar. Yani trafik görevlileri de yanlışlık yapabilir. Ayrıca sadece maddi hasarla sonuçlanan kazalarda sürücüler kendi aralarında tutanak tanzim etmektedir. Çoğu kez bu tutanaklarda da vatandaşlarımızın yanlışlık yaptığını biliyor ve görüyorum. <strong>İşte bu Web Sitesini oluşturmaktaki amacım, varsa o yanlışlar konusunda sizleri bilgilendirmek, olası mağduriyetlerin önüne daha işin en başında engel olmaktır.</strong> Bu yola çıkmamdaki en büyük itici güç ise, çevremdeki kişilerin “Bu bilgi birikimini neden kendinde tutuyorsun? İnternet sayesinde daha çok kişiye ulaşıp yardımcı olmalısın.” benzeri sözleri olmuştur. <strong>Bilgi paylaştıkça değerlidir.</strong></p>
            <p class="text-gray-900 mb-3">Size bu hizmeti verirken, yılların deneyimini kullanacak, bana gönderdiğiniz kaza tutanaklarını elimden geldiğince özenli değerlendirmeye çalışacağım. Yani bilgi ve emeğimi ortaya koyacağım. Bunun karşılığında cüz’i bir ödeme rica edeceğim sizden. <strong>Beni anlayışla karşılayacağınıza inanıyorum.</strong> Saygılarımla...</p>
            <p class="text-gray-900 mb-3">Yetiş BALCI</p>
            <p class="text-gray-900 mb-3">(E) Jandarma Astsubay</p>
        </div>
    </section>

    <!-- Information -->



    <!-- Stage -->
    <section class="py-12 bg-gray-100 px-4 sm:px-6 lg:px-8" data-aos="fade-left">
        <div class="container mx-auto">
            <div class="text-center text-3xl text-gray-900 font-medium mb-6">
                Sistem Nasıl Çalışır?
            </div>
            <div class="block">
                Trafik kazası yahut trafik cezasına ilişkin rapor tanzim edilebilmesi için sisteme üye olmanız gereklidir. Üyelik işlemlerini tamamlamanızın akabinde ilk olarak tutanaklar sistemimize yüklenir. Daha sonra tarafımızca tutanaklar üzerinde gerekli inceleme işlemleri gerçekleştirilir. Devamında tarafınız ile iletişime geçilerek bilgilendirme yapılır. Rapor düzenleme ve rapor gönderim işlemleri ile süreç tamamlanır.
            </div>
            <!-- Stage Icons -->
            <div class="flex flex-wrap justify-between items-center mt-6">
                <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/5 font-regular text-center mb-3">
                    <i class="bi bi-person-add text-4xl text-orange-600 block"></i>
                    <span class="block">Kayıt Ol</span>
                    <span class="block font-light text-sm">Hemen hesap oluşturun!</span>
                </div>
                <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/5 font-regular text-center mb-3">
                    <i class="bi bi-cloud-upload text-4xl text-orange-600 block"></i>
                    <span class="block">Tutanak Yükle</span>
                    <span class="block font-light text-sm">Ceza & Kaza Tutanağınızı Yükleyin!</span>
                </div>
                <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/5 font-regular text-center mb-3">
                    <i class="bi bi-ui-checks-grid text-4xl text-orange-600 block"></i>
                    <span class="block">Tutanak İnceleme</span>
                    <span class="block font-light text-sm">Tutanağınız Tarafımızca İncelensin!</span>
                </div>
                <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/5 font-regular text-center mb-3">
                    <i class="bi bi-info-circle text-4xl text-orange-600 block"></i>
                    <span class="block">Bilgilendirme</span>
                    <span class="block font-light text-sm">Süreç Hakkında Bilgilendirilin!</span>
                </div>
                <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/5 font-regular text-center mb-3">
                    <i class="bi bi-receipt text-4xl text-orange-600 block"></i>
                    <span class="block">Rapor Tanzimi</span>
                    <span class="block font-light text-sm">Düzenlenen Rapor Tarafınıza İletilsin!</span>
                </div>

            </div>


            <!-- Stage Icons -->
        </div>

    </section>




    <!-- Stage -->




    <!-- SSS -->
    <section class="py-12 px-4 sm:px-6 lg:px-8">
        <div class="container mx-auto">
            <div class="flex flex-wrap justify-between items-center">




                <div class="w-full md:w-1/2 sm:pe-4" data-aos="fade-right">
                    <div class="max-w-2xl mx-auto">
                        <div class="text-3xl font-medium mb-6 text-gray-900">
                            Sıkça Sorulan Sorular
                        </div>
                        <div class="text-justify">
                            Trafik Danışmanlık Hizmetleri ile ilgili sıkça sorulan sorular bölümümüzde, trafik ceza danışmanlığı, trafik kaza analizleri, trafik güvenliği ve yol düzenlemeleri gibi konularda merak edilen sorulara yanıt bulabilirsiniz. Uzman ekibimiz, trafik ile ilgili karşılaşabileceğiniz her türlü soruna çözüm önerileri sunmaktadır.
                        </div>
                        <!-- Statics -->
                        <div class="flex flex-wrap justify-between mt-6">
                            <div class="w-full md:w-1/3 text-center font-regular mb-3">
                                <span class="block text-xl text-gray-800">
                                    <i class="bi bi-person-fill text-orange-600"></i> 3400+
                                </span>
                                <span class="block">Danışan Kişi / Kurum</span>
                            </div>
                            <div class="w-full md:w-1/3 text-center font-regular mb-3">
                                <span class="block text-xl text-gray-800">
                                    <i class="bi bi-award-fill text-orange-600"></i> 1800+
                                </span>
                                <span class="block">Olumlu Sonuç</span>
                            </div>
                            <div class="w-full md:w-1/3 text-center font-regular mb-3">
                                <span class="block text-xl text-gray-800">
                                    <i class="bi bi-envelope-paper-fill text-orange-600"></i> 2000+
                                </span>
                                <span class="block">Rapor Tanzimi</span>
                            </div>
                        </div>
                    </div>

                    <!-- Statics -->
                </div>



                <div class="w-full md:w-1/2 sm:ps-4 " data-aos="fade-left">
                    <!-- Accordion -->
                    <div class="max-w-2xl mx-auto">
                        <!-- Accordion Item 1 -->
                        <div class="border-b">
                            <button class="w-full text-left py-4 focus:outline-none font-semibold text-lg flex justify-between items-center text-gray-900"
                                    onclick="toggleAccordion('accordion-1')">
                                Soru 1: Trafik Danışmanlık Hizmetleri nelerdir?
                                <span class="ml-2">+</span>
                            </button>
                            <div id="accordion-1" class="accordion-content">
                                <p class="py-4">
                                    Trafik danışmanlık hizmetleri, yol güvenliği, trafik yönetimi, kaza analizleri ve trafik planlaması gibi konularda uzman desteği sağlar.
                                </p>
                            </div>
                        </div>

                        <!-- Accordion Item 2 -->
                        <div class="border-b">
                            <button class="w-full text-left py-4 focus:outline-none font-semibold text-lg flex justify-between items-center text-gray-900"
                                    onclick="toggleAccordion('accordion-2')">
                                Soru 2: Trafik güvenliği neden önemlidir?
                                <span class="ml-2">+</span>
                            </button>
                            <div id="accordion-2" class="accordion-content">
                                <p class="py-4">
                                    Trafik güvenliği, kazaların önlenmesi, can ve mal kaybının azaltılması ve güvenli yolculukların sağlanması açısından büyük önem taşır.
                                </p>
                            </div>
                        </div>

                        <!-- Accordion Item 3 -->
                        <div class="border-b">
                            <button class="w-full text-left py-4 focus:outline-none font-semibold text-lg flex justify-between items-center text-gray-900"
                                    onclick="toggleAccordion('accordion-3')">
                                Soru 3: Trafik planlaması nasıl yapılır?
                                <span class="ml-2">+</span>
                            </button>
                            <div id="accordion-3" class="accordion-content">
                                <p class="py-4">
                                    Trafik planlaması, yol ağlarının ve trafik işaretlerinin düzenlenmesi, trafik akışının yönetilmesi ve uzun vadeli çözüm önerilerinin geliştirilmesi sürecidir.
                                </p>
                            </div>
                        </div>
                        <!-- Accordion Item 3 -->
                    </div>
                    <!-- Accordion -->
                </div>






            </div>

        </div>
    </section>
    <!-- SSS -->
</main>



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
                            <li class="mb-3"><i class="bi bi-arrow-right-short"></i> <a href="#" class="hover:text-white">Hakkımda</a></li>
                            <li class="mb-3"><i class="bi bi-arrow-right-short"></i> <a href="#" class="hover:text-white">Hizmetlerimiz</a></li>
                            <li class="mb-3"><i class="bi bi-arrow-right-short"></i> <a href="#" class="hover:text-white">Kusur Tespiti</a></li>
                            <li class="mb-3"><i class="bi bi-arrow-right-short"></i> <a href="#" class="hover:text-white">Örnek Kaza Raporları</a></li>
                            <li class="mb-3"><i class="bi bi-arrow-right-short"></i> <a href="#" class="hover:text-white">Trafik Kazası Danışmanlık</a></li>
                            <li><i class="bi bi-arrow-right-short"></i> <a href="#" class="hover:text-white">Trafik Cezası Danışmanlık</a></li>
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
                            <li class="mb-3"><i class="bi bi-arrow-right-short"></i> <a href="#" class="hover:text-white">Araç ve Sigorta Sorgulama</a></li>
                            <li class="mb-3"><i class="bi bi-arrow-right-short"></i> <a href="#" class="hover:text-white">E-Devlet Kapısı</a></li>
                            <li class="mb-3"><i class="bi bi-arrow-right-short"></i> <a href="#" class="hover:text-white">Sigorta Bilgi ve Gözetim Merkezi</a></li>
                            <li><i class="bi bi-arrow-right-short"></i> <a href="#" class="hover:text-white">Facebook Trafik Kaza Danışmanlık Grubu</a></li>
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
                            <li><a href="#" class="me-3 hover:text-white"><i class="bi bi-instagram"></i> Instagram</a> <a href="#" class="hover:text-white"><i class="bi bi-facebook"></i> Facebook</a> </li>
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

            <div class="block font-bold">
                <a href="https://afyazilim.com" target="_blank class="hover:text-white"">
                    <i class="bi bi-code-slash text-gray-50"></i> A&F Yazılım ve E-Ticaret Hizmetleri
                </a>
            </div>
        </div>

    </section>
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
