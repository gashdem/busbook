<!DOCTYPE html>
<html>
    <head>
    <style>
    h1 {
        border-bottom: 3px solid #cc9900;
        color: #996600;
        font-size: 30px;
    }
    table, th , td  {
        border: 1px solid grey;
        border-collapse: collapse;
        padding: 5px;
    }
    table tr:nth-child(odd)	{
        background-color: #f1f1f1;
    }
    table tr:nth-child(even) {
        background-color: #ffffff;
    }
        
    #id02 p {
            font-family: sans-serif;
            font-weight: 100;
            font-size: 19px;
        }
        
    </style>
    </head>

    <body>
        <h1>Msafari Bus KBX 123Z</h1>
        <h1>Customers</h1>
        <div id="id01"></div>
        <div id="id02"></div>
    </body>

    <script>
        var xmlhttp = new XMLHttpRequest();
        var url = "seats_mysql.php";

        xmlhttp.onreadystatechange=function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                myFunction(xmlhttp.responseText);
            }
        }
        xmlhttp.open("GET", url, true);
        xmlhttp.send();

        function myFunction(response) {
            var arr = JSON.parse(response);
            var i;
            var out = "<table>";
            var booked_seats = 0;

            for(i = 0; i < arr.length; i++) {
                out += "<tr><td>" +
                    arr[i].SeatNumber +
                    "</td><td>" +
                    arr[i].SeatStatus +
                    "</td></tr>";

                if(arr[i].SeatStatus !== "NA") {
                    booked_seats += 1;
                }
            }
            var booked_out = "<p><b>" + booked_seats + " / 10 </b> Seats are booked</p>";

            out += "</table>";
            document.getElementById("id01").innerHTML = out;
            document.getElementById("id02").innerHTML = booked_out;

        }
    </script>

</html>
