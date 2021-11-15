var datas_line=[];
var datas_table=[];
var type_period='day';
var type_period_tab=0;
loaded=0;
function get_tab_active(){

    $(".btn-select-period li").each(function (i,element){
      if($(element).hasClass('active')){
          type_period=$(element).data('type');
          type_period_tab=$(element).data('type_tab');
       }

    });

}
function save_date_zapros(){
   $.ajax({
        type: "POST",
        url: '/ajax/save_dashboars',
        data: {
            'period_type':type_period_tab,
            'date_start': w_start_date,
            'date_end': w_end_date,

        }, success: function (input_data) {


        }
    });
}

function ajax_zapros() {

    get_tab_active();
    $('.loader').show();
    $.ajax({
        type: "get",
        url: '/newreports/alldata/all',
        data: {
            'group':type_period,
            'type': 'line',
            'period_start': w_start_date,
            'canals': 0,
            'period_end': w_end_date,
            'type_charts': 'canals'
        }, success: function (input_data) {

            $('.loader').hide();

            datas_line=input_data;
            w_reports_new( 'line');


            $("#members-online-new-1,  #server-load ").html('')

            generateBarChart_new("#members-online-new-1", 24, 70, true, "elastic", 1200, 70, "rgba(255,255,255,0.5)", type_period, datas_line.line.sdelka, datas_line.line.dates);
            generateBarChart_new("#server-load", 24, 70, true, "elastic", 1200, 70, "rgba(255,255,255,0.5)", type_period, datas_line.line.posetitel, datas_line.line.dates);

        }
    });
    $.ajax({
        type: "get",
        url: '/newreports/alldata/all',
        data: {
            'group': type_period,
            'type': 'table',
            'period_start': w_start_date,
            'canals': 0,
            'period_end': w_end_date,
            'type_charts': 'canals'
        }, success: function (input_data) {
            $('.loader').hide();
            datas_table=input_data;
            reports_doughnut_wistis()

            top_vblock_table(type_period) //  w_reports_new( 'line');


        }
    });
    $.ajax({
        type: "get",
        url: '/newreports/alldata/all',
        data: {
            'group': type_period,
            'type': 'lead',
            'period_start': w_start_date,
            'canals': 0,
            'period_end': w_end_date,
            'type_charts': 'canals'
        }, success: function (input_data1) {

            $("#members-online-new-2").html('')

            generateBarChart_new("#members-online-new-2", 24, 70, true, "elastic", 1200, 70, "rgba(255,255,255,0.5)", type_period, input_data1.lead.return, input_data1.lead.dates);
            $('.bg-blue-400 .no-margin').html(input_data1.lead.lead_count);

        }

    });
    $.ajax({
        type: "get",
        url: 'newreports/alldata/all',
        data: {
            'group': type_period,
            'type': 'sales',
            'period_start': w_start_date,
            'canals': 0,
            'period_end': w_end_date,
            'type_charts': 'canals'
        }, success: function (input_data1) {
            dd("++++");
            dd(input_data1);



            $('.bg-orange-400 .no-margin').html(input_data1.sales.lead_count);
            $("#today-revenue").html('');

       //     generateBarChart_new("#today-revenue", 24, 70, true, "elastic", 1200, 70, "rgba(255,255,255,0.5)", type_period, input_data1.sales.return, input_data1.sales.dates);
            dailyRevenue('#today-revenue', 70, input_data1.sales.all,  input_data1.sales.dates);
        }
    });
}
ajax_zapros();
function w_reports_new( $gr_type) {
       var chartHolder = document.querySelector('.js-analytics');


        line_gr_new_wistis(datas_line.line, chartHolder,$gr_type)


}
function line_gr_new_wistis(datatotable, chartHolder,$gr_type) {


    var i = 0;
    while (i < datatotable.series.length) {
      datatotable.series[i].type=$gr_type;
        i  = i+1;
    }

    var option = {

        grid: {
            left: 60,
            top: 50,
            right: 100,
            bottom: 50,
            backgroundColor: '#006699'
        },
        color: ['#2d7bcb', '#3ed25a', '#eff70b', '#f7210b', '#f80aea', '#a10af8', '#faa106'],
        tooltip: {
            trigger: 'axis',
            axisPointer: {
                type: 'shadow'
            }
        },
        legend: {
            data: datatotable['names'],
            orient: 'vertical',
            left: 'right',
            top: 'center',
        },
        toolbox: {
            show: true,
            orient: 'horizontal',
            left: 'left',
            top: 'top',
            feature: {
                mark: {
                    show: true
                },
                dataView: {
                    show: false,
                    readOnly: false
                },
                magicType: {
                    show: false,

                    type: ['line', 'bar', 'stack'],

                    title: {
                        line: ' ',
                        bar: ' ',
                        stack: ' '
                    }
                },
                restore: {
                    show: false,
                    title: ' '
                },
            }
        },
        calculable: true,
        xAxis: [{
            type: 'category',
            boundaryGap: false,
            axisTick: {
                show: false
            },
            data: datatotable['dates']
        }],
        yAxis: [{
            type: 'value'
        }],
        series: datatotable['series']
    };
    chart.setOption(option, true);



}

