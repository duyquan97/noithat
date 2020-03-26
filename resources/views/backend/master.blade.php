<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from thevectorlab.net/flatlab/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 14 Aug 2015 03:42:50 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">

    <base href="{{asset('/backend')}}/">
    <link rel="shortcut icon" href="img/favicon.html">

    <title>FlatLab - Flat & Responsive Bootstrap Admin Template</title>

    @include('backend.template.css')
    @yield('css')
    <style>
        .clearfix { clear: both; }

        input[type="checkbox"]#on-off {
            position: absolute;
            clip: rect(0, 0, 0, 0);
        }

        #on-off + label {
            position: relative;
            display: block;
            width: 5rem !important;
            background-color: rgba(255,0,0,0.75);
            color: white;
            border-radius: 1.25rem;
        }
        #on-off + label:hover { cursor: pointer; }

        #on-off + label > .text {
            display: block;
            padding: 0px 5px;
            float: left;
            text-align: center;
            line-height: 2.65rem;
            font-size: 0.85rem;
            text-transform: uppercase;
            box-sizing: border-box;
        }

        #on-off + label:before {
            position: absolute;
            top: 4px;
            left: 4px;
            display: block;
            height: calc(2.5rem - 8px);
            width: calc(2.5rem - 8px);
            background-color: white;
            content: '';
            transition: all 0.15s ease-in;
            border-radius: 1.25rem;
        }

        #on-off:checked + label { background-color: #78CD51 }
        #on-off:checked + label:before { left: calc(50% + 4px); }

        #on-off + label,
        #on-off + label > .text {
            height: 2.5rem;
            width: 2.5rem;
        }
        footer{
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;

        }

    </style>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>

    <![endif]-->
  </head>
  <body>
  <section id="container" >
        @include('backend.template.header')
      <!--main content start-->
            @yield('main')
      <!--main content end-->
        @include('backend.template.footer')
  </section>
  @include('backend.template.js')
  @yield('js')
  <script>
      $(document).ready(function () {
      });
  </script>

  </body>

<!-- Mirrored from thevectorlab.net/flatlab/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 14 Aug 2015 03:43:32 GMT -->
</html>
