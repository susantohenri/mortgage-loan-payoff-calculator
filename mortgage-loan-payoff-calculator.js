const target = jQuery(`#mortgage_loan_payoff_calculator`)
let left_chart = null
let right_chart = null
let stop = false
jQuery(document).ready(function () {
    target.calx({
        onAfterCalculate: () => {
            additional_functions()
            setTimeout(calculation_step, 0)
        }
    })
    additional_functions()
})

function additional_functions() {
    K5()
    K6()
    K7()
    K8()
    K13()
    setTimeout(graph, 0)
}

function K5() {
    // OFFSET(B43,1+K4*W10,0,1,1)
    const K4 = jQuery(`[data-cell="K4"]`)
    const W10 = jQuery(`[data-cell="W10"]`)
    const offset = 1 + K4.val() * W10.html()
    const result = jQuery(`[data-cell="B${43 + offset}"]`).html()
    jQuery(`[data-cell="K5"]`).html(result).trigger(`change`)

    K4.off(`change.K5`).on(`change.K5`, K5)
    W10.off(`change.K5`).on(`change.K5`, K5)
}

function K6() {
    // =SUM(OFFSET(E43,2,0,K4*periods_per_year,1))
    const K4 = jQuery(`[data-cell="K4"]`)
    const W10 = jQuery(`[data-cell="W10"]`)
    const long = K4.val() * W10.html()
    let result = 0
    for (let row = 43 + 2; row <= 43 + 2 + long - 1; row++) result += parseFloat(jQuery(`[data-cell="E${row}"]`).html())
    result = result.toFixed(2)
    result = result.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")
    jQuery(`[data-cell="K6"]`).html(result).trigger(`change`)

    K4.off(`change.K6`).on(`change.K6`, K6)
    W10.off(`change.K6`).on(`change.K6`, K6)
}

function K7() {
    // SUM(OFFSET(I43,2,0,K4*A1,1))
    const K4 = jQuery(`[data-cell="K4"]`)
    const W10 = jQuery(`[data-cell="W10"]`)
    const long = K4.val() * W10.html()
    let result = 0
    for (let row = 43 + 2; row <= 43 + 2 + long - 1; row++) result += parseFloat(jQuery(`[data-cell="I${row}"]`).html())
    result = result.toFixed(2)
    result = result.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")
    jQuery(`[data-cell="K7"]`).html(result).trigger(`change`)

    K4.off(`change.K7`).on(`change.K7`, K7)
    W10.off(`change.K7`).on(`change.K7`, K7)
}

function K8() {
    // IF(OFFSET(J43,1+K4*W10,0,1,1)='',0,OFFSET(J43,1+K4*W10,0,1,1))
    const K4 = jQuery(`[data-cell="K4"]`)
    const W10 = jQuery(`[data-cell="W10"]`)

    const row = 1 + (parseInt(K4.val()) * parseInt(W10.html())) + 43
    const cell = jQuery(`[data-cell="J${row}"]`).html()
    jQuery(`[data-cell="K8"]`).html(`` === cell ? 0 : cell).trigger(`change`)

    K4.off(`change.K8`).on(`change.K8`, K8)
    W10.off(`change.K8`).on(`change.K8`, K8)
}

function K13() {
    // OFFSET(B43,MAX(A45:A1605)+1,0,1,1)
    const max_a45_a1605_1 = jQuery(`#max_a45_a1605_1`)
    const row = 43 + parseInt(max_a45_a1605_1.val())
    const target = jQuery(`[data-cell="B${row}"]`)
    jQuery(`[data-cell="K13"]`).html(target.html()).trigger(`change`)

    max_a45_a1605_1.off(`change.K13`).on(`change.K13`, K13)
}

function graph() {
    const left_ctx = document.getElementById('graph_left')
    const right_ctx = document.getElementById('graph_right')

    let left_absis = []
    let xtra_pymts = []
    let balance = []

    let right_absis = []
    let intrst_rate_hstory = []
    for (let row = 45; row <= 1604; row++) {
        if (0 < jQuery(`[data-cell="O${row}"]`).length) left_absis.push(jQuery(`[data-cell="O${row}"]`).html())
        if (0 < jQuery(`[data-cell="T${row}"]`).length) xtra_pymts.push(jQuery(`[data-cell="T${row}"]`).html().replace(`,`, ``))
        if (0 < jQuery(`[data-cell="J${row}"]`).length) balance.push(jQuery(`[data-cell="J${row}"]`).html().replace(`,`, ``))

        if (0 < jQuery(`[data-cell="A${row}"]`).length) right_absis.push(jQuery(`[data-cell="A${row}"]`).html())
        if (0 < jQuery(`[data-cell="D${row}"]`).length) intrst_rate_hstory.push(jQuery(`[data-cell="D${row}"]`).html().replace(`%`, ``))
    }

    if (null === left_chart) {
        left_chart = new Chart(left_ctx, {
            type: 'line',
            data: {
                labels: left_absis,
                datasets: [{
                    label: 'Balance',
                    data: balance,
                    backgroundColor: `blue`
                }, {
                    label: 'No Extra Payments',
                    data: xtra_pymts,
                    backgroundColor: `red`
                }]
            }
        })
    } else {
        left_chart.data.labels = left_absis
        left_chart.data.datasets[0].data = balance
        left_chart.data.datasets[1].data = xtra_pymts
        left_chart.update()
    }

    if (null === right_chart) {
        right_chart = new Chart(right_ctx, {
            type: 'line',
            data: {
                labels: right_absis,
                datasets: [{
                    label: ``,
                    data: intrst_rate_hstory,
                    backgroundColor: `blue`
                }]
            }
        })
    } else {
        right_chart.data.labels = right_absis
        right_chart.data.datasets[0].data = intrst_rate_hstory
        right_chart.update()
    }
}

function calculation_step() {
    console.log(Math.random(), `calculation_step`)

    const tbody = jQuery(`table.payment-schedule tbody`)
    const last_row = tbody.find(`tr`).last()
    const last_row_j = parseInt(last_row.find(`[data-cell^="J"]`).html())
    console.log(Math.random(), last_row_j)
    if (0 === last_row_j || isNaN(last_row_j)) return false;

    const last_row_num = parseInt(last_row.find(`td`).eq(0).attr(`data-cell`).replace(`A`, ``))
    const template = `<tr>` + last_row.html().replaceAll(last_row_num, `current_row`).replaceAll(last_row_num - 1, `prev_row`) + `</tr>`

    for (let row = 1; row <= 100; row++) {
        const current_row = last_row_num + row
        const prev_row = current_row - 1
        tbody.append(template.replaceAll(`current_row`, current_row).replaceAll(`prev_row`, prev_row))
    }
    target.calx()
}