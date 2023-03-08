//Javascript Gallery Generator
//create the XMLHittpRequest Object for communicating with the web server
var xmlHttp = new XMLHttpRequest ();
//stores number of horizontalColumns gallery has, if too large it won't fit in browser window
var numberOfColumns = 4;
//stores newly generated gallery HTML code
var htmlCode = "";
//temp stores server response while code is generated
var response;