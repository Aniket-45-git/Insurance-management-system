<html>
<head>

    <title>Insurance Management System</title>
    <style>

                
        .mainndiv{
            width: 100%;
            height: 100%;
            background-image: url("imaes/150962.jpg");
            background-size: cover;
        }
        .navbar {
                    background-color: transparent;
                    padding: 15px;
                    display: flex;
                    gap:1.5%;
                   margin-left:29%;                  
                    align-items: center;
                    
                    
                    

                    
                }
                .navbar a {
                    color: white;
                    font-weight: bold;
                    text-decoration: none;
                    padding: 10px 15px;
                  
                    font-size: 15px;
                    transition: all 0.3s ease;
                }
                .navbar a:hover {
                    background: linear-gradient(to right, #09ebbd, #1abc9c);
                    color: black;
                    border-radius: 35px;
                    transform: scale(1.1);
                    backdrop-filter: blur( 11px );
                   -webkit-backdrop-filter: blur( 14px );
                }
                .hero {
                    height: 400px;
                    background: transparent;
                    background-size: cover;
                    background-position: center;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    color: white;
                    text-align: center;
                    margin-top: -4%;;
                }
                .hero h1 {
                    font-size: 48px;
                    margin-bottom: 20px;
                }
                .hero p {
                    font-size: 18px;
                    margin-bottom: 30px;
                }
                .hero a {
                    text-decoration: none;
                    background-color: #4CAF50;
                    color: white;
                    padding: 12px 20px;
                    font-size: 18px;
                    border-radius: 5px;
                    transition: background-color 0.3s ease;
                }
                .hero a:hover {
                    background-color: #45a049;
                }
               
                .main-content {
                    display:flex;
                    
                    
                }
                
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: black;
}

.main-content {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap:8%;
    padding: 20px;
}


.card {
    background: #ffffffc9;
    border-radius: 3px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    overflow: hidden;
    text-align: center;
    transition: transform 0.3s, box-shadow 0.3s;
    width: 300px;
}

.card:hover {
    transform: translateY(-5px);
    box-shadow: 0 3px 7px 0px rgb(165, 164, 164);
}


.card img {
    width: 100%;
    height: 180px;
    object-fit: cover;
}

.card h3 {
    color: #333;
    font-size: 1.5em;
    margin: 15px 0;
}

.card p {
    color: #555;
    font-size: 1em;
    margin: 10px 20px;
    line-height: 1.5;
}


.card a {
    display: inline-block;
    margin: 15px 0 20px;
    padding: 10px 20px;
    background-color: #4CAF50;
    color: black;
    text-decoration: none;
    border-radius: 5px;
    font-size: 1em;
    transition: background-color 0.3s;
}

.card a:hover {
    background-color: #0056b3;
}


@media (max-width: 768px) {
    .main-content {
        flex-direction: column;
        align-items: center;
    }
}


                #agent{
                    width: 25%;
                    height: 10%;
                }
        
               
.footer {
    background: linear-gradient(135deg, #0f2027, #203a43, #2c5364); 
    color: #ffffff;
    padding: 2.5rem 1rem;
    font-family: 'Arial', sans-serif;
    font-size: 1rem;
}


.footer-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    max-width: 1200px;
    margin: 0 auto;
}


.footer .section {
    flex: 1 1 calc(33.333% - 2rem);
    margin: 1rem;
}

.footer .section h4 {
    font-size: 1.4rem;
    margin-bottom: 1rem;
    color: #ffd700; 
    text-transform: uppercase;
    letter-spacing: 2px;
    position: relative;
}

.footer .section h4::after {
    content: '';
    display: block;
    width: 50px;
    height: 3px;
    background-color: #ffd700;
    margin-top: 5px;
}


.about-us p {
    line-height: 1.6;
    color: rgba(255, 255, 255, 0.9);
}


.gallery-images {
    display: flex;
    gap: 0.7rem;
    justify-content: center;
    flex-wrap: wrap;
}

.gallery-images img {
    height: 80px;
    width: auto;
    border-radius: 8px;
    transition: transform 0.4s ease, box-shadow 0.4s ease;
    border: 2px solid rgba(255, 255, 255, 0.2);
}

.gallery-images img:hover {
    transform: scale(1.1);
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.4);
    border-color: #ffd700;
}


.contact-us p {
    margin-bottom: 1rem;
    color: rgba(255, 255, 255, 0.9);
}

.contact-us a {
    color: #ffd700;
    text-decoration: none;
    font-weight: bold;
}

.contact-us a:hover {
    text-decoration: underline;
}


.social-icons img {
    height: 36px;
    margin: 0 8px;
    transition: transform 0.3s ease, filter 0.3s ease;
    filter: grayscale(100%);
}

.social-icons img:hover {
    transform: scale(1.2);
    filter: grayscale(0%);
}


.bottom-bar {
    text-align: center;
    margin-top: 2rem;
    padding-top: 1rem;
    border-top: 1px solid rgba(255, 255, 255, 0.3);
    font-size: 0.9rem;
    color: rgba(255, 255, 255, 0.8);
}


