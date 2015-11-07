jQuery(document).ready(function(){
 var pathname = window.location.pathname;

jQuery('#views-exposed-form-freiend-search-page #edit-uid-raw').on("keyup keypress", function(e) {
  var code = e.keyCode || e.which; 
  if (code  == 13) {

    e.preventDefault();
    return false;
  }
});
jQuery(".page-community-discussions #block-views-community-discussions-block-1 h2").addClass("community");
jQuery(".page-node #block-system-main .in-row .sharethis-buttons").insertAfter(".page-node #block-system-main .in-row .cmt-right-txt");
//jQuery(".page-whitepaper #block-views-whitepaper-block-2 .view-content").addClass("view-content-whitepaper-block");
jQuery( "#search-block-form .search-button" ).removeClass( "form-submit" );
jQuery( "#user-login .signup-form #edit-actions input" ).removeClass( "form-submit" );
jQuery( "#user-register-form #edit-actions input" ).removeClass( "form-submit" );
//jQuery("#user-login-form .item-list").addClass("forgot");
jQuery(".logged-in #block-social-media-links-social-media-links").insertAfter(".logged-in #main-menu");
jQuery(".page-node-31 #quicktabs-reports ul li:eq(1)").addClass("second");
jQuery("#user-login-form .item-list ul li:eq(0)").addClass("hidden");
jQuery("#user-login-form .item-list ul li:eq(1)").addClass("show");
jQuery(".form-item-uid-raw #edit-uid-raw").addClass("form-autocomplete-add-friend");
jQuery(".user_relationships_popup_link").addClass("btn");
jQuery(".page-user #block-system-main .item-list ul li a").addClass("read-btn");
jQuery("#edit-uid-raw-wrapper .page-node-31 #block-views-time-block").hide();
var value = jQuery(".page-user-edit #user-profile-form #edit-field-country-und option:selected").val();
if (value == '_none') {
      jQuery(".page-user-edit #user-profile-form #edit-field-country-und option:selected").text("Country");                  //code
}
jQuery(".page-node-31 #quicktabs-reports .quicktabs-tabs .last a").click(function(){
	
jQuery(".page-node-31 #block-views-time-block").show();
});

jQuery(".page-node-31 #quicktabs-reports .quicktabs-tabs .first a").click(function(){
	
jQuery(".page-node-31 #block-views-time-block").hide();
});
jQuery(".page-node-31 #quicktabs-reports .quicktabs-tabs .second a").click(function(){
	
jQuery(".page-node-31 #block-views-time-block").hide();
});

	
});

jQuery(function(){

jQuery('#showmenu').click(function(e) {
e.preventDefault();
jQuery('.dropdown-menu').slideToggle("fast");
});

			jQuery('#edit-field-area-of-expertises-und input:checkbox').screwDefaultButtons({
				image: 'url("/sites/all/themes/proventra/images/checkboxSmall.jpg")',
				width:25,
				height:25
			});

		
			jQuery('.form-item-picture-delete input:checkbox').screwDefaultButtons({
				image: 'url("/sites/all/themes/proventra/images/checkboxSmall.jpg")',
				width:25,
				height:25
			});

		});
