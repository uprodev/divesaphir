<?php
$title = get_field('table_info_title');
$table = get_field('table_info_table');
?>
<?php if (is_array($table)) : ?>
    <section class="table-info">
        <div class="content-width">
            <?php if ($title) : ?>
                <p class="title"><?php echo $title; ?></p>
            <?php endif ?>
            <div class="content">
                <?php foreach ($table as $item) :
                    $column = $item['column']; ?>
                    <ul class="table-ul">
                        <?php foreach ($column as $temp) :
                            $field = $temp['field'];
                            $value = $temp['value']; ?>
                            <li>
                                <?php if ($field) : ?>
                                    <p><?php echo $field; ?></p>
                                <?php endif ?>
                                <?php if ($value) : ?>
                                    <p><?php echo $value; ?></p>
                                <?php endif ?>
                            </li>


                        <?php endforeach; ?>
                    </ul>
                <?php endforeach; ?>

            </div>
        </div>
    </section>
<?php endif ?>