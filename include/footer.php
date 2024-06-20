<footer class="footer">
        <div class="footer-container">
        <div class="reaseauxSociaux ">
                <p class="fade-in">Suivez-moi sur LinkedIn et découvrez mes codes sur GitHub :</p>
                <div class="linkedinRS">
                <a href="https://www.linkedin.com/in/celal-biber-258352268" target="_blank"><i class="fa-brands fa-linkedin fade-in"></i></a>
                <a href="https://github.com/Celal-Dev" target="_blank"><i class="fa-brands fa-github fade-in"></i></a></div>
            </div>
            
            <ul class="footer-links">
                <li class="fade-in"><a class="fade-in " href="ml.php">Mentions Légales</a></li>
                <li class="fade-in"><a class="fade-in " href="pl.php">Politique de Confidentialité</a></li>
            </ul> <br>
            <p class="fade-in">&copy; 2024 Celal BIBER. Tous droits réservés.</p>
        </div> 
    </footer>

    <script src="cdn/jquery.js"></script>
    <script src="js/portfolio.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

<!-- curseu de la souris -->
<div class="custom-cursor"></div>
   
<script>
      document.addEventListener('DOMContentLoaded', function () {
        const customCursor = document.querySelector('.custom-cursor');

        document.addEventListener('mousemove', (e) => {
          customCursor.style.left = `${e.clientX}px`;
          customCursor.style.top = `${e.clientY}px`;
        });

        document.addEventListener('mousedown', () => {
          customCursor.classList.add('active');
        });

        document.addEventListener('mouseup', () => {
          customCursor.classList.remove('active');
        });

        // Sélectionnez les éléments cliquables, y compris les images
        const clickableElements = document.querySelectorAll('a, button, .clickable, img');

        clickableElements.forEach(element => {
          element.addEventListener('mouseenter', () => {
            customCursor.classList.add('hover');
          });

          element.addEventListener('mouseleave', () => {
            customCursor.classList.remove('hover');
          });
        });

      });

        // Masquer le curseur en mode mobile après un clic
    if (window.matchMedia("(max-width: 1000px)").matches) {
        document.addEventListener('click', () => {
            customCursor.classList.add('hidden');
        });
    }
    </script>



</body>
</html>
