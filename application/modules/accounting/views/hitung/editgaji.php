
                <!-- PAGE TITLE -->
                <div class="page-title">                    
                    <h2><a href="#" title=""><span class="fa fa-arrow-circle-o-left"></span> </a> Edit Gaji Karyawan</h2>

                </div>
                <!-- END PAGE TITLE -->                
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                
                <input type="hidden" name="id" value="<?php echo $this->uri->segment(3)?>" placeholder="">
                    <div class="row">
                        <div class="col-md-6">

                            <!-- START BASIC TABLE SAMPLE -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Data Karyawan</h3>
                                </div>

                                <div class="panel-body">
                                     <form action="#"  accept-charset="ut-8">
                                      
                                     
<input type="text" class="form-control cari"  name="nip" value="<?php echo $kar->nip?>" readonly="">
                                        Nama
  <input type="text" class="form-control cari" required="" name="nama" value="<?php echo $kar->nama_lengkap?>" readonly="">
                                            Jabatan
 <input type="text" class="form-control cari" name="jabatan" value="<?php echo $kar->nama_jabatan?>" readonly="">
                                               Golongan
   <input type="text" class="form-control cari" name="gol" value="<?php echo $kar->gol_jabatan?>" readonly="">
                                                  Gapok
     <input type="text" class="form-control cari" name="gapok" value="<?php echo $kar->gapok?>" readonly="">
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
   
<form class="form-horizontal" method="post" action="<?php echo site_url('aksi_1/updategaji')?>">

 <div class="form-group">                                        
  <div class="col-md-12">
<input type="hidden" name="id" value="<?php echo $this->uri->segment(3)?>" class="form-control-sm">
 
Total Hari
   <select name="hari" class="form-control">
  
  <option value="<?php echo $absen->total_hari?>" selected=""><?php echo $absen->total_hari?></option>
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
     Total Hadir
   <select name="hadir" class="form-control">
        <option value="<?php echo $absen->total_hadir?>"><?php echo $absen->total_hadir?></option>
        <?php 
for ($i=1; $i <30 ; $i++) { ?>
    <option value="<?php echo $i?>" required=""><?php echo $i?></option>
<?php }?>
        ?>
    </select>
      </div>               
    <div class="col-md-4">
    Total Ijin
            <select name="ijin" class="form-control">
        <option value="<?php echo $absen->total_ijin?>"><?php echo $absen->total_ijin?></option>
        <?php 
for ($i=0; $i <30 ; $i++) { ?>
    <option value="<?php echo $i?>" required=""><?php echo $i?></option>
<?php }?>
        ?>
    </select>
  </div>   
  <div class="col-md-4">
  Total Alpa / Mangkir
            <select name="alpa" class="form-control">
        <option value="<?php echo $absen->total_alpa?>"><?php echo $absen->total_alpa?></option>
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
    Total Cuti
<select name="cuti" class="form-control">
        <option value="<?php echo $absen->total_cuti?>"><?php echo $absen->total_cuti?></option>
        <?php 
for ($i=0; $i <30 ; $i++) { ?>
    <option value="<?php echo $i?>" required=""><?php echo $i?></option>
<?php }?>
        ?>
    </select>                                         
   </div>               
  <div class="col-md-3">
  Total Lembur
 <select name="lembur" class="form-control">
   <option value="<?php echo $absen->total_lembur?>"><?php echo $absen->total_lembur?></option>
        <?php 
for ($i=0; $i <30 ; $i++) { ?>
    <option value="<?php echo $i?>" required=""><?php echo $i?></option>
<?php }?>
        ?>
    </select>                 
 </div>                                                                               
 <div class="col-md-3">
 Total Telat
   <select name="telat" class="form-control">
    <option value="<?php echo $absen->total_telat?>"><?php echo $absen->total_telat?></option>
        <?php 
for ($i=0; $i <30 ; $i++) { ?>
    <option value="<?php echo $i?>" required=""><?php echo $i?></option>
<?php }?>
        ?>
    </select>
  </div>                                        
   </div>                                      
 Periode Gaji<input type="text" class="form-control tgl"  name="tgl" value="<?php echo $periode->bulan_gaji?>" >
     
     <input type="submit" class="btn btn-success fa fa-save" value="Update">
  </form>

                            </div>                              
                                </div>
                            </div>
                            <!-- END BORDERED TABLE SAMPLE -->


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
 <input type="hidden" class="form-control cari"  name="nip" value="<?php echo $kar->nip?>">                                 
  
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
 <input type="hidden" class="form-control cari"  name="nip" value="<?php echo $kar->nip?>">                                 
  
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

                             

                        </div>
                    </div>


                    
                    
                <!-- END PAGE CONTENT WRAPPER -->                                    
                </div>         
            </div>            
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->    
