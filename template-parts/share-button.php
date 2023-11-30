<?php
/**
 * Share button for sidebar
 *
 */
?>

<!-- share START -->
<div class="mb-3">
    <ul class="nav text-white-force">
        <li class="nav-item">
            <a class="nav-link icon-md rounded-circle m-1 p-0 fs-5 bg-light" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo get_permalink( $post->ID )?>" target="_blank">
                <i class="fab fa-facebook-square align-middle text-body"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link icon-md rounded-circle m-1 p-0 fs-5 bg-light" href="https://twitter.com/intent/tweet?text=<?php echo get_permalink( $post->ID )?>" target="_blank">
                <i class="fab fa-twitter-square align-middle text-body"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link icon-md rounded-circle m-1 p-0 fs-5 bg-light" href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo get_permalink( $post->ID )?>" target="_blank">
                <i class="fab fa-linkedin align-middle text-body"></i>
            </a>
        </li>
    </ul>
</div>
<!-- Newsletter END -->