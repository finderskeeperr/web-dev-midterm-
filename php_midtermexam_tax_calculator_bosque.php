<!DOCTYPE html> 
<html lang="en"> 
    <head>
        <title>Tax Calculator - PHP</title>
        <meta charset="utf-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
        <link rel="stylesheet" href="style.css">
        <style>
            body {
    font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;
}

.content {
    border: 2px solid rgb(32, 33, 41);
    width: 230px;
    padding: 10px 20px;
    margin: auto;
    margin-top: 50px;
    margin-bottom: 50px;
}

.content h1 {
    font-size: 28px;
    background-color: #800000;
    color: #fff;
    padding: 10px 10px;
    width: 90%;
    text-align: center;
}

input#monetaryAmmount,
input#taxPercentage {
    width: 90%;
    text-align: right;
    padding: 5px;
    margin: 5px 0;
}

#calculateBtn {
    width: 100px;
    padding: 5px;
    margin: 5px 0;
    text-align: center;
}

#summary {
    background-color: #ccc;
    width: 95%;
    padding: 2px;
    margin: 5px 0;
}

#summary p {
    padding: 1px;
    margin: 5px 5px;
}
        </style>
    </head>
<body>

    <?php
        // Check if the "Calculate" button was pressed, then get the data from inputs
        if (isset($_POST['monetaryAmount']) && isset($_POST['taxPercentage'])) {
            $monetaryAmmount = (float) $_POST['monetaryAmount'];
            $taxPercentage = (float) $_POST['taxPercentage'];
        } else {
            $monetaryAmmount = 0;
            $taxPercentage = 0;
        }
        // Make the calculations
        $taxAmount = round(($monetaryAmmount * $taxPercentage) / 100, 2);
        $finalAmount = round($monetaryAmmount - $taxAmount, 2);
    ?>

    <div class="content">
        <h1>Tax Calculator - PHP</h1>
        <form action="" method="POST" id="myForm">
            <label for="monetary">Monetary amount</label>
            <br>
            <input type="number" id="monetaryAmount" name="monetaryAmount" 
            value="<?=$monetaryAmmount ?>" required pattern="[0-9]" step="0.01" min="0">
            <br>
            <label for="tax">Tax percentage</label>
            <br>
            <input type="number" id="taxPercentage" name="taxPercentage" 
            value="<?=$taxPercentage ?>" required pattern="[0-9]" step="0.01" min="0" max="100">
            <br>
            <input type="Submit" value="Calculate" id="calculateBtn">
        </form>
        <div id="summary">
            <p>Tax Amount: 
                <span id="taxAmount">
                    <?=$taxAmount ?>
                </span>
            </p>
            <p>Final Amount: 
                <span id="finalAmount">
                    <?=$finalAmount ?> 
                </span>
            </p>
        </div>
    </div>
</body>
</html>