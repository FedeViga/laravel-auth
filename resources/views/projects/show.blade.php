@extends('layouts.app')

@section('content')

    <div class="container py-5">

        <h2 class="mb-3">
            {{$project->title}}
        </h2>

        <div class="px-3">

            <table class="table">
                <tbody>
                  <tr>
                    <th scope="row">Description:</th>
                    <td>{{$project->description}}</td>
                  </tr>
                  <tr>
                    <th scope="row">Thumbnail:</th>
                    <td><a class="text-white" href="#">{{$project->thumb}}</a></td>
                  </tr>
                  <tr>
                    <th class="pe-3" scope="row">Technologies:</th>
                    <td>{{$project->technologies}}</td>
                  </tr>
                  <tr>
                    <th scope="row">Github Link:</th>
                    <td><a class="text-white" href="#">{{$project->link}}</a></td>
                  </tr>
                </tbody>
            </table>
            
        </div>

    </div>

@endsection