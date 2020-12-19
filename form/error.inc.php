<style type="text/css">

* {
  margin: 0;
  padding: 0;
  border: 0;
}

header {
  width: 100%;
  overflow: hidden;
  background: white;
}

header nav ul li {
  display: inline-block;
}

header nav {
  margin: 20px;
  padding: 10px;
}

header nav a {
  color: black;
  font-size: 22px;
  text-decoration: none;
  margin: 50px;
  font-weight: bold;
  font-family: 'avenir next condensed', sans-serif;
}

header nav a:hover {
  color: rgb(119, 62, 36);
}

.logo {
  float: left;
  padding-left: 50px;
  padding-top: 10px;
}

.container {
  text-align: center;
  padding-top: 20px;
  height: 60px;
}

.default {
  text-align: center;
  display: block;
  line-height: 30px;
  padding: 30px;
  font-size: 18px;
  font-family: 'avenir', serif;
}

</style>


<header>
  <nav>
    <div class="logo">
        <img src="images/puravidalogo-black.png" alt="PURA VIDA" width="150" height="50"/>
    </div>
    <div class="container">
        <ul>
          <li><a href="index.html">HOME</a></li>
          <li><a href="about.html">ABOUT US</a></li>
          <li><a href="menu.html">MENU</a></li>
          <li><a href="shop.html">SHOP</a></li>
          <li><a href="contactus.html">CONTACT US</a></li>
        </ul>
    </div>
</header>

<div class= "default">
	<p>Missing fields<p>
	<p>Sorry, you have not completed all of the required fields.</p>
	<p>Please hit <a href="contactus.html" onClick="history.go(-1)">back</a> and complete the following required fields.</p>

	<ul>
		<?php
		for($i=0; $i<count($this->missing_required_fields); $i++){
		echo "<li>" . $this->missing_required_fields[$i]['title'] . "</li>\n";
	}
	?>
	</ul>

	<p><strong><a href="contactus.html" onClick="history.go(-1)">Back to form</a></strong></p>
<//div>
