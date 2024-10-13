@extends('theme')
@section('main')
    <main>
        <section class="bg-gray-100">
            <img src="{{ asset('storage/images/about-bg.jpg') }}" class="w-full">
            <div class="container mx-auto py-3 px-4">
                <nav aria-label="breadcrumb">
                    <ol class="list-none p-0 inline-flex">
                        <!-- Breadcrumb (Yol Haritası) için SEO uyumlu yapı -->
                        <li class="flex items-center">
                            <a href="{{ route('home') }}" class="font-regular text-gray-900 hover:underline">Anasayfa</a>
                            <i class="bi bi-chevron-right mx-2"></i>
                        </li>
                        <li aria-current="page">
                            <span class="text-gray-500">Hakkımda</span>
                        </li>
                    </ol>
                </nav>
            </div>
        </section>

        <section class="py-12 px-4 sm:px-6 lg:px-8" data-aos="fade-right">
            <div class="container mx-auto">
                <div class="flex flex-wrap justify-between">


                    <div class="w-full md:w-1/2 sm:pe-2">

                        <div class="border p-6 border-gray-200 rounded text-justify">
                            <div class="text-2xl mb-5 font-medium text-amber-800">(E) Jandarma Astsubay Yetiş BALCI</div>
                            <p class="mb-3 indent-8">Öncelikle hoş geldiniz. Eğer buraya gelmişseniz, bir trafik kazası geçirmiş olmalısınız. <strong>Umarım siz ve sevdiklerinizde önemli bir şey yoktur.</strong></p>
                            <p class="mb-3 indent-8">Toplam 27 yıllık meslek yaşamımın, yaklaşık 20 yılını Jandarma Trafik Tim Komutanı olarak yürüttüm. Başta 5 yıl görev yaptığım İstanbul olmak üzere, çeşitli illerimizdeki trafik görevlerimde yüzlerce, belki binlerce trafik kazasına müdahale ettim. Bu kazalara karışan vatandaşlarımızın, neredeyse tamamının kazaya etken kusurlar konusunda yeterli bilgiye sahip olmadıklarını gözlemledim. Yani biz trafik görevlileri ne derse, kusur da öyle oluyor. Fakat beşer şaşar. Yani trafik görevlileri de yanlışlık yapabilir. Ayrıca sadece maddi hasarla sonuçlanan kazalarda sürücüler kendi aralarında tutanak tanzim etmektedir. Çoğu kez bu tutanaklarda da vatandaşlarımızın yanlışlık yaptığını biliyor ve görüyorum. <strong>İşte bu Web Sitesini oluşturmaktaki amacım, varsa o yanlışlar konusunda sizleri bilgilendirmek, olası mağduriyetlerin önüne daha işin en başında engel olmaktır.</strong> Bu yola çıkmamdaki en büyük itici güç ise, çevremdeki kişilerin “Bu bilgi birikimini neden kendinde tutuyorsun? İnternet sayesinde daha çok kişiye ulaşıp yardımcı olmalısın.” benzeri sözleri olmuştur. <strong>Bilgi paylaştıkça değerlidir.</strong></p>
                            <p class="mb-3 indent-8">Yetiş BALCI</p>
                            <p class="mb-3 indent-8">(E) Jandarma Astsubay</p>

                        </div>

                    </div>


                    <div class="w-full md:w-1/2 sm:ps-2">
                        <div class="border p-2 shadow-2xl border-gray-200 rounded">
                            <img src="{{ asset('storage/images/yetis-balci.jpeg') }}" class="w-full">
                        </div>
                    </div>


                </div>
            </div>
        </section>

    </main>
@endsection

