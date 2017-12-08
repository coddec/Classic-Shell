/*
* Jquery support for cheveroto
* By: Gamerlv ( aka piratelv)
* contact piratelv@gmx.com
*/
// instead of this bit of code $.delay can be used, this will however break compatablity with jquery 1.3
$.fn.wait = function(time, type) {time = time || 1000; type = type || "fx"; return this.queue(type, function() {var self = this; setTimeout(function() { $(self).dequeue(); }, time); }); };
// ERROR
function error() {
	//Ask where this is for? id's not found
	/*
	//error close button
	$('#error span').append('<span id="error-close" style="font-size:8px;position:relative;top:-11px;right:-15px;background:red;text-decoration:none;"><a href="#">X</a></span>');
		$('#error-close a').click(function(){
			$('#error').fadeOut('500');
			return false;
		});	*/
		
	//Redo if someone tried to resize a image above or below the max/min size
	$('#resize').focus(function(){
		$(this).parent().parent().stop(true,true).effect("highlight", {}, 1500);
	});
	$('#redo').click(function(){
		$(this).toggle();
		$('#enviando').toggle();
	});

};

// Prefrance panel
function pref() {
//make it not search the dom each time.
var $opened =  $('a#popen'), //The blue buton
	$closed = $('a#pclosed'), //The gray button
	$prefPanel = $('#pref-panel');
//Open the pref panel
	$closed.click(function(){
		$prefPanel.slideDown('slow');
		$opened.toggle();
		$(this).toggle();
	});
//Close the pref panel
	$opened.click(function(){
		$prefPanel.slideUp('slow');
		$closed.toggle();
		$(this).toggle();
	});	
//Accutaly change the cookie for preferances and hightlight
	$('#cortarurl').change(function(){
		var checked = $(this).is(':checked') ? '1':'0';			
		var url = 'js/pref.php?url='+checked;
		$.ajax({ url: url });
		});
//Close button
	$('#savepref').click(function(){
		$prefPanel.slideUp('slow');
		$closed.toggle();
		$opened.toggle();
	});		
};

// Upload block and related
function upload() {
	var $localUP = $('#localUP'),
		$remoteT = $('a.remota'),
		$localT = $('a.local'),
		$uploadDiv = $('#contenedorupload'),
		$uploadBtn = $('#subir'),
		$resize = $('#resize'),
		$ropen = $('a#ropen'),
		$rclose =$('a#rclosed'),
		$progBar = $('#enviando');
	//Switch to the remote tab
	$remoteT.click(function(){
		$('#subir_local').fadeOut(.5);
		$('#subir_remota').wait(.5).fadeIn("slow");
		$('#linklocal').toggle();
		$('#linkremota').toggle();
		$('#remotaUP').focus();
	});
	//switch to the local tab	
	$localT.click(function(){
		$('#subir_remota').fadeOut(.5);
		$('#subir_local').wait(.5).fadeIn("slow");
		$('#linklocal').toggle();
		$('#linkremota').toggle();
		$('#localUP').focus();
	});
	//clicked effect on upload bar
	$uploadDiv.click(function(){
		$uploadDiv.stop(true,true).effect("highlight", {}, 1500);
	});
	//open resize box
	$rclose.click(function(){
		$(this).toggle();
		$ropen.toggle();
		$('#redimensionar-borde').slideDown("slow");
	});
	//close it
	$ropen.click(function(){
		$(this).toggle();
		 $rclose.toggle();
		$('#redimensionar-borde').slideUp("slow");
	});
	//highlight effect on upload box
	$resize.click(function(){
		$(this).parent().stop(true,true).effect("highlight", {}, 1500);
	});
	//and fade out the upload button if pressed
	$uploadBtn.click(function(){
		$(this).toggle();
		$progBar.fadeIn('fast');
	});
	
};
	
function process() {
//Just add a scroll down to #share when share button clicked
$('#sharing').click(function(){
	$.scrollTo('#share');
	});
};

// 
function viewer() {
	var $sopen =  $('a#sharing'),
		$sclose = $('a#sharing-close');
	//open up the share box and scroll to it	
	$sopen.click(function(){
		$('#share').slideDown('3000',function(){
			$.scrollTo('#share');
			}
		);
		$(this).toggle();
		$sclose.toggle();
	});
	$sclose.click(function(){
		$('#share').slideUp('3000');	
		$(this).toggle();
		$sopen.toggle();
	});
};

// Social labels
function social() {
//all descriptions,neatly in vars :D
var $d1 = $('#d-delicious'),
	$facebook = $('#d-facebook'),
	$google = $('#d-google'),
	$tumbler = $('#d-tumblr'),
	$twitter = $('#d-twitter'),
	$vis = $('#d-visualizeus');

	$('#delicious').mouseenter(function(){
		$d1.stop(true,true).fadeIn('fast');
		}
	).mouseleave(function(){
		$d1.fadeOut('fast');
		}
	);
	$('#facebook').mouseenter(function(){
		$facebook.stop(true,true).fadeIn('fast');
		}
	).mouseleave(function(){
		$facebook.fadeOut(0);
		}
	);
	$('#google').mouseenter(function(){
		$google.stop(true,true).fadeIn('fast');
		}
	).mouseleave(function(){
		$google.fadeOut(0);
		}
	);
	$('#tumblr').mouseenter(function(){
		$tumbler.stop(true,true).fadeIn('fast');
		}
	).mouseleave(function(){
		$tumbler.fadeOut(0);
		}
	);
	$('#twitter').mouseenter(function(){
		$twitter.stop(true,true).fadeIn('fast');
		}
	).mouseleave(function(){
		$twitter.fadeOut(0);
		}
	);
	$('#visualizeus').mouseenter(function(){
		$vis.stop(true,true).fadeIn('fast');
		}
	).mouseleave(function(){
		$vis.fadeOut(0);
		}
	);	
	
};
