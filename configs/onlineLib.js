function callAllCSS(cssfiles) {
    var src = document.createElement("link");
    src.setAttribute("rel", "stylesheet");
    src.setAttribute("type", "text/css");
    src.setAttribute("href", cssfiles);
    document.getElementsByTagName("head")[0].appendChild(src);
}
callAllCSS("https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.min.css"); // BOOTSTRAP ICON
callAllCSS("https://cdn.jsdelivr.net/npm/bootstrap/dist/css/bootstrap.min.css"); // BOOTSTRAP CSS
callAllCSS("https://cdn.jsdelivr.net/npm/animate.css/animate.min.css"); // ANIMATE CSS

function callAllJsLib(jsfiles) {
    var src = document.createElement("script");
    src.setAttribute("type", "text/javascript");
    src.setAttribute("src", jsfiles);
    document.getElementsByTagName("head")[0].appendChild(src);
}
callAllJsLib("https://cdn.jsdelivr.net/npm/bootstrap/dist/js/bootstrap.bundle.min.js"); // BOOTSTRAP JS
callAllJsLib("https://cdn.jsdelivr.net/npm/jquery/dist/jquery.min.js"); // JQUERY
callAllJsLib("https://cdn.jsdelivr.net/npm/@floating-ui/dom/dist/floating-ui.dom.umd.min.js"); //FLOATING UI