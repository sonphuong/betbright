(function() {
  function flip(el) {
    var obj = document.getElementById('card');
    var objTscsText =  document.getElementById('tscs-text');
    if (obj.getAttribute('flipped') === 'true') {
      obj.children[1].style.transform = "perspective(600px) rotateY(-180deg)";
      obj.children[0].style.transform = "perspective(600px) rotateY(0deg)";
      obj.setAttribute('flipped', 'false');
      objTscsText.classList.remove('overflow-y')
      console.log('front');
    } else {
      obj.children[1].style.transform = "perspective(600px) rotateY(0deg)";
      obj.children[0].style.transform = "perspective(600px) rotateY(180deg)";
      obj.setAttribute('flipped', 'true');
      setTimeout(function(){ objTscsText.classList.add('overflow-y'); }, 2);
      console.log('back');
    }
  }

  var btnFlip = document.getElementsByClassName("flip");
  for (var i = 0; i < btnFlip.length; i++) {
    btnFlip[i].addEventListener('click', flip, false);
  }

})();
