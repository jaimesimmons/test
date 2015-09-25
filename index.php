<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        function Greetings ($hours){
            if ($hours < 12) {
                return "Good Morning";
            }
            elseif ($hours > 12 && $hours < 17 ){
                return "Good Afternoon";
            }
            
            elseif ($hours >17 && $hours < 22) {
                return "Good Evening";
            }
            
            elseif ($hours > 22) {
                return "Good Night";
            }
        }
        
        print Greetings (6)
        
        ?>
    </body>
</html>
