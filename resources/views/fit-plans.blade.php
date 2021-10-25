<?php

 $base_url =  URL::to('/');
?>
@include("inc/header");
<meta name="csrf-token" content="{{ csrf_token() }}" />
    <!-- main -->
    <main>
        <!-- Fit Plans Sec -->
        <section class="featured-plan-sec fitplan-sec">
            <div class="container">
                <div class="row aic mb-5">
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 mb-sm-0 mb-4">
                        <h2 class="f-36 fb secondary mb-0">Fit Plans</h2>
                    </div>
                    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8">
                        <form id="filter_data" action ="javascript:void(0)" method="POST">
                        <div class="d-flex justify-content-sm-end justify-content-start">
                            <div class="search-filter-sort-block search_box_s  d-inline-flex aic">
                                <span class="icon pl-3 pr-3 fii-search"></span>
                                <input type="text" placeholder="Search" name="search" class="form-control border-0 new_input_s" data-token = "{{csrf_token()}}" id="search_fitplans">
                                <!-- <span class="text f-18 fr secondary ttu">Search</span> -->
                            </div>

                            <div class="search-filter-sort-block filterbtn d-inline-flex aic">
                                <span class="icon fii-filter"><sup></sup></span>
                                <span class="text f-18 fr secondary ttu">Filters</span>
                            </div>

                            <div class="search-filter-sort-block filter_box d-inline-flex aic">
                                <span class="icon fii-sort"></span>
                                <span class="text f-18  fr secondary ttu">Sort</span>
                                <div class="filter_list fr_sort_list">
                                    <ul>
                                        <li>Select Option</li>
                                        <li class="active">Active Fit Plans <span class="fii-tick"></span></li>
                                        <li>Past Fit Plans <span class="fii-tick"></span></li>
                                        <li>Canceled Fit Plans <span class="fii-tick"></span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </form>
                    </div>
                </div>

                <!-- Filter Options Block -->
                <div class="filter-option-block">
                    <div class="d-flex flex-wrap">
                        <!-- Training Type Options -->
                        <form id="filter_form" action ="javascript:void(0)" method="Post" data-token = "{{csrf_token()}}">
                        <div class="column">
                            <h6 class="title f-18 fb ttu">Training Type</h6>
                            <div class="two-col">
                                <ul>
                                    <li>
                                        <div class="custom-control custom-checkbox custom-checkbox-white">
                                            <input type="checkbox" value="Weight Lifting" data-type="type" class="custom-control-input checkedval" id="trainingtype01" name="trainingtype">
                                            <label class="custom-control-label" for="trainingtype01">Weight Lifting</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="custom-control custom-checkbox custom-checkbox-white">
                                            <input type="checkbox" value="HIIT Training" data-type="type" class="custom-control-input checkedval" id="trainingtype03" name="trainingtype" >
                                            <label class="custom-control-label" for="trainingtype03">HIIT Training</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="custom-control custom-checkbox custom-checkbox-white">
                                            <input type="checkbox" value="Body Weight" data-type="type" class="custom-control-input checkedval" id="trainingtype05" name="trainingtype">
                                            <label class="custom-control-label" for="trainingtype05">Body Weight</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="custom-control custom-checkbox custom-checkbox-white">
                                            <input type="checkbox" class="custom-control-input checkedval" data-type="type" value="Strength Training" id="trainingtype07" name="trainingtype">
                                            <label class="custom-control-label" for="trainingtype07">Strength Training</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="custom-control custom-checkbox custom-checkbox-white">
                                            <input type="checkbox" class="custom-control-input checkedval" data-type="type" value="Functional Training" id="trainingtype09" name="trainingtype">
                                            <label class="custom-control-label" for="trainingtype09">Functional Training</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="custom-control custom-checkbox custom-checkbox-white">
                                            <input type="checkbox" class="custom-control-input checkedval" data-type="type" value="Mobility Training " id="trainingtype11" name="trainingtype">
                                            <label class="custom-control-label" for="trainingtype11">Mobility Training</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="custom-control custom-checkbox custom-checkbox-white">
                                            <input type="checkbox" class="custom-control-input checkedval" data-type="type" value="Sports Training" id="trainingtype02" name="trainingtype">
                                            <label class="custom-control-label" for="trainingtype02">Sports Training </label>
                                        </div>
                                    </li>
                                    
                                    <li>
                                        <div class="custom-control custom-checkbox custom-checkbox-white">
                                            <input type="checkbox" class="custom-control-input checkedval" data-type="type" value="Dynamic Training" id="trainingtype04" name="trainingtype">
                                            <label class="custom-control-label" for="trainingtype04">Dynamic Training</label>
                                        </div>
                                    </li>
                                    
                                    <li>
                                        <div class="custom-control custom-checkbox custom-checkbox-white">
                                            <input type="checkbox" class="custom-control-input checkedval" data-type="type" value="Follow Along" id="trainingtype06" name="trainingtype">
                                            <label class="custom-control-label" for="trainingtype06">Follow Along</label>
                                        </div>
                                    </li>
                                    
                                    <li>
                                        <div class="custom-control custom-checkbox custom-checkbox-white">
                                            <input type="checkbox" class="custom-control-input checkedval" data-type="type" value="Body Building" id="trainingtype08" name="trainingtype">
                                            <label class="custom-control-label" for="trainingtype08">Body Building</label>
                                        </div>
                                    </li>
                                    
                                    <li>
                                        <div class="custom-control custom-checkbox custom-checkbox-white">
                                            <input type="checkbox" class="custom-control-input checkedval" data-type="type" value="Prenatal Training" id="trainingtype10" name="trainingtype">
                                            <label class="custom-control-label" for="trainingtype10">Prenatal Training </label>
                                        </div>
                                    </li>
                                    
                                    <li>
                                        <div class="custom-control custom-checkbox custom-checkbox-white">
                                            <input type="checkbox" class="custom-control-input checkedval" data-type="type" value="Hands-Free" id="trainingtype12" name="trainingtype">
                                            <label class="custom-control-label" for="trainingtype12">Hands-Free</label>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            
                        </div>

                        <!-- gender Options -->
                        <div class="column">
                            <h6 class="title f-18 fb ttu">gender</h6>
                            <ul>
                                <li>
                                    <div class="custom-control custom-checkbox custom-checkbox-white">
                                        <input type="checkbox" class="custom-control-input checkedval" data-type="gender" value="Male" id="gender01" name="gender">
                                        <label class="custom-control-label" for="gender01">Male</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="custom-control custom-checkbox custom-checkbox-white">
                                        <input type="checkbox" class="custom-control-input checkedval" data-type="gender" value="Female" id="gender02" name="gender">
                                        <label class="custom-control-label" for="gender02">Female</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="custom-control custom-checkbox custom-checkbox-white">
                                        <input type="checkbox" class="custom-control-input checkedval" data-type="gender" value="Unisex" id="gender03" name="gender">
                                        <label class="custom-control-label" for="gender03">Unisex</label>
                                    </div>
                                </li>
                            </ul>
                            
                        </div>

                        <!-- Fitness level Options -->
                        <div class="column">
                            <h6 class="title f-18 fb ttu">Fitness level</h6>
                            <ul>
                                <li>
                                    <div class="custom-control custom-checkbox custom-checkbox-white">
                                        <input type="checkbox" class="custom-control-input checkedval" value="Beginner" data-type="level" id="fitnesslevel01" name="fitnesslevel">
                                        <label class="custom-control-label" for="fitnesslevel01">Beginner</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="custom-control custom-checkbox custom-checkbox-white">
                                        <input type="checkbox" class="custom-control-input checkedval" value="Intermediate" data-type="level" id="fitnesslevel02" value="Intermediate" name="fitnesslevel" >
                                        <label class="custom-control-label" for="fitnesslevel02">Intermediate</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="custom-control custom-checkbox custom-checkbox-white">
                                        <input type="checkbox" class="custom-control-input checkedval" value="Advanced" data-type="level" id="fitnesslevel03" value="Advanced" name="fitnesslevel">
                                        <label class="custom-control-label" for="fitnesslevel03">Advanced </label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                       
                        <!-- Workout frequency Options -->
                        <div class="column">
                            <h6 class="title f-18 fb ttu">Workout frequency</h6>
                            <ul>
                           
                            @if($workoutfrequency)
                                @foreach($workoutfrequency as $key=> $value)
                                          <li>
                                    <div class="custom-control custom-checkbox custom-checkbox-white">
                                        <input type="checkbox" class="custom-control-input checkedval" data-type="Workoutfrequency" id="workoutfrequency0{{$key}}" value="{{$value->frequency}}" name="workoutfrequency " value="{{$value->id}}">
                                        <label class="custom-control-label" for="workoutfrequency0{{$key}}">{{$value->frequency}}</label>
                                    </div>
                                </li>
                                @endforeach
                            @endif
                            </ul>
                      

                        </div>

                        <!-- Location Options -->
                        <div class="column">
                            <h6 class="title f-18 fb ttu">Location</h6>
                            <ul>
                                <li>
                                    <div class="custom-control custom-checkbox custom-checkbox-white">
                                        <input type="checkbox" class="custom-control-input checkedval" data-type="location" value="Home" id="location01" name="location">
                                        <label class="custom-control-label" for="location01">Home</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="custom-control custom-checkbox custom-checkbox-white">
                                        <input type="checkbox" class="custom-control-input checkedval" data-type="location" value="Gym" id="location02" name="location" >
                                        <label class="custom-control-label" for="location02">Gym</label>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <!-- Plan length Options -->
                        <div class="column">
                            <h6 class="title f-18 fb ttu">Plan length</h6>
                            <ul>
                                <li>
                                    <div class="custom-control custom-checkbox custom-checkbox-white">
                                        <input type="checkbox" class="custom-control-input checkedval" data-type="Planlength" value="0-2" id="planlength01" name="planlength">
                                        <label class="custom-control-label" for="planlength01">2 Week</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="custom-control custom-checkbox custom-checkbox-white">
                                        <input type="checkbox" class="custom-control-input checkedval" data-type="Planlength" value="2-4" id="planlength02" name="planlength" >
                                        <label class="custom-control-label" for="planlength02">2-4 Week</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="custom-control custom-checkbox custom-checkbox-white">
                                        <input type="checkbox" class="custom-control-input checkedval" data-type="Planlength" value="4-6" id="planlength03" name="planlength">
                                        <label class="custom-control-label" for="planlength03">4-6 Week</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="custom-control custom-checkbox custom-checkbox-white">
                                        <input type="checkbox" class="custom-control-input checkedval" data-type="Planlength" value="6-8" id="planlength04" name="planlength">
                                        <label class="custom-control-label" for="planlength04">6-8 Week</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="custom-control custom-checkbox custom-checkbox-white">
                                        <input type="checkbox" class="custom-control-input checkedval" data-type="Planlength" value="2-8" id="planlength05" name="planlength">
                                        <label class="custom-control-label" for="planlength05">8 Week</label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </form>
                    </div>
                </div>
                

                <div class="row mb-4" id="workoutplansfitnesss">
                    @if(($workoutplansfitness))
                        @foreach($workoutplansfitness as $val)
                        
                         <div class="col-lg-4 col-md-6 col-sm-6 featured-plan-col">
                                <div class="image-block">
                                    <img src="{{asset('assets/images/featured-plan-img01.jpg')}}" alt="">
                                    <div class="name-block d-flex aic">
                                        <span class="name-img"><img src="{{asset('assets/images/featured-plan-user-img01.jpg')}}" alt=""></span>
                                        <span class="name f-24 fr white">{{$val->fitness_trainers_name}}</span>
                                    </div>
                                    <span class="icon-bookmark fii-bookmark-d"><span class="path1"></span><span class="path2"></span></span>
                                    <a href="{{url('fit-plans-detail')}}/{{$val->fitness_trainers_id}}/{{$val->id}}" class="arrow-box d-flex aic jcc"><span class="fii-arrow-right"></span></a>
                                </div>

                                <div class="content">
                                    <h4 class="title f-26 fb seconday"><a href="{{url('fit-plans-detail')}}/{{$val->fitness_trainers_id}}/{{$val->id}}">{{$val->name}}</a><span class="toottips">{{ucfirst($val->level)}}</span></h4>
                                    <div class="d-flex justify-content-between">
                                        <div class="col px-0 text-left">
                                            <h6 class="f-16 fb subhead ttu">Workout frequency</h6>
                                            <p class="f-24 fb black-100 mb-0">{{$val->frequency}}x/Week</p>
                                        </div>
                                        <div class="col px-0 text-right">
                                            <h6 class="f-16 fb subhead ttu">Workout type</h6>
                                            <p class="f-24 fb black-100 mb-0">{{ucfirst($val->type)}}</p>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        @endforeach
                    @endif
                </div>
