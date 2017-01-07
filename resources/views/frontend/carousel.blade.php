<div id="carousel-home" class="carousel slide" data-interval="false" data-ride="carousel">
    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        {{--*/ $carousel = \Carousel::where('status',1)->orderBy('order_number', 'asc')->get() /*--}}
        {{--*/ $flag = 1 /*--}}
        @foreach($carousel as $item )
            <div class="item {{ $flag==1 ? 'active' : '' }}">
                <img class="img-responsive col-sm-12 no-padding"
                     src="{{asset('images/carousel_img/'.$item->img_url)}}"
                     alt="{{$item->title}}">
                <div class="container" style="background-color: #91989f">
                    <div class="carousel-caption grey-text">
                        <h2>
                            {{$item->title}}
                        </h2>
                        <hr class="text-center">
                        <h4>
                            {{$item->description}}
                        </h4>
                        <div class="carousel-buttons">
                            <div class="start-shop white">
                                <a wt-identifier="home-carousel-button-text"
                                   href="#bundles"
                                   class="btn btn-primary-white btn-lg wt-identifier wti_homecarouselbuttontext">Shop
                                    now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{--*/ $flag++ /*--}}
        @endforeach
    </div>

    <!-- Controls -->
    <a class="left carousel-control hidden-xs wt-identifier wti_homecarouselprevious"
       href="#carousel-home" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
    </a>
    <a wt-identifier="home-carousel-next"
       class="right carousel-control hidden-xs wt-identifier wti_homecarouselnext"
       href="#carousel-home" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
    </a>
</div>

