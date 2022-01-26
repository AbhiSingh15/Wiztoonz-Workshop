<!DOCTYPE html>
<html>
<body>

<h1>Wiztoonz cyber alert workshop</h1>

<form action="Actionpage.php" method="post">
    <p>
         First Name: 
        <input type="text" name="first Name" size="20">
    </p>

    <p>
        Last Name:
        <input type="texr" name="last Name" size="20">
    </p>

    <p>
        Email ID:
        <input type="text" name="email ID" size="20">
    </p>

    <p>
        Password:
        <input type="password" name="password" size="20">
    </p>

    <p>
        Phone Number:
        <input type="text" name="phone Number" size="20" maxlength="10">
    </p>

    <p>
        Select Gender:
    </p>

    <p>
        
        <input type="radio" id="Male" name="fav_language" value="Male">
        <label for="male">Male</label><br>
       
        <input type="radio" id="Female" name="fav_language" value="Female">
        <label for="female">Female</label><br>

    </p>
    
    <p>
   <label for="state">Select State:</label>
   <select name="state" id="state">
                <option value="-choose-">-choose-</option>
                <option value="Andhra Pradesh">Andhra Pradesh</option>
                <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                <option value="Assam">Assam</option>
                <option value="Bihar">Bihar</option>
                <option value="Chandigarh">Chandigarh</option>
                <option value="Chhattisgarh">Chhattisgarh</option>
                <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                <option value="Daman and Diu">Daman and Diu</option>
                <option value="Delhi">Delhi</option>
                <option value="Lakshadweep">Lakshadweep</option>
                <option value="Puducherry">Puducherry</option>
                <option value="Goa">Goa</option>
                <option value="Gujarat">Gujarat</option>
                <option value="Haryana">Haryana</option>
                <option value="Himachal Pradesh">Himachal Pradesh</option>
                <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                <option value="Jharkhand">Jharkhand</option>
                <option value="Karnataka">Karnataka</option>
                <option value="Kerala">Kerala</option>
                <option value="Madhya Pradesh">Madhya Pradesh</option>
                <option value="Maharashtra">Maharashtra</option>
                <option value="Manipur">Manipur</option>
                <option value="Meghalaya">Meghalaya</option>
                <option value="Mizoram">Mizoram</option>
                <option value="Nagaland">Nagaland</option>
                <option value="Odisha">Odisha</option>
                <option value="Punjab">Punjab</option>
                <option value="Rajasthan">Rajasthan</option>
                <option value="Sikkim">Sikkim</option>
                <option value="Tamil Nadu">Tamil Nadu</option>
                <option value="Telangana">Telangana</option>
                <option value="Tripura">Tripura</option>
                <option value="Uttar Pradesh">Uttar Pradesh</option>
                <option value="Uttarakhand">Uttarakhand</option>
                <option value="West Bengal">West Bengal</option>
  </select>
  <br><br>
  </p>

    <p>
        <textarea id="Wiztoonz" name="Wiztoonz" rows="5" cols="40"></textarea>
    </p>

    <p>
        <input type="submit" value="Submit">
        <input type="reset" value="Reset">
    </p>
  
</form>
</body>
</html>