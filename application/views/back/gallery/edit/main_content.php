 <section class="content">
<div class="col-md-12">
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Sekil deyisdirmek</h3>
            </div>
            <form  enctype="multipart/form-data" accept-charset="utf-8" method="post" class="form-horizontal" action="<?php echo base_url('admin/galleryguncelle'); ?>">
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Sekil basliqi</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="basliq" value="<?php echo $melumat['sekil_basliq']; ?>"  placeholder="Sekil basliqi">
                    <input type="hidden" name="id" value="<?php echo $melumat['id']; ?>">
                    <input type="hidden" name="status" value="<?php echo $melumat['status']; ?>">

                  </div>
                </div>
                 
                 <div class="form-group">
                  <label class="col-sm-2 control-label">Sekil haqqinda </label>
                  <div class="col-sm-10">
                  <textarea name="sekil_text" id="editor1" rows="8" cols="80"><?php echo $melumat['sekil_text']; ?></textarea>

                  </div>
                </div>
                    <div class="box-body">
                  <div class="form-group">
                  <label class="col-sm-2 control-label">Şekil</label>
                  <div class="col-sm-7">
                   <input type="file" value="<?php echo $melumat['sekil']; ?>" name="sekil" class="form-control">
                  </div>
                </div>   
              </div>
                <div class="box-body">
                  <div class="form-group">
                  <label class="col-sm-2 control-label"> Movcud Sekil</label>
                  <div class="col-sm-7">
                    <img src="<?php echo base_url($melumat['mini']); ?>" class="profile-user-image image-responsive">
                    <p class="text-blue">Deyisdirmeseniz sekil secmeyin</p>
                  </div>
                </div>   
              </div>
              
              </div>
             <div class="box-footer">
            <a class="btn btn-warning" href="<?php echo base_url('admin/gallery'); ?>">Imtina Et</a>
                <button type="submit" class="btn btn-info pull-right">Deyisdir</button>
              </div>
            </form>
          </div>  
        </section>