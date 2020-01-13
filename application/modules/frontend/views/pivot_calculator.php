<div class="container pivot_calci">
<h1 align="center" style="color: rgb(23,113,154);font-weight: 700;letter-spacing: -0.035em;padding-top: 30px;padding-bottom: 18px;">Pivot Calculator</h1>
<div class="table-responsive">
<table width="100%" class="table" border="0" align="center">
  <tbody>
    <tr>
      <th scope="col"></th>
      <td>
        <center>
          <form name="formx">
            <table
              width="490"
              border="1"
              cellpadding="2"
              cellspacing="0"
              bordercolor="#111111"
              bordercolorlight="#345AD6"
              bgcolor="#345AD6"
              id="AutoNumber1"
              style="border-collapse: collapse;" class="pivot_table">
              <tbody>
                <tr>
                  <td height="16" align="center" colspan="4">
                    <em
                      ><strong>
                        <font face="Arial" color="#FFFFFF"
                          >Nationalfutures.com pivot point calculator</font
                        ></strong
                      ></em
                    >
                  </td>
                </tr>
                <tr>
                  <td height="18" colspan="4" bgcolor="#FFFFFF">
                    <span class="hp-p1"
                      ><font face="Arial"
                        >In order to use the pivot point calculator, enter the
                        values for Market <b>High, Low, and Close</b>, to the
                        second decimal point (i.e.. 127.00) and then simply
                        press the <b>Submit button</b>. For a second calculation
                        press the <b>Reset button </b>to clear the data.</font
                      ></span
                    >
                  </td>
                </tr>
                <tr>
                  <td width="30%" height="18">&nbsp;</td>
                  <td width="9%" height="18">&nbsp;</td>
                  <td width="33%" height="18">&nbsp;</td>
                  <td width="28%" height="18">&nbsp;</td>
                </tr>
                <tr>
                  <td width="30%" height="22">
                    <p align="right">
                      <strong
                        ><font face="Arial" color="#FFFFFF"
                          >Market High</font
                        ></strong
                      >
                    </p>
                  </td>
                  <td width="9%" height="22">
                    <p align="right" class="style19"></p>
                  </td>
                  <td width="33%" height="22">
                    <input
                      name="a"
                      type="number"
                      style="float: right"
                      value="0"
                      size="15"
                    />
                  </td>
                  <td width="28%" height="22">&nbsp;</td>
                </tr>
                <tr>
                  <td width="30%" height="22">
                    <p align="right" class="style19">
                      <b
                        ><font face="Arial" color="#FFFFFF">Market Low</font></b
                      >
                    </p>
                  </td>
                  <td width="9%" height="22">&nbsp;</td>
                  <td width="33%" height="22">
                    <input
                      name="b"
                      type="number"
                      style="float: right"
                      value="0"
                      size="15"
                    />
                  </td>
                  <td width="28%" height="22">&nbsp;</td>
                </tr>
                <tr>
                  <td width="30%" height="22">
                    <p align="right" class="style19">
                      <b
                        ><font face="Arial" color="#FFFFFF"
                          >Market Close</font
                        ></b
                      >
                    </p>
                  </td>
                  <td width="9%" height="22">&nbsp;</td>
                  <td width="33%" height="22">
                    <span class="style19">
                      <input
                        type="number"
                        name="d"
                        size="15"
                        value="0"
                        style="float: right"
                      />
                      &nbsp;
                    </span>
                  </td>
                  <td width="28%" height="22">&nbsp;</td>
                </tr>
                <tr>
                  <td width="30%" height="26">&nbsp;</td>
                  <td width="9%" height="26">&nbsp;</td>
                  <td width="33%" height="26">
                    <input
                      type="button"
                      style="float: right"
                      onclick="a_plus_b_plus_d(this.form) 
      &amp; c_div_e(this.form) &amp; f_times_h(this.form) &amp; g_minus_b(this.form) &amp; f_plus_a(this.form) 
      &amp;  j_minus_b(this.form) &amp; g_minus_a(this.form) &amp; f_minus_a(this.form) &amp; m_plus_b(this.form) 
      &amp; f_minus_b(this.form) &amp; x_plus_k(this.form) &amp; k_minus_l(this.form) &amp; f_minus_u(this.form) "
                      value=" Submit  "
                    />
                  </td>

                  <td width="28%" height="26">
                    <input name="Reset" type="reset" value="  Reset  " />
                  </td>
                </tr>
                <tr>
                  <td
                    width="30%"
                    height="22"
                    align="right"
                    bgcolor="#00FF00"
                    bordercolor="#00FF00"
                  >
                    <span class="style19"
                      ><b><font face="Arial" color="#FFFFFF">R3</font></b></span
                    >
                  </td>
                  <td
                    width="9%"
                    height="22"
                    align="right"
                    bgcolor="#00FF00"
                    bordercolor="#00FF00"
                  >
                    &nbsp;
                  </td>
                  <td
                    width="33%"
                    height="22"
                    bgcolor="#00FF00"
                    bordercolor="#00FF00"
                  >
                    <input
                      name="nationalfutures6"
                      type="number"
                      style="float: right"
                      value="0"
                      size="15"
                    />
                  </td>
                  <td
                    width="28%"
                    height="22"
                    bgcolor="#00FF00"
                    bordercolor="#00FF00"
                  >
                    <input name="ans4" type="hidden" value="0" size="10" />
                  </td>
                </tr>
                <tr>
                  <td
                    width="30%"
                    height="22"
                    align="right"
                    bgcolor="#00FF00"
                    bordercolor="#00FF00"
                  >
                    <span class="style19"
                      ><b><font face="Arial" color="#FFFFFF">R2</font></b></span
                    >
                  </td>
                  <td
                    width="9%"
                    height="22"
                    align="right"
                    bgcolor="#00FF00"
                    bordercolor="#00FF00"
                  >
                    &nbsp;
                  </td>
                  <td
                    width="33%"
                    height="22"
                    bgcolor="#00FF00"
                    bordercolor="#00FF00"
                  >
                    <input
                      name="nationalfutures2"
                      type="number"
                      style="float: right"
                      value="0"
                      size="15"
                    />
                  </td>
                  <td
                    width="28%"
                    height="22"
                    bgcolor="#00FF00"
                    bordercolor="#00FF00"
                  >
                    <input name="e" type="hidden" value="3" size="5" />
                  </td>
                </tr>
                <tr>
                  <td
                    width="30%"
                    height="22"
                    align="right"
                    bgcolor="#00FF00"
                    bordercolor="#00FF00"
                  >
                    <span class="style19"
                      ><b><font face="Arial" color="#FFFFFF">R1</font></b></span
                    >
                  </td>
                  <td
                    width="9%"
                    height="22"
                    align="right"
                    bgcolor="#00FF00"
                    bordercolor="#00FF00"
                  >
                    &nbsp;
                  </td>
                  <td
                    width="33%"
                    height="22"
                    bgcolor="#00FF00"
                    bordercolor="#00FF00"
                  >
                    <input
                      name="nationalfutures1"
                      type="number"
                      style="float: right"
                      value="0"
                      size="15"
                    />
                  </td>
                  <td
                    width="28%"
                    height="22"
                    bgcolor="#00FF00"
                    bordercolor="#00FF00"
                  >
                    <input name="ans" type="hidden" value="0" size="10" />
                  </td>
                </tr>
                <tr>
                  <td width="30%" height="7" align="right">&nbsp;</td>
                  <td width="9%" height="7" align="right">&nbsp;</td>
                  <td width="33%" height="7">&nbsp;</td>
                  <td width="28%" height="7">&nbsp;</td>
                </tr>
                <tr>
                  <td width="30%" height="22" align="right" class="style19">
                    <b>
                      <font face="Arial" color="#FFFFFF">Pivot Point</font></b
                    >
                  </td>
                  <td width="9%" height="22" align="right">&nbsp;</td>
                  <td width="33%" height="22">
                    <input
                      name="nationalfutures"
                      type="number"
                      style="float: right"
                      value="0"
                      size="15"
                    />
                  </td>
                  <td width="28%" height="22">
                    <input name="ans1" type="hidden" value="0" size="10" />
                  </td>
                </tr>
                <tr>
                  <td width="30%" height="6" align="right">&nbsp;</td>
                  <td width="9%" height="6" align="right">&nbsp;</td>
                  <td width="33%" height="6">&nbsp;</td>
                  <td width="28%" height="6">
                    <input name="h" type="hidden" value="2" size="5" />
                  </td>
                </tr>
                <tr>
                  <td
                    width="30%"
                    height="22"
                    align="right"
                    bgcolor="#FF0000"
                    bordercolor="#FF0000"
                  >
                    <span class="style19"
                      ><b><font face="Arial" color="#FFFFFF">S1</font></b></span
                    >
                  </td>
                  <td
                    width="9%"
                    height="22"
                    align="right"
                    bgcolor="#FF0000"
                    bordercolor="#FF0000"
                  >
                    &nbsp;
                  </td>
                  <td
                    width="33%"
                    height="22"
                    bgcolor="#FF0000"
                    bordercolor="#FF0000"
                  >
                    <input
                      name="nationalfutures3"
                      type="number"
                      style="float: right"
                      value="0"
                      size="15"
                    />
                  </td>
                  <td
                    width="28%"
                    height="22"
                    bgcolor="#FF0000"
                    bordercolor="#FF0000"
                  >
                    <input name="ans2" type="hidden" value="0" size="10" />
                  </td>
                </tr>
                <tr>
                  <td
                    width="30%"
                    height="22"
                    align="right"
                    bgcolor="#FF0000"
                    bordercolor="#FF0000"
                  >
                    <span class="style19"
                      ><b><font face="Arial" color="#FFFFFF">S2</font></b></span
                    >
                  </td>
                  <td
                    width="9%"
                    height="22"
                    align="right"
                    bgcolor="#FF0000"
                    bordercolor="#FF0000"
                  >
                    &nbsp;
                  </td>
                  <td
                    width="33%"
                    height="22"
                    bgcolor="#FF0000"
                    bordercolor="#FF0000"
                  >
                    <input
                      name="nationalfutures5"
                      type="number"
                      style="float: right"
                      value="0"
                      size="15"
                    />
                  </td>
                  <td
                    width="28%"
                    height="22"
                    bgcolor="#FF0000"
                    bordercolor="#FF0000"
                  >
                    <input name="ans3" type="hidden" value="0" size="10" />
                  </td>
                </tr>
                <tr>
                  <td
                    width="30%"
                    height="22"
                    align="right"
                    bgcolor="#FF0000"
                    bordercolor="#FF0000"
                  >
                    <span class="style19"
                      ><b><font face="Arial" color="#FFFFFF">S3</font></b></span
                    >
                  </td>
                  <td
                    width="9%"
                    height="22"
                    align="right"
                    bgcolor="#FF0000"
                    bordercolor="#FF0000"
                  >
                    &nbsp;
                  </td>
                  <td
                    width="33%"
                    height="22"
                    bgcolor="#FF0000"
                    bordercolor="#FF0000"
                  >
                    <input
                      name="nationalfutures7"
                      type="number"
                      style="float: right"
                      value="0"
                      size="15"
                    />
                  </td>
                  <td
                    width="28%"
                    height="22"
                    bgcolor="#FF0000"
                    bordercolor="#FF0000"
                  >
                    <input name="ans5" type="hidden" value="0" size="10" />
                  </td>
                </tr>
                <tr>
                  <td width="30%" height="19">&nbsp;</td>
                  <td width="9%" height="19">&nbsp;</td>
                  <td width="33%" height="19">&nbsp;</td>
                  <td width="28%" height="19">&nbsp;</td>
                </tr>
                <tr>
                  <td height="17" colspan="4">
                    <p align="center" class="hp-p1">
                      <font face="Arial" color="#FFFFFF"
                        >Nationalfutures.com Pivot Calculator is the property of
                        John Person Inc Â© Copyright 2005-11 All rights reserved
                        written by M. Person.</font
                      >
                    </p>
                  </td>
                </tr>
              </tbody>
            </table>
            &nbsp;&nbsp;<span class="style20">&nbsp; </span
            ><p><span class="style9"
              >Copyright John Person Inc., 2004-2018 -- Code Written by M.
              Person</p></span
            >
          </form>
        </center>

        <!-- Script Size:  1.72 KB -->
      </td>
    </tr>
  </tbody>