function  reports_doughnut_wistis(){

    datatotable=datas_table.table.data;

    array = [];
    array2 = [];
    datatotable.sort(function (a, b) {
        return b.sdelka - a.sdelka;
    });

    all_sdelka = datatotable.sum("sdelka")
    $('.itogo-chart .summ-itogo').html(all_sdelka)
    $('.itogo-chart').addClass('active');
    $('.table-chart-body').html('')
    data_chesk = 0;

    color=['#37A2DA','#66E0E3','#FEDB5B','#FF9F7F','#E061AE','#65DB7C' ,'#37A2DA','#66E0E3','#FEDB5B','#FF9F7F','#E061AE','#65DB7C' ,'#37A2DA','#66E0E3','#FEDB5B','#FF9F7F','#E061AE','#65DB7C' ,'#37A2DA','#66E0E3','#FEDB5B','#FF9F7F','#E061AE','#65DB7C' ,'#37A2DA','#66E0E3','#FEDB5B','#FF9F7F','#E061AE','#65DB7C' ,'#37A2DA','#66E0E3','#FEDB5B','#FF9F7F','#E061AE','#65DB7C' ]
    i=0;
    $(datatotable).each(function (index, element) {
        if (element.sdelka > 0) {
            data_chesk = 1;
            /*color = '#37A2DA'
            if (element.typ === 'organic') {
                color = '#37A2DA'
            }
            if (element.typ === 'utm') {
                color = '#66E0E3'
            }
            if (element.typ === 'AdwordsApi') {
                element.typ = 'Google Ads';
                color = '#FEDB5B'
            }
            if (element.typ === 'Директ') {
                color = '#FF9F7F'
            }
            if (element.typ === 'typein') {
                color = '#E061AE'
            }
            if (element.typ === 'referral') {
                color = '#65DB7C'
            }*/

            ;i=i+1;
            array.push({value: element.sdelka, name: element.view_name, itemStyle: {color: color[i]}})
            procent = ((Number(element.sdelka) / all_sdelka) * 100).toFixed(2)

            $('.table-chart-body').append('<div class="tr-table-chart active" data-name="' + element.view_name + '"><div class="td-1 " ><div style=" background:' + color[i] + '"></div>' + element.view_name + '</div><div class="td-2">' + element.sdelka + '</div><div class="td-3">' + procent + '%</div></div>');


            array2.push(element.typ);
        }


    });

    if (data_chesk === 0) {

        $('.table-chart-no-data').css('display', 'block');
        $('.table-chart-grafick').css('display', 'none');
        $('.itogo-chart').removeClass('active');
    } else {
        $('.table-chart-no-data').css('display', 'none');
        $('.table-chart-grafick').css('display', 'block');
        $('.itogo-chart').addClass('active');
    }

    doughnut_gr(array, array2,color)
    $(".table-chart-body .tr-table-chart", document).hover(function () {
        name = $(this).attr('data-name')
        $('.itogo-chart').removeClass('active')
        chart_doughnut.dispatchAction({
            type: 'highlight',
            name: name
        })
    }, function () {
        name = $(this).attr('data-name')
        $('.itogo-chart').addClass('active')

        chart_doughnut.dispatchAction({
            type: 'downplay',
            name: name
        })
    });


}

function top_vblock_table(data_type){
    if (w_start_date === w_end_date) {
        group_1 = 'hours';
    } else {
        group_1 = data_type;
    }
    datatotable = datas_table.table.all;
    sdelka = 0;
    posetitel = 0;


    for (key in datatotable) {
        if (datatotable[key].sdelka != undefined) {

            sdelka = sdelka + Number(datatotable[key].sdelka);
            posetitel = posetitel + Number(datatotable[key].posetitel);

        }
    }
    $('.bg-pink-400 .no-margin').html(sdelka)

    $('.bg-teal-400 .no-margin').html(posetitel)


}


function dd(str){
    console.log(str);
}
//установка даты
//dateFound(w_start_date, w_end_date);

//Загрузка грациков
//reports_new(1, 'line');

//Кружек

//

//Верхний блок
//top_for_block(w_start_date, w_end_date, 'day');


