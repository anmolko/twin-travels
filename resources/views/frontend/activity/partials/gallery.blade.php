<div class="col-sm-6">
    <div class="row">
        @foreach($data['row']->packageGalleries as $gallery)
            <div class="col-6 ps-sm-0">
                <div class="sp-img-content">
                    <a class="popup-img preview-img-2 sp-img mb10" href="{{ asset(galleryImagePath('package').$gallery->resized_name) }}">
                        <img class="w-100" src="{{ asset(galleryImagePath('package').$gallery->resized_name) }}" alt="2.jpg">
                    </a>
                </div>
            </div>
        @endforeach
    </div>
</div>
