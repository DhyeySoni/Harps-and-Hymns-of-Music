<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Online Payment-Page</title>
	<link rel="stylesheet" type="text/css" href="CSS/style.css">
</head>

<body style="background-color:#FFE5B4">
	<div class="container">

		<form action="send.php" style="background-color: orange; " method="post">
			<div class="row">
				<div class="col">
					<h3 class="title">
						Billing Address
					</h3>

					<div class="inputBox">
						<label for="name">
							Full Name:
						</label>
						<input type="text" name="fullName" placeholder="Enter your full name" required
							pattern="[A-Za-z\s]+">
					</div>

					<div class="inputBox">
						<label for="email">
							Email:
						</label>
						<input type="email" name="email" placeholder="Enter email address" required
							pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}">
					</div>

					<div class="inputBox">
						<label for="city">
							City:
						</label>
						<input type="text" name="city" placeholder="Enter city" required pattern="[A-Za-z\s]+">
					</div>

					<div class="flex">
						<div class="inputBox">
							<label for="state">
								State:
							</label>
							<input type="text" name="states" placeholder="Enter state" required pattern="[A-Za-z\s]+">
						</div>

						<div class="inputBox">
							<label for="zip">
								Zip Code:
							</label>
							<input type="text" name="zip" placeholder="123456" required pattern="\d{3}\s?\d{3}">
						</div>
					</div>


				</div>
				<div class="col">
					<h3 class="title">Payment</h3>

					<div class="inputBox">
						<h4 align="center"> WE ACCEPT </h4>
						<img src="IMAGE/72.png" alt="credit/debit card image" style="width:100%; height:30%;">
					</div>

					<div class="inputBox">
						<label for="cardName">
							Name On Card:
						</label>
						<input type="text" name="cardName" placeholder="Enter card name" required pattern="[A-Za-z\s]+">
					</div>

					<div class="inputBox">
						<label for="cardNum">
							Card Number:
						</label>
						<input type="text" name="cardNum" placeholder="1111-2222-3333-4444" maxlength="16" required
							pattern="\d{16}">
					</div>
					<div class="inputBox">
						<label for="">Exp Month:</label>
						<select name="expMonth" id="">
							<option value="">Choose month</option>
							<option value="January">January</option>
							<option value="February">February</option>
							<option value="March">March</option>
							<option value="April">April</option>
							<option value="May">May</option>
							<option value="June">June</option>
							<option value="July">July</option>
							<option value="August">August</option>
							<option value="September">September</option>
							<option value="October">October</option>
							<option value="November">November</option>
							<option value="December">December</option>
						</select>
					</div>


					<div class="flex">
						<div class="inputBox">
							<label for="">Exp Year:</label>
							<select name="expYear" id="">
								<option value="">Choose Year</option>
								<option value="2023">2023</option>
								<option value="2024">2024</option>
								<option value="2025">2025</option>
								<option value="2026">2026</option>
								<option value="2027">2027</option>
							</select>
						</div>
						<div class="inputBox">
							<label for="">cvv</label>
							<input type="text" name="cvv" placeholder="123" maxlength="3" required pattern="\d{3}">
						</div>

					</div>

				</div>
			</div>
			<div style="display: flex; justify-content: space-between; align-items: center; margin-top: 20px;">
				<div style="width: 30%;">
					<div class="inputBox">
						<label for="quantity">Quantity:</label>
						<input type="number" name="quantity" id="quantity" required min="1" max="99"
							style="width: 100%;">
					</div>
				</div>
				<div style="background-color: white; padding: 10px; border-radius: 8px;">
					<span id="totalPrice" style="font-size: 18px; color: black;">Price: Rs. 5000 Only</span>
				</div>
			</div>


			<div style="margin-top: 20px;">
				<button type="submit" name="Paynow" style="padding: 10px 20px; font-size: 20px; cursor: pointer;">Pay
					now</button>
			</div>
	</div>
	</form>
	<script>
		document.getElementById('quantity').addEventListener('input', function () {
			var quantity = parseInt(this.value);
			var pricePerUnit = 5000;
			var totalPrice = quantity * pricePerUnit;
			document.getElementById('totalPrice').innerText = "Total Price: Rs. " + totalPrice + " Only";
		});
	</script>


	</div>
	<script type="text/javascript" src="index.js"></script>
</body>

</html>