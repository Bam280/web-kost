{{-- 
@php
$posts = \App\PostManage::all();

$selectedTransport = ['Angkot', 'Transjakarta'];
$checkboxFkos = ['AC', 'TV', 'Parkir Luar', 'Parkir Dalam', 'Kamar Mandi Dalam', 'Kamar Mandi Luar', 'Dapur Bersama', 'Dapur Sendiri'];
$checkboxFsekitar = ['Rumah sakit', 'Tempat Ibadah', 'ATM', 'Minimarket'];

@endphp --}}

<!-- Modal -->

{{-- <div class="modal fade" id="ModaleditPosts-{{ $posts->id }}" tabindex="-1" aria-labelledby="ModaleditPosts" aria-hidden="true">
    <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New Post</h5>
        </div>
        <div class="modal-body">
            <form action="{{ route('managepost.update', $posts->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            
            <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Nama Kost:</label>
            <input type="text" class="form-control" id="recipient-name" name="title" value="{{ $posts->namaKos }}">
            </div>
            <div class="mb-3">
            <label for="desc" class="col-form-label">Deskripsi :</label>
            <textarea class="form-control" id="desc" name="desc" rows="3" value="{{ $posts->desc }}"></textarea>
            </div>
            <div class="mb-3">
            <label for="category_id" class="form-label">Jenis kost</label>
            <select class="form-select" id="category_id" aria-label="Default select example" name="jenisKos" >
                <option selected>{{ $posts->category_id }}</option>
                <option value="Laki - laki">Laki - laki</option>
                <option value="Perempuan">Perempuan</option>
                <option value="Campur">Campur</option>
            </select>
            </div>
            <div class="mb-3">
            <label for="max_lantai" class="col-form-label">Jumlah lantai:</label>
            <input type="text" class="form-control" id="max_lantai" name="max_lantai" value="{{ $posts->jumLantai }}">
            </div>
            <div class="mb-3">
            <label for="max_kamarT" class="col-form-label">Jumlah Kamar Tidur:</label>
            <input type="text" class="form-control" id="max_kamarT" name="max_kamarT" value="{{ $posts->jumKamar }}">
            </div>
            <div class="mb-3">
            <label for="max_kamarM" class="col-form-label">Jumlah Kamar Mandi:</label>
            <input type="text" class="form-control" id="max_kamarM" name="max_kamarM" value="{{ $posts->jumKamarMandi }}">
            </div>
            <div class="mb-3">
            <label for="alamat_kost" class="col-form-label">Alamat Kost:</label>
            <input type="text" class="form-control" id="alamat_kost" name="alamat_kost" value="{{ $posts->address }}">
            </div>
            <div class="mb-3">
            <label for="alamat_kost" class="col-form-label">Jalur trasport:</label>
            <div class="container text-start">
                <div class="row">
                <div class="col-6 col-md-4">
                    <input class="form-check-input" type="checkbox" value="Angkot" id="flexCheckDefault" name="checkbox0[]" {{ in_array('Angkot', $selectedTransport) ? 'checked' : '' }}>
                    <label class="form-check-label" for="flexCheckDefault">
                    Angkot
                    </label></div>
                </div>
                <div class="row">
                <div class="col-6 col-md-4">
                    <input class="form-check-input" type="checkbox" value="Transjakarta" id="flexCheckDefault" name="checkbox0[]" {{ in_array('Transjakarta', $selectedTransport) ? 'checked' : '' }}>
                    <label class="form-check-label" for="flexCheckDefault">
                    Transjakarta
                    </label> 
                </div>
            </div>
            </div>
            </div>
            <div class="mb-3">
            <label for="alamat_kost" class="col-form-label">Fasilitas kamar:</label>
            <div class="container text-start">
                <div class="row row-cols-2">
                <div class="col text-start">
                    <input class="form-check-input" type="checkbox" value="AC" id="flexCheckDefault" name="checkbox1[]" {{ in_array('AC', $checkboxFkos) ? 'checked' : '' }}>
                    <label class="form-check-label" for="flexCheckDefault">
                    AC
                    </label>
                </div>
                <div class="col text-start">
                    <input class="form-check-input" type="checkbox" value="TV" id="flexCheckDefault" name="checkbox1[]" {{ in_array('TV', $checkboxFkos) ? 'checked' : '' }}>
                    <label class="form-check-label" for="flexCheckDefault">
                    TV
                    </label>
                </div>
                <div class="col text-start">
                    <input class="form-check-input" type="checkbox" value="Parkir Luar" id="flexCheckDefault" name="checkbox1[]" {{ in_array('Parkir Luar', $checkboxFkos) ? 'checked' : '' }}>
                    <label class="form-check-label" for="flexCheckDefault">
                    Parkir Luar
                    </label>  
                </div>
                <div class="col text-start">
                    <input class="form-check-input" type="checkbox" value="Parkir Dalam" id="flexCheckDefault" name="checkbox1[]" {{ in_array('Parkir Dalam', $checkboxFkos) ? 'checked' : '' }}>
                    <label class="form-check-label" for="flexCheckDefault">
                    Parkir Dalam
                    </label> 
                </div>
                </div>
                <div class="row row-cols-2">
                <div class="col text-start">
                    <input class="form-check-input" type="checkbox" value="Kamar Mandi Dalam" id="flexCheckDefault" name="checkbox1[]" {{ in_array('Kamar Mandi Dalam', $checkboxFkos) ? 'checked' : '' }}>
                    <label class="form-check-label" for="flexCheckDefault">
                    Kamar Mandi Dalam
                    </label> 
                </div>
                <div class="col">
                    <input class="form-check-input" type="checkbox" value="Kamar Mandi Luar" id="flexCheckDefault" name="checkbox1[]" {{ in_array('Kamar Mandi Luar', $checkboxFkos) ? 'checked' : '' }}>
                    <label class="form-check-label" for="flexCheckDefault">
                    Kamar Mandi Luar
                    </label> 
                </div>
                <div class="col">
                    <input class="form-check-input" type="checkbox" value="Dapur Bersama" id="flexCheckDefault" name="checkbox1[]" {{ in_array('Dapur Bersama', $checkboxFkos) ? 'checked' : '' }}>
                    <label class="form-check-label" for="flexCheckDefault">
                    Dapur Bersama
                    </label> 
                </div>
                <div class="col">
                    <input class="form-check-input" type="checkbox" value="Dapur Sendiri" id="flexCheckDefault" name="checkbox1[]" {{ in_array('Dapur Sendiri', $checkboxFkos) ? 'checked' : '' }}>
                    <label class="form-check-label" for="flexCheckDefault">
                    Dapur Sendiri
                    </label> 
                </div>
                </div>
            </div>
            </div>
            <div class="mb-3">
            <label for="alamat_kost" class="col-form-label">Fasilitas sekitar:</label>
            <div class="container text-start">
                <div class="row row-cols-2">
                <div class="col">
                    <input class="form-check-input" type="checkbox" value="Rumah sakit" id="flexCheckDefault" name="checkbox3[]" {{ in_array('Rumah sakit', $checkboxFsekitar) ? 'checked' : '' }}>
                    <label class="form-check-label" for="flexCheckDefault">
                    Rumah sakit
                    </label>
                </div>
                <div class="col">
                    <input class="form-check-input" type="checkbox" value="Tempat Ibadah" id="flexCheckDefault" name="checkbox3[]" {{ in_array('Tempat Ibadah', $checkboxFsekitar) ? 'checked' : '' }}>
                    <label class="form-check-label" for="flexCheckDefault">
                    Tempat Ibadah
                    </label>
                </div>
                </div>
                <div class="row row-cols-2">
                <div class="col">
                    <input class="form-check-input" type="checkbox" value="ATM" id="flexCheckDefault" name="checkbox3[]" {{ in_array('ATM', $checkboxFsekitar) ? 'checked' : '' }}>
                    <label class="form-check-label" for="flexCheckDefault">
                    ATM
                    </label>
                </div>
                <div class="col">
                    <input class="form-check-input" type="checkbox" value="Minimarket" id="flexCheckDefault" name="checkbox3[]" {{ in_array('Minimarket', $checkboxFsekitar) ? 'checked' : '' }}>
                    <label class="form-check-label" for="flexCheckDefault">
                    Minimarket
                    </label>
                </div>
                </div>
            </div>
            </div>
            <div class="mb-3">
            <label for="maps" class="col-form-label">Url lokasi kost:</label>
            <input type="text" class="form-control" id="maps" name="maps" value="{{ $posts->maps }}">
            </div>
            <div class="mb-3">
            <label for="harga" class="col-form-label">Harga:</label>
            <input type="text" class="form-control" id="harga" name="harga" value="{{ $posts->harga }}">
            </div>
            <div class="mb-3">
            <label for="formFileSm" class="form-label">Gambar Kost</label>
            <input class="form-control form-control-sm" id="formFileSm" type="file" name="picture" value="{{ $posts->picture }}">
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-success">Save</button>
            </div>
        </form>
    </div>
    </div>
</div> --}}

{{-- Modal End --}}