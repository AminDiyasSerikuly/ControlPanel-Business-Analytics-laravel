@extends("layouts.ForAllPages")
@section("section")
    <section class="Main-List-Box">
        <div class="Indiacator-VacOrResume">
        </div>

        <div class="Choose_panelAndListBox">
            <div class="Choose_panel">
                <div class="dropdownsVersion2">
                    <button class="buttonFilter btn" style="padding: 0; border-radius: 0;" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                        <h5>Регион</h5>
                    </button>
                    <div class="collapse" id="collapseExample">
                        <button class="item btn" style="padding: 0;border-radius: 0;">
                            <div class="inButton">
                                <h5 class="right-element">Казахстан</h5>
                                <h5 class="indicator">57</h5>
                            </div>
                        </button>
                        <button class="item btn" style="padding: 0;border-radius: 0;">
                            <div class="inButton">
                                <h5 class="right-element">Казахстан</h5>
                                <h5 class="indicator">57</h5>
                            </div>
                        </button>
                        <button class="item btn" style="padding: 0;border-radius: 0;">
                            <div class="inButton">
                                <h5 class="right-element">Казахстан</h5>
                                <h5 class="indicator">57</h5>
                            </div>
                        </button>
                        <button class="item btn" style="padding: 0;border-radius: 0;">
                            <div class="inButton">
                                <h5 class="right-element">Казахстан</h5>
                                <h5 class="indicator">57</h5>
                            </div>
                        </button>

                    </div>
                </div>
            </div>
            <div class="ListShows">
                <div class="filter">
                    <div class="container-for-items-of-filter">
                        <div class="dropdown dropdownSecond" style=" ">
                            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Dropdown Example
                                <span class="caret"></span></button>
                            <ul class="dropdown-menu dropdownMenuSecond">
                                <li><a href="#">HTML</a></li>
                                <li><a href="#">CSS</a></li>
                                <li><a href="#">JavaScript</a></li>
                            </ul>
                        </div>
                        <div class="dropdown dropdownSecond" style=" ">
                            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Dropdown Example
                                <span class="caret"></span></button>
                            <ul class="dropdown-menu dropdownMenuSecond">
                                <li><a href="#">HTML</a></li>
                                <li><a href="#">CSS</a></li>
                                <li><a href="#">JavaScript</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="VacotionContentBox">
                    <div class="BoxInVacotionContentBox">
                        <div class="Chapter_Company_Adress_Salaty">
                            <div class="Chap_Sal">
                                <div class="ChpaterOfVacotion">
                                    <h4>PHP-разработчик (Laravel)</h4>
                                </div>
                                <div class="Salary">
                                    <h4>15000000-150000000</h4>
                                    <h4>KZT</h4>
                                </div>
                            </div>
                            <div class="Company_Name">
                                <h6>ТОО Договор24 </h6>
                            </div>
                            <div class="Adress">
                                <h6>Алматы, Абая</h6>
                            </div>
                        </div>
                        <div class="Description_and_DateMaster">
                            <div class="Description" style="">
                                <p class="text-justify">
                                    Разработка и реализация IT-стратегии компании. Отвечает за эффективность всех информационно-технологических процессов компании. Руководство техническим персоналом - разработка, подбор и...
                                    Отличное знание PHP 5 и фреймворка Laravel 5, HTML5, CSS3 (Bootstrap), JS (jQuery).
                                </p>
                            </div>
                            <div class="DateMaster">
                                    <h6 style="float: left;">Откликнуться</h6>
                                    <h6 class="second" style="float: right;margin-right: 8px;">2 Сентября</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="VacotionContentBox">
                    <div class="BoxInVacotionContentBox">

                    </div>
                </div>
                <div class="VacotionContentBox">
                    <div class="BoxInVacotionContentBox">

                    </div>
                </div>
                <div class="VacotionContentBox">
                    <div class="BoxInVacotionContentBox">

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

