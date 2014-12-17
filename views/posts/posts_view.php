<h1><?=$post['post_subject']?></h1>
<p><?=$post['post_text']?></p>
<div>
    <span class="badge badge-success">Created: <?=$post['post_created']?></span><div class="pull-right"><span class="label">alice</span> <span class="label">story</span> <span class="label">blog</span> <span class="label">personal</span></div>
    <?foreach($tags as $tag):?><a href="tags/view/<?=$tag['tag_name']?>"><span class="label label-info"><?=$tag['tag_name']?></span></a><?endforeach?>
</div>
<hr>
<?foreach( $comments as $comment ):?>
    <div class="span8">
        <h1><?=$comment['comment_subject']?></h1>
        <p><?=$comment['comment_text']?></p>
        <div>
            <span class="badge badge-success"><?=$comment['comment_date']?></span><div class="pull-right"><span class="label">alice</span> <span class="label">story</span> <span class="label">blog</span> <span class="label">personal</span></div>
        </div>
        <hr>
    </div>
<?endforeach?>
