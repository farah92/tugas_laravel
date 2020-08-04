<h1>Buat Account Baru!</h1>
<form action="/Register/proses" method="post">
    <b>Sign Up Form</b>
    <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
    <p>First name:</p>
    <input type="text" name="nama_depan">
    <p>Last name:</p>
    <input type="text" name="nama_belakang">
    <p>Gender</p>
    <input type="radio" id="male" name="gender" value="male">
    <label for="male">Male</label><br>
    <input type="radio" id="female" name="gender" value="female">
    <label for="female">Female</label><br>
    <input type="radio" id="other" name="gender" value="other">
    <label for="other">Other</label>

    <p>Nationally</p>
    <select>
        <option value="Indonesian">Indonesian</option>
        <option value="Singapore">Singapore</option>
        <option value="Malaysian">Malaysian</option>
        <option value="Australian">Australian</option>
    </select>
    <p>Language Spoken</p>
    <input type="checkbox" id="indonesia" name="language" value="indonesia">
    <label for="Indonesian">Indonesia</label><br>
    <input type="checkbox" id="english" name="language" value="english">
    <label for="english">English</label><br>
    <input type="checkbox" id="others" name="language" value="others">
    <label for="others">Others</label>
    <p>Bio</p>
    <textarea cols="30" rows="7"></textarea>
    <br/>
    <input type="submit" value="Sign Up" name="sign_up">
</form>