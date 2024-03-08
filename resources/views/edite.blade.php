@extends('layout.master')
@section('main_content')


<form action="{{route('edite',$data->id)}}" method="post">
                        @CSRF
                        <div class="field half first">
                        <!-- <label for="name">Audio</label>
                            <input name="audio" id="name" type="mp3" placeholder="Name"></div> -->

                            <label for="name">Name of product</label>
                            <input name="name"  type="text" placeholder="Name" value="{{$data->name}}"></div>
                        <div class="field half">
                            <label for="email">Email</label>
                            <input name="email" id="email" type="email" placeholder="Email" value="{{$data->email}}"></div>
                        <div class="field">
                        <label for="Massage">Category</label>
                        <input name="category" id="" type="text" placeholder="category" value="{{$data->category}}">
                        </div>

                        <div class="field">
                        <label for="Massage">Massage</label>
                        <input name="massage" id="" type="text" placeholder="massage" value="{{$data->massage}}">
                        </div>
                        
                        <ul class="actions align-center"><li><input value="Send Message" class="button special" type="submit"></li>
                        </ul>
                       
                    </form>

                    @endsection()