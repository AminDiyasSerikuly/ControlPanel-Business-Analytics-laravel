<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    {{--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">--}}
</head>
<body>

    <div class="container-fluid" >
        <div class="header">
            <div class="topnav">

                <div class="brand">
                    <a href="" style="text-decoration: none;">
                        <div class="brand-section">
                            <img src="http://leanin.org/partners/ui/modules/common/images/notification-icon.png" width="40" height="40"  alt="">
                            <h2 id="worker" style="width: auto; ">Worker.kz</h2>
                        </div>
                    </a>
                </div>

                <div class="search-container">
                    <form action="/action_page.php">
                        <input type="text" placeholder="Search.." name="search">
                        <div class="select-div" style="">
                            <select class="select-ResumeVacotian" id="sel1">
                                <option>Резюме</option>
                                <option>Вакансий</option>
                                <option>Бизнес</option>
                            </select>
                        </div>
                        <button type="submit" >Найти</button>
                    </form>
                </div>

                <div class="WordsAndSelects">
                    <div class="WordAndSelectsUnder">
                        <a href="" style="font-size: small">Расширенный поиск</a>
                        <div class="language-select">
                            <select class="select-language" id="sel1" style="">
                                <option>Русский</option>
                                <option>Казахский</option>
                                <option>Английский</option>
                            </select>
                        </div>
                    </div>
                </div>
            {{--</div>--}}
            </div>
        </div>
        <div class="float-header">
            <div class="calling-topnav">
                <div class="header">
                    <div class="topnav">
                        <div class="brand">
                            <a href="" style="text-decoration: none;">
                                <div class="brand-section">
                                    <img src="http://leanin.org/partners/ui/modules/common/images/notification-icon.png" width="40" height="40"  alt="">
                                    <h2 id="worker" style="width: auto; ">Worker.kz</h2>
                                </div>
                            </a>
                        </div>

                        <div class="search-container">
                            <form action="/action_page.php">
                                <input type="text" placeholder="Search.." name="search">
                                <div class="select-div" style="">
                                    <select class="select-ResumeVacotian" id="sel1">
                                        <option>Резюме</option>
                                        <option>Вакансий</option>
                                        <option>Бизнес</option>
                                    </select>
                                </div>
                                <button type="submit" >Найти</button>
                            </form>
                        </div>

                        <div class="WordsAndSelects">
                            <div class="WordAndSelectsUnder">
                                <a href="" style="font-size: small">Расширенный поиск</a>
                                <div class="language-select">
                                    <select class="select-language" id="sel1" style="">
                                        <option>Русский</option>
                                        <option>Казахский</option>
                                        <option>Английский</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="under-float">
                <div class="image">
                    <img src="http://leanin.org/partners/ui/modules/common/images/notification-icon.png" id="invisible-img-icon" width="25" height="25" style="margin-top: 4.5px;float: left; margin-left: 1%;">
                </div>
                <div class="dropdowns">
                    <div class="dropdown">
                        <button class="dropbtn">Ищу работу</button>
                        <div class="dropdown-content">
                            <a href="#">Создать резюме </a>
                            <a href="#">Как улучшить резюме</a>
                        </div>
                    </div>
                    <div class="dropdown">
                        <button class="dropbtn">Ищу сотрудников</button>
                        <div class="dropdown-content">
                            <a href="#">Разместить вакансию</a>
                            <a href="#">Праис лист</a>
                            <a href="#">Описание услуг</a>
                        </div>
                    </div>
                    <div class="dropdown">
                        <button class="dropbtn">Помощь</button>
                    </div>
                    <div class="dropdown">
                        <button class="dropbtn">Компании</button>
                        <div class="dropdown-content">
                            <a href="#">Каталог компаний</a>
                            <a href="#">Работа по профессиям</a>
                        </div>
                    </div>
                    <div class="dropdown">
                        <button class="dropbtn">Проекты</button>
                        <div class="dropdown-content">
                            <a href="#">Полезная ирформация </a>
                        </div>
                    </div>
                    <div class="mini-search" href="">
                        <input type="text" placeholder="Search.." name="mini-search">
                        <button type="submit" >Найти</button>
                    </div>
                </div>
            </div>
        </div>


        <section class="main-imageandLog-in">
            <div class="undersection">
                <div class="half-undersection">
                    <div class="Chapter">
                        <div class="header-word">
                            <h1>Найди работу мечты</h1>
                        </div>
                    </div>
                    <div class="TwoButton">
                        <div class="Buttons">
                            <button type="button" class="SetResume">
                                Разместить резюме
                            </button>
                            <button type="bx`utton" class="AddVacancies">
                                Опубликовать вакансию
                            </button>
                        </div>
                    </div>
                </div>
                <div class="half-undersection-fomAndIndicator">
                    <div class="fitters">
                        <div class="indicatorSet">
                            <div id="HowManyResume">
                                <h1 >2 102 123</h1>
                                <h5>резюме</h5>
                            </div>
                            <div id="HowManyVacancy">
                                <h1 >23 901</h1>
                                <h5>вакансия</h5>
                            </div>
                            <div id="HowManyCompany">
                                <h1 >52 003</h1>
                                <h5>компании</h5>
                            </div>
                        </div>
                    </div>
                    <div class="form">
                        <form class="formSet" action="">
                            <h5 style="margin: 0;padding: 0; margin-top: 16px;margin-left: 6%; font-size: 90%;font-family: Arial;color: white;">Регистрация</h5>
                            <div class="inputs">
                            <input type="text"  name="firstname" placeholder="Email или телефон">
                            <input type="text"  name="lastname" placeholder="Пароль">
                            </div>
                            <div class="RememberMe">
                                <input type="checkbox" name="" value="" style="">
                                <h5 style="margin: 0;padding: 0; display: inline-block; vertical-align: top;margin-top: 4px ;color: white;">Запомнить</h5>
                                <a href="" style="margin-left: 15%; font-size:80%;padding: 0; display: inline-block; vertical-align: top;margin-top: 6px;text-decoration: none;color: #00e5ff;">Получить пароль</a>
                            </div>
                            <input type="submit" value="Submit">
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <section class="Formum-Help-TopResume">
        </section>


        <section class="main-section">
            <div class="MainSelects">
                <div class="left-main">
                    <div class="chapter">
                        <h3>Работа в компаниях Казахстана</h3>
                    </div>
                    <div class="left-list-of-company" >
                           <ul class="inleft-list-item-ul">
                               <li class="inleft-list-item-ul-li">
                                   <div class="inleft-list-item-ul-li-div">
                                       <div class="inleft-list-item-ul-li-div-spandiv">
                                           <a href="" class="inleft-list-item-ul-li-div-span-a">Банк Хоум Кредит sadasmasdas asdasd ads</a>
                                       </div>
                                       <span class="inleft-list-item-ul-li-div-span2">82</span>
                                   </div>
                               </li>
                           </ul>
                    </div>
                </div>
                <div class="right-main">
                    <div class="chapter">
                        <h3 class="chapter_h3">Вакансии дня в Казахстане</h3>
                    </div>
                    <div class="right-list-of-company-column_1" >
                        <ul class="inright-list-item-ul">
                            <li class="inright-list-item-ul-li">
                                <div class="inright-list-item-ul-li-div">
                                    <div class="inright-list-item-ul-li-div1">
                                        <a href="">
                                        <h5  class="inright-list-item-ul-li-div-span-a">Менеджер по оптовым продажам</h5>
                                        <h5  class="inright-list-item-ul-li-div-span-a">от 35000-75000тг</h5>
                                        </a>
                                        <a href="" class="inright-list-item-ul-li-div-a-small">Kaspi bank,Kordai</a>
                                    </div>
                                </div>
                            </li>
                            <li class="inright-list-item-ul-li">
                                <div class="inright-list-item-ul-li-div">
                                    <div class="inright-list-item-ul-li-div1">
                                        <a href="">
                                            <h5  class="inright-list-item-ul-li-div-span-a">Менеджер по оптовым продажам</h5>
                                            <h5  class="inright-list-item-ul-li-div-span-a">от 35000-75000тг</h5>
                                        </a>
                                        <a href="" class="inright-list-item-ul-li-div-a-small">Kaspi bank,Kordai</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="right-list-of-company-column_2" >
                        <ul class="inright-list-item-ul">
                            <li class="inright-list-item-ul-li">
                                <div class="inright-list-item-ul-li-div">
                                    <div class="inright-list-item-ul-li-div1">
                                        <a href="">
                                            <h5  class="inright-list-item-ul-li-div-span-a">Менеджер по оптовым продажам</h5>
                                            <h5  class="inright-list-item-ul-li-div-span-a">от 35000-75000тг</h5>
                                        </a>
                                        <a href="" class="inright-list-item-ul-li-div-a-small">Kaspi bank,Kordai</a>
                                    </div>
                                </div>
                            </li>
                            <li class="inright-list-item-ul-li">
                                <div class="inright-list-item-ul-li-div">
                                    <div class="inright-list-item-ul-li-div1">
                                        <a href="">
                                            <h5  class="inright-list-item-ul-li-div-span-a">Менеджер по оптовым продажам</h5>
                                            <h5  class="inright-list-item-ul-li-div-span-a">от 35000-75000тг</h5>
                                        </a>
                                        <a href="" class="inright-list-item-ul-li-div-a-small">Kaspi bank,Kordai</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="right-list-of-company-column_3" style="border: ;">
                        <ul class="inright-list-item-ul">
                            <li class="inright-list-item-ul-li">
                                <div class="inright-list-item-ul-li-div">
                                    <div class="inright-list-item-ul-li-div1">
                                        <a href="">
                                            <h5  class="inright-list-item-ul-li-div-span-a">Менеджер по оптовым продажам</h5>
                                            <h5  class="inright-list-item-ul-li-div-span-a">от 35000-75000тг</h5>
                                        </a>
                                        <a href="" class="inright-list-item-ul-li-div-a-small">Kaspi bank,Kordai</a>
                                    </div>
                                </div>
                            </li>
                            <li class="inright-list-item-ul-li">
                                <div class="inright-list-item-ul-li-div">
                                    <div class="inright-list-item-ul-li-div1">
                                        <a href="">
                                            <h5  class="inright-list-item-ul-li-div-span-a">Менеджер по оптовым продажам</h5>
                                            <h5  class="inright-list-item-ul-li-div-span-a">от 35000-75000тг</h5>
                                        </a>
                                        <a href="" class="inright-list-item-ul-li-div-a-small">Kaspi bank,Kordai</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="Work-by-profession">
                    <div class="chapter">
                        <h3>Работа по профессиям в Казахстане</h3>
                    </div>
                    <div class="Works-by-professions">7
                    </div>
                </div>
            </div>
        </section>


        <footer>
            <div class="icons">
                <i class="fa fa-chrome"></i>
            </div>
            <div class="footer-copyright">
                <h3>Copyright <a href="" style="color: #fffacc;">www.Worker.kz</a> 2018</h3>
            </div>
        </footer>
    </div>

</body>

</html>

<style>

    {{-- Global --}}
    * {box-sizing: border-box;}

    body{
        font-family: Arial, Helvetica, sans-serif;
        margin: 0;
        padding: 0;
        background-color: transparent;
    }

    /*Main Areas */

    .container-fluid{
        /*background-color: #fffacc;*/
        width: 100%;
        height: 1000px;
    }
    h2{
        padding: 0;
        margin: 0;
    }

    /*Header CSS*/

    .header{
        width: 100%;
        height: 80px;
        background-color: #feffe5;
        /*border: 1px solid black;*/
        text-align: center;
    }
    .topnav{
        margin-left: auto;
        margin-right: auto;
        height: 100%;
        width: 1250px;
        /*background-color: #00c851;*/
        /*border: 1px solid black;*/
        text-align: center;

    }

    /*Brnad section css*/
    .brand{
        width: auto;
        height: 100%;
        /*margin-left: -%;*/
        /*border: 1px solid white;*/
    }
    .brand-section{
        width: auto;
        height: auto;
        margin-top: 19px;
    }
    .brand img, .brand h2{
        display: inline-block;
        vertical-align: middle;
    }
    .brand h2{
        color: #3e2723;
    }
    .brand img:hover{
        -webkit-animation:spin 1s linear infinite;
        -moz-animation:spin 1s linear infinite;
        animation:spin 500ms linear infinite;
    }



    @-moz-keyframes spin { 100% { -moz-transform: rotate(360deg); } }
    @-webkit-keyframes spin { 100% { -webkit-transform: rotate(360deg); } }
    @keyframes spin { 100% { -webkit-transform: rotate(360deg); transform:rotate(360deg); } }




    /*Search container css*/

    select {
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        border: none;
    }

    .search-container{
        width: auto;
        height: 100%;
        /*border: 1px solid white;*/
        margin-left: 2%;
        border: none
    }

    .search-container form{
        /*border: 1px solid white;*/
        margin-top: 21px;
    }

    .search-container input[type=text]{
        width: 610px;
        padding: 8px;
        font-size: 17px;
        border: 1px solid black;
    }

    .select-ResumeVacotian{
        width: 80px;
        height: 37.3px;
        text-align: center;
        border: 1px solid black;
        /*border-radius: 5%;*/
        font-size: 110%;
    }

    .search-container button {
        padding: 9px 10px;
        background: #09afff;
        font-size: 17px;
        border: none;
        cursor: pointer;
        color: white;
    }
    .mini-search{
        margin-left: 2%;
        float: left;
    }
    .mini-search input[type=text]{
        width: 150px;
        padding: 5px;
        font-size: 17px;
        border: 1px solid black;
        margin-top: 1.5px;
    }
    .mini-search button{
        padding: 3px 3px;
        background: #09afff;
        font-size: 17px;
        border: none;
        cursor: pointer;
        color: white;
    }
    .search-container input[type=text],.select-div,.search-container button{
        display: inline-block;
    }

    /*Words and language*/

    .WordsAndSelects{
        width:auto;
        height: 100%;
        /*border: 1px solid white;*/
        margin-left: 32px;
    }

    .WordAndSelectsUnder{
        width: auto;
        /*border: 1px solid white;*/
        margin-top: 29px;
    }

    .WordsAndSelects a {
        color: black;
        padding: 14px 16px;
        text-decoration: none;
        font-size: 17px;
        margin: 0;
        padding: 0;
    }
    .WordsAndSelects a:hover{
        color: blue;
    }

     .select-language{
        height: 20px;
        font-size: 100%;
         margin-left: 16px;
         border: 1px solid black;
    }
    .WordsAndSelects a,.language-select{
        display: inline-block;
        margin: 0;
    }



    /*Inline block of main*/

    .search-container,.brand,.WordsAndSelects{
        display: inline-block;
        vertical-align: top;

    }


    /*Float - header css*/

    .float-header{
        overflow: hidden;
        width: 100%;
        height: auto;
        background-color: #3e2723;
    }
    /*.calling-topnav{*/
        /*display: none;*/
    /*}*/


    .under-float{
        margin-left: auto;
        margin-right: auto;
        height: 100%;
        width: 1250px;
        /*background-color: #00c851;*/
        /*border: 1px solid black;*/
        text-align: center;
    }

    .dropdowns{
        height: 100%;
        width: auto;
        /*background-color: #00acc1;*/
        margin-left: 0.5%;
        z-index: 1;
        /*border: 1px solid white;*/
    }


    .sticky {
        position: fixed;
        top: -3em;
    }


    .dropbtn {
        background-color: transparent;
        color: white;
        padding:  9px;
        font-size: 13px;
        border: none;
        /*cursor: pointer;*/
    }

    .dropdown {
        float: left;
        /*background-color: orange;*/
        width: auto;
        height: auto;
        margin-left: 2px;
        z-index: 1;
        /*position: relative;*/
        /*display: inline-block;*/
    }

    .dropdown-content {
        display: none;
        position: fixed;
        background-color: white;
        min-width: 160px;
        z-index: 1;
    }

    .dropdown-content a {
        color: black;
        font-size: 80%;
        text-align: left;
        padding: 10px 10px;
        text-decoration: none;
        display: block;
    }

    .dropdown-content a:hover {background-color: #f1f1f1}

    .dropdown:hover .dropdown-content {
        display: block;
    }

    .dropdown:hover .dropbtn {
        background-color: #ff2900;
    }

    /* Section css*/

    .main-imageandLog-in{
        width: 100%;
        height: 350px;
        background-image: url("https://static1.bigstockphoto.com/2/1/2/large1500/212071570.jpg");
        /*background-image: url("http://ulula.com/wp-content/uploads/2016/05/wider-picture-of-worker.jpg");*/
        background-repeat: no-repeat;
        background-position: center;
        backface-visibility: inherit;
        background-size: cover;
    }
    .undersection{
        height: 100%;
        width: 1250px;
        /*background-color: #00c851;*/
        margin-left: auto;
        margin-right: auto;
        /*border: 1px solid white;*/
    }
    .half-undersection,.half-undersection-fomAndIndicator{
        height: 100%;
        width: 49.5%;
        /*background-color: orange;*/
        /*border: 1px solid white;*/
        display: inline-block;
        vertical-align: top;
    }
    .Chapter{
        width: 100%;
        height: 50%;
        /*background-color: black;*/
        /*border: 1px solid white;*/
    }




    .TwoButton{
        width: 100%;
        height: 50%;
        /*background-color: #00acc1;*/
        /*border: 1px solid white;*/


    }
    .Buttons{
        width: auto;
        height: auto;
        /*border: 1px solid red;*/
        text-align: center;
        margin-top: 70px;
    }
    .Buttons button{
        border: 2px solid white;
        padding: 10px;
        border-radius: 2%;
        color: white;
        /*background-color: white;*/
        /*font-family: "Arial Black";*/
        font-size: 100%;
        background-color: transparent;

    }
    .Buttons button:hover{
        background-color: white;
        color: black;
    }

    .AddVacancies{
        margin-left: 3%;
    }
    .header-word{
        /*border: 1px solid white;*/
        height: auto;
        width: auto;
        margin-top: 10%;
        float: right;
        margin-right: 4%;
    }
    .header-word h1{
        font-size: 350%;
        font-family: Helvetica;
        margin: 0;
        padding: 0;
        color: white;
    }

    .fitters{
        width: 40%;
        height: 100%;
        /*background-color: #3e2723;*/
        /*border: 1px solid red;*/
    }
    .indicatorSet{
        /*border: 1px solid orangered;*/
        height: 80%;
        margin-top: 7%;
    }
    #HowManyCompany,#HowManyResume,#HowManyVacancy{
        background-color: rgba(0,0,0,0.4);
        border: 1px solid white;
        margin-top: 12%;
        height: 25%;
    }
    #HowManyCompany h1,#HowManyResume h1,#HowManyVacancy h1 {
        float: left;
        color: white;
        font-family: "Arial";
        font-size: 200%;
        margin: 0;
        padding: 0;
        width: 100%;
    }
    #HowManyCompany h5,#HowManyResume h5,#HowManyVacancy h5 {
        float: left;
        color: white;
        font-family: "Arial";
        font-size: 100%;
        margin: 0;
        padding: 0;

    }
    .form{
        width: 58.6%;
        height: 100%;
        /*background-color: #00e676;*/
        /*border: 1px solid red;*/
    }
    .formSet{
        height: 77.6%;
        width: 75%;
        /*background-color: white;*/
        margin-left: auto;
        /*margin-right: auto;*/
        margin-top: 8.7%;
        background-color: rgba(0,0,0,0.4);
        /*background-color: #00acc1;*/
        border: 1px solid black;
        /*margin-top: 10%;*/
    }
    .inputs{

        width: 100%;
        height: 50%;
        /*background-color: #0c5460;*/
        /*border: 1px solid red;*/
        margin-top: 6%;
    }
    .inputs input[type='text']{
        width: 90%;
        padding: 10px;
        margin-top: 8%;
        margin-left: 4.5%;
    }
    .formSet input[value='Submit']{
        padding: 10px 20px;
        border: 2px solid white;
        color: white;
        font-size: 100%;
        margin-top: 1%;
        background-color: transparent;
        margin-left: 5%;
    }
    .formSet input[value='Submit']:hover{
        background-color: #0c5460;
    }

    .RememberMe{
        width: auto;
        height: auto;
        /*background-color: greenyellow;*/
    }
    .RememberMe input[type='checkbox']{
        top: 0;
        left: 0;
        height: 18px;
        width: 18px;
        /*background-color: #eee;*/
        margin-left: 5.5%;
    }


    .form,.fitters{
        display: inline-block;
        vertical-align: top;
    }

    .main-section{
        height: auto;
        /*background-color: #00acc1;*/
        /*border: 1px solid red;*/
    }
    .main-section a{
        text-decoration: none;
        display: block;
    }
    .main-section a:hover{
        color: red;
    }
    .MainSelects{
        width: 1250px;
        height: auto;
        margin-left: auto;
        margin-right: auto;
        border-bottom: 1px solid grey;
    }

    .left-main{
        width: 310px;
        height: 500px;
        border: 1px solid grey;
        /*background-color: #00e5ff;*/
    }
    .left-main,.right-main{
        display: inline-block;
        vertical-align: top;
    }
    .chapter{
        width: 100%;
        height: 50px;
        /*background-color: yellow;*/
    }
    .chapter h3{
        float: left;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 110%;
        margin-bottom: 0;
        padding: 0;
    }
    .chapter_h3{
        margin-left: 2%;
    }
    .left-list-of-company{
        /*background-color: yellowgreen;*/
        float: left;
        margin-right: auto;
        margin-left: auto;
    }
    .inleft-list-item-ul{
        margin-bottom: 0;
        padding: 0;
    }
    .inleft-list-item-ul-li-div{
        width: 100%;
        height: auto;
        /*border: 1px solid moccasin;*/
    }
    .inleft-list-item-ul-li{
        list-style-type: none;
        /*border: 1px solid orangered;*/
        margin-top: 3%;
    }
    .inleft-list-item-ul-li-div-spandiv{
        /*border: 1px solid red;*/
        width: 70%;
        display: inline-block;

        /*float: left;*/
    }
    .inleft-list-item-ul-li-div-span2{
        /*border: 1px solid red;*/
        float: right;
        margin-right: 4%;
        margin-top: 3%;
    }
    .inleft-list-item-ul-li-div-span{
        text-decoration: none;
        color: black;
        font-size: 95%;
        font-family: Arial, Helvetica, sans-serif ;
    }

    .right-main{
        width: 930px;
        height: 500px;
        border: 1px solid grey;
        /*background-color: orangered;*/
    }
    .right-main h5{
        text-decoration: none;
        font-size: 100%;
        font-weight: lighter;
        margin: 0;
        margin-top: 1%;
        display: block;
    }
    .right-list-of-company-column_1,.right-list-of-company-column_2,.right-list-of-company-column_3{
        width: 30.5%;
        height: 92%;
        display: inline-block;
        margin-left: 2%;
    }
    .right-list-of-company-column_1{
        margin-left: 2%;
    }
    .inright-list-item-ul-li{
        margin-top: 5%;
    }
    .inright-list-item-ul-li-div-a-small{
        font-size: small;
        color: grey;
        margin-top: 1%;
    }
    .inright-list-item-ul{
        list-style-type: none;
        margin-bottom: 0;
        padding: 0;
    }
    .Work-by-profession{
        border-top: 1px solid grey;
        width: 1250px;
        height: 400px;
        background-color: yellow;
        margin-left: auto;
        margin-right: auto;
    }
    .Work-by-profession h3{
        margin: 0;
    }
    .Works-by-professions{
        width: 100%;
        height: 100%;
        background-color: #00e5ff;
    }
    .grid-container {
        display: grid;
        grid-template-columns: auto auto auto;
        height: 100%;
    }
    .grid-item{
        text-align: center;
        border: 2px solid yellow;

    }




    /*footer*/

    footer{
        padding: 50px;
        background-color: #00e676;
        text-align: center;
        margin-top: 10%;
    }
    .icons{
        width: auto;
        height: auto;
    }
    .footer-copyright{
        background-color: #0c5460;
        height: auto;
    }

    .Formum-Help-TopResume{
        width: 100%;
        height: 80px;
        background-color: white;
    }
    .Three-set-div{
        margin-right: auto;
        margin-left: auto;
        width: 1250px;
        height: 100%;
        background-color: orange;
    }
    .Three-set-div, .Three-set-div > div {
        -webkit-box-sixing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
    }









    /*Media design*/

    @media screen and (max-width: 1300px) {
        .search-container input[type=text]{
            width: 365px;
        }
        .topnav{
            width: 1000px;
        }
        /*.in-topnav{*/
            /*width: auto;*/
            /*height: auto;*/

        /*}*/
        .under-float{
            width: 1000px;
        }
        .undersection{
            width: 1000px;
        }
        .fitters{
            display: none;
        }
        .half-undersection{
            width: 70%;
        }
        .half-undersection-fomAndIndicator{
            width: 29%;
        }
        .form{
            width: 100%;
        }
        .formSet{
            width: 95%;
        }
        .MainSelects{
            width: 1000px;
            border-bottom: 1px solid grey;
        }
        .right-main{
            width: 680px;
        }
        .right-list-of-company-column_3{
            display: none;
        }
        .right-list-of-company-column_1,.right-list-of-company-column_2{
            width: 47.5%;
        }
        .Work-by-profession{
            width: 1000px;
        }
    }
    @media screen and (max-width: 1020px) {
        .topnav{
            width: 653px;
            height: auto;
        }
        .search-container input[type=text]{
            width: 307px;
        }

        .WordsAndSelects{
            width: 100%;
            margin-left: 0;
        }
        .WordAndSelectsUnder{
            margin-right: 1%;
            margin-top: 0;
            float: right;
        }
        .select-language{
            padding: 0px 5px;
        }
        .header{
            height: auto;
        }
        .under-float{
            width: 690px;
        }
        .undersection{
            width: 690px;
        }
        .half-undersection{
            width: 100%;
        }
        .half-undersection-fomAndIndicator{
            display: none;
        }
        .MainSelects{
            width: 690px;
        }
        .right-main{
            margin-left: 2%;
            width: 350px;
        }
        .right-list-of-company-column_2{
            display: none;
        }
        .right-list-of-company-column_1{
            width: 100%;
        }
        .mini-search{
            display: none;
        }
    }


</style>

<script>

    $(document).ready(function() {
        $('#invisible-img-icon').hide();
        $('.mini-search').hide();
        $(".calling-topnav").hide();
        var stickyNavTop = $('.float-header').offset().top;
        var stickyNav = function(){
            var scrollTop = ($(window).scrollTop());
            var header_height = $('.float-header').height();
            if (scrollTop >= stickyNavTop+header_height) {
                $('.float-header').addClass('sticky').animate({
                    top: 0 });
                $('#invisible-img-icon').show(200);
                $('.mini-search').fadeIn();
                $(".calling-topnav").fadeOut(200);
            } else {
                $('.float-header').removeClass('sticky').clearQueue().animate({
                    top: "-48px"}, 0);;
                $('#invisible-img-icon').hide(200);
                $(".calling-topnav").hide();
                $('.mini-search').fadeOut();
            }};
        $(window).scroll(function() {
            stickyNav();
        });
        stickyNav();
        
        
        var callTopNav = function () {
            $("input[name='mini-search']").bind("click",function(){
                $(".calling-topnav").fadeIn(300);
                $(".mini-search").fadeOut(200);
            });
        }
        callTopNav();



    });




</script>