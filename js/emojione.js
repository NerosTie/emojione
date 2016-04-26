var posts = document.querySelectorAll('.link-tag, .link-description, .link-title, a, p, .dailyEntryTags');
emojione.ascii = false; /* change to 'true' to have ASCII conversion */
emojione.imageType = 'svg'; /* change to 'png' to have emojis in png */
emojione.imagePathSVG = "https://cdn.jsdelivr.net/emojione/assets/svg/";
emojione.imagePathPNG = "https://cdn.jsdelivr.net/emojione/assets/png/";
Array.prototype.forEach.call(posts, function(el, i){
  var parsed = emojione.toImage(el.innerHTML);
  el.innerHTML = parsed;
});
