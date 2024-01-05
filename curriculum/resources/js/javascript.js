/* qui inserirò il mio codice javascript */

document.addEventListener('DOMContentLoaded', function() {
    var intestazione = document.getElementById('intestazione');
    intestazione.classList.add('animate-slide-in');
});


document.addEventListener('DOMContentLoaded', function() {
    var intestazione = document.getElementById('intestazione');
    intestazione.classList.add('animate-slide-in');
  });



  document.addEventListener('DOMContentLoaded', function () {
    var competenzeSection = document.getElementById('contenitore-sezione-competenze');
    var competenzeDivs = document.querySelectorAll('#contenitore-competenze div');
  
    function isInViewport(element) {
      var rect = element.getBoundingClientRect();
      return (
        rect.top >= 0 &&
        rect.left >= 0 &&
        rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
        rect.right <= (window.innerWidth || document.documentElement.clientWidth)
      );
    }

    
  
    window.addEventListener('scroll', function () {
      if (isInViewport(competenzeSection)) {
        document.getElementById('contenitore-competenze').classList.add('show');
      } else {
        document.getElementById('contenitore-competenze').classList.remove('show');
      }
    });
  
    
    window.addEventListener('load', function () {
      if (isInViewport(competenzeSection)) {
        document.getElementById('contenitore-competenze').classList.add('show');
      }
    });
  });