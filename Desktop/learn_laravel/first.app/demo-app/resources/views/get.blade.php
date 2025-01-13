<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic Calculator</title>
    <link rel="stylesheet" href="css/style.css">
<style>
    /* public/css/styles.css */
body {
    font-family: Arial, sans-serif;
    text-align: center;
    background-color: #f4f4f9;
    margin: 0;
    padding: 0;
}
h1 {
    color: #333;
}
.calculator {
    background: #fff;
    border: 2px solid #ddd;
    border-radius: 8px;
    display: inline-block;
    padding: 20px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}
input[type="number"] {
    width: 80px;
    padding: 8px;
    margin: 5px;
    border: 1px solid #ddd;
    border-radius: 4px;
}
select {
    padding: 8px;
    margin: 5px;
    border: 1px solid #ddd;
    border-radius: 4px;
}
button {
    background-color: #28a745;
    color: white;
    border: none;
    padding: 10px 15px;
    border-radius: 4px;
    cursor: pointer;
}
button:hover {
    background-color: #218838;
}
p {
    margin-top: 20px;
    color: #555;
}

</style>
</head>
<body>
    <h1>Basic Calculator</h1>
    <div class="calculator">
        <form id="calcForm">
            <input type="number" id="num1" placeholder="Enter 1st number" required>
            <select id="operator">
                <option value="add">+</option>
                <option value="subtract">-</option>
                <option value="multiply">*</option>
                <option value="divide">/</option>
            </select>
            <input type="number" id="num2" placeholder="Enter 2nd number" required>
            <button type="button" onclick="calculate()">Calculate</button>
        </form>
        <h2 id="result">Result: </h2>
    </div>
    <p>This is created by Khalid Khan for basic calculation purposes.</p>
    
    </div>
    <script>
        function calculate() {
            const num1 = parseFloat(document.getElementById('num1').value);
            const num2 = parseFloat(document.getElementById('num2').value);
            const operator = document.getElementById('operator').value;
            let result;

            if (isNaN(num1) || isNaN(num2)) {
                alert("Please enter valid numbers.");
                return;
            }

            switch (operator) {
                case "add":
                    result = num1 + num2;
                    break;
                case "subtract":
                    result = num1 - num2;
                    break;
                case "multiply":
                    result = num1 * num2;
                    break;
                case "divide":
                    if (num2 === 0) {
                        alert("Cannot divide by zero!");
                        return;
                    }
                    result = num1 / num2;
                    break;
                default:
                    result = "Invalid operation";
            }

            document.getElementById('result').innerText = `Result: ${result}`;
        }
    </script>
</body>
</html>