<div class="row mb-4">
    <div id="workoutplansfitness">
                        </div>
</div>
                <a href="#" class="see-alltext f-22 fb primary ttu" id="workoutplansfitnesscount">See all ({{count($workoutplansfitness)}}) <span class="arrowdown fii-angle-arrow-down"></span></a>
            </div>
        </section>
    </main>
    @include("inc/footer");
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript">
        
        $(function(){
            $(".checkedval").on("click",function(){
            host_url = "/development/fitness/";
                  var arr = [];
                          
                  $.each($("input[type='checkbox']:checked"), function(){
                      arr.push($(this).val() +'&&'+$(this).data("type"));
                  });
                  token = $("#filter_form").data("token");
                 
                  var formData= new FormData(jQuery('#filter_form')[0]);
                  // formData.append("_token",$('meta[name="csrf-token"]').attr('content'));
                 formData.append("_token",$('meta[name="csrf-token"]').attr('content'));
                 formData.append("filters",arr.join(","));
                jQuery.ajax({
                   url: host_url+"filter_fitplans",
                    type: "post",
                    cache: false,
                    data: formData,
                    processData: false,
                    contentType: false,
                    success:function(data) { 
                         var obj = JSON.parse(data);
                        if(obj.status==true)
                        {
                            $("#workoutplansfitnesss").empty();
                            if(obj.workoutplansfitness!='')
                            {

                            
                            result =obj.workoutplansfitness;
 $("#workoutplansfitnesscount").text("See all (" +result.length+")");
                            $("#workoutplansfitnesscount").text("See all (" +result.length+")");
                            for(index in result)
                            {
                                 div = '';
                                  div+=' <div class="col-lg-4 col-md-6 col-sm-6 featured-plan-col">';
                                  div+='<div class="image-block">';
                                  div+='<img src="{{asset('assets/images/featured-plan-img01.jpg')}}" alt="">';
                                  div+=' <div class="name-block d-flex aic">';
                                div+='<span class="name-img"><img src="{{asset('assets/images/featured-plan-user-img01.jpg')}}" alt=""></span>';
                                div+='<span class="name f-24 fr white">'+result[index].fitness_trainers_name+'</span>';
                                 div+=' </div>';
                                 div+=' <span class="icon-bookmark fii-bookmark-d"><span class="path1"></span><span class="path2"></span></span>';
                                div+='<a href="fit-plans-detail.html" class="arrow-box d-flex aic jcc"><span class="fii-arrow-right"></span></a>';
                                  div+='</div>';
                                   div+='<div class="content">';
                                    div+='<h4 class="title f-26 fb seconday"><a href="fit-plans-detail.html">'+result[index].name+'</a><span';
                                    div+='class="toottips">{{ucfirst($val->level)}}</span></h4>';
                                    div+='<div class="d-flex justify-content-between">';
                                     div+='   <div class="col px-0 text-left">';
                                     div+='       <h6 class="f-16 fb subhead ttu">Workout frequency</h6>';
                                      div+='      <p class="f-24 fb black-100 mb-0">'+result[index].frequency+'x/Week</p>';
                                                div+=' </div>';
                                             div+='    <div class="col px-0 text-right">';
                                                 div+='    <h6 class="f-16 fb subhead ttu">Workout type</h6>';
                                                  div+='   <p class="f-24 fb black-100 mb-0">'+result[index].type+'</p>';
                                            div+='     </div>';
                                        div+='     </div>';
                                        div+=' </div>';
                                  div+="</div>";
                                  $("#workoutplansfitnesss").append(div);
                                
                            }
                        }
                        }
                    }//successs close     
                });//ajax close
            });
        });
        $(document).ready(function(){
            host_url = "/development/fitness/";
            jQuery.ajax({
            url: host_url+"getdata_fit_plans",
            type: "get",
            cache: false,
            data: '',
            processData: false,
            contentType: false,
            
            success:function(data) { 
            var obj = JSON.parse(data);
                if(obj.status==true)
                {
                    result =obj.workoutplansfitness;
               
                    for(index in result)
                    {
                         div = '';
                          div+=' <div class="col-lg-4 col-md-6 col-sm-6 featured-plan-col">';
                          div+='<div class="image-block">';
                          div+='<img src="{{asset('assets/images/featured-plan-img01.jpg')}}" alt="">';
                          div+=' <div class="name-block d-flex aic">';
                        div+='<span class="name-img"><img src="{{asset('assets/images/featured-plan-user-img01.jpg')}}" alt=""></span>';
                        div+='<span class="name f-24 fr white">'+result[index].fitness_trainers_name+'</span>';
                         div+=' </div>';
                         div+=' <span class="icon-bookmark fii-bookmark-d"><span class="path1"></span><span class="path2"></span></span>';
                        div+='<a href="fit-plans-detail.html" class="arrow-box d-flex aic jcc"><span class="fii-arrow-right"></span></a>';
                          div+='</div>';
                           div+='<div class="content">';
                            div+='<h4 class="title f-26 fb seconday"><a href="#">'+result[index].name+'</a>';
                            div+='<span  class="toottips">'+result[index].level+'</span></h4>';
                            div+='<div class="d-flex justify-content-between">';
                             div+='   <div class="col px-0 text-left">';
                             div+='       <h6 class="f-16 fb subhead ttu">Workout frequency</h6>';
                              div+='      <p class="f-24 fb black-100 mb-0">'+result[index].frequency+'x/Week</p>';
                                        div+=' </div>';
                                     div+='    <div class="col px-0 text-right">';
                                         div+='    <h6 class="f-16 fb subhead ttu">Workout type</h6>';
                                          div+='   <p class="f-24 fb black-100 mb-0">'+result[index].type+'</p>';
                                    div+='     </div>';
                                div+='     </div>';
                                div+=' </div>';
                          div+="</div>";
                        //  $("#workoutplansfitnesss2").append(div);
                        
                    }
                }
            }
        });

            $("#search_fitplans").on("keyup",function(e){

                e.preventDefault();
                search_fitplans = $(this).val();
                tokens = $(this).data("token");
            //    token = $("#token").val();
               var formData= new FormData(jQuery('#filter_data')[0]);
                 formData.append("_token",$('meta[name="csrf-token"]').attr('content'));
                 formData.append("search_fitplans",search_fitplans);

               //   var token = $("meta[name='csrf-token']").attr("content");
                //console.log( "token="+tokens);
                 jQuery.ajax({
            url: host_url+"search_fitplans",
            type: "post",
            cache: false,
                  data: formData,
        
            processData: false,
            contentType: false,
            
            success:function(response) { 

            var obj = JSON.parse(response);
                if(obj.status==true)
                {
                    $("#workoutplansfitnesss").empty();
                    result =obj.workoutplansfitness;

                    $("#workoutplansfitnesscount").text("See all (" +result.length+")");
                    for(index in result)
                    {
                         div = '';
                          div+=' <div class="col-lg-4 col-md-6 col-sm-6 featured-plan-col">';
                          div+='<div class="image-block">';
                          div+='<img src="{{asset('assets/images/featured-plan-img01.jpg')}}" alt="">';
                          div+=' <div class="name-block d-flex aic">';
                        div+='<span class="name-img"><img src="{{asset('assets/images/featured-plan-user-img01.jpg')}}" alt=""></span>';
                        div+='<span class="name f-24 fr white">'+result[index].fitness_trainers_name+'</span>';
                         div+=' </div>';
                         div+=' <span class="icon-bookmark fii-bookmark-d"><span class="path1"></span><span class="path2"></span></span>';
                        div+='<a href="fit-plans-detail.html" class="arrow-box d-flex aic jcc"><span class="fii-arrow-right"></span></a>';
                          div+='</div>';
                           div+='<div class="content">';
                            div+='<h4 class="title f-26 fb seconday"><a href="fit-plans-detail.html">'+result[index].name+'</a><span';
                            div+='class="toottips">{{ucfirst($val->level)}}</span></h4>';
                            div+='<div class="d-flex justify-content-between">';
                             div+='   <div class="col px-0 text-left">';
                             div+='       <h6 class="f-16 fb subhead ttu">Workout frequency</h6>';
                              div+='      <p class="f-24 fb black-100 mb-0">'+result[index].frequency+'x/Week</p>';
                                        div+=' </div>';
                                     div+='    <div class="col px-0 text-right">';
                                         div+='    <h6 class="f-16 fb subhead ttu">Workout type</h6>';
                                          div+='   <p class="f-24 fb black-100 mb-0">'+result[index].type+'</p>';
                                    div+='     </div>';
                                div+='     </div>';
                                div+=' </div>';
                          div+="</div>";
                          $("#workoutplansfitnesss").append(div);
                        
                    }
                }
            }
        });
            });
        });
    </script>