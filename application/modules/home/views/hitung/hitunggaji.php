
                <!-- PAGE TITLE -->
                <div class="page-title">                    
                    <h2><a href="#" title=""><span class="fa fa-arrow-circle-o-left"></span> </a> Input Gaji Karyawan</h2>

                </div>
                <!-- END PAGE TITLE -->                
                <ul class="panel-controls">
    
      <li><button class="btn btn-success fa fa-save">Simpan</button></a></li>

                                    </ul>
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                <?php echo $idgaji?>  
                <input type="hidden" name="id" value="<?php echo $idgaji?>" placeholder="">
                    <div class="row">
                        <div class="col-md-6">

                            <!-- START BASIC TABLE SAMPLE -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Data Karyawan</h3>
                                </div>

                                <div class="panel-body">
                                     <form action="" method="post" accept-charset="ut-8">
                                      <button type="button" class="btn btn-warning" id="lookup1"><i class="fa fa-search"></i>Cari</button>

                                     
                                         <input type="text" class="form-control cari" id="" name="nip" required="">
                                        Nama
  <input type="text" class="form-control cari" id="nama_lengkap" required="" name="nama">
                                            Jabatan
 <input type="text" class="form-control cari" name="jabatan" required="">
                                               Golongan
   <input type="text" class="form-control cari" name="gol" required="">
                                                  Gapok
     <input type="text" class="form-control cari" name="gapok" required="">
                                     </form>                           
                                </div>
                            </div>
                            <!-- END BASIC TABLE SAMPLE -->

                            <!-- START BORDERED TABLE SAMPLE -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Absensi</h3>
                                </div>
                                <div class="panel-body">
  
   <div class="block">                            
   
                                <form class="form-horizontal" role="form">
                                    <div class="form-group">                                        
                                        <div class="col-md-12">
                                            <select name="hari" class="form-control">
        <option value="">Pilih Total Hari Kerja</option>
        <?php 
for ($i=1; $i <32 ; $i++) { ?>
    <option value="<?php echo $i?>" required=""><?php echo $i?></option>
<?php }?>
        ?>
    </select>
                                        </div>
                                    </div>
                                    <div class="form-group">                                    
                                        <div class="col-md-8">
                                           <select name="hadir" class="form-control">
        <option value="">Total Hadir</option>
        <?php 
for ($i=1; $i <30 ; $i++) { ?>
    <option value="<?php echo $i?>" required=""><?php echo $i?></option>
<?php }?>
        ?>
    </select>
                                        </div>               
                                        <div class="col-md-4">
            <select name="ijin" class="form-control">
        <option value="">Pilih Total Hari Ijin</option>
        <?php 
for ($i=0; $i <30 ; $i++) { ?>
    <option value="<?php echo $i?>" required=""><?php echo $i?></option>
<?php }?>
        ?>
    </select>
                                        </div>                                                                               
                                    </div>       
                                    <div class="form-group">                                    
                                        <div class="col-md-6">
<select name="cuti" class="form-control">
        <option value="">Pilih Total Cuti</option>
        <?php 
for ($i=0; $i <30 ; $i++) { ?>
    <option value="<?php echo $i?>" required=""><?php echo $i?></option>
<?php }?>
        ?>
    </select>                                         
                                        </div>               
                                        <div class="col-md-3">
 <select name="lembur" class="form-control">
        <option value="">Pilih Total Lembur</option>
        <?php 
for ($i=0; $i <30 ; $i++) { ?>
    <option value="<?php echo $i?>" required=""><?php echo $i?></option>
<?php }?>
        ?>
    </select>                                       </div>                                                                               
                                        <div class="col-md-3">
                                         <select name="telat" class="form-control">
        <option value="">Pilih Total Telat</option>
        <?php 
