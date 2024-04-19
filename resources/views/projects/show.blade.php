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

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">
                Delete
            </button>

            <!-- Modal -->
            <div class="modal" tabindex="-1" id="deleteModal">
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Delete Project</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <p>Are you sure you want to delete {{$project->title}}?</p>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <form action="{{route('projects.destroy', $project->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger">Delete</button>
                    </form>
                    </div>
                  </div>
                </div>
              </div>
            
        </div>

    </div>

@endsection