<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        * {box-sizing: border-box;}

        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
        }

        .topnav {
            overflow: hidden;
            background-color: #e9e9e9;
        }
        .WordsAndSelects a {
            color: black;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
        }
        .WordsAndSelects a:hover{
            color: blue;
        }

        .language-select{
            display: inline-block;
        }

        .WordsAndSelects {
            /*background-color: #fffacc;*/
            padding: 14.3px;
            width: auto;
            /*float: right;*/
            /*margin-right: 5%;*/
        }


        .search-container {
            /*float: left;*/
            margin-left: 2%;
            width: auto;
        }

        .topnav input[type=text] {
            width: 550px;
            padding: 6px;
            margin-top: 8px;
            font-size: 17px;
            border: none;
        }

        .topnav .search-container button {
            /*float: right;*/
            padding: 6px 10px;
            margin-top: 8px;
            margin-right: 16px;
            background: #09afff;
            font-size: 17px;
            border: none;
            cursor: pointer;
            color: white;
        }

        .select-ResumeVacotian{
            padding: 8px 10px;
        }

        .topnav .search-container button:hover {
            background: #1080ff;
        }

        .brand{
            /*float: left;*/
            /*background-color: #fffacc;*/
            /*padding: 6px;*/
            height: 100%;
            margin-left: 2%;
        }

        .brand img,.brand h5{
            display: inline-block;
        }
        .brand img{
            /*margin-top: 3.5%;*/
        }


        .main{
            text-align: center;
        }
        .main .brand, .WordsAndSelects, .search-container{
            height: 100%;
            display: inline-block;
        }
        select-div{
            display: inline-block;
        } .


        @media screen and (max-width: 1495px) {
            .topnav input[type=text] {
                width: 250px;
            }
            /*.search-container{*/
            /*margin-left: 1%;*/
            /*}*/
            .select-ResumeVacotian{
                padding: 8px ;
            }
            .topnav .search-container button{
                padding: 6px 6px;
            }


        }
        @media screen and (max-width: 1070px) {
            .topnav input[type=text] {
                width: 300px;
            }
            /*.WordsAndSelects{*/
            /*width: 100%;*/
            /*!*float: right;*!*/
            /*}*/
            .language-select{
                display: none;
            }
            .WordsAndSelects{
                padding: 0;
            }
            .WordsAndSelects a{
                color: black;
                padding: 0px 0px;
                text-decoration: none;
                font-size: 5px;
            }

        }
        @media screen and (max-width: 770px) {
            .search-container{
                width: 100%;
            }
            .brand{
                background-color: #0e4377;
                width: 100%;
                padding: 0;
                margin-left: 0;
            }
            #worker{
                display: none;
            }
            .brand img{
                margin-top: auto;
                margin-bottom: auto;
            }

            .select-div{
                display: none;
            }
            .WordsAndSelects{
                display: none;
            }
            .topnav input[type=text] {
                width: 300px;
            }

            @media screen and (max-width: 455px) {
                .topnav input[type=text] {
                    width: 180px;
                }
            }

        }



    </style>
</head>
<body>

<div class="topnav">
    <div class="container-fluid" style="width: 100%;">
        <div class="main" style="width: 90%; height: auto; background-color: red; margin-right: auto;margin-left: auto;">
            <div class="last-main" style="width: auto; height: auto; background-color: orange">
                <div class="brand">
                    <img src="http://leanin.org/partners/ui/modules/common/images/notification-icon.png" width="30" height="30" class="d-inline-block align-top" alt="">
                    <h5 id="worker" style="margin-top: 7%">Worker.kz</h5>
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
                        <button type="submit" >
                            Найти
                        </button>
                    </form>
                </div>
                <div class="WordsAndSelects">
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
</body>
</html>