

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
                                    <h4 class="mb-0">Edit Api</h4>

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
                             <form action="<?php echo base_url('update_api'); ?>" method="POST">                                        
                                     <div class="form-group row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Api Name</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text" placeholder="Enter Name" name="name" id="example-text-input" value="<?php echo $records[0]->api_name; ?>">
                                                <span class="text-danger"><?php echo form_error('name'); ?></span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                        <label for="example-text-input" class="col-md-2 col-form-label">Description</label>
                                        <div class="col-md-10">
                                                <textarea name="description" id="description" ><?php echo $records[0]->description; ?></textarea>
                                                <span class="text-danger"><?php echo form_error('description'); ?></span>
                                            </div>
                                        </div>
                                          <div class="form-group row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Base Url</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text" placeholder="Enter base url" name="base_url" id="example-text-input" value="<?php echo $records[0]->base_url; ?>">
                                                <span class="text-danger"><?php echo form_error('base_url'); ?></span>
                                            </div>
                                        </div>
                                         <div class="form-group row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Request Method</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text" placeholder="Enter Request Method" name="request_method" id="example-text-input" value="<?php echo $records[0]->req_method; ?>">
                                                <span class="text-danger"><?php echo form_error('request_method'); ?></span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Request url</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text" placeholder="Enter Request url" name="req_url" id="example-text-input" value="<?php echo $records[0]->req_url; ?>">
                                                <span class="text-danger"><?php echo form_error('req_url'); ?></span>
                                            </div>
                                        </div>
                                         <div class="form-group row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Request Parameter</label>
                                            <div class="col-md-10">
                                                <textarea name="request_parameters"><?php echo $records[0]->request_parameters; ?></textarea>
                                                <span class="text-danger"><?php echo form_error('request_parameters'); ?></span>
                                            </div>
                                        </div>
                                         <div class="form-group row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Response Parameter</label>
                                            <div class="col-md-10">
                                                <textarea name="response_parameters"><?php echo $records[0]->response_parameters; ?></textarea>
                                                <span class="text-danger"><?php echo form_error('response_parameters'); ?></span>
                                            </div>
                                        </div>
                                         <div class="form-group row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Access Token Type</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text" placeholder="Enter Access Token Type" name="access_token_type" id="example-text-input" value="<?php echo $records[0]->access_token_type; ?>">
                                                <span class="text-danger"><?php echo form_error('response_parameters'); ?></span>
                                            </div>
                                        </div>
                                         <div class="form-group row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Access Token Param</label>
                                            <div class="col-md-10">
                                               <textarea name="access_token_param"><?php echo $records[0]->access_token_param; ?></textarea>
                                                <span class="text-danger"><?php echo form_error('access_token_param'); ?></span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Header Param</label>
                                            <div class="col-md-10">
                                               <textarea name="header_param"><?php echo $records[0]->header_param; ?></textarea>
                                                <span class="text-danger"><?php echo form_error('header_param'); ?></span>
                                            </div>
                                        </div>
                                           <div class="form-group row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Sample Req Url </label>
                                            <div class="col-md-10">
                                                <input type="text" name="sample_req_url" class="form-control" value="<?php echo $records[0]->sample_req_url; ?>">
                                                <span class="text-danger"><?php echo form_error('sample_req_url'); ?></span>
                                            </div>
                                        </div>
                                         <div class="form-group row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Sample Req </label>
                                            <div class="col-md-10">
                                                <textarea name="sample_req"><?php echo $records[0]->sample_req; ?></textarea>
                                                <span class="text-danger"><?php echo form_error('sample_req'); ?></span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Sample Response</label>
                                            <div class="col-md-10">
                                                <textarea name="sample_response"><?php echo $records[0]->sample_response; ?></textarea>
                                                <span class="text-danger"><?php echo form_error('sample_response'); ?></span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Note</label>
                                            <div class="col-md-10">
                                                <textarea name="note"><?php echo $records[0]->note; ?></textarea>
                                                <span class="text-danger"><?php echo form_error('note'); ?></span>
                                            </div>
                                        </div>

                                          <div class="form-group row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Select Project</label>
                                            <div class="col-md-10">
                                               <select name="project" id="" class="form-control">
                                                <?php foreach ($project as  $value) {
                                                   
                                                   ?>         
                                            <option value="<?php echo $value['project_id'] ?>" <?php  if($value['project_id']==$records[0]->project_id){
                                                        echo "selected";
                                                    }?>><?php echo $value['name']; ?></option>
                                           
                                              <?php 
                                                } ?>
                                         </select>
                                            </div>
                                        </div>
                                         <div class="form-group row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Select Module</label>
                                            <div class="col-md-10">
                                               <select name="module" id="" class="form-control">
                                                <?php foreach ($module as  $value) {
                                                   ?>         
                                            <option value="<?php echo $value['module_id'] ?>" <?php  if($value['module_id']==$records[0]->module_id){
                                                        echo "selected";
                                                    }?>><?php echo $value['name']; ?></option>
                                           
                                              <?php 
                                                } ?>
                                         </select>
                                            </div>
                                        </div>
                                      <input type="hidden" name="id" value="<?php echo $records[0]->api_id ?>">
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Status</label>
                                            <div class="col-md-10">
                                                <select class="form-control" name="status">
                                                    <option value="1" <?php if($records[0]->is_active =="1"){ echo'selected';} ?>>Active</option>
                                                    <option value="0" <?php if($records[0]->is_active =="0"){ echo'selected';} ?>>Inactive</option>
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

      