
<html>
  <title>Car Insurance Page</title>
  <head>
  <style>
    
    body {
      
      font-family: 'Arial', sans-serif;
      background-color: rgb(0, 0, 0);
      color: white;
      overflow-x: hidden;
      
    }

    
    .navbar {
      margin-top: 1%;
      width: 100%;
      background:transparent;
      gap: 3%;
      padding: 15px 0;
      display: flex;
      margin-left:8%;
      
    }
   

    .navbar a {
      color: white;
      text-decoration: none;
      padding: 10px 20px;
      font-size: 16px;
      font-weight: bold;
      border-radius: 20px;
      transition: all 0.6s ease;
      
    }

    .navbar a:hover {
      background: linear-gradient(to right, #09ebbd, #1abc9c);
      color: black;
      transform: scale(1.1);
    }

  
    .mainpage {
      width: 120%;
      height: 120%;
      display: flex;
      
      gap: 20px;
      flex-wrap: wrap;
     background-image: url("bike info.jpg");
     background-size:  cover;
      
     
    }

    
    .infopage {
      width: 30%;
      height: 10%;
      margin-left: 8%;
      margin-top: 5%;
      padding: 20px;
      border-radius: 20px;
      background-color: transparent;
      
      display: flex;
      flex-direction: column;
      align-items: center;
      
    }
    .infopage p{
        font-family: 'Lucida Sans';
        font-weight: bold;
        margin-top: 30px;
        
        
    }

 


    button {
      width: 229px;
      padding: 10px 30px;
      font-size: 18px;
      color: white;
      background: linear-gradient(to right, #0d6251, #16a085);
      border: 1px solid white;
      border-radius: 25px;
      cursor: pointer;
     
      transition: all 0.3s ease;
      margin-top: 16%;
      margin-right: 15%;
     
    }

    button:hover {
      background: linear-gradient(to right, #09ebbd, #1abc9c);
      color: black;
      transform: translateY(-3px) scale(1.05);
      box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.7);
    }

    
    footer {
        width: 100%;
      text-align: center;
      padding: 15px;
      margin-top: 2px;
    
      background-color: #15574a;
      color: black;
      font-size: 14px;
    }

    
    @keyframes fadeIn {
      from {
        opacity: 0;
        transform: scale(0.9);
      }
      to {
        opacity: 1;
        transform: scale(1);
      }
    }

    @keyframes slideIn {
      from {
        opacity: 0;
        transform: translateX(50px);
      }
      to {
        opacity: 1;
        transform: translateX(0);
      }
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
  <span class="navbar-logo">
  <span class="policy">Policy</span><span class="plus">Plus</span>
</span>

    <a href="homepage.php">Home</a>
    <a href="#policyholder">Policyholder Registration</a>
    <a href="#agent">Agent Registration</a>
    <a href="#service">Service Request</a>
    <a href="#claim">Claims</a>
    <a href="#contact">Contact Us</a>
  </div>

  <div class="mainpage">
    <div class="infopage">
        <h1>Bike Insurance Overview</h1>
        <p>Bike insurance protects you financially against accidents, theft, and damages to your bike. It is mandatory by law and ensures legal compliance. There are two main types:
             Third-Party Insurance (covers damages to others) and Comprehensive Insurance (covers both third-party and own bike damages). Benefits include financial security,<br> accident protection, and coverage for natural disasters. It also compensates for bike theft.<br> Always renew your policy on time to stay protected!</p>
           <a href="phpage.php"><button onclick="phpage.html"> Register Now :&#128073</button></a>
    </div>

    
  </div>

  <footer>
    &copy; 2024 Car Insurance. All Rights Reserved.
  </footer>
</body>
</html>
