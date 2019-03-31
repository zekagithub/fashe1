    <section class="content">
    <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Mesaj oxuma sehifesi</h3>
            </div>
            <form method="post"  class="form-horizontal">
              <div class="box-body">
                  <div class="form-group">
                  <label class="col-sm-2 control-label">Ad ve Soyad</label>
                  <div class="col-sm-7">
                   <input type="text" disabled value="<?php echo $melumat['adi']; ?>" name="adi" class="form-control"  placeholder="">
                   <input type="hidden" name="id" value="<?php echo $melumat['id']; ?>">
                   <input type="hidden" name="status" value="<?php echo $melumat['status']; ?>">
                  </div>
                </div>   
              </div>
              
                  
                 <div class="box-body">
                  <div class="form-group">
                  <label class="col-sm-2 control-label"> Mesaj</label>
                  <div class="col-sm-7">
              <input type="text" disabled value="<?php echo $melumat['mesaj']; ?>" name="comment" class="form-control"  placeholder=""> 
               </div>
                </div>   
              </div>
                
                
            
              <div class="box-footer">
           <a class="btn btn-warning" href="<?php echo base_url('admin/mesaj'); ?>">Imtina Et</a>
              </div>
            </form>
          </div>
          </div>
      </section>
         

