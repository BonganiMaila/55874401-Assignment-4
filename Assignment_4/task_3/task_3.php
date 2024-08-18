<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 3</title>
    <style>
        .task3a {
            background-color: #f5f5f5; /* Light blue background */
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #d1e7fd;
        }

        .task3b {
            background-color: #f5f5f5; /* Light gray background */
            padding: 10px;
            border: 1px solid #ccc;
        }
        .task3c {
            background-color: #f5f5f5; /* Light gray background */
            padding: 10px;
            border: 1px solid #ccc;
        }
        .task3d {
            background-color: #f5f5f5; /* Light gray background */
            padding: 10px;
            border: 1px solid #ccc;
        }
    </style>
</head>
<body>

<h1>Task 3 A</h1>
<!----------------------------------------------------->
<!------------------ Task 3 A  ------------------------>
<!----------------------------------------------------->
<div class="task3a">
    <?php

    function displayEmailParts($email) {
        // Split the email into local and domain parts
        list($local, $domain) = explode('@', $email);
        
        // Split the domain into parts by '.'
        $domainParts = explode('.', $domain);
        
        // Reverse the domain parts
        $reversedDomainParts = array_reverse($domainParts);
        
        // Display the local part
        echo "The local part is $local, and the domain parts are ";
        
        // Display the reversed domain parts
        echo implode(', ', $reversedDomainParts) . ".<br>";
    }

    // Invoke the function with the given email addresses
    displayEmailParts("ICT2613@unisa.ac.za");
    displayEmailParts("someone@gmail.com");
    displayEmailParts("test_email@isa.it.uk");

    ?>
</div>

<!-- Task 3 B  -->
 <h1>Task 3 B</h1>
<div class="task3b">
    <?php

    // Get the current date
    $currentDate = date('Y-m-d');

    // Display the current date in three different formats
    echo "Current Date (YYYY-MM-DD): " . date('Y-m-d') . "<br>";
    echo "Current Date (DD/MM/YYYY): " . date('d/m/Y') . "<br>";
    echo "Current Date (Day, Month DD, YYYY): " . date('l, F j, Y') . "<br>";

    // Calculate the date of next Monday
    $nextMonday = strtotime('next Monday');
    echo "Date of Next Monday: " . date('Y-m-d', $nextMonday) . "<br>";

    ?>
</div>

<!----------------------------------------------------->
<!-------------------- Task 3 C ----------------------->
<!----------------------------------------------------->
<h1>Task 3 C</h1>
 <div class="task3c">
    <?php

    // Create an array with the eleven official languages of South Africa
    $languages = array(
        "Zulu",
        "Xhosa",
        "Afrikaans",
        "English",
        "Northern Sotho",
        "Tswana",
        "Sotho",
        "Tsonga",
        "Swati",
        "Venda",
        "Ndebele"
    );

    // Iterate through the array and display each language in a separate line
    echo "Original List of Languages:<br>";
    foreach ($languages as $language) {
        echo $language . "<br>";
    }

    // Sort the array alphabetically
    sort($languages);

    // Display the sorted array
    echo "<br>Sorted List of Languages:<br>";
    foreach ($languages as $language) {
        echo $language . "<br>";
    }

    // Find and display the language with the longest name
    $longestLanguage = "";
    foreach ($languages as $language) {
        if (strlen($language) > strlen($longestLanguage)) {
            $longestLanguage = $language;
        }
    }

    echo "<br>The language with the longest name is: $longestLanguage";

    ?>

 </div>

 <!----------------------------------------------------->
 <!-------------------- Task 3 D ----------------------->
  
 <h1>Task 3 D</h1>
 <div class="task3d">
    <?php

    // Create an associative array with languages as keys and greetings as values
    $greetings = array(
        "Zulu" => "Sawubona",
        "Xhosa" => "Molo",
        "Afrikaans" => "Goeie dag",
        "English" => "Hello",
        "Northern Sotho" => "Dumela",
        "Tswana" => "Dumelang",
        "Sotho" => "Lumela",
        "Tsonga" => "Avuxeni",
        "Swati" => "Sawubona",
        "Venda" => "Ndaa",
        "Ndebele" => "Salibonani"
    );

    // User-chosen language
    $chosenLanguage = "English"; // You can change this to test with different languages

    // Retrieve and display the greeting for the chosen language
    if (array_key_exists($chosenLanguage, $greetings)) {
        echo "Greeting in $chosenLanguage: " . $greetings[$chosenLanguage];
    } else {
        echo "Language not found.";
    }

    ?>

 </div>
 <!-- iframe -->
 <div class="iframe-container">
            <iframe src="task_3.txt" width="800" height="600" style="border:1px solid black;">
                Your browser does not support iframes.
            </iframe>
        </div>
</body>
</html>
