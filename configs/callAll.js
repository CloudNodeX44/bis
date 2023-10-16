function callAll(jsfiles) {
    var src = document.createElement("script");
    src.setAttribute("type", "text/javascript");
    src.setAttribute("src", jsfiles);
    document.getElementsByTagName("head")[0].appendChild(src);
}
callAll("../../configs/pwd/pwd.js");
callAll("../../configs/voter/voter.js");
callAll("../../configs/address/address.js");
callAll("../../configs/education/education.js");