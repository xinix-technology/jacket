@extends('layout')

<?php use ROH\Util\Inflector; ?>

@section('pagetitle')
    {{ l('Create New {0}', Inflector::humanize(f('controller')->getClass())) }}
@stop

@section('main.classes')
    has-actions
@stop

@section('back')
    <ul class="flat left">
        <li><a href="{{ f('controller.url') }}"><i class="xn xn-left-open"></i>{{ l('Back') }}</a></li>
        <li><a href="{{ f('controller.url', '/null/create') }}" class="disable"><i class="xn xn-plus"></i>{{ l('New') }}</a></li>
        <li><a href="{{ f('controller.url') }}" class="disable"><i class="xn xn-pencil"></i> {{ l('Edit') }}</a></li>
    </ul>
@stop

@section('tabssearch')
@stop

@section('menu')
@stop

@section('fields')
    <form method="post" id="createform" class="read">
        <h1>{{ l('Create New {0}', Inflector::humanize(f('controller')->getClass())) }}</h1>
        <div class="row">
            <?php $i = 0 ?>
            @foreach (f('controller')->schema() as $name => $field)
                @if (!$field['hidden'])
                    <div class="span-6 medium-12">
                        <div class="row {{ (f('notification.message', $name) AND $app->request->getMethod() !== 'GET') ? 'tooltip-text required' : ''}}">
                            {{ $field->label() }}
                            {{ $entry->format($name, 'input') }}
                            <span class="tooltip bottom">{{ f('notification.message', $name) }}</span>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
        <input type="submit" value="Submit" class="hidden" />
    </form>
@stop

@section('contextual.content')
    <nav class="row">
        <div class="pull-left">
            <input type="reset" value="Reset" class="button" onclick="$('#createform').reset ()" />
        </div>
        <div class="pull-right">
            <input type="submit" value="Save" class="button solid" onclick="$('#createform').submit ()" />
            <input type="submit" value="Save and Stay" class="button solid success" onclick="$('#createform').submit ()" />
        </div>
    </nav>
@stop