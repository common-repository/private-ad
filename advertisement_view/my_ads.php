<?php
defined( 'ABSPATH' ) or die( 'You Can not Access this File Directly' );
?>

<style>
  .ad-table-wrapper{
    box-shadow: 0px 35px 50px rgb(0 0 0 / 20%);
    background-color:#F8F9FA;
  }
  .ad-table-wrapper-edit{
    background-color:#F8F9FA;
    display: none;
  }
  a.ad-redirection-link-view {
        width:90%;
        padding:15px 20px 15px 20px!important;
        font-family: 'Roboto', sans-serif;
        font-size: 11px!important;
        text-transform: uppercase;
        letter-spacing: 2.5px;
        font-weight: 500;
        color: #fff;
        background-color: #2EE59D;
        border: none!important;
        border-radius: 50px!important;
        box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease 0s;
        cursor: pointer;
        outline: none;
        text-decoration:none;
}
a.ad-redirection-link-view:hover{
        color: #000!important;
        background-color: #fff!important;
        box-shadow: 0px 15px 20px rgba(46, 229, 157, 0.4);
        transform: translateY(-7px);
       
}
  a.delete_my__advertisement , a.edit_my__advertisement , a.Add_edited_ad__data{
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
        text-decoration:none;
  }
  a.delete_my__advertisement:hover ,a.edit_my__advertisement:hover , a.Add_edited_ad__data:hover{
        background-color: #2EE59D;
        box-shadow: 0px 15px 20px rgba(46, 229, 157, 0.4);
        color: #fff;
        transform: translateY(-7px);
    }
    table.ad-table>thead {
    background-color: #4D7BBE;
    }
    .text-white{
      color:#fff!important;
    }
    .table>:not(caption)>*>*{
      padding: 1rem 0.5rem!important;
    }
    
</style>

<div class="container">
    <div class="row">
        <div class="col-md-12 ad-table-wrapper">
        <table class="table ad-table">
  <thead>
    <tr>
      <th scope="col" class="text-white m-4">#</th>
      <th scope="col" class="text-white">Advertisement Name</th>
      <th scope="col" class="text-white">category</th>
      <th scope="col" class="text-white">Redirection</th>
      <th scope="col" class="text-white">Company Name</th>
      <th scope="col" class="text-white">Advertisement Delay</th>
      <th scope="col" class="text-white">Advertisement Bmages</th>
      <th scope="col" class="text-white">Remove</th>
      <th scope="col" class="text-white">Modification</th>
    </tr>
  </thead>
  <tbody>
   <?php
      global $wpdb;
      $private_ad__result = $wpdb->get_results($wpdb->prepare("SELECT * FROM {$wpdb->prefix}privatead ", OBJECT ));
      
      foreach ( $private_ad__result as $key__val=>$pri_value ) {

        $id = $private_ad__result[$key__val]->id;
        $advertisement_name = $private_ad__result[$key__val]->advertisement_name;
        $advertisement_category = $private_ad__result[$key__val]->advertisement_category;
        $advertisement_redirection = $private_ad__result[$key__val]->advertisement_redirection;
        $advertisement_company = $private_ad__result[$key__val]->advertisement_company;
        $advertisement_delay = $private_ad__result[$key__val]->advertisement_delay;
        $advertisement__images = $private_ad__result[$key__val]->advertisement__images;

     
        ?>
         <tr class="py-4">
         <td scope="row"><?php echo esc_attr($id); ?></td> 
         <td scope="row"><?php echo esc_attr($advertisement_name); ?></td> 
         <td scope="row"><?php echo esc_attr($advertisement_category); ?></td> 
         <td scope="row"><a class="ad-redirection-link-view" href="<?php echo esc_attr($advertisement_redirection);?>">Link</a></td> 
         <td scope="row"><?php echo esc_attr($advertisement_company); ?></td> 
         <td scope="row"><?php echo esc_attr($advertisement_delay); ?></td> 
         <td scope="row"><a target="_blank" href="<?php echo esc_attr($advertisement__images); ?>"><img src="<?php echo esc_attr($advertisement__images); ?>" alt="Adbanner" width="80px"></a></td> 
         <td class="text-danger delete-ad"><a href="#" class="delete_my__advertisement" id="<?php echo esc_attr($id); ?>">Delete</a></td>
         <td class="text-danger edit  -ad"><a href="#" class="edit_my__advertisement" id="<?php echo esc_attr($id); ?>" data-name="<?php echo esc_attr($advertisement_name);?>" data-cat="<?php echo esc_attr($advertisement_category); ?>" data-rediretion="<?php echo esc_attr($advertisement_redirection); ?>" data-companyname="<?php echo esc_attr($advertisement_company); ?>" data-timedelay="<?php echo esc_attr($advertisement_delay); ?>" data-bannerforad="<?php echo esc_attr($advertisement__images); ?>" data-id="<?php echo esc_attr($id); ?>">Edit</a></td>
        </tr>
         <?php
          }
         ?>

  </tbody>
</table>


        </div>

