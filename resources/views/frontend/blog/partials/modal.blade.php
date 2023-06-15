<div class="modal modal-xl fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        @php
        $posts = \App\PostManage::all();
        @endphp
        @foreach ($posts as $w)
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalToggleLabel">{{ $w->title }}</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="container align-items-center text-center">
            <div class="row">
              <div class="col">
                <div class="row mb-2">
                  <img src="{{ asset('aubna') }}/assets/img/blog-2.jpg" class="card-img-top" alt="...">
                </div>
                <div class="row mb-2">
                  {{ $w->maps }}
                </div>
              </div>
              <div class="col">
                <div class="row">
                  <div class="card mb-2">
                    <div class="card-body">
                      <h5 class="card-title">Detail Pemilik</h5>
                      <hr style="border: 0.5px solid #F86D08;">
                      <p class="card-text">Pemilik : </p>
                      <p class="card-text">Alamat : {{ $w->alamat_kost }}</p>
                      <p class="card-text">nomor : </p>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="card mb-2">
                    <div class="card-body">
                      <h5 class="card-title">Detail Kost</h5>
                      <hr style="border: 0.5px solid #F86D08;">
                      <p class="card-text">Deskripsi :</p>
                      <p class="card-text"></p>
                      <p class="card-text">Jenis kost : </p>
                      <p class="card-text">Alamat : {{ $w->alamat_kost }}</p>
                      <p class="card-text">Fasilitas : {{ $w->fasilitas_kamar }}</p>
                      <p class="card-text">Dekat dengan : {{ $w->fasilitas_sekitar }}</p>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <button type="button" class="btn btn-success btn-lg">Hubungi</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer text-center">
          <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal">close</button>
        </div>
        @endforeach
      </div>
    </div>
</div>
  