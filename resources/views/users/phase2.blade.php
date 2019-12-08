@extends('layouts.frontview.master')

@section('content')
    <div id="right_container">
        <div class="conatiner">
            <div class="row">
                <div class="col-md-2">
                    <div class="col-md-10 showcase">
                        <h1>Add Dating Profile</h1>
                        <h5>Add Dating Profile by filling out the below</h5>
                        <h1>Add Dating Profile</h1>
                        <form action="{{ url('/phase/2') }}" id="" method="POST">
                            @csrf
                            <h1 class="">New User Registration</h1>
                            <h1 class="">Register</h1>
                            <div class="form-group">
                            <label for="inputEmail" class="sc-only">Date of Birth</label>
                            <input autocomplete="off" type="text" id="dob" name="dob" class="from-control" placeholder="Name">
                            <div>
                            <div class="form-group">
                            <label for="">Date Of Birth</label>
                            <select name="gender" id="">
                                <option value="">Select</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                            <div>
                            <div class="form-group">
                                <label>Height</label>
                            <div>
                            <div class="form-group">
                                    <select name="height" style="width:220px; font-size: 16px; height: 25px;">
                                            <option value="">Feet/Inches</option>
                                            <option value="4' 0'" @if(!empty($filloutformContent['height']) && $filloutformContent['height']=="4' 0'") selected="" @endif>4' 0"</option>

                                            <option value="4' 1'" @if(!empty($filloutformContent['height']) && $filloutformContent['height']=="4' 1'") selected="" @endif>4' 1"</option>
                                            <option value="4' 2'" @if(!empty($filloutformContent['height']) && $filloutformContent['height']=="4' 2'") selected="" @endif>4' 2"</option>
                                            <option value="4' 3'" @if(!empty($filloutformContent['height']) && $filloutformContent['height']=="4' 3'") selected="" @endif>4' 3"</option>
                                            <option value="4' 4'" @if(!empty($filloutformContent['height']) && $filloutformContent['height']=="4' 4'") selected="" @endif>4' 4"</option>
                                            <option value="4' 5'" @if(!empty($filloutformContent['height']) && $filloutformContent['height']=="4' 5'") selected="" @endif>4' 5"</option>
                                            <option value="4' 6'" @if(!empty($filloutformContent['height']) && $filloutformContent['height']=="4' 6'") selected="" @endif>4' 6"</option>
                                            <option value="4' 7'" @if(!empty($filloutformContent['height']) && $filloutformContent['height']=="4' 7'") selected="" @endif>4' 7"</option>
                                            <option value="4' 8'" @if(!empty($filloutformContent['height']) && $filloutformContent['height']=="4' 8'") selected="" @endif>4' 8"</option>
                                            <option value="4' 9'" @if(!empty($filloutformContent['height']) && $filloutformContent['height']=="4' 9'") selected="" @endif>4' 9"</option>
                                            <option value="4' 10'" @if(!empty($filloutformContent['height']) && $filloutformContent['height']=="4' 10'") selected="" @endif>4' 10"</option>
                                            <option value="4' 11'" @if(!empty($filloutformContent['height']) && $filloutformContent['height']=="4' 11'") selected="" @endif>4' 11"</option>
                                            <option value="5' 0'" @if(!empty($filloutformContent['height']) && $filloutformContent['height']=="5' 0'") selected="" @endif>5' 0"</option>
                                            <option value="5' 1'" @if(!empty($filloutformContent['height']) && $filloutformContent['height']=="5' 1'") selected="" @endif>5' 1"</option>
                                            <option value="5' 2'" @if(!empty($filloutformContent['height']) && $filloutformContent['height']=="5' 2'") selected="" @endif>5' 2"</option>
                                            <option value="5' 3'" @if(!empty($filloutformContent['height']) && $filloutformContent['height']=="5' 3'") selected="" @endif>5' 3"</option>
                                            <option value="5' 4'" @if(!empty($filloutformContent['height']) && $filloutformContent['height']=="5' 4'") selected="" @endif>5' 4"</option>
                                            <option value="5' 5'" @if(!empty($filloutformContent['height']) && $filloutformContent['height']=="5' 5'") selected="" @endif>5' 5"</option>
                                            <option value="5' 6'" @if(!empty($filloutformContent['height']) && $filloutformContent['height']=="5' 6'") selected="" @endif>5' 6"</option>
                                            <option value="5' 7'" @if(!empty($filloutformContent['height']) && $filloutformContent['height']=="5' 7'") selected="" @endif>5' 7"</option>
                                            <option value="5' 8'" @if(!empty($filloutformContent['height']) && $filloutformContent['height']=="5' 8'") selected="" @endif>5' 8"</option>
                                            <option value="5' 9'" @if(!empty($filloutformContent['height']) && $filloutformContent['height']=="5' 9'") selected="" @endif>5' 9"</option>
                                            <option value="5' 10'" @if(!empty($filloutformContent['height']) && $filloutformContent['height']=="5' 10'") selected="" @endif>5' 10"</option>
                                            <option value="5' 11'" @if(!empty($filloutformContent['height']) && $filloutformContent['height']=="5' 11'") selected="" @endif>5' 11"</option>
                                            <option value="6' 0'" @if(!empty($filloutformContent['height']) && $filloutformContent['height']=="6' 0'") selected="" @endif>6' 0"</option>
                                            <option value="6' 1'" @if(!empty($filloutformContent['height']) && $filloutformContent['height']=="6' 1'") selected="" @endif>6' 1"</option>
                                            <option value="6' 2'" @if(!empty($filloutformContent['height']) && $filloutformContent['height']=="6' 2'") selected="" @endif>6' 2"</option>
                                            <option value="6' 3'" @if(!empty($filloutformContent['height']) && $filloutformContent['height']=="6' 3'") selected="" @endif>6' 3"</option>
                                            <option value="6' 4'" @if(!empty($filloutformContent['height']) && $filloutformContent['height']=="6' 4'") selected="" @endif>6' 4"</option>
                                            <option value="6' 5'" @if(!empty($filloutformContent['height']) && $filloutformContent['height']=="6' 5'") selected="" @endif>6' 5"</option>
                                            <option value="6' 6'" @if(!empty($filloutformContent['height']) && $filloutformContent['height']=="6' 6'") selected="" @endif>6' 6"</option>
                                            <option value="6' 7'" @if(!empty($filloutformContent['height']) && $filloutformContent['height']=="6' 7'") selected="" @endif>6' 7"</option>
                                            <option value="6' 8'" @if(!empty($filloutformContent['height']) && $filloutformContent['height']=="6' 8'") selected="" @endif>6' 8"</option>
                                            <option value="6' 9'" @if(!empty($filloutformContent['height']) && $filloutformContent['height']=="6' 9'") selected="" @endif>6' 9"</option>
                                            <option value="6' 10'" @if(!empty($filloutformContent['height']) && $filloutformContent['height']=="6' 10'") selected="" @endif>6' 10"</option>
                                            <option value="6' 11'" @if(!empty($filloutformContent['height']) && $filloutformContent['height']=="6' 11'") selected="" @endif>6' 11"</option>
                                            <option value="7' 0'" @if(!empty($filloutformContent['height']) && $filloutformContent['height']=="7' 0'") selected="" @endif>7' 0"</option>
                                            <option value="7' 1'" @if(!empty($filloutformContent['height']) && $filloutformContent['height']=="7' 1'") selected="" @endif>7' 1"</option>
                                            <option value="7' 2'" @if(!empty($filloutformContent['height']) && $filloutformContent['height']=="7' 2'") selected="" @endif>7' 2"</option>
                                            <option value="7' 3'" @if(!empty($filloutformContent['height']) && $filloutformContent['height']=="7' 3'") selected="" @endif>7' 3"</option>
                                            <option value="7' 4'" @if(!empty($filloutformContent['height']) && $filloutformContent['height']=="7' 4'") selected="" @endif>7' 4"</option>
                                            <option value="7' 5'" @if(!empty($filloutformContent['height']) && $filloutformContent['height']=="7' 5'") selected="" @endif>7' 5"</option>
                                            <option value="7' 6'" @if(!empty($filloutformContent['height']) && $filloutformContent['height']=="7' 6'") selected="" @endif>7' 6"</option>
                                            <option value="7' 7'" @if(!empty($filloutformContent['height']) && $filloutformContent['height']=="7' 7'") selected="" @endif>7' 7"</option>
                                            <option value="7' 8'" @if(!empty($filloutformContent['height']) && $filloutformContent['height']=="7' 8'") selected="" @endif>7' 8"</option>
                                            <option value="7' 9'" @if(!empty($filloutformContent['height']) && $filloutformContent['height']=="7' 9'") selected="" @endif>7' 9"</option>
                                            <option value="7' 10'" @if(!empty($filloutformContent['height']) && $filloutformContent['height']=="7' 10'") selected="" @endif>7' 10"</option>
                                            <option value="7' 11'" @if(!empty($filloutformContent['height']) && $filloutformContent['height']=="7' 11'") selected="" @endif>7' 11"</option>
                                            <option value="8' 0'" @if(!empty($filloutformContent['height']) && $filloutformContent['height']=="8' 0'") selected="" @endif>8' 0"</option>
                                        </select>
                            </div>
                            <div class="form-group">
                                <label for="">Marital Status</label>

                            </div>

                            <div class="form-group">
                                <select name="marital_status" style="width:208px; font-size: 14px; height: 25px;">
                                    <option value="Unmarried" @if(!empty($filloutformContent['marital_status']) && $filloutformContent['marital_status']=="Unmarried") selected="" @endif>Unmarried</option>
                                    <option value="Married"  @if(!empty($filloutformContent['marital_status']) && $filloutformContent['marital_status']=="Married") selected="" @endif>Married</option>
                                    <option value="Divorced"  @if(!empty($filloutformContent['marital_status']) && $filloutformContent['marital_status']=="Divorced") selected="" @endif>Divorced</option>
                                    <option value="Widowed"  @if(!empty($filloutformContent['marital_status']) && $filloutformContent['marital_status']=="Widowed") selected="" @endif>Widowed</option>
                                    <option value="Seperated"  @if(!empty($filloutformContent['marital_status']) && $filloutformContent['marital_status']=="Seperated") selected="" @endif>Seperated</option>
                                    <option value="Annulled"  @if(!empty($filloutformContent['marital_status']) && $filloutformContent['marital_status']=="Annulled") selected="" @endif>Annulled</option>
                                    <option value="Other"  @if(!empty($filloutformContent['marital_status']) && $filloutformContent['marital_status']=="Other") selected="" @endif>Other</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Body Type</label>
                            </div>
                            <div class="form-group">
                                <select name="body_type" style="width:208px; font-size: 14px; height: 25px;">
                                    <option value="">Select</option>
                                    <option value="slim">Slim</option>
                                    <option value="average">Average</option>
                                    <option value="athletic">Athletic</option>
                                    <option value="heavy">Heavy</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Complexion</label>
                            </div>
                            <div class="form-group">
                                <select name="complexion" style="width:208px; font-size: 14px; height: 25px;">
                                    <option value="">Select</option>
                                    <option value="very_fair">Very Fair</option>
                                    <option value="fair">Fair</option>
                                    <option value="wheatish">Wheatish</option>
                                    <option value="dark">Dark</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Langauges</label>
                            </div>
                            <div class="form-group">
                                <select name="languages[]" multiple style="width:208px; font-size: 14px; height: 25px;">
                                    <option value="">Select</option>
                                    @foreach($languages as $language)
                                        <option value="{{ $language->name }}">{{ $language->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Hobbies</label>
                            </div>
                            <div class="form-group">
                                <select name="hobbies[]" multiple style="width:208px; font-size: 14px; height: 25px;">
                                    <option value="">Select</option>
                                    @foreach($hobbies as $hobby)
                                        <option value="{{ $language->title }}">{{ $language->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Country</label>
                            </div>
                            <div class="form-group">
                                <select name="country" style="width:208px; font-size: 14px; height: 25px;">
                                    <option value="">Select</option>
                                    @foreach($countries as $country)
                                        <option value="{{ $country->name }}">{{ $country->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Highest Education</label>
                            </div>
                            <div class="form-group">
                                <input type="text" autocomplete="off" id="education" >
                            </div>
                            <div class="form-group">
                                <label for="">Occupation</label>
                            </div>
                            <div class="form-group">
                                <select name="occupation" id="occupations">
                                    <option value="">Select</option>
                                    @foreach($occupations as $occupation)
                                        <option value="{{ $occupation->title }}">{{ $occupation->title }}</option>

                                    @endforeach
                                </select>
                            </div>
                            <td><input type="submit" name="submit" class="button" value="Submit"></td>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