/*Методы Методы Методы Методы Методы Методы Методы Методы Методы Методы Методы Методы Методы Методы Методы Методы Методы Методы Методы Методы Методы
 Методы  Методы  Методы  Методы  Методы  Методы  Методы  Методы  Методы  Методы  Методы  Методы  Методы  Методы  Методы  Методы  Методы  Методы  Методы  Методы  Методы  Методы  Методы  Методы  Методы  Методы
  Методы  Методы  Методы  Методы  Методы  Методы  Методы  Методы  Методы  Методы  Методы  Методы  Методы  Методы  Методы  Методы  Методы
* */


//Установка даты
function setdate(start, end) {
    get_tab_active();

    start_date = start;
    end_date = end;
    $('#period_start').val(start_date);
    $('#period_end').val(end_date);
    w_start_date=start_date;
    w_end_date=end_date;

  ajax_zapros()
save_date_zapros();



}


function dateFound(data_start, data_end) {

    data_start_mass = data_start.split('-');
    data_end_mass = data_end.split('-');
    months_end = data_end_mass[1];
    months_start = data_start_mass[1];
    if (months_start.indexOf('0') === 0) {
        months_start = months_start.replace('0', '')
    }
    if (months_end.indexOf('0') === 0) {
        months_end = months_end.replace('0', '')
    }


    months_start = months_start - 1;
    months_end = months_end - 1;
    monthNames = ['января', 'февраля', 'марта', 'апреля', 'мая', 'июня', 'июля', 'августа', 'сентября', 'октября', 'ноября', 'декабря']

    string = data_start_mass[0] + ' ' + monthNames[months_start] + ' ' + data_start_mass[2] + ' - ' + data_end_mass[0] + ' ' + monthNames[months_end] + ' ' + data_end_mass[2];


   $('.daterange-ranges span').html(string);
}

$(window).resize(function () {
    chart.resize()
    chart_doughnut.resize()

});
Array.prototype.sum = function (prop) {
    var total = 0
    for (var i = 0, _len = this.length; i < _len; i++) {
        total += Number(this[i][prop])
    }
    return total
}



function line_gr_new(datatotable, chartHolder) {


    if (chartHolde.line) {


        var option = {

            grid: {
                left: 60,

                top: 50,
                right: 100,
                bottom: 50,
                backgroundColor: '#006699'
            },
            color: ['#2d7bcb', '#3ed25a', '#eff70b', '#f7210b', '#f80aea', '#a10af8', '#faa106'],
            tooltip: {
                trigger: 'axis',
                axisPointer: {
                    type: 'shadow'
                }
            },
            legend: {
                data: datatotable['names'],
                orient: 'vertical',
                left: 'right',
                top: 'center',


            },
            toolbox: {
                show: true,
                orient: 'horizontal',
                left: 'left',
                top: 'top',
                feature: {
                    mark: {
                        show: true
                    },
                    dataView: {
                        show: false,
                        readOnly: false
                    },
                    magicType: {
                        show: false,

                        type: ['line', 'bar', 'stack'],


                        title: {
                            line: ' ',
                            bar: ' ',
                            stack: ' '
                        }
                    },
                    restore: {
                        show: false,
                        title: ' '
                    },

                }
            },
            calculable: true,
            xAxis: [{
                type: 'category',
                boundaryGap: false,
                axisTick: {
                    show: false
                },
                data: datatotable['dates']
            }],
            yAxis: [{
                type: 'value'
            }],
            series: datatotable['series']
        };

        chart.setOption(option, true);


    }

}


function reports_render(id, type, stack) {
    $('#loader-2').show();
    if (stack === '1') {
        stack = '&stack=' + stack;
    } else {
        stack = '';
    }
    group = 'day'
    period_start = $("#period_start").val()
    period_end = $("#period_end").val()
    if (period_start === period_end) {
        period_start = $("#period_start_7").val()

    }

    canals = $("#canals").val()
    forma = $("#reportsform2").serialize() + '&type_charts=' + type + stack;
    $.ajax({
        type: "get",
        url: '/reports/' + id,
        data: {
            'group': group,
            'period_start': period_start,
            'canals': canals,
            'period_end': period_end,
            'type_charts': type
        },
        success: function (html1) {
            datatotable = JSON.parse(html1);
            $('#loader-2').hide();
            var chartHolder = document.querySelector('.js-analytics');

            line_gr_new(datatotable, chartHolder)


        }
    })


}


