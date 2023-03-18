//Javascript Gallery Generator

$(document).ready(function() {
    //create the XMLHttpRequest Object for communicating with the web server
    var xmlHttp = new XMLHttpRequest ();
    //stores newly generated gallery HTML code
    var htmlCode = "";

    var numberOfColumns = 2;
    //temp stores server response while code is generated
    var response;
    //set up the path to the PHP function that reads the image directory to find the thumbnail file names
    var send = "scripts/php/hook.php";
    //open the connection to the web server
    xmlHttp.open("GET",send,true);
    //tell server that client has no outgoing message i.e. we are sending nothing to the server
    xmlHttp.send(null);
    //check we get valid server response
    xmlHttp.onreadystatechange = function() {
        if(xmlHttp.readyState == 4) {
            //response handler
            //alert(xmlHttp.responseText);
            //tokenise response
            response = xmlHttp.responseText.split("~");
            //start to write HTML code into string
            //htmlCode += '<tr>';
            //loop round the response array of tokens, which are the image names ...
            for (var i=0;i<response.length;i++) {
            /**
                //and continue to build the HTML code for the gallery
                htmlCode += '<td id="gallery_cell">';
                htmlCode += '<a href="' + 'images/' + response[i] +'">';
                htmlCode += '<img src="images/' + response[i] + '"id="image_thumbnail"/>';
                htmlCode += '</a>';
                htmlCode += '</td>';
                //control column layout for gallery thumbnail
                if (((i+1)%numberOfColumns) == 0) {
                   htmlCode += '</tr><tr>';
                }
            **/
                htmlCode += '<a href="assets/images/gallery_images' + response[i] +'">';
                htmlCode += '<img class="card-img-top img-thumbnail" src="assets/images/gallery_images' + response[i] + '"/>';
                htmlCode += '</a>';

                if (((i+1)%numberOfColumns) == 0) {
                    htmlCode += '</tr><tr>';
                }
            }
            //htmlCode += '</tr>';
            //write the HTML code into the gallery
            //document.getElementById('gallery').innerHTML = htmlCode;
            document.getElementById('gallery_coke').innerHTML = htmlCode;
        }
    }
});