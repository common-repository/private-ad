
<style>
    body{
        font-family: 'Roboto', sans-serif!important;
    }
    .ad-sidebar-btn, input#collect_ad_banner, #create_your_ad{
        width:90%;
        padding:15px 20px 15px 20px!important;
        font-family: 'Roboto', sans-serif;
        font-size: 11px!important;
        text-transform: uppercase;
        letter-spacing: 2.5px;
        font-weight: 500;
        color: #000;
        background-color: #fff;
        border: none!important;
        border-radius: 50px!important;
        box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease 0s;
        cursor: pointer;
        outline: none;
    }
    input#collect_ad_banner, #create_your_ad{
        margin-top:5%;
    }
    
    .ad-sidebar-btn:hover , input#collect_ad_banner:hover ,#create_your_ad:hover{
        background-color: #2EE59D;
        box-shadow: 0px 15px 20px rgba(46, 229, 157, 0.4);
        color: #fff;
        transform: translateY(-7px);
    }
    .ad-sidebar-btn>a{
        text-decoration:none;
        color:#fff;
    }
    #ad-exclamation{
        color:#4D7BBE!important;
    }
    /* input#collect_ad_banner {
    border-color: #0d6efd;
    border: 1px solid #0d6efd;
    border-radius: 5px;
    background-color: transparent;
    color: #0d6efd;
    padding: 5px;
} */
/* input#collect_ad_banner:hover {
    border-color: #0d6efd;
    border: 1px solid #0d6efd;
    border-radius: 5px;
    background-color: #0d6efd;
    color: #fff;
    padding: 5px;
} */
select#Advertisement_category {
    max-width: 100%;
}
select#Advertisement_category {
    max-width: 100%;
    padding: 5px;
    font-size:16px;
    margin-top: 1px!important;
}
.ad_added__successfully {
    position: absolute;
    top: 150px;
    margin: 0 auto;
    left: 33%;
}
.ad_added__successfully {
    width: 400px;
    background-color: green;
    padding: 5px 20px;
    color: #fff!important;
    border-radius: 10px;
}
</style>

<style id="sucessstyle">

.popup-wrapper {
    display: none; 
    position: fixed; 
    z-index: 999; 
    padding-top: 100px; 
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto; 
    background-color: rgb(0,0,0); 
    background-color: rgba(0,0,0,0.4); 
}


.popup-content {
    background-color: #008100;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 30%;
    position:relative;
  border-radius: 20px;
  height: 70px;
}




.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}
.parent {
    text-align: center;
}
.parent>h2 {
    font-size: 2rem;
    line-height: 2rem;
    color: #fff;
    font-family: Open Sans;
   
}
.parent>p {
    color: #36394D;
    font-size: 18px;
    padding: 15px 15px;

}
.parent>button {
    background-color: #2e91fc;
    border-color: #2e91fc;
    color: #fff;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    border-radius: 4px;
    cursor: pointer;
    border: 0;
    margin-bottom: 20px;
    font-size: .875rem;
    line-height: 1.5rem;
    height: 40px;
    font-weight: 600;
    text-align: center;
    padding: 24px 30px;
    text-transform: uppercase;
    font-size: 16px;

}
.parent>button:hover{
  background-color: #fff;
    border-color: #fff;
    border:1px solid #2e91fc;
    color: #2e91fc;
}
.parent>a {
    justify-content: center;
    border-radius: 4px;
    cursor: pointer;
    border: 0;
    background-color: transparent;
    font-size: .875rem;
    line-height: 1.5rem;
    height: 40px;
    padding: 12px 33px;
    color: #36394D;
    text-decoration: none;
    text-transform: uppercase;
    font-size:14px;
}
.parent>a:hover {
    background-color: #c2c2c2!important;
  
  }
.close {
    color: #FFF;
    float: right;
    font-size: 20px;
    background: #008100;
    position: absolute;
    right: 18px;
    top: 8px;
    padding: 0px 6px;
    border: 1px #FFFFFF solid;
    font-family: arial;
}
h1#ad-welcome-text{
}

