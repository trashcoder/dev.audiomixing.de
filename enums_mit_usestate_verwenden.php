<!doctype html>
<html>

<head>
    <link rel="stylesheet" href="styles/mainstyle.css">
    <title>dev.audiomixing.de - Enums mit useState verwenden</title>
</head>

<body>
    <h3><a href="./enums_mit_usestate_verwenden.php">Enums mit useState verwenden</a>
        <img src="./images/logo_react.png" class="logo" />
    </h3>

    Typescript behandelt enums, wenn diese nicht in Hochkomma gesetzt sind, als numbers. Daher muss man, wenn man enums
    in useState verwenden m&ouml;chte diese als numbers casten.
    <pre><code>
enum loginStatus {
    isNotLoggedIn,
    isLoggingIn,
    isLoggedIn
    }

    const [status, setStatus] = useState&lt;numbers&gt;(isNotLoggedIn);
    if (status == isLoggedIn) {
    /// Your Code
    }            
        </code></pre>
</body>

</html>