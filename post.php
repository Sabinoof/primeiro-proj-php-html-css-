<?php
include_once("templates/header.php");
if (isset($_GET["id"])) {

  $postId = $_GET['id'];
  $currentPost;

  foreach ($posts as $post) {
    if ($post['id'] == $postId) {
      $currentPost = $post;
    }
  }
}
?>
<main id="post-container">
        <div class="content-container">
            <h1 id="main-title"><?= $currentPost['title'] ?></h1>
            <p id="post-description"> <?= $currentPost['description'] ?></p>
 
            <div class="img-container">
                <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title']?>">
            </div>
 
                <p class="post-content">Lorem ipsum dolor sit amet, consectetur a ipisicing elit. Facilis odio fuga voluptatem consequatur numquam explicabo quaerat nisi, natus voluptatibus nam officiis, ab corporis! Maxime quod possimus tenetur repellendus cum ad? Excepturi, culpa. Molestiae, at? Aliquam at odit hic est voluptate vitae, aut iure officia dolorum obcaecati eos similique laudantium ea laboriosam nam ullam placeat nemo voluptatum expedita porro, dolores saepe!Architecto neque quod illo animi magnam molestiae totam repudiandae commodi optio, atque ad et doloremque dicta nostrum ipsum iusto, vel officia facere cumque est ipsam dolorum tempore? Eum, earum ducimus. Corporis facilis voluptatum accusamus quae voluptates, hic at rem eius, modi aperiam ex nisi neque beatae molestias vel molestiae illum similique! Nam nobis sapiente corporis provident dolore enim voluptatibus beatae. Assumenda ratione debitis aut voluptates repudiandae dolores. Asperiores quidem expedita sint, dolore atque neque corporis odio aperiam perferendis nemo odit aliquam, deleniti rerum enim distinctio necessitatibus consequatur iste quos adipisci.
                </p>
  </div>
  <aside id="nav-container">
    <h3 id="tags-title">Tags</h3>
    <ul id="tag-list">
      <?php foreach ($currentPost['tags'] as $tag): ?>
        <li><a href="#"><?= $tag ?></a></li>
      <?php endforeach; ?>
    </ul>
    <h3 id="categories-title">Categorias</h3>
    <ul id="categories-list">
      <?php foreach ($categories as $category): ?>
        <li><a href="#"><?= $category ?></a></li>
      <?php endforeach; ?>
    </ul>
  </aside>
</main>
<?php
include_once("templates/footer.php");
?>