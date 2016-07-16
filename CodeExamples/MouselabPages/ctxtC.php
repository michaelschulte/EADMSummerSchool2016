<?php 
if (isset($_GET['subject'])) {$subject=$_GET['subject'];}
 else {$subject="anonymous";}
if (isset($_GET['condnum'])) {$condnum=$_GET['condnum'];}
	else {$condnum=-1;}?><HTML>
<HEAD>
	<title>EADM Summerschool Study</title>
<script language=javascript src="mlweb.js"></SCRIPT>
<link rel="stylesheet" href="mlweb.css" type="text/css">
</head>

<body onLoad="timefunction('onload','body','body')">
<script language="javascript">
ref_cur_hit = <?php echo($condnum);?>;
subject = "<?php echo($subject);?>";
</script>

<!--BEGIN TABLE STRUCTURE-->
<SCRIPT language="javascript">
//override defaults
mlweb_outtype="CSV";
mlweb_fname="mlwebform";
tag = "a0^C^T^D`"
 + "b0^Cp^Tp^Dp`"
 + "c0^Cf^Tf^Df";

txt = "^A-plus^B-ext ^Freedom`"
 + "Price^Price of phone: $64 <br>Price of plan: $37 / month for 600 min^Price of phone: $83 <br>Price of plan: $39 / month for 600 min^Price of phone: $113 <br>Price of plan: $44 / month for 600 min`"
 + "Features^Camera phone: <br>Standby time 8 days <br>Talk time about 7 hours<br> Camera resolution: 5 out of 5 stars^Camera phone: <br>Standby time 6 days <br>Talk time about 5 hours <br>Camera resolution: 4 out of 5 stars^Camera phone: <br>standby time 3 days <br>Talk time about 3 hours <br>Camera resolution: 3 out of 5 stars ";

state = "0^0^0^0`"
 + "0^1^1^1`"
 + "0^1^1^1";

box = "^^^`"
 + "^^^`"
 + "^^^";

CBCol = "0^1^1^1";
CBRow = "0^1^1";
W_Col = "100^200^200^200";
H_Row = "50^100^100";

chkchoice = false;
btnFlg = 1;
btnType = "button";
btntxt = "^A-plus^B-ext ^Freedom";
btnstate = "0^1^1^1";
btntag = "^C^T^D";
to_email = "";
colFix = false;
rowFix = false;
CBpreset = true;
evtOpen = 0;
evtClose = 0;
CBord = "0^1^2^3^0^1^2`"
+ "0^2^1^3^0^1^2`"
+ "0^2^3^1^0^1^2`"
+ "0^3^2^1^0^1^2`"
+ "0^1^2^3^0^2^1`"
+ "0^2^1^3^0^2^1`"
+ "0^2^3^1^0^2^1`"
+ "0^3^2^1^0^2^1";

chkFrm=true;
warningTxt = "Some questions have not been answered. Please answer all questions before continuing!";
tmTotalSec = 60;
tmStepSec = 1;
tmWidthPx = 200;
tmFill = true;
tmShowTime = true;
tmCurTime = 0;
tmActive = false;
tmDirectStart = true;
tmMinLabel = "min";
tmSecLabel = "sec";
tmLabel = "Timer: ";

//Delay: Cp Tp Dp Cf Tf Df
delay = "0^0^0^0^0^0`"
 + "0^0^0^0^0^0`"
 + "0^0^0^0^0^0`"
 + "0^0^0^0^0^0`"
 + "0^0^0^0^0^0`"
 + "0^0^0^0^0^0";
activeClass = "actTD";
inactiveClass = "inactTD";
boxClass = "boxTD";
cssname = "mlweb.css";
nextURL = "food2.php";
expname = "ctxtC";
randomOrder = false;
recOpenCells = false;
masterCond = 1;
loadMatrices();
</SCRIPT>
<!--END TABLE STRUCTURE-->

