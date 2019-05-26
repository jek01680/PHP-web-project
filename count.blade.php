<!doctype html>
<html lang="ko">
<!페이지 제목>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta charset="UTF-8" />
    <title></title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
    <link href="default.css" rel="stylesheet" type="text/css" media="all" />
    <link href="fonts.css" rel="stylesheet" type="text/css" media="all" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <!--[if IE 6]>
    <link href="default_ie6.css" rel="stylesheet" type="text/css" />
    <![endif]-->
</head>
<body>
<div id="wrapper">
    <div id="header-wrapper">
        <head>
            <meta charset="utf-8" />
            <title>CSS</title>
            <style>
                #header {
                    width: 1000px;
                    margin: 0px auto;
                }

                #logo {
                    font-family: Calibri;
                    font-style: italic;
                    font-weight: lighter;
                    margin-top: 300px;
                    margin-left: 250px;
                    width: 500px;
                }
            </style>
        </head>
        <div id="header" class="container">
            <div id="logo">
                <h1><a href="#">'4' to 世明 </a></h1>
                <p>by.computer science</p>
            </div>
        </div>
        <style>
            #menu {
                width: 1000px;
                text-align: center;
            }
        </style>
        <div id="menu" class="container">
            <ul>
                <li class="current_page_item"><a href="index.html" target="_blank" accesskey="1" title="">home</a></li>
                <li><a href="dorcount.html" target="_blank" accesskey="2" title="">Dormitory</a></li>
                <li><a href="lecevalu.html" target="_blank" accesskey="3" title="">Lecture</a></li>
                <li><a href="delivery.html" target="_blank" accesskey="4" title="">Delivery</a></li>
                <li><a href="http://its.okjc.net/m01/map?category=1" target="_blank" accesskey="5" title="">31'Bus</a></li>
                <li><a href="log.html" target="_blank" accesskey="6" title="">Log In/Join us</a></li>
            </ul>
        </div>
    </div>

</body>

