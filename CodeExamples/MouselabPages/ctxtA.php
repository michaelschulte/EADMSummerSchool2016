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
tag = "a0^a1^a2^a3`"
 + "b0^Dp^Tp^Cp`"
 + "c0^Df^Tf^Cf";

txt = "^XD-video^VA-tech^BK-view`"
 + "Price^Price $72 <br> Free shipping <br> Required cable set: $12^Price $72 <br> Free shipping <br> Required cable set: $12^Price $129 <br> Free shipping <br> Required cable set: $19`"
 + "Features^Reasonably good quality picture <br> Sound quality: 2.5 out of 5 stars <br> Menu: not intuitive, low usability^Very high quality, sharp picture <br> Sound quality: 3.5 out of 5 stars <br> Menu: intuitive, moderate usability^Excellent quality, sharp picture <br> Sound quality: 4 out of 5 stars <br> Menu: intuitive, good usability";

state = "0^0^0^0`"
 + "0^1^1^1`"
 + "0^1^1^1";

box = "^^^`"
 + "^^^`"
 + "^^^";

CBCol = "0^1^1^1";
CBRow = "0^1^1";
W_Col = "100^200^200^200";
H_Row = "100^100^100";

chkchoice = false;
btnFlg = 1;
btnType = "button";
btntxt = "^XD-video^VA-tech^BK-view";
btnstate = "0^1^1^1";
btntag = "btn1^D^T^C";
to_email = "";
colFix = false;
rowFix = false;
CBpreset = true;
evtOpen = 0;
evtClose = 0;
CBord = "0^1^2^3^0^1^2^3`"
+ "0^2^1^3^0^1^2^3`"
+ "0^3^1^2^0^1^2^3`"
+ "0^3^2^1^0^1^2^3`"
+ "0^1^2^3^0^2^1^3`"
+ "0^2^1^3^0^2^1^3`"
+ "0^3^1^2^0^2^1^3`"
+ "0^3^2^1^0^2^1^3";

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

//Delay: Dp Tp Cp Df Tf Cf
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
nextURL = "food1.php";
expname = "ctxtA";
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
<h1>DVD player</h1>
<p>Your current DVD player is an older model that sometimes has trouble playing certain discs from your personal collection. A neighbor tells you that recent DVD players do a better job playing difficult discs, have much more functionality, and are relatively cheap. You decide to buy a new player, and he advises you to search some sites on the internet. He also advises you to get a model that includes a VCR (VHS-video) to be able to play your old tapes.
</p>


<p>After some searching on the internet among suitable models that include a VCR you note that important aspects besides price are sound and image quality and the usability of the on-screen menus. In one of you favorite internet shops you find several models, that receive good ratings. You decide to choose among these. The features of these players are presented below.</p>
<p>
Make a choice among these DVD players by pressing the button below the DVD player of your choice.
</p>



 <br>




