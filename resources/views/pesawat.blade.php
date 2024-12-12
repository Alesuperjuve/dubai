
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Pesawat') }}
        </h2>
    </x-slot>
    <div class="container mt-3">
      <!-- Nav Tabs -->
      <ul class="nav nav-tabs">
        <li class="nav-item">
          <a class="nav-link active" id="arabica-tab" data-bs-toggle="tab" href="#arabica">Pabrikan</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" aria-current="page" id="gayo-tab" data-bs-toggle="tab" href="#gayo">Tipe</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" aria-current="page" id="robusta-tab" data-bs-toggle="tab" href="#robusta">Maskapai</a>
        </li>
        
      </ul>

  <!-- Tab Content -->
  <div class="tab-content mt-3">
    <!-- Maskapai Content -->
    <div class="tab-pane fade show active" id="robusta" role="tabpanel" aria-labelledby="robusta-tab">
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


    <!-- Pabrikan Content -->
    <div class="tab-pane fade" id="arabica" role="tabpanel" aria-labelledby="arabica-tab">
      <div class="container-fluid pt-4 px-4">
        <table class="table table-responsive table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Negara</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($listPesawat as $pesawat)
                    <tr>
                        <td>{{ $pesawat['id'] }}</td>
                        <td>{{ $pesawat['nama'] }}</td>
                        <td>{{ $pesawat['negara'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    </div>

    <!-- Tipe Content -->
    <div class="tab-pane fade" id="gayo" role="tabpanel" aria-labelledby="gayo-tab">
      <div class="container-fluid pt-4 px-4">
        <table class="table table-responsive table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    
                </tr>
            </thead>
            <tbody>
                @foreach ($listTipePlane as $tipeav)
                    <tr>
                        <td>{{ $tipeav['id'] }}</td>
                        <td>{{ $tipeav['nama'] }}</td>
                     
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    </div>
    
  </div>
</div>

    
</x-app-layout>
