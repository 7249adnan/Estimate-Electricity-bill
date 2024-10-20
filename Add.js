
function validate_number(){
    
    let f = false;
     // Phone  Validation 

     let mob = $(".content-field").val();
     let mptm= /^(?:(?:\+|0{0,2})91(\s*[\-]\s*)?|[0]?)?[6789]\d{9}$/;
 
     if (mob == "" ||mob == undefined) 
     {
         $('.content-field-msg').html('Phonenumber  is Required !!').  addClass('text-danger');
                f=false;
      }
         else if(mptm.test(mob)==false)
         {
             $('.content-field-msg').
             html('Invalid Mobile Number !!! Must be valid and contain 10 Digit and Start With 6,7,8,9').addClass('text-danger');
             f=false;          
         }
      else
       {
         $('.content-field-msg').html("").
         removeClass('text-danger');

         let otp = Math.floor((Math.random() * 1000000) + 1);                  
         let no = $(".content-field").val();

         

         otp_send(otp,no);

         f = true;
      }    
      

}

function otp_send(otp,number)
{
   
    test(otp,number);
    timer(" Resend OTP After ","send_btn","timer");
}

function timer(str,btn,label)
{
    //disable Button

    document.getElementById(btn).disabled = true;

    // Set the date we're counting down to
    var minutesToAdd=1;
    var currentDate = new Date();
    var countDownDate = new Date(currentDate.getTime() + minutesToAdd*60000);
    
    // Update the count down every 1 second
    var x = setInterval(function() {

    // Get today's date and time
    var now = new Date().getTime();
        
    // Find the distance between now and the count down date
    var distance = countDownDate - now;
        
    // Time calculations for days, hours, minutes and seconds
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
        
    // Output the result in an element with id="demo"
    document.getElementById(label).innerHTML = str+ minutes + "m " + seconds + "s ";
        
    // If the count down is over, write some text 
    if (distance < 0) {
        clearInterval(x);
        document.getElementById(label).innerHTML = "";
        document.getElementById(btn).disabled = false;
    }
    }, 1000);
}

function validate_email()
{
    

    let email = $(".email-field").val();
    let eppt= /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

    if (email == "" ||email == undefined) 
    {
        $('.email-field-msg').html('Email  is Required !!').  addClass('text-danger');
               f=false;
     }
        else if(eppt.test(email)==false)
        {
            $('.email-field-msg').
            html('Invalid Email !!! Please enter your email address in formate : yourname@example.com').addClass('text-danger');
            f=false;          
        }
     else
      {
        $('.email-field-msg').html("").
        removeClass('text-danger');
        //timer(" Verification link is send to your email id  , <br> you can resend link after : ","send_email","timer_email");
        f = true;
     }
     f = false;
    return f;

}

function validate() {


     // Firstname Validation 

    let f = false;

    let fname = $(".fname-field").val();
    let name=/^[A-Z][a-z]{2,15}$/;

    if (fname == "" || fname == undefined) 
    {
        $('.fname-field-msg').html('Name Field is Required !!').
        addClass('text-danger');
        f=false;
     }
        else if(name.test(fname)==false)
        {
            $('.fname-field-msg').
            html('Invalid Name !!! First Letter is UPPERCASE ,Must be a String with Min 3 & Max Length 15')
            .addClass('text-danger');
            f=false;
        }
     else
      {
        $('.fname-field-msg').html("").
        removeClass('text-danger');
       f= true;
     }


//User  Validation 

     let uns = $(".uname-field").val();
     let pt= /^[A-Za-z][A-Za-z0-9_]{4,21}$/;
 
     if (uns == "" || uns == undefined) 
     {
         $('.uname-field-msg').html('Username  is Required !!').  addClass('text-danger');
                f=false;
      }
            else if(pt.test(uns)==false)
            {
                $('.uname-field-msg').
                html('Invalid Username !!! Special Character Not allowed, Min 4 & 22 Max Length required ').addClass('text-danger');
                f=false;          
            }
      else
       {
         $('.uname-field-msg').html("").
         removeClass('text-danger');
         f = true;
      }

// Password  Validation 


let pass = $(".password-field").val();
     let ppt= /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{6,15}$/;
 
     if (pass == "" || pass == undefined) 
     {
         $('.password-field-msg').html('Password  is Required !!').  addClass('text-danger');
                f=false;
      }
         else if(ppt.test(pass)==false)
         {
             $('.password-field-msg').
             html('Invalid !!!! 6 to 15 characters which contain at least one lowercase letter, one uppercase letter, one numeric digit, and one special character').addClass('text-danger');
             f=false;          
         }
      else
       {
         $('.password-field-msg').html("").
         removeClass('text-danger');
         f = true;
      }

// Email  Validation 

      let email = $(".email-field").val();
      let eppt= /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
  
      if (email == "" ||email == undefined) 
      {
          $('.email-field-msg').html('Email  is Required !!').  addClass('text-danger');
                 f=false;
       }
          else if(eppt.test(email)==false)
          {
              $('.email-field-msg').
              html('Invalid Email !!! Please enter your email address in formate : yourname@example.com').addClass('text-danger');
              f=false;          
          }
       else
        {
          $('.email-field-msg').html("").
          removeClass('text-danger');
          f = true;
       }


       // Phone  Validation 

      let mob = $(".content-field").val();
      let mptm= /^(?:(?:\+|0{0,2})91(\s*[\-]\s*)?|[0]?)?[6789]\d{9}$/;
  
      if (mob == "" ||mob == undefined) 
      {
          $('.content-field-msg').html('Phonenumber  is Required !!').  addClass('text-danger');
                 f=false;
       }
          else if(mptm.test(mob)==false)
          {
              $('.content-field-msg').
              html('Invalid Mobile Number !!! Must be valid and contain 10 Digit and Start With 6,7,8,9').addClass('text-danger');
              f=false;          
          }
       else
        {
          $('.content-field-msg').html("").
          removeClass('text-danger');
          f = true;
       }
      
       


// Salary  Validation 

let esal = $(".salary-field").val();
let esptm= /^[0-9]{4,6}$/;

if (esal == "" ||esal== undefined) 
{
    $('.salary-field-msg').html('Salary  is Required !!').  addClass('text-danger');
           f=false;
 }
    else if(esptm.test(esal)==false)
    {
        $('.salary-field-msg').
        html('Invalid Salary !!! Range between 4 to 6 Digit (Ex@ 1000 - 100000).').addClass('text-danger');
        f=false;          
    }
 else
  {
    $('.salary-field-msg').html("").
    removeClass('text-danger');
    f = true;
 }


// Address  Validation 

let eaddre = $(".add-field").val();
let addtm= /^[a-zA-Z0-9\s,.'-]{3,50}$/;

if (eaddre == "" ||eaddre== undefined) 
{
    $('.add-field-msg').html('Address  is Required !!').  addClass('text-danger');
           f=false;
 }
    else if(addtm.test(eaddre)==false)
    {
        $('.add-field-msg').
        html('Invalid Address!!! Enter proper Address no specical character only . & - allwoed').addClass('text-danger');
        f=false;          
    }
 else
  {
    $('.add-field-msg').html("").
    removeClass('text-danger');
    f = true;
 }

    f = false;
    return f;
}

