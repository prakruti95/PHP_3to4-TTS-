<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

        <script type="text/javascript">
            
            function isalphabet(elem, msg)
            {
                var alphaExpression = /^[a-zA-Z]+$/;

                    if(elem.value.match(alphaExpression))
                    {
                       return true;
                    }   
                    else
                    {
                         alert(msg);
                        elem.focus();
                        return false;
                    }

                
            }
        
        </script>

</head>
<body>

<form>
 Required Field: <input type='text' id='req1'/>
 <input type='button' onclick="isalphabet(document.getElementById('req1'), 'Please Enter Letters Only')" value='Check Field' />

</form>
    
</body>
</html>