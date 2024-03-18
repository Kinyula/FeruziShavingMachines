<div>
    <div class="card-box mb-30 p-3">
        <h2 class="h4 pd-20">Admin's about text</h2>
        @if (session()->has('deleteAboutText'))
            <div role="alert" class="alert alert-success alert-dismissible fade show">
                <strong>{{ session('deleteAboutText') }}</strong>
                <button class="btn btn-close"></button>
            </div>
        @endif
        <table class="data-table table nowrap">
            <thead>
                <tr>
                    <th class="table-plus datatable-nosort font-weight-bold">Email</th>
                    <th class="font-weight-bold">About text</th>
                    <th class="datatable-nosort font-weight-bold">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($AboutText as $text)
                    <tr>

                        <td>
                            <h5 class="font-16">{{ $text->user->email }}</h5>

                        </td>
                        <td style="text-decoration:normal"><i class="bi bi-pencil p-2"></i>
                            {{ $text->about_text }}</td>

                        <td>
                            <div class="dropdown">
                                <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle"
                                    href="#" role="button" data-toggle="dropdown">
                                    <i class="dw dw-more"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                    <a class="dropdown-item" href="#"><i class="dw dw-eye"></i>
                                        View</a>
                                    <a class="dropdown-item"
                                        href="{{ asset('feruzi-shaving-machines/edit-admin-about-text/' . $text->id) }}"><i
                                            class="dw dw-edit2"></i> Edit</a>

                                    <button type="submit" class="dropdown-item"
                                        onclick="confirm(`Are you sure you want to delete this {{ $text->user->email }} 's  about text ? `) || event.stopImmediatePropagation()"><i
                                            class="dw dw-delete-3"
                                            wire:click = "deleteAboutText({{ $text->id }})"></i>Delete</button>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</div>