@media (max-width: 768px) {
    .footer-container {
        flex-direction: column;
        align-items: center;
        text-align: center;
    }

    .footer .section {
        flex: 1 1 100%;
        margin: 1rem 0;
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
        
            
            
               
        <div class="mainndiv">
            <div class="navbar">
            <span class="navbar-logo">
  <span class="policy">Policy</span><span class="plus">Plus</span>
</span>
                <a href="homepage.php">Home</a>
                <a href="serviceRequest.php">Service Request</a>
                
                <a href="#contact">Contact Us</a>
            </div>
    
            <div class="hero">
                <div>
                    <h1>Welcome to the Insurance Management System</h1>
                    <p>Manage your policies, agents, claims, and much more with ease.</p>
                    <a href="#services">Explore Services</a>
                    
                </div>
            </div>
        </div>
        
            
            <div class="main-content" id="services">
                
                <div class="card" id="policyholder">
                    <img src="https://imgs.search.brave.com/NEYUrEqx7xZNkGlDs3EO7uGNSDh_eUI8orUDkVG5Qmw/rs:fit:500:0:0:0/g:ce/aHR0cHM6Ly90My5m/dGNkbi5uZXQvanBn/LzA4LzA1LzQ4LzUw/LzM2MF9GXzgwNTQ4/NTA3NV9zR1NzcnQ3/dVJJR2RUUkhpa1Ft/dEtRY1B6dm52T3p4/WC5qcGc" alt="Policyholder Registration">
                    <h3>Car Insurance</h3>
                    <p>Register new car insurance  and manage their information efficiently.</p>
                    <a href="carinfo.php">Register Now</a>
                </div>
        
                
                <div class="card" id="agent">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQF-NuWAiSJxtpt0VyeD0peCyR4w2CO8DhO98GZ80uT5KcbLEamSJoeeilg0Rudqk3Iru8&usqp=CAU" alt="Agent Registration">
                    <h3>Bike Insurance </h3>
                    <p>Register new Bike insurance  and manage their information efficiently.</p>
                    <a href="C:\Users\LAPTOP_GURU\Desktop\project\Bikeinfopage.php">Register Now</a>
                </div>
        
                
                <div class="card" id="service">
                    <img src="https://imgs.search.brave.com/ssc6l3KZNCeQnuQhu3TTH0TT0JYv2Yi2Q1V6OUePH6g/rs:fit:500:0:0:0/g:ce/aHR0cHM6Ly90YXRh/dHJ1Y2tzLnRhdGFt/b3RvcnMuY29tL2lt/YWdlcy90YXRhLWhl/YXZ5LW1lZGl1bS10/cnVja3MvdGF0YS10/aXBwZXJzL3RhdGEt/c2lnbmEtMjgyMy10/ay9pbWFnZS1nYWxs/ZXJ5L1NpZ25hLTI4/MjMtVEstMS5qcGc" alt="Service Request">
                    <h3>Truck Insurance </h3>
                    <p>Register new Truck insurance  and manage their information efficiently.</p>
                    <a href="phpage.php">Register Now</a>
                </div>
        
                
                
                
            </div> 
            </div>
            

        </head>
        <body>
       
        <footer class="footer">
            <div class="footer-container">
               
                <div class="section about-us">
                    <h4>About Us</h4>
                    <p>
                        Our Insurance Management System helps manage policies, claims, and agents seamlessly. Delivering efficiency and reliability to ensure you are always covered.
                    </p>
                </div>
        
                
                <div class="section gallery">
                    <h4>Our Services</h4>
                    <div class="gallery-images">
                        <img src="https://imgs.search.brave.com/NEYUrEqx7xZNkGlDs3EO7uGNSDh_eUI8orUDkVG5Qmw/rs:fit:500:0:0:0/g:ce/aHR0cHM6Ly90My5m/dGNkbi5uZXQvanBn/LzA4LzA1LzQ4LzUw/LzM2MF9GXzgwNTQ4/NTA3NV9zR1NzcnQ3/dVJJR2RUUkhpa1Ft/dEtRY1B6dm52T3p4/WC5qcGc" alt="Car Insurance">
                        <img src="https://imgs.search.brave.com/8yCXRQHmHQLcbIwRxTip8Go18l5jSAGmv0SqtPJj-LM/rs:fit:500:0:0:0/g:ce/aHR0cHM6Ly93YWxs/cGFwZXIuZm9yZnVu/LmNvbS9mZXRjaC9k/ZC9kZDk3YTEyYzc3/NzBlOWIyYTIwYmJj/YjE2ZTM2NzZmYi5q/cGVn" alt="Bike Insurance">
                        <img src="https://imgs.search.brave.com/ssc6l3KZNCeQnuQhu3TTH0TT0JYv2Yi2Q1V6OUePH6g/rs:fit:500:0:0:0/g:ce/aHR0cHM6Ly90YXRh/dHJ1Y2tzLnRhdGFt/b3RvcnMuY29tL2lt/YWdlcy90YXRhLWhl/YXZ5LW1lZGl1bS10/cnVja3MvdGF0YS10/aXBwZXJzL3RhdGEt/c2lnbmEtMjgyMy10/ay9pbWFnZS1nYWxs/ZXJ5L1NpZ25hLTI4/MjMtVEstMS5qcGc" alt="Truck Insurance">
                       
                    </div>
                </div>
        
                
                <div class="section contact-us">
                    <h4>Contact Us</h4>
                    <p>
                        Address: 1234 Insurance Ave, Business City, Country<br>
                        Phone: +1 234 567 890<br>
                        Email: <a href="mailto:info@insurance.com">info@insurance.com</a>
                    </p>
                    <div class="social-icons">
                        <a href="#" title="Facebook"><img src="https://img.icons8.com/fluent/32/facebook-new.png" alt="Facebook"></a>
                        <a href="#" title="Twitter"><img src="https://img.icons8.com/fluent/32/twitter.png" alt="Twitter"></a>
                        <a href="#" title="Instagram"><img src="https://img.icons8.com/fluent/32/instagram-new.png" alt="Instagram"></a>
                        <a href="#" title="LinkedIn"><img src="https://img.icons8.com/fluent/32/linkedin.png" alt="LinkedIn"></a>
                    </div>
                </div>
            </div>
            <div class="bottom-bar">
                <p>© 2024 Insurance Management System. All rights reserved.</p>
            </div>
        </footer>
        
        
           
</body>
</html> 