<!--END preHTML-->
<!-- MOUSELAB TABLE -->
<TABLE border=1>
<TR>
<!--cell a0(tag:a0)-->
<TD align=center valign=middle><DIV ID="a0_cont" style="position: relative; height: 100px; width: 100px;"><DIV ID="a0_txt" STYLE="position: absolute; left: 0px; top: 0px; height: 100px; width: 100px; clip: rect(0px 100px 100px 0px); z-index: 1;"><TABLE><TD ID="a0_td" align=center valign=center width=95 height=95 class="inactTD"></TD></TABLE></DIV><DIV ID="a0_box" STYLE="position: absolute; left: 0px; top: 0px; height: 100px; width: 100px; clip: rect(0px 100px 100px 0px); z-index: 2;"><TABLE><TD ID="a0_tdbox" align=center valign=center width=95 height=95 class="boxTD"></TD></TABLE></DIV><DIV ID="a0_img" STYLE="position: absolute; left: 0px; top: 0px; height: 100px; width: 100px; z-index: 5;"><A HREF="javascript:void(0);" NAME="a0" onMouseOver="ShowCont('a0',event)" onMouseOut="HideCont('a0',event)"><IMG NAME="a0" SRC="transp.gif" border=0 width=100 height=100></A></DIV></DIV></TD>
<!--end cell-->
<!--cell a1(tag:a1)-->
<TD align=center valign=middle><DIV ID="a1_cont" style="position: relative; height: 100px; width: 200px;"><DIV ID="a1_txt" STYLE="position: absolute; left: 0px; top: 0px; height: 100px; width: 200px; clip: rect(0px 200px 100px 0px); z-index: 1;"><TABLE><TD ID="a1_td" align=center valign=center width=195 height=95 class="inactTD">XD-video</TD></TABLE></DIV><DIV ID="a1_box" STYLE="position: absolute; left: 0px; top: 0px; height: 100px; width: 200px; clip: rect(0px 200px 100px 0px); z-index: 2;"><TABLE><TD ID="a1_tdbox" align=center valign=center width=195 height=95 class="boxTD"></TD></TABLE></DIV><DIV ID="a1_img" STYLE="position: absolute; left: 0px; top: 0px; height: 100px; width: 200px; z-index: 5;"><A HREF="javascript:void(0);" NAME="a1" onMouseOver="ShowCont('a1',event)" onMouseOut="HideCont('a1',event)"><IMG NAME="a1" SRC="transp.gif" border=0 width=200 height=100></A></DIV></DIV></TD>
<!--end cell-->
<!--cell a2(tag:a2)-->
<TD align=center valign=middle><DIV ID="a2_cont" style="position: relative; height: 100px; width: 200px;"><DIV ID="a2_txt" STYLE="position: absolute; left: 0px; top: 0px; height: 100px; width: 200px; clip: rect(0px 200px 100px 0px); z-index: 1;"><TABLE><TD ID="a2_td" align=center valign=center width=195 height=95 class="inactTD">VA-tech</TD></TABLE></DIV><DIV ID="a2_box" STYLE="position: absolute; left: 0px; top: 0px; height: 100px; width: 200px; clip: rect(0px 200px 100px 0px); z-index: 2;"><TABLE><TD ID="a2_tdbox" align=center valign=center width=195 height=95 class="boxTD"></TD></TABLE></DIV><DIV ID="a2_img" STYLE="position: absolute; left: 0px; top: 0px; height: 100px; width: 200px; z-index: 5;"><A HREF="javascript:void(0);" NAME="a2" onMouseOver="ShowCont('a2',event)" onMouseOut="HideCont('a2',event)"><IMG NAME="a2" SRC="transp.gif" border=0 width=200 height=100></A></DIV></DIV></TD>
<!--end cell-->
<!--cell a3(tag:a3)-->
<TD align=center valign=middle><DIV ID="a3_cont" style="position: relative; height: 100px; width: 200px;"><DIV ID="a3_txt" STYLE="position: absolute; left: 0px; top: 0px; height: 100px; width: 200px; clip: rect(0px 200px 100px 0px); z-index: 1;"><TABLE><TD ID="a3_td" align=center valign=center width=195 height=95 class="inactTD">BK-view</TD></TABLE></DIV><DIV ID="a3_box" STYLE="position: absolute; left: 0px; top: 0px; height: 100px; width: 200px; clip: rect(0px 200px 100px 0px); z-index: 2;"><TABLE><TD ID="a3_tdbox" align=center valign=center width=195 height=95 class="boxTD"></TD></TABLE></DIV><DIV ID="a3_img" STYLE="position: absolute; left: 0px; top: 0px; height: 100px; width: 200px; z-index: 5;"><A HREF="javascript:void(0);" NAME="a3" onMouseOver="ShowCont('a3',event)" onMouseOut="HideCont('a3',event)"><IMG NAME="a3" SRC="transp.gif" border=0 width=200 height=100></A></DIV></DIV></TD>
<!--end cell--></TR><TR>
<!--cell b0(tag:b0)-->
<TD align=center valign=middle><DIV ID="b0_cont" style="position: relative; height: 100px; width: 100px;"><DIV ID="b0_txt" STYLE="position: absolute; left: 0px; top: 0px; height: 100px; width: 100px; clip: rect(0px 100px 100px 0px); z-index: 1;"><TABLE><TD ID="b0_td" align=center valign=center width=95 height=95 class="inactTD">Price</TD></TABLE></DIV><DIV ID="b0_box" STYLE="position: absolute; left: 0px; top: 0px; height: 100px; width: 100px; clip: rect(0px 100px 100px 0px); z-index: 2;"><TABLE><TD ID="b0_tdbox" align=center valign=center width=95 height=95 class="boxTD"></TD></TABLE></DIV><DIV ID="b0_img" STYLE="position: absolute; left: 0px; top: 0px; height: 100px; width: 100px; z-index: 5;"><A HREF="javascript:void(0);" NAME="b0" onMouseOver="ShowCont('b0',event)" onMouseOut="HideCont('b0',event)"><IMG NAME="b0" SRC="transp.gif" border=0 width=100 height=100></A></DIV></DIV></TD>
<!--end cell-->
<!--cell b1(tag:Dp)-->
<TD align=center valign=middle><DIV ID="b1_cont" style="position: relative; height: 100px; width: 200px;"><DIV ID="b1_txt" STYLE="position: absolute; left: 0px; top: 0px; height: 100px; width: 200px; clip: rect(0px 200px 100px 0px); z-index: 1;"><TABLE><TD ID="b1_td" align=center valign=center width=195 height=95 class="actTD">Price $72 <br> Free shipping <br> Required cable set: $12</TD></TABLE></DIV><DIV ID="b1_box" STYLE="position: absolute; left: 0px; top: 0px; height: 100px; width: 200px; clip: rect(0px 200px 100px 0px); z-index: 2;"><TABLE><TD ID="b1_tdbox" align=center valign=center width=195 height=95 class="boxTD"></TD></TABLE></DIV><DIV ID="b1_img" STYLE="position: absolute; left: 0px; top: 0px; height: 100px; width: 200px; z-index: 5;"><A HREF="javascript:void(0);" NAME="b1" onMouseOver="ShowCont('b1',event)" onMouseOut="HideCont('b1',event)"><IMG NAME="b1" SRC="transp.gif" border=0 width=200 height=100></A></DIV></DIV></TD>
<!--end cell-->
<!--cell b2(tag:Tp)-->
<TD align=center valign=middle><DIV ID="b2_cont" style="position: relative; height: 100px; width: 200px;"><DIV ID="b2_txt" STYLE="position: absolute; left: 0px; top: 0px; height: 100px; width: 200px; clip: rect(0px 200px 100px 0px); z-index: 1;"><TABLE><TD ID="b2_td" align=center valign=center width=195 height=95 class="actTD">Price $72 <br> Free shipping <br> Required cable set: $12</TD></TABLE></DIV><DIV ID="b2_box" STYLE="position: absolute; left: 0px; top: 0px; height: 100px; width: 200px; clip: rect(0px 200px 100px 0px); z-index: 2;"><TABLE><TD ID="b2_tdbox" align=center valign=center width=195 height=95 class="boxTD"></TD></TABLE></DIV><DIV ID="b2_img" STYLE="position: absolute; left: 0px; top: 0px; height: 100px; width: 200px; z-index: 5;"><A HREF="javascript:void(0);" NAME="b2" onMouseOver="ShowCont('b2',event)" onMouseOut="HideCont('b2',event)"><IMG NAME="b2" SRC="transp.gif" border=0 width=200 height=100></A></DIV></DIV></TD>
<!--end cell-->
<!--cell b3(tag:Cp)-->
<TD align=center valign=middle><DIV ID="b3_cont" style="position: relative; height: 100px; width: 200px;"><DIV ID="b3_txt" STYLE="position: absolute; left: 0px; top: 0px; height: 100px; width: 200px; clip: rect(0px 200px 100px 0px); z-index: 1;"><TABLE><TD ID="b3_td" align=center valign=center width=195 height=95 class="actTD">Price $129 <br> Free shipping <br> Required cable set: $19</TD></TABLE></DIV><DIV ID="b3_box" STYLE="position: absolute; left: 0px; top: 0px; height: 100px; width: 200px; clip: rect(0px 200px 100px 0px); z-index: 2;"><TABLE><TD ID="b3_tdbox" align=center valign=center width=195 height=95 class="boxTD"></TD></TABLE></DIV><DIV ID="b3_img" STYLE="position: absolute; left: 0px; top: 0px; height: 100px; width: 200px; z-index: 5;"><A HREF="javascript:void(0);" NAME="b3" onMouseOver="ShowCont('b3',event)" onMouseOut="HideCont('b3',event)"><IMG NAME="b3" SRC="transp.gif" border=0 width=200 height=100></A></DIV></DIV></TD>
<!--end cell--></TR><TR>
<!--cell c0(tag:c0)-->
<TD align=center valign=middle><DIV ID="c0_cont" style="position: relative; height: 100px; width: 100px;"><DIV ID="c0_txt" STYLE="position: absolute; left: 0px; top: 0px; height: 100px; width: 100px; clip: rect(0px 100px 100px 0px); z-index: 1;"><TABLE><TD ID="c0_td" align=center valign=center width=95 height=95 class="inactTD">Features</TD></TABLE></DIV><DIV ID="c0_box" STYLE="position: absolute; left: 0px; top: 0px; height: 100px; width: 100px; clip: rect(0px 100px 100px 0px); z-index: 2;"><TABLE><TD ID="c0_tdbox" align=center valign=center width=95 height=95 class="boxTD"></TD></TABLE></DIV><DIV ID="c0_img" STYLE="position: absolute; left: 0px; top: 0px; height: 100px; width: 100px; z-index: 5;"><A HREF="javascript:void(0);" NAME="c0" onMouseOver="ShowCont('c0',event)" onMouseOut="HideCont('c0',event)"><IMG NAME="c0" SRC="transp.gif" border=0 width=100 height=100></A></DIV></DIV></TD>
<!--end cell-->
<!--cell c1(tag:Df)-->
<TD align=center valign=middle><DIV ID="c1_cont" style="position: relative; height: 100px; width: 200px;"><DIV ID="c1_txt" STYLE="position: absolute; left: 0px; top: 0px; height: 100px; width: 200px; clip: rect(0px 200px 100px 0px); z-index: 1;"><TABLE><TD ID="c1_td" align=center valign=center width=195 height=95 class="actTD">Reasonably good quality picture <br> Sound quality: 2.5 out of 5 stars <br> Menu: not intuitive, low usability</TD></TABLE></DIV><DIV ID="c1_box" STYLE="position: absolute; left: 0px; top: 0px; height: 100px; width: 200px; clip: rect(0px 200px 100px 0px); z-index: 2;"><TABLE><TD ID="c1_tdbox" align=center valign=center width=195 height=95 class="boxTD"></TD></TABLE></DIV><DIV ID="c1_img" STYLE="position: absolute; left: 0px; top: 0px; height: 100px; width: 200px; z-index: 5;"><A HREF="javascript:void(0);" NAME="c1" onMouseOver="ShowCont('c1',event)" onMouseOut="HideCont('c1',event)"><IMG NAME="c1" SRC="transp.gif" border=0 width=200 height=100></A></DIV></DIV></TD>
<!--end cell-->
<!--cell c2(tag:Tf)-->
<TD align=center valign=middle><DIV ID="c2_cont" style="position: relative; height: 100px; width: 200px;"><DIV ID="c2_txt" STYLE="position: absolute; left: 0px; top: 0px; height: 100px; width: 200px; clip: rect(0px 200px 100px 0px); z-index: 1;"><TABLE><TD ID="c2_td" align=center valign=center width=195 height=95 class="actTD">Very high quality, sharp picture <br> Sound quality: 3.5 out of 5 stars <br> Menu: intuitive, moderate usability</TD></TABLE></DIV><DIV ID="c2_box" STYLE="position: absolute; left: 0px; top: 0px; height: 100px; width: 200px; clip: rect(0px 200px 100px 0px); z-index: 2;"><TABLE><TD ID="c2_tdbox" align=center valign=center width=195 height=95 class="boxTD"></TD></TABLE></DIV><DIV ID="c2_img" STYLE="position: absolute; left: 0px; top: 0px; height: 100px; width: 200px; z-index: 5;"><A HREF="javascript:void(0);" NAME="c2" onMouseOver="ShowCont('c2',event)" onMouseOut="HideCont('c2',event)"><IMG NAME="c2" SRC="transp.gif" border=0 width=200 height=100></A></DIV></DIV></TD>
<!--end cell-->
<!--cell c3(tag:Cf)-->
<TD align=center valign=middle><DIV ID="c3_cont" style="position: relative; height: 100px; width: 200px;"><DIV ID="c3_txt" STYLE="position: absolute; left: 0px; top: 0px; height: 100px; width: 200px; clip: rect(0px 200px 100px 0px); z-index: 1;"><TABLE><TD ID="c3_td" align=center valign=center width=195 height=95 class="actTD">Excellent quality, sharp picture <br> Sound quality: 4 out of 5 stars <br> Menu: intuitive, good usability</TD></TABLE></DIV><DIV ID="c3_box" STYLE="position: absolute; left: 0px; top: 0px; height: 100px; width: 200px; clip: rect(0px 200px 100px 0px); z-index: 2;"><TABLE><TD ID="c3_tdbox" align=center valign=center width=195 height=95 class="boxTD"></TD></TABLE></DIV><DIV ID="c3_img" STYLE="position: absolute; left: 0px; top: 0px; height: 100px; width: 200px; z-index: 5;"><A HREF="javascript:void(0);" NAME="c3" onMouseOver="ShowCont('c3',event)" onMouseOut="HideCont('c3',event)"><IMG NAME="c3" SRC="transp.gif" border=0 width=200 height=100></A></DIV></DIV></TD>
<!--end cell--></TR><TR><TD ID="btn_0" style="border-left-style: none; border-right-style: none; border-bottom-style: none;"> </TD><TD ID="btn_1" style="border-left-style: none; border-right-style: none; border-bottom-style: none;" align=center valign=middle><INPUT type="button" name="Dc" value="XD-video" onMouseOver="timefunction('mouseover','Dc','XD-video')" onClick="recChoice('onclick','Dc','XD-video')" onMouseOut="timefunction('mouseout','Dc','XD-video')"></TD>
<TD ID="btn_2" style="border-left-style: none; border-right-style: none; border-bottom-style: none;" align=center valign=middle><INPUT type="button" name="Tc" value="VA-tech" onMouseOver="timefunction('mouseover','Tc','VA-tech')" onClick="recChoice('onclick','Tc','VA-tech')" onMouseOut="timefunction('mouseout','Tc','VA-tech')"></TD>
<TD ID="btn_3" style="border-left-style: none; border-right-style: none; border-bottom-style: none;" align=center valign=middle><INPUT type="button" name="Cc" value="BK-view" onMouseOver="timefunction('mouseover','Cc','BK-view')" onClick="recChoice('onclick','Cc','BK-view')" onMouseOut="timefunction('mouseout','Cc','BK-view')"></TD>
</TR></TABLE>
<!-- END MOUSELAB TABLE -->
<!--BEGIN postHTML-->

<!--END postHTML--><INPUT type="submit" value="Next Page" onClick=timefunction('submit','submit','submit')></FORM></body></html>