input.ad-bass-input {
  background: #fff!important;
  color: #525865!important;
  border-radius: 4px!important;
  border: 1px solid #d1d1d1!important;
  box-shadow: inset 1px 2px 8px rgba(0, 0, 0, 0.07)!important;
  font-family: inherit!important;
  font-size: 1em!important;
  line-height: 1.45!important;
  outline: none!important;
  padding: 0.6em 1.45em 0.7em!important;
  -webkit-transition: .18s ease-out!important;
  -moz-transition: .18s ease-out!important;
  -o-transition: .18s ease-out!important;
  transition: .18s ease-out!important;
}
input.ad-bass-input:hover {
  box-shadow: inset 1px 2px 8px rgba(0, 0, 0, 0.02)!important;
}
input.ad-bass-input:focus {
  color: #4b515d!important;
  border: 1px solid #B8B6B6!important;
  box-shadow: inset 1px 2px 4px rgba(0, 0, 0, 0.01), 0px 0px 8px rgba(0, 0, 0, 0.2)!important;
}
.ad-side-bar, .ad-shadow{
    box-shadow: 0px 35px 50px rgb(0 0 0 / 20%);
}
</style>
<div class="container-fluid" style="background-color:#E7EBFD;">
    <div class="row justify-content-center" style="align-items: center;">
            <div class="col-md-8 pt-2 pb-5 text-center text-dark">
                
                <h1 id="ad-welcome-text"></h1>
            </div>
                <div class="col-md-4 text-right">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" zoomAndPan="magnify" viewBox="0 0 300 299.999988" height="250" preserveAspectRatio="xMidYMid meet" version="1.0" class="ad_logo"><rect x="-30" width="360" fill="transparent" y="-29.999999" height="359.999986" fill-opacity="1"/><rect x="-30" width="360" fill="transparent" y="-29.999999" height="359.999986" fill-opacity="1"/><rect x="-30" width="360" fill="transparent" y="-29.999999" height="359.999986" fill-opacity="1"/><rect x="-30" width="360" fill="transparent" y="-29.999999" height="359.999986" fill-opacity="1"/><path class="ad_logo_green_dark" fill="#097243" d="M 150 149.964844 L 191.683594 275.085938 C 191.695312 275.109375 191.695312 275.132812 191.707031 275.179688 C 193.535156 280.242188 196.464844 284.742188 200.132812 288.515625 L 204.75 278.90625 L 201.996094 9.269531 L 200.132812 0.460938 L 200.027344 0.167969 L 196.183594 3.453125 L 148.441406 146.375 L 150 149.960938 " fill-opacity="1" fill-rule="nonzero"/><path class="ad_logo_green_light" fill="#13a564" d="M 226.957031 299.917969 L 300 299.929688 L 299.929688 299.765625 L 200.179688 0.433594 L 200.179688 288.503906 C 206.953125 295.523438 216.410156 299.917969 226.957031 299.917969 " fill-opacity="1" fill-rule="nonzero"/><path class="ad_logo_blue" fill="#4d7bbe" d="M 99.984375 0.152344 L 99.972656 0.261719 L 99.933594 0.152344 L 0.0742188 299.777344 L 0 299.929688 L 73.046875 299.929688 C 83.578125 299.929688 93.046875 295.523438 99.824219 288.492188 C 103.492188 284.707031 106.429688 280.21875 108.253906 275.144531 C 108.265625 275.109375 108.265625 275.085938 108.277344 275.074219 L 200.050781 0.117188 L 99.972656 0.117188 L 99.972656 0.15625 L 99.984375 0.15625 " fill-opacity="1" fill-rule="nonzero"/></svg>

                </div>
    </div>
</div>

<!-- Advertisement Form -->
<div class="container">
    <div class="row mt-4">
        <div class="col-md-8 border border-5 py-5 rounded bg-light ad-shadow" style="border-color:#E7EBFD!important; padding: 100px;">
            <form action="Javascript:void(0)" method="post" id="get_ad_data" name="main-ad-form">
                <h3 class="text-center">Your Advertisement form</h3>
                <div class="form-group">
                    <label for="Advertisement_name">Advertisement Name</label>
                    <input type="text" class="form-control ad-bass-input" id="Advertisement_name" name="get_Advertisement_name" placeholder="Advertisement of Twitter" required>
                    
                </div>
                <div class="row mt-4">
                            <div class="form-group col-md-6">
                                <label for="Advertisement_category">Category Name</label>
                                <select name="get_Advertisement_category" id="Advertisement_category" class="form-control ad-bass-input" required>
                                <?php
                                    $categories = get_categories();
                                    $i = 1;
                                    foreach($categories as $category) {
                                
                                    echo '<option value="'.esc_attr($category->name).'">'.esc_attr($category->name).'</option>';
                                
                                    $i+=1;
                                    }

                                ?>
                                </select>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="Advertisement_redirection">Advertisement Redirection Link</label>
                                <input type="text" class="form-control ad-bass-input" name="get_Advertisement_Redirection" id="Advertisement_redirection" placeholder="https://wordpress.com/" required>
                                
                            </div>
                </div>

                <div class="row mt-4">
                <div class="form-group col-md-6">
                                <label for="Advertisement_company">Company Name</label>
                                <input type="text" class="form-control ad-bass-input" name="get_Advertisement_company" id="Advertisement_company" placeholder="MyCompany PVT. LTD">
                            </div>
                            
                            <div class="form-group col-md-6">
                                <label for="Advertisement_delay">Time Delay In MS</label>
                                <input type="text" class="form-control ad-bass-input" id="Advertisement_delay" name="get_Advertisement_delay_time" placeholder="1000">
                            </div>
                </div>

                <div class="row mt-4">
                    <div class="form-group col-md-6 mt-2">
                                <label for="Advertisement_banner">Select Banner for Advertisement</label>
                                <input type="button" name="i_have_ad_banner" id="collect_ad_banner" value="Choose Banners" class="new_bannner" required/ required>
                                <input type="hidden" id="get__ad_banner" name="get__ad_banner" value=""/>
                                <div id="see__pro__slides" class="row"></div>

                    </div>
                   
                    <div class="col-md-6 mt-2">
                    <label for="Advertisement_banner">Submit Your Ad Here</label>
                    <button type="button" id="create_your_ad" class="btn">Create Your Ad</button>  
                    </div>
                </div>
                
            </form>
        </div>
       <div class="col-md-3 ad-side-bar justify-content-center bg-light py-5 border border-5 rounded" style="border-color:#E7EBFD!important; margin:0 auto;">
            <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-md-12">
                    <h4 class="my-4 mb-5">Your Ad Menu Redirection</h4>
                   <a for="Advertisement_name" class="btn btn-primary ad-sidebar-btn text-light" href="#Advertisement_name">Step One</a>
                </div>
                <div class="col-md-12 mt-5">
                <a class="btn btn-warning ad-sidebar-btn text-light" href="#Advertisement_category">Step Two</a>

                </div>
                <div class="col-md-12 mt-5">
                <a class="btn btn-info  ad-sidebar-btn text-light" href="./admin.php?page=my-ads">Step Three</a>

                </div>

            </div>

            </div>
       </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12">
             <div id="contentPopup" class="popup-wrapper">
                <!-- Modal content -->
                <div class="popup-content">
                <span class="close">X</span>
                    <div class="parent">
                        <h2>Successfully Submitted !</h2>
                    
                    </div>
                </div>
             </div>

        </div>

    </div>

