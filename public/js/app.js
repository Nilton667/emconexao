document.addEventListener('DOMContentLoaded', function() {
    //Evento DOMContentLoaded
    setTimeout(function(){
        with(document.querySelector('.preload')){
            style.opacity       = '0';
            style.pointerEvents = 'none';
        }
        with(document.querySelector('.onload')){
            style.opacity       = '1';
            style.pointerEvents = 'auto';
        }
        with(document.querySelector('body')){
            style.overflow      = 'auto';
        }
    }, 1000);
});

//Carregamento
if(document.querySelector('.preload')){
  function load() {
    if($('.preload').hasClass('load') == false){
        $('.preload').addClass('load');
    }
  }
  function onload() {
    if($('.preload').hasClass('load')){
        $('.preload').removeClass('load');
    }
  }
}

function setLang(lang) {

}

function themeData() {
    var theme = getCookie("theme") ?? 'light';

    if (theme == 'light') {
        theme = 'dark';
    } else {
        theme = 'light';
    }

    setCookie("theme", theme, 365);
    var htmlElement = document.querySelector("html");
    if (htmlElement) {
        htmlElement.setAttribute('data-bs-theme', theme);
    }
}

function setCookie(name,value,days) {
    var expires = "";
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days*24*60*60*1000));
        expires = "; expires=" + date.toUTCString();
    }
    document.cookie = name + "=" + (value || "")  + expires + "; path=/";
}

function getCookie(name) {
  let cookieName = undefined
  document.cookie.split(';').forEach(function(element) {
    let [k, v] = element.split('=');
    if(k.trim() == name){
      cookieName = v
    }
  })
  return cookieName
}
