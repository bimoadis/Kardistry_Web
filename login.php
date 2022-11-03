<?php

require_once("confiq.php");

if (isset($_POST['login'])) {

    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
    $admin = "SELECT * FROM users WHERE admin";

    $sql = "SELECT * FROM users WHERE username=:username OR email=:email";
    $stmt = $db->prepare($sql);

    // bind parameter ke query
    $params = array(
        ":username" => $username,
        ":email" => $username
    );

    $stmt->execute($params);

    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    // jika user terdaftar
    if ($user) {
        // verifikasi password
        if (password_verify($password, $user["password"])) {
            if ($user['admin'] == 1) {
                session_start();
                $_SESSION["user"];
                header("Location: admin/index.php");
            } else {
                // buat Session
                session_start();
                $_SESSION["user"] = $user;
                // login sukses, alihkan ke halaman timeline
                header("Location: timeline.php");
            }
        }
    }
}
?>
<?php
/* 
| Developed by: Tauseef Ahmad
| Last Upate: 13-12-2020 04:46 PM
| Facebook: www.facebook.com/ahmadlogs
| Twitter: www.twitter.com/ahmadlogs
| YouTube: https://www.youtube.com/channel/UCOXYfOHgu-C-UfGyDcu5sYw/
| Blog: https://ahmadlogs.wordpress.com/
 */

require_once 'konekFB.php';

$permissions = ['email']; //optional

if (isset($accessToken)) {
    if (!isset($_SESSION['facebook_access_token'])) {
        //get short-lived access token
        $_SESSION['facebook_access_token'] = (string) $accessToken;

        //OAuth 2.0 client handler
        $oAuth2Client = $fb->getOAuth2Client();

        //Exchanges a short-lived access token for a long-lived one
        $longLivedAccessToken = $oAuth2Client->getLongLivedAccessToken($_SESSION['facebook_access_token']);
        $_SESSION['facebook_access_token'] = (string) $longLivedAccessToken;

        //setting default access token to be used in script
        $fb->setDefaultAccessToken($_SESSION['facebook_access_token']);
    } else {
        $fb->setDefaultAccessToken($_SESSION['facebook_access_token']);
    }


    //redirect the user to the index page if it has $_GET['code']
    if (isset($_GET['code'])) {
        header('Location: ./');
    }


    try {
        $fb_response = $fb->get('/me?fields=name,first_name,last_name,email');
        $fb_response_picture = $fb->get('/me/picture?redirect=false&height=200');

        $fb_user = $fb_response->getGraphUser();
        $picture = $fb_response_picture->getGraphUser();

        $_SESSION['fb_user_id'] = $fb_user->getProperty('id');
        $_SESSION['fb_user_name'] = $fb_user->getProperty('name');
        $_SESSION['fb_user_email'] = $fb_user->getProperty('email');
        $_SESSION['fb_user_pic'] = $picture['url'];
    } catch (Facebook\Exceptions\FacebookResponseException $e) {
        echo 'Facebook API Error: ' . $e->getMessage();
        session_destroy();
        // redirecting user back to app login page
        header("Location: ./");
        exit;
    } catch (Facebook\Exceptions\FacebookSDKException $e) {
        echo 'Facebook SDK Error: ' . $e->getMessage();
        exit;
    }
} else {
    // replace your website URL same as added in the developers.Facebook.com/apps e.g. if you used http instead of https and you used
    $fb_login_url = $fb_helper->getLoginUrl('http://localhost/Kardistry-1/timeline.php', $permissions);
}
?>
<!doctype html>
<html lang="en">

<head>
    <title>Login 10</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/login.css">

</head>

<body class="img js-fullheight" style="background-image: url(img/login.jpg);">
    <section class="ftco-section">
        <div class="container-fluid">
            <div class="container " style="background-color: rgba(0, 0, 0, 0.55); margin: auto;height:520px;">
                <div class="row justify-content-center">
                    <div class="col-md-6 text-center mb-5">
                        <h2 class="heading-section" style="padding:20px;">Ayo Bergabung</h2>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-6 col-lg-4">
                        <div class="login-wrap p-0">
                            <p class="mb-4 ">Belum punya akun? <a href="register.php">Daftar di sini</a></p>
                            <form action="#" class="signin-form" method="POST">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="username" placeholder="Username atau email" required>
                                </div>
                                <div class="form-group">
                                    <input id="password-field" type="password" class="form-control" name="password" placeholder="Password" required>
                                    <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="form-control btn btn-primary submit px-3" name="login" value="Masuk" style="color: teal;">Sign In</button>
                                </div>
                                <div class="form-group d-md-flex">
                                    <div class="w-50">

                                    </div>
                                    <div class="w-50 text-md-right">

                                    </div>
                                </div>
                            </form>
                            <p class="w-100 text-center">&mdash; Or Sign In With &mdash;</p>
                            <div class="social d-flex text-center">
                                <a href="<?php echo $fb_login_url; ?>" class="px-2 py-2 mr-md-1 rounded"><span class="ion-logo-facebook mr-2"></span> Facebook</a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>

</body>

</html>