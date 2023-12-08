<!doctype html>
<html class="no-js" lang="en">

@include('includes.head')

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!--header-top start -->
    @include('includes.header')
    <!--header-top end -->
    <!-- top-area Start -->
    @include('includes.topArea')
    <!-- top-area End -->

    <section id="blog" class="welcome-hero">
        <div class="container">
            <h2><strong>Add Place</strong></h2>
            <form action="{{route('storePlace')}}" method="post" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label for="title" class="col-sm-2 col-form-label">Title:</label>
                    <input type="text" class=" form-control" id="title" placeholder="Enter title" name="placeTitle" value="{{old('placeTitle')}}">
                    @error('placeTitle')
                    <div class="alert alert-info">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="image" class="col-sm-2 col-form-label">Image:</label>
                    <input type="file" class="form-control" id="image" name="placeImage" value="{{old('placeImage')}}">
                    @error('placeImage')
                    <div class="alert alert-success">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="price" class="col-sm-2 col-form-label">Minimum Price:</label>
                    <input type="number" class="form-control" id="price" placeholder="Enter Minimum Price" name="placeMinPrice" value="{{old('placeMinPrice')}}">
                    @error('placeMinPrice')
                    <div class="alert alert-warning">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="price" class="col-sm-2 col-form-label">Maximum Price:</label>
                    <input type="number" class="form-control" id="price" placeholder="Enter Maximum Price" name="placeMaxPrice" value="{{old('placeMaxPrice')}}">
                    @error('placeMaxPrice')
                    <div class="alert alert-danger">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="description" class="col-sm-2 col-form-label">Description:</label>
                    <textarea class="form-control" rows="5" id="description" placeholder="Enter description" name="placeDescription" value="{{old('placeDescription')}}"></textarea>
                    @error('placeDescription')
                    <div class="alert alert-info">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <button type="submit" class="welcome-hero-btn " onclick="window.location.href='#'">
                    Add
                </button>
            </form>
        </div>
    </section>



    <!--footer start-->
    @include('includes.footer')
    <!--footer end-->

    @include('includes.footerJS')

</body>

</html>