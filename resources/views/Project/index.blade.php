@extends('layout.master') @section('content')

<!-- Page Content-->
<section class="pt-3">
    <div class="container px-lg-0">
        <!-- Page Features-->
        <div class="col-lg-12 mb-5 d-flex"> 
            <p class="bi bi-funnel h5 text-decoration-none text-secondary me-auto"> Filter</p>
            <!-- button modal new project -->
            <button type="button" class="bi bi-plus-circle btn btn-success me-3" data-bs-toggle="modal" data-bs-target="#exampleModal1" data-bs-whatever="@New project">  New project</button>
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            </div>
        </div>
        <!-- Page Features-->
    <div class="row gx-lg-6">
         <!--card Request  -->
        <div class="col-lg-4 col-xxl-5 mb-5">
            <div class="card bg-light border-0 h-100">
                <div class="card-body fs-6 text-sm-start p-2 p-lg-2 pt-0 pt-lg-0">
                    <div style="width:350px;" class="btn bg-primary bg-gradient rounded-3 mb-3 mt-n3 text-start"><a href="requestopd.html"><span class="text-white"><strong>Project System Atandance</strong></a></i></div>
                        <p class="text-end  me-md-2"><i class="bi bi-star me-md-2"></i><i class="bi bi-gear"></i></p>
                        <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <div class="mb-5">
                        <button type="button" class="btn btn-outline-secondary me-md-2"><i class="bi bi-check-circle" style="font-size:20px mb-5"></i></button>
                        <button type="button" class="btn btn-outline-secondary me-md-2"><i class="bi bi-chat-left-text" style="font-size:20px mb-5"></i></button>
                        <button type="button" class="btn btn-outline-secondary me-md-2"><i class="bi bi-flag" style="font-size:20px mb-5"></i></button>
                        <button type="button" class="btn btn-outline-secondary me-md-2"><i class="bi bi-clock" style="font-size:20px mb-5"></i></button>
                        <button type="button" class="btn btn-outline-secondary me-md-2"><i class="bi bi-calendar4" style="font-size:20px mb-5"></i></button>
                        <button type="button" class="btn btn-outline-secondary me-md-2"><i class="bi bi-file-earmark-text" style="font-size:20px mb-5"></i></button>
                        </div>
                    </div>
                    <!-- <hr size="10px" width="50%" style=""> -->
                </div>
            </div>

            <!--card update-->
            <div class="col-lg-4 col-xxl-5 mb-5">
              <div class="card bg-light border-0 h-100">
                  <div class="card-body fs-6 text-sm-start p-2 p-lg-2 pt-0 pt-lg-0">
                      <div style="width:350px;" class="btn bg-primary bg-gradient rounded-3 mb-3 mt-n3 text-start"><a href="requestopd.html"><span class="text-white"><strong>Important Updates</strong></a></i></div>
                          <p class="fw-bolder"><i class="bi bi-bag-check-fill"></i> Completed 2 task backend</p>
                      <hr>
                          <p class=""><i class="bi bi-bag-check"></i> Projects system atandance</i></p>
                          <p class="text-secondary me-auto" style="font-size:13px"></i> 0 comment</p>
                          <p class="fw-bolder bi bi-at"></i> Mentioned</p>
                      <hr>
                          <p class="text-secondary me-auto" style="font-size:13px"></i> You don't have any mentions</p>
                          <p class="fw-bolder bi bi-pencil"></i> Created</p>
                      <hr>
                          <p class="text-secondary me-auto" style="font-size:13px"></i> You don't have any updates in items created by you</p>
                      </div>
                  </div>
              </div>

            <!-- card project -->
            <div class="col-lg-4 col-xxl-5 mb-5">
              <div class="card bg-light border-0 h-100">
                  <div class="card-body fs-6 text-sm-start p-2 p-lg-2 pt-0 pt-lg-0">
                      <div style="width:350px;" class="btn bg-primary bg-gradient rounded-3 mb-3 mt-n3 text-start"><a href="requestopd.html"><span class="text-white"><strong>Project</strong></a></i></div>
                      @foreach ($project as $project)
                        <hr>
                          <h6 class="ml-5"><img src="img/lingkaran.svg"></i> {{ $project->project_name }}<a class="p-3"></a><i class=" btn bi bi-three-dots" id="dropdownCenterBtn" data-bs-toggle="dropdown" aria-expanded="false"></i>
                            <ul class="dropdown-menu" aria-labelledby="dropdownCenterBtn">
                            <a class="btn" href="/project/{{ $project->id }}/project_edit" class="dropdown-item mb-3 " data-bs-toggle="modal" data-bs-target="#exampleModalEdit"><i class="bi bi-pencil-square"></i> Edit Project</a>
                            <form action="/project/{{ $project->id }}" method="POST">
                              @csrf 
                              @method("delete")
                              <button type="submit" class="btn-danger dropdown-item mb-3 "><i class="bi bi-backspace"></i> Delete Project</button>
                            </form>
                          </ul>
                          </h6> 
                          <p class="text-secondary me-auto bi bi-star" style="font-size:13px"></i>{{ $project->project_grup->group_name }}<a class="p-3"></a><img src="img/project1.svg"></i><a class="p-1"></a><img src="img/project2.svg"></i><a class="p-1"></a><img src="img/project3.svg"></i><a class="p-1"></a><img src="img/project4.svg"><a class="p-1"></a><img src="img/project5.svg"></i><a class="p-1"></a><img src="img/project6.svg"></i><a class="p-1"></a><img src="img/project1.svg"></i></p>
                      @endforeach
                      <hr>
                          <p class="text-secondary me-auto text-center">View Projects Board</p>
                        </div>
                  </div>
              </div>
  <!-- Modal create project -->
  <div class="modal fade" id="exampleModal1" data-bs-backdrop="static" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Project</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          
<div class="container">
    <form action="/store" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
         <label for="inputPassword3" class="col-sm-3 col-form-label">Project Group</label>
          <div class="col-sm-9">
        <input type="text" name="project_grups_id" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"> 
        <button type="button" class="bi bi-plus-circle btn btn-success me-3" data-bs-toggle="modal" data-bs-target="#exampleModalProjectGrup" data-bs-whatever="@New project"></button>
        </div>
        </div>
        </div>
        <div class="row mb-3">
          <label for="inputPassword3" class="col-sm-3 col-form-label">Project Name</label>
          <div class="col-sm-9">
            <input type="text" name="project_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <a href=""></a>
          </div>
        </div>
        <div class="row mb-3" >
          <label for="inputPassword3" class="col-sm-3 col-form-label">Project Description</label>
          <div class="col-sm-9">
            <textarea type="text" name="project_description" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"></textarea>
          </div>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <a href="project_list"> <button type="submit" class="btn btn-primary">Create</button> </a>
        </div>
      </div>
    </div>
  </div>
    </div>
  </div>
  <!-- End Model -->

  <!--modal project grup-->
<div class="modal fade" id="exampleModalProjectGrup" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Grup</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="container">
          <form action="/store" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Grup Name </label>
                <input type="text" name="group_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Grup Description</label>
                <textarea type="text" name="group_description" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"></textarea>
              </div> 
          </form>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save</button>
      </div>
    </div>
  </div>
  <!--End Modal project grup-->
    </div>
    </div>
</section>
@endsection