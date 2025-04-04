<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Lartz</title>

    <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml" />
    <link rel="stylesheet" href="./assets/css/style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@600;700&family=Open+Sans:wght@400;500;700&family=Poppins:wght@400;600&display=swap" rel="stylesheet" />
  </head>

  <body id="top">
    <a href="https://api.whatsapp.com/send?phone=6281234567890" class="whatsapp-button" target="_blank">
      <img src="./assets/images/whatsapp-icon.png" alt="WhatsApp" />
    </a>

    <script src="script.js"></script>

    <header class="header" data-header>
      <div class="container">
        <a href="#top">
          <h1 class="logo">Lartz_</h1>
        </a>

        <button class="nav-toggle-btn" aria-label="Toggle Menu" data-nav-toggle-btn>
          <ion-icon name="menu-outline" class="menu-icon"></ion-icon>
          <ion-icon name="close-outline" class="close-icon"></ion-icon>
        </button>

        <nav class="navbar container">
          <ul class="navbar-list">
            <li>
              <a href="#top" class="navbar-link" data-nav-link>Home</a>
            </li>
            <li>
              <a href="#about" class="navbar-link" data-nav-link>About</a>
            </li>
            <li>
              <a href="#portfolio" class="navbar-link" data-nav-link>Portfolio</a>
            </li>
            <li>
              <a href="#skills" class="navbar-link" data-nav-link>Skills</a>
            </li>
            <li>
              <a href="#contact" class="navbar-link" data-nav-link>Contact</a>
            </li>
            <li>
              <a href="#blog" class="navbar-link" data-nav-link>Blog</a>
            </li>
            <li>
              <a href="#" class="btn btn-primary">Download CV</a>
            </li>
          </ul>
        </nav>
      </div>
    </header>

    <main>
      <article>
        <section id="hero">
          <?php include 'page/hero/hero.php'; ?>
        </section>

        <section id="about">
          <?php include 'page/about/about.php'; ?>
        </section>

        <section id="portfolio">
          <?php include 'page/portofolio/portofolio.php'; ?>
        </section>

        <section id="skills">
          <?php include 'page/skills/skills.php'; ?>
        </section>

        <section id="blog">
          <?php include 'page/blogs/blogs.php'; ?>
        </section>

        <section id="contact">
          <?php include 'page/contact/contact.php'; ?>
        </section>
      </article>
    </main>

    <footer class="footer">
      <div class="container">
        <p class="copyright">&copy; 2025 <a href="#" class="copyright-link">Lartz</a>. All Rights Reserved</p>
        <ul class="footer-list">
          <li>
            <a href="#" class="footer-link">Terms & Condition</a>
          </li>
          <li>
            <a href="#" class="footer-link">Privacy Policy</a>
          </li>
        </ul>
      </div>
    </footer>

    <a href="#top" class="back-to-top" data-back-to-top>BACK TOP</a>

    <script src="./assets/js/script.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  </body>
</html>
