@extends('shared/create')

<?php use ROH\Util\Inflector; ?>

@section('pagetitle')
    {{ l('{0}: ', array(Inflector::humanize(f('controller')->getClass()))).$entry->format() }}
@stop

@section('back')
    <ul class="flat left">
        <li><a href="{{ f('controller.url') }}"><i class="xn xn-left-open"></i>{{ l('Back') }}</a></li>
        <li><a href="{{ f('controller.url', '/null/create') }}"><i class="xn xn-plus"></i>{{ l('New') }}</a></li>
        <li><a href="{{ f('controller.url', '/:id/update') }}"><i class="xn xn-pencil"></i> {{ l('Edit') }}</a></li>
    </ul>
@stop

@section('fields')
    <form class="read">
        <h1>{{ l('{0}', Inflector::humanize(f('controller')->getClass())) }}</h1>
        <div class="row">
            <?php $i = 0; ?>
            @foreach (f('controller')->schema() as $name => $field)
                @if (!$field['hidden'])
                    <div class="span-6 medium-12">
                        <div class="row {{ (f('notification.message', $name) AND $app->request->getMethod() !== 'GET') ? 'tooltip-text required' : ''}}">
                            {{ $field->label() }}
                            {{ $entry->format($name, 'readonly') }}
                            <span class="tooltip bottom">{{ f('notification.message', $name) }}</span>
                        </div>
                    </div>
                    <?php if (++$i % 2 == 0) echo "</div><div class='row'>"; ?>
                @endif
            @endforeach
        </div>
    </form>
@stop

@section('contextual.content')
    <nav class="row">
        <div class="pull-left">
            <a href="{{ f('controller.url', '/:id/delete') }}" class="button error popup noclose modal"><i class="xn xn-trash"></i>{{{ l('Delete') }}}</a>
        </div>
        <div class="pull-right">&nbsp;</div>
    </nav>
@stop