function doughnut_gr(data_val_name, data_name,color) {
    option = {
        tooltip: {
            trigger: 'item',
            formatter: '{b}: {c} ({d}%)'
        },
         legend: {

            orient: 'vertical',
            right: 10,
            type: 'scroll',
            top: 100,
            bottom: 50,
            pageIcons: {
                horizontal: ''

            },
            /*		formatter: function (name,value) {
                return name;
            },*/
            data: data_name
        },
        series: [
            {
                name: 'ТОП рекламных каналов по заявкам',
                type: 'pie',
                radius: ['40%', '60%'],
                center: ['24%', '50%'],
                avoidLabelOverlap: false,
                label: {

                    normal: {
                        show: false,
                        position: 'center',
                        formatter: '{b}'
                    },
                    emphasis: {
                        show: true,
                        textStyle: {
                            fontSize: '15',
                            fontWeight: 'bold',
                            fontFamily: 'sans-serif',
                            lineHeight: 10
                        }
                    }
                },
                labelLine: {
                    normal: {
                        show: true
                    }
                },
                data: data_val_name
            }
        ]
    };

    chart_doughnut.setOption(option, true);

}





function top_for_block(data_start, data_end, data_type) {

    if (data_start === data_end) {
        group_1 = 'hours';
    } else {
        group_1 = data_type;
    }


    $.ajax({
        type: "get",
        url: '/reportsconstruct/1',
        data: {
            'resourse_names': 'sdelka,lead,posetitel,summ',
            'period_start': data_start,
            'period_end': data_end,
            'group': group_1
        },
        success: function (data) {
            datatotable = JSON.parse(data);
            data_array_sdelka = [];
            data_array_index = [];
            data_array_lead = [];
            data_array_posetitel = [];
            data_array_summ = [];

            sdelka = 0;
            lead = 0;
            posetitel = 0;
            summ = 0;

            for (key in datatotable) {
                data_array_sdelka.push(Number(datatotable[key].sdelka));
                data_array_lead.push(Number(datatotable[key].lead));

                data_array_posetitel.push(Number(datatotable[key].posetitel));
                data_array_summ.push({date: key, alpha: datatotable[key].summ});

                lead = lead + Number(datatotable[key].lead);
                sdelka = sdelka + Number(datatotable[key].sdelka);
                posetitel = posetitel + Number(datatotable[key].posetitel);
                summ = summ + Number(datatotable[key].summ);

                data_array_index.push(key);
            }

            $('.bg-pink-400 .no-margin').html(sdelka)
            $('.bg-blue-400 .no-margin').html(lead)
            $('.bg-teal-400 .no-margin').html(posetitel)
            $('.bg-orange-400 .no-margin').html(summ)


            $("#members-online-new-1, #members-online-new-2, #server-load, #today-revenue").html('')
            generateBarChart_new("#members-online-new-1", 24, 70, true, "elastic", 1200, 70, "rgba(255,255,255,0.5)", group_1, data_array_sdelka, data_array_index);
            generateBarChart_new("#server-load", 24, 70, true, "elastic", 1200, 70, "rgba(255,255,255,0.5)", group_1, data_array_posetitel, data_array_index);

            dailyRevenue('#today-revenue', 70, data_array_summ, data_array_index); // initialize chart
        }
    })

}


