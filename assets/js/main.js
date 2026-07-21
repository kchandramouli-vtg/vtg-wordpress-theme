(function(){
  "use strict";
  var h=document.getElementById("vtg-header");
  window.addEventListener("scroll",function(){if(h)h.classList.toggle("vtg-header--scrolled",window.scrollY>60);},{passive:true});
  if(h)h.classList.toggle("vtg-header--scrolled",window.scrollY>60);
  var t=document.getElementById("vtg-mobile-toggle");
  if(t)t.addEventListener("click",function(){document.body.classList.toggle("vtg-mobile-nav-open");});
  function reveal(){document.querySelectorAll(".vtg-fade-up").forEach(function(el){if(el.getBoundingClientRect().top<window.innerHeight*0.88)el.classList.add("vtg-visible");});}
  window.addEventListener("scroll",reveal,{passive:true});
  window.addEventListener("load",reveal);
  setTimeout(reveal,100);
  document.querySelectorAll('a[href^="#"]').forEach(function(a){a.addEventListener("click",function(e){var id=this.getAttribute("href");if(id==="#")return;var t=document.querySelector(id);if(t){e.preventDefault();window.scrollTo({top:t.getBoundingClientRect().top+window.scrollY-(h?h.offsetHeight:0)-20,behavior:"smooth"});}});});
})();
