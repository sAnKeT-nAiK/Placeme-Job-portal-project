<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" >
<head>
    <title></title>
    <script src="jquery-1.12-0.min.js"></script>
    <script src="canvasjs.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function () {

            $.getJSON("config.php", function (result) {

                var chart = new CanvasJS.Chart("chartContainer", {
                    data: [
                        {
                            dataPoints: result
                        }
                    ]
                });

                chart.render();
            });
        });
    </script>
</head>
<body>

    <div id="chartContainer" style="width: 800px; height: 380px;"></div>

</body>
</html>