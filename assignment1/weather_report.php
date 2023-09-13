<html>
    <head>
        <title>Weather Report</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    </head>
    <body>
<?php

if ($_SERVER['REQUEST_METHOD']=='POST')
{
    $temparature = floatval ($_POST['temparature']);

    if($temparature>=35)
    {
        echo 'It"s warm';
    }
    if($temparature>=10 && $temparature<35 )
    {
        echo 'It"s cool';
    }
    if($temparature>=-10 && $temparature<10)
    {
        echo 'It"s freezing';
    }


}
 
?>
        <form method="post">
            <table style="text-align: left; margin-left: auto; margin-right: auto;" border="1" cellpadding="1" cellspacing="1">
                <tbody>
                    <tr>
                        <td>
                            <label for="temparature">Enter the Temparature:</label>
                        </td>
                        <td>
                            <input name="temparature" required="required" step="0.000001" type="number" />
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