<!페이지 section>
<head>
    <meta charset="utf-8">
    <title>CSS</title>
    <style>
        #jb-container {
            width: 1160px;
            margin: 0px auto;
            padding: 20px;
            border: 1px solid #bcbcbc;
        }

        #jb-content {
            width: 860px;
            padding: 20px;
            margin-bottom: 20px;
            float: right;
            border: 1px solid #bcbcbc;
        }

        #jb-sidebar {
            width: 200px;
            padding: 20px;
            margin-bottom: 20px;
            float: left;
            border: 1px solid #bcbcbc;
        }

        #jb-footer {
            clear: both;
            padding: 5px;
            border: 1px solid #bcbcbc;
        }
        #jb-moreInfo {
            width: 800px;
            padding: 20px;
            margin-bottom: 20px;
            margin-top:80px;
            float: right;
            border: none;
        }
    </style>
    <style type="text/css">
        .form-style-5 {
            max-width: 500px;
            padding: 10px 20px;
            background: #f4f7f8;
            margin: 10px auto;
            padding: 20px;
            background: #f4f7f8;
            border-radius: 8px;
            font-family: Calibri;
        }

        .form-style-5 fieldset {
            border: none;
        }

        .form-style-5 legend {
            font-size: 1.4em;
            margin-bottom: 10px;
        }

        .form-style-5 label {
            display: block;
            margin-bottom: 8px;
        }
        .form-style-5 input,
        .form-style-5 input[type="text"],
        .form-style-5 input[type="number"],
        .form-style-5 textarea,
        .form-style-5 select {
            font-family: Calibri;
            background: rgba(255,255,255,.1);
            border: none;
            border-radius: 4px;
            font-size: 15px;
            margin: 0;
            outline: 0;
            padding: 10px;
            width: 100%;
            box-sizing: border-box;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            background-color: #e8eeef;
            color: #8a97a0;
            -webkit-box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
            box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
            margin-bottom: 30px;
        }
        .form-style-5 input:focus,
        .form-style-5 input[type="text"]:focus,
        .form-style-5 input[type="number"]:focus,
        .form-style-5 textarea:focus,
        .form-style-5 select:focus {
            background: #d2d9dd;
        }

        .form-style-5 select {
            -webkit-appearance: menulist-button;
            height: 40px;
        }

        .form-style-5 .number {
            background: #1abc9c;
            color: #fff;
            height: 30px;
            width: 30px;
            display: inline-block;
            font-size: 0.8em;
            margin-right: 4px;
            line-height: 30px;
            text-align: center;
            text-shadow: 0 1px 0 rgba(255,255,255,0.2);
            border-radius: 15px 15px 15px 0px;
        }

        .form-style-5 input[type="submit"],
        .form-style-5 input[type="button"] {
            position: relative;
            display: block;
            padding: 19px 39px 18px 39px;
            color: #FFF;
            margin: 0 auto;
            background: #1abc9c;
            font-size: 18px;
            text-align: center;
            font-style: normal;
            width: 100%;
            border: 1px solid #16a085;
            border-width: 1px 1px 3px;
            margin-bottom: 10px;
        }

        .form-style-5 input[type="submit"]:hover,
        .form-style-5 input[type="button"]:hover {
            background: #109177;
        }


        .form-style-4 {
            width: 450px;
            font-size: 16px;
            background: #1abc9c;
            padding: 30px 30px 15px 30px;
            margin-left: 135px;
            border: 5px solid #d2d9dd;
        }

        .form-style-4 input[type=submit],
        .form-style-4 input[type=button],
        .form-style-4 input[type=text],
        .form-style-4 textarea,
        .form-style-4 label {
            font-family: Georgia, Calibri,"Times New Roman", Times, serif;
            font-size: 16px;
            color: #fff;
        }

        .form-style-4 label {
            display: block;
            margin-bottom: 10px;
        }

        .form-style-4 label > span {
            display: inline-block;
            float: left;
            width: 150px;
        }
        .form-style-4 input,
        .form-style-4 input[type=text],
        .form-style-4 textarea {
            font-style: normal;
            padding: 0px 0px 0px 0px;
            background: transparent;
            outline: none;
            border: none;
            border-bottom: 1px dashed #FFF;
            width: 275px;
            overflow: hidden;
            resize: none;
            height: 20px;
        }

        .form-style-4 textarea:focus,
        .form-style-4 input[type=text]:focus,
        .form-style-4 input[type=email]:focus,
        .form-style-4 input[type=email] :focus {
            border-bottom: 1px dashed #D9FFA9;
        }

        .form-style-4 input[type=submit],
        .form-style-4 input[type=button] {
            background: #576E86;
            border: none;
            padding: 8px 10px 8px 10px;
            border-radius: 5px;
            color: #A8BACE;
        }

        .form-style-4 input[type=submit]:hover,
        .form-style-4 input[type=button]:hover {
            background: #394D61;
        }
        #lay_pop{
            position:absolute;z-index:500;width:600px;height:400px;
            display:none;background-color: #f4fcff;border:2px solid #1abc9c
        }
        #all_body{
            position:absolute;z-index:9;display:block;filter:alpha(opacity=50);
            opacity:0.5;-moz-opacity:0.5;background-color: #5c5c5a;left:0;top:0
        }
    </style>

</head>

