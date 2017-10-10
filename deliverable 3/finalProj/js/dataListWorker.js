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
            var locations = "";
          
            for (i = 0; i < cSize; i++) {

                var locations = '';
                var cSize = data.length;


                for (i = 0; i < cSize; i++) {

                    locations += "<option class='clickz' value='" + data[i].name + "' data-id= '" + data[i].id + "'></option>";

                }
                 self.postMessage(locations);
         
            }

        }
    };
    xhr.send();
}
