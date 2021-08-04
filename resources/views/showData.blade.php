@extends('layouts.app')

@section('title')
    Show Teachers
@endsection

@section('content')

<section id="showDataSection">
    
    @foreach($teachers as $teacher)
    <div class="container">

        <!-- TITLE -->
        <h2 id="titleAdd"><i class="fas fa-user-tie"></i> &nbsp; Lecturer's Info</h2> 
        <hr style="background: #B4A5A5; width:100%; height:3px;border:0;"/>

        <!-- Faculty Name -->
        <div class="item">
            <div class="item1">Faculty Name: </div>
            <div class="item2"> {{ $teacher->faculty->faculty_name  }} </div>
        </div>

        <!-- Lecturer's Name -->
        <div class="item">
            <div class="item1">Lecturer's Name: </div>
            <div class="item2"> {{ $teacher['name'] }} </div>
        </div>

        <!-- Gender -->
        <div class="item">
            <div class="item1"> Gender: </div>
            <div class="item2"> {{ ucfirst( $teacher['gender'] ) }} </div>
        </div>

        <!-- Address -->
        <div class="item">
            <div class="item1"> Address: </div>
            <div class="item2"> {{ ucfirst( $teacher['address'] ) }} </div>
        </div>

        <!-- Phone -->
        <div class="item">
            <div class="item1"> Phone: </div>
            <div class="item2"> {{ $teacher['phone'] }} </div>
        </div>

        <!-- Email -->
        <div class="item">
            <div class="item1"> Email ID: </div>
            <div class="item2"> {{ $teacher['email'] }}</div>
        </div>

        <!-- Modules -->
        <div class="item">
            <div class="item1">Modules Taught: </div>
            <div class="item2"> 
                @foreach ($teacher->taughtModules as $module)
                    <span class="modules">{{ $module->module->module_name }}</span>
                
                @endforeach
            </div>
        </div>


    </div>
    @endforeach

    <div id="pagination"> {{ $teachers->links('vendor.pagination.custom') }} </div>

    
</section>

@endsection