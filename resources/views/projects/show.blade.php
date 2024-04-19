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
                    <td>{{$project->thumb}}</td>
                  </tr>
                  <tr>
                    <th scope="row">Technologies:</th>
                    <td colspan="2">{{$project->technologies}}</td>
                  </tr>
                  <tr>
                    <th scope="row">Github Link:</th>
                    <td colspan="2">{{$project->link}}</td>
                  </tr>
                </tbody>
            </table>
            
        </div>

    </div>

@endsection