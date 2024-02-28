<section class="about-top container">
      <?php
      if(isset($_GET['id'])){
        echo get_pk_projects($_GET['id']);
      }else{
        global $wp_query;
        $wp_query->set_404();
        status_header( 404 );
        get_template_part( 404 );
      }
       ?>
      </tbody>
    </table>
  </section>