function loadSiteParts() {
//    $('#navigation').load('navigation.html');
    $('#header').load('header.html');
    $('#navigation').load('navigation.html');
    $('#contenzioso').load('contenzioso_table.html');
    /* this may be just part of contenzioso page. For now it gets ignored by any other page. L 2/20/2015 */
    $('#buttons-container').load('buttons.html');
    /*$('#navigation-bottom').load('header.html');*/
    $('#colophon').load('footer.html');
    $('header').addClass('notranslate');
    /*this is to add class translate and notranslate*/
    $('footer').addClass('notranslate');
    $('<link rel=\'stylesheet\' type=\'text/css\'  media=\"only screen and (min-width:737px) and (max-width:880px)\" href=\'../css/screen_layout_medium.css\'\/>\
                      <link rel=\'stylesheet\' type=\'text/css\'  media=\"only screen and (min-width:50px) and (max-width:736px)\" href=\'../css/screen_layout_small.css\'\/>\
                      <link rel=\'stylesheet\' type=\'text/css\'  media=\"only screen and (max-height:440px)\" href=\'../css/screen_layout_small.css\'\/>\\').insertAfter('.responsive_css');

}




