<?php

use yii\helpers\Html;

$this->title = 'Sản phẩm';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="category-index">

    <h3><?= Html::encode($this->title) ?></h3>
    <div class="row">
        <div class="col-md-7">
            <table class="table table-striped">
                <thead class="thead-default">
                    <tr>
                        <th>#</th>
                        <th>Tên Sản phẩm</th>
                        <th>Ngày tạo</th>
                        <th>Ngày cập nhật</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (empty($listItem)): ?>
                        <tr>
                            <td colspan="5">Chưa có dữ liệu</td>
                        <tr>
                    <?php else: ?>
                        <?php foreach ($listItem as $k => $item): ?>
                            <tr>
                                <th scope="row"><?= $k + 1 ?></th>
                                <td>
                                    <?= $item->details[0]->title ?> /
                                    <?= $item->details[1]->title ?>
                                </td>
                                <td><?= date('d/m/Y H:i', $item->created) ?></td>
                                <td><?= date('d/m/Y H:i', $item->modified) ?></td>
                                <td>
                                    <?= Html::a('<i class="fa fa-pencil-square-o"></i>', ['index', 'id' => $item->id], ['class' => 'btn btn-link']) ?>
                                    <?= Html::a('<i class="fa fa-trash"></i>', ['delete', 'id' => $item->id], ['class' => 'btn btn-link delete-btn']) ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
        <div class="col-md-5">
            <?=
            $this->render('_form', [
                'model' => $model,
                'listCate' => $listCate
            ])
            ?>
        </div>
    </div>
</div>
<?php
$this->registerJs("
    $('.delete-btn').click(function (e) {
        if (!confirm('Xác nhận xóa?')) {
            return e.preventDefault();
        }
    });
");
