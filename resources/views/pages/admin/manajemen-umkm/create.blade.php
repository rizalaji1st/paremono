@extends('layouts.admin')

@section('title', 'Manajemen UMKM')

@section('menu_admin_manajemen_umkm_active', 'active')

@section('header', 'Manajemen UMKM')

@section('breadcrumb') 
<!--begin::Breadcrumb-->
<ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
    <!--begin::Item-->
    <li class="breadcrumb-item text-muted">
        <a href="{{url('/')}}" class="text-muted text-hover-primary">Home</a>
    </li>
    <!--end::Item-->
    <!--begin::Item-->
    <li class="breadcrumb-item">
        <span class="bullet bg-gray-200 w-5px h-2px"></span>
    </li>
    <!--begin::Item-->
    <li class="breadcrumb-item text-muted">
        <a href="{{url('/admin/manajemen-umkm')}}" class="text-muted text-hover-primary">Manajemen Umkm</a>
    </li>
    <!--end::Item-->
    <!--begin::Item-->
    <li class="breadcrumb-item">
        <span class="bullet bg-gray-200 w-5px h-2px"></span>
    </li>
    <!--end::Item-->
    <!--begin::Item-->
    <li class="breadcrumb-item text-dark">{{$umkm ? "Update" : "Create"}}</li>
    <!--end::Item-->
</ul>
<!--end::Breadcrumb-->
@endsection

