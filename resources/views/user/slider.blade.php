<div class="welcome-slider-area">
    <div id="welcome-slide-carousel" class="carousel slide carousel-fade" data-ride="carousel" data-interval="5000">
        <ol class="carousel-indicators">
            @for ($i = 0; $i < $silderCount; $i++)
            <li data-target="#welcome-slide-carousel" data-slide-to="{{$i}}" class={{($i==0 ? 'active':'')}}></li>
            @endfor
        </ol>

        <div class="carousel-inner" role="listbox">
            @foreach ($homepage as $key=>$item)
                
                <div class="item {{($key== 0 ? 'active':'')}}">
                    <div class="single-slide-item slide-1" style="background: url('assets/images/slider/{{$item->h_background}}') right content-box">
                        <div class="single-slide-item-table">
                            <div class="single-slide-item-tablecell">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12 text-center">
                                            <div class="header-text">
                                                <h2>{{$item->h_title??""}}</h2>
                                                <p>{{$item->h_description??""}}</p>
                                                
                                                <a class="smoth-scroll hire-us-slide-btn" href="#">Contact us <i class="fa fa-hand-pointer-o btn-hire-us" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach


        </div>
    </div>
</div>