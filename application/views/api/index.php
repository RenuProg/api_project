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
                        <h4 class="mb-0">Api List</h4>
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
                                               <a href="<?php echo base_url('add_api'); ?>" class="btn btn-success" style="float: right">Add Api</a>
                                        </div>
                                        <div class="card-body" >
                                            <!-- <h4 class="card-title">Default Datatable</h4> -->
                                        
                                        <table id="datatable" class="table table-bordered dt-responsive nowrap " style="border-collapse: collapse; border-spacing: 0; width: 100%; ">
                                            <thead>
                                                <tr>
                                                    <th>S. No</th>
                                                    <th>Api Name</th>
                                                    
                                                                        
                                                    <th>Action</th>                                               
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $i=1;
                                                foreach ($record as  $value) {
                                               

                                                    ?>
                                                    <tr>                                         
                                                        <td><?php echo $i++; ?></td>
                                                        <td><?php echo $value->api_name; ?></td>                                                        
                                                       <td>   

                                                    <a href="<?php echo base_url('edit_api/'); ?><?php echo $value->api_id; ?>" class=""><i class="fas fa-edit"></i></a>
                                                    <a href="" class="" onclick="return confirm('Are you sure you want to delete this Project?');"><i class="fas fa-trash"></i></a>
                                                        </td>
                                                    </tr>
                                                    <?php 
                                                } 
                                                $i++;

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

                
                
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->
         

