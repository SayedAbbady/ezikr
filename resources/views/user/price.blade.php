<!-- START PRICING DESIGN AREA -->
    <section id="pricing" class="pricing-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="section-title">
                        <h2>our pricing</h2>
                        <span class="title-divider">
                            <i class="fa fa-diamond" aria-hidden="true"></i>
                        </span>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($plan as $item)
                <!-- START SINGLE PRICING DESIGN AREA -->
                <div class="col-md-4 col-sm-12">
                    <div class="pricing-table text-center wow fadeIn animated" style="visibility: visible; animation-name: fadeIn;">
                        <h3 class="price-title">{{$item->pl_title}}</h3>
                        <div class="price">
                            <p><span class="dollor">$</span>{{$item->pl_money}}<span class="month">/monthly</span></p>
                        </div>
                        {!!$item->pl_features!!}
                        
                        <a href="{{route('book',$item->pl_id)}}" class="read-more">BOOK NOW</a>
                    </div>
                </div>
                <!-- / END SINGLE PRICING DESIGN AREA -->
                @endforeach
                
            </div>
        </div>
    </section>
    <!-- / END PRICING DESIGN AREA -->
