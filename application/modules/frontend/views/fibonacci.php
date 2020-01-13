<div class="container Fibonacci_calci">
	
<script>
  // Do not copy the code below. Legal action will be taken without further notice.



var decPlac = 4;

function toDec(num,place) {

return (Math.round(Math.pow(10,place) * num) / Math.pow(10,place));

}

function a_minus_b(form) {

var a=Number(form.a.value);

var b=Number(form.b.value);

var c=a-b;

form.ans.value=toDec(c,decPlac);

}

function c_times_e(form) {

var c=Number(form.ans.value);

var e=Number(form.e.value);

var f=c*e;

form.ans1.value=toDec(f,decPlac);

}

function a_minus_f(form) {

var a=Number(form.a.value);

var f=Number(form.ans1.value);

var g=a-f;

form.johnperson.value=toDec(g,decPlac);

}

function c_times_i(form) {

var c=Number(form.ans.value);

var i=Number(form.i.value);

var h=c*i;

form.ans2.value=toDec(h,decPlac);

}

function a_minus_h(form) {

var a=Number(form.a.value);

var h=Number(form.ans2.value);

var t=a-h;

form.johnperson1.value=toDec(t,decPlac);

}

function c_times_j(form) {

var c=Number(form.ans.value);

var j=Number(form.j.value);

var o=c*j;

form.ans3.value=toDec(o,decPlac);

}

function a_minus_o(form) {

var a=Number(form.a.value);

var o=Number(form.ans3.value);

var u=a-o;

form.johnperson2.value=toDec(u,decPlac);

}

function c_times_k(form) {

var c=Number(form.ans.value);

var k=Number(form.k.value);

var p=c*k;

form.ans4.value=toDec(p,decPlac);

}

function a_minus_p(form) {

var a=Number(form.a.value);

var p=Number(form.ans4.value);

var v=a-p;

form.johnperson3.value=toDec(v,decPlac);

}

function c_times_l(form) {

var c=Number(form.ans.value);

var l=Number(form.l.value);

var q=c*l;

form.ans5.value=toDec(q,decPlac);

}

function a_minus_q(form) {

var a=Number(form.a.value);

var q=Number(form.ans5.value);

var w=a-q;

form.johnperson4.value=toDec(w,decPlac);

}

function c_times_m(form) {

var c=Number(form.ans.value);

var m=Number(form.m.value);

var r=c*m;

form.ans6.value=toDec(r,decPlac);

}

function a_minus_r(form) {

var a=Number(form.a.value);

var r=Number(form.ans6.value);

var y=a-r;

form.johnperson5.value=toDec(y,decPlac);

}

function c_times_n(form) {

var c=Number(form.ans.value);

var n=Number(form.n.value);

var s=c*n;

form.ans7.value=toDec(s,decPlac);

}

function a_minus_s(form) {

var a=Number(form.a.value);

var s=Number(form.ans7.value);

var z=a-s;

form.johnperson6.value=toDec(z,decPlac);

}

function q_plus_d(form) {

var d=Number(form.d.value);

var q=Number(form.ans5.value);

var aa=q+d;

form.johnperson7.value=toDec(aa,decPlac);

}

function r_plus_d(form) {

var d=Number(form.d.value);

var r=Number(form.ans6.value);

var bb=r+d;

form.johnperson8.value=toDec(bb,decPlac);

}

function c_times_ll(form) {

var c=Number(form.ans.value);

var ll=Number(form.ll.value);

var qq=c*ll;

form.ans8.value=toDec(qq,decPlac);

}

function qq_plus_d(form) {

var d=Number(form.d.value);

var qq=Number(form.ans8.value);

var dd=qq+d;

form.johnperson10.value=toDec(dd,decPlac);

}

function c_times_nn(form) {

var c=Number(form.ans.value);

var nn=Number(form.nn.value);

var ss=c*nn;

form.ans9.value=toDec(ss,decPlac);

}

function ss_plus_d(form) {

var d=Number(form.d.value);

var ss=Number(form.ans9.value);

var cc=ss+d;

form.johnperson9.value=toDec(cc,decPlac);

}

function c_times_nnn(form) {

var c=Number(form.ans.value);

var nnn=Number(form.nnn.value);

var sss=c*nnn;

form.ans10.value=toDec(sss,decPlac);

}

function sss_plus_d(form) {

var d=Number(form.d.value);

var sss=Number(form.ans10.value);

var ee=sss+d;

form.johnperson11.value=toDec(ee,decPlac);

}


</script>

