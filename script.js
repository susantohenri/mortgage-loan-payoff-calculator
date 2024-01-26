jQuery(document).ready(function () {
    const target = jQuery(`.calx`)
    target.calx(`registerFunction`, `JBT`, function () {
        return 321
    })
    target.calx()
    target.calx(`registerVariable`, `compound_periods`, () => {
        return jQuery(`[data-cell="F8"]`).val()
    })

})

function get_compound_periods() {
    const target = jQuery(`[data-cell="F8"]`)
    const evt = `change.get_compound_periods`
    target.off(evt).on(evt, () => {

    })
}