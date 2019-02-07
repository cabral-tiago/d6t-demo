<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Is there anyone here?</title>
    <script type="text/javascript">
    function refresh() {
      var req = new XMLHttpRequest();
      req.onreadystatechange = function () {
        if (req.readyState == 4 && req.status == 200) {
          document.getElementById('value').innerText = req.responseText;
        }
      }
      req.open("GET", 'value.txt', true);
      req.send(null);
    }

    function init() {
      refresh()
      var int = self.setInterval(function () {
        refresh()
      }, 1000);
    }
  </script>
</head>
<body>
<p>There's currently</p>
<p id="value"></p>
<p>in the proximate area</p>
</body>
</html>