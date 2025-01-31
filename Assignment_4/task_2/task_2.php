<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP and CSS Example</title>
    <style>
        /* Section A Styles */
        .section-a {
            margin: 50px;
            padding: 20px;
            background-color: #f9f9f9;
            border: 1px solid #ddd;
        }
        .section-a table {
            width: 50%;
            margin: 0 auto;
            border-collapse: collapse;
        }
        .section-a th, .section-a td {
            padding: 10px;
            text-align: center;
            border: 1px solid #ccc;
        }

        /* Section B Styles */
        .section-b {
            margin: 50px;
            padding: 20px;
            background-color: #e6f7ff;
            border: 1px solid #0099cc;
        }
        .section-b p {
            font-size: 18px;
            color: #005580;
        }

        /* Section C Styles */
        .section-c {
            margin: 50px;
            padding: 20px;
            background-color: #e5ffe5;
            border: 1px solid #66cc66;
        }
        .section-c form {
            margin-top: 20px;
        }
        .section-c select {
            padding: 5px;
            font-size: 16px;
        }
        .section-c button {
            padding: 5px 10px;
            font-size: 16px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }
        .section-c button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

<!----------------------------------------------------->
<!------------------- Question 2 A -------------------->
<!----------------------------------------------------->
<h2>Question 2 A</h2>
<div class="section-a">
    <?php
    // Define the constant for the multiplication factor
    define("Multiply", 5);

    $i = 1; // Initialize counter

    echo "<table>";
    echo "<tr><th>Number</th><th>5 Times Table</th></tr>";

    while ($i <= 12) {
        // Calculate the product
        $product = $i * Multiply;
        
        // Display the row in the table
        echo "<tr><td>$i</td><td>$product</td></tr>";
        
        // Increment the counter
        $i++;
    }

    echo "</table>";
    ?>
</div>

<!----------------------------------------------------->
<!------------------- Question 2 B -------------------->
<!----------------------------------------------------->
<h2>Question 2 B</h2>
<div class="section-b">
    
    <?php
    // Function to evaluate proctoring status
    function evaluateProctoring($proctoringStatus, $suspiciousActivity) {
        // Use a ternary operator to determine the output based on the parameters
        $result = $proctoringStatus === 'pass' 
                    ? 'Release marks'
                    : ($suspiciousActivity 
                        ? 'Disciplinary case' 
                        : 'Supplementary/cancel exam');
        
        // Display the result
        echo "<p>$result</p>";
    }

    // Invoke the function with the provided parameters
    evaluateProctoring('fail', false);  // Should output: Supplementary/cancel exam
    evaluateProctoring('fail', true);   // Should output: Disciplinary case
    evaluateProctoring('pass', false);  // Should output: Release marks
    ?>
</div>
<!----------------------------------------------------->
<!------------------- Question 2 C -------------------->
<!----------------------------------------------------->
<h2>Question 2 C</h2>
<div class="section-c">
    <h1>South African languages</h1>
    <form method="post" action="">
        <label for="language">Select a language:</label>
        <select name="language" id="language">
            <option value="English">English</option>
            <option value="Afrikaans">Afrikaans</option>
            <option value="Northern Sotho">Northern Sotho</option>
            <option value="IsiZulu">IsiZulu</option>
            <option value="IsiXhosa">IsiXhosa</option>
            <option value="Sesotho">Sesotho</option>
            <option value="IsiNdebele">IsiNdebele</option>
            <option value="Setswana">Setswana</option>
            <option value="SiSwati">SiSwati</option>
            <option value="Tshivenda">Tshivenda</option>
            <option value="Xitsonga">Xitsonga</option>
        </select>
        <button type="submit">Submit</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $language = $_POST['language'];

        // Switch statement to print the greeting based on selected language
        switch ($language) {
            case 'English':
                echo "Hello";
                break;
            case 'Afrikaans':
                echo "Hallo";
                break;
            case 'Northern Sotho':
                echo "Dumela";
                break;
            case 'IsiZulu':
                echo "Sawubona";
                break;
            case 'IsiXhosa':
                echo "Molo";
                break;
            case 'Sesotho':
                echo "Dumela";
                break;
            case 'IsiNdebele':
                echo "Lotjhani/Salibonani";
                break;
            case 'Setswana':
                echo "Dumela";
                break;
            case 'SiSwati':
                echo "Sawubona";
                break;
            case 'Tshivenda':
                echo "Ndaa!/Aa!";
                break;
            case 'Xitsonga':
                echo "Xewani";
                break;
            default:
                echo "Select a valid language.";
                break;
        }
    }
    ?>
</div>
<!-- iframe -->
<div class="iframe-container">
        <iframe src="task_2.txt" width="800" height="600" style="border:1px solid black;">
            Your browser does not support iframes.
        </iframe>
</div>
</body>

</html>
