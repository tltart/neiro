var mydb = {};
data_array = {}
mydb['opened'] = {}
mydb['opened']['text'] = 'Инструкции оператору, что он должен говорить';
mydb['opened']['is_goal'] = 0;
mydb['opened']['title'] =0;
mydb['opened']['parent_id'] =0;
mydb['opened']['tipblock'] =0;
mydb['opened']['xy'] =$('#opened').position();;




var step = 0.1;
jsPlumb.ready(function () {

    $('.js_zoom_plus').click(function (e) {

        e.preventDefault();
        var c = $('.js_desk');
        var zoom = 1;

        var matrix = c.css('transform').match(/(-?[0-9\.]+)/g);
        if (matrix) {
            zoom = matrix[0];
        }

        c.css('transform', 'scale(' + (parseFloat(zoom) + step) + ')');
        c.css('transform-origin', '0 0');

        jsp.setZoom(parseFloat(zoom) + step);

        if ($('.call_script_tour').is('.active')) {
            $.app.scriptTour.highlightFirstUndoneGoal();
        }
    });


    $('.js_zoom_reset').click(function (e) {

        e.preventDefault();
        var c = $('.js_desk');
        c.css('zoom', 1);
        c.css('transform', 'scale(1)');
        c.css('transform-origin', '0 0');
        jsp.setZoom(1);

        if ($('.call_script_tour').is('.active')) {
            $.app.scriptTour.highlightFirstUndoneGoal();
        }
    });

});
// setup some defaults for jsPlumb.
var instance = jsPlumb.getInstance({
    Endpoint: ["Dot", {radius: 2}],
    Connector: "Bezier",
    HoverPaintStyle: {strokeStyle: '#5c96bc', lineWidth: 2, outlineColor: 'transparent', outlineWidth: 4},
    ConnectionOverlays: [
        ["Arrow", {
            location: 1,
            id: "arrow",
            length: 14,
            foldback: 0.8
        }],
        ["Label", {label: "FOO", id: "label", cssClass: "aLabel"}]
    ],
    Container: "canvas"
});

instance.registerConnectionType("basic", {anchor: "Continuous", connector: "StateMachine"});

window.jsp = instance;

var canvas = document.getElementById("canvas");
var windows = jsPlumb.getSelector(".statemachine-demo .w");




// bind a connection listener. note that the parameter passed to this function contains more than
// just the new connection - see the documentation for a full list of what is included in 'info'.
// this listener sets the connection's internal
// id as the label overlay's text.
instance.bind("connection", function (info) {
    console.log(info.connection.id)
    info.connection.getOverlay("label").setLabel('Ответ');
});

// bind a double click listener to "canvas"; add new node when this occurs.

//
// initialise element as connection targets and source.
//
var initNode = function (el) {

    // initialise draggable elements.
    //instance.draggable(el);

    instance.makeSource(el, {
        filter: ".ep",
        anchor: "Continuous",
        connectorStyle: {stroke: "#5c96bc", strokeWidth: 2, outlineStroke: "transparent", outlineWidth: 4},
        connectionType: "basic",
        extract: {
            "action": "the-action"
        },
        maxConnections: 20,
        onMaxConnections: function (info, e) {
            alert("Maximum connections (" + info.maxConnections + ") reached");
        },

    });

    instance.makeTarget(el, {
        dropOptions: {hoverClass: "dragHover"},
        anchor: "Continuous",
        allowLoopback: true
    });

    // this is not part of the core demo functionality; it is a means for the Toolkit edition's wrapped
    // version of this demo to find out about new nodes being added.
    //
    instance.fire("jsPlumbDemoNodeAdded", el);
};

var newNode = function (x, y) {
    var d = document.createElement("div");
    var id = jsPlumbUtil.uuid();
    d.className = "w";
    d.id = id;
    d.innerHTML = `<div class="row w_text_block "></div><div class="row ">
                    <div class="add_step_plus col-md-1 green  "><i class="fa fa-plus pointer"></i></div>
                    <div class="deleteblock col-md-4 red  " action="delete"><i class="fa fa-trash pointer"></i><label class="truedel bgred">Удалить</label></div>
                    <div class="ep col-md-7 blue " action="begin"  style="text-align: right"><i class="fa fa-arrow-right pointer"></i></div>
                    </div>`;
    d.style.left = (x + 70) + "px";
    d.style.top = (y + 25) + "px";
    instance.getContainer().appendChild(d);
    initNode(d);


    return d;
};

