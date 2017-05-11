(function() {
  function flip(el) {
    var obj = document.getElementById('card');
    if (obj.getAttribute('flipped') === 'true') {
      obj.children[1].style.transform = "perspective(600px) rotateY(-180deg)";
      obj.children[0].style.transform = "perspective(600px) rotateY(0deg)";
      obj.setAttribute('flipped', 'false');
    } else {
      obj.children[1].style.transform = "perspective(600px) rotateY(0deg)";
      obj.children[0].style.transform = "perspective(600px) rotateY(180deg)";
      obj.setAttribute('flipped', 'true');
    }
  }

  var btnFlip = document.getElementsByClassName("flip");
  for (var i = 0; i < btnFlip.length; i++) {
    btnFlip[i].addEventListener('click', flip, false);
  }

})();
