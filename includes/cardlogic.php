<?php foreach($sth as $row):?>
<div class="card" style="width: 72rem;">
    <div class="card-body">
        <h5 class="card-title">TODO No. <?= $row['id'] ?></h5>
        <h6 class="card-subtitle mb-2 text-muted">
            <?php if($row['completed']):?>
            <i class="fas fa-check" style="font-size: 25px;"></i> Done
            <?php else:?>
            <i class="fas fa-clock" style="font-size: 25px;"></i> Todo
            <?php endif;?>
        </h6>
        <p class="card-text"><?=$row['description']?></p>
        <div class="tpbutton btn-toolbar text-center">
        <form method="POST">
            <button class="btn btn-danger" type="submit" name="delete">Delete</button>
            <input type="hidden" name="id" value="<?= $row['id'] ?>">
            <input type="hidden" name="delete" value="true">
        </form>
        <?php if($row['completed']):?>
        <form method="POST">
            <button class="btn btn-warning" type="submit" name="uncomplete">Uncomplete</button>
            <input type="hidden" name="id" value="<?= $row['id'] ?>">
            <input type="hidden" name="uncomplete" value="true">
        </form>
        <?php else:?>
        <form method="POST">
            <button class="btn btn-success" type="submit" name="complete">Complete</button>
            <input type="hidden" name="id" value="<?= $row['id'] ?>">
            <input type="hidden" name="complete" value="true">
        </form>
        <?php endif;?>
        </div>
    </div>
</div>
<?php endforeach;?>