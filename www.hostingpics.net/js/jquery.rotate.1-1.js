jQuery.fn.rotate = function(angle,whence) {
	var p = this.get(0);

	// we store the angle inside the image tag for persistence
	if (!whence) {
		p.angle = ((p.angle==undefined?0:p.angle) + angle) % 360;
	} else {
		p.angle = angle;
	}

	if (p.angle >= 0) {
		var rotation = Math.PI * p.angle / 180;
	} else {
		var rotation = Math.PI * (360+p.angle) / 180;
	}
	var costheta = Math.cos(rotation);
	var sintheta = Math.sin(rotation);

	if (document.all && !window.opera) {
		var canvas = document.createElement('img');

		canvas.src = p.src;
		canvas.height = p.height;
		canvas.width = p.width;

		canvas.style.filter = "progid:DXImageTransform.Microsoft.Matrix(M11="+costheta+",M12="+(-sintheta)+",M21="+sintheta+",M22="+costheta+",SizingMethod='auto expand')";
	} else {
		var canvas = document.createElement('canvas');
		if (!p.oImage) {
			canvas.oImage = new Image();
			canvas.oImage.src = p.src;
		} else {
			canvas.oImage = p.oImage;
		}

		canvas.style.width = canvas.width = Math.abs(costheta*canvas.oImage.width) + Math.abs(sintheta*canvas.oImage.height);
		canvas.style.height = canvas.height = Math.abs(costheta*canvas.oImage.height) + Math.abs(sintheta*canvas.oImage.width);

		var context = canvas.getContext('2d');
		context.save();
		if (rotation <= Math.PI/2) {
			context.translate(sintheta*canvas.oImage.height,0);
		} else if (rotation <= Math.PI) {
			context.translate(canvas.width,-costheta*canvas.oImage.height);
		} else if (rotation <= 1.5*Math.PI) {
			context.translate(-costheta*canvas.oImage.width,canvas.height);
		} else {
			context.translate(0,-sintheta*canvas.oImage.width);
		}
		context.rotate(rotation);
		context.drawImage(canvas.oImage, 0, 0, canvas.oImage.width, canvas.oImage.height);
		context.restore();
	}
	canvas.id = p.id;
	canvas.angle = p.angle;
	p.parentNode.replaceChild(canvas, p);
}

jQuery.fn.rotateRight = function(angle) {
	this.rotate(angle==undefined?90:angle);
}

jQuery.fn.rotateLeft = function(angle) {
	this.rotate(angle==undefined?-90:-angle);
}

    function rotate(direct){
    if(direct == 'right'){
      $('#img_viewer').rotateRight(90);
    } else if(direct == 'left'){
      $('#img_viewer').rotateLeft(90);
    }
    width_new = $('#img_viewer').width();
    height_new = $('#img_viewer').height();

    if( (navigator.userAgent.indexOf('MSIE') > 0) ) {
      paddings = 0;
    } else {
      paddings = 10;
      if( width_new > 1280 || height_new > 1280 ) {
        if ((width_new/1280) > (height_new/1280)) {
          height_new = parseInt((height_new*1280) / width_new);
          width_new="1280";
        } else {
          width_new = parseInt((width_new*1280) / height_new);
          height_new="1280";
        }
        $('#img_viewer').attr( 'style', 'width:'+ width_new +'px;height:'+ height_new +'px;');
      }
    }
    $('#img_viewer_frame').attr( 'style', 'width:'+ width_new +'px;height:'+ height_new +'px;padding:'+paddings+'px; margin:0 auto; border:#BBDAE6 1px solid;background:white;' );
}