</table>
</div>
<script>
  // Do not copy the code below. Legal action will be taken without further notice - Property of John Person Inc.
  var decPlac = 4;

  function toDec(num, place) {
    return Math.round(Math.pow(10, place) * num) / Math.pow(10, place);
  }

  function a_plus_b_plus_d(form) {
    var a = Number(form.a.value);
    var b = Number(form.b.value);
    var d = Number(form.d.value);

    var c = a + b + d;
    form.ans.value = toDec(c, decPlac);
  }

  function c_div_e(form) {
    var c = Number(form.ans.value);
    var e = Number(form.e.value);

    var f = c / e;
    form.nationalfutures.value = toDec(f, decPlac);
  }

  function f_times_h(form) {
    var f = Number(form.nationalfutures.value);
    var h = Number(form.h.value);

    var g = f * h;
    form.ans1.value = toDec(g, decPlac);
  }

  function g_minus_b(form) {
    var g = Number(form.ans1.value);
    var b = Number(form.b.value);
    var i = g - b;
    form.nationalfutures1.value = toDec(i, decPlac);
  }

  function f_plus_a(form) {
    var f = Number(form.nationalfutures.value);
    var a = Number(form.a.value);
    var j = f + a;
    form.ans2.value = toDec(j, decPlac);
  }

  function j_minus_b(form) {
    var j = Number(form.ans2.value);
    var b = Number(form.b.value);
    var k = j - b;
    form.nationalfutures2.value = toDec(k, decPlac);
  }

  function g_minus_a(form) {
    var g = Number(form.ans1.value);
    var a = Number(form.a.value);
    var l = g - a;
    form.nationalfutures3.value = toDec(l, decPlac);
  }

  function f_minus_a(form) {
    var f = Number(form.nationalfutures.value);
    var a = Number(form.a.value);
    var m = f - a;
    form.ans3.value = toDec(m, decPlac);
  }

  function m_plus_b(form) {
    var m = Number(form.ans3.value);
    var b = Number(form.b.value);
    var n = m + b;
    form.nationalfutures5.value = toDec(n, decPlac);
  }

  function f_minus_b(form) {
    var f = Number(form.nationalfutures.value);
    var b = Number(form.b.value);
    var x = f - b;
    form.ans4.value = toDec(x, decPlac);
  }

  function x_plus_k(form) {
    var x = Number(form.ans4.value);
    var k = Number(form.nationalfutures2.value);
    var y = x + k;
    form.nationalfutures6.value = toDec(y, decPlac);
  }
  function k_minus_l(form) {
    var k = Number(form.nationalfutures2.value);
    var l = Number(form.nationalfutures3.value);
    var u = k - l;
    form.ans5.value = toDec(u, decPlac);
  }

  function f_minus_u(form) {
    var f = Number(form.nationalfutures.value);
    var u = Number(form.ans5.value);
    var v = f - u;
    form.nationalfutures7.value = toDec(v, decPlac);
  }
</script>

</div>