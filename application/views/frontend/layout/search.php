<style>
	.nut_tim {
	    height: 24px;
	    width: 20px;
	    border: none;
	    position: absolute;
	    top: 5px;
	    right: 9px;
	    background: rgba(255,255,255,0.15);
	}
</style>
<div class="search_box pull-right">
	<form action='' method="get" class="frm_search">
		<input placeholder="Search" type="text" id="keywords" name="keywords">
		<button type="submit" value="" class="nut_tim"></button>
	</form>
</div>
<script type="text/javascript">
  $(document).ready(function() {
       $('.frm_search').submit(function(){
          var search = $('#keywords').val();
          if(!search){
            alert('Bạn chưa nhập từ khóa . ');
          } else {
            window.location.href="<?=base_url();?>tim-kiem?keywords="+search;
          }
          return false;
      })
  });
</script>
