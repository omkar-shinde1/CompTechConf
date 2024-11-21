<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive-Design</title>
    <!-- <link rel="stylesheet" href="style.css"></head> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Edu+TAS+Beginner:wght@400..700&family=Jost:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <style type="text/css">

*{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family:'Inter', sans-serif ;
   
    text-decoration: none;

}

.secondrow{
    position: absolute;
    height:110px;
    top:40px; left: 0;right: 0;
    background-color:#13110E;
   
   
    border-bottom:10px solid  #dde8ef;
    display: flex;
    align-items: center;
    justify-content: space-between;
    z-index: 500;
    width:auto;
   
}
.greentechlogo{
    height:100px;
    width: auto;
    z-index: 600;
    padding-left:4%;
    padding-right:4%;
    background-color:#f4cb1e;
    display: flex;
    align-items: center;
    justify-content: center;
    border-right:10px solid  #dde8ef;
}

.greentechlogo2{
    height:90%;
    width:100%;
    z-index: 600;
}
.all-links{
   
    padding-right:4%;
    background-color:#13110E;
    height:100px;
    width: auto;
    display: flex;
    align-items: center;
    justify-content: space-between;
    
}

#mini-heading{
    display:none;
   
}

#nav-name{
    color:Green;
    font-weight: bold;
    font-family: cursive;
}

#nav-status{
    margin-left:0px;
    
}

.nav-navbar ul{
    list-style: none;
}
.nav-navbar ul li{
    position: relative;
    float: left;
}
.navbar-links{
    font-size: 0.9rem;
    font-weight:500;
    padding:10px;
  
    margin:0px 3px 0px 0px;
    color: white;
    display: block;
    backdrop-filter: blur(10px);
}
.navbar-links:hover {
    color:#f4cb1e;
  
}
.navbar-links.active {
    color:#f4cb1e;
   
}

.secondrow .navbar ul li ul{
    position: absolute;
    margin-top: 11px;
    left:0;
    width: 150px;
    background-color: #ffffff;
    border:1px solid black;
    border-radius: 5px;
    display: none;
}
#menu-bar{
    display: none;
}

label {
    font-size: 25px;
    cursor: pointer;
    display: none;
    margin-right: 20px;
 
}
.dropdown {
    position: relative;
    height:auto;
}

.dropdown-menu {
   max-height: 0px; /* Start with zero height */
   overflow: hidden; /* Hide overflowing content */
   transition: max-height 0.4s ease-in-out; /* Smooth height transition */
   background-color: #f8f8f8; /* Background color for the dropdown menu */
   position: absolute; /* To position the dropdown relative to the parent */
   padding: 0;
   margin-top:0px;
   list-style: none;
   z-index: 1000; /* Ensure dropdown stays on top */
   width: 190px; /* Define dropdown width */
   
}
.dropdown:hover .dropdown-menu {
   max-height: 200px; /* Adjust as per the total height needed for your dropdown */
}

.dropdown-menu  li {
   
    height:40px;
    width: 100%;
    padding: 8px 12px;
    padding: 10px;
    transition: background-color 0.3s ease-in-out; /* Smooth hover transition */
    z-index: 1000 !important;
   
}
.dropdown-menu li a {
   
    text-decoration: none;
    color: black;
}

.dropdown-menu li:hover {
   background-color: #f4cb1e; /* Change to green on hover */
   color: white;
}
.dropdown-menu li a:hover {
    
    color: white;
    /* background-color:#adc82d; */
}

.dropdown:hover .dropdown-menu {
    display: block;
}

.firstrow{
    height:40px;
    width: 100%;
    background-color: #dde8ef;
    display: flex;
    justify-content:space-between !important;
    align-items: center !important;
    text-align:center;
    padding-right:5%;
    padding-left:4%;
    flex-direction:colomn;
    position:absolute;
    top:0;
    left:0;
    z-index: 511;   
    font-size:0.8em; 
    margin-bottom:20px;
}

.navemail{
    display:flex !important; 
   
}
.navemail a{
    color:black;
}
.navemail a:hover{
    color:#f4cb1e;
}
.social{
    display:flex;
    z-index: 511;
}
/* Mobile responsiveness */

