<!--<code>--><?//=__FILE__?><!--</code>-->
<!--<br>-->
<?//=$name?>
<!--<br>-->
<?//=$hi?>
<!--<br>-->
<?php
//debug($colors);
//?>

<div class="container">
    <?php if (!empty($product)): ?>
        <?php foreach ($product as $product): ?>
            <div class="panel panel-default">
                <div class="panel-heading"><?=$product['name']?></div>
                <div class="panel-body">
                    <?=$product['content']?>
                </div>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>
</div>