@section('content')
    <!--begin::Post-->
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div id="kt_content_container" class="container-xxl">
            <div class="row">
                <div class="col-md-8">
                    <!--begin::Card-->
                    <div class="card card-flush">
                        <!--begin::Card header-->
                        <div class="card-header mt-3">
                            <!--begin::Card title-->
                            <div class="card-title">
                                <h3>{{$umkm ? "Update" : "Create"}} UMKM</h3>
                            </div>
                            <!--end::Card title-->
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body pt-0">
                            <div class="separator separator-dashed mb-10"></div>
                            <form class="form" enctype="multipart/form-data" action="{{$umkm ? url('/admin/manajemen-umkm/update/'.$umkm->id) : url('/admin/manajemen-umkm/store')}}" method="POST" id="kt_umkm_form">
                                @csrf
                                <!--begin::Input group-->
                                <div class="fv-row mb-7">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-bold form-label mb-2">
                                        <span>Thumbnail</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-html="true" data-bs-content="upload thumbnail to change, empty to default."></i>
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input class="form-control form-control-solid" type="file" name="foto" />
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="fv-row mb-7">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-bold form-label mb-2">
                                        <span class="required">Nama Usaha</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-html="true" data-bs-content="judul is required."></i>
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input class="form-control form-control-solid" placeholder="Enter the judul" name="judul" value="{{optional($umkm)->title}}" />
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="fv-row mb-7">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-bold form-label mb-2">
                                        <span class="required">Pemilik</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-html="true" data-bs-content="pemilik is required."></i>
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input class="form-control form-control-solid" placeholder="Enter the pemilik" name="pemilik" value="{{optional($umkm)->nama_pemilik}}" />
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="fv-row mb-7">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-bold form-label mb-2">
                                        <span class="required">Alamat</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-html="true" data-bs-content="alamat is required."></i>
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input class="form-control form-control-solid" placeholder="Enter the alamat" name="alamat" value="{{optional($umkm)->alamat}}" />
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="fv-row mb-7">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-bold form-label mb-2">
                                        <span>Wa</span>
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input class="form-control form-control-solid" placeholder="Enter the wa" name="wa" value="{{optional($umkm)->wa}}" />
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="fv-row mb-7">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-bold form-label mb-2">
                                        <span>Phone</span>
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input class="form-control form-control-solid" placeholder="Enter the phone" name="phone" value="{{optional($umkm)->phone}}" />
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="fv-row mb-7">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-bold form-label mb-2">
                                        <span class="required">Ringkasan</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-html="true" data-bs-content="ringkasan is required."></i>
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input class="form-control form-control-solid" placeholder="Enter the ringkasan" name="ringkasan" value="{{optional($umkm)->ringkasan}}" />
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="fv-row mb-7">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-bold form-label mb-2">
                                        <span class="required">Isi Konten</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-html="true" data-bs-content="isi konten is required."></i>
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <textarea id="kt_docs_tinymce_basic" name="isi" class="tox-target">
                                        {{optional($umkm)->isi}}
                                    </textarea>
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <div class="separator separator-dashed mb-10"></div>
                                <div class="d-flex justify-content-end">
                                    <!--begin::Button-->
                                    <a href="{{url('/admin/manajemen-umkm')}}" class="btn btn-light me-5">Cancel</a>
                                    <!--end::Button-->
                                    <!--begin::Button-->
                                    <button type="submit" id="kt_umkm_submit_button" class="btn btn-primary">
                                        <span class="indicator-label">Save Changes</span>
                                        <span class="indicator-progress">Please wait... 
                                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                    </button>
                                    <!--end::Button-->
                                </div>
                            </form>
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Card-->
                </div>
                <div class="col-md-4">
                    @if ($umkm)
                        <!--begin::Card-->
                        <div class="card card-flush">
                            <!--begin::Card header-->
                            <div class="card-header mt-3">
                                <!--begin::Card title-->
                                <div class="card-title">
                                    <h3>Galeri UMKM</h3>
                                </div>
                                <!--end::Card title-->
                                <!--begin::Card toolbar-->
                                <div class="card-toolbar">
                                    <!--begin::Button-->
                                    <button type="button" class="btn btn-light-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_add_galeri">
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen035.svg-->
                                    <span class="svg-icon svg-icon-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="black" />
                                            <rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="black" />
                                            <rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="black" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->Add Galeri</button>
                                    <!--end::Button-->
                                </div>
                                <!--end::Card toolbar-->
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body pt-0">
                                <div class="separator separator-dashed mb-10"></div>
                                
                                <!--begin::Table-->
                                <table class="table align-middle table-row-dashed fs-6 gy-5 mb-0" id="kt_table">
                                    <!--begin::Table head-->
                                    <thead>
                                        <!--begin::Table row-->
                                        <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                            <th class="min-w-125px">Image</th>
                                            <th class="text-end min-w-100px">Actions</th>
                                        </tr>
                                        <!--end::Table row-->
                                    </thead>
                                    <!--end::Table head-->
                                    <!--begin::Table body-->
                                    <tbody class="fw-bold text-gray-600">
                                        @foreach ($galeris as $galeri)
                                            <tr>
                                                <td>
                                                    <img class="img-fluid" src="{{Storage::temporaryUrl($galeri->path_foto,now()->addMinutes(5))}}">
                                                </td>
                                                <td class="text-end">
                                                    <button class="btn btn-icon btn-active-light-primary w-30px h-30px" data-kt-permissions-table-filter="delete_row"  onclick="setDataDeleteGaleriUmkm({{$galeri->id}})">
                                                        <span class="svg-icon svg-icon-3">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                <path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="black" />
                                                                <path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="black" />
                                                                <path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="black" />
                                                            </svg>
                                                        </span>
                                                    </button>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    <!--end::Table body-->
                                </table>
                                <!--end::Table-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Card-->
                    @endif
                </div>
            </div>

            
            <!--begin::Modals-->
            <!--begin::Modal - Add permissions-->
            <div class="modal fade" id="kt_modal_add_galeri_umkm" tabindex="-1" aria-hidden="true">
                <!--begin::Modal dialog-->
                <div class="modal-dialog modal-dialog-centered mw-650px">
                    <!--begin::Modal content-->
                    <div class="modal-content">
                        <!--begin::Modal header-->
                        <div class="modal-header">
                            <!--begin::Modal title-->
                            <h2 class="fw-bolder">Add a Galeri</h2>
                            <!--end::Modal title-->
                            <!--begin::Close-->
                            <div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-permissions-modal-action="close">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                <span class="svg-icon svg-icon-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
                                        <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </div>
                            <!--end::Close-->
                        </div>
                        <!--end::Modal header-->
                        <!--begin::Modal body-->
                        <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                            <!--begin::Form-->
                            <form id="kt_modal_add_galeri_umkm_form" method="POST" class="form" action="{{url('/admin/manajemen-umkm/store-galeri')}}" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id" value="{{optional($umkm)->id}}">
                                <!--begin::Input group-->
                                <div class="fv-row mb-7">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-bold form-label mb-2">
                                        <span class="required">Image</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-html="true" data-bs-content="value is required."></i>
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input class="form-control form-control-solid" type="file" name="image" />
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Actions-->
                                <div class="text-center pt-15">
                                    <button type="reset" class="btn btn-light me-3" data-kt-permissions-modal-action="cancel">Discard</button>
                                    <button type="submit" class="btn btn-primary" data-kt-permissions-modal-action="submit">
                                        <span class="indicator-label">Submit</span>
                                        <span class="indicator-progress">Please wait...
                                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                    </button>
                                </div>
                                <!--end::Actions-->
                            </form>
                            <!--end::Form-->
                        </div>
                        <!--end::Modal body-->
                    </div>
                    <!--end::Modal content-->
                </div>
                <!--end::Modal dialog-->
            </div>
            <!--end::Modal - Add permissions-->
            

            <form action="#" method="POST" id="delete_galeri_umkm_form">
                @csrf
            </form>
        </div>
        <!--end::Container-->
    </div>
    <!--end::Post-->
