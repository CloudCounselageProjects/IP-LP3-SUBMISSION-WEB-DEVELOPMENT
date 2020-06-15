// JS for 'blogpost.html' File
// QuerySelector is Applied on class 'ctr' and a Constant named 'edu' Assigned to it..
const edu = document.querySelector('.ctr');

// Instantiating TimelineLite..
var t2 = new TimelineLite();

// 'fromTo' Method is used to Set/Reset The Opacity and 'x' position..
// Also 'onComplete()' method is Defined which would ENABLE the POINTER EVENTS on Completion of the Animation..
t2.fromTo(edu,5.5,{x:'200',opacity:0},{x:'0',opacity:1,onComplete: function() 
{
    edu.style.pointerEvents = "auto";
},ease:Power4})                               // All Done with Ease Effect of Power-4
