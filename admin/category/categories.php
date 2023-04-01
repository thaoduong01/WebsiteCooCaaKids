<?php
include ('inc/header.php');
?>


<!-- MAIN CONTENT-->
<div class="main-content">
<div class="section__content section__content--p30">
<div class="container-fluid">
<div class="row">
    <div class="col-md-12">
        <h3 class="title-5 m-b-35">add category</h3>
        <div class="card-body card-block">
                <form action="admin.php?act=addcat" method="post" class="form-horizontal">   
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="email-input" class=" form-control-label">Category Name</label>
                        </div>
                        <div class="col-12 col-md-6">
                            <input type="text" id="" name="c_name" placeholder="Name" class="form-control">
                            <small class="help-block form-text">
                            <?php
                                if(isset($thongbao) && ($thongbao != ""))
                                    echo $thongbao;
                                else echo $error;
                            ?>
                            </small>
                        </div>

                        <input type="button" class="btn btn-primary btn-sm" name="themmoi" value="ADD" style="background-color: blue; border: none; color: white; padding: 4px 8px; text-decoration: none; margin: 4px 2px; cursor: pointer;">
                    </div>
                   
                    </form>

            </div>

        <!-- DATA TABLE -->
        <h3 class="title-5 m-b-35">list category</h3>
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
                        <th></th>
                    </tr>
                </thead>
                
                <tbody>
                    <?php
                        // var_dump($kq); //kiem tra da len db chua
                    ?>
                    <?php
                        if(isset($kq) && (count($kq)>0)){
                            $stt = 1;
                            foreach($kq as $category){
                                echo '<tr class="tr-shadow">
                                        <td>
                                            <label class="au-checkbox">
                                                <input type="checkbox">
                                                <span class="au-checkmark"></span>
                                            </label>
                                        </td>
                                        <td>'.$stt.'</td>
                                        <td>'.$category['Category_ID'].'</td>
                                        <td>
                                            <span class="block-email">'.$category['CatName'].'</span>
                                        </td>
                                        <td><a href="admin.php?act=delcat&Category_ID='.$category['Category_ID'].'">Delete</a></td>
                                        <td><a href="admin.php?act=updatecat&Category_ID='.$category['Category_ID'].'">Update</a></td>
                                        
                                        <td>
                                            <div class="table-data-feature">
                                                <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                    <i class="zmdi zmdi-edit"><a href="admin.php?update_c&id='.$category['Category_ID'].'"></i></a>
                                                </button>
                                                <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                    <i class="zmdi zmdi-delete"><a href="admin.php?act=delcat&Category_ID='.$category['Category_ID'].'"></i></a>
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
                </tbody>
            </table>
        </div>
        <!-- END DATA TABLE -->
    </div>
</div>

