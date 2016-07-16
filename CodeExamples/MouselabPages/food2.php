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
tag = "i0^i2^i1`"
 + "bran^brand_2^brand_1`"
 + "chol^chol_2^chol_1`"
 + "sod^sod_2^sod_1`"
 + "pro^pro_2^pro_1`"
 + "carb^carb_2^carb_1`"
 + "fat^fat_2^fat_1`"
 + "pic^pic_2^pic_1";

txt = "^Option A^Option B`"
 + "Name/ Brand ^Farmer's Union Greek Style Natural Yogurt ^Nestle Fat Free Strawberry Yogurt `"
 + "Cholesterol ^5mg^0mg`"
 + "Sodium ^50mg^0mg`"
 + "Protein ^3g^0g`"
 + "Total Carbohydrates ^20g^13g`"
 + "Total Fat ^2g^0g`"
 + "Picture ^<IMG src= 'http://summerschool.mouselabweb.org/pics/Yoghurt2.png' width=100, height=150 >^<IMG src= 'http://summerschool.mouselabweb.org/pics/Yoghurt1.png' width=100, height=150 >";

state = "0^0^0`"
 + "0^1^1`"
 + "0^1^1`"
 + "0^1^1`"
 + "0^1^1`"
 + "0^1^1`"
 + "0^1^1`"
 + "0^1^1";

box = "^^`"
 + "^^`"
 + "^^`"
 + "^^`"
 + "^^`"
 + "^^`"
 + "^^`"
 + "^^";

CBCol = "0^1^1";
CBRow = "0^1^1^1^1^1^1^1";
W_Col = "150^150^150";
H_Row = "60^60^60^60^60^60^60^150";

chkchoice = false;
btnFlg = 1;
btnType = "radio";
btntxt = "Choice ^A^B";
btnstate = "0^1^1";
btntag = "choice^choiceA^choiceB";
to_email = "";
colFix = false;
rowFix = false;
CBpreset = false;
evtOpen = 0;
evtClose = 0;
chkFrm=false;
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

//Delay: brand_2 brand_1 chol_2 chol_1 sod_2 sod_1 pro_2 pro_1 carb_2 carb_1 fat_2 fat_1 pic_2 pic_1
delay = "0^0^0^0^0^0^0^0^0^0^0^0^0^0`"
 + "0^0^0^0^0^0^0^0^0^0^0^0^0^0`"
 + "0^0^0^0^0^0^0^0^0^0^0^0^0^0`"
 + "0^0^0^0^0^0^0^0^0^0^0^0^0^0`"
 + "0^0^0^0^0^0^0^0^0^0^0^0^0^0`"
 + "0^0^0^0^0^0^0^0^0^0^0^0^0^0`"
 + "0^0^0^0^0^0^0^0^0^0^0^0^0^0`"
 + "0^0^0^0^0^0^0^0^0^0^0^0^0^0`"
 + "0^0^0^0^0^0^0^0^0^0^0^0^0^0`"
 + "0^0^0^0^0^0^0^0^0^0^0^0^0^0`"
 + "0^0^0^0^0^0^0^0^0^0^0^0^0^0`"
 + "0^0^0^0^0^0^0^0^0^0^0^0^0^0`"
 + "0^0^0^0^0^0^0^0^0^0^0^0^0^0`"
 + "0^0^0^0^0^0^0^0^0^0^0^0^0^0";
activeClass = "actTD";
inactiveClass = "inactTD";
boxClass = "boxTD";
cssname = "mlweb.css";
nextURL = "thanks.html";
expname = "food2";
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
<b>Choose one of the following products. Please try to make a healthy choice. </b>



