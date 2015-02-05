<?php
  var_dump($_GET);
  var_dump($_POST);
?>
	<html>
	<head>
		<title>My First Form</title>
	</head>
	<body>

    <h2>User Login</h2>
		<form method="POST" action="/my-first-form.php">
    <p>
        <label for="username"></label>
        <input id="username" name="username" type="text" placeholder="username">
    </p>
    <p>
        <label for="password"></label>
        <input id="password" name="password" type="password" placeholder="password">
    </p>
    <p>
        <button type="submit">Login</button>
    </p>
    
   	<h2>Compose an Email</h2>
   		
        <label for="mailing_list">
            <input type="checkbox" id ="save_sent" name ="save_sent" value ="yes" checked>
            <label for="save_sent">Save a copy to sent folder?</label>
        </label>
    	<p>
    		<input type="text" id="Reciepient" name="Recipient" placeholder="Recipient:">
   		</p>

    	<p>
    		<input type="text" id="From" name="From" placeholder="From:">
    	</p>

    	<p>
    		<input type="text" id="subject" name="subject" placeholder="Subject:">
    	</p>

    	<p>
    <h4>Compose Email Here</h4>
    		<textarea id="email_body" name="email_body" rows="15" cols="70" placeholder="Body:"></textarea>
    	</p>

    <p>
        <button type="submit">Send</button>
    </p>

    <h2>Multiple Choice Test</h2>
        <p>What is your favorite season?</p>
        <label>
               <input type="radio" id="fav_season1" name="season" value="Spring">Spring
        </label>

        <label>
               <input type="radio" id="fav_season2" name="weather" value="Summer">Summer
        </label>

        <label>
               <input type="radio" id="fav_season3" name="season" value="Fall">Fall
        </label>

        <label>
               <input type="radio" id="fav_season4" name="season" value="Winter">Winter
        </label>

    <p>What is the difference in changing the names in a radio input?</p>
    <label>
        <input type="radio" id="diff_names" name="change_names" value="1 button checked">Can only select 1 radio button
    </label>

    <input type="radio" id="diff_names" name="change_names" value="mult buttons checked">You can select more than one, if they have diff namess

    <p>What is your favorite fruit? <em>Select all that apply</em>.</p>
    <label><input type="checkbox" id="fruit1" name="fav_fruit []" value ="pineapple">Pineapples</label>

    <label><input type="checkbox" id="fruit2" name="fav_fruit []" value ="strawberry">Strawberries</label>

    <label><input type="checkbox" id="fruit3" name="fav_fruit []" value ="peach">Peaches</label>

    <label><input type="checkbox" id="fruit4" name="fav_fruit []" value ="mango">Mangoes</label>
</form>

<form>
    <h2>Select Testing</h2>
    <p>
        <label for="animals">Do you like animals?</label>
        <select id="animals" name="animals">
            <option>Yes</option>
            <option Selected>No</option>
    </p>
</select>

    <p>
        <label for="color">Select your favorite color: </label>
        <select id="color" name="color">
            <option>Red</option>
            <option>Blue</option>
            <option>Green</option>
            <option>Purple</option>
        </select>
    </p>
</form>
	</body>