for ($i=0; $i <30 ; $i++) { ?>
    <option value="<?php echo $i?>" required=""><?php echo $i?></option>
<?php }?>
        ?>
    </select>
                                        </div>                                        
                                    </div>                                      
                                                                               
                                </form>                                                                                           
                            </div>                              
                                </div>
                            </div>
                            <!-- END BORDERED TABLE SAMPLE -->

                            <!-- START CONTEXTUAL CLASSES TABLE SAMPLE -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Contextual classes</h3>
                                </div>
                                <div class="panel-body">
                                    <p>There available 5 classes: <code>active, success, info, warning, danger</code>. Add it to TR tag.</p>
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>id</th>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Username</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="active">
                                                <td>1</td>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>@mdo</td>
                                            </tr>
                                            <tr class="success">
                                                <td>2</td>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td>@fat</td>
                                            </tr>
                                            <tr class="info">
                                                <td>3</td>
                                                <td>Larry</td>
                                                <td>the Bird</td>
                                                <td>@twitter</td>
                                            </tr>
                                            <tr class="warning">
                                                <td>3</td>
                                                <td>Larry</td>
                                                <td>the Bird</td>
                                                <td>@twitter</td>
                                            </tr>
                                            <tr class="danger">
                                                <td>3</td>
                                                <td>Larry</td>
                                                <td>the Bird</td>
                                                <td>@twitter</td>
                                            </tr>
                                        </tbody>
                                    </table>                                
                                </div>
                            </div>
                            <!-- END CONTEXTUAL CLASSES TABLE SAMPLE -->

                        </div>
                        <div class="col-md-6">

                            <!-- START STRIPED TABLE SAMPLE -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Insentif</h3>
                                </div>
                                <div class="panel-body">
                                <form action="#" accept-charset="utf-8" id="insentif">
                                    <select class=" form-control-sm " name="idinsentif">
                                <option value="" required="">Pilih</option>          
  <?php foreach($insentif as $key):?>
<option value="<?php echo $key->id_insentif?>"><?php echo $key->id_insentif."-".$key->jenis_insentif."  (".$key->gol_jabatan.")" ?></option>
                                        <?php endforeach;?>
                                        
                                    </select>
<input type="number" name="banyak" value="1" class="form-control-sm"> 
<input type="hidden" name="id" value="<?php echo $this->uri->segment(3)?>" class="form-control-sm">
 <input type="hidden" class="form-control cari"  name="nip" required="">                                 
  
  <button type="button" id="btnSave" onclick="save()" class="btn btn-primary">Tambah</button>
                                </form>
<div class="table-responsive">
                                     <table class="table table-bordered" id="insentif1">
                                        <thead>
                                            <tr>
                                                
                                                 
                                                <th>Jenis</th>
                                                <th>Nominal</th>
                                                <th>Banyak</th>
                                                <th>Total Nominal</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        
                            
                    
                                        </tbody>
                                    </table>  

                                </div>
                            </div>
                            </div>
                            <!-- END STRIPED TABLE SAMPLE -->



                            <!-- START TABLE HOVER ROWS -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Potongan</h3>
                                </div>
                                <div class="panel-body">
                                <form action="#" accept-charset="utf-8" id="formpotongan">
                                    <select class=" form-control-sm" name="potongan">
                                <option value="" required="">Pilih</option>          
  <?php foreach($potongan as $key):?>
<option value="<?php echo $key->id_potongan?>"><?php echo $key->id_potongan."-".$key->jenis_potongan?></option>
                                        <?php endforeach;?>
                                        
                                    </select>
<input type="number" name="banyak" value="1" class="form-control-sm"> 
<input type="hidden" name="id" value="<?php echo $this->uri->segment(3)?>" class="form-control-sm">
 <input type="hidden" class="form-control cari"  name="nip" required="">                                 
  
  <button type="button" id="btnSavepotongan" onclick="savepotongan()" class="btn btn-primary">Tambah</button>

                                </form>
<div class="table-responsive">
                                     <table class="table table-bordered" id="tblpotongan">
                                        <thead>
                                            <tr>
                                                
                                                 
                                                <th>Jenis</th>
                                                <th>Nominal</th>
                                                <th>Banyak</th>
                                                <th>Total Nominal</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        
                            
                    
                                        </tbody>
                                    </table>  

                                </div>
                            </div>
                            </div>
                            <!-- END TABLE HOVER ROWS -->

                            <!-- START CONDENSED TABLE SAMPLE -->
                            <div class="panel panel-default">
                                 <div class="panel-heading">
                                    <h3 class="panel-title">Pinjaman</h3>
                                </div>
                                <div class="panel-body">
                                <form action="#" accept-charset="utf-8" id="formpinjaman">
                                    
 
