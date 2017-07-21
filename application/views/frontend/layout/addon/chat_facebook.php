<script type="text/javascript">
   $(document).ready(function(e) {
      $('.label_serv_onl').click(function(){
         $('.cont_serv_onl').slideToggle();
         if($(this).hasClass("active")){
            $(this).removeClass("active");
        }
        else {
            $(this).addClass("active");
        }
    })
  });
</script>

<style type="text/css">
    #ser_onl {
   position: fixed;
    bottom: 0px;
    width: 252px;
    right: 10px;
    z-index: 100000;
    background: rgb(201, 34, 40);
    padding: 10px 0px 0px 1px;
    border: 1px solid #EEE;
    border-bottom: none;
    -webkit-border-radius: 10px 10px 0 0;
    -moz-border-radius: 10px 10px 0 0;
    border-radius: 10px 10px 0 0;
    }
    #ser_onl b{
        margin-top: 132px;
        float: right;
        font-size: 19px;
        font-weight: bold;
        width: 158px;
        height: 30px;
        background: #006795;
        color: #FFF;
        padding-left: 16px;
        border-radius: 8px 8px 0px 0px;
        margin-right: 145px;
        line-height: 30px;
    }
    .label_serv_onl {
          text-align: center;
    cursor: pointer;
    font-size: 15px;
    padding-bottom: 6px;
    color: #fff;
    }

    .cont_serv_onl {
    /*    background: url(./images/bg_httt.png) no-repeat right bottom;*/
        display: none;
        cursor: pointer;
        color: #fff;
        font-weight: bold;

    }
    .cont_serv_onl .title {
        font-size: 16px;
        color: #fff;
        margin-bottom: 10px;
    }
    .cont_serv_onl .avtive{
        display: block;
    }
    .cont_serv_onl p{
        line-height: 24px;
        font-size: 14px;
    }
</style>




<div id="fb-root"></div>
<script type="text/javascript">// <![CDATA[
(function(d, s, id) {
	var js, fjs = d.getElementsByTagName(s)[0];
	if (d.getElementById(id)) return;
	js = d.createElement(s); js.id = id;
	js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&appId=1712930245608171&version=v2.0";
	fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
// ]]></script>

<div id="ser_onl">
    	<div class="label_serv_onl ">
    		Chat với <?=$row_setting['name']?>
    	</div>

	<div class="cont_serv_onl">
		<div class="fb-page" data-tabs="messages" data-href="<?php echo $row_setting["facebook"]?>" data-width="250" data-height="300" data-small-header="true" data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="false" data-show-posts="false"></div>
	</div>
</div>  