<style>
    .Main-List-Box{
        margin-left: auto;
        margin-right: auto;
        width: 1250px;
        height: 1300px;
        margin-top:40px;
        background-color: rgb(255,0,0);
    }
    .dropdownsVersion2{
        margin-top: 10px;
        text-align: center;
        width: 75%;
        height: auto;
        margin-right: auto;
        margin-left: auto;

    }

    .btn-group{
        width: 100%;
    }

    .collapse{
        width: 100%;
        text-align: center;
        /*background-color: gray;*/
    }
    .item{
        text-align: center;
        margin-top: 2%;
        background-color: transparent;
        width: 100%;
        padding: 0;
    }
    .item:hover{
        background-color: gray;
    }

    .buttonFilter{
        background-color: transparent;
        width: 100%;
        padding: 0;
        margin: 0;
    }
    .buttonFilter h5{
        float: left;
        margin: 0;
        padding: 0;
    }
    .dropdownsVersion2 h5{
        margin: 0;
        padding: 0;
    }
    .buttonFilter:hover{
        background-color: gray;
    }

    div[class*="col-sm"]{
        background-color: yellow;
        border: 1px solid red;
    }
    .Indiacator-VacOrResume{
        width: 100%;
        height: 8%;
        background-color: yellow;
    }
    .ListShows{
        grid-area: ListShowsAsVar;
        background-color: orange;
    }
    .Choose_panel{
        grid-area: Choose_panelAsVar;
        /*background-color: #0c5460;*/
    }
    .Choose_panelAndListBox{
        display: grid;
        grid-template-areas: 'Choose_panelAsVar ListShowsAsVar';
        grid-template-columns: 1.3fr 5fr;
        width: 100%;
        height: 92%;
    }
    .inButton{
        width: 100%;
        height: auto;
    }
    .inButton h5{
        display: inline-block;
    }
    .indicator{
        float: right;
        display: inline-block;
    }
    .right-element{
        float: left;
    }
    .filter{
        width: 100%;
        height: 70px;
        background-color: #00e676;
        display: flex;
        align-items: center;
        justify-content: center;

    }
    .container-for-items-of-filter{
        width: 95%;
        height: 60%;
        background-color: #2e5e86;
        margin-right: auto;
        margin-left: auto;
    }
    .VacotionContentBox{
        width: 100%;
        height: 210px;
        background-color: #00acc1;
        text-align: center;
        border: 1px solid black;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .BoxInVacotionContentBox{
        width: 95%;
        height: 87%;
        background-color: yellow;
        margin: auto;

    }
    .dropdown{
        height: 100%;
        margin-right: 2%;
        position: static;

    }
    .dropdownSecond button{
        border-radius: 0;
        height: 100%;
    }
    .dropdownSecond ul{
        border-radius: 0;
    }
    .Chapter_Company_Adress_Salaty{
        width: 100%;
        height: 50%;
        background-color: #0b51c5;
    }
    .Chap_Sal{
        width: 100%;
        height: 45%;
    }
    .ChpaterOfVacotion{
        width: auto;
        height: 100%;
        background-color: #fffacc;
        float: left;
        display: inline-block;
        text-align: left;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #09afff;
        /*font-size: 110%;*/
        /*vertical-align: ;*/
    }
    .ChpaterOfVacotion h4{
        font-size: 135%;
        font-weight: lighter;
    }
    .Salary{
        background-color: #00e5ff;
        width: auto;
        height: 100%;
        float: right;
        margin-right: 0;
        /*display: inline-block;*/
        display: flex;
        align-items: center;
        justify-content: center;
        /*color: #09afff;*/
        font-size: 100%;
    }
    .Salary h4{
        display: inline-block;
        margin-left: 10px;
    }
    .Company_Name{
        background-color: #00e5ff;
        width: 100%;
        height: 25%;
        display: flex;
        align-items: center;
    }
    .Company_Name h6{
        float: left;
        margin: 0;
        padding: 0;
        font-size: 85%;
        color: gray;

    }
    .Adress{
        background-color: #00e676;
        width: 100%;
        height: 25%;
        display: flex;
        align-items: center;
    }
    .Adress h6{
        float: left;
        margin: 0;
        padding: 0;
        font-size: 85%;
        color: gray;
    }
    .dot{
        height: 3px;
        width: 3px;
        background-color:red;
        border-radius: 50%;
        border: 0.5px solid black;
    }
    .Description_and_DateMaster{
        width: 100%;
        height: 50%;
        background-color: orangered;
    }
    .Description{
        background-color: #0b51c5;
        height: 80%;
        width: 100%;
        overflow: hidden;
    }
    .DateMaster{
        width: 100%;
        background-color: #fffacc;
        height: 20%;
        display: flex;
        align-items: center;
    }
    .DateMaster h6{
        margin: 0;
        padding: 0;
    }


</style>
