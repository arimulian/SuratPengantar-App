@php use Illuminate\Support\Carbon; @endphp
        <!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get PDFs</title>
    @vite(['resources/css/app.css'])
</head>
<body>
<header class="w-full">
    <img src="{{Vite::asset('resources/images/kop-surat.png')}}" alt="kop-surat">
</header>
<section class="w-full mx-auto mt-5 text-center">
    <h2 class="font-semibold underline text-2xl">{{ $data->subject }}</h2>
    <h2 class="font-normal text-xl">No : {{$data->no}}</h2>
</section>
{{--<section class="w-full mx-20 mt-10 text-left">--}}
{{--    <p class="text-lg my-3">Kepada Yth.</p>--}}
{{--    <p class="text-lg my-3">PT arimulian</p>--}}
{{--    <p class="text-lg my-3">Di Tempat</p>--}}
{{--</section>--}}
<section class="w-full mx-20 mt-24 text-left">
    <p class="text-xl my-3">Yang Bertanda tangan di bawah ini:</p>
    <p class="text-xl my-3 mx-3">Nama : {{$data->name_signature}}</p>
    <p class="text-xl my-3 mx-3">Jabatan : {{$data->position}} </p>
</section>
<section class="max-w-6xl mx-20 mt-5 text-left">
    <p class="text-xl my-3">Dengan ini memberikan tugas dan tanggung jawab kepada:</p>
    <p class="text-xl my-3 mx-3">Nama : {{$data->driver}} </p>
    <p class="text-xl my-3 mx-3">No HP : {{$data->phone_number}} </p>
    <p class="text-xl my-3 mx-3">Jenis Barang : {{$data->type_item}} </p>
    <p class="text-xl my-5">Untuk ditugaskan mengambil barang di <span class="font-semibold">{{$data->receiver}}</span>,
        Adapun kendaran yang digunakan dengan Nomor Polisi <span class="font-semibold">{{$data->vehicle_number}}</span>
        .</p>
    <p class="text-xl mt-10">Demikian surat tugas ini dibuat untuk digunakan sebagai mana mestinya.</p>
</section>

<section class="max-w-6xl mx-20 mt-20 text-right">
    <p class="text-xl my-3 ">Karawang, {{Carbon::parse($data->created_at)->format('d F Y')}}</p>
    <p class="text-xl my-3 ">CV Armina Jaya Wastes</p>
    <div class="flex justify-end mx-10">
        <img src="{{Vite::asset('resources/images/ttd.jpg')}}" alt="signature">
    </div>
    <p class="text-xl my-5 mr-15">{{$data->name_signature}}</p>
</section>
</body>
</html>