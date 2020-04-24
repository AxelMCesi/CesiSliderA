/*alert('test');*/

function imageGalerie()
{
	var active=$('#galerie .active');

	var next=(active.next().length>0)?active.next():$('#galerie img:first');

		active.fadeOut(function(){

		active.removeClass('active');
		next.fadeIn().addClass('active');

		});

	
}

setInterval('imageGalerie()',2500);

function Message() {
       var msg="Message sur la ligne 1.nMessage sur la ligne 2.n...";
       console.log(msg)
       alert(msg);
   }