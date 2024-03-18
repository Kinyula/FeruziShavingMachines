<div>
    <div class="card-box mb-30">
        <h2 class="h4 pd-20">Best Selling Products</h2>
        @if (session()->has('deleteProductMessage'))
            <div role="alert" class="alert alert-success alert-dismissible fade show">
                <strong>{{ session('deleteProductMessage') }}</strong>
                <button class="btn btn-close"></button>
            </div>
        @endif
        <table class="data-table table nowrap">
            <thead>
                <tr>
                    <th>srNo</th>
                    <th class="table-plus datatable-nosort">Product</th>
                    <th>Name</th>
                    <th>Old price</th>
                    <th>New price</th>
                    <th class="datatable-nosort">Action</th>
                </tr>
            </thead>
            <tbody>
                @php
                $srNo = 1;
            @endphp
                @foreach ($productImage as $image)
                    <tr>



                        <td>{{$srNo++}}</td>
                        <td class="table-plus">
                            {{-- @php
                                    $filename = explode("/",$image->product_image);
                                    $filename = $filename[2];
                                @endphp --}}
                            <img src="{{ asset('storage/product_images/' . $image->product_image) }}" width="70"
                                height="70" alt="" />
                        </td>
                        <td>
                            <h5 class="font-16">{{ $image->product_name }}</h5>

                        </td>
                        <td style="text-decoration:line-through">TZS {{ $image->price->old_price }}/=</td>
                        <td>TZS {{ $image->price->new_price }}/=</td>
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
                                        href="{{ asset('feruzi-shaving-machines/edit-products/' . $image->id) }}"><i
                                            class="dw dw-edit2"></i> Edit</a>

                                    <button type="submit" class="dropdown-item"
                                        onclick="confirm(`Are you sure you want to delete {{ $image->product_name }} product ? `) || event.stopImmediatePropagation()"
                                        wire:click = "deleteProduct({{ $image->id }})"><i
                                            class="dw dw-delete-3"></i>Delete</button>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach


            </tbody>

        </table>
        <span class="p-3" style="position: relative;left:20px">{{ $productImage->links() }}</span>
    </div>
</div>
