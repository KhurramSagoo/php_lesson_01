<?php
include("header.html"); // ✅ Include header dynamically

$capitals = [
   "usa" => "washington",
   "germany" => "berlin",
   "france" => "paris",
   "uk" => "london",
   "italy" => "rome"
];

// ✅ Prevent "Undefined index" error
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["country"])) {
    $country = strtolower(trim($_POST["country"])); // Normalize input
    
    // ✅ Use null coalescing operator to avoid errors
    $capital = $capitals[$country] ?? "not found";

    // ✅ Show styled message
    echo "<div style='margin: 20px auto; width: 50%; padding: 10px; text-align: center; 
                border-radius: 5px; font-size: 18px; 
                background-color: " . ($capital == "not found" ? "#ffdddd; color: red; border: 1px solid red;" : "#ddffdd; color: green; border: 1px solid green;") . "'>
            <strong>" . ($capital == "not found" ? "Error:" : "Capital:") . "</strong> $capital
          </div>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 20px;
            background-color: #333;
            color: white;
        }
        form {
            margin-top: 20px;
        }
        input[type="text"] {
            padding: 8px;
            width: 250px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            padding: 8px 15px;
            background-color: #333;
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 4px;
            margin-left: 10px;
        }
        button:hover {
            background-color: #555;
        }
    </style>
</head>
<body>
    <h1>Welcome to My Website</h1>
    
    <h2>Find the Capital of a Country</h2>
    <form action="index.php" method="post">
        <input type="text" name="country" placeholder="Enter country name" required>
        <button type="submit">Submit</button>
    </form>
</body>
</html>

<?php include("footer.html"); // ✅ Include footer ?>
