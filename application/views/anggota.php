<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="#">Dashboard</a>
  </li>
  <li class="breadcrumb-item active">Anggota</li>
</ol>

  <!-- DataTables Example -->
  <div class="card mb-3">
    <div class="card-header">
      <i class="fas fa-table"></i>
      Data Anggota</div>
    <div class="card-body">
        <p><a href="<?=base_url()?>anggota/tambah_anggota"><button class="btn btn-primary float-right"><i class="fa fa-user-plus"></i> Tambah Anggota</button></a>
          <br></p>
        <div class="clearfix"></div>
      <div class="table-responsive">
        <?php
          if ($this->session->flashdata("notif") != '') {
            echo $this->session->flashdata("notif");
          }
        ?>
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Nama</th>
              <th>NPM</th>
              <th>Jurusan</th>
              <th>Angkatan</th>
              <th>Tanggal Masuk</th>
              <th>Aksi</th>
            </tr>
          </tfoot>
          <tbody>
            <?php
            if ($anggota) {
              foreach ($anggota as $data) {
                ?>
                <tr>
                  <td><?=$data->Nama?></td>
                  <td><?=$data->Npm?></td>
                  <td><?=$data->Jurusan?></td>
                  <td><?=$data->Angkatan?></td>
                  <td><?=$data->Tanggal_masuk?></td>
                  <td>
                    <a href="<?=base_url('anggota/ubah_anggota/'.$data->Npm)?>"><BUTTON class="btn btn-primary btn-sm" data-value='<?=$data->Npm?>'><i class="fas fa-edit"></i></BUTTON></a>
                    
                    <a href="<?=base_url('anggota/delete_anggota/'.$data->Npm)?>" class='btn-delete'><BUTTON class="btn btn-danger btn-sm" data-value='<?=$data->Npm?>'><i class="fas fa-trash"></i></BUTTON></a></td>
                </tr>
                <?php
              }
            }
            ?>       
          </tbody>
        </table>
      </div>
    </div>
    <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
  </div>

  <script type="text/javascript">
    $(document).ready(function() {
      $('table').on('click','.btn-delete',function() {
        if(confirm("Anda yakin ingin menghapus data anggota?")){
          return true;
        }
        return false;
      })
    })
  </script>