.main-navbar{
    /* display:flex; */
}
.fa-brands{
    color:black;
}
.fa-brands:hover{
    color:#f4cb1e;
}
.dropdown .fa-solid{
    color:black;
}
.dropdown .fa-solid:hover{
    color:#f4cb1e;
}



@media(max-width:800px){

    .greentechlogo{
        height:100%;
        width: 25%;
        border-right:5px solid  #dde8ef;
    }

    .greentechlogo2{
        height:90%;
        width:100%;
        z-index: 600;
    }
    
    #mini-heading{
        display:flex;
        color:white;
        width:200px;
        font-size:12px;
        font-weight:300;
        margin-right:10%;
    }

    .secondrow{
       
       height:80px;
       top:0px;
       width:100%;
       border-bottom:5px solid  #dde8ef;
        
        left: 0;
        right: 0;
        background-color:#13110E;
        display: flex;
        align-items: center;
        justify-content: space-between;
        z-index: 500;
        width:100%;
       
    }
    .all-links{
   
       
        height:100%;
        width: 80%;
        padding-right:0%;
        padding-left:10%;
   
        display: flex;
        align-items: center;
        justify-content: space-between;
        
   
    }
    .navbar-links{
        color:black;
    }
    #nav-status{
        /* margin-left: 5px; */
    }

    .nav-logo{
        /* position: relative;
        top: -1px;
        left: 5px;
        height: 40px;
        width: 80px;
        margin:5px -15px 15px 5px; */
    }
    .logo{
        
        /* height: 55px;
        width: 85px; */
    }
    #nav-name{
        /* font-weight: bold;
        font-family: cursive;
        font-size: 16px;
        color:Green; */
    }
    #nav-adviser{
        /* font-size: 10px;
        font-family: cursive; */
    }

    label{
        display: initial;
      
    }
    .nav-navbar{
        position: absolute;
        height:80px;
        width: 100%;
        top: 100%; left: 0;right: 0;
        background-color: #fff;
        border-top: 1px solid #000;
        display: none;

    }
    .secondrow .nav-navbar ul li{
        width: 100%;
        z-index: 10;
        background-color:#F5F5F5;
        border:0.5px solid #E5E4E2;
    }
    .firstrow{
        display:none;
    }

    

    #menu-bar:checked ~.nav-navbar {
        display: initial;
    }
    .secondrow .nav-navbar ul li :hover{
      
        background-color:#f4cb1e;
        color: white;
    }
    .dropdown-menu{
        position: relative;
        margin-top:0px;
        width: 100%; 
      
    }

    .dropdown {
    position: relative;
    height:auto;
    
    }
    .color-change { 

        color:black !important;
    }
  

}
.more{
  
    width:155px; 
    text-align:left;
    font-size:12px;
    margin-top:0px;
}
.color-change{
    color:white;
}

