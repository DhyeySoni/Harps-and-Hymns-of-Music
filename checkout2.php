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

		<form action="send2.php" style="background-color: orange; " method="post">
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
						<label for="pass">
							Email:
						</label>
						<input type="password" name="pass" placeholder="Enter Password" required
							pattern="[a-zA-Z0-9._%+-]{8,}">
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
			<div style="text-align: center; margin-top: 20px;">
				<div style="background-color: black; padding: 10px; border-radius: 8px;">
					<span id="totalPrice" style="font-size: 18px; color: white;">Price is : Rs. 10000 Only</span>
				</div>
				<div style="margin-top: 20px;">
					<button type="submit" name="Paynow"
						style="padding: 10px 20px; font-size: 20px; cursor: pointer;">Pay now</button>
				</div>
			</div>
		</form>


	</div>
	<script type="text/javascript" src="index.js"></script>
</body>

</html>