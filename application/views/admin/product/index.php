<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <!-- /.card -->

                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title"><a href="<?php echo base_url('tambah') ?>">Tambah</a></h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>KDBRG</th>
                                    <th>Nama Product</th>
                                    <th>Descriptions</th>
                                    <th>Categories</th>
                                    <th>Harga</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1;
                                foreach ($list_product as $value) : ?>
                                    <tr>
                                        <td><?= $i; ?></td>
                                        <td><?= $value['kode_brg']; ?></td>
                                        <td><?= $value['product_name']; ?></td>
                                        <td><?= $value['short_description']; ?></td>
                                        <td><?= $value['category_title'] ?></td>
                                        <td><?= "Rp." . number_format($value['price']); ?></td>
                                        <td>
                                            <a href="<?php echo base_url('edit/data/' . $value['id_product']) ?>">Edit</a>
                                            <a href="<?php echo base_url('delete/data/' . $value['id_product']); ?>">Delete</a>
                                        </td>
                                    </tr>
                                <?php $i++;
                                endforeach; ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>KDBRG</th>
                                    <th>Nama Product</th>
                                    <th>Descriptions</th>
                                    <th>Categories</th>
                                    <th>Harga</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>