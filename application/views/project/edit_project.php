

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
                                    <h4 class="mb-0">Edit Project</h4>

                                    <div class="page-title-right">
                                        <!-- <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                                            <li class="breadcrumb-item active">Forms Elements</li>
                                        </ol> -->
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->
                        
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                     <form action="<?php echo base_url('update_project/'); ?><?php echo $record->project_id; ?>" method="POST">
                                       
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Project Name</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text" placeholder="Enter project Name" name="name" id="example-text-input" value="<?php echo $record->name; ?>">
                                                <span class="text-danger"><?php echo form_error('name'); ?></span>
                                            </div>
                                        </div>
                                         <div class="form-group row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Team Size Member</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="number" placeholder="Enter Team Size Member" name="member" id="example-text-input" value="<?php echo $record->team_size; ?>">
                                                <span class="text-danger"><?php echo form_error('member'); ?></span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Created By</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text" placeholder="Enter Created By" name="created_by" id="example-text-input"  value="<?php echo $record->created_by; ?>">
                                                <span class="text-danger"><?php echo form_error('created_by'); ?></span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Duration</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text" placeholder="Enter project Duration" name="duration" id="example-text-input" value="<?php echo $record->duration; ?>">
                                                <span class="text-danger"><?php echo form_error('duration'); ?></span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-datetime-local-input" class="col-md-2 col-form-label">Start Date</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="datetime-local" name="start_date" id="example-datetime-local-input" value="<?php echo $record->start_date; ?>">
                                                <span class="text-danger"><?php echo form_error('start_date'); ?></span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-datetime-local-input" class="col-md-2 col-form-label">Expected End Date</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="datetime-local" name="end_date" id="example-datetime-local-input" value="<?php echo $record->expected_end_date; ?>">
                                                <span class="text-danger"><?php echo form_error('end_date'); ?></span>
                                            </div>
                                        </div>
                                         <div class="form-group row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Category</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text" placeholder="Enter project Category" name="category" id="example-text-input" value="<?php echo $record->category; ?>">
                                                <span class="text-danger"><?php echo form_error('category'); ?></span>
                                            </div>
                                        </div>
                                         <div class="form-group row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Leader</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text" placeholder="Enter project Leader" name="leader" id="example-text-input" value="<?php echo $record->leader; ?>">
                                                <span class="text-danger"><?php echo form_error('leader'); ?></span>
                                            </div>
                                        </div>
                                         <div class="form-group row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Project Coordinator</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text" placeholder="Enter Project Coordinator" name="project_coordinator" id="example-text-input" value="<?php echo $record->project_coordinator; ?>">
                                                <span class="text-danger"><?php echo form_error('project_coordinator'); ?></span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Project Status</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text" placeholder="Enter Project Status" name="project_status" id="example-text-input" value="<?php echo $record->project_status; ?>">
                                                <span class="text-danger"><?php echo form_error('project_status'); ?></span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">API Type</label>
                                            <div class="col-md-10">
                                                <select class="form-control" name="api_type">
                                    <?php foreach ($api_type as  $value) { 
                                        
                                                                ?>
                                           
                       <option value="<?php echo $value['api_type_id'] ?>"<?php if($value['api_type_id']==$record->api_type){ echo "selected";} ?> ><?php echo $value['name']; ?> </option>
                                                                <?php 
                                                                # code...
                                                            } ?>
                                                </select>
                                                <span class="text-danger"><?php echo form_error('project_status'); ?></span>
                                            </div>
                                        </div>
                                        <input type="hidden" name="id" value="<?php echo $record->project_id; ?>">
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Status</label>
                                            <div class="col-md-10">
                                                <select class="form-control" name="status">
                                                    <option value="1">Active</option>
                                                    <option value="0">Inactive</option>
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

      