// JavaScript Document
function insertImage(url)
{
    //console.log(CKEDITOR);
    CKEDITOR.instances['textarea_ckeditor'].insertHtml("<img src='"+url+"' />");
}
//function insertThumb(url)
//{
//	CKEDITOR.instances['textarea_ckeditor'].insertHtml("<img src='"+url+"' />");
//}
function deleteImage(url)
{
	String.prototype.replaceAll = function(target, replacement) {
	  return this.split(target).join(replacement);
	};//Dịnh nghĩa repaceAll

	var content = CKEDITOR.instances['textarea_ckeditor'].getData();
	//console.log(content);
	
	var new_content = content.replaceAll('<img src="'+url+'" />',"");
	//content.replace('<img src="'+url+'" />',"");
	
//	new_content = new_content.replaceAll('<img src="'+thumb+'" />',"");

	//console.log(new_content);
	CKEDITOR.instances['textarea_ckeditor'].setData(new_content);
	return true;
	//replace image = ""
	//CKEDITOR contn = conmtent
}
//function product_image_remove(id)
//{
//	$.ajax({
//		type :'POST',
//		url : 'http://webshop.local/admin/product_image/product_image_remove',
//		data : {id : id},
//		success : function(respone){
//			var data = JSON.parse(respone);
//			console.log(data);
//			$('#product_image_preview').html(data.data);
//		}
//	});
//}
//$(document).ready(function(){
//	$('#product_image').on('change',function(){
//		
//	$('#product_image_upload_fm').ajaxForm({
//			target:'#product_image_preview',
//			beforeSubmit:function(e){
//				$('.loading').show();
//			},
//			success:function(e){
//				$('.loading').hide();
//				//console.log(e);
//			},
//			error:function(e){
//			}
//		}).submit();
//	});
	/*$('#jsonForm').ajaxForm({
    dataType: 'json',
    beforeSubmit: showRequest,
    success: processJson
	});*/
//});