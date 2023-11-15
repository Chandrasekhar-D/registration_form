<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <h1 class="heading">
        Registration Form
    </h1>
    <div class="container">
        <form action="connect.php" method="post">
            <table class="columnNames">
                <tr >
                    <td > <d> Name </d> </td> 
                    <td><input class="inputs" type="text" name="name" placeholder="Enter your name"></td>
                </tr>
                <tr >
                    <td> <d> Email </d> </td> 
                    <td><input class="inputs" type="email" name="email" placeholder="Enter your email"></td>
                </tr>

                <tr >  
                    <td class=""> <d> Gender </d> </td>
                    <td>  
                        <input class="gender1" type="radio" name="gender" value="m"/>Male   
                        <input class="gender1" type="radio" name="gender" value="f"/>Female 
                    </td>  
                </tr>
                <tr >
                    <td> <d> Mobile </d> </td> 
                    <td><input class="inputs" type="text" name="mobile" placeholder="Enter your mobile number"></td>
                </tr>
                <tr  >
                    <td> <d> City </d> </td> 
                    <td><input class="inputs" type="text" name="city" placeholder="Enter your city name"></td>
                </tr>
                <tr >
                    <td> <d> State </d> </td> 
                    <td><input class="inputs" type="text" name="state" placeholder="Enter your state name"></td>
                </tr>
                <tr>
                    <td> <d> Country </d> </td> 
                    <td><input class="inputs" type="text" name="country" placeholder="Enter your country name"></td>
                </tr>
                <tr >  
                    <td> <d> Pin Code </d> </td> 
                    <td><input class="inputs" type="text" name="pinCode" placeholder="Enter your pin code name"></td>
                </tr>
                <tr >
                    <td> <d> Password </d> </td> 
                    <td><input class="inputs" type="password" name="password" placeholder="Enter your password name"></td>
                </tr>

            </table>
            
            
            <div class="btn">
                <button class="btnIn" type="submit" >Submit</button>
            </div>
        </form>
    </div>  
            

</body>

</html>
