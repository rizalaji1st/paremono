@extends('layouts.admin')

@section('title', 'Manajemen Artikel')

@section('menu_admin_manajemen_artikel_active', 'active')

@section('header', 'Manajemen Artikel')

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
        <a href="{{url('/admin/manajemen-artikel')}}" class="text-muted text-hover-primary">Manajemen Artikel</a>
    </li>
    <!--end::Item-->
    <!--begin::Item-->
    <li class="breadcrumb-item">
        <span class="bullet bg-gray-200 w-5px h-2px"></span>
    </li>
    <!--end::Item-->
    <!--begin::Item-->
    <li class="breadcrumb-item text-dark">{{$blog ? "Update" : "Create"}}</li>
    <!--end::Item-->
</ul>
<!--end::Breadcrumb-->
@endsection

@section('content')
    <!--begin::Post-->
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div id="kt_content_container" class="container-xxl">
            <!--begin::Card-->
            <div class="card card-flush">
                <!--begin::Card header-->
                <div class="card-header mt-3">
                    <!--begin::Card title-->
                    <div class="card-title">
                        <h3>{{$blog ? "Update" : "Create"}} Artikel</h3>
                    </div>
                    <!--end::Card title-->
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body pt-0">
                    <div class="separator separator-dashed mb-10"></div>
                    <form class="form" enctype="multipart/form-data" action="{{$blog ? url('/admin/manajemen-artikel/update/'.$blog->id) : url('/admin/manajemen-artikel/store')}}" method="POST" id="kt_artikel_form">
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
                                <span class="required">Judul</span>
                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-html="true" data-bs-content="judul is required."></i>
                            </label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input class="form-control form-control-solid" placeholder="Enter the judul" name="judul" value="{{$blog ? $blog->title : ''}}" />
                            <!--end::Input-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="fv-row mb-7">
                            <!--begin::Label-->
                            <label class="fs-6 fw-bold form-label mb-2">
                                <span class="required">Tanggal</span>
                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-html="true" data-bs-content="tanggal is required."></i>
                            </label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input class="form-control form-control-solid" type="date" name="tanggal" value="{{$blog ? $blog->tanggal : ''}}" />
                            <!--end::Input-->
                        </div>
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
                                {{optional($blog)->isi}}
                            </textarea>
                            <!--end::Input-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="fv-row mb-7">
                            <!--begin::Label-->
                            <label class="fs-6 fw-bold form-label mb-2">
                                <span class="required">Kategori</span>
                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-html="true" data-bs-content="kategori is required."></i>
                            </label>
                            <!--end::Label-->
                            <!--begin::Select-->
                            <select class="form-select form-select-solid" id="search_kategori" name="kategori" data-control="select2" data-placeholder="Select kategori" data-hide-search="true">
                                <option value=""></option>
                                @foreach ($kategoris as $kategori)
                                    <option value="{{$kategori->id}}" {{optional($blog)->hasKategori($kategori->id) ? 'selected' : ''}}>{{$kategori->nama}}</option>
                                @endforeach
                            </select>
                            <!--end::Select-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="fv-row mb-7">
                            <!--begin::Label-->
                            <label class="fs-6 fw-bold form-label mb-2">
                                <span class="required">Tampil Di Carousel</span>
                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-html="true" data-bs-content="in_carousel is required."></i>
                            </label>
                            <!--end::Label-->
                            <!--begin::Select-->
                            <select class="form-select form-select-solid" id="search_in_carousel" name="in_carousel" data-control="select2" data-placeholder="Apakah masuk di carousel?" data-hide-search="true">
                                <option value="1" {{optional($blog)->in_carousel ? 'selected' : ''}}>Ya</option>
                                <option value="0" {{optional($blog)->in_carousel ? '' : 'selected'}}>Tidak</option>
                            </select>
                            <!--end::Select-->
                        </div>
                        <!--end::Input group-->
                        <div class="separator separator-dashed mb-10"></div>
                        <div class="d-flex justify-content-end">
                            <!--begin::Button-->
                            <a href="{{url('/admin/manajemen-artikel')}}" class="btn btn-light me-5">Cancel</a>
                            <!--end::Button-->
                            <!--begin::Button-->
                            <button type="submit" id="kt_artikel_submit_button" class="btn btn-primary">
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
                        @if(!$blog)
                        'foto': {
                            validators: {
                                notEmpty: {
                                    message: 'Foto is required'
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
                        'tanggal': {
                            validators: {
                                notEmpty: {
                                    message: 'Tanggal is required'
                                }
                            }
                        },
                        'isi': {
                            validators: {
                                notEmpty: {
                                    message: 'Isi is required'
                                }
                            }
                        },
                        'kategori': {
                            validators: {
                                notEmpty: {
                                    message: 'Kategori is required'
                                }
                            }
                        },
                        'in_carousel': {
                            validators: {
                                notEmpty: {
                                    message: 'In Carousel is required'
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
                            
                            document.getElementById('kt_artikel_form').submit() 						
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
                form = document.querySelector('#kt_artikel_form');
                submitButton = document.getElementById('kt_artikel_submit_button');

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
</script>

@endpush