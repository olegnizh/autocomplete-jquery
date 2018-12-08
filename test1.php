<?php
//
?>
<html>
<head>
<meta http-equiv=Content-Type content="text/html; charset=utf-8">

<title>test1</title>

<link rel="stylesheet" type="text/css" href="css/style.css">

<script src="js/jquery-min.js"></script>
<script src="js/jquery-ui.js"></script>

    <script type="text/javascript">
		
        $(function()
        {
            $("#fielda").autocomplete({
                minLength: 1,
                delay : 400,
                source: function(request, response) { 

                    jQuery.ajax({
                       url:      "searchtesta.php",
                       data:    {
                                    namesocr : request.term
                                },
                       dataType: "json",
                       success: function(data)
                       {
                            response(data);
                       }   
                    })
                },
                select:  function(e, ui)
                {
                    var code = ui.item.id;
                    $("#fieldb").val(code);
                }
            });
        });

        $(function()
        {
            $("#fieldc").autocomplete({
                minLength: 1,
                delay : 400,
                source: function(request, response) { 

                    jQuery.ajax({
                       url:      "searchtestb.php",
                       data:    {
                                    term : request.term,									
									socr : $("#fieldb").val()
                                },
                       dataType: "json",
                       success: function(data)
                       {
                            response(data);
                       }   
                    })
                },
				min_length: 3,
                delay: 300
            });
        });
		
				
    </script>

</head>

<body>

<input name="numdpa" id="numdpa" type="hidden" value="<?php echo $numdpa;?>" />
<input name="numdpb" id="numdpb" type="hidden" value="<?php echo $numdpb;?>" />
<input name="idmax" id="idmax" type="hidden" value="<?php echo $numcurrent;?>" />

<div class=Section1>

<table>

<tr>
<td>
&nbsp;
</td>
<td>
&nbsp;
</td>
<td>
&nbsp;
</td>
</tr>

<tr><td>&nbsp;(jQuery autocomplete params - данные кладр по сокращению)</td><td>&nbsp;</td><td>&nbsp;</td></tr>
<tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>
<tr><td>Сокращение</td><td>&nbsp;</td><td>Название</td></tr>

<tr>
<td>
&nbsp;<input name="fielda" id="fielda" type="text" size="30" maxlength="30" value=""/>
&nbsp;<input name="fieldb" id="fieldb" type="text" size="7" maxlength="7" value=""/>
</td>
<td>
&nbsp;
</td>
<td>
&nbsp;<input name="fieldc" id="fieldc" type="text" size="50" maxlength="50" value=""/>
</td>
</tr>

</table>

</div>

</body>

</html>