function dailyRevenue(element, height, data_array, data_array_index) {


    // Basic setup
    // ------------------------------

    // Add data set

    // Main variables
    var d3Container = d3.select(element),
        margin = {top: 0, right: 0, bottom: 0, left: 0},
        width = d3Container.node().getBoundingClientRect().width - margin.left - margin.right,
        height = height - margin.top - margin.bottom,
        padding = 20;

    // Format date
    var parseDate = d3.time.format("%Y-%m-%d").parse,
        formatDate = d3.time.format("%a, %B %e");
    formatDate2 = d3.time.format("%d.%m.%Y");


    // Add tooltip
    // ------------------------------

    var tooltip = d3.tip()
        .attr('class', 'd3-tip')
        .html(function (d) {
            return "<ul class='list-unstyled mb-5'>" +
                "<li>" + "<div class='text-size-base mt-5 mb-5'><i class='icon-check2 position-left'></i>" + formatDate2(d.date) + "</div>" + "</li>" +
                "<li>" + "Сумма: &nbsp;" + "<span class='text-semibold pull-right'>" + d.alpha + "</span>" + "</li>" +
                "</ul>";
        });


    // Create chart
    // ------------------------------

    // Add svg element
    var container = d3Container.append('svg');

    // Add SVG group
    var svg = container
        .attr('width', width + margin.left + margin.right)
        .attr('height', height + margin.top + margin.bottom)
        .append("g")
        .attr("transform", "translate(" + margin.left + "," + margin.top + ")")
        .call(tooltip);


    // Load data
    // ------------------------------

    data_array.forEach(function (d) {
        d.date = parseDate(d.date);
        d.alpha = +d.alpha;
    });


    // Construct scales
    // ------------------------------

    // Horizontal
    var x = d3.time.scale()
        .range([padding, width - padding]);

    // Vertical
    var y = d3.scale.linear()
        .range([height, 5]);


    // Set input domains
    // ------------------------------

    // Horizontal
    x.domain(d3.extent(data_array, function (d) {
        return d.date;
    }));

    // Vertical
    y.domain([0, d3.max(data_array, function (d) {
        return Math.max(d.alpha);
    })]);


    // Construct chart layout
    // ------------------------------

    // Line
    var line = d3.svg.line()
        .x(function (d) {
            return x(d.date);
        })
        .y(function (d) {
            return y(d.alpha)
        });


    //
    // Append chart elements
    //

    // Add mask for animation
    // ------------------------------

    // Add clip path
    var clip = svg.append("defs")
        .append("clipPath")
        .attr("id", "clip-line-small");

    // Add clip shape
    var clipRect = clip.append("rect")
        .attr('class', 'clip')
        .attr("width", 0)
        .attr("height", height);

    // Animate mask
    clipRect
        .transition()
        .duration(1000)
        .ease('linear')
        .attr("width", width);


    // Line
    // ------------------------------

    // Path
    var path = svg.append('path')
        .attr({
            'd': line(data_array),
            "clip-path": "url(#clip-line-small)",
            'class': 'd3-line d3-line-medium'
        })
        .style('stroke', '#fff');

    // Animate path
    svg.select('.line-tickets')
        .transition()
        .duration(1000)
        .ease('linear');


    // Add vertical guide lines
    // ------------------------------

    // Bind data
    var guide = svg.append('g')
        .selectAll('.d3-line-guides-group')
        .data(data_array);

    // Append lines
    guide
        .enter()
        .append('line')
        .attr('class', 'd3-line-guides')
        .attr('x1', function (d, i) {
            return x(d.date);
        })
        .attr('y1', function (d, i) {
            return height;
        })
        .attr('x2', function (d, i) {
            return x(d.date);
        })
        .attr('y2', function (d, i) {
            return height;
        })
        .style('stroke', 'rgba(255,255,255,0.3)')
        .style('stroke-dasharray', '4,2')
        .style('shape-rendering', 'crispEdges');

    // Animate guide lines
    guide
        .transition()
        .duration(1000)
        .delay(function (d, i) {
            return i * 150;
        })
        .attr('y2', function (d, i) {
            return y(d.alpha);
        });


    // Alpha app points
    // ------------------------------

    // Add points
    var points = svg.insert('g')
        .selectAll('.d3-line-circle')
        .data(data_array)
        .enter()
        .append('circle')
        .attr('class', 'd3-line-circle d3-line-circle-medium')
        .attr("cx", line.x())
        .attr("cy", line.y())
        .attr("r", 3)
        .style('stroke', '#fff')
        .style('fill', '#29B6F6');


    // Animate points on page load
    points
        .style('opacity', 0)
        .transition()
        .duration(250)
        .ease('linear')
        .delay(1000)
        .style('opacity', 1);


    // Add user interaction
    points
        .on("mouseover", function (d) {
            tooltip.offset([-10, 0]).show(d);

            // Animate circle radius
            d3.select(this).transition().duration(250).attr('r', 4);
        })

        // Hide tooltip
        .on("mouseout", function (d) {
            tooltip.hide(d);

            // Animate circle radius
            d3.select(this).transition().duration(250).attr('r', 3);
        });

    // Change tooltip direction of first point
    d3.select(points[0][0])
        .on("mouseover", function (d) {
            tooltip.offset([0, 10]).direction('e').show(d);

            // Animate circle radius
            d3.select(this).transition().duration(250).attr('r', 4);
        })
        .on("mouseout", function (d) {
            tooltip.direction('n').hide(d);

            // Animate circle radius
            d3.select(this).transition().duration(250).attr('r', 3);
        });

    // Change tooltip direction of last point
    d3.select(points[0][points.size() - 1])
        .on("mouseover", function (d) {
            tooltip.offset([0, -10]).direction('w').show(d);

            // Animate circle radius
            d3.select(this).transition().duration(250).attr('r', 4);
        })
        .on("mouseout", function (d) {
            tooltip.direction('n').hide(d);

            // Animate circle radius
            d3.select(this).transition().duration(250).attr('r', 3);
        })


}


