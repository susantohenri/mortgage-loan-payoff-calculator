const target = jQuery(`.calx`)
jQuery(document).ready(function () {
    target.calx({
        onAfterCalculate: () => {
            K5()
            K6()
            K7()
            K8()
            K13()
            graph_left()
        }
    })
})

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

function graph_left() {
    const ctx = document.getElementById('graph_left');

    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
            datasets: [{
                label: '# of Votes',
                data: [12, 19, 3, 5, 2, 3],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
}