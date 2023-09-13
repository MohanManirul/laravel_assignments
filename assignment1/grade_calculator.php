<html>
    <head>
        <title>Student grades calculation</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    </head>
    <body>
<?php

if ($_SERVER['REQUEST_METHOD']=='POST')
{
    $bangla = floatval ($_POST['bangla']);
    $english = floatval ($_POST['english']);
    $math = floatval ($_POST['math']);
    $Marks=($bangla+$english+$math)/3;
    $Point=0;
    if($Marks>=90&&$Marks<=100)
    {
        echo 'Grade: A+<br>',
        $Point=4;
    }
    if($Marks>=80&&$Marks<90)
    {
        echo 'Grade: A<br>',
        $Point=4;
    }
    if($Marks>=75&&$Marks<80)
    {
        echo 'Grade: A-<br>',
        $Point=3.67;
    }
    if($Marks>=70&&$Marks<75)
    {
        echo 'Grade: B+<br>',
        $Point=3.33;
    }
    if($Marks>=65&&$Marks<70)
    {
        echo 'Grade: B<br>',
        $Point=3;
    }
    if($Marks>=60&&$Marks<65)
    {
        echo 'Grade: B-<br>',
        $Point=2.67;
    }
    if($Marks>=55&&$Marks<60)
    {
        echo 'Grade: C+<br>',
        $Point=2.33;
    }
    if($Marks>=50&&$Marks<55)
    {
        echo 'Grade: C<br>',
        $Point=2;
    }
    if($Marks>=45&&$Marks<50)
    {
        echo 'Grade: C-<br>',
        $Point=1.67;
    }
    if($Marks>=40&&$Marks<45)
    {
        echo 'Grade: D+<br>',
        $Point=1.33;
    }
    if($Marks>=35&&$Marks<40)
    {
        echo 'Grade: D<br>',
        $Point=1;
    }
    if($Marks>=30&&$Marks<35)
    {
        echo 'Grade: D-<br>',
        $Point=0.37;
    }
    if($Marks<30)
    echo 'Grade: E<br>';
    echo 'Value of Marks: ' . $Marks . "<br/>\n";
    echo 'Value of Point: ' . $Point . "<br/>\n";
}
 
?>
        <form method="post">
            <table style="text-align: left; margin-left: auto; margin-right: auto;" border="1" cellpadding="1" cellspacing="1">
                <tbody>
                    <tr>
                        <td>
                            <label for="bangla">Enter the value of Subject Bangla:</label>
                        </td>
                        <td>
                            <input name="bangla" required="required" step="0.000001" type="number" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="english">Enter the value of Subject English:</label>
                        </td>
                        <td>
                            <input name="english" required="required" step="0.000001" type="number" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="math">Enter the value of Subject Math:</label>
                        </td>
                        <td>
                            <input name="math" required="required" step="0.000001" type="number" />
                        </td>
                    </tr>
                 
                   
                    <tr align="center">
                        <td colspan="2" rowspan="1">
                            <input value="Process" type="submit" />
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>
    </body>
</html>