<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Сервис оценки 360</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body>
<header id="header" class="navbar navbar-expand-lg navbar-light bg-warning sticky-top">
        <a class="navbar-brand" href="main.php"><img src="img/logo.png" alt="logo" style="height: 60px;"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="main.php">Кто мы?</a>
                </li>
                <li class="nav-item dropdown show active">
                    <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Наши услуги
                       </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item dark" href="pages/person.php">оценка персонала</a>
                        <a class="dropdown-item" href="pages/bisnes.php">оценка бизнеса</a>
                        <a class="dropdown-item" href="pages/doh.php">оценка дохода</a>
                    </div>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="pages/news.php">новости</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="pages/sert.php">сертификаты</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="pages/contacts.php">Наши контакты</a>
                </li>
                
            </ul>
        </div>
    </header>
   <main>
   <div class="first" id="first">
        <div class="first-text container">
            <h1>сервис оценки 360</h1>
            <h3>мы на 360 конкурентов!</h3>
        </div>
    </div>
    <div class="content container">
        <h1>Сервис оценки 360</h1>
        <p>Вот уже 15 лет мы помогаем определения готовности участником оценки демонстрировать определенные выбранные критерии, необходимые для успешного выполнения требуемой рабочей деятельности.​! Спасибо, что Вы с нами!</p>

        <img src="img/1.jpg" >
        <h1>Кто мы?</h1>
        <p>сервис оценки 360 - это надёжные сатрудники, гарантированный результат и быстрая работа! Высокоэффективная технология определения готовности участником оценки демонстрировать определенные выбранные критерии, необходимые для успешного выполнения требуемой рабочей деятельности.​</p>
        <img src="img/2.jpg" >
        <h1>как с нами связаться?</h1>
    <p>мы всегда рады новым клиентам, наши операторы работают круглосуточно! Ещё вы можете связаться с нами через <a href="#form">форму</a> и мы обязательно скоординируем Вас дальше!</p>
    <img src="img/3.jpg" >
    <h1>Кто в нашем штате?</h1>
    <p>Мы переманили лучших сотрудников в этой области! В наших радах есть настоящие специалисты, который знакомы со всми мелочами и знают ешё больше хиторстей! И сегодня их подход остается наиболее эффективным инструментом для отбора персонала с высоким потенциалом, чьи способности с высокой вероятностью принесут максимальную пользу для бизнеса.</p>
    <img src="img/4.jpg" >
    <h1>Отзывы</h1>
    <?php 
     if( !isset($_GET['pg']) || $_GET['pg']<0 ) $_GET['pg']=0;
    include 'moduls/feedback.php';
    ?>
    <form class="form-styles bg-warning clearfix" name="form_add" method="post" action="moduls/add.php">
<div class="form-group">
<label for="name">Ваше имя</label>
<input  class="form-control" type="text" name="name" id="name" placeholder="Имя">
<label for="feedback">Ваш отзыв</label>
<textarea  class="form-control" name="feedback" placeholder="Отзыв"></textarea>
</div>

<input type="submit" name="button" class="btn btn-outline-light float-right" value="Добавить отзыв">
</form>
   
    <a name="form"></a>
    <h2>связаться с нами!</h2>
                <form class="form-styles bg-warning clearfix">
                    <div class="form-group">
                        <label for="Email">Ваш E-mail</label>
                        <input type="email" class="form-control" id="Email" placeholder="Введите email">
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="Check">
                        <label class="form-check-label" for="Check">Согласен получать рассылку по почте о новостях нашего центра</label>

                    </div>
                    <button type="submit" class="btn btn-outline-dark float-right">Подтвердить</button>
                </form>
</div>
    
   </main>
   <footer class="bg-dark text-light">
        <ul>
            <li>сервис оценки 360,</li>
            <li>все права защищены.</li>
            <li>Сайт: <a href="https://vk.com/mrray117">Дмитриев Андрей</a></li>
        </ul>
    </footer>
    <script>
    function show_edit(id){
        var feedback = document.getElementById(id);
        var p = feedback.lastChild.innerHTML;
        feedback.innerHTML='';
        
       var form = '<form class="form-styles clearfix" name="form_add" method="post" action="moduls/edit.php"><div class="form-group"><textarea  class="form-control" name="feedback" placeholder="Введите отзыв">'+p+'</textarea></div><input type="submit" name="button-edit" class="btn btn-outline-light float-right" value="Редактировать отзыв"> <input type="hidden" name="id" value="'+id+'"></form>';
        feedback.innerHTML = form;
    }
    function show_delete(id){
        var feedback = document.getElementById(id);
        
       var form = '<form class="clearfix" name="form_add" method="post" action="moduls/delete.php"><p>Вы действительно хотите удалить этот отзыв?</p><input type="button" name="button-close" class="btn btn-outline-light float-right" style="width:10vw;" value="Нет" onclick="location.reload()"><input type="submit" name="button-delete" style="width:10vw;" class="btn btn-danger float-right" value="Да"> <input type="hidden" name="id" value="'+id+'"></form>';
        feedback.innerHTML = form;
    }
    </script>
</body>
</html>