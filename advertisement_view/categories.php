<style>
  .ad-table-wrapper{
    margin: 10px 70px 70px;
    box-shadow: 0px 35px 50px rgb(0 0 0 / 20%);
    background-color:#F8F9FA;
  }

  a.ad-category-names{
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
  a.ad-category-names:hover{
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
        <div class="col-md-10 ad-table-wrapper">
        <table class="table ad-table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col" class="text-white">#</th>
                                <th scope="col" class="text-white">Category Names</th>
                                <th scope="col" class="text-white">Category Used</th>
                                <th scope="col" class="text-white">Category Created By</th>
                            </tr>

                        </thead>
                        <tbody>

                        <?php
                            $categories = get_categories();
                            $i = 1;
                            foreach($categories as $category) {
                          
                            echo '<tr"><td>'. esc_attr($i).'</td><td><a class="ad-category-names" href="' . get_category_link(esc_attr($category->term_id)) . '">' . esc_attr($category->name) . '</a></td><td>Post</td><td>Admin</td></tr>';
                           
                            $i+=1;
                            }

                            ?>
                        </tbody>

                        </table>


        </div>  
    </div>
</div>



