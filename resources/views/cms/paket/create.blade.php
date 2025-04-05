@extends('cms.layout.index')

@section('css')
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/jquery-steps/jquery.steps.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/summernote/dist/summernote.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/rtl.css') }}" type="text/css">
@endsection

@section('content')
<div class="container-fluid">
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="card">
                <div class="header">
                    <h2>Advanced Form Example With Validation</h2>
                </div>
                <div class="body">
                    <form id="wizard_with_validation" method="POST" enctype="multipart/form-data">
                        @csrf
                        <h3>Paket</h3>
                        <fieldset style="max-height: 100%; overflow-y: auto;">
                            <div class="form-group form-float">
                                <label for="wilayah_id">Wilayah *</label>
                                <select name="wilayah_id" id="wilayah_id" class="form-control" required>
                                    <option value="">-- Pilih Wilayah --</option>
                                    @foreach ($wilayah as $w)
                                        <option value="{{ $w->id }}">{{ $w->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group form-float">
                                <label for="thumbnail_img">Thumbnail Image *</label>
                                <input type="file" class="form-control" name="thumbnail_img" id="thumbnail_img"
                                       required accept="image/*" onchange="previewImage(event)">
                            </div>

                            <div class="form-group d-flex align-items-start">
                                <div style="flex: 1;">
                                    <img id="thumbnail_preview" src="#" alt="Image Preview"
                                         style="display: none; width: 100%; height: auto; margin-top: 10px;">
                                </div>
                                <div style="flex: 1; margin-left: 20px;">
                                    <button id="preview_button" type="button" class="btn btn-primary"
                                            style="display: none; margin-top: 10px;" onclick="showModal()">Preview</button>
                                </div>
                            </div>

                            <!-- Modal -->
                            <div class="modal fade" id="imageModal" tabindex="-1" role="dialog"
                                 aria-labelledby="imageModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="imageModalLabel">Image Preview</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <img id="modal_image" src="#" alt="Image Preview"
                                                 style="max-width: 100%; height: auto;">
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group form-float">
                                <label for="name">Nama Paket</label>
                                <input type="text" class="form-control" name="name" id="name"
                                       placeholder="Nama Paket *" required>
                            </div>

                            <div class="form-group form-float">
                                <label for="start_date_departure">Start Date Departure</label>
                                <input type="date" class="form-control" name="start_date_departure"
                                       id="start_date_departure" required>
                            </div>

                            <div class="form-group form-float">
                                <label for="end_date_departure">End Date Departure</label>
                                <input type="date" class="form-control" name="end_date_departure"
                                       id="end_date_departure" required>
                            </div>

                            <div class="form-group form-float">
                                <label>Hotel</label>
                                <div style="display: flex; gap: 15px;">
                                    @for ($i = 1; $i <= 5; $i++)
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" name="hotel_bintang[]"
                                                   id="hotel_bintang_{{ $i }}" value="{{ $i }}">
                                            <label class="form-check-label" for="hotel_bintang_{{ $i }}">Bintang {{ $i }}</label>
                                        </div>
                                    @endfor
                                </div>
                            </div>

                            <div class="form-group form-float">
                                <label>Transportation</label>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" name="transportation_ticket"
                                           id="transportation_ticket">
                                    <label class="form-check-label" for="transportation_ticket">Include Transportation Ticket</label>
                                </div>
                            </div>

                            <div class="form-group form-float">
                                <label for="description">Description</label>
                                <textarea class="form-control" name="description" id="description" cols="30" rows="5"></textarea>
                            </div>

                            <div class="form-group form-float">
                                <label for="price">Price *</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Rp</span>
                                    </div>
                                    <input type="text" class="form-control" name="price" id="price"
                                           placeholder="Enter Price *" required oninput="formatRupiah(this)">
                                </div>
                            </div>
                        </fieldset>
                        @foreach($ItemDesc as $id)
                        <h3>{{$id->name}}</h3>
                        <input type="hidden" name="item_desc_id[]" value="{{$id->id}}">
                        <fieldset>
                            <div class="card"> 
                                <div class="body">
                                    <textarea class="summernote" name="deskripsi[]"></textarea>
                                </div>
                            </div>
                        </fieldset>
                        @endforeach 
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
    <script src="{{ asset('admin/assets/vendor/jquery-validation/jquery.validate.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor/jquery-steps/jquery.steps.js') }}"></script>
    <script src="{{ asset('admin/assets/js/pages/form-wizard.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor/summernote/dist/summernote.js') }}"></script>

    <script>
        function previewImage(event) {
            const input = event.target;
            const preview = document.getElementById('thumbnail_preview');
            const previewButton = document.getElementById('preview_button');
            if (input.files && input.files[0]) {
                const file = input.files[0];
                if (!file.type.startsWith('image/')) {
                    alert('Only image files are allowed!');
                    input.value = '';
                    preview.src = '#';
                    preview.style.display = 'none';
                    previewButton.style.display = 'none';
                    return;
                }
                const reader = new FileReader();
                reader.onload = function(e) {
                    preview.src = e.target.result;
                    preview.style.display = 'block';
                    previewButton.style.display = 'inline-block';
                };
                reader.readAsDataURL(file);
            } else {
                preview.src = '#';
                preview.style.display = 'none';
                previewButton.style.display = 'none';
            }
        }

        function showModal() {
            const modalImage = document.getElementById('modal_image');
            const preview = document.getElementById('thumbnail_preview');
            modalImage.src = preview.src;
            $('#imageModal').modal('show');
        }

        function formatRupiah(input) {
            let value = input.value.replace(/[^,\d]/g, '').toString();
            let split = value.split(',');
            let sisa = split[0].length % 3;
            let rupiah = split[0].substr(0, sisa);
            let ribuan = split[0].substr(sisa).match(/\d{3}/gi);

            if (ribuan) {
                let separator = sisa ? '.' : '';
                rupiah += separator + ribuan.join('.');
            }

            input.value = split[1] !== undefined ? rupiah + ',' + split[1] : rupiah;
        }

        $(document).ready(function () {
            $('.summernote').summernote({
                height: 200
            });
        });
    </script>
@endsection
