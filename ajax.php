<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script type="text/javascript">
            function loadDoc(){
            var obj;
             obj = new XMLHttpRequest();
              obj.onreadystatechange = function(){
                  
                if(obj.readyState === 4 && obj.status === 200){
                    document.getElementById('divid').innerHTML =  obj.responseText;
                }
                else
                {
                   document.getElementById('divid').innerHTML = "GET"; 
                }
            };
      
            obj.open("GET","text.txt",true);
            obj.send();
            
        }
         </script>
    </head>
    <body>
        <form>
            
            <button  value="" type="button" id="btndemo" onclick="loadDoc()"> Click to show content </button>
            <div id="divid"> 
                data will be here....
            </div>
        </form>
    </body>
</html>
