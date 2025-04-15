@extends('layout.index')

@section('content')
    <section class="breadcumb-section"
        style="background-image: url('{{ asset('assets/item/Maskgroup.png') }}'); background-size: cover; background-position: center;">
        <div class="tf-container">
            <div class="row">
                <div class="col-lg-12 center z-index1">
                    <h1 class="title">Paket Tour Umum</h1>
                    <ul class="breadcumb-list flex-five">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><span>Paket Tour Umum</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="profile-dashboard">
        <div class="container">
            <nav class="navbar navbar-expand-lg bg-body-tertiary justify-content-center">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">Wilayah</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#" data-id="">Semua</a>
                            </li>
                            @foreach ($wilayah as $wl)
                                <li class="nav-item">
                                    <a class="nav-link" href="#" data-id="{{ $wl->id }}">{{ $wl->name }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </nav>
            <hr>
            <div class="row" id="paket-list">
                <!-- Data akan dimuat melalui AJAX -->
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 d-flex justify-content-center">
                <nav aria-label="Page navigation example">
                    <ul class="pagination"></ul>
                </nav>
            </div>
        </div>
    </section>
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            function show(page = 1, wilayah_id = null) {
                $.ajax({
                    url: '{{ route('paket.index') }}',
                    method: 'GET',
                    data: { page: page, wilayah_id: wilayah_id },
                }).done(function(response) {
                    const data = response?.data?.data || [];
                    const currentPage = response?.data?.current_page || 1;
                    const lastPage = response?.data?.last_page || 1;
                    const container = $('#paket-list');
                    container.empty();

                    data.forEach(function(item) {
                        const html = `
                            <div class="col-md-3 mb-3">
                                <div class="tour-listing box-sd">
                                    <a href="{{ route('paket.show', '') }}/${item.id}" class="tour-listing-image">
                                        <img src="${item.thumbnail_img}" alt="${item.name}" class="img-fluid">
                                    </a>
                                    <div class="tour-listing-content">
                                        <span class="map">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt me-2" viewBox="0 0 16 16">
                                                <path d="M12.166 8.94c-.26.35-.578.77-.927 1.23-.774.99-1.675 2.06-2.239 2.727a.58.58 0 0 1-.86 0c-.564-.667-1.465-1.737-2.239-2.727a31.634 31.634 0 0 1-.927-1.23C4.478 7.98 4 6.92 4 6a4 4 0 1 1 8 0c0 .92-.478 1.98-1.834 2.94zM8 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4z" />
                                            </svg>
                                            ${item?.wilayah?.name || 'Unknown'}
                                        </span>
                                        <h3 class="title-tour-list">
                                            <a href="{{ route('paket.show', '') }}/${item.id}">${item.name}</a>
                                        </h3>
                                        <div class="review">
                                            <span>(${item.reviews_count} Reviews)</span>
                                        </div>
                                        <div class="row">
                                            <div class="col-8">
                                                <h5 style="color: orange;">IDR ${item.price}</h5>
                                                <h6 style="color: orange;">/person</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>`;
                        container.append(html);
                    });

                    // Update pagination
                    const paginationContainer = $('.pagination');
                    paginationContainer.empty();

                    let startPage = Math.max(currentPage - 2, 1);
                    let endPage = Math.min(currentPage + 2, lastPage);

                    // Tombol Previous
                    if (currentPage > 1) {
                        paginationContainer.append(`
                            <li class="page-item">
                                <a class="page-link" href="#" data-page="${currentPage - 1}">«</a>
                            </li>
                        `);
                    }

                    // Halaman Dinamis
                    for (let i = startPage; i <= endPage; i++) {
                        paginationContainer.append(`
                            <li class="page-item ${i === currentPage ? 'active' : ''}">
                                <a class="page-link" href="#" data-page="${i}">${i}</a>
                            </li>
                        `);
                    }

                    // Tombol Next
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

            // Handle pagination click + Scroll ke atas
            $(document).on('click', '.pagination .page-link', function(e) {
                e.preventDefault();
                const page = $(this).data('page');
                const wilayah_id = $('.nav-link.active').data('id');
                if (page) {
                    show(page, wilayah_id);

                    // Scroll ke atas dengan efek animasi
                    $('html, body').animate({
                        scrollTop: $('#paket-list').offset().top - 100
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

                // Scroll ke atas dengan efek animasi
                $('html, body').animate({
                    scrollTop: $('#paket-list').offset().top - 100
                }, 500);
            });

            show(); // Load data on page load
        });
    </script>
@endsection
