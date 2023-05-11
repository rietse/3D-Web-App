// JavaScript Document
var counter = 0;
$(document).ready(function() {

	selectPage();
});

	function selectPage() {

		$('#home').show();
		$('#about').hide();
		$('#models').hide();
		$('#interaction').hide();
		$('#cokeDescription').hide();
		$('#spriteDescription').hide();
		$('#pepperDescription').hide();
		$('#fantaDescription').hide();


		$('#navHome').click(function(){
			$('#home').show();
			$('#about').hide();
			$('#models').hide();
			$('#interaction').hide();
			$('#cokeDescription').hide();
			$('#spriteDescription').hide();
			$('#pepperDescription').hide();
			$('#fantaDescription').hide();
		});

		$('#navAbout').click(function(){
			$('#home').hide();
			$('#about').show();
			$('#models').hide();
			$('#interaction').hide();
			$('#cokeDescription').hide();
			$('#spriteDescription').hide();
			$('#pepperDescription').hide();
			$('#fantaDescription').hide();
		});

		$('#navModels').click(function(){
        		$('#home').hide();
        		$('#about').hide();
        		$('#models').show();
        		$('#interaction').show();
        		$('#cokeDescription').show();
        		$('#spriteDescription').hide();
        		$('#pepperDescription').hide();
        		$('#fantaDescription').hide();
        		$("#x3dModelTitle_coke").show();
        		$("#x3dModelTitle_sprite").hide();
        		$("#x3dModelTitle_pepper").hide();
        		$("#x3dModelTitle_fanta").hide();
        		$("#x3dCreationMethod_coke").show();
        		$("#x3dCreationMethod_sprite").hide();
        		$("#x3dCreationMethod_pepper").hide();
        		$("#x3dCreationMethod_fanta").hide();
        	});
        }


        function cokeDescription() {
        	$("button").click(function(){

        		$("#cokeDescription").show();
                $("#spriteDescription").hide();
        		$("#pepperDescription").hide();
        		$('#fantaDescription').hide();

        		$("#x3dModelTitle_coke").show();
        		$("#x3dModelTitle_sprite").hide();
        		$("#x3dModelTitle_pepper").hide();
        		$("#x3dModelTitle_fanta").hide();

        		$("#x3dCreationMethod_coke").show();
        		$("#x3dCreationMethod_sprite").hide();
        		$("#x3dCreationMethod_pepper").hide();
        		$("#x3dCreationMethod_fanta").hide();

            });
        }

        function spriteDescription() {
            $("button").click(function(){

                $("#cokeDescription").hide();
                $("#spriteDescription").show();
        		$("#pepperDescription").hide();
        		$('#fantaDescription').hide();

        		$("#x3dModelTitle_coke").hide();
        		$("#x3dModelTitle_sprite").show();
        		$("#x3dModelTitle_pepper").hide();
        		$("#x3dModelTitle_fanta").hide();

        		$("#x3dCreationMethod_coke").hide();
        		$("#x3dCreationMethod_sprite").show();
        		$("#x3dCreationMethod_pepper").hide();
        		$("#x3dCreationMethod_fanta").hide();
            });
        }

        function pepperDescription() {
            $("button").click(function(){

                $("#cokeDescription").hide();
                $("#spriteDescription").hide();
        		$("#pepperDescription").show();
        		$('#fantaDescription').hide();

        		$("#x3dModelTitle_coke").hide();
        		$("#x3dModelTitle_sprite").hide();
        		$("#x3dModelTitle_pepper").show();
        		$("#x3dModelTitle_fanta").hide();

        		$("#x3dCreationMethod_coke").hide();
        		$("#x3dCreationMethod_sprite").hide();
        		$("#x3dCreationMethod_pepper").show();
        		$("#x3dCreationMethod_fanta").hide();
            });
        }

        function fantaDescription() {
            $("button").click(function(){

                $("#cokeDescription").hide();
                $("#spriteDescription").hide();
                $("#pepperDescription").hide();
                $('#fantaDescription').show();

                $("#x3dModelTitle_coke").hide();
                $("#x3dModelTitle_sprite").hide();
                $("#x3dModelTitle_pepper").hide();
                $("#x3dModelTitle_fanta").show();

                $("#x3dCreationMethod_coke").hide();
                $("#x3dCreationMethod_sprite").hide();
                $("#x3dCreationMethod_pepper").hide();
                $("#x3dCreationMethod_fanta").show();
            });
        }
/*
function swap(selected) {
	// First do not display all div id contents
	document.getElementById('home').style.display = 'none';
	document.getElementById('coke').style.display = 'none';
	document.getElementById('sprite').style.display = 'none';
	document.getElementById('pepper').style.display = 'none';

	// Then display the selected div id contents
	document.getElementById(selected).style.display = 'block';
}
*/

function changeLook() {
	counter += 1;
	switch (counter) {
        case 1:
            document.getElementById('bodyColor').style.backgroundColor = 'lightblue';
			document.getElementById('headerColor').style.backgroundColor = '#FF0000';
			document.getElementById('footerColor').style.backgroundColor = '#FF9900';
            break;
        case 2:
			document.getElementById('bodyColor').style.backgroundColor = '#FF6600';
			document.getElementById('headerColor').style.backgroundColor = '#FF9999';
			document.getElementById('footerColor').style.backgroundColor = '#996699';
            break;
        case 3:
			document.getElementById('bodyColor').style.backgroundColor = 'coral';
			document.getElementById('headerColor').style.backgroundColor = 'darkcyan';
			document.getElementById('footerColor').style.backgroundColor = 'darksalmom';
            break;
        case 4:
            counter = 0;
			document.getElementById('bodyColor').style.backgroundColor = 'lightgrey';
			document.getElementById('headerColor').style.backgroundColor = 'chocolate';
			document.getElementById('footerColor').style.backgroundColor = 'dimgrey';
            break;
    }
}

function changeBack() {
	document.getElementById('bodyColor').style.backgroundColor = 'rgb(245, 245, 245)';
	document.getElementById('headerColor').style.backgroundColor = '#760003';
	document.getElementById('footerColor').style.backgroundColor = '#760003';
}