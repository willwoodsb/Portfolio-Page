<?php 

include 'portfolio_array.php';

foreach ($portfolio_array as $item) { ?>
    <div class="portfolio__item">
        <img src="<?php echo $item["img-path"]; ?>" alt="<?php echo $item["title"]; ?>">
        <div class="padded">
            <h2><?php echo $item["title"]; ?></h2>
            <a href="<?php echo $item["website-link"]; ?>" target="_blank" class="view-link"><p>View Website</p><span class="icon"></span></a>
            <a href="<?php echo $item["repo-link"]; ?>" target="_blank" class="view-link"><p>View Github Repo</p><span class="icon"></span></a>
            <p class="description"><?php echo $item["description"]; ?></p>
        </div>
    </div>
<?php }
