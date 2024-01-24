@extends('layouts.app', ['title' => 'Dashboard - Admin'])

@section('content')
<main class="flex-1 overflow-x-hidden  overflow-y-auto bg-gray-300">
    <div class="container mx-auto p-4  flex justify-center items-center h-screen/2"> <!-- Updated with bg-white -->
        <div>
            <div class="flex flex-wrap -mx-4">
                <table class="border-collapse w-full">
                    <tr>
                        <td class="p-4">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/af/Lambang_UIN_Ar-Raniry.png/1200px-Lambang_UIN_Ar-Raniry.png" alt="Logo" width="150" height="150">
                        </td>
                        <td class="p-4 text-center">
                            <div>
                                <div class="text-2xl font-bold">KEMENTERIAN AGAMA REPUBLIK INDONESIA</div>
                                <div class="text-2xl font-bold">UNIVERSITAS ISLAM NEGERI AR-RANIRY BANDA ACEH</div>
                                <div class="text-xl">Jln. Syeikh Abdur Rauf Kopelma Darussalam Banda Aceh</div>
                                <div class="text-md">Telp : (0651) 7552921, 7551857  Fax. 0651-7552922</div>
                                <div class="text-md">Situs: <a href="http://www.ar-raniry.ac.id">www.ar-raniry.ac.id</a></div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2"><hr class="my-4 border-t-2 border-gray-500"></td>
                    </tr>

                    <tr>
                        <td colspan="2" class="text-center">
                            <div><U>SURAT KETERANGAN CUTI KULIAH</U></div>
                            <div>Nomor : B-796/Un.08/B.AKAD/PP.00.9/10</div><br>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <P>Dekan Fakultas Tarbiah dan Keguruan UIN Ar-Raniry Banda Aceh, dengan ini menerapkan bahwa :</P><br>                       
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <b>
                                <div class="label">Nama :</div>
                                <div class="content"></div>
                            
                                <div class="label">NIM :</div>
                                <div class="content"></div>

                                <div class="label">Semester:</div>
                                <div class="content"></div>

                                <div class="label">Penasehat Akademik :</div>
                                <div class="content"></div>

                                <div class="label">Alamat:</div>
                                <div class="content"></div><br>
                            </b>                             
                        </td>                    
                    </tr>
                    <tr>
                        <td colspan="2">
                            <p>Benar yang namanya di atas diberikan izin untuk Cuti Kuliah pada semester genap tahun akademik 2024/2025.</p>
                            <p>Demikian surat keterangan ini diberikan untuk dapat dipergunakan seperlunya.</p>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</main>
@endsection