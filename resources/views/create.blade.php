@extends('layouts.layout')

@section('content')
<div class="w-full flex justify-center">
    <div class="w-full mx-2 2xl:w-[80%] max-w-[100rem] py-5">
        <p class="text-xl font-bold">Adauga proprietate</p>
        <form action="" method="post">
            <div class="grid lg:grid-cols-3 gap-5 md:grid-cols-2 grid-cols-1 mt-10">
                <input type="text" name="title" placeholder="Titlu" class="border-b-[1px] border-black text-lg outline-none px-3">
                <input type="number" name="price" placeholder="Pret" class="border-b-[1px] border-black text-lg outline-none px-3">
                <input type="text" name="comission" placeholder="Comision" class="border-b-[1px] border-black text-lg outline-none px-3">
            </div>
            <div class="grid lg:grid-cols-4 gap-5 md:grid-cols-2 grid-cols-1 mt-10">
                <input type="text" name="rooms" placeholder="Camere" class="border-b-[1px] border-black text-lg outline-none px-3">
                <input type="text" name="baths" placeholder="Bai" class="border-b-[1px] border-black text-lg outline-none px-3">
                <input type="text" name="space" placeholder="Spatiu" class="border-b-[1px] border-black text-lg outline-none px-3">
                <input type="text" name="year" placeholder="An" class="border-b-[1px] border-black text-lg outline-none px-3">
            </div>
            <textarea name="description" placeholder="Descriere" id="" style="resize: none;" cols="30" rows="10" class="p-3 border-[1px] border-black text-lg outline-none w-full mt-10"></textarea>
            <div class="grid lg:grid-cols-4 gap-5 md:grid-cols-2 grid-cols-1 mt-10">
                <select name="city" id="city" class="border-b-[1px] border-black text-lg outline-none px-3">
                    <option selected>Selecteaza orasul</option>
                </select>
                <select name="nh" id="nh" class="border-b-[1px] border-black text-lg outline-none px-3">
                    <option selected>Selecteaza zona</option>
                </select>
                <select name="type" id="type" class="border-b-[1px] border-black text-lg outline-none px-3">
                    <option selected>Selecteaza tipul</option>
                    <option value="1">Comercial</option>
                    <option value="2">Proiect</option>
                    <option value="3">Apartament</option>
                    <option value="4">Vila</option>
                    <option value="5">Teren</option>
                </select>
                <select name="selType" id="selType" class="border-b-[1px] border-black text-lg outline-none px-3">
                    <option selected>Vanzare/Inchiriere</option>
                    <option value="1">Vanzare</option>
                    <option value="2">Inchiriere</option>
                </select>
            </div>
            <div class="grid md:grid-cols-2 gap-5 grid-cols-1 mt-10">
                <input type="text" name="long" placeholder="Longitudine" class="border-b-[1px] border-black text-lg outline-none px-3">
                <input type="number" name="lat" placeholder="Latitudine" class="border-b-[1px] border-black text-lg outline-none px-3">
            </div>
            <textarea name="specs" placeholder="Specificatii (despartite prin ';')" id="" style="resize: none;" rows="5" class="p-3 border-[1px] border-black text-lg outline-none w-full mt-10"></textarea>
            <p class="mt-6">Toate pozele trebuiesc selectate deodata. (Prima poza selectata este poza principala)</p>
            <div class="grid md:grid-cols-2 grid-cols-1 mt-6">
                <div class="flex flex-col items-start">
                    <input type="file" id="fileInput" name="photos" multiple accept="image/png, image/jpeg, image/jpg, image/avif">
                    <input type="submit" value="Salvează" class="mt-6 text-[20px] bg-green-600 cursor-pointer px-6 py-1 font-bold text-white">
                </div>
                <div id="fileNames">

                </div>
            </div>
        </form>
        <script>
            document.getElementById('fileInput').addEventListener('change', function(event) {
                const files = event.target.files;
                const fileNamesDiv = document.getElementById('fileNames');

                fileNamesDiv.innerHTML = '';

                for (let i = 0; i < files.length; i++) {
                    const fileName = files[i].name;

                    const p = document.createElement('p');
                    p.classList.add('flex', 'justify-between', 'items-center', 'mb-2', 'cursor-pointer');

                    const fileNameSpan = document.createElement('span');
                    fileNameSpan.textContent = fileName;

                    p.appendChild(fileNameSpan);

                    fileNamesDiv.appendChild(p);
                }
            });
        </script>
    </div>
</div>
@endsection