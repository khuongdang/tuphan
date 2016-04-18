// JavaScript Document
//Author - Khuong Dang
console.log('hehe');
var tpSite = {
	init: function () {
        tpSite.loadDefault();
    },
	loadDefault: function() {
		//hide selectnav2
			$("#selectnav2").hide();
			$(".services-container").hide();
	}
}

jQuery('document').ready(tpSite.init);