<div align="center">
<div class="table-responsive">
<form name="formx">
<h1 align="center" style="color: rgb(23,113,154);font-weight: 700;letter-spacing: -0.035em;padding-top: 30px;padding-bottom: 18px;">Fibonacci Calculator</h1>
  <p align="center"><font face="Arial" size="2">Fibonacci Calculator Instructions</font></p>
  <p align="center"><font face="Arial" size="2">Fibonacci Calculator for 
  correction levels: Enter the values for Market High (B) and Low (A), and 
  press the Submit button. <br>
  For a second calculation press the Reset button.</font></p>
  <p align="center"><font face="Arial" size="2">Fibonacci Calculator for 
  extensions levels: Enter the values for Market High (B), Low (A),&nbsp; and 
  the correction level or value (C), <br>
  and press the Submit button. For a second 
  calculation press the Reset button.</font></p>
  
<center>
  <table border="3" cellpadding="2" cellspacing="0" style="border-collapse: collapse;    box-shadow: 0 8px 28px 0 rgba(0, 0, 0, 0.15);margin-top: 50px;" bordercolor="#000000" width="469" id="AutoNumber1" bgcolor="#000000" height="423" bordercolorlight="#000000" align="center">
    <tbody><tr>
      <td width="445" height="16" align="center" colspan="5" bgcolor="#FFFFFF" bordercolor="#FFFFFF">
      <b><font face="Arial" size="2">Personsplanet.com Fibonacci Calculator</font></b></td>
    </tr>
    <tr>
      <td width="445" height="16" align="center" colspan="5"><b>
      <font face="Arial" size="2" color="#FFFFFF">Fibonacci Retracement - 
      Uptrends &amp; Downtrends</font></b></td>
    </tr>
    <tr>
      <td width="178" height="22" bgcolor="#FFFF00" bordercolor="#FFFF66" colspan="3">
      <p align="center">
      <b><font face="Arial" size="2">Correction Levels</font></b></p></td>
      <td width="261" height="22" bgcolor="#FFFF00" bordercolor="#FFFF66" colspan="2" align="center">
      <b><font face="Arial" size="2">Extensions Levels</font></b></td>
    </tr>
    <tr>
      <td width="118" height="22" bgcolor="#FFFFFF" bordercolor="#FFFFFF" colspan="2">&nbsp;
      </td>
      <td width="60" height="22" bgcolor="#FFFFFF" bordercolor="#FFFFFF">&nbsp;
      </td>
      <td width="136" height="22" bgcolor="#808080" bordercolor="#808080">&nbsp;
      </td>
      <td width="125" height="22" bgcolor="#808080" bordercolor="#808080">&nbsp;</td>
    </tr>
    <tr>
      <td width="89" height="22" bgcolor="#FFFFFF" bordercolor="#FFFFFF">
      <p align="right"><b><font face="Arial" size="2">Market High</font></b></p></td>
      <td width="29" height="22" bgcolor="#FFFFFF" bordercolor="#FFFFFF">
      <p align="center">
      <input type="number" size="10" value="0" name="a" style="float: right"></p></td>
      <td width="60" height="22" bgcolor="#FFFFFF" bordercolor="#FFFFFF">
      </td>
      <td width="136" height="22" bgcolor="#808080" bordercolor="#808080">
      <p align="right"><b><font face="Arial" size="2">Retracement level</font></b></p></td>
      <td width="125" height="22" bgcolor="#808080" bordercolor="#808080">
 <input type="number" size="10" value="0" name="d" style="float: left"></td>
    </tr>
    <tr>
      <td width="89" height="20" bgcolor="#FFFFFF" bordercolor="#FFFFFF">
      <p align="right"><b><font face="Arial" size="2">Market Low</font></b></p></td>
      <td width="29" height="20" bgcolor="#FFFFFF" bordercolor="#FFFFFF">
      <p align="center">
 <input type="number" size="10" value="0" name="b" style="float: right"></p></td>
      <td width="60" height="20" bgcolor="#FFFFFF" bordercolor="#FFFFFF">
      </td>
      <td width="136" height="20" bgcolor="#808080" bordercolor="#808080">&nbsp;
 </td>
      <td width="125" height="20" bgcolor="#808080" bordercolor="#808080">&nbsp;</td>
    </tr>
        <tr>
      <td width="89" height="26" bgcolor="#FFFFFF" bordercolor="#FFFFFF">
      <input type="reset" value="  Reset  " class="btn-primary" name="Reset" style="float: right"></td>
      <td width="29" height="26" bgcolor="#FFFFFF" bordercolor="#FFFFFF">  
      <input type="button" class="btn-success" value=" Calculate corrections  " onclick="a_minus_b(this.form) 
      &amp; c_times_e(this.form) &amp; a_minus_f(this.form) &amp; c_times_i(this.form) &amp; a_minus_h(this.form) &amp; c_times_j(this.form) &amp; a_minus_o(this.form) &amp; c_times_k(this.form)
      &amp; a_minus_p(this.form) &amp; c_times_l(this.form) &amp; a_minus_q(this.form) &amp; c_times_m(this.form) &amp; a_minus_r(this.form) &amp; c_times_n(this.form) &amp; a_minus_s(this.form)" style="float: left"></td>
      <td width="60" height="26" bgcolor="#FFFFFF" bordercolor="#FFFFFF">  
      <p align="left">  
      </p></td>
      <td width="136" height="26" bgcolor="#808080" bordercolor="#808080">  
      <p align="left">
      <input type="reset" class="btn-primary" value="  Reset  " name="Reset1" style="float: right"></p></td>
      <td width="125" height="26" bgcolor="#808080" bordercolor="#808080">  
      <input type="button" class="btn-success" value=" Calculate extentions " onclick="a_minus_b(this.form) &amp; c_times_l(this.form) &amp; c_times_m(this.form) &amp; c_times_nn(this.form)
      &amp; c_times_ll(this.form) &amp; c_times_nnn(this.form) &amp; q_plus_d(this.form) &amp; qq_plus_d(this.form) &amp; ss_plus_d(this.form) &amp; sss_plus_d(this.form) 
      &amp; r_plus_d(this.form)" style="float: left"></td>
    </tr>
        <tr>
      <td width="89" height="22" align="right" bgcolor="#000066" bordercolor="#000066">
      <b><font face="Arial" size="2" color="#FFFFFF">38.2%</font></b></td>
      <td width="29" height="22" align="right" bgcolor="#000066" bordercolor="#000066">
      <input type="number" name="johnperson" value="0" size="10" style="float: right"></td>
      <td width="60" height="22" bgcolor="#000066" bordercolor="#000066">
      </td>
      <td width="136" height="22" bgcolor="#0000FF" bordercolor="#0000FF">
 	<p align="right"><font color="#FFFFFF" face="Arial"><b>
 	<input type="hidden" name="e" value=".382" size="5">
 	<input type="hidden" name="i" value=".50" size="5">
	<input type="hidden" name="j" value=".618" size="5">
 	<input type="hidden" name="k" value=".786" size="5">
 	<input type="hidden" name="l" value="1" size="5">
 	<input type="hidden" name="m" value="1.27" size="5">
 	<input type="hidden" name="n" value="1.62" size="5">
 	<input type="hidden" name="nn" value="1.618" size="5">
	<input type="hidden" name="ll" value="2" size="5">
	<input type="hidden" name="nnn" value="2.618" size="5">
 	<font size="2">100%</font></b></font></p></td>
      <td width="125" height="22" bgcolor="#0000FF" bordercolor="#0000FF">
 	  <input type="number" name="johnperson7" value="0" size="10" style="float: right"></td>
    </tr>
    <tr>
      <td width="89" height="22" align="right" bgcolor="#000066" bordercolor="#000066">
      <b><font face="Arial" size="2" color="#FFFFFF">50.0%</font></b></td>
      <td width="29" height="22" align="right" bgcolor="#000066" bordercolor="#000066">
      <input type="number" name="johnperson1" value="0" size="10" style="float: right"></td>
      <td width="60" height="22" bgcolor="#000066" bordercolor="#000066">
      </td>
      <td width="136" height="22" bgcolor="#0000FF" bordercolor="#0000FF">
   <p align="right">
   <font face="Arial" color="#FFFFFF">
   <b>
   	<input type="hidden" value="0" name="ans" size="10"><font size="2">1.27%</font></b></font></p></td>
   	<input type="hidden" value="0" name="ans1" size="10">
   	<input type="hidden" value="0" name="ans2" size="10">
  	<input type="hidden" value="0" name="ans3" size="10">
  	<input type="hidden" value="0" name="ans4" size="10">
  	<input type="hidden" value="0" name="ans5" size="10">
  	<input type="hidden" value="0" name="ans6" size="10">
  	<input type="hidden" value="0" name="ans7" size="10">
 	 <input type="hidden" value="0" name="ans8" size="10">
	<input type="hidden" value="0" name="ans9" size="10">
	<input type="hidden" value="0" name="ans10" size="10">   
      <td width="125" height="22" bgcolor="#0000FF" bordercolor="#0000FF">
      <input type="number" name="johnperson8" value="0" size="10" style="float: right"></td>
       </tr>
    <tr>
      <td width="89" height="22" align="right" bgcolor="#000066" bordercolor="#000066">
      <b><font face="Arial" size="2" color="#FFFFFF">61.8%</font></b></td>
      <td width="29" height="22" align="right" bgcolor="#000066" bordercolor="#000066">
      <input type="number" name="johnperson2" value="0" size="10" style="float: right"></td>
      <td width="60" height="22" bgcolor="#000066" bordercolor="#000066">
      </td>
      <td width="136" height="22" bgcolor="#0000FF" bordercolor="#0000FF">
   <p align="right"><b><font face="Arial" size="2" color="#FFFFFF">1.618%</font></b></p></td>
      <td width="125" height="22" bgcolor="#0000FF" bordercolor="#0000FF">
      <input type="number" name="johnperson9" value="0" size="10" style="float: right"></td>
    </tr>
    <tr>
      <td width="89" height="22" align="right" bgcolor="#000066" bordercolor="#000066">
      <b><font face="Arial" size="2" color="#FFFFFF">78.6%</font></b></td>
      <td width="29" height="22" align="right" bgcolor="#000066" bordercolor="#000066">
      <input type="number" name="johnperson3" value="0" size="10" style="float: right"></td>
      <td width="60" height="22" bgcolor="#000066" bordercolor="#000066">
      </td>
      <td width="136" height="22" bgcolor="#0000FF" bordercolor="#0000FF">
   <p align="right"><b><font face="Arial" size="2" color="#FFFFFF">2.00%</font></b></p></td>
      <td width="125" height="22" bgcolor="#0000FF" bordercolor="#0000FF">
      <input type="number" name="johnperson10" value="0" size="10" style="float: right"></td>
    </tr>
    <tr>
      <td width="89" height="22" align="right" bgcolor="#000066" bordercolor="#000066">
      <b><font face="Arial" size="2" color="#FFFFFF">100%</font></b></td>
      <td width="29" height="22" align="right" bgcolor="#000066" bordercolor="#000066">
      <input type="number" name="johnperson4" value="0" size="10" style="float: right"></td>
      <td width="60" height="22" bgcolor="#000066" bordercolor="#000066">
      </td>
      <td width="136" height="22" bgcolor="#0000FF" bordercolor="#0000FF">
   <p align="right"><b><font face="Arial" size="2" color="#FFFFFF">2.618%</font></b></p></td>
      <td width="125" height="22" bgcolor="#0000FF" bordercolor="#0000FF">
      <input type="number" name="johnperson11" value="0" size="10" style="float: right"></td>
    </tr>
    <tr>
      <td width="89" height="22" align="right" bgcolor="#000066" bordercolor="#000066">
      <b><font face="Arial" size="2" color="#FFFFFF">127.0%</font></b></td>
      <td width="29" height="22" align="right" bgcolor="#000066" bordercolor="#000066">
      <input type="number" name="johnperson5" value="0" size="10" style="float: right"></td>
      <td width="60" height="22" bgcolor="#000066" bordercolor="#000066">
      </td>
      <td width="136" height="22" bgcolor="#0000FF" bordercolor="#0000FF">&nbsp;
   </td>
      <td width="125" height="22" bgcolor="#0000FF" bordercolor="#0000FF">&nbsp;
   </td>
    </tr>
    <tr>
      <td width="89" height="22" align="right" bgcolor="#000066" bordercolor="#000066">
      <b><font face="Arial" size="2" color="#FFFFFF">162.0%</font></b></td>
      <td width="29" height="22" align="right" bgcolor="#000066" bordercolor="#000066">
      <input type="number" name="johnperson6" value="0" size="10" style="float: right"></td>
      <td width="60" height="22" bgcolor="#000066" bordercolor="#000066">
      </td>
      <td width="136" height="22" bgcolor="#0000FF" bordercolor="#0000FF">&nbsp;
   </td>
      <td width="125" height="22" bgcolor="#0000FF" bordercolor="#0000FF">&nbsp;
   </td>
    </tr>
   
        <tr>
      <td width="445" height="19" colspan="5">
      <p align="center"><font face="Arial" size="1" color="#FFFFFF">
      Personsplanet.com Fibonacci Calculator is the property of John Person Inc 
      <br>
      Â© 
      Copyright 2005-19 All rights reserved written by M. Person.</font></p></td>
    </tr>
    <tr>
      <td width="89" height="18">&nbsp;</td>
      <td width="29" height="18">&nbsp;</td>
      <td width="60" height="18">&nbsp;
      </td>
      <td width="136" height="18">&nbsp;
      </td>
      <td width="125" height="18">&nbsp;</td>
    </tr>
    </tbody></table>
&nbsp;&nbsp;&nbsp;

</center>

</form>
</div>
</div>


	</div>