</div>

<script>
    // changing the input buttons value @meadi screen
    window.addEventListener('load', (event) => {
        if (screen.width < 601) {
    jQuery('#collect_ad_banner').val("+");
    }
    else if (screen.width > 601) {
        jQuery('#collect_ad_banner').val("Choose Banners");
    }

    });


    jQuery(function() {
    var sliderImgArr = [];
    jQuery("#collect_ad_banner").on("click",function(){
    var images = wp.media({
    title: "Choose a file…",
   
    }).open().on("select",function(e){
    var uploadedImages = images.state().get("selection");
    var selectedImages = uploadedImages.toJSON();      
    jQuery.each(selectedImages,function(index,image){
      var div = document.createElement('DIV');
      div.className ="col-sm-12 col-md-4 col-lg-4 imgwrap";
      var cross = document.createElement('I');
      cross.classList = 'fa fa-times removeicon';
      cross.setAttribute('data-lngth',image.url);
      var img = document.createElement('IMG');
      img.src = image.url;
      img.width = '200';
      div.append(img);
      div.append(cross);
      var breaktag = document.createElement('br');
      document.getElementById('see__pro__slides').append(div);
      sliderImgArr.push(image.url);
      }); 
      jQuery('input[name="get__ad_banner"]').val(sliderImgArr.toString());
  });
});


// slider submit button function is here

jQuery("#create_your_ad").on("click", function() {
var ad__name = document.getElementById('Advertisement_name').value;
var ad__category = document.getElementById('Advertisement_category').value;
var ad__redirection = document.getElementById('Advertisement_redirection').value;
var ad__banner = document.getElementById('get__ad_banner').value;

if (ad__name !== '' && ad__category !== '' && ad__redirection !== '' && ad__banner !== '') {
    // alert('Report ok');
    var postdata = "action=private_ad_data&param=save_plugin&" + jQuery("#get_ad_data").serialize();

    jQuery.post(ajax_object, postdata, function(response) {
    var data = jQuery.parseJSON(response);
    if (data.status == 1) {
        window.scrollTo({ top: 0, behavior: 'smooth' });
        document.getElementById('contentPopup').style.display="block";

    }else{
        document.querySelectorAll('.ad_added__successfully')[0].style.display="none";
    }
    });
  }
else{
    alert("Every Feild Of The Form Is REQUIRED !!!");
    return false;

  }
});


});



    //  closing the sucess msg
window.onload = function(){ 
var span = document.getElementsByClassName("close")[0];
var contentPopup = document.getElementById('contentPopup');

span.onclick = function() {
 contentPopup.style.display = "none";
 document.querySelectorAll('.product-outline')[0].style.backgroundColor = "#fff";
 document.querySelectorAll('.progressBar')[0].style.display = "block";
}

};

var i = 0;
var txt = 'Welcome To The Private Advertisement !';

// window.addEventListener('load', (event) => {
    function typeWriter(){
if (i < txt.length) {
   
    document.getElementById("ad-welcome-text").innerHTML += txt.charAt(i);
    i++;
    setTimeout(typeWriter, 100);
  }
    }

    typeWriter();

// clearInterval(interval);

// });

</script>