<input type="hidden" name="id" value="<?php echo $this->uri->segment(3)?>" class="form-control-sm">
 <input type="hidden" class="form-control cari"  name="nip1" required="">                                 
  <input type="hidden" name="no" class="form-control-sm">

  
   <button type="button" class="btn btn-warning" id="pinjaman"><i class="fa fa-search"></i>Cari</button>
   <button type="button" id="btnSavepinjaman" onclick="savepinjaman()" class="btn btn-primary">Tambah</button>
                                </form>
<div class="table-responsive">
                                     <table class="table table-bordered" id="tblpinjaman">
                                        <thead>
                                            <tr>
                                                
                                                 
                                                <th>No Transaksi</th>
                                                <th>Nominal Pinjaman</th>
                                                
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        
                            
                    
                                        </tbody>
                                    </table>  

                                </div>
                            </div>
                            </div>

                            <!-- START BORDERED TABLE SAMPLE -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Table in panel</h3>
                                </div>
                                <div class="panel-body">
                                    <p>Add class <code>.panel-body-table</code> to <code>panel-body</code> to remove paddings in panel and borders in table.</p>
                                </div>
                                <div class="panel-body panel-body-table">                                
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>id</th>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Username</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>@mdo</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td>@fat</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Larry</td>
                                                <td>the Bird</td>
                                                <td>@twitter</td>
                                            </tr>
                                        </tbody>
                                    </table>                                
                                </div>
                            </div>
                            <!-- END BORDERED TABLE SAMPLE -->

                        </div>
                    </div>


                    <!-- START RESPONSIVE TABLES -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">

                                <div class="panel-heading">
                                    <h3 class="panel-title">Responsive tables</h3>
                                </div>

                                <div class="panel-body panel-body-table">

                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped table-actions">
                                            <thead>
                                                <tr>
                                                    <th width="50">id</th>
                                                    <th>name</th>
                                                    <th width="100">status</th>
                                                    <th width="100">amount</th>
                                                    <th width="100">date</th>
                                                    <th width="100">actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>                                            
                                                <tr id="trow_1">
                                                    <td class="text-center">1</td>
                                                    <td><strong>John Doe</strong></td>
                                                    <td><span class="label label-success">New</span></td>
                                                    <td>$430.20</td>
                                                    <td>24/09/2014</td>
                                                    <td>
                                                        <button class="btn btn-default btn-rounded btn-sm"><span class="fa fa-pencil"></span></button>
                                                        <button class="btn btn-danger btn-rounded btn-sm" onClick="delete_row('trow_1');"><span class="fa fa-times"></span></button>
                                                    </td>
                                                </tr>
                                                <tr id="trow_2">
                                                    <td class="text-center">2</td>
                                                    <td><strong>Dmitry Ivaniuk</strong></td>
                                                    <td><span class="label label-warning">Pending</span></td>
                                                    <td>$1,351.00</td>
                                                    <td>23/09/2014</td>
                                                    <td>
                                                        <button class="btn btn-default btn-rounded btn-sm"><span class="fa fa-pencil"></span></button>
                                                        <button class="btn btn-danger btn-rounded btn-sm" onClick="delete_row('trow_2');"><span class="fa fa-times"></span></button>
                                                    </td>
                                                </tr>
                                                <tr id="trow_3">
                                                    <td class="text-center">3</td>
                                                    <td><strong>Nadia Ali</strong></td>
                                                    <td><span class="label label-info">In Queue</span></td>
                                                    <td>$2,621.00</td>
                                                    <td>22/09/2014</td>
                                                    <td>
                                                        <button class="btn btn-default btn-rounded btn-sm"><span class="fa fa-pencil"></span></button>
                                                        <button class="btn btn-danger btn-rounded btn-sm" onClick="delete_row('trow_3');"><span class="fa fa-times"></span></button>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>                                

                                </div>
                            </div>                                                

                        </div>
                    </div>
                    <!-- END RESPONSIVE TABLES -->
                    
                <!-- END PAGE CONTENT WRAPPER -->                                    
                </div>         
            </div>            
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->    
