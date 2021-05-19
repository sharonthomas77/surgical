<!DOCTYPE html>
<html>
<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
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
</head>
<nav class="navbar navbar-expand-lg navbar-light" style="background:rgb(255, 255, 255)" > 
    <div class="container-fluid">
    <img src="/images\a.jpg" height="75" alt="" ><br>
    <br>
    <a class="navbar-brand" href="/" style="font-size:larger; font-family:sans-serif; font-weight: 600;"> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Home</a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
 <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      
    <li class="nav-item">
      <a class="nav-link active" aria-current="page" href="/cau" style="font-size:larger; font-family:sans-serif;font-weight: 600;">&nbsp&nbsp&nbsp&nbspAbout Us</a>
    </li>
    <!--<li class="nav-item">
        <a class="nav-link active" aria-current="page" href="offers.php" style="font-size:larger; font-family:sans-serif;font-weight: 600;">Management</a>
      </li>-->
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="/ccontact" style="font-size:larger; font-family:sans-serif;font-weight: 600;">&nbsp&nbsp&nbsp&nbspContact</a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="/log">Login</a>
            </li>
           
        </ul>
        
    
  </div>
</div>
</nav>


<body>
<br>
<h3><center>Contact Form</center></h3>
<br>
<div class="container" style="background:rgb(172, 56, 56)">
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

</body>
</html>
