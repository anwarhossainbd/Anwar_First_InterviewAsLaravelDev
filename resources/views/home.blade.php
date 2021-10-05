@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Student Form') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                    <form method="post" action="{{route('upload')}}" id="upload_form" enctype="multipart/form-data">
                     {{ csrf_field() }}
                     <div class="form-group row">
                        <label  class="col-sm-2 col-form-label">Student Name</label>
                        <div class="col-sm-10">
                          <input type="text" name="student_Name"  class="form-control" >
                        </div>
                      </div>
                      <div class="form-group row">
                         <label  class="col-sm-2 col-form-label">Father Name</label>
                         <div class="col-sm-10">
                           <input type="text" name="father_Name" class="form-control" >
                         </div>
                       </div>
                      <div class="form-group row">
                         <label  class="col-sm-2 col-form-label">Student Id</label>
                         <div class="col-sm-10">
                           <input type="text" readonly name="student_id" value="{{$myid}}" class="form-control" >
                         </div>
                       </div>

                        <div class="form-group row">
                                                <label  class="col-sm-2 col-form-label">Address</label>
                                                <div class="col-sm-10" >

                                                    <div class="card p-3"  >

                                                      <div class="form-group row">
                                                          <label  class="col-sm-2 col-form-label">Division</label>
                                                               <div class="col-sm-10">
                                                                   <select class="form-control" name="division">
                                                                    @foreach($division as $div)
                                                                       <option value="{{$div->division}}"
                                                                      >{{$div->division}}</option>
                                                                       @endforeach

                                                                   </select>
                                                               </div>
                                                      </div>




                                                      <div class="form-group row">
                                                          <label  class="col-sm-2 col-form-label">District</label>
                                                             <div class="col-sm-10">
                                                               <select class="form-control" name="district">

                                                                   @foreach($district as $dis)
                                                                                                                                            <option value="{{$dis->district}}"
                                                                                                                                           >{{$dis->district}}</option>
                                                                                                                                            @endforeach

                                                               </select>
                                                             </div>
                                                      </div>


                                                    <div class="form-group row">
                                                    <label  class="col-sm-2 col-form-label">Details</label>
                                                         <div class="col-sm-10">
                                                             <textarea class="form-control" name="details"> </textarea>
                                                         </div>
                                                </div>



                                                    </div>

                                                </div>
                                              </div>


                                              <div class="form-group row">
                                                   <label  class="col-sm-2 col-form-label" >Photo</label>
                                                   <div class="col-sm-4">


                                 <img src="{{asset('/')}}upload/noImg.png" id="showImg" alt="no image" style="height:140px;width:150px; border:1px solid black;">

                                                  </div>
                                                   <div class="col-sm-2">
                                                     <input type="file" class="form-control" name="image" id="image">
                                                     <span style="color: red">{{$errors->has('image')?$errors->first('image'):''}}</span>

                                                   </div>
                                                 </div>



                      <button type="submit" class="btn btn-primary offset-5">Submit</button>

                    </form>



                </div>
            </div>
        </div>
    </div>
</div>
@endsection



