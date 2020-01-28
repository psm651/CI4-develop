<h2><?= $title ?></h2>

<?php if (! empty($news) && is_array($news)) : ?>

        <?php foreach ($news as $news_item): ?>

	                <h3 style= 'color:red'><?= $news_item['title'] ?></h3>

                <div class="main">
                        <?= $news_item['body'] ?>
		 <table border="1">
			<th>테이블</th>
			<th>만들기</th>
			<tr><!-- 첫번째 줄 시작 -->
			    <td>첫번째 칸</td>
			    <td>두번째 칸</td>
			</tr><!-- 첫번째 줄 끝 -->
			<tr><!-- 두번째 줄 시작 -->
			    <td>첫번째 칸</td>
			    <td>두번째 칸</td>
			</tr><!-- 두번째 줄 끝 -->
		    </table>

                </div>
                <p><a href="<?= '/news/'.$news_item['slug'] ?>">View article</a></p>

        <?php endforeach; ?>

<?php else : ?>

	        <h3>No News</h3>

        <p>Unable to find any news for you.</p>

<?php endif ?>
