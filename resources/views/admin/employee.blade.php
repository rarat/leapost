
@extends('admin.layouts.admin')



@section('content')

<div class="page-content-inner">
    <nav id="breadcrumbs" class="mb-3">
        <ul>
            <li><a href="#"> <i class="uil-home-alt"></i> </a></li>
            <li> Employee </li>

        </ul>
    </nav>
    <div class="card">
        <!-- Card header -->
        <div class="card-header actions-toolbar border-0">
            <div class="d-flex justify-content-between align-items-center">
                <h4 class="d-inline-block mb-0">Employee </h4>
                <div class="d-flex">

                    <a href="#" class="btn btn-icon btn-hover  btn-circle" uk-tooltip="Search product">
                        <i class="uil-search"></i>
                    </a>
                    <div class="uk-drop" uk-drop="mode: click; pos: left-center; offset: 0">
                        <form class="uk-search uk-search-navbar uk-width-1-1">
                            <input class="uk-search-input shadow-0 uk-form-small" type="search"
                                placeholder="Search..." autofocus>
                        </form>
                    </div>

                    <a href="#" class="btn btn-icon btn-hover  btn-circle" uk-tooltip="filter">
                        <i class="uil-filter"></i>
                    </a>
                    <div uk-dropdown="pos: bottom-right ; mode: click ;animation: uk-animation-scale-up">
                        <ul class="uk-nav uk-dropdown-nav">
                            <li class="uk-active"><a href="#"> Newest </a></li>
                            <li><a href="#">From A-Z</a></li>
                            <li><a href="#">From Z-A</a></li>
                        </ul>
                    </div>


                    <a href="#" class="btn btn-icon btn-hover  btn-circle" uk-tooltip="More">
                        <i class="uil-ellipsis-h"></i>
                    </a>
                    <div uk-dropdown="pos: bottom-right ; mode: click ;animation: uk-animation-scale-up">
                        <ul class="uk-nav uk-dropdown-nav">
                            <li><a href="#"> Refresh </a></li>
                            <li><a href="#">Manage</a></li>
                            <li><a href="#">Setting</a></li>
                        </ul>
                    </div>


                </div>
            </div>
        </div>
        <!-- Table -->
        <div class="table-responsive">
            <table class="table align-items-center">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Name</th>
                        <th scope="col">Joined at</th>
                        <th scope="col">Enerolled</th>
                        <th scope="col">Finish Class</th>
                        <th scope="col">Activity</th>
                        <th scope="col">
                            <div>
                                <a href="#" class="btn btn-default">
                                    <i class="uil-plus"> </i> New Employee
                                </a>
                            </div> </th>
                    </tr>
                </thead>
                <tbody class="list">
                    <tr>
                        <th>    1 </th>
                        <th scope="row">
                            <div class="media align-items-center">
                                <div>
                                    <div class="avatar-parent-child" style="width: max-content">
                                        <img alt="Image placeholder"
                                            src="../assets/images/avatars/avatar-2.jpg"
                                            class="avatar  rounded-circle">
                                        <span class="avatar-child avatar-badge bg-success"></span>
                                    </div>
                                </div>
                                <div class="media-body ml-4">
                                    <a href="#" class="name h6 mb-0 text-sm">Stella Johnson</a>
                                    <small class="d-block font-weight-bold">#1001</small>
                                </div>
                            </div>
                        </th>
                        <td> 10/09/2018 </td>
                        <td> 15 </td>
                        <td> $1035,00 </td>
                        <td>
                            <div class="progress" style="height: 7px;">
                                <div class="progress-bar" role="progressbar" style="width: 45%;"></div>
                            </div>
                        </td>
                        <td class="text-right">
                            <!-- Actions -->
                            <div class="actions ml-3">
                                <a href="#" class="btn btn-icon btn-hover btn-sm btn-circle"
                                    uk-tooltip="Quick view">
                                    <i class="uil-external-link-alt "></i> </a>
                                <a href="#" class="btn btn-icon btn-hover btn-sm btn-circle"
                                    uk-tooltip="Edit">
                                    <i class="uil-pen "></i> </a>
                                <a href="#" class="btn btn-icon btn-hover btn-sm btn-circle"
                                    uk-tooltip="Delete user">
                                    <i class="uil-trash-alt text-danger"></i> </a>
                            </div>
                        </td>
                    </tr>
                    
                </tbody>
            </table>
        </div>
    </div>


    <ul class="uk-pagination my-5 uk-flex-center" uk-margin>
        <li class="uk-active"><span>1</span></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li class="uk-disabled"><span>...</span></li>
        <li><a href="#"><span uk-pagination-next></span></a></li>
    </ul>





</div>


@endsection
