<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Electricity Bill Calculator</title>
</head>

<body>

    <h2>Calculate House Electricity Bill</h2>

    <!-- Jadual Kadar Tarif Elektrik -->
    <table border="1" cellspacing="0" cellpadding="5">
        <tr>
            <th>Block Tariff (per month)</th>
            <th>Unit</th>
            <th>Rate</th>
        </tr>
        <tr>
            <td>For the first 200 kWh (1-200 kWh) per month</td>
            <td>1 - 200 kWh</td>
            <td>0.218</td>
        </tr>
        <tr>
            <td>For the first 100 kWh (201-300 kWh) per month</td>
            <td>201 - 300 kWh</td>
            <td>0.344</td>
        </tr>
        <tr>
            <td>For the first 300 kWh (301-600 kWh) per month</td>
            <td>301 - 600 kWh</td>
            <td>0.516</td>
        </tr>
        <tr>
            <td>For the first 300 kWh (601-900 kWh) per month</td>
            <td>601 - 900 kWh</td>
            <td>0.546</td>
        </tr>
        <tr>
            <td>For the first 300 kWh (901 kWh onwards) per month</td>
            <td>901 kWh onwards</td>
            <td>0.571</td>
        </tr>
        <tr>
            <td colspan="3">The minimum monthly charge is RM3.00</td>
        </tr>
    </table>

    <br><br>

    <!-- Form Input Bil -->
    <form action="calculate.php" method="POST">
        <table cellspacing="5" cellpadding="5">
            <tr>
                <td><label>Enter your first 200 kWh (1-200 kWh) per month:</label></td>
                <td><input type="text" name="block1"></td>
            </tr>
            <tr>
                <td><label>Enter next 100 kWh (201-300 kWh) per month:</label></td>
                <td><input type="text" name="block2"></td>
            </tr>
            <tr>
                <td><label>Enter next 300 kWh (301-600 kWh) per month:</label></td>
                <td><input type="text" name="block3"></td>
            </tr>
            <tr>
                <td><label>Enter next 300 kWh (601-900 kWh) per month:</label></td>
                <td><input type="text" name="block4"></td>
            </tr>
            <tr>
                <td><label>Enter next kWh (901 kWh onwards) per month:</label></td>
                <td><input type="text" name="block5"></td>
            </tr>
            <tr>
                <td colspan="2">
                    <br>
                    <button type="submit" name="submit">Calculate</button>
                    <button type="reset">Reset</button>
                </td>
            </tr>
        </table>
    </form>

</body>

</html>