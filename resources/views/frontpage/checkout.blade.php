<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        {{-- karena template untuk frontpage, silakan Lengkapi meta tag yang lain untuk SEO --}}
 {{-- nama web sesuai konfigurasi, dapat juga dibuat dinamis --}}
 
        <title>{{ config('app.name', 'Laravel') }}</title>
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
         <!-- Scripts -->
        {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <script src="{{ asset('js/app.js') }}" defer></script>
        {{-- karena terjadi maslah pada instalasi tailwind, shg masih menggunakan CDN --}}
        <script src="https://cdn.tailwindcss.com"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/twelements/dist/css/index.min.css" />
        <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
    </head>
    <body class="font-sans antialiased">
    <div class="flex items-center justify-center p-12">
  <!-- Author: FormBold Team -->
  <!-- Learn More: https://formbold.com -->
  <div class="container h-screen max-w-full">
  <div class="m-auto my-28 w-96 max-w-lg items-center justify-center overflow-hidden rounded-2xl bg-slate-200 shadow-xl">
    <div class="h-24 bg-white"></div>
    <div class="-mt-20 flex justify-center">
      <img class="h-32 rounded-full" src="https://media.istockphoto.com/vectors/male-profile-flat-blue-simple-icon-with-long-shadow-vector-id522855255?k=20&m=522855255&s=612x612&w=0&h=fLLvwEbgOmSzk1_jQ0MgDATEVcVOh_kqEe0rqi7aM5A=" />
    </div>
    <div class="mt-5 mb-1 px-3 text-center text-lg">Pembelian Berhasil</div>
    <div class="mb-5 px-3 text-center text-sky-500">Harga Barang :  </div>
    <blockquote>
    <div class="mb-5 px-3 text-center text-sky-500">IDR 560.000  </div>
    <blockquote>
    <div class="mb-5 px-3 text-center text-sky-500">Ongkos Kirim :  </div>
    <blockquote>
    <div class="mb-5 px-3 text-center text-sky-500">IDR 20.000 </div>
    <blockquote>
    <button class="block uppercase mx-auto shadow bg-indigo-800 hover:bg-indigo-700 focus:shadow-outline focus:outline-none text-white text-xs py-3 px-10 rounded">KEMBALI</button>
    </blockquote>
  </div>
</div>
    </body>
</html>