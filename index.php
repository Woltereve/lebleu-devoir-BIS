<?php require 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Space+Grotesk:wght@300..700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="styles/var.css" />
<link rel="stylesheet" href="styles/style.css" />
   <script src="script.js" defer></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web2Risk Agency</title>
</head>

<body>
    <header>
        <img class="logo" src="images/logo/web-2-risk-black.png" alt="Web2Risk Agency">
        <nav >
            
        <ul class="menu">
            
            <li><a href="#presentation">About us</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#equipe">Team</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
            
        </nav>
    </header>
   
<main>
<section id="presentation" class="about" ><h1>Web2Risk Agency</h1>
<h2>About us</h2>
<p>
    Web2risk Agency is an innovative web agency specialising in the design and development of bespoke websites and web applications. Situated at the heart of digital transformation, our agency supports businesses in optimising their online presence by offering technological solutions tailored to their specific needs.
</p>
<p>
    Our services encompass the entire digital creation process, from initial analysis to final deployment. Whether for a showcase site, an e-commerce platform, or a complex web application, Web2risk Agency guarantees efficient, secure, and scale.
</p>

<p>
    Boasting a team of experienced developers and creative designers, Web2risk Agency places user experience at the heart of every project. With a collaborative and innovative approach, we transform our clients' ideas into tangible projects, optimised to enhance their visibility and digital growth.
</p>
</section>

<section id="services">
    
    <h2>Services</h2>
    <div class="cards">
   <article>
        <img class="img" src="images/services/websites.jpg" alt="">
    <h3>Custom website development </h3>
    <p>Creation of unique and optimised websites, adaptable to all devices, to ensure an engaging and modern user experience.</p> 
</article>
<article>
    <img class="img" src="images/services/applications.jpg" alt="">
    <h3>Interactive web applications</h3>
    <p>Design of high-performing and intuitive web applications, incorporating the latest technologies to meet the specific needs of each client.</p>
   </article>
    <article> 
        <img class="img" src="images/services/seo.jpg" alt="">
    <h3>SEO optimisation and performance analysis</h3>
    <p> Enhancement of search engine ranking and performance monitoring to maximise the visibility and impact of websites and applications on search engines.</p>
</article>
</div>
</section>

<section id="equipe">
<h2>Our team</h2>
<p>The team at Web2risk Agency is made up of passionate and complementary professionals: front-end and back-end developers, UX/UI designers, SEO experts, and dedicated project managers. Each individual contributes their expertise to ensure effective and creative solutions, while maintaining a smooth and efficient collaboration. Together, they strive to transform clients' ideas into memorable and bespoke digital experiences.</p>
<div class="cards">
<article>
    <img class="img" src="images/equipe/lucas.jpg" alt="">
<h3>Lucas</h3>
<p>, Front-End Developer, specialist in seamless interfaces.</p>
<p>A technology enthusiast, Lucas is an expert in JavaScript and modern frameworks such as React and Vue.js. Always on the lookout for the latest trends, he ensures a smooth and responsive interface, with a focus on accessibility and user experience. A great fan of minimalist design, he enjoys creating interfaces that are both aesthetically pleasing and functional.
</p>

</article>
<article>
    <img class="img" src="images/equipe/emma.jpg" alt="">
    <h3>Emma</h3>
    <p>Digital project manager, ensuring the success of your projects.</p>
    <p>
With several years of experience in web project management, Emma serves as the link between the technical team and the clients. Organised and meticulous, she ensures that each stage of the project adheres to the budget and timelines, while also meeting the clients' needs. Possessing a keen ability to listen, she makes certain that every project aligns with the vision of the end user.</p>
</article>
<article>
    <img class="img" src="images/equipe/sophia.jpg" alt="">
    <h3>Sofia</3>
    <p>SEO expert, your ally in maximising your visibility.</h3></p>
    <p>
With a solid expertise in natural referencing, Sofia is adept at using data analysis tools to maximise the visibility of projects. She conducts thorough SEO audits and identifies the best strategies to ensure each site achieves optimal positioning. Passionate about numbers and user behaviour, she constantly adjusts her recommendations to enhance performance.
</p>
</article>
</div>
</section>

<section id="contact" >
    <h2>Contact</h2>
    <p><?= $confirmation ?></p>
    <div class="formulaire">
        <form method="POST" action="#contact">
        <div class="nom">
              <label for="nom">Name</label>
              <input id="nom" name="nom" required />
            </div>

           <div class="email">
              <label for="mail">Email</label>
              <input type="email" id="mail" name="mail" required />
            </div>

            <div class="message">
              <label for="message">Message</label>
              <textarea id="message" name="message" required></textarea>
            </div>

          <button class="btn" type="submit">Submit</button>

</form>
</div>
</section>
</main>
<footer>
    
    <p>&copy; <?= date('Y'); ?> Web2Risk Agency. All rights reserved.</p>
</footer>
</body>

</html>