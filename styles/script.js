$(function () {
  //Pour la vitesse de defilement du carousel
  $('.carousel').carousel({
    interval: 3000
  })

  /*** les fleches à droite de la partie a propos */
  var adresseArrow = $('#adresseArrow');
  var telArrow = $('#telArrow');
  var mailArrow = $('#mailArrow');

  //masque les éléments
  $('#adresseTxt').hide();
  $('#telTxt').hide();
  $('#emailTxt').hide();

  //affiche les elements après avoir appuyer sur la fleche
  $('#adresseH5').on('click', function () {
    switch (adresseArrow.attr('class')) {
      case 'bi bi-arrow-down-circle-fill':
        $('#adresseTxt').show(1000);
        adresseArrow.attr('class', 'bi bi-arrow-up-circle-fill')
        break;

      case 'bi bi-arrow-up-circle-fill':
        $('#adresseTxt').hide(1000);
        adresseArrow.attr('class', 'bi bi-arrow-down-circle-fill')
        break;
    }

  });

  $('#telH5').on('click', function () {
    switch (telArrow.attr('class')) {
      case 'bi bi-arrow-down-circle-fill':
        $('#telTxt').show(1000);
        telArrow.attr('class', 'bi bi-arrow-up-circle-fill')
        break;

      case 'bi bi-arrow-up-circle-fill':
        $('#telTxt').hide(1000);
        telArrow.attr('class', 'bi bi-arrow-down-circle-fill')
        break;
    }

  });

  $('#mailH5').on('click', function () {
    switch (mailArrow.attr('class')) {
      case 'bi bi-arrow-down-circle-fill':
        $('#emailTxt').show(1000);
        mailArrow.attr('class', 'bi bi-arrow-up-circle-fill')
        break;

      case 'bi bi-arrow-up-circle-fill':
        $('#emailTxt').hide(1000);
        mailArrow.attr('class', 'bi bi-arrow-down-circle-fill')
        break;
    }

  });

  /*** */

  /*** Defilement vers les ancres */
  $("a[href*='#']:not([href='#'])").click(function () {
    if (
      location.hostname == this.hostname
      && this.pathname.replace(/^\//, "") == location.pathname.replace(/^\//, "")
    ) {
      var anchor = $(this.hash);
      anchor = anchor.length ? anchor : $("[name=" + this.hash.slice(1) + "]");
      if (anchor.length) {
        $("html, body").animate({ scrollTop: anchor.offset().top }, 1500);
      }
    }
  });


});