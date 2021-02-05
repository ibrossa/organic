
<!-- Banner ____________________________________ -->
<div id="banner">
    <div class="rev_slider_wrapper">
        <!-- START REVOLUTION SLIDER 5.0 auto mode -->
        <div id="main_slider" class="rev_slider" data-version="5.0">
            <ul>
                @foreach($slaiders as $slaider)
                <li data-index="rs-18" data-transition="zoomin" data-slotamount="7"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000"  data-thumb="images/home/slide-2.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Successful Careers" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="images/home/slide-2.jpg"  alt=""  data-bgposition="top center" class="rev-slidebg" data-no-retina>
                    <!-- LAYERS -->
                    <div class="tp-caption tp-resizeme"
                         data-x="['center','center','center','center']" data-hoffset="['80','80','80','80']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['-160','-160','-160','-160']"
                         data-width="none"
                         data-height="none"
                         data-transform_idle="o:1;"
                         data-transform_in="z:0;rX:0deg;rY:0;rZ:0;sX:1.5;sY:1.5;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;"
                         data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                         data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                         data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                         data-start="1000"
                         data-splitout="none"
                         data-responsive_offset="on"
                         data-elementdelay="0.05"
                         style="z-index: 5;">
                        <img src="{{$slaider->image}}" alt="">
                    </div>
                    <div class="tp-caption tp-resizeme banner-caption-box"
                         data-x="right" data-hoffset="0"
                         data-y="top" data-voffset="260"
                         data-transform_idle="o:1;"
                         data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;"
                         data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                         data-mask_in="x:[100%];y:0;s:inherit;e:inherit;"
                         data-splitin="none"
                         data-splitout="none"
                         data-start="1000">
                        <div class="banner-caption-h1">{{$slaider->title}}</div>
                        <div class="banner-caption-p"><p>{{$slaider->description}}</p></div>
                        <a href="{{route('store')}}" class="thm-btn contuct-us">shop now</a>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
    </div><!-- END REVOLUTION SLIDER -->
</div> <!-- End of #banner -->
