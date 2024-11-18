<?php 
/*
 * Template Name: الصفحة الرئيسية
 */
get_header(); ?>
     
    <div class="container">
        <div class="slider_owl owl-carousel owl-theme">

      <?php
          $args = array(
              'posts_per_page'    => 10,
              'post_type'     => 'slider',  //choose post type here
              'order' => 'DESC',
          );
      $query = new WP_Query( $args );

      if ( $query->have_posts() ) {
      while ( $query->have_posts() ) {
      $query->the_post();
      ?>

        <?php the_post_thumbnail(''); ?>

      <?php } } ?>



    </div>

        <div class="row">
                <div class="col-lg-9 col-md-8 col-sm-6">
                <div class="face">
                <h1>العناية بالبشرة وخطواتها </h1>
                   <img src="<?php echo get_template_directory_uri() ;?>/img/img4.jfif">

                    
                    <p>
    البشرة المشرقة هي سرّ جمال المرأة، كما أنّها تلفت الأنظار دائماً، وكلما زاد الاهتمام بها فإنّ ذلك يزيد من جمالها، لذلك يجب على المرأة الاهتمام بها من خلال تنظيفها وترطيبها باستمرار باستخدام الكريمات المناسبة لنوع بشرتها أو بوصفاتٍ وموادٍ طبيعيّة متوفّرة في كلِّ منزل، ولا تعتبر العناية بالبشرة أمراً صعباً، إذ يمكن تطبيقها بخطواتٍ روتينيةٍ بسيطةٍ، دون الحاجة إلى الوقت، أو الجهد، أو هدر الأموال... <a href="44a4bxedxPwGQtSnEzGzdejnCdtrDJqkJ6uqWwGbXmdx5zrjGdHivmr9pyd7x8rVQMgumwGPCfuwseieCg8tuN5jNNeMJPU">قراءة المزيد</a>
                                </p>
                    <div class="hair">
                    
                        <h2>طرق العناية بالشعر</h2>
                        <img src="<?php echo get_template_directory_uri() ;?>/img/img3.jfif">
                        
                        <p>تعرّض الشّعر بمختلف أنواعه؛ كالدُّهني، والجاف، والنّاعم، والمجعّد، وغيرها من الأنواع، للعديد من المشاكل التّي تفقده المظهر الصّحي والجميل، كجفاف الشّعر أو تساقطه وغيرها من المشاكل، فالشّعر الصّحي والجميل يمنحُ الثّقة للسّيدة، وهناك عدّة خطواتٍ، ووصفاتٍ طبيعيّة سهلة التّحضير وغير مكلفة ولا تحتاج إلى الوقت وفعّالة في علاج مشاكل الشّعر والعناية به، وسنفصل الحديث عنها في هذا الموضوع..<a href="#">قراءة المزيد</a>
                        
                        </p>
                    
                    </div>
                    
            
                </div>
                
                
            
            </div>
           <div class="col-lg-3 col-md-4 col-sm-6">
            <?php get_sidebar();  ?>
            
        </div>
        </div>
</div>
        
        
    
<?php
get_footer();
