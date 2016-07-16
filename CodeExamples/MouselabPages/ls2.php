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
tag = "h1^h2^h3^h4^h5`"
 + "o_a1^p_a1^b2^o_b1^p_b1`"
 + "o_a2^p_a2^c2^o_b2^p_b2";

txt = "Option A: outcomes^option A: probabilities^^Option B: outcomes^option B: probabilities`"
 + "+400^35/36^^+1600^11/36`"
 + "-100^1/36^^-150^25/36";

state = "0^0^0^0^0`"
 + "1^1^0^1^1`"
 + "1^1^0^1^1";

box = "^^^^`"
 + "Outcome Win^Probability Win^^Outcome Win^Probabilty Win`"
 + "Outcome Lose^Probability Lose^^Outcome Lose^Probability Lose";

CBCol = "1^1^0^1^1";
CBRow = "0^1^1";
W_Col = "100^100^100^100^100";
H_Row = "50^50^50";

chkchoice = "nobuttons";
btnFlg = 0;
btnType = "button";
btntxt = "";
btnstate = "";
btntag = "";
to_email = "";
colFix = false;
rowFix = false;
CBpreset = true;
evtOpen = 0;
evtClose = 0;
CBord = "0^1^2^3^4^0^1^2^3`"
+ "0^1^2^3^4^0^2^1^3`"
+ "1^0^2^4^3^0^1^2^3`"
+ "1^0^2^4^3^0^2^1^3";

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

//Delay: o_a1 p_a1 o_b1 p_b1 o_a2 p_a2 o_b2 p_b2
delay = "0^0^0^0^0^0^0^0`"
 + "0^0^0^0^0^0^0^0`"
 + "0^0^0^0^0^0^0^0`"
 + "0^0^0^0^0^0^0^0`"
 + "0^0^0^0^0^0^0^0`"
 + "0^0^0^0^0^0^0^0`"
 + "0^0^0^0^0^0^0^0`"
 + "0^0^0^0^0^0^0^0";
activeClass = "actTD";
inactiveClass = "inactTD";
boxClass = "boxTD";
cssname = "mlweb.css";
nextURL = "ctxtC.php";
expname = "ls2";
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
<h1>Choose between two gambles</h1>
<p>Below two gambles are shown. Each gamble will provide you with a win and lose amount, at different probabilities.
Study the outcomes and the probabilities of these gambles carefully.
Then indicate below how much you would like to pay for each gamble.</p>



