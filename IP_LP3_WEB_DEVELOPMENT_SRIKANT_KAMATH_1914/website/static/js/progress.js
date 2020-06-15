// JS for 'about.html' File
// Constants created for the Classes passed to QuerySelector method
const htmlBar = document.querySelector('.bar-html')
const cssBar = document.querySelector('.bar-css')
const jsBar = document.querySelector('.bar-js')
const djangoBar = document.querySelector('.bar-django')
const button = document.querySelector('.but')

// Constants for which a SEPARATE TimelineLite Object is instantiated
const abt = document.querySelector('.about-text');
const edu = document.querySelector('.study');

// TimelineLite instantiated for 'edu' and 'abt' constants
var t2 = new TimelineLite();

// TimelineLite instantiated for the Rest of the Constants 
// Here 'paused' is set to True so that Animation Remains Paused until Invoked..Also 'reversed' set to True so that the Animation Reversal is ALSO POSSIBLE
var tl = new TimelineLite({paused:true,reversed:true})

// Animation defined for ALL the 4 'Skill' Progress Bars
tl.fromTo(htmlBar, .75, 
    {width: `calc(0%)`},
    {width:  `calc(89% - 6px)`, ease:Power2})

tl.fromTo(cssBar, .75, 
    {width: `calc(0%)`},
    {width:  `calc(87% - 6px)`, ease:Power2})
    
tl.fromTo(jsBar, .75, 
    {width: `calc(0%)`},
    {width:  `calc(84% - 6px)`, ease:Power2})

tl.fromTo(djangoBar, .75, 
    {width: `calc(0%)`},
    {width:  `calc(92% - 6px)`, ease:Power2})

// Event Listener for the Heading with class of '.but'
button.addEventListener("mouseover",() => {
    // isActive() function would check for the TimelineLite..whether it is Active..if yes then No Animation is ALLOWED during the time its Active
    if(tl.isActive())
    {
        return false;
    }
    console.log("Mouse-Over")
    toggleTween(tl)                            // Would Take in the TimelineLite object and Decide Accordingly whether to Display the Animation or remove it..
});

button.addEventListener("mouseout",(e) => {
    if(tl.isActive())
    {
        return false;
    }
    console.log("Mouse-Out")
    toggleTween(tl)                            // Would Take in the TimelineLite object and Decide Accordingly whether to Play the Animation or reverse it..
});

// Function that would Define the Actions for the TimelineLite object..
function toggleTween(tween)
{
    console.log("In 'toggleTween' function")
    // 'reversed' is a variable that is declared with our 'TimelineLite' object so that Animation can be Reversed and worked upon
    // Ternary Operator that would decide to Play or Reverse the Played Animation..
    tween.reversed() ? tween.play() : tween.reverse();
}

// 'fromTo' method would set/reset the Color of 'about-text' Class in which The text is stored within the Container
t2.fromTo(abt,3,{color: 'black'},{color: 'white',ease:Power2})

// 'fromTo' method would set/reset the opacity and 'y' position of 'study' Conatiner which holds the Education Data
t2.fromTo(edu,5.5,{y:'200',opacity:0},{y:'0',opacity:1,ease:Power4})
