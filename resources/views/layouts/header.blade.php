<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">
        <ul class="navbar-nav mr-auto" id="koli">
            <li><img src="http://leanin.org/partners/ui/modules/common/images/notification-icon.png" width="30" height="30" class="d-inline-block align-top" alt=""></li>
            <li style="margin-left: 2%;"><h5 id="worker">Worker.kz</h5></li>
        </ul>
    </a>

    <div class="SearchArea" style="">
        <form class="form-inline">
            <input class="form-control " type="search" placeholder="Search" aria-label="Search" >
            <select class="form-control" id="sel1" style="border-radius: 0;">
                <option>Резюме</option>
                <option>Вакансий</option>
                <option>Бизнес</option>
            </select>
            <button class="btn btn-primary" type="submit" style="border-radius: 0; margin-left: 1%;">Найти</button>
        </form>
    </div>

    <ul class="navbar-nav " id="searcher" style="" >
        <li class="nav-item active">
            <a class="nav-link"  href="#" style="font-size: 80%;">Расширенный поиск</a>
        </li>
        <li class="nav-item" style="margin-left: 5%;">
            <select class="selectLanguage"  style="margin-top: 8px;">
                <option>Русский</option>
                <option>Казахский</option>
                <option>Английский</option>
            </select>
        </li>
    </ul>
</nav>



<style>
    .navbar-brand{
        margin-left: 3%;
    }
    h5{
        font-size: 115%;
        color: #0e4377;
    }

    .SearchArea form{
        margin-left: auto;
        margin-right: auto;
        width: 99%;
        /*text-align: center;*/
    }
    .SearchArea input[type="search"]{
        width: 70%;
    }
    .navbar-nav{
        width: 25%; margin-left: 5%
    }
    .SearchArea{
        width:50%; margin-left: 3%;
    }
    @media(max-width:1350px){
        .SearchArea input[type="search"]{
           width: 50%;
       }}

    @media(max-width:1200px){
        .navbar-nav{
            width: 30%; margin-left: 0;
        }
        .selectLanguage{
            font-size:73%;
        }
        .SearchArea{
            width: 40%;
            margin-left: 0;
        }
    }
    @media(max-width:1010px){

        #searcher{
                 display: none;
             }
        .SearchArea{
            display: none;
        }
        a.navbar-brand{
            width: 100%;
            text-align: center;
        }
        #koli{
            margin-left: auto;
            margin-right: auto;
            text-align: center;
        }

    }
</style>

