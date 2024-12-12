
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Zona') }}
        </h2>
    </x-slot>
    
    <div class="container-fluid pt-4 px-4">
        <h3>Daftar Zona Placard</h3>
        <table class="table table-responsive table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Posisi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($listZona as $zonastiker)
                    <tr>
                        <td>{{ $zonastiker['id'] }}</td>
                        <td>{{ $zonastiker['nama'] }}</td>
                        <td>{{ $zonastiker['letak'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
