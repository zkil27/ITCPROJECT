function Toggle(){
    const loginContainer =  document.getElementById('loginContainer');
    const signinContainer = document.getElementById('signinContainer');
    const pageTitle = document.title;
    if(loginContainer.style.display === 'none'){
        loginContainer.style.display = 'flex';
        signinContainer.style.display = 'none';
        document.title = 'Login Page';
        console.log('ifed');
    }else{
        loginContainer.style.display = 'none';
        signinContainer.style.display = 'flex';
        document.title = 'Sign Up Page';
        console.log('elsed');
    }
}

    document.querySelectorAll('input[name="gender"]').forEach((elem) => {

        const maleContainer = document.getElementById('maleContainer');
        const femaleContainer = document.getElementById('femaleContainer');
        const othersContainer = document.getElementById('othersContainer');



        elem.addEventListener('change', function(event) {
            if (event.target.checked) {
                if (event.target.value === 'Male') {
                    maleContainer.style.backgroundColor = '#9BCF53';
                    femaleContainer.style.backgroundColor = 'white';
                    othersContainer.style.backgroundColor = 'white';
                } else if (event.target.value === 'Female') {
                    femaleContainer.style.backgroundColor = '#9BCF53';
                    maleContainer.style.backgroundColor = 'white';
                    othersContainer.style.backgroundColor = 'white';
                
                } else if (event.target.value === 'Others'){
                    othersContainer.style.backgroundColor = '#9BCF53';
                    maleContainer.style.backgroundColor = 'white';
                    femaleContainer.style.backgroundColor = 'white';
                }
            }
        });
    });

    const pageTitle = document.title;

    if (pageTitle === 'Login Page') {
        document.title = 'Welcome to Login Page';
    } else if (pageTitle === 'Sign Up Page') {
        document.title = 'Welcome to Sign Up Page';
    } else {
        document.title = 'Welcome to Our Website';
    }

    const singinConfirmPassword = document.getElementById('signinConfirmPassword');
    const signinPassword = document.getElementById('signinPassword');

    singinConfirmPassword.addEventListener('input', function() {
        if (singinConfirmPassword.value !== signinPassword.value) {
            singinConfirmPassword.setCustomValidity('Passwords do not match');
        } else {
            singinConfirmPassword.setCustomValidity('');
        }
    });
    