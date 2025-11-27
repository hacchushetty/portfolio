<?php
<a href="#about">About</a>
<a href="#work">Work</a>
<a href="#skills">Skills</a>
<a href="#contact">Contact</a>
</nav>
<div class="social">
<a href="#">GitHub</a>
<a href="#">LinkedIn</a>
</div>
</div>
</aside>


<main class="content">
<header class="top">
<button id="menuToggle" class="menu-toggle" aria-expanded="false">☰</button>
<div class="header-meta">Available for internships • Open to collaborations</div>
</header>


<section id="about" class="card">
<h2>About</h2>
<p>Hello — I'm <strong>Riya</strong>, I design clean interfaces and build fast, accessible front-ends. I care about UX, performance and readable code.</p>
</section>


<section id="work" class="card projects">
<h2>Selected Work</h2>
<div class="grid">
<article class="proj">
<img src="assets/images/project1.jpg" alt="Project 1">
<h3>Recipe Explorer</h3>
<p>A lightweight recipe search SPA with offline support.</p>
<a href="#" class="proj-link">View</a>
</article>
<article class="proj">
<img src="assets/images/project2.jpg" alt="Project 2">
<h3>Campus Events</h3>
<p>Event listing with calendar integration and RSVP.</p>
<a href="#" class="proj-link">View</a>
</article>
</div>
</section>


<section id="skills" class="card">
<h2>Skills</h2>
<ul class="skills-list">
<li>HTML & ARIA</li>
<li>CSS Architecture (BEM / Utility)</li>
<li>Vanilla JS & React</li>
<li>Figma & Prototyping</li>
</ul>
</section>


<section id="contact" class="card contact-card">
<h2>Contact</h2>
<form id="contactForm" method="post" action="contact-api.php">
<label>Name <input type="text" name="name" required></label>
<label>Email <input type="email" name="email" required></label>
<label>Message <textarea name="message" rows="5" required></textarea></label>


<input type="hidden" name="csrf" value="<?php echo htmlspecialchars($csrf, ENT_QUOTES, 'UTF-8'); ?>">
<div class="form-actions">
<button id="sendBtn" type="submit">Send</button>
<div id="formStatus" class="status" aria-live="polite"></div>
</div>
</form>
</section>


<footer class="footer">© <span id="year"></span> Riya — Crafted with care.</footer>
</main>


<script src="assets/js/main.js"></script>
</body>
</html>