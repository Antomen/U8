<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">

        <link href="css.css" type="text/css" rel="stylesheet">
    </head>
    <body>

        <div id="slåtärna" >

            <form id="frm" method="GET">
                <p>Antal:</p> 
                <select name="antalDice">
                    <option value ="1">1</option>
                    <option value ="2">2</option>
                    <option value ="3">3</option>
                    <option value ="4">4</option>
                    <option value ="5">5</option>
                    <option value ="6">6</option>
                    <option value ="7">7</option>
                    <option value ="8">8</option>
                    <option value ="9">9</option>
                    <option value ="10">10</option>
                    <option value ="11">11</option>
                    <option value ="12">12</option>
                    <option value ="13">13</option>
                    <option value ="14">14</option>
                    <option value ="15">15</option>
                </select>

                <p>Sidor:</p>  

                <select name="antalSidor">
                    <option value ="4">4</option>
                    <option value ="6">6</option>
                    <option value ="8">8</option>
                    <option value ="10">10</option>
                    <option value ="12">12</option>
                </select>

                <br>
                <br>

                <input id="rulla" type="submit" name="throwDice" value="kasta!">

            </form>

        </div>
        <div id="statistik">

            <?php
            include "dice.php";
            ?>
            
            
        </div>


        <script src = "http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src = "logik.js" ></script>

    </body>
</html>
