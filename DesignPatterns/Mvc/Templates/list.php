<html>
<body>
<h1>Here is a list</h1>
<ul>
    <?php foreach ($this->items as $item) {
    echo sprintf('<li>%s</li>', $item);
}
    ?>
</ul>
<a href="?">Back</a>
</body>
</html>
