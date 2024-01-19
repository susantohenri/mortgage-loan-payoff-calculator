<div class="calx">
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
            <td><input data-cell="F8" data-format="" data-formula="" value="Monthly" type="text"></td>
          </tr>
          <tr>
            <td>Payment Frequency</td>
            <td><input data-cell="F9" data-format="" data-formula="" value="Monthly" type="text"></td>
          </tr>
        </tbody>
        <tfoot>
          <tr>
            <th>Monthly Payment</th>
            <th data-cell="F10" data-format="0.00" data-formula="">85.68</th>
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
            <td data-cell="F13" data-format="0,0.00" data-formula="" class="output">2700</td>
          </tr>
          <tr>
            <td>Yearly H.O. Insurance</td>
            <td data-cell="F14" data-format="0,0.00" data-formula="" class="output">600</td>
          </tr>
          <tr>
            <td>Monthly PMI</td>
            <td><input data-cell="F15" data-format="0,0.00" data-formula="" value="80" type="text"></td>
          </tr>
        </tbody>
        <tfoot>
          <tr>
            <th>PITI Payment</th>
            <th data-cell="F16" data-format="0,0.00" data-formula="">1206.68</th>
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
            <td>Payment # (1-12)</td>
            <td><input data-cell="F23" data-format="0,0" data-formula="" value="7" type="text"></td>
          </tr>
          <tr>
            <td>Total Extra Payments</td>
            <td data-cell="F24" data-format="0,0.00" data-formula="" class="output">24000</td>
          </tr>
        </tbody>
        <tfoot>
          <tr>
            <th>Interest Savings</th>
            <th data-cell="F25" data-format="0,0.00" data-formula="">32724.1</th>
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
            <td data-cell="K5" data-format="" data-formula="" class="output">12/1/2023</td>
          </tr>
          <tr>
            <td>Interest Paid</td>
            <td data-cell="K6" data-format="0,0.00" data-formula="" class="output">39065.68</td>
          </tr>
          <tr>
            <td>First Payment Date</td>
            <td data-cell="K7" data-format="0,0.00" data-formula="" class="output">17035.12</td>
          </tr>
        </tbody>
        <tfoot>
          <tr>
            <th>Monthly Payment</th>
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
            <td data-cell="K11" data-format="0,0.00" data-formula="" class="output">24.33</td>
          </tr>
          <tr>
            <td>Number of Payments</td>
            <td data-cell="K12" data-format="0,0" data-formula="" class="output">292</td>
          </tr>
          <tr>
            <td>Last Payment Date</td>
            <td data-cell="K13" data-format="" data-formula="" class="output">4/1/2043</td>
          </tr>
          <tr>
            <td>Total Payments</td>
            <td data-cell="K14" data-format="0,0.00" data-formula="" class="output">271883.65</td>
          </tr>
        </tbody>
        <tfoot>
          <tr>
            <th>Total Interest</th>
            <th data-cell="K15" data-format="0,0.00" data-formula="">121883.65</th>
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
            <th data-cell="K24" data-format="0,0.00" data-formula="">851.68</th>
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
            <td data-cell="L39" data-format="0.000%" data-formula="" class="output">4.125</td>
          </tr>
          <tr>
            <td>Tax Returned</td>
            <td data-cell="L40" data-format="0,0" data-formula="" class="output">30471</td>
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
    <tfoot>
      <tr>
        <th colspan="12">&nbsp;</th>
      </tr>
    </tfoot>
    <tbody></tbody>
  </table>
</div>