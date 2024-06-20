<?php  
require_once('include/init.php');
require_once('include/fonctions.php');
require('traitement.php');
?>

<main> 
    <div id="a-propos" class="pourScroll"></div>
    <section class="presentation">
        <h2  class="Apropos fade-in">À PROPOS DE MOI</h2>
        <section class="presentation1">
        <img class="photoMain fade-in" src="img/photo_profil.jpg" alt="dévelopeur wev">
        <p class="textApropos fade-in">
        Je m'appelle Celal Biber et je suis <strong>développeur web</strong>, passionné par la création de sites internet performants et esthétiques. Je maîtrise plusieurs langages de programmation, notamment le HTML, CSS, JavaScript, PHP et SQL, ainsi que le CMS WordPress, ce qui me permet de créer des sites web performants et sur mesure.
        <br><br>
        Parmi mes réalisations, j'ai eu l'opportunité de créer un site web complet from scratch pour une entreprise de sécurité privée, ainsi qu'un site WordPress pour un centre de formation.
        <br><br>
        Pour en découvrir davantage sur mon parcours professionnel, je vous invite à visiter mon profil linkedin <a href="https://www.linkedin.com/in/celal-biber-258352268" target="_blank"><i class="fa-brands fa-linkedin fa-linkedin1"></i></a>.


        </p>
        </section>
        <a href="#travaux" class="scroll-btn fade-in"><i class="fas fa-chevron-down"></i></a>
</section>

        <section id="travaux" class="travaux">
            <div class="section-travaux">
                <h2 class="fade-in">Mes Travaux</h2>
                <p class="invitationMessage fade-in">Ci-dessous, découvrez mes travaux en développement web et voyez les détails de mes codes en visitant mon GitHub <a href="https://github.com/Celal-Dev" target="_blank"><i class="fa-brands fa-github fa-github1"></i></a>.
                </p>
                <div class="categorie ">
                    <div class="projets">
                    <h3 class="fade-in">Sites réalisés en code :</h3>
                    
                        <div class="projet fade-in">
                            <h4 >Projet 1 <br><a href="http://www.easysuccess-sp.com" target="_blank">www.easysuccess-sp.com</a></h4>
                            <p >Site from scratch codé en : HTML, CSS, JavaScript, et PHP.</p>
                            <div class="imgTG"><a  href="http://www.easysuccess-sp.com" target="_blank">
                                <img src="img/Sans_titre.png" alt="portfolio de développeur">
                            </a></div>     
                        </div>
                        <div style="margin-top: 10px;" class="projet fade-in">
                            <h4 >Projet 2 <br><a href="http://www.celalbiber.fr" target="_blank">www.celalbiber.fr</a></h4>
                            <p >Mon portfolio programmé en HTML, CSS, JS et PHP</p>
                            <div class="imgTG"><a href="http://www.celalbiber.fr" target="_blank">
                                <img  src="img/Sans_titre00.png" alt="création de sites web">
                            </a></div>
                        </div>
                    </div></div>
                    <div class="categorie">
                        <div class="projets">
                        <h3 class="fade-in">Sites WordPress :</h3>
                        <div class="projet fade-in">
                            <h4 >Projet 1 <br><a href="http://www.easysuccess.fr" target="_blank">www.easysuccess.fr</a></h4>
                            <p >Sites réalisé avec WordPress pour un centre de formation</p>
                            <div class="imgTG"><a href="http://www.easysuccess.fr" target="_blank">
                                <img  src="img/logoa.png" alt="développement front-end">
                            </a></div>
                        </div>
                    </div></div>
                    <div class="categorie">
    <h3 class="fade-in">Travaux Graphiques :</h3>
    <div >
        <div class="projet fade-in">
            <h4 >Projet 1 <br> Flyer</h4>
            <p >Réalisé pour l'entreprise de sécurité privée Easy Success</p>
            <div class="imgTG"><img src="img/flyer.png" alt="développement back-end" class="clickable-image imgTG" data-modal-target="modal1"></div>
        </div>
    </div>
    <div style="margin-top: 10px;" class="projets">
        <div class="projet fade-in">
            <h4  id="card-title">Projet 2 <br> Carte de visite</h4>
            <p >Réalisé pour l'entreprise de sécurité privée Easy Success</p>
            <div  class="imgTG"><img src="img/carte_de_visite.png" alt="freelance développeur web" class="clickable-image " data-modal-target="modal2"></div>
        </div>
    </div>
