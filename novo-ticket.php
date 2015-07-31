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
                    Insira os detalhes do ticket abaixo. Se você está relatando um problema, por favor, lembre-se de fornecer o máximo de informação que seja relevante a questão.<br><br>
                    <form action="confirmacao-chamado.php" method="POST">
                    <table class="hlineheader">
                        <tbody>
                            <tr>
                                <th rowspan="2" nowrap="">Informações gerais</th>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td class="hlinelower">&nbsp;</td>
                            </tr>
                        </tbody>
                    </table>
                    <table width="100%" border="0" cellspacing="1" cellpadding="4">
                        <tbody>
                            <tr>
                                <td width="200" align="left" valign="middle" class="zebraodd">Nome Completo</td>
                                <td><input name="ticketfullname" type="text" size="25" class="swifttextlarge" value=""></td>
                            </tr>
                            <tr>
                                <td align="left" valign="middle" class="zebraodd">Email</td>
                                <td><input name="ticketemail" type="text" size="25" class="swifttextlarge" value=""></td>
                            </tr>
                            <tr>
                                <td width="200" align="left" valign="middle" class="zebraodd">Problema</td>
                                <td><select name="ticketpriorityid" class="swiftselect">					
                                        <option value="1" selected="selected">Falha no login</option>
                                        <option value="2">Esqueci minha senha</option>
                                        <option value="3">Erro no Quiz</option>
                                        <option value="4">Componente Online</option>
                                        <option value="5">Outros</option>
                                    </select>
                                </td>
                            
                                <td width="200" align="left" valign="middle" class="zebraodd">Prioridade</td>
                                <td><select name="ticketpriorityid" class="swiftselect">					<option value="1" selected="selected">Normal</option>
                                        <option value="2">Medium</option>
                                        <option value="3">High</option>
                                        <option value="4">Urgent</option>
                                        <option value="5">Emergency</option>
                                        <option value="6">Critical</option>
                                    </select>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <br>
                    <table class="hlineheader">
                        <tbody>
                            <tr>
                                <th rowspan="2" nowrap="">Detalhes da Mensagem</th>
                                <td>&nbsp;</td></tr>
                            <tr>
                                <td class="hlinelower">&nbsp;</td>
                            </tr>
                        </tbody>
                    </table>
                    <table width="100%" border="0" cellspacing="1" cellpadding="4">
                        <tbody>
                            <tr>
                                <td width="200" align="left" valign="middle" class="zebraodd">Assunto</td>
                                <td width=""><input name="ticketsubject" type="text" size="45" class="swifttextwide" id="ticketsubject" value=""></td>
                            </tr>
                        </tbody>
                    </table>
                    <table width="100%" border="0" cellspacing="1" cellpadding="4">
                        <tbody>
                            <tr>
                                <td colspan="2" align="left" valign="top"><textarea name="ticketmessage" id="ticketmessage" cols="25" rows="15" class="swifttextareawide"></textarea><div id="irscontainer" class="irscontainer"><div class="irsui"><div class="irstitle">Carregando sugestões da base de conhecimento ...</div></div></div></td>
                            </tr>
			</tbody>
                    </table>
                    <br>
                    <table class="hlineheader">
                        <tbody>
                            <tr>
                                <th rowspan="2" nowrap="">Tamanho do arquivo(s) é de no máximo 10MBytes [<div class="addplus"><a href="#ticketattachmentcontainer" onclick="javascript: AddTicketFile();">Adicionar Arquivo</a></div>]</th>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td class="hlinelower">&nbsp;</td>
                            </tr>
                        </tbody>
                    </table>
                    <div id="ticketattachmentcontainer">
                    </div>
                    <br>
                    <div class="subcontent">
                        <input class="rebuttonwide2" value="Submeter" type="submit" name="button">
                        <input type="hidden" name="departmentid" value="1">
                        <input type="hidden" name="_csrfhash" value="gpebygek8mq9bgg41puoxghoc0mgvgj7">
                    </div>
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