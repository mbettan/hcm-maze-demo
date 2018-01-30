<!DOCTYPE html>
<html>
<head>
    <title>Helion Quizz</title>
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
    <link href="css/main.css" rel="stylesheet" />

    <script src="scripts/qrcode.js"></script>
    <script src="scripts/cannon.js"></script>
    <script src="scripts/babylon.js"></script>
    <script src="scripts/coding4fun.js"></script>
</head>
<?php
/*/////Edited by Etienne Cointet /////
      HP.COM - ec@hp.com
////////////////////////////////////*/
      
$appinfo = getenv("VCAP_APPLICATION");
$appinfo_json = json_decode($appinfo,true);
$current_url = $appinfo_json['uris'][0];
//END
      ?>
<body>
    <canvas id="canvas" class="offScreen"></canvas>
    <div id="dialog-form" title="Create Labyrinth">
        <form>
            <fieldset>
                <label for="name">Player 1 is:</label>
      <input name="url" id="url" type="hidden" value="<?php echo $current_url; ?>">
                <input type="text" name="name" id="name" class="text ui-widget-content ui-corner-all">
            </fieldset>
        </form>
    </div>
    <div id="logo">
    </div>
</body>
</html>