function reports(id) {
    forma = $("#reportsform").serialize();
    //    document.querySelector('.js-analytics').innerHTML='';
    $.ajax({
        type: "get",
        url: '/reports/' + id,
        data: forma,
        success: function (html1) {
            datatotable = JSON.parse(html1);


            var chartHolder = document.querySelector('.js-analytics' + id);

            if (datatotable['type'] == 'line') {
                line_gr(datatotable, chartHolder)
            }
            if (datatotable['type'] == 'funnel') {
                var chartHolder = document.querySelector('.js-analytics' + id);
                funnel_gr(datatotable, chartHolder)
            }


        }
    })


}

function funnel_gr(datatotable, chartHolder) {

    if (chartHolder) {
        var chartHolderWidth = chartHolder.parentNode.clientWidth;
        chartHolder.style.width = chartHolderWidth + 'px';
        chart = echarts.init(chartHolder);
        var labelOption = {
            normal: {
                show: false,
                position: 'insideBottom',
                distance: 60,
                align: 'left',
                verticalAlign: 'middle',
                rotate: 90,
                // formatter: '{c}  {name|{a}}',
                fontSize: 14 // rich: {
                //     name: {
                //         textBorderColor: '#fff'
                //     }
                // }

            } // specify chart configuration item and data

        };
        option = {
            color: ['#2d7bcb', '#3ed25a', '#eff70b', '#f7210b', '#f80aea', '#a10af8', '#faa106'],
            tooltip: {
                trigger: 'item',
                formatter: "{a} <br/>{b} : {c}%"
            },

            legend: {},
            series: [
                {
                    name: ' ',
                    type: 'funnel',
                    left: '10%',
                    top: 100,
                    //x2: 80,
                    bottom: 10,
                    width: '80%',
                    // height: {totalHeight} - y - y2,
                    min: 0,
                    max: 100,
                    minSize: '0%',
                    maxSize: '100%',
                    sort: 'descending',
                    gap: 1,
                    label: {
                        show: false,
                        position: 'inside'
                    },
                    labelLine: {
                        length: 10,
                        lineStyle: {
                            width: 1,
                            type: 'solid'
                        }
                    },
                    itemStyle: {
                        borderColor: '#fff',
                        borderWidth: 1
                    },
                    emphasis: {
                        label: {
                            fontSize: 0
                        }
                    },
                    data: datatotable['series']
                }

            ]
        };


        chart.setOption(option, true);
    }

}

function line_gr(datatotable, chartHolder) {


    if (chartHolder) {
        var chartHolderWidth = chartHolder.parentNode.clientWidth;
        chartHolder.style.width = chartHolderWidth + 'px';
        chart = echarts.init(chartHolder);
        var labelOption = {
            normal: {
                show: false,
                position: 'insideBottom',
                distance: 40,
                align: 'left',
                verticalAlign: 'middle',
                rotate: 90,
                // formatter: '{c}  {name|{a}}',
                fontSize: 14 // rich: {
                //     name: {
                //         textBorderColor: '#fff'
                //     }
                // }

            } // specify chart configuration item and data

        };
        var option = {
            /*title: {
                text: 'График', left: 'center'
            },*/
            grid: {
                left: 60,
                top: 5,
                right: 10,
                bottom: 50,
                backgroundColor: '#006699'
            },
            color: ['#2d7bcb', '#3ed25a', '#eff70b', '#f7210b', '#f80aea', '#a10af8', '#faa106'],
            tooltip: {
                trigger: 'axis',
                axisPointer: {
                    type: 'shadow'
                }
            },
            legend: {
                type: 'scroll',
                bottom: 100,
                data: datatotable['names'],
                orient: 'horizontal',
                left: 'center',
                top: 'bottom',


            },

            calculable: true,
            xAxis: [{
                type: 'category',
                axisTick: {
                    show: false
                },
                data: datatotable['dates']// ['2012', '2013', '2014', '2015', '2016']
            }],
            yAxis: [{
                type: 'value'
            }],
            series: datatotable['series']
        }; // use configuration item and data specified to show chart

        chart.setOption(option, true);

    }

}


/*инициализация*инициализация*инициализация*инициализация*инициализация*инициализация*инициализация*инициализация*инициализация*инициализация*
инициализация*инициализация*инициализация*инициализация*инициализация*инициализация*инициализация*инициализация*инициализация*инициализация
*инициализация*инициализация*инициализация*инициализация*инициализация*инициализация*инициализация*инициализация*инициализация*инициализация
*инициализация*инициализация*инициализация*инициализация*инициализация*инициализация*инициализация*инициализация*инициализация*/

/*Кругляшок слева*/
var chartHolder_doughnut = document.querySelector('.js-analytics-doughnut');

