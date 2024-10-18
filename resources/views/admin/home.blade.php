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
                            <span class="text-gray-500">Yönetim Paneli</span>
                        </li>
                    </ol>
                </nav>
            </div>
        </section>

        <div class="container mx-auto py-3 px-4">
            <div class="flex flex-wrap justify-between items-center">

                <div class="w-full md:w-1/2 p-4">
                    <div class="border border-gray-200 shadow rounded">
                        <h1 class="text-xl font-regular bg-gray-500 text-white px-4 py-2 rounded-t">Kaza Tutanakları</h1>
                            <div class="overflow-x-auto">
                                <table class="min-w-full bg-white border border-gray-300">
                                    <thead>
                                    <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                                        <th class="py-3 px-3 text-left">Ad Soyad</th>
                                        <th class="py-3 px-3 text-left">Telefon</th>
                                        <th class="py-3 px-3 text-left">E-Mail</th>
                                        <th class="py-3 px-3 text-left">Talep Tarihi</th>
                                        <th class="py-3 px-3 text-left">İşlem</th>
                                    </tr>
                                    </thead>
                                    <tbody class="text-gray-600 text-sm font-light">
                                    @if($crashAll)
                                        @foreach($crashAll as $crash)
                                            <tr class="border-b border-gray-300 hover:bg-gray-100" data-id="{{ $crash->id }}">
                                                <td class="py-3 px-3 text-left">{{ $crash->name . ' ' . $crash->surname }}</td>
                                                <td class="py-3 px-3 text-left">{{ $crash->phone }}</td>
                                                <td class="py-3 px-3 text-left">{{ $crash->email }}</td>
                                                <td class="py-3 px-3 text-left">{{ $crash->created_at }}</td>
                                                <td class="py-3 px-3 text-left">
                                                    <a href="{{ route('crash.view', $crash->id) }}" class="mb-1 bg-gray-600 text-white px-2 py-1 hover:bg-gray-500 transition block text-center rounded">Görüntüle</a>
                                                    <a data-id="{{ $crash->id }}" href="javascript:void(0);" class="bg-amber-900 text-white px-2 py-1 hover:bg-amber-800 transition block text-center rounded delete-btn">Sil</a></td>
                                            </tr>
                                        @endforeach
                                    @endif
                                    </tbody>
                                </table>
                                <p id="statusMessage" class="mt-4 bg-orange-900 px-4 py-2 text-white"></p>
                            </div>
                    </div>
                </div>
                <script>
                    document.querySelectorAll('.delete-btn').forEach(button => {
                        button.addEventListener('click', function () {
                            const crashId = this.getAttribute('data-id');

                            if(!confirm('Bu kaydı silmek istediğinize emin misiniz?')) {
                                return;
                            }
                            fetch(`/admin/crash-delete/${crashId}`, {
                                method: 'DELETE',
                                headers: {
                                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                                    'Content-Type': 'application/json',
                                }
                            })
                                .then(response => response.json())
                                .then(data => {
                                    if(data.success) {
                                        const row = document.querySelector(`tr[data-id="${crashId}"]`);
                                        if(row) {
                                            row.remove();
                                        }
                                        document.getElementById('statusMessage').textContent = data.message;
                                    }else {
                                        alert('Kayıt silinemedi.');
                                    }
                                })
                                .catch(error => {
                                    console.error('Hata:', error);
                                    alert('Bir hata oluştu.');
                                });
                        });
                    });

                </script>

                <div class="w-full md:w-1/2 p-4">
                    <div class="border border-gray-200 shadow rounded">
                        <h1 class="text-xl font-regular bg-amber-700 text-white px-4 py-2 rounded-t">Ceza Tutanakları</h1>
                        <div class="overflow-x-auto">
                            <table class="min-w-full bg-white border border-gray-300">
                                <thead>
                                <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                                    <th class="py-3 px-3 text-left">Ad Soyad</th>
                                    <th class="py-3 px-3 text-left">Telefon</th>
                                    <th class="py-3 px-3 text-left">E-Mail</th>
                                    <th class="py-3 px-3 text-left">Talep Türü</th>
                                    <th class="py-3 px-3 text-left">İşlem</th>
                                </tr>
                                </thead>
                                <tbody class="text-gray-600 text-sm font-light">
                                <tr class="border-b border-gray-300 hover:bg-gray-100">
                                    <td class="py-3 px-3 text-left">Abdullah GÖKSAL</td>
                                    <td class="py-3 px-3 text-left">0546 500 70 16</td>
                                    <td class="py-3 px-3 text-left">abdullahgoksal@outlook.com</td>
                                    <td class="py-3 px-3 text-left">Rapor ve Bilgi</td>
                                    <td class="py-3 px-3 text-left"><a href="">Görüntüle</a> <a href="">Sil</a></td>
                                </tr>
                                <tr class="border-b border-gray-300 hover:bg-gray-100">
                                    <td class="py-3 px-3 text-left">Abdullah GÖKSAL</td>
                                    <td class="py-3 px-3 text-left">0546 500 70 16</td>
                                    <td class="py-3 px-3 text-left">abdullahgoksal@outlook.com</td>
                                    <td class="py-3 px-3 text-left">Rapor ve Bilgi</td>
                                    <td class="py-3 px-3 text-left"><a href="">Görüntüle</a> <a href="">Sil</a></td>
                                </tr>
                                <tr class="border-b border-gray-300 hover:bg-gray-100">
                                    <td class="py-3 px-3 text-left">Abdullah GÖKSAL</td>
                                    <td class="py-3 px-3 text-left">0546 500 70 16</td>
                                    <td class="py-3 px-3 text-left">abdullahgoksal@outlook.com</td>
                                    <td class="py-3 px-3 text-left">Rapor ve Bilgi</td>
                                    <td class="py-3 px-3 text-left"><a href="">Görüntüle</a> <a href="">Sil</a></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>









            </div>

        </div>





    </main>

@endsection
