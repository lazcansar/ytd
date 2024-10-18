@extends('theme')
@section('title'){{ 'Kayıt Ol' }}@endsection
@section('description'){{ 'Kayıt Ol' }}@endsection
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
                            <span class="text-gray-500">Giriş Yap</span>
                        </li>
                    </ol>
                </nav>
            </div>
        </section>

        <section class="py-12 px-4 sm:px-6 lg:px-8" data-aos="fade-right">
            <div class="flex items-center justify-center">
                <div class="w-full max-w-lg border border-gray-200 rounded shadow px-4 py-6">
                    @if ($errors->any())
                        <div class="bg-amber-900 text-gray-200 p-4">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <h1 class="font-regular text-gray-900 text-xl mb-5">Kayıt Ol</h1>
                    <form action="{{ route('register.user') }}" method="post" class="space-y-4">
                        @csrf

                        <div class="mb-4">
                            <label for="name" class="block text-sm font-medium text-gray-700">Ad Soyad</label>
                            <input type="text" name="name" id="name" class="w-full px-3 py-2 border-gray-300 border rounded ring-0 focus:ring-0 focus:outline-none">
                        </div>

                        <div class="mb-4">
                            <label for="email" class="block text-sm font-medium text-gray-700">E-posta</label>
                            <input type="email" name="email" id="email" class="w-full px-3 py-2 border-gray-300 border rounded ring-0 focus:ring-0 focus:outline-none">
                        </div>

                        <div class="mb-4">
                            <label for="password" class="block text-sm font-medium text-gray-700">Şifre</label>
                            <input type="password" name="password" id="password" class="w-full px-3 py-2 border-gray-300 border rounded ring-0 focus:ring-0 focus:outline-none">
                        </div>

                        <div class="mb-4">
                            <label for="role" class="block text-sm font-medium text-gray-700">Kullanıcı Rolü</label>
                            <select name="role" id="role" class="w-full border px-3 py-2 rounded-lg">
                                <option value="user">Kullanıcı</option>
                                <option value="admin">Yönetici</option>
                            </select>
                        </div>



                        <div class="w-full">
                            <button type="submit" class="px-4 py-2 border border-gray-200 rounded bg-amber-600 hover:bg-amber-700 transition text-gray-100 w-full"><i class="bi bi-person-add"></i> Kayıt Ol</button>
                        </div>
                    </form>

                </div>



            </div>
        </section>


    </main>

@endsection
