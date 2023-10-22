<!DOCTYPE html>
<html>
<head>
    <title>Calculadora Móvil</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #f5f5f5;
        }
        #calculator {
            width: 300px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.2);
        }
        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .button-container {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 5px;
        }
        .button {
            font-size: 20px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #3498db;
            color: #fff;
            cursor: pointer;
        }
        .button:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>
    <div id="calculator">
        <h2>Calculadora Móvil</h2>
        <form method="post" action="">
            <input type="text" name="display" id="display" readonly>
            <div class="button-container">
                <button class="button" type="button" onclick="appendToDisplay('7')">7</button>
                <button class="button" type="button" onclick="appendToDisplay('8')">8</button>
                <button class="button" type="button" onclick="appendToDisplay('9')">9</button>
                <button class="button" type="button" onclick="appendToDisplay('+')">+</button>
                <button class="button" type="button" onclick="appendToDisplay('4')">4</button>
                <button class="button" type="button" onclick="appendToDisplay('5')">5</button>
                <button class="button" type="button" onclick="appendToDisplay('6')">6</button>
                <button class="button" type="button" onclick="appendToDisplay('-')">-</button>
                <button class="button" type="button" onclick="appendToDisplay('1')">1</button>
                <button class="button" type="button" onclick="appendToDisplay('2')">2</button>
                <button class="button" type="button" onclick="appendToDisplay('3')">3</button>
                <button class="button" type="button" onclick="appendToDisplay('*')">*</button>
                <button class="button" type="button" onclick="clearDisplay()">C</button>
                <button class="button" type="button" onclick="appendToDisplay('0')">0</button>
                <button class="button" type="submit">=</button>
                <button class="button" type="button" onclick="appendToDisplay('/')">/</button>
            </div>
        </form>
        <script>
            function appendToDisplay(value) {
                document.getElementById("display").value += value;
            }

            function clearDisplay() {
                document.getElementById("display").value = '';
            }
        </script>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $expression = $_POST["display"];
            $result = eval("return $expression;");
            echo "Resultado: $expression = $result";
        }
        ?>
    </div>
</body>
</html>
