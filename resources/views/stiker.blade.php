<!-- resources/views/stiker.blade.php -->
<x-app-layout>
    <div class="container-fluid pt-4 px-4">
        <h3>Daftar Stiker</h3>
        <table class="table table-responsive table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Body</th>
                    <th>Description</th>
                    <th>Size</th>
                    <th>Font</th>
                    <th>Color</th>
                    <th>Language</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($listStiker as $stiker)
                    <tr>
                        <td>{{ $stiker['id'] }}</td>
                        <td>
                            <a href="" 
   data-bs-toggle="modal" 
   data-bs-target="#modalPlacard"
   data-id="{{ $stiker['id'] }}"
   data-name="{{ $stiker['name'] }}"
   data-size="{{ $stiker['size'] }}"
   data-radius="{{ $stiker['radius'] }}"
   data-font="{{ $stiker['font'] }}"
   data-color="{{ $stiker['color'] }}"
   data-artwork="{{ $stiker['artwork'] }}"
   data-background="{{ $stiker['background'] }}"
   data-zone="{{ $stiker['zone'] }}"
   data-planepos="{{ $stiker['planepos'] }}"
   data-paperx="{{ $stiker['paperX'] }}"
   data-papery="{{ $stiker['paperY'] }}"
   data-title="{{ $stiker['title'] }}"
   data-titleheight="{{ $stiker['titleheight'] }}"
   data-body="{{ $stiker['body'] }}"
   data-bodyheight="{{ $stiker['bodyheight'] }}"
   data-otherheight="{{ $stiker['otherheight'] }}"
   data-materialint="{{ $stiker['materialint'] }}"
   data-materialext="{{ $stiker['materialext'] }}"
   data-materialsten="{{ $stiker['materialsten'] }}"
   data-description="{{ $stiker['description'] }}"
   data-scale="{{ $stiker['scale'] }}"
   data-lang="{{ $stiker['lang'] }}"
   title="Detail Placard"
   class="detplac">
   {{ $stiker['title'] }}
</a>
                            </td>
                        <td>{{ $stiker['body'] }}</td>
                        <td>{{ $stiker['description'] }}</td>
                        <td>{{ $stiker['size'] }}</td>
                        <td>{{ $stiker['font'] }}</td>
                        <td>{{ $stiker['color'] }}</td>
                        <td>{{ $stiker['lang'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!--//modal -->
    <div class="modal" tabindex="-1" id="modalPlacard" aria-labelledby="modalPlacard" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <h5 class="modal-title text-white">Placard</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
       </div>
    </div>
  </div>
</div>


</x-app-layout>

<!-- Kirim data ke modal -->
<script>
$(document).ready(function() {
    // Event handler untuk link dengan class 'detplac'
    $('.detplac').on('click', function() {
        // Ambil data dari atribut data-*
        var id = $(this).data('id');
        var name = $(this).data('name');
        var size = $(this).data('size');
        var radius = $(this).data('radius');
        var font = $(this).data('font');
        var color = $(this).data('color');
        var artwork = $(this).data('artwork');
        var background = $(this).data('background');
        var zone = $(this).data('zone');
        var planepos = $(this).data('planepos');
        var paperX = $(this).data('paperx');
        var paperY = $(this).data('papery');
        var title = $(this).data('title');
        var titleHeight = $(this).data('titleheight');
        var body = $(this).data('body');
        var bodyHeight = $(this).data('bodyheight');
        var otherHeight = $(this).data('otherheight');
        var materialInt = $(this).data('materialint');
        var materialExt = $(this).data('materialext');
        var materialSten = $(this).data('materialsten');
        var description = $(this).data('description');
        var scale = $(this).data('scale');
        var lang = $(this).data('lang');

        // Format konten modal dalam tabel
var modalContent = `
    <div class="table-responsive">
        <table class="table table-hover table-sm table-bordered">
            <tbody>
                
                <tr><th class="bg-light">Title</th><td>${title}</td></tr>
                <tr><th class="bg-light">Body</th><td>${body}</td></tr>
                <tr><th class="bg-light">Font</th><td>${font}</td></tr>
                <tr><th class="bg-light">Color</th><td>${color}</td></tr>
                <tr><th class="bg-light">Size</th><td>${size}</td></tr>
                <tr><th class="bg-light">Radius</th><td>${radius}</td></tr>
                <tr><th class="bg-light">Artwork</th><td>${artwork}</td></tr>
                <tr><th class="bg-light">Background</th><td>${background}</td></tr>
                <tr><th class="bg-light">Zone</th><td>${zone}</td></tr>
                <tr><th class="bg-light">Plane Position</th><td>${planepos}</td></tr>
                <tr><th class="bg-light">Paper X</th><td>${paperX}</td></tr>
                <tr><th class="bg-light">Paper Y</th><td>${paperY}</td></tr>
                <tr><th class="bg-light">Title Height</th><td>${titleHeight}</td></tr>
                <tr><th class="bg-light">Body Height</th><td>${bodyHeight}</td></tr>
                <tr><th class="bg-light">Other Height</th><td>${otherHeight}</td></tr>
                <tr><th class="bg-light">Material Interior</th><td>${materialInt}</td></tr>
                <tr><th class="bg-light">Material Exterior</th><td>${materialExt}</td></tr>
                <tr><th class="bg-light">Material Stencil</th><td>${materialSten}</td></tr>
                <tr><th class="bg-light">Description</th><td>${description}</td></tr>
                <tr><th class="bg-light">Scale</th><td>${scale}</td></tr>
                <tr><th class="bg-light">Language</th><td>${lang}</td></tr>
            </tbody>
        </table>
    </div>
`;


        // Set header modal dengan title
         $('.modal-title').text(`Detail Placard ${title}`);


        // Set konten modal
        $('.modal-body').html(modalContent);

        // Tampilkan modal
        $('#modalPlacard').modal('show');
    });
});

</script>