
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Maskapai') }}
        </h2>
    </x-slot>
    
    <div class="container-fluid pt-4 px-4">
        <h3>Daftar Maskapai</h3>
        <table class="table table-responsive table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Negara</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($listMaskapai as $maskapai)
                    <tr>
                        <td>{{ $maskapai['id'] }}</td>
                        <td>{{ $maskapai['nama'] }}</td>
                        <td>{{ $maskapai['negara'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
