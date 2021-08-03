<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TASK-1</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    
    

    <!-- MAIN SECTION -->
    <section id="mainSection">
        

        <!-- FORM TO ADD A NEW TEACHER -->
        <form action="  " method="POST">
            @csrf
            
            <!-- TITLE -->
            <h2 id="titleAdd">Add a Lecturer</h2> 

            <!-- LECTURER'S NAME -->
            <div class="form-group">
                <label for="name" >Lecturer's Name: </label> <br />
                <input type="text" name="name"  placeholder="eg: John Doe" />
            </div>
            
            <!-- GENDER -->
            <div class="form-group">
                <label for="gender" >Gender: </label>
                <input type="radio" name="gender" value="male" /> Male
                <input type="radio" name="gender" value="female" /> Female
                <input type="radio" name="gender" value="others" /> Others
            </div>

            <!-- PHONE -->
            <div class="form-group">
                <label for="phone" >Phone: </label> <br />
                <input type="text" name="phone"  placeholder="eg: 9816810976"/>
            </div>

            <!-- EMAIL ID -->
            <div class="form-group">
                <label for="email" >Email ID: </label> <br />
                <input type="email" name="email"  placeholder="eg: john.doe999@gmail.com" />
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

    </section> 
    <!-- MAIN SECTION ENDS -->

</body>
</html>