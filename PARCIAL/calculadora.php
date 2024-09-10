<!DOCTYPE html>
<html>
<head>
    
    <title>Calculadora en PHP</title>
</head>
<body>
   
    <h1>Calculadora</h1>
    

    <form action="resultado.php" method="post">
        
        //el usuario ingrese el primer numero 
        <input type="text" name="num1" placeholder="Ingrese el primer numero" required>
        
        //Lista  para que el usuario seleccione (sumar, restar, multiplicar o dividir) 
        <select name="operacion" required>
            <option value="sumar">Sumar</option>
            <option value="restar">Restar</option>
            <option value="multiplicar">Multiplicar</option>
            <option value="dividir">Dividir</option>
        </select>
        
        //ingrese el segundo numero 
        <input type="text" name="num2" placeholder="Ingrese el segundo numero" required>
        
        //boton para enviar el formulario y calcular
        <input type="submit" value="Calcular">
    </form>
</body>
</html>