<!--END preHTML-->
<!-- MOUSELAB TABLE -->
<TABLE>
<TR>
<!--cell a0(tag:i0)-->
<TD align=center valign=middle><DIV ID="a0_cont" style="position: relative; height: 60px; width: 150px;"><DIV ID="a0_txt" STYLE="position: absolute; left: 0px; top: 0px; height: 60px; width: 150px; clip: rect(0px 150px 60px 0px); z-index: 1;"><TABLE><TD ID="a0_td" align=center valign=center width=145 height=55 class="inactTD"></TD></TABLE></DIV><DIV ID="a0_box" STYLE="position: absolute; left: 0px; top: 0px; height: 60px; width: 150px; clip: rect(0px 150px 60px 0px); z-index: 2;"><TABLE><TD ID="a0_tdbox" align=center valign=center width=145 height=55 class="boxTD"></TD></TABLE></DIV><DIV ID="a0_img" STYLE="position: absolute; left: 0px; top: 0px; height: 60px; width: 150px; z-index: 5;"><A HREF="javascript:void(0);" NAME="a0" onMouseOver="ShowCont('a0',event)" onMouseOut="HideCont('a0',event)"><IMG NAME="a0" SRC="transp.gif" border=0 width=150 height=60></A></DIV></DIV></TD>
<!--end cell-->
<!--cell a1(tag:i1)-->
<TD align=center valign=middle><DIV ID="a1_cont" style="position: relative; height: 60px; width: 150px;"><DIV ID="a1_txt" STYLE="position: absolute; left: 0px; top: 0px; height: 60px; width: 150px; clip: rect(0px 150px 60px 0px); z-index: 1;"><TABLE><TD ID="a1_td" align=center valign=center width=145 height=55 class="inactTD">Option A</TD></TABLE></DIV><DIV ID="a1_box" STYLE="position: absolute; left: 0px; top: 0px; height: 60px; width: 150px; clip: rect(0px 150px 60px 0px); z-index: 2;"><TABLE><TD ID="a1_tdbox" align=center valign=center width=145 height=55 class="boxTD"></TD></TABLE></DIV><DIV ID="a1_img" STYLE="position: absolute; left: 0px; top: 0px; height: 60px; width: 150px; z-index: 5;"><A HREF="javascript:void(0);" NAME="a1" onMouseOver="ShowCont('a1',event)" onMouseOut="HideCont('a1',event)"><IMG NAME="a1" SRC="transp.gif" border=0 width=150 height=60></A></DIV></DIV></TD>
<!--end cell-->
<!--cell a2(tag:i2)-->
<TD align=center valign=middle><DIV ID="a2_cont" style="position: relative; height: 60px; width: 150px;"><DIV ID="a2_txt" STYLE="position: absolute; left: 0px; top: 0px; height: 60px; width: 150px; clip: rect(0px 150px 60px 0px); z-index: 1;"><TABLE><TD ID="a2_td" align=center valign=center width=145 height=55 class="inactTD">Option B</TD></TABLE></DIV><DIV ID="a2_box" STYLE="position: absolute; left: 0px; top: 0px; height: 60px; width: 150px; clip: rect(0px 150px 60px 0px); z-index: 2;"><TABLE><TD ID="a2_tdbox" align=center valign=center width=145 height=55 class="boxTD"></TD></TABLE></DIV><DIV ID="a2_img" STYLE="position: absolute; left: 0px; top: 0px; height: 60px; width: 150px; z-index: 5;"><A HREF="javascript:void(0);" NAME="a2" onMouseOver="ShowCont('a2',event)" onMouseOut="HideCont('a2',event)"><IMG NAME="a2" SRC="transp.gif" border=0 width=150 height=60></A></DIV></DIV></TD>
<!--end cell--></TR><TR>
<!--cell b0(tag:bran)-->
<TD align=center valign=middle><DIV ID="b0_cont" style="position: relative; height: 60px; width: 150px;"><DIV ID="b0_txt" STYLE="position: absolute; left: 0px; top: 0px; height: 60px; width: 150px; clip: rect(0px 150px 60px 0px); z-index: 1;"><TABLE><TD ID="b0_td" align=center valign=center width=145 height=55 class="inactTD">Name/ Brand </TD></TABLE></DIV><DIV ID="b0_box" STYLE="position: absolute; left: 0px; top: 0px; height: 60px; width: 150px; clip: rect(0px 150px 60px 0px); z-index: 2;"><TABLE><TD ID="b0_tdbox" align=center valign=center width=145 height=55 class="boxTD"></TD></TABLE></DIV><DIV ID="b0_img" STYLE="position: absolute; left: 0px; top: 0px; height: 60px; width: 150px; z-index: 5;"><A HREF="javascript:void(0);" NAME="b0" onMouseOver="ShowCont('b0',event)" onMouseOut="HideCont('b0',event)"><IMG NAME="b0" SRC="transp.gif" border=0 width=150 height=60></A></DIV></DIV></TD>
<!--end cell-->
<!--cell b1(tag:brand_2)-->
<TD align=center valign=middle><DIV ID="b1_cont" style="position: relative; height: 60px; width: 150px;"><DIV ID="b1_txt" STYLE="position: absolute; left: 0px; top: 0px; height: 60px; width: 150px; clip: rect(0px 150px 60px 0px); z-index: 1;"><TABLE><TD ID="b1_td" align=center valign=center width=145 height=55 class="actTD">Farmer's Union Greek Style Natural Yogurt </TD></TABLE></DIV><DIV ID="b1_box" STYLE="position: absolute; left: 0px; top: 0px; height: 60px; width: 150px; clip: rect(0px 150px 60px 0px); z-index: 2;"><TABLE><TD ID="b1_tdbox" align=center valign=center width=145 height=55 class="boxTD"></TD></TABLE></DIV><DIV ID="b1_img" STYLE="position: absolute; left: 0px; top: 0px; height: 60px; width: 150px; z-index: 5;"><A HREF="javascript:void(0);" NAME="b1" onMouseOver="ShowCont('b1',event)" onMouseOut="HideCont('b1',event)"><IMG NAME="b1" SRC="transp.gif" border=0 width=150 height=60></A></DIV></DIV></TD>
<!--end cell-->
<!--cell b2(tag:brand_1)-->
<TD align=center valign=middle><DIV ID="b2_cont" style="position: relative; height: 60px; width: 150px;"><DIV ID="b2_txt" STYLE="position: absolute; left: 0px; top: 0px; height: 60px; width: 150px; clip: rect(0px 150px 60px 0px); z-index: 1;"><TABLE><TD ID="b2_td" align=center valign=center width=145 height=55 class="actTD">Nestle Fat Free Strawberry Yogurt </TD></TABLE></DIV><DIV ID="b2_box" STYLE="position: absolute; left: 0px; top: 0px; height: 60px; width: 150px; clip: rect(0px 150px 60px 0px); z-index: 2;"><TABLE><TD ID="b2_tdbox" align=center valign=center width=145 height=55 class="boxTD"></TD></TABLE></DIV><DIV ID="b2_img" STYLE="position: absolute; left: 0px; top: 0px; height: 60px; width: 150px; z-index: 5;"><A HREF="javascript:void(0);" NAME="b2" onMouseOver="ShowCont('b2',event)" onMouseOut="HideCont('b2',event)"><IMG NAME="b2" SRC="transp.gif" border=0 width=150 height=60></A></DIV></DIV></TD>
<!--end cell--></TR><TR>
<!--cell c0(tag:chol)-->
<TD align=center valign=middle><DIV ID="c0_cont" style="position: relative; height: 60px; width: 150px;"><DIV ID="c0_txt" STYLE="position: absolute; left: 0px; top: 0px; height: 60px; width: 150px; clip: rect(0px 150px 60px 0px); z-index: 1;"><TABLE><TD ID="c0_td" align=center valign=center width=145 height=55 class="inactTD">Cholesterol </TD></TABLE></DIV><DIV ID="c0_box" STYLE="position: absolute; left: 0px; top: 0px; height: 60px; width: 150px; clip: rect(0px 150px 60px 0px); z-index: 2;"><TABLE><TD ID="c0_tdbox" align=center valign=center width=145 height=55 class="boxTD"></TD></TABLE></DIV><DIV ID="c0_img" STYLE="position: absolute; left: 0px; top: 0px; height: 60px; width: 150px; z-index: 5;"><A HREF="javascript:void(0);" NAME="c0" onMouseOver="ShowCont('c0',event)" onMouseOut="HideCont('c0',event)"><IMG NAME="c0" SRC="transp.gif" border=0 width=150 height=60></A></DIV></DIV></TD>
<!--end cell-->
<!--cell c1(tag:chol_2)-->
<TD align=center valign=middle><DIV ID="c1_cont" style="position: relative; height: 60px; width: 150px;"><DIV ID="c1_txt" STYLE="position: absolute; left: 0px; top: 0px; height: 60px; width: 150px; clip: rect(0px 150px 60px 0px); z-index: 1;"><TABLE><TD ID="c1_td" align=center valign=center width=145 height=55 class="actTD">5mg</TD></TABLE></DIV><DIV ID="c1_box" STYLE="position: absolute; left: 0px; top: 0px; height: 60px; width: 150px; clip: rect(0px 150px 60px 0px); z-index: 2;"><TABLE><TD ID="c1_tdbox" align=center valign=center width=145 height=55 class="boxTD"></TD></TABLE></DIV><DIV ID="c1_img" STYLE="position: absolute; left: 0px; top: 0px; height: 60px; width: 150px; z-index: 5;"><A HREF="javascript:void(0);" NAME="c1" onMouseOver="ShowCont('c1',event)" onMouseOut="HideCont('c1',event)"><IMG NAME="c1" SRC="transp.gif" border=0 width=150 height=60></A></DIV></DIV></TD>
<!--end cell-->
<!--cell c2(tag:chol_1)-->
<TD align=center valign=middle><DIV ID="c2_cont" style="position: relative; height: 60px; width: 150px;"><DIV ID="c2_txt" STYLE="position: absolute; left: 0px; top: 0px; height: 60px; width: 150px; clip: rect(0px 150px 60px 0px); z-index: 1;"><TABLE><TD ID="c2_td" align=center valign=center width=145 height=55 class="actTD">0mg</TD></TABLE></DIV><DIV ID="c2_box" STYLE="position: absolute; left: 0px; top: 0px; height: 60px; width: 150px; clip: rect(0px 150px 60px 0px); z-index: 2;"><TABLE><TD ID="c2_tdbox" align=center valign=center width=145 height=55 class="boxTD"></TD></TABLE></DIV><DIV ID="c2_img" STYLE="position: absolute; left: 0px; top: 0px; height: 60px; width: 150px; z-index: 5;"><A HREF="javascript:void(0);" NAME="c2" onMouseOver="ShowCont('c2',event)" onMouseOut="HideCont('c2',event)"><IMG NAME="c2" SRC="transp.gif" border=0 width=150 height=60></A></DIV></DIV></TD>
<!--end cell--></TR><TR>
<!--cell d0(tag:sod)-->
<TD align=center valign=middle><DIV ID="d0_cont" style="position: relative; height: 60px; width: 150px;"><DIV ID="d0_txt" STYLE="position: absolute; left: 0px; top: 0px; height: 60px; width: 150px; clip: rect(0px 150px 60px 0px); z-index: 1;"><TABLE><TD ID="d0_td" align=center valign=center width=145 height=55 class="inactTD">Sodium </TD></TABLE></DIV><DIV ID="d0_box" STYLE="position: absolute; left: 0px; top: 0px; height: 60px; width: 150px; clip: rect(0px 150px 60px 0px); z-index: 2;"><TABLE><TD ID="d0_tdbox" align=center valign=center width=145 height=55 class="boxTD"></TD></TABLE></DIV><DIV ID="d0_img" STYLE="position: absolute; left: 0px; top: 0px; height: 60px; width: 150px; z-index: 5;"><A HREF="javascript:void(0);" NAME="d0" onMouseOver="ShowCont('d0',event)" onMouseOut="HideCont('d0',event)"><IMG NAME="d0" SRC="transp.gif" border=0 width=150 height=60></A></DIV></DIV></TD>
<!--end cell-->
<!--cell d1(tag:sod_2)-->
<TD align=center valign=middle><DIV ID="d1_cont" style="position: relative; height: 60px; width: 150px;"><DIV ID="d1_txt" STYLE="position: absolute; left: 0px; top: 0px; height: 60px; width: 150px; clip: rect(0px 150px 60px 0px); z-index: 1;"><TABLE><TD ID="d1_td" align=center valign=center width=145 height=55 class="actTD">50mg</TD></TABLE></DIV><DIV ID="d1_box" STYLE="position: absolute; left: 0px; top: 0px; height: 60px; width: 150px; clip: rect(0px 150px 60px 0px); z-index: 2;"><TABLE><TD ID="d1_tdbox" align=center valign=center width=145 height=55 class="boxTD"></TD></TABLE></DIV><DIV ID="d1_img" STYLE="position: absolute; left: 0px; top: 0px; height: 60px; width: 150px; z-index: 5;"><A HREF="javascript:void(0);" NAME="d1" onMouseOver="ShowCont('d1',event)" onMouseOut="HideCont('d1',event)"><IMG NAME="d1" SRC="transp.gif" border=0 width=150 height=60></A></DIV></DIV></TD>
<!--end cell-->
<!--cell d2(tag:sod_1)-->
<TD align=center valign=middle><DIV ID="d2_cont" style="position: relative; height: 60px; width: 150px;"><DIV ID="d2_txt" STYLE="position: absolute; left: 0px; top: 0px; height: 60px; width: 150px; clip: rect(0px 150px 60px 0px); z-index: 1;"><TABLE><TD ID="d2_td" align=center valign=center width=145 height=55 class="actTD">0mg</TD></TABLE></DIV><DIV ID="d2_box" STYLE="position: absolute; left: 0px; top: 0px; height: 60px; width: 150px; clip: rect(0px 150px 60px 0px); z-index: 2;"><TABLE><TD ID="d2_tdbox" align=center valign=center width=145 height=55 class="boxTD"></TD></TABLE></DIV><DIV ID="d2_img" STYLE="position: absolute; left: 0px; top: 0px; height: 60px; width: 150px; z-index: 5;"><A HREF="javascript:void(0);" NAME="d2" onMouseOver="ShowCont('d2',event)" onMouseOut="HideCont('d2',event)"><IMG NAME="d2" SRC="transp.gif" border=0 width=150 height=60></A></DIV></DIV></TD>
<!--end cell--></TR><TR>
<!--cell e0(tag:pro)-->
<TD align=center valign=middle><DIV ID="e0_cont" style="position: relative; height: 60px; width: 150px;"><DIV ID="e0_txt" STYLE="position: absolute; left: 0px; top: 0px; height: 60px; width: 150px; clip: rect(0px 150px 60px 0px); z-index: 1;"><TABLE><TD ID="e0_td" align=center valign=center width=145 height=55 class="inactTD">Protein </TD></TABLE></DIV><DIV ID="e0_box" STYLE="position: absolute; left: 0px; top: 0px; height: 60px; width: 150px; clip: rect(0px 150px 60px 0px); z-index: 2;"><TABLE><TD ID="e0_tdbox" align=center valign=center width=145 height=55 class="boxTD"></TD></TABLE></DIV><DIV ID="e0_img" STYLE="position: absolute; left: 0px; top: 0px; height: 60px; width: 150px; z-index: 5;"><A HREF="javascript:void(0);" NAME="e0" onMouseOver="ShowCont('e0',event)" onMouseOut="HideCont('e0',event)"><IMG NAME="e0" SRC="transp.gif" border=0 width=150 height=60></A></DIV></DIV></TD>
<!--end cell-->
<!--cell e1(tag:pro_2)-->
<TD align=center valign=middle><DIV ID="e1_cont" style="position: relative; height: 60px; width: 150px;"><DIV ID="e1_txt" STYLE="position: absolute; left: 0px; top: 0px; height: 60px; width: 150px; clip: rect(0px 150px 60px 0px); z-index: 1;"><TABLE><TD ID="e1_td" align=center valign=center width=145 height=55 class="actTD">3g</TD></TABLE></DIV><DIV ID="e1_box" STYLE="position: absolute; left: 0px; top: 0px; height: 60px; width: 150px; clip: rect(0px 150px 60px 0px); z-index: 2;"><TABLE><TD ID="e1_tdbox" align=center valign=center width=145 height=55 class="boxTD"></TD></TABLE></DIV><DIV ID="e1_img" STYLE="position: absolute; left: 0px; top: 0px; height: 60px; width: 150px; z-index: 5;"><A HREF="javascript:void(0);" NAME="e1" onMouseOver="ShowCont('e1',event)" onMouseOut="HideCont('e1',event)"><IMG NAME="e1" SRC="transp.gif" border=0 width=150 height=60></A></DIV></DIV></TD>
<!--end cell-->
<!--cell e2(tag:pro_1)-->
<TD align=center valign=middle><DIV ID="e2_cont" style="position: relative; height: 60px; width: 150px;"><DIV ID="e2_txt" STYLE="position: absolute; left: 0px; top: 0px; height: 60px; width: 150px; clip: rect(0px 150px 60px 0px); z-index: 1;"><TABLE><TD ID="e2_td" align=center valign=center width=145 height=55 class="actTD">0g</TD></TABLE></DIV><DIV ID="e2_box" STYLE="position: absolute; left: 0px; top: 0px; height: 60px; width: 150px; clip: rect(0px 150px 60px 0px); z-index: 2;"><TABLE><TD ID="e2_tdbox" align=center valign=center width=145 height=55 class="boxTD"></TD></TABLE></DIV><DIV ID="e2_img" STYLE="position: absolute; left: 0px; top: 0px; height: 60px; width: 150px; z-index: 5;"><A HREF="javascript:void(0);" NAME="e2" onMouseOver="ShowCont('e2',event)" onMouseOut="HideCont('e2',event)"><IMG NAME="e2" SRC="transp.gif" border=0 width=150 height=60></A></DIV></DIV></TD>
<!--end cell--></TR><TR>
<!--cell f0(tag:carb)-->
<TD align=center valign=middle><DIV ID="f0_cont" style="position: relative; height: 60px; width: 150px;"><DIV ID="f0_txt" STYLE="position: absolute; left: 0px; top: 0px; height: 60px; width: 150px; clip: rect(0px 150px 60px 0px); z-index: 1;"><TABLE><TD ID="f0_td" align=center valign=center width=145 height=55 class="inactTD">Total Carbohydrates </TD></TABLE></DIV><DIV ID="f0_box" STYLE="position: absolute; left: 0px; top: 0px; height: 60px; width: 150px; clip: rect(0px 150px 60px 0px); z-index: 2;"><TABLE><TD ID="f0_tdbox" align=center valign=center width=145 height=55 class="boxTD"></TD></TABLE></DIV><DIV ID="f0_img" STYLE="position: absolute; left: 0px; top: 0px; height: 60px; width: 150px; z-index: 5;"><A HREF="javascript:void(0);" NAME="f0" onMouseOver="ShowCont('f0',event)" onMouseOut="HideCont('f0',event)"><IMG NAME="f0" SRC="transp.gif" border=0 width=150 height=60></A></DIV></DIV></TD>
<!--end cell-->
<!--cell f1(tag:carb_2)-->
<TD align=center valign=middle><DIV ID="f1_cont" style="position: relative; height: 60px; width: 150px;"><DIV ID="f1_txt" STYLE="position: absolute; left: 0px; top: 0px; height: 60px; width: 150px; clip: rect(0px 150px 60px 0px); z-index: 1;"><TABLE><TD ID="f1_td" align=center valign=center width=145 height=55 class="actTD">20g</TD></TABLE></DIV><DIV ID="f1_box" STYLE="position: absolute; left: 0px; top: 0px; height: 60px; width: 150px; clip: rect(0px 150px 60px 0px); z-index: 2;"><TABLE><TD ID="f1_tdbox" align=center valign=center width=145 height=55 class="boxTD"></TD></TABLE></DIV><DIV ID="f1_img" STYLE="position: absolute; left: 0px; top: 0px; height: 60px; width: 150px; z-index: 5;"><A HREF="javascript:void(0);" NAME="f1" onMouseOver="ShowCont('f1',event)" onMouseOut="HideCont('f1',event)"><IMG NAME="f1" SRC="transp.gif" border=0 width=150 height=60></A></DIV></DIV></TD>
<!--end cell-->
<!--cell f2(tag:carb_1)-->
<TD align=center valign=middle><DIV ID="f2_cont" style="position: relative; height: 60px; width: 150px;"><DIV ID="f2_txt" STYLE="position: absolute; left: 0px; top: 0px; height: 60px; width: 150px; clip: rect(0px 150px 60px 0px); z-index: 1;"><TABLE><TD ID="f2_td" align=center valign=center width=145 height=55 class="actTD">13g</TD></TABLE></DIV><DIV ID="f2_box" STYLE="position: absolute; left: 0px; top: 0px; height: 60px; width: 150px; clip: rect(0px 150px 60px 0px); z-index: 2;"><TABLE><TD ID="f2_tdbox" align=center valign=center width=145 height=55 class="boxTD"></TD></TABLE></DIV><DIV ID="f2_img" STYLE="position: absolute; left: 0px; top: 0px; height: 60px; width: 150px; z-index: 5;"><A HREF="javascript:void(0);" NAME="f2" onMouseOver="ShowCont('f2',event)" onMouseOut="HideCont('f2',event)"><IMG NAME="f2" SRC="transp.gif" border=0 width=150 height=60></A></DIV></DIV></TD>
<!--end cell--></TR><TR>
<!--cell g0(tag:fat)-->
<TD align=center valign=middle><DIV ID="g0_cont" style="position: relative; height: 60px; width: 150px;"><DIV ID="g0_txt" STYLE="position: absolute; left: 0px; top: 0px; height: 60px; width: 150px; clip: rect(0px 150px 60px 0px); z-index: 1;"><TABLE><TD ID="g0_td" align=center valign=center width=145 height=55 class="inactTD">Total Fat </TD></TABLE></DIV><DIV ID="g0_box" STYLE="position: absolute; left: 0px; top: 0px; height: 60px; width: 150px; clip: rect(0px 150px 60px 0px); z-index: 2;"><TABLE><TD ID="g0_tdbox" align=center valign=center width=145 height=55 class="boxTD"></TD></TABLE></DIV><DIV ID="g0_img" STYLE="position: absolute; left: 0px; top: 0px; height: 60px; width: 150px; z-index: 5;"><A HREF="javascript:void(0);" NAME="g0" onMouseOver="ShowCont('g0',event)" onMouseOut="HideCont('g0',event)"><IMG NAME="g0" SRC="transp.gif" border=0 width=150 height=60></A></DIV></DIV></TD>
<!--end cell-->
<!--cell g1(tag:fat_2)-->
<TD align=center valign=middle><DIV ID="g1_cont" style="position: relative; height: 60px; width: 150px;"><DIV ID="g1_txt" STYLE="position: absolute; left: 0px; top: 0px; height: 60px; width: 150px; clip: rect(0px 150px 60px 0px); z-index: 1;"><TABLE><TD ID="g1_td" align=center valign=center width=145 height=55 class="actTD">2g</TD></TABLE></DIV><DIV ID="g1_box" STYLE="position: absolute; left: 0px; top: 0px; height: 60px; width: 150px; clip: rect(0px 150px 60px 0px); z-index: 2;"><TABLE><TD ID="g1_tdbox" align=center valign=center width=145 height=55 class="boxTD"></TD></TABLE></DIV><DIV ID="g1_img" STYLE="position: absolute; left: 0px; top: 0px; height: 60px; width: 150px; z-index: 5;"><A HREF="javascript:void(0);" NAME="g1" onMouseOver="ShowCont('g1',event)" onMouseOut="HideCont('g1',event)"><IMG NAME="g1" SRC="transp.gif" border=0 width=150 height=60></A></DIV></DIV></TD>
<!--end cell-->
<!--cell g2(tag:fat_1)-->
<TD align=center valign=middle><DIV ID="g2_cont" style="position: relative; height: 60px; width: 150px;"><DIV ID="g2_txt" STYLE="position: absolute; left: 0px; top: 0px; height: 60px; width: 150px; clip: rect(0px 150px 60px 0px); z-index: 1;"><TABLE><TD ID="g2_td" align=center valign=center width=145 height=55 class="actTD">0g</TD></TABLE></DIV><DIV ID="g2_box" STYLE="position: absolute; left: 0px; top: 0px; height: 60px; width: 150px; clip: rect(0px 150px 60px 0px); z-index: 2;"><TABLE><TD ID="g2_tdbox" align=center valign=center width=145 height=55 class="boxTD"></TD></TABLE></DIV><DIV ID="g2_img" STYLE="position: absolute; left: 0px; top: 0px; height: 60px; width: 150px; z-index: 5;"><A HREF="javascript:void(0);" NAME="g2" onMouseOver="ShowCont('g2',event)" onMouseOut="HideCont('g2',event)"><IMG NAME="g2" SRC="transp.gif" border=0 width=150 height=60></A></DIV></DIV></TD>
<!--end cell--></TR><TR>
<!--cell h0(tag:pic)-->
<TD align=center valign=middle><DIV ID="h0_cont" style="position: relative; height: 150px; width: 150px;"><DIV ID="h0_txt" STYLE="position: absolute; left: 0px; top: 0px; height: 150px; width: 150px; clip: rect(0px 150px 150px 0px); z-index: 1;"><TABLE><TD ID="h0_td" align=center valign=center width=145 height=145 class="inactTD">Picture </TD></TABLE></DIV><DIV ID="h0_box" STYLE="position: absolute; left: 0px; top: 0px; height: 150px; width: 150px; clip: rect(0px 150px 150px 0px); z-index: 2;"><TABLE><TD ID="h0_tdbox" align=center valign=center width=145 height=145 class="boxTD"></TD></TABLE></DIV><DIV ID="h0_img" STYLE="position: absolute; left: 0px; top: 0px; height: 150px; width: 150px; z-index: 5;"><A HREF="javascript:void(0);" NAME="h0" onMouseOver="ShowCont('h0',event)" onMouseOut="HideCont('h0',event)"><IMG NAME="h0" SRC="transp.gif" border=0 width=150 height=150></A></DIV></DIV></TD>
<!--end cell-->
<!--cell h1(tag:pic_2)-->
<TD align=center valign=middle><DIV ID="h1_cont" style="position: relative; height: 150px; width: 150px;"><DIV ID="h1_txt" STYLE="position: absolute; left: 0px; top: 0px; height: 150px; width: 150px; clip: rect(0px 150px 150px 0px); z-index: 1;"><TABLE><TD ID="h1_td" align=center valign=center width=145 height=145 class="actTD"><IMG src= 'http://summerschool.mouselabweb.org/pics/Yoghurt2.png' width=100, height=150 ></TD></TABLE></DIV><DIV ID="h1_box" STYLE="position: absolute; left: 0px; top: 0px; height: 150px; width: 150px; clip: rect(0px 150px 150px 0px); z-index: 2;"><TABLE><TD ID="h1_tdbox" align=center valign=center width=145 height=145 class="boxTD"></TD></TABLE></DIV><DIV ID="h1_img" STYLE="position: absolute; left: 0px; top: 0px; height: 150px; width: 150px; z-index: 5;"><A HREF="javascript:void(0);" NAME="h1" onMouseOver="ShowCont('h1',event)" onMouseOut="HideCont('h1',event)"><IMG NAME="h1" SRC="transp.gif" border=0 width=150 height=150></A></DIV></DIV></TD>
<!--end cell-->
<!--cell h2(tag:pic_1)-->
<TD align=center valign=middle><DIV ID="h2_cont" style="position: relative; height: 150px; width: 150px;"><DIV ID="h2_txt" STYLE="position: absolute; left: 0px; top: 0px; height: 150px; width: 150px; clip: rect(0px 150px 150px 0px); z-index: 1;"><TABLE><TD ID="h2_td" align=center valign=center width=145 height=145 class="actTD"><IMG src= 'http://summerschool.mouselabweb.org/pics/Yoghurt1.png' width=100, height=150 ></TD></TABLE></DIV><DIV ID="h2_box" STYLE="position: absolute; left: 0px; top: 0px; height: 150px; width: 150px; clip: rect(0px 150px 150px 0px); z-index: 2;"><TABLE><TD ID="h2_tdbox" align=center valign=center width=145 height=145 class="boxTD"></TD></TABLE></DIV><DIV ID="h2_img" STYLE="position: absolute; left: 0px; top: 0px; height: 150px; width: 150px; z-index: 5;"><A HREF="javascript:void(0);" NAME="h2" onMouseOver="ShowCont('h2',event)" onMouseOut="HideCont('h2',event)"><IMG NAME="h2" SRC="transp.gif" border=0 width=150 height=150></A></DIV></DIV></TD>
<!--end cell--></TR><TR><TD ID="btn_0" style="border-left-style: none; border-right-style: none; border-bottom-style: none;"> </TD><TD ID="btn_1" style="border-left-style: none; border-right-style: none; border-bottom-style: none;" align=center valign=middle><INPUT type="radio" name="mlchoice" value="choice_2" onMouseOver="timefunction('mouseover','choice_2','A')" onClick="recChoice('onclick','choice_2','A')" onMouseOut="timefunction('mouseout','choice_2','A')">A</TD>
<TD ID="btn_2" style="border-left-style: none; border-right-style: none; border-bottom-style: none;" align=center valign=middle><INPUT type="radio" name="mlchoice" value="choice_1" onMouseOver="timefunction('mouseover','choice_1','B')" onClick="recChoice('onclick','choice_1','B')" onMouseOut="timefunction('mouseout','choice_1','B')">B</TD>
</TR></TABLE>
<!-- END MOUSELAB TABLE -->
<!--BEGIN postHTML-->

<!--END postHTML--><INPUT type="submit" value="Next Page" onClick=timefunction('submit','submit','submit')></FORM></body></html>
