<?php
include ('inc/header.php');
?>


<!-- MAIN CONTENT-->
<div class="main-content">
<div class="section__content section__content--p30">
<div class="container-fluid">
<div class="row">
    <div class="col-md-12">

        <h3 class="title-5 m-b-35">add product</h3>
            <div class="card-body card-block">
                <form action="admin.php?act=addproduct" method="post" enctype="multipart/form-data" class="form-horizontal">    
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="email-input" class=" form-control-label">Product Name</label>
                        </div>
                        <div class="col-12 col-md-6">
                            <input type="text" id="" name="name" placeholder="Name" class="form-control">
                            <small class="help-block form-text">Please enter name category</small>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="select" class=" form-control-label">Category Name</label>
                        </div>
                        <div class="col-12 col-md-6">
                            <select name="idcat" id="" class="form-control">
                                <option value="0">Please category</option>
                                <?php
                                    if(isset($listcat)){
                                        foreach($listcat as $category){
                                            echo '<option value="'.$category['Category_ID'].'">'.$category['CatName'].'</option>';
                                        }
                                    }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="select" class=" form-control-label">Price</label>
                        </div>
                        <div class="col-12 col-md-6">
                            <input type="text" id="" name="price" placeholder="Price" class="form-control">
                            <small class="help-block form-text">Please enter price category</small>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="file-input" class=" form-control-label">Images</label>
                        </div>
                        <div class="col-12 col-md-6">
                            <input type="file" id="" name="img" class="form-control-file">
                        </div>
                    </div>

                    <input type="submit" name="add" value="ADD" style="background-color: blue; border: none; color: white; padding: 4px 8px; text-decoration: none; margin: 4px 2px; cursor: pointer;">



                    <!-- <div>
                        <button type="submit" class="btn btn-primary btn-sm" name="add">
                            <i class="fa fa-dot-circle-o"></i> Submit
                        </button>
                    </div> -->

                    <?php 
                        if(isset($thongbao) && ($thongbao != ""))
                            echo $thongbao;
                        else echo $error;
                    ?>
                </form>

            </div>
        <!-- DATA TABLE -->
        <h3 class="title-5 m-b-35">list product</h3>
        <div class="table-data__tool">
            <div class="table-data__tool-left">
                <div class="rs-select2--light rs-select2--md">
                    <select class="js-select2" name="property">
                        <option selected="selected">All Properties</option>
                        <option value="">Option 1</option>
                        <option value="">Option 2</option>
                    </select>
                    <div class="dropDownSelect2"></div>
                </div>
                <div class="rs-select2--light rs-select2--sm">
                    <select class="js-select2" name="time">
                        <option selected="selected">Today</option>
                        <option value="">3 Days</option>
                        <option value="">1 Week</option>
                    </select>
                    <div class="dropDownSelect2"></div>
                </div>
                <button class="au-btn-filter">
                    <i class="zmdi zmdi-filter-list"></i>filters</button>
            </div>
            <div class="table-data__tool-right">
                <div class="rs-select2--dark rs-select2--sm rs-select2--dark2">
                    <select class="js-select2" name="type">
                        <option selected="selected">Export</option>
                        <option value="">Option 1</option>
                        <option value="">Option 2</option>
                    </select>
                    <div class="dropDownSelect2"></div>
                </div>
            </div>
        </div>
        <div class="table-responsive table-responsive-data2">
            <table class="table table-data2">
                <thead>
                    <tr>
                        <th>
                            <label class="au-checkbox">
                                <input type="checkbox">
                                <span class="au-checkmark"></span>
                            </label>
                        </th>
                        <th>STT</th>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Img</th>
                        <th></th>
                    </tr>
                </thead>

                    <?php
                        if(isset($kq) && (count($kq)>0)){
                            $stt = 1;
                            foreach($kq as $product){
                                echo '<tr class="tr-shadow">
                                        <td>
                                            <label class="au-checkbox">
                                                <input type="checkbox">
                                                <span class="au-checkmark"></span>
                                            </label>
                                        </td>
                                        <td>'.$stt.'</td>
                                        <td>'.$product['ID'].'</td>
                                        <td>'.$product['Name'].'</td>
                                        <td>'.$product['Price'].'VND</td>
                                        <td><img src="'.$product['Img'].'" width="80px"/></td>
                                        <td><a href="admin.php?act=delete&ID='.$product['ID'].'">Delete</a></td>
                                        <td><a href="admin.php?act=updatecat&Category_ID='.$product['ID'].'">Update</a></td>
                                        
                                        <td>
                                            <div class="table-data-feature">
                                                <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                    <i class="zmdi zmdi-edit"><a href="admin.php?act=update_p&id='.$product['Category_ID'].'"></i></a>
                                                </button>
                                                <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                    <i class="zmdi zmdi-delete"><a href="admin.php?act=product&id='.$product['Category_ID'].'"></i></a>
                                                </button>
                                                <button class="item" data-toggle="tooltip" data-placement="top" title="More">
                                                    <i class="zmdi zmdi-more"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="spacer"></tr>';

                                    $stt++;
                            }
                        }
                    ?>
                <tbody>

                </tbody>
            </table>
        </div>
        <!-- END DATA TABLE -->
    </div>
</div>
