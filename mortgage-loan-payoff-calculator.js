const target = jQuery(`#mortgage_loan_payoff_calculator`)
jQuery(document).ready(function () {
    target.calx()
})

function regular_payment_schedule(loop) {
    // if (200 < loop) return false
    const tbody = jQuery(`table.regular-payment-schedule tbody`)
    const last_row = tbody.find(`tr`).last()
    const last_row_t = parseInt(last_row.find(`[data-cell^="T"]`).html().replace(`,`, ``))
    console.log(Math.random(), `regular_payment_schedule`, last_row_t, loop)
    if (0 === last_row_t || isNaN(last_row_t)) return false;

    const last_row_num = parseInt(last_row.find(`td`).eq(0).attr(`data-cell`).replace(`N`, ``))
    const template = `<tr>` + last_row.html().replaceAll(last_row_num, `current_row`).replaceAll(last_row_num - 1, `prev_row`) + `</tr>`

    for (let r = 0; r <= 360; r++) {
        const current_row = last_row_num + r
        const prev_row = current_row - 1
        tbody.append(template.replaceAll(`current_row`, current_row).replaceAll(`prev_row`, prev_row))
    }

    target.calx()
    setTimeout(() => {
        regular_payment_schedule(loop + 1)
    }, 0)
}

function payment_schedule(loop) {
    if (5 < loop) return false
    const tbody = jQuery(`table.payment-schedule tbody`)
    const last_row = tbody.find(`tr`).last()
    const last_row_j = parseInt(last_row.find(`[data-cell^="J"]`).html().replace(`,`, ``))
    console.log(Math.random(), `regular_payment_schedule`, last_row_j, loop)
    if (0 === last_row_j || isNaN(last_row_j)) return false;

    const last_row_num = parseInt(last_row.find(`td`).eq(0).attr(`data-cell`).replace(`A`, ``))
    const template = `<tr>` + last_row.html().replaceAll(last_row_num, `current_row`).replaceAll(last_row_num - 1, `prev_row`) + `</tr>`

    for (let r = 0; r <= 292; r++) {
        const current_row = last_row_num + r
        const prev_row = current_row - 1
        tbody.append(template.replaceAll(`current_row`, current_row).replaceAll(`prev_row`, prev_row))
    }

    target.calx()
    setTimeout(() => {
        payment_schedule(loop + 1)
    }, 0)
}