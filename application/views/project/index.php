<!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">
                <div class="page-content">
                    <div class="container-fluid">
                       <?php //$this->session->set_flashdata('msg', 'Project added Successfully'); ?>
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-flex align-items-center justify-content-between">
                                    <h4 class="mb-0">Project List</h4>
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <!-- <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                                            <li class="breadcrumb-item active">Data Tables</li> -->
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->
                        
                        <div class="row">
                            <div class="col-12">
                                <div class="card" style="padding: 1rem">
                                       <div class="card-head" >
                                           <a href="<?php echo base_url('add_project'); ?>" class="btn btn-success" style="float: right">Add Project</a>
                                   
                                       </div>
                                    <div class="card-body">
                                        <!-- <h4 class="card-title">Default Datatable</h4> -->
                                       
                                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                            <tr>
                                                <th>S. No</th>
                                                <th>Project Name</th>
                                                <th> Category</th>
                                                <th>Team Size</th>
                                                <th>Start Date</th>
                                                <th>End Date</th>
                                                <th>Module</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php 
                                            $i=1;
                                            foreach ($records as  $value) {
                                                    //print_r($value);die;
                                            ?>
                                            <tr>  
                                                <td><?php echo $i; ?></td>
                                             <td><?php echo $value['name']; ?></td>
                                             <td><?php echo $value['category']; ?></td>
                                             <td><?php echo $value['team_size']; ?></td>
                                                <td><?php echo $value['start_date']; ?></td>
                                                <td><?php echo $value['expected_end_date']; ?></td>
                                                <td> <a href="<?php echo base_url('module_list/')?><?php echo $value['project_id']; ?>" class=""><i class="fas fa-list"></i></a></td>
                                                <td>
                                                  
                                                      <a href="<?php echo base_url('update_project/')?><?php echo $value['project_id']; ?>" class=""><i class="fas fa-edit"></i></a>
                            <a href="<?php echo base_url('Project_Controller/delete/')?><?php echo $value['project_id']?>" class="" onclick="return confirm('Are you sure you want to delete this Project?');"><i class="fas fa-trash"></i></a>
                                                </td>
                                            </tr>
                                             <?php 
                                                } $i++;
                                                ?>
                                            </tbody>
                                        </table>
        
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->
                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                <script>document.write(new Date().getFullYear())</script> © Nazox.
                            </div>
                            <div class="col-sm-6">
                                <div class="text-sm-right d-none d-sm-block">
                                    Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesdesign
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

       