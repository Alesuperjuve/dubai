
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Material') }}
        </h2>
    </x-slot>
    
    <div class="container-fluid pt-4 px-4">
        <h3>Daftar Material Placard</h3>
        <table class="table table-responsive table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Keterangan</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($listMaterial as $material)
                    <tr>
                        <td>{{ $material['id'] }}</td>
                        <td>{{ $material['nama'] }}</td>
                        <td>{{ $material['ket'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
