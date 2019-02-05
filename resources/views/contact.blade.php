@extends('layouts.app')

@section('contact')
    <form method="post" action="/contact">
        <div class="row">
            <div class="col-md-12"><h1>Contact us</h1></div>
            <div class="col-md-4">
                <lable class="contact_field_lable">Name*</lable>
                <input class="contact_field" type="text" required>
            </div>
            <div class="col-md-4">
                <lable class="contact_field_lable">Email*</lable>
                <input class="contact_field" type="text" required>
            </div>
            <div class="col-md-4">
                <lable class="contact_field_lable">Phone number</lable>
                <input class="contact_field" type="text">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <lable class="contact_field_lable">Message*</lable>
                <input class="contact_field" type="text" required>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">recapcha</div>
            <div class="col-md-4"><span>* required field</span></div>
            <div class="col-md-4"><input type="submit" value="Send" class="btn contact_submit_btn"></div>
        </div>
        {{ csrf_field() }}
    </form>
@endsection