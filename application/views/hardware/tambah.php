<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Halaman Tambah Data
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?=site_url('home');?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="<?=site_url('hardware');?>"><i class="fa fa-files-o"></i> Hardware</a></li>
            <li class="active">Tambah Data</li>
        </ol>
    </section>
    <section class="content">
        <div class="modal-body">
            <div class="form-group">
                <?php echo form_open('hardware/proses'); ?>
                <label for="nama_hardware">Nama Barang : </label>
                <?php echo form_input(array('name'=>'nama_hardware','class'=>'form-control','style'=>'width:300px','type' => 'text','')); ?><br>
                <?php echo form_input(array('type' => 'submit','name' => 'hardware','style'=>'margin-left:160px','value' => 'Kembali','class'=>'btn btn-danger btn-sm')); ?>
                <?php echo form_input(array('type' => 'submit','name' => 'add','style'=>'margin-left:10px', 'value' => 'Tambah','class'=>'btn btn-primary btn-sm')); ?>
                <?php echo form_close(); ?>
            </div>
        </div>
    </section>
</div>
