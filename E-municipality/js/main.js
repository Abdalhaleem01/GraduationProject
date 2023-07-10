(function ($) {
    "use strict";

    // Initiate the wowjs
    new WOW().init();

    // Sticky Navbar
    $(window).scroll(function () {
        if ($(this).scrollTop() > 40) {
            $('.navbar').addClass('sticky-top');
        } else {
            $('.navbar').removeClass('sticky-top');
        }
    });
    
    // Dropdown on mouse hover
    $(document).ready(function () {
        function toggleNavbarMethod() {
            if ($(window).width() > 992) {
                $('.navbar .dropdown').on('mouseover', function () {
                    $('.dropdown-toggle', this).trigger('click');
                }).on('mouseout', function () {
                    $('.dropdown-toggle', this).trigger('click').blur();
                });
            } else {
                $('.navbar .dropdown').off('mouseover').off('mouseout');
            }
        }
        toggleNavbarMethod();
        $(window).resize(toggleNavbarMethod);
    });
    
    
    // Back to top button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });
    $('.back-to-top').click(function () {
        $('html, body').animate({scrollTop: 0}, 1500, 'easeInOutExpo');
        return false;
    });


    // Testimonials carousel
    $(".testimonial-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1500,
        margin: 45,
        dots: true,
        loop: true,
        center: true,
        responsive: {
            0:{
                items:1
            },
            576:{
                items:1
            },
            768:{
                items:2
            },
            992:{
                items:3
            }
        }
    });
    
})(jQuery);




// Get the dropdown element
var dropdown = document.querySelector('.dropdown');

// Get the dropdown toggle element
var dropdownToggle = dropdown.querySelector('.dropdown-toggle');

// Get the dropdown menu element
var dropdownMenu = dropdown.querySelector('.dropdown-menu');

// Get all dropdown items
var dropdownItems = dropdownMenu.querySelectorAll('li');

 var municipality = document.getElementById('home-municipality');

 function updateHome(selectedText) {
    if (selectedText === 'بلدية بيرين') {
        municipality.innerHTML = '<h1 class="text-white mb-md-4 animated zoomIn">بلدية بيرين</h1>';
       
      } else if (selectedText === 'بلدية الأزرق') {
        municipality.innerHTML = ' <h1 class="text-white mb-md-4 animated zoomIn">بلدية الأزرق</h1>';
    
      } else if (selectedText === 'بلدية الهاشمية') {
        municipality.innerHTML = ' <h1 class="text-white mb-md-4 animated zoomIn">بلدية الهاشمية</h1>';
     
      }


 }

 


// Attach click event listener to dropdown items
dropdownItems.forEach(function (item) {
  item.addEventListener('click', function (event) {
   
    var selectedText = item.textContent; // Get the selected item's text

    // Change the text of the dropdown toggle
    dropdownToggle.textContent = selectedText;

    // Move the selected item to the first position in the dropdown menu
    dropdownMenu.insertBefore(item, dropdownMenu.firstChild);

    // Save the selected item to localStorage
    localStorage.setItem('selectedDropdownItem', selectedText);

    updateHome(selectedText);

    updateSelect(selectedText);
  

   
  });
});

// Check if there is a previously selected item in localStorage
var savedItem1 = localStorage.getItem('selectedDropdownItem');
if (savedItem1) {
  // Update the dropdown toggle with the saved item
  dropdownToggle.textContent = savedItem1;

     
  updateHome(savedItem1);

};


/*
// Get the dropdown element
var dropdown2 = document.getElementById('dropdown2');

// Get the dropdown toggle element
var dropdownToggle2 = dropdown2.querySelector('#dropdown-toggle2');

var dropdownMenu2 = dropdown2.querySelector('#dropdown-menu2');

// Get all dropdown items
var dropdownItems2 = dropdownMenu2.querySelectorAll('#items2');




// Attach click event listener to dropdown items
dropdownItems2.forEach(function (item1) {
    item1.addEventListener('click', function (event1) {
      
     
      var selectedText2 = item1.textContent; // Get the selected item's text
  
      // Change the text of the dropdown toggle
      dropdownToggle2.textContent = selectedText2;
  
      // Move the selected item to the first position in the dropdown menu
      dropdownItems2[0].textContent = selectedText2;

  
     
  

  
     
    
  
     
    });
  });
  

  // Get the dropdown element
var dropdown3 = document.querySelector('btn-group');

// Get the dropdown toggle element
var dropdownToggle3 = dropdown3.querySelector('dropdown-toggle');

var dropdownMenu3 = dropdown3.querySelector('dropdown-menu');

// Get all dropdown items
var dropdownItems3 = dropdownMenu3.getElementsByTagName('a');




// Attach click event listener to dropdown items
dropdownItems3.forEach(function (item) {
    item.addEventListener('click', function (event) {
      
     
      var selectedText3 = item.textContent; // Get the selected item's text
  
      // Change the text of the dropdown toggle
      dropdownToggle3.textContent = selectedText3;
  
      // Move the selected item to the first position in the dropdown menu
      dropdownItems3[0].textContent = selectedText3;

  
     
  

  
     
    
  
     
    });
  });
 
 
  function updateDropdowns(selectedItem) {
    var dropdowns = document.getElementsByClassName('dropdown');
    
    for (var i = 0; i < dropdowns.length; i++) {
      var dropdown = dropdowns[i];
      
      // Update the dropdown button's text
      var button = dropdown.getElementsByClassName('btn')[0];
      button.innerText = selectedItem;
    }
  }

  function updateDropdowns(selectedItem) {
    // Update dropdowns as before
    
    // Save the selected item in local storage
    localStorage.setItem('selectedItem', selectedItem);
  }
  
  // On page load, retrieve the saved selected item and update the dropdowns
  window.onload = function() {
    var selectedItem = localStorage.getItem('selectedItem');
    if (selectedItem) {
      updateDropdowns(selectedItem);
    }
  };
  
  // Add event listeners to dropdown items
  var dropdownItems = document.getElementsByClassName('dropdown-item');
  for (var i = 0; i < dropdownItems.length; i++) {
    dropdownItems[i].addEventListener('click', function() {
      var selectedItem = this.innerText;
      updateDropdowns(selectedItem);
    });
  }
  
   */

  

  function showContent() {
    // Hide all content divs
    var contentDivs = document.querySelectorAll('[id^="content"]');
    contentDivs.forEach(function(div) {
      div.classList.add('hidden');
    });
  
    // Get the selected option
    var dropdown = document.getElementById("myDropdown");
    var selectedOption = dropdown.value;
  
    // Show the corresponding content div
    var contentDiv = document.getElementById("content" + selectedOption);
    if (contentDiv) {
      contentDiv.classList.remove('hidden');
    }
  }



