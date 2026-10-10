<?php
if (isset($_POST['submit'])) {
    // Retrieve inputs from the form
    $b1 = $_POST['block1'];
    $b2 = $_POST['block2'];
    $b3 = $_POST['block3'];
    $b4 = $_POST['block4'];
    $b5 = $_POST['block5'];

    // Validation: Check if inputs are numeric and not negative
    if (
        !is_numeric($b1) || !is_numeric($b2) || !is_numeric($b3) || !is_numeric($b4) || !is_numeric($b5) ||
        $b1 < 0 || $b2 < 0 || $b3 < 0 || $b4 < 0 || $b5 < 0
    ) {
        echo "<p style='color: red;'>Error: Invalid input! Please enter valid numeric values only.</p>";
        echo "<a href='index.php'>Back to Form</a>";
        exit();
    }

    // Convert to float
    $b1 = (float)$b1;
    $b2 = (float)$b2;
    $b3 = (float)$b3;
    $b4 = (float)$b4;
    $b5 = (float)$b5;

    // Rates per kWh based on tariff table
    $rate1 = 0.218;
    $rate2 = 0.344;
    $rate3 = 0.516;
    $rate4 = 0.546;
    $rate5 = 0.571;

    // Calculate cost per block
    $cost1 = $b1 * $rate1;
    $cost2 = $b2 * $rate2;
    $cost3 = $b3 * $rate3;
    $cost4 = $b4 * $rate4;
    $cost5 = $b5 * $rate5;

    // Total consumption and initial total charge
    $total_kwh = $b1 + $b2 + $b3 + $b4 + $b5;
    $total_consumption_rm = $cost1 + $cost2 + $cost3 + $cost4 + $cost5;

    // Minimum charge check (Note: Refer to test guidelines for minimum charge threshold, usually applied if total is below minimum)
    $subtotal = $total_consumption_rm;
    if ($subtotal < 3.00) { // Adjust based on test condition if minimum is RM3 or RM300
        $subtotal = 3.00;
    }

    // Calculate 6% SST if consumption exceeds 600 kWh
    $sst = 0.00;
    if ($total_kwh > 600) {
        $sst = $subtotal * 0.06;
    }

    $total_bill = $subtotal + $sst;

    // Display Output Details
    echo "<h3>Estimated Bill Details</h3>";
    echo "First 200 kWh: {$b1} kWh | RM " . number_format($cost2 ? $cost1 : $cost1, 2) . "<br>"; // simplified display
    echo "Total Electricity Consumption: " . number_format($total_kwh, 2) . " kWh<br>";
    echo "Total Consumption (RM): RM " . number_format($total_consumption_rm, 2) . "<br>";
    echo "6% SST: RM " . number_format($sst, 2) . "<br>";
    echo "<strong>Total Current Bill to be Paid: RM " . number_format($total_bill, 2) . "</strong><br><br>";

    echo "<a href='index.php'>Calculate Another Bill</a>";
}
