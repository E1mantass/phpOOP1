<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <label for="name">Name:</label><br>
            <input type="text" id="name" name="name"><br>
        
            <label for="position">Position:</label><br>
            <input type="text" id="position" name="position"><br>

            <label for="salary">Salary:</label><br>
            <input type="number" id="salary" name="salary"><br>
        
            <label for="type">Employee Type:</label><br>
            <select id="type" name="type">
                <option value="programmer">Programmer</option>
                <option value="tester">Tester</option>
                <option value="admin">Administrative Worker</option>
            </select><br>
        
            <label for="language_tool_department">Programming Language / Testing Tool / Departament:</label><br>
            <input type="text" id="language_tool_department" name="language_tool_department"><br>
        
            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>