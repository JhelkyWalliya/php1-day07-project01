<div class="col-9">
    <!-- .card -->
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <div>
                <h1>Tambah Member</h1>
            </div>
            <div>
                <a href="?p=semua" class="btn btn-dark bg-light text-dark">Kembali</a>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-6">
                    <form action="?p=semua">
                        <div class="mb-3">
                            <label for="firstName" class="form-label">First Name</label>
                            <input type="text" class="form-control" id="firstName" value="Nick" disabled>
                        </div>
                        <div class="mb-3">
                            <label for="lastName" class="form-label">Last Name</label>
                            <input type="text" class="form-control" id="lastName" value="Imbiri" disabled>
                        </div>
                        <img src="speaker/sacodesweekend-nick-2.png" alt="speaker" class="img img-thumbnail mb-2" width="200">
                        <div class="mb-3">
                            <label for="picture" class="form-label">Picture</label>
                            <input type="file" class="form-control" id="picture">
                        </div>
                        <div class="mb-3">
                            <label for="about" class="form-label">About</label>
                            <textarea id="about" cols="30" rows="5" class="form-control" disabled></textarea>
                        </div>
                        <a href="ubah.html" class="btn btn-primary">Ubah</a>
                    </form>
                </div>
            </div>
        </div>
        <div class="card-footer">
        </div>
    </div>
    <!-- end .card -->
</div> 
 0  
views/member/hapus.php
Empty file.
 73  
views/member/index.php
@@ -0,0 +1,73 @@
<div class="col-9">
    <!-- .card -->
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <div>
                <h1>Member</h1>
            </div>
            <div>
                <a href="?p=tambah" class="btn btn-dark">Tambah</a>
            </div>
        </div>
        <div class="card-body">
            <!-- data table -->
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Picture</th>
                        <th scope="col">Full Name</th>
                        <th scope="col">Job Tag Line</th>
                        <th scope="col">About</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td><img src="speaker/sacodesweekend-nick-2.png" width="100" class="img-fluid img-thumbnail" alt="speaker"></td>
                        <td>Nick Imbiri</td>
                        <td>Math and Data Science Enthusiast</td>
                        <td>I am a teacher of Math. I love teaching people and doing competitive
                            programming.</td>
                        <td>
                            <a href="?p=detail" class="btn btn-sm btn-dark bg-light text-dark">Detail</a>
                            <a href="?p=ubah" class="btn btn-sm btn-success bg-light text-success">Ubah</a>
                            <a href="?p=hapus" class="btn btn-sm btn-danger bg-light text-danger">Hapus</a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td><img src="speaker/sacodesweekend-vicky.png" width="100" class="img-fluid img-thumbnail" alt="speaker"></td>
                        <td>Vicky Irmanto</td>
                        <td>Graphic Designer</td>
                        <td>I love design things. I am a student at UNCEN.</td>
                        <td>
                            <a href="?p=detail" class="btn btn-sm btn-dark bg-light text-dark">Detail</a>
                            <a href="?p=ubah" class="btn btn-sm btn-success bg-light text-success">Ubah</a>
                            <a href="?p=hapus" class="btn btn-sm btn-danger bg-light text-danger">Hapus</a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td><img src="speaker/sacodesweekend-johan-3.png" width="100" class="img-fluid img-thumbnail" alt="speaker"></td>
                        <td>Johan Nasendi</td>
                        <td>Web Developer</td>
                        <td>I am studying information technology. I love to code every day.</td>
                        <td>
                            <a href="?p=detail" class="btn btn-sm btn-dark bg-light text-dark">Detail</a>
                            <a href="?p=ubah" class="btn btn-sm btn-success bg-light text-success">Ubah</a>
                            <a href="?p=hapus" class="btn btn-sm btn-danger bg-light text-danger">Hapus</a>
                        </td>
                    </tr>
                </tbody>
            </table>
            <!-- end data data -->
        </div>
        <div class="card-footer">
        </div>
    </div>
    <!-- end .card -->
</div> 