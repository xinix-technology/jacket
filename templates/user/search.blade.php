@extends('layout')

<?php use ROH\Util\Inflector; ?>

<?php
$schema = array();
foreach (f('controller')->schema() as $key => $field) {
    if ($field['list-column']) {
        $schema[$key] = $field;
    }
}
?>

@section('pagetitle')
   {{ Inflector::pluralize(Inflector::humanize(f('controller')->getClass())) }}
@stop

@section('tabssearch')
@stop

@section('menu')
@stop

@section('content')
    @if(!$entries->count(true))
        <div class="contentcenter">
            <div class="middle">
                <p class="empty"><i class="xn xn-docs"></i><br />Data still empty.<br />Click <a href="{{ f('controller.url', '/null/create') }}"><i class="xn xn-plus"></i> New</a> to add new data.</p>
            </div>
        </div>
    @else
        <form method="get" id="search-form" class="wrapper full">
            @section('table.filter')
            @show
            @section('table.body')
                <s-namecardbook responsive>
                    <s-bookmark>A</s-bookmark>
                    @foreach ($entries as $entry)
                        <?php $i = 0 ?>
                        <s-namecard href="{{ f('controller.url', '/'.$entry['$id']) }}">
                            @if (count($schema))
                                <s-photo>{{ substr($entry["first_name"], 0, 1) . " " . substr($entry["last_name"], 0, 1)  }}</s-photo>
                                <s-name>{{ $entry["first_name"] . " " . $entry["last_name"]  }}</s-name>
                                <s-email>{{ $entry["email"] }}</s-email>
                            @else
                                {{ $entry->format() }}
                            @endif
                        </s-namecard>
                    @endforeach
                </s-namecardbook>
            @show
            <input type="submit" style="display:none" />
        </form>
        <script type="text/javascript">
            $('#search-form').on('submit', function(evt) {
                evt.preventDefault();
                var qs = [];
                $(this).serializeArray().forEach(function(a) {
                    if (a.value) {
                        qs.push(a.name + '!like=' + a.value);
                    }
                });
                location.href = (qs.length) ? location.pathname + '?' + qs.join('&') : location.pathname;
            });
        </script>
    @endif
@stop


@section('contextual')
@show