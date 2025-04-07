@extends('cms.layout.index')

@section('content')
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12">
                <div class="card planned_task">
                    <div class="header">
                        <h2>{{ $code }}</h2>
                        <a href="{{ route('cms.paket.create', $code) }}" class="btn btn-primary float-right">Add Paket</a>
                    </div>
                    <div class="body">
                        <h4>Starter Page</h4>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Thumbnail</th>
                                    <th>Nama</th>
                                    <th>Wilayah</th>
                                    <th>Departure</th>
                                    {{-- <th>Hotel</th> --}}
                                    <th>Transportation</th>
                                    <th>Price</th>
                                    {{-- <th>Description</th> --}}
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody id="tablePaket">
                                <!-- Data will be dynamically loaded here -->
                            </tbody>
                        </table>
                        <nav>
                            <ul class="pagination justify-content-center">
                                <!-- Pagination links will be dynamically loaded here -->
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            function show(page = 1, wilayah_id = null) {
                $.ajax({
                    url: '{{ route('paket.index') }}',
                    method: 'GET',
                    data: {
                        page: page,
                        wilayah_id: wilayah_id
                    },
                }).done(function(response) {
                    const data = response?.data?.data || [];
                    console.log('response', data);
                    
                    const currentPage = response?.data?.current_page || 1;
                    const lastPage = response?.data?.last_page || 1;
                    const container = $('#tablePaket');
                    container.empty();
                    
                    console.log('response length', data.length);
                    if (data.length === 0) {
                        container.append('<tr><td colspan="10" class="text-center">No data available</td></tr>');
                    } else {
                        data.forEach(function(item, index) {
                            const html = `
                                <tr>
                                    <td>${(currentPage - 1) * data.length + index + 1}</td>
                                    <td><img src="/${item.thumbnail_img || '{{ asset('assets/item/Maskgroup.png') }}'}" alt="thumbnail_img" width="100"></td>
                                    <td>${item.name || '-'}</td>
                                    <td>${item?.wilayah?.name || 'Unknown'}</td>
                                    <td>${item.start_date_departure ? new Date(item.start_date_departure).toLocaleString('default', { month: 'long', year: 'numeric' }) : '-'} - ${item.end_date_departure ? new Date(item.end_date_departure).toLocaleString('default', { month: 'long', year: 'numeric' }) : '-'}</td>
                                    <td>${item.transportation_ticket   ? '<span class="text-success">Include</span>' : '<span class="text-danger">Exclude</span>'}</td>
                                    <td>${item.price || '-'}</td> 
                                    <td>
                                        <a href="/cms/paket/edit/${item.code || '#'}" class="btn btn-primary">Edit</a>
                                        <a href="/cms/paket/show/${item.code || '#'}" class="btn btn-info">Detail</a>
                                        <a href="${item.delete_url || '#'}" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>`; 
                            container.append(html);
                        });
                    }

                    // Update pagination
                    const paginationContainer = $('.pagination');
                    paginationContainer.empty();

                    let startPage = Math.max(currentPage - 2, 1);
                    let endPage = Math.min(currentPage + 2, lastPage);

                    // Previous button
                    if (currentPage > 1) {
                        paginationContainer.append(`
                            <li class="page-item">
                                <a class="page-link" href="#" data-page="${currentPage - 1}">«</a>
                            </li>
                        `);
                    }

                    // Dynamic page numbers
                    for (let i = startPage; i <= endPage; i++) {
                        paginationContainer.append(`
                            <li class="page-item ${i === currentPage ? 'active' : ''}">
                                <a class="page-link" href="#" data-page="${i}">${i}</a>
                            </li>
                        `);
                    }

                    // Next button
                    if (currentPage < lastPage) {
                        paginationContainer.append(`
                            <li class="page-item">
                                <a class="page-link" href="#" data-page="${currentPage + 1}">»</a>
                            </li>
                        `);
                    }
                }).fail(function(xhr, status, error) {
                    console.error('Error:', error);
                });
            }

            // Handle pagination click
            $(document).on('click', '.pagination .page-link', function(e) {
                e.preventDefault();
                const page = $(this).data('page');
                const wilayah_id = $('.nav-link.active').data('id');
                if (page) {
                    show(page, wilayah_id);

                    // Scroll to top with animation
                    $('html, body').animate({
                        scrollTop: $('#tablePaket').offset().top - 100
                    }, 500);
                }
            });

            // Handle wilayah click
            $(document).on('click', '.nav-link', function(e) {
                e.preventDefault();
                $('.nav-link').removeClass('active');
                $(this).addClass('active');
                const wilayah_id = $(this).data('id');
                show(1, wilayah_id);

                // Scroll to top with animation
                $('html, body').animate({
                    scrollTop: $('#tablePaket').offset().top - 100
                }, 500);
            });

            show(); // Load data on page load
        });
    </script>
@endsection
