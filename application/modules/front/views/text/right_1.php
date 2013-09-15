    <ul class="nav nav-pills">
    <li class="active">
    <a href="#"><h3> 讨 论 </h3></a>
    </li>
    </ul>

    <textarea class="span12" style="min-height:100px;max-height:100px;overflow-x:hidden;" placeholder="发表你的观点">This textarea is going to grow when you fill it with text. Just type a few more words in it and you will see.
    </textarea>
    <p><button class="btn btn-primary">发表</button></p>
	<script type="text/javascript">
		$(function(){ $('textarea').elastic(); $('textarea').trigger('update');	});
	</script>

	<div class="page-header">
		<strong>评论列表 ( 122 )</strong>
	</div>


    <?php for( $i=0 ; ;$i++){?>
    <div class="span12">
        <div class="span3">
            <a href="#"><img src="http://tp3.sinaimg.cn/2719326551/50/1" /> zyzyandzyzy</a>
        </div>

        <div class="span9">
            <blockquote>已经无法阻止人类步入歧途了！我们到底有什么？我们到底怕什么？我们的生活用的了那么多的技术吗？！<small>2012-3-2 10:20:10</small></blockquote>
        </div>
    </div>

    <?php if( $i>20) break;?>

    <?php }?>