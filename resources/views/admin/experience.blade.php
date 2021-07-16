@extends('admin.layout')
@section('content')
    <form action="/admin/experience" method="post">
        @csrf
        eventName:<br>
        <input type="text" name="eventName">
        <br>
        bandNames:<br>
        <input type="text" name="bandNames">
        <br>
        startDate:<br>
        <input type="text" name="startDate">
        <br>
        endDate:<br>
        <input type="text" name="endDate">
        <br>
        portfolio:<br>
        <input type="text" name="portfolio">
        <br>
        ticketPrice:<br>
        <input type="text" name="ticketPrice">
        <br>
        status:<br>
        <input type="text" name="status">
    </form>
@endsection

