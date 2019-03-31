 <section class="content">
<div class="col-md-12">
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Slider elave etmek</h3>
            </div>
            <form enctype="multipart/form-data" accept-charset="utf-8" method="post" action="<?php echo base_url('admin/sliderelaveetme'); ?>" class="form-horizontal">
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Slider Adi</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="slider_adi" value=""  placeholder="Slider Adi">
                  </div>
                </div>
                  <div class="box-body">
                  <div class="form-group">
                  <label class="col-sm-2 control-label">Slider Şekili</label>
                  <div class="col-sm-7">
                   <input type="file" value="" name="slider_sekil" class="form-control">
                  </div>
                </div>   
              </div>
              
              </div>
             <div class="box-footer">
          <a class="btn btn-warning" href="<?php echo base_url('admin/slider'); ?>">Imtina Et</a>
                <button type="submit" class="btn btn-info pull-right">Elave et</button>
              </div>
            </form>
          </div>  
        </section>