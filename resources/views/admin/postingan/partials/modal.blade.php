  <!-- Modal -->
  <div class="modal fade" id="ModalPosts" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">New Post</h5>
        </div>
        <div class="modal-body">
          <form action="{{route ('managepost.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            {{-- <div class="mb-3">
              <label for="recipient-name" class="col-form-label">Judul:</label>
              <input type="text" class="form-control" id="recipient-name" name="title">
            </div>
            <div class="mb-3">
              <label for="formFileSm" class="form-label">Sampul Gambar</label>
              <input class="form-control form-control-sm" id="formFileSm" type="file" name="picture">
            </div>
            <div class="mb-3">
              <label for="message-text" class="col-form-label">Sub Judul:</label>
              <textarea class="form-control" id="message-text" name="excerpt"></textarea>
            </div>
            <div class="mb-3">
              <label for="message-text" class="col-form-label">Isi:</label>
              <textarea class="form-control" id="message-text" name="body"></textarea>
            </div> --}}
            <div class="mb-3">
              <label for="recipient-name" class="col-form-label">Nama Kost:</label>
              <input type="text" class="form-control" id="recipient-name" name="title">
            </div>
            <div class="mb-3">
              <label for="category_id" class="form-label">Jenis kost</label>
              <select class="form-select" id="category_id" aria-label="Default select example" name="category_id">
                <option selected>Open this select menu</option>
                <option value="Laki - laki">Laki - laki</option>
                <option value="Perempuan">Perempuan</option>
                <option value="Campur">Campur</option>
              </select>
            </div>
            <div class="mb-3">
              <label for="max_lantai" class="col-form-label">Jumlah lantai:</label>
              <input type="text" class="form-control" id="max_lantai" name="max_lantai">
            </div>
            <div class="mb-3">
              <label for="max_kamarT" class="col-form-label">Jumlah Kamar Tidur:</label>
              <input type="text" class="form-control" id="max_kamarT" name="max_kamarT">
            </div>
            <div class="mb-3">
              <label for="max_kamarM" class="col-form-label">Jumlah Kamar Mandi:</label>
              <input type="text" class="form-control" id="max_kamarM" name="max_kamarM">
            </div>
            <div class="mb-3">
              <label for="alamat_kost" class="col-form-label">Alamat Kost:</label>
              <input type="text" class="form-control" id="alamat_kost" name="alamat_kost">
            </div>
            <div class="mb-3">
              <label for="alamat_kost" class="col-form-label">Jalur trasport:</label>
              <div class="container">
                <div class="row">
                  <div class="col-6 col-md-4 text-center">
                    <input class="form-check-input" type="checkbox" value="Angkot" id="flexCheckDefault" name="checkbox0[]">
                    <label class="form-check-label" for="flexCheckDefault">
                      Angkot
                    </label></div>
                  <div class="col-6 col-md-4 text-center">
                    <input class="form-check-input" type="checkbox" value="Transjakarta" id="flexCheckDefault" name="checkbox0[]">
                    <label class="form-check-label" for="flexCheckDefault">
                      Transjakarta
                    </label> 
                  </div>
              </div>
            </div>
            </div>
            <div class="mb-3">
              <label for="alamat_kost" class="col-form-label">Fasilitas kamar:</label>
              <div class="container text-center">
                <div class="row row-cols-2">
                  <div class="col">
                    <input class="form-check-input" type="checkbox" value="AC" id="flexCheckDefault" name="checkbox1[]">
                    <label class="form-check-label" for="flexCheckDefault">
                      AC
                    </label>
                  </div>
                  <div class="col">
                    <input class="form-check-input" type="checkbox" value="TV" id="flexCheckDefault" name="checkbox1[]">
                    <label class="form-check-label" for="flexCheckDefault">
                      TV
                    </label>
                  </div>
                  <div class="col">
                    <input class="form-check-input" type="checkbox" value="Parkir Luar" id="flexCheckDefault" name="checkbox1[]">
                    <label class="form-check-label" for="flexCheckDefault">
                      Parkir Luar
                    </label>  
                  </div>
                  <div class="col">
                    <input class="form-check-input" type="checkbox" value="Parkir Dalam" id="flexCheckDefault" name="checkbox1[]">
                    <label class="form-check-label" for="flexCheckDefault">
                      Parkir Dalam
                    </label> 
                  </div>
                </div>
              </div>
              
            </div>
            <div class="mb-3">
              <label for="alamat_kost" class="col-form-label">Fasilitas sekitar:</label>
              <div class="container text-center">
                <div class="row row-cols-2">
                  <div class="col">
                    <input class="form-check-input" type="checkbox" value="Rumah sakit" id="flexCheckDefault" name="checkbox3[]">
                    <label class="form-check-label" for="flexCheckDefault">
                      Rumah sakit
                    </label>
                  </div>
                  <div class="col">
                    <input class="form-check-input" type="checkbox" value="Tempat Ibadah" id="flexCheckDefault" name="checkbox3[]">
                    <label class="form-check-label" for="flexCheckDefault">
                      Tempat Ibadah
                    </label>
                  </div>
                  <div class="col">
                    <input class="form-check-input" type="checkbox" value="ATM" id="flexCheckDefault" name="checkbox3[]">
                    <label class="form-check-label" for="flexCheckDefault">
                      ATM
                    </label>
                  </div>
                  <div class="col">
                    <input class="form-check-input" type="checkbox" value="Minimarket" id="flexCheckDefault" name="checkbox3[]">
                    <label class="form-check-label" for="flexCheckDefault">
                      Minimarket
                    </label>
                  </div>
                </div>
              </div>
            </div>
            <div class="mb-3">
              <label for="maps" class="col-form-label">maps:</label>
              <input type="text" class="form-control" id="maps" name="maps">
            </div>
            <div class="mb-3">
              <label for="harga" class="col-form-label">Harga:</label>
              <input type="text" class="form-control" id="harga" name="harga">
            </div>
            <div class="mb-3">
              <label for="formFileSm" class="form-label">Sampul Gambar</label>
              <input class="form-control form-control-sm" id="formFileSm" type="file" name="picture">
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-success">Save</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>