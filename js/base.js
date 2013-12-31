var actions = {
	// send post to server
	sendPost : function( callback , tourl , senddata ){
		// set default data
		if ( typeof( senddata ) == 'undefined' ) senddata = {};

		$.ajax({
			type	: "GET",
			url		: tourl,
			data 	: senddata,
			success : function( r ){
				eval( callback );
			},
			fail	: function(){
				alert( 'Request fail!' );
			}
		});
	}
};

function findOne( ip )
{
	$('#port-container').appen( '<div>Find:'+ip+'</div>' );
}

// replace all matched string
function replaceAll(find, replace, str)
{
	return str.replace(new RegExp(find, 'g'), replace);
}
