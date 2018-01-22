<?php include('public_header.php'); ?>
  
  <div class="container">
     
       <?php echo form_open('login/admin_login'); ?>
  <fieldset>
   
   
    <div class="form-group">
       
      <label for="exampleInputEmail1">Username</label>
      <div class="row">
          <div class="col-lg-6">
               <?php echo form_input(['name'=>'username', 'class'=>'form-control','placeholder'=>'username','value'=>set_value('username')]); ?>
<!--      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="username">-->
          </div>
          <div class="col-lg-6">
              <?php
        echo form_error('username');

   ?>
          </div>
      </div>
     
      
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <div class="row">
          <div class="col-lg-6">
              <?php echo form_password(['name'=>'password', 'class'=>'form-control','placeholder'=>'Password']); ?>
<!--      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">-->
          </div>
          <div class="col-lg-6">
                    <?php
        echo form_error('password');

   ?>
          </div>
      </div>
      
    
    </div>
     <?php echo form_reset(['name'=>'reset', 'class'=>'btn btn-default','value'=>'Cancel']); ?>
<!--   <button type="reset" class="btn btn-default">cancel</button>-->
    <?php echo form_submit(['name'=>'submit', 'class'=>'btn btn-primary','value'=>'login']); ?>
<!--    <button type="submit" class="btn btn-primary">Submit</button>-->
  </fieldset>
</form>
  </div>
  
   <?php include('public_footer.php'); ?>
    