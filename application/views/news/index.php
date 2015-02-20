
<?php foreach ($news as $news_item): ?>

<h2>Id: <?php echo $news_item['Id']?></h2>
    <h2>Name: <?php echo $news_item['Name'] ?></h2>
    <div class="main">
        Email: 	<?php echo $news_item['Email'] ?></br></br>
		Text: 	<?php echo $news_item['Text'] ?>
    </div>
    
<?php endforeach ?>