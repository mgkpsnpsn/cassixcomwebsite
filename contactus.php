<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/animate.css" />
    <!-- master custom CSS -->
    <link rel="stylesheet" href="css/master.css" />

    <!-- Fonts CSS -->
    <link rel="stylesheet" href="css/fontello-codes.css" />
    <link rel="stylesheet" href="css/fontello-embedded.css" />
    <link rel="stylesheet" href="css/fontello.css" />

<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
    <title>Contact Us</title>
	
	 <?php include('header.php'); ?>
	
	
	
	<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  }

* {
  box-sizing: border-box;
}

/* Style inputs */
input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

/* Style the container/contact section */
.containerbox {
  border-radius: 5px;
  background-color: #061D5E;
  padding: 10px;
}

/* Create two columns that float next to eachother */
.column {
  float: left;
  width: 50%;
  margin-top: 6px;
  padding: 20px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>



<style>
/* Testimonials */
.testimonials {
  margin: 2.5rem 0;
  width: 70%;
  display: -moz-flex;
  display: -webkit-flex;
  display: -ms-flex;
  display: flex;
  -moz-flex-wrap: wrap;
  -webkit-flex-wrap: wrap;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  -moz-align-items: -moz-stretch;
  -webkit-align-items: -webkit-stretch;
  -ms-align-items: -ms-stretch;
  align-items: stretch; }
  .testimonials > * {
    -moz-flex-shrink: 1;
    -webkit-flex-shrink: 1;
    -ms-flex-shrink: 1;
    flex-shrink: 1;
    -moz-flex-grow: 0;
    -webkit-flex-grow: 0;
    -ms-flex-grow: 0;
    flex-grow: 0; }
  .testimonials > * {
    width: 33.3333333333%; }
  .testimonials > * {
    padding: 1.5rem;
    width: calc(33.3333333333% + 1rem); }
  .testimonials > :nth-child(-n + 3) {
    padding-top: 0; }
  .testimonials > :nth-last-child(-n + 3) {
    padding-bottom: 0; }
  .testimonials > :nth-child(3n + 1) {
    padding-left: 0; }
  .testimonials > :nth-child(3n) {
    padding-right: 0; }
  .testimonials > :nth-child(3n + 1),
  .testimonials > :nth-child(3n) {
    width: calc(33.3333333333% + -0.5rem); }
  .testimonials .content {
    border-radius: 4px;
    height: 150%;
    padding: 3rem; }
    
    .testimonials .content p:last-child {
      margin: 0; }
  .testimonials > div > :last-child {
    margin-bottom: 0; }
  @media screen and (max-width: 980px) {
    .testimonials > * {
      width: 50%; }
    .testimonials > * {
      padding: 1rem;
      width: calc(33.3333333333% + 0.6666666667rem); }
    .testimonials > :nth-child(-n + 3) {
      padding-top: 1rem; }
    .testimonials > :nth-last-child(-n + 3) {
      padding-bottom: 1rem; }
    .testimonials > :nth-child(3n + 1) {
      padding-left: 1rem; }
    .testimonials > :nth-child(3n) {
      padding-right: 1rem; }
    .testimonials > :nth-child(3n + 1),
    .testimonials > :nth-child(3n) {
      padding: 1rem;
      width: calc(50% + 1rem); }
    .testimonials > * {
      padding: 1rem;
      width: calc(50% + 1rem); }
    .testimonials > :nth-child(-n + 2) {
      padding-top: 0; }
    .testimonials > :nth-last-child(-n + 2) {
      padding-bottom: 0; }
    .testimonials > :nth-child(2n + 1) {
      padding-left: 0; }
    .testimonials > :nth-child(2n) {
      padding-right: 0; }
    .testimonials > :nth-child(2n + 1),
    .testimonials > :nth-child(2n) {
      width: calc(50% + 0rem); }
    .testimonials .content {
      padding: 2rem; } }
  @media screen and (max-width: 736px) {
    .testimonials > * {
      width: 100%; }
    .testimonials > * {
      padding: 1rem;
      width: calc(33.3333333333% + 0.6666666667rem); }
    .testimonials > :nth-child(-n + 3) {
      padding-top: 1rem; }
    .testimonials > :nth-last-child(-n + 3) {
      padding-bottom: 1rem; }
    .testimonials > :nth-child(3n + 1) {
      padding-left: 1rem; }
    .testimonials > :nth-child(3n) {
      padding-right: 1rem; }
    .testimonials > :nth-child(3n + 1),
    .testimonials > :nth-child(3n) {
      padding: 1rem;
      width: calc(100% + 2rem); }
    .testimonials > * {
      padding: 1rem;
      width: calc(50% + 1rem); }
    .testimonials > :nth-child(-n + 2) {
      padding-top: 1rem; }
    .testimonials > :nth-last-child(-n + 2) {
      padding-bottom: 1rem; }
    .testimonials > :nth-child(2n + 1) {
      padding-left: 1rem; }
    .testimonials > :nth-child(2n) {
      padding-right: 1rem; }
    .testimonials > :nth-child(2n + 1),
    .testimonials > :nth-child(2n) {
      padding: 1rem;
      width: calc(100% + 2rem); }
    .testimonials > * {
      padding: 1rem;
      width: calc(100% + 2rem); }
    .testimonials > :nth-child(-n + 1) {
      padding-top: 0; }
    .testimonials > :nth-last-child(-n + 1) {
      padding-bottom: 0; }
    .testimonials > :nth-child(1n + 1) {
      padding-left: 0; }
    .testimonials > :nth-child(1n) {
      padding-right: 0; }
    .testimonials > :nth-child(1n + 1),
    .testimonials > :nth-child(1n) {
      width: calc(100% + 1rem); } }

.testimonials .content {
  background: #69BDD5;
  box-shadow: 0px 0px 4px 1px rgba(0, 0, 0, 0.025); 
   
}
  </style>


	
  </head>
  <body style="background-image: url(images/bgi.jpg); background-repeat: repeat ">
      <br> <br>
 
 <h2 style="text-align:center"> <font color="black">Contact Us</font> </h2>
  <br> <br>
<div class="containerbox">
  <div style="text-align:center">
   
   
  </div>
  <div class="row">
    <div class="column">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3805.8947408707995!2d78.50056131487737!3d17.464751388032276!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x1b100af6ff76fdd7!2sCassixcom+Enterprises+(OPC)+Private+Limited!5e0!3m2!1sen!2sin!4v1550550791838" width="900" height="650" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
    <div class="column">
      <form action="/action_page.php">
        <label for="name">Name</label>
        <input type="text" id="name" name="name" placeholder="Your Name..">
        <label for="email">E-Mail</label>
        <input type="text" id="email" name="email" placeholder="Your E-mail..">
        <label for="mobile">Mobile</label>
        <input type="text" id="mobile" name="mobile" placeholder="Your Mobile..">
        
        <label for="service">Service</label>
        <select id="service" name="service">
          <option value="digiserv">Digital Services</option>
          <option value="offmarserv">Offline Marketing Services</option>
          <option value="itserv">IT Services</option>
          <option value="softdev">Software Development</option>
          <option value="busiprocsuppo">Business Process Support</option>
          
        </select>
        
        
        <label for="message">Message</label>
        <textarea id="message" name="message" placeholder="Write Your Message.." style="height:170px"></textarea>
        <input type="submit" value="Submit">
      </form>
    </div>
  </div>
</div>
	
	
	
	<section class="wrapper">
				<div class="inner">
					
					<div class="testimonials">
						<section>
							<div class="content">
								<blockquote>
									<p>CassiXcom has been a pleasure to work with. When we had to deal with the technical support group, there were fantastic.
The fact we can be walked through step-by-step to handle any issue is fantastic. No need to bring someone in to fix something, or drive out to make a change, it's all very convenient I am very satisfied.</p>
								</blockquote>
							
							</div>
						</section>
						
						
						<section>
							<div class="content">
								<blockquote>
									<p>Cassixcom team up and running out of the box, and provides an amazing amount of data to the leadership to steer the program to meet business objectives.</p>
								</blockquote>
							
							</div>
						</section>
						<section>
							<div class="content">
								<blockquote>
									<p>Cassixcom is a pool of skilled professionals. Providing offshore services is our speciality so we have gathered the talented and experienced professional to work in team for providing ultimate web services.</p>
								</blockquote>
							
							</div>
						</section>
						
						<br><br><br><br><br><br><br><br>
							<section>
							<div class="content">
								<blockquote>
									<p>Cassixcom is a pool of skilled professionals. Providing offshore services is our speciality so we have gathered the talented and experienced professional to work in team for providing ultimate web services.</p>
								</blockquote>
							
							</div>
						</section>
						
						
						
						
					</div>
				</div>
			</section>
	
	
	
	
	
	<br><br><br><br><br><br><br>
	
	
	
	
	
	
	
	
	
<?php include('footer.php'); ?>
     

  </body>
</html>