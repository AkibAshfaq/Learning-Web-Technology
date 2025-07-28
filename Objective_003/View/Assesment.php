<!DOCTYPE html>
<html>
    <body>

        <center>
            <h1>Complete the registration form</h1>
        </center>

        <table style="background-color: Blue;">

            <tr>
                <td>Name:</td>
                <td><input type="text"></td>
            </tr>

            <tr>
                <td>ID:</td>
                <td><input type="text"></td>
            </tr>

            <tr>
                <td>Age:</td>
                <td><input type="number"></td>
            </tr>

            <tr>
                <td>Department:</td>
                <td>
                    <select>
                        <option value="">---Select Option---</option>
                        <option value="CSE">CSE</option>
                        <option value="BBA">BBA</option>
                    </select>
                </td>
            </tr>

        </table>

        <script>

            function clicker(){
                alert("Registration Complete");
            }
        </script>

        <button onclick="clicker()">Submit</button>

    </body>
</html>