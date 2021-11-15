<style>
.page-title1.row {
	display:none;}
.panel.panel-flat .panel-heading{
	    display: none;
	}
	.table>thead>tr>th{
		    border-bottom: 1px solid #bbb;
    text-transform: uppercase;
    color: #999999;
    font-size: 12px;
    padding-top: 10px;
    padding-bottom: 10px;
    border: 0px !important;
    background: #fafafa;
		}
		
	.panel-flat>.panel-heading+.panel-body {
    padding-top: 0;
    padding-left: 0px;
    padding-right: 0px;
}	
#pagin .pagination{
    padding-left: 0px;
    padding-top: 20px;
    padding-right: 20px;
    float: right;
	
	}
.container__deshbord .panel{
	border-radius: 10px;
	    margin-top: 20px;
	}	
	
.panel-top-n-table{
	padding: 0px;
    background: #fff;
    -webkit-box-shadow: 0 1px 3px rgb(0 0 0 / 12%), 0 1px 2px rgb(0 0 0 / 24%);
    box-shadow: 0 1px 3px rgb(0 0 0 / 12%), 0 1px 2px rgb(0 0 0 / 24%);
    border-radius: 10px;
	}	
	.container__deshbord .panel {
    border-radius: 10px;
    margin-top: 20px;
    background: none;
    box-shadow: none;
}
#pagin .pagination > li{
	
	}	
#pagin .pagination > li a{
	    font-family: Roboto, Helvetica Neue, Helvetica, Arial, sans-serif;
    font-size: 13px;     border-radius: 3px;     box-shadow: none;
    background: none;
	}	
#pagin .pagination > li span{
		    font-family: Roboto, Helvetica Neue, Helvetica, Arial, sans-serif;
    font-size: 13px;     border-radius: 3px;
	}
	
#pagin .pagination > li.disabled span{
	 box-shadow: none;
    background: none;
	}	
		
#pagin .pagination > li.active span{
	color: #fff;
    background-color: #455a64;

	}
.container__deshbord .panel-body span.block-selectable{
	font-size: 11px;}
.table-responsive{
	border-radius:10px;}	
.table-responsive thead{
    position: relative;
    z-index: 200;}	
	
					
</style>
<div class="col-xs-12 panel-top-n-table" >
    <script>
        $(document).ready(() => {
            var navbar = $(".navbar")
            var position = navbar.css("position")
            var headMargin = position !== 'fixed' ? 0 : navbar.height();
            var tableHead = $("#table-responsive-calltracking thead")
            var tableHeadInitialY = tableHead.offset().top
            var calcedMargin = +headMargin-tableHeadInitialY
            var onScroll = () => {
                var winY = window.scrollY
                if (tableHeadInitialY <= winY) {
                    tableHead.css({ top: winY+calcedMargin})
                } else {
                    tableHead.css({ top: 0})
                }
            };
            onScroll()
            $(window).scroll(onScroll)
        })
        
    </script>
    <input type="hidden" id="wid_id" value="{{$widget->id}}">
    <div class="table-responsive" id="table-responsive-calltracking"><table class="table">
            <thead>  <tr>
            <th style="    border-radius: 10px 0px 0px 0px;">Дата</th>

            <th>Номер</th>
                <th>На Номер</th>
            <th>Ожидание</th>
            <th>Длительность</th>
            <th>Статус</th>
            <th>Запись</th>
            <th>Статус</th>

            <th style="    border-radius: 0px 10px 0px 0px;">Источник</th>
            {{--    <th>Проект</th>--}}
        </tr></thead>
            <tbody id="winputcall">

            </tbody>
        </table></div></div>
     <div class="row" id="pagin"> </div>
 @include('modal.openmodal')