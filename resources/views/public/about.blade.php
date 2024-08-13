@extends('layouts.main')
@section('content')

@include('includes.site-header')

@include('includes.team-section')
 
@include('includes.testimonial-section')

@endsection


@section('team')

@include('includes.teamMemberModel')

@endsection
