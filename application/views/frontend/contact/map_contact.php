<script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyAL928AIsIDYz9oUb-ILO5LTe_7MQnVgDA"></script>

			<script>
				function initialize123() {
					var myLatlng = new google.maps.LatLng(<?=$row_setting['map']?>);
					var mapOptions = {
						zoom: 16,
						center: myLatlng
					};
					
					var map = new google.maps.Map(document.getElementById('map_canvas2222'), mapOptions);
					
					var contentString = "<table><tr><th style='color:#093;'><?=$row_setting['name']?></th></tr><tr><td style='color:#093;'><?=$row_setting['address']?></td></tr></table>";
					
					var infowindow = new google.maps.InfoWindow({
						content: contentString
					});
					
					var marker = new google.maps.Marker({
						position: myLatlng,
						map: map,
						title: '<?=$row_setting['name']?>',
						animation:google.maps.Animation.BOUNCE
					});
					infowindow.open(map, marker);
				}
				
				google.maps.event.addDomListener(window, 'load', initialize123);
				
				
			</script>
			<div id="map_canvas2222" style="width: 90%; height:90%;margin: auto;padding-top: 10px;"></div>
