function calculate() {
  const currentAssets = parseFloat(
    removeCommasFromNumber(document.getElementById('currentAssets').value)
  )
  const annualExpenses = parseFloat(
    removeCommasFromNumber(document.getElementById('annualExpenses').value)
  )
  const annualIncome = parseFloat(removeCommasFromNumber(document.getElementById('annualIncome').value))
  const inflationRate =
    1 + parseFloat(document.getElementById('inflationRate').value) / 100
  const expectedRateOfReturn =
    1 + parseFloat(document.getElementById('expectedRateOfReturn').value) / 100
  const yearsOfIncomeReplacement = parseFloat(
    document.getElementById('yearsOfIncomeReplacement').value
  )
  const outstandingMortgage = parseFloat(
    removeCommasFromNumber(document.getElementById('outstandingMortgage').value)
  )
  const otherDebts = parseFloat(removeCommasFromNumber(document.getElementById('otherDebts').value))
  const medicalCosts = parseFloat(removeCommasFromNumber(document.getElementById('medicalCosts').value))



  // Calculations with console logs
  const futureValueOfExpenses =
    annualExpenses * Math.pow(inflationRate, yearsOfIncomeReplacement)
  console.log('Future Value of Expenses:', futureValueOfExpenses.toFixed(2))

  const presentValueOfExpenses =
    annualExpenses / Math.pow(inflationRate, yearsOfIncomeReplacement)
  console.log('Present Value of Expenses:', presentValueOfExpenses.toFixed(2))

  const totalValueOfAllFutureExpenses =
    annualExpenses *
    ((1 - Math.pow(inflationRate, yearsOfIncomeReplacement)) /
      (inflationRate, 1 - inflationRate))
  console.log(
    'Total Value of All Future Expenses:',
    totalValueOfAllFutureExpenses.toFixed(2)
  )

  const totalNeededForIncomeReplacement =
    annualIncome * yearsOfIncomeReplacement
  console.log(
    'Total Needed for Income Replacement:',
    totalNeededForIncomeReplacement.toFixed(2)
  )

  const totalDebt = outstandingMortgage + otherDebts
  console.log('Total Debt:', totalDebt.toFixed(2))

  const totalRequiredCoverage = totalNeededForIncomeReplacement + totalDebt
  console.log('Total Required Coverage:', totalRequiredCoverage.toFixed(2))

  const coverageNeeded = totalRequiredCoverage - currentAssets
  console.log('Coverage Needed:', coverageNeeded.toFixed(2))

  document.getElementById('totalLifeInsurance').innerText =
  addCommasToNumber("$"+coverageNeeded.toFixed(0))

  jQuery('.result').show();
}

function addCommasToNumber(number) {
  var str = number.toString()
  var result = ''
  var count = 0

  for (var i = str.length - 1; i >= 0; i--) {
    result = str[i] + result
    count++
    if (count % 3 === 0 && i !== 0) {
      result = ',' + result
    }
  }

  return result
}

function removeCommasFromNumber(numberWithCommas) {
  return numberWithCommas.replace(/,/g, '');
}

jQuery(document).ready(function () {

  jQuery('.inputField').on('keyup', function () {
    // Get the current value from the input field
    let inputValue = jQuery(this).val()

    // Replace any spaces with commas and trim the resulting string
    let commaSeparatedValue = removeCommasFromNumber(inputValue).replace(/\s+/g, ',').trim()

    // Update the input field with the comma-separated value
    jQuery(this).val(addCommasToNumber(commaSeparatedValue))
  })

})
