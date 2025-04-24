<html>
<head>

    <title>Insurance Management System</title>
    <style>

                
        .mainndiv{
            width: 100%;
            height: 100%;
            background-image: url("audi image.jpg");
            background-size: cover;
        }
        .navbar {
                    background-color: transparent;
                    padding: 15px;
                    display: flex;
                    gap:0.5%;
                   margin-left: 5%;                  
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
                .flex-section {
                    padding: 50px 20px;
                    display: flex;
                    flex-direction: column;
                    align-items: center;
                    gap: 30px;
                    margin-top: 5%;
                }
        
                .flex-item {
                    display: flex;
                    align-items: center;
                    justify-content: space-between;
                    gap: 20px;
                    width: 88%;
                    max-width: 1200px;
                    background-color: black;
                    border-radius: 10px -2px 0px 7px 14px rgb(57 23 23 / 14%);
                    padding: 20px;
                    transition: transform 0.3s ease, box-shadow 0.3s ease;
                    border-radius: 10px;
                    border: 0.5px solid whitesmoke; 
                    
                }
        
                .flex-item:hover {
                    transform: translateY(-5px);
                    box-shadow: 0px 0px  10px 0px rgb(51, 41, 41);
                 
                    background-color: rgb(2, 2, 2);
                   
                    
                }
        
                .flex-item:nth-child(odd) {
                    flex-direction: row-reverse;
                }
        
                .flex-item img {
                    width: 30%;
                    height: 28%;
                    border-radius: 10px;
                    transition: transform 0.3s ease;
                }
        
                .flex-item img:hover {
                    transform: scale(1.05);
                }
        
                .flex-item .content {
                    width: 50%;
                    padding: 10px 20px;
                    color: black;
                }
        
                .flex-item .content h3 {
                    text-shadow: 2px 2px 5px rgba(248, 243, 243, 0.54);
                    font-family:Poppins;
                    font-size: 30px;
                    margin-bottom: 10px;
                    color:white;
                }
        
                .flex-item .content p {
                    text-shadow: 2px 2px 5px rgba(243, 237, 237, 0.55);
                    font-family:Poppins;
                    font-size: 24px;
                    line-height: 1.4;
                    color:white;
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
  font-size: 29px; 
  font-weight: bold;
}

.policy {
  color: #0056D2; 
}

.plus {
  color: #37B24D; 
  font-weight: normal;
}



                
                
.navbar-logo {
    animation-name: bounceInBottom;
    animation-duration: 1s; 
    animation-timing-function: ease-out; 
    animation-fill-mode: both;
}


@keyframes bounceInBottom {
    0% {
        transform: translate3d(0, 300%, 0); 
        opacity: 0; 
    }
    58% {
        transform: translate3d(0, -27px, 0); 
        opacity: 1; 
    }
    73% {
        transform: translate3d(0, 12px, 0); 
    }
    88% {
        transform: translate3d(0, -8px, 0); 
    }
    100% {
        transform: translate3d(0, 0, 0); 
    }
}


        
                </style>
        
            
            
               
        <div class="mainndiv">
            <div class="navbar">
            <span class="navbar-logo">
  <span class="policy">Policy</span><span class="plus">Plus</span>
</span>
                <a href="#">Home</a>
                <a href="#services">Policyholder Registration</a>
                <a href="agentform.php">Agent Registration</a>
                <a href="serviceRequest.php">Service Request</a>
                
                <a href="contact.php">Contact Us</a>
                <a href="loginpageforadmin.php"> login admin</a>
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
                    <a href="Bikeinfopage.php">Register Now</a>
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
        
        <div class="flex-section">
            <div class="flex-item">
                <img src="https://imgs.search.brave.com/NEYUrEqx7xZNkGlDs3EO7uGNSDh_eUI8orUDkVG5Qmw/rs:fit:500:0:0:0/g:ce/aHR0cHM6Ly90My5m/dGNkbi5uZXQvanBn/LzA4LzA1LzQ4LzUw/LzM2MF9GXzgwNTQ4/NTA3NV9zR1NzcnQ3/dVJJR2RUUkhpa1Ft/dEtRY1B6dm52T3p4/WC5qcGc" alt="Car Insurance">
                <div class="content">
                    <h3>Car Insurance</h3>
                    <p>
                        Protect your vehicle with our comprehensive car insurance plans. Our coverage ensures peace of mind on the road with customizable policies.
                    </p>
                </div>
            </div>
        
            <div class="flex-item">
                <img src="https://imgs.search.brave.com/8yCXRQHmHQLcbIwRxTip8Go18l5jSAGmv0SqtPJj-LM/rs:fit:500:0:0:0/g:ce/aHR0cHM6Ly93YWxs/cGFwZXIuZm9yZnVu/LmNvbS9mZXRjaC9k/ZC9kZDk3YTEyYzc3/NzBlOWIyYTIwYmJj/YjE2ZTM2NzZmYi5q/cGVn" alt="Bike Insurance">
                <div class="content">
                    <h3>Bike Insurance</h3>
                    <p>
                        Secure your two-wheeler with our tailored bike insurance plans. Ride worry-free with the best protection against accidents and damages.
                    </p>
                </div>
            </div>
        
            <div class="flex-item">
                <img src="https://imgs.search.brave.com/ssc6l3KZNCeQnuQhu3TTH0TT0JYv2Yi2Q1V6OUePH6g/rs:fit:500:0:0:0/g:ce/aHR0cHM6Ly90YXRh/dHJ1Y2tzLnRhdGFt/b3RvcnMuY29tL2lt/YWdlcy90YXRhLWhl/YXZ5LW1lZGl1bS10/cnVja3MvdGF0YS10/aXBwZXJzL3RhdGEt/c2lnbmEtMjgyMy10/ay9pbWFnZS1nYWxs/ZXJ5L1NpZ25hLTI4/MjMtVEstMS5qcGc" alt="Truck Insurance">
                <div class="content">
                    <h3>Truck Insurance</h3>
                    <p>
                        Heavy-duty coverage for your trucks and commercial vehicles. Our plans cater to the unique needs of transportation and logistics businesses.
                    </p>
                </div>
            </div>
        
           
        </div>
           
        </head>
        
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