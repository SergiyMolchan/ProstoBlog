//registration
const form = document.getElementById('regForm');

$('#reg_btn').click( (e) => {
    e.preventDefault();
    const username = $('#username').val();
    const Email = $('#Email').val();
    const Password = $('#Password').val();
    const RepeatPassword = $('#RepeatPassword').val();


    $.ajax({
        url: '../Auth/registration.php',
        type: 'POST',
        cache: false,
        data: {'username': username, 'Email': Email, 'Password': Password, 'RepeatPassword': RepeatPassword},
        dataType: 'html',
        success: data => {
            console.log(data);

            if('Registered' === data){
                $('#reg_btn').text('Registered');
                $('#formError').hide();
            } else {
                $('#formError').show();
                $('#formError').text(data);
            }
        }
    });
})