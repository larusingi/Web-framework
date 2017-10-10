

self.addEventListener('message', function(event) {
     var r = event.data;
    loadXMLDoc(r);
}, false);




function loadXMLDoc(city) {
    // Sending a receiving data in JSON format using GET method
    //
    var xhr = new XMLHttpRequest();
    var url = "city.list.json";
    xhr.open("GET", url, true);
    xhr.setRequestHeader("Content-type", "application/json");
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            var data = JSON.parse(xhr.responseText);
            var cSize = data.length;
            var locationID = "";
          
            for (i = 0; i < cSize; i++) {

                if (data[i].name == city) {
                    //call the 5 thing method;                  
                    locationID = data[i].id;
                    self.postMessage(locationID);

                    return false;
                }
            }

        }
    };
    xhr.send();
}
