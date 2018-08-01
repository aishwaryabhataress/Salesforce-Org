<html>
<head>
</head>
<style>
	.container{
		height:950px; 
		width:400px; 
		align:center;
		background-color:white; 
		border: 2px solid white; 
		border-radius:40px;
		margin-left:auto;
		margin-right:auto;
		margin-top:50px;
		position: relative;
		display:block;	
	}
	.inner-container{
		background-color:white;
		height:150px;
		width:275px;
		margin-left:auto;
		margin-right:auto;
		margin-top:35px;
		padding-top:20px;
	}
	.credentials{
		width:100%;
		padding-top:10px;
		border-radius:10px;
		padding-bottom:10px;
	}
	.signin
	{
		color:black;
		margin-left:auto;
		margin-right:auto;
		text-align:center;
	}
</style>
<body style="background-color:#04C5F9">
	<?php
	$firstname = $lastname = $alias = $nickname = $phonenumber = $mobilenumber = $street = $city = $zipcode = $state = $country = $verification = $emailid = $timezone = $password = $repassword = "";
	?>
		<div class="container">
		<div class="signin">
			<img src="https://image3.mouthshut.com/images/imagesp/925609709s.jpg" alt="Aress Picture" style="height:90px;width:200px;">
		</div>
		<div class="inner-container">
		<form action="index.php" method="post">
			<input type="text" name="firstname" placeholder="First Name" class="credentials" value="<?php echo $firstname;?>">
			<input type="text" name="lastname" placeholder="Last Name" class="credentials" style="margin-top:5%;" value="<?php echo $lastname;?>">
			<input type="text" name="alias" placeholder="Alias" class="credentials" style="margin-top:5%;" value="<?php echo $alias;?>">
			<input type="text" name="nickname" placeholder="Nickname" class="credentials" style="margin-top:5%;" value="<?php echo $nickname;?>">
			<input type="number" name="phonenumber" placeholder="Phone Number" class="credentials" style="margin-top:5%;" value="<?php echo $phonenumber;?>">
			<input type="number" name="mobilenumber" placeholder="Mobile Number" class="credentials" style="margin-top:5%;" value="<?php echo $mobilenumber;?>">
			<input type="text" name="street" placeholder="Street" class="credentials" style="margin-top:5%;" value="<?php echo $street;?>">
			<input type="text" name="city" placeholder="City" class="credentials" style="margin-top:5%;" value="<?php echo $city;?>">
			<input type="number" name="zipcode" placeholder="Zip Code" class="credentials" style="margin-top:5%;" value="<?php echo $zipcode;?>">
			<input type="text" name="state" placeholder="State" class="credentials" style="margin-top:5%;" value="<?php echo $state;?>">
			<input type="text" name="country" placeholder="Country" class="credentials" style="margin-top:5%;" value="<?php echo $country;?>">
			<input type="text" name="verificationcode" placeholder="Verification Code" class="credentials" style="margin-top:5%;" value="<?php echo $verificationcode;?>">
			<input type="text" name="emailid" placeholder="Email Id" class="credentials" style="margin-top:5%;" value="<?php echo $emailid;?>">
			<select class="credentials" name="timezone" style="margin-top:5%;" value="timezone">
				<option value="(GMT-07:00) Pacific Daylight Time (America/Los_Angeles)">(GMT-07:00) Pacific Daylight Time (America/Los_Angeles)</option>
			</select>
			<select class="credentials" name="locale" style="margin-top:5%;" value="locale">
				<option value="English(United States)">English(United States)</option>
			</select>
			<select class="credentials" name="language" style="margin-top:5%;" value="language">
				<option value="English">English</option>
			</select>
			<select class="credentials" name="emailEncoding" style="margin-top:5%;" value="emailEncoding">
				<option value="General US & Western Europe (ISO-8859-1, ISO-LATIN-1)">General US & Western Europe (ISO-8859-1, ISO-LATIN-1)</option>
			</select>
			<input type="hidden" name="profileId" value="00e1J0000017aBdQAI">
			<input type="text" name="username" placeholder="Username" class="credentials" style="margin-top:5%;" value="<?php echo $username;?>">
			<input type="password" name="password" placeholder="Password" class="credentials" style=" margin-top:5%;" value="<?php echo $password;?>">
			<input type="password" name="repassword" placeholder="Re-enter Password" class="credentials" style=" margin-top:5%;" value="<?php echo $repassword;?>">
			
			<button type="submit" name="submit" class="credentials" style="margin-top:5%; text-align:center; background-color:#04C5F9; color:white;"> Sign Up </button>				
		</form>
		</div>
	</div>
</body>
</html>
<?php
	$db = pg_connect("host=ec2-54-235-177-183.compute-1.amazonaws.com port=5432 dbname=de5l5oldo4t2ha user=vjvypqloydobyn password=2cb5b9b74f14a101c888f22d21ef0c7b648d913a28041ed12286b5cfc03962d6");
	if (!$db) {
  		echo "An error occurred.\n";
  		exit;	
	}
	//$query = "INSERT INTO salesforce.user(FirstName, LastName, Alias, CommunityNickname, Phone, MobilePhone, Street, City, PostalCode, State, Country, Email, TimeZoneSidKey, LocaleSidKey, EmailEncodingKey, ProfileId, LanguageLocaleKey, Username, password__c) VALUES('$_POST[firstname]','$_POST[lastname]','$_POST[alias]','$_POST[nickname]','$_POST[phonenumber]', '$_POST[mobilenumber]', '$_POST[street]', '$_POST[city]', '$_POST[zipcode]', '$_POST[state]', '$_POST[country]', '$_POST[emailid]', '$_POST[timezone]', '$_POST[locale]', '$_POST[emailencoding]' , '$_POST[profileId]', '$_POST[language]', '$_POST[username]', '$_POST[password]');";
	$query = "INSERT INTO salesforce.user(FirstName, LastName, Alias, CommunityNickname, Phone, MobilePhone, Street, City, PostalCode, State, Country, Email, TimeZoneSidKey, LocaleSidKey, EmailEncodingKey, ProfileId, LanguageLocaleKey, Username, password__c) VALUES('aishwarya','bhat','ab','ab','9011523102', '9011523102', 'kothrud', 'Pune', '411038', 'Maharashtra', 'India', 'a.b@aress.com', 'GMT', 'en_US', 'UTF-8' , '00e1J0000017aBdQAI', 'en_US', 'aishwarya.bhat@aress.com', '1234567890');";
	$result= pg_query($query);
?>                                                        