// suspend drawing and initialise.
instance.batch(function () {
    for (var i = 0; i < windows.length; i++) {
        initNode(windows[i], true);
    }

    // and finally, make a few connections
    instance.connect({source: "opened", target: "phone1", type: "basic"});
    instance.connect({source: "phone1", target: "phone1", type: "basic"});
    instance.connect({source: "phone1", target: "inperson", type: "basic"});

});

jsPlumb.fire("jsPlumbDemoLoaded", instance);







function get_links(linki) {
    console.log("starts");

    console.log("starts");
    linki.forEach(function (item) {
        $('.links').append(add_links(mydb[item]));

    });
}



function add_links(data) {
    console.log(data);
    tip0='';
    tip1='';
    tip2='';
    tip10='';
    if(data['tip']==0){tip0='checked';tip10='';}
    if(data['tip']==1){tip1='checked';tip10='link_negative';}
    if(data['tip']==2){tip2='checked';tip10='link_positive';}



    return `<div class="link " data-cid="` + data['cid'] + `" data-id="` + data['id'] + `">
                            <div class="panel linkclass` + data['cid'] + ` `+tip10+`" >
                                <div class="panel-heading" role="tab" id="heading` + data['cid'] + `">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse` + data['cid'] + `" aria-expanded="false" aria-controls="collapse` + data['cid'] + `" class="collapsed atext` + data['cid'] + `">
                                            ` + data['text'] + `
                                        </a>
                                        <div class="btn-group pull-right">
                                          <button class="btn btn-default btn-xs js_answer_remove" type="button"><span class="glyphicon glyphicon-trash"></span></button>
                                        </div>
                                        <div class="clearfix"></div>
                                    </h4>
                                </div>
                                <div id="collapse` + data['cid'] + `" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading` + data['cid'] + `" style="height: 0px;" aria-expanded="false">
                                    <div class="panel-body">
                                        <textarea id="hs_rp_answer_heading_field_` + data['cid'] + `" data-cid="` + data['cid'] + `" placeholder="Ответ" class="form-control js_answer_label" style="margin-bottom:5px;">` + data['text'] + `</textarea>
                                         
                                        <div class="answer_status">
                                            <div>Статус</div>
                                            <div class="btn-group" data-toggle="buttons">
    <label class="btn btn-info  ">
        <input type="radio" name="options"  autocomplete="off" `+tip1+`  class="tipbut"  data-cid="` + data['cid'] + `" value="1"> Плохо
    </label>
    <label class="btn btn-info">
        <input type="radio" name="options"   autocomplete="off" `+tip0+`  class="tipbut"  data-cid="` + data['cid'] + `" value="0"> Нормально
    </label>
    <label class="btn btn-info">
        <input type="radio" name="options"   autocomplete="off" `+tip2+` value="2" class="tipbut" data-cid="` + data['cid'] + `"> Хорошо
    </label>
</div>
                                        </div>
                                        <button id="hs_rp_answer_form_submit_btn_` + data['cid'] + `" class="btn btn-default js_save_answer" type="button">Сохранить</button>
                                    </div>
                                </div>
                            </div>
                        </div>`
}

function safetable() {
    $.ajax({
        type: "POST",
        url: '/stat/phscript_safe_project/'+$('#project_id').val(),
        data: mydb,
        success: function (html1) {
            alert(1);

        }
    })
}



$('.js_zoom_minus').click(function (e) {
    e.preventDefault();
    var c = $('.js_desk');
    var zoom = 1;

    var matrix = c.css('transform').match(/(-?[0-9\.]+)/g);
    if (matrix) {
        zoom = matrix[0];
    }

    c.css('transform', 'scale(' + (parseFloat(zoom) - step) + ')');
    c.css('transform-origin', '0 0');

    jsp.setZoom(parseFloat(zoom) - step);

    if ($('.call_script_tour').is('.active')) {
        $.app.scriptTour.highlightFirstUndoneGoal();
    }
});

