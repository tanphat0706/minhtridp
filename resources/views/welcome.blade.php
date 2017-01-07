@extends('frontend.template')
@section('title', trans('system.home'))
@section('content')
  <div id="ReassurancePoints" class="hidden-xs">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center top-info">
          <div class="row">
            <div class="col-sm-6 col-md-4 reassurance-col">
              <img src="./images/star.png">
              <span>Official Trustpilot score: 9.1 - Excellent!</span>
            </div>
            <div class="hidden-sm col-md-4 reassurance-col middle-col">
              <img src="./images/delivery.png">
              <span>£4.99 delivery, free on orders over £75</span>
            </div>
            <div class="col-sm-6 col-md-4 reassurance-col last-col">
              <img src="./images/clock-2.png">
              <span>Order &amp; approve by 5pm for next day dispatch</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="home-page" ng-controller="InstantPrint.HomePageController" class="ng-scope">
    <div class="home-slider hero-unit">
      <div class="container-fluid no-padding">
          @include('frontend/carousel')
      </div>
    </div>
    <div class="home-offers-carousel ng-scope" ng-controller="InstantPrint.FeaturedProductsController"
         ng-init="init()" id="featured-products-section">
      <div class="container">
        <div class="col-lg-12 text-center">
          <div class="row lined">
            <span>Popular Products</span>
          </div>
        </div>
        <!-- ngRepeat: list in featuredProductList -->
        <div class="item ng-scope active">
          <div class="row products">
            <!-- ngRepeat: item in list -->
            @foreach($cates as $cate)
            <div ng-repeat="item in list"
                 class="brand-colour col-md-3 col-sm-6 col-xs-12 text-center ng-scope">
              <div class="product-title col-xs-12 brand-text ng-binding">{{$cate->name}}</div>
              <div class="product-cont">
                <div class="bg">
                  <a title="Booklets" class="wt-identifier wti_featuredproductsBooklets"
                     href="#booklets/">
                    <img alt="{{$cate->name}}"
                         src="{{asset('images/category_img/thumbnail/' . $cate->thumbs_img)}}">
                    {{--<div class="col-sm-2 col-md-2 col-lg-4 prices-position pull-right">--}}
                      {{--<div class="prices brand-bg">--}}
                        {{--<div class="price-from">--}}
                          {{--<div class="from">--}}
                            {{--From--}}
                          {{--</div>--}}
                          {{--<span class="ng-binding">£25</span>--}}
                        {{--</div>--}}
                      {{--</div>--}}
                    {{--</div>--}}
                  </a>

                  <div class="details">
                    <div class="info ng-binding"><p><?php echo $cate->home_description ?></p></div>
                    <div class="btn btn-primary-dark-grey btn-lg text-center col-xs-12 btn-center">
                      <a wt-identifier="featured-products-url-Booklets" ng-href="/booklets/"
                         class="ng-binding wt-identifier wti_featuredproductsurlBooklets"
                         href="#booklets/">{{$cate->name}}</a>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- end ngRepeat: item in list -->
            @endforeach
          </div>
        </div><!-- end ngRepeat: list in featuredProductList -->
      </div>
    </div>

    <div class="company-info">
      <div class="container">
        <div class="row ">
          <div class="col-sm-6 col-xs-12">
            <div class="header">
              <h1 class="content-header">We're instantprint.&nbsp;</h1>
            </div>
            <div class="text">
              <p class="intro">The online print company that specialises in 24 hour flyer &amp; leaflets,
                business cards, posters, and stationery printing.</p>
              <p class="intro">Our ambition is to deliver the best through technology, innovation and
                development to ensure faster turnaround times, sharper pricing and a service that's
                worth talking about. So next time you need print, think instant print.<br><br><strong>You
                  do the business.<span class="sub-header"
                                        style="color: #e2004d;"> We do the print.</span></strong></p>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6">
            <div class="selling-points">
              <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-6">
                  <a wt-identifier="twentyfour-hour-dispatch"
                     href="#delivery-and-turnaround"
                     class="wt-identifier wti_twentyfourhourdispatch">
                    <div class="sell">
                      <div class="col-xs-12">
                        <img class="img-responsive"
                             src="./images/dispatch.png"
                             alt="Alternate Text">
                        <div class="col-md-12">
                          <p class="point text-center">24hr dispatch as standard</p>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-6">
                  <a wt-identifier="one-hour-trackable"
                     href="#delivery-and-turnaround"
                     class="wt-identifier wti_onehourtrackable">
                    <div class="sell">
                      <div class="col-xs-12">
                        <img class="img-responsive"
                             src="./images/1hr-delivery.png"
                             alt="Alternate Text">
                        <div class="col-md-12">
                          <p class="point text-center">1 hour trackable delivery slot</p>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>

                <div class="col-md-6 col-sm-12 col-xs-6">
                  <a wt-identifier="proofing-tool"
                     href="#artwork-and-design"
                     class="wt-identifier wti_proofingtool">
                    <div class="sell">
                      <div class="col-xs-12">
                        <img class="img-responsive"
                             src="./images/proofing.png"
                             alt="Alternate Text">

                        <div class="col-md-12">
                          <p class="point text-center">The only 3 minute proofing tool</p>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>

                <div class="col-md-6 col-sm-12 col-xs-6">
                  <a wt-identifier="artwork-check-on-request"
                     href="#artwork-and-design"
                     class="wt-identifier wti_artworkcheckonrequest">
                    <div class="sell">
                      <div class="col-xs-12">
                        <img class="img-responsive"
                             src="./images/artwork-check.png"
                             alt="Alternate Text">
                        <div class="col-md-12">
                          <p class="point text-center">Free artwork check on request</p>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="trust-pilot-container">
      <div class="container">
        <div class="trust-pilot-callout col-md-12">
          <div class="row">
            <div class="col-md-4 trust-pilot-info">
              <div class="row">
                <div class="col-xs-12">
                  <h2>Order with confidence</h2>
                </div>
                <div class="col-xs-12 break-word ">
                  <h6>You can trust instantprint to provide great print, prices and service, all
                    delivered within a matter of days. Here's what some of our customers had to say
                    about their experience.</h6>
                </div>
                <div class="col-xs-12 col-md-11 trust-pilot-score">
                  <div class="score col-xs-4">9.1</div>
                  <div class="col-lg-8 col-md-7 col-xs-7 rated">
                    <h3>Excellent</h3>
                    <h4>Based on 1745 reviews on Trustpilot.com</h4>
                  </div>
                </div>
              </div>
            </div>
            <div id="trust-pilot-slider" data-interval="false"
                 class="carousel col-sm-12 col-md-8 trust-pilot-slider no-padding" data-ride="carousel">
              <div class="carousel-inner" role="listbox">
                <div class="item active">
                  <div class="trust-pilot">
                    <div class="row">
                      <div class="col-xs-8 col-sm-4">
                        <div class=" trust-pilot-star">
                          <i class="fa fa-star"></i>
                        </div>
                        <div class=" trust-pilot-star">
                          <i class="fa fa-star"></i>
                        </div>
                        <div class=" trust-pilot-star">
                          <i class="fa fa-star"></i>
                        </div>
                        <div class=" trust-pilot-star">
                          <i class="fa fa-star"></i>
                        </div>
                        <div class=" trust-pilot-star">
                          <i class="fa fa-star"></i>
                        </div>
                      </div>
                      <div class="col-xs-4 col-sm-3 pull-right">
                        <a wt-identifier="trustpilot-url"
                           href="https://uk.trustpilot.com/review/instantprint.co.uk"
                           target="_blank" class="wt-identifier wti_trustpiloturl">
                          <img class=""
                               src="./images/trustpilot-logo.png"
                               alt="Alternate Text">
                        </a>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-xs-12 trust-pilot-review">
                        <h2>Impressed - better than expected</h2>
                        <div class="review-content">
                          Very prompt pre-print emails and job delivery. Always used a local
                          printer in the past but took a risk with you for latest job. At
                          least, it seems like a risk when you submit online and to someone
                          you've never met and chatted with before. But it worked fine and the
                          materials and print quality are better than expected. Impressed and
                          will use again!
                        </div>
                        <div class="reviewer">Trevor<span
                              class="date">Published 15/12/2015</span></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="trust-pilot">
                    <div class="row">
                      <div class="col-xs-8 col-sm-4">
                        <div class=" trust-pilot-star">
                          <i class="fa fa-star"></i>
                        </div>
                        <div class=" trust-pilot-star">
                          <i class="fa fa-star"></i>
                        </div>
                        <div class=" trust-pilot-star">
                          <i class="fa fa-star"></i>
                        </div>
                        <div class=" trust-pilot-star">
                          <i class="fa fa-star"></i>
                        </div>
                        <div class=" trust-pilot-star">
                          <i class="fa fa-star"></i>
                        </div>
                      </div>
                      <div class="col-xs-4 col-sm-3 pull-right">
                        <img class=""
                             src="./images/trustpilot-logo.png"
                             alt="Alternate Text">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-12 trust-pilot-review">
                        <h2>Brilliant Service!</h2>
                        <div class="review-content">I ordered 1000 double sided A6 flyers. I was
                          really surprised at how inexpensive it was, especially when they
                          arrived and the quality was very high: lovely bright colours and
                          glossy finish. I am quite lo tech and the process was quick and
                          easy.
                          Next time I arrange a fund raising event I will definately use this
                          service again, Thank you
                        </div>
                        <div class="reviewer">Julie<span
                              class="date">Published 14/12/2015</span></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="trust-pilot">
                    <div class="row">
                      <div class="col-xs-8 col-sm-4">
                        <div class=" trust-pilot-star">
                          <i class="fa fa-star"></i>
                        </div>
                        <div class=" trust-pilot-star">
                          <i class="fa fa-star"></i>
                        </div>
                        <div class=" trust-pilot-star">
                          <i class="fa fa-star"></i>
                        </div>
                        <div class=" trust-pilot-star">
                          <i class="fa fa-star"></i>
                        </div>
                        <div class=" trust-pilot-star">
                          <i class="fa fa-star"></i>
                        </div>
                      </div>
                      <div class="col-xs-4 col-sm-3 pull-right">
                        <img class=""
                             src="./images/trustpilot-logo.png"
                             alt="Alternate Text">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-12 trust-pilot-review">
                        <h2>Quick delivery and hassle free</h2>
                        <div class="review-content">Was easy to upload the artwork and modify it
                          if necessary, price was excellent and so was the quality of the
                          flyers when they arrived. Delivery was on the day predicted and was
                          tracked all the way.
                        </div>
                        <div class="reviewer">Luke<span class="date">Published 14/12/2015</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="trust-pilot">
                    <div class="row">
                      <div class="col-xs-8 col-sm-4">
                        <div class=" trust-pilot-star">
                          <i class="fa fa-star"></i>
                        </div>
                        <div class=" trust-pilot-star">
                          <i class="fa fa-star"></i>
                        </div>
                        <div class=" trust-pilot-star">
                          <i class="fa fa-star"></i>
                        </div>
                        <div class=" trust-pilot-star">
                          <i class="fa fa-star"></i>
                        </div>
                        <div class=" trust-pilot-star">
                          <i class="fa fa-star"></i>
                        </div>
                      </div>
                      <div class="col-xs-4 col-sm-3 pull-right">
                        <img class=""
                             src="./images/trustpilot-logo.png"
                             alt="Alternate Text">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-12 trust-pilot-review">
                        <h2>Excellent quality - fast service!!</h2>
                        <div class="review-content">
                          I was very happy with the quality of all of the products produced by
                          Instantprint. We needed invites, roller banner, headed paper and
                          leaflets for an event. All of the products were delivered quickly
                          and we had no issues with any of the products.
                        </div>
                        <div class="reviewer">Pamela<span
                              class="date">Published 14/12/2015</span></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="trust-pilot">
                    <div class="row">
                      <div class="col-xs-8 col-sm-4">
                        <div class=" trust-pilot-star">
                          <i class="fa fa-star"></i>
                        </div>
                        <div class=" trust-pilot-star">
                          <i class="fa fa-star"></i>
                        </div>
                        <div class=" trust-pilot-star">
                          <i class="fa fa-star"></i>
                        </div>
                        <div class=" trust-pilot-star">
                          <i class="fa fa-star"></i>
                        </div>
                        <div class=" trust-pilot-star">
                          <i class="fa fa-star"></i>
                        </div>
                      </div>
                      <div class="col-xs-4 col-sm-3 pull-right">
                        <img class=""
                             src="./images/trustpilot-logo.png"
                             alt="Alternate Text">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-xs-12 trust-pilot-review">
                        <h2>Thank you Instantprint.</h2>
                        <div class="review-content">
                          I am delighted with the result of my flyers and posters. The quality
                          is exceptional and the four colour print is perfect. After many
                          years of having printing done I will only use Instantprint from now
                          on and have already recommended it to my friends. Delivered on time
                          as well.
                        </div>
                        <div class="reviewer">Pauline<span
                              class="date">Published 27/10/2015</span></div>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
              <ol class="carousel-indicators">
                <li data-target="#trust-pilot-slider" data-slide-to="0" class="active"></li>
                <li data-target="#trust-pilot-slider" data-slide-to="1"></li>
                <li data-target="#trust-pilot-slider" data-slide-to="2"></li>
                <li data-target="#trust-pilot-slider" data-slide-to="3"></li>
                <li data-target="#trust-pilot-slider" data-slide-to="4"></li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container contact-us">
      <div class="col-xs-12">
        <div class="row">
          <h2>Useful contacts</h2>
          <div class="col-xs-12 col-sm-4 contact-wrapper">
            <div class="col-sm-12 text-center">
              <div class="row">
                <img src="./images/art-check.png"
                     alt="Alternate Text">
              </div>
              <div class="col-xs-12 col-sm-12">
                <div class="row contact-us-label orange">
                  Free Artwork Check
                </div>
              </div>
              <div class="col-xs-12 col-sm-12">
                <div class="row contact-email">
                  <a wt-identifier="artwork-check-email-to" href="mailto:studio@instantprint.co.uk"
                     class="wt-identifier wti_artworkcheckemailto">studio@instantprint.co.uk</a>
                </div>
              </div>
              <div class="col-xs-12 col-sm-12">
                <div class="row">
                  If you’re not sure about your artwork, you can check it for free! Our awesome studio
                  team will make sure that it’s the right size, they’ll check that it’s set up
                  correctly for print and they’ll keep an eye out for any resolution issues. Told you
                  they’re awesome.
                </div>
              </div>
            </div>
          </div>
          <div class="col-xs-12 col-sm-4 contact-wrapper">
            <div class="col-sm-12 text-center">
              <div class="row">
                <img src="./images/artwork-team.png"
                     alt="Alternate Text">
              </div>
              <div class="row text-center">
                <div class="col-xs-12 col-sm-12">
                  <div class="row contact-us-label green">
                    Artwork Team
                  </div>
                </div>
                <div class="col-xs-12 col-sm-12">
                  <div class="row contact-email">
                    <a wt-identifier="artwork-team-email" href="mailto:artwork@instantprint.co.uk"
                       class="wt-identifier wti_artworkteamemail">artwork@instantprint.co.uk</a>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-12">
                  <div class="row">
                    When you’re ready to order, send your artwork to this address with your order
                    number in the subject line. Make sure to double check the file size limit on
                    your inbox, as this could stop us from receiving your emails. Nobody wants that!
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xs-12 col-sm-4 contact-wrapper">
            <div class="row text-center">
              <div class="row">
                <img src="./images/customer-services.png"
                     alt="Alternate Text">
              </div>
              <div class="col-xs-12 col-sm-12">
                <div class="row contact-us-label blue">
                  Customer Services
                </div>
              </div>
              <div class="col-xs-12 col-sm-12">
                <div class="row contact-email">
                  <a wt-identifier="customer-service-email" href="mailto:office@instantprint.co.uk"
                     class="wt-identifier wti_customerserviceemail">office@instantprint.co.uk</a>
                </div>
              </div>
              <div class="col-xs-12 col-sm-12">
                <div class="row">
                  For a quote, a question and everything in between, you can get in touch with our
                  trusty customer service team. Email them on the address above or call them on 0191
                  27 27 327, no matter the query they’re always happy to help.
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid no-padding">
      <div class="convincing-container">
        <div class="container no-padding">
          <div class="col-xs-12">
            <div class="row">
              <div class="col-xs-12 col-md-8 convincing-img">
                <div class="row">
                  <img class="img-responsive"
                       src="./images/sample-pack-banner.png"
                       alt="Sample pack banner">
                </div>
              </div>
              <div class="col-xs-12 convincing-content text-center">
                <div class="row">
                  <div class="col-xs-12">
                    <div class="row">
                      <h2>
                        Still need convincing?
                      </h2>
                    </div>
                  </div>
                  <div class="col-xs-12 col-md-5">
                    <div class="row">
                      Why not order one of our free sample packs and take a look for yourself
                      #enjoytheprint
                    </div>
                  </div>
                  <br>
                  <div class="col-xs-12">
                    <div class="row">
                      <a wt-identifier="request-free-sample-pack"
                         href="#sample-products"
                         class="btn btn-primary btn-lg wt-identifier wti_requestfreesamplepack">Request
                        a free sample pack</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>

  <div class="push"></div>
@endsection