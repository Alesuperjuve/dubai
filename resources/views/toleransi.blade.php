<x-app-layout>
    <div class="container-fluid pt-4 px-4">
        <div class="container mt-5">
        <!-- Tab Navigation -->
        <ul class="nav nav-tabs" id="tabDetailPlacard" role="tablist">
            <!-- Tab Font Placard -->
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="tab-fontPlacard-tab" data-bs-toggle="tab" data-bs-target="#tab-fontPlacard" type="button" role="tab" aria-controls="tab-fontPlacard" aria-selected="true">
                    Font
                </button>
            </li>

             <!-- Tab Font Color -->
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="tab-fontColor-tab" data-bs-toggle="tab" data-bs-target="#tab-fontColor" type="button" role="tab" aria-controls="tab-fontColor" aria-selected="false">
                    Color
                </button>
            </li>
            
            <!-- Tab Material Placard -->
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="tab-materialPlacard-tab" data-bs-toggle="tab" data-bs-target="#tab-materialPlacard" type="button" role="tab" aria-controls="tab-materialPlacard" aria-selected="false">
                    Material
                </button>
            </li>

            <!-- Tab Artwork -->
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="tab-artworkPlacard-tab" data-bs-toggle="tab" data-bs-target="#tab-artworkPlacard" type="button" role="tab" aria-controls="tab-artworkPlacard" aria-selected="false">
                    Artwork
                </button>
            </li>

            <!-- Tab Background Placard -->
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="tab-backgroundPlacard-tab" data-bs-toggle="tab" data-bs-target="#tab-backgroundPlacard" type="button" role="tab" aria-controls="tab-backgroundPlacard" aria-selected="false">
                    Background
                </button>
            </li>

            <!-- Tab Zone -->
<li class="nav-item" role="presentation">
    <button class="nav-link" id="tab-zone-tab" data-bs-toggle="tab" data-bs-target="#tab-zone" type="button" role="tab" aria-controls="tab-zone" aria-selected="false">
        Zone
    </button>
</li>

<!-- Tab Title -->
<li class="nav-item" role="presentation">
    <button class="nav-link" id="tab-title-tab" data-bs-toggle="tab" data-bs-target="#tab-title" type="button" role="tab" aria-controls="tab-title" aria-selected="false">
        Title
    </button>
</li>

<!-- Tab Title Height 
<li class="nav-item" role="presentation">
    <button class="nav-link" id="tab-titleHeight-tab" data-bs-toggle="tab" data-bs-target="#tab-titleHeight" type="button" role="tab" aria-controls="tab-titleHeight" aria-selected="false">
        Title Height
    </button>
</li>-->

<!-- Tab Body 
<li class="nav-item" role="presentation">
    <button class="nav-link" id="tab-body-tab" data-bs-toggle="tab" data-bs-target="#tab-body" type="button" role="tab" aria-controls="tab-body" aria-selected="false">
        Body
    </button>
</li>-->



<!-- Tab Other Height 
<li class="nav-item" role="presentation">
    <button class="nav-link" id="tab-otherHeight-tab" data-bs-toggle="tab" data-bs-target="#tab-otherHeight" type="button" role="tab" aria-controls="tab-otherHeight" aria-selected="false">
        Other Height
    </button>
</li>-->

<!-- Tab Description -->
<li class="nav-item" role="presentation">
    <button class="nav-link" id="tab-description-tab" data-bs-toggle="tab" data-bs-target="#tab-description" type="button" role="tab" aria-controls="tab-description" aria-selected="false">
        Desc
    </button>
</li>

<!-- Tab Height -->
<li class="nav-item" role="presentation">
    <button class="nav-link" id="tab-bodyHeight-tab" data-bs-toggle="tab" data-bs-target="#tab-bodyHeight" type="button" role="tab" aria-controls="tab-bodyHeight" aria-selected="false">
        Height
    </button>
</li>

<!-- Tab Scale -->
<li class="nav-item" role="presentation">
    <button class="nav-link" id="tab-scale-tab" data-bs-toggle="tab" data-bs-target="#tab-scale" type="button" role="tab" aria-controls="tab-scale" aria-selected="false">
        Scale
    </button>
</li>

<!-- Tab Size -->
<li class="nav-item" role="presentation">
    <button class="nav-link" id="tab-size-tab" data-bs-toggle="tab" data-bs-target="#tab-size" type="button" role="tab" aria-controls="tab-size" aria-selected="false">
        Size
    </button>
</li>

<!-- Tab Radius -->
<li class="nav-item" role="presentation">
    <button class="nav-link" id="tab-radius-tab" data-bs-toggle="tab" data-bs-target="#tab-radius" type="button" role="tab" aria-controls="tab-radius" aria-selected="false">
        Radius
    </button>
</li>

