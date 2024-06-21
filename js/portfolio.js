// / Fonction pour gérer le menu responsive :
function responsiveMenu() {
  $('.menuTitle').click(function () {
      if ($('.menu').css('display') === 'none') {
          $('.menu').css({"display":"block", "max-height":"800px"});
      } else {
          $('.menu').css({"max-height":"0"});
          setTimeout(function() {
              $('.menu').css({"display":"none"});
          }, 500); // Match the transition duration in CSS
      }
  });



// Fermer le menu quand un lien dans le menu est cliqué :
  $('.menu li a').click(function () {
      if ($('.menu').css('display') === 'block') {
          $('.menu').css({"max-height":"0"});
          setTimeout(function() {
              $('.menu').css({"display":"none"});
          }, 500); // Match the transition duration in CSS
      }
  });


// Fermer le menu en cliquant en dehors de celui-ci
  $(document).click(function(event) {
      var target = $(event.target);
      if (!target.closest('.mainMenu').length && $('.menu').css('display') === 'block') {
          $('.menu').css({"max-height":"0"});
          setTimeout(function() {
              $('.menu').css({"display":"none"});
          }, 500); // Match the transition duration in CSS
      }
  });
}

// // Initialisation du menu responsive
$(function() {
  $(".menu").css({"display":"none","transition":"none","max-height":"inherit"});
  $("#toggleMenu").remove();
  responsiveMenu();
});

// Gestion du changement de style de la barre de navigation lors du défilement
document.addEventListener('scroll', () => {
  const header = document.querySelector('nav');
  if (window.scrollY > 5) {
      header.classList.add('scrolled');
  } else {
      header.classList.remove('scrolled');
  }
});

// Changement de couleur des liens du menu lors du défilement
document.addEventListener('DOMContentLoaded', function() {
  // Sélectionner les éléments du menu
  const menuLinks = document.querySelectorAll('.a1, .a2, .a3, .a4');


// Vérifier que les éléments sont bien sélectionnés
  if (menuLinks.length === 0) {
      console.error('Aucun élément trouvé avec les classes .a1, .a2, .a3, .a4');
      return;
  }

// Ajouter un écouteur d'événement pour le défilement
  window.addEventListener('scroll', function() {
      menuLinks.forEach(function(link) {
          if (window.scrollY > 5) {
              link.classList.add('colorA');
          } else {
              link.classList.remove('colorA');
          }
      });
  });

// Gestion de l'affichage des images dans un modal au clic
  const modals = document.querySelectorAll('.modal');
  const images = document.querySelectorAll('.clickable-image');
  const closeBtns = document.querySelectorAll('.close');

  images.forEach(image => {
      image.addEventListener('click', function() {
          const modalId = this.dataset.modalTarget;
          const modal = document.getElementById(modalId);
          const modalImg = modal.querySelector('.modal-content');
          modal.style.display = 'block';
          modalImg.src = this.src;
      });
  });

  closeBtns.forEach(closeBtn => {
      closeBtn.addEventListener('click', function() {
          this.closest('.modal').style.display = 'none';
      });
  });

  window.addEventListener('click', function(event) {
      modals.forEach(modal => {
          if (event.target == modal) {
              modal.style.display = 'none';
          }
      });
  });
});

//  Gestion des barres de compétences qui se remplissent

