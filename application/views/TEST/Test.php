<html>
    
    <head>
        <meta content="text/html" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    </head>
    <body>
        <form action="<?php  echo site_url("Wizardseller/uploadfiles") ?>" method="post" enctype="multipart/form-data" >
            
            <input type="file" name="a" />
            <input type="file" name="b" />
            <input type="submit" /> 
        </form>
        
        
        <form action="<?php  echo site_url("Wizardseller/testcc") ?>" onsubmit="return addtohidden();"  method="post" enctype="multipart/form-data">
            <input type="text" name="siropala" id="locationtx" />
            <input type="hidden" name="locationhidde" id="locatoinforhiden" />
            <input type="submit" />
        </form>
        
        
    </body>
    <script type="text/javascript" >
        function  addtohidden(){
            document.getElementById("locatoinforhiden").value = document.getElementById("locationtx").value;
            alert(document.getElementById("locatoinforhiden").value);
            
        }
</script>
</html>