@endsection


@push('style_stack')
    
@endpush

@push('script_stack')
<script src="{{asset('metronic/assets/plugins/custom/tinymce/tinymce.bundle.js')}}"></script>
<script>
    tinymce.init({
        selector: "#kt_docs_tinymce_basic", height : "480",
        menubar: false,
        toolbar: ["styleselect fontselect fontsizeselect",
            "undo redo | cut copy paste | bold italic | link image | alignleft aligncenter alignright alignjustify",
            "bullist numlist | outdent indent | blockquote subscript superscript | advlist | autolink | lists charmap | print preview |  code"],
        plugins : "advlist autolink link image lists charmap print preview code"
    });

    /******/ (() => { // webpackBootstrap
    /******/ 	"use strict";
    var __webpack_exports__ = {};
    /*!********************************************************************************!*\
    !*** ../../../themes/metronic/html/demo1/src/js/custom/pages/careers/apply.js ***!
    \********************************************************************************/


    // Class definition
    var KTCareersApply = function () {
        var submitButton;
        var validator;
        var form;

        // Handle form validation and submittion
        var handleForm = function() {
            // Stepper custom navigation

            // Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
            validator = FormValidation.formValidation(
                form,
                {
                    fields: {
                        @if(!$umkm)
                        'foto': {
                            validators: {
                                notEmpty: {
                                    message: 'Thumbnail is required'
                                }
                            }
                        },
                        @endif
                        'judul': {
                            validators: {
                                notEmpty: {
                                    message: 'Judul is required'
                                }
                            }
                        },
                        'pemilik': {
                            validators: {
                                notEmpty: {
                                    message: 'Pemilik is required'
                                }
                            }
                        },
                        'alamat': {
                            validators: {
                                notEmpty: {
                                    message: 'Alamat is required'
                                }
                            }
                        },
                        'ringkasan': {
                            validators: {
                                notEmpty: {
                                    message: 'Thumbnail is required'
                                }
                            }
                        },
                    },
                    plugins: {
                        trigger: new FormValidation.plugins.Trigger(),
                        bootstrap: new FormValidation.plugins.Bootstrap5({
                            rowSelector: '.fv-row',
                            eleInvalidClass: '',
                            eleValidClass: ''
                        })
                    }
                }
            );

            // Action buttons
            submitButton.addEventListener('click', function (e) {
                e.preventDefault();

                // Validate form before submit
                if (validator) {
                    validator.validate().then(function (status) {
                        console.log('validated!');

                        if (status == 'Valid') {
                            submitButton.setAttribute('data-kt-indicator', 'on');

                            // Disable button to avoid multiple click 
                            submitButton.disabled = true;
                            
                            document.getElementById('kt_umkm_form').submit() 						
                        } else {
                            // Scroll top

                            // Show error popuo. For more info check the plugin's official documentation: https://sweetalert2.github.io/
                            Swal.fire({
                                text: "Sorry, looks like there are some errors detected, please try again.",
                                icon: "error",
                                buttonsStyling: false,
                                confirmButtonText: "Ok, got it!",
                                customClass: {
                                    confirmButton: "btn btn-primary"
                                }
                            }).then(function (result) {
                                KTUtil.scrollTop();
                            });
                        }
                    });
                }
            });
        }

        return {
            // Public functions
            init: function () {
                // Elements
                form = document.querySelector('#kt_umkm_form');
                submitButton = document.getElementById('kt_umkm_submit_button');

                handleForm();
            }
        };
    }();

    // On document ready
    KTUtil.onDOMContentLoaded(function () {
        KTCareersApply.init();
    });
    /******/ })()
    ;
    //# sourceMappingURL=apply.js.map

    function setDataDeleteGaleriUmkm(id){
        document.getElementById('delete_galeri_umkm_form').action = "{{url('/admin/manajemen-umkm/destroy-galeri')}}"+ "/" + id;
    }

    var KTList = function () {
        // Shared variables
        var datatable;
        var table;

        // Init add schedule modal
        var initList = () => {
            // Set date data order
            const tableRows = table.querySelectorAll('tbody tr');

            tableRows.forEach(row => {
                const dateRow = row.querySelectorAll('td');
                // dateRow[2].setAttribute('data-order', realDate);
            });

            // Init datatable --- more info on datatables: https://datatables.net/manual/
            datatable = $(table).DataTable({
                "info": false,
                'order': [],
                'columnDefs': [
                ]
            });        
        }

        // Delete Galeri
        var handleDeleteRows = () => {
            // Select all delete buttons
            const deleteButtons = table.querySelectorAll('[data-kt-permissions-table-filter="delete_row"]');

            deleteButtons.forEach(d => {
                // Delete button on click
                d.addEventListener('click', function (e) {
                    e.preventDefault();

                    // Select parent row
                    const parent = e.target.closest('tr');

                    // Get permission name
                    const permissionName = parent.querySelectorAll('td')[0].innerText;

                    // SweetAlert2 pop up --- official docs reference: https://sweetalert2.github.io/
                    Swal.fire({
                        text: "Are you sure you want to delete " + permissionName + "?",
                        icon: "warning",
                        showCancelButton: true,
                        buttonsStyling: false,
                        confirmButtonText: "Yes, delete!",
                        cancelButtonText: "No, cancel",
                        customClass: {
                            confirmButton: "btn fw-bold btn-danger",
                            cancelButton: "btn fw-bold btn-active-light-primary"
                        }
                    }).then(function (result) {
                        if (result.value) {
                            e.preventDefault();
                            document.getElementById('delete_galeri_umkm_form').submit();

                        } else if (result.dismiss === 'cancel') {
                            Swal.fire({
                                text: customerName + " was not deleted.",
                                icon: "error",
                                buttonsStyling: false,
                                confirmButtonText: "Ok, got it!",
                                customClass: {
                                    confirmButton: "btn fw-bold btn-primary",
                                }
                            });
                        }
                    });
                })
            });
        }


        return {
            // Public functions
            init: function () {
                table = document.querySelector('#kt_table');
                console.log(table);
                if (!table) {
                    return;
                }

                initList();
                handleDeleteRows();
            }
        };
    }();

    // On document ready
    KTUtil.onDOMContentLoaded(function () {
        KTList.init();
    });


    var KTUsersAddPermission = function () {
        // Shared variables
        const element = document.getElementById('kt_modal_add_galeri_umkm');
        const form = element.querySelector('#kt_modal_add_galeri_umkm_form');
        const modal = new bootstrap.Modal(element);

        // Init add schedule modal
        var initAddPermission = () => {

            // Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
            var validator = FormValidation.formValidation(
                form,
                {
                    fields: {
                        'image': {
                            validators: {
                                notEmpty: {
                                    message: 'image is required'
                                }
                            }
                        },
                    },

                    plugins: {
                        trigger: new FormValidation.plugins.Trigger(),
                        bootstrap: new FormValidation.plugins.Bootstrap5({
                            rowSelector: '.fv-row',
                            eleInvalidClass: '',
                            eleValidClass: ''
                        })
                    }
                }
            );

            // Close button handler
            const closeButton = element.querySelector('[data-kt-permissions-modal-action="close"]');
            closeButton.addEventListener('click', e => {
                e.preventDefault();
                
                form.reset(); // Reset form	
                modal.hide(); // Hide modal
            });

            // Cancel button handler
            const cancelButton = element.querySelector('[data-kt-permissions-modal-action="cancel"]');
            cancelButton.addEventListener('click', e => {
                e.preventDefault();
                
                form.reset(); // Reset form	
                modal.hide(); // Hide modal
            });

            // Submit button handler
            const submitButton = element.querySelector('[data-kt-permissions-modal-action="submit"]');
            submitButton.addEventListener('click', function (e) {
                // Prevent default button action
                e.preventDefault();

                // Validate form before submit
                if (validator) {
                    validator.validate().then(function (status) {
                        console.log('validated!');

                        if (status == 'Valid') {
                            submitButton.setAttribute('data-kt-indicator', 'on');
                            submitButton.disabled = true;

                            document.getElementById('kt_modal_add_galeri_form').submit()
                        } else {
                            // Show popup warning. For more info check the plugin's official documentation: https://sweetalert2.github.io/
                            Swal.fire({
                                text: "Sorry, looks like there are some errors detected, please try again.",
                                icon: "error",
                                buttonsStyling: false,
                                confirmButtonText: "Ok, got it!",
                                customClass: {
                                    confirmButton: "btn btn-primary"
                                }
                            });
                        }
                    });
                }
            });
        }

        return {
            // Public functions
            init: function () {
                initAddPermission();
            }
        };
    }();

    // On document ready
    KTUtil.onDOMContentLoaded(function () {
        KTUsersAddPermission.init();
    });
</script>

@endpush