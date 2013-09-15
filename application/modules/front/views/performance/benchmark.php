<blockquote>

	<p>内存消耗: <?php echo $this->benchmark->memory_usage();?></p>
		
	<p>运行时间: <?php echo $this->benchmark->elapsed_time();?></p>

</blockquote>

<div class="navbar">
    <div class="navbar-inner">
    	<a class="brand" href="#">链接</a>
    	<ul class="nav">
    		<li class="active"><a href="<?php site_url('home/index');?>">首页</a></li>
    		<li><a href="<?php echo site_url('home/topic/1');?>">专题</a></li>
    		<li><a href="<?php echo site_url('home/category/1');?>">分类</a></li>
    		<li><a href="<?php echo site_url('home/view/1');?>">内容</a></li>
    	</ul>
    </div>
</div>