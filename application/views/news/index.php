<?php
/**
 * Created by PhpStorm.
 * User: adhibarfan
 * Date: 05/11/16
 * Time: 5:38
 */

foreach ($news as $news_item) { ?>

    <h1><a href="<?php echo site_url('news/' . $news_item['slug']); ?>"><?php echo $news_item['title']; ?></a></h1>
    <p><?php echo $news_item['title']; ?></p>

    <a href="<?php echo site_url('news/update/' . $news_item['id']) ?>">Edit</a>
    <br>
    <a href="<?php echo site_url('news/delete/' . $news_item['id']) ?>">Delete</a>

<?php } ?>