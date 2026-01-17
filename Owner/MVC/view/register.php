<!DOCTYPE html>
<html>
    <head>
        <title>
            Register
        </title>
    </head>
    <body>
        <h2>
            Register
        </h2>

        <form method="post" action="../../../Common/control/registerAction.php">
            Username: <input type="text" name="username"><br><br>
            Password: <input type="password" name="password"><br><br>

            What do you want to do?:
            <select name="role">
                <option value="">Select</option>
                <option value="owner">Post your stuff for rentals</option>
                <option value="renter">Rent from others</option>
            </select>
            <br>
            <br>
            <input type="submit" value="Register">
        </form>
    </body>
</html>