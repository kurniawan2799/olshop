
slide();
var nomor = 1;

function slide(){
	doit = setInterval(function(){
		$(".slider ul").animate({
			marginLeft : -($(".slider").width() * nomor )
		})
		$(".control").removeClass("active");
		$("#"+nomor).addClass("active");
		if (nomor == 2) {
			nomor = 0
		} else {
			nomor++
		}
	},3000)
}

$(".control").click(function(){
	clearInterval(doit);
	$(".control").removeClass("active");
	var self = $(this);
	self.addClass("active");
	$(".slider ul").animate({
		marginLeft : -($(".slider").width() * parseInt(self.attr('id')) )
	})
	slide();
})

var cari = "true";

$("#search").click(function(){
	if (cari == 'true') {
		$(".search").slideDown();
		cari = 'false';
	} else {
		$(".search").slideUp();
		cari = 'true';
	}
})