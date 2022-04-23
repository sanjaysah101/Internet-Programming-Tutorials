
$(document).ready(function () {
    $('#nameErrorMessage').hide();
    $('#emailCheck').hide();
    $('#passwordErrorMessage').hide();
    $('#confirmpasswordErrorMessage').hide();
    $('#dobCheck').hide();

    var name_err = true;
    var email_err = true;
    var pass_err = true;
    var con_pass_err = true;
    // var dob_err = true;

    $('#user_name').keyup(function () {

        userNameCheck();
    });

    function userNameCheck() {
        // Function to validate username
        var user_val = $('#user_name').val();
        if (user_val.length == '') {
            $('#nameErrorMessage').show();
            $('#nameErrorMessage').html("Please Fill Your Name!");
            $('#nameErrorMessage').focus();
            $('#nameErrorMessage').css("color", "red");
            name_err = false;
            return false;
        }
    


        if (user_val.length < 3) {
            $('#nameErrorMessage').show();
            $('#nameErrorMessage').html("Name must be greater than 2");
            $('#nameErrorMessage').focus();
            $('#nameErrorMessage').css("color", "red");
            name_err = false;
            return false;
        }
        
        if (!(/^[a-zA-Z\s]*$/.test(user_val))){
            $('#nameErrorMessage').show();
            $('#nameErrorMessage').html("Name must not contain any numbers");
            $('#nameErrorMessage').focus();
            $('#nameErrorMessage').css("color", "red");
            name_err = false;
            return false;

        }
        else {
            $('#nameErrorMessage').hide();
        }
        // if(user_val === null){
        //     $('#nameErrorMessage').show();
        //     $('#nameErrorMessage').html("Name not be space");
        //     $('#nameErrorMessage').focus();
        //     $('#nameErrorMessage').css("color", "red");
        //     name_err = false;
        //     return false;
        // }
        // else{
        //     $('#nameErrorMessage').hide();
        // }


    }


    $('#email').keyup(() => {
        emailCheck();
    });

    function emailCheck(){
        var userEmail = $('#email').val();

        if (userEmail == ''){
            $('#emailErrorMessage').show();
            $('#emailErrorMessage').html('Please Enter Your Email');
            $('#emailErrorMessage').focus();
            $('#emailErrorMessage').css("color", "red");
            email_err = false;
            return false;
        }
        if (!IsEmail(userEmail)){
            $('#emailErrorMessage').show();
            $('#emailErrorMessage').html('Invalid Email');
            $('#emailErrorMessage').focus();
            $('#emailErrorMessage').css("color", "red");
            email_err = false;
            return false;
        }
        else{
            $('#emailErrorMessage').hide();
        }
    }

    function IsEmail(email){
        var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        if (!regex.test(email)){
            return false;
        }
        else{
            return true;
        }
    }

    $('#password').keyup(function () {
        passwordCheck();
    });
    function passwordCheck() {
        var userPassword = $('#password').val();
        if (userPassword.length == '') {
            $('#passwordErrorMessage').show();
            $('#passwordErrorMessage').html("Please Fill the password");
            $('#passwordErrorMessage').focus();
            $('#passwordErrorMessage').css("color", "red");
            pass_err = false;
            return false;
        }
        else {
            $('#passwordErrorMessage').hide();
        }

        if (userPassword.length < 8) {
            $('#passwordErrorMessage').show();
            $('#passwordErrorMessage').html("Name must be equal to 8 or greater");
            $('#passwordErrorMessage').focus();
            $('#passwordErrorMessage').css("color", "red");
            pass_err = false;
            return false;
        }
        else {
            $('#passwordErrorMessage').hide();
        }
    }

    $('#confirm_Password').keyup(function () {
        confirmPassword();
    });
    function confirmPassword() {
        var conPassword = $('#confirm_Password').val();
        var previousPassword = $('#password').val();

        if (previousPassword != conPassword) {
            $('#confirmpasswordErrorMessage').show();
            $('#confirmpasswordErrorMessage').html("Password are not matching");
            $('#confirmpasswordErrorMessage').focus();
            $('#confirmpasswordErrorMessage').css("color", "red");
            con_pass_err = false;
            return false;
        }
        else {
            $('#confirmpasswordErrorMessage').hide();
        }
    }

    // DOB Check

    // $('#dob').keyup(() => {
    //     dobCheck();
    // });

    // function dobCheck(){
    //     var startDate = '1990-01-01';
    //     var currentDate = '2222-11-23';
    //     var userDOB = $('#dob').val();
        // console.log(userDOB);
        // console.log(startDate);
        // console.log(currentDate);
        // var userDOB = Date.parse();

    //     if (!(startDate <= currentDate && userDOB >= startDate)){
    //         $('#dobErrorMessage').show();
    //         $('#dobErrorMessage').html('Invalid DOB!');
    //         $('#dobErrorMessage').focus();
    //         $('#dobErrorMessage').css("color", "red");
    //         dob_err = false;
    //         return false
    //     }
    //     else{
    //         $('#dobErrorMessage').hide();
    //     }
    // }
    // On Submit
    $('#submitbtn').click(() => {
        name_err = true;
        email_err = true;
        pass_err = true;
        con_pass_err = true;
        // dob_err = true;

        userNameCheck();
        emailCheck();
        passwordCheck();
        confirmPassword();


        if (name_err && pass_err && con_pass_err & email_err) {
            alert('Form Submitted Successfully!!');
            return true;
        }
        else {
            return false;
        }
    });
});
