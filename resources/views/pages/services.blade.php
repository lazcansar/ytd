@extends('theme')
@section('title'){{ 'Trafik Kazası Danışmanlık Hizmeti' }}@endsection
@section('description'){{ 'Trafik kazası danışmanlık, trafik cezası danışmanlık alanlarında raporlama, kusur tespiti, ceza ve kaza danışmanlığı hizmetleri veriyoruz...' }}@endsection
@section('main')
    <main>
        <section class="bg-gray-100">
            <img src="{{ asset('storage/images/trafik-kazasi-danismanlik-firmasi.jpg') }}" class="w-full">
            <div class="container mx-auto py-3 px-4">
                <nav aria-label="breadcrumb">
                    <ol class="list-none p-0 inline-flex">
                        <!-- Breadcrumb (Yol Haritası) için SEO uyumlu yapı -->
                        <li class="flex items-center">
                            <a href="{{ route('home') }}" class="font-regular text-gray-900 hover:underline">Anasayfa</a>
                            <i class="bi bi-chevron-right mx-2"></i>
                        </li>
                        <li aria-current="page">
                            <span class="text-gray-500">Trafik Kazası Danışmanlık Hizmeti</span>
                        </li>
                    </ol>
                </nav>
            </div>
        </section>

        <section class="py-12 px-4 sm:px-6 lg:px-8" data-aos="fade-right">
            <div class="container mx-auto">
                <div class="flex flex-wrap justify-center items-center">


                    <div class="w-full bg-white rounded-lg shadow-lg p-4">
                        <div class="flex flex-wrap">
                            <!-- Tabs Navigation (left side) -->
                            <ul class="w-full sm:w-1/4" id="tabs-nav">
                                <li class="mb-2">
                                    <a class="text-2xl block bg-gray-100 py-2 px-4 text-gray-900 font-regular hover:bg-amber-600 hover:text-white transition duration-300 active" href="#tab1">
                                        <i class="bi bi-receipt"></i>
                                        Raporlama</a>
                                </li>
                                <li class="mb-2">
                                    <a class="text-2xl block bg-gray-100 py-2 px-4 text-gray-900 font-regular hover:bg-amber-600 hover:text-white transition duration-300" href="#tab2">
                                        <i class="bi bi-ui-checks-grid"></i>
                                        Kusur Tespiti</a>
                                </li>
                            </ul>

                            <!-- Tabs Content (right side) -->
                            <div class="w-full sm:w-3/4 p-4">
                                <div id="tab1" class="tab-content active">
                                    <h2 class="text-2xl font-bold mb-4">Raporlama</h2>
                                    <p>Trafik kazası sonrası inceleme ve araştırma yapılarak kusur tespiti veya kusur oranını belirten, bilim ve tekniğe uygun olarak yasal çerçevede hazırlanan ADLİ BELGE'dir. Bu belge sadece “Trafik Kaza Uzmanı” yetkisine sahip kişi, kurum ve kuruluşlardan alınabilir. Ancak o zaman ADLİ BELGE olan Uzman Mütalaası (Rapor) adli makamlar ve resmi kurumlar tarafından dikkate alınacaktır. Yetkisiz kişilerden alınacak olan bu tür raporların kanuni geçerliliği olmayacağı gibi zaman ve hak kaybına sebep olacağı bilinmelidir.</p>
                                </div>
                                <div id="tab2" class="tab-content">
                                    <h2 class="text-2xl font-bold mb-4">Kusur Tespiti</h2>
                                    <p>Trafik kazalarında ve kaza davalarında daha çabuk sonuca ulaşmak için kusur tespitini veya kusur oranını belirten Uzman Mütalaası (Rapor) alabilirsiniz. Dava konusu olayla ilgili olarak veya bilirkişi raporunun hazırlanmasında değerlendirilmek üzere yada daha önce alınmış bilirkişi raporu hakkında Trafik Kaza Uzmanından Bilimsel Mütalaa (Rapor) alabilirsiniz. Bu yolla kendi bilgilerinizle izah etmekte zorlandığınız veya kısıtlı duruşma süresinde ayrıntılarıyla izah etme imkanı bulamadığınız hususlar, ayrıntılarıyla raporlanmak suretiyle mahkeme heyetinin anlayabilmesine imkan sağlar.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <script>
                        document.addEventListener('DOMContentLoaded', function () {
                            const tabs = document.querySelectorAll('#tabs-nav a');
                            const tabContents = document.querySelectorAll('.tab-content');

                            tabs.forEach(tab => {
                                tab.addEventListener('click', function (event) {
                                    event.preventDefault();

                                    // Remove active class from all tabs and content
                                    tabs.forEach(t => t.classList.remove('active', 'bg-gray-100', 'bg-amber-600', 'text-white'));
                                    tabContents.forEach(content => content.classList.remove('active'));

                                    // Add active class to the clicked tab
                                    this.classList.add('active', 'bg-amber-600', 'text-white');

                                    // Show the corresponding tab content
                                    const contentId = this.getAttribute('href');
                                    document.querySelector(contentId).classList.add('active');
                                });
                            });
                        });
                    </script>


                </div>
            </div>
        </section>

    </main>
@endsection

