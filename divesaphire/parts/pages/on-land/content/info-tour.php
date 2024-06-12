<?php
$title = get_field('info_tour_title');
$notes = get_field('info_tour_notes');
$table = get_field('table');
$additionally = get_field('additionally');
?>
<section class="info-tour">
    <div class="content-width">
        <div class="first-item-wrap">
            <?php if ($title) : ?>
                <div class="title"><?php echo $title; ?></div>
            <?php endif; ?>
            <?php if (is_array($notes)) : ?>
                <ul class="point-list">
                    <?php foreach ($notes as $item) :
                        $note = $item['note']; ?>
                        <li><?php echo $note; ?></li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
        </div>
        <?php if (is_array($table)) :
            $count_const = 1; ?>
            <div class="tab-wrap">
                <?php foreach ($table as $item) :
                    $title = $item['title']; ?>
                    <?php if ($title) : ?>
                        <div class="title"><?php echo $title; ?></div>
                    <?php endif; ?>
                <?php endforeach; ?>
                <div class="table-3">
                    <?php foreach ($table as $item) :
                        $items = $item['items']; ?>
                        <?php foreach ($items as $temp) :
                            $block = $temp['block'];
                            $count = 1; ?>
                            <div class="table-row <?php echo $count_const  ? 'table-head' : ''; ?>">
                                <?php foreach ($block as $tempa) :
                                    $text = $tempa['text']; ?>
                                    <div class="data-item data-item-<?php echo $count; ?>"><?php echo $text; ?></div>
                                <?php $count++;
                                endforeach; ?>

                            </div>
                        <?php $count_const = 0;
                        endforeach; ?>
                    <?php
                    endforeach; ?>

                </div>
            </div>
        <?php endif; ?>
        <?php if (is_array($additionally)) : ?>
            <div class="item-wrap">
                <?php foreach ($additionally as $item) :
                    $title = $item['title'];
                    $сheckmark = $item['сheckmark'];
                    $texts = $item['texts']; ?>
                    <div class="item-list">
                        <?php if ($title) : ?>
                            <div class="title"><?php echo $title; ?></div>
                        <?php endif; ?>
                        <?php if ($сheckmark) : ?>
                            <ul class="list-check">
                                <?php foreach ($texts as $temp) :
                                    $text = $temp['text']; ?>
                                    <li><i class="fas fa-check"></i><?php echo $text; ?></li>
                                <?php endforeach; ?>
                            </ul>
                        <?php else : ?>
                            <ul class="point-list">
                                <?php foreach ($texts as $temp) :
                                    $text = $temp['text']; ?>
                                    <li><?php echo $text; ?></li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>

            </div>
        <?php endif; ?>
    </div>
</section>