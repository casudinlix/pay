
                <!-- PAGE TITLE -->
                <div class="page-title">                    
                    <h2><a href="#" title=""><span class="fa fa-arrow-circle-o-left"></span> </a> Input Gaji Karyawan</h2>

                </div>
                <!-- END PAGE TITLE -->                
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                
                <input type="hidden" name="id" value="<?php echo $idgaji?>" placeholder="">
                    <div class="row">
                        <div class="col-md-6">

                            <!-- START BASIC TABLE SAMPLE -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Data Karyawan</h3>
                                </div>

                                <div class="panel-body">
                                     <form action="#"  accept-charset="ut-8">
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
                                    <h3 class="panel-title">Periode Gaji</h3>
                                </div>
                                <div class="panel-body">
  
   <div class="block">                            
   
<form class="form-horizontal" method="post" action="<?php echo site_url('aksi_1/simpangaji')?>">
                   <input type="hidden" name="id" value="<?php echo $idgaji?>" placeholder="">  
                   <input type="hidden" class="form-control cari" id="" name="nip" required="">        
 Periode Gaji<input type="month" class="form-control" name="tgl" required="">

     <input type="submit" class="btn btn-success fa fa-save" value="Simpan">
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

                             

                        </div>
                    </div>


                    
                    
                <!-- END PAGE CONTENT WRAPPER -->                                    
                </div>         
            </div>            
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->    
                         </div>
 <script>
function cekabsen(id) {
      
    var url="<?php echo site_url('home/cekabsen/')?>"+id;
    window.open(url, "_blank", "toolbar=yes,scrollbars=yes,resizable=yes,top=400,left=300,width=600,height=900");
}
</script>