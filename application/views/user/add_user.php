
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-flex align-items-center justify-content-between">
                                    <h4 class="mb-0">Add User</h4>

                                   <!--  <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                                            <li class="breadcrumb-item active">Forms Elements</li>
                                        </ol>
                                    </div> -->

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->
                        
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <form action="<?php echo base_url('insert_user'); ?>" method="POST">
                                        <div class="form-group row">
                                            
                                                <div class="col-md-6">
                                                 <label for="example-text-input" >User Name:</label>
                                                <input type="text" name="name" class="form-control"   id="example-text-input" placeholder="Enter User Name "  value="<?php echo set_value('name'); ?>">
                                                 <span class="text-danger"><?php echo form_error('name'); ?></span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            
                                                <div class="col-md-6">
                                                 <label for="example-text-input" >Mobile:</label>
                                                <input type="text" name="mobile" class="form-control"   id="example-text-input" placeholder="Enter Mobile Number " value="<?php echo set_value('mobile'); ?>">
                                                 <span class="text-danger"><?php echo form_error('mobile'); ?></span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            
                                                <div class="col-md-6">
                                                 <label for="example-text-input" >Email:</label>
                                                <input type="email" name="email" class="form-control"   id="example-text-input" placeholder="Enter Email " value="<?php echo set_value('email'); ?>">
                                                 <span class="text-danger"><?php echo form_error('email'); ?></span>
                                            </div>
                                        </div> 
                                         <div class="form-group row">
                                            
                                                <div class="col-md-6">
                                                 <label for="example-text-input" >Password:</label>
                                                <input type="password" name="password" class="form-control"   id="example-text-input" placeholder="Enter Password " >
                                                 <span class="text-danger"><?php echo form_error('password'); ?></span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                                <div class="col-md-6">
                                                 <label for="example-text-input" >Role:</label>
                                        <select class="form-control select2" name="role">
                                                            
                                                            <?php foreach ($role as  $value) {
                                        if($value['role_id']==$_POST['role']){
                                            $select="selected = 'selected'" ;
                                            }else{
                                            $select="";
                                            }
                                                if($value['role_id'] !='1'){                                                           ?>

                                    <option value="<?php echo $value['role_id'] ?>" <?php echo $select; ?>><?php echo $value['role']; ?></option>
                                                                <?php 
                                                                # code...
                                                           } } ?>
                                                            </optgroup>
                                                        </select>
                                                        <span class="text-danger"><?php echo form_error('role'); ?></span>
                                            </div>
                                        </div> 
                                     
                                        <div class="form-group row">
                                            
                                            <div class="col-md-6">
                                                <label class="col-md-2 col-form-label">Status</label>
                                                <select class="form-control" name="status">
                                                    <option value="1">Active</option>
                                                    <option value="0">Inactive</option>      
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">                
                                            <div class="col-md-6">
                                                <input type="submit" style="float: right" class="btn btn-primary" name="submit">
                                            </div></div>
                                       
                                    </form></div>
                                </div>
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->

                       

                    
                        <!-- end row -->
                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

            </div>
            <!-- end main content-->

      