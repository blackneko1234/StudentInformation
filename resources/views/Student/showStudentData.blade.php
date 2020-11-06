@extends('Master.master')

@section('title','Student Information')

@section('section')
<div class="section BG2" id="section">
   <div class="container" style="margin-top: 4%;">
      <div class="card text-dark border-dark">
         <div class="card-body">
            <div class="card-title" style="color: #504f50;margin-left:3%">
               <h1>Student Information</h1>
            </div>
            <br>
            <div class="card-text" style="padding: 3%;">
               <div class="row" style="margin-left: 3%;">
                  <div class="col-4">
                     <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_1280.png" style="margin-right:5%;width:280px;height:280px">
                  </div>
                  <div class="col-3" style="margin-top:6%">
                     <h5>Name: {{$studentData[0]->student_name}}</h5>
                     <h5>Gender: {{$studentData[0]->gender}}</h5>
                     <h5>Birth Date: {{$studentData[0]->birthdate}}</h5>
                     <h5>GPA:{{$studentData[0]->gpa}}</h5>
                  </div>
                  <div class="col-5" style="margin-top:6%">
                     <h5>Lastname: {{$studentData[0]->student_lastname}}</h5>
                     <h5>Phone: {{$studentData[0]->student_phone}}</h5>
                     <h5>Age: xxx </h5>
                  </div>
               </div>
            </div>
         </div>
      </div>

   </div>
</div>

<div class="section BG3" id="section">
   <div class="container">
      <!--  <div class="card text-dark border-dark">
         <div class="card-body">
            <div class="card-title"> -->

      <!-- </div>
            <br> -->
      <div class="row" style="margin-top: 5%;">
         <div class="col">
            <h1>Current Course</h1>
         </div>
         <div class="col-3" style="text-align: end;margin-top:1.5%">
            {{Form::open(array('url' => '/'))}}
            {{Form::submit('Add Course',['class'=>'btn btn-success'])}}
            {{Form::close()}}
         </div>
      </div>
      <table class="table table-hover">
         <thead>
            <tr>
               <th scope="col">Course ID</th>
               <th scope="col">Course Name</th>
               <th scope="col">Credit</th>
               <th scope="col">Grade</th>
               <th scope="col">Operation</th>
            </tr>
         </thead>

         <tbody>
             @foreach ($courseOfStudent as $list)
            <tr>
               <th scope="row">{{$list->course_id}}</th>
               <td>{{$list->course_name}}</td>
               <td>{{$list->credit}}</td>
               <td>{{$list->grade}}</td>
               <td>
                  <div class="row">
                     {{Form::open(array('url' => '/','method'=>'get','style'=>'margin-right:4%'))}}
                     {{Form::submit('Detail',['class'=>'btn btn-success'])}}
                     {{Form::close()}}

                     {{Form::open(array('url' => '/'))}}
                     {{Form::submit('Drop',['class'=>'btn btn-danger'])}}
                     {{Form::close()}}
                  </div>
               </td>
            </tr>
            @endforeach
         </tbody>
      </table>
      <!-- </div>
      </div> -->

   </div>
</div>
@endsection