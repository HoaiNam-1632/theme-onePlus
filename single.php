<?php
get_header();
?>
<?php
function convertDateJP($date)
{
    $datePost = new DateTime($date);
    return $datePost->format('Y') . "年" . $datePost->format('m') . "月" . $datePost->format('d') . "日";
}
$postCurrent = $wp_query->post;
if ($postCurrent) :
?>
    <section class="section viral-section">
        <div class="wrapper">
            <div class="inner">
                <div class="viral">
                    <div class="viral-left">
                        <h1><?php the_title() ?></h1>
                        <ul class="dateList">
                            <li class="dateList__item">
                                <i class="fa-regular fa-clock"></i>
                                <?php
                                echo convertDateJP($postCurrent->post_date);
                                ?>
                            </li>
                            <li>
                                <i class="fa-solid fa-folder"></i>
                                <?php
                                $categories = get_the_category($postCurrent->ID);
                                if (@$categories) {
                                    foreach ($categories as $category) {
                                        echo '<a href="">' . $category->name . '</a>, ';
                                    }
                                }
                                ?>
                            </li>
                            <li>
                                <i class="fa-solid fa-tag"></i>
                                <?php
                                $tags = get_the_tags($postCurrent);
                                if ($tags) {
                                    foreach ($tags as $tag) {
                                        echo '<a href="">' . $tag->name . '</a>, ';
                                    }
                                }
                                ?>
                            </li>
                        </ul>
                    </div>
                    <div class="viral-right">
                        <div class="viral-img zoom-in">
                            <div class="icon-category">
                                <a href="">
                                    <i class="fa-solid fa-folder"></i>
                                    DX
                                </a>
                            </div>
                            <img src="<?php the_post_thumbnail_url() ?>" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section wider-section">
        <div class="wrapper">
            <div class="inner">
                <div class="wider">
                    <ul>
                        <li>
                            <a href="">
                                <i class="fa-solid fa-house"></i>
                                HOME
                            </a>
                        </li>
                        <li>
                            <a href="">
                                DX
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <?php echo $post->post_title ?>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- L-MAIN -->
    <section class=" section section-l-main">
        <div class="l-main-wrapper">
            <div class="l-main-inner">
                <main class="main">
                    <!-- SOCIAL TOP -->
                    <section class="section section-social-top">
                        <div class="wrapper">
                            <div class="inner">
                                <div class="social-top">
                                    <ul>
                                        <li><a href="" id="fb"><i class="fa-brands fa-square-facebook"></i> </a></li>
                                        <li><a href="" id="x">
                                                <i class="fa-brands fa-square-twitter"></i>
                                            </a></li>
                                        <li><a href="" id="b">
                                                <div class="icon-hatebookmark"> B!</div>
                                            </a></li>
                                        <li><a href="" id="pocket">
                                                <div class="icon-pocket">
                                                    <i class="fa-brands fa-get-pocket"></i>
                                                </div>
                                            </a></li>
                                        <li><a href="" id="line">
                                                <i class="fa-brands fa-line"></i>
                                            </a></li>
                                        <li><a href="" id="linkedin">
                                                <i class="fa-brands fa-linkedin"></i>
                                            </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- BANNER -->
                    <?php $banner = get_field('banner'); 
                        if(@$banner['img']):
                    ?>
                    <section class="section section-banner">
                        <div class="wrapper">
                            <div class="inner">
                                <div class="banner">
                                    <div class="title">
                                        <h2>Title Category</h2>
                                    </div>
                                    <div class="banner-img">
                                        <img src="<?php echo $banner['img']; ?>" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <?php endif; ?>
                    <!-- CONTENTS -->
                    <section class="section section-contents">
                        <div class="wrapper">
                            <div class="inner">
                                <div class="contents">
                                        <div class="contents-one">
                                        <?php
                                            $content = get_field('content');
                                            if(@$content){
                                                echo $content;
                                            }
                                        ?>
                                        </div>   

                                        <!-- table of contents -->
                                        <?php 
                                                $getContent = get_field('list_main_contents');
                                                if($getContent):
                                                $getListTitles = [];
                                                foreach($getContent as $key => $content){
                                                     $getListTitles[$key]['title'] = $content['title'];
                                                     if($content['list_contents']){
                                                        // get sub title
                                                        foreach($content['list_contents'] as $item){
                                                            $getListTitles[$key]['sub_title'][] = $item['sub_title'];
                                                        }
                                                     }
                                                }
                                        ?>
                                            <div class="outline">
                                            <div class="outline-inner">
                                            <span class="outline__title">目次 </span>
                                            <label class="outline_switch" for="outline__switch" id="outline-click">
                                                開く
                                            </label>
                                            <ul class="outline__list outline__list-2">
                                            <?php
                                                foreach($getListTitles as $key => $value){
                                                    $numberList = $key + 1; 
                                                    if(@$value['sub_title']){
                                                        echo '
                                                                <li class="outline__item">
                                                                <a href="javascript: scrollToForm('.$numberList.');">
                                                                <span class="outline__number">'.$numberList.'</span>
                                                                    '.$value['title'].'
                                                                </a>
                                                                <ul>
                                                                    ';
                                                                foreach($value['sub_title'] as $key => $subTitle){
                                                                    $setId = $numberList.'_'.($key + 1);
                                                                    echo '<li class="outline__item">
                                                                                <a href="javascript: scrollToForm('.$numberList.','.($key + 1).');">
                                                                                    <span class="outline__number">'.$numberList.'.'.($key + 1).'</span>
                                                                                    '.$subTitle.'
                                                                                </a>
                                                                            </li>';
                                                                }
                                                        echo '
                                                                </ul>
                                                                </li>
                                                                ';
                                                    }
                                                   else echo '<li class="outline__item" id="text-scroll">
                                                                <a href="javascript: scrollToForm('.$numberList.');">
                                                                <span class="outline__number">'.$numberList.'</span>
                                                                '.$value['title'].'
                                                                </a></li>';
                                                }
                                            ?>
                                            </ul>
                                            </div>
                                            </div>
                                        <?php endif; ?>
                              
                                    <!-- OUTLINE  -->
                                    <?php 
                                        $listContents = get_field('list_main_contents');
                                        if($listContents):
                                            foreach($listContents as $key => $content):
                                    ?>
                                    <div class="outline_<?php echo $key + 1; ?>" id="item_<?php echo $key + 1; ?>">
                                        <h2 class="title main-block-title">
                                            <?php echo $content['title']; ?>
                                        </h2>
                                        <?php if($content['img_title']): ?>
                                        <div class="outline_block__img">
                                            <img src="<?php echo $content['img_title']; ?>" alt="" class="main-block-img">
                                        </div>
                                        <?php endif; ?>
                                        <div class="content">
                                            <?php 
                                                echo $content['content'];
                                                if($content['list_contents']){
                                                    $numberTitle = $key + 1;
                                                    $listContent = $content['list_contents'];
                                                    foreach($listContent as $key => $item){
                                                        $numberSubTitle = $key + 1;
                                                        echo "<div id='item_".$numberTitle."_".$numberSubTitle."'>
                                                                <h3>".$item['sub_title']."</h3>
                                                                </div>";
                                                        echo $item['content'];
                                                    }
                                                }
                                            ?>
                                        </div>

                                    </div>
                                    <?php 
                                        endforeach;
                                        endif; 
                                    ?>
                                </div>
                            </div>
                        </div>
                    </section>


                    <!-- SOCIAL BOTTOM -->
                    <section class="section section-social-bottom">
                        <div class="wrapper">
                            <div class="inner">
                                <div class="social-bottom">
                                    <ul>
                                        <li><a href="" id="fb"><i class="fa-brands fa-square-facebook"></i> </a></li>
                                        <li><a href="" id="x">
                                                <i class="fa-brands fa-square-twitter"></i>
                                            </a></li>
                                        <li><a href="" id="b">
                                                <div class="icon-hatebookmark"> B!</div>
                                            </a></li>
                                        <li><a href="" id="pocket">
                                                <div class="icon-pocket">
                                                    <i class="fa-brands fa-get-pocket"></i>
                                                </div>
                                            </a></li>
                                        <li><a href="" id="line">
                                                <i class="fa-brands fa-line"></i>
                                            </a></li>
                                        <li><a href="" id="linkedin">
                                                <i class="fa-brands fa-linkedin"></i>
                                            </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- CONTENT POST CTA-->
                    <?php 
                        $contentPostCta = get_field('content_postcta');
                        if($contentPostCta):
                    ?>
                    <section class="section section-post-cta">
                        <div class="wrapper">
                            <div class="inner">
                                <div class="post-cta">
                                    <?php 
                                        echo $contentPostCta;
                                    ?>
                                </div>
                            </div>
                        </div>
                    </section>
                    <?php
                        endif;
                    ?>
                    <!-- MAIN PROFILE -->
                    <?php $mainProfile = get_field('main_profile'); 
                        if(@$mainProfile):
                    ?>
                    <section class="section section-main-profile">
                        <div class="wrapper">
                            <div class="inner">
                                <div class="main-profile">
                                    <div class="profile-top">
                                        <div class="profile-img">
                                            <img src="<?php echo $mainProfile['logo']; ?>" alt="">
                                        </div>
                                    </div>
                                    <div class="profile-bottom">
                                        <div class="profile-author">
                                            <h4>
                                                <?php
                                                echo get_the_author_meta('display_name', $post->post_author);
                                                ?>
                                            </h4>
                                        </div>
                                        <div class="profile-title">
                                            <h3><?php echo $mainProfile['profile_title']; ?></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <?php endif; ?>

                    <!-- NEW POST --->
                    <?php $newPost = get_field('new_post');
                        if ($newPost) :
                    ?>
                        <section class="section section-new-post">
                            <div class="wrapper">
                                <div class="inner">
                                    <div class="new-post">
                                        <div class="new-post-top">
                                            <div class="new-post-left">
                                                <div class="new-post-img zoom-in">
                                                    <?php echo get_the_post_thumbnail($newPost, 'full') ?>
                                                </div>
                                            </div>
                                            <div class="new-post-right">
                                                <div class="tags">
                                                    <span class="icon-tag">
                                                        <img src="<?php echo get_theme_file_uri(); ?>/img/icon-tag.png" alt="">
                                                    </span>
                                                    <ul>
                                                        <?php $newPostTags = get_the_tags($newPost);
                                                        if ($newPostTags) {
                                                            foreach ($newPostTags as $tag) {
                                                                echo '<li><a href="' . get_tag_link($tag) . '">' . $tag->name . '</a></li>';
                                                            }
                                                        }
                                                        ?>
                                                    </ul>
                                                </div>
                                                <div class="link-next">
                                                    <a class="btn-next" href="<?php echo get_permalink($newPost->ID) ?>">
                                                        次の記事を読む
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="16" viewBox="0 0 35 16" fill="none">
                                                            <path d="M34.7071 8.70711C35.0976 8.31658 35.0976 7.68342 34.7071 7.29289L28.3431 0.928932C27.9526 0.538408 27.3195 0.538408 26.9289 0.928932C26.5384 1.31946 26.5384 1.95262 26.9289 2.34315L32.5858 8L26.9289 13.6569C26.5384 14.0474 26.5384 14.6805 26.9289 15.0711C27.3195 15.4616 27.9526 15.4616 28.3431 15.0711L34.7071 8.70711ZM0 9H34V7H0V9Z" fill="black"></path>
                                                        </svg>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="new-post-bottom">
                                            <h4>
                                                <a href="<?php echo get_permalink($newPost->ID); ?>">
                                                <?php
                                                echo @$newPost->post_title;
                                                ?>
                                                </a>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    <?php endif; ?>

                    <!-- MAIN LIST POSTS --->
                    <section class="section section-main-list-posts">
                        <div class="wrapper">
                            <div class="inner">
                                <div class="main-list-posts">
                                    <div class="title">
                                        <h2>関連する記事</h2>
                                    </div>
                                    <div class="main-posts-content">
                                        <?php
                                        $postsRandom =  get_posts(array(
                                            'posts_per_page'    => 3,
                                            'post_type'         => 'post',
                                        ));
                                        if ($postsRandom) {
                                            echo "<ul>";
                                            foreach ($postsRandom as $post) {
                                                $getCatePost = get_the_category($post->post_ID);
                                                $nameCate = @$getCatePost[0]->name ?? '';
                                                echo '
                                                    <li class="item-post-content">
                                                    <div class="item-post-left">
                                                        <div class="item-post-img zoom-in">
                                                            <div class="icon-category">
                                                                <a href="">
                                                                <i class="fa-solid fa-folder"></i>
                                                                '.$nameCate.'   
                                                                </a>
                                                            </div>
                                                            ' . get_the_post_thumbnail($post, 'full') . '
                                                        </div>
                                                    </div>
                                                    <div class="item-post-right">
                                                        <div class="post-right-top">
                                                            <ul>
                                                                <li>
                                                                    <i class="fa-regular fa-clock"></i>
                                                                    ' . convertDateJP($post->post_date) . '
                                                                </li>
                                                                <li>
                                                                    <i class="fa-solid fa-clock-rotate-left"></i>
                                                                    ' . convertDateJP($post->post_modified_gmt) . '
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="post-right-middle">
                                                            <ul>
                                                               ';
                                                $getTags = get_the_tags($post);

                                                if ($getTags) {
                                                    foreach ($getTags as $tag) {
                                                        if ($tag->name == "Uncategorized") {
                                                            continue;
                                                        }
                                                        echo '<li> <a href="' . get_tag_link($tag) . '">'
                                                            . $tag->name .
                                                            '</a></li>';
                                                    }
                                                }
                                                echo '
                                                            </ul>
                                                        </div>
                                                        <div class="post-right-bottom">
                                                            <h2>
                                                                <a href="' . get_permalink($post->post_ID) . '">
                                                                    ' . $post->post_title . '
                                                                </a>
                                                            </h2>
                                                        </div>
                                                    </div>
                                                </li>
                                                        ';
                                            }
                                            echo "</ul>";
                                            wp_reset_postdata(); 
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- L-CTA -->
                    <?php 
                        $lCta = get_field('l_cta');
                        if($lCta):
                    ?>
                    <section class="section section-l-cta">
                        <div class="wrapper">
                            <div class="inner">
                                <div class="l-cta">
                                    <div class="sub-title">
                                        <p><?php echo $lCta['title_small'] ?></p>
                                    </div>
                                    <div class="title">
                                        <h2>
                                            <?php echo $lCta['title_medium']; ?>
                                            <br />
                                            <?php echo $lCta['title_big']; ?>
                                        </h2>
                                    </div>
                                    <div class="btn-cta">
                                        <a href=""><?php echo $lCta['text_button']; ?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <?php
                        endif;
                    ?>
                </main>
                <!-- SIDEBAR  -->
                <section class="section section-sidebar">
                    <div class="sidebar-wrapper">
                        <div class="sidebar-inner">
                            <div class="sidebar">
                                <div class="search">
                                    <input type="text" name="" id="" placeholder="キーワードを入力">
                                </div>
                                <div class="featured">
                                    <div class="title-sidebar">
                                        <h2>注目の記事</h2>
                                    </div>
                                    <div class="content">
                                        <p>
                                            対象期間のランキングデータが1件も見つかりませんでした。
                                        </p>
                                    </div>
                                </div>
                                <div class="sidebar-posts">
                                    <div class="title-sidebar">
                                        <h2>お役立ち資料</h2>
                                    </div>
                                    <div class="list-posts">
                                        <?php
                                        $posts =  get_posts(array(
                                            'posts_per_page'    => 4,
                                            'post_type'         => 'post'
                                        ));
                                        if ($posts) {
                                            echo "<ul>";
                                            foreach ($posts as $key => $post) {
                                                echo '
                                                    <li>
                                                    <div class="post-img zoom-in">
                                                        <a href="' . get_permalink($post->post_ID) . '">
                                                            <div class="item-rank" id="item-rank__' . ($key + 1) . '">
                                                                <p>' . ($key + 1) . '</p>
                                                            </div>
                                                        ' . get_the_post_thumbnail($post, 'full') . '
                                                        </a>
                                                    </div>
                                                    <div class="title-post">
                                                        <a href="'.get_permalink($post->post_ID).'">
                                                            ' . $post->post_title . '
                                                        </a>
                                                    </div>
                                                </li>
                                                    ';
                                            }
                                            echo "</ul>";
                                        }
                                        ?>
                                    </div>
                                </div>

                                <div class="categories">
                                    <div class="title-sidebar">
                                        <h2>お役立ち資料</h2>
                                    </div>
                                    <div class="list-categories">
                                        <ul>
                                            <li><a href="">
                                                    リアルタイム経営
                                                </a></li>
                                            <li><a href="">
                                                    ペーパーレス 業務効率化
                                                </a></li>
                                            <li><a href="">
                                                    電帳法・インボイス対応
                                                </a></li>
                                            <li><a href="">
                                                    その他のカテゴリ
                                                </a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="email">
                                    <div class="title-sidebar">
                                        <h2>メルマガ</h2>
                                        <input type="email" name="" id="" placeholder="メールアドレス">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </section>
            </div>
        </div>

    </section>

    <!-- CATEGORY POST -->
    <?php
    $getCategoryCurrentPost = get_the_category($postCurrent->ID);

    $postsByCategory =  get_posts(array(
        'posts_per_page'    => 8,
        'post_type'         => 'post',
        'category' => @$getCategoryCurrentPost[0]->term_id ?? 'dx',
    ));
    
    ?>
    <section class="section section-categories-post">
        <div class="wrapper">
            <div class="inner">
                <div class="categories-post">
                    <div class="title">
                        <h2>
                            <i class="fa-solid fa-folder"></i>
                            <?php echo @$getCategoryCurrentPost[0]->name ?? 'DX' ?>
                            <span>の最新記事</span>
                        </h2>
                    </div>
                    <div class="grid-container">
                        <?php
                        if ($postsByCategory) {
                            foreach ($postsByCategory as $post) {
                                echo '
                                    <div class="grid-item">
                                    <div class="categories-post__img zoom-in">
                                        <a href="' . get_permalink($post->post_ID) . '">
                                        ' . get_the_post_thumbnail($post, 'full') . '
                                        </a>
                                    </div>
                                    <div class="categories-post__date">
                                        <p>
                                            <i class="fa-regular fa-clock"></i>
                                            ' . convertDateJP($post->post_date) . '
                                        </p>
                                    </div>
                                    <div class="categories-post__title">
                                        <a href="' . get_permalink($post->post_ID) . '">' . $post->post_title . '</a>
                                    </div>
                                </div>
                                        ';
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
endif;
get_footer();
?>