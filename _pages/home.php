---
title: 'main::lang.home.title'
permalink: /
description: ''
layout: default
---

<form action="/updatelocale" method="post">
  <label for="es_ES">Language code:</label><br>  
  <input type="text" id="es_ES" name="es_ES" value="es_ES"><br><br>
  <input type="submit" value="Submit">
</form> 


{!! Form::open(['method' => 'POST', 'updatelocale' => 'updatelocale', 'class' => 'form-inline navbar-select']) !!}

    <div class="form-group @if($errors->first('locale')) has-error @endif">
        <span aria-hidden="true"><i class="fa fa-flag"></i></span>
        {!! Form::select(
            'locale',
            ['en' => 'EN', 'es_ES' => 'es_ES'],
            \App::getLocale(),
            [
                'id'       => 'locale',
                'class'    => 'form-control',
                'required' => 'required',
                'onchange' => 'this.form.submit()',
            ]
        ) !!}
        <small class="text-danger">{{ $errors->first('locale') }}</small>
    </div>

    <div class="btn-group pull-right sr-only">
        {!! Form::submit("Change", ['class' => 'btn btn-success']) !!}
    </div>

{!! Form::close() !!}




<li><a href="{{ url('locale/en') }}" ><i class="fa fa-language"></i> EN</a></li>

<li><a href="{{ url('locale/es_ES') }}" ><i class="fa fa-language"></i> ES</a></li>

SET LOCALE

<li><a href="{{ url('setlocale/en') }}" ><i class="fa fa-language"></i> EN</a></li>

<li><a href="{{ url('setlocale/es_ES') }}" ><i class="fa fa-language"></i> ES</a></li>

===== NEW ONE ===



