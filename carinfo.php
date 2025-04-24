<html>
  <head>
    <title>Car Insurance Page</title>
    <style>
      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
      }

      body {
        font-family: 'Arial', sans-serif;
        color: #333;
        background-color: #3d3b3b;
        overflow-x: hidden;
        margin: 0;
      }

     
      .hero {
        height: 100vh;
        background: url('img for form.jpg') no-repeat center center/cover;
        display: flex;
        justify-content: flex-start; 
        align-items: center;
        text-align: left; 
        color: white;
        padding-left: 50px; 
      }

      .hero h1 {
        font-size: 60px;
        font-weight: bold;
        text-shadow: 3px 3px 5px rgba(0, 0, 0, 0.7);
        margin-bottom: 20px;
      }

      .hero p {
        font-size: 20px;
        max-width: 600px;
        line-height: 1.6;
        margin: 0 0 30px 0;
      }

      .hero a {
        text-decoration: none;
        padding: 15px 40px;
        font-size: 22px;
        background-color: #16a085;
        color: white;
        border: none;
        border-radius: 25px;
        cursor: pointer;
        box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.3);
        transition: background-color 0.3s ease;
      }

      .hero a:hover {
        background-color: #09ebbd;
      }

      
      .navbar {
        background-color: transparent;
        padding: 15px 0;
        position: sticky;
        top: 0;
        z-index: 100;
        box-shadow: none; 
      }

      .navbar ul {
        display: flex;
        justify-content: center;
        list-style-type: none;
      }

      .navbar li {
        margin: 0 20px;
      }

      .navbar a {
        color: white;
        text-decoration: none;
        font-size: 18px;
        font-weight: bold;
        padding: 10px;
        transition: color 0.3s ease;
      }

      .navbar a:hover {
        color: #09ebbd;
      }

      
      .main-content {
        display: flex;
        justify-content: space-around;
        align-items: center;
        padding: 50px 20px;
        flex-wrap: wrap;
        gap: 30px;
      }

      .card {
        background-color: white;
        border-radius: 15px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        padding: 20px;
        width: 300px;
        text-align: center;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
      }

      .card:hover {
        transform: translateY(-10px);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
      }

      .card h2 {
        font-size: 22px;
        margin-bottom: 15px;
      }

      .card p {
        font-size: 16px;
        margin-bottom: 20px;
      }

      .card button {
        background-color: #16a085;
        color: white;
        border: none;
        padding: 10px 25px;
        border-radius: 25px;
        cursor: pointer;
        transition: background-color 0.3s ease;
      }

      .card button:hover {
        background-color: #09ebbd;
      }

      
      footer {
        background-color: #333;
        color: white;
        padding: 20px 0;
        text-align: center;
        font-size: 14px;
      }
      .navbar-logo {
  font-family: 'Poppins', sans-serif;
  font-size: 24px; 
  font-weight: bold;
}

.policy {
  color: #0056D2; 
}

.plus {
  color: #37B24D; 
  font-weight: normal;
}

    </style>
  </head>
  <body>
    <div class="navbar">
      <ul>
      <span class="navbar-logo">
  <span class="policy">Policy</span><span class="plus">Plus</span>
</span>

        <li><a href="homepage.php">Home</a></li>
        <li><a href="#">Service Request</a></li>
        <li><a href="#">Claims</a></li>
        <li><a href="#">Contact Us</a></li>
      </ul>
    </div>

    <div class="hero">
      <div>
        <h1>Get the Best Car Insurance</h1>
        <p>Protect your vehicle and your peace of mind with the best coverage plans. Fast, reliable, and affordable insurance tailored to your needs.</p>
        <a href="phpage.php">Get Started</a>
      </div>
    </div>

    <div class="main-content">
      <div class="card">
        <h2>Comprehensive Coverage</h2>
        <p>Ensure your vehicle is covered against theft, accidents, and natural disasters with our comprehensive insurance plans.</p>
        <button>Learn More</button>
      </div>
      <div class="card">
        <h2>Quick Claims Processing</h2>
        <p>Our easy-to-use system ensures that your claims are processed quickly and smoothly. No more long waits!</p>
        <button>Learn More</button>
      </div>
      <div class="card">
        <h2>Affordable Plans</h2>
        <p>Choose from a variety of affordable insurance plans that fit your budget without compromising coverage.</p>
        <button>Learn More</button>
      </div>
    </div>

    <footer>
      &copy; 2024 Car Insurance. All Rights Reserved.
    </footer>
  </body>
</html>
