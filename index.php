<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial Calculator</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        background: linear-gradient(135deg, #74ebd5, #9face6);
        color: #333;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
    }

    .container {
        background: #ffffffcc;
        border-radius: 10px;
        padding: 20px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        max-width: 500px;
        text-align: center;
    }

    input[type="number"] {
        padding: 10px;
        border: 1px solid #ddd;
        border-radius: 5px;
        width: 80%;
        margin: 10px 0;
        font-size: 16px;
    }

    button {
        background: #74ebd5;
        border: none;
        padding: 10px 20px;
        font-size: 16px;
        border-radius: 5px;
        cursor: pointer;
        transition: 0.3s;
    }

    button:hover {
        background: #9face6;
    }

    .results {
        margin-top: 20px;
        text-align: left;
    }

    .results div {
        padding: 5px 0;
        border-bottom: 1px solid #ddd;
    }
    </style>
</head>

<body>
    <div class="container">
        <h1>Factorial Calculator</h1>
        <form method="POST" id="phpForm">
            <input type="number" name="number" id="number" placeholder="Enter a number" required>
            <button type="submit">Calculate (PHP)</button>
        </form>
        <button id="jsButton">Calculate (JavaScript)</button>

        <div class="results" id="phpResults">
            <?php
            if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['number'])) {
                $number = (int)$_POST['number'];
                if ($number > 0) {
                    $start_time = microtime(true);
                    $factorial = 1;
                    echo "<h3>php result:</h3>";
                    for ($i = 1; $i <= $number; $i++) {
                        $factorial *= $i;
                        echo "<div>{$i}! = {$factorial}</div>";
                    }
                    $execution_time = microtime(true) - $start_time;
                    echo "<div>Execution Time: " . number_format($execution_time, 6) . " seconds</div>";
                } else {
                    echo "<div>Please enter a positive integer.</div>";
                }
            }
            ?>
        </div>

        <div class="results" id="jsResults" style="display: none;">
            <h3>JavaScript Results:</h3>
        </div>
    </div>

    <script>
    document.getElementById('jsButton').addEventListener('click', () => {
        const number = parseInt(document.getElementById('number').value);
        if (isNaN(number) || number <= 0) {
            alert('Please enter a positive integer.');
            return;
        }

        const resultsDiv = document.getElementById('jsResults');
        resultsDiv.style.display = 'block';
        resultsDiv.innerHTML = '<h3>JavaScript Results:</h3>';

        const startTime = performance.now();
        let factorial = 1;

        for (let i = 1; i <= number; i++) {
            factorial *= i;
            const div = document.createElement('div');
            div.textContent = `${i}! = ${factorial}`;
            resultsDiv.appendChild(div);
        }

        const endTime = performance.now();
        const executionTime = ((endTime - startTime) / 1000).toFixed(6);
        const timeDiv = document.createElement('div');
        timeDiv.textContent = `Execution Time: ${executionTime} seconds`;
        resultsDiv.appendChild(timeDiv);
    });
    </script>
</body>

</html>