<!--END preHTML-->
<!-- MOUSELAB TABLE -->
<TABLE border=1>
<TR>
<!--cell a0(tag:h1)-->
<TD align=center valign=middle><DIV ID="a0_cont" style="position: relative; height: 50px; width: 100px;"><DIV ID="a0_txt" STYLE="position: absolute; left: 0px; top: 0px; height: 50px; width: 100px; clip: rect(0px 100px 50px 0px); z-index: 1;"><TABLE><TD ID="a0_td" align=center valign=center width=95 height=45 class="inactTD">Option A: outcomes</TD></TABLE></DIV><DIV ID="a0_box" STYLE="position: absolute; left: 0px; top: 0px; height: 50px; width: 100px; clip: rect(0px 100px 50px 0px); z-index: 2;"><TABLE><TD ID="a0_tdbox" align=center valign=center width=95 height=45 class="boxTD"></TD></TABLE></DIV><DIV ID="a0_img" STYLE="position: absolute; left: 0px; top: 0px; height: 50px; width: 100px; z-index: 5;"><A HREF="javascript:void(0);" NAME="a0" onMouseOver="ShowCont('a0',event)" onMouseOut="HideCont('a0',event)"><IMG NAME="a0" SRC="transp.gif" border=0 width=100 height=50></A></DIV></DIV></TD>
<!--end cell-->
<!--cell a1(tag:h2)-->
<TD align=center valign=middle><DIV ID="a1_cont" style="position: relative; height: 50px; width: 100px;"><DIV ID="a1_txt" STYLE="position: absolute; left: 0px; top: 0px; height: 50px; width: 100px; clip: rect(0px 100px 50px 0px); z-index: 1;"><TABLE><TD ID="a1_td" align=center valign=center width=95 height=45 class="inactTD">option A: probabilities</TD></TABLE></DIV><DIV ID="a1_box" STYLE="position: absolute; left: 0px; top: 0px; height: 50px; width: 100px; clip: rect(0px 100px 50px 0px); z-index: 2;"><TABLE><TD ID="a1_tdbox" align=center valign=center width=95 height=45 class="boxTD"></TD></TABLE></DIV><DIV ID="a1_img" STYLE="position: absolute; left: 0px; top: 0px; height: 50px; width: 100px; z-index: 5;"><A HREF="javascript:void(0);" NAME="a1" onMouseOver="ShowCont('a1',event)" onMouseOut="HideCont('a1',event)"><IMG NAME="a1" SRC="transp.gif" border=0 width=100 height=50></A></DIV></DIV></TD>
<!--end cell-->
<!--cell a2(tag:h3)-->
<TD align=center valign=middle><DIV ID="a2_cont" style="position: relative; height: 50px; width: 100px;"><DIV ID="a2_txt" STYLE="position: absolute; left: 0px; top: 0px; height: 50px; width: 100px; clip: rect(0px 100px 50px 0px); z-index: 1;"><TABLE><TD ID="a2_td" align=center valign=center width=95 height=45 class="inactTD"></TD></TABLE></DIV><DIV ID="a2_box" STYLE="position: absolute; left: 0px; top: 0px; height: 50px; width: 100px; clip: rect(0px 100px 50px 0px); z-index: 2;"><TABLE><TD ID="a2_tdbox" align=center valign=center width=95 height=45 class="boxTD"></TD></TABLE></DIV><DIV ID="a2_img" STYLE="position: absolute; left: 0px; top: 0px; height: 50px; width: 100px; z-index: 5;"><A HREF="javascript:void(0);" NAME="a2" onMouseOver="ShowCont('a2',event)" onMouseOut="HideCont('a2',event)"><IMG NAME="a2" SRC="transp.gif" border=0 width=100 height=50></A></DIV></DIV></TD>
<!--end cell-->
<!--cell a3(tag:h4)-->
<TD align=center valign=middle><DIV ID="a3_cont" style="position: relative; height: 50px; width: 100px;"><DIV ID="a3_txt" STYLE="position: absolute; left: 0px; top: 0px; height: 50px; width: 100px; clip: rect(0px 100px 50px 0px); z-index: 1;"><TABLE><TD ID="a3_td" align=center valign=center width=95 height=45 class="inactTD">Option B: outcomes</TD></TABLE></DIV><DIV ID="a3_box" STYLE="position: absolute; left: 0px; top: 0px; height: 50px; width: 100px; clip: rect(0px 100px 50px 0px); z-index: 2;"><TABLE><TD ID="a3_tdbox" align=center valign=center width=95 height=45 class="boxTD"></TD></TABLE></DIV><DIV ID="a3_img" STYLE="position: absolute; left: 0px; top: 0px; height: 50px; width: 100px; z-index: 5;"><A HREF="javascript:void(0);" NAME="a3" onMouseOver="ShowCont('a3',event)" onMouseOut="HideCont('a3',event)"><IMG NAME="a3" SRC="transp.gif" border=0 width=100 height=50></A></DIV></DIV></TD>
<!--end cell-->
<!--cell a4(tag:h5)-->
<TD align=center valign=middle><DIV ID="a4_cont" style="position: relative; height: 50px; width: 100px;"><DIV ID="a4_txt" STYLE="position: absolute; left: 0px; top: 0px; height: 50px; width: 100px; clip: rect(0px 100px 50px 0px); z-index: 1;"><TABLE><TD ID="a4_td" align=center valign=center width=95 height=45 class="inactTD">option B: probabilities</TD></TABLE></DIV><DIV ID="a4_box" STYLE="position: absolute; left: 0px; top: 0px; height: 50px; width: 100px; clip: rect(0px 100px 50px 0px); z-index: 2;"><TABLE><TD ID="a4_tdbox" align=center valign=center width=95 height=45 class="boxTD"></TD></TABLE></DIV><DIV ID="a4_img" STYLE="position: absolute; left: 0px; top: 0px; height: 50px; width: 100px; z-index: 5;"><A HREF="javascript:void(0);" NAME="a4" onMouseOver="ShowCont('a4',event)" onMouseOut="HideCont('a4',event)"><IMG NAME="a4" SRC="transp.gif" border=0 width=100 height=50></A></DIV></DIV></TD>
<!--end cell--></TR><TR>
<!--cell b0(tag:o_a1)-->
<TD align=center valign=middle><DIV ID="b0_cont" style="position: relative; height: 50px; width: 100px;"><DIV ID="b0_txt" STYLE="position: absolute; left: 0px; top: 0px; height: 50px; width: 100px; clip: rect(0px 100px 50px 0px); z-index: 1;"><TABLE><TD ID="b0_td" align=center valign=center width=95 height=45 class="actTD">+400</TD></TABLE></DIV><DIV ID="b0_box" STYLE="position: absolute; left: 0px; top: 0px; height: 50px; width: 100px; clip: rect(0px 100px 50px 0px); z-index: 2;"><TABLE><TD ID="b0_tdbox" align=center valign=center width=95 height=45 class="boxTD">Outcome Win</TD></TABLE></DIV><DIV ID="b0_img" STYLE="position: absolute; left: 0px; top: 0px; height: 50px; width: 100px; z-index: 5;"><A HREF="javascript:void(0);" NAME="b0" onMouseOver="ShowCont('b0',event)" onMouseOut="HideCont('b0',event)"><IMG NAME="b0" SRC="transp.gif" border=0 width=100 height=50></A></DIV></DIV></TD>
<!--end cell-->
<!--cell b1(tag:p_a1)-->
<TD align=center valign=middle><DIV ID="b1_cont" style="position: relative; height: 50px; width: 100px;"><DIV ID="b1_txt" STYLE="position: absolute; left: 0px; top: 0px; height: 50px; width: 100px; clip: rect(0px 100px 50px 0px); z-index: 1;"><TABLE><TD ID="b1_td" align=center valign=center width=95 height=45 class="actTD">35/36</TD></TABLE></DIV><DIV ID="b1_box" STYLE="position: absolute; left: 0px; top: 0px; height: 50px; width: 100px; clip: rect(0px 100px 50px 0px); z-index: 2;"><TABLE><TD ID="b1_tdbox" align=center valign=center width=95 height=45 class="boxTD">Probability Win</TD></TABLE></DIV><DIV ID="b1_img" STYLE="position: absolute; left: 0px; top: 0px; height: 50px; width: 100px; z-index: 5;"><A HREF="javascript:void(0);" NAME="b1" onMouseOver="ShowCont('b1',event)" onMouseOut="HideCont('b1',event)"><IMG NAME="b1" SRC="transp.gif" border=0 width=100 height=50></A></DIV></DIV></TD>
<!--end cell-->
<!--cell b2(tag:b2)-->
<TD align=center valign=middle><DIV ID="b2_cont" style="position: relative; height: 50px; width: 100px;"><DIV ID="b2_txt" STYLE="position: absolute; left: 0px; top: 0px; height: 50px; width: 100px; clip: rect(0px 100px 50px 0px); z-index: 1;"><TABLE><TD ID="b2_td" align=center valign=center width=95 height=45 class="inactTD"></TD></TABLE></DIV><DIV ID="b2_box" STYLE="position: absolute; left: 0px; top: 0px; height: 50px; width: 100px; clip: rect(0px 100px 50px 0px); z-index: 2;"><TABLE><TD ID="b2_tdbox" align=center valign=center width=95 height=45 class="boxTD"></TD></TABLE></DIV><DIV ID="b2_img" STYLE="position: absolute; left: 0px; top: 0px; height: 50px; width: 100px; z-index: 5;"><A HREF="javascript:void(0);" NAME="b2" onMouseOver="ShowCont('b2',event)" onMouseOut="HideCont('b2',event)"><IMG NAME="b2" SRC="transp.gif" border=0 width=100 height=50></A></DIV></DIV></TD>
<!--end cell-->
<!--cell b3(tag:o_b1)-->
<TD align=center valign=middle><DIV ID="b3_cont" style="position: relative; height: 50px; width: 100px;"><DIV ID="b3_txt" STYLE="position: absolute; left: 0px; top: 0px; height: 50px; width: 100px; clip: rect(0px 100px 50px 0px); z-index: 1;"><TABLE><TD ID="b3_td" align=center valign=center width=95 height=45 class="actTD">+1600</TD></TABLE></DIV><DIV ID="b3_box" STYLE="position: absolute; left: 0px; top: 0px; height: 50px; width: 100px; clip: rect(0px 100px 50px 0px); z-index: 2;"><TABLE><TD ID="b3_tdbox" align=center valign=center width=95 height=45 class="boxTD">Outcome Win</TD></TABLE></DIV><DIV ID="b3_img" STYLE="position: absolute; left: 0px; top: 0px; height: 50px; width: 100px; z-index: 5;"><A HREF="javascript:void(0);" NAME="b3" onMouseOver="ShowCont('b3',event)" onMouseOut="HideCont('b3',event)"><IMG NAME="b3" SRC="transp.gif" border=0 width=100 height=50></A></DIV></DIV></TD>
<!--end cell-->
<!--cell b4(tag:p_b1)-->
<TD align=center valign=middle><DIV ID="b4_cont" style="position: relative; height: 50px; width: 100px;"><DIV ID="b4_txt" STYLE="position: absolute; left: 0px; top: 0px; height: 50px; width: 100px; clip: rect(0px 100px 50px 0px); z-index: 1;"><TABLE><TD ID="b4_td" align=center valign=center width=95 height=45 class="actTD">11/36</TD></TABLE></DIV><DIV ID="b4_box" STYLE="position: absolute; left: 0px; top: 0px; height: 50px; width: 100px; clip: rect(0px 100px 50px 0px); z-index: 2;"><TABLE><TD ID="b4_tdbox" align=center valign=center width=95 height=45 class="boxTD">Probabilty Win</TD></TABLE></DIV><DIV ID="b4_img" STYLE="position: absolute; left: 0px; top: 0px; height: 50px; width: 100px; z-index: 5;"><A HREF="javascript:void(0);" NAME="b4" onMouseOver="ShowCont('b4',event)" onMouseOut="HideCont('b4',event)"><IMG NAME="b4" SRC="transp.gif" border=0 width=100 height=50></A></DIV></DIV></TD>
<!--end cell--></TR><TR>
<!--cell c0(tag:o_a2)-->
<TD align=center valign=middle><DIV ID="c0_cont" style="position: relative; height: 50px; width: 100px;"><DIV ID="c0_txt" STYLE="position: absolute; left: 0px; top: 0px; height: 50px; width: 100px; clip: rect(0px 100px 50px 0px); z-index: 1;"><TABLE><TD ID="c0_td" align=center valign=center width=95 height=45 class="actTD">-100</TD></TABLE></DIV><DIV ID="c0_box" STYLE="position: absolute; left: 0px; top: 0px; height: 50px; width: 100px; clip: rect(0px 100px 50px 0px); z-index: 2;"><TABLE><TD ID="c0_tdbox" align=center valign=center width=95 height=45 class="boxTD">Outcome Lose</TD></TABLE></DIV><DIV ID="c0_img" STYLE="position: absolute; left: 0px; top: 0px; height: 50px; width: 100px; z-index: 5;"><A HREF="javascript:void(0);" NAME="c0" onMouseOver="ShowCont('c0',event)" onMouseOut="HideCont('c0',event)"><IMG NAME="c0" SRC="transp.gif" border=0 width=100 height=50></A></DIV></DIV></TD>
<!--end cell-->
<!--cell c1(tag:p_a2)-->
<TD align=center valign=middle><DIV ID="c1_cont" style="position: relative; height: 50px; width: 100px;"><DIV ID="c1_txt" STYLE="position: absolute; left: 0px; top: 0px; height: 50px; width: 100px; clip: rect(0px 100px 50px 0px); z-index: 1;"><TABLE><TD ID="c1_td" align=center valign=center width=95 height=45 class="actTD">1/36</TD></TABLE></DIV><DIV ID="c1_box" STYLE="position: absolute; left: 0px; top: 0px; height: 50px; width: 100px; clip: rect(0px 100px 50px 0px); z-index: 2;"><TABLE><TD ID="c1_tdbox" align=center valign=center width=95 height=45 class="boxTD">Probability Lose</TD></TABLE></DIV><DIV ID="c1_img" STYLE="position: absolute; left: 0px; top: 0px; height: 50px; width: 100px; z-index: 5;"><A HREF="javascript:void(0);" NAME="c1" onMouseOver="ShowCont('c1',event)" onMouseOut="HideCont('c1',event)"><IMG NAME="c1" SRC="transp.gif" border=0 width=100 height=50></A></DIV></DIV></TD>
<!--end cell-->
<!--cell c2(tag:c2)-->
<TD align=center valign=middle><DIV ID="c2_cont" style="position: relative; height: 50px; width: 100px;"><DIV ID="c2_txt" STYLE="position: absolute; left: 0px; top: 0px; height: 50px; width: 100px; clip: rect(0px 100px 50px 0px); z-index: 1;"><TABLE><TD ID="c2_td" align=center valign=center width=95 height=45 class="inactTD"></TD></TABLE></DIV><DIV ID="c2_box" STYLE="position: absolute; left: 0px; top: 0px; height: 50px; width: 100px; clip: rect(0px 100px 50px 0px); z-index: 2;"><TABLE><TD ID="c2_tdbox" align=center valign=center width=95 height=45 class="boxTD"></TD></TABLE></DIV><DIV ID="c2_img" STYLE="position: absolute; left: 0px; top: 0px; height: 50px; width: 100px; z-index: 5;"><A HREF="javascript:void(0);" NAME="c2" onMouseOver="ShowCont('c2',event)" onMouseOut="HideCont('c2',event)"><IMG NAME="c2" SRC="transp.gif" border=0 width=100 height=50></A></DIV></DIV></TD>
<!--end cell-->
<!--cell c3(tag:o_b2)-->
<TD align=center valign=middle><DIV ID="c3_cont" style="position: relative; height: 50px; width: 100px;"><DIV ID="c3_txt" STYLE="position: absolute; left: 0px; top: 0px; height: 50px; width: 100px; clip: rect(0px 100px 50px 0px); z-index: 1;"><TABLE><TD ID="c3_td" align=center valign=center width=95 height=45 class="actTD">-150</TD></TABLE></DIV><DIV ID="c3_box" STYLE="position: absolute; left: 0px; top: 0px; height: 50px; width: 100px; clip: rect(0px 100px 50px 0px); z-index: 2;"><TABLE><TD ID="c3_tdbox" align=center valign=center width=95 height=45 class="boxTD">Outcome Lose</TD></TABLE></DIV><DIV ID="c3_img" STYLE="position: absolute; left: 0px; top: 0px; height: 50px; width: 100px; z-index: 5;"><A HREF="javascript:void(0);" NAME="c3" onMouseOver="ShowCont('c3',event)" onMouseOut="HideCont('c3',event)"><IMG NAME="c3" SRC="transp.gif" border=0 width=100 height=50></A></DIV></DIV></TD>
<!--end cell-->
<!--cell c4(tag:p_b2)-->
<TD align=center valign=middle><DIV ID="c4_cont" style="position: relative; height: 50px; width: 100px;"><DIV ID="c4_txt" STYLE="position: absolute; left: 0px; top: 0px; height: 50px; width: 100px; clip: rect(0px 100px 50px 0px); z-index: 1;"><TABLE><TD ID="c4_td" align=center valign=center width=95 height=45 class="actTD">25/36</TD></TABLE></DIV><DIV ID="c4_box" STYLE="position: absolute; left: 0px; top: 0px; height: 50px; width: 100px; clip: rect(0px 100px 50px 0px); z-index: 2;"><TABLE><TD ID="c4_tdbox" align=center valign=center width=95 height=45 class="boxTD">Probability Lose</TD></TABLE></DIV><DIV ID="c4_img" STYLE="position: absolute; left: 0px; top: 0px; height: 50px; width: 100px; z-index: 5;"><A HREF="javascript:void(0);" NAME="c4" onMouseOver="ShowCont('c4',event)" onMouseOut="HideCont('c4',event)"><IMG NAME="c4" SRC="transp.gif" border=0 width=100 height=50></A></DIV></DIV></TD>
<!--end cell--></TR></TABLE>
<!-- END MOUSELAB TABLE -->
<!--BEGIN postHTML-->
<p>How much would you pay to buy/play each gamble (like buying a lottery ticket)?</p>
<p> I would pay <INPUT type=Text size=10 name='wtpa' value=''> for gamble A</p>
<p> I would pay <INPUT type=Text size=10 name='wtpb' value=''> for gamble B</p>
<!--END postHTML--><INPUT type="submit" value="Next Page" onClick=timefunction('submit','submit','submit')></FORM></body></html>
