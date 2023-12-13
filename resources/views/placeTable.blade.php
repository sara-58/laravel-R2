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
            <h2>Place List</h2>
            <p>The Place list table rows:</p>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Place Tiltle</th>
                        <th>Created At</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($places as $place)
                    <tr>
                        <td>{{$place->placeTitle}}</td>
                        <td>{{$place->created_at}}</td>
                        <td><a href="#">Edit</a></td>
                        <td><a href="deletePlace/{{$place->id}}">Delete</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>

    <!--footer start-->
    @include('includes.footer')
    <!--footer end-->
    @include('includes.footerJS')

</body>

</html>