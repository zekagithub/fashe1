 <section class="content">
<div class="col-md-12">
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Sekil elave etmek</h3>
            </div>
            <form enctype="multipart/form-data" accept-charset="utf-8" method="post" action="<?php echo base_url('admin/galleryelaveetme'); ?>" class="form-horizontal">
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Sekil basliqi</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="sekil_basliq" value=""  placeholder="sekil basliqi">
                  </div>
                </div>
                 
                   <div class="form-group">
                  <label class="col-sm-2 control-label">Sekil haqqinda</label>
                  <div class="col-sm-10">
                   <textarea name="sekil_text" id="editor1" rows="8" cols="80"></textarea>

                  </div>
                </div>
                     <div class="box-body">
                  <div class="form-group">
                  <label class="col-sm-2 control-label">Xeber Şekili</label>
                  <div class="col-sm-7">
                   <input type="file" value="" name="sekil" class="form-control">
                  </div>
                </div>   
              </div>
              
              </div>
             <div class="box-footer">
            <a class="btn btn-warning" href="<?php echo base_url('admin/gallery'); ?>">Imtina Et</a>
                <button type="submit" class="btn btn-info pull-right">Elave et</button>
              </div>
            </form>
          </div>  
        </section>