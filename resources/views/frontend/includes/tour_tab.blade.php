
<div class="advance-content-style1">
    <form action="#" method="get" class="form-search position-relative" accept-charset="utf-8">
        <div class="row">
            <div class="col-md-4 col-lg-4">
                <div class="advance-search-field position-relative text-start">
                    <div class="box-search">
                        <span class="icon flaticon-home-1"></span>
                        {!! Form::text('title', null,['class'=>'form-control bgc-f7 bdrs12','id'=>'title','placeholder'=>'Name of activity..']) !!}
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-lg-3">
                <div class="advance-search-field position-relative text-start">
                    <div class="box-search">
                        <span class="icon flaticon-caravan"></span>
                        {!! Form::select('package_category_id', $data['search_categories'] , null,['class'=>'form-control bgc-f7 bdrs12','id'=>'package_category_id','placeholder'=>'Select category']) !!}
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-lg-3">
                <div class="advance-search-field position-relative text-start">
                    <div class="box-search">
                        <span class="icon flaticon-location"></span>
                        {!! Form::select('country_id', $data['search_countries'] , null,['class'=>'form-control bgc-f7 bdrs12','id'=>'country_id','placeholder'=>'Select country']) !!}
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-lg-2">
                <div class="d-flex align-items-center justify-content-start justify-content-md-center mt-3 mt-md-0">
                    <button class="advance-search-icon ud-btn btn-thm ms-4" type="submit"><span class="flaticon-search"></span></button>
                </div>
            </div>
        </div>
    </form>
</div>



{{--                        <div class="box-search">--}}
{{--                            <span class="icon flaticon-home-1"></span>--}}
{{--                            {!! Form::select('package_category_id', $data['search_categories'] , null,['class'=>'select-contain-select','id'=>'package_category_id','placeholder'=>'Select category']) !!}--}}
{{--                        </div>--}}
{{--                        <div class="box-search">--}}
{{--                            <span class="icon flaticon-home-1"></span>--}}
{{--                            {!! Form::select('country_id', $data['search_countries'] , null,['class'=>'select-contain-select','id'=>'country_id','placeholder'=>'Select country']) !!}--}}
{{--                        </div>--}}


{{--<div class="contact-form-action">--}}
{{--    {!! Form::open(['route' => $module.'activity.search', 'method'=>'POST', 'class'=>'row align-items-center search_tour_form']) !!}--}}
{{--        <div class="col-lg-4 pr-0">--}}
{{--            <div class="input-box">--}}
{{--                <label class="label-text">Title</label>--}}
{{--                <div class="form-group">--}}
{{--                    <span class="la la-list-alt form-icon"></span>--}}
{{--                    {!! Form::text('title', null,['class'=>'form-control','id'=>'title','placeholder'=>'Name of activity..']) !!}--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="col-lg-3 pr-0">--}}
{{--            <div class="input-box">--}}
{{--                <label class="label-text">Activity group</label>--}}
{{--                <div class="form-group">--}}
{{--                    <div class="select-contain w-auto">--}}
{{--                        {!! Form::select('package_category_id', $data['search_categories'] , null,['class'=>'select-contain-select','id'=>'package_category_id','placeholder'=>'Select category']) !!}--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="col-lg-3 pr-0">--}}
{{--            <div class="input-box">--}}
{{--                <label class="label-text">Have a location in mind ?</label>--}}
{{--                <div class="form-group">--}}
{{--                    <div class="select-contain w-auto">--}}
{{--                        {!! Form::select('country_id', $data['search_countries'] , null,['class'=>'select-contain-select','id'=>'country_id','placeholder'=>'Select country']) !!}--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <!-- end col-lg-4 -->--}}
{{--        <div class="btn-box pt-3 pl-3">--}}
{{--            <button type="submit" class="theme-btn search-for-tours">Search Now</button>--}}
{{--        </div>--}}
{{--    {!! Form::close() !!}--}}
{{--</div>--}}


