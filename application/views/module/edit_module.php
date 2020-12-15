

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-flex align-items-center justify-content-between">
                                    <h4 class="mb-0">Edit Module</h4>

                                    <!-- <div class="page-title-right">
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
                                        <form action="<?php echo base_url('edit_module/'); ?><?php echo $module[0]->module_id; ?>" method="POST">
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Module Name</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text" placeholder="Enter project Name" name="name" id="example-text-input" value="<?php echo $module[0]->name; ?>">
                                                <span class="text-danger"><?php echo form_error('name'); ?></span>
                                            </div>
                                        </div>
                                        
                                          <div class="form-group row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Select Project</label>
                                            <div class="col-md-10">
                                               <select name="project" id="" class="form-control">
                                                <?php foreach ($project as  $value) {
                                                   ?>         
                                            <option value="<?php echo $value['project_id'] ?>"><?php echo $value['name']; ?></option>
                                           
                                              <?php 
                                                } ?>
                                         </select>
                                            </div>
                                        </div>
                                         <div class="form-group row">
                                            <label for="example-datetime-local-input" class="col-md-2 col-form-label">Start Date</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="datetime-local" name="start_date" id="example-datetime-local-input" value="<?php echo $module[0]->start_date;  ?>">
                                                <span class="text-danger" ><?php echo form_error('start_date'); ?></span>
                                            </div>
                                        </div>
                                        <input type="hidden" name="id" value="<?php echo $module[0]->module_id; ?>">
                                        <div class="form-group row">
                                            <label for="example-datetime-local-input" class="col-md-2 col-form-label">Expected End Date</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="datetime-local" name="end_date" id="example-datetime-local-input" value="<?php echo $module[0]->expected_end_date;  ?>">
                                                <span class="text-danger"><?php echo form_error('end_date'); ?></span>
                                            </div>
                                        </div>
                                         <div class="form-group row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Created By</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text" placeholder="Enter Created By" name="created_by" id="example-text-input" value="<?php echo $module[0]->created_by; ?>">
                                                <span class="text-danger"><?php echo form_error('created_by'); ?></span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Status</label>
                                            <div class="col-md-10">
                                                 <select class="form-control" name="status">
                                                   <option value="1" <?php if($module[0]->is_active == 1){ echo "selected";}?>>Active</option>
                                                    <option value="0" <?php if($Module[0]->is_active == 0){ echo "selected";}?>>Inactive</option>    
                                                </select>
                                                <span class="text-danger"><?php echo form_error('status'); ?></span>
                                            </div>
                                        </div>
                                       
                             <input type="submit" style="float: right" class="btn btn-primary" name="submit">
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

      