</div>

<!-- Modals -->
<div id="modal1" class="modal">
    <span class="close">&times;</span>
    <img class="modal-content" id="img01">
</div>

<div id="modal2" class="modal">
    <span class="close">&times;</span>
    <img class="modal-content" id="img02">
</div>

<a href="#skillBar" class="scroll-btn fade-in"><i class="fas fa-chevron-down"></i></a>
            </div>
</section>

        <!-- skill bar -->
        <section id="skillBar" class="skills">
            <div class="section-skills">
                <h2 class="fade-in">Mes Compétences</h2>
                
                <p class="fade-in">En tant que <strong>développeur web</strong> passionné, j'ai consacré de nombreuses heures à perfectionner mes compétences et à suivre les dernières technologies. Mon engagement envers l'excellence et la création de solutions web innovantes se reflète dans chaque projet. Voici un aperçu de mes compétences clés :</p>
                <div class="containerCompetences">
                <div class="BarreCompetences">

                <div class="iconeWidht">
                <div class="fade-in iconeCompetence">HTML <br><i class="fa-brands fa-html5"></i></div> 
                </div>

                <div class="iconeWidht">
                <div class="fade-in iconeCompetence">CSS <br><i class="fa-brands fa-css3-alt"></i></div> 
                </div>

                
                <div class="iconeWidht">
                <div class="fade-in iconeCompetence">JavaScript <br><i class="fa-brands fa-js-square"></i></div> 
                </div>


            

                <div class="iconeWidht1">
                <div class="fade-in iconeCompetence">PHP <br><i class="fa-brands fa-php"></i></div> 
                </div>
                
                <div class="iconeWidht1">
                <div class="fade-in iconeCompetence">SQL <br><i class="fa-solid fa-database"></i></div> 
                </div>

               

                <div class="iconeWidht">
                <div class="fade-in iconeCompetence">WordPress <br><i class="fa-brands fa-wordpress"></i></div> 
                </div>


            </div>

            <div class="cv-section">
                    <h3 class="fade-in">Cliquez sur mon CV pour l'agrandir</h3>
                    <img src="img/cv.png" alt="CV" class="clickable-image fade-in" id="cv-image" data-modal-target="cv-modal">
                    <a href="doc/cv.pdf" download="Mon_CV.pdf" class="download-cv">
                            <button type="button" class="form-contact-button cvDL fade-in">TÉLÉCHARGER MON CV</button>

                    </a>
                </div>
            
            <!-- Conteneur pour l'image en grand -->
            <div id="cv-modal" class="modal">
                <span class="close">&times;</span>
                <img class="modal-content" id="modal-img">
            </div>
            </div>
        </div>
               
            
        </section>

        <a href="#contact" class="scroll-btn fade-in"><i class="fas fa-chevron-down"></i></a>
            

        <section id="contact" class="formulaire">

                <h2 class="titreFormulaire fade-in">CONTACTEZ-MOI</h2>
                <h3 class="fade-in invitationMessage">N'hésitez pas à me contacter, je vous répondrai dans les plus brefs délais.</h3>
<div class="containerFormRs">
                
                
                <form action="" class="containerForm form-contact fade-in" method="POST" tabindex="1">
                    <?=  $erreur  ?>
                <input type="text" class="form-contact-input" name="nom" placeholder="Nom " required />
                <input type="text" class="form-contact-input" name="email" placeholder="Email " required />
                <input type="text" class="form-contact-input" name="telephone" placeholder="Numéro de téléphone " />
                <textarea class="form-contact-textarea" name="description" placeholder="Écrivez-moi à l'aide de ce formulaire " required></textarea>
                <button type="submit" class="form-contact-button fade-in">ENVOYER</button>
                </form>

                <div class="LieuxContact ">
                    <div> 
                    <i class="fas fa-map-marker-alt fade-in"></i>
                    <p class="fade-in">Île-de-France</p>
                    </div>

                    <div>
                    <i class="fas fa-phone fade-in"></i> 
                    <p class="fade-in">06 58 18 62 40</p>
                    </div>
                </div>

               

            
</div>
        </section>

</main>