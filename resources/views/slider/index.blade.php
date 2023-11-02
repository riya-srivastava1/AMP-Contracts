<x-app-layout>
    <!-- BEGIN #content -->
    <div id="content" class="app-content">
        <!-- BEGIN breadcrumb -->
        <ol class="breadcrumb float-xl-end">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item active">slider</li>
        </ol>
        <!-- END breadcrumb -->
        <!-- BEGIN page-header -->
        <h1 class="page-header">Slider Images....</h1>
        <!-- END page-header -->
        <!-- BEGIN row -->

        <div class="row">
            @foreach ($sliders as $slider)
                <div class="col-md-4 mb-4">
                    <div class="d-inline-block position-relative">
                        <form action="{{ route('galleryimage.status', $slider->id) }}" method="post">
                            @csrf
                            <button type="submit" class="border-0 bg-transparent p-0">
                                <img src="{{ asset($slider->image_url) ?? '' }}" alt="image"
                                    class="img-fluid" style="width: 100%; height: 200px;" />
                                <div
                                    class="image-name-overlay position-absolute w-100 bottom-0 bg-dark text-light px-2 py-1">
                                    {{ $slider->alt_tag }}
                                </div>
                            </button>
                        </form>
                    </div>
                </div>
                @if ($loop->iteration % 3 === 0)
        </div>
        <div class="row">
            @endif
            @endforeach
        </div>






    </div>

    <!-- END #content -->

</x-app-layout>
