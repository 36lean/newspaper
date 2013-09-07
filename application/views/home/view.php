<h3><?php echo $content['title']?></h3>
<ul class="nav nav-pills">
	<li class="disabled"><a href="#">日期: <?php echo date('Y-m-d h:i' , $content['createdtime']);?></a></li>
    <li class="disabled"><a href="#">作者: <?php echo $content['author'];?></a></li>
</ul>

<blockquote><?php echo $content['flash'];?></blockquote>

<table class="table table-bordered">
	<tr>
		<td><?php echo $content['content'];?></td>
	</tr>
</table>
