<!DOCTYPE html>
<html>
    <body>
        <div data-role="page" id="page1">
            <div data-theme="b" data-role="header" data-position="fixed">
                <h5>
                    Play 9 holes
                </h5>
            </div>
        </div>
        <p id="demo">Click the button to get your position:</p>
        <button onclick="getLocation()">Try It</button>
        <div id="mapholder"></div>
        <script>
            var x = document.getElementById("demo");
            function getLocation()
            {
                if (navigator.geolocation)
                {
                    navigator.geolocation.getCurrentPosition(showPosition, showError);
                }
                else {
                    x.innerHTML = "Geolocation is not supported by this browser.";
                }
            }

            function showPosition(position)
            {
                var latlon = position.coords.latitude + "," + position.coords.longitude;
                window.alert(position.coords.latitude + "," + position.coords.longitude);
                //window.location.href = "myphpfile.php?name=" + javascriptVariable; 
                var img_url = "http://maps.googleapis.com/maps/api/staticmap?center="
                        + latlon + "&zoom=14&size=100x100&sensor=false";
                document.getElementById("mapholder").innerHTML = "<img src='" + img_url + "' />";
            }

            function showError(error)
            {
                switch (error.code)
                {
                    case error.PERMISSION_DENIED:
                        x.innerHTML = "User denied the request for Geolocation."
                        break;
                    case error.POSITION_UNAVAILABLE:
                        x.innerHTML = "Location information is unavailable."
                        break;
                    case error.TIMEOUT:
                        x.innerHTML = "The request to get user location timed out."
                        break;
                    case error.UNKNOWN_ERROR:
                        x.innerHTML = "An unknown error occurred."
                        break;
                }
            }

            function buttonClick(subEvent)
            {
                var mainEvent = subEvent ? subEvent : window.event;

                alert("This button click occurred at: X(" +
                        mainEvent.screenX + ") and Y(" + mainEvent.screenY + ")");
            }
        </script>
    </body>
</html>