@extends('layouts.app')

@section('title')
    Add Teacher
@endsection


@section('content')

<section id="addFormSection">   

    <!-- FORM TO ADD A NEW TEACHER -->
    <form action=" {{ route('storeLecturer') }} " method="POST">
        @csrf
        
        <!-- TITLE -->
        <h2 id="titleAdd"><i class="fas fa-user-tie"></i> &nbsp; Add a Lecturer</h2> 
        <hr style="background: #B4A5A5; width:100%; height:3px;border:0;"/>

        <!-- LECTURER'S NAME -->
        <div class="form-group">
            <label for="name" >Lecturer's Name: </label> <br />
            <input type="text" name="name"  placeholder="eg: John Doe"  value="{{ old('name') }}"  class="{{ $errors->has('name') ? 'red-border' :'' }}" />
            @error('name')
                <p class="error-text"><i class="fas fa-exclamation-circle"></i> &nbsp; &nbsp; {{ $message }}</p>
            @enderror
        </div>

        <!-- EMAIL ID -->
        <div class="form-group">
            <label for="email" >Email ID: </label> <br />
            <input type="email" name="email"  placeholder="eg: john.doe999@gmail.com" value="{{ old('email') }}"  class="{{ $errors->has('email') ? 'red-border' :'' }}"  />
            @error('email')
                <p class="error-text"><i class="fas fa-exclamation-circle"></i> &nbsp; &nbsp; {{ $message }}</p>
            @enderror
        </div>
        
        <!-- PHONE -->
        <div class="form-group">
            <label for="phone" >Phone: </label> <br />
            <input type="text" name="phone"  placeholder="eg: 9816810976" value="{{ old('phone') }}"  class="{{ $errors->has('phone') ? 'red-border' :'' }}" />
            @error('phone')
                <p class="error-text"><i class="fas fa-exclamation-circle"></i> &nbsp; &nbsp; {{ $message }}</p>
            @enderror
        </div>

        <!-- GENDER -->
        <div class="form-group"  class="{{ $errors->has('gender') ? 'red-border' :'' }}" >
            <label for="gender" >Gender: </label>
            <input type="radio"  name="gender" value="male" />   <span class="gender">Male </span>
            <input type="radio" name="gender" value="female" />  <span class="gender">Female </span>
            <input type="radio"  name="gender" value="others" /> <span class="gender">Others </span>
            @error('gender')
                <p class="error-text"><i class="fas fa-exclamation-circle"></i> &nbsp; &nbsp; {{ $message }}</p>
            @enderror
        </div>

        <!-- ADDRESS -->
        <div class="form-group">
            <label for="address" >Address: </label> <br />
            <input type="text" name="address"  placeholder="eg: Jhamsikhel, Kathmandu" value="{{ old('address') }}"  class="{{ $errors->has('address') ? 'red-border' :'' }}"  />
            @error('address')
                <p class="error-text"><i class="fas fa-exclamation-circle"></i> &nbsp; &nbsp; {{ $message }}</p>
            @enderror
        </div>

        <!-- NATIONALITY -->
        <div class="form-group">
            <label for="nationality" >Nationality: </label> <br />
            <select name="nationality" id="nationality" value="{{ old('nationality') }}"  class="{{ $errors->has('nationality') ? 'red-border' :'' }}" >
            @include('nationalityList')
            </select>
            @error('nationality')
                <p class="error-text"><i class="fas fa-exclamation-circle"></i> &nbsp; &nbsp; {{ $message }}</p>
            @enderror
        </div>

        <!-- DOB -->
        <div class="form-group">
            <label for="dob" >Date of birth: </label> <br />
            <input type="date" name="dob"  value="{{ old('dob') }}"  class="{{ $errors->has('dob') ? 'red-border' :'' }}"  />
            @error('dob')
                <p class="error-text"><i class="fas fa-exclamation-circle"></i> &nbsp; &nbsp; {{ $message }}</p>
            @enderror
        </div>

        <!-- FACULTY -->
        <div class="form-group">
            <label for="faculty" >Faculty: </label>  <br />
            <select name="faculty" id="faculty" data-dependent="modules" value="{{ old('faculty') }}"  class="{{ $errors->has('faculty') ? 'red-border' :'' }}" >
                <option value="">-- select one --</option>
                @foreach($faculties  as  $faculty)
                    <option value=" {{ $faculty->id }} "> {{ $faculty->faculty_name }} </option>
                @endforeach
            </select>
            @error('faculty')
                <p class="error-text"><i class="fas fa-exclamation-circle"></i> &nbsp; &nbsp; {{ $message }}</p>
            @enderror
        </div>

        <!-- MODULES RELATED TO FACULTY -->
        <div class="form-group">
            <label for="modules[]" >Modules: </label> <br />
            <select name="modules[]" id="modules" value="{{ old('modules[]') }}"  class="{{ $errors->has('modules[]') ? 'red-border' :'' }}"  multiple required>
                <option value="">-- select one --</option>
            </select>
            @error('modules[]')
                <p class="error-text"><i class="fas fa-exclamation-circle"></i> &nbsp; &nbsp; {{ $message }}</p>
            @enderror
        </div> 

        <!-- ADD BUTTON -->
        <div class="form-group" id="submitButton">
            <button type="submit" name="btnAdd" id="btnAdd" > Add Teacher </button>
        </div>

    </form>
    <!--NEW TEACHER FORM ENDS -->
    
</section>

@endsection