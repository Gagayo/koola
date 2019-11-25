

@extends('errors::layout')

@section('title', 'Page not found')
<a href="{{ route('home') }}">Return home page</a>

@section('message', "Ouff desolé la demandé n'existe pas ")