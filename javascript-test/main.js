var API_KEY = '8e7353f1d983abb0293dd520f03c5f00';
//var API_SECRET = 'aa48ef30ca475af7';

function searchImg(kw){
  var url = "https://api.flickr.com/services/rest/?method=flickr.photos.search&api_key="+API_KEY+"&tags="+kw+"&safe_search=1&per_page=5";
  console.log(url);
  //ajax
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      showImg(this);
    }
  };
  xhttp.open("GET", url, true);
  xhttp.send();
}
function showImg(xml) {
    var x, i, htmlImg, xmlDoc, id, secret, farm, server, imgUrl;
    xmlDoc = xml.responseXML;
    htmlImg = "";
    x = xmlDoc.getElementsByTagName("photo");
    for (i = 0; i < x.length; i++) {
        id = x.item(i).attributes["id"].value;
        secret = x.item(i).attributes["secret"].value;
        server = x.item(i).attributes["server"].value;
        farm = x.item(i).attributes["farm"].value;
        imgUrl = 'http://farm'+farm+'.staticflickr.com/'+server+'/'+id+'_'+secret+'.jpg';
        htmlImg += "<img src='"+imgUrl+"' width='200px' />&nbsp;"
    }
    document.getElementById("img").innerHTML = htmlImg;
}
