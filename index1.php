<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="pl">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="Content-Script-Type" content="text/javascript">
    <title>Dalmer</title>
    <script type="text/javascript">
        function ontop(id)
        {
            document.getElementById('layer1').style.zIndex = 0;
            document.getElementById('layer2').style.zIndex = 0;
            document.getElementById('layer3').style.zIndex = 0;
            document.getElementById('layer4').style.zIndex = 0;
            document.getElementById('layer5').style.zIndex = 0;
            document.getElementById(id).style.zIndex = 1;
        }
    </script>
</head>
<body>
<div id="layer1" style="position:absolute;width:150px;height:150px;
background-color:yellow;left:100px;top:60px;visibility:visible;">
    Yellow
</div>
<div id="layer2" style="position:absolute;width:100px;height:100px;
background-color:orange;left:70px;top:90px;visibility:visible;">
    Orange
</div>
<div id="layer3" style="position:absolute;width:100px;height:100px;
background-color:red;left:130px;top:120px;visibility:visible;">
    Red
</div>
<div id="layer4" style="position:absolute;width:100px;height:100px;
background-color:blue;left:160px;top:50px;visibility:visible;">
    Blue
</div>
<div id="layer5" style="position:absolute;width:100px;height:100px;
background-color:green;left:40px;top:50px;visibility:visible;">
    Green
</div>
<div>
    <input type="radio" name="rd1" onclick="ontop('layer1');">Yellow
    <input type="radio" name="rd1" onclick="ontop('layer2');">Orange
    <input type="radio" name="rd1" onclick="ontop('layer3');">Red
    <input type="radio" name="rd1" onclick="ontop('layer4');">Blue
    <input type="radio" name="rd1" onclick="ontop('layer5');">Green
</div>
</body>
</html>