<div class="col-md-12 col-xl-12 ad-table-wrapper-edit ">
          <form action="Javascript:void(0)" method="post" id="edit_my_ad_frm" name="edit_my_ad_frm">
          <table class="table ad-table">
  <thead>
    <tr>
      <th scope="col" class="text-white m-4">#</th>
      <th scope="col" class="text-white">Advertisement Name</th>
      <th scope="col" class="text-white">category</th>
      <th scope="col" class="text-white">Redirection</th>
      <th scope="col" class="text-white">Company Name</th>
      <th scope="col" class="text-white">Advertisement Delay</th>
      <th scope="col" class="text-white">Advertisement Images</th>
      <th scope="col" class="text-white">Update</th>
    </tr>
  </thead>
  <tbody>
   <?php
      global $wpdb;


      $private_ad__result_edit = $wpdb->get_results($wpdb->prepare("SELECT * FROM {$wpdb->prefix}privatead WHERE id = '".$id."'" , OBJECT ));
      
      foreach ( $private_ad__result_edit as $key__val=>$pri_value ) {

        $first_id = $private_ad__result_edit[$key__val]->id;
        $advertisement_name = $private_ad__result_edit[$key__val]->advertisement_name;
        $advertisement_category = $private_ad__result_edit[$key__val]->advertisement_category;
        $advertisement_redirection = $private_ad__result_edit[$key__val]->advertisement_redirection;
        $advertisement_company = $private_ad__result_edit[$key__val]->advertisement_company;
        $advertisement_delay = $private_ad__result_edit[$key__val]->advertisement_delay;
        $advertisement__images = $private_ad__result_edit[$key__val]->advertisement__images;

      
     
        ?>
         <tr class="py-4 edit-ad">
         <td scope="row" class="numberr"><?php echo esc_attr($first_id); ?></td> 
         <td scope="row"><input type="text" name="ad-new-name" value="" disabled></td> 
         <td scope="row"><input type="text" name="add-new-ad-category" value="<?php echo esc_attr($advertisement_category); ?>"></td> 
         <td scope="row"><input type="text" name="add-new-ad-redirection-link" value="<?php echo esc_attr($advertisement_redirection);?>"></td> 
         <td scope="row"><input type="text" name="ad-new-company-name" value="<?php echo esc_attr($advertisement_company); ?>" disabled></td> 
         <td scope="row"><input type="text" name="ad-new-time-delay" value="<?php echo esc_attr($advertisement_delay); ?>"></td> 
         <td scope="row"><input type="text" name="ad-new-banner" value="<?php echo esc_attr($advertisement__images); ?>"></td> 
           <td class="text-danger edit  -ad">
             <input type="hidden" name="id" value="">
             <?php wp_nonce_field('edit__mypr_ad', 'rdm-nonce'); ?>
             <a href="#" class="Add_edited_ad__data" id="">Update</a>

          
          </td>
        </tr>
         <?php
          
        }
         ?>

  </tbody>
</table>
   
          </form>
        </div>
    </div>
</div>

<script>
  jQuery(function() {
jQuery(".delete_my__advertisement").on("click",function(){

var sure = confirm('Are you sure, you want to delete this Advertisement !!!');


if(sure){

var postdata = "action=delete_my__advertisement_by_id&param=save_plugin&id="+this.id;

jQuery.post(ajax_object,postdata,function(response){

var data = jQuery.parseJSON(response);
if(data.status==1){
window.location.reload();
}
});
}

});

document.querySelectorAll('.ad-table-wrapper-edit')[0].style.display = "none";

jQuery(".edit_my__advertisement").on("click", function(){

document.querySelectorAll('.ad-table-wrapper-edit')[0].style.display = "block";
document.querySelectorAll('.ad-table-wrapper')[0].style.display = "none";
jQuery('[name="ad-new-name"]').val(jQuery(this).data('name'));
jQuery('[name="add-new-ad-category"]').val(jQuery(this).data('cat'));
jQuery('[name="add-new-ad-redirection-link"]').val(jQuery(this).data('rediretion'));
jQuery('[name="ad-new-company-name"]').val(jQuery(this).data('companyname'));
jQuery('[name="ad-new-time-delay"]').val(jQuery(this).data('timedelay'));
jQuery('[name="ad-new-banner"]').val(jQuery(this).data('bannerforad'));
jQuery('[name="id"]').attr('value', jQuery(this).data('id'));
jQuery('.Add_edited_ad__data').attr('id', jQuery(this).data('id'));
jQuery('.numberr').text(jQuery(this).data('id') );


});
jQuery(".Add_edited_ad__data").on("click", function(){
  var sure = confirm('Are you sure, you want to update this this Advertisement?');
if(sure){
  var postdataedited_data = "action=update_edited_ads&param=save_plugin&"+jQuery("#edit_my_ad_frm").serialize();
  // console.log(postdataedited_data);
  jQuery.post(ajax_object,postdataedited_data,function(response){
              var data = jQuery.parseJSON(response);
              if(data.status==1){
                window.location.reload();
              }
              else{
                window.location.reload(); 
              }
              });

  }
})




});

</script>