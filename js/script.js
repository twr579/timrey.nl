/* 
This function will fadeIn elements upon loading each page. It will always fadeIn the header, the footer, and either the heading and subheading on the home page or the sections on the other pages. It also checks localStorage to see if the site has been visited before, and if not, it will perform an additional animation for first-time visiters of individually fading in each letter in the header's heading. 
*/
function revealContent() {
    $delay = 500;
    if(window.sessionStorage && sessionStorage.getItem('visited') !== 'true') {
        $('header h1 span').delay(250).each(function(i) {
            $(this).hide().delay(i*250).fadeIn(500);
        });
        sessionStorage.setItem('visited', 'true');
        $delay = 3500;
    }
        $('header, footer').delay(500).fadeTo(500, 1);
        $('section, hgroup h1').delay($delay).fadeTo(2000, 1);
        $('hgroup h2').delay($delay + 1500).fadeTo(2000, 1);
}

/*
This function makes the background image slide acros the page. The distance the image should travel is calculated by subtracting its width from the width of the browser window. After completing, the image is reset to its original location and the animation begins again.
*/
function slide() {
    $distance = $(window).width() - 8188;
    $('.sliding-background').animate({left: $distance}, 120000, "linear", function() {
        $(this).css("left", 0);
        slide();
    });
}

/*
This function will check the pathname and activate a CSS property that highlights the name of the page in the navbar the user is currently on.
*/
function markCurrentPage() {
    $('a[href="'+window.location.pathname+'"]').each(function() {
        if (this.href === window.location.href) {
            $(this).addClass('current');
        }
    })
}

/*
This function disables the submit button on the contact page until the user has filled in all textboxes and provided a valid email address.
*/
function validate() {
    $submit = $('#submit button');
    $name = $('#name');
    $email = $('#email');
    $email_regex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    $subject = $('#subject');
    $message = $('#message');

    // Add CSS properties for a disabled submit button
    $submit.addClass('disabled');
    
    /* 
    When the user inputs into a textbox, show or hide warnings depending on whether or not the box is empty. If the email input isn't empty, but doesn't contain a valid email address, show a specific warning for that event.
    */
    $('input, textarea').on('input', function() {
        $submit.addClass('disabled');
        if($(this).val() && $(this).attr('id') === 'email') {
            if($email_regex.test($email.val())) {
                $(this).removeClass('required');
                $(this).siblings('form small').hide();
            } else {
                $(this).addClass('required');
                $(this).siblings('form small').text('Please enter a valid email address').show();
            }
        } else {
            if($(this).val()) {
                $(this).removeClass('required');
                $(this).siblings('form small').hide();
            } else {
                $(this).addClass('required');
                $(this).siblings('form small').text('*Required field').show();
            }
        }

        // All textboxes are full and a valid email has been given, so remove the CSS properties that disable the submit button
        if($name.val() && $email.val() && $email_regex.test($email.val()) && $subject.val() && $message.val()) {
            $submit.removeClass('disabled');
        } 
    });
    
    /*
    When the user clicks the submit button and it is disabled, prevent the form from submitting and display warnings for each empty field.
    */
    $('button').click(function(e) {
        if($(this).hasClass('disabled')) {
            e.preventDefault();
            $('input, textarea').each(function() {
                if(!$(this).val()) {
                    $(this).addClass('required');
                    $(this).siblings('form small').show();
                }
            });
        }
    });
}

/* Triggered once the DOM has been loaded */
$(function() {
    revealContent();
    
    slide();
    
    markCurrentPage();
    
    /* Create an accordion on the projects page, and enable form validation on the contact page */
    switch(window.location.pathname.split('/').pop()) {
        case 'projects.php':
            $('#accordion').accordion({collapsible: true, heightStyle: 'content'});
            break;
        case 'contact.php':
            validate();
            break;
        default:
            break;
    }
});