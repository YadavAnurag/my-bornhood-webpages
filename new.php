<html>
  <head>
        <title>Input tutorial</title>
        <script language="javascript">
                function addNumbers()
                {
                        var val1 = parseInt(document.getElementById("value1").value);
                        var val2 = parseInt(document.getElementById("value2").value);
                        var ansD = document.getElementById("answer");
                        ansD.value = val1 + val2;
                        document.getElementById("anu").innerHTML="asdfasdf";
                }
        </script>
  </head>
  <body>
  		<h1>How to go tasgdagersagasgo</h1>
        value1 = <input type="text" id="value1" name="value1" value="1"/>
        value2 = <input type="text" id="value2" name="value2" value="2"/>
        <input type="button" name="Sumbit" value="Click here" onclick="javascript:addNumbers()"/>
        Answer = <input type="text" id="answer" name="answer" value=""/>
        <h1 id="anu"></h1>
  </body>
</html>