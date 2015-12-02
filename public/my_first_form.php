<?php
  var_dump($_GET);
  var_dump($_POST);
?>

<!DOCTYPE html>
<html>
	<head>	
		<title>My FIrst Form</title>
		<meta charset="utf-8">
			My First Form
		</title>
	<head>

	<form method="POST" action="/my_first_form.php">

		<h1>User Login</h1>

		<p>
			<label for="username"> Username </label>
			<input  id="username" name="username" type="text" placeholder="Alpha-Numeric">
		</p>

		<p>
			<lable for="password"> Password </label>
			<input  id="password" name="password" type="password" placeholder="Atleast 6 Characters">
		</p>
		
		<p>
				<!-- <input type="submit" value="Login"> -->
				<button>Login</button>
		</p>

		<p>	
			<textarea id="review" name="review"
			rows="5" cols="40" cols="40">Comments</textarea>
		</p 

		<p></p>
		<p></p>

		<h1> Compose Email</h1>

		<p>
			<label for="Reciepent"> Reciepent </label>
			<input  id="Reciepent" name="Reciepent" type="text" placeholder="example@gmail.com">
		</p>

		<p>
			<label for="Sender"> Sender </label>
			<input  id="Sender" name="Sender" type="text" placeholder="example@gmail.com">
		</p>

		<p>
			<lable for="Subject"> Subject </label>
			<input  id="Subject" name="Subject" type="text" placeholder="Subject">
		</p>
		

		<p>
			<textarea id="Body" name="Body"
			rows="5" cols="40">email body</textarea>
		</p>
		<p>
				<!-- <input type="submit" value="Login"> -->
				<button>SEND</button>
		</p>

			<input type="checkbox" id="save_to_send_box" value="" checked="checked" / name="save_to_send_box[]">
			<label for="save_to_send_box">Would You Like To Save To Send Box</label>		

		<h1>Multiple Choice Test</h1>

		<p>Phone Number You Prefer To Be Contacted At</p>
			<lable>
				<input type="checkbox"  id="checkbox-Home" name="phone_number[]" value="checkbox-Home">
				Home
			</lable>
			<label>
				<input type="checkbox" id="checkbox-Work" name="phone_number[]" value="checkbox-Work">
				Work
				</label>
			<label>
				<input type="checkbox" id="checkbox-Mobile" name="phone_number[]" value="checkbox-Mobile">
				Mobile
				</label>
			<label>
				<input type="checkbox" id="checkbox--Alt" name="phone_number[]" value="checkbox-Alt">
				Alt
				</label>

		<p>Days of the week you prefer to be contacted</p>
			<lable>
				<input type="checkbox"  name="day[]" value="Monday">
				Monday
			</lable>
			<label>
				<input type="checkbox" name="day[]" value="Tuesday">
				Tuesday
				</label>
			<label>
				<input type="checkbox" name="day[]" value="Wednesday">
				Wednesday
				</label>
			<label>
				<input type="checkbox" name="day[]" value="Thursday">
				Thursday
				</label>
			<label>
				<input type="checkbox" name="day[]" value="Friday">
				Friday
				</label>

			<p>Which Hours Do You Prefer To Be Contacted</p>
			<lable>
				<input type="radio"  name="preferred_time" value="0700-0900">
				0700-0900
			</lable>
			<label>
				<input type="radio" name="preferred_time" value="1000-1200">
				1000-1200
				</label>
			<label>
				<input type="radio" name="preferred_time" value="1300-1500">
				1300-1500
				</label>
			<label>
				<input type="radio" name="preferred_time" value="1600-1800">
				1600-1800
				</label>

			<p></p>
			<p></p>

			<h1>Select Testing</h1>

			<label for="monthly_updates">Would you like to receive monthly updates: </label>
			<select id="monthly_updates" name="monthly_updates">
				<option>Yes</option>
				<option selected>No</option>
			</select>

			<p></p>
			<p></p>

			<label>What Is Your Favorite Color</label>
			<select id="favorite_color" name="favorite_color">
				<option value="red">RED</option>
				<option value="blue">BLUE</option>
				<option value="yellow">YELLOW</option>
				<option value="black">BLACK</option>
			</select>

			<p></p>
			<p></p>


			<label> What Is Your Favorite Number </label>
			<select id="favorite_number" name="favorite_number[]" multiple>
				<option value="one">one</option>
				<option value="two">two</option>
				<option value="three">three</option>
				<option value="four">four</option>
			</select>



			<p></p>
		
			<button type="submit">SUBMIT!</button>



	</form>
	



