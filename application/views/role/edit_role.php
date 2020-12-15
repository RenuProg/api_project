
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-flex align-items-center justify-content-between">
                                    <h4 class="mb-0">Edit Role</h4>

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
                                        <form action="<?php echo base_url('edit_role/'); ?><?php echo $record[0]->role_id; ?>" method="POST">
                                        <div class="form-group row">

                                                <div class="col-md-6">
                                                 <label for="example-text-input" class="col-md-2 col-form-label">Role:</label>
                                                <input type="text" name="name" class="form-control"   id="example-text-input" placeholder="Enter Role " value="<?php echo $record[0]->role; ?>">
                                                 <span class="text-danger"><?php echo form_error('name'); ?></span>
                                            </div>
                                        </div> 
                                     
                                        <div class="form-group row">
                                            
                                            <div class="col-md-6">
                                                <label class="col-md-2 col-form-label">Status</label>
                                                <select class="form-control" name="status">
                                                   <option value="1" <?php if($record[0]->is_active == 1){ echo "selected";}?>>Active</option>
                                                    <option value="0" <?php if($record[0]->is_active == 0){ echo "selected";}?>>Inactive</option>    
                                                </select>
                                            </div>
                                        </div>
                                        <input type="hidden" name="id" value="<?php echo $record[0]->role_id; ?>">
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

      