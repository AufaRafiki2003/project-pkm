@extends('layouts.app', ['title' => 'Edit rekap_suara_caleg - Admin'])
@section('content')
<main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-300">
    <div class="container mx-auto px-6 py-8">
        <div class="p-6 bg-white rounded-md shadow-md"> 
            <h2 class="text-lg text-gray-700 font-semibold capitalize">EDIT KATEGORI</h2>
         <hr class="mt-4">
        <form action="{{ route('admin.rekap_suara_caleg.update', $rekap_suara_caleg->id_rsc) }}" method="POST" enctype="multipart/form-data">
            @csrf @method('PUT') 
            <div class="grid grid-cols-1 gap-6 mt-4"> 

                <div> 
                    <label class="text-gray-700" for="id_rsc">ID REKAP SUARA</label>
                    <input class="form-input w-full mt-2 rounded-md bg-gray-200 focus:bg-white" type="text" name="id_rsc" value="{{ old('id_rsc',$rekap_suara_caleg->id_rsc) }}" placeholder="Nama Kategori">
                    @error('id_rsc')
                    <div class="w-full bg-red-200 shadow-sm rounded-md overflow-hidden mt-2">
                        <div class="px-4 py-2">
                            <p class="text-gray-600 text-sm">{{$message }}</p>
                        </div>
                    </div>
                    @enderror
                </div> 
                

                <div class="mb-4">
                    <label for="id_tps" class="block text-gray-600 text-sm font-medium mb-2">Pilih TPS</label>
                    <select name="id_tps" id="id_tps" class="form-select w-full">
                        @foreach($tpsuaras as $tpsuara)
                            <option value="{{ $tpsuara->id_tps }}" {{ $rekap_suara_caleg->id_tps == $tpsuara->id_tps ? 'selected' : '' }}>
                                {{ $tpsuara->id_tps }}
                            </option>
                        @endforeach
                    </select>
                    @error('id_tps')
                    <div class="w-full bg-red-200 shadow-sm rounded-md overflow-hidden mt-2">
                        <div class="px-4 py-2">
                            <p class="text-gray-600 text-sm">{{$message }}</p>
                        </div>
                    </div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="id_caleg" class="block text-gray-600 text-sm font-medium mb-2">Pilih CALEG</label>
                    <select name="id_caleg" id="id_caleg" class="form-select w-full">
                        @foreach($calegs as $caleg)
                            <option value="{{ $caleg->id_caleg }}" {{ $rekap_suara_caleg->id_caleg == $caleg->id_caleg ? 'selected' : '' }}>
                                {{ $caleg->nama_caleg }}
                            </option>
                        @endforeach
                    </select>
                    @error('id_caleg')
                    <div class="w-full bg-red-200 shadow-sm rounded-md overflow-hidden mt-2">
                        <div class="px-4 py-2">
                            <p class="text-gray-600 text-sm">{{$message }}</p>
                        </div>
                    </div>
                    @enderror
                </div>

                <div> 
                    <label class="text-gray-700" for="jumlah">JUMLAH</label>
                    <input class="form-input w-full mt-2 rounded-md bg-gray-200 focus:bg-white" type="text" name="jumlah" value="{{ old('jumlah',$rekap_suara_caleg->jumlah) }}" placeholder="Jumlah">
                    @error('jumlah')
                    <div class="w-full bg-red-200 shadow-sm rounded-md overflow-hidden mt-2">
                        <div class="px-4 py-2">
                            <p class="text-gray-600 text-sm">{{$message }}</p>
                        </div>
                    </div>
                    @enderror
                </div> 
                
            </div>
            <div class="flex justify-start mt-4">
                <button type="submit" class="px-4 py-2 bg-gray-600 text-white rounded-md hover:bg-gray-700 focus:outline-none focus:bg-gray-700">UPDATE</button>
            </div>
        </form>
    </div>
</div>
</main>
@endsection