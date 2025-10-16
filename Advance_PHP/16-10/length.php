<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

        <script type="text/javascript">
            
        function lengthcheck(elem, min, max)
        {
                var uInput = elem.value;
                if(uInput.length >= min && uInput.length <= max)
                {
                    return true;
                }
                else
                {
                    alert("Please enter between " +min+ " and " +max+ " characters");
                    elem.focus();
                    return false;
                }
            }
        
        </script>

</head>
<body>

<form>
 Required Field: <input type='text' id='req1'/>
 <input type='button' onclick="lengthcheck(document.getElementById('req1'), 6, 8)" value='Check Field' />

</form>
    
</body>
</html>