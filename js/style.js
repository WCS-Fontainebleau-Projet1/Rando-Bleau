var containerElt = document.getElementsByClassName('container');
var containerEltHeight = parseFloat(getComputedStyle(containerElt[0]).height);
var delta = window.innerHeight - containerEltHeight;

containerElt[0].style.marginTop = delta/2 + 'px';

$('.dropdown-toggle').dropdown();



$(function () {
  $('[data-toggle="popover"]').popover()
});
