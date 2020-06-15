// JS for 'contact.html' File

// All Required Classes and Id's are Passed to the QuerySelector and corresponding Constants are created for Use in method 
const cont = document.querySelector('.container');
const ptr = document.querySelector('#name')
const ptr1 = document.querySelector('#email')
const ptr2 = document.querySelector('#desc')

// Instantiating TimelineLite..
const tl = new TimelineLite();

// 'fromTo' Method is used to Set/Reset The Opacity and 'x' position..
// Also 'onComplete()' method is Defined which would ENABLE the POINTER EVENTS on Completion of the Animation..
tl.fromTo(cont,3,{opacity:"0",x:'1000'},{opacity:"1",x:'0',onComplete: function() 
{
    ptr.style.pointerEvents = "auto";
    ptr1.style.pointerEvents = "auto";
    ptr2.style.pointerEvents = "auto";
    console.log("Done");
},ease:Power2})                      // All Done with Ease Effect of Power-2

tl.play();                           // 'play()' method would run the Object as soon as Page is Loaded