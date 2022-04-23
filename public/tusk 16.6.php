<?php
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <script>
        let text = "The quick brown fox.";
        function reg(text){
            return /fox/.test(text);
        }
        let check = reg(text);
        document.write(check);
    </script>
</head>
<body>
</body>
</html>
