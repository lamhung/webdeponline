<meta charset="UTF-8">
<base href="<?=base_url()?>">
<link id="favicon" rel="shortcut icon" href="<?=frontend_url().'images/logoweb.png';?>" type="image/x-icon" />
<title><?=$row_setting['title_meta']?></title>
<meta name="description" content="<?=$row_setting['description_meta']?>">
<meta name="keywords" content="<?=$row_setting['keywords_meta']?>">
<link rel="canonical" href="<?=base_url().$this->uri->uri_string();?>" />
<meta name="robots" content="noodp,index,follow"/>
<meta name="google" content="notranslate"/>
<meta name='revisit-after' content='1 days'/>
<meta name="ICBM" content="<?=$row_setting['map']?>">
<meta name="geo.position" content="<?=$row_setting['map']?>">
<meta name="geo.placename" content="<?=$row_setting['address']?>">
<meta name="author" content="<?=$row_setting['name']?>">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
