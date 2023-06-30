<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-md-6">
      <form action="<?php echo base_url('category/save_updated'); ?>" method="post">
      <input type="hidden" name="id_category" value="<?= $category['id_category']; ?>">
        <div class="card card-success">
          <div class="card-header">
            <h3 class="card-title"><?= $title; ?></h3>
            <?php echo validation_errors(); ?>
          </div>
          <div class="card-body">
            <div class="form-group">
              <label for="inputEstimatedBudget">Nama Kategori</label>
              <input type="text" name="category_title" id="category_title" placeholder="Nam Kategori" class="form-control" value="<?= $category['category_title']; ?>">
            </div>
            <?php echo form_error('category_title', '<div class="error text-danger">', '</div>'); ?>
            <div class="form-group">
              <label for="inputSpentBudget">Description</label>
              <textarea name="category_description" id="summernote" cols="30" rows="10"><?= $category['category_description']; ?></textarea>
            </div>
            <div class="form-group">
              <label for="inputStatus">Status</label>
              <select name="publish" id="inputStatus" class="form-control custom-select">
                <option value="1" <?php echo ($category['publish'] == 1) ? 'selected' : ''; ?>>
                  On
                </option>
                <option value="0" <?php echo ($category['publish'] == 0) ? 'selected' : ''; ?>>
                  Off
                </option>
              </select>

            </div>
            <div class="form-group">
              <input class="btn btn-primary" type="submit" value="Tambahkan">
            </div>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </form>
    </div>
</section>
<!-- /.content -->
</div>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
<script>
  $('#summernote').summernote({
    placeholder: 'Hello Bootstrap 4',
    tabsize: 2,
    height: 100
  });
</script>