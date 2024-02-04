const target = jQuery(`#mortgage_loan_payoff_calculator`)
jQuery(document).ready(function () {
    lazy()
    target.calx()
})

function lazy() {
    jQuery(`[repeatable]`).each(function () {
        const repeatable = jQuery(this)
        const template = `<tr>${repeatable.html()}</tr>`
        for (let i = 45; i <= 360 + 45 - 1; i++) repeatable.before(template
            .replaceAll(`{$row}`, i)
            .replaceAll(`{$prev_row}`, i - 1)
        )
        repeatable.remove()
    })
}