<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <style type="text/css">
        .div_deg {
            text-align: center;
        }

        .title_deg {
            font-size: 30px;
            font-weight: bold;
            color: black;
            padding: 30px;
        }

        label {
            display: inline-block;
            width: 200px;
            color: black;
            font-weight: bold;
            font-size: 20px;
        }

        .field_deg {
            padding: 30px;
        }
    </style>
    @include('home.homecss')
</head>

<body>
    <!-- header section start -->
    <div class="header_section">
        @include('home.header')

    </div>
    <!-- header section end -->
    <div class="div_deg">
        <h3 class="title_deg">add post</h3>
        <form action="{{url('user_post')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="field_deg">
                <label>Title</label>
                <input type="text" name="title">
            </div>
            <div class="field_deg">
                <label>Description</label>
                <textarea name="description"></textarea>
            </div>
            <div class="field_deg">
                <label>Add Image</label>
                <input type="file" name="image">
            </div>
            <div class="field_deg">

                <input type="submit" class="btn btn-secondary" value="Add Post">
            </div>
        </form>
    </div>




    <!-- footer section start -->
    @include('home.footer')
    <!-- footer section end -->
    <!-- copyright section start -->
    <div class="copyright_section">
        <div class="container">
            <p class="copyright_text">2020 All Rights Reserved. Design by <a href="https://html.design">Free html Templates</a></p>
        </div>
    </div>
    <!-- copyright section end -->
    <!-- Javascript files-->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.0.0.min.js"></script>
    <script src="js/plugin.js"></script>
    <!-- sidebar -->
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/custom.js"></script>
    <!-- javascript -->
    <script src="js/owl.carousel.js"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
</body>

</html>