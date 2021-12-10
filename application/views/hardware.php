
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Data Hardware
            <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?=site_url('home');?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Hardware</li>
        </ol>
    </section>

    <section class="content">
        <div class="col-sm-10">
            <a href="<?=site_url('hardware/add');?>" type="button" class="btn btn-primary"> Tambah Data </a>
        <div>

        <div class="table-responsive">
            <table class="table table-bordered text-center" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>Nama Barang</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    <?php

                    $no = 1;
                    foreach ($hardware as $hd) : ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $hd->nama_hardware ?></td>
                        <td>
                        <a href="<?=site_url('hardware/view/'.$hd->id_hardware);?>"><button class="btn btn-success fa fa-eye"></button></a>
                        <a href="<?=site_url('hardware/edit/'.$hd->id_hardware);?>"><button class="btn btn-primary fa fa-edit"></button></a>
                        <a href="<?=site_url('hardware/del/'.$hd->id_hardware);?>" onclick="return confirm('Yakin ingin menghapus data?')"><button class="btn btn-danger fa fa-trash"></button></a>
                        </td>
                    </tr>
                </tbody>

                <?php endforeach; ?>
            </table>
        </div>
    </section>
</div>