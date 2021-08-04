@extends('layouts.app')

@section('title')
    Add Teacher
@endsection


@section('content')

<section id="addFormSection">   

    <!-- FORM TO ADD A NEW TEACHER -->
    <form action="  " method="POST">
        @csrf
        
        <!-- TITLE -->
        <h2 id="titleAdd"><i class="fas fa-user-tie"></i> &nbsp; Add a Lecturer</h2> 
        <hr style="background: #B4A5A5; width:100%; height:3px;border:0;"/>

        <!-- LECTURER'S NAME -->
        <div class="form-group">
            <label for="name" >Lecturer's Name: </label> <br />
            <input type="text" name="name"  placeholder="eg: John Doe" />
        </div>

        <!-- EMAIL ID -->
        <div class="form-group">
            <label for="email" >Email ID: </label> <br />
            <input type="email" name="email"  placeholder="eg: john.doe999@gmail.com" />
        </div>
        
        <!-- PHONE -->
        <div class="form-group">
            <label for="phone" >Phone: </label> <br />
            <input type="text" name="phone"  placeholder="eg: 9816810976"/>
        </div>

        <!-- GENDER -->
        <div class="form-group">
            <label for="gender" >Gender: </label>
            <input type="radio"  name="gender" value="male" />   <span class="gender">Male </span>
            <input type="radio" name="gender" value="female" />  <span class="gender">Female </span>
            <input type="radio"  name="gender" value="others" /> <span class="gender">Others </span>
        </div>

        <!-- ADDRESS -->
        <div class="form-group">
            <label for="address" >Address: </label> <br />
            <input type="text" name="address"  placeholder="eg: Jhamsikhel, Kathmandu" />
        </div>

        <!-- NATIONALITY -->
        <div class="form-group">
            <label for="nationality" >Nationality: </label> <br />
            <select name="nationality" id="nationality">
            @include('nationalityList')
            </select>
        </div>

        <!-- DOB -->
        <div class="form-group">
            <label for="dob" >Date of birth: </label> <br />
            <input type="date" name="dob"  />
        </div>

        <!-- FACULTY -->
        <div class="form-group">
            <label for="faculty" >Faculty: </label>  <br />
            <select name="faculty" id="faculty">
                <option value="">-- select one --</option>
                <option value="fac1" > fac1 </option>
                <option value="fac2" > fac2 </option>
                <option value="fac3" > fac3 </option>
            </select>
        </div>

        <!-- MODULES RELATED TO FACULTY -->
        <div class="form-group">
            <label for="modules" >Modules: </label> <br />
            <select name="modules" id="modules">
                <option value="">-- select one --</option>
                <option value="mod1" > mod1 </option>
                <option value="mod2" > mod2 </option>
                <option value="mod3" > mod3 </option>
            </select>
        </div> 

        <!-- ADD BUTTON -->
        <div class="form-group" id="submitButton">
            <button type="submit" name="btnAdd" id="btnAdd" > Add Teacher </button>
        </div>

    </form>
    <!--NEW TEACHER FORM ENDS -->
    
</section>

@endsection