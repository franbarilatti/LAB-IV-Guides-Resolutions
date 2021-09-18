<?php
    require_once "Config/Autoload.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="Styles/baseStyle.css">
    <title>Formulario</title>
</head>
<body>
    <form action="view.php" method= "post">
        <h1>Contact form</h1>
        <fieldset>
            <legend><span class="number">1</span><span>Your basic info</span></legend>
            <label for="name">Name</label>
            <input type="text" id="name" name="fullName" required>
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
            <label for="birth">Birthday</label>
            <input type="date" id="birth" name="birthday">
            <label>Sex: </label>
            <input type="radio" name="sex" id="male">
            <label for="male">Male</label>
            <input type="radio" name="sex" id="famale">
            <label for="famale">Famale</label>
        </fieldset>
        <fieldset>
            <legend><span class="number">2</span><span>Your profile</span></legend>
            <label for="bio">About you</label>
            <textarea name="aboutYou" id="bio"></textarea>
            <label for="role">Role</label>
            <select name="role" id="role">
                <optgroup label="web">
                    <option value="frontend_developer">Front-End Developer</option>
                    <option value="backend_developer">Back-End Developer</option>
                    <option value="python_developer">Python Developer</option>
                    <option value="qa_automation">QA Automation</option>
                    <option value="web_designer">Web Designer</option>
                    <option value="php_developer">PHP Developer</option>
                </optgroup>
                <optgroup label="Mobile">
                    <option value="android_dev">Android Developer</option>
                    <option value="ios_dev">IOS Developer</option>
                    <option value="mobile_designer">Mobile Designer</option>
                </optgroup>
            </select>
            <label>Interest</label>
            <br>
            <input type="checkbox" id="database" name="interest_database">
            <label for="database">Data Base</label>
            <input type="checkbox" id="desing" name="interest_desing">
            <label for="desing">Design Base</label>
            <input type="checkbox" id="business" name="interest_business">
            <label for="business">Business</label>
            <input type="checkbox" id="unittest" name="interest_unittest">
            <label for="unittest">Unit Test</label>
            <br>
            <input type="checkbox" id="clouddevelopment" name="interest_clouddevelopment">
            <label for="clouddevelopment">Cloud Development</label>
            <input type="checkbox" id="webdevelopment" name="interest_webdevelopment">
            <label for="webdevelopment">Web Development</label>
        </fieldset>
        <button type="submit">Send</button>
        <button type="reset">Reset</button>
    </form>
    
    
</body>
</html>