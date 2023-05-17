<div class="page-wrapper">
    @if (session('message'))
    <span class="alert alert-success" style="padding: 10px; margin: 30px">{{ session('message') }}</span>
    @endif
    <div class="content">

        <div class="row">
            <div class="col-sm-5 col-5">
                <h4 class="page-title">Departments</h4>
            </div>
            <div class="col-sm-7 col-7 text-right m-b-30">
                <a href="{{ route('department.create') }}" class="btn btn-primary btn-sm float-end"><i
                        class="fa fa-plus"></i> Add
                    Department</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-hover custom-table mb-0 datatable">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Department Name</th>
                                <th>Department Slug</th>
                                <th>Status</th>
                                <th class="text-right">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($departments as $department)
                            <tr>
                                <td>{{ $department->id }}</td>
                                <td>{{ $department->department_name }}</td>
                                <td>{{ $department->department_slug }}</td>
                                <td>
                                    @if ($department->status == '1')
                                    <span class="custom-badge status-green">Active</span>
                                    @else
                                    <span class="custom-badge status-red">Inactive</span>
                                    @endif
                                </td>
                                <td class="text-right">
                                    <div class="dropdown dropdown-action">
                                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown"
                                            aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item"
                                                href="{{ url('admin/department/'.$department->id.'/edit') }}"><i
                                                    class="fa fa-pencil m-r-5"></i>
                                                Edit</a>
                                            <a class="dropdown-item"
                                                href="{{ url('admin/department/' . $department->id. '/delete') }}"
                                                onclick="return confirm('Make sure you want to delete this department')"><i
                                                    class="fa fa-trash-o m-r-5"></i>
                                                Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @empty
                            <h6>Department not found</h6>
                            @endforelse
                        </tbody>
                    </table>
                    <div class="d-flex float-end mt-2">
                        {{ $departments->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>