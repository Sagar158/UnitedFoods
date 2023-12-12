<x-app-layout>
    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">

        <x-page-heading title="{{ __('Slider') }}"></x-page-heading>
        <x-right-side-button link="{{ route('home.slider.create') }}" title="Create"></x-right-side-button>
        <div class="container-fluid card mt-3">
            <div class="row card-body">
                <div class="col-lg-12 col-sm-12 col-md-12">
                    <div class="table-responsive">
                        <table id="dataTableExample" class="table">
                          <thead>
                            <tr>
                              <th>Title</th>
                              <th>Sub Title</th>
                              <th>Description</th>
                              <th>Image</th>
                              <th>Action</th>
                            </tr>
                          </thead>
                          <tbody>
                          </tbody>
                        </table>
                      </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
