<Doctype html>
<html>

<title>Lab Task 1</title>

<body>

    <center>
        <h1 style=" color: Blue">AIUB</h1>
        <h2 style=" color: Blue">Registration Form</h2>
    </center>

    <h3>Complete the registration</h3>
    <table> 
    <tr>
        <td>Full Name:</td> 
        <td><input type="text"></td>
    </tr>
    <tr>
        <td>Email:</td>   
        <td> <input type="text"></td>
    </tr>
    <tr>
        <td>Password:</td>   
        <td><input type="text"></td>
    </tr>

    <tr>
    <td>Select Your gender</td>
        <td>
            <input type="radio" name="des"> Male
            <input type="Radio" name="des"> Other
        </td>
    </tr>
    
    <tr>
    <td>Language Known</td>
    <td>
        <input type="checkbox"> English
        <input type="checkbox"> Bangla 
        <input type="checkbox"> Hindi 
    </td>
    </tr>

    <tr>
    <td>Country</td>
    <td>
        <Select>
        <Option value="">---Select Option---</Option>
        <Option value="">Bangldesh</Option>
        <Option value="">Canada</Option>
        <Option value="">Australia</Option>
        </Select> 
    </td>
    </tr>

    <tr>
    <td>Date of birth</td>
    <td>
        <input type="date">
    </td>
    </tr>

    <tr>
        <td>Upload photo:</td> 
        <td> 
            <input type="file">
        </td>
    </tr>
    
    <tr>
        <td>Comment:</td>   
        <td> <textarea name="" id="" cols="40" rows ="5"> </textarea></td>
    </tr>

    <tr>
        <td></td>
        <td>
            <input type="submit" value="Registration">
        </td>
    </tr>
    
    </table>

</body>

</html>