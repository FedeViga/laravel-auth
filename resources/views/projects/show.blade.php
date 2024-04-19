@extends('layouts.app')

@section('content')

    <div class="container py-5">

        <h2 class="mb-3">
            {{$project->title}}
        </h2>

        <div class="px-3">
                <table class="table w-auto">
                    <tbody>
                      <tr>
                        <th scope="row" class="d-none d-sm-table-cell">
                            Description:
                        </th>
                        <td>
                            <h5 class="d-block d-sm-none">
                                Description:
                            </h5>
                            {{$project->description}}
                        </td>
                      </tr>
                      <tr>
                        <th scope="row" class="d-none d-sm-table-cell">
                            Thumbnail:
                        </th>
                        <td>
                            <h5 class="d-block d-sm-none">
                                Thumbnail:
                            </h5>
                            <a class="text-white text-break" href="#">
                                {{$project->thumb}}
                            </a>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row" class="d-none d-sm-table-cell">
                            Technologies:
                        </th>
                        <td>
                            <h5 class="d-block d-sm-none">
                                Technologies:
                            </h5>
                            {{$project->technologies}}
                        </td>
                      </tr>
                      <tr>
                        <th scope="row" class="d-none d-sm-table-cell">
                            Github Link:
                        </th>
                        <td>
                            <h5 class="d-block d-sm-none">
                                GitHub Links:
                            </h5>
                            <a class="text-white text-break" href="#">
                                {{$project->link}}
                            </a>
                        </td>
                      </tr>
                    </tbody>
                </table>

            <a href="{{route('projects.edit', $project->id)}}" class="btn btn-outline-warning">Edit</a>
            
        </div>

    </div>

@endsection