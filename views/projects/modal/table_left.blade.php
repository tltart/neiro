<table class="table">
    <tr>
        <td>Дата</td>
        <td class="right-td">{{date('H:i d.m.Y', strtotime($project->created_at))}}</td>
    </tr>
    <tr>
        <td>Источник</td>
        <td class="right-td">{!!   $project->source !!}</td>


    </tr>
    <tr>
        <td>Визит №</td>
        <td class="right-td">{{$project->mongometrikaall()}}</td>
    </tr>
    <tr>
        <td>Просмотрено страниц</td>
        <td class="right-td">{{$project->mongometrikapages()}}</td>
    </tr>



    <tr>
        <td>Страница входа</td>


    @if (\Cookie::get('admin') || auth()->user()->my_company_id == 20)
        <tr>
            <td>ID</td>
            <td class="right-td">{{$project->id }} </td>
        </tr>
        <tr>
            <td>metrika_id</td>
            <td class="right-td">{{ $project->metrika_id}}</td>
        </tr>
@endif
    @if ($project->amo_id > 0)
    <tr>
        <td>AmoCRM</td>
        <td class="right-td">{{$project->amo_id}}</td>
    </tr>
@endif
    @if ($project->bt24_id > 0)
    <tr>
        <td>Bitrix24</td>
        <td class="right-td">{{$project->bt24_id}}</td>
    </tr>
@endif
</table>