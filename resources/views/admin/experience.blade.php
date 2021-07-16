@extends('admin.layout')
@section('content')
    <form action="/admin/experience" method="post">
        @csrf
        eventName:<br>
        <input type="text" name="eventName">
        @error('eventName')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>
        bandNames:<br>
        <input type="text" name="bandNames">
        @error('bandNames')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>
        startDate:<br>
        <input type="text" name="startDate">
        @error('startDate')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>
        endDate:<br>
        <input type="text" name="endDate">
        @error('endDate')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>
        portfolio:<br>
        <input type="text" name="portfolio">
        <br>
        ticketPrice:<br>
        <input type="text" name="ticketPrice">
        @error('ticketPrice')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>
        status:<br>
        <input type="text" name="status">
        @error('status')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </form>
@endsection

