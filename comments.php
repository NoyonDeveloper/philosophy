<div class="comments-wrap">
    <div id="comments" class="row">
        <div class="col-full">
            <h3 class="h2">
            <?php 
            $philosophy_cmcon = get_comments_number();
            if($philosophy_cmcon <= 1){
                echo $philosophy_cmcon." ".__("Comment","philosophy");
            }else {
                echo $philosophy_cmcon." ".__("Comments","philosophy");
            }
            ?>
            </h3>

            <ol class="commentlist">
                <?php 
                wp_list_comments();
                ?>
            </ol>

            <div class="respond">
                <h3 class="h2"><?php _e("Add Comment","philosophy"); ?></h3>
                <?php
                comment_form();
                ?>
            </div>
        </div>
    </div>
</div>