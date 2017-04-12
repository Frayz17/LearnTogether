<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Учиться вместе!</title>

    <!-- Bootstrap -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" media="only screen and (max-width: 480px)" href="css/mobile-style.css" />
    <link rel="stylesheet" media="only screen and (min-device-width: 481px) and (max-device-width: 960px)" href="css/tablet-style.css" />
    <link href="https://fonts.googleapis.com/css?family=Asap:500|Chewy|Fira+Sans+Condensed" rel="stylesheet">


</head>

<body>
    <div class="container">
        <div id="firstPage">
            <div class="jumbotron">
                <h1 class="main-header">Кодим Вместе!</h1>
                <p class="main-description">Учимся веб-разработке командой. Интересней, эффективней и быстрей.</p>

                <div class="buttons-firstPage">
                    <a href="#secondPage"><p class="btn btn-success missions">ЦЕЛИ</p></a>
                    <a href="#thirdPage"><p class="btn btn-primary contacts">КОНТАКТЫ</p></a>
                </div>

            </div>
        </div>

        <div id="secondPage">
            <div class="tasks">
                <h1 class="task-heading">Цели:</h1>
                <ul class="task-list">
                    <li class="task-li">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                    <li class="task-li">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                    <li class="task-li">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                </ul>
            </div>
        </div>

        <div id="thirdPage">
            <div class="container">

                <div class="row">
                    <div class="contacts-box">

                        <div class="col-sm-6">                        
                            <h1 class="thirdPage-contacts col-sm-6">Контакты</h1>

                            <div class="mobile-number my-contacts">
                                <p class="contact-description">Телефон</p>
                                <span class="contact-obj">098-388-86-28</span>
                            </div>
                            <div class="skype my-contacts">
                                <p class="contact-description">Скайп</p> 
                                <span class="contact-obj">llfraysll</span>
                            </div>
                            <div class="email my-contacts">
                                <p class="contact-description">Почта</p>
                                <span class="contact-obj">andrydmit@gmail.com</span>
                            </div>

                        </div>
                    
                        <div class="col-sm-6">
                            <div class="request">
                                <h1 class="request-heading">Связаться напрямую:</h1>
                                {!! Form::open(['route' => 'landingSubmit']) !!}   
                                    <div class="form-group">
                                        {{ Form::label('name', 'Ваше Имя:', ['class' => 'request-name']) }}
                                        {{ Form::text('name', '', ['class' => 'form-control request-name', 'id' => 'name']) }}
                                    </div>
                                    <div class="form-group">
                                        {{ Form::label('textarea', 'Немного о себе:') }}
                                        {{ Form::textarea('textarea', '', ['class' => 'form-control', 'id' => 'textarea', 'rows' => '10', 'cols' => '10']) }}
                                    </div>
                                        {{ Form::submit('ОТПРАВИТЬ', ['class' => 'btn btn-success btn-block request-submit']) }}
                                {!! Form::close() !!}
                            </div>   
                        </div>

                    </div>
                    
                </div>

               <!--  <div class="row">
                    <div class="col-sm-4">
                        <div class="mobile-number">
                            <p class="contact-description">Телефон</p>
                            <span class="contact-obj">098-388-86-28</span>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="skype">
                            <p class="contact-description">Скайп</p> 
                            <span class="contact-obj">llfraysll</span>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="email">
                            <p class="contact-description">Почта</p>
                            <span class="contact-obj">andrydmit@gmail.com</span>
                        </div>
                    </div>
                </div> -->
            </div>    

    </div>

    <footer>
                <p class="footer-description">Site created by Dmitriew Andrey at 2017.</p>
    </footer>  

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>

</html>