chart_doughnut = echarts.init(chartHolder_doughnut);
var labelOption = {
    normal: {
        show: true,
        position: 'insideBottom',
        distance: 40,
        align: 'left',
        verticalAlign: 'middle',
        rotate: 90,

        fontSize: 14

    }

};
/*Кругляшок слева*/

/*График справа справа*/
var chartHolder = document.querySelector('.js-analytics');

chart = echarts.init(chartHolder);

/*График с справа*/

/*Календарь*/
$('.daterange-ranges').daterangepicker({
        "autoApply": false,
        "linkedCalendars": true,
        "alwaysShowCalendars": true,
        "showDropdowns": true,
        opens: 'left',

        "startDate": w_start_date,
        "endDate": w_end_date,


        "locale": {
            "format": "YYYY-MM-DD",
            "separator": " - ",
            "applyLabel": "Применить",
            "cancelLabel": "Отмена",
            "fromLabel": "От",
            "toLabel": "До",
            "customRangeLabel": "Заданый",
            "daysOfWeek": [
                'Вс', 'Пн', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб'
            ],
            "monthNames": [
                'Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь',
                'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь'
            ],
            "firstDay": 1
        }


    }
 ,
    function (start, end) {



        var date1 = new Date(start.format('Y-MM-DD'));

        var date2 = new Date(end.format('Y-MM-DD'));

        var timeDiff = Math.abs(date2.getTime() - date1.getTime());

        var diffDays = Math.ceil(timeDiff / (1000 * 3600 * 24));
        type_period = 'hours';
        if (diffDays>0&&diffDays <= 30) {
            type_period = 'day';
        }
        if (diffDays > 30 && diffDays <= 120) {
            type_period = 'week';
        }

        if (diffDays > 120 ) {
            type_period = 'month';
        }
        $(".btn-select-period li").removeClass('active');
        type_period_tab=0;
        setdate(start.format('YYYY-MM-DD'), end.format('YYYY-MM-DD'));
        dateFound(start.format('DD-MM-YYYY'), end.format('DD-MM-YYYY'));

    }
);


//Клик по сегодня вчера неделя
$('.btn-select-period li').on('click', function () {



    if (!$(this).is('.active')) {
        data_start = $(this).attr('data-start');
        data_end = $(this).attr('data-end');
        data_type = $(this).attr('data-type');

        $('.btn-select-period li').removeClass('active')
        $(this).addClass('active');
        $('.daterange-ranges').data('daterangepicker').setStartDate(data_start);
        $('.daterange-ranges').data('daterangepicker').setEndDate(data_end);
        data_start_format = data_start.split('-');
        data_end_format = data_end.split('-')
        $('#period_start').val(data_start_format[2] + '-' + data_start_format[1] + '-' + data_start_format[0]);
        $('#period_end').val(data_end_format[2] + '-' + data_end_format[1] + '-' + data_end_format[0]);

        dateFound(data_start_format[2] + '-' + data_start_format[1] + '-' + data_start_format[0], data_end_format[2] + '-' + data_end_format[1] + '-' + data_end_format[0]);





        setdate(data_start, data_end, data_type);
    }
})

dateFound(w_start_date1, w_end_date1);

