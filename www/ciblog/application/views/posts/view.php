<h2><?php echo $post['title'];?></h2>

<small class="post-body">Posted on:<?php echo $post['created_at'];?></small>

<div class="post-date">
<?php echo $post['body'];?>
</div>

<hr>
<?php echo form_open('posts/delete/'.$post['id']);?>
<a class="btn btn-dark pull-left"  href="<?php echo base_url();?>/posts/edit/<?php echo $post['slug'];?>">Edit</a> 
<input type="submit" value="Delete" class="btn btn-danger">

</form>
