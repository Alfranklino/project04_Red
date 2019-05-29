// jQuery.noConflict();
// (function ($) {
//     $(function () {
//         console.log($('#contact-info-2').$('.contact-info').$('p:nth-child(3)'));
//         // $('#contact-info-2').$('.contact-info').$('p:nth-child(3)').hide();
//         console.log("test");
//     }
//     )
// });

// $ = jQuery.noConflict(true);
// console.log("log");
// console.log($('#contact-info-2').$('.contact-info').$('p:nth-child(3)'));
// (function($) {
//     // console.log("log");
//     // console.log($('#contact-info-2').$('.contact-info').$('p:nth-child(3)'));
//     // $('#contact-info-2').$('.contact-info').$('p:nth-child(3)').hide();
// })(jQuery);
// $.noConflict();

// console.log("log");
// console.log(document.getElementById('contact-info-2').document.getElementByClassName('contact-info').getElementByTagName('p')[3];
let mainSection = document.getElementById('contact-info-2');

//     nextSection = mainSection.document.getElementByClassName('contact-info');
//     finalElement = nextSection.document.getElementsByTagName('p')[3];

// finalElement.hide();


// console.log($);

// $ = jQuery.noConflict(true);

// (function ($) {
//     console.log($('#contact-info-2').$('.contact-info').$('p:nth-child(3)'));

// })(jQuery);




document.addEventListener('DOMContentLoaded', function (event) {
    let mainSection = document.getElementById('contact-info-2');
    let nextSection = mainSection.getElementsByClassName('contact-info')[0];
    let finalElement = nextSection.getElementsByTagName('p')[2];
    // console.log(finalElement);/
    finalElement.style.display = "none";


    let mainSection1 = document.getElementById('contact-info-3');

    if (mainSection1 != null) {
        let nextSection1 = mainSection1.getElementsByClassName('contact-info')[0];
        let finalElement1 = nextSection1.getElementsByClassName('social')[0];
        // console.log(finalElement1);
        finalElement1.style.display = "none";
    }



    // let imgPost = document.getElementsByClassName('attachment-large')[0];
    // imgPost.style.display = "none";

    console.log("...");

});

jQuery(document).ready(function ($) {

    // $ Works! You can test it with next line if you like
    console.log($);
    

});

