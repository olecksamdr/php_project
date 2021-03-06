<?php
include_once ("../php/init.php");
if (empty($user_id)) {
  exit("You are not authorize. Please <a href='/'>sign in</a> or <a href='reg'>sign up</a>");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Add new contact</title>
	<link rel="stylesheet" href="../public/css/addContact.css">
	<script src="../public/js/validation.js"></script>
</head>
<body>
	<div class="title">
  <h1>add contact</h1>
  <p>Please, enter only valid data</p>
</div>
<form action="../php/add_contact?act=add" method="post">
<div class="fancy-input">
  <div class="input-container">
    <input pattern=".{3,}" required="required" name="fname" />
    <label data-placeholder="First Name" data-placeholder-short="First"><span class="sr-only">First Name</span></label>
  </div>
</div>
<div class="fancy-input">
  <div class="input-container">
    <input min-length=".{3,}" required="required" name="lname" />
    <label data-placeholder="Last Name" data-placeholder-short="Last"><span class="sr-only">Last Name</span></label>
  </div>
</div>
<div class="fancy-input">
  <div class="input-container">
    <input pattern=".{3,}" required="required" name="email" />
    <label data-placeholder="E-mail" data-placeholder-short="mail"><span class="sr-only">E-mail</span></label>
  </div>
</div>
<div class="fancy-input">
  <div class="input-container">
    <input min-length=".{3,}" required="required" name="home" />
    <label data-placeholder="Phone" data-placeholder-short="Home"><span class="sr-only">Phone Home</span></label>
  </div>
</div>
<div class="fancy-input">
  <div class="input-container">
    <input pattern=".{3,}" required="required" name="work" />
    <label data-placeholder="Phone" data-placeholder-short="Work"><span class="sr-only">Work Phone</span></label>
  </div>
</div>
<div class="fancy-input">
  <div class="input-container">
    <input min-length=".{3,}" required="required" name="cell" />
    <label data-placeholder="Phone" data-placeholder-short="Cell"><span class="sr-only">Cell phone</span></label>
  </div>
</div>
<div>
  <div>
    <label for="bphone"></label>
    <select name="bphone">
      <option value="home" selected>Home phone</option>
      <option value="work">Work phone</option>
      <option value="cell">Cell phone</option>
    </select>
  </div>
</div>
<div class="fancy-input">
  <div class="input-container">
    <input pattern=".{3,}" required="required" name="address1" />
    <label data-placeholder="Addess" data-placeholder-short="1"><span class="sr-only">Addess 1</span></label>
  </div>
</div>
<div class="fancy-input">
  <div class="input-container">
    <input min-length=".{3,}" required="required" name="address2" />
    <label data-placeholder="Addess" data-placeholder-short="2"><span class="sr-only">Addess 2</span></label>
  </div>
</div>
<div class="fancy-input">
  <div class="input-container">
    <input pattern=".{3,}" required="required" name="city" />
    <label data-placeholder="City" data-placeholder-short="City"><span class="sr-only">City</span></label>
  </div>
</div>
<div class="fancy-input">
  <div class="input-container">
    <input min-length=".{3,}" required="required" name="state" />
    <label data-placeholder="State" data-placeholder-short="State"><span class="sr-only">State</span></label>
  </div>
</div>
<div class="fancy-input">
  <div class="input-container">
    <input pattern=".{3,}" required="required" name="zip" />
    <label data-placeholder="Zip" data-placeholder-short="Zip"><span class="sr-only">Zip</span></label>
  </div>
</div>
<div class="fancy-input">
  <div class="input-container">
    <input min-length=".{3,}" required="required" name="country" />
    <label data-placeholder="Country" data-placeholder-short="Country"><span class="sr-only">Country</span></label>
  </div>
</div>
<div class="fancy-input">
  <div class="input-container">
    <input pattern="\d{4}\.\d{2}\.\d{2}" required="required" maxlength="10" id="date" name="bday" />
    <label data-placeholder="Birthday" data-placeholder-short="yyyy.mm.dd"><span class="sr-only">Birthday</span></label>
  </div>
  <input type="submit" value="ADD"/>
</div>
</form>
</body>
</html>
