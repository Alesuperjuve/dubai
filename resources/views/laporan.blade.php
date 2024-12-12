
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Laporan') }}
        </h2>
    </x-slot>

    <div class="container mt-3">
  <!-- Nav Tabs -->
  <ul class="nav nav-tabs">
    <li class="nav-item">
      <a class="nav-link active" aria-current="page" id="chess-tab" data-bs-toggle="tab" href="#chess">Laporan</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="formula1-tab" data-bs-toggle="tab" href="#formula1">Reference</a>
    </li>
  </ul>

  <!-- Tab Content -->
  <div class="tab-content mt-3">
    <!-- CHESS Content -->
    <div class="tab-pane fade show active" id="chess" role="tabpanel" aria-labelledby="chess-tab">
      <div class="container-fluid pt-4 px-4">
        
        <table class="table table-responsive table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Source</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($listLaporan as $laporan)
                    <tr>
                        <td>{{ $laporan['id'] }}</td>
                        <td>{{ $laporan['nama'] }}</td>
                        <td>{{ $laporan['source'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    </div>

    <!-- FORMULA1 Content -->
    <div class="tab-pane fade" id="formula1" role="tabpanel" aria-labelledby="formula1-tab">
      <table class="table table-responsive table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Part Number</th>
                    
                </tr>
            </thead>
            <tbody>
                @foreach ($listPartNumber as $partNu)
                    <tr>
                        <td>{{ $partNu['id'] }}</td>
                        <td>{{ $partNu['nama'] }}</td>
                     
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
  </div>
</div>

    
    
</x-app-layout>
