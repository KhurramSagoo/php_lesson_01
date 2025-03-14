<?php
include("header.html"); 

$capitals = [
    "afghanistan" => "kabul", "albania" => "tirana", "algeria" => "algiers", "andorra" => "andorra la vella",
    "angola" => "luanda", "argentina" => "buenos aires", "armenia" => "yerevan", "australia" => "canberra",
    "austria" => "vienna", "azerbaijan" => "baku", "bahamas" => "nassau", "bahrain" => "manama",
    "bangladesh" => "dhaka", "barbados" => "bridgetown", "belarus" => "minsk", "belgium" => "brussels",
    "belize" => "belmopan", "benin" => "porto-novo", "bhutan" => "thimphu", "bolivia" => "sucre",
    "bosnia and herzegovina" => "sarajevo", "botswana" => "gaborone", "brazil" => "brasilia",
    "brunei" => "bandar seri begawan", "bulgaria" => "sofia", "burkina faso" => "ouagadougou",
    "burundi" => "gitega", "cambodia" => "phnom penh", "cameroon" => "yaoundé", "canada" => "ottawa",
    "cape verde" => "praia", "central african republic" => "bangui", "chad" => "n'djamena", 
    "chile" => "santiago", "china" => "beijing", "colombia" => "bogotá", "comoros" => "moroni",
    "congo" => "brazzaville", "costa rica" => "san jose", "croatia" => "zagreb", "cuba" => "havana",
    "cyprus" => "nicosia", "czech republic" => "prague", "denmark" => "copenhagen", "djibouti" => "djibouti",
    "dominican republic" => "santo domingo", "ecuador" => "quito", "egypt" => "cairo", "el salvador" => "san salvador",
    "estonia" => "tallinn", "eswatini" => "mbabane", "ethiopia" => "addis ababa", "fiji" => "suva",
    "finland" => "helsinki", "france" => "paris", "gabon" => "libreville", "gambia" => "banjul",
    "georgia" => "tbilisi", "germany" => "berlin", "ghana" => "accra", "greece" => "athens",
    "grenada" => "st. george's", "guatemala" => "guatemala city", "guinea" => "conakry", "guyana" => "georgetown",
    "haiti" => "port-au-prince", "honduras" => "tegucigalpa", "hungary" => "budapest",
    "iceland" => "reykjavik", "india" => "new delhi", "indonesia" => "jakarta", "iran" => "tehran",
    "iraq" => "baghdad", "ireland" => "dublin", "israel" => "jerusalem", "italy" => "rome",
    "jamaica" => "kingston", "japan" => "tokyo", "jordan" => "amman", "kazakhstan" => "nur-sultan",
    "kenya" => "nairobi", "kiribati" => "tarawa", "kuwait" => "kuwait city", "kyrgyzstan" => "bishkek",
    "laos" => "vientiane", "latvia" => "riga", "lebanon" => "beirut", "lesotho" => "maseru",
    "liberia" => "monrovia", "libya" => "tripoli", "liechtenstein" => "vaduz", "lithuania" => "vilnius",
    "luxembourg" => "luxembourg city", "madagascar" => "antananarivo", "malawi" => "lilongwe", 
    "malaysia" => "kuala lumpur", "maldives" => "male", "mali" => "bamako", "malta" => "valletta",
    "mexico" => "mexico city", "moldova" => "chisinau", "monaco" => "monaco", "mongolia" => "ulaanbaatar",
    "montenegro" => "podgorica", "morocco" => "rabat", "mozambique" => "maputo", "myanmar" => "naypyidaw",
    "namibia" => "windhoek", "nepal" => "kathmandu", "netherlands" => "amsterdam", "new zealand" => "wellington",
    "nicaragua" => "managua", "niger" => "niamey", "nigeria" => "abuja", "north korea" => "pyongyang",
    "north macedonia" => "skopje", "norway" => "oslo", "oman" => "muscat", "pakistan" => "islamabad",
    "palau" => "ngerulmud", "panama" => "panama city", "papua new guinea" => "port moresby",
    "paraguay" => "asuncion", "peru" => "lima", "philippines" => "manila", "poland" => "warsaw",
    "portugal" => "lisbon", "qatar" => "doha", "romania" => "bucharest", "russia" => "moscow",
    "rwanda" => "kigali", "saudi arabia" => "riyadh", "senegal" => "dakar", "serbia" => "belgrade",
    "singapore" => "singapore", "slovakia" => "bratislava", "slovenia" => "ljubljana", "somalia" => "mogadishu",
    "south africa" => "pretoria", "south korea" => "seoul", "spain" => "madrid", "sri lanka" => "sri jayawardenepura kotte",
    "sudan" => "khartoum", "sweden" => "stockholm", "switzerland" => "bern", "syria" => "damascus",
    "taiwan" => "taipei", "tajikistan" => "dushanbe", "tanzania" => "dodoma", "thailand" => "bangkok",
    "togo" => "lome", "tonga" => "nukuʻalofa", "tunisia" => "tunis", "turkey" => "ankara",
    "turkmenistan" => "ashgabat", "uganda" => "kampala", "ukraine" => "kyiv", "united arab emirates" => "abu dhabi",
    "united kingdom" => "london", "united states" => "washington", "uruguay" => "montevideo",
    "uzbekistan" => "tashkent", "venezuela" => "caracas", "vietnam" => "hanoi", "yemen" => "sanaa",
    "zambia" => "lusaka", "zimbabwe" => "harare"
];




if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["country"])) {
    $country = strtolower(trim($_POST["country"])); 
    $capital = $capitals[$country] ?? "not found";
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

<?php include("footer.html"); ?>
