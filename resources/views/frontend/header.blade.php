<header class="navbar-fixed-top ng-scope">
  <div id="header">
    <div class="top-navbar hidden-xs">
      <div class="container">
        <div class="row ng-scope">
          <div class="hidden-sm col-md-4 header-statement">
            <span>You do the Business. <strong>We do the Print.</strong></span>
          </div>
          <div class="col-sm-8 col-md-8 nav-control-options">
            <ul class="nav nav-pills">

              <li>
                <a href="#business-boost"
                   title="Blog" class="wt-identifier wti_blogurl"><span>Blog</span></a>
              </li>
              <li>
                <a wt-identifier="contactus-url" href="#contact-us"
                   class="wt-identifier wti_contactusurl">Contact </a>
              </li>
              @if(\Auth::check())
                <li class="dropdown toggle-with-hover">
                  <a href="#" class="dropdown-toggle hover-dropdown" data-toggle="dropdown" aria-haspopup="true"
                     aria-expanded="true">Hi, {{ \Auth::user()->name }} <span class="caret"></span></a>
                  <ul id="top-dropdown" class="dropdown-menu hover-dropdown" style="top:95%">
                    <li><a href="{{ url('admin') }}"><i
                            class="fa-dashboard fa"></i> {{ trans('system.admin_page') }}</a></li>
                    <li><a href="{{ url('admin/logout') }}"><i
                            class="fa-sign-out fa"></i> {{ trans('system.logout') }}</a></li>
                  </ul>
                </li>
              @else
                <li>
                  <a class="page-scroll" href="{{route('login')}}">{{ trans('auth.myaccount') }}</a>
                </li>
              @endif

              <li class="mini-basket hidden-sm">
                <a wt-identifier="mini-basket-toggle" href="javascript:void(0);"
                   class="basket-dropdown-toggle wt-identifier wti_minibaskettoggle"
                   data-toggle="dropdown" title="Current basket" ng-click="miniBasketClicked()">
                  <div class="fa icon-basket">
                    <img src="./images/basket-transparent-bg.png">
                  </div>
                  <span class="basket-items-price pull-right">
                      <span class="basket-number ng-binding" ng-bind="basketItemCount">0</span>
                      <span><span ng-show="basketItemCount == 0 || basketItemCount &gt; 1"> items</span><span
                            ng-show="basketItemCount == 1" class="ng-hide"> Item</span> - <strong
                            ng-show="basketItemCount &gt; 0"
                            ng-bind="basket.TotalIncVat.DisplayValue"
                            class="ng-binding ng-hide"></strong><strong
                            ng-show="basketItemCount == 0">£0</strong></span>
                      <i class="fa fa-chevron-down"></i>
                  </span>
                </a>
              </li>

              <div class="hidden-sm">
                <div class="dropdown-menu basket-dropdown" role="menu" ng-mouseover="stopBasketFade()"
                     ng-click-off="fadeBasketOut()" ng-init="showMiniBasket()" style="">
                  <div class="row" ng-show="basket.BasketItems.length == 0">
                    <div class="text-center col-md-12 col-sm-12">
                      <span>No items in basket</span>
                    </div>
                  </div>
                  <div class="wrap ng-hide" ng-show="basket.BasketItems.length &gt; 0">
                    <div class="wrap-inside">
                      <table class="basket-table table table-responsive">
                        <thead>
                        <tr>
                          <th>
                            <strong>Product</strong>
                          </th>
                          <th class="text-center">
                            <strong>Quantity</strong>
                          </th>
                          <th class="text-center">
                            <strong>Price</strong>
                          </th>
                        </tr>
                        </thead>
                        <tbody><!-- ngRepeat: basketItem in miniBasket -->
                        </tbody>
                      </table>
                    </div>
                    <div class="row mini-basket-bottom">
                      <div class="col-sm-7 col-md-6 col-lg-6 info-bubble">
                        <div class="row">
                          <div class="col-sm-3 col-md-4">
                            <img class="img-responsive"
                                 src="./images/basket-bulb.png">
                          </div>
                          <div class="col-sm-9 col-md-8 go-to-basket">
                            <strong>Need to upload artwork?</strong>

                            <br><br>
                            <span>You can do this in your basket.</span>
                            <br>
                            <a wt-identifier="go-to-basket"
                               href="#basket"
                               class="wt-identifier wti_gotobasket">Click here to go to your
                              basket</a>
                          </div>
                        </div>

                        <div class="info-bubble-speech"></div>
                      </div>
                      <div class="col-sm-5 col-md-offset-2 col-md-4 col-lg-offset-2 col-lg-4">
                        <div class="row">
                          <div class="col-sm-12 text-right">
                            <span class="total">Total</span>
                                                        <span ng-hide="basket.BasketItems == 0" class="ng-hide"><span
                                                              class="price ng-binding"
                                                              ng-bind="basket.TotalIncVat.DisplayValue"></span></span><br>
                          </div>
                        </div>
                        <div class="row includes-vat-container">
                          <div class="col-sm-12 text-right">
                            <span>(Includes VAT)</span>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-sm-12 text-right">
                            <br>
                            <a wt-identifier="go-to-checkout"
                               href="#basket"
                               ng-hide="basket.BasketItems == 0"
                               class="btn btn-primary checkout-button wt-identifier wti_gotocheckout ng-hide"
                               type="submit">
                              Go To Basket
                            </a>
                            <br>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </ul>
          </div>

          <div class="visible-sm col-sm-4">
            <ul class="nav nav-pills pull-right">
              <li class="mini-basket">
                <a wt-identifier="mini-basket-toggle" href="javascript:void(0);"
                   class="basket-dropdown-toggle wt-identifier wti_minibaskettoggle"
                   data-toggle="dropdown" title="Current basket" ng-click="miniBasketClicked()">
                  <div class="fa icon-basket">
                    <img src="./images/basket-transparent-bg.png">
                  </div>

    <span class="basket-items-price pull-right">
        <span class="basket-number ng-binding" ng-bind="basketItemCount">0</span>
        <span><span ng-show="basketItemCount == 0 || basketItemCount &gt; 1"> items</span><span
              ng-show="basketItemCount == 1" class="ng-hide"> Item</span> - <strong
              ng-show="basketItemCount &gt; 0"
              ng-bind="basket.TotalIncVat.DisplayValue"
              class="ng-binding ng-hide"></strong><strong
              ng-show="basketItemCount == 0">£0</strong></span>
        <i class="fa fa-chevron-down"></i>
    </span>
                </a>
              </li>
              <div class="dropdown-menu basket-dropdown" role="menu" ng-mouseover="stopBasketFade()"
                   ng-click-off="fadeBasketOut()" ng-init="showMiniBasket()" style="">
                <div class="row" ng-show="basket.BasketItems.length == 0">
                  <div class="text-center col-md-12 col-sm-12">
                    <span>No items in basket</span>
                  </div>
                </div>
                <div class="wrap ng-hide" ng-show="basket.BasketItems.length &gt; 0">
                  <div class="wrap-inside">
                    <table class="basket-table table table-responsive">
                      <thead>
                      <tr>
                        <th>
                          <strong>Product</strong>
                        </th>
                        <th class="text-center">
                          <strong>Quantity</strong>
                        </th>
                        <th class="text-center">
                          <strong>Price</strong>
                        </th>
                      </tr>
                      </thead>
                      <tbody><!-- ngRepeat: basketItem in miniBasket -->
                      </tbody>
                    </table>
                  </div>
                  <div class="row mini-basket-bottom">
                    <div class="col-sm-7 col-md-6 col-lg-6 info-bubble">
                      <div class="row">
                        <div class="col-sm-3 col-md-4">
                          <img class="img-responsive"
                               src="./images/basket-bulb.png">
                        </div>
                        <div class="col-sm-9 col-md-8 go-to-basket">
                          <strong>Need to upload artwork?</strong>

                          <br><br>
                          <span>You can do this in your basket.</span>
                          <br>
                          <a wt-identifier="go-to-basket"
                             href="#basket"
                             class="wt-identifier wti_gotobasket">Click here to go to your
                            basket</a>
                        </div>
                      </div>

                      <div class="info-bubble-speech"></div>
                    </div>
                    <div class="col-sm-5 col-md-offset-2 col-md-4 col-lg-offset-2 col-lg-4">
                      <div class="row">
                        <div class="col-sm-12 text-right">
                          <span class="total">Total</span>
                                                    <span ng-hide="basket.BasketItems == 0" class="ng-hide"><span
                                                          class="price ng-binding"
                                                          ng-bind="basket.TotalIncVat.DisplayValue"></span></span><br>
                        </div>
                      </div>
                      <div class="row includes-vat-container">
                        <div class="col-sm-12 text-right">
                          <span>(Includes VAT)</span>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-12 text-right">
                          <br>
                          <a wt-identifier="go-to-checkout"
                             href="#basket"
                             ng-hide="basket.BasketItems == 0"
                             class="btn btn-primary checkout-button wt-identifier wti_gotocheckout ng-hide"
                             type="submit">
                            Go To Basket
                          </a>
                          <br>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <nav class="navbar navbar-default  ng-scope" role="navigation" ng-controller="InstantPrint.TrackingController">
      <div class="container">
        <div class="navbar-header">

          <button type="button" class="navbar-toggle col-xs-2" data-toggle="collapse"
                  data-target="#MobileCollapse">
            <span class="sr-only">Toggle navigation</span>
            <i class="fa fa-navicon fa-2x fa-inverse"></i>
          </button>

          <a wt-identifier="ip-title" class="logo hidden-xs wt-identifier wti_iptitle"
             href="#"
             title="instant print. | Flyer &amp; Leaflet Printing with 24hr Dispatch"><img
                src="./images/logo.png"
                alt="instant print. | Flyer &amp; Leaflet Printing with 24hr Dispatch"></a>
          <a wt-identifier="navbar-icon" class="navbar-brand visible-xs col-xs-5 wt-identifier wti_navbaricon"
             href="#">
            <img class="img-responsive"
                 src="./images/ip-mob-logo.png">
          </a>

          <div class="mini-basket pull-right visible-xs col-xs-5 ng-scope"
               ng-controller="InstantPrint.BasketController">
            <a wt-identifier="mini-basket-clicked" href="#basket"
               title="Current basket" ng-click="miniBasketClicked()"
               class="wt-identifier wti_minibasketclicked">
              <div class="fa icon-basket col-xs-2">
                <img src="./images/basket-transparent-bg.png">
              </div>

                            <span class="basket-items-price col-xs-9 pull-right">
                                <span><span ng-show="basketItemCount == 0"> 0 items</span><span
                                      ng-show="basketItemCount &gt; 0" class="basket-number ng-hide">(<span
                                        ng-bind="basketItemCount" class="ng-binding">0</span>)</span> - <strong
                                      ng-show="basketItemCount &gt; 0" ng-bind="basket.TotalIncVat.DisplayValue"
                                      class="ng-binding ng-hide"></strong><strong
                                      ng-show="basketItemCount == 0">£0</strong></span>
                            </span>
            </a>
          </div>
        </div>

        <div class="visible-sm col-sm-8 text-right pull-right number-container">
          <strong class="need-help">Need help? Call our UK team</strong> <a class="phone-number"
                                                                            href="tel:0191 27 27 327"
                                                                            ng-click="appendLabelAndSendTracking(&#39;Call&#39;, &#39;Header&#39;)">0191
            27 27 327</a>
        </div>

        <div class="collapse navbar-collapse" id="NavbarCollapse">
          <ul class="nav navbar-nav" ng-mouseleave="hideMenu()">
            <li class="dropdown toggle-with-hover">
              <a wt-identifier="product-flyers-dropdown"
                 class="dropdown-toggle wt-identifier wti_productflyersdropdown" data-toggle="dropdown"
                 data-target="#" href="javascript:void(0);">
                <span>Flyers</span> &nbsp;<i class="fa fa-chevron-down"></i>
              </a>
              <ul class="dropdown-menu row" role="menu">
                <li class="col-md-12">
                  <ul>
                    <li><a wt-identifier="product-flyers-leaflets-all"
                           href="#flyers-leaflets"
                           class="wt-identifier wti_productflyersleafletsall">All Flyers<i
                            class="fa fa-angle-right pull-right"></i></a></li>
                    <li><a wt-identifier="product-l-a5"
                           href="#flyers-leaflets/a7#!?rangesizeq=0"
                           class="wt-identifier wti_productla5">A7 Flyers/Leaflets <i
                            class="fa fa-angle-right pull-right"></i></a></li>
                    <li><a wt-identifier="product-l-a6"
                           href="#flyers-leaflets/a6#!?lamination=no&amp;size=a6&amp;paper=250gsm-silk&amp;sided=single&amp;rangesizeq=0"
                           class="wt-identifier wti_productla6">A6 Flyers/Leaflets <i
                            class="fa fa-angle-right pull-right"></i></a></li>
                    <li><a wt-identifier="product-l-a5"
                           href="#flyers-leaflets/a5#!?rangesizeq=0"
                           class="wt-identifier wti_productla5">A5 Flyers/Leaflets <i
                            class="fa fa-angle-right pull-right"></i></a></li>
                    <li><a wt-identifier="product-l-a4"
                           href="#flyers-leaflets/a4#!?rangesizeq=0"
                           class="wt-identifier wti_productla4">A4 Flyers/Leaflets <i
                            class="fa fa-angle-right pull-right"></i></a></li>
                    <li class="last-li"><a wt-identifier="product-l-a3"
                                           href="#flyers-leaflets/a3#!?rangesizeq=0"
                                           class="wt-identifier wti_productla3">A3 Flyers/Leaflets
                        <i
                            class="fa fa-angle-right pull-right"></i></a></li>

                  </ul>
                </li>
              </ul>
            </li>

            <li class="dropdown toggle-with-hover">
              <a wt-identifier="product-bc-dropdown"
                 class="dropdown-toggle wt-identifier wti_productbcdropdown" data-toggle="dropdown"
                 data-target="#" href="javascript:void(0);">
                <span>Business Cards</span> &nbsp;<i class="fa fa-chevron-down"></i>
              </a>
              <ul class="dropdown-menu row" role="menu">
                <li class="col-md-12">
                  <ul>
                    <li><a wt-identifier="product-businesscards-all"
                           href="#business-cards"
                           class="wt-identifier wti_productbusinesscardsall">All Business Cards<i
                            class="fa fa-angle-right pull-right"></i></a></li>
                    <li><a wt-identifier="product-businesscard-premium"
                           href="#business-cards/premium#!?lamination=matt&amp;size=85-x-55-mm&amp;paper=450gsm-silk&amp;sided=double&amp;rangesizeq=0"
                           class="wt-identifier wti_productbusinesscardpremium">Premium (most
                        popular) <i class="fa fa-angle-right pull-right"></i></a></li>
                    <li><a wt-identifier="product-businesscard-mini"
                           href="#business-cards/mini#!?rangesizeq=0"
                           class="wt-identifier wti_productbusinesscardmini">Mini <i
                            class="fa fa-angle-right pull-right"></i></a></li>
                    <li><a wt-identifier="product-businesscard-square"
                           href="#business-cards/square#!?rangesizeq=0"
                           class="wt-identifier wti_productbusinesscardsquare">Square <i
                            class="fa fa-angle-right pull-right"></i></a></li>
                    <li><a wt-identifier="product-businesscard-metallic"
                           href="#business-cards/metallic#!?rangesizeq=0"
                           class="wt-identifier wti_productbusinesscardmetallic">Metallic <i
                            class="fa fa-angle-right pull-right"></i></a></li>
                    <li><a wt-identifier="product-businesscard-loyalty-cards"
                           href="#business-cards/loyalty-cards#!?rangesizeq=0"
                           class="wt-identifier wti_productbusinesscardloyaltycards">Loyalty Cards
                        <i class="fa fa-angle-right pull-right"></i></a></li>
                    <li class="last-li"><a wt-identifier="product-businesscard-premium-design"
                                           href="#business-cards/premium/designs#!?rangesizeq=0"
                                           class="wt-identifier wti_productbusinesscardpremiumdesign">Free
                        Design Templates <i class="fa fa-angle-right pull-right"></i></a></li>
                  </ul>
                </li>
              </ul>
            </li>

            <li class="dropdown toggle-with-hover">
              <a wt-identifier="product-booklet-dropdown"
                 class="dropdown-toggle wt-identifier wti_productbookletdropdown" data-toggle="dropdown"
                 data-target="#" href="javascript:void(0);">
                <span>Booklets</span> &nbsp;<i class="fa fa-chevron-down"></i>
              </a>
              <ul class="dropdown-menu booklets-dropdown row" role="menu">
                <li class="col-md-12">
                  <ul>
                    <li><a wt-identifier="product-booklets-all"
                           href="#booklets"
                           class="wt-identifier wti_productbookletsall">All Booklets<i
                            class="fa fa-angle-right pull-right"></i></a></li>
                    <li><a wt-identifier="product-booklets"
                           href="#stapled-booklets"
                           class="wt-identifier wti_productbooklets">Stapled Booklets <i
                            class="fa fa-angle-right pull-right"></i></a></li>
                    <li><a wt-identifier="product-stapled-booklets-A6"
                           href="#stapled-booklets/a6"
                           class="wt-identifier wti_productstapledbookletsA6">A6 Stapled Booklets <i
                            class="fa fa-angle-right pull-right"></i></a></li>
                    <li><a wt-identifier="product-stapled-booklets-A5"
                           href="#stapled-booklets/a5"
                           class="wt-identifier wti_productstapledbookletsA5">A5 Stapled Booklets <i
                            class="fa fa-angle-right pull-right"></i></a></li>
                    <li class="last-li"><a wt-identifier="product-stapled-booklets-A4"
                                           href="#stapled-booklets/a4"
                                           class="wt-identifier wti_productstapledbookletsA4">A4
                        Stapled Booklets <i
                            class="fa fa-angle-right pull-right"></i></a></li>

                  </ul>
                </li>
              </ul>
            </li>

            <li class="dropdown toggle-with-hover">
              <a class="dropdown-toggle wt-identifier wti_productpostersdropdown" data-toggle="dropdown"
                 data-target="#" href="javascript:void(0);">
                <span>Posters</span> &nbsp;<i class="fa fa-chevron-down"></i>
              </a>
              <ul class="dropdown-menu dropdown-menu-last row" role="menu">
                <li class="col-md-12">
                  <ul>
                    <li><a wt-identifier="product-poster-all"
                           href="#posters"
                           class="wt-identifier wti_productposterall">All Posters<i
                            class="fa fa-angle-right pull-right"></i></a></li>
                    <li><a wt-identifier="product-pos-a3"
                           href="#posters/a3#!?rangesizeq=0"
                           class="wt-identifier wti_productposa3">A3 Posters <i
                            class="fa fa-angle-right pull-right"></i></a></li>
                    <li><a wt-identifier="product-pos-a2"
                           href="#posters/a2#!?rangesizeq=0"
                           class="wt-identifier wti_productposa2">A2 Posters <i
                            class="fa fa-angle-right pull-right"></i></a></li>
                    <li><a wt-identifier="product-pos-a1"
                           href="#posters/a1#!?rangesizeq=0"
                           class="wt-identifier wti_productposa1">A1 Posters <i
                            class="fa fa-angle-right pull-right"></i></a></li>
                    <li class="last-li"><a wt-identifier="product-pos-a0"
                                           href="#posters/a0#!?rangesizeq=0"
                                           class="wt-identifier wti_productposa0">A0 Posters <i
                            class="fa fa-angle-right pull-right"></i></a></li>
                  </ul>
                </li>
              </ul>
            </li>
          </ul>

          <div class="hidden-xs hidden-sm col-md-3 col-lg-3 text-right pull-right number-container">
            <strong class="need-help">Need help? Call our UK team</strong> <br><a class="phone-number"
                                                                                  href="tel:0191 27 27 327"
                                                                                  ng-click="appendLabelAndSendTracking(&#39;Call&#39;, &#39;Header&#39;)">0191
              27 27 327</a>
          </div>
        </div>

        <div class="collapse navbar-collapse" id="MobileCollapse">
          <div class="nav navbar-nav visible-xs">
            <div class="row products-row">
              <div class="col-xs-12">
                                <span><a wt-identifier="flyers-mobile-url"
                                         href="#flyers-leaflets"
                                         class="wt-identifier wti_flyersmobileurl">Flyers </a></span>
              </div>
              <div class="col-xs-12">
                                <span><a wt-identifier="business-card-mobile-url"
                                         href="#business-cards"
                                         class="wt-identifier wti_businesscardmobileurl">Business Cards </a></span>
              </div>
              <div class="col-xs-12">
                                <span><a wt-identifier="booklets-mobile-url"
                                         href="#booklets"
                                         class="wt-identifier wti_bookletsmobileurl">Booklets </a></span>
              </div>
              <div class="col-xs-12">
                                <span><a wt-identifier="posters-mobile-url"
                                         href="#posters"
                                         class="wt-identifier wti_postersmobileurl">Posters </a></span>
              </div>

            </div>

            <div class="row">
            @if(\Auth::check())
                <div class="col-xs-12 btn-mobile-menu-container" style="padding-top:10px">
                  <a href="{{ url('admin') }}" class="btn btn-primary btn-mobile-menu btn-sample-pack ">{{ trans('system.admin_page') }} </a>
                </div>
                <br>
                <div class="col-xs-12 btn-mobile-menu-container" style="padding-bottom:0px">
                  <a href="{{ url('admin/logout') }}" class="btn btn-default btn-mobile-menu btn-call">{{ trans('system.logout') }}</a>
                </div>

            @else
              <div class="col-xs-12 btn-mobile-menu-container btn-login-container">
                <a wt-identifier="login-mobile-url" href="#account"
                   class="btn btn-default btn-mobile-menu btn-login wt-identifier wti_loginmobileurl"><img
                      src="./images/key.png">
                  &nbsp;Login to my account</a>
              </div>

            @endif
            </div>
          </div>
        </div>
      </div>
    </nav>

  </div>
</header>