<body>
<div id="jb-container">
    <div id="jb-content">
        <h2 style="text-align:center">기숙사 합불 예측</h2><br />
        <div class="form-style-5">
            <form name="frmData" id="frmData" method="post">
                <fieldset>

                    <legend><span class="number">1</span>학사 정보</legend>
                    <table>
                        <tr>
                            <td> <p style=" font-size:17px;">학점: </p></td>
                            <td><input type="number" style="float:left;" id="grade" name="grade" placeholder="0~4.5입력"></td>
                        </tr>
                        <tr>
                            <td><p style="float:left; margin-right:10px; font-size:17px;">기숙사 점수: </p> </td>
                            <td><input type="number" id="dorm_score" name="dorm_score" placeholder="30점 기본, 0~40 입력"></td>
                        </tr>
                        <tr>
                            <td><p style="float:left; margin-right:10px; font-size:17px;">소득 분위: </p> </td>
                            <td><input type="number" id="money" name="money" style="width:200px;"  placeholder="1~10입력"> </td>
                        </tr>
                    </table>

                    <br />
                    <legend><span class="number">2</span>거주지 정보</legend>

                    <table>
                        <tr>
                            <td><input style=" width:15px;height:15px;border:1px;" type="radio" id="home" name="home" value="14" checked="checked" />  </td>
                            <td><p style="font-size:17px;">제천, 영월, 단양</p></td>
                        </tr>
                        <tr>
                            <td><input style=" width:17px;height:17px;border:1px;" type="radio" id="home" name="home" value="16" />  </td>
                            <td><p style="font-size:17px;">원주, 충주</p></td>
                        </tr>
                        <tr>
                            <td><input style=" width:17px;height:17px;border:1px;" type="radio" id="home" name="home" value="18" /> </td>
                            <td><p style="font-size:17px;">서울, 성남, 수원, 용인, 부천, 이천 등</p></td>
                        </tr>
                        <tr>
                            <td><input style=" width:17px;height:17px;border:1px;" type="radio" id="home" name="home" value="20" />  </td>
                            <td><p style="font-size:17px;">그 외 지역</p></td>
                        </tr>
                    </table>

                    <br />
                    <label for="selectBox">기숙사:</label>
                    <select name="selectBox" id="selectBox" onchange="setS();calc();">
                        <optgroup label="청풍학사">
                            <option value="11" >1인실</option>
                            <option value="12">2인실</option>
                        </optgroup>
                            <optgroup label="세명학사">
                            <option value="21">1인실</option>
                            <option value="22">2인실</option>
                            <option value="24">(2+2)인실</option>
                            <option value="26">(3+3)인실</option>
                        </optgroup>
                        <optgroup label="청룡학사">
                            <option value="32">2인실</option>
                            <option value="34">4인실</option>
                            <option value="36">(2+4)인실</option>
                        </optgroup>
                        <optgroup label="예지학사">
                            <option value="42">2인실</option>
                            <option value="43">3인실</option>
                            <option value="44">4인실</option>
                        </optgroup>
                        <optgroup label="인성학사">
                            <option value="51">1인실</option>
                            <option value="52">2인실</option>
                            <option value="56">(2+4)인실</option>
                        </optgroup>
                        <optgroup label="비룡학사">
                            <option value="61">1인실</option>
                            <option value="62">2인실</option>
                        </optgroup>
                    </select>
                </fieldset>

                <div id="lay_pop">

                    <a href="https://imgur.com/vk7cFEK"><img src="https://i.imgur.com/vk7cFEK.png" title="source: imgur.com" width="100%" style="width: 600px;height: auto;border: none;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;-ms-interpolation-mode: bicubic;" border="0"/></a>
                    <input id="schField"><input id="result"><input id="B" >
                    </br>
                    <input type="button" value="닫기" onclick="layerClose('lay_pop','all_body')"></a>
                </div>
                <div id="all_body"></div>
                <input type="button" id="checkBtn" value="계산" onclick="Average();" />
                <input type="button" id="Pop" value="결과 보기" onclick="pushLayer();" />
            </form>
        </div>

        <script type="text/javascript">
            function calc() {
                var x = document.getElementById("grade").value;
                x = (x / 4.5) * 40;

                var home = $('input:radio[name="home"]:checked').val();
                var y = (home * 1);

                var z = document.getElementById("dorm_score").value;
                if (z < 0) {
                    z = (30 + z * 1);
                } else {
                    switch (z >= 0) {
                        case (z == 0):
                            z = (30 + 0 * 1);
                            break;
                        case (z > 0 && z <= 5):
                            z = (30 + 1 * 1);
                            break;
                        case (z >= 6 && z <= 10):
                            z = (30 + 2 * 1);
                            break;
                        case (z >= 11 && z <= 15):
                            z = (30 + 3 * 1);
                            break;
                        case (z >= 16 && z <= 19):
                            z = (30 + 4 * 1);
                            break;
                        case (z >= 20 && z <= 23):
                            z = (30 + 5 * 1);
                            break;
                        case (z >= 24 && z <= 30):
                            z = (30 + 6 * 1);
                            break;
                        case (z >= 31 && z <= 35):
                            z = (30 + 7 * 1);
                            break;
                        case (z >= 36 && z <= 40):
                            z = (30 + 8 * 1);
                            break;
                        case (z >= 41 && z <= 50):
                            z = (30 + 9 * 1);
                            break;
                        case (z > 50):
                            z = (30 + 10 * 1);
                            break;
                    }
                }
                var q = document.getElementById("money").value;
                q = 10 - (q * 1);

                var result = (y + x + z + q);
                document.getElementById("result").value = result;
            }

            function setS(){
                var schField = $("#selectBox option:selected").val();
                document.getElementById("schField").value = schField;
            }

            function Average(){
                var A = document.getElementById("schField").value;
                var B;
                var F_result = document.getElementById("result").value;
                if(A == 11)//1인실
                {
                    if(F_result>100){   B = 70;   }
                    else{   B = 30; }
                }
                                    else if(A == 21)
                                    {
                                        if(F_result>100){   B = 70;   }
                                        else{   B = 30; }
                                    }
                                    else if(A == 51)
                                    {
                                        if(F_result>100){   B = 70;   }
                                        else{   B = 30; }
                                    }
                                    else if(A == 61)
                                    {
                                        if(F_result>100){   B = 70;   }
                                        else{   B = 30; }
                                    }
                else if(A == 12)//청풍2인실
                {
                    if(F_result>80){    B=80;   }
                    else if(F_result>75 && F_result<=80){   B=70;    }
                    else if(F_result>69 && F_result<=75){   B=60;   }
                    else{   B = 50; }
                }
                else if(A == 22)//2인실
                {
                    if(F_result>90){    B=80;   }
                    else if(F_result>86 && F_result<=90){   B=75;    }
                    else if(F_result>82 && F_result<=86){   B=70;   }
                    else if(F_result>79 && F_result<=82){   B=60;   }
                    else if(F_result>70 && F_result<=79){   B=55;   }
                    else{   B = 50; }
                }
                                    else if(A == 32)
                                    {
                                        if(F_result>90){    B=80;   }
                                        else if(F_result>86 && F_result<=90){   B=75;    }
                                        else if(F_result>82 && F_result<=86){   B=70;   }
                                        else if(F_result>79 && F_result<=82){   B=60;   }
                                        else if(F_result>70 && F_result<=79){   B=55;   }
                                        else{   B = 50; }
                                    }
                                    else if(A == 42)
                                    {
                                        if(F_result>90){    B=80;   }
                                        else if(F_result>86 && F_result<=90){   B=75;    }
                                        else if(F_result>82 && F_result<=86){   B=70;   }
                                        else if(F_result>79 && F_result<=82){   B=60;   }
                                        else if(F_result>70 && F_result<=79){   B=55;   }
                                        else{   B = 50; }
                                    }
                                    else if(A == 52)
                                    {
                                        if(F_result>90){    B=80;   }
                                        else if(F_result>86 && F_result<=90){   B=75;    }
                                        else if(F_result>82 && F_result<=86){   B=70;   }
                                        else if(F_result>79 && F_result<=82){   B=60;   }
                                        else if(F_result>70 && F_result<=79){   B=55;   }
                                        else{   B = 50; }
                                    }
                                    else if(A == 62)
                                    {
                                        if(F_result>90){    B=80;   }
                                        else if(F_result>86 && F_result<=90){   B=75;    }
                                        else if(F_result>82 && F_result<=86){   B=70;   }
                                        else if(F_result>79 && F_result<=82){   B=60;   }
                                        else if(F_result>70 && F_result<=79){   B=55;   }
                                        else{   B = 50; }
                                    }
                else if(A == 24)//4인실
                {
                    if(F_result>90){    B=80;   }
                    else if(F_result>84 && F_result<=90){   B=75;    }
                    else if(F_result>79 && F_result<=84){   B=70;   }
                    else if(F_result>72 && F_result<=79){   B=60;   }
                    else if(F_result>70 && F_result<=72){   B=55;   }
                    else{   B = 50; }
                }
                                    else if(A == 34)
                                    {
                                        if(F_result>90){    B=80;   }
                                        else if(F_result>84 && F_result<=90){   B=75;    }
                                        else if(F_result>79 && F_result<=84){   B=70;   }
                                        else if(F_result>72 && F_result<=79){   B=60;   }
                                        else if(F_result>70 && F_result<=72){   B=55;   }
                                        else{   B = 50; }
                                    }
                                    else if(A == 43)
                                    {
                                        if(F_result>90){    B=80;   }
                                        else if(F_result>84 && F_result<=90){   B=75;    }
                                        else if(F_result>79 && F_result<=84){   B=70;   }
                                        else if(F_result>72 && F_result<=79){   B=60;   }
                                        else if(F_result>70 && F_result<=72){   B=55;   }
                                        else{   B = 50; }
                                    }
                                    else if(A == 44)
                                    {
                                        if(F_result>90){    B=80;   }
                                        else if(F_result>84 && F_result<=90){   B=75;    }
                                        else if(F_result>79 && F_result<=84){   B=70;   }
                                        else if(F_result>72 && F_result<=79){   B=60;   }
                                        else if(F_result>70 && F_result<=72){   B=55;   }
                                        else{   B = 50; }
                                    }
                else if(A == 26)//6인실
                {
                    if(F_result>88){    B=80;   }
                    else if(F_result>83 && F_result<=88){   B=75;    }
                    else if(F_result>78 && F_result<=83){   B=70;   }
                    else if(F_result>75 && F_result<=78){   B=60;   }
                    else if(F_result>70 && F_result<=75){   B=55;   }
                    else{   B = 50; }
                }
                                    else if(A == 36)
                                    {
                                        if(F_result>88){    B=80;   }
                                        else if(F_result>83 && F_result<=88){   B=75;    }
                                        else if(F_result>78 && F_result<=83){   B=70;   }
                                        else if(F_result>75 && F_result<=78){   B=60;   }
                                        else if(F_result>70 && F_result<=75){   B=55;   }
                                        else{   B = 50; }
                                    }else if(A == 56)
                                    {
                                        if(F_result>88){    B=80;   }
                                        else if(F_result>83 && F_result<=88){   B=75;    }
                                        else if(F_result>78 && F_result<=83){   B=70;   }
                                        else if(F_result>75 && F_result<=78){   B=60;   }
                                        else if(F_result>70 && F_result<=75){   B=55;   }
                                        else{   B = 50; }
                                    }
                document.getElementById("B").value = B;
            }

            function pushLayer() {
                var $width = parseInt($("#lay_pop").css("width"));
                var $height = parseInt($("#lay_pop").css("height"));
                var left = ($(window).width() - $width) / 2;
                var sctop = $(window).scrollTop() * 2;
                var top = ($(window).height() - $height + sctop) / 2;
                var height = document.getElementsByTagName("body")[0].scrollHeight;
                $("#lay_pop").css("left", left);
                $("#lay_pop").css("top", top);
                $("#lay_pop").css("display", "block");
                $("#lay_pop").css("z-index", "555");
                $("#all_body").css("display", "block");
                $("#all_body").css("width", $(window).width());
                $("#all_body").css("height", height);
            }

            function layerClose(lay1, lay2) {
                $("#" + lay1).css("display", "none");
                $("#" + lay2).css("display", "none");
            }

        </script>

        <div id="jb-moreInfo" >

            <h2 style="text-align:center">추가정보 입력</h2>
            <form class="form-style-4" name="more_form" method="post" action="more_print.php" >
                <label for="grade">
                    <span>학점</span><input type="text" id="grade" name="grade"  maxlength="4" placeholder="숫자만 입력" required="true">
                </label><br/><br/>
                <label for="dorm_score">
                    <span>생활관 점수</span><input type="text" id="dorm_score" name="dorm_score" placeholder="상점벌점 합산 결과" required="true">
                </label><br/><br/>

                <label for="money">
                    <span>소득분위</span><input type="text" id="money" name="money"  maxlength="2" placeholder="숫자만 입력"required="true">
                </label><br/><br/>

                <label for="dorm">
                    <span>기숙사</span>
                        <select name="dorm" id="dorm">
                            <optgroup label="청풍학사">
                                <option value="11" >1인실</option>
                                <option value="12">2인실</option>
                            </optgroup>
                            <optgroup label="세명학사">
                                <option value="21">1인실</option>
                                <option value="22">2인실</option>
                                <option value="24">(2+2)인실</option>
                                <option value="26">(3+3)인실</option>
                            </optgroup>
                            <optgroup label="청룡학사">
                                <option value="32">2인실</option>
                                <option value="34">4인실</option>
                                <option value="36">(2+4)인실</option>
                            </optgroup>
                            <optgroup label="예지학사">
                                <option value="42">2인실</option>
                                <option value="43">3인실</option>
                                <option value="44">4인실</option>
                            </optgroup>
                            <optgroup label="인성학사">
                                <option value="51">1인실</option>
                                <option value="52">2인실</option>
                                <option value="56">(2+4)인실</option>
                            </optgroup>
                            <optgroup label="비룡학사">
                                <option value="61">1인실</option>
                                <option value="62">2인실</option>
                            </optgroup>
                        </select>
                        </fieldset>
                </label><br/><br/>
                <label for="home">
                    <span>거주지</span>
                    </br><input type="radio" id="home" name="home" value="14" checked="checked" />제천, 영월, 단양<br />
                    <input type="radio" id="home" name="home" value="16" />원주, 충주<br />
                    <input type="radio" id="home" name="home" value="18" />서울, 성남, 수원, 용인, 부천, 이천 등<br />
                    <input type="radio" id="home" name="home" value="20" />그 외 지역<br />
                    <br />
                </label>  <br/><br/>
                <label for="more">
                    <span>합불 및 추가합격</span>
                    <select id="more" name="more">
                        <option value="1" checked="checked">합격</option>
                        <option value="2">불합격</option>
                        <option value="3">추가 합격</option>
                        </optgroup>
                    </select>

                </label><br/><br/>
                <label>
                    <span> </span><input type="submit" value="저장"/>
                    <input type="reset" value="다시작성">
                </label>
                <h6>추가로 입력된 정보는 데이터 베이스에 저장 되어 추후 정확도를 높이는데 도움을 줍니다.</h6>
            </form>

            </br>
            <h5 style="text-align:center">이 프로그램의 결과는 정확하다고 할 수 없으며 지원 사항을 결정하는데 참고용으로만 사용하시길 바랍니다.</h5>

        </div>
    </div>

    <!수직메뉴바생성>

    <style>
        body {
            margin: 20px auto;
            padding: 0;
            font-family: "맑은 고딕";
            font-size: 0.9em;
        }

        ul#navi {
            width: 200px;
            text-indent: 10px;
        }

        ul#navi, ul#navi ul {
            margin: 0;
            padding: 0;
            list-style: none;
        }

        li.group {
            margin-bottom: 3px;
        }

        li.group div.title {
            height: 35px;
            line-height: 35px;
            background: #f1e020;
            cursor: pointer;
        }

        ul.sub li {
            margin-bottom: 2px;
            height: 35px;
            line-height: 35px;
            background: #f4f4f4;
            cursor: pointer;
        }

        ul.sub li a {
            display: block;
            width: 100%;
            height: 100%;
            text-decoration: none;
            color: #000;
        }

        ul.sub li:hover {
            background: #cf0;
        }

        #smdor {
            color: midnightblue;
            margin-left: 340px;
            margin-right: 100px;
            font-size: 1.2em;
            text-decoration: none;
        }

        #smcyb {
            color: midnightblue;
            font-size: 1.2em;
            text-decoration: none;
        }
    </style>
    <div id="jb-sidebar">
        <ul id="navi">
            <li class="group">
                <div class="title">기숙사</div>
                <ul class="sub">
                    <li><a href="dorcount.html">기숙사 합|불 예측</a></li>
                </ul>
            </li>
        </ul>
    </div>

    <div id="jb-footer">
        <a id="smdor" href="http://www.semyung.ac.kr/kor/sub05_03_01.do">세명대학교 기숙사 안내</a>
        <a id="smcyb" href="http://www.semyung.ac.kr/cyber/index.html">세명대학교 사이버 투어</a>
    </div>
</div>

<div id="portfolio-wrapper">
    <div id="portfolio" class="container">
        <div class="title">
            <h2>세명대학교 컴퓨터학부 캡스톤 디자인 수업</h2>
            <span class="byline">Ich habe alles alleine gemacht.</span>
        </div>
        <div class="column1">
            <div class="box">
                <h3>Leader/Design</h3>
                <p>ㅈㅅㅎ</p>
                <a href="#" class="button">문의/이메일</a>
            </div>
        </div>
        <div class="column2">
            <div class="box">
                <h3>Design</h3>
                <p>ㅅㅇㅅ</p>
                <a href="#" class="button">문의/이메일</a>
            </div>
        </div>
        <div class="column3">
            <div class="box">
                <h3>Data Base</h3>
                <p>ㅊㅁㄱ</p>
                <a href="#" class="button">문의/이메일</a>
            </div>
        </div>
        <div class="column4">
            <div class="box">
                <h3>Main</h3>
                <p>ㅈㅇㄱ</p>
                <a href="#" class="button">문의/이메일</a>
            </div>
        </div>
    </div>
</div>
</body>
