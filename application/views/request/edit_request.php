

            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-flex align-items-center justify-content-between">
                                    <h4 class="mb-0"><?php echo $page_name; ?></h4>

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
                                        <form action="<?php echo base_url('edit_request/'); ?><?php echo $record[0]->id; ?>" method="POST">
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Request Name</label>
                                            <div class="col-md-10">
                                                <input type="text" name="name" value="<?php echo $record[0]->r_name; ?>" class="form-control"   id="example-text-input" placeholder="Enter Project Name">
                                                 <span class="text-danger"><?php echo form_error('name'); ?></span>
                                            </div>
                                        </div> 
                                     
                                        <div class="form-group row">
                                            <label class="col-md-2 col-form-label">Status</label>
                                            <div class="col-md-10">
                                                <select class="form-control" name="status">
                                                    <option value="1" <?php if($record[0]->status == 1){ echo "selected";}?>>Active</option>
                                                    <option value="0" <?php if($record[0]->status == 0){ echo "selected";}?>>Inactive</option>                                               
                                                </select>
                                            </div>
                                        </div>
                                        <input type="hidden" name="id" value="<?php echo $record[0]->id; ?>">
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


      <?php $this->load->view('includes/footer'); ?>