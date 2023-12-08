    <section id="explore" class="explore">
        <div class="container">
            <div class="section-header">
                <h2>explore last 6 places</h2>
            </div><!--/.section-header-->
            <div class="explore-content">
                <div class="row">
                    <form action="{{route('storePlace')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @foreach($places as $place)
                        <div class="col-md-4 col-sm-6">
                            <div class="single-explore-item">
                                <div class="single-explore-img">
                                    <img src="{{asset('assets/images')}}/{{$place->placeImage}}" alt="explore image">
                                    <div class="single-explore-img-info">
                                        <button onclick="window.location.href='#'">best rated</button>
                                        <div class="single-explore-image-icon-box">
                                            <ul>
                                                <li>
                                                    <div class="single-explore-image-icon">
                                                        <i class="fa fa-arrows-alt"></i>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="single-explore-image-icon">
                                                        <i class="fa fa-bookmark-o"></i>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-explore-txt bg-theme-5">
                                    <h3>{{$place->placeTitle}}</h3>
                                    <p class="explore-rating-price">

                                        <span class="explore-price-box">
                                            Price From : 
                                            <span class="explore-price"> {{$place->placeMinPrice}}$ to {{$place->placeMaxPrice}}k$</span>
                                        </span>
                                    </p>
                                    <div class="explore-person">
                                        <div class="row">
                                            <div class="col-sm-10">
                                                <p>
                                                    Description:<br>
                                                    {{$place->placeDescription}}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </form>
                </div>
            </div>

        </div><!--/.container-->

    </section><!--/.explore-->