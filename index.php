<!DOCTYPE html>
<html>

<body>

    <h2>Calculate House Electricity Bill</h2>

    <table border="1">
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
        <label>Enter your first 200 kWh (1-200 kWh) per month:</label><br>
        <input type="text" name="block1" required><br><br>

        <label>Enter next 100 kWh (201-300 kWh) per month:</label><br>
        <input type="text" name="block2" value="0"><br><br>

        <label>Enter next 300 kWh (301-600 kWh) per month:</label><br>
        <input type="text" name="block3" value="0"><br><br>

        <label>Enter next 300 kWh (601-900 kWh) per month:</label><br>
        <input type="text" name="block4" value="0"><br><br>

        <label>Enter next kWh (901 kWh onwards) per month:</label><br>
        <input type="text" name="block5" value="0"><br><br>

        <button type="submit" name="submit">Calculate Bill</button>
    </form>

</body>

</html>