<html>
    <head>
        <title>6 Comparison Tool</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    </head>
    <body>
<?php

if ($_SERVER['REQUEST_METHOD']=='POST')
{
    $number_one = floatval ($_POST['number_one']);
    $number_two = floatval ($_POST['number_two']);

    $larger_number = $number_one>$number_two?$number_one : $number_two ;
    echo "Learger Number is : " .$larger_number;


}
 
?>
        <form method="post">
            <table style="text-align: left; margin-left: auto; margin-right: auto;" border="1" cellpadding="1" cellspacing="1">
                <tbody>
                    <tr>
                        <td>
                            <label for="number_one">Enter Number One:</label>
                        </td>
                        <td>
                            <input name="number_one" required="required" step="0.000001" type="number" />
                        </td>
                    </tr>                 
                    <tr>
                        <td>
                            <label for="number_two">Enter Number Two:</label>
                        </td>
                        <td>
                            <input name="number_two" required="required" step="0.000001" type="number" />
                        </td>
                    </tr>                 
                   
                    <tr align="center">
                        <td colspan="2" rowspan="1">
                            <input value="Show Result" type="submit" />
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>
    </body>
</html>