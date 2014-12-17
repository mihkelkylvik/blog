<?foreach ($tags as $tag):?>
    <ul class="list-group">
        <li class="list-group-item"><a href="tags/view/<?=$tag['tag_name']?>"><span class="label label-info"><?=$tag['tag_name']?></span></a></li>
    </ul>
<?endforeach?>
<?php
$_tags = get_all("SELECT * FROM post_tags NATURAL JOIN tag");
foreach ($_tags as $tag) {
    $this->tags[$tag['post_id']][] = $tag['tag_name'];
}
?>

