@extends("themeuser") @section("content")

<title>United-Contact Us</title>

<style>
body {  background-image: url("https://image.freepik.com/free-vector/modern-blue-medical-background_1055-6880.jpg");
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
  
  
  
  font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}


input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>

<br>
<h3><center>Contact Form</center></h3>
<br>
<div class="container" >
  <form action="/action_page.php">
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

    <label for="country">State</label>
    <select id="country" name="country">
      <option value="australia">Kerala</option>
      <option value="canada">Tamil Nadu</option>
      <option value="usa">Andra Pradesh</option>
      <option value="usa">Odisha</option>
      <option value="usa">Maharashtra</option>
      <option value="usa">Asssam</option>
      <option value="usa">Punjab</option>

    </select>

    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" value="Submit">
</div>

    </form>    
     @endsection

