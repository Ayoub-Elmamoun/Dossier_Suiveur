<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<
<!-- App favicon -->
<link rel="shortcut icon" href="assets/images/favicon.ico">


 <title>MFE - Make Freelancing Easy</title>
</head>
<body>
    <header>
        <nav class='container' >
            <div class='row'>
                <div class="col-xs-4 col-md-7 col-lg-2 logo">
                    <h1>MFE</h1>
                </div>
                <div class="col-xs-7 col-lg-5 md-5 navLinks">
                    <ul>
                        <li>
                           <a href="index.php">Home</a>
                        </li>
                        <li>
                            <a href="#features">Features</a>
                        </li>
                        <li>
                           <a href='#contacts'>Contact</a>
                        </li>
                        <li>
                            <a href='#aboutus'>About</a>
                        </li>
                    </ul>
                </div>
                <div class="col-xs-8 col-lg-3 col-md-4 buttonsContainer">
                    <button class='logIn'><a href="auth/login.php">Login</a></button>
                    <button class='signUp'><a href='auth/signup.php'>Sign up</a></button>
                </div>
                
                
                 </div>

            <div>
        </nav>
    </header>
    <section class=' container  heroSection'>
        <div class='row '>
            <div class='col-lg-5 col-md-12 freelancer'>
                    <h1 class='freelancerHeading'>Are you a Freelancer ?</h1>
                
                    <p class="freelancerP">Look no further, manage your projects and clients easily and make theim satisfied .</P>
                    <button class="getStarted"><a href='auth/signup.php'>Gest started</a></button>
            </div>
            <div class='col-lg-4 heroImage '>
                <img src="asset/images/heroSection.svg">
            </div>
        </div>
    </section>
    <section  id='features' class='container whyChoose'>
        <div class=" col-xs-12 col-md-12 col-lg-12  whyChooseH2">
            <h2 >Why to choose MFE</h2>
        </div>
        <div class=" col-xs-12 col-md-12 col-lg-12">
            <p id=''clas="whyChooseP">With MFE you can manage your projects and clients smoothly
                and let them check their projects progress with one click through sending them and email
            </P>

        </div>
        <div class="container">
            <div class=" featuresContianer row">
                <div class="col-lg-3 col-xs-10 firstFeature">
                   <h4> manage your projects</h4>
                   <div class='feature1IconContainer'>

                        <img id='manageProjects' src="asset/images/manageprojects.png" alt="manage projects feature icon">

                    </div>
                    <div>
                        <p>Save time and manage your projects smoothly</p>

                    </div>
                </div>
                <div  class=" col-lg-3 col-xs-10 secondFeature">
                    <h4>make your clients satisfied</h4>

                        <div class='feature2IconContainer'>

                            <img id='manageProjects' src="asset/images/clients.png" alt>

                        </div>
                        <div>
                            <p>let your clients check their project progress with one click</p>
                        </div>
                </div>             
                <div class=" col-lg-3 col-xs-10 thirdFeature">
                   <h4> send Email with one click </h4>
                   <div class='feature3IconContainer'>

                        <img id='manageProjects' src="asset/images/Email.png">

                    </div>
                    <div>
                        <p>Send email to your clients about their projects with one click</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id='aboutus' class='aboutSection'>
        <div class='aboutHeading'>
            <h2>About us</h2>
            <div class='aboutParagraph'>
                <p>MFEis a platform for freelancers and auto-entrepreneurs 
                    that helps them to manage their projects and clients and also facilate the customer relationship managements,
                    through  making the clients able to check their project progress with one click .</p>
            </div>

        </div>
    </section>
    <section class='contact'>
        <div class='contactH2Container'>
            <h2 id='contacts' class='contactHeading'>Contact us</h2>
        </div>
        <div class='contactContainer'>
            
            <p>
                Are you looking to collaborate with us ? or get to know more about our platform and services ? 
                or just ask us some questions ? or just saying Hi ? look no further the best way to reach us out is via our email.

            </p>
            <button class="getInTouch"><a href="mailto:hammada.reda.dev@gmail.com"> Send Email </a></button>
        </div>
    </section>
    <footer class='row'>
      
            <div class='col-xs-12 col-md-12 col-lg-3'>
                    <h2 class='logoFooter'>MFE</h2>
                </div>  
                <div class="col-xs-12 md-12 col-lg-3 quickLinks ">
                    <ul class='quickLinks1' >
                        <li>
                            <a href='index.php'>Home</a>
                        </li>
                        <li>
                            <a href='#features'>Features</a>
                        </li>
                    </ul>
                    <ul  class='quickLinks2'>
                        <li>
                            <a href='#aboutus'>About us</a>
                        </li>
                        <li>
                            <a href='#contacts'>Contact</a>
                        </li>
                    </ul>
                </div>
                <div class="getAndRights col-xs-12 col-md-12 col-lg-3">
                    <div class='getStartedContainer'>
                        <button><a href='auth/signup.php'>Get started</a></button>
                    </div>
                    <div class='copyRightsContainer'>
                    
                        <p>© InvoiceMe. All Rights Reserved</p>
                    </div>
               </div>
        
    </footer>
</body>
</html>