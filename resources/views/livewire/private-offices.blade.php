@push('custom_css')
<style type="text/css">
    .about-info h1{
    color: #242526;
    font-size: 34px;
    font-weight: 500;
    margin-bottom: 4px;
}
</style>
@endpush
<main>
    <section class="about-sec section-padding pb-0">
        <div class="container">
            <div class="text-center about-us-sec mb-0">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="about-info pt-0">
                            <h1 class="pb-0">WeWork Private Space</h1>
                            <p>Dubai is an excellent business location due to its stable, booming economy, concentration on innovation, and strategic location between Asia and Europe, with direct flights to all major cities, making it readily accessible and the ideal business location.</p>  
                        </div><!--about-info end-->
                    </div>
                </div>
            </div><!-- about-us-sec end-->
        </div>
    </section>

    <section class="popular-listing hp2 section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6">
                    <div class="section-heading">
                        <span>Private Space</span>
                        <h3>Popular Listing</h3>

                    </div>
                </div>
            </div>
            <div class="row  justify-content-center">
                @foreach($workspaces as $wspUnit)
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6">
                        <div class="card">
                            <a href="{{ url( 'workspace/'.$wspUnit->id)}}" title="">
                                <div class="img-block">
                                    <div class="overlay"></div>
                                    <img src="{{ config('global.backend_url').'storage/'.$wspUnit->unit_image}}" alt="" class="img-fluid">
                                    <div class="rate-info">
                                        <!-- <h5>$550.000</h5> -->
                                        <span>{{config('global.workspace_unit_category')[$wspUnit->workspace_category]}}</span>
                                    </div>
                                </div>
                            </a>
                            <div class="card-body">
                                <a href="24_Property_Single.html" title="">
                                    <h3>{{$wspUnit->title}}</h3>
                                    <p> <i class="la la-map-marker"></i>
                                        {!! Str::limit($wspUnit->locationSpace['address'], 50, ' ...') !!}
                                    </p>
                                </a>
                                <ul>
                                    @foreach(json_decode($wspUnit->amenities) as $wSUamenities)
                                    @if($wSUamenities!='' && isset($facilitiesGlobalList[$wSUamenities]))
                                    <li>{{$facilitiesGlobalList[$wSUamenities]->title}}</li>
                                    @endif
                                    @endforeach
                                </ul>
                            </div>
                            <div class="card-footer py-0">
                                <a href="#" class="pull-left">
                                    <i class="la la-heart-o"></i>
                                </a>
                                <a href="{{ url( 'workspace/'.$wspUnit->id)}}" class="btn btn-primary pull-right"> Book </a>
                            </div>
                            <a href="{{ url( 'workspace/'.$wspUnit->id)}}" title="" class="ext-link"></a>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="float-end">{{$workspaces->onEachSide(1)->links()}}</div>
        </div>
    </section>
</main>