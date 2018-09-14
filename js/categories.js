var xmlHttp = createxmlHttpRequestObject();
function createxmlHttpRequestObject(){
    var xmlHttp;
    if(window.xmlRequest){
        xmlHttp = xmlHttpRequest();
    } else if(window.ActiveXObject){
        xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    return xmlhttp;  
}
//fetch professional categories
function loadDoc() {
  var xmlHttp = new XMLHttpRequest();
  xmlHttp.onreadystatechange = function() {
if (xmlHttp.readyState == 4 && xmlHttp.status == 200) {
  document.getElementById("div-categories").innerHTML = xmlHttp.responseText;
  }
 };
 xmlHttp.open("POST", "categories.php", true);
 xmlHttp.send();
}
