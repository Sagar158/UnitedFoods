@php
    $route = (!isset($product->id) ? route('products.store') : route('products.update',$product->id));
@endphp
<x-app-layout title="{{ $title }}">
    @push('css')
        <link rel="stylesheet" href="{{ asset('assets/vendors/simplemde/simplemde.min.css') }}">
    @endpush
    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
        <x-page-heading title="{{ __('Create / Update Product') }}"></x-page-heading>
        <x-back-button></x-back-button>

        <div class="container-fluid card mt-3">
            <form action="{{ $route }}" method="POST" enctype="multipart/form-data">
                {{ @csrf_field() }}
                <div class="row card-body">
                    <div class="col-lg-12 col-sm-12 col-md-12">
                        <x-select-box id="status" name="status" :value="old('status', $product->status)" :values="\App\Models\Products::$status" autocomplete="status" placeholder="Status" />
                    </div>
                    <div class="col-lg-12 col-sm-12 col-md-12">
                        <x-select-box id="category_id" name="category_id" :value="old('category_id', $product->category_id)" :values="\App\Models\Products::$categories" autocomplete="category" placeholder="Categories" />
                    </div>

                    <div class="col-lg-12 col-sm-12 col-md-12">
                        <x-text-input id="name" type="text" name="name" :value="old('name', $product->name)" required autofocus placeholder="Name" />
                    </div>
                    <div class="col-lg-12 col-sm-12 col-md-12">
                        <x-text-input id="rate" type="number" name="rate" :value="old('rate', $product->rate)" required autofocus placeholder="Rate" />
                    </div>
                    <div class="col-lg-12 col-sm-12 col-md-12">
                        <x-select-box id="unit" name="unit" :value="old('unit', $product->unit)" :values="\App\Models\Products::$units" placeholder="Unit" />
                    </div>
                    <div class="col-lg-12 col-sm-12 col-md-12">
                        <x-text-input id="discount" type="number" name="discount" :value="old('discount', $product->discount)" required autofocus placeholder="Discount" />
                    </div>
                    <div class="col-lg-12 col-sm-12 col-md-12">
                        <x-select-box id="discount_unit" name="discount_unit" :value="old('discount_unit', $product->discount_unit)" :values="\App\Models\Products::$discount_units" placeholder="Discount Unit" />
                    </div>
                    <div class="col-lg-12 col-sm-12 col-md-12">
                        <x-text-area id="description" name="description" :value="old('description', $product->description)" required autofocus placeholder="Description" />
                    </div>
                    <div class="col-lg-12 col-sm-12 col-md-12">
                        <label for="" class="font-weight-bold">Images</label>
                        <input type="file" name="images[]" class="border form-control" multiple/>
                    </div>
                    <div class="col-lg-12 col-sm-12 col-md-12 mt-2">
                        <x-primary-button class="btn btn-primary">
                            {{ __('Submit') }}
                        </x-primary-button>
                        <x-back-button></x-back-button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    @push('scripts')
        <script src="{{ asset('assets/vendors/tinymce/tinymce.min.js') }}"></script>
        <script src="{{ asset('assets/js/tinymce.js') }}"></script>
    @endpush
</x-app-layout>
