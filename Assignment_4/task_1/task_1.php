    <!DOCTYPE html>
    <html lang="en">
    <head>
        <style>
            body {
                margin-left: 600px;
                margin-top: 100px;
            }
            h1 {
                margin-bottom: 50px;
            }
            .iframe-container {
                display: flex;
                justify-content: center;
                margin-top: 50px;
            }
        </style>
        <meta charset="UTF-8">
        <title>Olympiad Registration</title>
    </head>
    <body>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Collecting form data
            $school = $_POST['school'];
            $name = $_POST['name'];
            $surname = $_POST['surname'];
            $grade = $_POST['grade'];
            $subjects = isset($_POST['subjects']) ? $_POST['subjects'] : [];

            // Validation
            if ($school == "" || $name == "" || $surname == "" || $grade == "" || empty($subjects)) {
                echo "<p style='color: red;'>All fields are required. Please complete the form.</p>";
            } else {
                // Calculate total registration fee
                $admin_fee = 40;
                $subject_fee = 20;
                $total_fee = $admin_fee + ($subject_fee * count($subjects));

                // Display registration confirmation
                echo "<p>Student <strong>{$name} {$surname}</strong> from <strong>{$school}</strong>, Grade <strong>{$grade}</strong> is registered for the following subjects:</p>";
                echo "<ul>";
                foreach ($subjects as $subject) {
                    echo "<li>{$subject}</li>";
                }
                echo "</ul>";
                echo "<p>Total registration fee: <strong>R{$total_fee}</strong></p>";
            }
        }
        ?>
        
        <div class="main">
            <h1>Olympiad Registration</h1>
            <form method="POST" action="task_1.php">
                <label for="school">Select School:</label>
                <select id="school" name="school">
                    <option value="">Select a school</option>
                    <option value="Pretoria Technical High School">Pretoria Technical High School</option>
                    <option value="Clapham High School">Clapham High School</option>
                    <option value="The Glen High School">The Glen High School</option>
                    <option value="Hillview High School">Hillview High School</option>
                    <option value="Pretoria Boys High School">Pretoria Boys High School</option>
                </select><br><br>

                <label for="name">First Name:</label>
                <input type="text" id="name" name="name"><br><br>

                <label for="surname">Surname:</label>
                <input type="text" id="surname" name="surname"><br><br>

                <label for="grade">Select Grade:</label>
                <select id="grade" name="grade">
                    <option value="">Select a grade</option>
                    <?php
                    for ($i = 1; $i <= 9; $i++) {
                        echo "<option value='$i'>$i</option>";
                    }
                    ?>
                </select><br><br>

                <label>Subjects:</label><br>
                <input type="checkbox" name="subjects[]" value="Mathematics"> Mathematics<br>
                <input type="checkbox" name="subjects[]" value="Robotics"> Robotics<br>
                <input type="checkbox" name="subjects[]" value="Life Skills"> Life Skills<br>
                <input type="checkbox" name="subjects[]" value="General Knowledge"> General Knowledge<br>
                <input type="checkbox" name="subjects[]" value="Arts"> Arts<br>
                <input type="checkbox" name="subjects[]" value="Bible Study"> Bible Study<br><br>

                <input type="submit" value="Submit">
            </form>
        </div>
<!-- iframe -->
        <div class="iframe-container">
            <iframe src="task_1.txt" width="800" height="600" style="border:1px solid black;">
                Your browser does not support iframes.
            </iframe>
        </div>
    </body>
    </html>
