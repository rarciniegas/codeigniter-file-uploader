  
<div class="container">
  <div class="row">
    <div class="col-12">
      <h1>Hello, <?= session()->get('firstname') ?></h1>
      <form method="post" enctype="multipart/form-data">
      
        <div class="form-group">
          <label for="exampleFormControlFile1">Upload fle</label>
          <input type="file" name="thefile" class="form-control-file" id="exampleFormControlFile1">
        </div>

        <div class="col-12 col-sm-4">
              <button type="submit" class="btn btn-primary">Submit</button>
          </div>
      
      </form>
    </div>
  </div>
</div>