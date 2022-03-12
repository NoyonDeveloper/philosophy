<?php 
    $philosophy_fp = new WP_Query(array(
        'meta_key' => 'featured',
        'meta_value' => 1,
        'posts_per_page' => 3,
    ));
    $philosophy_pt_data = array();
    while($philosophy_fp->have_posts()){
        $philosophy_fp->the_post();        
        $categories = get_the_category();
        $philosophy_catogry = $categories[mt_rand(0,count($categories)-1)];
        $philosophy_pt_data[] = array(
            'title'         => get_the_title(),
            'permalink'     => get_the_permalink(),
            'date'          => get_the_date(),
            'thumbnail'     => get_the_post_thumbnail_url(get_the_ID(),"large"),
            'author'        => get_the_author_meta("display_name"),
            'author_url'       => get_author_posts_url(get_the_author_meta("ID")),
            'author_avatar' => get_avatar_url(get_the_author_meta("ID")),
            'cat'           => $philosophy_catogry->name,
            'catlink'       => get_category_link($philosophy_catogry),
        );
    }
    if($philosophy_fp->post_count>1) :
?>
<div class="pageheader-content row">
<div class="col-full">
    <div class="featured">
    <div class="featured__column featured__column--big">
        <div class="entry" style="background-image:url('<?php echo esc_url($philosophy_pt_data[0]['thumbnail']); ?>">
        <div class="entry__content">
            <span class="entry__category"><a href="<?php echo esc_url($philosophy_pt_data[0]['catlink']); ?>"><?php echo esc_html($philosophy_pt_data[0]['cat']); ?></a></span>
            <h1>
                <a href="<?php echo esc_url($philosophy_pt_data[0]['permalink']); ?>" title="">
                    <?php echo esc_html($philosophy_pt_data[0]['title']); ?>
                </a>
            </h1>
            <div class="entry__info">
            <a href="<?php echo esc_url($philosophy_pt_data[0]['author_url']); ?>" class="entry__profile-pic">
                <img class="avatar" src="<?php echo esc_url($philosophy_pt_data[0]['author_avatar']) ?>" alt="">
            </a>
            <ul class="entry__meta">
                <li><a href="<?php echo esc_url($philosophy_pt_data[0]['author_url']); ?>"><?php echo esc_html($philosophy_pt_data[0]['author']); ?></a></li>
                <li><?php echo esc_html($philosophy_pt_data[0]['date']); ?></li>
            </ul>
            </div>
        </div>
        </div>        
    </div>
    <div class="featured__column featured__column--small">
    <?php 
    for($ft_side=1; $ft_side<3; $ft_side++) :
    ?>
        <div class="entry" style="background-image:url('<?php echo esc_url($philosophy_pt_data[$ft_side]['thumbnail']); ?>">
        <div class="entry__content">
            <span class="entry__category"><a href="<?php echo esc_url($philosophy_pt_data[$ft_side]['catlink']); ?>"><?php echo esc_html($philosophy_pt_data[$ft_side]['cat']); ?></a></span>
            <h1><a href="<?php echo esc_url($philosophy_pt_data[$ft_side]['permalink']); ?>" title="">
                <?php echo esc_html($philosophy_pt_data[$ft_side]['title']); ?>
            </a></h1>
            <div class="entry__info">
            <a href="<?php echo esc_url($philosophy_pt_data[$ft_side]['author_url']); ?>" class="entry__profile-pic">
                <img class="avatar" src="<?php echo esc_url($philosophy_pt_data[$ft_side]['author_avatar']) ?>" alt="">
            </a>
            <ul class="entry__meta">
                <li><a href="<?php echo esc_url($philosophy_pt_data[$ft_side]['author_url']); ?>"><?php echo esc_html($philosophy_pt_data[$ft_side]['author']); ?></a></li>
                <li><?php echo esc_html($philosophy_pt_data[$ft_side]['date']); ?></li>
            </ul>
            </div>
        </div>
        </div>
        <?php 
        endfor;
        ?>
    </div>
    </div>
</div>
</div>
<?php
endif;
?>
