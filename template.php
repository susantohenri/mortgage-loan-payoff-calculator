<div class="calx">
  <input type="hidden" data-cell="A1" value="12">
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
            <td>F6 Length (in Years)</td>
            <td><input data-cell="F6" data-format="0" data-formula="" value="30" type="text"></td>
          </tr>
          <tr>
            <td>First Payment Date</td>
            <td><input data-cell="F7" data-format="" data-formula="" value="1/1/2019" type="text"></td>
          </tr>
          <tr>
            <td>Compound Period</td>
            <td><input data-cell="F8" data-format="" data-formula="" value="Monthly" type="text"></td>
          </tr>
          <tr>
            <td>Payment Frequency</td>
            <td><input data-cell="F9" data-format="" data-formula="" value="Monthly" type="text"></td>
          </tr>
        </tbody>
        <tfoot>
          <tr>
            <th data-cell="E10" data-format="" data-formula="CONCAT(F9, ' Payment')">Monthly Payment</th>
            <th class="todo" data-cell="F10" data-format="0.00" data-formula="">85.68</th>
          </tr>
        </tfoot>
      </table>
      <!-- table-left-1:end -->

      <!-- table-left-2:begin -->
      <table>
        <tbody>
          <tr>
            <td>Home Value or Price</td>
            <td><input data-cell="F12" data-format="0,0.00" data-formula="" value="150000" type="text"></td>
          </tr>
          <tr>
            <td>Yearly Property Taxes</td>
            <td data-cell="F13" data-format="0,0.00" data-formula="F12*(1.8/100)" class="output">2700</td>
          </tr>
          <tr>
            <td>Yearly H.O. Insurance</td>
            <td data-cell="F14" data-format="0,0.00" data-formula="F12*(0.4/100)" class="output">600</td>
          </tr>
          <tr>
            <td>Monthly PMI</td>
            <td><input data-cell="F15" data-format="0,0.00" data-formula="" value="80" type="text"></td>
          </tr>
        </tbody>
        <tfoot>
          <tr>
            <th>PITI Payment</th>
            <th data-cell="F16" class="todo" data-format="0,0.00" data-formula="F10+F13/A1+F14/A1+F15*12/A1">1206.68</th>
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
            <td class="todo" data-cell="E23" data-format="" data-formula="CONCAT('Payment # (1-', E33))">Payment # (1-12)</td>
            <td><input data-cell="F23" data-format="0,0" data-formula="" value="7" type="text"></td>
          </tr>
          <tr>
            <td>Total Extra Payments</td>
            <td data-cell="F24" data-format="0,0.00" data-formula="SUM(G45:H1604)" class="output">24000</td>
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

      <!-- hidden-left:begin -->
      <input type="text" class="todo" data-cell="E31" data-format="$0,0" data-formula="SUM(MortgageCalculator!R:R)" value="306608">
      <input type="text" data-cell="E32" data-format="$0,0" data-formula="E31-F4" value="156608">
      <input type="text" class="todo" data-cell="E33" data-format="A1" data-formula="" value="12">
      <!-- hidden-left:end -->

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
            <td data-cell="K5" data-format="" data-formula="OFFSET(B43,1+K4*A1,0,1,1)" class="todo output">12/1/2023</td>
          </tr>
          <tr>
            <td>Interest Paid</td>
            <td data-cell="K6" data-format="0,0.00" data-formula="SUM(OFFSET(E43,2,0,K4*A1,1))" class="todo output">39065.68</td>
          </tr>
          <tr>
            <td>First Payment Date</td>
            <td data-cell="K7" data-format="0,0.00" data-formula="SUM(OFFSET(I43,2,0,K4*A1,1))" class="todo output">17035.12</td>
          </tr>
        </tbody>
        <tfoot>
          <tr>
            <th>Monthly Payment</th>
            <th class="todo" data-cell="K8" data-format="0,0.00" data-formula="IF(OFFSET(J43,1+K4*A1,0,1,1)='',0,OFFSET(J43,1+K4*A1,0,1,1))">132964.88</th>
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
            <td data-cell="K11" data-format="0,0.00" data-formula="ROUND(MAX(A45:A1605)/A1,2)" class="output">24.33</td>
          </tr>
          <tr>
            <td>Number of Payments</td>
            <td data-cell="K12" data-format="0,0" data-formula="MAX(A43:A1605)" class="output">292</td>
          </tr>
          <tr>
            <td>Last Payment Date</td>
            <td data-cell="K13" data-format="" data-formula="OFFSET(B43,MAX(A45:A1605)+1,0,1,1)" class="output">4/1/2043</td>
          </tr>
          <tr>
            <td>Total Payments</td>
            <td data-cell="K14" data-format="0,0.00" data-formula="SUM(E45:E1604)+SUM(I45:I1604)" class="output">271883.65</td>
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
            <td><input data-cell="K18" data-format="" data-formula="" value="Fixed Rate" type="text"></td>
          </tr>
          <tr>
            <td>Years Rate Remains Fixed</td>
            <td data-cell="K19" data-format="0,0" data-formula="" class="output">3</td>
          </tr>
          <tr>
            <td>Interest Rate Cap</td>
            <td data-cell="K20" data-format="0.00%" data-formula="" class="output">12</td>
          </tr>
          <tr>
            <td>Interest Rate Minimum</td>
            <td data-cell="K21" data-format="0.00%" data-formula="" class="output">4</td>
          </tr>
          <tr>
            <td>Periods Between Adjustments</td>
            <td data-cell="K22" data-format="0,0" data-formula="" class="output">12</td>
          </tr>
          <tr>
            <td>Estimated Adjustment</td>
            <td data-cell="K23" data-format="0,0.00%" data-formula="" class="output">0.25</td>
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
            <td data-cell="L39" data-format="0.000%" data-formula="(1-L38)*F5" class="output">4.125</td>
          </tr>
          <tr>
            <td>Tax Returned</td>
            <td data-cell="L40" data-format="0,0" data-formula="SUM(K45:K1604)" class="output">30471</td>
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
        <th>No.</th>
        <th>Payment Date</th>
        <th>Year</th>
        <th>Interest Rate</th>
        <th>Interest Due</th>
        <th>Payment Due</th>
        <th>Extra Payments</th>
        <th>Additional Payments</th>
        <th>Principal Paid</th>
        <th>Balance</th>
        <th>Tax Refunded</th>
        <th>Cmltv Tax Returned</th>
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
          <td data-cell="<?= "A{$row}" ?>" data-format="" data-formula="<?= "IF(J{$prev_row}='','',IF(OR(A{$prev_row}>=nper,ROUND(J{$prev_row},2)<=0),'',A{$prev_row}+1))" ?>"></td>
          <td data-cell="<?= "B{$row}" ?>" data-format="" data-formula="<?= "IF(A{$row}='','',IF(OR(A1=26,A1=52),IF(A1=26,IF(A{$row}=1,fpdate,B{$prev_row}+14),IF(A1=52,IF(A{$row}=1,fpdate,B{$prev_row}+7),'n/a')),IF(A1=24,DATE(YEAR(fpdate),MONTH(fpdate)+(A{$row}-1)/2+IF(AND(DAY(fpdate)&gt;=15,MOD(A{$row},2)=0),1,0),IF(MOD(A{$row},2)=0,IF(DAY(fpdate)&gt;=15,DAY(fpdate)-14,DAY(fpdate)+14),DAY(fpdate))),IF(DAY(DATE(YEAR(fpdate),MONTH(fpdate)+A{$row}-1,DAY(fpdate)))<&gt;DAY(fpdate),DATE(YEAR(fpdate),MONTH(fpdate)+A{$row},0),DATE(YEAR(fpdate),MONTH(fpdate)+A{$row}-1,DAY(fpdate))))))" ?>"></td>
          <td data-cell="<?= "C{$row}" ?>" data-format="" data-formula="<?= "IF(A{$row}='','',IF(MOD(A{$row},A1)=0,A{$row}/A1,''))" ?>"></td>
          <td data-cell="<?= "D{$row}" ?>" data-format="" data-formula="<?= "IF(A{$row}='','',IF(variable,IF(OR(A{$row}=1,A{$row}<K$19*A1),F5,MIN(K$20,IF(MOD(A{$row}-1,K$22)=0,MAX(K$21,D{$prev_row}+K$23),D{$prev_row}))),F5))" ?>"></td>
          <td data-cell="<?= "E{$row}" ?>" data-format="" data-formula="<?= "IF(A{$row}='','',ROUND((((1+D{$row}/CP)^(CP/A1))-1)*J{$prev_row},2))" ?>"></td>
          <td data-cell="<?= "F{$row}" ?>" data-format="" data-formula="<?= "IF(A{$row}='','',IF(A{$row}=nper,J{$prev_row}+E{$row},MIN(J{$prev_row}+E{$row},IF(D{$row}=D{$prev_row},F{$prev_row},IF(F9='Acc Bi-Weekly',ROUND((-PMT(((1+D{$row}/CP)^(CP/12))-1,(nper-A{$row}+1)*12/26,J{$prev_row}))/2,2),IF(F9='Acc Weekly',ROUND((-PMT(((1+D{$row}/CP)^(CP/12))-1,(nper-A{$row}+1)*12/52,J{$prev_row}))/4,2),ROUND(-PMT(((1+D{$row}/CP)^(CP/A1))-1,nper-A{$row}+1,J{$prev_row}),2)))))))" ?>"></td>
          <td data-cell="<?= "G{$row}" ?>" data-format="" data-formula="<?= "IF(OR(A{$row}='',A{$row}<F19),'',IF(J{$prev_row}<=F{$row},0,IF(IF(AND(A{$row}&gt;=F19,MOD(A{$row}-F19,F21)=0),F20,0)+F{$row}&gt;=J{$prev_row}+E{$row},J{$prev_row}+E{$row}-F{$row},IF(AND(A{$row}&gt;=F19,MOD(A{$row}-F19,int)=0),F20,0)+IF(IF(AND(A{$row}&gt;=F19,MOD(A{$row}-F19,int)=0),F20,0)+IF(MOD(A{$row}-F23,A1)=0,F22,0)+F{$row}<J{$prev_row}+E{$row},IF(MOD(A{$row}-F23,A1)=0,F22,0),J{$prev_row}+E{$row}-IF(AND(A{$row}&gt;=F19,MOD(A{$row}-F19,int)=0),F20,0)-F{$row}))))" ?>"></td>
          <td data-cell="<?= "H{$row}" ?>" data-format="" data-formula="<?= "IF(A{$row}='','',F{$row}-E{$row}+H{$row}+IF(G{$row}='',0,G{$row}))" ?>"></td>
          <td data-cell="<?= "I{$row}" ?>" data-format="" data-formula="<?= "IF(A{$row}='','',F{$row}-E{$row}+H{$row}+IF(G{$row}='',0,G{$row}))" ?>"></td>
          <td data-cell="<?= "J{$row}" ?>" data-format="" data-formula="<?= "IF(A{$row}='','',J{$prev_row}-I{$row})" ?>"></td>
          <td data-cell="<?= "K{$row}" ?>" data-format="" data-formula="<?= "IF(A{$row}='','',L38*E{$row})" ?>"></td>
          <td data-cell="<?= "L{$row}" ?>" data-format="" data-formula="<?= "IF(A{$row}='','',SUM(K{$row}:K{$row}))" ?>"></td>
        </tr>
      <?php endfor; ?>
    </tbody>
  </table>
</div>