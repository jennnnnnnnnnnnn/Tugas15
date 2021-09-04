<!DOCTYPE html>
<!DOCTYPE html>
<html >
<head>
	<title>Tugas Harian 12</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="index.css">
</head>
<body>

<h1>Buat Account Baru&#33;</h1>
<h3>Sign Up Form</h3>
	<form action="sent" method="POST">
            @csrf
			<p>
				<label style="font-size:18px">First name&#58;</label><br><br>
				<input type="text" name="firstname" />
			</p>
			<p>
				<label style="font-size:18px">Last name&#58;</label><br><br>
				<input type="text" name="lastname" />
			</p>
			<p>
				<label style="font-size:18px">Gender&#58;</label><br><br>
				<input type='radio' name='jenis_kelamin' value='pria'>Male<br>
				<input type='radio' name='jenis_kelamin' value='perempuan' />Female<br>
				<input type='radio' name='jenis_kelamin' value='perempuan' />Other<br>
			</p>
			<p>
			<label style="font-size:18px">Nationality&#58;</label><br><br>
			<select>
				<option nama="nationality" value="Indonesian">Indonesian</option>
				<option nama="nationality" value="Korean">Korean</option>
				<option nama="nationality" value="Japanese">Japanese</option>
				<option nama="nationality" value="Chinnese">Chinnese</option>
			</select>
			</p>
			<p>
				<label style="font-size:18px">Language Spoken&#58;</label><br><br>
				<input type='checkbox' name='bahasa' value='indo'>Bahasa Indonesia<br>
				<input type='checkbox' name='bahasa' value='inggris' />English<br>
				<input type='checkbox' name='bahasa' value='lain' />Other<br>
			</p>
			<p>
				<label style="font-size:18px">Bio&#58;</label><br><br>
				<textarea cols="30" rows="10" type="text" name=""></textarea><br>
				<input type="submit" value="Sign Up">
			</p>
			
	</form>
</body>
</html>