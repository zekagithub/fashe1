 <section class="content">
<div class="col-md-12">
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Xeber deyisdirmek</h3>
            </div>
            <form  enctype="multipart/form-data" accept-charset="utf-8" method="post" class="form-horizontal" action="<?php echo base_url('admin/xeberguncelle'); ?>">
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">xeber basliqi</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="basliq" value="<?php echo $melumat['xeber_basliq']; ?>"  placeholder="Xeber basliqi">
                    <input type="hidden" name="id" value="<?php echo $melumat['id']; ?>">
                  </div>
                </div>
                   <div class="form-group">
                  <label class="col-sm-2 control-label">Xeber tarixi</label>
                  <div class="col-sm-10">
                    <input type="date" class="form-control" name="tarix" value="<?php echo $melumat['xeber_tarix']; ?>"  placeholder="xeber tarixi">
                  </div>
                </div>
                 <div class="form-group">
                  <label class="col-sm-2 control-label">Xeber </label>
                  <div class="col-sm-10">
                  <textarea name="xeber" id="editor1" rows="8" cols="80"><?php echo $melumat['xeber']; ?></textarea>

                  </div>
                </div>
                    <div class="box-body">
                  <div class="form-group">
                  <label class="col-sm-2 control-label">Xeber Şekili</label>
                  <div class="col-sm-7">
                   <input type="file" value="<?php echo $melumat['xeber_sekilurl']; ?>" name="sekil" class="form-control">
                  </div>
                </div>   
              </div>
              
              </div>
             <div class="box-footer">
            <a class="btn btn-warning" href="<?php echo base_url('admin/xeberler'); ?>">Imtina Et</a>
                <button type="submit" class="btn btn-info pull-right">Deyisdir</button>
              </div>
            </form>
          </div>  
        </section>