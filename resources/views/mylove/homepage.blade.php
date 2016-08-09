@extends('app')

@section('style')
	<style>
        
        /* jssor slider bullet navigator skin 13 css */
        /*
        .jssorb13 div           (normal)
        .jssorb13 div:hover     (normal mouseover)
        .jssorb13 .av           (active)
        .jssorb13 .av:hover     (active mouseover)
        .jssorb13 .dn           (mousedown)
        */
        .jssorb13 {
            position: absolute;
        }
        .jssorb13 div, .jssorb13 div:hover, .jssorb13 .av {
            position: absolute;
            /* size of bullet elment */
            width: 21px;
            height: 21px;
            background: url('img/b13.png') no-repeat;
            overflow: hidden;
            cursor: pointer;
        }
        .jssorb13 div { background-position: -5px -5px; }
        .jssorb13 div:hover, .jssorb13 .av:hover { background-position: -35px -5px; }
        .jssorb13 .av { background-position: -65px -5px; }
        .jssorb13 .dn, .jssorb13 .dn:hover { background-position: -95px -5px; }


        /* jssor slider arrow navigator skin 02 css */
        /*
        .jssora02l                  (normal)
        .jssora02r                  (normal)
        .jssora02l:hover            (normal mouseover)
        .jssora02r:hover            (normal mouseover)
        .jssora02l.jssora02ldn      (mousedown)
        .jssora02r.jssora02rdn      (mousedown)
        */
        .jssora02l, .jssora02r {
            display: block;
            position: absolute;
            /* size of arrow element */
            width: 55px;
            height: 55px;
            cursor: pointer;
            background: url('img/a02.png') no-repeat;
            overflow: hidden;
        }
        .jssora02l { background-position: -3px -33px; }
        .jssora02r { background-position: -63px -33px; }
        .jssora02l:hover { background-position: -123px -33px; }
        .jssora02r:hover { background-position: -183px -33px; }
        .jssora02l.jssora02ldn { background-position: -3px -33px; }
        .jssora02r.jssora02rdn { background-position: -63px -33px; }
    </style>
@endsection

@section('content')
<div class="container">
	<div id="slider">
        @include('mylove/slider',['photos'=>$photos])
    </div>

    <!-- Add photo Form -->
    <div id="addphoto" class="col-lg-6 col-lg-offset-3" style="padding-top:100px; padding-bottom: 100px">
        <p>Add a new photo:</p>
        <form id="addForm" role="form" method="POST" action="{{url('/mylove/photo/add')}}">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <div class="form-group">
            <label for="url">Photo's URL:</label>
            <input type="url" class="form-control" id="p_url" name="url" required>
          </div>
          <div class="form-group">
            <label for="caption">Caption:</label>
            <input type="text" class="form-control" id="p_caption" name="caption">
          </div>
          <div class="form-group">
            <label for="style">Caption style:</label>
            <select name="style">
              <option value="0">0</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
            </select>
          </div>
          <button type="submit" class="btn btn-default">Submit</button>
        </form>
    </div>
</div>
@endsection

@section('script')
	<script type="text/javascript" src="js/jssor.slider.mini.js"></script>    
    <!-- use jssor.slider.debug.js instead for debug -->
    <script type="text/javascript" src="js/mylove.app.js"></script> 
@endsection