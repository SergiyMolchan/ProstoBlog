//registration
$('#reg_btn').click( (e) => {
    e.preventDefault();
    const username = $('#username').val();
    const Email = $('#Email').val();
    const Password = $('#Password').val();
    const RepeatPassword = $('#RepeatPassword').val();


    $.ajax({
        url: '../API/registration.php',
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
});

// Sing In 
$('#singInBtn').click( e => {
    e.preventDefault();
    const username = $('#username').val();
    const Password = $('#Password').val();
    //console.log(`username: ${username} end password: ${Password} `);
    $.ajax({
        url: '../API/singIn.php',
        type: 'POST',
        cache: false,
        data: {'username': username, 'Password': Password},
        dataType: 'html',
        success: data => {
            console.log(data);

            if('Auth' === data){
                $('#singInBtn').text('Authorized');
                $('#formError').hide();
                document.location.reload(true);
            } else {
                $('#formError').show();
                $('#formError').text(data);
            }
        }
    });
});

// Logout

$('#LogoutBtn').click( e => {
    e.preventDefault();
    $.ajax({
        url: '../API/Logout.php',
        type: 'POST',
        cache: false,
        data: {},
        dataType: 'html',
        success: data => {
            document.location.reload(true);
        }
    });
});

//add article
$('#AddArticle').click( (e) => {
    e.preventDefault();
    const Title = $('#Title').val();
    const Intro = $('#Intro').val();
    const Text = $('#Text').val();


    $.ajax({
        url: '../API/addArticle.php',
        type: 'POST',
        cache: false,
        data: {'Title': Title, 'Intro': Intro, 'Text': Text},
        dataType: 'html',
        success: data => {
            console.log(data);

            if('articleAdded' === data){
                $('#AddArticle').text('Article added');
                $('#formError').hide();
            } else {
                $('#formError').show();
                $('#formError').text(data);
            }
        }
    });
});
