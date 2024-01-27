<div class="calx">

  <!-- VARIABLES:BEGIN --
  CP = W5
  term = F6
  loan_amount = F4
  months_per_period = W7
  nper = W8
  periods_per_year = W10
  payment = F10
  int = F21
  fpdate = F7
  variable = W11
  start_rate = F5
  !-- VARIABLES:END -->

  <!-- hidden tables: begin -->
  <div class="row-with-2-columns hidden">
    <table>
      <thead>
        <tr>
          <th data-cell="V3" data-format="" data-formula="" colspan="2">Formulas</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td data-cell="V4" data-format="" data-formula="">Compound Period</td>
          <td data-cell="W4" data-format="" data-formula="IF('Monthly' = F8, 12, 2)"></td>
        </tr>
        <tr>
          <td data-cell="V5" data-format="" data-formula="">CP</td>
          <td data-cell="W5" data-format="" data-formula="IF('Monthly' = F8, 12, 2)"></td>
        </tr>
        <tr>
          <td data-cell="V6" data-format="" data-formula="">Monthly Payment</td>
          <td data-cell="W6" data-format="$0,0.00" data-formula="-PMT((((1+F11/W5)^(W5/12))-1),F6*12,F4)"></td>
        </tr>
        <tr>
          <td data-cell="V7" data-format="" data-formula="">Months per Period</td>
          <td data-cell="W7" data-format="" data-formula="IF(F9='Monthly', 1, IF(F9='Semi-Monthly', 0.5, IF(F9='Bi-Weekly', 0.5, IF(F9='Weekly', 0.25, IF(F9='Acc Bi-Weekly', 0.5, IF(F9='Acc Weekly', 0.25, 0))))))"></td>
        </tr>
        <tr>
          <td data-cell="V8" data-format="" data-formula="">nper</td>
          <td data-cell="W8" data-format="0.00" data-formula="F6*W10"></td>
        </tr>
        <tr>
          <td data-cell="V9" data-format="" data-formula="">Payments</td>
          <td data-cell="W9" data-format="" data-formula="MAX(A45:A1604)"></td>
        </tr>
        <tr>
          <td data-cell="V10" data-format="" data-formula="">Periods per Year</td>
          <td data-cell="W10" data-format="" data-formula="IF(F9='Monthly', 12, IF(F9='Semi-Monthly', 24, IF(F9='Bi-Weekly', 26, IF(F9='Weekly', 52, IF(F9='Acc Bi-Weekly', 26, IF(F9='Acc Weekly', 52, 0))))))"></td>
        </tr>
        <tr>
          <td data-cell="V11" data-format="" data-formula="">Variable</td>
          <td data-cell="W11" data-format="" data-formula="IF(K18='Variable Rate',TRUE,FALSE)"></td>
        </tr>
      </tbody>
    </table>

    <table>
      <thead>
        <tr>
          <th data-cell="V13" data-format="" data-formula="">Compound Periods</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td data-cell="V14" data-format="" data-formula="'Semi-Annually'"></td>
        </tr>
        <tr>
          <td data-cell="V15" data-format="" data-formula="'Monthly'"></td>
        </tr>
      </tbody>
    </table>

    <table>
      <thead>
        <tr>
          <th data-cell="V17" data-format="" data-formula="">Frequency</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td data-cell="V18" data-format="" data-formula="'Monthly'"></td>
        </tr>
        <tr>
          <td data-cell="V19" data-format="" data-formula="'Semi Monthly'"></td>
        </tr>
        <tr>
          <td data-cell="V20" data-format="" data-formula="'Bi-Weekly'"></td>
        </tr>
        <tr>
          <td data-cell="V21" data-format="" data-formula="'Weekly'"></td>
        </tr>
        <tr>
          <td data-cell="V22" data-format="" data-formula="'Acc Bi-Weekly'"></td>
        </tr>
        <tr>
          <td data-cell="V23" data-format="" data-formula="'Acc Weekly'"></td>
        </tr>
      </tbody>
    </table>

    <table>
      <thead>
        <tr>
          <th colspan="2">Totals Assuming No Extra Payments</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Total Payments</td>
          <td>
            <input type="text" data-cell="E31" data-format="$0,0" data-formula="SUM(R45:R404)" value="306608">
          </td>
        </tr>
        <tr>
          <td>Total Interest</td>
          <td>
            <input type="text" data-cell="E32" data-format="$0,0" data-formula="E31-F4" value="156608">
          </td>
        </tr>
        <tr>
          <td>Periods Per Year</td>
          <td>
            <input type="text" data-cell="E33" data-format="0" data-formula="W10" value="12">
          </td>
        </tr>
      </tbody>
    </table>

    <!-- Regular Payment Schedule (No Extra Payments) -->
    <table>
      <thead>
        <tr>
          <th data-cell="N43" data-format="" data-formula="'No.'"></th>
          <th data-cell="O43" data-format="" data-formula="'Date'"></th>
          <th data-cell="P43" data-format="" data-formula="'Rate'"></th>
          <th data-cell="Q43" data-format="" data-formula="'Interest'"></th>
          <th data-cell="R43" data-format="" data-formula="'Payment'"></th>
          <th data-cell="S43" data-format="" data-formula="'Principal'"></th>
          <th data-cell="T43" data-format="" data-formula="'No Extra Payments'"></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td data-cell="N44" data-format="" data-formula=""></td>
          <td data-cell="O44" data-format="" data-formula=""></td>
          <td data-cell="P44" data-format="" data-formula=""></td>
          <td data-cell="Q44" data-format="" data-formula=""></td>
          <td data-cell="R44" data-format="" data-formula=""></td>
          <td data-cell="S44" data-format="" data-formula=""></td>
          <td data-cell="T44" data-format="$0,0.00" data-formula="F4"></td>
        </tr>
        <?php for ($row = 45; $row <= 404; $row++) : $prev_row = $row - 1; ?>
          <tr>
            <td data-cell="<?= "N{$row}" ?>" data-format="" data-formula="<?= "IF(T{$prev_row}='','',IF(OR(N{$prev_row}>=W8,ROUND(T{$prev_row},2)<=0),'',N{$prev_row}+1))" ?>"></td>
            <td data-cell="<?= "O{$row}" ?>" data-format="" data-formula="<?= "IF(N{$row}='','',IF(OR(W10=26,W10=52),IF(W10=26,IF(N{$row}=1,F7,O{$prev_row}+14),IF(W10=52,IF(N{$row}=1,F7,O{$prev_row}+7),'n/a')),IF(W10=24,DATEFORMAT(DATE(YEAR(F7),MONTH(F7)+(N{$row}-1)/2+IF(AND(DAY(F7)&gt;=15,MOD(N{$row},2)=0),1,0),IF(MOD(N{$row},2)=0,IF(DAY(F7)&gt;=15,DAY(F7)-14,DAY(F7)+14),DAY(F7))),'MM/DD/YYYY'),IF(DAY(DATE(YEAR(F7),MONTH(F7)+N{$row}-1,DAY(F7)))<&gt;DAY(F7),DATEFORMAT(DATE(YEAR(F7),MONTH(F7)+N{$row},0), 'MM/DD/YYYY'),DATEFORMAT(DATE(YEAR(F7),MONTH(F7)+N{$row}-1,DAY(F7)),'MM/DD/YYYY')))))" ?>"></td>
            <td data-cell="<?= "P{$row}" ?>" data-format="0.000%" data-formula="<?= "IF(N{$row}='','',IF(W11,IF(N{$row}<K19*W10,F5,IF(K23&gt;=0,MIN(K20,F5+K23*ROUNDUP((N{$row}-K19*W10)/K22,0)),MAX(K21,F5+K23*ROUNDUP((N{$row}-K19*W10)/K22,0)))),F5))" ?>"></td>
            <td data-cell="<?= "Q{$row}" ?>" data-format="0.00" data-formula="<?= "IF(N{$row}='','',ROUND((((1+P{$row}/W5)^(W5/W10))-1)*T{$prev_row},2))" ?>"></td>
            <td data-cell="<?= "R{$row}" ?>" data-format="0.00" data-formula="<?= "IF(N{$row}='','',IF(N{$row}=W8,T{$prev_row}+Q{$row},MIN(T{$prev_row}+Q{$row},IF(P{$row}=P{$prev_row},R{$prev_row},ROUND(-PMT(((1+P{$row}/W5)^(W5/W10))-1,W8-N{$row}+1,T{$prev_row}),2)))))" ?>"></td>
            <td data-cell="<?= "S{$row}" ?>" data-format="0.00" data-formula="<?= "IF(N{$row}='','',R{$row}-Q{$row})" ?>"></td>
            <td data-cell="<?= "T{$row}" ?>" data-format="0,0.00" data-formula="<?= "IF(N{$row}='','',T{$prev_row}-S{$row})" ?>"></td>
          </tr>
        <?php endfor; ?>
      </tbody>
    </table>
  </div>
  <!-- hidden tables: end -->

  <div class="row-with-2-columns">

    <!-- left:begin -->
    <div>

      <!-- table-left-1:begin   -->
      <table>
        <thead>
          <tr>
            <th colspan="2">Mortgage Information</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Loan Amount</td>
            <td><input data-cell="F4" data-format="$0,0.00" data-formula="" value="150000" type="text"></td>
          </tr>
          <tr>
            <td>Annual Interest Rate</td>
            <td><input data-cell="F5" data-format="0.00%" data-formula="" value="5.5" type="text"></td>
          </tr>
          <tr>
            <td>Term Length (in Years)</td>
            <td><input data-cell="F6" data-format="0" data-formula="" value="30" type="text"></td>
          </tr>
          <tr>
            <td>First Payment Date</td>
            <td><input data-cell="F7" data-format="" data-formula="" value="1/1/2019" type="text"></td>
          </tr>
          <tr>
            <td>Compound Period</td>
            <td>
              <select data-cell="F8" data-format="" data-formula="">
                <option value="Monthly">Monthly</option>
                <option value="Semi-Annually">Semi-Annually</option>
              </select>
            </td>
          </tr>
          <tr>
            <td>Payment Frequency</td>
            <td>
              <select data-cell="F9" data-format="" data-formula="">
                <option value="Monthly">Monthly</option>
                <option value="Semi-Monthly">Semi-Monthly</option>
                <option value="Bi-Weekly">Bi-Weekly</option>
                <option value="Weekly">Weekly</option>
                <option value="Bi-Weekly">Acc Bi-Weekly</option>
                <option value="Weekly">Acc Weekly</option>
              </select>
            </td>
          </tr>
        </tbody>
        <tfoot>
          <tr>
            <th data-cell="E10" data-format="" data-formula="CONCAT(F9, ' Payment')">Monthly Payment</th>
            <th data-cell="F10" data-format="0.00" data-formula="(IF(F9='Acc Bi-Weekly',ROUND((-PMT((((1+F5/W5)^(W5/12))-1),F6*12,F4))/2,2),IF(F9='Acc Weekly',ROUND((-PMT((((1+F5/W5)^(W5/12))-1),F6*12,F4))/4,2),ROUND(-PMT(((1+F5/W5)^(W5/W10))-1,W8,F4),2))))">85.68</th>
          </tr>
        </tfoot>
      </table>
      <!-- table-left-1:end -->

      <!-- table-left-2:begin -->
      <table>
        <tbody>
          <tr>
            <td>Home Value or Price</td>
            <td><input data-cell="F12" data-format="0,0.00" data-formula="F4" value="150000" type="text"></td>
          </tr>
          <tr>
            <td>Yearly Property Taxes</td>
            <td data-cell="F13" data-format="0,0.00" data-formula="F12*(1.8/100)" class="result">2700</td>
          </tr>
          <tr>
            <td>Yearly H.O. Insurance</td>
            <td data-cell="F14" data-format="0,0.00" data-formula="F12*(0.4/100)" class="result">600</td>
          </tr>
          <tr>
            <td>Monthly PMI</td>
            <td><input data-cell="F15" data-format="0,0.00" data-formula="" value="80" type="text"></td>
          </tr>
        </tbody>
        <tfoot>
          <tr>
            <th>PITI Payment</th>
            <th data-cell="F16" data-format="0,0.00" data-formula="F10+F13/W10+F14/W10+F15*12/W10">1206.68</th>
          </tr>
        </tfoot>
      </table>
      <!-- table-left-2:end -->

      <!-- table-left-3:begin   -->
      <table>
        <thead>
          <tr>
            <th colspan="2">Extra Payments</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Start at Payment No</td>
            <td><input data-cell="F19" data-format="0,0" data-formula="" value="1" type="text"></td>
          </tr>
          <tr>
            <td>Extra Payment</td>
            <td><input data-cell="F20" data-format="$0,0.00" data-formula="" value="" type="text"></td>
          </tr>
          <tr>
            <td>Payment Interval</td>
            <td><input data-cell="F21" data-format="0,0" data-formula="" value="1" type="text"></td>
          </tr>
          <tr>
            <td>Extra Annual Payment</td>
            <td><input data-cell="F22" data-format="$0,0.00" data-formula="" value="1000" type="text"></td>
          </tr>
          <tr>
            <td data-cell="E23" data-format="" data-formula="CONCAT('Payment # (1-', E33, ')')">Payment # (1-12)</td>
            <td><input data-cell="F23" data-format="0,0" data-formula="" value="7" type="text"></td>
          </tr>
          <tr>
            <td>Total Extra Payments</td>
            <td data-cell="F24" data-format="0,0.00" data-formula="SUM(G45:H1604)" class="result">24000</td>
          </tr>
        </tbody>
        <tfoot>
          <tr>
            <th>Interest Savings</th>
            <th data-cell="F25" data-format="0,0.00" data-formula="IF((E32-K15)<0,0,(E32-K15))">32724.1</th>
          </tr>
        </tfoot>
      </table>
      <!-- table-left-3:end -->

      <!-- graph-left:begin -->
      <div>
        Balance Over Time
      </div>
      <!-- graph-left:end -->

    </div>
    <!-- left:end -->

    <!-- right:begin -->
    <div>

      <!-- table-right-1:begin -->
      <table>
        <thead>
          <tr>
            <th colspan="2">Balance at a Specified Year</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Balance at Year</td>
            <td><input data-cell="K4" data-format="0,0" data-formula="" value="5" type="text"></td>
          </tr>
          <tr>
            <td>Date</td>
            <td data-cell="K5" data-format="" data-formula="" class="result"></td>
          </tr>
          <tr>
            <td>Interest Paid</td>
            <td data-cell="K6" data-format="0,0.00" data-formula="" class="result">39065.68</td>
          </tr>
          <tr>
            <td>Principal Paid</td>
            <td data-cell="K7" data-format="0,0.00" data-formula="" class="result">17035.12</td>
          </tr>
        </tbody>
        <tfoot>
          <tr>
            <th>Outstanding Balance</th>
            <th data-cell="K8" data-format="0,0.00" data-formula="">132964.88</th>
          </tr>
        </tfoot>
      </table>
      <!-- table-right-1:end -->

      <!-- table-right-2:begin -->
      <table>
        <thead>
          <tr>
            <th colspan="2">Summary</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Years Until Paid Off</td>
            <td data-cell="K11" data-format="0,0.00" data-formula="ROUND(MAX(A45:A1605)/W10,2)" class="result">24.33</td>
          </tr>
          <tr>
            <td>Number of Payments</td>
            <td data-cell="K12" data-format="" data-formula="MAX(A44:A1605)" class="result">292</td>
          </tr>
          <tr>
            <td>Last Payment Date <input type="hidden" id="max_a45_a1605_1" data-formula="MAX(A45:A1605)+1"></td>
            <td data-cell="K13" data-format="" data-formula="" class="result">4/1/2043</td>
          </tr>
          <tr>
            <td>Total Payments</td>
            <td data-cell="K14" data-format="0,0.00" data-formula="SUM(E45:E1604)+SUM(I45:I1604)" class="result">271883.65</td>
          </tr>
        </tbody>
        <tfoot>
          <tr>
            <th>Total Interest</th>
            <th data-cell="K15" data-format="0,0.00" data-formula="SUM(E45:E1604)">121883.65</th>
          </tr>
        </tfoot>
      </table>
      <!-- table-right-2:end -->

      <!-- table-right-3:begin   -->
      <table>
        <thead>
          <tr>
            <th colspan="2">Fixed-Rate or ARM</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Variable or Fixed Rate</td>
            <td>
              <select data-cell="K18" data-format="" data-formula="">
                <option value="Fixed Rate">Fixed Rate</option>
                <option value="Variable Rate">Variable Rate</option>
              </select>
            </td>
          </tr>
          <tr>
            <td>Years Rate Remains Fixed</td>
            <td data-cell="K19" data-format="0,0" data-formula="" class="result">3</td>
          </tr>
          <tr>
            <td>Interest Rate Cap</td>
            <td data-cell="K20" data-format="0.00%" data-formula="" class="result">12</td>
          </tr>
          <tr>
            <td>Interest Rate Minimum</td>
            <td data-cell="K21" data-format="0.00%" data-formula="" class="result">4</td>
          </tr>
          <tr>
            <td>Periods Between Adjustments</td>
            <td data-cell="K22" data-format="0,0" data-formula="" class="result">12</td>
          </tr>
          <tr>
            <td>Estimated Adjustment</td>
            <td data-cell="K23" data-format="0,0.00%" data-formula="" class="result">0.25</td>
          </tr>
        </tbody>
        <tfoot>
          <tr>
            <th>Highest Monthly Payment</th>
            <th data-cell="K24" data-format="0,0.00" data-formula="MAX(F45:F1604)">851.68</th>
          </tr>
        </tfoot>
      </table>
      <!-- table-right-3:end -->

      <!-- graph-right:begin -->
      <div>
        Interest Rate History
      </div>
      <!-- graph-right:end -->

      <!-- table-right-4:begin -->
      <table class="tax-deduction">
        <thead>
          <tr>
            <th colspan="2">Tax Deduction</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Tax Bracket</td>
            <td><input data-cell="L38" data-format="0.00%" data-formula="" value="25" type="text"></td>
          </tr>
          <tr>
            <td>Effective Rate</td>
            <td data-cell="L39" data-format="0.000%" data-formula="(1-L38)*F5" class="result">4.125</td>
          </tr>
          <tr>
            <td>Tax Returned</td>
            <td data-cell="L40" data-format="0,0" data-formula="SUM(K45:K1604)" class="result">30471</td>
          </tr>
        </tbody>
      </table>
      <!-- table-right-4:end -->

    </div>
    <!-- right:end -->

  </div>

  <h4>Payment Schedule</h4>

  <table class="payment-schedule">
    <thead>
      <tr>
        <th data-cell="A43">No.</th>
        <th data-cell="B43">Payment Date</th>
        <th data-cell="C43">Year</th>
        <th data-cell="D43">Interest Rate</th>
        <th data-cell="E43">Interest Due</th>
        <th data-cell="F43">Payment Due</th>
        <th data-cell="G43">Extra Payments</th>
        <th data-cell="H43">Additional Payments</th>
        <th data-cell="I43">Principal Paid</th>
        <th data-cell="J43">Balance</th>
        <th data-cell="K43">Tax Refunded</th>
        <th data-cell="L43">Cmltv Tax Returned</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th data-cell="A44" data-format="" data-formula=""></th>
        <th data-cell="B44" data-format="" data-formula=""></th>
        <th data-cell="C44" data-format="" data-formula=""></th>
        <th data-cell="D44" data-format="" data-formula=""></th>
        <th data-cell="E44" data-format="" data-formula=""></th>
        <th data-cell="F44" data-format="" data-formula=""></th>
        <th data-cell="G44" data-format="" data-formula=""></th>
        <th data-cell="H44" data-format="" data-formula=""></th>
        <th data-cell="I44" data-format="" data-formula=""></th>
        <th data-cell="J44" data-format="$0,0.00" data-formula="F4"></th>
        <th data-cell="K44" data-format="" data-formula=""></th>
        <th data-cell="L44" data-format="" data-formula=""></th>
      </tr>
      <?php for ($row = 45; $row <= 336; $row++) : ?>
        <?php $prev_row = $row - 1; ?>
        <tr>
          <td data-cell="<?= "A{$row}" ?>" data-format="" data-formula="<?= "IF(J{$prev_row}='','',IF(OR(A{$prev_row}>=W8,ROUND(J{$prev_row},2)<=0),'',A{$prev_row}+1))" ?>"></td>
          <td data-cell="<?= "B{$row}" ?>" data-format="" data-formula="<?= "IF(A{$row}='','',IF(OR(W10=26,W10=52),IF(W10=26,IF(A{$row}=1,F7,B{$prev_row}+14),IF(W10=52,IF(A{$row}=1,F7,B{$prev_row}+7),'n/a')),IF(W10=24,DATEFORMAT(DATE(YEAR(F7),MONTH(F7)+(A{$row}-1)/2+IF(AND(DAY(F7)&gt;=15,MOD(A{$row},2)=0),1,0),IF(MOD(A{$row},2)=0,IF(DAY(F7)&gt;=15,DAY(F7)-14,DAY(F7)+14),DAY(F7))), 'MM/DD/YYYY'),IF(DAY(DATE(YEAR(F7),MONTH(F7)+A{$row}-1,DAY(F7)))<&gt;DAY(F7),DATEFORMAT(DATE(YEAR(F7),MONTH(F7)+A{$row},0),'MM/DD/YYYY'),DATEFORMAT(DATE(YEAR(F7),MONTH(F7)+A{$row}-1,DAY(F7)),'MM/DD/YYYY')))))" ?>"></td>
          <td data-cell="<?= "C{$row}" ?>" data-format="" data-formula="<?= "IF(A{$row}='','',IF(MOD(A{$row},W10)=0,A{$row}/W10,''))" ?>"></td>
          <td data-cell="<?= "D{$row}" ?>" data-format="0.000%" data-formula="<?= "IF(A{$row}='','',IF(W11,IF(OR(A{$row}=1,A{$row}<K19*W10),F5,MIN(K20,IF(MOD(A{$row}-1,K22)=0,MAX(K21,D{$prev_row}+K23),D{$prev_row}))),F5))" ?>"></td>
          <td data-cell="<?= "E{$row}" ?>" data-format="0.00" data-formula="<?= "IF(A{$row}='','',ROUND((((1+D{$row}/W5)^(W5/W10))-1)*J{$prev_row},2))" ?>"></td>
          <td data-cell="<?= "F{$row}" ?>" data-format="0.00" data-formula="<?= "IF(A{$row}='','',IF(A{$row}=W8,J{$prev_row}+E{$row},MIN(J{$prev_row}+E{$row},IF(D{$row}=D{$prev_row},F{$prev_row},IF(F9='Acc Bi-Weekly',ROUND((-PMT(((1+D{$row}/W5)^(W5/12))-1,(W8-A{$row}+1)*12/26,J{$prev_row}))/2,2),IF(F9='Acc Weekly',ROUND((-PMT(((1+D{$row}/W5)^(W5/12))-1,(W8-A{$row}+1)*12/52,J{$prev_row}))/4,2),ROUND(-PMT(((1+D{$row}/W5)^(W5/W10))-1,W8-A{$row}+1,J{$prev_row}),2)))))))" ?>"></td>
          <td data-cell="<?= "G{$row}" ?>" data-format="0.00" data-formula="<?= "IF(OR(A{$row}='',A{$row}<F19),'',IF(J{$prev_row}<=F{$row},0,IF(IF(AND(A{$row}&gt;=F19,MOD(A{$row}-F19,F21)=0),F20,0)+F{$row}&gt;=J{$prev_row}+E{$row},J{$prev_row}+E{$row}-F{$row},IF(AND(A{$row}&gt;=F19,MOD(A{$row}-F19,F21)=0),F20,0)+IF(IF(AND(A{$row}&gt;=F19,MOD(A{$row}-F19,F21)=0),F20,0)+IF(MOD(A{$row}-F23,W10)=0,F22,0)+F{$row}<J{$prev_row}+E{$row},IF(MOD(A{$row}-F23,W10)=0,F22,0),J{$prev_row}+E{$row}-IF(AND(A{$row}&gt;=F19,MOD(A{$row}-F19,F21)=0),F20,0)-F{$row}))))" ?>"></td>
          <td data-cell="<?= "H{$row}" ?>" data-format="" data-formula=""></td>
          <td data-cell="<?= "I{$row}" ?>" data-format="0.00" data-formula="<?= "IF(A{$row}='','',F{$row}-E{$row}+H{$row}+IF(G{$row}='',0,G{$row}))" ?>"></td>
          <td data-cell="<?= "J{$row}" ?>" data-format="0,0.00" data-formula="<?= "IF(A{$row}='','',J{$prev_row}-I{$row})" ?>"></td>
          <td data-cell="<?= "K{$row}" ?>" data-format="0.00" data-formula="<?= "IF(A{$row}='','',L38*E{$row})" ?>"></td>
          <td data-cell="<?= "L{$row}" ?>" data-format="0.00" data-formula="<?= "IF(A{$row}='','',SUM(K45:K{$row}))" ?>"></td>
        </tr>
      <?php endfor; ?>
    </tbody>
  </table>

</div>