</style>
</head>
<body>

    <div class="main-navbar2">

   

        <div class="firstrow">
            <div class="navemail">
                <p style="color:black; margin-bottom: 0;"><i class="fa-solid fa-house-chimney" style="color: black;"></i> &nbsp; Computational Techniques 2025 | Hybrid Conference |  02 – 04 April 2025 |  </p>
                <a href="mailto:computationaltechniques@gmail.com" style="margin-left: 20px"> <i class="fa-solid fa-envelope" ></i>&nbsp   computationaltechniques@gmail.com</a>
            </div>
            <div class="social">
                <a href="#"><i class="fa-brands fa-facebook-f" ></i></a>&nbsp &nbsp
                <a href="#"><i class="fa-brands fa-x-twitter" ></i></a>&nbsp &nbsp
                <a href="#"><i class="fa-brands fa-instagram" ></i></a>&nbsp &nbsp
                <a href="#"><i class="fa-brands fa-linkedin-in" ></i></a>&nbsp &nbsp
                
            <div class="dropdown">
            <a  href="#" style="color:black;"> &nbsp;Quick Links &nbsp; <i class="fa-solid fa-caret-down" ></i></a>
                        <ul class="dropdown-menu more" >
                            <li><a href="#">Submit Abstract</a></li>
                            <li><a href="#">Full Paper Submission</a></li>
                            <li><a href="#">Conference registration</a></li>
                            <li><a href="#">Conference Broucher</a></li>
                            <li><a href="submission.php">Pay Conference Fee</a></li>
                        </ul>
                </div>
            </div>
        </div>
    
        <div class="secondrow">
            <div class="greentechlogo">
                <img src="images/Engineering Advances 2024 Logo.png" alt="Computational Technics Conference Logo" class="greentechlogo2">
            </div>
            <div class="all-links">
                
                <h3 id="mini-heading" style="color:white;">Computational Techniques 2025</h3>
                 <input type="checkbox" id="menu-bar">
                 <label for="menu-bar"><i class="fa-solid fa-bars" style="color: #fff;" id="menu-icon"></i></label>
                <nav class="nav-navbar">
                    <ul>
                        <li><a style="text-decoration: none;" href="index.php" class="navbar-links">Home</a></li>
                        <li><a style="text-decoration: none;" href="cfp.php" class="navbar-links">Call for Papers</a></li>
                        <li><a style="text-decoration: none;" href="important_dates.php" class="navbar-links">Important Dates</a></li>
                        <li><a style="text-decoration: none;" href="publication.php"class="navbar-links">Publications</a></li>
                        <li><a style="text-decoration: none;" href="abstract_submission.php"class="navbar-links">Submission</a></li>
                        <li><a style="text-decoration: none;" href="registration.php"class="navbar-links">Registration</a></li>
                        <li class="dropdown">
                            <a style="text-decoration: none;" href="#" class="navbar-links color-change"><span class="color-change">Committees  &nbsp;</span><i class="fa-solid fa-caret-down" style="color:#fff;"></i></a>
                            <ul class="dropdown-menu" style="font-size:14.4px">
                                <li><a style="text-decoration: none;" href="scientific_committee.php">Scientific Committee</a></li>
                                <!-- <li><a href="advisory.php">Advisory Committee</a></li> -->
                                <li><a style="text-decoration: none;" href="organizing_committee.php">Organizing Committee</a></li>
                            </ul>
                        </li>
                        <li><a style="text-decoration: none;" href="speakers.php" class="navbar-links">Speakers</a></li>
                        <li class="dropdown">
                            <a style="text-decoration: none;" href="#" class="navbar-links " ><span class="color-change">More</span> <i class="fa-solid fa-caret-down" style="color: #fff;"></i></a>
                            <ul class="dropdown-menu" >
                                <li ><a href="accomodation.php">Accommodation</a></li>
                                <li><a href="visa.php">Visa</a></li>
                                <li><a href="awards.php">Awards</a></li>
                                <li><a style="font-size:15px" href="about_organizers.php">Organisers</a></li>
                                <li><a style="font-size:15px" href="faq.php">FAQ</a></li>
                            </ul>
                        </li>
                        <li><a style="text-decoration: none;" href="contact.php" class="navbar-links">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

   
    <script>

                    // Get all the navbar links
            const navbarLinks = document.querySelectorAll('.navbar-links');

            // Get the current URL path
            const currentPath = window.location.href; // Get full URL for accuracy

            // Loop through each link and compare its href with the current URL
            navbarLinks.forEach(link => {
            // Check if the current URL includes the href of the link
            if (currentPath.includes(link.getAttribute('href'))) {
                link.classList.add('active');
            }
            });






        const menuBar = document.getElementById('menu-bar');
        const menuIcon = document.getElementById('menu-icon');

        menuBar.addEventListener('change', function() {
            if (menuBar.checked) {
                // Change to 'xmark' icon when checked
                menuIcon.classList.remove('fa-bars');
                menuIcon.classList.add('fa-xmark');
            } else {
                // Revert back to 'bars' icon when unchecked
                menuIcon.classList.remove('fa-xmark');
                menuIcon.classList.add('fa-bars');
            }
        });
    </script>
</body>
</html>