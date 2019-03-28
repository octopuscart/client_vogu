


<div class="col-xs-3  customization_items_title " style="padding: 0px 5px;">  

    <div class="customization_items">
        <ul class="nav nav-tabs tabs-left"> 
            
           
            <li class="{{$index == 0?'active':''}}" ng-repeat="k in keys" ng-if="k.type == 'main'" >
                <a href="#custome_m{{$index}}" data-toggle="tab" aria-expanded="false" ng-click="changeViews(k.viewtype)">
                    <div class="media" style="cursor:pointer"> 
                        <div class="media-left media-middle mobile_view_element_tab">
                            <p class="elementItemImage" style="margin: 0px;background: url(<?php echo base_url(); ?>assets/images/{{selecteElements[screencustom.fabric][k.title].image}})"></p>
                        </div>
                        
                    </div>
                </a>
            </li>

        </ul>
    </div>
</div>


<!--<div class="col-md-12 col-xs-12  customization_items_title " style="padding: 0px 5px;">  

    <div class="customization_items1 custom_block_slide3 customitems" style="">

        <div class=" items" ng-repeat="k in keys" ng-if="k.type == 'main'" >
            <a href="#custome{{$index}}" data-toggle="tab"  ng-click="changeViews(k.viewtype)">

                <div class="mobile_block {{$index == 0?'active':''}}">
                    <div class="thumbnail" style="    margin-bottom: 0;">
                        <center>
                            <img src="<?php echo base_url(); ?>assets/images/{{selecteElements[screencustom.fabric][k.title].image}}" style="height: 50px;">
                        </center>
                    </div>
<div class="customization_box_element " style="background: url(<?php echo base_url(); ?>assets/images/{{selecteElements[screencustom.fabric][k.title].image}});    height: 60px;" > </div>
                    <div class='customization_title_hr'>
                        {{k.title}} 
                    </div>
                </div>

            </a>
        </div>



    </div>
</div>-->
