var posts = document.querySelectorAll('.link-tag, .link-description, .link-title, a, p, .dailyEntryTags');
emojione.ascii = false; /* change to 'true' to have ASCII conversion */
emojione.imageType = 'svg'; /* change to 'png' to have emojis in PNG */
emojione.imagePathSVG = "../plugins/emojione/assets/svg/";
emojione.imagePathPNG = "../plugins/emojione/assets/png/";
Array.prototype.forEach.call(posts, function(el, i){
  var parsed = emojione.toImage(el.innerHTML);
  el.innerHTML = parsed;
});
