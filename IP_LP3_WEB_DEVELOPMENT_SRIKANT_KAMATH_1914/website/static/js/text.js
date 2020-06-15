// JS for 'index.html' File

const texts = ['Welcome To My Website','Good To Have You Here'];               // The text to be Displayed would be Rendered from this Array..
let count = 0;                         // 'count' would ITERATE Completely over the Strings Present in the Array..
let index = 0;                         // 'index' would ITERATE UPON The letters of the String in the Array
let currentText = '';                  // 'currentText' measn the Text held by the ''
let letter = '';                       // 'letter' is for Specifying Letter within the 'currentText'

// Anonymous Function Declared so that it gets INVOKED AUTOMATICALLY..
(function type()
{
    // For looping Over the Array Continuously..i.e as soon as the value of 'count' becomes 2 i.e length of the 'texts' array..'count' RESETS..
    if(count === texts.length)         
    {
        count = 0;                              
    }
    currentText = texts[count];                  // The selected Text by 'count' is stored in 'currentText' variable which was INITIALLY EMPTY..
    letter = currentText.slice(0, ++index);      // Individually Every Letter of the String in 'currentText' is stored in 'letter' variable..It would Iterate from Slice from 0 to the Valid Index Values.. 

    document.querySelector('.typing').textContent = letter;   // The 'textContent' of the 'typing' class in HTML File is set to the Value currently stored in 'letter'
    if(letter.length === currentText.length)               
    {
        count++;                                 // 'count' Value increments because the Previous String Data has been Traversed and Displayed
        index = 0;                               // 'index' value i.e value for Reading the Letters of the NEW String is Reset to 0
    }

    // For INVOKING the Function After Every 400ms..
    setTimeout(type,400);

}());

