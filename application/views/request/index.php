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
                        <h4 class="mb-0">Request List</h4>

                        <div class="page-title-right">
                                       <!--  <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                                            <li class="breadcrumb-item active">Data Tables</li>
                                        </ol> -->
                                    </div>

                                </div>
                            </div>
                        </div>
                        <?php if($this->session->flashdata('insert_msg')){ ?>
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong><?php echo $this->session->flashdata('insert_msg'); ?>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<?php } ?>
<?php if($this->session->flashdata('update_msg')){ ?>
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong><?php echo $this->session->flashdata('update_msg'); ?>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<?php } ?>
<?php if($this->session->flashdata('delete_msg')){ ?>
<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong><?php echo $this->session->flashdata('delete_msg'); ?>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<?php } ?>
                        <!-- end page title -->
                        
                        <div class="row">
                            <div class="col-12">
                                <div class="card" style="padding: 1rem">
                                     <div class="card-head" >
                                         
                                        <a href="<?php echo base_url('add_request'); ?>" class="btn btn-success" style="float: right">Add Request</a>
                               
                                     </div>
                                    <div class="card-body">                                      
                                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                            <tr>
                                                <th>S.No</th>
                                                <th>Request Type</th>                                                
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
                                        <td><?php echo $i++; ?></td>
                                            <td><?php echo $value['name']; ?></td>                                                
                                 <td>
                                    <a href="<?php echo base_url()?>edit_request/<?php echo $value['id'];?>" class="btn btn-info" ><i class="fas fa-edit"></i></a>
                                    <a href="<?php echo base_url('Request_Controller/delete/')?><?php echo $value['id']; ?>" class="btn btn-danger"  onclick="return confirm('Are you sure you want to delete this item?');"><i class="fas fa-trash"></i></a>

                                 </td>  
                                                </tr>
                                                <?php 
                                            }  $i++;
                                            ?>

                                        </tbody>
                                    </table>

                                </div>
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

