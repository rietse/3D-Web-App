function cokeScene(){
    nSwitch = 0;
    document.getElementById('SceneSwitch').setAttribute('whichChoice', nSwitch);
}

function spriteScene(){
    nSwitch = 1;
    document.getElementById('SceneSwitch').setAttribute('whichChoice', nSwitch);
}

function pepperScene(){
    nSwitch = 2;
    document.getElementById('SceneSwitch').setAttribute('whichChoice', nSwitch);
}

var Xspinning = false;
var Yspinning = false;
var Zspinning = false;


function spinX()
{
	Xspinning = !Xspinning;
	var timeSensors = document.getElementsByTagName("TimeSensor");
	for(var i = 0; i < timeSensors.length; i++) {
    	if (timeSensors[i].getAttribute('id') == "model__XRotationTimer") {
    		timeSensors[i].setAttribute('enabled', Xspinning);
    	}
    }
}

function spinY()
{
	Yspinning = !Yspinning;
	var timeSensors = document.getElementsByTagName("TimeSensor");
	for(var i = 0; i < timeSensors.length; i++) {
    	if (timeSensors[i].getAttribute('id') == "model__YRotationTimer") {
    		timeSensors[i].setAttribute('enabled', Yspinning);
    	}
    }
}

function spinZ()
{
	Zspinning = !Zspinning;
	var timeSensors = document.getElementsByTagName("TimeSensor");
	for(var i = 0; i < timeSensors.length; i++) {
    	if (timeSensors[i].getAttribute('id') == "model__ZRotationTimer") {
    		timeSensors[i].setAttribute('enabled', Zspinning);
    	}
    }
}

function stopRotation()
{
	if (Xspinning) {
	    Xspinning = false;
    	var timeSensors = document.getElementsByTagName("TimeSensor");
    	for(var i = 0; i < timeSensors.length; i++) {
        	if (timeSensors[i].getAttribute('id') == "model__XRotationTimer") {
        		timeSensors[i].setAttribute('enabled', Xspinning);
        	}
        }
    }

    if (Yspinning) {
    	    Yspinning = false;
        	var timeSensors = document.getElementsByTagName("TimeSensor");
        	for(var i = 0; i < timeSensors.length; i++) {
            	if (timeSensors[i].getAttribute('id') == "model__YRotationTimer") {
            		timeSensors[i].setAttribute('enabled', Yspinning);
            	}
            }
        }

    if (Zspinning) {
        Zspinning = false;
           var timeSensors = document.getElementsByTagName("TimeSensor");
           for(var i = 0; i < timeSensors.length; i++) {
                if (timeSensors[i].getAttribute('id') == "model__ZRotationTimer") {
                	timeSensors[i].setAttribute('enabled', Zspinning);
                }
           }
        }
}

function animateModel()
{
    if(document.getElementById('model__RotationTimer').getAttribute('enabled')!= 'true')
        document.getElementById('model__RotationTimer').setAttribute('enabled', 'true');
    else
        document.getElementById('model__RotationTimer').setAttribute('enabled', 'false');
}

var texSwitch = false;

    function texChange() {
        texSwitch = !texSwitch;
        var imageTextures = document.getElementsByTagName("ImageTexture");
        for (var i=0; i<imageTextures.length; i++) {
            if (imageTextures[i].getAttribute('id') == "model__texCan") {
                if (texSwitch) {
                    imageTextures[i].setAttribute('url', 'maps/fanta_can.png')
                }
                else {
                    imageTextures[i].setAttribute('url', 'maps/can_texture.jpg')
                }
            }
        }
        for (var i=0; i<imageTextures.length; i++) {
            if (imageTextures[i].getAttribute('id') == "model__texBottle") {
                if (texSwitch) {
                     imageTextures[i].setAttribute('url', 'maps/fanta_bottle.jpg')
                }
                else {
                     imageTextures[i].setAttribute('url', 'maps/spritelabel.png')
                }
            }
        }
        for (var i=0; i<imageTextures.length; i++) {
            if (imageTextures[i].getAttribute('id') == "model__texCup") {
                if (texSwitch) {
                    imageTextures[i].setAttribute('url', 'maps/fanta_cup.png')
                }
                else {
                    imageTextures[i].setAttribute('url', 'maps/pepper.png')
                }
            }
        }
    }

var renderPoint = 0;

function wireframe()
{
    var e = document.getElementById('wire');
    switch (renderPoint) {
        case 0:
            e.runtime.togglePoints(true);
            e.runtime.togglePoints(true);
            renderPoint = 2;
            break;
        case 1:
            e.runtime.togglePoints(true);
            renderPoint = 2;
            break;
        case 2:
            break;
    }
}

function vertex()
{
    var e = document.getElementById('wire');
    switch (renderPoint) {
        case 0:
            e.runtime.togglePoints(true);
            renderPoint = 1;
            break;
        case 1:
            break;
        case 2:
        e.runtime.togglePoints(true);
        e.runtime.togglePoints(true);
        renderPoint = 1;
            break;
    }
}

function poly()
{
    var e = document.getElementById('wire');
    switch (renderPoint) {
        case 0:
            break;
        case 1:
        e.runtime.togglePoints(true);
        e.runtime.togglePoints(true);
        renderPoint = 0;
            break;
        case 2:
        e.runtime.togglePoints(true);
        renderPoint = 0;
            break;
    }
}

var lightOn = true;

function headLight()
{
	lightOn = !lightOn;
	document.getElementById('model__headlight').setAttribute('headlight', lightOn.toString());
	console.log(lightOn);
}

function omniLight()
{
	lightOn = !lightOn;
	document.getElementById('model__omniLight').setAttribute('headlight', lightOn.toString());
	console.log(lightOn);
}

function targetLight()
{
	lightOn = !lightOn;
	document.getElementById('model__targetLight').setAttribute('headlight', lightOn.toString());
	console.log(lightOn);
}

function cameraFront()
{
	document.getElementById('model__CameraFront').setAttribute('bind', 'true');
}

function cameraBack()
{
	document.getElementById('model__CameraBack').setAttribute('bind', 'true');
}

function cameraLeft()
{
	document.getElementById('model__CameraLeft').setAttribute('bind', 'true');
}

function cameraRight()
{
	document.getElementById('model__CameraRight').setAttribute('bind', 'true');
}

function cameraTop()
{
	document.getElementById('model__CameraTop').setAttribute('bind', 'true');
}

function cameraBottom()
{
	document.getElementById('model__CameraBottom').setAttribute('bind', 'true');
}