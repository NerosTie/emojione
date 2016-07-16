var posts = document.querySelectorAll('.link-tag, .link-description, .link-title, a, p, .dailyEntryTags');
Array.prototype.forEach.call(posts, function(el, i){
    var parsed = emojione.shortnameToUnicode(el.innerHTML);
    el.innerHTML = parsed;
});
