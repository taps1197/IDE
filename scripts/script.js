$(document).ready(function(){
    $(".searcharea").click(function(){
        $(".navbar").css("background-color",'black');
    });
    $(".searchbutton").click(function(){
        alert($(".video").scrollTop() + " px");
    });
    $(".submit").click(function(){
        $(".textarea1").css({
            "width":"40%",
            "transition":"0.4s"


        });
	
        setTimeout(function(){
	var r=$("input:radio[name=lang]:checked").val();
	var q = $("#inpu").val();
	$.ajax({
 	type:"GET",
 	url:"scripts/copy.php",
 	data:{query:q,radio:r},
 	cache:false,
 	success:function(data){
	$("#outp").empty();
	$("#outp").val(data);
	     }
	  });
	},450);
	



        setTimeout(function(){
            $(".textarea2").css({
                "display":"inline-block",
                "transition":"0.4s"
            });
        }, 400);

    });
    $(".reset").click(function(){
        $(".textarea1").css({
            "width":"90%",
            "transition":"0.5s"

        });
	document.getElementById('inpu').value="";
	["r1", "r2", "r3", "r4"].forEach(function(id) {
        document.getElementById(id).checked = false;
      });
        $(".textarea2").css({
            "display":"none",
            "transition":"0.4s"
        });

    });
    $(".tryide").click(function(){
        $(".IDE").css({
            "display":"block"
        });
        $(window).scrollTop($('#IDE').offset().top);
    });

    $(".searcharea").click(function(){

        $(".searcharea").css({
            "width":"100%",
            "border-radius":"20px"
        })
        // setTimeout(function(){
        //
        //     $(".searchbutton").css({
        //         "display":"inline-block"
        //     })
        // },500)


    })
    // Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}


});