/*Верхние графики*/
function generateBarChart_new(element, barQty, height, animate, easing, duration, delay, color, tooltip, Data_array, data_array_index) {
  dd('-----------------');
  dd(Data_array);
    barQty = Data_array.length

    var d3Container = d3.select(element),
        width = d3Container.node().getBoundingClientRect().width;

    var x = d3.scale.ordinal()
        .rangeBands([0, width], 0.3)

    var y = d3.scale.linear()
        .range([0, height]);

    x.domain(d3.range(0, Data_array.length))

    y.domain([0, d3.max(Data_array)])

    var container = d3Container.append('svg');

    var svg = container
        .attr('width', width)
        .attr('height', height)
        .append('g');

    var bars = svg.selectAll('rect')
        .data(Data_array)
        .enter()
        .append('rect')
        .attr('class', 'd3-random-bars')
        .attr('width', x.rangeBand())
        .attr('x', function (d, i) {
            return x(i);
        })
        .style('fill', color);


    var tip = d3.tip()
        .attr('class', 'd3-tip')
        .offset([-10, 0]);

    // Show and hide

    if (tooltip == "hours" || tooltip == "day" || tooltip == "week" || tooltip == "month") {
        bars.call(tip)
            .on('mouseover', tip.show)
            .on('mouseout', tip.hide);
    }

    if (tooltip == "hours") {
        tip.html(function (d, i) {
            string = data_array_index[i];

            return "<div class='text-center'>" +
                "<h6 class='no-margin'>" + d + "</h6><div class='text-size-small'>" + string + ":00" + "</div>" +
                "</div>"
        });
    }

    if (tooltip == "day" || tooltip == "week" || tooltip == "month") {
        tip.html(function (d, i) {
            return "<div class='text-center'>" +
                "<h6 class='no-margin'>" + d + "</h6><div class='text-size-small'>" + data_array_index[i] + "" + "</div>" +
                "</div>"
        });
    }

    // Online members tooltip content
    if (tooltip == "members") {
        tip.html(function (d, i) {
            return "<div class='text-center'>" +
                "<h6 class='no-margin'>" + d + "</h6>" +
                "<span class='text-size-small'> </span>" +
                "<div class='text-size-small'>" + i + ":00" + "</div>" +
                "</div>"
        });
    }


    // Bar loading animation
    // ------------------------------

    // Choose between animated or static
    if (animate) {
        withAnimation();
    } else {
        withoutAnimation();
    }

    // Animate on load
    function withAnimation() {
        bars
            .attr('height', 0)
            .attr('y', height)
            .transition()
            .attr('height', function (d) {
                return y(d);
            })
            .attr('y', function (d) {
                return height - y(d);
            })
            .delay(function (d, i) {
                return i * delay;
            })
            .duration(duration)
            .ease(easing);
    }

    // Load without animateion
    function withoutAnimation() {
        bars
            .attr('height', function (d) {
                return y(d);
            })
            .attr('y', function (d) {
                return height - y(d);
            })
    }


    $(window).on('resize', barsResize);

    // Call function on sidebar width change
    $(document).on('click', '.sidebar-control', barsResize);


    function barsResize() {

        // Layout variables
        width = d3Container.node().getBoundingClientRect().width;


        container.attr("width", width);

        // Width of appended group
        svg.attr("width", width);

        // Horizontal range
        x.rangeBands([0, width], 0.3);


        // Chart elements
        // -------------------------

        // Bars
        svg.selectAll('.d3-random-bars')
            .attr('width', x.rangeBand())
            .attr('x', function (d, i) {
                return x(i);
            });
    }
}

/*Верхние графики*/


/*СобатияСобатияСобатияСобатияСобатияСобатияСобатияСобатияСобатияСобатияСобатияСобатияСобатияСобатияСобатияСобатияСобатияСобатияСобатияСобатияСобатияСобатияСобатияСобатияСобатияСобатияСобатияСобатияСобатияСобатияСобатия
* СобатияСобатияСобатияСобатияСобатияСобатияСобатияСобатияСобатияСобатияСобатияСобатияСобатияСобатияСобатияСобатияСобатияСобатияСобатияСобатияСобатияСобатияСобатияСобатияСобатия
* СобатияСобатияСобатияСобатияСобатияСобатияСобатияСобатияСобатияСобатияСобатияСобатияСобатияСобатияСобатияСобатияСобатияСобатияСобатияСобатияСобатияСобатияСобатияСобатияСобатияСобатияСобатияСобатияСобатияСобатияСобатияСобатия
* СобатияСобатияСобатияСобатияСобатияСобатияСобатияСобатияСобатияСобатия*/


//Клик в чате по переключению типа лайн или график который справа
$(".chart-js-block li").on('click', function () {
    if (!$(this).is('.active')) {
        stack = $(this).attr('data-stack');
        $(".chart-js-block li").removeClass('active');
        $(this).addClass('active');
        type = $(this).attr('data-type');
        vals = $('.select_my_report.sactive').data('valur');
        w_reports_new( type);
    }
})




$(document).on('click', '.table-chart-body .tr-table-chart', function () {
    name = $(this).attr('data-name');
    summ=0;
    if ($(this).is('.active')) {
        $(this).removeClass('active');

        chart_doughnut.dispatchAction({
            type: 'legendUnSelect',
            // legend name
            name: name
        })


        $('.itogo-chart').addClass('active')



    } else {
        $(this).addClass('active');
        chart_doughnut.dispatchAction({
            type: 'legendSelect',
            // legend name
            name: name
        });

        $('.itogo-chart').addClass('active')


    }
    $(".tr-table-chart  ").each(function (i,element){
if($(element).hasClass('active')) {
    value = parseInt($(element).find('.td-2').html());

    summ = summ + value;
}

    });
    $('.summ-itogo').html(summ);
})


chart_doughnut.on('mouseover', function (params) {
    $('.itogo-chart').removeClass('active')
});

chart_doughnut.on('mouseout', function (params) {
    $('.itogo-chart').addClass('active')
});
$('.sidebar-main-toggle-menu').on('click', function () {
    setTimeout(chart.resize, 200);
    setTimeout(chart_doughnut.resize, 200);
})
