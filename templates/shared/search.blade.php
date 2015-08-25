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

@section('main.classes')
    @if(!$entries->count(true))
        has-actions
    @else
        has-actions has-table
    @endif
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
            <div class="table-container">
                <table class="table nowrap hover">
                    <thead>
                        @section('table.head')
                        <tr>
                            @if (count($schema))
                                @foreach ($schema as $key => $field)
                                    <th><a href="{{{ f('controller.url', '?!sort['.$key.']='.(@$_GET['!sort'][$key] == 1 ? -1 : 1)) }}}">{{ $field['label'] }} </a></th>
                                @endforeach
                            @else
                                <th>Data</th>
                            @endif
                        </tr>
                        @show
                        @section('table.filter')
                            <!-- <tr>
                                @foreach ($schema as $key => $field)
                                    @if(! $field['hidden'])
                                        <th><input type="text" placeholder="{{ $field['label'] }}" name="{{ $key }}" value="{{ $app->request->get($key.'!like') }}" /></th>
                                    @endif
                                @endforeach
                            </tr> -->
                        @show
                    </thead>
                    <tbody>
                        @section('table.body')
                            @foreach ($entries as $entry)
                                <?php $i = 0 ?>
                                <tr>
                                    @if (count($schema))
                                        @foreach ($schema as $name => $field)
                                            <td>
                                                @if($i++ === 0)
                                                    <a href="{{ f('controller.url', '/'.$entry['$id']) }}">{{ substr($field->format('plain', $entry[$name], $entry), 0, 48) }}</a>
                                                @else
                                                    <?php try { $string = strip_tags($entry->format($name)); echo substr($string, 0, 48); } catch(\Exception $e) { echo 'xxx'; var_dump($e); } ?>
                                                @endif
                                            </td>
                                        @endforeach
                                    @else
                                        <td><a href="{{ f('controller.url', '/'.$entry['$id']) }}">{{ $entry->format() }}</a></td>
                                    @endif
                                </tr>
                            @endforeach
                        @show
                    </tbody>
                </table>
            </div>
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
    @if($entries->count(true))
        <nav id="contextual">
            @section('contextual.content')
                @section('pagination')
                    <ul class="pagination centered">
                       <li class="arrow-first"><a href="#"> |&lt; </a></li>
                       <li class="prev"><a href="#"> &lt; </a></li>
                       <li class="active"><a href="#">1</a></li>
                       <li><a href="#">2</a></li>
                       <li><a href="#">3</a></li>
                       <li class="unavailable"><a href="#">…</a></li>
                       <li><a href="#">8</a></li>
                       <li><a href="#">9</a></li>
                       <li><a href="#">10</a></li>
                       <li class="next"><a href="#"> &gt; </a></li>
                       <li class="arrow-last"><a href="#"> &gt;| </a></li>
                    </ul>
                @show
            @show
        </nav>
    @endif
@show