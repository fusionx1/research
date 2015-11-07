<?php $nid  = node_load($node->nid);

?>
<div class="container wrapper">
    <div class="row">
        <div class="profile-wrp clearfix">
            <div class="col-sm-8">
                <?php global $user; ?>
                <div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>

                    <?php print render($title_prefix); ?>
                    <?php //if (!$page): ?>
                    <h1<?php print $title_attributes; ?>>
                        <a href="<?php print $node_url; ?>"><?php print $title; ?></a>
                    </h1>
                    <?php //endif; ?>
                    <?php print render($title_suffix); ?>

                    <?php if ($display_submitted): ?>
                        <div class="meta submitted">
                            <?php //print $user_picture; ?>
                            <?php //print $submitted; ?>
                        </div>
                    <?php endif; ?>
                    <ul class="post-detail profile-detail">
                        <li>[<?php if($nid->name){ print ucfirst($nid->name);}else{ print '<a href="/user">Login</a>';} ?>]</li>
                        <li><?php print date('d/m/Y', $node->created); ?></li>
                </ul>
                    <div class="content clearfix"<?php print $content_attributes; ?>>
                        <?php
                        hide($content['comments']);
                        hide($content['links']);
                        print render($content);
                        ?>                         
                    </div>

                    <?php
                    // Remove the "Add new comment" link on the teaser page or if the comment
                    // form is being displayed on the same page.
                    if ($teaser || !empty($content['comments']['comment_form'])) {
                        unset($content['links']['comment']['#links']['comment-add']);
                    }
                    // Only display the wrapper div if there are links.
                    $links = render($content['links']);
                    if ($links):
                        ?>
                        <div class="link-wrapper">
                            <?php print $links; ?>
                        </div>
                    <?php endif; ?>

                    <?php print render($content['comments']); ?>

                </div>

            </div>        
            
        </div>   
    </div>
</div>

