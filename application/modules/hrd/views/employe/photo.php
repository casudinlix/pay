<div class="dropzone dropzone-mini">

  <div class="dz-message">
   <h3> Klik atau Drop gambar disini</h3>
  </div>
</div>
<div class="panel-footer">
  <img src="<?php echo employe($user->foto) ?>" width="90" height="90">

<?php $d= $this->uri->segment(3)?>
<a onclick="deletpoto(<?php echo $d?>)" class='btn btn-danger' href="#">Delete</a>
  <a href='<?php echo site_url("hrd/employe")?>' <button class="btn btn-primary pull-right">Save Changes <span class="fa fa-floppy-o fa-right"></span></button></a>
</div>
