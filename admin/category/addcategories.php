    <?php
        include ('inc/header.php');
    ?>
          <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Add Category</strong>
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="admin.php?act=addcategories" method="post" enctype="multipart/form-data" class="form-horizontal">   
                                            <!-- <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Category ID</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="c_id" name="c_id" placeholder="ID" class="form-control" disabled>
                                                    <small class="form-text text-muted">This is a category id</small>
                                                </div>
                                            </div> -->
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="email-input" class=" form-control-label">Category Name</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="c_name" name="c_name" placeholder="Name" class="form-control">
                                                    <small class="help-block form-text">Please enter name category</small>
                                                </div>
                                            </div>

                                            <div>
                                                <button type="submit" class="btn btn-primary btn-sm" name="themmoi">
                                                    <i class="fa fa-dot-circle-o"></i> Submit
                                                </button>
                                                <button type="reset" class="btn btn-danger btn-sm">
                                                    <i class="fa fa-ban"></i> Reset
                                                </button>
                                                <button type="reset" class="btn btn-info btn-sm">
                                                    <i class="fa fa-list-alt" aria-hidden="true"></i><a href="admin.php?act=categories">List Category</a>
                                                </button>

                                            </div>

                                            <?php 
                                                if(isset($thongbao) && ($thongbao != ""))
                                                    echo $thongbao;
                                                else echo $error;
                                            ?>
                                           </form>
                                    </div>
                                    
                                </div>
                                
                            </div>
                            
                        </div>
                        <?php
                            include ('inc/footer.php');
                        ?>
