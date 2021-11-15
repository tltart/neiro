var datas_line=[];
var datas_table=[];
var type_period='day';
var type_period_tab=0;
loaded=0;

function ajax_zapros(site) {


    $.ajax({
        type: "get",
        url: '/newreports/alldata/all',
        data: {
            'group': type_period,
            'type': 'table',
            'period_start': w_start_date,
            'canals': 0,
            'period_end': w_end_date,
            'type_charts': 'canals',
            'site':site
        }, success: function (input_data) {

            datas_table=input_data;

            top_vblock_table(site ) //  w_reports_new( 'line');


        }
    });


}


function top_vblock_table(site){

    datatotable = datas_table.table.all;
    sdelka = 0;
    posetitel = 0;


    for (key in datatotable) {
        if (datatotable[key].sdelka != undefined) {

            sdelka = sdelka + Number(datatotable[key].sdelka);
            posetitel = posetitel + Number(datatotable[key].posetitel);

        }
    }
    $('.msite_lead_'+site).html(sdelka)

    $('.msite_pos_'+site).html(posetitel)


}

