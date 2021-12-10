<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Detail data
            <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?=site_url('home');?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="<?=site_url('hardware');?>"><i class="fa fa-files-o"></i> Hardware</a></li>
            <li class="active">View Data</li>
        </ol>
    </section>

    <section class="content">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"> Tambah Data</button>
        <div class="table-responsive">
            <table class="table table-bordered text-center" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>Jenis Barang </th>
                        <th>Merk</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    $no = 1;
                    foreach ($view as $vi) : ?>

                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $vi->nama_hardware ?></td>
                        <td><?php echo $vi->merk ?></td>
                        <td>
                            <a href="<?=site_url('hardware/view_laptop/'.$vi->id_hardware);?>"><button class="btn btn-success fa fa-eye"></button></a>
                            <a href="<?=site_url('hardware/edit/'.$vi->id_hardware);?>"><button class="btn btn-primary fa fa-edit"></button></a>
                            <a href="<?=site_url('hardware/del/'.$vi->id_hardware);?>" onclick="return confirm('Yakin ingin menghapus data?')"><button class="btn btn-danger fa fa-trash"></button></a>
                        </td>
                    </tr>
                </tbody>

                <?php endforeach; ?>
            </table>
        </div>
    </section>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title" id="exampleModalLabel">Tambah Data</h1>
      </div>
            <div class="modal-body">
            <?php echo form_open_multipart('hardware/view_add/'.$this->uri->segment(3)); ?>
            <div class="form-group">
                <label>Jenis Barang</label>
                <input type="text" name="jenis" class="form-control">
            </div>
            <div class="form-group">
                <label>Merk</label>
                <input type="text" name="merk" class="form-control">
            </div>

                <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
                <?php echo form_close();?>
    </div>
  </div>
</div>
