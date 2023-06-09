<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="Order Pizza" content="It displays a pizza ordering form.">
	<meta name="robots" content="noindex, nofollow">
  <title>Pizza Order Form</title>
  <link rel="stylesheet" href="./css/style.css">
</head>
<body>
  <div class="logo">
  <img src="img/logo_pizza.jpeg" alt="Logo of my page">
   <!--logo of  page-->
</div>

  <h1>Pizza Order Form</h1>
  <form action="database.php" method="POST">
    <h2>Customer Information</h2>                                      <!-- heading 2-->
		<label for="orderId">Order ID:</label>
		<input type="text" name="orderId" id="orderId" placeholder="4 digits"><br><br>      <!--user will input its id-->

		<label for="name">Name:</label>                                                
		<input type="text" name="name" id="name"><br><br>                               <!-- user will input its name-->

		<label for="address">Address:</label>                                       
		<input type="text" name="address" id="address"><br><br>            <!--user  will input its address-->

		<label for="email">Email:</label>                                          
		<input type="text" name="email" placeholder="_@.ca" id="email"><br><br>      <!-- user will enter its email-->

    
		<h2>Pizza Toppings:</h2>                                                 <!---heading 3-->
		<label for="size">Which size would you like to order?</label><br>
		<select name="size" id="size">                                       <!--user will select the size of pizza -->
            <option value="small">Small </option>                   <!-- small size  pizza-->
            <option value="medium">Medium </option>                 <!--medium size pizza-->
            <option value="large">Large </option>                    <!--large size piZza-->
          </select><br><br>
          
		<label for="toppings">Which toppings you want to add?</label><br>       <!--user will select the toppings they would like to have-->
		<input type="checkbox" name="toppings[]" id="toppings"  value="green pepper">Green Pepper    <!--green pepper topping-->
		<input type="checkbox" name="toppings[]"  value="onion">Onion                 <!--onion toppings-->
		<input type="checkbox" name="toppings[]"  value="olive">Olive                    <!--olive toppings-->
		<input type="checkbox" name="toppings[]" value="tomato">Tomatoes                 <!--tomato toppings-->

    <label for="delivery_address">Delivery Address:</label><br>
    <textarea id="delivery_address" name="delivery_address" rows="4" cols="50" required></textarea><br><br>

    <input type="submit" value="Place Order">
  </form>
</body>
</html>