<!-- Tab Tolerance Placard -->
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="tab-tolerancePlacard-tab" data-bs-toggle="tab" data-bs-target="#tab-tolerancePlacard" type="button" role="tab" aria-controls="tab-tolerancePlacard" aria-selected="false">
                    Tolerance
                </button>
            </li>

        </ul>

        <!-- Tab Content -->
        <div class="tab-content mt-3" id="kontenPlacard">
            <!-- Konten Tab Font Placard -->
            <div class="tab-pane fade show active" id="tab-fontPlacard" role="tabpanel" aria-labelledby="tab-fontPlacard-tab">
                
                <table class="table table-responsive table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Font Type</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($listFontPlacard as $fontPla)
                            <tr>
                                <td>{{ $fontPla['id'] }}</td>
                                <td>{{ $fontPla['nama'] }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            
            <!-- Konten Tab Material Placard -->
            <div class="tab-pane fade" id="tab-materialPlacard" role="tabpanel" aria-labelledby="tab-materialPlacard-tab">
                
                <table class="table table-responsive table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Material</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($listMaterial as $mater)
                            <tr>
                                <td>{{ $mater['id'] }}</td>
                                <td>{{ $mater['nama'] }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <!-- Konten Tab Tolerance Placard -->
            <div class="tab-pane fade" id="tab-tolerancePlacard" role="tabpanel" aria-labelledby="tab-tolerancePlacard-tab">
                
                <table class="table table-responsive table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tolerance</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($listToleransi as $toleransi)
                            <tr>
                                <td>{{ $toleransi['id'] }}</td>
                                <td>{{ $toleransi['dimension'] }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <!-- Konten Tab Font Color -->
            <div class="tab-pane fade" id="tab-fontColor" role="tabpanel" aria-labelledby="tab-fontColor-tab">
                
                <table class="table table-responsive table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Font Color</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($listFontColor as $focol)
                            <tr>
                                <td>{{ $focol['id'] }}</td>
                                <td>{{ $focol['nama'] }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <!-- Konten Tab Artwork -->
            <div class="tab-pane fade" id="tab-artworkPlacard" role="tabpanel" aria-labelledby="tab-artworkPlacard-tab">
                
                <table class="table table-responsive table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Artwork</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($listArtwork as $artw)
                            <tr>
                                <td>{{ $artw['id'] }}</td>
                                <td>{{ $artw['nama'] }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <!-- Konten Tab Background -->
            <div class="tab-pane fade" id="tab-backgroundPlacard" role="tabpanel" aria-labelledby="tab-backgroundPlacard-tab">
                
                <table class="table table-responsive table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Background</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($listBackground as $arriereplan)
                            <tr>
                                <td>{{ $arriereplan['id'] }}</td>
                                <td>{{ $arriereplan['nama'] }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <!-- Konten Tab Zone -->
<div class="tab-pane fade" id="tab-zone" role="tabpanel" aria-labelledby="tab-zone-tab">
    
    <table class="table table-responsive table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Zone</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($listZone as $zonea)
                            <tr>
                                <td>{{ $zonea['id'] }}</td>
                                <td>{{ $zonea['nama'] }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
</div>

<!-- Konten Tab Title -->
<div class="tab-pane fade" id="tab-title" role="tabpanel" aria-labelledby="tab-title-tab">
    
    <table class="table table-responsive table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($listTitle as $titjud)
                            <tr>
                                <td>{{ $titjud['id'] }}</td>
                                <td>{{ $titjud['nama'] }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
</div>

<!-- Konten Tab Title Height 
<div class="tab-pane fade" id="tab-titleHeight" role="tabpanel" aria-labelledby="tab-titleHeight-tab">
    
    <p>Konten di sini (Title Height)</p>
</div>-->

<!-- Konten Tab Body -->
<div class="tab-pane fade" id="tab-body" role="tabpanel" aria-labelledby="tab-body-tab">
    
    <table class="table table-responsive table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Body</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($listBody as $bodie)
                            <tr>
                                <td>{{ $bodie['id'] }}</td>
                                <td>{{ $bodie['nama'] }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
</div>

<!-- Konten Tab Height -->
<div class="tab-pane fade" id="tab-bodyHeight" role="tabpanel" aria-labelledby="tab-bodyHeight-tab">
    
    <table class="table table-responsive table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Height</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($listHeight as $heit)
                            <tr>
                                <td>{{ $heit['id'] }}</td>
                                <td>{{ $heit['nama'] }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
</div>

<!-- Konten Tab Other Height 
<div class="tab-pane fade" id="tab-otherHeight" role="tabpanel" aria-labelledby="tab-otherHeight-tab">
    
    <p>Konten di sini (Other Height)</p>
</div>-->

<!-- Konten Tab Description -->
<div class="tab-pane fade" id="tab-description" role="tabpanel" aria-labelledby="tab-description-tab">
    
    <table class="table table-responsive table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($listDescription as $desck)
                            <tr>
                                <td>{{ $desck['id'] }}</td>
                                <td>{{ $desck['nama'] }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
</div>

<!-- Konten Tab Scale -->
<div class="tab-pane fade" id="tab-scale" role="tabpanel" aria-labelledby="tab-scale-tab">
    
    <table class="table table-responsive table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Scale</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($listScale as $skala)
                            <tr>
                                <td>{{ $skala['id'] }}</td>
                                <td>{{ $skala['nama'] }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
</div>

<!-- Konten Tab Size -->
<div class="tab-pane fade" id="tab-size" role="tabpanel" aria-labelledby="tab-size-tab">
    
    <table class="table table-responsive table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Size</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($listSize as $sizepla)
                            <tr>
                                <td>{{ $sizepla['id'] }}</td>
                                <td>{{ $sizepla['nama'] }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
</div>


<!-- Konten Tab Radius -->
<div class="tab-pane fade" id="tab-radius" role="tabpanel" aria-labelledby="tab-radius-tab">
    
    <table class="table table-responsive table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Radius</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($listRadius as $radious)
                            <tr>
                                <td>{{ $radious['id'] }}</td>
                                <td>{{ $radious['nama'] }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
</div>

        </div>
    </div>


    
</x-app-layout>
