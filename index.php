<?php include 'header.php';?>
    <div class="main-content">
        <div class="top-banner">
            <div class="container ">
                <div class="row">
                    <div class="section-fullwidth col-12 col-md-12 col-sm-12 ">
                        <div class="row">
                            <div class="col-12 col-md-12 col-sm-12 ">
                                <div class="column-content "><strong class="btext1">Find your dream house!</strong><strong class="btext2">We are offering the best Real Estate Deals</strong></div>
                            </div>
                            <div class="col-12 col-md-12 col-sm-12">
                                <div class="icons-lists">
                                    <ul>
                                        <li> <i class="fa fa-map-marker"> </i> We sell a property every 45 minutes</li>
                                        <li><i class="fa fa-check"> </i> We abide by the strictest codes of practice</li>
                                        <li><i class="fa fa-file"></i> 11,300 buyers registered each month</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-sm-12 main-search">
                    <ul class="nav nav-tabs">
                        <li class="nav-item"> <a class="nav-link active" data-toggle="tab" data-target="#demo" href="#">Search Best Home</a></li>
                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" data-target="#demo1" href="#">Advance</a></li>
                    </ul>
					
                    <div class="tab-content">
						<div class="field-holder search-popup-holder">
							<a href="#" class="search-popup-btn" data-toggle="modal" data-target="#mysearchModal">What's this</a>
							<!-- Modal -->
							<div class="modal fade" id="mysearchModal" tabindex="-1" role="dialog" aria-labelledby="mysearchModalLabel">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
										<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
										<h4 class="modal-title" id="mysearchModalLabel">What is Keyword search?</h4>
										</div>
										<div class="modal-body">
										<p>Keyword search allows you to find properties that include specific words e.g. garage.You can also search for exact phrases by using quotation marks e.g. "double garage", or to exclude a term you can prefix it with a minus sign e.g. -studio. </p>
										</div>
									</div>
								</div>
							</div>
						</div>
                        <div class="tab-pane container active" id="demo"> 
							<form>
								<div class="field-holder search-input">
									<label>
										<i class="fa fa-search"></i>
										<input type="text" placeholder="What are you looking for?" class="input-field" name="search_title">  
									</label>
								</div>	
								<div class="field-holder select-dropdown property-type checkbox"> 
									<ul>
										<li>
											<input type="radio" checked="checked" onchange="" id="search_form_property_type1" name="property_type" value="for-sale">
											<label for="search_form_property_type1">For Sale</label>
										</li>
										<li>
											<input type="radio" onchange="" id="search_form_property_type2" name="property_type" value="to-rent">                                
											<label for="search_form_property_type2">To Rent</label>
										</li>
									</ul> 
								</div>
								<div class="field-holder search-input">
									<label>
										<i class="fa fa-map-marker"></i>
										<input type="text" placeholder="Enter Location" class="input-field" name="location_title">  
									</label>
								</div>
								<div class="property-category-fields field-holder select-dropdown has-icon">
									<label>
										<i class="fa fa-home"></i>
										<select class="chosen-select-no-single" name="property_category" >
											<option selected="selected" value="">Categories</option>
											<option value="bungalow">Bungalow</option>
											<option value="commercial">Commercial</option>
											<option value="flats">Flats</option>
											<option value="houses">Houses</option>
											<option value="other">Other</option>
										</select> 
									</label>
								</div>
								<div class="field-holder search-btn">
									<div class="input-button-loader">
										<input type="submit" class="bgcolor" value="Search"> 
									</div>
								</div>
							</form>						
						</div>
                        <div id="demo1" class="tab-pane container">
							<form>
								<div class="field-holder search-input">
									<label>
										<i class="fa fa-search"></i>
										<input type="text" placeholder="What are you looking for?" class="input-field" name="search_title">  
									</label>
								</div>	
								<div class="field-holder select-dropdown property-type checkbox"> 
									<ul>
										<li>
											<input type="radio" checked="checked" onchange="" id="adv_sale" name="adv_property_type" value="for-sale">
											<label for="adv_sale">For Sale</label>
										</li>
										<li>
											<input type="radio" onchange="" id="adv_rent" name="adv_property_type" value="to-rent">                                
											<label for="adv_rent">To Rent</label>
										</li>
									</ul> 
								</div>
								<div class="field-holder search-input">
									<label>
										<i class="fa fa-map-marker"></i>
										<input type="text" placeholder="Enter Location" class="input-field" name="location_title">  
									</label>
								</div>
								<div class="property-category-fields field-holder select-dropdown has-icon">
									<label>
										<i class="fa fa-home"></i>
										<select class="chosen-select-no-single" name="property_category" >
											<option selected="selected" value="">Categories</option>
											<option value="bungalow">Bungalow</option>
											<option value="commercial">Commercial</option>
											<option value="flats">Flats</option>
											<option value="houses">Houses</option>
											<option value="other">Other</option>
										</select> 
									</label>
								</div>
								<div class="field-holder search-btn">
									<div class="input-button-loader">
										<input type="submit" class="bgcolor" value="Search"> 
									</div>
								</div>
								
								<div class="search-advanced-fields">
									<div class="field-holder select-dropdown price-type rent col-12 col-md-4 col-sm-4">
										<div class="select-categories">
											<ul>
												<li>
													<select class="chosen-select-no-single" name="price_type" >
														<option selected="selected" value="">All</option>
														<option value="variant_week">Per Week</option>
														<option value="variant_month">Per Calendar Month</option>
													</select>													
												</li>
											</ul>
										</div>
									</div>
									<div class="field-holder select-dropdown  col-12 col-md-4 col-sm-4">
										<div class="wp-rem-min-max-price">
											<div class="select-categories"> 
												<ul>
													<li>
														<select class="chosen-select-no-single" name="price_minimum" style="display: none;"><option selected="selected" value="">Min Price</option><option value="10000">10000</option><option value="30000">30000</option><option value="50000">50000</option><option value="70000">70000</option><option value="90000">90000</option><option value="110000">110000</option><option value="130000">130000</option><option value="150000">150000</option><option value="170000">170000</option><option value="190000">190000</option><option value="210000">210000</option><option value="230000">230000</option><option value="250000">250000</option><option value="270000">270000</option><option value="290000">290000</option><option value="310000">310000</option><option value="330000">330000</option><option value="350000">350000</option><option value="370000">370000</option><option value="390000">390000</option><option value="410000">410000</option><option value="430000">430000</option><option value="450000">450000</option><option value="470000">470000</option><option value="490000">490000</option><option value="510000">510000</option><option value="530000">530000</option><option value="550000">550000</option><option value="570000">570000</option><option value="590000">590000</option><option value="610000">610000</option><option value="630000">630000</option><option value="650000">650000</option><option value="670000">670000</option><option value="690000">690000</option><option value="710000">710000</option><option value="730000">730000</option><option value="750000">750000</option><option value="770000">770000</option><option value="790000">790000</option><option value="810000">810000</option><option value="830000">830000</option><option value="850000">850000</option><option value="870000">870000</option><option value="890000">890000</option><option value="910000">910000</option><option value="930000">930000</option><option value="950000">950000</option><option value="970000">970000</option><option value="990000">990000</option></select>
													</li>
												</ul>
											</div>
											<div class="select-categories">
												<ul>
													<li>
														<select class="chosen-select-no-single" name="price_maximum" style="display: none;"><option selected="selected" value="">Max Price</option><option value="10000">10000</option><option value="30000">30000</option><option value="50000">50000</option><option value="70000">70000</option><option value="90000">90000</option><option value="110000">110000</option><option value="130000">130000</option><option value="150000">150000</option><option value="170000">170000</option><option value="190000">190000</option><option value="210000">210000</option><option value="230000">230000</option><option value="250000">250000</option><option value="270000">270000</option><option value="290000">290000</option><option value="310000">310000</option><option value="330000">330000</option><option value="350000">350000</option><option value="370000">370000</option><option value="390000">390000</option><option value="410000">410000</option><option value="430000">430000</option><option value="450000">450000</option><option value="470000">470000</option><option value="490000">490000</option><option value="510000">510000</option><option value="530000">530000</option><option value="550000">550000</option><option value="570000">570000</option><option value="590000">590000</option><option value="610000">610000</option><option value="630000">630000</option><option value="650000">650000</option><option value="670000">670000</option><option value="690000">690000</option><option value="710000">710000</option><option value="730000">730000</option><option value="750000">750000</option><option value="770000">770000</option><option value="790000">790000</option><option value="810000">810000</option><option value="830000">830000</option><option value="850000">850000</option><option value="870000">870000</option><option value="890000">890000</option><option value="910000">910000</option><option value="930000">930000</option><option value="950000">950000</option><option value="970000">970000</option><option value="990000">990000</option></select>
													</li>
												</ul>
											</div>
										</div>										
									</div>
									<input type="hidden" id="number-hidden1-min-beds" name="min-beds" value="1">
									<div class="field-holder search-input select-categories has-icon col-12 col-md-4 col-sm-4">
										<ul class="minimum-loading-list">
											<li>
												<div class="spinner-btn input-group spinner"> <span><i class="fa fa-bed"></i></span>
													<input type="text" class="num-input1min-beds form-control" id="wp_rem_wp_rem_min-beds" name="wp_rem_wp_rem_min-beds" value="1"> <span class="list-text">Bedrooms</span>
													<div class="input-group-btn-vertical">
														<button class="btn-decrement1min-beds caret-btn btn-default " type="button"><i class="fa fa-minus-circle"></i></button>
														<button class="btn-increment1min-beds caret-btn btn-default" type="button"><i class="fa fa-plus-circle"></i></button>
													</div>
												</div>
											</li>
										</ul>
										<script type="text/javascript">
											jQuery(document).ready(function($) {
												$(".num-input1min-beds").keypress(function(e) {
													if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
														return false;
													}
												});
												$('.spinner .btn-increment1min-beds').on('click', function() {
													var field_value = $('.spinner .num-input1min-beds').val();
													field_value = field_value || 0;
													$('.spinner .num-input1min-beds').val(parseInt(field_value, 10) + 1);
													var selected_num = parseInt(field_value, 10) + 1;
													$('#number-hidden1-min-beds').val(selected_num);
												});
												$('.spinner .btn-decrement1min-beds').on('click', function() {
													var field_value = $('.spinner .num-input1min-beds').val();
													field_value = field_value || 0;
													var val = parseInt(field_value, 10);
													if (val < 1) {}
													var minus_val = val - 1;
													if (minus_val < 0) {
														minus_val = 0;
													}
													$('.spinner .num-input1min-beds').val(minus_val);
													var selected_num = minus_val;
													$('#number-hidden1-min-beds').val(selected_num);
												});
												$(".num-input1min-beds").on('change keydown', function() {
													var field_value = $('.spinner .num-input1min-beds').val();
													field_value = field_value || 0;
													var selected_num = field_value;
													$('#number-hidden1-min-beds').val(selected_num);
												});
											});
										</script>
									</div>
									<input type="hidden" id="number-hidden1-min-bath" name="min-bath" value="1">
									<div class="field-holder search-input select-categories has-icon col-12 col-md-4 col-sm-4">
										<ul class="minimum-loading-list">
											<li>
												<div class="spinner-btn input-group spinner"> <span><i class="fa fa-bath"></i></span>
													<input type="text" class="num-input1min-bath form-control" id="wp_rem_wp_rem_min-bath" name="wp_rem_wp_rem_min-bath" value="1"> <span class="list-text">Bathrooms</span>
													<div class="input-group-btn-vertical">
														<button class="btn-decrement1min-bath caret-btn btn-default " type="button"><i class="fa fa-minus-circle"></i></button>
														<button class="btn-increment1min-bath caret-btn btn-default" type="button"><i class="fa fa-plus-circle"></i></button>
													</div>
												</div>
											</li>
										</ul>
										<script type="text/javascript">
											jQuery(document).ready(function($) {
												$(".num-input1min-bath").keypress(function(e) {
													if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
														return false;
													}
												});
												$('.spinner .btn-increment1min-bath').on('click', function() {
													var field_value = $('.spinner .num-input1min-bath').val();
													field_value = field_value || 0;
													$('.spinner .num-input1min-bath').val(parseInt(field_value, 10) + 1);
													var selected_num = parseInt(field_value, 10) + 1;
													$('#number-hidden1-min-bath').val(selected_num);
												});
												$('.spinner .btn-decrement1min-bath').on('click', function() {
													var field_value = $('.spinner .num-input1min-bath').val();
													field_value = field_value || 0;
													var val = parseInt(field_value, 10);
													if (val < 1) {}
													var minus_val = val - 1;
													if (minus_val < 0) {
														minus_val = 0;
													}
													$('.spinner .num-input1min-bath').val(minus_val);
													var selected_num = minus_val;
													$('#number-hidden1-min-bath').val(selected_num);
												});
												$(".num-input1min-bath").on('change keydown', function() {
													var field_value = $('.spinner .num-input1min-bath').val();
													field_value = field_value || 0;
													var selected_num = field_value;
													$('#number-hidden1-min-bath').val(selected_num);
												});
											});
										</script>
									</div>
									<input type="hidden" id="number-hidden1-min-garage" name="min-garage" value="1">
									<div class="field-holder search-input select-categories has-icon col-12 col-md-4 col-sm-4">
										<ul class="minimum-loading-list">
											<li>
												<div class="spinner-btn input-group spinner"> <span><i class="fa fa-car"></i></span>
													<input type="text" class="num-input1min-garage form-control" id="wp_rem_wp_rem_min-garage" name="wp_rem_wp_rem_min-garage" value="1"> <span class="list-text">Garage</span>
													<div class="input-group-btn-vertical">
														<button class="btn-decrement1min-garage caret-btn btn-default " type="button"><i class="fa fa-minus-circle"></i></button>
														<button class="btn-increment1min-garage caret-btn btn-default" type="button"><i class="fa fa-plus-circle"></i></button>
													</div>
												</div>
											</li>
										</ul>
										<script type="text/javascript">
											jQuery(document).ready(function($) {
												$(".num-input1min-garage").keypress(function(e) {
													if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
														return false;
													}
												});
												$('.spinner .btn-increment1min-garage').on('click', function() {
													var field_value = $('.spinner .num-input1min-garage').val();
													field_value = field_value || 0;
													$('.spinner .num-input1min-garage').val(parseInt(field_value, 10) + 1);
													var selected_num = parseInt(field_value, 10) + 1;
													$('#number-hidden1-min-garage').val(selected_num);
												});
												$('.spinner .btn-decrement1min-garage').on('click', function() {
													var field_value = $('.spinner .num-input1min-garage').val();
													field_value = field_value || 0;
													var val = parseInt(field_value, 10);
													if (val < 1) {}
													var minus_val = val - 1;
													if (minus_val < 0) {
														minus_val = 0;
													}
													$('.spinner .num-input1min-garage').val(minus_val);
													var selected_num = minus_val;
													$('#number-hidden1-min-garage').val(selected_num);
												});
												$(".num-input1min-garage").on('change keydown', function() {
													var field_value = $('.spinner .num-input1min-garage').val();
													field_value = field_value || 0;
													var selected_num = field_value;
													$('#number-hidden1-min-garage').val(selected_num);
												});
											});
										</script>
									</div>
									
									<div class="field-holder field-range sale col-12 col-md-4 col-sm-4">
										<input type="hidden" id="range-hidden-area-ft" class="area-ft" name="area-ft" value="1000,50000">                            
										<div class="price-per-person">
											<span class="rang-text">SqFt&nbsp;1000 &nbsp; - &nbsp; 50000</span>
											<div class="slider slider-horizontal"></div><input type="text" id="area" data-value="1000,50000" value="1000,50000">  
										</div>
										<script type="text/javascript">
											if (jQuery("#area").length > 0) {
												jQuery("#area").slider({
													step : 1000,
													min: 1000,
													max: 50000,
													value: [ 1000,50000],
												});
												jQuery("#area").on("slideStop", function () {
													var rang_slider_val = jQuery("#area").val();
													jQuery("#range-hidden-area-ft").val(rang_slider_val);    
												});
												
											}
											/* $('.slider').on('mouseenter','.slider-track,.slider-handle',function(){
												$('.tooltip').css('opacity','1');
											});
											$('.slider').on('mouseleave','.slider-track,.slider-handle',function(){
												$('.tooltip').css('opacity','0');
											}); */
										</script> 										
									</div>
									<div class="field-holder select-dropdown has-icon sale col-12 col-md-4 col-sm-4">
										<label>
											<i class="fa fa-calendar-plus-o "></i>
											<select class="chosen-select-no-single" id="tenure" name="tenure" >
												<option selected="selected" value="">Tenure</option>
												<option value="free-hold">Free hold</option>
												<option value="lease-hold">Lease Hold</option>
												<option value="share-of-freehold">Share of freehold</option>
											</select>
										</label>
									</div>
									
									<div class="field-holder select-dropdown has-icon rent col-12 col-md-4 col-sm-4">
										<label><i class="fa fa-star"></i>
											<select class="chosen-select-no-single" id="property-furnished" name="property-furnished" >
												<option selected="selected" value="">Property Furnished</option>
												<option value="furnished">Furnished</option>
												<option value="unfurnished">Unfurnished</option>
												<option value="optional">Optional</option>
											</select>
											
										</label>
									</div>
									<div class="field-holder select-dropdown has-icon rent col-12 col-md-4 col-sm-4">
										<label><i class="fa fa-copy"></i>
											<select class="chosen-select-no-single" id="tenants-type" name="tenants-type" >
												<option selected="selected" value="">Tenants Type</option>
												<option value="students">Tenants : Students</option>
												<option value="pets">Tenants : Pets</option>
												<option value="dss">Tenants : DSS</option>
												<option value="smokers">Tenants : Smokers</option>
											</select>
											
										</label>
									</div>
									<div class="cs-datepicker field-datepicker field-holder search-input rent col-12 col-md-4 col-sm-4">
										<label id="Deadline" class="cs-calendar-from"> <i class="fa fa-calendar"></i>
											<input type="text" placeholder="From Date Available" class="dtfld" name="fromdate-available "> 
										</label>
									</div>
									<div class="cs-datepicker field-datepicker field-holder search-input rent col-12 col-md-4 col-sm-4"> 
										<label id="Deadline " class="cs-calendar-to "> <i class="fa fa-calendar"></i> 
											<input type="text" placeholder="To Date Available " class="dtfld" name="todate-available"> 
										</label>
									</div>
									<script type="text/javascript">
										var date = new Date();			
										date.setDate(date.getDate());
										$('.dtfld').datepicker({
											keyboardNavigation: false,
											forceParse: false,
											calendarWeeks: false,											
											format: 'dd-mm-yyyy',	
											//step: 5,
											autoclose: true
										}); 
									</script>
									<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 features-list"> <strong class="advance-trigger">Other Features</strong>
										<div class="clearfix"></div>
										<div class="features-field-expand">
											<ul id="search-features-list" class="search-features-list">
												<li class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
													<div class="checkbox">
														<input type="checkbox" class="search-feature" id="check-1" value="Garden">
														<label for="check-1">Garden (20)</label>
													</div>
												</li>
												<li class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
													<div class="checkbox">
														<input type="checkbox" class="search-feature" id="check-2" value="Parking/Garage">
														<label for="check-2">Parking/Garage (20)</label>
													</div>
												</li>
												<li class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
													<div class="checkbox">
														<input type="checkbox" class="search-feature" id="check-3" value="Balcony/terrace">
														<label for="check-3">Balcony/terrace (19)</label>
													</div>
												</li>
												<li class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
													<div class="checkbox">
														<input type="checkbox" class="search-feature" id="check-4" value="Porter/security">
														<label for="check-4">Porter/security (20)</label>
													</div>
												</li>
												<li class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
													<div class="checkbox">
														<input type="checkbox" class="search-feature" id="check-5" value="Fireplace">
														<label for="check-5">Fireplace (0)</label>
													</div>
												</li>
												<li class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
													<div class="checkbox">
														<input type="checkbox" class="search-feature" id="check-6" value="Rural/secluded">
														<label for="check-6">Rural/secluded (20)</label>
													</div>
												</li>
												<li class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
													<div class="checkbox">
														<input type="checkbox" class="search-feature" id="check-7" value="Air Conditioning">
														<label for="check-7">Air Conditioning (20)</label>
													</div>
												</li>
												<li class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
													<div class="checkbox">
														<input type="checkbox" class="search-feature" id="check-8" value="Lawn">
														<label for="check-8">Lawn (20)</label>
													</div>
												</li>
												<li class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
													<div class="checkbox">
														<input type="checkbox" class="search-feature" id="check-9" value="Swimming Pool">
														<label for="check-9">Swimming Pool (1)</label>
													</div>
												</li>
												<li class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
													<div class="checkbox">
														<input type="checkbox" class="search-feature" id="check-10" value="Barbeque">
														<label for="check-10">Barbeque (0)</label>
													</div>
												</li>
												<li class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
													<div class="checkbox">
														<input type="checkbox" class="search-feature" id="check-11" value="Microwave">
														<label for="check-11">Microwave (20)</label>
													</div>
												</li>
												<li class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
													<div class="checkbox">
														<input type="checkbox" class="search-feature" id="check-12" value="TV Cable">
														<label for="check-12">TV Cable (20)</label>
													</div>
												</li>
												<li class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
													<div class="checkbox">
														<input type="checkbox" class="search-feature" id="check-13" value="Washer">
														<label for="check-13">Washer (19)</label>
													</div>
												</li>
												<li class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
													<div class="checkbox">
														<input type="checkbox" class="search-feature" id="check-14" value="Outdoor Shower">
														<label for="check-14">Outdoor Shower (20)</label>
													</div>
												</li>
												<li class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
													<div class="checkbox">
														<input type="checkbox" class="search-feature" id="check-15" value="Gym">
														<label for="check-15">Gym (20)</label>
													</div>
												</li>
												<li class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
													<div class="checkbox">
														<input type="checkbox" class="search-feature" id="check-16" value="Window Coverings">
														<label for="check-16">Window Coverings (20)</label>
													</div>
												</li>
												<li class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
													<div class="checkbox">
														<input type="checkbox" class="search-feature" id="check-17" value="Dryer">
														<label for="check-17">Dryer (19)</label>
													</div>
												</li>
												<li class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
													<div class="checkbox">
														<input type="checkbox" class="search-feature" id="check-18" value="Laundry">
														<label for="check-18">Laundry (20)</label>
													</div>
												</li>
												<li class="col-lg-2 col-md-2 col-sm-12 col-xs-12" style="display:none;">
													<input type="hidden" id="search-property-features" name="features" value="">
												</li>
												<script type="text/javascript">
													jQuery(document).ready(function() {
														'use strict'
														var $checkboxes = jQuery("input[type=checkbox].search-feature");
														var features = $checkboxes.filter(':checked').map(function() {
															return this.value;
														}).get().join(',');
														jQuery('#search-property-features').val(features);
													});
													var $checkboxes = jQuery("input[type=checkbox].search-feature");
													$checkboxes.on('change', function() {
														var features = $checkboxes.filter(':checked').map(function() {
															return this.value;
														}).get().join(',');
														jQuery('#search-property-features').val(features);
													});
												</script>
											</ul>
										</div>
									</div>
									<script type="text/javascript">
										chosen_selectionbox();
									</script>
								</div>
								
								
								
							</form>	
						</div>
                    </div>
                </div>
            </div>
        </div>
        <section class="feature-prop">
            <div class="container">
                <div class="col-12 col-md-12 col-sm-12">
                    <div id="compare-sidebar-panel" class="fixed-sidebar-panel right chosen-compare-list">
                        <div class="sidebar-panel-content">
                            <div class="sidebar-panel-header"> <strong class="sidebar-panel-title"> Compare Properties								<span class="sidebar-panel-btn-close pull-right"> <i class="icon-cross"></i> </span> </strong></div>
                            <div class="sidebar-panel-body">
                                <div class="sidebar-properties-list">
                                    <ul></ul>
                                    <div class="sidebar-btn-holder"> <a href="javascript:void(0);" class="bgcolor sidebar-property-btn clear-compare-list">Reset</a> <a href="" class="sidebar-property-btn text-color border-color">Compare</a></div>
                                    <div class="compare-response" style="display:none;"></div>
                                </div>
                                <button class="bgcolor sidebar-panel-btn" style="display:none"><i class="icon-keyboard_arrow_left"></i></button>
                            </div>
                        </div>
                    </div>
                    <h2>Featured Properties</h2>
                    <ul class="nav nav-tabs">
                        <li class="nav-item active"> <a class="nav-link active" data-toggle="tab" data-target="#fsale" href="#">FEATURED FOR SALE</a></li>
                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" data-target="#frent" href="#">FEATURED FOR RENT</a></li>
                    </ul> <a href="" class="show-more-property">Show More Property</a>
                    <div class="tab-content real-estate-property">
                        <div class="tab-pane in active" id="fsale">
                            <div id="property-tab-content">
                                <div class="row">
                                    <div class="portfolio grid-fading animated col-lg-4 col-md-4 col-sm-6 col-12">
                                        <div class="property-grid v1 ">
                                            <div class="img-holder image-loaded">
                                                <figure>
                                                    <a href=""> <img  class="img-grid" src="images/property-image1.jpg" alt=""> </a>
                                                    <figcaption>
                                                        <div class="caption-inner">
                                                            <ul class="rem-property-options">
                                                                <li class="property-note-opt">
                                                                    <div class="option-holder">
                                                                        <div class="notes-btn">
                                                                            <a id="property-note-6890062" href="javascript:void(0);" class="property-notes dev-prop-notes-login"> <i class="fa fa-book"></i>
                                                                                <div class="option-content"> <span>Property Notes</span></div>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="property-compare-opt">
                                                                    <div class="option-holder">
                                                                        <div class="compare-properties-5910 compare-property ">
                                                                            <input type="checkbox"  data-id="5910" data-random="591058057" name="list" value="check-listn" id="check-list591058057">
                                                                            <label for="check-list591058057"><i class="fa fa-exchange"></i><span class="option-content"><span>Compare</span></span>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="property-like-opt">
                                                                    <div class="option-holder">
                                                                        <div class="like-btn">
                                                                            <a href="javascript:void(0);" class="favourite"> <i class="fa fa-heart-o"></i>
                                                                                <div class="option-content"> <span>Save to Favourite</span></div>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="property-video-opt">
                                                                    <div class="option-holder">
                                                                        <a class="property-video-btn" > <i class="fa fa-video-camera"></i>
                                                                            <div class="option-content"><span>Video</span></div>
                                                                        </a>
                                                                    </div>
                                                                </li>
                                                                <li class="property-photo-opt">
                                                                    <div id="galley-img6890062" class="option-holder">
                                                                        <a href="javascript:void(0)" class="rem-pretty-photos" data-id="5910" data-rand="6890062"> <i class="fa fa-image"></i><span class="capture-count">5</span>
                                                                            <div class="option-content"> <span>Photos</span></div>
                                                                        </a>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                            </div>
                                            <div class="text-holder"> <span class="property-price"> $21,500<span class="prop-price-type">asking-price</span> </span>
                                                <div class="post-title">
                                                    <h4 ><a href="">New Superior Quality House For Sale</a></h4></div>
                                                <ul class="property-location">
                                                    <li><i class="fa fa-map-marker"></i><span>London, United Kingdom</span></li>
                                                </ul>
                                                <ul class="post-category-list" itemprop="category">
                                                    <li> <i class="fa fa-bed"></i> 4&nbsp;Bedrooms</li>
                                                    <li> <i class="fa fa-bath"></i> 2&nbsp;Bathrooms</li>
                                                    <li> <i class="fa fa-car"></i> 2&nbsp;Garage</li>
                                                    <li> <i class="fa fa-area-chart"></i> 11050&nbsp;SqFt</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="portfolio grid-fading animated col-lg-4 col-md-4 col-sm-6 col-12">
                                        <div class="property-grid v1 " >
                                            <div class="img-holder image-loaded">
                                                <figure>
                                                    <a href=""> <img  class="img-grid" src="images/property-image2.jpg" alt=""> </a>
                                                    <figcaption>
                                                        <div class="caption-inner">
                                                            <ul class="rem-property-options">
                                                                <li class="property-note-opt">
                                                                    <div class="option-holder">
                                                                        <div class="notes-btn">
                                                                            <a id="property-note-4910306" href="javascript:void(0);" class="property-notes dev-prop-notes-login"> <i class="fa fa-book"></i>
                                                                                <div class="option-content"> <span>Property Notes</span></div>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="property-compare-opt">
                                                                    <div class="option-holder">
                                                                        <div class="compare-properties-5913 compare-property ">
                                                                            <input type="checkbox"  data-id="5913" data-random="591376763" name="list" value="check-listn" id="check-list591376763">
                                                                            <label for="check-list591376763"><i class="fa fa-exchange"></i><span class="option-content"><span>Compare</span></span>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="property-like-opt">
                                                                    <div class="option-holder">
                                                                        <div class="like-btn">
                                                                            <a href="javascript:void(0);" class="favourite"> <i class="fa fa-heart-o"></i>
                                                                                <div class="option-content"> <span>Save to Favourite</span></div>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="property-video-opt">
                                                                    <div class="option-holder">
                                                                        <a class="property-video-btn" > <i class="fa fa-video-camera"></i>
                                                                            <div class="option-content"><span>Video</span></div>
                                                                        </a>
                                                                    </div>
                                                                </li>
                                                                <li class="property-photo-opt">
                                                                    <div id="galley-img4910306" class="option-holder">
                                                                        <a href="javascript:void(0)" class="rem-pretty-photos" data-id="5913" data-rand="4910306"> <i class="fa fa-image"></i><span class="capture-count">4</span>
                                                                            <div class="option-content"> <span>Photos</span></div>
                                                                        </a>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                            </div>
                                            <div class="text-holder"> <span class="property-price"> $30,000<span class="prop-price-type">offers-in-excess-of</span> </span>
                                                <div class="post-title">
                                                    <h4 ><a href="">New Semi Detached House For Sale</a></h4></div>
                                                <ul class="property-location">
                                                    <li><i class="fa fa-map-marker"></i><span>London, United Kingdom</span></li>
                                                </ul>
                                                <ul class="post-category-list" itemprop="category">
                                                    <li> <i class="fa fa-bed"></i> 1&nbsp;Bedrooms</li>
                                                    <li> <i class="fa fa-bath"></i> 1&nbsp;Bathrooms</li>
                                                    <li> <i class="fa fa-car"></i> 1&nbsp;Garage</li>
                                                    <li> <i class="fa fa-area-chart"></i> 1000&nbsp;SqFt</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="portfolio grid-fading animated col-lg-4 col-md-4 col-sm-6 col-12">
                                        <div class="property-grid v1 " >
                                            <div class="img-holder image-loaded">
                                                <figure>
                                                    <a href=""> <img  class="img-grid" src="images/property-image3.jpg" alt=""> </a>
                                                    <figcaption>
                                                        <div class="caption-inner">
                                                            <ul class="rem-property-options">
                                                                <li class="property-note-opt">
                                                                    <div class="option-holder">
                                                                        <div class="notes-btn">
                                                                            <a id="property-note-3326745" href="javascript:void(0);" class="property-notes dev-prop-notes-login"> <i class="fa fa-book"></i>
                                                                                <div class="option-content"> <span>Property Notes</span></div>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="property-compare-opt">
                                                                    <div class="option-holder">
                                                                        <div class="compare-properties-5915 compare-property ">
                                                                            <input type="checkbox"  name="list" value="check-listn" id="check-list">
                                                                            <label for="check-list"><i class="fa fa-exchange"></i><span class="option-content"><span>Compare</span></span>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="property-like-opt">
                                                                    <div class="option-holder">
                                                                        <div class="like-btn">
                                                                            <a href="javascript:void(0);" class="favourite"> <i class="fa fa-heart-o"></i>
                                                                                <div class="option-content"> <span>Save to Favourite</span></div>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="property-video-opt">
                                                                    <div class="option-holder">
                                                                        <a class="property-video-btn"> <i class="fa fa-video-camera"></i>
                                                                            <div class="option-content"><span>Video</span></div>
                                                                        </a>
                                                                    </div>
                                                                </li>
                                                                <li class="property-photo-opt">
                                                                    <div id="galley-img3326745" class="option-holder">
                                                                        <a href="javascript:void(0)" class="rem-pretty-photos" > <i class="fa fa-image"></i><span class="capture-count">5</span>
                                                                            <div class="option-content"> <span>Photos</span></div>
                                                                        </a>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                            </div>
                                            <div class="text-holder"> <span class="property-price"> $25,650<span class="prop-price-type">fixed-price</span> </span>
                                                <div class="post-title">
                                                    <h4 ><a href="">Headland Semi Detached House For Sale</a></h4></div>
                                                <ul class="property-location">
                                                    <li><i class="fa fa-map-marker"></i><span>London, United Kingdom</span></li>
                                                </ul>
                                                <ul class="post-category-list" itemprop="category">
                                                    <li> <i class="fa fa-bed"></i> 3&nbsp;Bedrooms</li>
                                                    <li> <i class="fa fa-bath"></i> 3&nbsp;Bathrooms</li>
                                                    <li> <i class="fa fa-car"></i> 2&nbsp;Garage</li>
                                                    <li> <i class="fa fa-area-chart"></i> 1000&nbsp;SqFt</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="portfolio grid-fading animated col-lg-4 col-md-4 col-sm-6 col-12">
                                        <div class="property-grid v1 " >
                                            <div class="img-holder image-loaded">
                                                <figure>
                                                    <a href=""> <img  class="img-grid" src="images/property-image4.jpg" alt=""> </a>
                                                    <figcaption>
                                                        <div class="caption-inner">
                                                            <ul class="rem-property-options">
                                                                <li class="property-note-opt">
                                                                    <div class="option-holder">
                                                                        <div class="notes-btn">
                                                                            <a id="property-note" href="javascript:void(0);" class="property-notes dev-prop-notes-login"> <i class="fa fa-book"></i>
                                                                                <div class="option-content"> <span>Property Notes</span></div>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="property-compare-opt">
                                                                    <div class="option-holder">
                                                                        <div class="compare-properties compare-property ">
                                                                            <input type="checkbox"  name="list" value="check-listn" id="check-list">
                                                                            <label for="check-list"><i class="fa fa-exchange"></i><span class="option-content"><span>Compare</span></span>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="property-like-opt">
                                                                    <div class="option-holder">
                                                                        <div class="like-btn">
                                                                            <a href="javascript:void(0);" class="favourite"> <i class="fa fa-heart-o"></i>
                                                                                <div class="option-content"> <span>Save to Favourite</span></div>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="property-video-opt">
                                                                    <div class="option-holder">
                                                                        <a class="property-video-btn" > <i class="fa fa-video-camera"></i>
                                                                            <div class="option-content"><span>Video</span></div>
                                                                        </a>
                                                                    </div>
                                                                </li>
                                                                <li class="property-photo-opt">
                                                                    <div id="galley-img" class="option-holder">
                                                                        <a href="javascript:void(0)" class="rem-pretty-photos"> <i class="fa fa-image"></i><span class="capture-count">5</span>
                                                                            <div class="option-content"> <span>Photos</span></div>
                                                                        </a>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                            </div>
                                            <div class="text-holder"> <span class="property-price"> $45,000<span class="prop-price-type">offers-in-region-of</span> </span>
                                                <div class="post-title">
                                                    <h4 ><a href="">4 Bedroom New House For Sale</a></h4></div>
                                                <ul class="property-location">
                                                    <li><i class="fa fa-map-marker"></i><span>London, United Kingdom</span></li>
                                                </ul>
                                                <ul class="post-category-list" itemprop="category">
                                                    <li> <i class="fa fa-bed"></i> 5&nbsp;Bedrooms</li>
                                                    <li> <i class="fa fa-bath"></i> 3&nbsp;Bathrooms</li>
                                                    <li> <i class="fa fa-car"></i> 2&nbsp;Garage</li>
                                                    <li> <i class="fa fa-area-chart"></i> 1000&nbsp;SqFt</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="portfolio grid-fading animated col-lg-4 col-md-4 col-sm-6 col-12">
                                        <div class="property-grid v1 " >
                                            <div class="img-holder image-loaded">
                                                <figure>
                                                    <a href=""> <img  class="img-grid" src="images/property-image5.jpg" alt=""> </a>
                                                    <figcaption>
                                                        <div class="caption-inner">
                                                            <ul class="rem-property-options">
                                                                <li class="property-note-opt">
                                                                    <div class="option-holder">
                                                                        <div class="notes-btn">
                                                                            <a id="property-note-9294071" href="javascript:void(0);" class="property-notes dev-prop-notes-login"> <i class="fa fa-book"></i>
                                                                                <div class="option-content"> <span>Property Notes</span></div>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="property-compare-opt">
                                                                    <div class="option-holder">
                                                                        <div class="compare-properties compare-property ">
                                                                            <input type="checkbox"  name="list" value="check-listn" id="check-list">
                                                                            <label for="check-list"><i class="fa fa-exchange"></i><span class="option-content"><span>Compare</span></span>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="property-like-opt">
                                                                    <div class="option-holder">
                                                                        <div class="like-btn">
                                                                            <a href="javascript:void(0);" class="favourite"> <i class="fa fa-heart-o"></i>
                                                                                <div class="option-content"> <span>Save to Favourite</span></div>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="property-video-opt">
                                                                    <div class="option-holder">
                                                                        <a class="property-video-btn" > <i class="fa fa-video-camera"></i>
                                                                            <div class="option-content"><span>Video</span></div>
                                                                        </a>
                                                                    </div>
                                                                </li>
                                                                <li class="property-photo-opt">
                                                                    <div id="galley-img" class="option-holder">
                                                                        <a href="javascript:void(0)" class="rem-pretty-photos"> <i class="fa fa-image"></i><span class="capture-count">5</span>
                                                                            <div class="option-content"> <span>Photos</span></div>
                                                                        </a>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                            </div>
                                            <div class="text-holder"> <span class="property-price"> $45,100<span class="prop-price-type">offers-in-excess-of</span> </span>
                                                <div class="post-title">
                                                    <h4 ><a href="">Street Environment New For Sale</a></h4></div>
                                                <ul class="property-location">
                                                    <li><i class="fa fa-map-marker"></i><span>London, United Kingdom</span></li>
                                                </ul>
                                                <ul class="post-category-list" itemprop="category">
                                                    <li> <i class="fa fa-bed"></i> 4&nbsp;Bedrooms</li>
                                                    <li> <i class="fa fa-bath"></i> 4&nbsp;Bathrooms</li>
                                                    <li> <i class="fa fa-car"></i> 2&nbsp;Garage</li>
                                                    <li> <i class="fa fa-area-chart"></i> 1000&nbsp;SqFt</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="portfolio grid-fading animated col-lg-4 col-md-4 col-sm-6 col-12">
                                        <div class="property-grid v1 " >
                                            <div class="img-holder image-loaded">
                                                <figure>
                                                    <a href=""> <img  class="img-grid" src="images/property-image6.jpg" alt=""> </a>
                                                    <figcaption>
                                                        <div class="caption-inner">
                                                            <ul class="rem-property-options">
                                                                <li class="property-note-opt">
                                                                    <div class="option-holder">
                                                                        <div class="notes-btn">
                                                                            <a id="property-note" href="javascript:void(0);" class="property-notes dev-prop-notes-login"> <i class="fa fa-book"></i>
                                                                                <div class="option-content"> <span>Property Notes</span></div>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="property-compare-opt">
                                                                    <div class="option-holder">
                                                                        <div class="compare-properties compare-property ">
                                                                            <input type="checkbox"  name="list" value="check-listn" id="check-list">
                                                                            <label for="check-list"><i class="fa fa-exchange"></i><span class="option-content"><span>Compare</span></span>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="property-like-opt">
                                                                    <div class="option-holder">
                                                                        <div class="like-btn">
                                                                            <a href="javascript:void(0);" class="favourite"> <i class="fa fa-heart-o"></i>
                                                                                <div class="option-content"> <span>Save to Favourite</span></div>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="property-video-opt">
                                                                    <div class="option-holder">
                                                                        <a class="property-video-btn" > <i class="fa fa-video-camera"></i>
                                                                            <div class="option-content"><span>Video</span></div>
                                                                        </a>
                                                                    </div>
                                                                </li>
                                                                <li class="property-photo-opt">
                                                                    <div id="galley-img" class="option-holder">
                                                                        <a href="javascript:void(0)" class="rem-pretty-photos"> <i class="fa fa-image"></i><span class="capture-count">5</span>
                                                                            <div class="option-content"> <span>Photos</span></div>
                                                                        </a>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                            </div>
                                            <div class="text-holder"> <span class="property-price"> $28,000<span class="prop-price-type">guide-price</span> </span>
                                                <div class="post-title">
                                                    <h4 ><a href="">Ravenslea Road Maisonette For Sale</a></h4></div>
                                                <ul class="property-location">
                                                    <li><i class="fa fa-map-marker"></i><span>London, United Kingdom</span></li>
                                                </ul>
                                                <ul class="post-category-list" itemprop="category">
                                                    <li> <i class="fa fa-bed"></i> 4&nbsp;Bedrooms</li>
                                                    <li> <i class="fa fa-bath"></i> 2&nbsp;Bathrooms</li>
                                                    <li> <i class="fa fa-car"></i> 2&nbsp;Garage</li>
                                                    <li> <i class="fa fa-area-chart"></i> 1000&nbsp;SqFt</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane in " id="frent">
                            <div id="property-tab-content">
                                <div class="row">
                                    <div class="portfolio grid-fading animated col-lg-4 col-md-4 col-sm-6 col-12">
                                        <div class="property-grid v1 " >
                                            <div class="img-holder image-loaded">
                                                <figure>
                                                    <a href=""> <img  class="img-grid" src="images/property-image7.jpg" alt=""> </a>
                                                    <figcaption>
                                                        <div class="caption-inner">
                                                            <ul class="rem-property-options">
                                                                <li class="property-note-opt">
                                                                    <div class="option-holder">
                                                                        <div class="notes-btn">
                                                                            <a id="property-note" href="javascript:void(0);" class="property-notes dev-prop-notes-login"> <i class="fa fa-book"></i>
                                                                                <div class="option-content"> <span>Property Notes</span></div>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="property-compare-opt">
                                                                    <div class="option-holder">
                                                                        <div class="compare-properties compare-property ">
                                                                            <input type="checkbox"  name="list" value="check-listn" id="check-list">
                                                                            <label for="check-list"><i class="fa fa-exchange"></i><span class="option-content"><span>Compare</span></span>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="property-like-opt">
                                                                    <div class="option-holder">
                                                                        <div class="like-btn">
                                                                            <a href="javascript:void(0);" class="favourite"> <i class="fa fa-heart-o"></i>
                                                                                <div class="option-content"> <span>Save to Favourite</span></div>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="property-video-opt">
                                                                    <div class="option-holder">
                                                                        <a class="property-video-btn" > <i class="fa fa-video-camera"></i>
                                                                            <div class="option-content"><span>Video</span></div>
                                                                        </a>
                                                                    </div>
                                                                </li>
                                                                <li class="property-photo-opt">
                                                                    <div id="galley-img" class="option-holder">
                                                                        <a href="javascript:void(0)" class="rem-pretty-photos"> <i class="fa fa-image"></i><span class="capture-count">5</span>
                                                                            <div class="option-content"> <span>Photos</span></div>
                                                                        </a>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                            </div>
                                            <div class="text-holder"> <span class="property-price"> $1,100<span class="prop-price-type"> pcm<span class="guid-price"> ($254 pw)</span></span>
                                                </span>
                                                <div class="post-title">
                                                    <h4 ><a href="">Ground New Studio flats To Rent</a></h4></div>
                                                <ul class="property-location">
                                                    <li><i class="fa fa-map-marker"></i><span>London, United Kingdom</span></li>
                                                </ul>
                                                <ul class="post-category-list" itemprop="category">
                                                    <li> <i class="fa fa-bed"></i> 4&nbsp;Bedrooms</li>
                                                    <li> <i class="fa fa-bath"></i> 2&nbsp;Bathrooms</li>
                                                    <li> <i class="fa fa-car"></i> 1&nbsp;Garage</li>
                                                    <li> <i class="fa fa-copy"></i> <span>Tenants : Pets</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="portfolio grid-fading animated col-lg-4 col-md-4 col-sm-6 col-12">
                                        <div class="property-grid v1 " >
                                            <div class="img-holder image-loaded">
                                                <figure>
                                                    <a href=""> <img  class="img-grid" src="images/property-image8.jpg" alt=""> </a>
                                                    <figcaption>
                                                        <div class="caption-inner">
                                                            <ul class="rem-property-options">
                                                                <li class="property-note-opt">
                                                                    <div class="option-holder">
                                                                        <div class="notes-btn">
                                                                            <a id="property-note" href="javascript:void(0);" class="property-notes dev-prop-notes-login"> <i class="fa fa-book"></i>
                                                                                <div class="option-content"> <span>Property Notes</span></div>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="property-compare-opt">
                                                                    <div class="option-holder">
                                                                        <div class="compare-properties- compare-property ">
                                                                            <input type="checkbox"   name="list" value="check-listn" id="check-list">
                                                                            <label for="check-list"><i class="fa fa-exchange"></i><span class="option-content"><span>Compare</span></span>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="property-like-opt">
                                                                    <div class="option-holder">
                                                                        <div class="like-btn">
                                                                            <a href="javascript:void(0);" class="favourite"> <i class="fa fa-heart-o"></i>
                                                                                <div class="option-content"> <span>Save to Favourite</span></div>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="property-video-opt">
                                                                    <div class="option-holder">
                                                                        <a class="property-video-btn" > <i class="fa fa-video-camera"></i>
                                                                            <div class="option-content"><span>Video</span></div>
                                                                        </a>
                                                                    </div>
                                                                </li>
                                                                <li class="property-photo-opt">
                                                                    <div id="galley-img" class="option-holder">
                                                                        <a href="javascript:void(0)" class="rem-pretty-photos" > <i class="fa fa-image"></i><span class="capture-count">5</span>
                                                                            <div class="option-content"> <span>Photos</span></div>
                                                                        </a>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                            </div>
                                            <div class="text-holder"> <span class="property-price"> $867<span class="prop-price-type"> pcm<span class="guid-price"> ($200 pw)</span></span>
                                                </span>
                                                <div class="post-title">
                                                    <h4 ><a href="">Ravenslea Cafe London Road To Rent</a></h4></div>
                                                <ul class="property-location">
                                                    <li><i class="fa fa-map-marker"></i><span>London, United Kingdom</span></li>
                                                </ul>
                                                <ul class="post-category-list" itemprop="category">
                                                    <li> <i class="fa fa-bed"></i> 2&nbsp;Bedrooms</li>
                                                    <li> <i class="fa fa-bath"></i> 2&nbsp;Bathrooms</li>
                                                    <li> <i class="fa fa-car"></i> 2&nbsp;Garage</li>
                                                    <li> <i class="fa fa-copy"></i> <span>Tenants : Students</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="portfolio grid-fading animated col-lg-4 col-md-4 col-sm-6 col-12">
                                        <div class="property-grid v1 " >
                                            <div class="img-holder image-loaded">
                                                <figure>
                                                    <a href=""> <img  class="img-grid" src="images/property-image9.jpg" alt=""> </a>
                                                    <figcaption>
                                                        <div class="caption-inner">
                                                            <ul class="rem-property-options">
                                                                <li class="property-note-opt">
                                                                    <div class="option-holder">
                                                                        <div class="notes-btn">
                                                                            <a id="property-note" href="javascript:void(0);" class="property-notes dev-prop-notes-login"> <i class="fa fa-book"></i>
                                                                                <div class="option-content"> <span>Property Notes</span></div>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="property-compare-opt">
                                                                    <div class="option-holder">
                                                                        <div class="compare-properties compare-property ">
                                                                            <input type="checkbox"   name="list" value="check-listn" id="check-list">
                                                                            <label for="check-list"><i class="fa fa-exchange"></i><span class="option-content"><span>Compare</span></span>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="property-like-opt">
                                                                    <div class="option-holder">
                                                                        <div class="like-btn">
                                                                            <a href="javascript:void(0);" class="favourite"> <i class="fa fa-heart-o"></i>
                                                                                <div class="option-content"> <span>Save to Favourite</span></div>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="property-video-opt">
                                                                    <div class="option-holder">
                                                                        <a class="property-video-btn" > <i class="fa fa-video-camera"></i>
                                                                            <div class="option-content"><span>Video</span></div>
                                                                        </a>
                                                                    </div>
                                                                </li>
                                                                <li class="property-photo-opt">
                                                                    <div id="galley-img" class="option-holder">
                                                                        <a href="javascript:void(0)" class="rem-pretty-photos"> <i class="fa fa-image"></i><span class="capture-count">4</span>
                                                                            <div class="option-content"> <span>Photos</span></div>
                                                                        </a>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                            </div>
                                            <div class="text-holder"> <span class="property-price"> $12,133<span class="prop-price-type"> pcm<span class="guid-price"> ($2,800 pw)</span></span>
                                                </span>
                                                <div class="post-title">
                                                    <h4 ><a href="">Ravenslea Detached Bungalow To Rent</a></h4></div>
                                                <ul class="property-location">
                                                    <li><i class="fa fa-map-marker"></i><span>London, United Kingdom</span></li>
                                                </ul>
                                                <ul class="post-category-list" itemprop="category">
                                                    <li> <i class="fa fa-bed"></i> 5&nbsp;Bedrooms</li>
                                                    <li> <i class="fa fa-bath"></i> 2&nbsp;Bathrooms</li>
                                                    <li> <i class="fa fa-car"></i> 3&nbsp;Garage</li>
                                                    <li> <i class="fa fa-star"></i> <span>Optional</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="portfolio grid-fading animated col-lg-4 col-md-4 col-sm-6 col-12">
                                        <div class="property-grid v1 " >
                                            <div class="img-holder image-loaded">
                                                <figure>
                                                    <a href=""> <img  class="img-grid" src="images/property-image10.jpg" alt=""> </a>
                                                    <figcaption>
                                                        <div class="caption-inner">
                                                            <ul class="rem-property-options">
                                                                <li class="property-note-opt">
                                                                    <div class="option-holder">
                                                                        <div class="notes-btn">
                                                                            <a id="property-note" href="javascript:void(0);" class="property-notes dev-prop-notes-login"> <i class="fa fa-book"></i>
                                                                                <div class="option-content"> <span>Property Notes</span></div>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="property-compare-opt">
                                                                    <div class="option-holder">
                                                                        <div class="compare-properties compare-property ">
                                                                            <input type="checkbox"  name="list" value="check-listn" id="check-list">
                                                                            <label for="check-list"><i class="fa fa-exchange"></i><span class="option-content"><span>Compare</span></span>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="property-like-opt">
                                                                    <div class="option-holder">
                                                                        <div class="like-btn">
                                                                            <a href="javascript:void(0);" class="favourite"> <i class="fa fa-heart-o"></i>
                                                                                <div class="option-content"> <span>Save to Favourite</span></div>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="property-video-opt">
                                                                    <div class="option-holder">
                                                                        <a class="property-video-btn" > <i class="fa fa-video-camera"></i>
                                                                            <div class="option-content"><span>Video</span></div>
                                                                        </a>
                                                                    </div>
                                                                </li>
                                                                <li class="property-photo-opt">
                                                                    <div id="galley-img" class="option-holder">
                                                                        <a href="javascript:void(0)" class="rem-pretty-photos"> <i class="fa fa-image"></i><span class="capture-count">5</span>
                                                                            <div class="option-content"> <span>Photos</span></div>
                                                                        </a>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                            </div>
                                            <div class="text-holder"> <span class="property-price"> $14,000<span class="prop-price-type"> pcm<span class="guid-price"> ($3,231 pw)</span></span>
                                                </span>
                                                <div class="post-title">
                                                    <h4 ><a href="">Restaurant Properties Waterside To Rent</a></h4></div>
                                                <ul class="property-location">
                                                    <li><i class="fa fa-map-marker"></i><span>London, United Kingdom</span></li>
                                                </ul>
                                                <ul class="post-category-list" itemprop="category">
                                                    <li> <i class="fa fa-bed"></i> 2&nbsp;Bedrooms</li>
                                                    <li> <i class="fa fa-bath"></i> 2&nbsp;Bathrooms</li>
                                                    <li> <i class="fa fa-car"></i> 1&nbsp;Garage</li>
                                                    <li> <i class="fa fa-star"></i> <span>Furnished</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="portfolio grid-fading animated col-lg-4 col-md-4 col-sm-6 col-12">
                                        <div class="property-grid v1 " >
                                            <div class="img-holder image-loaded">
                                                <figure>
                                                    <a href=""> <img  class="img-grid" src="images/property-image11.jpg" alt=""> </a>
                                                    <figcaption>
                                                        <div class="caption-inner">
                                                            <ul class="rem-property-options">
                                                                <li class="property-note-opt">
                                                                    <div class="option-holder">
                                                                        <div class="notes-btn">
                                                                            <a id="property-note" href="javascript:void(0);" class="property-notes dev-prop-notes-login"> <i class="fa fa-book"></i>
                                                                                <div class="option-content"> <span>Property Notes</span></div>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="property-compare-opt">
                                                                    <div class="option-holder">
                                                                        <div class="compare-properties compare-property ">
                                                                            <input type="checkbox"  name="list" value="check-listn" id="check-list">
                                                                            <label for="check-list"><i class="fa fa-exchange"></i><span class="option-content"><span>Compare</span></span>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="property-like-opt">
                                                                    <div class="option-holder">
                                                                        <div class="like-btn">
                                                                            <a href="javascript:void(0);" class="favourite"> <i class="fa fa-heart-o"></i>
                                                                                <div class="option-content"> <span>Save to Favourite</span></div>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="property-video-opt">
                                                                    <div class="option-holder">
                                                                        <a class="property-video-btn" > <i class="fa fa-video-camera"></i>
                                                                            <div class="option-content"><span>Video</span></div>
                                                                        </a>
                                                                    </div>
                                                                </li>
                                                                <li class="property-photo-opt">
                                                                    <div id="galley-img" class="option-holder">
                                                                        <a href="javascript:void(0)" class="rem-pretty-photos"> <i class="fa fa-image"></i><span class="capture-count">5</span>
                                                                            <div class="option-content"> <span>Photos</span></div>
                                                                        </a>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                            </div>
                                            <div class="text-holder"> <span class="property-price"> $164,667<span class="prop-price-type"> pcm<span class="guid-price"> ($38,000 pw)</span></span>
                                                </span>
                                                <div class="post-title">
                                                    <h4 ><a href="">Commercial Albion Flats To Rent</a></h4></div>
                                                <ul class="property-location">
                                                    <li><i class="fa fa-map-marker"></i><span>London, United Kingdom</span></li>
                                                </ul>
                                                <ul class="post-category-list" itemprop="category">
                                                    <li> <i class="fa fa-bed"></i> 3&nbsp;Bedrooms</li>
                                                    <li> <i class="fa fa-bath"></i> 2&nbsp;Bathrooms</li>
                                                    <li> <i class="fa fa-car"></i> 1&nbsp;Garage</li>
                                                    <li> <i class="fa fa-star"></i> <span>Optional</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="portfolio grid-fading animated col-lg-4 col-md-4 col-sm-6 col-12">
                                        <div class="property-grid v1 " >
                                            <div class="img-holder image-loaded">
                                                <figure>
                                                    <a href=""> <img  class="img-grid" src="images/property-image12.jpg" alt=""> </a>
                                                    <figcaption>
                                                        <div class="property-sold-out"> <span>sold</span></div>
                                                        <div class="caption-inner">
                                                            <ul class="rem-property-options">
                                                                <li class="property-note-opt">
                                                                    <div class="option-holder">
                                                                        <div class="notes-btn">
                                                                            <a id="property-note" href="javascript:void(0);" class="property-notes dev-prop-notes-login"> <i class="fa fa-book"></i>
                                                                                <div class="option-content"> <span>Property Notes</span></div>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="property-compare-opt">
                                                                    <div class="option-holder">
                                                                        <div class="compare-properties compare-property ">
                                                                            <input type="checkbox"  name="list" value="check-listn" id="check-list">
                                                                            <label for="check-list"><i class="fa fa-exchange"></i><span class="option-content"><span>Compare</span></span>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="property-like-opt">
                                                                    <div class="option-holder">
                                                                        <div class="like-btn">
                                                                            <a href="javascript:void(0);" class="favourite"> <i class="fa fa-heart-o"></i>
                                                                                <div class="option-content"> <span>Save to Favourite</span></div>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="property-video-opt">
                                                                    <div class="option-holder">
                                                                        <a class="property-video-btn" > <i class="fa fa-video-camera"></i>
                                                                            <div class="option-content"><span>Video</span></div>
                                                                        </a>
                                                                    </div>
                                                                </li>
                                                                <li class="property-photo-opt">
                                                                    <div id="galley-img" class="option-holder">
                                                                        <a href="javascript:void(0)" class="rem-pretty-photos"> <i class="fa fa-image"></i><span class="capture-count">5</span>
                                                                            <div class="option-content"> <span>Photos</span></div>
                                                                        </a>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                            </div>
                                            <div class="text-holder"> <span class="property-price"> $780<span class="prop-price-type"> pcm<span class="guid-price"> ($180 pw)</span></span>
                                                </span>
                                                <div class="post-title">
                                                    <h4 ><a href="">Cafe Commercial Property To Rent</a></h4></div>
                                                <ul class="property-location">
                                                    <li><i class="fa fa-map-marker"></i><span>London, United Kingdom</span></li>
                                                </ul>
                                                <ul class="post-category-list" itemprop="category">
                                                    <li> <i class="fa fa-bed"></i> 5&nbsp;Bedrooms</li>
                                                    <li> <i class="fa fa-bath"></i> 4&nbsp;Bathrooms</li>
                                                    <li> <i class="fa fa-car"></i> 3&nbsp;Garage</li>
                                                    <li> <i class="fa fa-star"></i> <span>Optional</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="midcnt">
            <div class="container ">
                <div class="row">
                    <div class="section-fullwidth col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-6 col-12 ">
                                <div class="property-search">
                                    <div class="element-title align-left ">
                                        <h2>About Pin Board</h2></div>
                                    <ul class="property-list">
                                        <li>Property Management in London</li>
                                        <li>Attractive Landscaped Gardens</li>
                                        <li>City Centre Within Easy Reach</li>
                                        <li>About Pinboard Homevillas</li>
                                        <li>Sale Jobs in London</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-12 ">
                                <div class="property-search">
                                    <div class="element-title align-left ">
                                        <h2>Our Estate Agencies</h2></div>
                                    <ul class="property-list">
                                        <li>Central London estate members</li>
                                        <li>East London estate members</li>
                                        <li>North London estate members</li>
                                        <li>South London estate members</li>
                                        <li>Surrey estate members</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-12 ">
                                <div class="property-search">
                                    <div class="element-title align-left ">
                                        <h2>Popular Searches</h2></div>
                                    <ul class="property-list">
                                        <li>London Property for Sale</li>
                                        <li>New Homes in London</li>
                                        <li>London Shortlist Homes</li>
                                        <li>London Property Listings</li>
                                        <li>New Commercial Property</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-12 ">
                                <div class="property-search">
                                    <div class="element-title align-left ">
                                        <h2>Property List</h2></div>
                                    <ul class="property-list">
                                        <li>New Homes in London</li>
                                        <li>Home Valuation Service</li>
                                        <li>Area Guides for Client</li>
                                        <li>Daily Rental Reports</li>
                                        <li>Search in Homevillas</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="home-services">
            <div class="container ">
                <div class="row">
                    <div class="section-fullwidth col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12 ">
                                <div class="cs-icon-boxes-list top-center">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                            <div class="icon-boxes fancy top-center">
                                                <div class="img-holder">
                                                    <a href="#">
                                                        <figure><img src="images/home-service1.png" alt="Describe Your Task"></figure>
                                                    </a>
                                                </div>
                                                <div class="text-holder">
                                                    <h5><a href="#" >Describe Your Task</a></h5>HomeVillas have theme search, user can manually draw lines on map, all ads property listings in that area show up as a result.</div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                            <div class="icon-boxes fancy top-center">
                                                <div class="img-holder">
                                                    <a href="#">
                                                        <figure><img src="images/home-service2.png" alt="Choose a Tasker"></figure>
                                                    </a>
                                                </div>
                                                <div class="text-holder">
                                                    <h5><a href="#" >Choose a Tasker</a></h5>User can schedule a viewing date and time for property with agent as per convenience. Agent can respond the schedule as per choice.&nbsp;</div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                            <div class="icon-boxes fancy top-center">
                                                <div class="img-holder">
                                                    <a href="#">
                                                        <figure><img src="images/home-service3.png" alt="Live Smarter"></figure>
                                                    </a>
                                                </div>
                                                <div class="text-holder">
                                                    <h5><a href="#" >Live Smarter</a></h5>Home Villa built for the best SEO practices. All links and elements are SEO friendly, yet putting your site high in ranks.</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="blog">
            <div class="container ">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="section-title">
                            <h2 class="title text-center">NEWS AND STORIES</h2></div>
                    </div>
                    <div class="section-fullwidth col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12 ">
                                <div class="blog blog-grid simple">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                            <div class="blog-post" style="height: 468px;">
                                                <div class="img-holder">
                                                    <figure>
                                                        <a href=""><img src="images/property2.jpg" class="attachment-wp_rem_cs_media_3 size-wp_rem_cs_media_3 wp-post-image" alt=""></a>
                                                    </figure>
                                                </div>
                                                <div class="text-holder">
                                                    <ul class="post-options">
                                                        <li><a href="#">February 9, 2017</a></li>
                                                        <li><a href="#respond" class="comments-link"> 0 comment</a></li>
                                                    </ul>
                                                    <div class="post-title">
                                                        <h4><a href="" title="take away you can get from">take away you can get ...</a></h4></div>
                                                    <p> Integer mattis magna volutpat euismod habitant mi faucibus elementum proin mi, lobortis iaculis dolor torquent...</p>
                                                    <div class="button-holder"> <a href="" class="btn-readmore">Read Article<i class=" fa fa-arrow-right "></i></a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                            <div class="blog-post" style="height: 468px;">
                                                <div class="img-holder">
                                                    <figure>
                                                        <a href=""><img src="images/property3.jpg" class="attachment-wp_rem_cs_media_3 size-wp_rem_cs_media_3 wp-post-image" alt=""></a>
                                                    </figure>
                                                </div>
                                                <div class="text-holder">
                                                    <ul class="post-options">
                                                        <li><a href="#">February 9, 2017</a></li>
                                                        <li><a href="#respond" class="comments-link"> 0 comment</a></li>
                                                    </ul>
                                                    <div class="post-title">
                                                        <h4><a href="" title="take away you can get from">take away you can get ...</a></h4></div>
                                                    <p> Integer mattis magna volutpat euismod habitant mi faucibus elementum proin mi, lobortis iaculis dolor torquent...</p>
                                                    <div class="button-holder"> <a href="" class="btn-readmore">Read Article<i class=" fa fa-arrow-right"></i></a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                            <div class="blog-post" style="height: 468px;">
                                                <div class="img-holder">
                                                    <figure>
                                                        <a href=""><img src="images/property1.jpg" class="attachment-wp_rem_cs_media_3 size-wp_rem_cs_media_3 wp-post-image" alt=""></a>
                                                    </figure>
                                                </div>
                                                <div class="text-holder">
                                                    <ul class="post-options">
                                                        <li><a href="#">February 9, 2017</a></li>
                                                        <li><a href="#respond" class="comments-link"> 0 comment</a></li>
                                                    </ul>
                                                    <div class="post-title">
                                                        <h4><a href="" title="take away you can get from">take away you can get ...</a></h4></div>
                                                    <p> Integer mattis magna volutpat euismod habitant mi faucibus elementum proin mi, lobortis iaculis dolor torquent...</p>
                                                    <div class="button-holder"> <a href="" class="btn-readmore">Read Article<i class="fa fa-arrow-right"></i></a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="midcnt">
            <div class="section-fullwidth col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="section-title text-center">
                    <h2 class="title">Testimonials</h2> <span style="color:#e0dcd7 !important;">We have the right properties needs.</span>
				</div>
                <div class="col-12 col-md-12 col-sm-12 ">
                    <div class="row">
                        <div class="testimonial-slider">
                            <div class="swiper-container swiper-container-horizontal">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide swiper-slide-duplicate">
                                        <div class="testimonial fancy">
                                            <div class="img-holder">
                                                <figure> <img src="images/testimonial1.jpg" alt=""></figure>
                                            </div>
                                            <div class="testimonial-description">
                                                <div class="img-holder">
                                                    <figure><img src="images/testimonial-thumbnail1.jpg" alt=""></figure>
                                                </div>
                                                <div class="text-holder">
                                                    <p><span>Without doubt the best and most up to date method of selling a house. Everything has been user friendly and fits modern busy lifestyles. So impressed.</span></p>
                                                    <div class="authore-detail"><span class="authore-name">Stuart Jarvis, </span><address>Streets Ahead, Croydon Central</address></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide swiper-slide-duplicate">
                                        <div class="testimonial fancy">
                                            <div class="img-holder">
                                                <figure><img src="images/testimonial1.jpg" alt=""></figure>
                                            </div>
                                            <div class="testimonial-description">
                                                <div class="img-holder">
                                                    <figure><img src="images/testimonial-thumbnail3.jpg" alt=""></figure>
                                                </div>
                                                <div class="text-holder">
                                                    <p><span>Without doubt the best and most up to date method of selling a house. Everything has been user friendly and fits modern busy lifestyles. So impressed.</span></p>
                                                    <div class="authore-detail"><span class="authore-name">Stuart Jarvis, </span><address>Streets Ahead, Croydon Central</address></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide swiper-slide-duplicate">
                                        <div class="testimonial fancy">
                                            <div class="img-holder">
                                                <figure><img src="images/testimonial1.jpg" alt=""></figure>
                                            </div>
                                            <div class="testimonial-description">
                                                <div class="img-holder">
                                                    <figure><img src="images/testimonial-thumbnail4.jpg" alt=""></figure>
                                                </div>
                                                <div class="text-holder">
                                                    <p><span>Without doubt the best and most up to date method of selling a house. Everything has been user friendly and fits modern busy lifestyles. So impressed.</span></p>
                                                    <div class="authore-detail"><span class="authore-name">Stuart Jarvis, </span><address>Streets Ahead, Croydon Central</address></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="testimonial fancy">
                                            <div class="img-holder">
                                                <figure><img src="images/testimonial1.jpg" alt=""></figure>
                                            </div>
                                            <div class="testimonial-description">
                                                <div class="img-holder">
                                                    <figure><img src="images/testimonial-thumbnail1.jpg" alt=""></figure>
                                                </div>
                                                <div class="text-holder">
                                                    <p><span>Without doubt the best and most up to date method of selling a house. Everything has been user friendly and fits modern busy lifestyles. So impressed.</span></p>
                                                    <div class="authore-detail"><span class="authore-name">Stuart Jarvis, </span><address>Streets Ahead, Croydon Central</address></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="testimonial fancy">
                                            <div class="img-holder">
                                                <figure><img src="images/testimonial1.jpg" alt=""></figure>
                                            </div>
                                            <div class="testimonial-description">
                                                <div class="img-holder">
                                                    <figure><img src="images/testimonial-thumbnail1.jpg" alt=""></figure>
                                                </div>
                                                <div class="text-holder">
                                                    <p><span>Without doubt the best and most up to date method of selling a house. Everything has been user friendly and fits modern busy lifestyles. So impressed.</span></p>
                                                    <div class="authore-detail"><span class="authore-name">Stuart Jarvis, </span><address>Streets Ahead, Croydon Central</address></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="testimonial fancy">
                                            <div class="img-holder">
                                                <figure><img src="images/testimonial1.jpg" alt=""></figure>
                                            </div>
                                            <div class="testimonial-description">
                                                <div class="img-holder">
                                                    <figure><img src="images/testimonial-thumbnail1.jpg" alt=""></figure>
                                                </div>
                                                <div class="text-holder">
                                                    <p><span>Without doubt the best and most up to date method of selling a house. Everything has been user friendly and fits modern busy lifestyles. So impressed.</span></p>
                                                    <div class="authore-detail"><span class="authore-name">Stuart Jarvis, </span><address>Streets Ahead, Croydon Central</address></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="testimonial fancy">
                                            <div class="img-holder">
                                                <figure><img src="images/testimonial1.jpg" alt=""></figure>
                                            </div>
                                            <div class="testimonial-description">
                                                <div class="img-holder">
                                                    <figure><img src="images/testimonial-thumbnail1.jpg" alt=""></figure>
                                                </div>
                                                <div class="text-holder">
                                                    <p><span>Without doubt the best and most up to date method of selling a house. Everything has been user friendly and fits modern busy lifestyles. So impressed.</span></p>
                                                    <div class="authore-detail"><span class="authore-name">Stuart Jarvis, </span><address>Streets Ahead, Croydon Central</address></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<?php include 'footer.php';?>
	   