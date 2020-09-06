<?php
/**
 * Created by PhpStorm.
 * User: m0pfin
 * Date: 05.09.2020
 * Time: 16:27
 */

include 'include/head.php';
include 'include/func.php';
?>
<!-- Header -->
<div class="header">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <!--                    <h6 class="h2 d-inline-block mb-0">Создать шаблон</h6>-->
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-links">
                            <li class="breadcrumb-item"><a href="index.php"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#">BORODA.LIVE</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Сохранённые шаблоны</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-lg-6 col-5 text-right">
                    <a href="https://qiwi.me/4dd54af1-1f38-4611-8e71-2fb771c986dc" class="btn btn-md btn-danger">Задонатить автору</a>
                </div>
            </div>
        </div>
    </div>
</div>




<div class="container-fluid">
    <?php
    if($_GET['delete'] == 'success') {
        echo "<div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
        <span class=\"alert-icon\"><i class=\"ni ni-like-2\"></i></span>
        <span class=\"alert-text\"><strong>Deleted!</strong> Шаблон удалён</span>
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
            <span aria-hidden=\"true\">×</span>
        </button>
    </div>";
    }
    ?>
    <div class="card">
        <div class="card-header border-0">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="mb-0">Сохранённые шаблоны</h3>
                </div>

            </div>
        </div>
        <div class="table-responsive">
            <!-- Projects table -->
            <div class="table-responsive">
                <table class="table align-items-center table-flush" id="myTable">
                    <thead class="thead-light">
                    <tr>

                        <th>id</th>
                        <th>Name</th>
                        <th>Strategy</th>
                        <th>Budget</th>
                        <th>GEO</th>
                        <th>Placement</th>
                        <th>Targeting</th>
                        <th>Device</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $temp = $db->query("SELECT * FROM `template` ORDER BY id ASC");

                    foreach ($temp as $temps) {
                        ?>
                        <tr id="<?php echo $temps['id']; ?>">
                            <th>
                                <?php echo $temps['id']; ?>
                            </th>
                            <td>
                                <div class="media align-items-center">
                                    <a href="#" class="avatar rounded-circle mr-3">
                                        <img alt="Image placeholder" src="assets/img/theme/react.jpg">
                                    </a>
                                    <span class="name mb-0 text-sm"><?php echo $temps['name']; ?></span>
                                </div>
                            </td>
                            <td>
                                <span class="badge badge-info">
                                    <?php echo $temps['strategy']; ?>
                                </span>
                            </td>
                            <td>
                                <span class="badge badge-info">
                                    <?php echo $temps['budget']; ?>
                                </span>
                            </td>
                            <td>
                               <span class="badge badge-dot mr-4">
                                    <i class="bg-success"></i>
                                        <span class="status"><?php echo $temps['geo']; ?></span>
                                </span>
                            </td>
                            <td>
                                <span class="badge badge-warning">
                                    <?php echo $temps['placement']; ?>
                                </span>
                            </td>
                            <td>
                                <?php echo gender($temps['gender']) .' <span class="badge badge-info">'. $temps['age_min']. ' - ' .$temps['age_max']. '</span>'; ?>
                            </td>
                            <td>
                                <?php echo device($temps['device']); ?>
                            </td>
                            <input type="hidden" value="<?php echo $temps['temp']; ?>" id="temp<?php echo $temps['id']; ?>">


                            <td class="text-right">
                                <a href="#!" class="table-action table-action-edit" data-toggle="modal" data-target="#modal-temp<?php echo $temps['id']; ?>" data-original-title="Edit product">
                                    <i class="fas fa-copy"></i>
                                </a>
                                <a href="include/crud.php?delete=<?php echo $temps['id']; ?>" class="table-action table-action-delete" data-toggle="tooltip" data-original-title="Delete product">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </td>
                        </tr>

                        <!-- Modal START -->
                        <div class="modal fade" id="modal-temp<?php echo $temps['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
                            <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h6 class="modal-title" id="modal-title-default">Шаблон рекламной кампании</h6>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                            <p>Скопируйте нижеприведённый текст и вставьте его в импорт РК Facebook</p>

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="ad_text"></label>
                                                        <textarea class="form-control" name="template" id="template" rows="20" cols="45"><?php echo $temps['temp']; ?></textarea>
                                                    </div>
                                                </div>
                                            </div>


                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-link  ml-auto" data-dismiss="modal">Закрыть</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal END -->

                        <?php
                    }
                    ?>
                    </tbody>

                </table>
            </div>
        </div>
    </div>


</div>

<?php
include 'include/foot.php';
?>
