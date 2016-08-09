<?php 
$styleArr = [
'0' => "position: absolute; top: 500px; left: 30px; width: 350px; height: 30px; background-color: rgba(235,81,0,0.5); font-size: 20px; color: #ffffff; line-height: 30px; text-align: center;",
'1' => "position: absolute; top: -50px; left: 125px; width: 350px; height: 30px; background-color: rgba(235,81,0,0.5); font-size: 20px; color: #ffffff; line-height: 30px; text-align: center;",
'2' => "position: absolute; top: 30px; left: -380px; width: 350px; height: 30px; background-color: rgba(235,81,0,0.5); font-size: 20px; color: #ffffff; line-height: 30px; text-align: center;",
'3' => "position: absolute; top: 30px; left: 30px; width: 350px; height: 30px; background-color: rgba(235,81,0,0.5); font-size: 20px; color: #ffffff; line-height: 30px; text-align: center;",
'4' => "position: absolute; top: 30px; left: 30px; width: 350px; height: 30px; background-color: rgba(235,81,0,0.6); font-size: 20px; color: #ffffff; line-height: 30px; text-align: center;",
'5' => "position: absolute; top: 30px; left: 600px; width: 350px; height: 30px; background-color: rgba(235,81,0,0.5); font-size: 20px; color: #ffffff; line-height: 30px; text-align: center;",
'6' => "position: absolute; top: 30px; left: 30px; width: 350px; height: 30px; background-color: rgba(235,81,0,0.5); font-size: 20px; color: #ffffff; line-height: 30px; text-align: center;",
'7' => "position: absolute; top: -50px; left: 30px; width: 350px; height: 30px; background-color: rgba(235,81,0,0.5); font-size: 20px; color: #ffffff; line-height: 30px; text-align: center;",
]
?>

    <div id="jssor_1" style="background-color: black; position: relative; margin: 0 auto; top: 0px; left: 0px; width: 640px; height: 480px; overflow: hidden; visibility: hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
            <div style="position:absolute;display:block;background:url('img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
        </div>
        <div id="photoList" data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 640px; height: 480px; overflow: hidden;">
            
            <!-- https://docs.google.com/uc?id=FILE-ID -->
            @foreach($photos as $photo)

            <div data-p="112.50" style="display: none;">
                <img data-u="image" src="{{$photo->url}}" />
                @if($photo->caption != "")
                <div data-u="caption" data-t="{{($photo->style=='')? 0 : $photo->style}}" style="{{$styleArr[$photo->style] or $styleArr['0']}}">{{$photo->caption}}</div>
                @endif
            </div>

            @endforeach
        
        </div>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb13" style="bottom:16px;right:16px;" data-autocenter="1">
            <div data-u="prototype" style="width:21px;height:21px;"></div>
        </div>
        <!-- Arrow Navigator -->
        <span data-u="arrowleft" class="jssora02l" style="top:0px;left:8px;width:55px;height:55px;" data-autocenter="2"></span>
        <span data-u="arrowright" class="jssora02r" style="top:0px;right:8px;width:55px;height:55px;" data-autocenter="2"></span>
    </div>