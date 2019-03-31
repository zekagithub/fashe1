 <section class="content">
<div class="col-md-12">
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Slider Deyisdirmek</h3>
            </div>
            <form enctype="multipart/form-data" accept-charset="utf-8" method="post" action="<?php echo base_url('admin/sliderguncelle'); ?>" class="form-horizontal">
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Slider Adi</label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control" name="slider_adi" value="<?php echo $melumat['slider_adi']; ?>"  placeholder="Slider Adi">
                    <input type="hidden" name="id" value="<?php echo $melumat['id']; ?>">
                     <input type="hidden" name="status" value="<?php echo $melumat['status']; ?>">


                  </div>
                </div>
                  <div class="box-body">
                  <div class="form-group">
                  <label class="col-sm-2 control-label">Slider Şekili</label>
                  <div class="col-sm-7">
                   <input type="file" value="<?php echo $melumat['slider_sekil']; ?>" name="slider_sekil" class="form-control">
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
          <a class="btn btn-warning" href="<?php echo base_url('admin/slider'); ?>">Imtina Et</a>
                <button type="submit" class="btn btn-info pull-right">Elave et</button>
              </div>
            </form>
          </div>  
        </section>