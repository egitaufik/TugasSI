<!-- Breadcrumbs-->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="#">Dashboard</a>
    </li>
    <li class="breadcrumb-item active">Anggota</li>
    <li class="breadcrumb-item active">Tambah Anggota</li>
  </ol>

  <!-- Icon Cards-->
    
  

  <!-- DataTables Example -->
  <div class="card mb-3">
    <div class="card-header">
      <i class="fas fa-users"></i>
      Tambah Data Anggota</div>
    <div class="card-body">
      <form action="<?=base_url()?>anggota/edit_anggota" method="post">
        <div class="form-group">
          <label for="formGroupExampleInput">Nama</label>
          <input type="text" name="nama" value="<?=$anggota->Nama?>" class="form-control" id="formGroupExampleInput" placeholder="Masukan Nama">
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput2">Npm</label>
          <input type="number" name="npm" value="<?=$anggota->Npm?>" class="form-control" id="formGroupExampleInput2" placeholder="Masukan Npm" readonly="">
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput">Jurusan</label>
          <input type="text" name="jurusan" value="<?=$anggota->Jurusan?>" class="form-control" id="formGroupExampleInput" placeholder="Jurusan">
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput2">Angkatan</label>
          <input type="number" name="angkatan" value="<?=$anggota->Angkatan?>" class="form-control" id="formGroupExampleInput2" placeholder="Angkatan">
        </div>
        <div class="form-group">
          <button class="btn btn-primary"><i class="fa fa-save"></i> Ubah Data</button>
          <button class="btn btn-danger"><i class="fa fa-times"></i> Batal</button>
        </div>
      </form>
    </div>
  </div>

