<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Computational Techniques-2025</title>
    <link rel="icon" href="./images/gtfavicon.png" type="image/png">

    <link rel="stylesheet" href="./css/contact2.css">
    <link rel="stylesheet" type="text/css" href="css/bread_cumb2.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Edu+TAS+Beginner:wght@400..700&family=Jost:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        #bread-cumb .container{
            margin-left:9%;
        }
    </style>
</head>
<body>  
    <?php include 'header.php'; ?>
        
<!-- Breadcumb section -->

<section id="bread-cumb" >
  <div class="container">
    <div class="bread-cumb-links" >
      <a href="index.php">Home</a> / <a href="#" style="color: #65AC4C">Contact</a>
    </div>

    <div class="bread-cumb-page">
      <h1>Contact</h1>
    </div>
  </div>
</section>

<!-- end:Breadcumb section -->

     
        <!-- form container -->
            <div class="slide-main">
                <div class="contact-desc">
                    <h4>Contact Us</h4>
                    <h1>Reach Out and Connect</h1>
                    <p>For general quiries write us at <a href="mailto:chair.greentech@gmail.com" style="color:#878D97">chair.greentech@gmail.com</a></p>

                    <div class="social-media-contact">
                        <div class="icons-contact"><i class="fa-brands fa-facebook-f fa-lg" style="color: #fff;"></i></div>
                        <div class="icons-contact"><i class="fa-brands fa-x-twitter fa-lg" style="color: #fff;"></i></div>
                        <div class="icons-contact"><i class="fa-brands fa-instagram fa-lg" style="color: #fff;"></i></div>
                        <div class="icons-contact"><i class="fa-brands fa-linkedin-in fa-lg" style="color: #fff;"></i></div>
                    </div>
                    
                    <div class="address">
                        <div class="add-icon"> <i class="fa-solid fa-location-dot fa-2xl" style="color: #f4cb1e;"></i></div>
                        <div class="add">
                            <span>Conference Venue</span>
                            <p style="line-height:2"><b>JSPM's Jayawantrao Sawant College of Engineering</b>, Survey No. 58, Indrayani Nagar, Handewadi Road, Hadapsar, Pune, Maharashtra-411028</p>
                        </div>
                    </div>

                    <div class="mail-container">
                        <div class="mail">
                            <div class="mail-icon" style="margin-right:10px;"><i class="fa-solid fa-envelope fa-2xl" style="color: #f4cb1e;"></i></div>
                            <div class="mail-desc">
                               <span style=""> Mail Us for Conference Venue Queries</span>
                               <p style="font-size:16px; margin-top:10px;"><a style=" color:#878D97" href="mailto:chair.greentech@gmail.com">chair.greentech@gmail.com</a></p>
                            </div>
                        </div>

                        <div class="mail">
                            <div class="mail-icon" style="margin-right:10px;"><i class="fa-solid fa-envelope fa-2xl" style="color: #f4cb1e;"></i></div>
                            <div class="mail-desc">
                               <span> Mail Us for Accomodation and Travel Queries</span>
                               <p style="font-size:16px; margin-top:10px; color:#878D97"><a style=" color:#878D97" href="mailto:chair.greentech@gmail.com">chair.greentech@gmail.com</a></p>
                            </div>
                        </div>
                        
                    </div>

                </div>
       

                <div class="form-container">

                     <p clas="rel">Please provide all relevant details in your communications to help us respond as quickly as possible.
                     </p>   

                    <form id="inquiryForm" action="inquiry_form.php" method="post">
                        <!-- Your Name and Your Phone (Left side) -->
                        <div class="form-group">
                            <input type="text" name="name" placeholder="Full Name" required>
                            <input type="email" name="email" placeholder="Your Email" required>
                        </div>
                        
                        <!-- Your Email and Your Project (Right side) -->
                        <div class="form-group">
                        <input type="text" name="country" placeholder="Country" list="countries" required>
                                <datalist id="countries">
                                    <option value="Albania">
                                    <option value="Algeria">
                                    <option value="Andorra">
                                    <option value="Angola">
                                    <option value="Antigua and Barbuda">
                                    <option value="Argentina">
                                    <option value="Armenia">
                                    <option value="Australia">
                                    <option value="Austria">
                                    <option value="Azerbaijan">
                                    <option value="Bahamas">
                                    <option value="Bahrain">
                                    <option value="Bangladesh">
                                    <option value="Barbados">
                                    <option value="Belarus">
                                    <option value="Belgium">
                                    <option value="Belize">
                                    <option value="Benin">
                                    <option value="Bhutan">
                                    <option value="Bolivia">
                                    <option value="Bosnia and Herzegovina">
                                    <option value="Botswana">
                                    <option value="Brazil">
                                    <option value="Brunei">
                                    <option value="Bulgaria">
                                    <option value="Burkina Faso">
                                    <option value="Burundi">
                                    <option value="Côte d'Ivoire">
                                    <option value="Cabo Verde">
                                    <option value="Cambodia">
                                    <option value="Cameroon">
                                    <option value="Canada">
                                    <option value="Central African Republic">
                                    <option value="Chad">
                                    <option value="Chile">
                                    <option value="China">
                                    <option value="Colombia">
                                    <option value="Comoros">
                                    <option value="Congo (Congo-Brazzaville)">
                                    <option value="Costa Rica">
                                    <option value="Croatia">
                                    <option value="Cuba">
                                    <option value="Cyprus">
                                    <option value="Czechia (Czech Republic)">
                                    <option value="Democratic Republic of the Congo">
                                    <option value="Denmark">
                                    <option value="Djibouti">
                                    <option value="Dominica">
                                    <option value="Dominican Republic">
                                    <option value="Ecuador">
                                    <option value="Egypt">
                                    <option value="El Salvador">
                                    <option value="Equatorial Guinea">
                                    <option value="Eritrea">
                                    <option value="Estonia">
                                    <option value="Eswatini (fmr. 'Swaziland')">
                                    <option value="Ethiopia">
                                    <option value="Fiji">
                                    <option value="Finland">
                                    <option value="France">
                                    <option value="Gabon">
                                    <option value="Gambia">
                                    <option value="Georgia">
                                    <option value="Germany">
                                    <option value="Ghana">
                                    <option value="Greece">
                                    <option value="Grenada">
                                    <option value="Guatemala">
                                    <option value="Guinea">
                                    <option value="Guinea-Bissau">
                                    <option value="Guyana">
                                    <option value="Haiti">
                                    <option value="Holy See">
                                    <option value="Honduras">
                                    <option value="Hungary">
                                    <option value="Iceland">
                                    <option value="India">
                                    <option value="Indonesia">
                                    <option value="Iran">
                                    <option value="Ireland">
                                    <option value="Israel">
                                    <option value="Italy">
                                    <option value="Jamaica">
                                    <option value="Japan">
                                    <option value="Jordan">
                                    <option value="Kazakhstan">
                                    <option value="Kenya">
                                    <option value="Kiribati">
                                    <option value="Kuwait">
                                    <option value="Kyrgyzstan">
                                    <option value="Laos">
                                    <option value="Latvia">
                                    <option value="Lebanon">
                                    <option value="Lesotho">
                                    <option value="Liberia">
                                    <option value="Libya">
                                    <option value="Liechtenstein">
                                    <option value="Lithuania">
                                    <option value="Luxembourg">
                                    <option value="Madagascar">
                                    <option value="Malawi">
                                    <option value="Malaysia">
                                    <option value="Maldives">
                                    <option value="Mali">
                                    <option value="Malta">
                                    <option value="Marshall Islands">
                                    <option value="Mauritania">
                                    <option value="Mauritius">
                                    <option value="Mexico">
                                    <option value="Micronesia">
                                    <option value="Moldova">
                                    <option value="Monaco">
                                    <option value="Mongolia">
                                    <option value="Montenegro">
                                    <option value="Morocco">
                                    <option value="Mozambique">
                                    <option value="Myanmar (formerly Burma)">
                                    <option value="Namibia">
                                    <option value="Nauru">
                                    <option value="Nepal">
                                    <option value="Netherlands">
                                    <option value="New Zealand">
                                    <option value="Nicaragua">
                                    <option value="Niger">
                                    <option value="Nigeria">
                                    <option value="North Korea">
                                    <option value="North Macedonia">
                                    <option value="Norway">
                                    <option value="Oman">
                                    <option value="Palau">
                                    <option value="Palestine State">
                                    <option value="Panama">
                                    <option value="Papua New Guinea">
                                    <option value="Paraguay">
                                    <option value="Peru">
                                    <option value="Philippines">
                                    <option value="Poland">
                                    <option value="Portugal">
                                    <option value="Qatar">
                                    <option value="Romania">
                                    <option value="Russia">
                                    <option value="Rwanda">
                                    <option value="Saint Kitts and Nevis">
                                    <option value="Saint Lucia">
                                    <option value="Saint Vincent and the Grenadines">
                                    <option value="Samoa">
                                    <option value="San Marino">
                                    <option value="Sao Tome and Principe">
                                    <option value="Saudi Arabia">
                                    <option value="Senegal">
                                    <option value="Serbia">
                                    <option value="Seychelles">
                                    <option value="Sierra Leone">
                                    <option value="Singapore">
                                    <option value="Slovakia">
                                    <option value="Slovenia">
                                    <option value="Solomon Islands">
                                    <option value="Somalia">
                                    <option value="South Africa">
                                    <option value="South Korea">
                                    <option value="South Sudan">
                                    <option value="Spain">
                                    <option value="Sri Lanka">
                                    <option value="Suriname">
                                    <option value="Sweden">
                                    <option value="Switzerland">
                                    <option value="Syria">
                                    <option value="Tajikistan">
                                    <option value="Tanzania">
                                    <option value="Thailand">
                                    <option value="Timor-Leste">
                                    <option value="Togo">
                                    <option value="Tonga">
                                    <option value="Trinidad and Tobago">
                                    <option value="Tunisia">
                                    <option value="Turkey">
                                    <option value="Turkmenistan">
                                    <option value="Tuvalu">
                                    <option value="Uganda">
                                    <option value="Ukraine">
                                    <option value="United Arab Emirates">
                                    <option value="United Kingdom">
                                    <option value="United States of America">
                                    <option value="Uruguay">
                                    <option value="Uzbekistan">
                                    <option value="Vanuatu">
                                    <option value="Venezuela">
                                    <option value="Vietnam">
                                    <option value="Yemen">
                                    <option value="Zambia">
                                    <option value="Zimbabwe">
                                </datalist>
                            <input type="text" name="organization" placeholder="Organization" required>
                        </div>
                        
                        <!-- Subject Input (Full width below the above two rows) -->
                        <!-- <div class="form-group full-width">
                            <input type="text" name="subject" placeholder="Subject" required>
                        </div> -->

                       <!-- Subject Input with Datalist (Full width below the above two rows) -->
                        <div class="form-group full-width">
                            <input type="text" name="subject" placeholder="Subject" list="subjects" required>
                            <datalist id="subjects">
                                <option value="Computer Engineering, AI, ML and Data Science">
                                <option value="Electrical and Electronic Engineering">
                                <option value="Automation and Robotics">
                                <option value="Mechanical, Manufacturing and Industrial Engineering">
                            </datalist>
                        </div>
                        
                        <!-- Message Input (Full width below the subject) -->
                        <div class="form-group full-width">
                            <textarea name="message" rows="5" placeholder="Message" required></textarea>
                        </div>
                        
                        <!-- Submit Button -->
                        <div class="form-group submit-group">
                            <button type="submit">Submit</button>
                        </div>
                        <div id="responseMessage" style="display:none; margin-top: 10px;">Response message</div>
                    </form>
                   
                    <div class="map-container">
                        <iframe 
                            
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d242225.89693800738!2d73.66898431363542!3d18.448311731293803!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2e9f58d2f4a65%3A0xdc08459c826bf8be!2sJSPM%20Group%20Of%20Institutes%2C%20Hadapsar!5e0!3m2!1sen!2sin!4v1729575942994!5m2!1sen!2sin" 
                            width="600" 
                            height="450" 
                            style="border:0;" 
                            allowfullscreen="" 
                            loading="lazy" 
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>
            </div>
            

          

           



            <?php include 'footer.php'; ?>
</body>
</html>