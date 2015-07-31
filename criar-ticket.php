<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Base de Conhecimento</title>
    <meta http-equiv="X-Frame-Options" content="SAMEORIGIN" />
    <link rel="icon" href="/" type="image/x-icon"/>
    <link rel="stylesheet" type="text/css" media="all" href="css/sistema.css" />
    <script type="text/javascript" src="js/js.js"></script>
  </head>
<body class="bodymain">
<div id="main">
    <div id="topbanner">
        <div class="innerwrapper">
            <a href="dashboard.php"><img border="0" src="images/logo.jpg" alt="Kayako logo" id="logo" /></a>
        </div>
    </div>
    
    <div id="toptoolbar">
        <div class="innerwrapper">
            <ul id="toptoolbarlinklist">
                <li><a class="toptoolbarlink" href="dashboard.php">Página Principal</a></li>
                <li class="current"><a class="toptoolbarlink" href="criar-ticket.php">Criar Ticket</a></li>
                <li><a class="toptoolbarlink" href="base-conhecimento.php">Base de Conhecimento</a></li>
            </ul>
        </div>
    </div>

    <div id="maincore">
        <div class="innerwrapper">

            <div id="maincoreleft">
                

                <div id="leftlivechatbox">
                <!-- BEGIN TAG CODE -->
                <div>
                    <div id="proactivechatcontainernc2v4biell"></div>
                    <table border="0" cellspacing="2" cellpadding="2">
                        <tr>
                            <td align="center" id="swifttagcontainernc2v4biell">
                                <div style="display: inline;" id="swifttagdatacontainer"><img src="images/staffoffline.png"></div>
                            </td>
                        </tr>
                        <tr>
                            <td align="center">
                                <!-- DO NOT REMOVE -->
                                <div style="MARGIN-TOP: 2px; WIDTH: 100%; TEXT-ALIGN: center;">
                                    <span style="FONT-SIZE: 9px; FONT-FAMILY: 'segoe ui','helvetica neue', arial, helvetica, sans-serif;">Live Chat Software<span style="COLOR: #000000"> by </span>alumni</span>
                                </div>
                                <!-- DO NOT REMOVE -->
                            </td>
                        </tr>
                    </table>
                </div>
                
                <!-- END TAG CODE -->
                </div>
            </div>
        <div id="maincorecontent">

            <!--
            <div id="breadcrumbbar">
                    <span class="breadcrumb lastcrumb">Página Principal</span>
            </div>
            -->

            <form method="post" id="searchform" action="#" name="SearchForm">
                <div class="searchboxcontainer">
                    <div class="searchbox">
                        <span class="searchbuttoncontainer">
                            <a class="searchbutton" href="javascript: void(0);" onclick="$('#searchform').submit();"><span></span>BUSCAR</a>
                        </span>
                        <span class="searchinputcontainer">
                            <input type="text" name="searchquery" class="searchquery" onclick="javascript: if ($(this).val() == 'Por favor, digite sua pergunta aqui' || $(this).val() == 'Por favor entre aqui o ítem a ser pesquisado') { $(this).val('').addClass('searchqueryactive'); }" value="Por favor entre aqui o ítem a ser pesquisado" />
                        </span>
                    </div>
                </div>
            </form>

            <!-- BEGIN DIALOG PROCESSING -->

            <div class="boxcontainer">
                <div class="boxcontainerlabel">Criar Ticket</div>

                <div class="boxcontainercontent">
                    Se você não puder encontrar uma solução para seu problema em nossa Base de Conhecimento, você pode enviar um ticket selecionando o departamento desejado.<br><br>
                    <table class="hlineheader"
                           <tbody>
                            <tr>
                                <th rowspan="2" nowrap="">Departamentos</th>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td class="hlinelower">&nbsp;</td>
                            </tr>
                        </tbody>
                    </table>
                    <form action="novo-ticket.php" method="POST">
                    <table width="100%" border="0" cellspacing="1" cellpadding="4">
                        <tbody>
                            <tr>
                                <td width="16" align="left" valign="middle" class="zebraodd"><input type="radio" name="departmentid" onclick="javascript: ToggleTicketSubDepartments('1');" value="1" id="department_1" checked=""></td>
                                <td><label for="department_1">General</label></td>
                            </tr>
                        </tbody>
                    </table>
                    
                    <br>
                    <div class="subcontent"><input class="rebuttonwide2" value="Próximo »" type="submit" name="button"></div>
                    </form>
                </div>
            </div>
            
        </div>
        
        <div id="bottomfooter" class="bottomfooterpadding">
        
        </div>
        </div>
    </div>
</body>

</html>