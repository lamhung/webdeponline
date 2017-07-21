<div class="blog-post-area">
  <div class="title-product"><h2><?=$this->title_detail;?></h2></div>
  <div class="single-blog-post">
    <h3 class='title_single_post'><?=$row['name']?></h3>
    <div class="post-meta">
      <ul>
        <li><i class="fa fa-clock-o"></i>&nbsp;<?=date('h:i A', $row['created'])?></li>
        <li><i class="fa fa-calendar"></i>&nbsp;<?=date('d:m:Y', $row['created']) ?></li>
      </ul>
      <span>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star-half-o"></i>
      </span>
    </div>
    
    <div><?=$row['content']?></div>
  </div>
</div>