$(document).ready(function () {
// Animation de texte avec effet de frappe
  (function ($) {
    $.fn.writeText = function (content) {
      var contentArray = content.split(""),
        current = 0,
        elem = this;
      setInterval(function () {
        if (current < contentArray.length) {
          elem.text(elem.text() + contentArray[current++]);
        }
      }, 80);
    };
  })(jQuery);


// Exemple d'utilisation de l'animation de frappe
  $("#holder").writeText("WEB DESIGNER + FRONT-END DEVELOPER");

  // Initialisation de WOW.js pour les animations au défilement
  new WOW().init();

  // Gestion du menu déroulant mobile
  var main = function () {
    $(".fa-bars").click(function () {
      $(".nav-screen").animate(
        { right: "0px" }, 200
      );
      $("body").animate(
        { right: "285px" }, 200
      );
    });

    // Then push them back
    $(".fa-times").click(function () {
      $(".nav-screen").animate(
        { right: "-285px" }, 200
      );
      $("body").animate(
        { right: "0px" }, 200
      );
    });

    $(".nav-links a").click(function () {
      $(".nav-screen").animate(
        { right: "-285px" }, 500
      );
      $("body").animate(
        { right: "0px" }, 500
      );
    });
  };

  $(document).ready(main);

  // Configuration de Fullpage.js pour le défilement complet de la page
  $("#fullpage").fullpage({
    scrollBar: true,
    responsiveWidth: 400,
    navigation: true,
    navigationTooltips: ["home", "about", "portfolio", "contact", "connect"],
    anchors: ["home", "about", "portfolio", "contact", "connect"],
    menu: "#myMenu",
    fitToSection: false,

    afterLoad: function (anchorLink, index) {
      if (index == 1) {
        $(".fa-chevron-down").css("opacity", "1");
        $(".header-links a").css("color", "white");
        $(".header-links").css("background-color", "transparent");
      } else if (index != 1) {
        $(".header-links a").css("color", "black");
        $(".header-links").css("background-color", "white");
      }

      if (index == 2) {
        $(".skillbar").each(function () {
          $(this).find(".skillbar-bar").animate(
            { width: $(this).attr("data-percent") }, 2500
          );
        });
      }
    }
  });

  //  Liens pour naviguer entre les sections de Fullpage.js
  $(document).on("click", "#moveDown", function () {
    $.fn.fullpage.moveSectionDown();
  });

  // Fullpage.js link navigation
  $(document).on("click", "#skills", function () {
    $.fn.fullpage.moveTo(2);
  });

  $(document).on("click", "#projects", function () {
    $.fn.fullpage.moveTo(3);
  });

  $(document).on("click", "#contact", function () {
    $.fn.fullpage.moveTo(4);
  });

  // Fonction pour un défilement doux entre les sections
  $(function () {
    $("a[href*=#]:not([href=#])").click(function () {
      if (
        location.pathname.replace(/^\//, "") ==
          this.pathname.replace(/^\//, "") &&
        location.hostname == this.hostname
      ) {
        var target = $(this.hash);
        target = target.length ? target : $("[name=" + this.hash.slice(1) + "]");
        if (target.length) {
          $("html,body").animate(
            { scrollTop: target.offset().top }, 700
          );
          return false;
        }
      }
    });
  });

    // Gestion du formulaire en AJAX pour éviter le rechargement de la page
  $(function () {
    var form = $("#ajax-contact");
    var formMessages = $("#form-messages");

    $(form).submit(function (e) {
      e.preventDefault();

      var formData = $(form).serialize();

      $.ajax({
        type: "POST",
        url: $(form).attr("action"),
        data: formData
      })
      .done(function (response) {
        $(formMessages).removeClass("error").addClass("success");
        $(formMessages).text(response);
        $("#name, #email, #message").val("");
      })
      .fail(function (data) {
        $(formMessages).removeClass("success").addClass("error");
        $(formMessages).text(data.responseText !== "" ? data.responseText : "Oops! An error occured and your message could not be sent.");
      });
    });
  });
});



  // Gestion du bouton retour en haut de la page

const btn = document.querySelector('.btn');

btn.addEventListener('click', () => {
    window.scrollTo({
        top: 0,
        left: 0,
        behavior: "smooth"
    });
});

document.addEventListener('scroll', () => {
    const hdp = document.querySelector('.btn');
    if (window.scrollY > 50) {
        hdp.classList.remove('display');
    } else {
        hdp.classList.add('display');
    }
});

  // Fonction pour le défilement fluide vers des cibles spécifiques

document.addEventListener('DOMContentLoaded', function() {
  // Scroll buttons
  const scrollBtns = document.querySelectorAll('.scroll-btn');
  scrollBtns.forEach(btn => {
      btn.addEventListener('click', function() {
          const target = document.querySelector(this.dataset.target);
          target.scrollIntoView({ behavior: 'smooth' });
      });
  });

 
});


// Fonction pour gérer les animations d'apparition et de disparition lors du défilement
document.addEventListener('DOMContentLoaded', function () {
  const observerOptions = {
      root: null, // observe la fenêtre du navigateur
      rootMargin: '0px',
      threshold: 0.33 // Seuil pour déclencher l'apparition à 33% de visibilité
  };

  const observer = new IntersectionObserver((entries, observer) => {
      entries.forEach(entry => {
          if (entry.isIntersecting) {
              entry.target.classList.add('show');
          } else {
              entry.target.classList.remove('show');
          }
      });
  }, observerOptions);

  const elementsToObserve = document.querySelectorAll('.fade-in');
  elementsToObserve.forEach(element => {
      observer.observe(element);
  });
});





  // Gestion des cookies

const cookieContainer = document.querySelector(".cookie-container");
const acceptButton = document.querySelectorAll(".cookie-btn")[0]; // Bouton Accepter
const refuseButton = document.querySelectorAll(".cookie-btn")[1]; // Bouton Refuser

acceptButton.addEventListener("click", () => {
  cookieContainer.classList.remove("active");
  localStorage.setItem("cookieConsent", "accepted");
});

refuseButton.addEventListener("click", () => {
  cookieContainer.classList.remove("active");
  localStorage.setItem("cookieConsent", "refused");
});

setTimeout(() => {
  if (!localStorage.getItem("cookieConsent")) {
    cookieContainer.classList.add("active");
  }
}, 2000);



