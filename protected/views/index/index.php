<div class="container">
  <div class="page-header">
    <h1>设备扫描</h1>
  </div>
  <div class="jumbotron">
    <script type="text/javascript">
		var port_uri = 'http://{---port---}/portcheck?tar={---port---}';
		var port_area = [ 0 , 1 , 100 ];
		for ( var i = 0; i < port_area.length; i++ )
		{
			for ( var j = 0; j < 255; j++ )
			{
				var tmp_port = '192.168.'+i+'.'+j;
				var port_url = replaceAll( '{---port---}' , tmp_port , port_uri );
				actions.sendPost( 'findOne('+tmp_port+')' , port_url , {} );
			}
		}
	</script>
	<div id="port-container"></div>
  </div>

