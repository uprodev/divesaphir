<?php
$qa_title = get_field('qa_title');
$qa_contents = get_field('qa_contents');
?>
<section class="faq">
    <div class="content-width">
        <ul class="breadcrumb">
            <?php if (function_exists('bcn_display')) {
                bcn_display();
            } ?>
        </ul>
        <?php if ($qa_title) : ?>
            <h2><?php echo $qa_title; ?></h2>
        <?php endif; ?>
        <?php if (is_array($qa_contents)) : ?>
            <ul class="accordion">
                <?php foreach ($qa_contents as $item) :
                    $question = $item['question'];
                    $answer = $item['answer']; ?>
                    <li class="accordion-item ">
                        <?php if ($question) : ?>
                            <div class="accordion-thumb">
                                <p><?php echo $question; ?></p>
                            </div>
                        <?php endif; ?>
                        <?php if ($answer) : ?>
                            <div class="accordion-panel">
                                <div class="wrap">
                                    <?php echo $answer; ?>
                                </div>
                            </div>
                        <?php endif; ?>
                    </li>
                <?php endforeach; ?>

            </ul>
        <?php endif; ?>

    </div>
</section>