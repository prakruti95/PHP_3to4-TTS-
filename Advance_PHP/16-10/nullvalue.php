<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

        <script type="text/javascript">
            
            function notEmpty(elem, msg)
            {
                    if(elem.value.length==0)
                    {
                        alert(msg);
                        elem.focus();
                        return false;
                    }   

                return true;
            }
        
        </script>

</head>
<body>

<form>
 Required Field: <input type='text' id='req1'/>
 <input type='button' onclick="notEmpty(document.getElementById('req1'), 'Please Enter a Value')" value='Check Field' />

</form>
    
</body>
</html>