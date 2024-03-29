<?php
/*
 Template Name: Home Page
 *
 * 
*/
?>

<?php get_header(); ?>

			<div id="content">

				<div class="home-outer">

					<div class="home-inner">

					
				
					<?php 
					$logo = get_field('main_logo');
					$sub = get_field('sub_logo');

					$quote = get_field('quote', false, false);

					?>

					<div class="main-logo">

						<img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" />

					</div>

					<div class="sub-logo">

						<a href="http://brand-studios.com/" target="_blank"><img src="<?php echo $sub['url']; ?>" alt="<?php echo $sub['alt']; ?>" /></a>

					</div>

					<div class="quote">

						<h3><?php echo $quote; ?></h3>

					</div>

					<div class="social">

						<?php
						$social = get_field('social'); 

						echo $social;
						?>


					</div>

					

					</div>

				</div>

				<div id="inner-content" class="wrap cf">

						<main id="main" class="m-all t-all d-all cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

								<header class="article-header">

									<h1 class="page-title"><?php the_title(); ?></h1>

									


								</header>

								<section class="entry-content cf" itemprop="articleBody">
									<?php
										// the content (pretty self explanatory huh)
										the_content();

									?>
								</section>


								<footer class="article-footer">

                 

								</footer>

								

							</article>

							<?php endwhile; else : ?>

									<article id="post-not-found" class="hentry cf">
											<header class="article-header">
												<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
										</header>
											<section class="entry-content">
												<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
										</section>
										<footer class="article-footer">
												<p><?php _e( 'This is the error message in the page-custom.php template.', 'bonestheme' ); ?></p>
										</footer>
									</article>

							<?php endif; ?>

						</main>

						<?php get_sidebar(); ?>

				</div>

			</div>


<?php get_footer(); ?>
