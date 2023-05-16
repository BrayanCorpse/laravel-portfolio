@extends('backend.layouts.main')

@section('name__section', 'New Palette')

@section('content')
<div class="column col-9 col-sm-11">
    <form class="form-horizontal" action="#forms">
      <div class="form-group">
        <div class="col-3 col-sm-12">
          <label class="form-label" for="input-example-4">Name</label>
        </div>
        <div class="col-9 col-sm-12">
          <input class="form-input" id="input-example-4" type="text" placeholder="Name">
        </div>
      </div>
      <div class="form-group">
        <div class="col-3 col-sm-12">
          <label class="form-label" for="input-example-5">Email</label>
        </div>
        <div class="col-9 col-sm-12">
          <input class="form-input" id="input-example-5" type="email" placeholder="Email">
        </div>
      </div>
      <div class="form-group">
        <div class="col-3 col-sm-12">
          <label class="form-label">Gender</label>
        </div>
        <div class="col-9 col-sm-12">
          <label class="form-radio">
            <input type="radio" name="gender"><i class="form-icon"></i> Male
          </label>
          <label class="form-radio">
            <input type="radio" name="gender" checked=""><i class="form-icon"></i> Female
          </label>
        </div>
      </div>
      <div class="form-group">
        <div class="col-3 col-sm-12">
          <label class="form-label">Source</label>
        </div>
        <div class="col-9 col-sm-12">
          <select class="form-select" multiple="">
            <option>Slack</option>
            <option>Skype</option>
            <option>Hipchat</option>
          </select>
        </div>
      </div>
      <div class="form-group">
        <div class="col-9 col-sm-12 col-ml-auto">
          <label class="form-switch">
            <input type="checkbox"><i class="form-icon"></i> Send me emails with news and tips
          </label>
        </div>
      </div>
      <div class="form-group">
        <div class="col-3 col-sm-12">
          <label class="form-label" for="input-example-6">Message</label>
        </div>
        <div class="col-9 col-sm-12">
          <textarea class="form-input" id="input-example-6" placeholder="Textarea" rows="3"></textarea>
        </div>
      </div>
      <div class="form-group">
        <div class="col-9 col-sm-12 col-ml-auto">
          <label class="form-checkbox">
            <input type="checkbox"><i class="form-icon"></i> Remember me
          </label>
        </div>
      </div>
    </form>
  </div>
@endsection