<FORM name="mlwebform" onSubmit="return checkForm(this)" method="POST" action="save.php"><INPUT type=hidden name="procdata" value="">
<input type=hidden name="subject" value="">
<input type=hidden name="expname" value="">
<input type=hidden name="nextURL" value="">
<input type=hidden name="choice" value="">
<input type=hidden name="condnum" value="">
<input type=hidden name="to_email" value="">
<!--BEGIN preHTML-->
<h1>Cell phone plan</h1>
<p>
Imagine you are moving to a different city. Your current cell phone provider does not serve this new city and you have to select a new plan with a new cell phone from another provider. In the new city there are several providers that offer similar network coverage. Their plans and the cell phones they offer are presented below. </p>
<p>
Because you are not sure how long you will remain in this area, you have decided not to commit to a long term plan. Thus the phones are not (fully) subsidized by the providers and you will have to pay some amount for the phone.</p><p>
Make a choice among these cell phones and plans by pressing the button below the phone/plan of your choice. </p>


<!--END preHTML-->
<!-- MOUSELAB TABLE -->
<TABLE border=1>
<TR>
<!--cell a0(tag:a0)-->
<TD align=center valign=middle><DIV ID="a0_cont" style="position: relative; height: 50px; width: 100px;"><DIV ID="a0_txt" STYLE="position: absolute; left: 0px; top: 0px; height: 50px; width: 100px; clip: rect(0px 100px 50px 0px); z-index: 1;"><TABLE><TD ID="a0_td" align=center valign=center width=95 height=45 class="inactTD"></TD></TABLE></DIV><DIV ID="a0_box" STYLE="position: absolute; left: 0px; top: 0px; height: 50px; width: 100px; clip: rect(0px 100px 50px 0px); z-index: 2;"><TABLE><TD ID="a0_tdbox" align=center valign=center width=95 height=45 class="boxTD"></TD></TABLE></DIV><DIV ID="a0_img" STYLE="position: absolute; left: 0px; top: 0px; height: 50px; width: 100px; z-index: 5;"><A HREF="javascript:void(0);" NAME="a0" onMouseOver="ShowCont('a0',event)" onMouseOut="HideCont('a0',event)"><IMG NAME="a0" SRC="transp.gif" border=0 width=100 height=50></A></DIV></DIV></TD>
<!--end cell-->
<!--cell a1(tag:C)-->
<TD align=center valign=middle><DIV ID="a1_cont" style="position: relative; height: 50px; width: 200px;"><DIV ID="a1_txt" STYLE="position: absolute; left: 0px; top: 0px; height: 50px; width: 200px; clip: rect(0px 200px 50px 0px); z-index: 1;"><TABLE><TD ID="a1_td" align=center valign=center width=195 height=45 class="inactTD">A-plus</TD></TABLE></DIV><DIV ID="a1_box" STYLE="position: absolute; left: 0px; top: 0px; height: 50px; width: 200px; clip: rect(0px 200px 50px 0px); z-index: 2;"><TABLE><TD ID="a1_tdbox" align=center valign=center width=195 height=45 class="boxTD"></TD></TABLE></DIV><DIV ID="a1_img" STYLE="position: absolute; left: 0px; top: 0px; height: 50px; width: 200px; z-index: 5;"><A HREF="javascript:void(0);" NAME="a1" onMouseOver="ShowCont('a1',event)" onMouseOut="HideCont('a1',event)"><IMG NAME="a1" SRC="transp.gif" border=0 width=200 height=50></A></DIV></DIV></TD>
<!--end cell-->
<!--cell a2(tag:T)-->
<TD align=center valign=middle><DIV ID="a2_cont" style="position: relative; height: 50px; width: 200px;"><DIV ID="a2_txt" STYLE="position: absolute; left: 0px; top: 0px; height: 50px; width: 200px; clip: rect(0px 200px 50px 0px); z-index: 1;"><TABLE><TD ID="a2_td" align=center valign=center width=195 height=45 class="inactTD">B-ext </TD></TABLE></DIV><DIV ID="a2_box" STYLE="position: absolute; left: 0px; top: 0px; height: 50px; width: 200px; clip: rect(0px 200px 50px 0px); z-index: 2;"><TABLE><TD ID="a2_tdbox" align=center valign=center width=195 height=45 class="boxTD"></TD></TABLE></DIV><DIV ID="a2_img" STYLE="position: absolute; left: 0px; top: 0px; height: 50px; width: 200px; z-index: 5;"><A HREF="javascript:void(0);" NAME="a2" onMouseOver="ShowCont('a2',event)" onMouseOut="HideCont('a2',event)"><IMG NAME="a2" SRC="transp.gif" border=0 width=200 height=50></A></DIV></DIV></TD>
<!--end cell-->
<!--cell a3(tag:D)-->
<TD align=center valign=middle><DIV ID="a3_cont" style="position: relative; height: 50px; width: 200px;"><DIV ID="a3_txt" STYLE="position: absolute; left: 0px; top: 0px; height: 50px; width: 200px; clip: rect(0px 200px 50px 0px); z-index: 1;"><TABLE><TD ID="a3_td" align=center valign=center width=195 height=45 class="inactTD">Freedom</TD></TABLE></DIV><DIV ID="a3_box" STYLE="position: absolute; left: 0px; top: 0px; height: 50px; width: 200px; clip: rect(0px 200px 50px 0px); z-index: 2;"><TABLE><TD ID="a3_tdbox" align=center valign=center width=195 height=45 class="boxTD"></TD></TABLE></DIV><DIV ID="a3_img" STYLE="position: absolute; left: 0px; top: 0px; height: 50px; width: 200px; z-index: 5;"><A HREF="javascript:void(0);" NAME="a3" onMouseOver="ShowCont('a3',event)" onMouseOut="HideCont('a3',event)"><IMG NAME="a3" SRC="transp.gif" border=0 width=200 height=50></A></DIV></DIV></TD>
<!--end cell--></TR><TR>
<!--cell b0(tag:b0)-->
<TD align=center valign=middle><DIV ID="b0_cont" style="position: relative; height: 100px; width: 100px;"><DIV ID="b0_txt" STYLE="position: absolute; left: 0px; top: 0px; height: 100px; width: 100px; clip: rect(0px 100px 100px 0px); z-index: 1;"><TABLE><TD ID="b0_td" align=center valign=center width=95 height=95 class="inactTD">Price</TD></TABLE></DIV><DIV ID="b0_box" STYLE="position: absolute; left: 0px; top: 0px; height: 100px; width: 100px; clip: rect(0px 100px 100px 0px); z-index: 2;"><TABLE><TD ID="b0_tdbox" align=center valign=center width=95 height=95 class="boxTD"></TD></TABLE></DIV><DIV ID="b0_img" STYLE="position: absolute; left: 0px; top: 0px; height: 100px; width: 100px; z-index: 5;"><A HREF="javascript:void(0);" NAME="b0" onMouseOver="ShowCont('b0',event)" onMouseOut="HideCont('b0',event)"><IMG NAME="b0" SRC="transp.gif" border=0 width=100 height=100></A></DIV></DIV></TD>
<!--end cell-->
<!--cell b1(tag:Cp)-->
<TD align=center valign=middle><DIV ID="b1_cont" style="position: relative; height: 100px; width: 200px;"><DIV ID="b1_txt" STYLE="position: absolute; left: 0px; top: 0px; height: 100px; width: 200px; clip: rect(0px 200px 100px 0px); z-index: 1;"><TABLE><TD ID="b1_td" align=center valign=center width=195 height=95 class="actTD">Price of phone: $64 <br>Price of plan: $37 / month for 600 min</TD></TABLE></DIV><DIV ID="b1_box" STYLE="position: absolute; left: 0px; top: 0px; height: 100px; width: 200px; clip: rect(0px 200px 100px 0px); z-index: 2;"><TABLE><TD ID="b1_tdbox" align=center valign=center width=195 height=95 class="boxTD"></TD></TABLE></DIV><DIV ID="b1_img" STYLE="position: absolute; left: 0px; top: 0px; height: 100px; width: 200px; z-index: 5;"><A HREF="javascript:void(0);" NAME="b1" onMouseOver="ShowCont('b1',event)" onMouseOut="HideCont('b1',event)"><IMG NAME="b1" SRC="transp.gif" border=0 width=200 height=100></A></DIV></DIV></TD>
<!--end cell-->
<!--cell b2(tag:Tp)-->
<TD align=center valign=middle><DIV ID="b2_cont" style="position: relative; height: 100px; width: 200px;"><DIV ID="b2_txt" STYLE="position: absolute; left: 0px; top: 0px; height: 100px; width: 200px; clip: rect(0px 200px 100px 0px); z-index: 1;"><TABLE><TD ID="b2_td" align=center valign=center width=195 height=95 class="actTD">Price of phone: $83 <br>Price of plan: $39 / month for 600 min</TD></TABLE></DIV><DIV ID="b2_box" STYLE="position: absolute; left: 0px; top: 0px; height: 100px; width: 200px; clip: rect(0px 200px 100px 0px); z-index: 2;"><TABLE><TD ID="b2_tdbox" align=center valign=center width=195 height=95 class="boxTD"></TD></TABLE></DIV><DIV ID="b2_img" STYLE="position: absolute; left: 0px; top: 0px; height: 100px; width: 200px; z-index: 5;"><A HREF="javascript:void(0);" NAME="b2" onMouseOver="ShowCont('b2',event)" onMouseOut="HideCont('b2',event)"><IMG NAME="b2" SRC="transp.gif" border=0 width=200 height=100></A></DIV></DIV></TD>
<!--end cell-->
<!--cell b3(tag:Dp)-->
<TD align=center valign=middle><DIV ID="b3_cont" style="position: relative; height: 100px; width: 200px;"><DIV ID="b3_txt" STYLE="position: absolute; left: 0px; top: 0px; height: 100px; width: 200px; clip: rect(0px 200px 100px 0px); z-index: 1;"><TABLE><TD ID="b3_td" align=center valign=center width=195 height=95 class="actTD">Price of phone: $113 <br>Price of plan: $44 / month for 600 min</TD></TABLE></DIV><DIV ID="b3_box" STYLE="position: absolute; left: 0px; top: 0px; height: 100px; width: 200px; clip: rect(0px 200px 100px 0px); z-index: 2;"><TABLE><TD ID="b3_tdbox" align=center valign=center width=195 height=95 class="boxTD"></TD></TABLE></DIV><DIV ID="b3_img" STYLE="position: absolute; left: 0px; top: 0px; height: 100px; width: 200px; z-index: 5;"><A HREF="javascript:void(0);" NAME="b3" onMouseOver="ShowCont('b3',event)" onMouseOut="HideCont('b3',event)"><IMG NAME="b3" SRC="transp.gif" border=0 width=200 height=100></A></DIV></DIV></TD>
<!--end cell--></TR><TR>
<!--cell c0(tag:c0)-->
<TD align=center valign=middle><DIV ID="c0_cont" style="position: relative; height: 100px; width: 100px;"><DIV ID="c0_txt" STYLE="position: absolute; left: 0px; top: 0px; height: 100px; width: 100px; clip: rect(0px 100px 100px 0px); z-index: 1;"><TABLE><TD ID="c0_td" align=center valign=center width=95 height=95 class="inactTD">Features</TD></TABLE></DIV><DIV ID="c0_box" STYLE="position: absolute; left: 0px; top: 0px; height: 100px; width: 100px; clip: rect(0px 100px 100px 0px); z-index: 2;"><TABLE><TD ID="c0_tdbox" align=center valign=center width=95 height=95 class="boxTD"></TD></TABLE></DIV><DIV ID="c0_img" STYLE="position: absolute; left: 0px; top: 0px; height: 100px; width: 100px; z-index: 5;"><A HREF="javascript:void(0);" NAME="c0" onMouseOver="ShowCont('c0',event)" onMouseOut="HideCont('c0',event)"><IMG NAME="c0" SRC="transp.gif" border=0 width=100 height=100></A></DIV></DIV></TD>
<!--end cell-->
<!--cell c1(tag:Cf)-->
<TD align=center valign=middle><DIV ID="c1_cont" style="position: relative; height: 100px; width: 200px;"><DIV ID="c1_txt" STYLE="position: absolute; left: 0px; top: 0px; height: 100px; width: 200px; clip: rect(0px 200px 100px 0px); z-index: 1;"><TABLE><TD ID="c1_td" align=center valign=center width=195 height=95 class="actTD">Camera phone: <br>Standby time 8 days <br>Talk time about 7 hours<br> Camera resolution: 5 out of 5 stars</TD></TABLE></DIV><DIV ID="c1_box" STYLE="position: absolute; left: 0px; top: 0px; height: 100px; width: 200px; clip: rect(0px 200px 100px 0px); z-index: 2;"><TABLE><TD ID="c1_tdbox" align=center valign=center width=195 height=95 class="boxTD"></TD></TABLE></DIV><DIV ID="c1_img" STYLE="position: absolute; left: 0px; top: 0px; height: 100px; width: 200px; z-index: 5;"><A HREF="javascript:void(0);" NAME="c1" onMouseOver="ShowCont('c1',event)" onMouseOut="HideCont('c1',event)"><IMG NAME="c1" SRC="transp.gif" border=0 width=200 height=100></A></DIV></DIV></TD>
<!--end cell-->
<!--cell c2(tag:Tf)-->
<TD align=center valign=middle><DIV ID="c2_cont" style="position: relative; height: 100px; width: 200px;"><DIV ID="c2_txt" STYLE="position: absolute; left: 0px; top: 0px; height: 100px; width: 200px; clip: rect(0px 200px 100px 0px); z-index: 1;"><TABLE><TD ID="c2_td" align=center valign=center width=195 height=95 class="actTD">Camera phone: <br>Standby time 6 days <br>Talk time about 5 hours <br>Camera resolution: 4 out of 5 stars</TD></TABLE></DIV><DIV ID="c2_box" STYLE="position: absolute; left: 0px; top: 0px; height: 100px; width: 200px; clip: rect(0px 200px 100px 0px); z-index: 2;"><TABLE><TD ID="c2_tdbox" align=center valign=center width=195 height=95 class="boxTD"></TD></TABLE></DIV><DIV ID="c2_img" STYLE="position: absolute; left: 0px; top: 0px; height: 100px; width: 200px; z-index: 5;"><A HREF="javascript:void(0);" NAME="c2" onMouseOver="ShowCont('c2',event)" onMouseOut="HideCont('c2',event)"><IMG NAME="c2" SRC="transp.gif" border=0 width=200 height=100></A></DIV></DIV></TD>
<!--end cell-->
<!--cell c3(tag:Df)-->
<TD align=center valign=middle><DIV ID="c3_cont" style="position: relative; height: 100px; width: 200px;"><DIV ID="c3_txt" STYLE="position: absolute; left: 0px; top: 0px; height: 100px; width: 200px; clip: rect(0px 200px 100px 0px); z-index: 1;"><TABLE><TD ID="c3_td" align=center valign=center width=195 height=95 class="actTD">Camera phone: <br>standby time 3 days <br>Talk time about 3 hours <br>Camera resolution: 3 out of 5 stars </TD></TABLE></DIV><DIV ID="c3_box" STYLE="position: absolute; left: 0px; top: 0px; height: 100px; width: 200px; clip: rect(0px 200px 100px 0px); z-index: 2;"><TABLE><TD ID="c3_tdbox" align=center valign=center width=195 height=95 class="boxTD"></TD></TABLE></DIV><DIV ID="c3_img" STYLE="position: absolute; left: 0px; top: 0px; height: 100px; width: 200px; z-index: 5;"><A HREF="javascript:void(0);" NAME="c3" onMouseOver="ShowCont('c3',event)" onMouseOut="HideCont('c3',event)"><IMG NAME="c3" SRC="transp.gif" border=0 width=200 height=100></A></DIV></DIV></TD>
<!--end cell--></TR><TR><TD ID="btn_0" style="border-left-style: none; border-right-style: none; border-bottom-style: none;"> </TD><TD ID="btn_1" style="border-left-style: none; border-right-style: none; border-bottom-style: none;" align=center valign=middle><INPUT type="button" name="C_choice" value="A-plus" onMouseOver="timefunction('mouseover','C_choice','A-plus')" onClick="recChoice('onclick','C_choice','A-plus')" onMouseOut="timefunction('mouseout','C_choice','A-plus')"></TD>
<TD ID="btn_2" style="border-left-style: none; border-right-style: none; border-bottom-style: none;" align=center valign=middle><INPUT type="button" name="T_choice" value="B-ext " onMouseOver="timefunction('mouseover','T_choice','B-ext ')" onClick="recChoice('onclick','T_choice','B-ext ')" onMouseOut="timefunction('mouseout','T_choice','B-ext ')"></TD>
<TD ID="btn_3" style="border-left-style: none; border-right-style: none; border-bottom-style: none;" align=center valign=middle><INPUT type="button" name="D_choice" value="Freedom" onMouseOver="timefunction('mouseover','D_choice','Freedom')" onClick="recChoice('onclick','D_choice','Freedom')" onMouseOut="timefunction('mouseout','D_choice','Freedom')"></TD>
</TR></TABLE>
<!-- END MOUSELAB TABLE -->
<!--BEGIN postHTML-->

<!--END postHTML--><INPUT type="submit" value="Next Page" onClick=timefunction('submit','submit','submit')></FORM></body></html>
