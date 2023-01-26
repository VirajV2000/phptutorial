<html>
<head>
<title> Form </title>
</head>
<body>

<table border="1">
    <form action="b.php" method="post">
    <tr>
        <td> Name </td>
        <td> <input type="text" name="name" > </td>
    </tr> 
    <tr>
            <td colspan="2" style="text-align: center;" >
            <input type="submit" name="submit" value="Submit"  > </td>
    </tr>
    <tr>
        <input type="checkbox" name="check_list[]" value="C/C++"><label>C/C++</label><br/>
        <input type="checkbox" name="check_list[]" value="Java"><label>Java</label><br/>
        <input type="checkbox" name="check_list[]" value="PHP"><label>PHP</label><br/>
    </tr>
    <tr>
        Vegetables <select name="veg" size="1">
        <option value="Peas">Peas</option>
        <option value="Beans">Beans</option>
        <option value="Carrots">Carrots</option>
        <option value="Cabbage">Cabbage</option>
        <option value="Broccoli">Broccoli</option>
        </select>
    </tr>
</form>
</table>

</body>
</html>