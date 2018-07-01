$(document).ready(function(){
	start_loop();
})

var time = [];
var ldr = [];
var pir = [];
var op = [];
var ind = 0;
function start_loop()
{
	read_the_data();
	setInterval(make_changes, 3000);
}

function read_the_data()
{

	$.ajax({
        type: "GET",
        url: "bulb.csv",
        dataType: "text",
        success: function(data) {
        	ar = data.split("\n");
        	var k = 0;
        	for (var i = 0; i < ar.length; i++) {
        		var str = ar[i].split(",");
        		time[k] = str[0];
        		pir[k] = str[1];
        		ldr[k] = str[2];
        		//alert((parseInt(ldr[k])<parseInt(1000))+" p "+parseInt(ldr[k])+" ji");
        		//alert((parseFloat(pir[k])>=parseFloat(3.0))+" p "+parseFloat(pir[k]));
        		if(ldr[k]<1000 & pir[k]>=2.0)
        			op[k] = 1;
        		else
        			op[k] = 0;
        		//alert(time[k]+" "+pir[k]+" "+ldr[k]+" "+k+" "+op[k]);
        		k++;
			}
        }
     });
}


function make_changes()
{

			$("#time_value").fadeOut(function() {
		  $(this).text(time[ind]).fadeIn();
		});

			$("#ldr_value").fadeOut(function() {
		  $(this).text(ldr[ind]).fadeIn();
		});
			$("#pir_value").fadeOut(function() {
		  $(this).text(pir[ind]).fadeIn();
		});

		ind++;

		var image = $("#img_bulb");
		if (op[ind] == 0) {
	        image.attr("src","bulboff.png");
	    } else {
	        image.attr("src","bulbon.png");
	    }

}