/**
 * Created with IntelliJ IDEA.
 * User: danielabecker
 * Date: 8/9/15
 * Time: 6:44 PM
 * To change this template use File | Settings | File Templates.
 */

function setCookie(cname, cvalue, exdays) {
    var expires;
    if (exdays === 0) {
        expires = '';
    } else {
        var d = new Date();
        d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
        expires = "expires=" + d.toGMTString();
    }
    var domain = (typeof domain === "undefined") ? '' : "; domain="+domain;
    document.cookie = cname + "=" + cvalue + "; " + expires + "path=" + path + domain;
}

function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i].trim();
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

//Google provides this function
function googleTranslateElementInit() {
    new google.translate.TranslateElement({
        pageLanguage: 'es',
        includedLanguages: 'en',
        layout: google.translate.TranslateElement.InlineLayout.SIMPLE,
        autoDisplay: false
    },'google_translate_element');
}

//Using jQuery
$(document).ready(function() {
    $(document).on('click','#lang-change-en', function() {
        setCookie('googtrans', '/es/en', 0);
        setCookie('googtrans', '', 0);
        location.reload();
    });

    $(document).on('click', '#lang-change-es', function() {
        setCookie('googtrans', '', 0);
        setCookie('googtrans', '', 0);
        location.reload();
    });

    var googTrans = getCookie('googtrans');

    if (googTrans === '/es/en') {
        var src = $('#lang-change-en > img').attr('src').replace('en-flag', 'es-flag');
        $('#lang-change-en > img').attr('src', src);
        $('#lang-change-en').attr('id', 'lang-change-es');
    }
});
