$(document).ready(function () {
    $(".block__pic").imagezoomsl({
    	descarea: '#myzoomer',
        zoomrange: [2, 8],
        zoomstart: 4,
        magnifiereffectanimate: 'fadeIn'
    });

    $(".thumb").click(function(){
    	var vm = this;
    	$(".block__pic").fadeOut(600, function() {
    		$(this).attr("src", $(vm).attr("src")).fadeIn(1000);
    	});
    	return false;
    });
});