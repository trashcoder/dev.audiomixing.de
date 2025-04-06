<!doctype html>
<html>

<head>
    <title>dev.audiomixing.de</title>

</head>

<body>
    <h1>dev.audiomixing.de</h1>
    <h2>Hi, ich bin Dennis(trashcoder) und hier dokumentiere ich alles, was ich f&uuml;r meine Softwareentwicklung
        ben&ouml;tige
        oder an interessanten Features finde
    </h2>
    <div id="articles" class="articles">
        <?php
        function fetchHtmlAsText($url)
        {
            return file_get_contents($url);

        }
        function fetchArticles()
        {
            $articles = file_get_contents("./articles.json");
            return json_decode($articles);
        }
        function initialization()
        {
            $articles = fetchArticles();
            foreach ($articles as $element) {
                echo fetchHtmlAsText($element);
            }
        }
        initialization();

        ?>
    </div>
    <?php
    echo file_get_contents("./footer.php"); ?>
</body>

</html>